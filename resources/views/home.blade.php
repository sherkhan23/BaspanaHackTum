@extends('layouts.app')
@section('title') Baspana @endsection
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link rel="shortcut icon" href="media/modern-skyscraper-building.jpeg" />

    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 end -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@section('content') @endsection
@include('inc.navbar')
@include('inc.header')
@include('inc.popularzhk')
@include('inc.aboutus')

@include('inc.partners')
@include('inc.feedback')
@include('inc.footer')
