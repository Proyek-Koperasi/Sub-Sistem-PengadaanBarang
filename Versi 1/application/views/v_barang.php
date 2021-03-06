 <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Barang
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Beranda</a>
                </li>
                <li class="active">Data Barang </li>
            </ul>
        </div>
        <!-- page heading end-->

         <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Data Barang
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
            <a href="<?php echo base_url();?>c_barang/tambah" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
        	<th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Stok Gudang</th>
            <th>Stok Toko</th>
            <!-- <th>Tanggal Pembuatan</th>
            <th>Tanggal Kadaluarsa</th>
            <th>Max Persediaan</th>
            <th>Min Persediaan</th> -->
            <!-- <td><?php echo $barang->tanggal_pembuatan_barang; ?></td>
            <td><?php echo $barang->tanggal_kadaluarsa_barang; ?></td>
            <td><?php echo $barang->max_persediaan_barang; ?></td>
            <td><?php echo $barang->min_persediaan_barang; ?></td> -->
            <th>Isi Satuan</th>
            <th>Harga Beli</th>
            <th>Margin</th>  
            <th>Gambar</th>
            <!-- <th>Deskripsi</th> 
            <td><?php echo $barang->deskripsi; ?></td>  -->      
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($baranglist as $barang) { ?>
        <tr>
        	<td><?php echo $no ?></td>
            <td><?php echo $barang->id_barang; ?></td>
            <td><?php echo $barang->nama_barang; ?></td>
            <td><?php echo $barang->kategori_barang; ?></td>
            <td><?php echo $barang->stok_gudang; ?></td>
            <td><?php echo $barang->stok_toko; ?></td>
            <td><?php echo $barang->isi_satuan; ?></td>
            <td><?php echo $barang->harga_beli; ?></td>
            <td><?php echo $barang->margin; ?></td>
            <td><img src="../../../koperasi/images/barang/<?php echo $barang->gambar; ?>" width='100px' height='100px'></td>
            
            <td>
                <a href="<?php echo base_url() ?>c_barang/detail/<?php echo $barang->id_barang; ?>" class="btn btn-info"><i class="glyphicon glyphicon-search icon-white"></i>  Lihat </a>
                <a href="<?php echo base_url() ?>c_barang/edit/<?php echo $barang->id_barang; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit icon-white"></i>  Ubah </a>
                <a href="<?php echo base_url() ?>c_barang/delete/<?php echo $barang->id_barang; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash icon-white"></i> Hapus</a>
            </td>
        </tr>
        <?php $no++;} ?>

        </tbody>
        </tfoot>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>