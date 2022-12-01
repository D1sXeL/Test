<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>
        <a href="/eloquent/test/6">Добавить</a>
    </button>
    <table>
    	<thead>
    		<td>id</td>
    		<td>title</td>
            <td>desc</td>
    		<td>text</td>
    		<td>href</td>
            <td>edit</td>
            <td>del</td>
    	</thead>
    	<tbody>
    		@foreach($data as $elem)
	    		<tr>
	    			<td>{{ $elem['id'] }}</td>
	    			<td>{{ $elem['title'] }}</td>
                    <td>{{ $elem['descC'] }}</td>
	    			<td>{{ $elem['text'] }}</td>
                    <td><a href="/eloquent/test/3/{{$elem['id']}}">ТЫК</a></td>
                    <td><a href="/eloquent/test/8/{{$elem['id']}}">ТЫК</a></td>
	    			<td><a href="/eloquent/test/9/{{$elem['id']}}">ТЫК</a></td>
	    		</tr>	
    		@endforeach
    	</tbody>
    </table>
    @if(isset($editPost))
        Запись №{{ $editPost[0] }} успешно обновлена!
    @elseif(isset($delPost))
        Запись №{{ $delPost }} успешно удалена!
    @endif
</body>
</html>