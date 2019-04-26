<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css" media="screen">
        h2{
            text-align: center;
        }
        table{
            width: 100%;
            border-spacing:0; /* Removes the cell spacing via CSS */
            border-collapse: collapse;
        }
        thead{
            border:none;
            background-color: #CCC;
            height: 30px;
        }
        tbody{
            font-size: 14px;
        }
        tr th{
            margin-top: 2px;
            height: 28px;
            border: 1px solid black;
            padding-left: 10px;
        }
        tbody tr{
            box-sizing: border-box;
            
        }
        tr td{
            padding-top: 5px;
            padding-left: 15px;
            border:1px solid #666;            
        }
    </style>
</head>
<body>
    <h2>Listado de precios</h2>
    <br>
    <table>
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->producto }}</td>
                <td>{{ $producto->precio_venta }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>    
</body>
</html>