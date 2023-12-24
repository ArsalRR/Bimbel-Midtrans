<?php

namespace App\Models;

use CodeIgniter\Model;

class MentorModel extends Model
{
   protected $table = 'mentor';
   protected $allowedFields    = [
      'nama', 'pelajaran','jampel','alias','foto_mentor','materi'];

      public function getmentor($alias = false)
      {
       
          if ($alias == false) {
              return $this->findAll();
          }
          return $this->where(['alias' => $alias])->first();
      }
   
}

