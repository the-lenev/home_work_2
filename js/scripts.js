$(function() {
	$('.group button').on('click', function(){
		console.log('submit');
		var formData = new FormData($('#form')[0]);
        $.ajax({
            url: '/ajax/game.php',
            processData: false,
			contentType: false,
            type: 'post',
            data: formData,
            success: function (data) {
				var arr_num = data.split(';');
            	$('#boys_candy').html(arr_num[0]);
				$('#girls_candy').html(arr_num[1]);
				$('form').find('select.input-sm').val(0);
            }
        });
	});
	$('.group.active button').on('click', change_active);
	function change_active(){
		console.log('count');
		$('.group.disabled').removeClass('disabled').addClass('active').find('select').attr('disabled', 'disabled').parents('.group').find('.btn-info').removeAttr('disabled')
			.off('click', change_active)
			.on('click', change_active);
		$(this).attr('disabled', 'disabled').parents('.group').removeClass('active').addClass('disabled').find('select').removeAttr('disabled')
			.off('click', change_active);
	}
});
