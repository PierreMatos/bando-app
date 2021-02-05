
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
      <div class="container">
          <div class="row" style="background-color:white;padding:15px;">
            <div class="header-album">
              <div>
                  <img src="storage/uploads/perfil3.png" />
              </div>

              <div class="infoalbum">
                <label class="album">album</label>
                <h4>BEM BONDA</h4>
                <span>em lançamento exlusivo</span><br>
                <a href="storage/music/Criatura - Bem Bonda.zip" target="_blank">Download aqui</a>
              </div>
            </div>

            <table class="table" style="margin-top:25px">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Duração</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Anunciação</td>
                    <td>04:34</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bem Bonda</td>
                    <td>08:13</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Lobbysómem</td>
                    <td>06:08</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>A Festa do Medo do Gaiteiro</td>
                    <td>06:08</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Da Praxe</td>
                    <td>09:23</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>O Padeiro - Parte 1</td>
                    <td>06:45</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>O Padeiro - Parte 2</td>
                    <td>05:21</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>O Namoro</td>
                    <td>00:59</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>A Noiva</td>
                    <td>07:41</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>O Encanto</td>
                    <td>03:47</td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>À Mãe</td>
                    <td>03:17</td>
                  </tr>
                </tbody>
          </table>
          <div class="info-album" style="text-align:center;">
            <h4>BEM BONDA</h4>
            <h4>2021</h4>

            <p>“Bem Bonda”, o novo disco da Criatura, chega dia 5 Fevereiro de 2021 ao grande público, exatamente no mesmo dia em que há 5 anos atrás veio à luz o primeiro álbum, “Aurora” (2016).</p>
            <p>"Bem Bonda" é um resgate da ancestralidade linguística beiroa, uma expressão mutável, dependente das gentes e dos lugares, que dentro do mundo dos significados nos lembra não só que “já chega”, como também que, “como se não bastasse”, “um mal nunca vem só”. Uma obra onde o ímpeto da intervenção cultural, espiritual e social surge tanto através da palavra, como através do som, ou no incentivo à ação, como a batermos o pé por um mundo onde possamos continuar a sentir e a deixar que se sinta, antes que seja tarde demais.</p>
<p>O disco, por sua vez, é apresentado como “uma ode intervencionista à alternativa de evolução, à necessidade de mudança, à urgência de imaginarmos novos caminhos, sem esquecermos de onde vimos, da memória e da identidade da cultura que nos faz ser as criaturas que somos.”
</p>

<p>Gravado entre Março 2019 e Outubro de 2020 nos estúdios Namouche, Haus e Camaleão, Bem Bonda tem dez temas, um das quais repartido em duas (Padeiro - parte 1 e 2) e conta com a formação actual da banda: de A a Z, Acácio Barbosa (guitarra portuguesa), Alexandre Bernardo (bandolim, guitarra acústica, cavaquinho), Cláudio Gomes (trompete), Edgar Valente (voz, piano, teclados e adufe), Fábio Cantinho (bateria), Gil Dionísio (voz e violino), Iúri Oliveira (percussões e Mbira), João Aguiar (guitarra eléctrica), Paulo Lourenço (baixo eléctrico) e Ricardo Coelho (gaita de foles, flauta transversal, ocarina e palheta). Além da participação especial de um músico que já fez parte do grupo, Yaw Tembe (trompete), e do Coro dos Anjos (do bairro dos Anjos, em Lisboa), grupo coral artivista que integra vários jovens compositores e cantores amigos e amigas da Criatura, que se somam nas vozes do bando.
</p>
 <h4>
 a Criatura: </h4>

 Acácio Barbosa - guitarra portuguesa<br>
 Alexandre Bernardo - bandolim, guitarra acústica, cavaquinho<br>
 Cláudio Gomes - trompete<br>
 Edgar Valente - voz, piano, teclados e adufe <br>
 Fábio Cantinho - bateria <br>
 Gil Dionísio - voz e violino <br>
 Iúri Oliveira - percussões e Mbira<br>
 João Aguiar - guitarra eléctrica<br>
 Paulo Lourenço - baixo eléctrico<br>
 Ricardo Coelho - gaita de foles, flauta transversal, ocarina e palheta beiroa<br>

 <h4>o Coro dos Anjos: </h4>
 <p>
   Anaïs Thinon, André Morais, Andrea Vertessen, Anne Sealand, António Rivotti, Beatriz Nande, Bruno Mimoso, Catarina Monteiro, Daniel Vasconcelos Melim, Diogo Vaz Cavaleiro, Dora Vicente, Gabriel Pepe, Irene Miranda, Joana Veiga, José Eduardo Amadeu, Katsiaryna Drozhzha, Hugo Santos, Mafalda Carvalho, Maria Henriques, Miguel Proença, Pedro Delgado, Rita Caldeira, Sara Mercier, Teresa Conceição, Tiago Jesus, Vasco Ribeiro, Yuri Wentink

 </p>

 <p>
   Gravado entre Março 2019 e Outubro de 2020 nos estúdios Namouche, Haus e Camaleão<br>
   por Paulo Lourenço, Bernardo Pastor, Quim Monte, Pedro Ferreira e Francisco Duque<br>
   Produzido por Paulo Lourenço, Edgar Valente e Gil Dionísio<br>
   Misturado e masterizado por: António Pinheiro da Silva <br>
   Artwork: Catherina Cardoso, João Catarino e Diogo Vaz Cavaleiro<br>
   Edição e distribuição digital: Omnichord Records<br>
   Apoios: Fundação GDA e Câmara Municipal do Fundão<br>
 </p>
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
