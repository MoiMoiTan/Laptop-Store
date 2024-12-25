<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title', 'Laptop Store')</title> 
    @include('layouts.partials.styles')
</head>

<body class="bg-theme bg-theme1">
    @include('layouts.partials.header')
    
    <div id="wrapper" class="d-flex">
        @auth
            @include('layouts.partials.sidebar')
        @endauth
        
        <div id="content-wrapper" class="flex-grow-1 d-flex flex-column">
            <main id="content" class="flex-grow-1">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
            
            @include('layouts.partials.footer')
        </div>
    </div>

    @auth
        @include('layouts.partials.color-switcher')
    @endauth
    
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    @include('layouts.partials.scripts')
</body>
</html>
