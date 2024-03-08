<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YKIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center
    justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="" class="d-flex align-items-center col-md-3 mb-2 
    mb-md-0 text-dark text-decoration-none">Pagina privada</a>
    
    <div class="col-md-3 text-end">
        <a href="{{route('logout')}}">
            <button type="button" class="btn btn-online-primary me-2">Salir</button>
        </a>
    </div>
</header>
<article class="container">
    <h2>Tu seccion Privada</h2>
</article>
</div>
</body>
</html>