<button type="submit" id="ping" class="btn btn-primary">Ping</button>

<script>
jQuery(function ($) {
	$('#ping').click(function () {
		$.ajax({
			url: "{{ resources('acme/ajax-acme') }}",
			data: {foo: "foobar"},
			type: 'POST',
			complete: function (data, status) {
				console.log(data.responseJSON, status);
			}
		});
	});
});
</script>
