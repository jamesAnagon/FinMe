<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $account->name }} - FinMe</title>
    @vite('resources/css/app.css')
</head>

<body>

    @include('components.header')

    <main>

        <div>
            <span>
                {{ $account->icon ?? '💰' }}
            </span>

            <h1>{{ $account->name }}</h1>

            <p>{{ ucfirst($account->type) }}</p>
        </div>

        <div>
            <p>Current Balance</p>

            <h2>
                ₱{{ number_format($account->balance, 2) }}
            </h2>
        </div>

        <div>
            <p>Initial Balance</p>

            <p>
                ₱{{ number_format($account->initial_balance, 2) }}
            </p>
        </div>

        <div>
            <p>Status</p>

            <p>
                {{ $account->is_active ? 'Active' : 'Inactive' }}
            </p>
        </div>

    </main>

</body>
</html>