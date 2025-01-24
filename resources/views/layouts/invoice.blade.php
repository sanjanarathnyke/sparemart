<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Invoice</h1>
        <hr>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1; @endphp
                        @foreach ($cart as $item)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] ?? 1 }}</td>
                            <td>${{ number_format($item['price'] * ($item['quantity'] ?? 1), 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4 class="text-end">Grand Total: ${{ number_format($total, 2) }}</h4>
            </div>
        </div>
        <div class="text-center mt-4">
            <button onclick="window.print()" class="btn btn-primary">Print Invoice</button>
            <a href="{{ route('cart') }}" class="btn btn-secondary">Back to Cart</a>
        </div>
    </div>
</body>
</html>
