Puedes crear una tabla de ajedrez en HTML y usar JavaScript para generarla al hacer clic en un botón. Aquí tienes un ejemplo básico:

HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <button onclick="crearTablero()">Crear Tablero</button>
    <div id="tablero-container"></div>

    <script src="script.js"></script>
</body>
</html>
```

JavaScript (`script.js`):

```javascript
function crearTablero() {
    var filas = 8;
    var columnas = 8;

    var tableroHTML = '<table>';
    for (var i = 0; i < filas; i++) {
        tableroHTML += '<tr>';
        for (var j = 0; j < columnas; j++) {
            var color = (i + j) % 2 === 0 ? 'white' : 'black';
            tableroHTML += '<td style="background-color:' + color + '"></td>';
        }
        tableroHTML += '</tr>';
    }
    tableroHTML += '</table>';

    document.getElementById('tablero-container').innerHTML = tableroHTML;
}
```

Este código crea una tabla de ajedrez con un botón que, al hacer clic, llama a la función `crearTablero()`. La función genera la tabla HTML y la inserta en un contenedor en la página.