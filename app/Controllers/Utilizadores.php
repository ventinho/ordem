<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UtilizadorModel;

class Utilizadores extends BaseController
{

    private $utilizadorModel;

    public function __construct()
    {
        $this->utilizadorModel = new \App\Models\UtilizadorModel();
    }

    public function index()
    {
        $data =[
            'titulo' => 'Lista de clientes do sistema',
        ];

        return view('Utilizadores/index', $data);
    }

    public function listagem()
    {

        if(!$this->request->isAJAX()){
            return redirect()->back();
        }

        $atributos = [
            'id',
            'fotografia',
            'nome',
            'email',
            'telemovel',
            'ativo',
        ];

        $utilizadores = $this->utilizadorModel->select($atributos)->findAll();

        $data = [];

        foreach($utilizadores as $utilizador){

            

            $data[] = [
                'fotografia' => '<img src="' . $utilizador->fotografia. '" style=" width: 30%;">',
                'nome' => anchor("Utilizadores/exibir/$utilizador->id", esc($utilizador->nome)),
                'email' => esc($utilizador->email),
                'telemovel' => esc($utilizador->telemovel),
                'ativo' => ($utilizador->ativo == true ? '<i class="fa fa-unlock text-success"></i>&nbsp;Ativo' : '<i class="fa fa-lock text-danger"></i>&nbsp;Inativo'),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);

    }

    public function exibir(int $id = null)
    {
        $utilizador = $this->procuraUtilizadorOu404($id);

        $data = [
            'titulo' => "Cliente: " . esc($utilizador->nome),
            'utilizador' => $utilizador,
        ];

        return view("Utilizadores/exibir", $data);
    }


    public function editarUtilizador(int $id = null)
    {
        $utilizador = $this->procuraUtilizadorOu404($id);

        $data = [
            'titulo' => "Cliente: " . esc($utilizador->nome),
            'utilizador' => $utilizador,
        ];

        return view("Utilizadores/editarUtilizador", $data);
    }


    public function atualizar(){
        if(!$this->request->isAJAX()){
            return redirect()->back();
        }

        $post = $this->request->getPost();

        echo '<pre>';
        print_r($post);
        exit;
    }


    private function procuraUtilizadorOu404(int $id = null)
    {
        if(!$id || !$utilizador = $this->utilizadorModel->withDeleted(true)->find($id)){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("O cliente $id não foi encontrado.");
        }
        
        return $utilizador;
    }
}
