// integration page tab-1
$(document).ready(function(){
	
	$('ul.tablist li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tablist li').removeClass('activated');
		$('.tab-cont').removeClass('activated');


		$(this).addClass('activated');
		$("#"+tab_id).addClass('activated');
	})

})