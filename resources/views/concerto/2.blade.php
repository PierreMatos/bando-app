
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')
@include('alertmessage')




<div class="container bg-white">


      <div class="container">

        <div class="row header-album">
          <div class="mt-3 text-center order-md-1 order-2">
                  <img class="img-fluid" src="/storage/uploads/criatura-01-ps.jpg" alt="concerto" />
          </div>
          <div class="col-12 col-md-9 mt-5 order-md-2 order-1">
            <h1>Festival Internacional de Gigantones</h1>
            <!-- <h5>Convite em 1ª mão para o Bando</h5> -->
            <label class="album">Concerto</label>

            {{-- <div class="form-pao-pedra d-block mt-5">
              <form method="POST" action="/concerto">
                <div class="form-row align-items-center">
                  <div class="col-auto">
                @csrf
                  <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control-lg" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="h3">Reservar Bilhete</button>
                </div>
                </div>
              </form>
            </div> --}}

            <a class="h3" href="https://fig.cm-palmela.pt/" target="_blank">+ INFO</a>
            
          </div>
      </div>

          <div class="info-album" style="text-align:left;">
          
          <br>
          <p>
          "Promovido pela Câmara Municipal de Palmela, em conjunto com os parceiros Bardoada – O Grupo do Sarrafo, ATA – Acção Teatral Artimanha, Associação Juvenil COI e PIA – Projectos de Intervenção Artística, o Festival Internacional de Gigantes ocupa lugar de destaque no cartaz cultural da região e do país, ao reunir a cultura tradicional com a contemporaneidade, numa festa para todos os públicos.Durante três dias, a vila de Pinhal Novo acolhe este festival inédito, de cruzamento entre as artes tradicionais e as expressões mais contemporâneas do teatro, da música e da dança. O FIG é espaço por excelência de divulgação da arte dos gigantones, na sua componente tradicional, e das figuras de grande proporção no universo do espectáculo."
          <!-- in  <a  href="https://fig.cm-palmela.pt/" target="_blank">fig.cm-palmela.pt/</a> -->
            </p>
          
          
           
      
          
          </div>
          {{-- <div class="footer-pao">
            <img src="storage/uploads/footer-pedra-pao.jpg" class="img-fluid"/>
          </div> --}}

</div>


          </div>
    </div>
</div>


@endsection
