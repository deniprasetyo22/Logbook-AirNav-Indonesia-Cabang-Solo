<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('gambar/backgroundweb1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            padding-top: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card" style="width: 350px;">
            <div class="card-header text-center">
                Halaman Register
            </div>
            <form action="prosesregister.php" method="POST">
                <div class="card-body">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" name="btnRegister">Register</button>
                    </div>
                    <div class="text-center mt-3">
                        SUdah punya akun ? Silahkan <a href="login.php">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>