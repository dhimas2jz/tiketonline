<?php include_once('../_header.php'); ?>

	<div class="row">
	    <div class="col-lg-12">
	        <h1>Dashboard</h1>
	        <hr>
	<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_pemesanan")); ?></div>
                                        <div>Pemesanan</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../page-admin/pemesanan/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_penumpang")); ?></div>
                                        <div>Data Penumpang</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../page-admin/penumpang/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-automobile fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_penumpang")); ?></div>
                                        <div>Data Transportasi</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../page-admin/transportasi/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_penumpang")); ?></div>
                                        <div>Data Petugas</div>
                                    </div>
                                </div>
                            </div>
<!-- footer -->
                            <a href="../page-admin/petugas/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
	    </div>
	</div>

<?php include_once('../_footer.php'); ?>