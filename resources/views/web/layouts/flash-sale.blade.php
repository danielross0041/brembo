<?php
$product = App\Models\car_details::where('is_active',1)->where('is_deleted',0)->where('is_sale',1)->get();
// dd($product);
?>

<div class="col-md-9">
    <div class="flash-sale-prod">
        <div class="container">
            <div class="top-heading">
                <div class="top-head1">
                    <h2>FLASH SALE</h2>
                </div>
                <div class="top-head2">
                    <ul>
                        <li>Hurry And Grab This Offers</li>
                        <li>|</li>
                        <li><a href="{{route('product')}}">VIEW ALL</a></li>
                    </ul>
                </div>
            </div>
            <div class="view-product">
                <div class="row">
                    @if(!$product->isEmpty())
                    @foreach($product as $key => $pro)
                    @if($key <6)
                    <?php
                    $datetime2 = new DateTime(date("Y-m-d H:i:s"));

                    $sale = App\Models\car_sale::where('is_active',1)->where('product_id',$pro->id)->where('start_date', '<=',$datetime2)->where('end_date', '>=',$datetime2)->first();
                    if ($sale) {
                    
                    $price = ($pro->gt_price/100)*(100-$sale->dis_percentage);
                    ?>
                    <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                            </div>
                            <img src="{{asset($pro->image)}}" alt="" />
                            <h3>{{$pro->model}}</h3>
                            <h4>${{$price}} <span>${{$pro->gt_price}}</span></h4>
                            <a href="{{route('detail',Crypt::encrypt($pro->id))}}" class="cart-btn">View Details</a>
                        </div>
                    </div>
                    <?php } ?>
                    @endif
                    @endforeach
                    @else
                    <img src="{{asset('web/images/coming-soon.jpg')}}" class="coming-soon" alt="" />
                    @endif
                    <!-- <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                                <h2>Custom Lable</h2>
                            </div>
                            <img src="{{asset('web/images/prod-img01.png')}}" alt="" />
                            <h3>Common Good</h3>
                            <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit.</p>
                            <ul class="star-icons">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h4>$23.90 <span> $19.12</span></h4>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                                <h2>Custom Lable</h2>
                            </div>
                            <img src="{{asset('web/images/prod-img02.png')}}" alt="" />
                            <h3>Common Good</h3>
                            <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit.</p>
                            <ul class="star-icons">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h4>$23.90 <span> $19.12</span></h4>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                                <h2>Custom Lable</h2>
                            </div>
                            <img src="{{asset('web/images/prod-img03.png')}}" alt="" />
                            <h3>Common Good</h3>
                            <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit.</p>
                            <ul class="star-icons">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h4>$23.90 <span> $19.12</span></h4>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                                <h2>Custom Lable</h2>
                            </div>
                            <img src="{{asset('web/images/prod-img04.png')}}" alt="" />
                            <h3>Common Good</h3>
                            <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit.</p>
                            <ul class="star-icons">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h4>$23.90 <span> $19.12</span></h4>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                                <h2>Custom Lable</h2>
                            </div>
                            <img src="{{asset('web/images/prod-img05.png')}}" alt="" />
                            <h3>Common Good</h3>
                            <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit.</p>
                            <ul class="star-icons">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h4>$23.90 <span> $19.12</span></h4>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-blk">
                            <div class="sale-txt">
                                <h3>Sale</h3>
                                <h2>Custom Lable</h2>
                            </div>
                            <img src="{{asset('web/images/prod-img06.png')}}" alt="" />
                            <h3>Common Good</h3>
                            <p>Lorem ipsum dolor sit amet consecte tur adipiscing elit.</p>
                            <ul class="star-icons">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h4>$23.90 <span> $19.12</span></h4>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
