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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;?>
    <?php foreach($info as $info) {?>
    <tr>
      <th scope="row"><?php echo $i++?></th>
      <td><?php echo $info->name;?></td>
      <td><?php echo $info->mobile;?></td>
      <td><?php echo $info->address;?></td>
      <td><?php echo $info->department;?></td>
      <td>
        <a href="<?php echo url('show_single',$info->id)?>">Show Details</a>
        <a href="<?php echo url('edit',$info->id)?>">Edit</a>
        <form action=" <?php echo url('delete',$info->id)?>" method="post">
        <?php echo csrf_field();?>
        <button>Delete</button>
        </form>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</body>
</html>