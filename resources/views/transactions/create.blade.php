<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Transactions</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main>
        <h2 class="create-title">Create Transaction</h2>
        <section class="form-section">
            <!-- Save and cancel -->
            <div class="nav-buttons">
                <a href="{{ route('accounts.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" form="transaction-form" class="btn-save">
                    Save 
                </button>
            </div>

            <!-- Transaction Type: -->
            <div class="transaction-type-selector">
                <input type="radio" name="type" id="income-type" value="income" form="transaction-form">
                <label for="income-type" class="income-label" >Income</label>
                    
                <input type="radio" name="type" id="expense-type" value="expense" form="transaction-form">
                <label for="expense-type" class="expense-label">Expense</label>

                <input type="radio" name="type" id="transfer-type" value="transfer">
                <label for="transfer-type" form="transaction-form" class="transfer-label">Transfer</label>
            </div>

            <!-- Actual Form -->
            <form 
            action="{{route('transactions.store')}}" 
            method="POST" 
            class="form gap-5"
            id="transaction-form"
            >
                <div style="display: flex;">
                    <div class="select-container">
                        <label class="label">Account</label>
                        <select name="account_id">
                            @foreach ($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="select-container">
                        <label class="label">Category</label>
                        <select name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="container">
                    <textarea name="description" id="description" class="description" cols="10" rows="5" placeholder="Add Notes"></textarea>
                </div>
                
                <div class="container gap-5">
                    <label for="amount">Amount:</label>
                    <input type="number" name="amount" id="amount">
                </div>
                <div class="container gap-5">
                    <label for="transaction_date">Transaction Date:</label>
                    <input type="datetime-local" name="transaction_date" id="transaction_date" >
                </div>
            </form>
        </section>
    </main>
</body>
</html>