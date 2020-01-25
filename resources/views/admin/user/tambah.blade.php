@extends('admin.index')
@section('content')
@component('card.head')
	Tambah {{ $title }}
@endcomponent
<section class="content">
	<div class="container-fluid">
		<!-- SELECT2 EXAMPLE -->
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Tambah {{ $title }}</h3>
			</div>
			<!-- /.card-header -->

			<form action="{{ route('user.store')}}" method="post" role="form">
			@csrf
				@include('admin.user.form')

				<div class="card-footer co-sm-12">
					<a href="{{ route('user.index') }}" class="btn btn-danger btn-lg">Cancel</a>
					<button type="submit" class="btn btn-success btn-lg" title="save">Save</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div><!-- /.container-fluid -->
</section>
@endsection

