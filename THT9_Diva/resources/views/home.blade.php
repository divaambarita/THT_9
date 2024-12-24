<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #007bff;
            color: #ffffff;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            font-size: 36px;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }
        .header p {
            font-size: 18px;
            margin: 10px 0 0;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            background-color: #f0f0f0;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 10px;
        }
        .card-text {
            font-size: 14px;
            color: #666;
            margin: 0 0 15px;
        }
        .card-price {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="brand">Diva Store</div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="header">
            <h1>Welcome to iPhone Store</h1>
            <p>Find your next iPhone here</p>
        </div>
        <div class="products">
            @foreach ($products as $product)
                <div class="card">
                    <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h2 class="card-title">{{ $product['name'] }}</h2>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <p class="card-price">${{ $product['price'] }}</p>
                        <a href="{{ route('product.show', $product['id']) }}">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
