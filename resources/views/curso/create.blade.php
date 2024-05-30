<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1>FORMULARIO CURSOS</h1>

<form action="{{route('store.curso')}}"  method="POST" >
   
    @csrf

    <label>
        Ingrese el nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>
    <label>
        Ingrese la descripcion:
        <br>
        <input type="text" name="description">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
   

</form>
</body>
</html>