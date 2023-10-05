<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Turismo "Viaje Feliz"</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        section {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }

        /* Estilos específicos */
        .destino {
            text-align: center;
            margin-bottom: 20px;
        }

        .destino img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Agencia de Turismo "Viaje Feliz"</h1>
        <nav>
            <ul>
                <li><a href="#destinos">Destinos</a></li>
                <li><a href="#paquetes">Paquetes</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="destinos">
        <h2>DESTINOS POPULARES</h2>
        <div class="destino">
            <img src="https://cdn.www.gob.pe/uploads/document/file/490026/standard_acr_carpish_1.jpg" alt="Destino 1">
            <h3>Bosque de Neblina de Carpish</h3>
            <p>Es un bosque montano o bosque de neblina, se encuentra ubicado entre la entrada de la sierra hacia la selva, por ello es conocida como “La Puerta a la Amazonía”. En el idioma Quechua Carpish significa «Peñasco de la Cordillera». Su clima es lluvioso, semifrío y húmedo; seco en otoño e invierno. Su temperatura media anual varía entre los 7° a 15°C en la parte superior (2500 a 3500 ms.n.m) y entre los 15° a 19°C en la parte inferior (1500 a 2500 ms.n.m).</p>
        </div>
        <div class="destino">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiTrXaeCC1EQMUxL5URB5RQFtdS2p7D-THfPjPTlZMCNG09Ul8kYDP_GFXejK1JTnOJsY7FH8WF_pROVw1CGlezObwmYv9wMf2Kf-VV2wP7FJD-hij5LBN7cn1w0LHtHpIK89sb1MlrEJUxbwtFvT9pMxL8DIWYGFa4_wHqmOWQcqGuXhcAZMyhKM8L/s640/cp-tomayquichua-ambo03.jpg" alt="Destino 2">
            <h3>Tomayquichua</h3>
            <p>Es una localidad de Perú. Es capital del distrito de Tomay Kichwa en la provincia de Ambo, departamento de Huánuco. Se encuentra a aproximadamente 19 kilómetros de la ciudad de Huánuco y a 4,5 km de Ambo. Esta a una altura de 2041 m s. n. m.</p>
        </div>
        <div class="destino">
            <img src="https://elperuano.pe/fotografia/thumbnail/2021/05/10/000116756M.jpg" alt="Destino 2">
            <h3>Parque Nacional Tingo María</h3>
            <p>Es una reserva ecológica ubicada en el departamento de Huánuco, Perú. Se encuentra en el valle del Huallaga y protege una bella zona de montañas en la cadena conocida como la Bella Durmiente, visibles desde la ciudad de Tingo María, que cuenta con una frondosa vegetación selvática y un complejo sistema de cavernas subterráneas.</p>
        </div>
        <div class="destino">
            <img src="https://tinccotours.com/wp-content/uploads/2020/11/Catarata-Sol-Naciente-en-Tingo-Maria.jpg" alt="Destino 2">
            <h3>Cataratas de Tingo María</h3>
            <p>Es la catarata más imponente de la Región Huánuco, su caída de agua alcanza los cien metros, con un ancho de más de 35 metros. Es un lugar totalmente natural con flora y fauna variada y de un atractivo realmente impresionante.</p>
        </div>
    </section>

    <section id="paquetes">
        <h2>PAQUETES DE VIAJE</h2>
        <div class="destino">
            <img src="paquete1.jpg" alt="Paquete 1">
            <h3>Paquete 1</h3>
            <p>Experimenta un viaje inolvidable con nuestro Paquete 1, que incluye alojamiento y actividades emocionantes.</p>
        </div>
        <div class="destino">
            <img src="paquete2.jpg" alt="Paquete 2">
            <h3>Paquete 2</h3>
            <p>Descubre la aventura en nuestro Paquete 2, que te llevará a lugares asombrosos.</p>
        </div>
    </section>

    <section id="contacto">
        <h2>CONTACTO</h2>
        <p>Ponte en contacto con nosotros para reservas y consultas:</p>
        <p>Correo electrónico: yuchiancao@gmail.com</p>
        <p>Teléfono: +51 921872734</p>
    </section>

    <section id="mas-buscados">
    <h2>Los Más Buscados</h2>
    <div class="destino">
        <img src="mas_buscado1.jpg" alt="Destino Más Buscado 1">
        <h3>Destino Más Buscado 1</h3>
        <p>Descubre por qué nuestro Destino Más Buscado 1 es tan popular. ¡No te lo puedes perder!</p>
    </div>
    <div class="destino">
        <img src="mas_buscado2.jpg" alt="Destino Más Buscado 2">
        <h3>Destino Más Buscado 2</h3>
        <p>Explora nuestro Destino Más Buscado 2 y vive una experiencia única llena de aventuras.</p>
    </div>
</section>


    <footer>
    <section id="prensa">
    <h2>Prensa</h2>
    <div class="noticia">
        <img src="noticia1.jpg" alt="Noticia 1">
        <h3>Noticia 1</h3>
        <p>Reseña de una noticia destacada relacionada con nuestros servicios turísticos.</p>
    </div>
    <div class="noticia">
        <img src="noticia2.jpg" alt="Noticia 2">
        <h3>Noticia 2</h3>
        <p>Otra noticia relevante que puede ser de interés para nuestros clientes.</p>
    </div>
    </section>
    </footer>

    <section id="paginas">
    <h2>Páginas</h2>
    <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="destinos.html">Destinos</a></li>
        <li><a href="paquetes.html">Paquetes</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="prensa.html">Prensa</a></li>
    </ul>
</section>

<section id="redes-sociales">
    <h2>Redes Sociales</h2>
    <ul>
        <li><a href="https://www.facebook.com/tuagenciadeturismo" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/tuagencia" target="_blank">Twitter</a></li>
        <li><a href="https://www.instagram.com/tuagencia/" target="_blank">Instagram</a></li>
        <li><a href="https://www.linkedin.com/company/tuagenciadeturismo" target="_blank">LinkedIn</a></li>
    </ul>
</section>

<section id="metodos-de-pago">
    <h2>Métodos de Pago</h2>
    <p>Aceptamos los siguientes métodos de pago:</p>
    <ul>
        <li>Tarjetas de crédito (Visa, MasterCard, American Express)</li>
        <li>PayPal</li>
        <li>Transferencia bancaria</li>
        <li>Pagos en efectivo</li>
    </ul>
</section>



    <footer>
        <p>&copy; 2023 Agencia de Turismo "Viaje Feliz"</p>
        <P>By: Yuchiang Xiejian Cao Wong</P>
    </footer>
</body>
</html>