<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body>
<ul>
@foreach(explode(",", $text) as $elem)
	<li>{{ sqrt($elem) }}</li>
@endforeach
</ul>
</body> 
</html>