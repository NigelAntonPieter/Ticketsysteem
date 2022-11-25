<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Ticketsysteem</title>
</head>
<body>
    <div>
        <header>
            @include('components.header')
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
            

        </main>
        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>
</html>