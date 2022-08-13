@extends('template')

@section('title')
کالاها
@endsection

@section('content')

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb rounded bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="/"> &nbsp;خانه</a>
                    <span class="breadcrumb-item active"> &nbsp;نام دسته‌بندی</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">

            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase text-center mb-3"><span class="bg-secondary px-3">فیلتر بر اساس قیمت</span></h5>
                <div class="bg-light p-4 rounded mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label " for="price-all">همه‌ی قیمت‌ها</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label " for="price-1">۰ - ۱۰،۰۰۰ تومان</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label " for="price-2">۵۰،۰۰۰ - ۱۵۰،۰۰۰ تومان</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label " for="price-3">۱۵۰،۰۰۰ - ۵۰۰،۰۰۰ تومان</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label " for="price-4">۵۰۰،۰۰۰ - ۱،۰۰۰،۰۰۰ تومان</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label " for="price-5">بیشتر از ۱،۰۰۰،۰۰۰ تومان</label>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase text-center mb-3"><span class="bg-secondary px-3">فیلتر بر اساس برند</span></h5>
                <div class="bg-light p-4 rounded mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="brand-all">
                            <label class="custom-control-label " for="price-all">همه‌ی برندها</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-1">
                            <label class="custom-control-label " for="brand-1">برند ۱</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-2">
                            <label class="custom-control-label " for="brand-2">برند ۲</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-3">
                            <label class="custom-control-label " for="brand-3">برند ۳</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-4">
                            <label class="custom-control-label " for="brand-4">برند ۴</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-end">
                            <input type="checkbox" class="custom-control-input" id="brand-5">
                            <label class="custom-control-label " for="brand-5">برند ۵</label>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div></div>
                            <div class="mr-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle rounded p-2" data-toggle="dropdown">مرتب سازی</button>
                                    <div class="dropdown-menu dropdown-menu-right rounded">
                                        <a class="dropdown-item" href="#">آخرین کالاها</a>
                                        <a class="dropdown-item" href="#">پربازدید ترین</a>
                                        <a class="dropdown-item" href="#">بیشترین امتیاز</a>
                                    </div>
                                </div>
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle rounded p-2" data-toggle="dropdown">تعداد نمایش</button>
                                    <div class="dropdown-menu dropdown-menu-right rounded">
                                        <a class="dropdown-item" href="#">۱۰ کالا</a>
                                        <a class="dropdown-item" href="#">۲۰ کالا</a>
                                        <a class="dropdown-item" href="#">۳۰ کالا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($products as $product)

                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4 rounded">
                                <div class="product-img position-relative overflow-hidden rounded">
                                    <img class="img-fluid w-100" src='{{ $product->images->first()->url}}' alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="product/{{ $product->id }}">{{ $product->name }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        @if ($product->price_off)
                                            <h5 class="text-danger">{{ number_format($product->price_off) }} <small>تومان</small></h5><h6 class="text-muted mr-2"><del>{{ number_format($product->price) }}</del></h6>
                                        @else
                                            <h5 class="text-danger">{{ number_format($product->price) }} <small>تومان</small> </h5>
                                        @endif                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-warning mr-1"></small>
                                        <small class="fa fa-star text-warning mr-1"></small>
                                        <small class="fa fa-star text-warning mr-1"></small>
                                        <small class="fa fa-star text-warning mr-1"></small>
                                        <small class="fa fa-star-half-alt text-warning mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="col-12">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

@endsection
