<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    <main>
        <section>
            @include('components.page-title', ['title'=>'Records'])
            @include('components.add-button', ['label'=>'Add Transaction','page'=>'transactions'])
        </section>
    </main>
</body>
</html>