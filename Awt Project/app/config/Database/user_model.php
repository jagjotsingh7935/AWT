<?php namespace App\Models;
use CodeIgniter\Model;
class StudentModel extends Model{
 protected $table='fullname';
 protected $primaryKey = 'id';
 protected
$allowedFields=['name','email','phone','URN','Regular','course_code','branch_c
ode','semester','leet','training'];
 public function deleteByName($name)
 {
 return $this->where('name', $name)->delete();
 }
 public function findByName($name)
 {
 return $this->where('name', $name)->delete();
 return $this->where('name', $name)->first();
 }
}
?>