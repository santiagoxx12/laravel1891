<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO PRODUCTO</h1>

    <form action="{{route('product.store')}}"  method="POST" >
       
        @csrf
        

        <label>
            Ingrese el nombre del producto:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Ingrese el precio: 
            <br>
            <input type="number" name="price">
        </label>
        <br><br><br>
        ingrese la descripcion
        <br>
            <input type="string" name="description">
        </label>
        <br><br>
        <label>
        ingrese la cantidad:
      
            <br>
            <input type="integer" name="cantidad">
        </label>
        <br><br>
        <label>
            Ingrese la fecha:
            <br>
            
            <input type="date" name="date_exp">
        </label>
        <br><br>
        <label>
            Ingrese el precio: :
            <br>
        <button type="submit">Enviar Formulario:</button>
       
   
    </form>
</body>
</html>