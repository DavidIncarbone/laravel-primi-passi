<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Prova di Laravel</title>
</head>
<body>

    @include('partials.header');

    <h1 class="text-center">Hello World</h1>
    <p class="text-center">{{ $message }}</p>
    
    
</body>
</html>