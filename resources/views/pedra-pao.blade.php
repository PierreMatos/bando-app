
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')
@include('alertmessage')


<div class="container bg-white">


      <div class="container">

          <div class="row" style="background-color:white;padding:15px;">
            <div class="header-pao">
              <div>
                  <img src="/storage/uploads/hedear-pedra-pao.jpg" class="img-fluid"/>
              </div>

              <div class="left" style="margin-top:50px; margin-bottom:25px;">
                <h4 style="margin-top:25px; font-size:xx-large">PEDRA-PÃO</h4>
              </div>

              <div class="right" style="margin-top:50px; margin-bottom:25px;">
                <h4>BEM BONDA</h4>
                <span>2021</span><br>
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
          <form method="POST" action="/pedrapao">
            @csrf
              <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control" required />
              <input placeholder="Rua" type="text" name="rua" id="rua" class="form-control" required />
              <input placeholder="Localidade" type="text" name="localidade" id="localidade" required />
              <input  placeholder="Codigo-Postal" type="text" name ="cod_postal" id="cod_postal" required />
              <button type="submit">Encomenda a tua PEDRA-PÃO ></button>
          </form>
        </div>
          </div>
          <div class="footer-pao">
            <img src="storage/uploads/footer-pedra-pao.jpg" class="img-fluid"/>
          </div>

</div>


          </div>
    </div>
</div>


@endsection
