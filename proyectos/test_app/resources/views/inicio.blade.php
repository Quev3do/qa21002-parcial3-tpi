<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Productos</h1>
    <button>agregar producto</button>
    <br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>precio</th>
                <th>id cat</th>
                <th>id prov</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $produc)
                <tr>
                    <td>{{$produc->id}}</td>
                    <td>{{$produc->nombre}}</td>
                    <td>{{$produc->precio}}</td>
                    <td>{{$produc->idcategoria}}</td>
                    <td>{{$produc->idproveedor}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>