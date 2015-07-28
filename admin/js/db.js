$(document).on('ready',Principal);

function Principal()
{
	$('#FormSliderPrincipal').on('click',EditSliderPrincipal);
}

function EditSliderPrincipal()
{
	$('#FomulariosCont').load('../admin/formularios/SliderPrincipal.php');
}
