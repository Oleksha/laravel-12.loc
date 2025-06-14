<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12</title>
</head>
<body>
<h1 style="text-align: center;">{{ $title }}</h1>
<p style="text-align: center;">{{ $date }}</p>
<table style="border-collapse: collapse;">
    <tr style="background-color: #999999;">
        <th style="border: 1px solid #000000;">ID</th>
        <th style="border: 1px solid #000000;">Name</th>
        <th style="border: 1px solid #000000;">Email</th>
        <th style="border: 1px solid #000000;">Phone</th>
        <th style="border: 1px solid #000000;">Address</th>
        <th style="border: 1px solid #000000;">Date of Birth</th>
        <th style="border: 1px solid #000000;">Registration Date</th>
        <th style="border: 1px solid #000000;">Updated Date</th>
    </tr>
    @foreach($getRecord as $value)
        <tr>
            <td style="border: 1px solid #000000;">{{ $value->id }}</td>
            <td style="border: 1px solid #000000;">{{ $value->name }}</td>
            <td style="border: 1px solid #000000;">{{ $value->email }}</td>
            <td style="border: 1px solid #000000;">{{ $value->phone }}</td>
            <td style="border: 1px solid #000000;">{{ $value->address }}</td>
            <td style="border: 1px solid #000000;">{{ date('d-m-Y', strtotime($value->date_of_birth)) }}</td>
            <td style="border: 1px solid #000000;">{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
            <td style="border: 1px solid #000000;">{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
