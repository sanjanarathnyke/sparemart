@extends('layouts.context')
@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url(assets/images/background/bg-5.jpg);">
    <div class="auto-container">
        <h1>Shop Grid with left sidebar</h1>
    </div>
</section>

<!-- cart-section -->
<section class="cart-section">
    <div class="auto-container">
        <div class="cart-title row m-0 justify-content-between">
            <div class="text">
                <p>Total: <span>$0.00</span> </p>
            </div>
        </div>
        <div class="cart-outer">
            <div class="table-outer">
                <table class="cart-table">
                    <thead class="cart-header">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="price">Price</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $cart = session('cart', []);
                        @endphp

                        @forelse ($cart as $id=>$item )
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb">
                                        <a href="#">
                                            <img src="{{ asset($item['image'] ?? 'default-image.jpg') }}" 
                                                 alt="{{ $item['name'] }}">
                                        </a>
                                    </figure>
                                    <h4>{{ $item['name'] }}</h4>
                                    
                                </div>
                            </td>
                            <td class="qty">
                                <input type="number" value="1" min="1" name="quantity" class="quantity-input"
                                    data-price="{{ $item['price'] }}">
                            </td>
                            <td class="sub-total">${{$item['price']}}</td>
                            <td class="total-price">
                                $<span class="item-total">{{ $item['price'] }}</span>
                            </td>
                            <td>
                                <form action="{{ route('remove-from-cart') }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <button type="submit" class="remove-btn">
                                        <span class="fas fa-times"></span>
                                    </button>
                                </form>
                            </td>

                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Your cart is empty.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 column">
                    <div class="apply-coupon clearfix">
                        <div class="form-group clearfix">
                            <input type="text" name="coupon-code" value="" placeholder="Enter Coupon Code...">
                        </div>
                        <div class="form-group clearfix">
                            <button type="button" class="theme-btn-two thm-btn">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 column clearfix">
                    <div class="btn-box float-right clearfix">
                        <a href="{{ route('confirm') }}" class="theme-btn-four thm-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
    // JavaScript for dynamically updating the total price
    document.addEventListener('DOMContentLoaded', function () {
        // Get all quantity inputs
        const quantityInputs = document.querySelectorAll('.quantity-input');

        quantityInputs.forEach(input => {
            input.addEventListener('input', function () {
                // Get price and quantity
                const price = parseFloat(this.getAttribute('data-price'));
                const quantity = parseInt(this.value);

                // Get the total price element
                const totalPriceElement = this.closest('tr').querySelector('.item-total');

                // Update the total price dynamically
                if (!isNaN(quantity) && quantity > 0) {
                    const total = (price * quantity).toFixed(2);
                    totalPriceElement.textContent = total;
                } else {
                    // Default back to the single price if invalid quantity
                    totalPriceElement.textContent = price.toFixed(2);
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    // Function to calculate the grand total
    function calculateGrandTotal() {
      const totalElements = document.querySelectorAll('.item-total'); // Select all row total elements
      let grandTotal = 0;
  
      // Iterate over each total element and sum up the values
      totalElements.forEach((element) => {
        const value = parseFloat(element.textContent || '0'); // Parse the row total as a float
        grandTotal += isNaN(value) ? 0 : value; // Add it to the grand total
      });
  
      // Update the grand total in the specified div
      const grandTotalElement = document.querySelector('.text span');
      if (grandTotalElement) {
        grandTotalElement.textContent = `$${grandTotal.toFixed(2)}`; // Update with the formatted total
      }
    }
  
    // Function to update a row's total and then recalculate the grand total
    function updateRowAndGrandTotal(event) {
      const target = event.target;
  
      if (target.classList.contains('quantity-input')) {
        const price = parseFloat(target.dataset.price || '0'); // Get price from data attribute
        const quantity = parseInt(target.value, 10); // Get entered quantity
  
        // Update the row's total
        const rowTotalElement = target.closest('tr').querySelector('.item-total');
        if (rowTotalElement) {
          const rowTotal = price * (quantity > 0 ? quantity : 1);
          rowTotalElement.textContent = rowTotal.toFixed(2); // Update row total
        }
  
        // Recalculate and update the grand total
        calculateGrandTotal();
      }
    }
  
    // Add event listeners to all quantity input fields
    const quantityInputs = document.querySelectorAll('.quantity-input');
    quantityInputs.forEach((input) => {
      input.addEventListener('input', updateRowAndGrandTotal); // Listen for changes
    });
  
    // Initial grand total calculation on page load
    calculateGrandTotal();
  });
</script>