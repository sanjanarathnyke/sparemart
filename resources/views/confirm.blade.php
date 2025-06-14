<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-light min-vh-100 d-flex align-items-center py-5" style="background-image: url('{{ asset('assets/images/main-slider/image-2.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary text-white p-4">
                        <h2 class="mb-0 fw-bold fs-3">
                            <i class="bi bi-person-plus me-2"></i>Registration Details
                        </h2>
                        <p class="mb-0 mt-2 fw-light fs-6">Please fill your details before subscribing to the invoice</p>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('cart.store-and-print') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold fs-5">
                                    <i class="bi bi-person me-2"></i>Full Name
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                    <input type="text" class="form-control form-control-lg fs-6" id="name" name="name" required
                                        placeholder="Enter your full name">

                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold fs-5">
                                    <i class="bi bi-envelope me-2"></i>Email Address
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-envelope-fill"></i>
                                    </span>
                                    <input type="email" class="form-control form-control-lg fs-6" id="email" name="email" required
                                        placeholder="Enter your email address">

                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="mobile" class="form-label fw-bold fs-5">
                                    <i class="bi bi-phone me-2"></i>Mobile Number
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-phone-fill"></i>
                                    </span>
                                    <input type="tel" class="form-control form-control-lg fs-6" id="mobile" name="mobile" required
                                        placeholder="Enter your mobile number">

                                </div>
                            </div>



                            <div class="d-flex justify-content-between gap-3 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg flex-grow-1 fs-6">
                                    <i class="bi bi-printer me-2"></i>Print
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-lg fs-6" onclick="window.history.back()">
                                    <i class="bi bi-x-circle me-2"></i>Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
