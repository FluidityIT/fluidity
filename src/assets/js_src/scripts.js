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
});