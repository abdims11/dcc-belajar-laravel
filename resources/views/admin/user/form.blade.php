<div class="card-body">
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" class="form-control" name="name" value="{{ isset($data->name) ? $data->name : null }}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" value="{{ isset($data->email) ? $data->email : null }}">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" value="">
				<input type="hidden" class="form-control" name="password_skr" value="{{ isset($data->password) ? $data->password : null }}">
			</div>
			<div class="form-group">
				<label>Level User</label>
				<select class="form-control select2bs4" name="level" style="width: 100%;">
					<option value="1" {{ (isset($v->level) && $v->level == 1 ? 'selected' : null) }}>Super Admin</option>
					<option value="2" {{ (isset($v->level) && $v->level == 2 ? 'selected' : null) }}>Admin</option>
					<option value="3" {{ (isset($v->level) && $v->level == 3 ? 'selected' : null) }}>User</option>
				</select>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>
<!-- /.card-body -->