<html>
    <header>
        <title>CATEGORIAS</title>
    </header>
    <body>
        <h2>CATEGORIAS1</h2>


    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Estados</th>
                <th>Productos</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)

            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->detail}}</td>
                <td>{{$category->status}}</td>

            <td>
                @foreach ($category->products as $product)

                    {{$product->name}}<br>


                @endforeach
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
