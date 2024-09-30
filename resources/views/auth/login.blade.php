<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Informasi | Program Studi Informatika</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="icon" href="{{ asset('images/prodi2.jpg') }}" type="image/png"> <!-- Mengatur favicon -->

    <style>
        body {
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .login-container {
            width: 500px; /* Lebar form */
            height: 600px; /* Panjang form */
            background-color: #1c1c1c;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.5);
        }
        .login-container h2 {
            margin-bottom: 30px;
            font-size: 24px;
            color: #ffd700;
        }
        .form-control {
            border-radius: 10px;
            height: 45px;
            background-color: #333;
            color: #fff;
            border: none;
        }
        .form-control:focus {
            border-color: #ffd700;
            box-shadow: 0 0 5px rgba(255, 215, 0, 0.8);
        }
        .btn-primary {
            background-color: #ffd700;
            border-color: #ffd700;
            width: 100%;
            height: 45px;
            border-radius: 10px;
            font-size: 16px;
            color: #000;
        }
        .btn-primary:hover {
            background-color: #e5c100;
            border-color: #e5c100;
        }
        .form-check-label {
            font-size: 14px;
        }
        .alert {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: 600;
            font-size: 14px;
            color: #ffd700;
        }
        a {
            color: #ffd700;
            text-decoration: none;
        }
        a:hover {
            color: #e5c100;
        }
        .password-container {
            position: relative;
        }
        .password-container input {
            padding-right: 40px; /* Space for the icon */
        }
        .password-container .toggle-password {
            position: absolute;
            right: 20px;
            top: 70%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Username:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="email" autofocus>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group password-container">
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="admin">Admin</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="kaprodi">Kaprodi</option>
                </select>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                <label for="remember" class="form-check-label">Remember Me</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <div class="text-center">
            <a href="#">Forgot Password?</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to toggle password visibility -->
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var icon = document.querySelector(".toggle-password");
            
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
