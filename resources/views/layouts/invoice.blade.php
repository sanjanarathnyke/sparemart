<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Spare Mart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        :root {
            --orange-primary: #ff6b35;
            --orange-secondary: #ff8c42;
            --orange-light: #fff4f0;
            --orange-dark: #e55a2b;
            --text-dark: #2c3e50;
            --border-color: #e9ecef;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
        }

        .invoice-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto;
        }

        .invoice-header {
            background: linear-gradient(135deg, var(--orange-primary), var(--orange-secondary));
            color: white;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .invoice-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(180deg); }
        }

        .company-name {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .invoice-title {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .invoice-info {
            background: var(--orange-light);
            padding: 25px;
            border-left: 4px solid var(--orange-primary);
        }

        .invoice-details {
            padding: 30px;
        }

        .info-card {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .info-card:hover {
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.15);
            transform: translateY(-2px);
        }

        .info-label {
            color: var(--orange-primary);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--text-dark);
        }

        .invoice-table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .table thead th {
            background: var(--orange-primary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
            padding: 15px;
            font-size: 0.9rem;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
            border-color: var(--border-color);
        }

        .table tbody tr:hover {
            background-color: rgba(255, 107, 53, 0.05);
        }

        .item-number {
            background: var(--orange-light);
            color: var(--orange-primary);
            font-weight: 600;
            text-align: center;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .total-section {
            background: var(--orange-light);
            border-radius: 8px;
            padding: 25px;
            margin-top: 30px;
            border: 2px solid var(--orange-primary);
        }

        .grand-total {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--orange-primary);
            text-align: center;
            margin: 0;
        }

        .action-buttons {
            padding: 30px;
            text-align: center;
            background: #f8f9fa;
        }

        .btn-orange {
            background: linear-gradient(135deg, var(--orange-primary), var(--orange-secondary));
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            margin: 0 10px;
        }

        .btn-orange:hover {
            background: linear-gradient(135deg, var(--orange-dark), var(--orange-primary));
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.3);
            color: white;
        }

        .btn-outline-orange {
            background: transparent;
            border: 2px solid var(--orange-primary);
            color: var(--orange-primary);
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            margin: 0 10px;
            text-decoration: none;
        }

        .btn-outline-orange:hover {
            background: var(--orange-primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.3);
        }

        .invoice-footer {
            text-align: center;
            padding: 20px;
            background: var(--text-dark);
            color: white;
            font-size: 0.9rem;
        }

        @media print {
            body {
                background: white;
            }
            .action-buttons {
                display: none;
            }
            .invoice-container {
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }

        @media (max-width: 768px) {
            .company-name {
                font-size: 2rem;
            }
            .invoice-details {
                padding: 20px;
            }
            .btn-orange, .btn-outline-orange {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="invoice-container">
            <!-- Header -->
            <div class="invoice-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="company-name">SPARE MART</h1>
                        <p class="invoice-title">Your Trusted Auto Parts Partner</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <div class="invoice-title">
                            <div>Invoice Date: {{ date('Y-m-d') }}</div>
                            <div>Invoice #: INV-{{ date('Ymd') }}-{{ rand(1000, 9999) }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Info -->
            <div class="invoice-info">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="info-label">Bill To:</div>
                            <div class="info-value">
                                Customer Name<br>
                                Customer Address<br>
                                City, State ZIP<br>
                                Phone: (555) 123-4567
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="info-label">From:</div>
                            <div class="info-value">
                                <strong>Spare Mart</strong><br>
                                123 Auto Parts Street<br>
                                Car City, ST 12345<br>
                                Phone: (555) 987-6543<br>
                                Email: info@sparemart.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="invoice-details">
                <div class="table-responsive">
                    <table class="table invoice-table">
                        <thead>
                            <tr>
                                <th style="width: 8%">#</th>
                                <th style="width: 40%">Product</th>
                                <th style="width: 15%">Price</th>
                                <th style="width: 12%">Qty</th>
                                <th style="width: 25%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($cart as $item)
                            <tr>
                                <td>
                                    <div class="item-number">{{ $count++ }}</div>
                                </td>
                                <td>
                                    <strong>{{ $item['name'] }}</strong>
                                    <br><small class="text-muted">Auto Part - Premium Quality</small>
                                </td>
                                <td>
                                    <strong>${{ number_format($item['price'], 2) }}</strong>
                                </td>
                                <td>
                                    <span class="badge bg-secondary">{{ $item['quantity'] ?? 1 }}</span>
                                </td>
                                <td>
                                    <strong>${{ number_format($item['price'] * ($item['quantity'] ?? 1), 2) }}</strong>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Total Section -->
                <div class="total-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-label">Payment Method</div>
                            <div class="info-value">Cash / Card / Bank Transfer</div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="grand-total">
                                Grand Total: ${{ number_format($total, 2) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button onclick="window.print()" class="btn btn-orange">
                    🖨️ Print Invoice
                </button>
                <a href="{{ route('cart') }}" class="btn-outline-orange">
                    ← Back to Cart
                </a>
            </div>

            <!-- Footer -->
            <div class="invoice-footer">
                <p class="mb-0">
                    Thank you for choosing Spare Mart! | For support: support@sparemart.com | www.sparemart.com
                </p>
            </div>
        </div>
    </div>
</body>
</html>