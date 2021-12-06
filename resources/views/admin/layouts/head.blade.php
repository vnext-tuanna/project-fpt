<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('admin')}}/font/iconsmind/style.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    @stack('style')
</head>
