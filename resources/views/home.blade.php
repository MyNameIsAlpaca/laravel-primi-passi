<!DOCTYPE html>
<html lang="It">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prova Laravel</title>
</head>
<body>
  <header><div class="link"><a href="{{ route('second_page') }}">Vai alla seconda pagina</a></div> <div class="link"><a href="{{ route('third_page') }}">Vai alla terza pagina</a></div></header>
  <h1>Ciao {{ $data[0] }}! Benvenuto nella homepage!</h1>
</body>
</html>