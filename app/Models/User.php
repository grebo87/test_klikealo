<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'surnames', 'email', 'phone', 'status','password'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'name' => 'required|alpha_space',
        'surnames' => 'required|alpha_space',
        'email' =>'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[8]',
        'password_confirmation' => 'required_with[password]|matches[password]',
    ];

    protected $validationMessages = [
        'email' =>[
            'is_unique'=>'Lo sentimos. Tu correo ya esta siendo usado por otro usuario'
        ]
    ];
    protected $skipValidation = true;

}
