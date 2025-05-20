@extends('layouts.app')

@section('title', 'SABIN | Cart')


@section('content')
<section class="py-5">
      <div class="container">
        <h2
          class="text-uppercase fw-bold mb-4"
          style="font-family: 'Modern No. 20', serif"
        >
          Your Cart
        </h2>
        <div class="table-responsive mb-4">
          <table class="table align-middle text-center" id="cart-table">
            <thead class="table-light">
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Details</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="cart-item">
                <td>
                  <img
                    src="/images/OIP.jpg"
                    alt="Item"
                    class="img-thumbnail"
                    style="max-width: 140px"
                  />
                </td>
                <td>
                  <h6 class="fw-bold">Minimal Chic Blouse</h6>
                  <div class="d-flex gap-2 align-items-center flex-wrap">
                    <div>
                      <label for="color" class="form-label mb-1">Color</label>
                      <select id="color" class="form-select">
                        <option>Beige</option>
                        <option>White</option>
                        <option>Olive</option>
                        <option>Brown</option>
                        <option>Black</option>
                      </select>
                    </div>
                    <div>
                      <label for="size" class="form-label mb-1">Size</label>
                      <select id="size" class="form-select">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                    </div>
                  </div>
                </td>
                <td>
                  <input
                    type="number"
                    class="form-control quantity"
                    value="1"
                    min="1"
                  />
                </td>
                <td class="price" data-price="75">$75</td>
                <td class="item-total">$75</td>
                <td>
                  <button class="btn btn-outline-danger btn-sm remove-btn">
                    Remove
                  </button>
                </td>
              </tr>
               </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-end cart-summary">
          <div class="text-end">
            <h5 class="fw-bold">Subtotal: <span id="subtotal">$75</span></h5>
            <p class="text-muted">Taxes and shipping calculated at checkout.</p>
            <a href="{{route("sabina.checkout")}}" class="btn btn-login">Proceed to Checkout</a>
          </div>
        </div>
      </div>
    </section>

    <script>
      function updateCart() {
        let subtotal = 0;
        document.querySelectorAll(".cart-item").forEach((row) => {
          const quantityInput = row.querySelector(".quantity");
          const price = parseFloat(row.querySelector(".price").dataset.price);
          const quantity = parseInt(quantityInput.value);
          const total = price * quantity;

          row.querySelector(".item-total").textContent = `$${total.toFixed(2)}`;
          subtotal += total;
        });

        document.getElementById("subtotal").textContent = `$${subtotal.toFixed(2)}`;
      }

      document.querySelectorAll(".quantity").forEach((input) => {
        input.addEventListener("input", updateCart);
      });

      document.querySelectorAll(".remove-btn").forEach((button) => {
        button.addEventListener("click", function () {
          this.closest(".cart-item").remove();
          updateCart();
        });
      });

      updateCart();
    </script>
    @endsection
