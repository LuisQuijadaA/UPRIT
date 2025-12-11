<?php require('./layout/header.php') ?>
<main>
<table border="2" align="center">
    <tr>
        <td align="center" width="100px"><h4>ALUMNO</h4></td>
        <td align="center" width="100px"><h4>NOTA</h4></td>
    </tr>

    <tr>
        <td align="center">Pepe</td>
        <td align="center">7,65</td>
    </tr>
    <tr>
        <td align="center">María</td>
        <td align="center">8,54</td>
    </tr>
    <tr>
        <td align="center">Jordi</td>
        <td align="center">5,55</td>
    </tr>
    
    <tr>
        <td align="right"><h4>MEDIA</h4></td>
        <td align="center"><h4>7,25</h4></td>
    </tr>
    <tr>
        <td align="right"><h4>DESV.TÍPICA</h4></td>
        <td align="center"><h4>7.35</h4></td>
    </tr>
</table>

<br>
<br>

<table border="2" align="center">
    <tr>
      <td align="center" width="100px"><img src="IMG_P3/amazon.png" width="100"></td>
      <td align="center" width="100px"><img src="IMG_P3/youtube.png" width="100"></td>
    </tr>
    <tr>
        <td align="center">Arriba está Amazon</td>
        <td align="center">Arriba está Youtube</td>
    </tr>
</table>

<br>
<br>

<table border="2" align="center">
    <tr>
      <td rowspan="5" width="100px">Gastronomía</td>
      <td width="200px">Restaurantes</td>
      <td rowspan="3" width="100px"><img src="IMG_P3/comida1.png" width="100"></td>
    </tr>
    <tr>
        <td>Sidrerías y asadores</td>
    </tr>
    <tr>
        <td>Bodegas de vino y txakoli</td>
    </tr>
    <tr>
        <td>Productos típicos</td>
        <td rowspan="2"><img src="IMG_P3/comida2.png" width="100"></td>
    </tr>
    <tr>
        <td>Escuelas de hostelería</td>
    </tr>
    <tr>
        <td rowspan="4">Cultura</td>
        <td>Archivos y bibliotecas</td>
        <td rowspan="4"><img src="IMG_P3/hotelplaya.png" width="100"></td>
      </tr>
    <tr>
        <td>Museos</td>
    </tr>
    <tr>
        <td>Palacios de congresos</td>
    </tr>
    <tr>
        <td>Ferias de muestras</td>
    </tr>
    <tr>
        <td rowspan="3">Ocio</td>
        <td>Entretenimiento y diversión</td>
        <td rowspan="3"><img src="IMG_P3/marrocas.png" width="100"></td>
    </tr>
    <tr>
        <td>Ocio cultural</td>
    </tr>
    <tr>
        <td>Excursiones y deporte</td>
    </tr>
</table>

<br>
<br>

<table border="2" align="center">
    <tr>
      <td rowspan="5" width="430px">
        <h1 aling="rigth">Jugadores de fútbol de leyenda</h1>
        <ul style="list-style-type: disc;">
          <li>España
            <ul style="list-style-type: square;">
                <li>Casillas</li>
                <li>Xavi</li>
                <li>Iniesta</li>
            </ul>
          </li>
          <li>Francia
            <ul style="list-style-type: disc;">
                <li>Zidane</li>
                <li>Henry</li>
                <li>Barthez</li>
            </ul>
          </li>
          <li>Brasil
            <ul style="list-style-type: circle;">
                <li>Ronaldo</li>
                <li>Pelé</li>
                <li>Ronaldinho</li>
            </ul>
          </li>
        </ul>
      </td>
    </tr>
</table>

<br>
<br>





<video src="IMG_P3/as.mp4" width="320" height="240" controls>
  Tu navegador no soporta el tag de video.
</video>
<!--
<video src="IMG_P3/as.mp4" width="320" height="240" autoplay loop controls>
  Tu navegador no soporta el tag de video.
</video>
-->

</main>
<?php require('./layout/footer.php') ?>