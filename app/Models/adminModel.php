<?php

namespace App\Models;

use CodeIgniter\Model;


class adminModel extends Model
{


    protected $table = 'user2';
    protected $fillable = ['name', 'email', 'gmbrktp'];
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'email',
        'alamat',
        'NoHp',
        'gmbrktp',
        'gmbr',
        'is_active',
        'date_created',
        'selfie',
        'koordinat',

    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;

    public function search($keyword)
    {

        return $this->table('user2')->like('name', $keyword)->orLike('alamat', $keyword);
    }
}
