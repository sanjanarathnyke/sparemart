<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-image: url('{{ asset(' assets/images/main-slider/image-2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body class="flex items-center justify-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white shadow-md rounded-lg p-6 opacity-75">
                    <h2 class="text-2xl font-bold mb-6 text-red-400">fill your details before subscribe the invoice...
                    </h2>

                    <form action="#" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" required
                                placeholder="Enter your mobile number">
                        </div>

                        <div class="flex justify-between">
                            <button type="submit" class="btn btn-primary">Print</button>
                            <button type="button" class="btn btn-secondary"
                                onclick="window.history.back()">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, but needed for some Bootstrap features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>