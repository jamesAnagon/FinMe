<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    @auth
        @include('components.header')

        <!---- Main Content ---->
        <main>
            <section>
                @include('components.page-title', ['title' => 'Dashboard'])
            </section>
        </main>
    @else
        <div> PROJECTMANAGER </div>
        <h1> Welcome. You are not logged in :< </h1>
        <p> <a href="{{ route('home') }}">Sign up or log in</a> to manage your projects. </p>
    @endauth
</body>
</html>