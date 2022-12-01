<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> 
<p> Страна - {{ isset($arr["country"]) ? $arr["country"] : "Россия" }} </p>
<p> Город - {{ isset($arr["city"]) ? $arr["city"] : "Москва" }} </p>
</body> 
</html>
