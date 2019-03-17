<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Order</title>

</head>

<body>
<div>

    <p>Անուն - <span>{{ $request->data['info'][0] }}</span></p>
    <p>Հեռախոս - <span>{{ $request->data['info'][1] }}</span></p>
    <p>Հասցե - <span>{{ $request->data['info'][2] }}</span></p>
    <p>Ապրանքներ - <span>{{  $request->data['info'][3] }}</span></p>
    <p>Նշումներ - <span>{{  $request->data['info'][4] }}</span></p>
</div>
</body>
</html>