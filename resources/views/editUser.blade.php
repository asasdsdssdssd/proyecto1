<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Editar Registro</title>
 
</head>
<body style="max-width: 80%; margin: auto;"  class="p-3 mb-2 bg-success-subtle text-emphasis-success">
    <form  id="form1" name="form1" method="POST" action="{{ route('editUser1',$usuarios->id) }}" >
    @method('PUT')
    @csrf
    <div class="row" >
            <div class="col-2"> </div>
            <div class="col-8">
                <h1>Editar Registro</h1>
                <br>
        <div class="row">
             <div class="col-3">
                <label for="">id:</label>
                <input  type="text"  class="form-control"  id="id" name="id" value="{{$usuarios->id}}">
            </div>

            <div class="col-3">
                <label for="">Nombre:</label>
                <input  type="text"  class="form-control" id="nombre" name="nombre" value="{{$usuarios->nombre}}">
            </div>
            <div class="col-3">
                <label for="">Apellido Paterno:</label>
                <input  type="text"  class="form-control" id="ap1" name="ap1" value="{{$usuarios->ap1}}">
            </div>
            <div class="col-3">
                <label for="">Apellido Materno:</label>
                <input  type="text"  class="form-control" id="ap2" name="ap2" value="{{$usuarios->ap2}}">
            </div>
        </div>
      <br>
        <div class="row">
            <div class="col-6">
                <label for="">Edad:</label>
                <input  type="text"  class="form-control" id="edad" name="edad" value="{{$usuarios->edad}}" >
            </div>
            <div class="col-6">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{$usuarios->fechaNacimiento}}">
            </div>
        </div>
      <br>
        <div class="row">
            <div class="col-4">
                <label for="">linkRedes:</label>
                <input  type="text"  class="form-control" id="linkRedes" name="linkRedes" value="{{$usuarios->linkRedes}}">
            </div>
            <div class="col-4">
                <label for="">Email:</label>
                <input  type="text"  class="form-control" id="email" name="email" value="{{$usuarios->email}}">
            </div>
            <div class="col-4">
                <label for="">Telefono:</label>
                <input  type="text"  class="form-control" id="telefono" name="telefono" value="{{$usuarios->telefono}}" >
            </div>
        </div>
      <br>
        <div class="row">
        <div class="col-5"></div>
        <div class="col-7">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
     </div>
            </div>
        </div>      
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>