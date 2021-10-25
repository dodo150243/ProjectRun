<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'category_name',
        'length',
        'price',
        ];
        public function categoryjoin(){
            return $this->db->table('category')
            // ->join('regis','member.id_card = regis.member')
            ->join('regis','regis.category_run = category.category_id')
            ->get()->getResultArray();
        }
}
?>