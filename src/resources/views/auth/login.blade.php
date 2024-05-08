@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
            <div class="name">
                <div class="name__div">
                    <p class="name__p">
                        お名前
                    </p>
                </div>
                <input class="name__input"type="text"placeholder="例: 山田 太郎">
            </div>
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
                <button class="login__button"type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection