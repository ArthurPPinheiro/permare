<?php 

	include_once 'classes/Model.php';

	$page = $_GET['page'] ? $_GET['page'] : 'inicio'; 

	include 'includes/config.php';

	include 'includes/navbar.php';

	$model = new Model();

	include 'pages/'.$page.'.php';

	include 'includes/footer.php'; 

?>