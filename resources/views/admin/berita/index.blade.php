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
          <a href="{{ route('berita.create') }}" class="btn btn-success float-right"><i class="fa fa-plus-square" aria-hidden="true">  Tambah</i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
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
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

@endsection