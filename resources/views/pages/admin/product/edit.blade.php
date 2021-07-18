@extends('layouts.admin')

@push('addon-style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@section('title')
Product | Edit
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Product</h2>
      <p class="dashboard-subtitle">Edit new product</p>
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
              <form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Name Product</label>
                      <input type="text" name="name" class="form-control" id="" placeholder="Nama Product"
                        value="{{ $item->name }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Owner Product</label>
                      <select name="users_id" id="" class="form-control">
                        <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Category Product</label>
                      <select name="categories_id" id="" class="form-control">
                        <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Price Product</label>
                      <input type="number" name="price" class="form-control" id="" placeholder="Price Product"
                        value="{{ $item->price }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Description Product</label>
                      <textarea name="description" id="editor">{!! $item->description !!}</textarea>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);

  $('#editor').summernote({
    placeholder: 'Please write a complete product description..',
    tabsize: 2,
    height: 200
  });
</script>
@endpush