<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>add employee</title>
    
</head>
<body>
   
    <div class="container">
    <h1 class="text-center">Add Employees <a href="/">view </a></h1>
    <form action="{{route('add')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" class="form-control">
            <div>
                @error('name')
                   <span class="text-danger bg-danger">{{$message}}</span> 
                @enderror
            </div>
        </div>
          
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" name="email" class="form-control">
          @error('email')
          <span class="text-danger">{{$message}}</span> 
          @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">salary</label>
            <input type="number" name="salary" class="form-control">
            @error('salary')
            <span class="text-danger">{{$message}}</span> 
            @enderror
          </div>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
</body>
</html>