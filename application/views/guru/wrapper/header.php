<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Sistem Informasi SMK Muhammadiyah Karangmojo">
    <meta name="author" content="Eko Cahyanto">
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.ico">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url("assets/sweetalert2/dist/sweetalert2.all.min.js"); ?>"></script>
    <link rel='stylesheet' href='<?= base_url("assets/sweetalert2/dist/sweetalert2.min.css");?>'>
</head>

<body style="background-image:url(<?=base_url("assets/frontend/assets/img/bg-new.jpeg");?>)" id=" page-top" onload="
tampilkanwaktu();
showDataPresensi(<?= $user['no_reg'];?>);
setInterval('tampilkanwaktu(), showDataPresensi(<?= $user['no_reg'];?>)', 1000)">