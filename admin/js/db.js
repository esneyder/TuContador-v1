$(document).on('ready',principal);

	function principal() {
		$('#EditSliderPrincipal').on('click',editSliderPrincipal);

		$('#menu-toggle').on('click',menu);
		$('#EditedSlider').on('click',EditedSlider);
	}

	function editSliderPrincipal(){
		$('.col-lg-12').load('../Admin/Formularios/FormSliderPrincipal.php');
	}

	function menu()
	{
        $("#wrapper").toggleClass("toggled");
	}

	function EditedSlider(){
		console.log('a');
	}

//blod

$(document).on('ready',blog);

	function blog() {
		$('#blog').on('click',editblog);

		$('#menu-toggle').on('click',menu);
		$('#bot').on('click',EditedSlider);
	}

	function editblog(){
		$('.col-lg-12').load('blog.php');
	}

	function menu()
	{
        $("#wrapper").toggleClass("toggled");
	}

	function EditedSlider(){
		alert('tes');
	}




	