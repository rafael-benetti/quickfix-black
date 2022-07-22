<?php namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model{
  protected $table = 'valores';
  protected $allowedFields = ['id', 'valor', 'created_at', 'leitura', 'pedidos', 'loja_id', 'data_entrada'];
   protected $primaryKey = 'id';

 

  

}
