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

@section('content')

    @if (auth()->user())
        <div class="col-md-12 text-right">
            <h2 class="heading">أضف منتجاتك الرقمية المفضلة إلى القفة</h2>
        </div>
        @if ($categories->count() > 0)

            <div class="row gap-y">

                @foreach ($categories as $category)
                    <div class="col-md-6 col-xl-4">
                        <div class="product-3 mb-3 text-center">
                            <a class="product-media"
                                href="{{ route('orders.category', ['user' => auth()->user()->id, 'category' => $category->id]) }}">
                                <img src="{{ $category->image_path }}" alt="product">
                            </a>

                            <div class="product-detail">
                                <h5 style="font-weight: bold;"><a
                                        href="{{ route('orders.category', ['user' => auth()->user()->id, 'category' => $category->id]) }}">{{ $category->name }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @else
            <h1 class="display-4">Aucune donnée disponible</h1>
        @endif

    @else
        <div class="site-section bg-light" id="features-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-right">
                        <h2 class="heading">أضف منتجاتك الرقمية المفضلة إلى القفة</h2>
                    </div>
                </div>



                @if ($categories->count() > 0)

                    <div class="row gap-y">

                        @foreach ($categories as $category)
                            <div class="col-md-6 col-xl-4">
                                <div class="product-3 mb-3 text-center">
                                    <a class="product-media " href="#">
                                        <img src="{{ $category->image_path }}" alt="product">
                                    </a>

                                    <div class="product-detail">
                                        <h6><a href="#">{{ $category->name }}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @else
                    <h1 class="display-4">Aucune donnée disponible</h1>


                @endif


            </div>
        </div>

    @endif


@endsection
