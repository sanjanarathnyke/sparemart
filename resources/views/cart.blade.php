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
                    <p>Your Cart: 2 Items</p>
                </div>
                <div class="text">
                    <p>Total: <span>$850</span> </p>
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
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="assets/images/resource/image-5.jpg" alt=""></a></figure>
                                        <h4>Steering Wheel</h4>
                                    </div>
                                </td>
                                <td class="qty"><input type="number" value="2" name="quantity"></td>
                                <td class="sub-total">$200</td>
                                <td class="total-price">$400</td>
                                <td><a href="#" class="remove-btn"><span class="fas fa-times"></span></a></td>
                            </tr>
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
                            <button type="submit" class="cart-btn">Update Cart</button>
                            <button type="submit" class="theme-btn-four thm-btn">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection