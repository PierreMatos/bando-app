
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- APP CSS -->
    <link href="css/app.css" rel="stylesheet" type="text/css" >

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">

    <!-- AdminLTE -->


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


    </head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="background">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <img src="storage/uploads/titulo.png"
                             class="mx-auto d-block"
                             alt="Header Image">


        <ul class="navbar-nav">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <span class="d-none d-md-inline">
                        user1
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            user1


                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="http://criaturamusic.com/logout" method="POST" class="d-none">
                            <input type="hidden" name="_token" value="6XEEHQ6wEMI6u0jQJpt6KYlGPwg4y8avpuynJylh">                        </form>
                    </li>
                </ul>
            </li>
        </ul>


    </nav>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="background">
      <div class="menu">
        <ul>
          <li><a href="/">Bando</a></li>
          <li><a href="bembonda">Bem Bonda</a></li>
          <li><a href="pedrapao">Pedra-Pão</a></li>
        </ul>
      </div>

      <div class="container">
          <div class="row" style="background-color:white;padding:15px;">
            <div class="header-pao">
              <div>
                  <img src="storage/uploads/hedear-pedra-pao.jpg" />
              </div>

              <div class="left" style="margin-top:50px; margin-bottom:25px;">
                <h4 style="margin-top:25px; font-size:xx-large">PEDRA-PÃO</h4>
              </div>
              
              <div class="right" style="margin-top:50px; margin-bottom:25px;">
                <h4>BEM BONDA</h4>
                <span>em lançamento exlusivo</span><br>
              </div>
            </div>

          <div class="info-album" style="text-align:center;">

          <p>A Pedra-Pão é uma Criatura comestível que podes comer ou guardar. </p>
          <p>A obra foi trabalhada pelo artista plástico Diogo Vaz Cavaleiro, que com o apoio da Fundação GDA e da Câmara Municipal do Fundão transformou em pão a pedra da capa do disco, fotografada por João Catarino e Catherina Cardoso.
          </p><p>
            Feita em massa mãe, com farinha de trigo moída em mó de pedra em moinho de vento, todos os seus ingredientes são biológicos e provenientes de produtores locais, como a batata doce roxa, a beterraba e a curcuma que dão cor ao pão junto de outros corantes comestíveis naturais sem conservantes.
          </p><p>
            Agora que já fazes parte do Bando, só precisas de encomendar a tua Pedra-Pão e inserir os dados que nos ajudarão a fazê-la chegar até ti o mais brevemente possível.
          </p>

        <div class="form-pao-pedra">
          <h4>Morada</h4>
          <form action="/#">
              <input placeholder="Rua" type="text" name="rua" required />
              <input placeholder="Localidade" type="text" name="loacalidade" required />
              <input  placeholder="Codigo-Postal" type="text" name ="codigo postal" required />
              <button type="submit">Encomenda a tua PEDRA-PÃO ></button>
          </form>
        </div>
          </div>
          <div class="footer-pao">
            <img src="storage/uploads/footer-pedra-pao.jpg" />
          </div>

</div>


          </div>
    </div>
</div>
<script>
document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
    }
}, true);
</script>
</body>
</html>
