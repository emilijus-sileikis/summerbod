<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ProfileModel extends Model
{
    protected $table = 'user_workouts';
 
    protected $allowedFields = ['user_id', 'user_image', 'user_category', 'user_name', 'user_difficulty', 'user_descr'];

    public function delWorkout($id = null)
    {
        $builder = $this->db->table('user_workouts');
        $builder->delete(['user_workoutid' => $id]);
        $usr = $builder->get();
        $this->db->close();
        return $usr;
    }
}
?>