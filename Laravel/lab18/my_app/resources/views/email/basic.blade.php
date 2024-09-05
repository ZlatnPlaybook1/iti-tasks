<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>
</head>
<body>
    <h1>Welcome to Our Application</h1>
    <p>Dear {{ $name }} ,</p>
    <p>Thank you gor reaching our Contact</p>
    <p>regeards ,</p>
    <h4>{{env('APP_NAME')}} Team</h4>
</body>
</html>
