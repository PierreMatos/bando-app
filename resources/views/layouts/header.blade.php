<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- APP CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">

    <!-- AdminLTE -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/> --}}

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="background">
    <!-- Main Header -->
    <nav class="d-none d-sm-block main-header navbar-white navbar-light">
      <img src="/storage/uploads/titulo.png" class="mx-auto d-block img-fluid" alt="Header Image">
      <div class="menu pt-1 w100">
          <ul>
            <li><a href="/">Bando</a></li>
            <li><a href="/album/bembonda">Bem Bonda</a></li>
            <li><a href="/pedrapao">Pedra-Pão</a></li>
            <li>
            <a href="#"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Sair
                  </a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
            @if ( Auth::user()->email == 'management@soulsistar.com' || Auth::user()->email == 'info@remotepartner.co')
            <li><a href="home">BACKOFFICE</a></li>
            @endif
          </ul>
        </div>
    </nav>

    <nav class="d-block d-sm-none main-header navbar-white navbar-light">

        <img src="/storage/uploads/titulo.png" class="img-fluid" alt="Header Image">
<div class="btn-navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
</div>



    </nav>

    <!-- Content Wrapper. Contains page content -->
    {{-- <div class="content-wrapper"> --}}

        <div class="content-wrapper" id="background">
              <section class="content">
                @yield('content')
            </section>
        </div>

    {{-- </div> --}}
</div>
</body>
</html>
