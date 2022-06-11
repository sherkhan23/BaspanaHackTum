@section('title')prediction @endsection
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
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS is here
	============================================ -->

</head>

<body>



    <div class="row ml-5 mt-5">
        <div class="col-md-6">
    <form action="/Users/sherkhankhanseiit/PycharmProjects/parsingRealEstate/predict.py" method="POST" class="form-control w-100 ml-5 shadow-lg" style="height: 80%; border-radius: 20px" >
        <h3> Предсказание цен для жилых комплексов</h3>
        <p> Введите данные не недострой нового жилового комплекса и узнайте примерную цену!</p>
        <small>Цену генерирует специальный machine learning код.</small> <br>
           <label for="rooms" class="mt-2">Комнаты:</label>
        <input name="rooms" type="text" class="w-full h-10 border border-gray-800 rounded px-3 " />

        <label for="class" class="mt-2">Класс жилья:</label>
        <input name="class"  type="text" class="w-full h-10 border border-gray-800 rounded px-3 " />

        <label for="lift" class="mt-2">Наличие лифта:</label>
        <input name="lift" type="text" class="w-full h-10 border border-gray-800 rounded px-3 "  />

        <label for="parking" class="mt-2">Наличие Паркинг:</label>
        <input name="parking" type="text" class="w-full h-10 border border-gray-800 rounded px-3 " />

        <label for="square" class="mt-2">Кв/м:</label>
        <input name="square" type="text" class="w-full h-10 border border-gray-800 rounded px-3 " />

        <button type="submit" class="btn btn-dark mt-3">Отправить</button>


    </form>


            <?php

            $handle = popen('python /Users/sherkhankhanseiit/PycharmProjects/parsingRealEstate/predict.py 2>&1', 'r');

            $read = fread($handle, 2096);
            echo $read;
            pclose($handle);
            ?>

        </div>
        <div class="col-md-2">
            <img href="https://www.recapeg.com/storage/app/uploads/public/5ad/4a4/597/5ad4a45979cd7909880379.jpg">
        </div>
    </div>


<!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>  -->
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>


