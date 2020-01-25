@extends('admin.index')
@section('content')
@component('card.head')
	Edit {{ $title }}
@endcomponent
<section class="content">
	<div class="container-fluid">
		<!-- SELECT2 EXAMPLE -->
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Edit {{ $title }}</h3>
			</div>
			<!-- /.card-header -->

			<form action="{{ route('user.update', $data->id)}}" method="post">
			@csrf

                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="{{ $data->id }}">
				@include('admin.user.form')

				<div class="card-footer">
					<a href="{{ route('user.index') }}" class="btn btn-danger btn-lg">Cancel</a>
					<button type="submit" class="btn btn-warning btn-lg" title="update">Update</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div><!-- /.container-fluid -->
</section>

@endsection