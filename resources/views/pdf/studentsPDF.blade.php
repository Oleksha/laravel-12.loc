<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student PDF</title>
</head>
<body>
<h1>{{ $title }}</h1><br>
<h2>{{ $date }}</h2><br>
<h2>ID = {{ $getRecord->id }}</h2><br>
<h2>Name Student = {{ $getRecord->name }}</h2><br>
<h2>Email = {{ $getRecord->email }}</h2><br>
<h2>Phone = {{ $getRecord->phone }}</h2><br>
<h2>Address = {{ $getRecord->address }}</h2><br>
<h2>Date of Birth = {{ date('d-m-Y', strtotime($getRecord->date_of_birth)) }}</h2><br>
<h2>Registration Date = {{ date('d-m-Y', strtotime($getRecord->created_at)) }}</h2><br>
<h2>Update Date = {{ date('d-m-Y', strtotime($getRecord->updated_at)) }}</h2><br>
</body>
</html>
