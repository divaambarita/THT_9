<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['name'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #343a40;
            color: #fff;
            padding: 15px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar .brand {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #f8f9fa;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            margin-left: 20px;
        }
        .navbar ul li a {
            color: #f8f9fa;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }
        .navbar ul li a:hover {
            color: #007bff;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-detail {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
        }
        .product-image {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
        }
        .product-image img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        .product-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .product-info h1 {
            font-size: 28px;
            margin: 0;
        }
        .product-info p {
            font-size: 16px;
            color: #666;
        }
        .product-price {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }
        .specifications {
            margin-top: 20px;
        }
        .specifications h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .specifications table {
            width: 100%;
            border-collapse: collapse;
        }
        .specifications table th,
        .specifications table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .specifications table th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #343a40;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-btn:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">iPhone Store</div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="product-detail">
            <div class="product-image">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
            </div>
            <div class="product-info">
                <h1>{{ $product['name'] }}</h1>
                <p>{{ $product['description'] }}</p>
                <p class="product-price">${{ $product['price'] }}</p>
                <a class="back-btn" href="{{ route('home') }}">Back to Home</a>
            </div>
        </div>
        <div class="specifications">
            <h3>Specifications</h3>
            <table>
                <tbody>
                    @foreach ($product['specifications'] as $key => $value)
                        <tr>
                            <th>{{ $key }}</th>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
