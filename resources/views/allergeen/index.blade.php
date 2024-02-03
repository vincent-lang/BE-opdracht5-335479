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
        <h1>Overzicht Allergenen</h1>
    </div>
    <div class="contact">
        @foreach($products as $info)
        <h3>Naam: <span class="contact-data">{{$info->naam}}</span></h3>
        <h3>Barcode: <span class="contact-data">{{$info->barcode}}</span></h3>
        @endforeach
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Omschrijving</th>
                </tr>
            </thead>
            <tbody>
                @if($productperallergeens->isNotEmpty())
                @foreach($productperallergeens as $data)
                <tr>
                    <td>{{$data->allergeen->naam}}</td>
                    <td>{{$data->allergeen->omschrijving}}</td>
                </tr>
                @endforeach
                <tr>
                    @else
                    <td colspan="2">In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken</td>
                    <script>
                        setTimeout(function() {
                            window.location.href = "{{route('snoep.index')}}"
                        }, 4000);
                    </script>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>

</html>