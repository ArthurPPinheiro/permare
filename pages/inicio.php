<?php  
	$header_images = $model->result('SELECT * FROM header_inicio');
	$projetos = $model->result('SELECT * FROM projetos');
?>	
<!-- Hero section start -->
<section class="hero-section">
	<!-- left social link ber -->
	<div class="left-bar">
		<div class="left-bar-content">
			<div class="social-links">

			</div>
		</div>
	</div>
<!-- hero slider area -->
<div class="sobreposicao"></div>
<div class="hero-slider">
	<?php foreach ($header_images as $key => $header_image) { $img = $header_image->header_foto; ?>
			<div class="hero-slide-item set_bg" style="background-position: center;" data-setbg="painel/assets/images/<?php echo $img; ?>">
				<div class="slide-inner">	
				</div>
			</div>	
		<?php } ?>
		</div>
	</section>
	<!-- Hero section end -->

	<div class="wpp-link"><a target="_blank" href="https://www.facebook.com/PERMAREPVC"><img src="img/facebook_logo.png" alt=""></a><a target="_blank" href="https://www.instagram.com/permareesquadrias/"><img src="img/instagram-logo.png" alt=""></a><a target="_blank" href="https://api.whatsapp.com/send?phone=5554991063645"><img src="img/wpp-link.png" alt=""></a></div>
	<!-- Service section start -->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Nossos Produtos</h2>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/Pivotante.jpg" alt="">
						<br><br>
						<h3>Porta Pivotante</h3>
						<p style="display: block;">Possui sistema diferenciado, esse sistema gira em torno de um eixo vertical. Utilizadas em apartamentos ou casas, internamente ou externamente. Podendo ser construído em grandes vãos ofertando segurança.</p>
						<div class="limpa"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/porta-externa1.jpeg" alt="">
						<br><br>
						<h3>Porta de Giro</h3>
						<p style="display: block;">Proporciona um design inovador, ideal para entrada dos ambientes comerciais, residenciais ou industriais. Podem ofertar 100% de vedação de vedação de vento com o sistema de soleira.</p>
						<div class="limpa"></div>
						<br>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/janelao-de-correr2.jpg" alt="">
						<br><br>
						<h3>Janelão de Correr</h3>
						<p style="display: block;">Destacam-se por combinar com qualquer ambiente devido a versatilidade e praticidade. Utilizando fechamentos multi pontos que proporcionam maior segurança. O sistema se destaca em relação aos outros por ter enorme eficiência ou estanqueidade.</p>
						<div class="limpa"></div>
						<br>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/porta-interna1.png" alt="">
						<br><br>
						<h3>Portas Internas de WPC</h3>
						<p style="display: block;">São portas com um excelente custo benefício já que proporcionam excelente isolamento térmico e acústico, dispensam pintura e manutenção, tem um alto padrão de acabamento e são 100% recicláveis.</p>
						<div class="limpa"></div>
						<br>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/janela-de-correr2.jpeg" alt="">
						<br><br>
						<h3>Janela de Correr</h3>
						<p style="display: block;">Combina com qualquer ambiente devido a versatilidade e praticidade. Podem ser utilizados fechamentos multi pontos que proporcionam maior segurança ao ambiente aplicado. O sistema se destaca em relação a outros produtos por ter enorme efiência ou entanqueidade.</p>
						<div class="limpa"></div>
						<br>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="" alt="">
						<br><br>
						<h3>Janela de Giro</h3>
						<p style="display: block;">Maior capacidade em vedação de ventos, chuvas e sujeira. Proporciona mais ventilação e luminosidade. Alta segurança aliada a colocação do vidro adequado, torna-se uma janela anti vandalismo. Isolamento térmico e acústico superior às esquadrias de outros materiais.</p>
						<div class="limpa"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/Maxim-Air.jpg" alt="">
						<br><br>
						<h3>Janela Maxim Air</h3>
						<p style="display: block;">Atende as nescessidades de residências, comércios e industrias. O sistema proporciona ampla ventilação dos ambientes e facilita a limpeza da parte externa da folha com sua abertura ou ângulo de 90º. O modelo garante excelente vedação acústica e de estanqueidade.</p>
						<div class="limpa"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="service-box">
						<img class="img-inicio" src="img/janela-pivotante3.jpg" alt=""> 
						<br><br>
						<h3>Janela Oscilo Batente</h3>
						<p style="display: block;">Tem seu ponto forte como a vedação. O sistema oscilo batente proporciona ventilação ao ambiente com a abertura na parte superior, mantendo total segurança mesmo quando tombadas para dentro. Isso porque o travamento do sistema multi ponto proporciona maior segurança na sua utilização.</p>
						<div class="limpa"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="service-box">
						<img class="img-inicio" src="img/janela-de-correr2.jpeg" alt="">
						<br><br>
						<h3>Janela Integrada</h3>
						<p style="display: block;">Sistema de persiana integrada. As esteiras são construídas com palhetas em PVC. Proporciona isolamento térmico e acústico de alta performance. As micro perfurações nas palhetas proporciona o sistema de black-out com total privacidade.</p>
						<div class="limpa"></div>
					</div>
				</div>
			</div>
			<p><b>*</b> Janelas com opções de: persianas e/ou tela mosquiteira e/ou grade.</p>
		</div>
		
	</section>
	<!-- Service section end -->