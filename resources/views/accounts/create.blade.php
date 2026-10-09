<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <h2 class="create-title">Create Account</h2>

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
    <main>
        <section class="form-section">
            <form action="{{ route('accounts.store') }}" method="POST" id="account-form">
                @csrf

                <div class="select-container gap-5">
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

                <div class="container gap-5">
                    <label for="name">Account Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"placeholder="e.g. BDO Savings" required>
                </div>

                <div class="container gap-5">
                    <label for="initial_balance">Initial Balance</label>

                    <input type="number" id="initial_balance" name="initial_balance" value="{{ old('initial_balance', 0) }}" min="0" step="0.01" required>
                </div>

                <div class="container gap-5">
                    <label for="icon">Icon</label>

                    <input type="text" id="icon" name="icon" value="{{ old('icon') }}"placeholder="e.g. wallet">
                </div>
            </form>
        </section>
    </main>
    <div class="nav-buttons">
        <a href="{{ route('accounts.index') }}" class="btn-cancel">Cancel</a>
        <button type="submit" form="account-form" class="btn-save">
            Save 
        </button>
    </div>
</body>
</html>