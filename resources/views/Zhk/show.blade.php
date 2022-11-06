@section('title')zhkdetails @endsection
@include('inc/navbar')

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Baspana ZHK</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link  rel="stylesheet" href="/css/home.css">
    <style>
        #map {
            height: 50%;
        }
    </style>

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="/assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="/assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="/assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="/assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>
<script>
    $(document).ready(function (){

    })
    // function addToCart(){
    //     $.ajax()
    // }
</script>

<body>

<div class="main-wrapper">

    <!-- Navbar -->

    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Жилые комплексы</a>
                    </li>
                    <li class="active">{{ $item->zhkName  }} </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="product-details-area pt-100 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div class="pro-dec-big-img-slider" style="height: 440px">

                            <div class="easyzoom-style" style="">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ $item->picture }}#disqus_thread">
                                        <img src="{{ $item->picture }}" alt="" class="zhk_pic">
                                    </a>
                                </div>
                            </div>

                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ $item->picture }}">
                                        <img src="{{ $item->picture }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-dec-slider-small product-dec-small-style1" style = "height: 100px;">
                            <div class="product-dec-small active">
                                <img src="{{ $item->picture }}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ $item->picture[0] }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content pro-details-content-mrg">
                        <h2> {{ $item->zhkName }}</h2>
                        <div class="product-ratting-review-wrap">
                            <div class="product-ratting-digit-wrap">
                                <div class="product-ratting">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <div class="product-digit">
                                    <span>5.0</span>
                                </div>
                            </div>
                            <div class="product-review-order">
                                <span>{{ $item->comments_count }}</span>
                            </div>
                        </div>
                        <div class="pro-details-price">
                            @if($item->new_price =! null)
                            <span class="new-price">{{ $item->price }}</span>
                            <span class="old-price">{{ $item->new_price }}</span>
                            @else
                                <span class="new-price">{{ $item->price }}</span>
                            @endif
                        </div>
                        <div class="pro-details-size">
                            <span>{{ $item->builder }}</span>
                        </div>
                        <div class="pro-details-quality">
                            <!--<span>Quantity:</span>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                            </div>-->
                        </div>
                        <div class="product-details-meta">
                            <ul>
                                <li><span>Адрес:</span> <a href="#"> {{ $item->address }}</a></li>
                                <li><span>Номер</span> <a href="#">8707 707 0707</a></li>
                            </ul>
                        </div>

                        <div class="pro-details-action-wrap">
                            <div class="pro-details-add-to-cart">
                                        <a title="Add to Cart" href="{{ $item->link_builder }}">
                                                Связаться с застройщиком
                                        </a>
                            </div>
                            <div class="pro-details-action">

                                <a title="Add to Wishlist" class="button cart_button" href="{{ url('add-to-cart/'.$item->id) }}"><i class="icon-heart"></i></a>

                                <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                <div class="product-dec-social">
                                    <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                    <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                    <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                    <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-wrapper pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dec-review-topbar nav mb-45">
                        <a class="active" data-toggle="tab" href="#des-details1">Планировки и цены в ЖК</a>
                        <a data-toggle="tab" href="#des-details2">ЖК на карте</a>
                        <a data-toggle="tab" href="#des-details3">Состояние строительства на </a>
                        <a data-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                    </div>
                    <div class="tab-content dec-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="description-wrap">
                                <script>
                                    var axios = require('axios');

                                    var config = {
                                        method: 'get',
                                        url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522%2C151.1957362&radius=1500&type=schools&keyword=cruise&key=AIzaSyA693IAZfP4pL3jV0PHer3Irzsznwzm9UA',
                                        headers: { }
                                    };

                                    axios(config)
                                        .then(function (response) {
                                            console.log(JSON.stringify(response.data));
                                        })
                                        .catch(function (error) {
                                            console.log(error);
                                        });
                                </script>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                ЖК на карте Нур-Султана (Астаны)

                                <div id="map">

                                </div>

                                <script>
                                    let map;

                                    function initMap() {
                                        const myLatLng = { lat: {{ $item->lat }}, lng: {{ $item->lng }} };
                                        map = new google.maps.Map(document.getElementById("map"), {
                                            center: myLatLng,
                                            zoom: 15,
                                        });

                                        new google.maps.Marker({
                                            position: myLatLng,
                                            map,
                                            title: "Here!",
                                        });
                                    }

                                    window.initMap = initMap;

                                </script>
                                <script
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA693IAZfP4pL3jV0PHer3Irzsznwzm9UA&callback=initMap&v=weekly"
                                    defer
                                ></script>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                Состояние строительства
                            </div>
                        </div>
                        <div id="des-details4" class="tab-pane">
                            @auth('web')
                                @foreach($item->comments as $comment)
                                <div class="single-review comment">
                                    <div class="review-img">
                                        <img src="https://cdn-icons.flaticon.com/png/512/1144/premium/1144709.png?token=exp=1654758270~hmac=49cc660a241f864595967a6c13e2d841" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>{{ $comment->name }}</span> {{ $comment->created_at }}</h5>
                                            </div>
                                            <div class="review-rating ml-5">
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                            </div>
                                        </div>
                                        <p><strong>Comment:</strong><br/>{{ $comment->comment }}</p><br>                                    </div>
                                </div>

                                @endforeach

                                    <div class="ratting-form-wrapper" id="comment-form">
                                        <span>Добавить отзыв</span>
                                        <p> Ваш адрес электронной почты не будет опубликован. Обязательные поля отмечены <span>*</span></p>
                                        <div class="ratting-form">
                                            <form method="POST" action="{{ route('comments.store', $item->id) }}">
                                                @CSRF
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label for="name">Name <span></span></label>
                                                            <input name="name" value=" {{ Auth::user()->name }}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label for="email">Email <span></span></label>
                                                            <input name="email" value=" {{ Auth::user()->email }}" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="star-box-wrap">
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style mb-20">
                                                            <label>Your review <span>*</span></label>
                                                            <textarea name="comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <input type="submit" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                            @endauth

                            @guest("web")
                                    @foreach($item->comments as $comment)
                                        <div class="single-review comment">
                                            <div class="review-img">
                                                <img src="https://cdn-icons.flaticon.com/png/512/1144/premium/1144709.png?token=exp=1654758270~hmac=49cc660a241f864595967a6c13e2d841" alt="">
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-name">
                                                        <h5><span>{{ $comment->name }}</span> {{ $comment->created_at }}</h5>
                                                    </div>
                                                    <div class="review-rating ml-5">
                                                        <i class="yellow icon_star"></i>
                                                        <i class="yellow icon_star"></i>
                                                        <i class="yellow icon_star"></i>
                                                        <i class="yellow icon_star"></i>
                                                        <i class="yellow icon_star"></i>
                                                    </div>
                                                </div>
                                                <p><strong>Comment:</strong><br/>{{ $comment->comment }}</p><br>                                    </div>
                                        </div>

                                    @endforeach

                                    <div class="ratting-form-wrapper" id="comment-form">
                                        <span>Добавить отзыв</span>
                                        <p> Ваш адрес электронной почты не будет опубликован. Обязательные поля отмечены <span>*</span></p>
                                        <div class="ratting-form">
                                            <form method="POST" action="{{ route('comments.store', $item->id) }}">
                                                @CSRF
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label for="name">Name <span></span></label>
                                                            <input name="name"type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label for="email">Email <span></span></label>
                                                            <input name="email"  type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="star-box-wrap">
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                                <a href="#"><i class="icon_star"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style mb-20">
                                                            <label>Your review <span>*</span></label>
                                                            <textarea name="comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <input type="submit" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>Ход строительства Ж</h3>
    </div>
    <div class="container">
        <h3>Способы покупки квартиры в ЖК</h3>
    </div>
    <div class="container">
        <h3>О жилом комплексе</h3>
    </div>
    <div class="related-product pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Related Product</h2>
            </div>
            <div class="related-product-active">
                <div class="product-plr-1">
                    <div class="card shadow bg-body" style="width: auto;">
                        <img class="card-img-top" src="../media/card5.jpeg" alt="Card image cap" id="card-img">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                        </div>

                        <div class="card-body">
                            <p class="card-text">в Нур-Султане (Астане)</p>
                            <small class="card-text">Цена / м2</small>
                            <b class="card-text"></b>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal end -->
</div>

<!-- All JS is here
============================================ -->

<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="/assets/js/plugins/slick.js"></script>
<script src="/assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="/assets/js/plugins/jquery.instagramfeed.min.js"></script>
<script src="/assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="/assets/js/plugins/wow.js"></script>
<script src="/assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="/assets/js/plugins/jquery-ui.js"></script>
<script src="/assets/js/plugins/magnific-popup.js"></script>
<script src="/assets/js/plugins/sticky-sidebar.js"></script>
<script src="/assets/js/plugins/easyzoom.js"></script>
<script src="/assets/js/plugins/scrollup.js"></script>
<script src="/assets/js/plugins/ajax-mail.js"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>  -->
<!-- Main JS -->
<script src="/assets/js/main.js"></script>
<script id="dsq-count-scr" src="//baspana.disqus.com/count.js" async></script>
</body>

</html>
