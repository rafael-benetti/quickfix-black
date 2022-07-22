<?php 

namespace App\Controllers;

use App\Models\EstoqueModel;

class Dashboard extends BaseController
{
	public function index()
	{
            
        $data = [];
		helper(['form']);
                
        $estoqueModel = new EstoqueModel();
        $result = $estoqueModel->select('sum(valor) as sumQuantities')->first();
        $data['qtde'] = $result['sumQuantities'];
		$data['ped'] = $result['sumQuantities'];

        $lista = $estoqueModel->select('*')->orderBy('id', 'desc')->paginate() ;

        $data['lista'] = $lista;

		echo view('template/header', $data);
		echo view('dashboard');
		echo view('template/footer');

	}
                
        public function atualizaEstoque() {

        //Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06

        helper(['form']);

        if ($this->request->getMethod() == 'post') {

            $qtde = $this->request->getVar('qrcode');
            $ped = $this->request->getVar('pedido');
            $data = [
                'valor' => $qtde,
                'created_at' => date('Y-m-d H:i:s'),
                'leitura' =>'Estoque Atualizado',
                'pedidos' => $ped
            ];

            if(is_numeric($qtde)) {
                $estoqueModel = new EstoqueModel();
                if ($estoqueModel->insert($data)) {

                    $session = session();
                 $msg = "Inserido ". $qtde.' do estoque';
                    $session->setFlashdata("message", $msg);
                    
                } else {
                    $session->setFlashdata("message", "Erro ao atualizar estoque");
                }
            } else {
                $session->setFlashdata("message", "Aceita apenas numeros");
            }
            return redirect()->to(base_url("/dashboard"));
        }
    }
	//--------------------------------------------------------------------
}
