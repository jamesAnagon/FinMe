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
        @include('header')

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
                <div style="display: flex; align-items:center; gap: 10px; border: 1px solid black;">
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