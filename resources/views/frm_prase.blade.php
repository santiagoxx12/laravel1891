<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    
<h1> INVERTIR PALABRA </h1>

<form action="{{route('product.store')}}"  method="POST" >
   
    @csrf

    <label>
        Ingrese la apalabra:
        <br> <br>
        <input type="text" palabra="palabra">
    
</form>
</body>
</html>



