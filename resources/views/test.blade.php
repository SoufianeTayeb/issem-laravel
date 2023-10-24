<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: black; color:white; text-align:center;">
    <h1>test Page</h1>
    <h3>Nombre retourné est :
        @if ($nombre > 0)
            {{ $nombre }} est suppérieur à 0
        @elseif ($nombre < 0)
            {{ $nombre }} est inférieur à 0
        @else
            Le Nombre est nulle
        @endif
    </h3>
</body>

</html>
