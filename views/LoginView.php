<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="<?=LOGIN_CSS?>">
    <script type="module" src="<?=SHOWPASS_JS?>"></script>
</head>

<body>
    <header>
        <h1 class="h1Neon">Employees Manager</h1>
    </header>

    <section class="mt-5 d-flex flex-column justify-content-center align-items-center">

        <div class="login-form">
            <section class="login-wrapper">

                <form id="login" method="post" action="<?=BASE_URL?>login/authUser" autocomplete="off">

                    <label for="username">User Name</label>
                    <input class="username" name="username" type="text" required />
                    <i class="fa fa-user" aria-hidden="true"></i>

                    <label for="password">Password</label>
                    <input id="password" class="password" name="password" type="password" required />
                    <i id="togglePassword" class="far fa-eye"></i>

                    <button type="submit">Sign In</button>

                </form>

            </section>
        </div>
    </section>

    <div class="quote">
        <p>
            “ Code is like humor. When you have to explain it, it’s bad.”
            <br>
            - Cory House
        </p>
    </div>

    <section class="animated-background">
        <div id="stars1"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>
</body>

</html>