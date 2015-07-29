$(document).on('ready',principal);

	function principal() {
		$('#EditSliderPrincipal').on('click',editSliderPrincipal);
		$('#menu-toggle').on('click',menu);
		$('#bot').on('click',EditedSlider);
	}

	function editSliderPrincipal(){
		$('.col-lg-12').load('../Admin/Formularios/FormSliderPrincipal.php');
	}

	function menu()
	{
        $("#wrapper").toggleClass("toggled");
	}

	function EditedSlider(){
		alert('tes');
	}




	