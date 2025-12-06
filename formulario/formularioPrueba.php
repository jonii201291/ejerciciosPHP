<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
        <form action="#" method="POST" name="formu" onsubmit="">
            <table>
                <tr>
                    <td class="td1">Nombre: </td>
                    <td><input type="text" name="nombre" id="nombre" size="4"></td>
                </tr>
                <tr>
                    <td class="td1">Apellidos: </td>
                    <td><input type="text" name="apellido" id="apellido" size="12"></td>
                </tr>
                <tr>
                    <td class="td1"><span>*</span>Email: </td>
                    <td><input type="email" name="email" id="email" size="9"></td>
                </tr>
                <tr>
                    <td class="td1"><span>*</span>Código de usuario: </td>
                    <td><input type="text" name="codigo" id="codigo" size="4"></td>
                </tr>
                <tr>
                    <td class="td1"><span>*</span>Contraseña: </td>
                    <td><input type="password" name="password" id="password" size="4"></td>
                </tr>
                <tr>
                    <td class="envio"></td>
                    <td class="envio">
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Cancelar">
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>