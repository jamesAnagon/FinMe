<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Accounts</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    @include('components.header')

    <main>
    @if (session('success'))
        <div class="status-message">
            {{ session('success') }}
        </div>
    @endif

    @include('components.page-title', ['title' => 'Categories'])
    
    <main>
        <section class="category-section">
            <h2 class="category-title">Expense Categories</h2>
            @forelse ($expenses as $expense)
            <div class="category-card">
                <a href="{{ route('categories.show', $expense) }}">
                    <h2>
                        {{ $expense->name }}
                    </h2>
                </a>
                <nav class="more-menu-container">
                    <div class="more-menu-screen">
                        <ul>
                            <li><a href="{{ route('categories.edit', [$expense]) }}">Edit</a></li>
                            <li><a href="{{ route('categories.destroy', [$expense]) }}">Delete</a></li>
                        </ul>
                    </div>
                    <div class="more-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </nav>
            </div>
            @empty
                <p class="category-empty">There are no Expense Categories</p>
            @endforelse
        </section>
        <section class="category-section">
            <h2 class="category-title">Income Categories</h2>
            @forelse ($incomes as $income)
            <div class="category-card">
                <a href="{{ route('categories.show', $income) }}">
                    <h2>
                        {{ $income->name }}
                    </h2>
                </a>
                <nav class="more-menu-container">
                    <div class="more-menu-screen">
                        <ul>
                            <li><a href="{{ route('categories.edit', [$income]) }}">Edit</a></li>
                            <li><a href="{{ route('categories.destroy', [$income]) }}">Delete</a></li>
                        </ul>
                    </div>
                    <div class="more-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                </nav>
                
            </div>
            
            @empty
                <p class="category-empty">There are no Income Categories</p>
            @endforelse
        </section>
        @empty($incomes || $expenses)
        @include('components.empty-state', ['item' => 'category'])
        @endempty
        @include('components.add-button', ['label' => 'Add New Category', 'page' => 'categories'])
        <hr>
        @include('components.add-button', ['label' => 'Add Transaction', 'page' => 'transactions'])
    </main>
    
    

    
</body>
</html>
