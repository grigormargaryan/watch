<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Email confirmation</title>

</head>

<body>
<div>
    <p>Name - <span>{{ $request['your-name']}}</span></p>
    <p>Phone - <span>{{ $request['your-phone']}}</span></p>
    <p>email - <span>{{ $request['email']}}</span></p>
    <p>Maesage - <span>{{ $request['your-message']}}</span></p>
</div>
</body>
</html>
