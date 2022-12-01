<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="formActionAddPost" method="post">
		{{ csrf_field() }}
		<input type="text" name="var1">
		<input type="submit" name="">
	</form>
</body>
</html>