
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホテル予約管理システム</title>
    <link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <header>
        <h1>Hotel Reservation System</h1>

    </header>
    <main>
        <form action="{{url('/form')}}"  method="post" >
            <p class="f-size-up">ホテル名一覧<br>
                @csrf
            <select style="width:300px; font-size: 40px;" name="hname">
                <option value="ホテルA">ホテルA</option>
                <option value="ホテルB">ホテルB</option>
                <option value="ホテルC">ホテルC</option>
                <option value="ホテルD">ホテルD</option>
                <option value="ホテルE">ホテルE</option>
            </select></p>
            <input style="width: 100px;" type="submit" value="予約" >
        </form>
    </main>
  <div>


      <div class="panel panel-default">
        <div class="panel-heading">
    <h1>予約一覧</h1>
        </div>
​
        <div class="panel-body">
            <table border="1" class="table table-striped reservations-table">
​
                <!-- テーブルヘッダ -->
                <thead>
                    <th>予約番号</th>

                    <th>HOTEL NAME</th>

                    <th>check in</th>

                    <th>check out</th>


                </thead>
​
                <!-- テーブル本体 -->
                <tbody>
                @foreach($reserves as $reserve)
                    <tr>
                        <td class="table-text">
                        <div>{{$reserve->id}}</div>
                        </td>

                        <td class="table-text">
                        <div>{{$reserve->hname}}</div>

                        </td>
                        <td class="table-text">
                        <div>{{$reserve->checkin}}</div>

                        </td>
                        <td class="table-text">
                        <div>{{$reserve->checkout}}</div>
                        </td>
                        <td>
                        <form action="{{url('reserve/'.$reserve->id)}}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>予約消去
                        </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>

</body>

</html>
