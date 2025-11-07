<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>
<body>
    <form action="" method="POST">
        <label for="capital">Capital</label>
        <input type="number" name="capital" id="capital" step="0.01">
        <br>
        <label for="capital">interes mensual</label>
        <input type="number" name="interes" id="interes" step="0.01">
        <br>
        <label for="cuotas">cuotas</label>
        <input type="number" name="cuotas" id="cuotas" step="1">
        <button type="submit"></button>
    </form>
    <br>
    <hr>
    <br>
    <table>
        <thead>
            <tr>
                <th>mes</th>
                <th>cuota</th>
                <th>interes</th>
                <th>capital</th>
                <th>saldo Pendiente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuotas as $cuo)
                
            @endforeach
        </tbody>
    </table>
</body>
</html>