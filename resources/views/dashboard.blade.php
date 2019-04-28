@extends('master')
@section('page_content')

<div class="page-title">
	<div class="title_left">
		<h3>Dashboard</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row tile_count">
	<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
		<span class="count_top"><i class="fa fa-user"></i> Total Article</span>
		<div class="count">{{ $article_no }}</div>
	</div>
</div>
@endsection