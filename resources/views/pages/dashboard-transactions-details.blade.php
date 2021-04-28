@extends('layouts.dashboard')

@section('title')
Dashboard | Transaction Details
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">#TOKOPAEDI0877</h2>
      <p class="dashboard-subtitle">Transactions Details</p>
    </div>
    <div class="dashboard-content" id="transactionDetails">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-12 col-sm-12 col-md-4">
                  <img src="/images/product-details-dashboard.png" class="w-100 mb-3 img-fluid"
                    alt="product-details-dashboard" />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Customer Name</div>
                      <div class="product-subtitle">
                        Rahmat Subandi
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Product Name</div>
                      <div class="product-subtitle">
                        Sianida Coffe
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Date of Transaction
                      </div>
                      <div class="product-subtitle">
                        12 Januari, 2020
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Payment Status</div>
                      <div class="product-subtitle text-danger">
                        Shipping
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Total Amount</div>
                      <div class="product-subtitle">Rp.280,000</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Mobile</div>
                      <div class="product-subtitle">
                        +628 2020 12345
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mt-4">
                  <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address I</div>
                      <div class="product-subtitle">
                        Jln. Sama Aku
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address II</div>
                      <div class="product-subtitle">
                        Nikah Sama Dia
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">Bekasi</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Postal Code</div>
                      <div class="product-subtitle">17519</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Country</div>
                      <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                      <div class="product-title">Shipping Status</div>
                      <select name="status" id="status" class="form-control" v-model="status">
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                      <div class="col-md-4 col-lg-3">
                        <div class="product-title">Input Resi</div>
                        <input type="text" class="form-control" name="resi" v-model="resi" />
                      </div>
                      <div class="col-md-4 col-lg-2 btn-block">
                        <button type="submit" class="btn btn-success mt-4">
                          Update Resi
                        </button>
                      </div>
                    </template>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-right">
                  <button type="submit" class="btn btn-success mt-4 px-5">
                    Save Now
                  </button>
                </div>
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
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
    el: "#transactionDetails",
    data: {
      status: "SHIPPING",
      resi: "JNE23429347239742",
    },
  });
</script>
@endpush