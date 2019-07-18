@extends('admin.layouts.default')
@section('css')
<link href="{{asset('backend\plugins\datatable\dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Products</h4>							
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">All Products</div>
										<a class="btn btn-secondary" href="{{route('product.create')}}" style="position: absolute;right: 1%">Add</a>
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
														<th class="wd-25p">Category</th>
														<th class="wd-25p">Brand</th>
														<th class="wd-25p" width="123">Actions</th>
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
														<td>{{$product->category->name or '-'}}</td>
														<td>{{$product->brand->name or '-'}}</td>
														<td class="center" >
															
															<a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">Edit </a>
															<a href="" class="btn btn-danger" data-toggle="modal"
															data-target="#DelModal{{$product->id}}">
															<i class="fa fa-times"></i> Delete </a>
															<form style="display: inline-block;" action="{{route('product.destroy',$product->id)}}" method="post" class="delete">
																	{{csrf_field()}}
																	<input name="_method" type="hidden" value="DELETE">


															<div class="sweet-alert showSweetAlert visible" id="DelModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
																
																<div class="sa-icon sa-warning pulseWarning" style="display: block;">
																	<span class="sa-body pulseWarningIns"></span>
																	<span class="sa-dot pulseWarningIns"></span>
																</div>

																
																	<h2>Are you sure?</h2>
																	<p style="display: block;">You won't be able to revert this!</p>
																	
																	<div class="sa-button-container">
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		<div class="sa-confirm-button-container">
																			<button class="btn btn-danger" type="submit">Delete</button>																			
																		</div>
																	</div>
																	
																	
																</form>



															</div>




															

															
																
															




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