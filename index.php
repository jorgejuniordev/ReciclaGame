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
			<div class"col-md-7 card-deck">
				<div class="card-body text-center bg-light">
					<div id="row">
						<div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto btn" style="z-index: 9">
							<img src="img/brain-1773850_1280.png" width="90%" alt="">

						</div>
						<div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto btn">
							<div class="card-body d-flex align-items-end flex-column text-right btn btn-primary">
								<a class="btn btn-warning btn-lg" href="tutorial.php"><h2>Tutorial</h2></a>
								<p class="w-75">Aprenda a como jogar o ReciclaGame!</p>
								<i class="fal fa-pencil-ruler"></i>
							</div>
							<br>

							<div class="card-body d-flex align-items-end flex-column text-right btn btn-warning">
								<a class="btn btn-primary btn-lg" href="jogar.php"><h2>Jogar</h2></a>
								<p class="w-75">Jogue agora e se divirta com o ReciclaGame!</p>
								<i class="fal fa-pencil-ruler"></i>
							</div>
						</div>
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
