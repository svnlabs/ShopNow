@extends('admin.layouts.default')
@section('css')
<link href="{{asset('backend\plugins\datatable\dataTables.bootstrap4.min.css')}}" rel="stylesheet">



<style type="text/css">


.treeRoot li {
    list-style: none;
    margin: 5px 0 5px 20px;
}
.treeRoot li[level='0'] {
    margin-left: 0;
}
.treeRoot li:not(.parentNode) {
    padding-left: 15px;
}
.triangle {
    width:0;
    height:0;
    overflow:hidden;
    font-size: 0;     /*是因为, 虽然宽高度为0, 但在IE6下会具有默认的 */
    line-height: 0;  /* 字体大小和行高, 导致盒子呈现被撑开的长矩形 */
    border-width:5px;
    transition: transform .2s;
    transform-origin: left center;
    border-style:solid dashed dashed dashed;/*IE6下, 设置余下三条边的border-style为dashed,即可达到透明的效果*/
    border-color:transparent transparent transparent #000;
}
.closed .triangle {
    transform: rotateZ(90deg);
}
.treeRoot div.title {
    height: 21px;
    position: relative;
}
.treeRoot div.title i {
    position: absolute;
    top: 6px;
    left: 0;
}
.treeRoot div.title p {
    position: absolute;
    top: 0;
    left: 15px;
    margin: 0;
}






.indicator {

    margin-right:5px;

}



</style>
@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Category</h4>							
						</div>
						<div class="row">
							<div class="col-md-3 col-lg-3">

								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Tree View</h3>
										
									</div>
									<div class="card-body text-center">
										

										<ul id="tree1" class="treeRoot">

											@foreach(App\Category::where('parent_id', '=', 0)->get() as $category)

											<li>

												{{ $category->name }}

												@if(count($category->childs))

												@include('admin.category.manageChild',['childs' => $category->childs])

												@endif

											</li>

											@endforeach

										</ul>

									</div>
									<div class="card-footer text-center">
										
									</div>
								</div>
							
							</div>
							<div class="col-md-9 col-lg-9">
								<div class="card">
									<div class="card-header">
										<div class="card-title">All Category</div>
										<a class="btn btn-secondary" href="{{route('category.create')}}" style="position: absolute;right: 1%">Add</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
												<thead>
													<tr class="border-bottom-0">
														<th class="wd-15p">Category Name</th>
														<th class="wd-15p">Type</th>							
														<th class="wd-15p">Position</th>
														<th class="wd-10p">Searchable</th>
														<th class="wd-25p">Status</th>
														<th class="wd-25p" width="123">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach($categories as $category)
													<tr>
														<td>{{$category->name}}</td>
														<td>
															@if($category->parent_id == 0)
																Root-Category
															@else
																Sub-Category
															@endif
														</td>
													
														<td>{{$category->position}}</td>
														<td>{{$category->is_searchable}}</td>
														<td>{{$category->is_active}}</td>
														<td class="center" >
															
															<a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Edit </a>
															<a href="" class="btn btn-danger" data-toggle="modal"
															data-target="#DelModal{{$category->id}}">
															<i class="fa fa-times"></i> Delete </a>
															<form style="display: inline-block;" action="{{route('category.destroy',$category->id)}}" method="post" class="delete">
																	{{csrf_field()}}
																	<input name="_method" type="hidden" value="DELETE">


															<div class="sweet-alert showSweetAlert visible" id="DelModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
																
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

$.fn.extend({
    treed: function (o) {

        var openedClass = 'glyphicon-minus-sign';
        var closedClass = 'glyphicon-plus-sign';

        if (typeof o != 'undefined'){
            if (typeof o.openedClass != 'undefined'){
                openedClass = o.openedClass;
            }
            if (typeof o.closedClass != 'undefined'){
                closedClass = o.closedClass;
            }
        };

        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
        tree.find('.branch .indicator').each(function(){
            $(this).on('click', function () {
                $(this).closest('li').click();
            });
        });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});
</script>
@stop