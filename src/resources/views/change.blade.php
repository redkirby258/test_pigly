@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css')}}">
@endsection

@section('link')
<form action="/logout" method="post">
  @csrf
  <a class="header__link" href="/login">目標体重設定</a>
  <input class="header__link" type="submit" value="logout">
</form>
@endsection

@section('content')
<div class="change">
    <h1 class="update__heading">目標体重設定</h1>
    <form class="change-form__form" action="">
        <input type="time"><span>kg</span>
        <div class="update-form__btn">
            <input class="update-form__btn btn" type="submit" value="更新">
            <a href="/weight_logs">戻る</a>
        </div>
    </form>
</div>
@endsection