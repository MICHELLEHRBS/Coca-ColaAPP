<html>
    <header>
        <title>VENTAS</title>
    </header>
    <body>
        <h2>VENTAS1</h2>


    <table>
        <thead>
            <tr>
                <th>fecha_compra</th>
                <th>numero_venta</th>
                <th>Pago</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ventas as $venta)

            <tr>
                <td>{{$venta->bought_date}}</td>
                <td>{{$venta->numbe_venta}}</td>
                <td>{{$venta->payment}}</td>
                <td>{{$venta->status}}</td>

            </tr>

            @endforeach
        </tbody>

    </table>
    </body>
</html>



<style>
    body {
  font-family: 'Arial', sans-serif;
  background-color: #f8f8f8;
  margin: 0;
  padding: 0;
}

.container {
  width: 80%;
  margin: 0 auto;
}

/* Encabezado */
header {
  background-color: #e10600;
  color: white;
  padding: 10px 0;
}

header h1 {
  margin: 0;
}
/* Tablas */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #d20000;
  color: white;
}

</style>
