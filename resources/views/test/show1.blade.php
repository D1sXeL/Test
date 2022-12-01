<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> 
<p> arr[0] - {{ $arr[0] }} </p>
<p> arr[1] - {{ $arr[1] }} </p>
<p> Кол-во - {{ count($arr) }} </p>
<p> Город - {{ isset($city) ? $city : 'Москва' }}
</body> 
</html>
