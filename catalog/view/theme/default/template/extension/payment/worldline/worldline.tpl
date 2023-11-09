<div id="worldline-form">
	<div class="buttons">
		<div class="pull-right">
			<button type="button" id="worldline-button-confirm" class="btn btn-primary" data-loading-text="{{ text_loading }}"><?php echo $button_title; ?></button>
		</div>
	</div>
</div>
<script type="text/javascript">

$('#worldline-form #worldline-button-confirm').on('click', function() {	
	$.ajax({
		type: 'post',
		url: 'index.php?route=extension/payment/worldline/confirm',
		data: $('#worldline-form input[type="radio"]:checked, #worldline-form input[type="checkbox"]:checked, #worldline-form select'),
		dataType: 'json',
		beforeSend: function() {
            $('#worldline-button-confirm').prop('disabled', true).button('loading');
        },
        complete: function() {
           $('#worldline-button-confirm').prop('disabled', false).button('reset');
        },
		success: function(json) {
			$('#worldline-form .alert-dismissible').remove();
				
			if (json['error']) {
				if (json['error']['warning']) {
					$('#worldline-form').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i><button type="button" class="close data-dismiss="alert">&times;</button> ' + json['error']['warning'] + '</div>');
				}
			}
			
			if (json['redirect']) {
				location = json['redirect'];	
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

</script>