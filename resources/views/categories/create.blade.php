<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main>
        <section class="form-section">
            <h3 class="create-title category-create-title">Add New Category</h3>
            <form 
            action="{{ route('categories.store') }}" 
            method="POST"
            style="display: flex; flex-direction: column; gap: 20px; justify-content: center; align-items:center; "
            id="category-form"
            >
            @csrf
                <div class="vert-center">
                    <p>Type:</p>
                    <div class="transaction-type-selector">
                        <input type="radio" name="type" id="income-type" value="income"><label for="income-type" class="income-label">Income</label>
                            
                        <input type="radio" name="type" id="expense-type" value="expense"><label for="expense-type" class="expense-label">Expense</label>
                    </div>
                </div>
                <div class="vert-center">
                    <label for="category-name">Name</label>
                    <input type="text" name="name" id="category-name">
                </div>
                <div class="vert-center" style="padding: 15px 20px;">
                    <a href="{{ route('categories.index') }}" class="btn-cancel" form="category-form">Cancel</a>
                    <button type="submit" class="btn-save">
                        Save 
                    </button>
                </div>
                
            </form>
            
        </section>
    </main>
</body>
</html>
