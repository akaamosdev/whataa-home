<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container" style="background-color: #edf0f4;">
    <div style="text-align:center">
        <a href="/">
            <img src="/assets/images/our-img/whataa-black-logo.png"
                 alt="Logo Whataa" height="100" class="CToWUd">
        </a>
    </div>
    <div style="width:524px;margin:0 auto;font-size:18px;background:#fff;border-top:3px solid #0c0a3f;padding:50px">
        <div>
            <div style="margin-bottom:20px">
                <h4>Bonjour <strong style="color: red">Whataa</strong></h4>
                <p>
                    Vous recevez ce message car un client vient de vous contacter
                    Veuillez trouvez les details du client
                </p>
                <h5>Nom : <span>{{$contact['name']}}</span></h5>
                <h5>Email : <span>{{$contact['email']}}</span></h5>
                <h5>Contact : <span>{{$contact['phone']}}</span></h5>
                <h5>Message : </h5>
                <p>
                    {{$contact['message']}}
                </p>
            </div>
            <hr>
            <div>
                Cordialement,<br>
                L'équipe  <span class="il"><a href="www.3af-technology.com" target="_blank">Whataa</a></span> <br>
                Téléphone:  (+225) 07 87 60 21 32 / 05 55 95 45 33
            </div>
        </div>
    </div>
</div>
</body>
</html>
