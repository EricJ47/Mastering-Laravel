<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home Content</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>

  <!-- Navbar -->
  @include('layouts.header')

  <!-- Content -->
  <div class="content">
    <div class="center-box">
      
        @yield('content')

    </div>
  </div>

 
@include('layouts.footer')
</body>
</html>
