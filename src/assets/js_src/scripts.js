var $ = require('jquery'); // ^3.1.1 included

$(function() {
	$('.nav--services li').on('click', function(e) {
		e.preventDefault();

		var t = $(this),
		id = t.attr('id');

		$('.nav--services li').removeClass('current');
		t.addClass('current');

		$('.services--text').removeClass('show').addClass('hidden');
		$('.services--text#' + id).removeClass('hidden').addClass('show');
	});

	$('.scroll-menu').on('click', function(e) {
		e.preventDefault();

		console.log('click');

		$('.header--main').toggleClass('toggle');
	});
});

$(function() {
	var navChildren = $(".nav--main li").children();
	var aArray = [];

	for (var i = 0; i < navChildren.length; i++) {
		var aChild = navChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}

	$(window).scroll(function() {
		var windowPos = $(window).scrollTop();
		var windowHeight = $(window).height();
		var docHeight = $(document).height();

		for (var i = 0; i < aArray.length; i++) {
			var theID = aArray[i];
			var secPosition = $(theID).offset().top;
			secPosition = secPosition - 135;
			var divHeight = $(theID).height();
			divHeight = divHeight + 90;

			if (windowPos >= secPosition && windowPos < (secPosition + divHeight)) {
				$("a[href='" + theID + "']").parent().addClass("selected");
			}

			else {
				$("a[href='" + theID + "']").parent().removeClass("selected");
			}
		}
	});

	$('.form--contact').on('submit', function() {
		var t = $(this);

		$.post('../send-form.php', $('.form--contact').serialize(), function(data) {
			t.hide();

			$('.form-response').show();
		});

		return false;

	});
});

function init() {
	window.addEventListener('scroll', function(e) {
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 300,
		header = document.querySelector('.header--main');

		if (distanceY > shrinkOn) {

			classie.add(header, 'smaller');
		}

		else {
			if (classie.has(header, 'smaller')) {
				classie.remove(header, 'smaller');
			}
		}
	});
}

window.onload = init();