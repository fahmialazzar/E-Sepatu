<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model {
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'message', 'timestamp'];
}
?>
