@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約日時</title>
    <link rel="html" href="index.html">
</head>

<body>
    <h1 style="border-bottom:solid 3px; font-size:60px;">{{$hname}}</h1>
<form action="{{url('/reserve')}}" method="post">
        @csrf
        <!--ホテル名-->
        <label for="hname">予約ホテル</label>
        <input readonly type="text" value="{{$hname}}" name="hname">
        <br>
        <!--チェックイン-->
　　　　　<label for="checkin">チェックイン</label>
　　　　　<input type="date" name="checkin" style="width:200px;" 　value="<?php echo date('y-m-j'); ?>">
        <br>
        <!--チェックアウト-->
        <label for="checkout">チェックアウト</label>
        <input type="date" name="checkout" style="width:200px;" value="<?php echo date('y-m-j'); ?>">
        <br>
        <input style="height:70px; width: 100px;" type="submit" value="予約">

    </form>
</body>

</html>

@endsection
