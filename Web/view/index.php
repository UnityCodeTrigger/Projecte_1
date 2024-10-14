<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th,td{
            border: 1px solid;
            padding: 8px;
        }
        table{
            width: 50%;
            margin:auto;
            background-color: rgb(250, 250, 250);
            border-collapse: collapse;
        }
        th{
            text-align: center;
            background-color: rgb(200, 200, 200);
        }
        td
        {
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>INDEX</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Talla</th>
        </tr>

        <?php
        //var_dump($productos);
        foreach ($productos as $producto) {
        ?>

        <tr>
            <td>    <?= $producto->GetNombre();?>   </td>
            <td>    <?= $producto->GetPrecio();?>   </td>
            <td>    <?= $producto->GetTalla();?>    </td>
        </tr>

        <?php } ?>

    </table>

        
</body>

</html>