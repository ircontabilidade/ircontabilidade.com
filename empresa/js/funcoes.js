$(document).ready(function() {
    $('.bxslider').bxSlider({
        mode: 'fade',
        auto: true,
        captions: true
    });
     

    //noticias
    simpleTooltip(".tool", "tooltip");
});

function toggleMenu() {
    var nav = document.getElementById('nav');
    if (nav.style.display != 'block') {
        nav.style.display = 'block';
    } else {
        nav.style.display = '';
    }
}

$(document).ready(function() {

	/* MAIN MENU */
	$('#main-menu > li:has(ul.sub-menu)').addClass('parent');
	$('ul.sub-menu > li:has(ul.sub-menu) > a').addClass('parent');

	$('#menu-toggle').click(function() {
		$('#main-menu').slideToggle(300);
		return false;
	});

	$(window).resize(function() {
		if ($(window).width() > 700) {
			$('#main-menu').removeAttr('style');
		}
	});

});

