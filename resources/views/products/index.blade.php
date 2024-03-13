<html>
    <header>
        <title>PRODUCTOS</title>
    </header>
    <body>
        <h2>PRODUCTOS</h2>


    <table>
        <thead>
            <tr>
                <th>Codigo_producto</th>
                <th>Nombre</th>
                <th>Fecha_vencimiento</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Accion</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)

            <tr>
                <td>{{$product->code}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->espiration_date}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->name}}</td>
                <td> <a href="products/{{ $product->id }}/edit">Editar</a>
                    <a href="products/{{ $product->id }}/view">Ver</a>
                </td>
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
