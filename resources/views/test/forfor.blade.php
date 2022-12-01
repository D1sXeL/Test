<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body>
	<table>
		@foreach($data as $subArr)
			<tr>
				@foreach($subArr as $elem)
				<td>{{ $elem }}</td>
				@endforeach
			</tr>
		@endforeach	
	</table>
</body> 
</html>