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
							<h4 class="page-title">Sliders</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('slides.index')}}">Sliders</a></li>
								<li class="breadcrumb-item active" aria-current="page">Update new</li>
							</ol>
						</div>

						
					
						<div class="row row-deck">
							<div class="col-lg-12">
								<form class="card" method="post" action="{{route('slides.update', ['id' => $slider->id])}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="card-header">
										<h3 class="card-title">Update Slides</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Title</label>
													<input type="text" name="title" class="form-control" placeholder="Slider Name" value="{{$slider->title}}">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Feature</label>
													<input type="text" name="feature" class="form-control" placeholder="Slider Feature 1 ,Slider Feature 2 ,Slider Feature 3 " value="{{$slider->feature}}">
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
															<input type="file" name="image1" class="dropify" data-height="180">
														</div>
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Background</label>
															<img src="{{url($slider->image1? 'slide/'.$slider->image1: 'slide/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 180px;">
														</div>
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Front Image</label>
															<input type="file" name="image2" class="dropify" data-height="180">
														</div>
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Front Image</label>
															<img src="{{url($slider->image2? 'slide/'.$slider->image2: 'slide/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 180px;">
														</div>
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Showcase</label>
															<input type="file" name="image3" class="dropify" data-height="180">
														</div>
														<div class="col-lg-4 col-sm-12">
															<label class="form-label">Showcase</label>
															<img src="{{url($slider->image3? 'slide/'.$slider->image3: 'slide/noimage.jpg')}}" alt="" class="img-responsive" style="max-height: 180px;">
														</div>
														
													</div>
													
												</div>
											</div>
											
											
											<!-- <div class="col-md-4">
												
												
												<div class="form-group">
													<div class="form-label">Is this Slider Active?</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_active" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">This Slider is Active</span>
													</label>
												</div>
											</div> -->
								
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Update Slider</button>
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