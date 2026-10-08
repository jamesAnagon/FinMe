<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header style="display: flex; align-items: center; gap: 100px; border: 1px solid orange; padding: 0 10px 0 10px;">
            
            <!-- First Half -->
            <div style="display: flex; align-items: center; gap: 100px; width: 100%; padding-left: 20px;" > 
                <div>
                    <a href="{{ route('dashboard') }}" style="text-decoration: none;">
                    <h1>Welcome to FinMe {{ auth() -> user() -> name }} </h1>
                    </a>
                </div>
            </div>

            <!-- Second Half -->
            <div style="display: flex; align-items: center; gap: 80px; width: 100%; justify-content: center;" > 
                
                <a href="{{ route('transactions.index') }}">
                    <img 
                        style="width: 30px; height: 30px;" 
                        src="{{ asset('assets/folder.png') }}" alt="records">
                    </a>
                </a>

                <a href="">
                    <img 
                        style="width: 30px; height: 30px;" 
                        src="{{ asset('assets/analysis.png') }}" alt="analysis">
                    </a>
                </a>

                <a href="">
                    <img 
                        style="width: 30px; height: 30px;" 
                        src="{{ asset('assets/budgets.png') }}" alt="budgets">
                    </a>
                </a>

                <a href="{{ route('accounts.index') }}">
                    <img 
                        style="width: 30px; height: 30px;" 
                        src="{{ asset('assets/accounts.png') }}" alt="accounts">
                    </a>
                </a>
                
                <a href="{{ route('categories.index') }}">
                    <img 
                        style="width: 30px; height: 30px;" 
                        src="{{ asset('assets/categories.png') }}" alt="categories">
                    </a>
                </a>

                <form action="{{ route('logout') }}" method="GET">
                    <button type="submit">
                        LOG OUT
                    </button>
                </form>

            </div>
            
        </header>
</body>
</html>