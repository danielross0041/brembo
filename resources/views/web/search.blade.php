@extends('web.layouts.main') @section('content')
<!-- Header End -->
<section class="banner-sec">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('web/images/hero-img.jpg')}}" alt="" />
                <div class="car-clas">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bnr-heading">
                                    <h1>SMART AUTO PARTS</h1>
                                    <p>Pellentesque meget milancelos de tinciduntion loremous an comopolis</p>
                                    <a href="#" class="shop-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('web.layouts.inner-search')
                <!-- <div class="car-cls">
                    <div class="banner-search">
                        <select>
                            <option>Year</option>
                            <option></option>
                        </select>
                    </div>
                    <div class="banner-search">
                        <select>
                            <option>Make</option>
                            <option></option>
                        </select>
                    </div>
                    <div class="banner-search">
                        <select>
                            <option>Model</option>
                            <option></option>
                        </select>
                    </div>
                    <div class="banner-search">
                        <form>
                            <input type="text" name="text" placeholder="Search By Parts# or Keyword" />
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<section class="changevechile-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="change-info">
                    <h5><span>2020 Acura ILX</span>Accessories & Parts</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="change-vechile">
                    <a href="#">Change Vechile</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="interior-sec">
    <div class="container">
        <h5>Interior Accessories</h5>
        <div class="interior-main">
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior1.png')}}" />
                    <p>Dash Kits</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior2.png')}}" />
                    <p>Floor Mats</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior3.png')}}" />
                    <p>Seat Cover</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior4.png')}}" />
                    <p>Steering Wheel</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior5.png')}}" />
                    <p>Sun Shades</p>
                </li>
            </ul>
        </div>
        <div class="interior-main">
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior6.png')}}" />
                    <p>Cargo Liners</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior7.png')}}" />
                    <p>Dash Covers</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior8.png')}}" />
                    <p>Car Organizers</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior9.png')}}" />
                    <p>Pedals</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior10.png')}}" />
                    <p>Custom Guages</p>
                </li>
            </ul>
        </div>
        <div class="interior-main last-interior">
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior11.png')}}" />
                    <p>Seats</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior12.png')}}" />
                    <p>Shift Knob</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior13.png')}}" />
                    <p>Pet Travel</p>
                </li>
            </ul>
            <ul>
                <li>
                    <p><span>(12)</span></p>
                    <img src="{{asset('web/images/interior14.png')}}" />
                    <p>Auto dealing</p>
                </li>
            </ul>
        </div>
        <div class="exterior-blk">
            <div class="exterior-main">
                <h5>Exterior Accessories</h5>
                <div class="interior-main">
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior1.png')}}" />
                            <p>Chrome Trim</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior2.png')}}" />
                            <p>Body Kits</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior3.png')}}" />
                            <p>Towing & Hitches</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior4.png')}}" />
                            <p>Spoilers</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior5.png')}}" />
                            <p>Wind Deflector</p>
                        </li>
                    </ul>
                </div>
                <div class="interior-main">
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior6.png')}}" />
                            <p>Roof Rocks</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior7.png')}}" />
                            <p>Car Covers</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior8.png')}}" />
                            <p>License Plates & Frames</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior9.png')}}" />
                            <p>Light Covers</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('web/images/exterior10.png')}}" />
                            <p>Bike Rocks</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="interior-main">
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior11.png')}}" />
                        <p>Wiper Blades</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior12.png')}}" />
                        <p>Sun Roof Visors</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior13.png')}}" />
                        <p>Car Wraps</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior14.png')}}" />
                        <p>Head Lights</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior15.png')}}" />
                        <p>Tail Lights</p>
                    </li>
                </ul>
            </div>
            <div class="interior-main">
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior16.png')}}" />
                        <p>Custom Hoods</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior17.png')}}" />
                        <p>Finder Flares</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior18.png')}}" />
                        <p>Mirrors</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior19.png')}}" />
                        <p>Bug Deflectors</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/exterior20.png')}}" />
                        <p>Mud Flaps</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="performance-main">
        <div class="container">
            <h5>Performance Parts</h5>
            <div class="interior-main">
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance1.png')}}" />
                        <p>Performance Suspension</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance2.png')}}" />
                        <p>Performance Brakes</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance3.png')}}" />
                        <p>AIr Intake System</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance4.png')}}" />
                        <p>Engine Component</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance5.jpg')}}" />
                        <p>Fuel Systems</p>
                    </li>
                </ul>
            </div>
            <div class="interior-main">
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance6.png')}}" />
                        <p>Ignition System</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance7.png')}}" />
                        <p>Caliper Covers</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance8.png')}}" />
                        <p>Rasing Gears</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance9.png')}}" />
                        <p>Exhaust Systems</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance10.png')}}" />
                        <p>Performance Chips</p>
                    </li>
                </ul>
            </div>
            <div class="interior-main">
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance11.png')}}" />
                        <p>Transmission</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance12.png')}}" />
                        <p>Cooling Systems</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance13.png')}}" />
                        <p>Turbo & SuperCharges</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance14.png')}}" />
                        <p>Stering</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance15.png')}}" />
                        <p>Starting & Charging</p>
                    </li>
                </ul>
            </div>
            <div class="interior-main last-performace">
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance16.png')}}" />
                        <p>DriveLine & Axles</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance17.png')}}" />
                        <p>Power Adders</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="{{asset('web/images/performance18.png')}}" />
                        <p>Automotive Tools</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="load-more">
        <div class="container">
            <a href="#">Load More</a>
        </div>
    </div>
</section>
@endsection
