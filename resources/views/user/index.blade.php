@extends('layouts.frontend_layout')
@section('title')
    NETRO COMPUTERS
@endsection
@section('content')

 <!--/ Intro Skew Star /-->
 <div id="home" class="intro route bg-image" style="background-image: url(images/alexandre-debieve-FO7JIlwjOtU-unsplash.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4 offset-lg-3">NETRO COMPUTERS</h1>
          <p class="intro-subtitle offset-lg-3" style="color: white;">Largest Computer Store And Professional It Department</p>
          
          @if ($hot_deal)
          
                    <h1 class="mb-4 offset-lg-3">
                        <a href="{{ route('product',$hot_deal['id']) }}"><button class="btn btn-outline-danger btn-lg">Hot Deal</button></a>
                    </h1>
                
            @endif
          
          
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->



 {{-- @include('inc.front.indexbanner')   --}}


<div class="viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Recently Added</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">
                    <div class="owl-carousel owl-theme viewed_slider">
                      
                        @foreach ($items as $item)
                        @php
                            $diff = $item->calDiff();
                            $rate = $item->calDiscount();
                            @endphp    
                            
                            @if ($diff < 15)
                                <div class="owl-item">
                                    <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="storage/inventory/{{ $item['image'] }}" alt="{{ $item['image'] }}"></div>
                                        
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">Rs.{{ $item->getPrice() }}
                                                @if ( $item->calDiscount() > 0)
                                                <br>
                                                    <span>
                                                    Rs. {{ $item['price'] }}
                                                </span>
                                                @endif    
                                            </div>
                                            <div class="viewed_name"><a href="{{ route('product',['id'=>$item['id']]) }}">{{ $item['item'] }}</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">NEW</li>
                                            @if ( $item->calDiscount() >0 )
                                            <span class="badge badge-danger badge-pill">-{{ $item->calDiscount() }}%</span>
                                            @endif
                                        </ul>
                                    </div>
                                
                    </div>
                            @endif
                                
                            @endforeach
                        
                </div>
            </div>
                        
                        <div class="viewed_slider_container">
                    <div class="owl-carousel owl-theme viewed_slider">
                        
                        @foreach ($items as $item)
                            @php
                            $diff = $item->calDiff();
                            $rate = $item->calDiscount();
                            @endphp

                            @if ($diff > 15)
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="storage/inventory/{{ $item['image'] }}" alt="{{ $item['image'] }}"></div>
                            
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">Rs.{{ $item->getPrice() }}
                                            @if ( $item->calDiscount() > 0)
                                            <br>
                                            <span>
                                                Rs. {{ $item['price'] }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="viewed_name"><a href="{{ route('product',['id'=>$item['id']]) }}">{{ $item['item'] }}</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        {{-- <li class="item_mark item_discount">NEW</li> --}}
                                        @if ( $item->calDiscount() >0 )
                                        <span class="badge badge-danger badge-pill">-{{ $item->calDiscount() }}%</span>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                
            </div>
        </div>
</div>


@include('inc.front.ourteam')

@endsection


	







