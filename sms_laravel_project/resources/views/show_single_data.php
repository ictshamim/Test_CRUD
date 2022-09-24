<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td><?php echo $info->id;?></td>
      <td><?php echo $info->name;?></td>
      <td><?php echo $info->mobile;?></td>
      <td><?php echo $info->address;?></td>
      <td><?php echo $info->department;?></td>
    </tr>
  </tbody>
</table>
</body>
</html>