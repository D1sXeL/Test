<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p>Категория- <a href="/product/{{ $category_id }}">{{ $product_list[$category_id]['name'] }}</a></p>
	<p>Название - {{ $product_list[$category_id]['products'][$product_id]['name'] }}</p>
	<p>Цена - {{ $product_list[$category_id]['products'][$product_id]['cost'] }}</p>
	@if ($product_list[$category_id]['products'][$product_id]['inStock'] == true)
		<p>Наличие - в наличии</p>
	@else
		<p>Наличие - отсутствует</p>
	@endif
	<p>Описание - {{ $product_list[$category_id]['products'][$product_id]['desc'] }}</p>
</body>
</html>