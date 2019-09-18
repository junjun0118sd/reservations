<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホテル予約管理システム</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <header>
        <h1>Hotel Reservation System</h1>

    </header>
    <main>
        <form action="/reservation_page/"  method="get">
            <p class="f-size-up">ホテル名一覧<br>
            <select style="width:300px; font-size: 40px;"  id="hotelname" class="" name="hotelname">
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
            <table border="1" class="table table-striped task-table">
​
                <!-- テーブルヘッダ -->
                <thead>
                    <th>予約番号</th>
                    <th>&nbsp;</th>
                    <th>HOTEL NAME</th>
                    <th>&nbsp;</th>
                    <th>check in</th>
                    <th>&nbsp;</th>
                    <th>check out</th>
                    <th>&nbsp;</th>

                </thead>
​
                <!-- テーブル本体 -->
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  </div>

</body>

</html>
