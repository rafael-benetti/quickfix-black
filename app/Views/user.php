<style>
  input:focus {
    border: 0;
    background-color: #cccccc00;
    width: 300px;
    border-bottom: 1px solid #794f4f;
  }
</style>
<div class="padding">

  <div style="text-align: center">
    <i class="mdi mdi-forum"></i>
    <br>
    <h2 style="color: #666;">Estoque: <?php echo $qtde; ?></h2>
    <br>
    <p class="text-center" style="color:#444;">Passe o QRCODE para dar baixa no estoque</p>
    <br>

    <form method="post" action="<?php echo base_url(); ?>/user/atualizaEstoque">

      <input id="qrcode" name="qrcode" type="text" id="username intert-textarea">

    </form>

    <?php if (session()->getFlashdata("message")) { ?>
      <div class="alert alert-warning" role="alert">
        <?= session()->getFlashdata("message") ?>

      </div>
    <?php } ?>

    <p><img style="width:300px" src="<?php echo base_url(); ?>/barcode.png"></p>

    <!--INSERIR TABELA COM OS RESULTADOS DAS LEITURAS DO DIA -->

    </br>
    
    <div class="row">
        <div class="col-sm-12" style="padding:0 200px 0 200px">


    <table id="dashlist" class="table"  align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>VALOR</th>
                <th>LEITURA</th>
                <th>PEDIDO</th>
                <th>DATA</th>

            </tr>
        </thead>
      
        <tbody>
             <?php foreach($lista as $list){ ?>
            <tr>
                <th><?=$list['id']?></th>
                <th><?=$list['valor']?></th>
                <th><?=$list['leitura']?></th>
                <th><?=$list['pedidos']?></th>
                <th><?=$list['created_at']?></th>
            </tr>
            <?php } ?>
        </tbody>
   
        
        <tfoot>
       <tr>
                <th>ID</th>
                <th>VALOR</th>
                <th>LEITURA</th>
                <th>PEDIDO</th>
                <th>DATA</th>

            </tr>
        </tfoot>
    </table>

        </div>
    </div>







  </div>