<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body>
	@foreach($data as $elem)
	<p>
		@if($loop->remaining < 5)
			<b>$elem</b>
		@else
			<i>$elem</i>
		@endif
	</p>
	@endforeach
	@for ($i = 0; $i != 11; $i++)
		<b>{{ $i }}</i>
	@endfor
</body> 
</html>