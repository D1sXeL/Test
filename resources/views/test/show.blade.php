<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> 
<style>
p {
	color: {{ $color }};
}
</style>
<p>asdasd</p>
<p>The current UNIX timestamp is {{ time() }}</p>
<p class="{{ $className }}"></p>
<p style="{{ $style }}"></p>
<input value="{{ $value }}">
</body> 
</html>
