<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=" <?php echo url('update',$info->id)?>" method="post">
   <?php echo csrf_field()?>
  <div class="form-group">
  <label for="name">Id</label>
    <input type="text" class="form-control" name="id"  value=" <?php echo $info->id;?>" placeholder="Enter name">
  </div>
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"  value=" <?php echo $info->name;?>" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="name">Address</label>
    <input type="text" class="form-control" name="address"  value=" <?php echo $info->address;?>" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="name">Mobile</label>
    <input type="text" class="form-control" name="mobile" value=" <?php echo $info->mobile?>" placeholder="Enter Mobile">
  </div>
  <div class="form-group">
    <label for="name">Department</label>
    <input type="text" class="form-control" name="department" value=" <?php echo $info->department?>" placeholder="Enter Department">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
</body>
</html>