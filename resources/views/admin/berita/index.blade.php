@extends('admin.index')
@section('content')

@component('card.head')
{{ $title }}
@endcomponent

<section class="content">
  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data {{ $title }}</h3>
          <div class="col-sm-12">
            <a href="{{ route('berita.create') }}" class="btn btn-success btn-sm float-right"><i class="far fa-plus-square" aria-hidden="true">  Tambah Data</i></a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <form action="{{ url()->current() }}">  
                <div class="input-group-append">
                  <input type="text" name="keyword" class="form-control" placeholder="Search for..."/>
                  <button class="input-group-text btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          <br>
          <table id="sebarang" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Isi</th>
                <th>User</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $no => $value): ?>
                <tr>

                  <td>{{ ++$no }}</td>
                  <td class="text-center"><img src="{{ asset('public/gambar/'.$value->foto) }}" alt="" width="50px"></td>
                  <td>{{ $value->judul }}</td>
                  <td>{{ $value->kategori->categori }}</td>
                  <td>{{ $value->deskripsi }}</td>
                  <td>{{ $value->isi }}</td>
                  <td>{{ $value->user->name }}</td>
                  <td>
                    <form method="post" action="{{ route('berita.destroy', $value->id) }}">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <a href="{{ url('admin/berita/'. $value->id . '/edit')}}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                      <button type="submit" class="btn btn-danger btn-sm js-hapus" title="hapus">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            {{ $data->render() }}
          </li>
        </ul>
      </nav>
      <!-- / .card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>

@endsection