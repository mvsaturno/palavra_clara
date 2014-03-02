$(document).ready(function() {
/*

	//Função que faz os depoimentos sumirem e aparecem:
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
        setInterval("switchDiv()", 5000 );*/
        PalavraClara.init();
});

var PalavraClara = {

	observeReferencia : function(e){		
		e.change(function(){
		var opt = $('#referencia option:selected').text();

		if (opt === 'Outro' || opt === 'Indicação') {
			$('#ref_outro').fadeIn();
		} else{
			$('#ref_outro').fadeOut();
			$('#ref_outro_bx').val('');
		};
	});		
	},

	observeTipo : function(e){
		e.change(function(){
		var opt = e.val();

		switch(opt){
			case 'traducao':
			$('.form_transcr').hide();
			$('.form_trad').fadeIn('slow');
			$('.form_submit').fadeIn('slow');
			this.scrollToAnchor('form_trad');
			break;

			case 'transcricao':
			$('.form_trad').hide();
			$('.form_transcr').fadeIn('slow');
			$('.form_submit').fadeIn('slow');
			this.scrollToAnchor('form_transcr');
			break;
			
			case 'trad_transcr':
			$('.form_trad').fadeIn();
			$('.form_transcr').fadeIn();
			$('.form_submit').fadeIn();
			this.scrollToAnchor('form_transcr');
			break;

			default:
			$('.form_trad').hide();
			$('.form_transcr').hide();
			$('.form_submit').hide();
			break;
		}
	}.bind(this));
	},

	observeTooltip : function(e){
		e.on('click', function($this){
		$this.preventDefault();
	});
	},

	observeForm : function(e){
		e.submit(
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
	},

 	scrollToAnchor: function(aid){
    	var aTag = $("."+ aid );
    	$('html,body').animate({scrollTop: aTag.offset().top},'slow');
	},

	init: function(){

		referencia = $('#referencia');
		tipo = $('#tipo_serv');
		tooltip = $('.tooltip');
		form = $("#orcamento_comp");

		this.observeReferencia(referencia);
		this.observeTipo(tipo);
		this.observeTooltip(tooltip);
		this.observeForm(form);
	}
};