<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class historiqueModel extends Model
{
    protected $table      = 'historique';
    protected $primaryKey = 'IDHISTORIQUE';
    protected $returnType     = 'array'; // 'object'
    protected $useSoftDeletes = false; // true => delete_at ...

    protected $allowedFields = ['IDHISTORIQUE','IDMESSAGE', 'IDUTILISATEUR','HISTORIQUETITREMESSAGE', 'HISTORIQUETEXTEMESSAGE', 'HISTORIQUEPOLICEMESSAGE', 'HISTORIQUECOULEURMESSAGE', 'HISTORIQUEDATEHEUREMESSAGE'];

}
