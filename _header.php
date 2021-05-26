<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";
if(!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website admin ini di buat untuk memudahkan admin dalam memantau dan meninjau sebuah website, yaitu website ticketing online, jadi begitu ya agan semuanya">
    <meta name="author" content="Dhimas Marwahyu">
    <title>Dhitravel.com | Admin Page</title>
    <!-- script Bootstrap 3 -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
    <!-- script CSS -->
    <link href="<?=base_url('_assets/css/admin-style.css');?>" rel="stylesheet">
    <!-- script Font Awesome 4 -->
    <link href="<?=base_url('_assets/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/icon_login.png')?>">
</head>
<body>
    <!-- script jquery -->
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <!-- script javascript -->
	<script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/Button-1.5.6/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
    <!-- sidebar / kiri -->
	<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="" style="color: white"><b>Dhitravel.com</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                </li>
                <?php if ($_SESSION['level'] == 'admin'): ?>
                    <li>
                        <a href="<?=base_url('page-admin/penumpang/data.php')?>"><i class="glyphicon glyphicon-briefcase"></i> Penumpang</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-admin/pemesanan/data.php')?>"><i class="glyphicon glyphicon-calendar"></i> Pemesanan</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-admin/rute/data.php')?>"><i class="glyphicon glyphicon-road"></i> Rute</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-admin/transportasi/data.php')?>"><i class="fa fa-automobile"></i> Transportasi</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-admin/typetransportasi/data.php')?>"><i class="glyphicon glyphicon-th-list"></i> Type Transportasi</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-admin/petugas/data.php')?>"><i class="glyphicon glyphicon-user"></i> Petugas</a>
                    </li>
                <?php elseif ($_SESSION['level'] == 'petugas'): ?>
                    <li>
                        <a href="<?=base_url('page-petugas/penumpang/data.php')?>"><i class="glyphicon glyphicon-briefcase"></i> Penumpang</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-petugas/pemesanan/data.php')?>"><i class="glyphicon glyphicon-calendar"></i> Pemesanan</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-petugas/rute/data.php')?>"><i class="glyphicon glyphicon-road"></i> Rute</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-petugas/transportasi/data.php')?>"><i class="fa fa-automobile"></i> Transportasi</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-petugas/typetransportasi/data.php')?>"><i class="glyphicon glyphicon-th-list"></i> Type Transportasi</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-petugas/petugas/data.php')?>"><i class="glyphicon glyphicon-user"></i> Petugas</a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?=base_url('page-admin/laporan/data.php')?>"><i class="glyphicon glyphicon-file"></i> Laporan</a>
                </li>                
                <li>
                    <a href="<?=base_url('page-user/index.php')?>" target="_blank"><i class="glyphicon glyphicon-eye-open"></i> Lihat Website</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>")"><span class="text-danger"><i class="glyphicon glyphicon-log-out"></i> Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">