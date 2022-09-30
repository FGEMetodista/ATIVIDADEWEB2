			<div class="row dark-gray footer-row full-width padding-top-30 padding-bottom-50">
			<?php if(!isset($_GET["page"]) || ($_GET["page"]!="contact" && $_GET["page"]!="contact_2")):?>
				<div class="row padding-bottom-30">
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-location-map">
								<p>São Bernardo do Campo<br>
								São Paulo, Brasil</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-phone-circle">
								<p>Sinta-se à vontade para nos ligar agora!<br>
								(11) 9999-9999</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-truck-tow">
								<p>Assitência 24 Horas<br>
								(11) 9999-9999</p>
							</li>
						</ul>
					</div>
				</div>
			<?php endif; ?>
				<div class="row row-4-4<?php if($_GET["page"]!="contact" && $_GET["page"]!="contact_2"):?> top-border page-padding-top<?php endif;?>">
					<div class="column column-1-4">
						<h6 class="box-header">SOBRE NÓS</h6>
						<ul class="list simple margin-top-20">
							<li>Rudge Ramos, São Bernardo do Campo</li>
							<li>R. Alfeu Taváres, 149</li>
							<li><span>WhatsApp:</span>(11) 9 9999-9999</li>
							<li><span>Contato:</span>(520) 9999-9999</li>
							<li><span>Email:</span><a href="mailto:carservice@mail.com">petshopdmmg@mail.com</a></li>
						</ul>
						<ul class="social-icons gray margin-top-26">
							<li>
								<a target="_blank" href="https://facebook.com" class="social-facebook" title="facebook"></a>
							</li>
							<li>
								<a target="_blank" href="https://twitter.com" class="social-twitter" title="twitter"></a>
							</li>
							<li>
								<a target="_blank"  class="social-linkedin" title="linkedin"></a>
							</li>
							<li>
								<a href="https://pinterest.com" class="social-pinterest" title="pinterest"></a>
							</li>
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">OUTROS SERVIÇOS</h6>
						<ul class="list margin-top-20">
							<li class="template-bullet">Banho e tosa</li>
							<li class="template-bullet">Sistema leva e trás</li>
							<li class="template-bullet">Veterinário</li>
							<li class="template-bullet">Medicamentos</li>
							<li class="template-bullet">Vacinas</li>
							<li class="template-bullet">Consultas</li>
							
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">TAGS POPULARES</h6>
						<ul class="taxonomies margin-top-30">
							<li><a href="?page=category&amp;cat=belts" title="BELTS">BANHO</a></li>
							<li><a href="?page=category&amp;cat=brakes" title="BRAKES">TOSA</a></li>
							<li><a href="?page=category&amp;cat=diagnostics" title="DIAGNOSTICS">LEVAETRAS</a></li>
							<li><a href="?page=category&amp;cat=engine" title="ENGINE">MEDICAMENTOS</a></li>
							<li><a href="?page=category&amp;cat=filters" title="FILTERS">CONSULTA</a></li>
							<li><a href="?page=category&amp;cat=heating" title="HEATING">VETERINARIO</a></li>
							<li><a href="?page=category&amp;cat=oils" title="OILS">VACINA</a></li>
							
						</ul>
					</div>
					<div class="column column-1-4">
						<h6 class="box-header">HORÁRIO DE ATENDIMENTO</h6>
						<ul class="list simple margin-top-20">
							<li><span>Segunda:</span>7:30 - 17:30</li>
							<li><span>Terça:</span>7:30 - 17:30</li>
							<li><span>Quarta-Feira:</span>7:30 - 17:30</li>
							<li><span>Quinta-feira:</span>7:30 - 17:30</li>
							<li><span>Sábado:</span>7:30 - 15:30</li>
							<li><span>Domingo:</span>Fechado</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row align-center padding-top-bottom-30">
				<span class="copyright">© Copyright 2022 <a  title="Carservice Template" target="_blank">Pet Shop DMMG</a> Por <a  title="QuanticaLabs" target="_blank">DMMG</a></span>
			</div>
		</div>
		<a href="#top" class="scroll-top animated-element template-arrow-up" title="Scroll to top"></a>
		<div class="background-overlay"></div>
		<!--js-->
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
		<!--slider revolution-->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.12.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.hint.min.js"></script>
		<script type="text/javascript" src="js/jquery.costCalculator.min.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.min.js"></script>
		<script type="text/javascript" src="js/jquery.imagesloaded-packed.js"></script>
		<?php if($_GET["page"]=="appointment" || $_GET["page"]=="contact" || $_GET["page"]=="contact_2"):?>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
		<?php endif; ?>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
		<?php
		//require_once("style_selector/style_selector.php");
		?>
	</body>
</html>