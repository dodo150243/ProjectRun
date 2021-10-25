<?php namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model {
    protected $table = 'member';
    protected $primaryKey = 'id_card';
    protected $allowedFields = [
        'id_card',
        'first_name',
        'last_name',
        'age',
        'email',
        'password',
        ];

        public function memberjoin(){
            return $this->db->table('member')
            ->join('regis','regis.member = member.id_card')
            // ->join('category','category.category_id = regis.category_run')
            ->get()->getResultArray();
        }
       
}
?>