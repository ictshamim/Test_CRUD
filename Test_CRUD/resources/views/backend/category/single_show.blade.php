<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<table class="table-primary">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Student Department</th>
      <th scope="col">Student Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $categories->student_name }}</td>
      <td>{{ $categories->student_id }}</td>
      <td>{{ $categories->student_department }}</td>
      <td>{{ $categories->student_address }}</td>       
    </tr>
    
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
</html>