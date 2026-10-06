<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
        <!---- Nav Bar ---->
        <header style="display: flex; align-items: center; width: 100%; gap: 100px; border: 1px solid orange;">
            
            <!-- First Half -->
            <div style="display: flex; align-items: center; gap: 100px;" > 
                <!-- Sidebar -->
                <div>
                    <a href="">
                    <img 
                        style="width: 30px; height: 30px;" 
                        src="{{ asset('assets/hamburger.png') }}" alt="sidebar">
                    </a>
                </div>

                <div>
                    <h1>Welcome to FinMe {{ auth() -> user() -> name }} </h1>
                </div>
            </div>

            <!-- Second Half -->
            <div style="display: flex; align-items: center; gap: 80px;" > 
                
                <a href="">
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
                
                <a href="">
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

        <!---- Main Content ---->
        <main>
            <section>

                <!-- Accounts -->
                <div>
                    <div>
                        <h2>My Accounts</h2>
                    </div>
                </div>
                <hr>
                <!-- Add Transaction -->
                <div style="display: flex; align-items:center;">
                    <p>Add Transactions</p>
                    <a href="">
                        <img 
                            style="width: 30px; height: 30px;" 
                            src="{{ asset('assets/addButton.png') }}" alt="Add">
                    </a>
                </div>
            </section>
        </main>
    @else
        <div> PROJECTMANAGER </div>
        <h1> Welcome. You are not logged in :< </h1>
        <p> <a href="{{ route('home') }}">Sign up or log in</a> to manage your projects. </p>
    @endauth
</body>
</html>