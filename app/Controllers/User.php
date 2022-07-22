<?php

namespace App\Controllers;

use App\Models\EstoqueModel;

class User extends BaseController {

    public function index() {
        $data = [];
      //  $hoje = date('d/m/Y');
        $estoqueModel = new EstoqueModel();
        $result = $estoqueModel->select('sum(valor) as sumQuantities')->first();
        //$lista = $estoqueModel->select('*')->orderBy('id', 'desc')->paginate()->where('created_at',  '2022-07-21');
         
       // $userModel->where('created_at', 1)->findAll();
        
   
         $lista = $estoqueModel->where('data_entrada', date('Y-m-d'))->findAll();
     
         
        // $lista = $estoqueModel->select('*')->orderBy('id', 'asc')->paginate(5);
        $data['qtde'] = $result['sumQuantities'];
        $data['lista'] = $lista;


        echo view('template/header', $data);
        echo view('user');
        echo view('template/footer');

    }



    public function atualizaEstoque() {

        //Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06

        helper(['form']);


        if ($this->request->getMethod() == 'post') {


             $estoqueModel = new EstoqueModel();
             $session = session();
            $qrcode = explode(' ', trim($this->request->getVar('qrcode')));
            $qrcode1 = explode(':', $qrcode[0]);
            $qtde = (int) $qrcode1[1];
            
            $result = $estoqueModel->select('leitura')->where('leitura', trim($this->request->getVar('qrcode')))->first();
           
            if ($result) {

              
                    $session->setFlashdata("message", "Leitura já realizada");
                    return redirect()->to(base_url("user"));
                
            }
            

            $data = [
                'valor' => $qtde * -1,
                'data_entrada' =>date('Y-m-d'),
                'created_at' => date('Y-m-d H:i:s'),
                'leitura' => $this->request->getVar('qrcode')
            ];


            if ($qtde > 0) {
                
               

                $result = $estoqueModel->select('sum(valor) as sumQuantities')->first();
                $total = $result['sumQuantities'];
                $soma = $total - $qtde;

                if ($soma >= 0) {
                    if ($estoqueModel->insert($data)) {
                        $msg = "Retirado " . $qtde . ' do estoque';
                        $session->setFlashdata("message", $msg);
                    } else {
                        $session->setFlashdata("message", "Erro ao atualizar estoque");
                    }
                } else {
                    $session->setFlashdata("message", "Não há estoque suficiente, nao foi possivel dar baixa.");
                }
            } else {
                $session->setFlashdata("message", "Aceita apenas numeros");
            }
            return redirect()->to(base_url("/user"));
        }
    }

}
