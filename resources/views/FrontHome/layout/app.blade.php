<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('img/logounp.png') }}"/>
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    @include('FrontHome.layout.styles')

    @include('FrontHome.layout.scripts')
    <link rel="stylesheet" href="{{ asset('dist/css/nav.css') }}">

</head>
{{-- style="background-color: #F1F6F5;"  --}}
<body >
<div id="app">
    <div class="main-wrapper" >

        @include('FrontHome.layout.nav')

        <div class="main-content " style="z-index: -1">
            <section class="section">
                <div class="section-header">
                    @yield('main_content')
                </div>



            </section>
        </div>

    </div>
</div>

<br><br>

@include('FrontHome.layout.footer')
@include('FrontHome.layout.scripts_footer')

</body>
</html>
