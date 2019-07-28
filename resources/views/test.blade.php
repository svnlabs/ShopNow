

<?php 
 echo "<pre>";
 print_r($products);
?>


{{-- @foreach($products->childs as $child)
{{$child->name}}
<br>
	@foreach($child->childs as $grand)
	{{$grand->name}}({{$grand->products->count()}})
	<br>
	@endforeach
@endforeach --}}