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
<div class="update">
    <h1 class="update__heading">Weight Logs</h1>
    <form class="update-form__form" action="/admin" method = "POST">
    @csrf
        <div class="update-form__group">
            <label class="update-form__label" for="date">日付
            <input class="update-form__date-input"type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="weight">体重
            <input class="update-form__input"type="time" name="weight" id="weight" ><span>kg</span>
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="calories">摂取カロリー
            <input class="update-form__input"type="text" name="calories" id="calories" ><span>kcal</span>
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="exercise_time">運動時間
            <input class="update-form__input"type="time" name="exercise_time" id="exercise_time" >
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="exercise_content">運動内容
            <textarea class="update-form__textarea" name="exercise_content" id="" cols="30" rows="10"
            placeholder="運動内容を追加">{{ old('detail') }}</textarea>
        </div>
        <div>
            <input class="update-form__btn btn" type="submit" value="更新">
            <a href="/weight_logs">戻る</a>
        </div>
</div>
@endsection