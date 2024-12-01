<?php
namespace App\Models;
use CodeIgniter\Model;

class CachorroModel extends Model {
    protected $table = 'cachorros';
    protected $primaryKey = 'id_cachorro';
    protected $allowedFields = ['nome', 'raca', 'cor', 'data_nascimento'];

    public function getCachorros() {
        return $this -> findAll();
    }
}

?>