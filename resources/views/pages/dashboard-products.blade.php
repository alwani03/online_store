@extends('layouts.dashboard')

@section('title')
    Online Store Product
@endsection

@section('content')

    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">My Products</h2>
          <p class="dashboard-subtitle">
            Manage it well and get money
          </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <a
                href="/dashboard-products-create.html"
                class="btn btn-success"
                >Add New Product</a
              >
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
              >
                <div class="card-body">
                  <img
                    src="/images/product-coffe-d.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
              >
                <div class="card-body">
                  <img
                    src="/images/product-shoes-d.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
              >
                <div class="card-body">
                  <img
                    src="/images/product-coffe-d.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
              >
                <div class="card-body">
                  <img
                    src="/images/product-shoes-d.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                class="card card-dashboard-product d-block"
                href="/dashboard-products-details.html"
              >
                <div class="card-body">
                  <img
                    src="/images/product-shoes-d.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection