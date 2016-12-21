 <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Transaksi
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Beranda</a>
                </li>
                <li class="active">Transaksi Pembelian </li>
            </ul>
        </div>
        <!-- page heading end-->

         <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Transaksi Pembelian
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
            <a href="<?php echo base_url();?>c_pembelian" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>No.</th>
            <th>Kode Transaksi</th>
            <th>Operator</th>
            <th>Supplier</th>
            <th>Tanggal Pembelian</th>
            <th>Total Pembelian</th>
            <th>Action</th>            
        </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($pembelianlist as $pb) { ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $pb->id_pembelian; ?></td>
                    <td><?php echo $pb->nama_admin; ?></td>
                    <td><?php echo $pb->nama_supplier; ?></td>
                    <td><?php echo $pb->tanggal_pembelian; ?></td>
                    <td><?php echo $pb->total_harga_pembelian; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>c_pembelian/detail/<?php echo $pb->id_pembelian; ?>" class="btn btn-info"><i class="glyphicon glyphicon-list-alt icon-white"></i>  Detail Transaksi </a>
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