@extends('admin.layouts.default')
@section('css')
<link href="{{asset('backend\plugins\datatable\dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Deals</h4>							
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">All Deals</div>
										<a class="btn btn-secondary" href="{{route('deal.create')}}" style="position: absolute;right: 1%">Add</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
												<thead>
													<tr class="border-bottom-0">
														<th class="wd-15p">Deal Title</th>
														<th class="wd-15p">Deal Description</th>
														<th class="wd-15p">Front Image</th>
														<th class="wd-15p">Back Image</th>
														<th class="wd-15p">Start Date</th>
														<th class="wd-15p">End Date</th>

														<th class="wd-20p">Status</th>												
														<th class="wd-25p" width="123">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach($deals as $deal)
													<tr>
														<td>{{$deal->title}}</td>
														<td>{{$deal->description}}</td>
														<td>
															<img src="{{url($deal->front_image? 'dealimg/'.$deal->front_image:'dealimg/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 66px;">															
														</td>
														<td>
															<img src="{{url($deal->back_image? 'dealimg/'.$deal->back_image:'dealimg/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 66px;">
														</td>

														<td>{{$deal->start_date}}</td>
														<td>{{$deal->end_date}}</td>
														<td>{{$deal->is_active}}</td>
														
														<td class="center" >
															
															<a href="{{route('deal.edit',$deal->id)}}" class="btn btn-warning">Edit </a>
															<a href="" class="btn btn-danger" data-toggle="modal"
															data-target="#DelModal{{$deal->id}}">
															<i class="fa fa-times"></i> Delete </a>
															<form style="display: inline-block;" action="{{route('deal.destroy',$deal->id)}}" method="post" class="delete">
																	{{csrf_field()}}
																	<input name="_method" type="hidden" value="DELETE">


															<div class="sweet-alert showSweetAlert visible" id="DelModal{{$deal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
																
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