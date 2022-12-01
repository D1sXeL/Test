<!DOCTYPE html>
<html>
	@if (isset($posts[$id]))
		<head>
			<title>{{ $posts[$id]['title'] }}</title>
		</head>
		<body>
			<header>
				<h1>{{ $posts[$id]['teaser'] }}</h1>
			</header>
			<main>
				<div class="info">
					<span class="date">{{ $posts[$id]['date'] }}</span>
					<span class="author">{{ $posts[$id]['author'] }}</span>
				</div>
			<div class="text">
				{{ $posts[$id]['text'] }}
			</div>
			</main>
	@else
		@include('layouts.post', ['id' => $id])
	@endif
		</body>
</html>
