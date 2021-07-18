@extends('layouts.admin')

@section('title')
User | Create
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">User</h2>
      <p class="dashboard-subtitle">Create new user</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            {{ $error }}
            @endforeach
          </div>
          @endif
          {{-- memberikan alert dari jika email sudah ada di database --}}
          @if(Session::has('status'))
          <div class="alert alert-danger">
            {{ Session::get('status') }}
          </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama User</label>
                      <input type="text" name="name" class="form-control" id="" placeholder="Nama User" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Email User</label>
                      <input type="email" name="email" class="form-control" id="" placeholder="Email User" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Password User</label>
                      <input type="password" name="password" class="form-control" id="" placeholder="Password User"
                        required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Roles</label>
                      <select name="roles" id="" class="form-control" required>
                        <option value="ADMIN">Admin</option>
                        <option value="USER">User</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5 mt-3">Save Now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);
</script>
@endpush