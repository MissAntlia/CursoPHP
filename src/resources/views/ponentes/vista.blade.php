<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ponentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Listado de ponentes</h1>
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <table class="table table-stripped">
    <thead class="table-light">
     <tr>
        <th>Nombre</th>
        <th>Especialidad</th>
        <th>Biografia</th>
     </tr>

    </thead>
<tbody>
    @foreach($ponentes as $p)
            <tr>
                <td>{{$p->nombre}}</td>
                <td>{{$p->especialidad}}</td>
                <td>{{$p->biografia}}</td>
            </tr>
            @endforeach

</tbody>


    </table>
    <hr class="my-4">

</div>
    
</body>
</html>