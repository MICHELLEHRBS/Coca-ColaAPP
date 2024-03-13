<html>
    <header>
        <title>PRODUCTOS</title>
    </header>
    <body>
        <h2>EDITAR PRODUCTOS</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Codigo:</label>
            <input type="text" name="code" value="{{ $product->code }}">

            <label>Nombre:</label>
            <input type="text" name="name" value="{{ $product->name }}">

            <label>Fecha de vencimiento:</label>
            <input type="text" name="expiration_date" value="{{ $product->expiration_date }}">

            <label>Descripcion:</label>
            <input type="text" name="description" value="{{ $product->description }}">

            <label>Precio:</label>
            <input type="text" name="price" value="{{ $product->price }}">

            <label>Categoria:</label>

            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                    @if($category->id === $product->category_id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                        <option  value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        {{--    <input type="text" name="category_id">--}}
            <input type="submit" value="Guardar">
        </form>

    </body>
</html>

<style>
form {
  max-width: 500px; /* Ancho máximo */
  margin: 20px auto; /* Espaciado superior e inferior y centrado horizontal */
  padding: 30px; /* Aumenté el espacio interno para hacerlo más grande */
  background-color: #FF0000; /* Fondo rojo de Coca-Cola */
  border: 2px solid #FFFFFF; /* Borde blanco */
  border-radius: 8px;
  box-sizing: border-box; /* Incluye padding y borde en el ancho total */
  text-align: center; /* Centra el contenido */
}

/* Estilos para las etiquetas */
label {
  display: block;
  margin-bottom: 8px;
  color: #FFFFFF; /* Texto blanco */
  font-weight: bold;
  text-align: left; /* Alinear etiquetas a la izquierda */
}

/* Estilos para los campos de entrada */
input {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 2px solid #FFFFFF; /* Borde blanco */
  border-radius: 4px;
  background-color: #FF0000; /* Fondo rojo de Coca-Cola */
  color: #FFFFFF; /* Texto blanco */
}

/* Estilos para la etiqueta select */
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 2px solid #FFFFFF; /* Borde blanco */
  border-radius: 4px;
  background-color: #FF0000; /* Fondo rojo de Coca-Cola */
  color: #FFFFFF; /* Texto blanco */
}

/* Estilos para opciones dentro del select */
select option {
  background-color: #FF0000; /* Fondo rojo de Coca-Cola */
  color: #FFFFFF; /* Texto blanco */
}

/* Estilos para opciones al pasar el ratón sobre ellas */
select option:hover {
  background-color: #990000; /* Rojo oscuro de Coca-Cola al pasar el ratón */
}

/* Estilos para el botón de envío */
input[type="submit"] {
  background-color: #FFFFFF; /* Blanco */
  color: #FF0000; /* Rojo de Coca-Cola */
  padding: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #990000; /* Rojo oscuro de Coca-Cola al pasar el ratón */
  color: #FFFFFF; /* Blanco */
}

/* Estilos para el encabezado h2 */
h2 {
  color: #9e2d2d; /* Texto blanco */
  text-align: center;
  margin-bottom: 20px;
  margin-top: 20px; /* Margen superior para separar del borde superior */
  text-transform: uppercase;
}
  </style>
