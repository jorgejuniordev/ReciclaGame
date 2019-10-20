<?php
	include_once("inc/configs.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=title." - ".subtitle;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="<?=descricao;?>">
  	<meta name="author" content="<?=autores;?>">

	<link data-n-head="true" rel="icon" type="image/png" size="16" href="favicon.png">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Styles CSS -->
	<link type="text/css" href="css/estilo1.css" rel="stylesheet" />
	<link type="text/css" href="css/jogo.css" rel="stylesheet" />

</head>
<body class="d-flex flex-column">
	<div id="page-content">
	    <div class="container text-center">
	      <div class="row justify-content-center">
	        <div class="col-md-7">
						<img class="img-fluid mx-auto d-block" src="img/logo.png" width="50%" height="50%" alt="reciclaGame">
	          <h1 class="font-weight-light mt-4 text-black">Seja bem-vindo!</h1>
	          <p class="lead text-black-50">Aprenda a preservar a natureza brincando</p>
	        </div>
	      </div>
				<!-- <div class="text-center" style="background-color: #ccc;"> -->

			<div class="card-body text-center bg-light">
				<div id="row">
					<div class="col-md-12">
						<h3>Tutorial</h3>
						<span>Nesse jogo interativo, você precisa selecionar e arrastalo até a lixeira correspondente.</span>
					</div>
				</div>
				<div id="row">
					<!--DROP TARGETS-->
					<div class="py-5">
						<div class="container">
							<div class="row">
								<div class="lixeira droppable col-md-2" id="papel" data-id="0">
									<img src="img/papel.png" width="120" />
									<span>Papel e Papelão</span>
								</div>

								<div class="lixeira droppable col-md-2" id="vidro" data-id="1">
									<img src="img/vidro.png" width="120" />
									<span>Vidro</span>
								</div>

								<div class="lixeira droppable col-md-2" id="plastico" data-id="2">
									<img src="img/plastico.png" width="120" />
									<span>Plástico</span>
								</div>

								<div class="lixeira droppable col-md-2" id="metal" data-id="3">
									<img src="img/metal.png" width="120" />
									<span>Metal</span>
								</div>

								<div class="lixeira droppable col-md-2" id="organico" data-id="4">
									<img src="img/organico.png" width="120" />
									<span>Resíduos Orgânicos</span>
								</div>

								<div class="lixeira droppable col-md-2" id="nao-reciclavel" data-id="5">
									<img src="img/nao-reciclavel.png"  width="120" />
									<span>Resíduos em Geral, não recicláveis</span>
								</div>
							</div>
						</div><span><b>Exemplos de lixos correspondentes:</b></span>
					</div>
					<!--END DROP TARGETS-->
				</div>
				
				<div class="row">
					<div class="col-md-2">
						<img src="img/papel-amassado.png" />
						<img src="img/jornal.png" />
					</div>					

					<div class="col-md-2">
						<img src="img/garrafa-vidro.png" />
						<img src="img/pote.png" />
					</div>

					<div class="col-md-2">
						<img src="img/copo.png" />
						<img src="img/garrafa.png" />
					</div>

					<div class="col-md-2">
						<img src="img/lata.png" />
						<img src="img/latinha.png" />							
					</div>

					<div class="col-md-2">
						<img src="img/banana.png" />
						<img src="img/pizza.png" />
					</div>					
					<div class="col-md-2">
						<img src="img/papel-higienico.png" />
						<img src="img/cigarro.png" />
					</div>
				</div>
			

				<br><br>

				<div id="row">
					<a href="index.php">
						<button type="button" class="btn btn-warning">Voltar</button>
					</a>
					<a href="jogar.php">
						<button type="button" class="btn btn-primary">Jogar</button>
					</a>
				</div>
			</div>


		</div>
	</div>

	<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
	    <div class="container text-center">
	      <small>Carreta Furacão - 2019</small>
	    </div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/javascript.js"></script>
</body>
</html>
