<?php  
	$portifolio_itens = $model->result('SELECT * FROM portifolio');
?>	
	
<!-- Page header section start -->
	<section class="page-header-section set_bg" data-setbg="img/header-bg.jpg">
		<div class="container">
			<h1 class="header-title">Showroom<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->
<div class="clear"></div>
<div class="wpp-link"><a target="_blank" href="https://www.facebook.com/PERMAREPVC"><img src="img/facebook_logo.png" alt=""></a><a target="_blank" href="https://www.instagram.com/permareesquadrias/"><img src="img/instagram-logo.png" alt=""></a><a target="_blank" href="https://api.whatsapp.com/send?phone=5554991063645"><img src="img/wpp-link.png" alt=""></a></div>
<!-- Page section start -->
<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				<li class="filter" data-filter="*">Tudo</li>
				<li class="filter" data-filter=".Porta-Pivotante">Portas Pivotantes</li>
				<li class="filter" data-filter=".Porta-Externa">Portas Externas</li>
				<li class="filter" data-filter=".Porta-Interna">Portas Internas</li>
				<li class="filter" data-filter=".Janelao-de-Correr">Janelão de Correr</li>
				<li class="filter" data-filter=".Janelas-de-Correr">Janelas de Correr</li>
				<li class="filter" data-filter=".Janelas-Oscilo-Batente">Janelas Oscilo Batentes</li>
				<li class="filter" data-filter=".Janela-Maxim-Air">Janelas Maxim Air</li>
				<li class="filter" data-filter=".Janelas-Giro">Janelas Giro</li>
				<li class="filter" data-filter=".Janelas-Giro-Duplo">Janelas Giro Duplo</li>
			</ul>
		</div>
		<!-- portfolio items -->
		<div class="portfolio-warp spad">
			<div id="portfolio">
				<div class="grid-sizer"></div>
					<?php foreach ($portifolio_itens as $key => $portifolio_item) { $img= $portifolio_item->foto; ?>
						<!-- portfolio item -->
						<div class="grid-item set_bg <?php echo $portifolio_item->foto_grid; ?> <?php echo $portifolio_item->foto_categoria; ?>" data-setbg="painel/assets/images/<?php echo $img; ?>"><a class="img-popup" href="painel/assets/images/<?php echo $portifolio_item->foto; ?>"></a></div>
					<?php } ?>
			</div>
		</div>
	</div>
	<!-- Page section end -->