<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>
<body>
<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
    <thead>
    <tr style="background: #f9f9f9;">
        <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Кол-во</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Цена</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Сумма</th>
    </tr>
    </thead>
    <tbody>
    @foreach(session('cart') as $id => $product)
    <tr>
        <td style="padding: 8px; border: 1px solid #ddd;">{{ $product['title'] }}</td>
        <td style="padding: 8px; border: 1px solid #ddd;">{{ $product['qty'] }}</td>
        <td style="padding: 8px; border: 1px solid #ddd;">{{ round($product['price'] / session('currency.value'), 2) }} {{ session('currency.code') }}</td>
        <td style="padding: 8px; border: 1px solid #ddd;">{{ round($product['qty'] * $product['price'] / session('currency.value'), 2) }} {{ session('currency.code') }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">Итого:</td>
        <td style="padding: 8px; border: 1px solid #ddd;">{{ session('cartQty') }}</td>
    </tr>
    <tr>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">На сумму:</td>
        <td style="padding: 8px; border: 1px solid #ddd;">{{ round(session('cartSum') / session('currency.value'), 2) }} {{ session('currency.code') }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
