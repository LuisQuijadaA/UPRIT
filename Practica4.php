<?php require('./layout/header.php') ?>
<main>
    <br>
    <table align="center" border="1" style="width: 70%; text-align: center;">
        <thead>
            <tr>
                <th colspan="3">Números de Teléfono</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pablo</td>
                <td>Garcia</td>
                <td>123456789</td>
            </tr>
            <tr>
                <td>Pedro</td>
                <td>Sanchez</td>
                <td>234567890</td>
            </tr>
            <tr>
                <td>Antonio</td>
                <td>Fernandez</td>
                <td>345678901</td>
            </tr>
        </tbody>
    </table>

<br>
    <table align="center" border="1">
        <tr>
            <td rowspan="3">
                <img src="IMG_P4/comida1.png" width="100">
            </td>
            
            <td>contenido 1</td>
            <td>contenido 2</td>
        </tr>
        <tr>
            <td>contenido 3</td>
            <td>contenido 4</td>
        </tr>
        <tr>
            <td>contenido 5</td>
            <td>contenido 6</td>
        </tr>
    </table>

    <br>

    <table align="center" border="1">
        <tr>
            <td>a1</td>
            <td>a2</td>
            <td>a3</td>
            <td>a4</td>
        </tr>

        <tr>
            <td>b1</td>
            
            <td colspan="2" rowspan="2">central</td>
            
            <td>b4</td>
        </tr>

        <tr>
            <td>c1</td>
            
            <td>c4</td>
        </tr>

        <tr>
            <td>d1</td>
            <td>d2</td>
            <td>d3</td>
            <td>d4</td>
        </tr>
    </table>

</main>
<?php require('./layout/footer.php') ?>