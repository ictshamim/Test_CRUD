<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action=" <?php echo url('insert')?>" method="post">
   <?php echo csrf_field()?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="name">Address</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="name">Mobile</label>
    <input type="text" class="form-control" name="mobile"  placeholder="Enter Mobile">
  </div>
  <div class="form-group">
    <label for="name">Department</label>
    <input type="text" class="form-control" name="department"  placeholder="Enter Department">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>