<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body>
@foreach($text as $key => $elem)
key - {{ $key + 1 }}
<p>elem - {{ $elem}}</p>
@endforeach
</body> 
</html>