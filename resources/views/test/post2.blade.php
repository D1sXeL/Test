<!DOCTYPE html>
<html>
	<main>
		@foreach($posts as $key=>$elem)
			<body>
				<h2>{{ $elem['title'] }}</h2>	
					<div class="info">
						<span class="date">{{ $elem['date'] }}</span>
						<span class="author">{{ $elem['author'] }}</span>
					</div>
				<div class="text">
					{{ $elem['teaser'] }}
				</div>
				<div class="more">
					<a href="/post/test1/{{ $key }}">Подробнее...</a>
				</div>
			</body>
		@endforeach
	</main>

</html>
