<?php
	require_once '_top.php';
	require_once '_includes/db_connect.php';
	$sql = "select * from site_info";
	$query = $mysqli->query($sql);		
	$resultado = mysqli_fetch_assoc($query);
	$end_omega = $resultado['omega_endereco'];
	$tel_omega = $resultado['omega_telefone'];
	$mail_omega = $resultado['omega_email'];
	$case_texto = $resultado['home_projeto_'.$_SESSION['lng']];

	$query->close(); 
?>
	<!-- INDEX_TOP START -->
	<!-- Important Owl stylesheet -->
		<link rel="stylesheet" href="_res/product_slider/assets/css/owl.carousel.css">
		<!-- Default Theme -->
		<link rel="stylesheet" href="_res/product_slider/assets/css/owl.theme.css">
		<!-- Include js plugin -->
		<script src="_res/product_slider/assets/js/owl.carousel.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
		  $("#owl").owlCarousel({
			autoPlay: 3000,
			items : 5
		  });
		});
		</script>
	<!--END SLIDER IMAGES OWL-->	
	<!-- top e menu -->

	<!-- INDEX_TOP END -->
	<!-- SLIDER START -->
	<?php include 'index_slider.php'; ?>
	<!--SLIDER END--> 
	<!--START BODY--> 
	<!-- PRODUTOS Section -->
	<section id="produtos">
	  <div class="container">
		<div class="row-fluid">
			<div class="col-md-12" style="padding-left: 0px !important">
			<!--HR DA SESSÃO-->
			<hr class="produtos_hr">
			<!--PRODUTOS-->
			<h3 class="produtos_session" data-i18n="index.produtos">PRODUTOS</h3>
			</div>
		</div>	    
		<div class="row-fluid">
			<div id="owl" class="owl-carousel">
			<?php 
			$sql_aplic = "select * from at_aplicacao where id_aplicacao <> -1 order by `nm_aplicacao_pt-BR`";
			$query = $mysqli->query($sql_aplic);	
			$dir_img = 'aplicacao_'.$_SESSION['lng'];
				
			while ($resultado = mysqli_fetch_assoc($query)){
			echo "<div class=\"item\" style=\"padding: 10px\"><a href=\"produtos_filtro.php?id_aplic={$resultado['id_aplicacao']}\">
					<img src=\"_res/img/home/{$dir_img}/{$resultado['img_aplicacao']}\" class=\"img-responsive thumbnail center-block\"></a>
					</div>";
					//$i++;
						 // divide $i por 6 e pega o resto. se for igual a 0 echo.
						 //if ($i % 6 == 0){
							//echo "</div>
								//<div class=\"row-fluid\" style=\"margin-top:30px;\">";
						 // }
			}
			//$query->close();
			?>
			</div>
		</div> 
	  </div>
	</section>
	<!-- END PRODUTOS Section --> 
	<!--PARALLAX PROJECT-->
	<section id="parallaxBar" data-speed="6" data-type="background">
	  <div class="container">
	  	<div class="row-fluid">
	    	<div class="col-md-12" style="padding-left: 0px !important">
			<!--HR DA SESSÃO-->
			<hr class="projetos_hr">
			<!--PRODUTOS-->
			<h3 class="projetos_session">Cases</h3>
			<div class="col-md-6"  style="padding-left: 0px !important">
				<h4 class="white" style="padding-top: 20%"><?php echo $case_texto; ?></h4>
			</div>
			<div class="col-md-12">
				<p class="text-center" style="padding-top: 15%; padding-left:50%"><a href="projetos.php"><img src="_res/img/icons/enter.png"></a></p>
			</div>
			</div>
		</div>
	 </div>
	</section>
	<!--PARALLAX PROJECT--> 
	<!--PARALLAX CONTACT-->
	<section id="parallaxcontact" data-speed="6" data-type="background">
	 <div class="container">
		<div class="row-fluid">
			<div class="col-md-12"  style="padding-left: 0px !important">
			<!--HR DA SESSÃO-->
			<hr class="contato_hr">
			<!--CONTATO-->
			<h3 class="contato_session" data-i18n="index.contato">CONTATO</h3>
			</div>
		</div>
	  <div class="row-fluid"  style="padding-left: 0px !important">
	    <div class="col-md-6"   style="padding-left: 0px !important">
			<h4 class="white" data-i18n="index.endereco">Endereço</h4>
			<h4 class="white"><?php echo $end_omega; ?></h4>
			<h4><a href="mailto:<?php echo $mail_omega; ?>" class="white"><?php echo $mail_omega; ?></a></h4>
			<br><br><br><br>
			<h4 class="white">Trabalhe Conosco</h4>
			<h4 class="white">Quer fazer parte da nossa equipe?</h4>
			<h4 class="white">Envie um e-mail com seu currículo para:</h4>
			<h4 class="white"><a href="mailto:rh@omegalight.com.br" class="white">rh@omegalight.com.br</a></h4>
			</div>
	    <div class="col-md-6" style="margin-top: 20px"> 
	      <form name="parceiros_cadastro" id="contactForm" action="_includes/envia_formmail.php" method="POST">
	      	<div class="form-group">
	      		<input type="text" class="form-control" data-i18n="[placeholder]index.nome" name="nome" placeholder="Nome*" required >
            	</div>
            	<div class="form-group">
              		<input type="text" class="form-control" data-i18n="[placeholder]index.email" name="email" placeholder="Email*" required>
            	</div>
            	<div class="form-group">
              		<input type="tel" class="form-control" data-i18n="[placeholder]contato.telefone" name="telefone" placeholder="Telefone*" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" required>
				  <script type="text/javascript">
					//<![CDATA[
					jQuery(document).ready(function() {
						//Inicio Mascara Telefone
						jQuery('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
							var target, phone, element;
							target = (event.currentTarget) ? event.currentTarget : event.srcElement;
							phone = target.value.replace(/\D/g, '');
							element = $(target);
							element.unmask();
							if(phone.length > 10) {
								element.mask("(99) 99999-999?9");
							} else {
								element.mask("(99) 9999-9999?9");
							}
						});
						//Fim Mascara Telefone
						//Inicio Mascara RG
						jQuery("#rg").mask("99.999.999-*");
						//Fim Mascara CPF
						//Inicio Mascara CPF
						jQuery("#cpf").mask("999.999.999-99");
						//Fim Mascara CPF
					});
					(jQuery);
					//]]>
					</script>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" data-i18n="[placeholder]index.assunto" placeholder="Assunto*" name="assunto" required>
            </div>
            <div class="form-group">
              <select class="form-control" placeholder="falarcom" name="falarcom" required>
                <option value="<?php echo $mail_omega; ?>"   data-i18n="index.selecione_departamento">Selecione o departamento</option>
                <option value="vendas@omegalight.com.br"     data-i18n="index.comercial">Comercial</option>
                <option value="marketing@omegalight.com.br"  data-i18n="index.marketing">Marketing</option>
                <option value="adm@omegalight.com.br" 		 data-i18n="index.administrativo">Administrativo</option>
                <option value="financeiro@omegalight.com.br" data-i18n="index.financeiro">Financeiro</option>
                <option value="hiroshi@omegalight.com.br"    data-i18n="index.compras">Compras</option>
            </select>
            </div>
            <!--<div class="form-group">
             	 <input type="text" class="form-control" placeholder="Cargo/Ocupação" name="cargo">
            </div>-->
			<div class="form-group">
				 <input type="textarea" class="form-textarea" data-i18n="[placeholder]index.mensagem" name="mensagem" placeholder="Mensagem*" height="150px" required>
            </div>
        		<button type="submit" class="btn btn-xl" style="margin-top: 20px;" data-i18n="index.enviar_mensagem">Enviar Mensagem</button>
      </form>
	    </div>
	  </div>
	 </div>
	</section>
	<!--PARALLAX CONTACT--> 
	<!--END BODY-->
	<!--START INDEX_BOT-->
	<!--Bottom "sitemap" -->
	<?php include '_bot.php'; ?>
	<!--END INDEX_BOT-->
