<?php
include "db.php"; 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Invictius</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen navigation and sections control menu." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="fullpage/fullpage.css" />
  <link rel="stylesheet" type="text/css" href="../css/app.css"/>
  <link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
  <link rel="stylesheet" type="text/css" href="../css/card.css"/>
  <link rel="stylesheet" type="text/css" href="../css/modal.app.css"/>
  <link rel="stylesheet" type="text/css" href="../css/modal_initial.css"/>
  <link rel="stylesheet" type="text/css" href="../css/mouse.css"/>
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<?php
include "./includes/header.php";
?>

<div id="fullpage">
    <!-- Initial page -->
      <?php 
      include "./includes/initial_page.php";
      ?>

    <!-- Services -->
      <?php
      include "./includes/services.php";
      ?>
        <!-- Comments -->
  <div class="section" id="section2">
		<div class="intro">
        <div class="comments-top" id="comments">
          <h1>Rekli su o nama</h1>
          <h2>Tekst</h2>
        </div>
        
    <?php
    include "./includes/comment_card.php"
    ?>
 

    <!-- Clients -->

  <div class="section" id="section4">
		  <div class="intro">
        <div class="clients-top" id="clients">
          <h1>Klijenti</h1>
          <img class="bannerClients" src="../images/banner_clients.png" alt="">
        </div>
      </div>
      <div id="logo">
        <img class="clients_logo"src="../images/clients.png" alt="">
      </div>
  </div>
 

</div>

<script type="text/javascript" src="fullpage/fullpage.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage', '4rdPage', '5rdPage', '6rdPage'],
        sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'],
        navigation: true,
        navigationPosition: 'right',
     /*    navigationTooltips: ['First page', 'Second page', 'Third and last page'], */
        responsiveWidth: 900,
        afterResponsive: function(isResponsive){

        }

    });
</script>

<script src="../js/fadein.js"></script>

<script src="../js/navbar_toggle.js">></script>
<script src="../js/modal.js">></script>
<script src="../js/hide_header.js">></script>
<script src="../js/modal_initial.js">></script>
</body>
</html>