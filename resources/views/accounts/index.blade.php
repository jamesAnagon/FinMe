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

    @include('components.page-title', ['title' => 'Accounts'])
    @include('components.add-button', ['label' => 'Create Account', 'page' => 'accounts'])

    @forelse ($accounts as $account)

        <div>
            <a
                href="{{ route('accounts.show', $account) }}"
                class="account-card"
            >
                <h2>
                    {{ $account->icon }}
                    {{ $account->name }}
                </h2>
            </a>
            
            <p>
                Type: {{ $account->type }}
            </p>

            <p>
                Balance:
                ₱{{ number_format($account->balance, 2) }}
            </p>

            <p>
                Status:
                {{ $account->is_active ? 'Active' : 'Inactive' }}
            </p>
        </div>

        <hr>

        
    @empty

        <p class="empty-state-message">You don't have any accounts yet.</p>

        <a class="empty-state-link" href="{{ route('accounts.create') }}">
            Create your first account
        </a>

    @endforelse
    @include('components.add-button', ['label' => 'Add Transaction', 'page' => 'transactions'])
    </main>
</body>
</html>
