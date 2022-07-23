
@extends('template')
@section('content')
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="w-100 h-100" src="img/carousel-1.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">به وقت صبحانه</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">هر چی بخوای اینجا هست!</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">مشاهده کالاها</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="w-100 h-100" src="img/carousel-2.jpeg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">عرضه سبزیجات تازه</h1>
                                    <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p> -->
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">مشاهده کالاها</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30 rounded" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.png" alt="">
                    <div class="offer-text">
                        <h5 class="text-white mb-3">تخفیف ویژه خشکبار</h5>
                        <a href="" class="btn btn-primary rounded">مشاهده کالاها</a>
                    </div>
                </div>
                <div class="product-offer mb-30 rounded" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-2.png" alt="">
                    <div class="offer-text">
                        <h5 class="text-white mb-3">تخفیف ویژه لبنیات</h5>
                        <a href="" class="btn btn-primary rounded">مشاهده کالاها</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-6 pb-1">
                <div class="d-flex feature align-items-center bg-light mb-4 text-right rounded" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mx-3"></h1>
                    <h6 class="font-weight-semi-bold m-0">تضمین کیفیت کالا</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 pb-1">
                <div class="d-flex feature align-items-center bg-light mb-4 text-right rounded" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mx-3"></h1>
                    <h6 class="font-weight-semi-bold m-0">ارسال رایگان</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 pb-1">
                <div class="d-flex feature align-items-center bg-light mb-4 text-right rounded" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mx-3"></h1>
                    <h6 class="font-weight-semi-bold m-0"> ضمانت بازگشت کالا</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 pb-1">
                <div class="d-flex feature align-items-center bg-light mb-4 text-right rounded" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mx-3"></h1>
                    <h6 class="font-weight-semi-bold m-0">پشتیبانی ۲۴/۷</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4 text-center"><span class="bg-secondary px-3">دسته‌بندی کالاها</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach($categories as $category)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="">
                        <div class="cat-item d-flex align-items-center mb-4 rounded">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded" src='img/categories/{{ $category->image}}' alt="">
                            </div>
                            <div class="flex-fill text-right px-4">
                                <h6>{{ $category->title }}</h6>
                                <!-- <small class="text-body">۱۴ محصول</small> -->
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30 rounded" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-banner-1.png" alt="">
                    <div class="offer-text">
                        <h3 class="text-white text-uppercase">تا ۲۵٪</h3>
                        <h3 class="text-white mb-3">تخفیف ویژه</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30 rounded" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-banner-2.png" alt="">
                    <div class="offer-text">
                        <h3 class="text-white text-uppercase">تا ۳۰٪</h3>
                        <h3 class="text-white mb-3">تخفیف ویژه</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4 text-center"><span class="bg-secondary px-3">جدیدترین کالاها</span></h2>
        <div class="row px-xl-5">
        @foreach($products as $product)

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 p-2 rounded">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src='img/products/{{ $product->url}}' alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square rounded" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square rounded" href=""><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4 overflow-hidden">
                        <a class="h6 text-decoration-none text-truncate" href="">{{ $product->name }}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            @if ($product->price_off)
                            <h5 class="text-danger">{{ $product->price_off }} <small>تومان</small></h5><h6 class="text-muted mr-2"><del>{{ $product->price }}</del></h6>
                            @else
                            <h5 class="text-danger">{{ $product->price }} <small>تومان</small> </h5>
                            @endif
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-warning mr-1"></small>
                            <small class="fa fa-star text-warning mr-1"></small>
                            <small class="fa fa-star text-warning mr-1"></small>
                            <small class="fa fa-star text-warning mr-1"></small>
                            <small class="fa fa-star text-warning mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
    <!-- Products End -->

@endsection