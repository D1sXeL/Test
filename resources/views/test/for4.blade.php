<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body>

@if (count($data) != 1)
	<ul>
	@foreach($data as $elem)
		<li>
		{{ $elem }}
		</li>
	@endforeach
	</ul>
@else
	{{ $data[0] }}
@endif
</body> 
</html>