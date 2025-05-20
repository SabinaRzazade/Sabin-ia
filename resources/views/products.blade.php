@extends('layouts.app')

@section('title', 'SABIN | Products')


@section('content')

    <section class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2
            class="text-uppercase fw-bold"
            style="font-family: 'Modern No. 20', serif"
          >
            Our Products
          </h2>
          <p class="text-muted fs-5">
            Explore our range of elegant, timeless designs.
          </p>
        </div>
        <!-- Filter Bar -->
        <div class="filter-bar py-4 px-3 px-md-5 border-bottom bg-white">
          <div class="container">
            <div class="row gy-3 align-items-end justify-content-between">
              <!-- Category -->
              <div class="col-12 col-md-4">
                <label for="categoryFilter" class="form-label fw-semibold"
                  >Category</label
                >
                <select
                  id="categoryFilter"
                  class="form-select rounded-pill custom-filter-select"
                >
                  <option selected>All</option>
                  <option>Dresses</option>
                  <option>Tops</option>
                  <option>Bottoms</option>
                  <option>Outerwear</option>
                  <option>Accessories</option>
                </select>
              </div>

              <!-- Price -->
              <div class="col-12 col-md-4">
                <label for="priceFilter" class="form-label fw-semibold"
                  >Price</label
                >
                <select
                  id="priceFilter"
                  class="form-select rounded-pill custom-filter-select"
                >
                  <option selected>All</option>
                  <option>Under $100</option>
                  <option>$100 - $200</option>
                  <option>$200 - $300</option>
                  <option>$300+</option>
                </select>
              </div>

              <!-- Sort -->
              <div class="col-12 col-md-4 text-md-end">
                <label for="sortFilter" class="form-label fw-semibold"
                  >Sort by</label
                >
                <select
                  id="sortFilter"
                  class="form-select rounded-pill custom-filter-select w-100 w-md-auto"
                >
                  <option selected>Default</option>
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                  <option>Newest Arrivals</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/il_1588xN.3563981433_mu3l (1).jpg"
                class="card-img-top"
                alt="Product 1"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Silk Midi Dress</h5>
                <p class="card-text">$80.00</p>
                <a href="{{route("sabina.details")}}" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/OIP (2).jfif"
                class="card-img-top"
                alt="Product 2"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Wool Blend Coat</h5>
                <p class="card-text">$90.00</p>
                <a href="{{route("sabina.details")}}" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/dbde0533e90eda5f834d41510522b472.jpg"
                class="card-img-top"
                alt="Product 3"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Ruffles Suspenders Dress</h5>
                <p class="card-text">$75.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img src="/images/R.jfif" class="card-img-top" alt="Product 1" />
              <div class="card-body text-center">
                <h5 class="card-title">High Waist Layered Palazzo Trousers</h5>
                <p class="card-text">$40.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/il_1588xN.3563981433_mu3l (1).jpg"
                class="card-img-top"
                alt="Product 1"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Silk Midi Dress</h5>
                <p class="card-text">$80.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/OIP (2).jfif"
                class="card-img-top"
                alt="Product 2"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Wool Blend Coat</h5>
                <p class="card-text">$90.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/dbde0533e90eda5f834d41510522b472.jpg"
                class="card-img-top"
                alt="Product 3"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Ruffles Suspenders Dress</h5>
                <p class="card-text">$75.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img src="/images/R.jfif" class="card-img-top" alt="Product 1" />
              <div class="card-body text-center">
                <h5 class="card-title">High Waist Layered Palazzo Trousers</h5>
                <p class="card-text">$40.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/il_1588xN.3563981433_mu3l (1).jpg"
                class="card-img-top"
                alt="Product 1"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Silk Midi Dress</h5>
                <p class="card-text">$80.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/OIP (2).jfif"
                class="card-img-top"
                alt="Product 2"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Wool Blend Coat</h5>
                <p class="card-text">$90.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/dbde0533e90eda5f834d41510522b472.jpg"
                class="card-img-top"
                alt="Product 3"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Ruffles Suspenders Dress</h5>
                <p class="card-text">$75.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img src="/images/R.jfif" class="card-img-top" alt="Product 1" />
              <div class="card-body text-center">
                <h5 class="card-title">High Waist Layered Palazzo Trousers</h5>
                <p class="card-text">$40.00</p>
                <a href="#" class="btn btn-sm btn-outline-dark">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">&lt;&lt;</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">&gt;&gt;</a>
    </li>
  </ul>
</nav>
@endsection
