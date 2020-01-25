<div class="card-body">
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" value="{{ isset($data->judul) ? $data->judul : null }}">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Kategori</label>
				<select class="form-control select2bs4" name="kategori_id" style="width: 100%;">
					<?php foreach (\App\Model\Categori::all() as $v): ?>
				       <option value="{{ $v->id }}" {{ (isset($data->kategori) && $data->kategori == $v->categori) ? 'selected' : null }}>{{ $v->categori }}</option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-sm-12">
          	<!-- textarea -->
          	<div class="form-group">
            	<label>Deskripsi</label>
            	<textarea class="form-control" rows="3" name="deskripsi">{{ isset($data->deskripsi) ? $data->deskripsi : null }}</textarea>
         	 </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
          	<div class="form-group">
           		<label>Isi</label>
            	<textarea class="form-control" rows="3" name="isi">{{ isset($data->isi) ? $data->isi : null }}</textarea>
          	</div>
        </div>
    </div>
	<!-- /.row -->
</div>
<!-- /.card-body -->