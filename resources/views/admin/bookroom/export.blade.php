<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>HÓA ĐƠN THANH TOÁN</title>
    {{--    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <style>
        tr td {
            padding: 20px 5px;
        }

        body {
            font-family: DejaVu Sans;
        }


        .highlight {
            background-color: greenyellow;

        }

        table, th, td {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

{{--<img src="{{ asset('/images/logo.png') }}" alt="">--}}
<p>C.TY TNHH ...</p>
<h2 style="margin-left: 150px">HÓA ĐƠN THANH TOÁN </h2>
<?php
$data = DB::table('book_rooms')
    ->select('book_rooms.*', 'book_rooms.id as id_book_room', 'rooms.*', 'rooms.name as room_name', 'users.*', 'users.name as user_name')
    ->join('rooms', 'book_rooms.id_room', '=', 'rooms.id')
    ->join('users', 'book_rooms.id_user', '=', 'users.id')
    ->where('book_rooms.id', '=', $id)->first();

//    dd($data);
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Phòng</th>

        <th>Thành tiền</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="highlight">{{ $data->name}}</td>
        <td class="highlight">{{ $data->email}}</td>
        <td class="highlight">{{ $data->room_name}}</td>

        <td class="highlight">{{ number_format($data->price,0,',','.')}}</td>
    </tr>
    </tbody>

</table>
<?php
date_default_timezone_set('asia/ho_chi_minh')
?>
<div style="float: left; font-size: 16px">
    <p>HÀ NỘI, NGÀY {{ date("d") }} THÁNG {{ date("m") }} NĂM {{ date("Y") }}</p>
    <p style="padding-left: 100px">KHÁCH HÀNG</p>
</div>

<div style="font-size: 16px; margin-left: 30px">
    <p>HÀ NỘI, NGÀY {{ date("d") }} THÁNG {{ date("m") }} NĂM {{ date("Y") }}</p>
    <span style="padding-left: 130px">NHÂN VIÊN</span>
</div>


</body>
</html>

