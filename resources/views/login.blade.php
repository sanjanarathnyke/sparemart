<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Spare Parts Shop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #ff6b35;
            --secondary-orange: #ff8f65;
            --dark-orange: #e55a2b;
            --light-orange: #fff5f2;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
        }

        body {
            background: linear-gradient(135deg, var(--light-orange) 0%, #fff 50%, var(--light-orange) 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(255, 107, 53, 0.1);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            border: 1px solid rgba(255, 107, 53, 0.1);
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            color: white;
            padding: 40px 30px 30px;
            text-align: center;
            position: relative;
        }

        .login-header::before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 20px solid var(--secondary-orange);
        }

        .login-header h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.8rem;
        }

        .login-header p {
            margin: 10px 0 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .login-body {
            padding: 50px 30px 30px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 15px 20px;
            padding-left: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-control:focus {
            border-color: var(--primary-orange);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.15);
            background: white;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 1.1rem;
            z-index: 10;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--dark-orange), var(--primary-orange));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .forgot-password {
            color: var(--primary-orange);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password:hover {
            color: var(--dark-orange);
            text-decoration: underline;
        }

        .divider {
            position: relative;
            text-align: center;
            margin: 30px 0;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e9ecef;
        }

        .divider span {
            background: white;
            padding: 0 20px;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: var(--primary-orange);
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            color: var(--dark-orange);
            text-decoration: underline;
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .form-check-input:checked {
            background-color: var(--primary-orange);
            border-color: var(--primary-orange);
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 53, 0.25);
        }

        .social-login {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-social {
            flex: 1;
            padding: 12px;
            border: 2px solid #e9ecef;
            background: white;
            border-radius: 12px;
            transition: all 0.3s ease;
            color: var(--text-dark);
        }

        .btn-social:hover {
            border-color: var(--primary-orange);
            background: var(--light-orange);
            color: var(--dark-orange);
        }

        @media (max-width: 480px) {
            .login-card {
                margin: 10px;
                border-radius: 15px;
            }
            
            .login-header {
                padding: 30px 20px 20px;
            }
            
            .login-body {
                padding: 40px 20px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2><i class="fas fa-cogs me-2"></i>Spare Mart</h2>
                <p>Welcome back! Please sign in to your account</p>
            </div>
            
            <div class="login-body">
                <form id="loginForm">
                    @csrf
                    <div class="form-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    
                    <div class="remember-me">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </form>    
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ route('confirm') }}">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (email && password) {
                // Simulate login process
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Signing In...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    alert('Login successful! (This is a demo)');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            }
        });
        
        // Add focus effects
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('.input-icon').style.color = 'var(--primary-orange)';
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.querySelector('.input-icon').style.color = 'var(--text-light)';
                }
            });
        });
    </script>
</body>
</html>