@extends('admin.layouts.default')
@section('css')
<link href="{{asset('backend\plugins\datatable\dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Slides</h4>							
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">All Slides</div>
										<a class="btn btn-secondary" href="{{route('slides.create')}}" style="position: absolute;right: 1%">Add</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
												<thead>
													<tr class="border-bottom-0">												
														<th class="wd-15p">Image</th>
														<th class="wd-20p">Show Product</th>												
														<th class="wd-20p">Status</th>												
														<th class="wd-25p" width="123">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach($sliders as $slider)
													<tr>
														
														<td>
															<img src="{{url($slider->image? 'slide/'.$slider->image:'slide/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 100px;">
															
															

															
														</td>
														<td>{{$slider->hide_product=='on'? 'No': 'Yes'}}</td>
														<td>{{$slider->is_active}}</td>
														
														<td class="center" >
															
															<a href="{{route('slides.edit',$slider->id)}}" class="btn btn-warning">Edit </a>
															<a href="" class="btn btn-danger" data-toggle="modal"
															data-target="#DelModal{{$slider->id}}">
															<i class="fa fa-times"></i> Delete </a>
															<form style="display: inline-block;" action="{{route('slides.destroy',$slider->id)}}" method="post" class="delete">
																	{{csrf_field()}}
																	<input name="_method" type="hidden" value="DELETE">


															<div class="sweet-alert showSweetAlert visible" id="DelModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
																
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