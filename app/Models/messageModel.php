<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class messageModel extends Model
{
    protected $table      = 'message';
    protected $primaryKey = 'IDMESSAGE';

    protected $returnType     = 'array'; // 'object'
    protected $useSoftDeletes = false; // true => delete_at ...

    protected $allowedFields = ['IDMESSAGE','IDUTILISATEUR', 'TITREMESSAGE','TEXTEMESSAGE','POLICEMESSAGE', 'COULEURMESSAGE' ,'IMAGEMESSAGE', 'DATEHEUREMESSAGE', 'STATUTMESSAGE', 'CREATEURMESSAGE'];


    public function messageExiste() {

        return $this->where('STATUTMESSAGE', 1)->countAllResults() > 0;
    }
}
