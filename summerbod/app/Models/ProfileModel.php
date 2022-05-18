<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ProfileModel extends Model
{
    protected $table = 'user_workouts';
 
    protected $allowedFields = ['user_id', 'user_image', 'user_category', 'user_name', 'user_difficulty', 'user_descr'];
}
?>