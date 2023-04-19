<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table      = 'clients';
    protected $primaryKey = 'id_client';
    //protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['id_client','client_name','client_email','client_password', 'client_cpf', 'client_phone', 'client_type', 'client_adddress', 'client_created_in'];
    
}