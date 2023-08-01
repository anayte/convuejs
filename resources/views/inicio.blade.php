<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/cosmo.css">
      
        <title> Inicio </title>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    </head>

    <body class="contenedor" >

        <div class="elemento">
            <table >
                <tr class="caja">
                    <th class="texto"> <input type="button" class="btn btn-success" onclick="location.href='/login'" value=" Ingresar " /> </th>
                    <th class="texto"> <input type="button" class="btn btn-primary" onclick="location.href='/register'" value=" Registrar " /> </th>
                </tr>
            </table>
        </div>

        @yield('content')

    </body>

</html>
