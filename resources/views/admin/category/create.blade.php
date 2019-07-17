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
							<h4 class="page-title">Category</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('product.index')}}">Category</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add new</li>
							</ol>
						</div>

						
					
						<div class="row row-deck">
							<div class="col-lg-12">
								<form class="card" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="card-header">
										<h3 class="card-title">Add Category</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="form-label">Root Category</label>
													
													<select name="parent_id" class="form-control custom-select">
														<option selected="" hidden value="0">Select One</option>
														@foreach( App\Category::where('parent_id',0)->get() as $parent)
														<option value="{{$parent->id}}">{{$parent->name}}</option>
														@endforeach
													</select>
													
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Name</label>
													<input type="text" name="name" class="form-control" placeholder="Product Price">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Position</label>
													<input type="number" name="position" class="form-control" placeholder="Special Price">
												</div>
											</div>
											
											
											
											<div class="col-md-12">
												
												<div class="form-group">
													<div class="form-label">Searchable</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_searchable" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">This is searchable category </span>
													</label>
												</div>
											
												<div class="form-group">
													<div class="form-label">Is this Category Active?</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_active" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">This Category is Active</span>
													</label>
												</div>
											</div>
								
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Add Category</button>
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