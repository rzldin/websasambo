<?php
//protect pages
$this->check_login->usercheck();
//Gabungan semua bagian halaman
require_once('head.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');