// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 2; // min caracters to display the autocomplete
	var keyword = $('#nomeFunc').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'conexao/ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id').show();
				$('#country_list_id').html(data);
			}
		});
	} else {
		$('#country_list_id').hide();
	}
}
 
// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#nomeFunc').val(item);
	// hide proposition list
	$('#country_list_id').hide();
}