@extends('layouts.blog3')
@section('header')
<header class="header text-center text-white" style="background-color: #b9a0c9;">
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">

                <h1 class="display-4">أضف بطاقاتك الرقمية المفضلة الان‎</h1>
                <p>ادفع بالدينار الجزائري‎</p>
                <p class="lead-2 opacity-90 mt-6">لسنا الأفضل لكن نسعى لنكون كذلك </p>

            </div>
        </div>

    </div>
</header><!-- /.header -->
@endsection
@section('content')
<div class="col-md-12 text-right">
    <h2 class="heading">أضف منتجاتك الرقمية المفضلة إلى القفة</h2>
</div>
@if ($categories->count() > 0)
            
<div class="row gap-y">

    @foreach ($categories as $category)
    <div class="col-md-6 col-xl-4">
        <div class="product-3 mb-3 text-center">
            <a class="product-media" href="{{ route('orders.category', ['user' => auth()->user()->id, 'category' => $category->id]) }}">
                <img src="{{$category->image_path}}" alt="product">
            </a>

            <div class="product-detail">
                <h5 style="font-weight: bold;"><a href="{{ route('orders.category', ['user' => auth()->user()->id, 'category' => $category->id]) }}">{{$category->name}}</a></h5>
            </div>
        </div>
    </div>
    @endforeach

</div>
@else
<h1 class="display-4">Aucune donnée disponible</h1>
@endif
<!-- --------------------------------------------------------------------------------------------------- -->
    {{-- <div class="site-section" id="home-section">
        <div class="container">
            <h1 class=" text-white display-4 fw-500">LES CATEGORIES DISPONIBLE : <span class="fw-400 pl-2" data-typing="FREEFIRE, PUBG, CARTE GOOGLE, CALL OF DUTY, AND MORE" data-type-speed="80"></span></h1>
           
            @if ($categories->count() > 0)
            
            <div class="row">
                
            @foreach ($categories as $category)
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card card-success">
                        <div class="card-body">
                            <div class="card mb-2 bg-gradient-dark">
                                <img href="" class="card-img-top" src="{{$category->image_path}}" alt="Dist Photo 1">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h3 style="color: black">{{$category->id}}</h3>
                                    <a href="{{ route('orders.category', ['user' => auth()->user()->id, 'category' => $category->id]) }}">{{$category->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
             @endforeach              
            </div>
                           
            @else

            <h2 class="text-center text-white serif text-uppercase mb-4">Aucune donnée disponible</h2>
                
            @endif

        </div>
    </div> --}}

@endsection
