<html>
    <header>
        <title>CATEGORIAS</title>
    </header>
    <body>
        <h2>CREAR CATEGORIAS</h2>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
        <label>Nombre:</label>
        <input type="text" name="name" >

        <label>Detalle:</label>
        <input type="text" name="detail" >

        <label>Estado:</label>
        <input type="text" name="status" >

        <input type="submit" value="Guardar">
        </form>

    </body>
</html>

<style>
 form {
  max-width: 500px; /* Ancho máximo */
  margin: 20px auto; /* Espaciado superior e inferior y centrado horizontal */
  padding: 30px; /* Aumenté el espacio interno para hacerlo más grande */
  background-color: #FFFFFF; /* Fondo blanco */
  border: 2px solid #FF0000; /* Borde rojo de Coca-Cola */
  border-radius: 8px;
  box-sizing: border-box; /* Incluye padding y borde en el ancho total */
  text-align: center; /* Centra el contenido */
}

/* Estilos para las etiquetas */
label {
  display: block;
  margin-bottom: 8px;
  color: #FF0000; /* Rojo de Coca-Cola */
  font-weight: bold;
  text-align: left; /* Alinear etiquetas a la izquierda */
}

/* Estilos para los campos de entrada */
input {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 2px solid #FF0000; /* Borde rojo de Coca-Cola */
  border-radius: 4px;
}

/* Estilos para el botón de envío */
input[type="submit"] {
  background-color: #FF0000; /* Rojo de Coca-Cola */
  color: #FFFFFF; /* Blanco */
  padding: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #990000; /* Rojo oscuro de Coca-Cola al pasar el ratón */
}

/* Estilos para el encabezado h2 */
h2 {
  color: #FF0000; /* Rojo de Coca-Cola */
  text-align: center;
  margin-bottom: 20px;
  margin-top: 20px; /* Margen superior para separar del borde superior */
  text-transform: uppercase;
}
  </style>
