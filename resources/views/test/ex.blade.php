<html>
<head>
</head>
<body>
	<ul>
		<li><a href="http://href1">{{ $links['text1'] }}</a></li>
		<li><a href="http://href2">{{ $links['text2'] }}</a></li>
		<li><a href="http://href3">{{ $links['text3'] }}</a></li>
	</ul>
<?php

?>

	<table>
		<th>№</th>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>Зарплата</th>
		@foreach($employees as $key=>$elem)
			@if($elem['salary'] > 2000)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $elem['name'] }}</td>
					<td>{{ $elem['surname'] }}</td>
					<td>{{ $elem['salary'] }}</td>
				</tr>
			@endif
		@endforeach
	</table>

	<table>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>Статус</th>
		@foreach($users as $key=>$elem)
			<tr>
				<td>{{ $elem['name'] }}</td>
				<td>{{ $elem['surname'] }}</td>
				<td>
					@if($elem['banned'] == true)
						<p style="color: red">забанен</p>
					@else
						<p style="color: green">активен</p>
					@endif
				</td>
			</tr>
		@endforeach
	</table>

	<form>
		@foreach($str as $elem)
			<p><input value="{{ $elem }}"></p>
		@endforeach
	</form>

	<select>
		@foreach($str as $elem)
			<option>{{ $elem }}</option>
		@endforeach
	</select>
</body>
</html>