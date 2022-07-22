<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Olá, <?= session()->get('firstname') ?></h3>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white ">
      <div class="container">
        <div class="container align-items-center">
          <h4><center>Quantidade em estoque</center> </h4>
        </div>
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <h1><?= $qtde ?></h1>
        </div>
        <hr>
        <form method="post" action="<?php echo base_url(); ?>/dashboard/atualizaEstoque">
          <div class="form-group">
            <label for="valor">Digite a quantidade</label>
            <input type="text" class="form-control" name="qrcode" id="qrcode" required value="<?= set_value('valor') ?>">
            <label for="valor">Informe o número do pedido</label>
            <input type="text" class="form-control" name="pedido" id="pedido" required value="<?= set_value('pedidos') ?>">
          </div>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-outline-dark ml-sm-2 mb-2" style="border-radius: 5px">Inserir</button>
            </div>
          </div>
        </form>

        <?php if (session()->getFlashdata("message")) { ?>
          <div class="alert alert-warning" role="alert">
            <?= session()->getFlashdata("message") ?>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>
<!--INSERIR TABELA COM OS RESULTADOS DAS LEITURAS DO DIA -->
</br>
<div class="row">
        <div class="col-sm-12" style="padding:0 200px 0 200px">


    <table id="dash" class="table"  align="center">
        <thead>
            <tr>
            <th>ID</th>
                <th>QUANTIDADE</th>
                <th>CÓDIGO-QR</th>
                <th>Nº PEDIDO</th>
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
   

    </table>

        </div>
    </div>