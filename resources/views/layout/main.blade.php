<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ url("css/sb-admin-2.css")}}">
  {{-- font awesome --}}
  <link rel="stylesheet" href="{{ url("assets/fontawesome-free/css/all.min.css")}}">

  <script src="{{ url("assets/jquery/jquery.min.js") }}"></script>

  <title>@yield('title')</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{ url('/')}}">Home</a>
          <a class="nav-item nav-link" href="{{ url("/about") }}">About</a>
          <a class="nav-item nav-link" href="{{ url("/mahasiswa") }}">Mahasiswa </a>
          <a class="nav-item nav-link" href="{{ url("/students") }}">Students </a>
        </div>
      </div>
    </nav>
  </div>

  @yield('container')

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ url("assets/jquery/jquery.slim.min.js") }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="{{ url("js/sb-admin-2.min.js") }}"></script>
  <script src="{{ url("assets/fontawesome-free/js/all.min.js") }}"></script>
</body>

</html>