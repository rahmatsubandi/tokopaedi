@extends('layouts.admin')

@section('title')
Dashboard | Product
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Product</h2>
      <p class="dashboard-subtitle">List of products</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('product.create') }}" class="btn btn-success mb-3">
                <i class="fas fa-plus-circle"></i> Add Product
              </a>
              <div class="table-responsive">
                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Owner</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
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
  // Datatable
      $(document).ready(function() {
        $('#crudTable').DataTable({
          processing: true,
          serverSide: true,
          ordering: true,

          ajax: {
            url: '{!! url()->current() !!}',
          },
          columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'user.name', name: 'user.name' },
            { data: 'category.name', name: 'category.name' },
            { data: 'price', name: 'price' },
            { data: 'description', name: 'description' },
            { 
              data: 'action',
              name: 'action',
              orderable: false,
              searchable: false,
              width: '15%'
            }
          ]
        });
      });
</script>
@endpush