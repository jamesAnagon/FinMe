<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>FinMe - Finance Tracker</title>
    @vite('resources/css/app.css')
</head>


<body>

    @auth
        <header class="topbar">
            <div class="logo">
                <div class="logo-box"></div>
                Fin<span>Me</span>
            </div>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </header>
    @else

        <!-- =========================
             GUEST / AUTH
        ========================= -->

        <main class="auth-container">

            <div class="welcome-label"> FinMe - FINANCE TRACKER </div>
            <h1> Welcome. </h1>
            <p class="auth-subtitle"> Sign up or log in to start tracking your finance </p>


            <!-- REGISTER -->
            <section class="auth-card">

                <h2>Create account</h2>
                <form
                    action="{{ route('register') }}"
                    method="POST"
                    class="auth-form">

                    @csrf

                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Your name">
                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="you@company.com">

                    </div>


                    <div class="form-group">

                        <label for="password">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Create a password">

                    </div>


                    <button
                        type="submit"
                        class="auth-submit">

                        SIGN UP →

                    </button>

                </form>

            </section>


            <!-- LOGIN -->

            <section class="auth-card">

                <h2>
                    Welcome back
                </h2>

                <form
                    action="{{ route('login') }}"
                    method="POST"
                    class="auth-form">

                    @csrf

                    <div class="form-group">

                        <label for="loginname">
                            Name
                        </label>

                        <input
                            type="text"
                            name="loginname"
                            id="loginname"
                            placeholder="Your name">

                    </div>


                    <div class="form-group">

                        <label for="loginpassword">
                            Password
                        </label>

                        <input
                            type="password"
                            name="loginpassword"
                            id="loginpassword"
                            placeholder="Your password">

                    </div>


                    <button
                        type="submit"
                        class="auth-submit">

                        LOG IN →

                    </button>

                </form>

            </section>

        </main>

    @endauth

</body>

</html>