<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		{{ csrf_field() }}
		<input type="text" name="var1">
		<input type="text" name="var2">
		<input type="text" name="var3">
		<input type="submit" name="">
	</form>
	@if(isset($all))
		<ul>
		@foreach ($all as $elem)
			<li>{{ $elem }}</li>
		@endforeach
		</ul>
	@endif
</body>
</html>