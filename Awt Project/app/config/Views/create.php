<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.cs
s" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2
HN" crossorigin="anonymous">
</head>
<body>
 <div class="container ">
 <h2 class='text-center my-5'>REGISTRATION FORM</h2>
 <a href="<?= base_url("/students") ?>" class='btn btn-danger btn-sm floatend'>Back</a>
 <form class="row g-3 border" action="<?=base_url('students/add')?>"
method="POST">

 <div class="col-md-6 my-2">
 <label for="name" class="form-label">name</label>
 <input type="text" name='name' class="form-control" id="name" required>
  </div>
 <div class="col-md-6">
 <label for="lname" class="form-label">Lastname</label>
 <input type="text" name="lname" class="form-control" id="inputEmail4">
 </div> 
 <div class="col-md-6 my-2">
 <label for="email" class="form-label">Email</label>
 <input type="email" class="form-control" name="email" id="email"
required>
 </div>

 <div class="col-12">
 <label for="Address" name="Address" class="form-label">Address</label>
 <input type="text" class="form-control" name="Address" id="Address"
placeholder="1234 Main St">
 
 <div class="col-12">
 <label for="Address2" class="form-label">Address 2</label>
 <input type="text" class="form-control" name="Address2" id="Address2"
placeholder="Apartment, studio, or floor">
 </div>
 
 <div class="col-md-2 my-2">
 <label for="URN" class="form-label">URN</label>
 <input type="text" name="URN" class="form-control" id="URN" required>
 </div>

 <div class="col-md-2 my-2">
 <label for="phone" class="form-label">Phone</label>
 <input type="number" name="phone" class="form-control" id="phone"
required>
 </div>
 <div class="col-md-2 my-2">
 <label for="Regular" class="form-label">Regular/Reappear </label>
 <input type="text" name="Regular" class="form-control" id="Regular"
required>
 </div>
 <div class="col-md-2 my-2">
 <label for="course_code" class="form-label">Course code </label>
 <input type="text" name="course_code" class="form-control"
id="course_code" required>
 </div>
 <div class="col-md-2 my-2">
 <label for="branch_code" class="form-label">Branch code </label>
 <input type="text" name="branch_code" class="form-control"
id="branch_code" required>
 </div>
 <div class="col-md-2 my-2">
 <label for="semester" class="form-label">Semester </label>
 <input type="number" name="semester" class="form-control"
id="semester" required>
 </div>
 <div class="form-check my-3">
 <input class="form-check-input" type="radio" name="leet" value='leet'
id="leet1">
 <label class="form-check-label" for="leet">
 Leet
 </label>
</div>
<div class="form-check my-3">
 <input class="form-check-input" type="radio" name="leet" value='not leet'
id="leet1" >
 <label class="form-check-label" for="leet1">
 Not Leet
 </label>
</div>
<div class="col-md-3 my-2">
 <label for="training" class="form-label">6 Month Training</label>
 <input type="text" name="training" class="form-control"
placeholder='yes/no' id="training" required>
 </div>
  <div class="col-12">
 <div class="form-check">
 <input class="form-check-input" type="radio" value="Regular"id="Regular"
name="usertype">
 <label class="form-check-label" for="gridCheck1">
 Regular
 </label>
 </div>
 <div class="col-12">
 <div class="form-check">
 <input class="form-check-input" type="radio" value="Hosteler"
id="Hosteler" name="usertype">
 <label class="form-check-label" for="gridCheck">
 Hosteler
 </label>
 </div>
 </div> 
 <div class="col-12 my-5">
 <button type="submit" class="btn btn-primary">Save</button>
 </div>
</form>
 </div>

</body>
</html>
