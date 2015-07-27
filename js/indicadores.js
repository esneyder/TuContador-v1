$(document).on('ready',function(){
	$("#bgUl").carouFredSel({
            auto: {
                items           : 5, // número de item a mostrar
                duration        : 8500, // velocidad
                easing          : "linear",
                pauseDuration   : 0,
                pauseOnHover    : "immediate"
            }
        });
});