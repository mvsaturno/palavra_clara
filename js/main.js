$(document).ready(function() {

	$('#referencia').change(function(){
		var opt = $('#referencia option:selected').text();

		if (opt === 'Outro' || opt === 'Indicação') {
			$('#input_outro').fadeIn();
			// $('#lbl_outro').fadeIn();
		} else{
			$('#input_outro').fadeOut();
			// $('#lbl_outro').fadeOut();
			$('#input_outro_bx').val('');
		};
	});

	$('#tipo').change(function(){
		var opt = $('#tipo').val();

		switch(opt){
			case 'traducao':
			$('.form_transcr').hide();
			$('.form_trad').fadeIn('slow');
			$('.form_submit').fadeIn('slow');
			scrollToAnchor('form_trad');
			break;

			case 'transcricao':
			$('.form_trad').hide();
			$('.form_transcr').fadeIn('slow');
			$('.form_submit').fadeIn('slow');
			scrollToAnchor('form_transcr');
			break;
			
			case 'trad_transcr':
			$('.form_trad').fadeIn();
			$('.form_transcr').fadeIn();
			$('.form_submit').fadeIn();
			scrollToAnchor('form_transcr');
			break;

			default:
			$('.form_trad').hide();
			$('.form_transcr').hide();
			$('.form_submit').hide();
			break;
		}
	});

	$("#orcamento_comp").submit(
		function(event){
			event.preventDefault();
			var data = {};
			$.each($("#orcamento_comp").serializeArray(), function(k,v){ 
				data[v.name] = v.value;
			});
			data = $("#orcamento_comp").serializeArray();

			var opts = {
				type: 'POST',
				url:'./',
				dataType:'json',
				data: data
			}
			console.log(opts);
			$.ajax(opts);
		});

	$('.tooltip').on('click', function($this){
		$this.preventDefault();
		console.log('preveniu!');
	});

	$('.depoimento').hide();

        var count = $('.depoimento').length;
        console.log(count);

        var currentItem = 0;

        switchDiv = function() {
            if (currentItem == count - 1) {   
                $('.depoimento').eq(count - 1).hide();
                currentItem = 0;
                $('.depoimento').eq(0).fadeIn();
            }
            else {        
                $('.depoimento').eq(currentItem).hide();
                currentItem = currentItem + 1;
                $('.depoimento').eq(currentItem).fadeIn();
            }        
        }

        setInterval("switchDiv()", 5000 );
});

function scrollToAnchor(aid){
    var aTag = $("."+ aid );
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}


var PalavraClara = {
	referencia : $('#referencia'),
	tipo : $('#tipo'),
	orcamento : $("#orcamento_comp"),
	tooltip : $('.tooltip'),

	init : function(){

	},

	/*
	$('.tooltip').on('click', function($this){
		$this.preventDefault();
		console.log('preveniu!');
	});
	*/	

	observeReferencia : function(){
		referencia.change(function(){
		var opt = $('#referencia option:selected').text();

		if (opt === 'Outro' || opt === 'Indicação') {
			$('#input_outro').fadeIn();
		} else{
			$('#input_outro').fadeOut();
			$('#input_outro_bx').val('');
		};
	});		
	}

};