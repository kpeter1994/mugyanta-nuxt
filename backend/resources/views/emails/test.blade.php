<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-family: Helvetica, sans-serif">
<div style="max-width: 400px; margin: 0 auto">
    <table>
        <tr>
            <th style="padding: 1rem; background: #eeeeee" colspan="2">Ajánlat kérés</th>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">Név:</th>
            <td style="padding: 0.5rem 1rem">{{$data['name']}}</td>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">Email:</th>
            <td style="padding: 0.5rem 1rem">{{$data['email']}}</td>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">Telefonszám:</th>
            <td style="padding: 0.5rem 1rem"><a href="tel:{{$data['phone']}}">{{$data['phone']}}</a></td>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">Felület:</th>
            <td style="padding: 0.5rem 1rem">{{$data['surface']}}</td>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">nm2:</th>
            <td style="padding: 0.5rem 1rem">{{$data['size']}}</td>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">Hol:</th>
            <td style="padding: 0.5rem 1rem">{{$data['city']}}</td>
        </tr>
        <tr>
            <th style="padding: 0.5rem 1rem">Üzenet:</th>
            <td style="padding: 0.5rem 1rem">{{$data['message']}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <img style="max-width: 400px" src="{{$data['image']}}" alt="">
            </td>
        </tr>
    </table>
</div>

</body>
</html>

