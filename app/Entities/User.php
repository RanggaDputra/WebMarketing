<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{

    public function setgmbr($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './uploads2';
        $file->move($writePath, $fileName);
        $this->attributes['gmbr'] = $fileName;
        return $this;
    }
    public function setgmbrktp($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './uploads2';
        $file->move($writePath, $fileName);
        $this->attributes['gmbrktp'] = $fileName;
        return $this;
    }
    public function setselfie($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './uploads2';
        $file->move($writePath, $fileName);
        $this->attributes['selfie'] = $fileName;
        return $this;
    }
}
