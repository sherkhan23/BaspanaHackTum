@section('title') builder @endsection
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
    <link rel="stylesheet" href="css/shop.css">
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


<div class="container mt-5 pt-5" style="margin-top: 30px">
    <div class="row mb-5">
        <div class="d-flex d-inline-block">
{{--            <form  action="{{ route('showBuilder') }}" method="GET">--}}

            <div class="dropdown">
                <select class="select-list bg-light" style="height: 35px" name="city_id" >
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        </option>
                </select>
            </div>

            <div class="input-group w-75 ml-4">
                <input name="search_field"  type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
            </div>

{{--            </form>--}}

        </div>
    </div>
    <div class="row">
        @foreach($builder as $build)
        <div class="card mt-5 ml-3" style="width: 18rem;">
            <img src="{{ $build->picture}}" style="width: 200px" class="card-img-top ml-4 alt="Chicago Skyscrapers"/>
            <div class="card-body">
                <h5 class="card-title">{{ $build->name}}</h5>
                <p class="card-text">{{ $build->city}}</p>
            </div>
            <ul class="list-group list-group-light list-group-small">
                <li class="list-group-item px-4">{{ $build->projects}}</li>
            </ul>
            <div class="card-body">
                <button><a href="#" class="card-link fs-6 text-secondary"> сайт Застройщика</a> </button><br>
                <a href="#" class="card-link" style="font-size: large; color: red">от {{ $build->price}}тг </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>

</html>


@include('inc.footer')
