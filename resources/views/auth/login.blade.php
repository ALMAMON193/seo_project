<?php
$setting = \App\Models\SystemSetting::first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset($setting->favicon ?? 'frontend/assets/images/avatar.png') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .og-login-wrapper {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }

        .og-login-title {
            font-size: 1.8rem;
            color: #333;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .og-form-group {
            margin-bottom: 1.2rem;
        }

        .og-form-label {
            display: block;
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .og-form-input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .og-form-input:focus {
            outline: none;
            border-color: #84837C;
        }

        .og-form-input.is-invalid {
            border-color: #e74c3c;
        }

        .og-error-message {
            color: #e74c3c;
            font-size: 0.8rem;
            margin-top: 0.3rem;
            display: none;
        }

        .og-error-message.show {
            display: block;
        }

        .og-btn {
            display: block;
            width: 100%;
            padding: 0.8rem;
            background-color: #333;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .og-btn:hover {
            background-color: #555;
        }

        .og-login-footer {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="og-login-wrapper">
        <h1 class="og-login-title">Login</h1>
        <form id="og-login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="og-form-group">
                <label for="email" class="og-form-label">Email</label>
                <input type="email" name="email" id="email" class="og-form-input @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{ old('email') }}">
                <div class="og-error-message" id="email-error">
                    @error('email')
                        {{ $message }}
                    @else
                        Please enter a valid email
                    @endif
                </div>
            </div>
            <div class="og-form-group">
                <label for="password" class="og-form-label">Password</label>
                <input type="password" name="password" id="password" class="og-form-input @error('password') is-invalid @enderror" placeholder="Enter your password">
                <div class="og-error-message" id="password-error">
                    @error('password')
                        {{ $message }}
                    @else
                        Password is required
                    @endif
                </div>
            </div>
            <button type="submit" class="og-btn">Sign In</button>
        </form>
        <div class="og-login-footer">
            Only admin access
        </div>
    </div>

    <script>
        document.getElementById('og-login-form').addEventListener('submit', function (e) {
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            let isValid = true;

            // Reset error states
            email.classList.remove('is-invalid');
            password.classList.remove('is-invalid');
            emailError.classList.remove('show');
            passwordError.classList.remove('show');

            // Email validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim() || !emailPattern.test(email.value)) {
                email.classList.add('is-invalid');
                emailError.classList.add('show');
                isValid = false;
            }

            // Password validation
            if (!password.value.trim()) {
                password.classList.add('is-invalid');
                passwordError.classList.add('show');
                isValid = false;
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
