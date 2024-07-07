@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'admin.blade.php')

@section('content')
<table>
  <tr>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>お問い合わせの種類</th>
  </tr>
  @foreach ($registers as $register)
  <tr>
    <td>{{$register->name}}</td>
    <td>{{$register->gender}}</td>
    <td>{{$register->email}}</td>
    <td>{{$register->category_id}}</td>
  </tr>
  @endforeach
</table>
@endsection