@extends('web.layouts.main') @section('content')
<section class="Inner_content Cart_sec">
    <div class="container">
        <div class="login-title">
            <h3>Cart</h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-9 wow fadeInLeft" data-wow-delay="1s">
                <div class="carttable">
                    <div class="table-responsive">
                        <div class="ex"></div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Product</th>
                                    <th>Item Price</th>
                                    <th class="text-center">QTY</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="list-inline list-unstyled cart-list">
                                            <li>
                                                <div class="cartimage"><img alt="" class="img-responsive" src="{{asset('web/images/tab-img4.jpg')}}" /></div>
                                            </li>
                                            <li>
                                                <h4>Name here</h4>
                                                <h4>Lorem ipsum dummy text</h4>
                                                <div class="clearfix"></div>
                                                <ul class="edit">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <br />
                                        <br />
                                        $ 99.00
                                    </td>
                                    <td class="counter">
                                        <div class="qty">
                                            <span class="minus bg-dark">-</span>
                                            <input type="number" class="count" name="qty" value="1" />
                                            <span class="plus bg-dark">+</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <br />
                                        <br />
                                        $ 99.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a class="btnStyle update" href="#">Update Bag</a>
                <a class="btnStyle con-shop" href="{{route('product')}}">Continue Shopping</a>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-md-6 sub-total-sec">
                    <ul class="list-group">
                        <li class="list-group-item">Subtotal <a class="pull-right" href="#">$ 99.00</a></li>
                        <li class="list-group-item">Total <a class="pull-right" href="#">$ 99.00</a></li>
                    </ul>
                    <a class="btnStyle con-chk" href="{{route('checkout')}}">Continue To Checkout</a>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="shipping">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="right_box">
                                <h5>NEED HELP ?</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="call" href="#">123 456 7890</a>
                                <p>Lorem Ipsum is simply</p>
                            </div>
                            <div class="right_box">
                                <div class="title-sec">
                                    <h5>SECURE SHOPPING</h5>
                                    <img alt="" class="img-responsive" src="{{asset('web/images/paypal.png')}}" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
