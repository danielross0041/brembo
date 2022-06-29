@extends('web.layouts.main') @section('content')
<!-- Header End -->
<section class="banner-sec">
    <div class="banner-img">
        <img src="{{asset('web/images/inrbanner.png')}}" />
        <div class="banner-info">
            <h5>Product Detail</h5>
        </div>
    </div>
</section>
@if($product)
<section class="product-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-img">
                    <img src="{{asset($product->image)}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <?php $company = App\Models\company::where('is_active',1)->where('id',$product->company_id)->first(); ?>
                    <h5>{{$company->name}}<sup><i class="fa fa-registered" aria-hidden="true"></i></sup> - {{$product->model}}</h5>
                    <div class="review-main">
                        {{--
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        --}}
                        <div class="review">
                            <ul>
                                
                                <!-- <li>765 reviews</li> -->
                                <!-- <li>1 Q&A</li>
                                <li>Item # 161257</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="starting">
                        <p><span>${{$product->gt_price}} {{$product->gtr_price !== null ? " - $".$product->gtr_price : ($product->gts_price !== null ? " - $".$product->gts_price : "") }}</span></p>
                    </div>
                    {{--
                    <div class="manufacture">
                        <p>Manufactured - Ship in 2 to 4 days</p>
                    </div>
                    --}}
                    <div class="deleivry">
                        <div class="deleivry-main">
                            <div class="deleivry-img">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="deleivry-info">
                                <p>Deliver to</p>
                                <p>united states <a href="#">Change</a></p>
                            </div>
                        </div>
                        <div class="deleivry-main">
                            <div class="deleivry-img">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="deleivry-info">
                                <h5>{{$product->from_year}} {{$product->to_year !== null ? " - ".$product->to_year : "" }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="notes">
                        <!-- <p>Notes:</p> -->
                        <?php 

                        if (isset($product->note) && $product->note != '' && $product->note !== null) {
                            $check_note = @unserialize($product->note);
                            if ($check_note !== false) {
                                $noteArray = unserialize($product->note);
                                $note_data = '<p><span>Notes:</span></p><ul>';
                                foreach ($noteArray as $j => $v) {
                                    $note = App\Models\note::where('is_active',1)->where('is_deleted',0)->where('note_no',$v)->orderBy('id', 'desc')->first();
                                    $note_data .= '<li>'.$note->note.'</li> ';
                                }
                                $note_data .= '</ul>';
                            } else{
                                $note = App\Models\note::where('is_active',1)->where('is_deleted',0)->where('note_no',$product->note)->orderBy('id', 'desc')->first();
                                $note_data = '<p><span>Notes:</span></p><ul> <li> '.$note->note.'</li> </ul>';
                            }
                        } else{
                            $note_data ='';
                        }
                        echo $note_data;
                        ?>
                        <!-- <a href="#">View Product Options</a> -->
                    </div>
                    <div class="caliper">
                        <div class="row rh">
                            <div class="col-md-6">
                                @if($product->pistons_caliper !== null)
                                <div class="piston-caliper">
                                    <p><span>Pistons Caliper:</span> {{$product->pistons_caliper}}</p>
                                </div>
                                @endif
                                @if($product->finish_caliper !== null)
                                <div class="piston-caliper">
                                    
                                    <?php 

                                    if (isset($product->finish_caliper) && $product->finish_caliper != '' && $product->finish_caliper !== null) {
                                        $check = @unserialize($product->finish_caliper);
                                        if ($check !== false) {
                                            $array = unserialize($product->finish_caliper);
                                            $data = '<p><span>Finish Caliper:</span></p><ul>';
                                            foreach ($array as $key => $value) {
                                                $data .= '<li>'.$value.'</li> ';
                                            }
                                            $data .= '</ul>';
                                        } else{
                                            $data = '<p><span>Finish Caliper:</span></p><ul> <li> '.$product->finish_caliper.'</li> </ul>';
                                        }
                                    } else{
                                        $data ='';
                                    }
                                    echo $data;
                                    ?>
                                </div>
                                @endif
                                @if($product->disc_size_type !== null)
                                <div class="piston-caliper">
                                    <p><span>Disc Size and Type:</span> </p>
                                    <p>{{$product->disc_size_type}}</p>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($product->drilled_no !== null || $product->type1_no !== null || $product->type3_no !== null || $product->type5_no !== null)
                                <h4>Part Number</h4>
                                @endif
                                <div class="piston-caliper">
                                    <ul>
                                        @if($product->drilled_no !== null)
                                        <li><p><span>Drilled:</span> {{$product->drilled_no}}</p></li>
                                        @endif
                                        @if($product->type1_no !== null)
                                        <li><p><span>Type-1:</span> {{$product->type1_no}}</p></li>
                                        @endif
                                        @if($product->type3_no !== null)
                                        <li><p><span>Type-3:</span> {{$product->type3_no}}</p></li>
                                        @endif
                                        @if($product->type5_no !== null)
                                        <li><p><span>Type-5:</span> {{$product->type5_no}}</p></li>
                                        @endif
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="product-btn">
                        <div class="row rh">
                            <div class="col-md-6">
                                <div class="product-bttn">
                                    <a href="#">Product options</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-bttn">
                                    <a href="#" class="cartt">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i>Add to wish List</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row rhhh">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="client-main">
                    <div class="client-img">
                        <img src="{{asset('web/images/client.png')}}" />
                    </div>
                    <div class="client-info">
                        <p>Have a Question? Ask a Specialist</p>
                        <p><a href="#">1234-4568-87</a>Live Chat</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row price-row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="row pricerinr-row">
                    <div class="col-md-6">
                        <div class="price-main">
                            <div class="price-img">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                            </div>
                            <div class="price-info">
                                <p>Low Prices</p>
                                <p>Price match gurantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="price-main">
                            <div class="price-img">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="price-info">
                                <p>Guranteed Fitment</p>
                                <p>Always the correct part</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="price-main">
                            <div class="price-img">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="price-info">
                                <p>In-House Expert</p>
                                <p>We know our product</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="price-main">
                            <div class="price-img">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="price-info">
                                <p>Superior Selection</p>
                                <p>Extensive Product Catalog</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row review-roww">
            <div class="col-md-7">
                <div class="review">
                    <h5>Reviews(0)</h5>
                    <p>
                        Coming Soon
                    </p>
                    <div class="row review-row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="reeview-btn">
                                <a href="#">Write a Review</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="rating-info">
                    <p>{{$company->name}}<sup><i class="fa fa-registered" aria-hidden="true"></i></sup> - {{$product->model}}</p>
                    <div class="row ratingg-row">
                        <div class="col-md-6">
                            <div class="ratingg">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rating-count">
                                <p>4.8/5</p>
                            </div>
                        </div>
                    </div>
                    <div class="inrmain-rating">
                        <div class="row inrrating-row">
                            <div class="col-md-6">
                                <div class="progress-bar1"></div>
                                <div class="progress-bar2"></div>
                                <div class="progress-bar3"></div>
                                <div class="progress-bar4"></div>
                                <div class="progress-bar5"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="rating1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="rating1 ratings2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="rating1 ratings3">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="rating1 ratings4">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="rating1 ratings5">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section class="item-sec">
    <div class="container">
        <h5>Recently viewed Item</h5>
        <div class="itemslider-blk">
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemslider-main">
                <div class="item-main">
                    <div class="item-img">
                        <img src="{{asset('web/images/item1.png')}}" />
                    </div>
                    <div class="item-info">
                        <p>3D MAXpider®</p>
                        <p><span>KAGU Floor Liners</span></p>
                        <div class="item-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p>0</p>
                        </div>
                        <div class="select-color">
                            <p></p>
                            <p class="black"></p>
                        </div>
                        <div class="price">
                            <p>$90.99 - $154.96</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
