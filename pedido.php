<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/pedido.js" rel></script>

		
		<link rel="stylesheet" type="text/css" href="_css/pedido.css" />
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="_css/botao-neon.css" />
		
		<title>Or&ccedil;amentos &bull; Leme Code</title>
		<link rel="sortcut icon" href="_image/icon/pedido.svg" type="image/x-icon" />


	</head>

	<body>
		<header>
		<nav id="menu" class="navbar navbar-expand-lg navbar-dark" style="background-color: #272727;">
				
				<a id="logo" href="index.php">
                  <img src="_image/logo.svg" width="25%;"/>
                  Leme Code;
                  </a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
				
				<div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
					
					
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">   
					
					<li class="nav-item">
						<a href="index.php" class="nav-link neon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Principal
						</a>
					</li>
					
					<li class="nav-item">
						<a href="produtos.php" class="nav-link neon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Produtos
						</a>
					</li>
					
					<li class="nav-item">
						<a href="pedido.php" class="nav-link neon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Orçamento
						</a>
					</li>
					
					<li class="nav-item">
						<a href="sobre.php" class="nav-link neon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Sobre
						</a>
					</li>
				</ul>
              </div>
			</nav>
		</header>
		<main>
			<div class="container">
			<!--CONTEUDO AQUI ********************************** -->

					<h1>Formulário de orçamento</h1>
					<hr>
					<br>
					<form class="form" method="POST" action="send-mail.php" oninput="calc_total();">
					
					<input type="text" class="form-contact-input" name="nome" placeholder="Nome" required />  
					<input type="email" class="form-contact-input" name="email" placeholder="Email" required />  
					<input type="tel" class="form-contact-input" name="fone" placeholder="Telefone" required /> 
					
					<br><br>
					<label for="tipo"><h1>Selecione o tipo de projeto desejado:</h1></label>

						<select class="form-contact-input" name="tipo" id="tipo">
						<option value="500.00">Ladding Page • Site de uma única página.</option>
						<option value="1100.00">Website médio • Até 3 páginas</option>
						<option value="1600.00">Website completo • De 3 a 6 páginas</option>
						</select>
					
						<br><br>
						<h1>Elementos desejados <span class="text-muted">| Clique para selecionar</span> </h1>

						
						<section class="form-contact-input">

						<div class="row">

							<label class="col-sm-12 col-lg-3" for="form"> <input checked class="check" id="form" name="preciso[]" value="Formulário"  type="checkbox"> Formulário de contato</label>
							<label class="col-sm-12 col-lg-3" for="banner"> <input class="check" id="banner" name="preciso[]" value="3 Banners"  type="checkbox"> Kit de três Banners </label>
							<label class="col-sm-12 col-lg-3" for="logotipo"> <input class="check" id="logotipo" value="Logotipo" name="preciso[]"  type="checkbox"> Logotipo Personalizada </label>
													
							<label class="col-sm-12 col-lg-3" for="paleta"> <input class="check" id="paleta" name="preciso[]" value="Paleta"  type="checkbox"> Paleta de cores </label>
							<label class="col-sm-12 col-lg-3" for="mobile"> <input class="check" id="mobile" name="preciso[]" value="Responsividade"  type="checkbox"> Responsividade </label>
							<label class="col-sm-12 col-lg-3" for="post" > <input class="check" id="post" name="preciso[]" value="Artes Posts"  type="checkbox"> Posts para Redes Sociais </label>
							<label class="col-sm-12 col-lg-3" for="video"> <input class="check" id="video" name="preciso[]" value="Vídeo Comercial"  type="checkbox"> Comercial de 30s </label>
						
							
							
							<label class="col-sm-12 col-lg-3" for="port"> <input class="check" id="port" name="preciso[]" value="Divulgar no Portfólio" type="checkbox"> Portfólio </label>
						</div>
							
									
						</section>
					<textarea class="form-contact-textarea" name="mensagem" placeholder="Descreva sua idéia" required></textarea> 

					
					<input type="checkbox" class="custom-control-input con" id="customControlAutosizing">
					<label class="custom-control-label con" id="conc" for="customControlAutosizing">Eu li e concordo com os <a href="termos-de-contrato.php" target="_blank">termos de contrato</a> (recomendado ler).</label>
					
					<br>
					<hr>
					<br>

					<h1>Valor total:</h1>
					<div class="row" id="fim">
						<input type="text" class="col-lg-5 col-sm-12 form-contact-input" name="total" id="total" placeholder="Valor Total" readonly>
						<button type="submit" class="col-lg-7 col-sm-12 form-contact-button">Confirmar contrato</button>
						
				</div>
			</form>
		</main>
	</body>
		<footer>
			
			<h3> Minhas Redes Sociais:</h3>
			<!-- LOGOS REDES SOCIAIS -->
			
			<a href="https://www.behance.net/emily-leme" target="_blank" class="redes"> <img src="https://cdn2.iconfinder.com/data/icons/colorful-guache-social-media-logos-1/155/social-media_behance-128.png" > </a>
			
			<a href="https://www.github.com/catmiih" target="_blank" class="redes"> <img src="https://cdn3.iconfinder.com/data/icons/colorful-guache-social-media-logos-1/159/social-media_GitHub-128.png"> </a>
			
			<a href="https://www.linkedin.com/in/emily-leme/" target="_blank" class="redes"> <img src="https://cdn4.iconfinder.com/data/icons/colorful-guache-social-media-logos-1/159/social-media_linkedin-128.png"> </a>
			
			<a href="https://www.instagram.com/dev.leme/" target="_blank" class="redes"> <img src="https://cdn4.iconfinder.com/data/icons/colorful-guache-social-media-logos-1/155/social-media_instagram-black-128.png"> </a>
			
			<!-- FIM -->
			
			<br>
			
			<h3>Todos os direitos reservados &copy; 2021.</h3>
			<h1>Emily Leme</h1>
		</footer>
</html>
