@extends('web.layouts.main')
@section('content')
<!-- Header End -->
<section class="banner-sec">
    <div class="banner-img">
        <img src="{{asset('web/images/inrbanner.png')}}" />
        <div class="banner-info">
            <h5>Brand</h5>
        </div>
    </div>
</section>
<section class="brand-sec">
    <div class="container">
        <div class="brand-info">
            <p>Our Brands</p>
        </div>
        @foreach ($brand->chunk(5) as $chunk)
            <div class="brand-main">
                @foreach ($chunk as $product)
                <ul>
                    <li><img src="{{asset($product->image)}}" /></li>
                </ul>
                @endforeach
            </div>
        @endforeach
    <!-- 
        
        <div class="brand-main">
            <ul>
                <li><img src="{{asset('web/images/brand1.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand2.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand3.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand4.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand5.png')}}" /></li>
            </ul>
        </div>
        <div class="brand-main">
            <ul>
                <li><img src="{{asset('web/images/brand2.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand1.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand3.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand4.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand5.png')}}" /></li>
            </ul>
        </div>
        <div class="brand-main">
            <ul>
                <li><img src="{{asset('web/images/brand4.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand3.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand2.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand1.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand5.png')}}" /></li>
            </ul>
        </div>
        <div class="brand-main">
            <ul>
                <li><img src="{{asset('web/images/brand3.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand4.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand2.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand1.png')}}" /></li>
            </ul>
            <ul>
                <li><img src="{{asset('web/images/brand5.png')}}" /></li>
            </ul>
        </div>
     -->
         
     </div>
</section>
@endsection