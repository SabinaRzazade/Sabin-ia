@extends('layouts.app')

@section('title', 'SABIN | Details')


@section('content')
<div class=" container py-5">
      <div class="detail row align-items-center">
        <div class="col-md-6 col-lg-5">
          <img
            src="images/il_1588xN.3563981433_mu3l (1).jpg"
            alt="Elegant Silk Dress"
            class="product-image"
          />
        </div>
        <div class="detail1 col-md-6 col-lg-6">
          <h1 class="display-6 fw-bold">Elegant Silk Dress</h1>
          <p class="fs-4 text-muted">$249.00</p>
          <p>
            This luxurious silk dress is crafted for timeless elegance. Soft
            fabric, flattering fit, and a classic silhouette—perfect for any
            occasion.
          </p>
          <div class=" mb-3">
            <label for="size" class="form-label">Size</label>
            <select id="size" class="form-select w-auto">
              <option>XS</option>
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
            </select>
          </div>
          <button class="btn btn-border-color:">Add to Cart</button>
          <div class="text-muted small mt-3">
            <p>
              <strong>Shipping:</strong> Free worldwide shipping on all orders
              over $300.
            </p>
            <p>
              <strong>Returns:</strong> 30-day return policy for a full refund.
            </p>
          </div>
        </div>
      </div>
    </div>
    <section class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2
            class="text-uppercase fw-bold"
            style="font-family: 'Modern No. 20', serif"
          >
            It might interest you
          </h2>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/il_1588xN.3563981433_mu3l (1).jpg"
                class="card-img-top"
                alt="Product 1"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Silk Midi Dress</h5>
                <p class="card-text">$80.00</p>
                <a href="details.html" class="btn btn-sm"
                  >View Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/OIP (2).jfif"
                class="card-img-top"
                alt="Product 2"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Wool Blend Coat</h5>
                <p class="card-text">$90.00</p>
                <a href="details.html" class="btn btn-sm"
                  >View Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/dbde0533e90eda5f834d41510522b472.jpg"
                class="card-img-top"
                alt="Product 3"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Ruffles Suspenders Dress</h5>
                <p class="card-text">$75.00</p>
                <a href="#" class="btn btn-sm">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img src="/images/R.jfif" class="card-img-top" alt="Product 1" />
              <div class="card-body text-center">
                <h5 class="card-title">High Waist Layered Palazzo Trousers</h5>
                <p class="card-text">$40.00</p>
                <a href="#" class="btn btn-sm">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/il_1588xN.3563981433_mu3l (1).jpg"
                class="card-img-top"
                alt="Product 1"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Silk Midi Dress</h5>
                <p class="card-text">$80.00</p>
                <a href="#" class="btn btn-sm">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/OIP (2).jfif"
                class="card-img-top"
                alt="Product 2"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Wool Blend Coat</h5>
                <p class="card-text">$90.00</p>
                <a href="#" class="btn btn-sm">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/dbde0533e90eda5f834d41510522b472.jpg"
                class="card-img-top"
                alt="Product 3"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Ruffles Suspenders Dress</h5>
                <p class="card-text">$75.00</p>
                <a href="#" class="btn btn-sm">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img src="/images/R.jfif" class="card-img-top" alt="Product 1" />
              <div class="card-body text-center">
                <h5 class="card-title">High Waist Layered Palazzo Trousers</h5>
                <p class="card-text">$40.00</p>
                <a href="#" class="btn btn-sm">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cards1 py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="text-uppercase fw-bold">Latest Collections</h2>
          <p class="text-muted fs-5">
            Curated edits from our newest seasonal releases.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/max-mara-24aw_00029-45564d6e-aba5-4bf8-aba6-83ed39ff9312.jpg"
                class="card-img-top"
                alt="Autumn Elegance"
              />
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase">Autumn Elegance</h5>
                <p class="card-text">
                  Warm tones, soft textures, and transitional luxury wear.
                </p>
                <a href="#" class="btn btn-sm mt-2">View Collection</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/Tony_Ward_HC_RS19_0297-resp1597.jpg"
                class="card-img-top"
                alt="Evening Icons"
              />
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase">Evening Icons</h5>
                <p class="card-text">
                  Statement gowns and tailored fits made for the spotlight.
                </p>
                <a href="#" class="btn btn-sm mt-2">View Collection</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/OIP.jpg"
                class="card-img-top"
                alt="Minimal Chic"
              />
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase">Minimal Chic</h5>
                <p class="card-text">
                  Understated essentials crafted for daily elegance and timeless
                  style.
                </p>
                <a href="#" class="btn btn-sm mt-2">View Collection</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection
