<?php
  $projetos = $model->result('SELECT * FROM projetos');
?>

<section class="page-header-section set_bg" data-setbg="img/header-bg.jpg">
	<div class="container">
		<h1 class="header-title">Obras<span>.</span></h1>
	</div>
</section>
<div class="wpp-link"><a target="_blank" href="https://www.facebook.com/PERMAREPVC"><img src="img/facebook_logo.png" alt=""></a><a target="_blank" href="https://www.instagram.com/permareesquadrias/"><img src="img/instagram-logo.png" alt=""></a><a target="_blank" href="https://api.whatsapp.com/send?phone=5554991063645"><img src="img/wpp-link.png" alt=""></a></div>
<div style="margin-top: 5vh;" class="projects-section pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title">
						<h1>Projetos</h1>
					</div>
				</div>
			</div>
		</div>                      
		<div id="projects-carousel" class="projects-slider">
			<?php 
			if(isset($projetos)){
				foreach ($projetos as $key => $projeto) { 
					$img = $projeto->projeto_foto;?>
					<div class="single-project set_bg rest" data-setbg="painel/assets/images/<?php echo $img; ?>">
						<div class="project-content"></div>
					</div>
			<?php }} ?>
		</div>
	</div>