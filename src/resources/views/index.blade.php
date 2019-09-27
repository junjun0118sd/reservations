@extends('layouts.app')
@section('title','ホテル予約管理システム')

@section('content')




    <header>
        <h1>Hotel Reservation System!!</h1>
        <h4>チェックインは12時〜17時まで、チェックアウトは5時から11時までにお願い致します。</h4>

    </header>
    <main>
        <form action="{{url('/form')}}" method="post">
            <p style="font-size:25px;">ホテル名一覧<br>
                @csrf
                <select style="width:300px; font-size: 40px;" name="hname">
                    <option value="ホテルA">ホテルA</option>
                    <option value="ホテルB">ホテルB</option>
                    <option value="ホテルC">ホテルC</option>
                    <option value="ホテルD">ホテルD</option>
                    <option value="ホテルE">ホテルE</option>
                </select></p>
            <input style="width: 100px;" type="submit" value="予約" button type="button" class="btn btn-outline-success">
        </form>
    </main>



        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>予約一覧</h1>
            </div>
            ​
            <div class="panel-body">
                <table border="1" class="table table-striped reservations-table" class="table table-striped">
                    ​
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>予約番号</th>

                        <th>HOTEL NAME</th>

                        <th>check in</th>

                        <th>check out</th>

                        <th>intime</th>

                        <th>outtime</th>
　　　　　　　　　　　　　　　
                        　<th>確認</th>
　　　　　　　　　　　　　
                    </thead>
                    ​<!-- テーブル本体 -->
                    <tbody>
                        @foreach($reserves as $reserve)
                        <!--予約番号-->
                        <tr>
                            <td class="table-text">
                                <div>{{$reserve->id}}</div>
                            </td>
                            <!--ホテル名-->
                            <td class="table-text">
                                <div>{{$reserve->hname}}</div>

                            </td>
                            <!--チェックイン-->
                            <td class="table-text">
                                <div>{{$reserve->checkin}}</div>
                            </td>
                            <!--チェックアウト-->
                            <td class="table-text">
                                <div>{{$reserve->checkout}}</div>
                            </td>
                            <!--チェックイン時間-->
                            <td class="table-text">
                                <div>{{$reserve->intime}}</div>
                            </td>
                            <!--チェックアウト時間-->
                            <td class="table-text">
                                <div>{{$reserve->outtime}}</div>
                            </td>
                            <!--消去ボタン-->
                            <td>
                            <form action="{{url('reserve/'.$reserve->id)}}" method="POST" button type="button" class="btn btn-warning">
                            @csrf
                            {{method_field('DELETE')}}
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
@endsection
