<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<ul>
	@foreach ($product_list as $key=>$elem)
		<li><a href="/product/{{ $key }}">{{ $product_list[$key]['name'] }}</a></li>
	@endforeach
	</ul>
</body>
</html>