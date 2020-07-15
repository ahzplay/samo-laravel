<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array('country_id'=>96, 'name'=>'Aceh'),
            array('country_id'=>96, 'name'=>'Bali'),
            array('country_id'=>96, 'name'=>'Banten'),
            array('country_id'=>96, 'name'=>'Bengkulu'),
            array('country_id'=>96, 'name'=>'Gorontalo'),
            array('country_id'=>96, 'name'=>'Jakarta'),
            array('country_id'=>96, 'name'=>'Jambi'),
            array('country_id'=>96, 'name'=>'Jawa Barat'),
            array('country_id'=>96, 'name'=>'Jawa Tengah'),
            array('country_id'=>96, 'name'=>'Jawa Timur'),
            array('country_id'=>96, 'name'=>'Kalimantan Barat'),
            array('country_id'=>96, 'name'=>'Kalimantan Selatan'),
            array('country_id'=>96, 'name'=>'Kalimantan Tengah'),
            array('country_id'=>96, 'name'=>'Kalimantan Timur'),
            array('country_id'=>96, 'name'=>'Kalimantan Utara'),
            array('country_id'=>96, 'name'=>'Bangka Belitung'),
            array('country_id'=>96, 'name'=>'Kepulauan Riau'),
            array('country_id'=>96, 'name'=>'Lampung'),
            array('country_id'=>96, 'name'=>'Maluku'),
            array('country_id'=>96, 'name'=>'Maluku Utara'),
            array('country_id'=>96, 'name'=>'Nusa Tenggara Barat'),
            array('country_id'=>96, 'name'=>'Nusa Tenggara Timur'),
            array('country_id'=>96, 'name'=>'Papua'),
            array('country_id'=>96, 'name'=>'Papua Barat'),
            array('country_id'=>96, 'name'=>'Riau'),
            array('country_id'=>96, 'name'=>'Sulawesi Barat'),
            array('country_id'=>96, 'name'=>'Sulawesi Selatan'),
            array('country_id'=>96, 'name'=>'Sulawesi Tengah'),
            array('country_id'=>96, 'name'=>'Sulawesi Tenggara'),
            array('country_id'=>96, 'name'=>'Sulawesi Utara'),
            array('country_id'=>96, 'name'=>'Sumatera Barat'),
            array('country_id'=>96, 'name'=>'Sumatera Selatan'),
            array('country_id'=>96, 'name'=>'Sumatera Utara'),
            array('country_id'=>96, 'name'=>'Yogyakarta'),

        );

        foreach ($datas as $val) {
            DB::table('provinces')->insert([
                'country_id' => $val['country_id'],
                'name' => $val['name'],
                'created_at' => now()
            ]);
        }
    }
}
