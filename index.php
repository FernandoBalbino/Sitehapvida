<?php 

	

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cuide da sua família com o maior plano de saúde do Norte e Nordeste. Planos mais baratos. Clínicas de Referências.">
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--Fonte-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!--FontAwosome-->
	<script src="https://kit.fontawesome.com/e1f28f3225.js" crossorigin="anonymous"></script>
	<!--Estilo-->
	<link rel=stylesheet href="estilo/style.css">
	<!--Ícone-->
	<link rel="icon" href="imagens/favicon_0.png">

	<title>Hapvida - Planos de Saúde</title>
</head>
<body>

	<div class="bg-primary" id="contact-direct-mobile">
		WhatsApp: <a id="tel-whatssap" href="https://wa.me/5582988910499">(82) 8891.0499</a>

	</div>

	<div class="bg-primary" id="contact-direct">
		Marcação de Consultas e Exames: <a id="tel" href="tel:988910499">(82) 8891.0499</a> | WhatsApp: <a id="tel-whatssap" href="https://wa.me/5582988910499">(82) 8891.0499</a>

	</div>
	<header>
		<div id="menu-flex" class="container-fluid">
			<div class="logo">
				<img  class="img-fluid" src="imagens/logo_top_fase2.png" alt="logo_administração">
			</div>
			
				
			
			<nav class="" id="nav">
			    <ul>
			        <li><a id="home" href="index.php">Home</a></li><!--
			     --><li><a href="#sec-about">Sobre</a></li><!--
			     --><li><a href="#sec-services">Serviços</a></li><!--
			     --><li><a href="#sec-contact">Contato</a></li>
			    </ul>
			</nav>
		</div>

	</header>
	<main id="main">
		<section id="sec-introduction">
			<article>

				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div id class="col-md-6">
							<h1 class="display-3">Bem estar para <span>você</span> e sua <span>familía</span></h1>
							<p >Oferecemos os melhores planos de saúdes para você e sua familía viver com tranquilidade e mais segurança de forma fácil e rápida! Nossos planos oferece vários benefícios tais como atendimento 24hr, assistência médica, assistência odontológica e outros.</p>
							<a href="#sec-about"><button id="start" type="button">Começar</button></a>	
						</div>
						<div id="dotor_homem" class="col-md-6">
							<img class="img-fluid" src="imagens/dotor_homem.png" alt="homem médico">

						</div>
						<i id="seta" class="fas fa-angle-down"></i>

					</div>

				</div>

			</article>


		</section>


		<section id="sec-about">
			<article>
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<img class="img-fluid" src="imagens/sobre.svg" alt="">
						</div>
						<div class="col-md-6">
							<h2>HAPVIDA, DO BRASIL PARA OS BRASILEIROS</h2>
							<p>A história do Hapvida Saúde vem de 1979, quando o médico oncologista Cândido Pinheiro de Lima começou a realizar um grande sonho: o Hospital Antonio Prudente. Desde o início das operações, até os dias de hoje, a unidade é considerada uma das mais importantes de Fortaleza.</p>
						</div>
						<div id="unidades">
							<h2>SÃO MAIS DE</h2>
						 
						   <div class="row  align-items-center">

							<div class="d-flex col-md align-items-center justify-content-center">
								<i class="fas fa-hospital"></i>
								<p>+32 Hospitais</p>
							</div>

							<div class="d-flex col-md align-items-center justify-content-center">
								<i class="fas fa-ambulance"></i>
								<p>+20 Prontos Atendimentos</p>
							</div>

							<div class="d-flex col-md align-items-center justify-content-center">
								<i class="fas fa-clinic-medical"></i>
								<p>+105 Clínicas</p>
							</div>

							
						  </div>
						 
						</div>
					</div>
				</div>
			</article>
		</section>

		<section id="sec-services">
			<article>

				<div class="container-fluid">
					<h3>Alguns dos nossos planos de saúde: </h3>
					<div id="services-planos" class="row justify-content-center align-items-center">
						<div class="col-md-4 d-flex col-md align-items-center justify-content-center">
							<div>
								<h4 >Super Simples</h4>
								<p >Consulte para entrar em contato e saber mais sobre esse ou outros planos disponíveis em nossos serviços.</p>

								<button  type="button"><a href="#sec-contact">Consultar</a></button>
							</div>
						</div>
						<div class="col-md-4 d-flex col-md align-items-center justify-content-center">
							<div>
								<h4>Ambulatorial</h4>
								<p>Consulte para entrar em contato e saber mais sobre esse ou outros planos disponíveis em nossos serviços.</p>
								<button type="button"><a href="#sec-contact">Consultar</a></button>
							</div>
						</div>
						<div class="col-md-4 d-flex col-md align-items-center justify-content-center">
							<div>
								<h4>Cobertura + Odonto</h4>
								<p>Consulte para entrar em contato e saber mais sobre esse ou outros planos disponíveis em nossos serviços.</p>
								<button type="button"><a href="#sec-contact">Consultar</a></button>
							</div>
						</div>
					</div>
				</div>

			</article>
		</section>

		<section id="sec-contact">
			<article>

				<div class="container-fluid">
					<h5>Entre em contato para mais informações.</h5>
					<p>Após preencher o formúlario, um respónsavel pelo atendimento irá avaliar e entrar em contato com você o mais rápido possível.</p>
					
						<form action="processa_envio.php" method="post">
							<div class='row'>

							<div class="col-md-6">
								<div class="form-floating mb-3">
  								<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  								<label for="floatingInput">Email ou número</label>
								</div>
								<div class="form-floating mb-3">
  								<input name="nome" type="text" class="form-control" id="floatingInput" placeholder="Ex: Fernando">
  								<label for="floatingInput">Nome</label>
								</div>
								<div class="form-floating">
  								<textarea name="mensagem" style="height: 150px" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  								<label for="floatingTextarea">Mensagem</label>
							</div>
							</div>

							<div id="form-settings" class="col-md-6">
								 <p><i class="fas fa-exclamation-circle"></i> Seus dados estão 100% seguros! Não enviamos spam, fique tranquilo.</p>

								<a href="tel:988910499"><i class="fas fa-phone-square-alt"></i>(82) 8891.0499</a>

								<p><i class="fas fa-map-marker-alt"></i> Em todo o Brasil para trazer tranquilidade e conforte a sua vida.</p>
								<?php if(isset($_GET['error']) && $_GET['error']){

								  ?>
								  <p style='color: red;' id="error">Verifique os campos e tente novamente!</p>
								<?php } ?>
								<button type="submit">Enviar</button>
							</div>

						</div>
						</form>
					
				</div>

			</article>
		</section>
	</main>
	<footer>
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-3">
					<img  class="img-fluid" src="imagens/logo_top_fase2.png" alt="logo_administração">
				</div>
				<div class="col-md-3">
					<h5>Atendimento</h5>
					<p>Via WhatsApp</p>
					<p>Via Telefone</p>
					<p>Via Email</p>
				</div>
				<div class="col-md-3">
					<h5>Links Úteis</h5>
					<p>WhatsApp</p>
					<p>Email</p>
					<p>Sobre</p>
					<p>Hapvida</p>
				</div>

				<div class="col-md-3">
					<h5>Links Úteis</h5>
					<p>WhatsApp</p>
					<p>Email</p>
					<p>Sobre</p>
					<p>Hapvida</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>