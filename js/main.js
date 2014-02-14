$(document).ready(function() {

	$('#nome').focus(function(){
		if ($('#nome').val() === 'Nome Completo' ) {
		$('#nome').val('');
		}
	});

	$('#nome').blur( function(){
		if ($('#nome').val() === '' ) {
		$('#nome').val('Nome Completo');
		}
	});

	$('#email').focus(function(){		
		if ($('#email').val() === 'E-Mail' ) {
		$('#email').val('');
		}
	});

	$('#email').blur( function(){
		if ($('#email').val() === '' ) {
		$('#email').val('E-Mail');
		}
	});

	$('#referencia').change(function(){
		var opt = $('#referencia option:selected').text();

		if (opt === 'Outro') {
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
			$('.form_transcr').fadeOut('slow');
			$('.form_trad').fadeIn('slow');
			$('.form_submit').fadeIn('slow');
			break;

			case 'transcricao':
			$('.form_trad').fadeOut('slow');
			// clear_form($('.form_trad'));
			// $('.form_trad').each( function resetDate(){
  	// 			this.value.reset(); = this.defaultValue;
			// });
			$('.form_transcr').fadeIn('slow');
			$('.form_submit').fadeIn('slow');
			break;
			
			case 'trad_transcr':
			$('.form_trad').fadeIn();
			$('.form_transcr').fadeIn();
			$('.form_submit').fadeIn();
			break;

			default:
			$('.form_trad').fadeOut();
			$('.form_transcr').fadeOut();
			$('.form_submit').fadeOut();
			break;
		}
	});
});

function clear_form(elm){
  elm.each( function resetDate(){
  this.value = this.defaultValue;
});
}