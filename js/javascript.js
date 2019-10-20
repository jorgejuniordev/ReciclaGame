var musica = new Audio();
musica.src = "./mp3/music.mp3";
musica.volume = 0.2; // volume
musica.play();

var acerto = new Audio();
acerto.src = "./mp3/acerto.mp3";

var erro = new Audio();
erro.src = "./mp3/erro.mp3";

var lixos = ['papel', 'vidro', 'plastico', 'metal', 'organico', 'nao-reciclavel'];

var origXPos = [];
var origYPos = [];
var attempts = 0;
var correct = 0;
var points = 0;

var captions = [];
captions[0] = "papel.";
captions[1] = "vidro.";
captions[2] = "plastico.";
captions[3] = "metal.";
captions[4] = "organico.";
captions[5] = "nao-reciclavel.";

function LixeiraInicial() {
	//console.log("ready");
	$("#detail").hide();
	$("#shareCon").hide();

	$( ".draggable" ).draggable({ revert: "valid" });
	$( ".droppable" ).droppable({
      hoverClass: "boxHover",
      drop: function( event, ui ) {
        $( this )
         var dragid = ui.draggable.attr("id").substring(1, ui.draggable.attr("id").length);
         var dropid = $(this).attr("id").substring(1, $(this).attr("id").length);
         var dataid = $(this).attr("data-id")
		 if (dragid == dropid) {
	   			$("#" + dragid + "inside").css("display", "block");
				$("#t" + dropid + " .messageright").css("display", "inline").delay(1500).fadeOut( "slow" );
				ui.draggable.css("visibility", "hidden");
				correct ++;
				$("#numAttempts").text(attempts);
				$("#numCorrect").text(correct);	
				showInfo(dataid);
				acerto.play();
				$(this).click(function() {
					showInfo(dataid);
				});
		 } else {
	         //console.log("wrong");
	         $("#t" + dropid + " .messagewrong").css("display", "inline").delay(1500).fadeOut( "slow" );
	         attempts ++;
	         $("#numAttempts").text(attempts);
	         erro.play();
	     }
	     
	     $("#points").text(correct - attempts);

	     if (correct >= 20){
	     	HiddenAndVisibility();
	     }	     
      }
    });

    $( ".droppable2" ).droppable();

    $("#detail").click(function() {
		$("#detail").hide();
		$("#detail").animate({ opacity: '0' }, 500);
	});

}

function HiddenAndVisibility() {
  document.getElementById("jogarNovamente").style.visibility = "visible";
  document.getElementById("inicioButton").style.visibility = "hidden";
  document.getElementById("tutorialButton").style.visibility = "hidden";
}

function showInfo(which) {
	$("#detail").show();
	$("#detail").animate({ opacity: '1' }, 500);
	$("#detail #desc").text(captions[which]);

	var img = new Image();
	img.src = "img/" + lixos[which] + ".png";
	$("#detail #photoCon").empty();
	$("#detail #photoCon").append(img);
}


$(document).ready(function() {
	LixeiraInicial();

});
