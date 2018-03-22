<!DOCTYPE html>
<html>
<head><title>__TITLE__</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="en-US">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/coupon.min.css') }}" rel="stylesheet">
    @yield('add_head')
</head>
<body>
<div class="base">
    <header>
        <nav class="position-relative navtop">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <ul class="logo">
                        <li class="clogo"><img src="{{ asset('image/checked.png') }}"></li>
                        <li class="logo-top"><span class="color-left">oupon</span><span class="color-right">Checked</span></li>
                        <li class="logo-bottom">Real Time Saving</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="search-top">
                        <div class="input-group mb-3 center-block">
                            <input type="text" class="form-control" placeholder="search a items...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

