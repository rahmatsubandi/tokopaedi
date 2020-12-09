@extends('layouts.dashboard')

@section('title')
Dashboard | Transactions
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Transactions</h2>
      <p class="dashboard-subtitle">
        Big result start from the small one
      </p>
    </div>
    <div class="dashboard-content">
      <!-- Recent Transactions -->
      <div class="row">
        <div class="col-12 mt-2">
          <!-- Navs -->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-sell-product-tab" data-toggle="pill" href="#pills-sell-product"
                role="tab" aria-controls="pills-sell-product" aria-selected="true">Sell Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-buy-product-tab" data-toggle="pill" href="#pills-buy-product" role="tab"
                aria-controls="pills-buy-product" aria-selected="false">Buy Product</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sell-product" role="tabpanel"
              aria-labelledby="pills-sell-product-tab">
              <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-1.png" alt="dashboard-icon-product-1" />
                    </div>
                    <div class="col-md-4">Shirup Zaitun</div>
                    <div class="col-md-3">Alda Amellia</div>
                    <div class="col-md-3">26 November, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="dashboard-arrow-right" />
                    </div>
                  </div>
                </div>
              </a>
              <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-2.png" alt="dashboard-icon-product-2" />
                    </div>
                    <div class="col-md-4">NIKI</div>
                    <div class="col-md-3">Kimin</div>
                    <div class="col-md-3">25 November, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="dashboard-arrow-right" />
                    </div>
                  </div>
                </div>
              </a>
              <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-3.png" alt="dashboard-icon-product-3" />
                    </div>
                    <div class="col-md-4">Sofa Duduk</div>
                    <div class="col-md-3">Panjul</div>
                    <div class="col-md-3">24 November, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="dashboard-arrow-right" />
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tab-pane fade" id="pills-buy-product" role="tabpanel" aria-labelledby="pills-buy-product-tab">
              <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-1.png" alt="dashboard-icon-product-1" />
                    </div>
                    <div class="col-md-4">Shirup Zaitun</div>
                    <div class="col-md-3">Alda Amellia</div>
                    <div class="col-md-3">26 November, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="dashboard-arrow-right" />
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection