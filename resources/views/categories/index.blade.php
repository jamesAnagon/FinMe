<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Accounts</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.header')

    <main>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @include('components.page-title', ['title' => 'Categories'])
    @include('components.add-button', ['label' => 'Create Category', 'page' => 'categories'])

    @forelse ($categories as $category)
    <div>
        <a href="{{ route('categories.show', $category) }}">
            <h2>
                {{ $category->name }}
            </h2>
        </a>
            
        <p> Type: {{ $category->type }} </p>
    </div>
    <hr>
    @empty
    @include('components.empty-state', ['item' => 'category'])
    @endforelse
    @include('components.add-button', ['label' => 'Add Transaction', 'page' => 'transactions'])
    </main>
</body>
</html>