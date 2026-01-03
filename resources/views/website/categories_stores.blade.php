@extends('website.layouts.main')
@section('content')


<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>{{$category->name}}</h2>
                </div>

            </div>
        </div>
        <div class="row featured__filter">
            @if($category->stores->count()>0)
            @foreach ($category->stores as $store )
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('website_assets')}}/img/featured/feature-1.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$store->name}}</a></h6>
                        <h5>{{$store->mobile}}</h5>
                        <h5>{{$store->email}}</h5>
                        <h5>{{$store->address}}</h5>
                    </div>
                </div>
            </div>

            @endforeach
            @else
            لا يوجد عناصر بعد
            @endif


        </div>
    </div>
</section>
<!-- Featured Section End -->

@endsection