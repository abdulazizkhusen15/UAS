<?php 

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Alamat URL
define('URL', 'http://localhost/Si1/si-musicplayer-master/');

// Alamat folder Asset
define('ASSET', URL . 'layout/assets/');

// Memanggil vendor
require_once "vendor/autoload.php";
