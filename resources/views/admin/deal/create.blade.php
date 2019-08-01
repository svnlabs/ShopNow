@extends('admin.layouts.default')
@section('css')
<!-- select2 Plugin -->
		<link href="{{asset('backend\plugins\select2\select2.min.css')}}" rel="stylesheet">

		<!-- Time picker Plugin -->
		<link href="{{asset('backend\plugins\time-picker\jquery.timepicker.css')}}" rel="stylesheet">

		<!-- Date Picker Plugin -->
		<link href="{{asset('backend\plugins\date-picker\spectrum.css')}}" rel="stylesheet">

		<link href="{{asset('backend\plugins\fileuploads\css\dropify.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend\plugins\wysiwyag\richtext.css')}}" rel="stylesheet" type="text/css">

@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Deals</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('deal.index')}}">Deals</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add new</li>
							</ol>
						</div>

						
					
						<div class="row row-deck">
							<div class="col-lg-12">
								<form class="card" method="post" action="{{route('deal.store')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="card-header">
										<h3 class="card-title">Add Deal</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Title</label>
													<input type="text" name="title" class="form-control" placeholder="Give a name for your Deal">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Description</label>
													<input type="text" name="description" class="form-control" placeholder="Add Deal details">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Deal Page Link</label>
													<input type="text" name="link" class="form-control" placeholder="Copy From Browser Url And paste Here">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Start Date</label>
													<div class="input-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control " name="start_date" placeholder="MM/DD/YYYY" type="date">
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">End Date</label>
													<div class="input-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control " name="end_date" placeholder="MM/DD/YYYY" type="date">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="card-header">
													<h3 class="card-title">Image Upload</h3>
												</div>
												<div class=" card-body">
													<div class="row">
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Background</label>
															<input type="file" name="back_image" class="dropify" data-height="180">
														</div>
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Front Image</label>
															<input type="file" name="front_image" class="dropify" data-height="180">
														</div>
														
														
													</div>
													
												</div>
											</div>
											
											
											<div class="col-md-4">
												
												
												<div class="form-group">
													<div class="form-label">Want to show this deal at front page??</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_active" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">Yes! Yes!!</span>
													</label>
												</div>
											</div>
								
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Add Deal</button>
									</div>
								</form>
							</div>
						</div>
					</div>
@stop
@section('js')
<!-- Timepicker js -->
		<script src="{{asset('backend\plugins\time-picker\jquery.timepicker.js')}}"></script>
		<script src="{{asset('backend\plugins\time-picker\toggles.min.js')}}"></script>

		<!-- Datepicker js -->
		<script src="{{asset('backend\plugins\date-picker\spectrum.js')}}"></script>
		<script src="{{asset('backend\plugins\date-picker\jquery-ui.js')}}"></script>
		<script src="{{asset('backend\plugins\input-mask\jquery.maskedinput.js')}}"></script>
		<script src="{{asset('backend\plugins\wysiwyag\jquery.richtext.js')}}"></script>
		<!-- Inline js -->
		<script src="{{asset('backend\plugins\select2\select2.full.min.js')}}"></script>

		<script src="{{asset('backend\js\select2.js')}}"></script>
		<!-- file uploads js -->
        <script src="{{asset('backend\plugins\fileuploads\js\dropify.min.js')}}"></script>
        
        <script type="text/javascript">
        	$(function(e) {
        	$('.content').richText();
			$('.content2').richText();
			});
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
        </script>
       
@stop