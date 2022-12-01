<html>
	<body>
		@if(isset($error) and $error == 1)
			Нужно число не более 9
		@endif
		<form method="post">
			{{ csrf_field() }}
			<input type="text" name="number">
			<input type="submit" name="">
		</form>
	</body>
</html>