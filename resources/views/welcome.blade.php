<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<title>Usuarios</title>
</head>
<body style="max-width: 80%; margin: auto;" >
<h1>Formulario</h1>
  @if(session('mensaje'))
      <div class="alert alert-success">
         {{ session('mensaje')}}
      </div>
  @endif
<table class="table table-dark table-borderless">
     <thead>
       <tr class="table-info">
         <th scope="col">id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Apellido Materno</th>
         <th scope="col">Apellido Paterno</th>
         <th scope="col">Edad</th>
         <th scope="col">Fecha de Nacimiento</th>
         <th scope="col">Redes</th>
         <th scope="col">Telefono</th>
         <th scope="col">Email</th>
         <th scope="col">Opciones</th>
       </tr>
     </thead>
     <tbody>
          @foreach($usuarios as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->ap1}}</td>
            <td>{{$item->ap2}}</td>
            <td>{{$item->edad}}</td>
            <td>{{$item->fechaNacimiento}}</td>
            <td>{{$item->linkRedes}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a  class="btn btn-outline-warning" href="{{ route('adit',$item) }}">Editar🖊</a>
                  <form action="{{ route('eliminar', $item) }}" method="POST" class="d-inline">
                      @method('DELETE')
                      @csrf
                      <a href="" type="submint" class="btn btn-outline-danger">Eliminar🗑</a>
                  </form>
               </td> 
          </tr>
          @endforeach()
   </table>
    <div class="row">
      <div class="col-4"></div>
         <div class="col-8">
            <a class="btn btn-success" href="{{ route('add') }}">Agregar más Usuarios✔</a>
         </div>
	 </div>
</body>
</html>