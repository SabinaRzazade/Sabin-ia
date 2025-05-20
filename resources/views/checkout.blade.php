@extends('layouts.app')

@section('title', 'SABIN | Cart')


@section('content')

<section class="py-5">
      <div class="container">
        <h2 class="fw-bold mb-4 text-uppercase" style="font-family: 'Modern No. 20', serif;">Checkout</h2>
        <div class="row">
          <!-- Billing Details -->
          <div class="col-md-6">
            <h5 class="mb-3">Billing Details</h5>
            <form>
              <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" id="fullname" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="zip" class="form-label">ZIP Code</label>
                <input type="text" id="zip" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select id="country" class="form-select" required>
                  <option selected disabled>Choose...</option>
                  <option>Azerbaijan</option>
                  <option>Poland</option>
                  <option>Nepal</option>
                  <option>India</option>
                  <option>USA</option>
                  <option>UK</option>
                  <option>Other</option>
                </select>
              </div>
            </form>
          </div>

          <!-- Order Summary -->
          <div class="col-md-6">
            <h5 class="mb-3">Order Summary</h5>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between">
                <span>Minimal Chic Blouse</span>
                <strong>$75</strong>
              </li>
              <!-- Add more items as needed -->
              <li class="list-group-item d-flex justify-content-between">
                <span>Subtotal</span>
                <strong>$75</strong>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Shipping</span>
                <strong>$5</strong>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>$80</strong>
              </li>
            </ul>

            <h6 class="mb-3">Payment Method</h6>
            <form>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" checked />
                <label class="form-check-label" for="creditCard">Credit/Debit Card</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" />
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
              <button type="submit" class="checkout-button btn btn-login w-100 mt-3">Place Order</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    @endsection
