
<?php
use Carbon\Carbon;
?>
@extends('layouts.header')
@section('content')
@include('alertmessage')




<div class="container bg-white">


      <div class="container">

        <div class="row header-album">
          <div class="col-12 col-md-3 mt-3 text-center order-md-1 order-2">
                  <img class="card-img-top" src="/storage/uploads/criatura_live2.jpg" alt="concerto" />
          </div>
          <div class="col-12 col-md-9 mt-5 order-md-2 order-1">
            <h1>Lançamento de "Bem Bonda" ao Vivo!</h1>
            <h5>Convite em 1ª mão para o Bando</h5>
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

            <a class="h3" href="https://www.bol.pt/Comprar/Bilhetes/95418-ciclo_mundos_criatura-teatro_da_trindade_inatel/" target="_blank">COMPRAR BILHETES</a>
          </div>
      </div>

          <div class="info-album" style="text-align:left;">
          
          <br>
          <p>Trazemos-vos a primeira comunicação exclusiva para o Bando! Uma notícia sobre a qual temos todo o gosto e alegria em vos fazermos chegar em primeiríssima mão. A data do concerto oficial de lançamento do “Bem Bonda”:
          </p>
          <p>Este concerto surge a convite do Ciclo Mundos, uma programação no Teatro da Trindade Inatel. Já tínhamos feito parte do Ciclo Mundos em 2016, aquando da tour do “Aurora” e foi para nós dos concertos mais bonitos que demos. Também não é para menos, o Teatro da Trindade Inatel não se poupa ao vislumbre! 
          </p><br><br>

{{-- 
          <p>
          Dadas as restrições aplicadas aos teatros por parte da DGS, a lotação para este concerto será de apenas 230 pessoas. Queremos por isso preparar-vos para correrem à bilheteira, antes de amanhã divulgarmos nas nossas redes.

          Dadas as restrições aplicadas aos teatros por parte da DGS, a lotação para este concerto será de apenas 230 pessoas. Queremos por isso preparar-vos para correrem à bilheteira, antes de amanhã divulgarmos nas nossas redes: https://www.bol.pt/Comprar/Bilhetes/95418-ciclo_mundos_criatura-teatro_da_trindade_inatel/.  

          Mais, informamos-vos que estávamos a aguardar saber desta data para podermos entregar-vos em mãos, a Pedra-Pão. Teremos pão quente a sair do forno no dia do concerto e entregar a quem já tiver feito a sua encomenda e nos confirmar a sua presença neste concerto. Para isso, basta escreverem-nos mail com o assunto: “Reserva de Pedra-Pão para a Teatro da Trindade” e mencionaram no mail que já têm o vosso bilhete e, caso que pretendem receber a vossa Pedra-Pão no Teatro da Trindade. Ao final do concerto iremos proceder à distribuição! Para quem não conseguir estar presente no concerto, iremos também proceder à distribuição ao longo dessa semana. A Pedra-Pão continuará disponível para encomenda no Bando até ao dia 25 Maio. 
          
          
          <br><br>
          <b>SINOPSE</b>
          <br>
          A CRIATURA é um eclético bando de músicos, artistas e gente que se dedica a revisitar a memória popular do território que habita e que a partir dela se propõe a criar música e arte que nasce de outras formas de olhar, sentir e ser a tradição. Depois de editarem o primeiro disco Aurora em 2016, editam agora BEM BONDA em 2021. Um disco que tem como foco o rompimento de padrões culturais já saturados e desfasados da realidade portuguesa. Um espetáculo onde a Criatura se irá apresentar com a participação especial do Coro dos Anjos.
          <br>
          <br>
          <b>FICHA ARTÍSTICA</b>
          <br>
          Guitarra portuguesa: Acácio Barbosa<br>
          Bandolim, guitarra acústica,cavaquinho: Alexandre Bernardo<br>
          Trompete: Cláudio Gomes<br>
          Voz, piano, teclados e adufe: Edgar Valente<br>
          Bateria: Fábio Cantinho<br>
          Voz e violino: Gil Dionísio<br>
          Percussões e Mbira: Iúri Oliveira<br>
          Guitarra eléctrica: João Aguiar<br>
          Baixo eléctrico: Paulo Lourenço<br>
          Gaita de foles, flauta transversal, ocarina e palheta beiroa: Ricardo Coelho<br>
          Coro: Coro dos Anjos<br>
          Técnico Som: Sérgio Antunes<br>
          Técnico Som: Mike Simões<br>
          Berto Pinheiro: Iluminador<br>
          Road Manager: Ricardo Dias<br>
          Management: Joana de Souza Dias<br>
          <br>
          <b>DURAÇÃO</b>
          <br>
          90 minutos
          <br>
          <br>
          
          <b>ABERTURA PORTAS</b>
          <br>
          <br>
          19:30 [As portas abrem 30 minutos antes do início da sessão.]
          
           
          
          <b>PREÇOS</b>
          <br>
          Geral: 10€
          <br>
          Descontos
          <br>
          Associado INATEL (extensível a 1 acompanhante) - 10%
          <br>
          
          Maiores 65 anos - 10%
          <br>
          Pessoa c/deficiência (e acompanhante) - 10%
          <br>
          Profissionais espetáculo - 10%
          <br>
           
          
          <br>
          <b>PROMOTOR</b>
          <br>
          Fundação Inatel
          <br>
           
          <br>
          
          <b>NOTAS SUPLEMENTARES</b>
          <br>
          
          <b> AO TRINDADE - RECOMENDAÇÕES DE SEGURANÇA</b>
          <br>
          As normas de segurança para acesso do público ao Teatro da Trindade INATEL, vão ao encontro das orientações da DGS:
          <br>
          - A venda de bilhetes para plateia e balcões prevê uma cadeira de intervalo entre cada lugar<br>
          - Os lugares de camarotes e frizas podem ser adquiridos na sua totalidade, apenas por coabitantes<br>
          - O espectador deverá sentar-se apenas nos lugares atribuídos. Não poderá ocupar lugares de segurança<br>
          - Existem acessos específicos à bilheteira e ao interior do Teatro, devidamente identificados com sinalética para o efeito<br>
          - A distância de segurança dever ser respeitada no interior do Teatro<br>
          - É obrigatório o uso de máscara no interior do edifício e durante todo o espetáculo.<br>
          - Recomenda-se a higienização das mãos nos postos de gel desinfetante disponíveis, antes de entrada na sala de espetáculos<br>
          - A saída de público é realizada segundo as indicações dos assistentes de sala<br>
          - Não há serviço de cafetaria<br>
          - As salas e respetivos lugares são higienizados antes da entrada de público<br>
          
          <br>
          
           
          
          WWW.BEMBONDA.PT
          <br>
          <br>
          <b>MANAGEMENT</b>
          <br>
          Joana de Souza Dias<br>
          management@soulsistar.com<br>
          
           
          <br>
          
          <b>BOOKING</b>
          <br>
          agenciamento@haushaus.pt
        </p> --}}
          
          </div>
          {{-- <div class="footer-pao">
            <img src="storage/uploads/footer-pedra-pao.jpg" class="img-fluid"/>
          </div> --}}

</div>


          </div>
    </div>
</div>


@endsection
