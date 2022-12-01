<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	private $categories;
	
	public function __construct()
	{
		$this->categories = [
		1 => [
			'name' => 'Категория 1',
			'products' => [
				1 => [
					'name'    => 'Продукт 1',
					'cost'    => '300',
					'inStock' => true,
					'desc'    => 'Описание продукта 1'
				],
				2 => [
					'name'    => 'Продукт 2',
					'cost'    => '400',
					'inStock' => true,
					'desc'    => 'Описание продукта 2'
				],
				3 => [
					'name'    => 'Продукт 3',
					'cost'    => '500',
					'inStock' => false,
					'desc'    => 'Описание продукта 3'
				],
			],
		],
		2 => [
			'name' => 'Категория 2',
			'products' => [
				1 => [
					'name'    => 'Продукт 1',
					'cost'    => '700',
					'inStock' => true,
					'desc'    => 'Описание продукта 1'
				],
				2 => [
					'name'    => 'Продукт 2',
					'cost'    => '800',
					'inStock' => false,
					'desc'    => 'Описание продукта 2'
				],
				3 => [
					'name'    => 'Продукт 3',
					'cost'    => '900',
					'inStock' => false,
					'desc'    => 'Описание продукта 3'
				],
			],
		],
	];

	}

	public function product($category_id, $product_id)
	{
		return view('test.product', ['product_list' => $this->categories, 'category_id' => $category_id, 'product_id' => $product_id]);
	}

	public function productCategory($category_id)
	{
		return view('test.productCategory', ['product_list' => $this->categories, 'category_id' => $category_id]);
	}

	public function showCategoryList()
	{
		return view('test.showCategoryList', ['product_list' => $this->categories]);
	}
}