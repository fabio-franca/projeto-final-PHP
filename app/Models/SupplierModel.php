<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'suppliers';
    protected $primaryKey = 'id_supplier';
    //protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['id_supplier','supplier_description','supplier_cnpj','supplier_email','supplier_phone', 'supplier_address', 'supplier_created_in'];
    
}