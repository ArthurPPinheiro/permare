<!DOCTYPE html>
<html lang="en">
<head>
	<title>Permare</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="./css/bootstrap.min.css"/>
	<link rel="stylesheet" href="./css/font-awesome.min.css"/>
	<link rel="stylesheet" href="./css/animate.css"/>
	<link rel="stylesheet" href="./css/owl.carousel.css"/>
	<link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" href="./css/magnific-popup.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
  </div>
  
  <!-- Header section start -->   
  <header class="header-area">
    <a href="inicio" class="logo-area">
      <img src="img/logo.png" alt="">
    </a>
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
    <div class="phone-number">54 9 9106 3645</div>
    <nav class="nav-menu">
      <ul>
        <li <?php echo $page == 'inicio' ? 'class="active"' : ' '; ?>><a href="inicio">Início</a></li>
        <li <?php echo $page == 'empresa' ? 'class="active"' : ' '; ?>><a href="empresa">Empresa</a></li>
        <li <?php echo $page == 'produtos' ? 'class="active"' : ' '; ?>><a href="produtos">Produtos</a></li>
        <li <?php echo $page == 'showroom' ? 'class="active"' : ' '; ?>><a href="showroom">Showroom</a></li>
        <li <?php echo $page == 'contatos' ? 'class="active"' : ' '; ?>><a href="contatos">Contatos</a></li>
      </ul>
    </nav>
  </header>
  <!-- Header section end -->