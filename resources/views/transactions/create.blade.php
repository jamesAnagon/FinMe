<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Transactions</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <section style="display: flex; flex-direction: column; justify-content: center; align-items:center;">
            <!-- Save and cancel -->
            <div style="display: flex; gap: 50px; justify-content: center; align-items:center;">
                <a href="{{ route('transactions.index') }}">Cancel</a>
                <button type="submit" form="transaction-form">
                    Save 
                </button>
            </div>

            <!-- Transaction Type: -->
            <div style="display: flex; gap: 20px; justify-content: center; align-items:center;">
                <input type="radio" name="type" id="income-type" value="income" form="transaction-form"><label for="income-type">Income</label>
                    
                <input type="radio" name="type" id="expense-type" value="expense" form="transaction-form"><label for="expense-type">Expense</label>

                <input type="radio" name="type" id="transfer-type" value="transfer"><label for="transfer-type" form="transaction-form">Transfer</label>
            </div>

            <!-- Actual Form -->
            <form 
            action="{{route('transactions.create')}}" 
            method="POST" 
            style="display: flex; flex-direction: column; justify-content: center;"
            id="transacton-form"
            >
                <div style="display: flex; gap: 10px">
                    <div style="display: flex; flex-direction: column;">
                        <label>Account</label>
                        <select name="account_id">
                            @foreach ($accounts as $account)
                                <option value="{{ $account }}">{{ $account->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <label>Category</label>
                        <select name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <textarea name="description" id="description" cols="10" rows="3" placeholder="Add Notes"></textarea>
                <label for="amount">Amount</label><input type="number" name="amount" id="amount">
                <label for="transaction_date">Transaction Date</label><input type="datetime-local" name="transaction_date" id="transaction_date" >
            </form>
        </section>
    </main>
</body>
</html>