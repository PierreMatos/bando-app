
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')


<div class="container bg-white">
      <div class="container">
          <div class="row p5" style="background-color:white;padding:15px;">
              <h4 class="text-center">Contatos</h4>
          </div>
          <div class="row text-center pb-4">
            <div class="col-xs-12 col-md-4">
              Management<br>management@soulsistar.com
            </div>
            <div class="col-xs-12 col-md-4">
              Booking PT<br>agenciamento@haushaus.pt
            </div>
            <div class="col-xs-12 col-md-4">
                Worldwide<br>booking@omnichord.pt
              </div>
          </div>
          <div class="row">
            <div class="col-12" style="text-align:center;">
              <div class="form-diz-algo">
                <h4>Diz-nos algo</h4>
                <form method="POST" action="/pedrapao">
                  @csrf
                    <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control" required />
                    <textarea placeholder="Mensagem" type="text" name="mensagem" id="mensagem" class="form-control" required> </textarea>
                    <button type="submit">Envia-nos algo ></button>
                </form>
              </div>
            </div>
          </div>


          </div>
    </div>
</div>


@endsection
