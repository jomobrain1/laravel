<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <title>Add Employees</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      

        
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Employees 
                <a href="/create" class="btn btn-outline-primary">add </a>  </h1>
             <section class="success">
              <p class="text-success">{{session('msg')}}</p>
             </section>
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
                @foreach ($employees as $emp)
                <tbody>
                 
                    <tr>
                      <th scope="row">{{$emp->id}}</th>
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
              <section class="my-5">
                {{$employees->links()}}
              </section>
        </div>
        
    </body>
</html>
