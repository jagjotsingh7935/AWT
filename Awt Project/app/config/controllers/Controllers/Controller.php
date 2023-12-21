<?php
namespace App\Controllers;
use App\Models\StudentModel;
class Studentcontroller extends BaseController
{
 public function createmydelete($data){
 log_message("alert",$data);
 }

 public function loginto(){
 return view('students/Login.php');
 }
 public function process(){
 return view('students/create');
 }
 public function index(): string
 {
 $student = new StudentModel();
 $data['students']=$student->findAll();
 return view('students/index.php',$data);
 }

public function create(){
 return view('students/create');
 } public function store(){
 $students= new StudentModel();
 $data = [
 "name"=> $this->request->getPost('name'),
 "email"=> $this->request->getPost('email'),
 "URN"=> $this->request->getPost('URN'),
 "phone"=> $this->request->getPost('phone'),
 "Regular"=> $this->request->getPost('Regular'),
 "course_code"=> $this->request->getPost('course_code'),
 "branch_code"=> $this->request->getPost('branch_code'),
 "semester"=> $this->request->getPost('semester'),
 "leet"=> $this->request->getPost('leet'),
 "training"=> $this->request->getPost('training')
 ];
 $name=$data['name'];
 $email=$data['email'];
 $URN=$data['URN'];
 $phone=$data['phone'];
 $Regular=$data['Regular'];
 $course_code=$data['course_code'];
 $branch_code=$data['branch_code'];
 $semester=$data['semester'];
 $leet=$data['leet'];
 $training=$data['training'];
 $dta = $name . '-' . $email . '-' . $URN . '-' . $phone . '-' . $Regular.'-
'.$course_code.'-'.$branch_code.'-'.$semester.'-'.$leet.'-'.$training;
 $this->createmydelete($dta);
$students->save($data);
 return redirect('students')->with('status','inserted success');
}
 public function delete($name)
{
 $studentModel = new StudentModel();
 $data=$name."is deleted";
 $this->createmydelete($data);
// Call the deleteByName method from the model
 $deleted = $studentModel->deleteByName($name);
 if ($deleted) {
 // Redirect with success message
 return redirect()->to(base_url('students'))->with('status', 'Row deleted
successfully');
 } else {
 // Redirect with error message
 return redirect()->to(base_url('students'))->with('status', 'No row found
for deletion');
 }
}
public function edit($name)
 {
 $studentModel = new StudentModel();
 $data1=$name." is edited";
 $this->createmydelete($data1);
 // Find the student by name
 $data['student'] = $studentModel->findByName($name);
if ($data['student']) {
 // Load the create view with the student data for editing
 return view('students/create', $data);
 } else {
 // Redirect with error message
 return redirect()->to(base_url('students'))->with('status', 'Student not
found');
 }
 }


}