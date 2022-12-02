<?php
require_once 'head.php';
require_once 'menu.php';
?>

<div class="container-fluid">
    <div class="row pecas">
        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="imagens/amortecedor.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">amortecedor</h5>
                    <p class="card-text">Tipos: Amortecedores hidráulicos, Amortecedores a gás, Amortecedores eletrônicos.</p>
                    <p>R$100,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#amortecedor">
  Comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="imagens/freio.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">freio</h5>
                    <p class="card-text">Tipos: freio de mão, Freio ABS e Freio a tambor.</p>
                    <p>R$80,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#freio">
  Comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/bieleta.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Bieleta</h5>
                    <p class="card-text">Tipos: Bieleta Nakata, Bieleta TRW.</p>
                    <p>R$150,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bieleta">
  Comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/cabo de vela.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Cabo de vela</h5>
                    <p class="card-text">Tipos: Cabos SC e Cabos ST.</p>
                    <p>R$50,00</p>
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