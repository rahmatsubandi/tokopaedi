@extends('layouts.admin')

@section('title')
Category | Edit
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Category</h2>
      <p class="dashboard-subtitle">Edit new category</p>
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
          <div class="card">
            <div class="card-body">
              <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama Kategori</label>
                      <input type="text" name="name" class="form-control" id="" placeholder="Nama Kategori"
                        value="{{ $item->name }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Foto</label>
                      <input type="file" name="photo" class="form-control" id="" placeholder="Foto">
                      <i style="font-size: 12px;">
                        <sup class="text-danger">*</sup>
                        Just leave it blank if you don't wantto change the image.
                      </i>
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