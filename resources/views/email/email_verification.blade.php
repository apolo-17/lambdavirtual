<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Styles -->
    <style type="text/css">
        body {
        margin: 0;
        padding: 0;
        color: #000;
        background: #fff;
        font-size: 16px;
        font-family: 'Open Sans', sans-serif;
        }
        .mail {
        width: 40%;
        margin: 0 auto;
        padding: 1em;
        color: #707070;
        }
        .mail__header {
        text-align: center;
        }
        .mail__logo {
        width: 120px;
        margin-bottom: 2em;
        }
        .mail__titleformat {
        margin: 0;
        font-weight: normal;
        }
        .mail__title {
        color: #b60011;
        font-size: 1em;
        }
        .mail__text {
        color: #caa23e;
        margin-bottom: 1em;
        }
        .mail__name {
        margin: 0;
        color: #b60011;
        font-weight: bold;
        }
        .mail__p {
        margin: 0;
        }
        .mail__btn {
        background: #b60011;
        border-radius: 20px;
        color: #fff;
        font-weight: bold;
        margin: 2em auto;
        padding: 0.5em;
        text-align: center;
        width: 50%;
        }
        .mail__btn a {
        color: #fff;
        text-decoration: none;
        }
        .mail__footer {
        font-size: 0.9em;
        }
        .mail__help {
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="mail">
        <header class="mail__header">
            <img src="{{ $message->embed($url_img) }}" alt="{{config('app.name')}}" class="mail__logo">
            <h1 class="mail__title mail__titleformat">Concurso Lambda</h1>
            <h2 class="mail__text mail__titleformat">Queremos validar tu correo</h2>
        </header>
        <section>
            <p class="mail__name">

            </p>
            <p class="mail__p">
                Por favor pulsa el siguiente botón para confirmar tu correo electrónico.
            </p>
            <div class="mail__btn">
                <a href="{{ $url }}">Confirmar</a>
            </div>
        </section>
        <footer class="mail__footer">
            <p class="mail__textfooter">
                Si tienes problemas haciendo click en el botón "Confirmar correo electrónico", copia y pega el siguiente enlace en tu navegador: {{ $url }}
            </p>
            <p class="mail__help">
                Si necesitas ayuda escríbenos informes@grupolambda.com.pe
            </p>
        </footer>
    </div>
</body>
</html>
