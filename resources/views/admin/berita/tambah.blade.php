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
				<h3 class="card-title">Tabah Berita</h3>
			</div>
			<!-- /.card-header -->

			<form action="{{ route('berita.store')}}" method="post" role="form">
			@csrf
				@include('admin.berita.form')

				<div class="card-footer">
					<a href="{{ route('berita.index') }}" class="btn btn-danger btn-lg">Cancel</a>
					<button type="submit" class="btn btn-success btn-lg" title="save">Save</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div><!-- /.container-fluid -->
</section>
@endsection

