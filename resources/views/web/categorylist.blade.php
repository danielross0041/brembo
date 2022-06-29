@extends('web.layouts.main')
@section('content')
<!-- Header End -->
@if($accessory->banner != "" && $accessory->banner != null)
    @php $path = $accessory->banner; @endphp
@else
    @php $path = "web/images/inrbanner.png"; @endphp
@endif
<section class="banner-sec">
    <div class="banner-img">
        <img src="{{asset($path)}}" />
        <div class="banner-info">
            <h5>{{$accessory->name}} Accessories</h5>
        </div>
    </div>
</section>

<section class="products-sec">
    <div class="container">
        <div class="row">
            @if($category)
            @foreach($category as $val)
            <div class="col-md-3">
                <a href="{{route('subcategory_list',Crypt::encrypt($val->id))}}">
                    <div class="products-blk">
                        <span>(0)</span>
                        <img src="{{asset($val->image)}}" />
                        <h5>{{$val->name}}</h5>
                        <p>{{$val->desc}}</p>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>

@endsection