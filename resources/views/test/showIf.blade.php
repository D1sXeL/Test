<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> 
@if (strlen($text) > 0)
	{{ array_sum(explode(",", $text)) }}
@else
	Сумма элементов массива равна 0
@endif
</body> 
</html>
