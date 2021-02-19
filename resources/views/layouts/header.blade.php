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

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

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
              <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown user-menu">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                              {{-- <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                                   class="user-image img-circle elevation-2" alt="User Image"> --}}
                              <span class="d-none d-md-inline">
                                {{ Auth::user()->name }}
                              </span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                              <!-- User image -->
                              <li class="user-header w-100 p-0 m-0">
                                <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                                       class="img-circle elevation-2 img-fluid mx-auto"
                                       alt="User Image" width="75">

                                      {{-- <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small> --}}

                              </li>
                              <!-- Menu Footer-->
                              <li class="user-footer row text-center p-0 m-0">
                                  @if ( Auth::user()->email == 'management@soulsistar.com' || Auth::user()->email == 'info@remotepartner.co')
                                  <a class="col-12 btn p-0 m-0" href="home">Backoffice</a>
                                  @endif
                                  <a href="#" class="col-12 btn p-0 m-0"
                                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      Sair
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
            </li>
          </ul>
        </div>
    </nav>

    <nav class="d-block d-sm-none main-header navbar-white navbar-light">
      <div class="container">
           <div class="row">
             <div class="col-10 navbar-left m-0 p-0">
               <img src="/storage/uploads/titulo.png" class="img-fluid navbar-nav navbar-left" alt="Header Image">
             </div>
             <div class="col-2 navbar-right m-0 p-0 mt-5">
               <button onclick="openmenu()" class="navbar-toggler navbar-nav navbar-right" type="button">
                 <span class="navbar-toggler-icon"></span>
               </button>
             </div>
           </div>
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
<div class="menu-mobile" id="mobile-menu">
  <div class="d-block w100 text-right p-4 mt-3 mr-3" onclick="closemenu()">
    <img src="/storage/uploads/icon_close.png" / width="31" />
  </div>
  <ul class="m-0 p-0">
    <li><a href="/">Bando</a></li>
    <li><a href="/album/bembonda">Bem Bonda</a></li>
    <li><a href="/pedrapao">Pedra-Pão</a></li>

  </ul>
  <div class="absolute-bottom row" onclick="closemenu()">
    <div class="col-5 mb-2">
      <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             class="img-circle elevation-2 img-fluid mx-auto mr-2 "
             alt="User Image" width="50">

        {{ Auth::user()->name }}
    </div>
    <div class="col-7 user-mobile pt-2">
      @if ( Auth::user()->email == 'management@soulsistar.com' || Auth::user()->email == 'info@remotepartner.co')
      <a href="home" class="mr-2 ml-2 m-2" >Backoffice</a>
      @endif
      <a href="#" class="mr-2 ml-2 m-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Sair
      </a>

    </div>
  </div>
</div>
<script type="text/javascript">
  function openmenu(){
    document.getElementById('mobile-menu').style.display = "block";
  }

function closemenu(){
  document.getElementById('mobile-menu').style.display = "none";
}

</script>
</body>
</html>
