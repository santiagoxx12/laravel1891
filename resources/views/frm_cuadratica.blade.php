<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>FORMULARIO CUADRATICA</h1>

<form action="{{route('cuadratic.store')}}"  method="post" >
   
    @csrf
    

    <label>
        Ingrese el valor de a:
        <br>
        <input type="text" name="a">
    </label>
    <br><br>

    <label>
        Ingrese el valor e b:
        <br>
        <input type="text" name="b">
    </label>
    <br><br>

    <label>
        Ingrese el valor de c:
        <br>
        <input type="text" name="c">
    </label>
    <br><br>


    <button type="submit">Enviar Formulario:</button>
   

</form>
    
</body>
</html>