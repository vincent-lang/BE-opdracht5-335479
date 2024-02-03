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
        <h1>Levering informatie</h1>
    </div>
    <div class="contact">
        <h3>Naam leverancier: <span class="contact-data">{{$productperleveranciers[0]->leverancier->naam}}</span></h3>
        <h3>Contact persoon leverancier: <span class="contact-data">{{$productperleveranciers[0]->leverancier->contactPersoon}}</span></h3>
        <h3>Leverancier nummer: <span class="contact-data">{{$productperleveranciers[0]->leverancier->leverancierNummer}}</span></h3>
        <h3>Mobiel: <span class="contact-data">{{$productperleveranciers[0]->leverancier->mobiel}}</span></h3>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam product</th>
                    <th>Datum laatste levering</th>
                    <th>Aantal</th>
                    <th>Eerstvolgende levering</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productperleveranciers as $data)
                <tr>
                    @foreach($magazijns as $info)
                    @if($info->aantalAanwezig != null)
                    <td>{{$data->product->naam}}</td>
                    <td>{{$data->datumLevering}}</td>
                    <td>{{$data->aantal}}</td>
                    <td>{{$data->datumEerstVolgendeLevering}}</td>
                    @else
                    <td colspan="4">Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023</td>
                    <script>
                        setTimeout(function() {
                            window.location.href = "{{route('snoep.index')}}"
                        }, 4000);
                    </script>
                    @endif
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>