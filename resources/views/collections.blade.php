@extends('layouts.app')

@section('title', 'SABIN | Collections')


@section('content')
<section class="hero-banner">
         <div class="hero-img-container">
    <img src="/images/SpJdhLuft6iuotFyap5YY3.jpg" alt="Hero Fashion" class="hero-img" />
  </div>
      <div class="hero-text">
        <h1 class="hero-headline">Refined Style for the Modern Muse</h1>
        <p class="hero-subheadline">
          "Explore curated collections that blend elegance, confidence, and timeless design—crafted for the woman who leads with style."
        </p>
      </div>
    </section>
    <section class="collection-showcase py-5 bg-light">
      <div class="container-fluid">
        <div class="collection-header text-center mb-5">
          <h2
            class="text-uppercase fw-bold"
            style="font-family: 'Modern No. 20', serif"
          >
            The Collections
          </h2>
          <p class="text-muted fs-5">
            Where minimalism meets elegance — season by season.
          </p>
        </div>

        <div class="row g-3 mx-3 p-3">
          <div class="col-md-4">
            <div
              class="collection-block d-flex flex-column flex-md-row align-items-center shadow-sm p-3 bg-white"
            >
              <img
                src="/images/532bf947ae536536cca57644ee70c01a.jpg"
                alt="Spring Bloom"
                class="img-fluid rounded mb-3 mb-md-0"
                style="max-width: 250px"
              />
              <div class="ps-md-4 text-center text-md-start">
                <h4
                  class="fw-semibold text-uppercase"
                  style="font-family: 'Didot', serif"
                >
                  Spring Bloom
                </h4>
                <p class="text-muted">
                  Pastel hues and soft tailoring inspired by renewal and light.
                </p>
                <a href="#" class="btn btn-outline-dark mt-2"
                  >View Collection</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div
              class="collection-block d-flex flex-column flex-md-row align-items-center shadow-sm p-3 bg-white"
            >
              <img
                src="/images/24c5b28f7fd7d2e6e35c3902fb4465a0.jpg"
                alt="Autumn Elegance"
                class="img-fluid rounded mb-3 mb-md-0"
                style="max-width: 250px"
              />
              <div class="ps-md-4 text-center text-md-start">
                <h4
                  class="fw-semibold text-uppercase"
                  style="font-family: 'Didot', serif"
                >
                  Autumn Elegance
                </h4>
                <p class="text-muted">
                  Warm textures, smart silhouettes, and crisp outerwear.
                </p>
                <a href="#" class="btn btn-outline-dark mt-2"
                  >View Collection</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div
              class="collection-block d-flex flex-column flex-md-row align-items-center shadow-sm p-3 bg-white"
            >
              <img
                src="/images/suburban-men-instagram-crush-paola-cossentino-20230526-123-768x960.jpg"
                alt="Evening Icons"
                class="img-fluid rounded mb-3 mb-md-0"
                style="max-width: 250px"
              />
              <div class="ps-md-4 text-center text-md-start">
                <h4
                  class="fw-semibold text-uppercase"
                  style="font-family: 'Didot', serif"
                >
                  Evening Icons
                </h4>
                <p class="text-muted">
                  Luxe gowns, evening sparkle, and drama redefined.
                </p>
                <a href="#" class="btn btn-outline-dark mt-2"
                  >View Collection</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div
              class="collection-block d-flex flex-column flex-md-row align-items-center shadow-sm p-3 bg-white"
            >
              <img
                src="/images/undefined.jpg"
                alt="Minimal Chic"
                class="img-fluid rounded mb-3 mb-md-0"
                style="max-width: 250px"
              />
              <div class="ps-md-4 text-center text-md-start">
                <h4
                  class="fw-semibold text-uppercase"
                  style="font-family: 'Didot', serif"
                >
                  Minimal Chic
                </h4>
                <p class="text-muted">
                  Clean lines, neutral palettes, effortless layering.
                </p>
                <a href="#" class="btn btn-outline-dark mt-2"
                  >View Collection</a
                >
              </div>
            </div>
          </div>
<div class="col-md-4">
  <div class="collection-block d-flex flex-column flex-md-row align-items-center shadow-sm p-3 bg-white">
    <img src="/images/zara-outerwear-fall-winter-2017-5.jpg" alt="Statement Outerwear" class="img-fluid rounded mb-3 mb-md-0" style="max-width: 250px" />
    <div class="ps-md-4 text-center text-md-start">
      <h4 class="fw-semibold text-uppercase" style="font-family: 'Didot', serif">Statement Outerwear</h4>
      <p class="text-muted">Layer up in sophistication and seasonal edge.</p>
      <a href="#" class="btn btn-outline-dark mt-2">View Collection</a>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="collection-block d-flex flex-column flex-md-row align-items-center shadow-sm p-3 bg-white">
    <img src="/images/070785D6-36B0-44F5-B871-341BBA1000E5-2-721x1024.jpg" alt="Timeless Accessories" class="img-fluid rounded mb-3 mb-md-0" style="max-width: 250px" />
    <div class="ps-md-4 text-center text-md-start">
      <h4 class="fw-semibold text-uppercase" style="font-family: 'Didot', serif">Timeless Accessories</h4>
      <p class="text-muted">Accents that complete every ensemble with grace.</p>
      <a href="#" class="btn btn-outline-dark mt-2">View Collection</a>
    </div>
  </div>
</div>
        </div>
      </div>
    </section>
    @endsection
