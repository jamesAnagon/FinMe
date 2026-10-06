<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account</title>
</head>

<body>

    <h1>Create Account</h1>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Account Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="e.g. BDO Savings"
                required
            >
        </div>

        <br>

        <div>
            <label for="type">Account Type</label>

            <select name="type" id="type" required>
                <option value="">Select account type</option>

                <option value="spending" {{ old('type') == 'spending' ? 'selected' : '' }}>
                    Spending
                </option>

                <option value="savings" {{ old('type') == 'savings' ? 'selected' : '' }}>
                    Savings
                </option>
            </select>
        </div>

        <br>

        <div>
            <label for="initial_balance">Initial Balance</label>

            <input
                type="number"
                id="initial_balance"
                name="initial_balance"
                value="{{ old('initial_balance', 0) }}"
                min="0"
                step="0.01"
                required
            >
        </div>

        <br>

        <div>
            <label for="icon">Icon</label>

            <input
                type="text"
                id="icon"
                name="icon"
                value="{{ old('icon') }}"
                placeholder="e.g. wallet"
            >
        </div>

        <br>

        <button type="submit">
            Create Account
        </button>
    </form>

    <br>

    <a href="{{ route('accounts.index') }}">
        Back to Accounts
    </a>

</body>
</html>