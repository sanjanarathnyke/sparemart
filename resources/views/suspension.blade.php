@extends('layouts.context')
@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url(assets/images/background/bg-5.jpg);">
    <div class="auto-container">
        <h1>Shop Grid with left sidebar</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="active">Shop Grid with left sidebar</li>
        </ul>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="showing-result-shorting">
            <div class="showing">
                <ul>
                    <li><i class="fas fa-th-list"></i></li>
                    <li class="active"><i class="fas fa-th-large"></i></li>
                </ul>
                <p>Showing 6 of 98 products</p>
            </div>
            <div class="shorting">
                <span>Sort</span>
                <select class="selectmenu">
                    <option selected="selected">Price</option>
                    <option>$45</option>
                    <option>$69</option>
                    <option>$99</option>
                </select>
            </div>
        </div>
        <div class="row">
            @foreach ($suspensionItems as $shoks)
                <div class="col-lg-4 col-md-6 product-block-five">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset($shoks->image) }}" alt="{{ $shoks->name }}">
                        </div>
                        <div class="lower-content">
                            <h4>{{ $shoks->name }}</h4>
                            <p style="font-size: 14px; color: #e20e0e">{{$shoks->category->name}}</p>
                            <div class="price">${{ number_format($shoks->price, 2) }}</div>
                            <div class="link-btn">

                                <form action="{{ route('add-to-cart') }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                <input type="hidden" name="id" value="{{ $shoks->id }}">
                                <input type="hidden" name="name" value="{{ $shoks->name }}">
                                <input type="hidden" name="price" value="{{ $shoks->price }}">
                                <input type="hidden" name="image" value="{{$shoks->image}}">
                                <button type="submit" class="theme-btn btn-style-one">
                                    <span>Add to cart</span>
                                </button>
                            </form>

                                <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="page-pagination">
            <div class="page-pagination">
                {{ $suspensionItems->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productPrice = this.getAttribute('data-price');
                const productImage = this.getAttribute('data-image');

                // Send the data to the server using fetch API or Axios
                fetch('/add-to-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        id: productId,
                        name: productName,
                        price: productPrice
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>