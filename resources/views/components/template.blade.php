<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pradhan kitchan</title>
            <!-- CSS FILES -->
        <link rel="preconnect" href="/assets/https://fonts.googleapis.com">

        <link rel="preconnect" href="/assets/https://fonts.gstatic.com" crossorigin>

        <link href="/assets/https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/assets/css/tooplate-crispy-kitchen.css" rel="stylesheet">

</head>
<body>
    <header><x-navbar/></header>
 <main>   {{$slot}} </main>
    <footer><x-footer/></footer>
    {{-- reserve --}}
    <x-reserve/>

</body>
    <!-- JAVASCRIPT FILES -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/custom.js"></script>
</html>
