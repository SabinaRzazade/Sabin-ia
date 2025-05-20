@extends('layouts.app')

@section('title', 'SABIN | Home')


@section('content')
<section class="hero-banner">
      <div class="hero-text">
        <h1 class="hero-headline">Elegance Meets Timeless Style</h1>
        <p class="hero-subheadline">
          "Discover curated collections that define sophistication and luxury
          for the modern woman."
        </p>
        <a href="#" class="cta-button">Shop Now</a>
      </div>
    </section>
    <section class="about py-5 my-4 bg-light text-dark">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-md-6">
            <h2
              class="display-6 text-uppercase fw-bold"
              style="font-family: 'Modern No. 20', serif"
            >
              The Sabin Standard
            </h2>
            <p class="mt-3 fs-5 p-2">
              Rooted in timeless elegance, Sabin blends classic silhouettes with
              modern tailoring to create collections for the discerning woman.
              Each piece is a commitment to quality, poise, and effortless
              sophistication.
            </p>
          </div>
          <div class="col-md-6 text-center">
            <img
              src="/images/inner.jpg"
              class="img-fluid shadow-sm"
              alt="Fashion Image 1"
            />
          </div>
        </div>

        <div class="row align-items-center flex-md-row-reverse">
          <div class="col-md-6">
            <h2
              class="display-6 text-uppercase fw-bold p-4"
              style="font-family: 'Modern No. 20', serif"
            >
              Crafted with Intention
            </h2>
            <p class="mt-3 fs-5 px-4">
              Every garment is thoughtfully designed and meticulously
              constructed using premium fabrics. Our mission is to create not
              only beautiful clothing but pieces that stand the test of time —
              both in style and sustainability.
            </p>
          </div>
          <div class="col-md-6 text-center px-1">
            <img
              src="/images/newadelphi.jpg"
              class="img-fluid shadow-sm"
              alt="Fashion Image 2"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="cards1 py-4 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2
            class="text-uppercase fw-bold"
            style="font-family: 'Modern No. 20', serif"
          >
            Latest Collections
          </h2>
          <p class="text-muted fs-5">
            Curated edits from our newest seasonal releases.
          </p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img
                src="/images/max-mara-24aw_00029-45564d6e-aba5-4bf8-aba6-83ed39ff9312.jpg"
                class="card-img-top"
                alt="Autumn Collection"
              />
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase fw-semibold">
                  Autumn Elegance
                </h5>
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
                alt="Eveningwear"
              />
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase fw-semibold">
                  Evening Icons
                </h5>
                <p class="card-text">
                  Statement gowns and tailored fits made for the spotlight.
                </p>
                <a href="#" class="btn btn-sm mt-2">View Collection</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <img src="/images/OIP.jpg" class="card-img-top" alt="Minimal Chic" />
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase fw-semibold">
                  Minimal Chic
                </h5>
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


