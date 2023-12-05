Formulario

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf    
    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre">
    <br>
    <label for="ApellidoPaterno"> ApellidoPaterno </label>
    <input type="text" name="ApellidoPaterno">
    <br>

    <label for="ApellidoMaterno"> ApellidoMaterno </label>
    <input type="text" name="ApellidoMaterno">
    <br>

    <input type="submit" value="Guardar datos"><br>

</form>