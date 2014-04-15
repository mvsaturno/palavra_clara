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
				console.log('v.name = ' + v.name);
				console.log('v.value = ' + v.value);
				console.log('k = '+ k);
			});
			data = $("#orcamento_comp").serializeArray();

			var opts = {
				type: 'POST',
				url:'completo.php',
				dataType:'json',
				data: data,
				success: function(data){
					console.log("SUCESSO!");
					console.log(data);
				},
				error:  function(data){
					console.log("falhou!");
					console.log(data);
				}
			}
			console.log(opts);
			$.ajax(opts);
		});
	},

 	scrollToAnchor: function(aid){
    	var aTag = $("."+ aid );
    	$('html,body').animate({scrollTop: aTag.offset().top},'slow');
	},

	//Criar função que monitora o click nos selects options e vê se o valor 
	//escolhido é 'outro' pra exibir o campo de "especifique" na respectiva sessão

	monitoreFormSelects : function(){
		$('#orcamento_comp').find('select').on('change', function(){
			
			var val = $(this).val();
			if (val === 'indicacao' || val === 'outro_ref') {
				$('#ref_outro').fadeIn();
			} else if (val === 'facebook' || val === 'google') {
				$('#ref_outro').fadeOut();
				$('#ref_outro_bx').val('');
			} else if (val === 'outro_trad') {
				$('#tipo_txt_outro').fadeIn();
			} else if ($(this).parent().attr('id') === 'trad_tipo_material') {
				$('#tipo_txt_outro').fadeOut();
				$('#tipo_txt_outro').find('input').val('');
			}

		});
	},

	init: function(){

		tipo = $('#tipo_serv');
		tooltip = $('.tooltip');
		form = $("#orcamento_comp");

		this.monitoreFormSelects();
		this.observeTipo(tipo);
		this.observeTooltip(tooltip);
		this.observeForm(form);
	}
};