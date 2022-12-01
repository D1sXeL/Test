<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>Название</td>
			<td>Цена</td>
			<td>Ссылка</td>
		</tr>
		@foreach ($product_list[$category_id]['products'] as $key=>$elem)
			<tr>
				<td>{{ $product_list[$category_id]['products'][$key]['name'] }}</td>
				<td>{{ $product_list[$category_id]['products'][$key]['cost'] }}</td>
				<td><a href="/product/{{ $category_id }}/{{ $key }}">ссылка</a></abbr></td>
			</tr>
		@endforeach
	</table>
</body>
</html>