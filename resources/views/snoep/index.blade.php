<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="title">
        <h1>Overzicht Magazijn Jamin</h1>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Barcode</th>
                    <th>Naam</th>
                    <th>Verpakkingseenheid</th>
                    <th>Aantalaanwezig</th>
                    <th>Allergenen Info</th>
                    <th>Leverantie Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach($magazijns as $data)
                <tr>
                    <td>{{$data->product->barcode}}</td>
                    <td>{{$data->product->naam}}</td>
                    <td>{{$data->verpakkingsEenheid}}</td>
                    <td>{{$data->aantalAanwezig}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>