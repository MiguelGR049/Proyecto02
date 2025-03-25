<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica con blade</title>
    <link rel="stylesheet" href="../css/b5/bootstrap.css">
    <link rel="stylesheet" href="../css/font_awesome/all.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <script src="../js/font_awesome/all.js"></script>
    <script src="../js/b5/popper.js"></script>
    <script src="../js/b5/bootstrap.js"></script>
    <script src="../js/jquery/jquery.js"></script>
</head>
<body>
    <section class="v-100">
        @include('components/navbar')
        <div class="container mt-4">
            @yield('contenido')
        </div>
    </section>
</body>
</html>