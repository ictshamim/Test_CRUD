<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Hello, world!, Please Create Category</h1>
                <form action="{{ route('categories.update',$categories->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="student_name">Student Name</label>
                        <input type="text" name="student_name" id="student_name" value="{{ $categories->student_name }}">
                    </div>
                    <div class="form-group">
                        <label for="student_id">Student ID</label>
                        <input type="text" name="student_id" id="student_id" value="{{ $categories->student_id }}">
                    </div>
                    <div class="form-group">
                        <label for="student_department">Student Department</label>
                        <input type="text" name="student_department" id="student_department" value="{{ $categories->student_department }}">
                    </div>
                    <div class="form-group">
                        <label for="student_address">Student Address</label>
                        <input type="text" name="student_address" id="student_address" value="{{ $categories->student_address }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class ="btn btn-success" value="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>