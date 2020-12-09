@extends('layouts.dashboard')

@section('title')
Dashboard | Products
@endsection

@section('content')
{{-- Section Content --}}
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Products</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>
    <div class="dashboard-content">
      <!-- Button Add Product -->
      <div class="row col-12">
        <a href="/dashboard-products-create.html" class="btn btn-success">
          Add New Product
        </a>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
            <div class="card-body">
              <img src="/images/product-card-1.png" alt="product-card-1" class="w-100 mb-2" />
              <div class="product-title">Sianida Coffe</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
            <div class="card-body">
              <img src="/images/product-card-2.png" alt="product-card-2" class="w-100 mb-2" />
              <div class="product-title">Sepatu NIKI</div>
              <div class="product-category">Shoes</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
            <div class="card-body">
              <img src="/images/product-card-3.png" alt="product-card-3" class="w-100 mb-2" />
              <div class="product-title">Sianida Coffe</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
            <div class="card-body">
              <img src="/images/product-card-4.png" alt="product-card-4" class="w-100 mb-2" />
              <div class="product-title">Sepatu NIKI</div>
              <div class="product-category">Shoes</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="/dashboard-products-details.html" class="card card-dashboard-product d-block">
            <div class="card-body">
              <img src="/images/product-card-5.png" alt="product-card-5" class="w-100 mb-2" />
              <div class="product-title">Sofa Enak</div>
              <div class="product-category">Furniture</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection