<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <section class="form-section">
            <h3 style="text-align: center; border: 1px solid black;">Create Category</h3>
            <form 
            action="{{ route('categories.store') }}" 
            method="POST"
            style="display: flex; flex-direction: column; gap: 20px; justify-content: center; align-items:center; "
            >
            @csrf
                <div class="vert-center">
                    <input type="radio" name="type" id="income-type" value="income"><label for="income-type" class="income-label">Income</label>
                        
                    <input type="radio" name="type" id="expense-type" value="expense"><label for="expense-type" class="expense-label">Expense</label>
                </div>
                <div> 
                    <label for="category-name">Name</label>
                    <input type="text" name="name" id="category-name">
                </div>
                <div style="display: flex; gap: 50px; justify-content: center; align-items:center;">
                    <a href="{{ route('categories.index') }}">Cancel</a>
                    <button type="submit">
                        Save 
                    </button>
                </div>
                
            </form>
        </section>
    </main>
</body>
</html>