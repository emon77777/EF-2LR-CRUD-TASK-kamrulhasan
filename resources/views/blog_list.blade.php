@extends('master')
@section('page_content')

<div class="page-title">
	<div class="title_left">
		<h3>All Article</h3>
	</div>
</div>
<div class="clearfix"></div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif
<div class="x_content">
	<table id="datatable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>SL</th>
				<th>Title</th>
				<th>Description</th>
				<th>Published on</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>	
			@foreach($all_article as $key=> $val)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $val->title }}</td>
				<td>{{ str_limit($val->description, 80) }}</td>
				<td>{{ $val->created_at->todatestring() }}</td>
				<td>
					<!-- <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
						<a href=""><i class="fa fa-trash"></i></a>
					</div> -->
					<div class="fa-hover col-md-3 col-sm-4 col-xs-12">
						<a class="btn btn-success" href="{{route('blogs.edit',$val->id)}}"><i class="fa fa-edit"></i></a>

						<form action="{{ route('blogs.destroy', $val->id) }}" method="POST">
							@csrf
							{{ method_field("DELETE") }}
							<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection