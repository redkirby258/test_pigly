<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
</head>

<body>

<div class="register-form">
    <div class="register-form__heading">
      <h1 class="register-form__heading content__heading">Pigly</h1>
      <h2 class="register-form__heading content__heading">Register</h2>
    </div>
    <form class="register-form__form" action="/register" method="post">
      @csrf
      <div class="register-form__group">
        <label class="register-form__label" for="name">お名前</label>
        <input class="register-form__input" type="text" name="name" id="name" >
        <p class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="email">メールアドレス</label>
        <input class="register-form__input" type="mail" name="email" id="email" >
        <p class="register-form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="password">パスワード</label>
        <input class="register-form__input" type="password" name="password" id="password" >
        <p class="register-form__error-message">
      
        </p>
      </div>
      <input class="register-form__btn btn" type="submit" value="次に進む">
      <a class="header__link" href="/login">login</a>
    </form>
  
</div>

</body>
</html>
