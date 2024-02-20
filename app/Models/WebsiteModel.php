<?php 

namespace App\Models;
use CodeIgniter\Model;


class WebsiteModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'signup';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $allowedFields = [ 
        'email',
        'password',
        'address',
        'address_2',
        'city',
        'state',
        'zip'
    ];
}