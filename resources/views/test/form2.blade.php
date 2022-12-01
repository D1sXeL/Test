@if (!isset($var1) and !isset($var2))
<form>
	<input type="text" name="var1">
	<input type="text" name="var2">
	<input type="submit" name="">
</form>
@else
	{{ $var1+$var2 }}
@endif