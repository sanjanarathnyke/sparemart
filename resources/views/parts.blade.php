@extends('layouts.context')
@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url(assets/images/background/bg-5.jpg);">
    <div class="auto-container">
        <h1>Shop List</h1>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-9 pl-lg-5 order-lg-2">
                <div class="showing-result-shorting">
                    <div class="showing">
                        <ul>
                            <li><i class="fas fa-th-list"></i></li>
                            <li class="active"><i class="fas fa-th-large"></i></li>
                        </ul>
                        <p>Showing 6 of 98 products</p>
                    </div>

                    {{-- Sort Section --}}
                    <div class="shorting">
                        <form method="GET" action="{{ route('parts') }}">
                            <span>Sort</span>
                            <select class="selectmenu" name="price" onchange="this.form.submit()">
                                <option value="" {{ request('price')=='' ? 'selected' : '' }}>All</option>
                                <option value="<$45" {{ request('price')=='<$45' ? 'selected' : '' }}>
                                    <$45< /option>
                                <option value="<$69" {{ request('price')=='<$69' ? 'selected' : '' }}>
                                    <$69< /option>
                                <option value=">$99" {{ request('price')=='>$99' ? 'selected' : '' }}> >$99</option>
                            </select>
                        </form>
                    </div>
                </div>

                {{--items display in parts section---}}
                @foreach ($parts as $part )
                <div class="row">
                    <div class="col-lg-12 list-part product-block-five">
                        <div class="inner-box">
                            <div class="image">
                                <!-- Verify that this image path is correct -->
                                <img src="{{ asset('assets/images/resource/' . $part->image) }}" alt="Product Image">
                            </div>
                            <div class="lower-content">
                                <h5>{{$part->category->name}}</h5>
                                <h4><a href="{{ route('single', ['id'=>$part->id]) }}">{{$part->name}}</a> </h4>
                                <div class="price">${{$part->price}}</div>
                                <div class="link-btn">
                                    <!-- Add to Cart Form -->
                                    <form action="{{ route('add-to-cart') }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $part->id }}">
                                        <input type="hidden" name="name" value="{{ $part->name }}">
                                        <input type="hidden" name="price" value="{{ $part->price }}">
                                        <input type="hidden" name="image" value="{{$part->image}}">
                                        <button type="submit" class="theme-btn btn-style-one">
                                            <span>Add to cart</span>
                                        </button>
                                    </form>

                                    <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="page-pagination">
                    {{ $parts->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar shop-sidebar">

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories">
                        <div class="sidebar-title">
                            <h3>Product Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li class="current"><a href="{{ route('shoks') }}">Suspension
                                        <span>20</span></a> </li>
                                <li><a href="{{ route('tires') }}">Tires & Wheels <span>18</span></a></li>
                                <li><a href="{{ route('performance') }}">Performance Parts <span>13</span></a> </li>
                                <li><a href="{{ route('light') }}">Lighting <span>16</span></a> </li>
                                <li><a href="{{ route('engine') }}">Engine Parts <span>22</span></a> </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Post Widget -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h3>Latest Products</h3>
                        </div>
                        <div class="widget-content">
                            <!-- Verify that this image path is correct -->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/resource/image-38.jpg" alt="Latest Product"></a></div>
                                <h4><a href="blog-details.html">Corem ipsum dolor tetur adipisicing elit </a></h4>
                                <div class="price">$19</div>
                            </div>
                            <!-- Verify that this image path is correct -->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/resource/image-39.jpg" alt="Latest Product"></a></div>
                                <h4><a href="blog-details.html">Fdipisicing elit, sed do eiusmod tempor</a></h4>
                                <div class="price">$19</div>
                            </div>
                            <!-- Verify that this image path is correct -->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/resource/image-40.jpg" alt="Latest Product"></a></div>
                                <h4><a href="blog-details.html">Eonsectetur adipisic elit, sed do eiusmod </a></h4>
                                <div class="price">$19</div>
                            </div>
                            <!-- Verify that this image path is correct -->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img
                                            src="assets/images/resource/image-41.jpg" alt="Latest Product"></a></div>
                                <h4><a href="blog-details.html">gnim ad minim veniam, quis nostrud </a></h4>
                                <div class="price">$19</div>
                            </div>
                        </div>
                    </div>

                </aside>
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
