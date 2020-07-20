<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\ProcessUtils;

class UserProfileController extends Controller
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }

    public function index(){
        return view('userProfile');
    }

    public function  getProdukTani(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
        $offset = ($page-1)*$rows;
        $result = array();

        $rows = Product::count();
        $datas = Product::get();

        foreach ($datas as $val) {
            $mysqlDate = date_create(htmlspecialchars($val->plant_start_date));
            $date = date_format($mysqlDate, "d/m/Y");
            $val->plant_start_date = $date;
        }

        $result['total'] = $rows;
        $result['rows'] = $datas;

        echo json_encode($result);
    }

    public function addProdukTani(Request $req){
        $date = date_create(htmlspecialchars($req->plant_start_date));
        $mysqlDate = date_format($date, "Y-m-d");
        $fields = array(
            'seed_type' => htmlspecialchars($req->seed_type),
            'seed_source' => htmlspecialchars($req->seed_source),
            'plant_start_date' => $mysqlDate,
            'agri_source' => htmlspecialchars($req->agri_source),
        );
        $this->product->seed_type = $fields['seed_type'];
        $this->product->seed_source = $fields['seed_source'];
        $this->product->plant_start_date = $fields['plant_start_date'];
        $this->product->agri_source = $fields['agri_source'];
        $this->product->save();
        echo json_encode(array(
            'id' => $this->product->id,
            'seed_type' => $fields['seed_type'],
            'seed_source' => $fields['seed_source'],
            'plant_start_date' => $fields['plant_start_date'],
            'agri_source' => $fields['agri_source'],
        ));
    }

    public function deleteProdukTani(Request $req){
        Product::destroy($req->id);
        echo json_encode(array('success'=>true));

    }
}
