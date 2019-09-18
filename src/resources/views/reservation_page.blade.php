<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約日時</title>
    <link rel="html" href="index.html">
</head>
<body style="font-family:monospace">
<h1 style="border-bottom:solid 3px; font-size:60px;">{{ $_GET['hotelname'] }}</h1>
<form action="">
<h1>{{ $_GET['hotelname'] }}</h1>
check in<input type="date" name="checkin" style="width:200px;">
<br>
check out<input type="date" name="checkout" style="width:200px;">
<br>
<input action="index.blade.php"style="height:70px; width: 100px;" type="submit" value="予約" >

</form>
</body>
</html>
