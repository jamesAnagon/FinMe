<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header style="display: flex; align-items: center; gap: 100px; padding: 0 10px 0 10px;">
            
            <!-- First Half -->
            <div class="first-half" style="display: flex; align-items: center; gap: 100px; width: 100%; padding-left: 20px;" > 
                <div class="nav-brand">
                    <a href="{{ route('dashboard') }}" style="text-decoration: none;">
                    <h1>FinMe - {{ auth() -> user() -> name }} </h1>
                    </a>
                </div>
            </div>

            <!-- Second Half -->
            <div class="second-half off-screen-menu"> 
                
                <ul>
                    <li class="nav-item">
                        <a href="{{ route('transactions.index') }}">
                            <p>Records</p>
                            <img src="{{ asset('assets/folder.png') }}" alt="records">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <p>Analysis</p>
                            <img src="{{ asset('assets/analysis.png') }}" alt="analysis">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <p>Budgets</p>
                            <img
                                src="{{ asset('assets/budgets.png') }}" alt="budgets">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('accounts.index') }}">
                            <p>Accounts</p>
                            <img src="{{ asset('assets/accounts.png') }}" alt="accounts">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}">
                            <p>Categories</p>
                            <img src="{{ asset('assets/categories.png') }}" alt="categories">
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="GET">
                            <button type="submit">
                                LOG OUT
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        <nav>
            <div class="ham-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <hr>
</body>
</html>