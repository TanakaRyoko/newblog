<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charaset=utf-8>
        <title>Basic website</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
       @include('inc.navbar')
        <div class="container">
            
            @if(Request::is('/'))
                @include('inc.showcase')
            @endif
            
            @include('inc.massages')
            
            <div class="row">
                <div class="col-mi-8 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-mi-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
        
        <footer id="footer" class="text-center">
            <P>Copyright 2020&copy; Tanaka</P>
        </footer>
 
    </body>
</html>