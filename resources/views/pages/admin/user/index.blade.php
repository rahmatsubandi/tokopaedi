@extends('layouts.admin')

@section('title')
Dashboard | User
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">User</h2>
      <p class="dashboard-subtitle">List of user</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('user.create') }}" class="btn btn-success mb-3">
                <i class="fas fa-plus-circle"></i> Add User
              </a>
              <div class="table-responsive">
                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Roles</th>
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
            { data: 'email', name: 'email' },
            { data: 'roles', name: 'roles' },
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