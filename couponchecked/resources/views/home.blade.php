@extends('app')
@section('content_main')
    <div class="body-top">
            <h1 class="title">GET DAILY COUPONS AND DEALS ON POPULAR STORE NOW!</h1>

        <div class="body-main text-center">
            <div class="list-img">
                <a href="#">
                    <img src="image/img0.png">
                </a>
                <a href="#">
                    <img src="image/img1.png">
                </a>
                <a href="#">
                    <img src="image/img2.png">
                </a>
                <a href="#">
                    <img src="image/img3.png">
                </a>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="main">
        <div class="main-col">
            <h1 class="title">TOP DISCOUNT AND COUPON CODES</h1>
            <div class="row-items margin-bottom-10">
                <!-- start a item -->
                @foreach(range(0,10) as $v)
                    @if(rand(0,1)==0)
                        @include('elements.coupon_items')
                        @else
                        @include('elements.coupon_items_sale')
                    @endif
                @endforeach
                <!--end a items -->
            </div>
        </div>

        <div class="main footer">
            <h1 class="title">
                Popular Store
            </h1>
            <div class="row link-popular">
                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>
            </div>
        </div>
    </div>
@endsection