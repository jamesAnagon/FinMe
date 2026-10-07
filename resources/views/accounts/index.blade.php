<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Accounts</title>
</head>

<body>
    @include('header')

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('accounts.create') }}">
        + Create Account
    </a>

    <hr>

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

        <p>You don't have any accounts yet.</p>

        <a href="{{ route('accounts.create') }}">
            Create your first account
        </a>

    @endforelse

</body>
</html>