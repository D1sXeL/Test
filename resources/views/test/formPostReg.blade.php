<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		{{ csrf_field() }}
		<input type="text" name="name">
		<input type="text" name="login">
		<input type="mail" name="mail">
		<input type="password" name="password">
		<input type="submit" name="">
	</form>
	@if(isset($arr))
		<ul>
		@foreach ($arr as $elem)
			<li>{{ $elem }}</li>
		@endforeach
		</ul>
	@endif
</body>
</html>