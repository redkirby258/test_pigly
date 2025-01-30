<!DOCTYPE html>
<htm lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
</head>

<body>

<div class="login-form">
  <div class="login-form__heading">
    <h1 class="login-form__heading content__heading">Pigly</h1>
    <h2 class="login-form__heading content__heading">Login</h2>
    <a class="header__link" href="/register/step1">login</a>
  </div>
    <form class="login-form__form" action="/login" method="post">
      @csrf
      <div class="login-form__group">
        <label class="login-form__label" for="email">メールアドレス</label>
        <input class="login-form__input" type="mail" name="email" id="email" placeholder="例: test@example.com">
        <p class="login-form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="login-form__group">
        <label class="login-form__label" for="password">パスワード</label>
        <input class="login-form__input" type="password" name="password" id="password" placeholder="例: coachtech1106">
        <p>
          @error('password')
          {{ $message }}
          @enderror
        </p>
      </div>
      <input class="login-form__btn btn" type="submit" value="ログイン">
    </form>
</div>

</body>
</htm>