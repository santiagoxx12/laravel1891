<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>FORMULARIO CLIENTES</h1>

<form action="{{route('product.store')}}"  method="POST" >
   
    @csrf

    <label>
        Ingrese el nombre del cliente:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
   

</form>
</body>
</html>