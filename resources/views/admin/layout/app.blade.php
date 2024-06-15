<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @include('admin.layout.styles')

    @include('admin.layout.scripts')

</head>

<body style="background-color: #F1F6F5;">
<div id="app">
    <div class="main-wrapper">

        @include('admin.layout.nav')

        @include('admin.layout.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading')</h1>
                    {{-- <div class="ml-auto">
                        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                    </div> --}}
                </div>

                @yield('main_content')

            </section>
        </div>

    </div>
</div>

@include('admin.layout.scripts_footer')

</body>
</html>