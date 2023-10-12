<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class userModel extends Model
{
    protected $table      = 'utilisateur';
    protected $primaryKey = 'IDUTILISATEUR';

    protected $returnType     = 'array'; // 'object'
    protected $useSoftDeletes = false; // true => delete_at ...

    protected $allowedFields = ['IDUTILISATEUR','IDENTIFIANTUTILISATEUR', 'MOTDEPASSEUTILISATEUR','NOMUTILISATEUR', 'PRENOMUTILISATEUR'];

}
