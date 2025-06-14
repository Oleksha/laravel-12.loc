<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 :: Payments</title>
</head>
<body>
<table style="border-collapse: collapse;">
    <tr style="background-color: #999999;">
        <th style="border: 1px solid #000000;">ID</th>
        <th style="border: 1px solid #000000;">Student Name</th>
        <th style="border: 1px solid #000000;">Amount</th>
        <th style="border: 1px solid #000000;">Payment Date</th>
        <th style="border: 1px solid #000000;">Payment Method</th>
        <th style="border: 1px solid #000000;">Notes</th>
    </tr>
    @foreach($getRecords as $value)
        <tr>
            <td style="border: 1px solid #000000;">{{ $value->id }}</td>
            <td style="border: 1px solid #000000;">{{ $value->name }}</td>
            <td style="border: 1px solid #000000;">{{ $value->amount }}</td>
            <td style="border: 1px solid #000000;">{{ date('d-m-Y', strtotime($value->payment_date)) }}</td>
            <td style="border: 1px solid #000000;">{{ $value->payment_method }}</td>
            <td style="border: 1px solid #000000;">{{ $value->notes }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
