@extends('template')

@section('title')
{{$product->name}}
@endsection

@section('content')

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="/"> &nbsp;خانه</a>
                    <a class="breadcrumb-item text-dark" href="/"> &nbsp;نام دسته‌بندی</a>
                    <span class="breadcrumb-item active"> &nbsp; {{$product->name}}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="../{{ $product->images->first()->url }}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30 text-right">
                    <h3>{{$product->name}}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary ml-2">
                            <small class="fas fa-star text-warning"></small>
                            <small class="fas fa-star text-warning"></small>
                            <small class="fas fa-star text-warning"></small>
                            <small class="fas fa-star-half-alt text-warning"></small>
                            <small class="far fa-star text-warning"></small>
                        </div>
                        <small class="pt-1">(از مجموع ۱۰ نظر)</small>
                    </div>
                    @if ($product->price_off)
                        <h6 class="text-muted mr-2"><del>{{ number_format($product->price) }} تومان</del></h6>
                        <h3 class="text-danger font-weight-semi-bold mb-4">{{ number_format($product->price_off) }} <small>تومان</small></h3>
                    @else
                        <h3 class="text-danger font-weight-semi-bold mb-4">{{ number_format($product->price) }} <small>تومان</small> </h3>
                    @endif
                    <p class="mb-4">
                        {{$product->description}}
                    </p>
                    <!-- <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div> -->
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus rounded-right">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus rounded-left">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-primary px-3 rounded mr-5" onclick='add_to_cart({{ $product->id }}, "")'><i class="fa fa-shopping-cart mr-1"></i> افزودن به سبد خرید</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active rounded-top" data-toggle="tab" href="#tab-pane-1">دیدگاه کاربران</a>
                        <a class="nav-item nav-link text-dark rounded-top" data-toggle="tab" href="#tab-pane-3">ثبت دیدگاه</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row">
                                
                                <div class="col-md-12">
                                    <ul class="list-group list-group-flush">
                                        @foreach($product->comments as $comment)
                                            <li class="list-group-item text-right px-0">
                                                <small class="text-muted">{{$comment->user->name}}  |  {{$comment->created_at}} </small> 
                                                <div class="d-flex my-2">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="my-2">{{$comment->text}}</p>
                                            </li>
                                        @endforeach
                                      </ul> 
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-10 text-right">
                                    <h6 class="mb-4">ثبت دیدگاه برای {{$product->name}}</h6>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">امتیاز شما برای این کالا: &nbsp; &nbsp;</p>
                                        <div class="text-warning">
                                            <i class="far fa-star rate" onmouseover="draw_rating(1)" onmouseleave="clear_rate()" onclick="add_rate(1)"></i>
                                            <i class="far fa-star rate" onmouseover="draw_rating(2)" onmouseleave="clear_rate()" onclick="add_rate(2)"></i>
                                            <i class="far fa-star rate" onmouseover="draw_rating(3)" onmouseleave="clear_rate()" onclick="add_rate(3)"></i>
                                            <i class="far fa-star rate" onmouseover="draw_rating(4)" onmouseleave="clear_rate()" onclick="add_rate(4)"></i>
                                            <i class="far fa-star rate" onmouseover="draw_rating(5)" onmouseleave="clear_rate()" onclick="add_rate(5)"></i>
                                        </div>
                                    </div>
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="message">دیدگاه شما *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group mb-0 text-light">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                            <input type="submit" value="ثبت دیدگاه" class="btn btn-primary px-3 rounded">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <script>
        var stars = document.getElementsByClassName("rate");

        function add_rate(x){
            
            var json_data = {
                product_id : "{{$product->id}}",
                score : x
            };

            var my_data = new FormData;
            my_data.append('json', JSON.stringify(json_data));

            console.log('my_data', my_data);

            fetch("/send-rating", {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": {{ csrf_token }}
                },
                method: "post",
                data: my_data
            })
    
            .then(result =>result.text())
            .then(result => {
                alert("امتیاز با موفقیت ثبت شد.")
            });
        }


        function draw_rating(x) {

            for(var i = 0; i < x; i++ ){
                stars[i].classList.add("fas");
                stars[i].classList.remove("far");
            }

            for(var i = x; i < 5; i++ ){
                stars[i].classList.add("far");
                stars[i].classList.remove("fas");
            }
        }


        function clear_rate() {

            for(var i = 0; i < 5; i++ ){
                stars[i].classList.add("far");
                stars[i].classList.remove("fas");
            }
        }
    </script>
@endsection