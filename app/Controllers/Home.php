<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CachorroModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new CachorroModel();
        $data['cachorros'] = $model -> getCachorros();
        echo view('templates/Header');
        echo view('pages/Home', $data);
        echo view('templates/Footer');
    }

    public function inserir()
    {
        helper('form');
        echo view('templates/Header');
        echo view('pages/InserirCachorro');
        echo view('templates/Footer');
    }

    public function gravar()
    {
        helper('form');
        $model = new CachorroModel();

        if ($this->validate([
            'nome' => [
                'label' => 'Nome', 
                'rules' => 'required|min_length[3]|max_length[100]'
            ],
            'raca' => [
                'label' => 'Raça', 
                'rules' => 'required|min_length[3]|max_length[100]'
            ],
            'cor' => [
                'label' => 'Cor', 
                'rules' => 'required|min_length[3]|max_length[100]'
            ],
            'data_nascimento' => [
                'label' => 'Data de nascimento', 
                'rules' => 'required'
            ]
        ])) {
            $dataNascimentoInput = $this->request->getVar('data_nascimento');
            $dataNascimento = \DateTime::createFromFormat('d/m/Y', $dataNascimentoInput);

            $model->save([
                'id_cachorro' => $this->request->getVar('id'),
                'nome' => $this->request->getVar('nome'),
                'raca' => $this->request->getVar('raca'),
                'cor' => $this->request->getVar('cor'),
                'data_nascimento' => $dataNascimento->format('Y-m-d')
            ]);

            return redirect('/');
        } else {
            echo view('templates/Header');
            echo view('pages/InserirCachorro');
            echo view('templates/Footer');
        }
    }
}
