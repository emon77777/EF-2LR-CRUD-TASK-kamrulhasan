@extends('master')
@section('page_content')

<div class="page-title">
	<div class="title_left">
		<h3>Edit Article</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content">
				<br />
				<form method="post" action="{{ route('blogs.update', $blog->id) }}" class="form-horizontal form-label-left">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Blog Title <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" value="{{$blog->title}}" name="title" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Blog Description <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea rows="10" name="description" class="resizable_textarea form-control">{{$blog->description}}</textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-9 col-md-offset-2 col-sm-9 col-xs-12 text-center">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection