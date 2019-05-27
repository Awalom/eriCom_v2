<?php

function show($data) {
  echo' <pre>';
  print_r($data);
  echo '</pre>';
}

$get_page_name = $_GET['page_name'] ?? 'index';

$page_path = 'html/' . $get_page_name . '.html';

if(file_exists($page_path)) {
  $html_content = file_get_contents($page_path);
} else {
  $html_content = '<p style ="color: red;">. Error #404 </br> Page does not exist </p>';
}

// get data from json file

$site_data = file_get_contents('site-data.json');

$site_data_arr = json_decode($site_data,true);

// site-info date
$site_info = $site_data_arr['site_info'];

// pages info
$pages_info = $site_data_arr['pages'];


$menu_item = '';

foreach($pages_info as $key => $value) {

  $active = ($key == $get_page_name) ? ' active' : '';
  $menu_item .= '<li><a class="PX-1 PY-1 FW-500' . $active . ' " href="?page_name=' . $key . '">' . $value['menu'] . '</a></li>';
  
}



?>
<!DOCTYPE html>
<html lang="en">

<!-- header start here -->
<head>
  <!---- Header start here
  ===========================================================================-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--favicons link-->
  <link rel="apple-touch-icon" sizes="180x180" href="./asset/favicon/">
  <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon/favicon-16x16.png">
  <link rel="manifest" href="./asset/favicon/site.webmanifest">
  <link rel="shortcut icon" href="./asset/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#e3dfec">
  <meta name="msapplication-config" content="./asset/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- STYLE LINKS --------------------------------------------------------------->
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700">

  <!-- icomoon icons -->
  <link rel="stylesheet" href="./asset/icomoon/style.css">
  <!-- swiper style -->
  <link rel="stylesheet" href="./asset/css/swiper.min.css">
  <!-- animation link -->
  <link rel="stylesheet" href="./asset/css/animate.css">
  <!-- app stylesheet -->
  <link rel="stylesheet" href="./asset/css/style.css">
  
  <title>Home</title>
  <!---- Header end here
  =============================================================================-->
</head>
<!-- Header end here --> 



<body>
  <!---- Body start here
  ==================================-->


  <main id="container-main" class="P-1">

    <!-- Header start here -->
    <header id="header" class="FRD">
      <div id="logo" class="PX-1">
        <!--The logo of the communty first flex item fixed width and height-->
        <img src="./asset/images/logo_optimised.svg" alt="Comunity logo IER Com">
      </div>
      <nav id="nav" class="MB-1">
        <ul class="FRD">
          <?php echo $menu_item;?>
        </ul>
      </nav>
      <div id="nav-triggers">
        <a id="button-menu" class="menu-trigger"></i><i class="i-menu"></i></a>
      </div>
    </header>
    <!-- Header end here -->

    <!-- asside start here  -->
    <aside id="aside" class="MB-1">
        <div class="MB-3">
          <h1 class="AC PY-1">Important links</h1>
          <ul>
            <li><a class="DB" href="https://www.refugeecouncil.ch/ecre.htm">ECRE</a></li>
            <li><a class="DB" href="https://www.sem.admin.ch/sem/en/home.html">SEM</a></li>
            <li><a class="DB" href="https://www.police.be.ch/police/fr/index.html">Bern Police</a></li>
            <li><a class="DB" href="https://www.police.be.ch/">Bern Trafic</a></li>
            <li><a class="DB" href="https://www.caritas-bern.ch/">CARITAS</a></li>
            <li><a class="DB" href="https://www.heilsarmee-bern.ch/">HeilsArmee</a></li>
            <li><a class="DB" href="https://www.bernmobil.ch">Bern Mobile</a></li>
            <li><a class="DB" href="https://www.sbb.ch/en/home.html">SBB</a></li>
            <li><a class="DB" href="https://www.homegate.ch/rent/apartment">Appartments</a></li>
            <li><a class="DB" href="https://www.billag.ch">Billag</a></li>
          </ul>
        </div>
        <div class="">
          <h1 class="AC PY-1">Links to Eritrea</h1>
          <ul>
            <li><a class="DB" href="https://www.bbc.com/tigrinya">BCC Tigrina</a></li>
            <li><a class="DB" href="http://awate.com/">Awata news</a></li>
            <li><a class="DB" href="https://assenna.com/">Assena new</a></li>
            <li><a class="DB" href="www.meskerem.net/">Mesketen news</a></li>
            <li><a class="DB" href="www.shabait.com/">Shabait news</a></li>
            <li><a class="DB" href="https://www.asmarino.com/">Asmarino</a></li>
            <li><a class="DB" href="https://www.tesfanews.net/">Tesfa news</a></li>
          </ul>
        </div>
    </aside>
    <!-- ASIDE END HERE -->
    
   <!-- Content start Here -->
   <?php echo $html_content;?>
   <!-- Content End Here -->
   
    <!-- FOOTER START HERE -->
    <?php include('html/footer.html');?>
    <!-- FOOTER END HERE -->
   
  </main>

   


  <!---- Container end here
    ===================================================================-->


  <!---- JAVA SKRIP START HERE
  ===================================================================-->
  <!-- Jquery link -->
  <script src="./asset/js/jquery-3.4.1.min.js"></script>

  <!-- swipper script -->
  <script src="./asset/js/swiper.min.js"></script>

  <!--swiper skript  -->
  <script src="./asset/js/functions.js"></script>
  <!-- app script -->
  <script src="./asset/js/app.js"></script>

  <!-- Swipper script -->

</body>
<!---- Body end here
=======================================================================-->

</html>