

<?php 
// echo "<pre>";
// print_r($res);
?>

@foreach($res->childs as $child)
	@foreach($child->childs as $grand)
		@foreach($grand->products as $product)
			{{$product->name}}
			<br>
		@endforeach
	@endforeach
	@foreach($child->products as $product)
		{{$product->name}}
		<br>
	@endforeach
@endforeach




