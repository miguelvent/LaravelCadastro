<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ Vite</title>

    <!-- Styles -->
    @vite([
        'resource/js/app.js',
        'resource/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])
</head>
<body>
    <div class="container py-4 px-3 mx-auto">
        <h1>Bonjour, Bootstrap et Vite!</h1>
        <button type="button" class="btn btn-primary">Primaire</button>
    </div>
    
</body>
</html>