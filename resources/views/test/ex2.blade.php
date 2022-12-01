<html>
	<head>
	</head>
	<body>
		<select>
			@foreach($string as $elem)
				<option>{{ $elem }}</option>
			@endforeach
		</select>

		<ul>
			@foreach($days as $elem)
				@if($elem == $currentDay)
					<li class="active">{{ $elem }}</li>
				@else
					<li>{{ $elem }}</li>
				@endif
			@endforeach
		</ul>
	</body>
</html>