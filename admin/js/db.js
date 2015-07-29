$(document).on('ready',principal);

	function principal() {
		$('#EditSliderPrincipal').on('click',editSliderPrincipal);
	}

	function editSliderPrincipal(){
		$('.col-lg-12').load('../Admin/Formularios/FormSliderPrincipal.php');
	}