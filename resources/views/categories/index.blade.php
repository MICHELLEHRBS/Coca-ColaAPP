<html>
    <header>
        <h1> COCA-COLA</h1>
        <img src="c:\Users\saram\OneDrive\Imágenes\png-clipart-coca-cola-fizzy-drinks-logo-coca-cola-text-logo.png" alt="Logo de Coca-Cola" class="logo">
      </header>
    <header>

        <title>CATEGORIAS</title>


    </header>
    <body>
        <h2>CATEGORIAS1</h2>

        <a href="categories/create" class="button">NUEVA CATEGORIA</a>


    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Estados</th>
                <th>Productos</th>
                <th>Accion</th>
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
            <td>
                <a href="categories/{{$category->id}}/edit">Editar</a>
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
a.button {
  display: inline-block;
  padding: 10px 20px;
  text-decoration: none;
  font-weight: bold;
  text-align: center;
  border-radius: 4px;
  color: #FFFFFF; /* Texto blanco */
  background-color: #FF0000; /* Fondo rojo de Coca-Cola */
  border: 2px solid #FFFFFF; /* Borde blanco */
  cursor: pointer;
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

a.button:hover {
  background-color: #990000; /* Rojo oscuro de Coca-Cola al pasar el ratón */
  color: #FFFFFF; /* Texto blanco */
}

header {
  background-color: #FF0000; /* Rojo de Coca-Cola como fondo del encabezado */
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
  font-size: 24px;
  color: #FFFFFF; /* Texto blanco */
}

/* Puedes ajustar el tamaño y la posición del logotipo según tus necesidades */
img.logo {
  max-width: 100%;
  height: auto;
  margin-top: 10px;
}
</style>
