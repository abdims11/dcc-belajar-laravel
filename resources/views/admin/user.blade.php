@extends('admin.index')
@section('content')
@component('card.head')
 Profile User
@endcomponent
<section class="content">
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="{{ asset('AdminLTE/dist/img/abdi.jpg') }}"
                 alt="User profile picture">
          </div>

          <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

          <p class="text-muted text-center">{{ auth()->user()->email }}</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Followers</b> <a class="float-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="float-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="float-right">13,287</a>
            </li>
          </ul>

          <a href="https://www.instagram.com/abdi_massimpuang/" class="btn btn-primary btn-block"><b><i class="fab fa-instagram"></i>   Follow</b></a>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.Left col -->
@endsection