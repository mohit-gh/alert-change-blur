<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</head>

	<body>
	<input type="text" name="myname" id="fname" onblur="gettextq()">
  <input type="text" name="myname" id="fname" onchange="gettext()">
	<body>

<script>
	$("input[type='text']").on( "change", function() {
		alert($('#fname').val());
	});
	function gettext() {
		alert($('#fname').val());
	}
	$("input[type='text']").on ("blur", function(){
		alert($('#fname').val());
	});
	function gettextq() {
		alert($('#fname').val()+" Tech");
	}
</script>
</html>
