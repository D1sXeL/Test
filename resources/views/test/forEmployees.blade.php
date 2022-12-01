<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body>
	@foreach($data as $subArr)
		<ul>
			@foreach($subArr as $elem)
			@if($loop->index == 0)
				<li><a style="color: red">{{ $loop->iteration }} - {{ $elem }}</a></li>
			@else
				<li>{{ $loop->iteration }} - {{ $elem }}</li>
			@endif
			@endforeach
		</ul>
	@endforeach
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