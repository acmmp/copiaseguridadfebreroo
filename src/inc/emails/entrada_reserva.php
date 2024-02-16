<?php


$mensaje_admin = <<<EOHTML
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Confirmación de Reserva</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }

                header {
                    background-color: #4CAF50;
                    color: white;
                    text-align: center;
                    padding: 20px;
                }

                section {
                    margin: 20px;
                }

                ul {
                    list-style: none;
                    padding: 0;
                }

                li {
                    margin-bottom: 10px;
                }

                footer {
                    background-color: #333;
                    color: white;
                    text-align: center;
                    padding: 10px;
                }
            </style>
        </head>
        <body>

            <header>
                <h1>NUEVA RESERVA | $hora_entrada</h1>
            </header>

            <section>
                <ul>
                    <li><strong>Nombre:</strong> $nombre</li>
                    <li><strong>Email:e</strong> $email</li>
                    <li><strong>Fecha Reserva:e</strong> $fecha_reserva</li>
                    <li><strong>Hora de entrada:</strong> $hora_entrada</li>
                    <li><strong>Número de comensales:</strong> $num_comensales</li>
                </ul>
            </section>

            <footer>
                <p>&copy; 2024 Kutral</p>
            </footer>

        </body>
        </html>
        EOHTML;

        ?>