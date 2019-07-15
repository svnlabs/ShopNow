@extends('admin.layouts.default')
@section('css')
<link href="{{asset('backend\plugins\datatable\dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">All Products</h4>							
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Data Tables</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
												<thead>
													<tr class="border-bottom-0">
														<th class="wd-15p">Product Name</th>
														<th class="wd-15p">Price</th>
														<th class="wd-20p">Picture</th>
														<th class="wd-15p">Stock</th>
														<th class="wd-10p">Special Price</th>
														<th class="wd-25p">Selling Price</th>
														<th class="wd-25p">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach($products as $product)
													<tr>
														<td>{{$product->name}}</td>
														<td>{{$product->price}}</td>
														<td><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 100px;"></td>
														<td>{{$product->qty}}</td>
														<td>{{$product->special_price}}</td>
														<td>{{$product->selling_price}}</td>
														<td class="center">
															
															<a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">Edit </a>

															<form style="display: inline-block;" action="{{route('product.destroy',$product->id)}}" method="post" class="delete">
																{{csrf_field()}}
																<input name="_method" type="hidden" value="DELETE">
																<button class="btn btn-danger" type="submit">Delete</button>
															</form>




														</td>
														

													</tr>
													@endforeach
													
												</tbody>
											</table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
						</div>
					</div>
@stop
@section('js')
<!-- Data tables -->
		<script src="{{asset('backend/plugins\datatable\jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend/plugins\datatable\dataTables.bootstrap4.min.js')}}"></script>

		<!-- Select2 js -->
		<script src="{{asset('backend/plugins\select2\select2.full.min.js')}}"></script>
<script>
$(function(e) {
$('#example').DataTable();
} );
</script>
@stop