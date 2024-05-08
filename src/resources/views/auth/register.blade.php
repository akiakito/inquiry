@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__whole">
    <div class="contact__inner">
        <h2 class="contact__font">
            Register
        </h2>
    </div>
    <div class="login">
        <form class="login__form">
            <div class="mail">
                <div class="mail__div">
                    <p class="mail__p">
                        メールアドレス
                    </p>
                </div>
                <input class="mail__input"type="email"placeholder="例: test@example.com">
            </div>
            <div class="pass">
                <div class="pass__div">
                    <p class="pass__p">
                        パスワード
                    </p>
                </div>
                <input class="pass__input"type="password"placeholder="例: coachtech1106" >
            </div>
            <div class="login__div">
                <button class="login__button"type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection