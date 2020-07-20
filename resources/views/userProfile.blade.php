@extends('base.adminLte')
@section('head-add-on')
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">

    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 1244.0625px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profil Mitra Tani</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#datapribadi" data-toggle="tab">Rekening Bank</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#produktani" data-toggle="tab">Data Pribadi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#dokumen" data-toggle="tab">Dokumen</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="produktani">
                                        <div class="form-group row">
                                            <div class="col-sm-2" id="div-btnbatalUbahFormProdukTani" style="display:none;">
                                                <button id="btn-batalUbahFormProdukTani" type="input" class="btn btn-danger btn-block" >Batal</button>
                                            </div>
                                            <div class="col-sm-2">
                                                <button id="btn-ubahFormProdukTani" type="input" class="btn btn-success btn-block">Ubah</button>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" id="form-profile">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="2" ></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Provinsi</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Kota/Kabupaten</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Kecamatan</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Kelurahan/Desa</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success btn-block" disabled>Konfirmasi Perubahan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="active tab-pane"  id="datapribadi">
                                        <table id="dg2" title="Daftar rekening bank"
                                               toolbar="#toolbar" pagination="true" idField="id"
                                               rownumbers="true" fitColumns="true" singleSelect="true">
                                            <thead>
                                            <tr>
                                                <th field="seed_type" width="40" editor="{type:'validatebox',options:{required:true}}">Jenis Bibit</th>
                                                <th field="seed_source" width="70" editor="{type:'validatebox',options:{required:false}}">Sumber Bibit</th>
                                                <th field="plant_start_date" width="30" editor="{type:'datebox',options:{required:false}}">Tanggal Tanam</th>
                                                <th field="agri_source" width="60" editor="{type:'validatebox',options:{required:false,validType:'email'}}">Sumber Buah</th>
                                            </tr>
                                            </thead>
                                        </table>
                                        <div id="toolbar">
                                            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
                                            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
                                            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
                                            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
                                        </div>
                                        {{--<form class="form-horizontal" id="form-produkTani" name="form-produkTani">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Jenis Bibit</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="jenisBibit" name="jenisBibit">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-3 col-form-label">Sumber Bibit</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="sumberBibit" name="sumberBibit">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-3 col-form-label">Sumber buah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-3 col-form-label">Catatan</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="inputExperience" rows="4" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success btn-block">Konfirmasi Perubahan</button>
                                                </div>
                                            </div>
                                        </form>--}}
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="dokumen">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default color-palette-box">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="nav-icon fas fa-seedling"></i>
                                    Produk Tani
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="dg" title="Daftar hasil pertanian sawit"
                                       toolbar="#toolbar" pagination="true" idField="id"
                                       rownumbers="true" fitColumns="true" singleSelect="true">
                                    <thead>
                                    <tr>
                                        <th field="seed_type" width="40" editor="{type:'validatebox',options:{required:true}}">Jenis Bibit</th>
                                        <th field="seed_source" width="70" editor="{type:'validatebox',options:{required:false}}">Sumber Bibit</th>
                                        <th field="plant_start_date" width="30" editor="{type:'datebox',options:{required:false}}">Tanggal Tanam</th>
                                        <th field="agri_source" width="60" editor="{type:'validatebox',options:{required:false,validType:'email'}}">Sumber Buah</th>
                                    </tr>
                                    </thead>
                                </table>
                                <div id="toolbar">
                                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection

@section('js-add-on')
    <script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>

    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script>
    <script>
        $( document ).ready(function() {
            $("#form-profile :input").attr("disabled", true);

            $("#btn-ubahFormProdukTani").click(function () {
                $("#form-profile :input").attr("disabled", false);

                $("#btn-ubahFormProdukTani").hide();
                $("#div-btnbatalUbahFormProdukTani").show();
            });

            $("#btn-batalUbahFormProdukTani").click(function () {
                $("#form-profile :input").attr("disabled", true);

                $("#btn-ubahFormProdukTani").show();
                $("#div-btnbatalUbahFormProdukTani").hide();
            })
        });

        $(function(){
            $('#dg').edatagrid({
                url: '{{url('/getProdukTani')}}',
                saveUrl: '{{url('/addProdukTani')}}',
                updateUrl: 'update_user.php',
                destroyUrl: '{{url('/deleteProdukTani')}}',

            });
        });

        $(function(){
            $('#dg2').edatagrid({
                url: '{{url('/getProdukTani')}}',
                saveUrl: '{{url('/addProdukTani')}}',
                updateUrl: 'update_user.php',
                destroyUrl: '{{url('/deleteProdukTani')}}',

            });
        });

        $(function(){
            $('#dg2').edatagrid({
                url: '{{url('/getProdukTani')}}',
                saveUrl: '{{url('/addProdukTani')}}',
                updateUrl: 'update_user.php',
                destroyUrl: '{{url('/deleteProdukTani')}}',

            });
        });

        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
        });

    </script>
@endsection
