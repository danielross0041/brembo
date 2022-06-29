@extends('web.layouts.main') @section('content')
<section class="inner-cart">
    <div class="body-space">
        <div class="container">
            <div class="check-form">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInLeft" data-wow-delay="1s">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="return-custmer">
                                            <a class="herelog" href="#">Returning customer? Click here to login</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="return-custmer">
                                            <a class="herelog" href="#">Have a coupon? Click here to enter your code</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Country" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Company Name" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Town / City" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Country" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Postcode" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="checkbox-inline"><input type="checkbox" value="" />Create an account</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Order Note" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="check_detail">
                            <div class="first">
                                <h3>product name</h3>
                                <h4>product name goes here<span>$99.00</span></h4>
                                <h4>product name goes here<span>$99.00</span></h4>
                                <h4>product name goes here<span>$99.00</span></h4>
                            </div>
                            <h3>item subtotal <span>$297.00</span></h3>
                            <h3>your shipping <span>free</span></h3>
                            <h3>total price <span class="subTotal">$297.00</span></h3>
                            <form action="" class="round-one"><input name="gender" type="radio" value="male" /> Stripe <img alt="" class="img-responsive" src="{{asset('web/images/st.png')}}" /></form>
                            <form action="" class="round-one round-two"><input name="gender" type="radio" value="male" /> Paypal <img alt="" class="img-responsive" src="{{asset('web/images/pay.png')}}" /></form>
                            <div class="read-agre">
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" value="" />I have read and agree to the website terms and conditions *</label>
                                </div>
                            </div>
                            <button class="btnord"><span>place order</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
