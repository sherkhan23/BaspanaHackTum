@section('title')Cart @endsection
@include('inc.navbar')
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



<div class="shop-area mt-40 pb-120">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
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


    <div class="container">
        <div class="row">

        <?php $total = 0 ?>
        <!-- by this code session get all product that user chose -->
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                    <div class="single-product-wrap mb-35">
                        <div class="product-img product-img-zoom mb-15">
{{--                          //  <a href="{{ route('show_zhk', ['category', $details->$id]) }}">--}}
                                <img src="{{ $details['picture'] }}" alt="" style="height: 230px;">
                            </a>
                            <div class="product-action-2 tooltip-style-2">
{{--                               // <button title="Wishlist"><a href="{{ url('add-to-cart/'.$details->id) }}" ><i class="icon-heart"></i></a></button>--}}

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
                                    {{ $details['zhkName']}}
                                </a></h3>
                            <div class="product-price-2">
                                                            <span>
                                                                    от {{ $details['price'] }}₸
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

                            <h3><a href="product-details.html">{{ $details['zhkName'] }}</a></h3>
                            <div class="product-price-2">
                                <span>от {{ $details['price'] }} тг</span>
                            </div>

                            <div class="pro-add-to-cart">
{{--                                <a href="{{ url('add-to-cart/'.$el->id) }}" ><button title="Add to Cart">Add To Cart</button></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif

        </div>
    </div>

    <div class="d-flex justify-content-center align-content-center ">
{{--        {{ session('cart')->links()}}--}}
        <button class="btn btn-info btn-sm update-cart" data-id="{{  $details['id'] }}"><i class="fa fa-refresh"></i>Update</button>
        <!-- this button is for update card -->
        <button class="btn btn-danger btn-sm remove-from-cart delete ml-4" data-id="{{  $details['id'] }}"><i class="fa fa-trash-o"></i>Remove</button>
    </div>


</div>
</body>

</html>
@section('scripts')
    <script type="text/javascript">
        // this function is for update card
        $(".update-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();

                    }
                });
            }
        });
    </script>

@endsection



