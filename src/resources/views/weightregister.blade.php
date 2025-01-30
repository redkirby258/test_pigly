<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/weightregister.css') }}" />
</head>

<body>
<div class="weightregister-form">
    <div class="weightregister-form__inner">
    <div class="weightregister-form__heading">
        <h1 class="weightregister-form__heading content__heading">PiGLy</h1>
        <h2 class="weightregister-form__heading content__heading">新機会員登録</h2>
    </div>
    <p>STEP2 体重データの入力</p>
    <form class="weightregister-form__form" action="/register/step2" method="post">
      @csrf
      <div class="weightregister-form__group">
        <label class="weightregister-form__label" for="weight">現在の体重</label>
        <input class="weightregister-form__input" type="text" name="weight" id="weight" placeholder="現在の体重を入力"><span>kg</span>
        <p class="weightregister-form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="weightregister-form__group">
        <label class="weightregister-form__label" for="goal-weight">目標の体重</label>
        <input class="weightregister-form__input" type="text" name="goal-weight" id="goal-weight" placeholder="目標の体重を入力"><span>kg</span>
        <p class="weightregister-form__error-message">
          @error('password')
          {{ $message }}
          @enderror
        </p>
      </div>
      <input class="weightregister-form__btn btn" type="submit" value="アカウント作成">
    </form>
</div>
</div>


</body>
</html>