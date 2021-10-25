<?php namespace App\Models;

use CodeIgniter\Model;

class RegisModel extends Model {
    protected $table = 'regis';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'member',
        'category_run',
        ];
      
}
?>