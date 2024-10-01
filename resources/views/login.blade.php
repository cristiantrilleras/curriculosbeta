<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .login-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .login-card {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn-google {
            background-color: #db4437;
            color: white;
        }
        .btn-ldap {
            background-color: #004085;
            color: white;
        }
        .btn-google:hover, .btn-ldap:hover {
            color: white;
            opacity: 0.9;
        }
        .brand-logo img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card login-card">
            <div class="card-body">
                <div class="text-center mb-4 brand-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Brand Logo">
                </div>
                <h3 class="text-center mb-4">Iniciar Sesión</h3>
                <div class="mb-3">
                <a href="{{ route('identificacion') }}" class="btn btn-google btn-block">
                        <i class="fab fa-google mr-2"></i>Login con Google (miugca)
                    </a>
                </div>
                <div class="mb-3">
                <a href="{{ route('identificacion') }}" class="btn btn-ldap btn-block">
                        <i class="fas fa-user-lock mr-2"></i>Login con LDAP
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
