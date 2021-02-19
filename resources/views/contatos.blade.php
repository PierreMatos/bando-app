
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')


<div class="container bg-white pb-5">
      <div class="container">

          <div class="row">
            <div class="col-12 p-2">
              <img src="/storage/uploads/criaturas_2021.png" class="img-fluid" />
            </div>
          </div>

          <div class="row text-center pb-4">
            <div class="col-xs-12 col-md-4 mb-2">
              <b>Management</b><br><a href="mailto:management@soulsistar.com" target="_blank">management@soulsistar.com</a>
            </div>
            <div class="col-xs-12 col-md-4 mb-2">
              <b>Booking PT</b><br><a href="mailto:agenciamento@haushaus.pt" target="_blank">agenciamento@haushaus.pt</a>
            </div>
            <div class="col-xs-12 col-md-4 mb-2">
                <b>Worldwide</b><br><a href="mailto:booking@omnichord.pt" target="_blank">booking@omnichord.pt</a>
            </div>
          </div>

          <div class="row">
            <div class="col-12" style="text-align:center;">
              <div class="form-diz-algo">
                <h4 class="mt-5 mb-3">Diz-nos algo</h4>
                <form method="POST" action="/dizalgo">
                  @csrf
                    <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control mt-2 mb-2" required />
                    <textarea placeholder="Mensagem" type="text" name="mensagem" id="mensagem" class="form-control mt-2 mb-2" required> </textarea>
                    <button type="submit">Envia-nos algo ></button>
                </form>
              </div>
            </div>


          </div>


          </div>
    </div>
</div>


@endsection
