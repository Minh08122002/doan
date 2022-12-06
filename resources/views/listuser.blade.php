@extends('main')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Địa Chỉ</th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>
    </thead>
    @foreach($dsNguoiDung as $NguoiDung)
    <tbody>
    <tr>
                <td> {{ $NguoiDung->nguoi_dung_id }}</td>
                <td> {{ $NguoiDung->username }}</td>
                <td> {{ $NguoiDung->password }}</td>
                <td> {{ $NguoiDung->email }}</td>
                <td> {{ $NguoiDung->avatar }}</td>
                <td> {{ $NguoiDung->name }}</td>
                <td> {{ $NguoiDung->dia_chi }}</td>
                <td>
              
                <a class="btn btn-danger btn-sm" href="{{route('listuser_xoa',['nguoi_dung_id'=>$NguoiDung->nguoi_dung_id])}}"
                onclick="removeRow(' . $NguoiDung->nguoi_dung_id . ')">
                    <i class="fas fa-trash"></i>
                </a>
                </td>
                </tr>
               
    </tbody>
    @endforeach
</table>
@endsection