@section('title')all zhk @endsection
@include('inc/navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap 5 -->
    <link rel="shortcut icon" href="media/modern-skyscraper-building.jpeg" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/home.css">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

<div class="main-wrapper">


    <!-- Right elements -->
</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div class="shop-area mt-40 pb-120">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="shop-topbar-left">
                        <div class="view-mode nav">
                            <a class="active" href="#shop-1" data-toggle="tab"><i class="icon-grid"></i></a>
                            <a href="#shop-2" data-toggle="tab"><i class="icon-menu"></i></a>
                        </div>
                        <p>Showing 1 - 20 of 30 results </p>
                    </div>
                    <div class="product-sorting-wrapper">
                        <div class="product-shorting shorting-style">
                            <label>View :</label>
                            <select>
                                <option name="view-posts-6" value=""> 6</option>
                                <option name="view-posts-9" value=""> 9</option>
                                <option value=""> 12</option>
                            </select>
                        </div>
                        <div class="product-show shorting-style">
                            <label>Sort by :</label>
                            <select>
                                <option value="">Default</option>
                                <option name="sort-name" value=""> Name</option>
                                <option name="sort-price" value=""> price</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                @foreach($data as $el)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class=" single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('show_zhk', ['category', $el->id]) }}">
                                                        <img id="zhk-img" src="{{ $el->picture }}" alt="" style="height: 230px">
                                                    </a>
                                                    <div class="product-action-2 tooltip-style-2">
                                                        <button title="Wishlist"><a href="{{ url('add-to-cart/'.$el->id) }}" ><i class="icon-heart"></i></a></button>

                                                        <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">
                                                    <div class="product-rating-wrap">
                                                        <div class="product-rating">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star gray"></i>
                                                        </div>
                                                        <span>(2)</span>
                                                    </div>
                                                    <h3><a href="product-details.html">
                                                            {{ $el->zhkName }}
                                                        </a></h3>
                                                    <div class="product-price-2">
                                                            <span class="text-dark">
                                                                    от {{ $el->price }}₸
                                                                 тенге
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">
                                                    <div class="product-rating-wrap">
                                                        <div class="product-rating">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star gray"></i>
                                                        </div>
                                                        <span>(2)</span>
                                                    </div>

                                                    <h3><a href="product-details.html">{{ $el->zhkName }}</a></h3>
                                                    <div class="product-price-2">
                                                        <span>от {{ $el->price }} тг</span>
                                                    </div>

                                                    <div class="pro-add-to-cart">
                                                        <a href="{{ url('add-to-cart/'.$el->id) }}" ><button title="Add to Cart">Add To Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center align-content-center mt-25">
                    {{ $data->links() }}
                    <a href="{{ $data->previousPageUrl() }}"><button class="btn btn-outline-dark">Back</button></a>
                    <a href={{ $data->nextPageUrl()  }}><button class="btn btn-outline-dark ml-3">Next</button></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                    <div class="sidebar-widget mb-40">
                <form class="sidebar-search-form" action="{{ route('allData') }}" method="GET">
                        <h4 class="sidebar-widget-title">Search </h4>
                        <div class="sidebar-search"" >

                    <div class="input-group rounded">
                        <input name="search_field" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button class="input-group-text border-0" id="search-addon">
                         <i class="icon-magnifier"></i>
                        </button>
                    </div>

                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                        <div class="product-sorting-wrapper">
                            <div class="product-show shorting-style">
                                <h4>Расположение в Нур-Султане (Астане)</h4>

                                  <select class="select-list" name="city_id" >
                                     @foreach($cities as $city)
                                          <option value="{{$city->id}}">{{$city->name}}</option>
                                      @endforeach
                                      </option>
                                  </select>

                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Price Filter </h4>
                        <div class="price-filter">
                            <label>От: </label><input name="price_from" type="number" class="w-75 bg-white ml-2" style="height: 35px"> <br>
                            <label>До: </label><input name="price_to" type="number" class="w-75 bg-white ml-2" style="height: 35px">
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Комнатность </h4>
                        <div class="sidebar-widget-list">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox"> <a href="#">1 <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">2<span>5</span></a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">3 <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">4+ <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Завершение строительствв </h4>
                        <div class="sidebar-widget-list">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input class="sorting_btn" data-order="in-progress" type="checkbox" value=""> <a href="#">Сданные <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input name="finish_year_2022" type="checkbox" value=""> <a href="#">Сдача в 2022+ <span>5</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Сдача в 2023+ <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Условиое покупки </h4>
                        <div class="sidebar-widget-list">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Ипотека <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Рассрочка <span>8</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Купить <span>9</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://">Калькулятор ипотеки</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                        <button class="btn btn-dark" type="submit">Искать</button>
                    </form>

                    <div class="sidebar-widget shop-sidebar-border pt-40 mt-3">
                        <h4>Больше фильтров</h4>
                        <select class="select-list">
                            <option value="">Больше фильтров</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal end -->
</div>

{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $('.sorting_btn').click(function(){--}}
{{--            let orderBy = $(this).data('order')--}}
{{--            $.ajax({--}}
{{--                url: "{{ route('showCategory', $cat->alias )}}",--}}
{{--                type: "GET",--}}
{{--                data: {--}}
{{--                    orderBy: orderBy--}}
{{--                },--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                },--}}
{{--                success: () => {--}}
{{--                    console.log(data)--}}
{{--            },--}}
{{--                dataType: dataType--}}
{{--            });--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}

<!-- All JS is here
============================================ -->

<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/sticky-sidebar.js"></script>
<script src="assets/js/plugins/easyzoom.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>  -->
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>
@include('inc.footer')
