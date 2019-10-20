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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link type="text/css" href="css/estilo1.css" rel="stylesheet" />
	<link type="text/css" href="css/jogo.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column">
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <img class="img-fluid mx-auto d-block" src="img/logo.png" width="50%" height="50%" alt="reciclaGame">
        </div>
				<div class="col-md-12 card-deck">
          <div class="card-body text-center bg-light">
						<div id="row">
							<!--DRAGGABLE THINGS-->
							<div class="droppable2 col-md-10">
								<?php
									$div = array(
										'<div class="lixos draggable col-md-1" id="organico"><img src="img/banana.png" /></div>',
										'<div class="lixos draggable col-md-1" id="plastico"><img src="img/copo.png" /></div>',
										'<div class="lixos draggable col-md-1" id="organico"><img src="img/pizza.png" /></div>',
										'<div class="lixos draggable col-md-1" id="metal"><img src="img/garfo.png" /></div>',
										'<div class="lixos draggable col-md-1" id="plastico"><img src="img/garrafa.png" /></div>',
										'<div class="lixos draggable col-md-1" id="vidro"><img src="img/garrafa-vidro.png" /></div>',
										'<div class="lixos draggable col-md-1" id="papel"><img src="img/jornal.png" /></div>',
										'<div class="lixos draggable col-md-1" id="vidro"><img src="img/lampada.png" /></div>',
										'<div class="lixos draggable col-md-1" id="metal"><img src="img/lata.png" /></div>',
										'<div class="lixos draggable col-md-1" id="metal"><img src="img/latinha.png" /></div>',
										'<div class="lixos draggable col-md-1" id="organico"><img src="img/maca.png" /></div>',
										'<div class="lixos draggable col-md-1" id="organico"><img src="img/osso.png" /></div>',
										'<div class="lixos draggable col-md-1" id="papel"><img src="img/papel-amassado.png" /></div>',
										'<div class="lixos draggable col-md-1" id="nao-reciclavel"><img src="img/papel-higienico.png" /></div>',
										'<div class="lixos draggable col-md-1" id="organico"><img src="img/peixe.png" /></div>',
										'<div class="lixos draggable col-md-1" id="vidro"><img src="img/pote.png" /></div>',
										'<div class="lixos draggable col-md-1" id="plastico"><img src="img/sacola.png" /></div>',
										'<div class="lixos draggable col-md-1" id="metal"><img src="img/panela.png" /></div>',
										'<div class="lixos draggable col-md-1" id="organico"><img src="img/bolo.png" /></div>',
										'<div class="lixos draggable col-md-1" id="plastico"><img src="img/protetor.png" /></div>',
										'<div class="lixos draggable col-md-1" id="nao-reciclavel"><img src="img/cigarro.png" /></div>'
									);

									shuffle($div);

									foreach ($div as $key => $value) {
										if($key < 20){
											echo $div[$key];
										}
									}


								?>
							</div>
							<!--END DRAGGABLE THINGS-->
						</div>

						<div id="" class="md-2">
							<div class="pontos">Pontuação: <span class="numPts" id="points">0</span></div>
							<div class="pontos">Acertos: <span class="numPts" id="numCorrect">0</span></div>
							<div class="pontos">Erros: <span class="numPts" id="numAttempts">0</span></div>
							<a href="index.php"><button type="button" id="inicioButton" class="btn btn-warning">  Início  </button></a>
							<a href="tutorial.php"><button type="button" id="tutorialButton" class="btn btn-primary">Tutorial</button></a>
							<a href="jogar.php">
								<button type="button" id="jogarNovamente" name="JogarNovamente" class="btn btn-primary" width="100%">  Jogar Novamente  </button>
							</a>
						</div>

								<div style="clear:both"></div>
								<!-- <div class="col-md-12 card-deck mx-auto d-block"> -->
									<!-- <div class="card-body"> -->
										<div id="detail">
											<img class="img-fluid mx-auto d-block" src="img/acertou.png" width="50%" height="50%" alt="reciclaGame">
											<li class=" mx-auto d-block"><a href="#" class="btn btn-primary">Fechar</a></li>

											<!-- <div id="detailCon">
												<div id="closebtn">X</div>
												<div id="photoCon"></div>
												<div id="desc"></div>
											</div> -->
										</div>
									<!-- </div> -->
								<!-- </div> -->


								<!--DROP TARGETS-->
								<div class="py-5">
									<div class="container">
										<div class="row">
											<div class="lixeira droppable col-md-2" id="papel" data-id="0">
												<div class="mensagemError">Incorreto. <br/>Tente Novamente.</div>
												<div class="mensagemAcerto" name="teste" id="teste">Correto</div>
												<img src="img/papel.png" width="120" />
												<div class="imagemLixeira" id="papel"><img src="img/papel.png" />Barea</div>
											</div>

											<div class="lixeira droppable col-md-2" id="vidro" data-id="1">
												<div class="mensagemError">Incorreto. <br/>Tente Novamente.</div>
												<div class="mensagemAcerto">Correto</div>
												<img src="img/vidro.png" width="120" />
												<div class="imagemLixeira" id="vidro"><img src="img/vidro.png" />Johnson</div>
											</div>

											<div class="lixeira droppable col-md-2" id="plastico" data-id="2">
												<div class="mensagemError">Incorreto. <br/>Tente Novamente.</div>
												<div class="mensagemAcerto">Correto</div>
												<img src="img/plastico.png" width="120" />
												<div class="imagemLixeira" id="plastico"><img src="img/plastico.png" />Brewer</div>
											</div>

											<div class="lixeira droppable col-md-2" id="metal" data-id="3">
												<div class="mensagemError">Incorreto. <br/>Tente Novamente.</div>
												<div class="mensagemAcerto">Correto</div>
												<img src="img/metal.png" width="120" />

												<div class="imagemLixeira" id="metal"><img src="img/metal.png" />Muhammad</div>
											</div>

											<div class="lixeira droppable col-md-2" id="organico" data-id="4">
												<div class="mensagemError">Incorreto. <br/>Tente Novamente.</div>
												<div class="mensagemAcerto">Correto</div>
												<img src="img/organico.png" width="120" />
												<div class="imagemLixeira" id="organico"><img src="img/organico.png" />Johnson</div>
											</div>

											<div class="lixeira droppable col-md-2" id="nao-reciclavel" data-id="5">
												<div class="mensagemError">Incorreto. <br/>Tente Novamente.</div>
												<div class="mensagemAcerto">Correto</div>
												<img src="img/nao-reciclavel.png"  width="120" />
												<div class="imagemLixeira" id="nao-reciclavel"><img src="img/nao-reciclavel.png" />Cunnigham</div>
											</div>
										</div>
									</div>
								</div>
								<!--END DROP TARGETS-->

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/javascript.js"></script>
</body>
</html>
