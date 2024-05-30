<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>lISTADO DE CURSOS</h1>

<table>
<tr>
    <td>nombre</td>
    <td>descripcion</td>
</tr>
<tr>
    @foreach($cursos as $curso)
    <td>{{$curso->name}}</td>
    <td>{{$curso->description}}</td>
    
   <td><a href="{{route('curso.show',$curso->id)}}">mostrar</a></td>
<td>

<form action="{{route('curso.destroy',$curso->id)}}"method="POST">
@csrf
@method('delete')
<button type="submit">eliminar</button>


</form>
</td>

</tr>
@endforeach
<br><br>
</table>



</body>
</html>