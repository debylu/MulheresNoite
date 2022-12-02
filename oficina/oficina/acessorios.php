<?php
require_once 'head.php';
require_once 'menu.php';
?>

<div class="container-fluid">
    <div class="row pecas">
        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="imagens/almofada.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Almofada</h5>
                    <p class="card-text">Um acessório para carro que vem se popularizando recentemente entre os motoristas é a almofada antiderrapante para colocar no painel do veículo. Ao contrário do porta-trecos, que muitas vezes serve para colocar diversos objetos, a almofada tem a função de colocar alguns objetos principais, também com objetivo de não perdê-los dentro do carro enquanto dirige.</p>
                    <p>R$54,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#amortecedor">
  Comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="imagens/apoiodebraco.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Apoio de Braço</h5>
                    <p class="card-text">Para evitar infrações e, claro, incômodos ao dirigir, não deixe de adquirir apoiadores para o braço e tenha momentos mais tranquilos ao volante. </p>
                    <p>R$45,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#apoiodebraco">
  Comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/sensor.jpeg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Sensor de Estacionamento</h5>
                    <p class="card-text">Com espaços para estacionar cada vez mais escassos e menores torna-se indispensável adquirir esse acessório para carro. Existem hoje no mercado variadas opções e modelos desde os mais tecnológicos, incluindo sensores dianteiros, traseiros e laterais, até os mais simples.</p>
                    <p>R$147,50</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bieleta">
  Comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/suporte.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Suporte de Celular</h5>
                    <p class="card-text">Que tal investir em um acessório para carro que lhe fará parar de ter que deixar o celular na mão quando tiver que usar o GPS?.</p>
                    <p>R$35,00</p>
                   <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cabodevela">
  Comprar
</button>
                </div>
            </div>
        </div>


    </div>
</div>








<!-- Modal -->
<div class="modal fade" id="amortecedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">amortecedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/amortecedor.jfif">
                <p>Soluções Inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="freio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Freio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/freio.jfif">
                <p>Soluções Inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="bieleta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bieleta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/bieleta.jfif">
                <p>Soluções Inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cabodevela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cabo de Vela</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/cabo de vela.jfif">
                <p>Soluções Inteligentes para seu carro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once 'footer.php';
?>