<div class="card-body">
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>{{ $title }}</label>
				<input type="text" class="form-control" name="categori" value="{{ isset($data->categori) ? $data->categori : null }}">
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>
<!-- /.card-body -->