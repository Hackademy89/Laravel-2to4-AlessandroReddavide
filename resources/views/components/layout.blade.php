<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- LINK BOOTSTRAP -->

</head>
<body>

<x-navbar />    
{{$slot}}

</body>
</html>