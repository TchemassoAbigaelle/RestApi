<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
     <title>@yield('title', 'Crud')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="#"><h2>@yield('subtitle', 'Game Management')</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('create') }}">Create</a>
                    
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>

                </div>
            </div>
        </div>
    </nav>
    
    
    </header>

<!-- header -->
<div class="container my-4">
<img scr="https://images.unsplash.com/photo-1611996575749-79a3a250f948?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
@yield('content')
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">

</div>
</div>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>

<script src="{{asset('/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- header -->