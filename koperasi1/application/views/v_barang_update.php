<head>
    <!--pickers css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-datepicker/css/datepicker-custom.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-timepicker/css/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-colorpicker/css/colorpicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />
</head>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Barang
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Beranda</a>
                </li>
                <li>
                    <a href="#">Data Barang</a>
                </li>
                <li class="active">Edit Data Barang</li>
            </ul>
        </div>
        <!-- page heading end-->

         <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Ubah Data Barang
            <span class="tools pull-right">
                <a href="<?php echo base_url(); ?>javascript:;" class="fa fa-chevron-down"></a>
                <a href="<?php echo base_url(); ?>javascript:;" class="fa fa-times"></a>
             </span>
        </header>
                        <div class="panel-body">
                            <div class="form">

                                <form action="<?php echo base_url(); ?>c_barang/proses_edit" method="POST" class="cmxform form-horizontal adminex-form" enctype="multipart/form-data">
                                
                                <?php foreach($baranglist->result() as $barang):?>
                                

                                    <div class="form-group ">
                                        <label for="id_bencana" class="control-label col-lg-2">ID Barang</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="id_barang" value="<?php echo $barang->id_barang ?>" class="form-control" id="focusedinput" placeholder="ID Barang" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="nama_barang" class="control-label col-lg-2">Nama Barang</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama_barang" value="<?php echo $barang->nama_barang ?>" class="form-control" id="focusedinput" placeholder="Nama Barang">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="kategori_barang" class="control-label col-lg-2">Kategori Barang</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="kategori_barang" value="<?php echo $barang->kategori_barang ?>" class="form-control" id="focusedinput" placeholder="Kategori Barang">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="stok_gudang" class="control-label col-lg-2">Stok Gudang</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="stok_gudang" placeholder="Stok Gudang"   class="form-control" tabindex="5"  value="<?php echo $barang->stok_gudang ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="stok_toko" class="control-label col-lg-2">Stok Toko</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="stok_toko" placeholder="Stok Toko"   class="form-control" tabindex="5"  value="<?php echo $barang->stok_toko ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tanggal_pembuatan_barang" class="control-label col-lg-2">Tanggal Pembuatan</label>
                                        <div class="col-lg-10">
                                            <input type="date" name="tanggal_pembuatan_barang" value="<?php echo $barang->tanggal_pembuatan_barang ?>" class="form-control" id="focusedinput" placeholder="Tanggal Pembuatan">
                                        </div>
                                    </div>
									 <div class="form-group ">
                                        <label for="tanggal_kadaluarsa_barang" class="control-label col-lg-2">Tanggal Kadaluarsa</label>
                                        <div class="col-lg-10">
                                            <input type="date" name="tanggal_kadaluarsa_barang" value="<?php echo $barang->tanggal_kadaluarsa_barang ?>" class="form-control" id="focusedinput" placeholder="Tanggal Kadaluarsa ">
                                        </div>
                                    </div>
									 <div class="form-group ">
                                        <label for="max_persediaan_barang" class="control-label col-lg-2">Max Persediaan</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="max_persediaan_barang" value="<?php echo $barang->max_persediaan_barang ?>" class="form-control" id="focusedinput" placeholder="Max Persediaan">
                                        </div>
                                    </div>
									 <div class="form-group ">
                                        <label for="min_persediaan_barang" class="control-label col-lg-2">Min Persediaan</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="min_persediaan_barang" value="<?php echo $barang->min_persediaan_barang ?>" class="form-control" id="focusedinput" placeholder="Min Persediaan">
                                        </div>
                                    </div>
									 <div class="form-group ">
                                        <label for="isi_satuan" class="control-label col-lg-2">Satuan</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="isi_satuan" value="<?php echo $barang->isi_satuan ?>" class="form-control" id="focusedinput" placeholder="Satuan">
                                            <p class="help-block"><?php echo form_error('isi_satuan', '<p class="text-danger">', '</span>'); ?></p>
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="harga_beli" class="control-label col-lg-2">Harga Beli</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="harga_beli" value="<?php echo $barang->harga_beli ?>" class="form-control" id="focusedinput" placeholder="Harga Beli">
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="margin" class="control-label col-lg-2">Margin</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="margin" value="<?php echo $barang->margin ?>" class="form-control" id="focusedinput" placeholder="Margin">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="gambar" class="control-label col-lg-2">Gambar Barang</label>
                                        <div class="col-lg-10">
                                            <input type="file" name="gambar"   class="form-control" value="<?php echo $barang->gambar ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="deskripsi" class="control-label col-lg-2">Deskripsi Barang</label>
                                        <div class="col-lg-10">
                                            <textarea type="text" name="deskripsi" placeholder="Deskripsi Barang"   class="form-control" value="<?php echo $barang->deskripsi ?>" ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" name="submit" class="btn btn-success" value="Update">
                                        </div>
                                    </div>
                                    </div>
                                    <?php endforeach; ?>
                                    
                                </form> 
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

<!--pickers plugins-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<!--pickers initialization-->
<script src="<?php echo base_url();?>assets/js/pickers-init.js"></script>


<!--common scripts for all pages-->
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>