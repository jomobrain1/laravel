<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @if($employees->isNotEmpty())
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">salary</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            @foreach ($employees as $k=>$emp)
            <tbody>
             
                <tr>
                  
                  <th scope="row">{{$k+=1}}</th>
                  <td>{{$emp->name}}</td>
                  <td>{{$emp->email}}</td>
                  <td>{{$emp->salary}}</td>
                  <td>
       <a class="btn btn-danger"   
       href="/delete/{{$emp->id}}">
        delete
       </a>
       <a class="btn btn-primary"   
       href="/edit/{{$emp->id}}">
        edit
       </a>
                </td>
                </tr>
                
              </tbody>
              @endforeach
            
          </table>
        

@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
    </div>
</body>
</html>