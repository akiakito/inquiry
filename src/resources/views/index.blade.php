@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="index__whole">
    <div class="contact__inner">
        <h2 class="contact__font">
            Contact
        </h2>
    </div>
    <div class="input">
        <form class="input__form">
            <div class="name">
                <div class="name__title">
                    <span class="title__name">お名前</span>
                    <span class="asuta"> ※</span>
                </div>
                <div class="name__text">
                    <input class="last__name" type="text" name="name" placeholder="例:山田" />
                    <input class="fast__name" type="text" name="name" placeholder="例:太郎" />
                </div>
            </div>
            <div class="sex">
                <div class="name__title">
                    <span class="title__name">性別</span>
                    <span class="asuta">※</span>
                </div>
                <div class="sex__text">
                    <label class="men__label">
                        <input name="men" type="radio"checked />
                        男性
                    </label>
                    <label class="men__label">
                        <input name="men" type="radio" />
                        女性
                    </label>
                    <label class="men__label">
                        <input name="men" type="radio" />
                        その他
                    </label>
                </div>
            </div>
            <div class="meile">
                <div class="name__title">
                    <span class="title__name">メールアドレス</span>
                    <span class="asuta">※</span>
                </div>
                <div class="meile__input">
                    <input type="email"id="email"placeholder="例: test@example.com" />
                </div>
            </div>
            <div class="tel">
                <div class="name__title">
                    <span class="title__name">電話番号</span>
                    <span class="asuta">※</span>
                </div>
                <div class="tel__input">
                    <input class="tel__box"type="tel"name="tel"placeholder="080">
                    <p class="haihun">ー</p>
                    <input class="tel__box"type="tel"name="tel"placeholder="1234">
                    <p class="haihun">ー</p>
                    <input class="tel__box"type="tel"name="tel"placeholder="5678">
                </div>
            </div>
            <div class="address">
                <div class="name__title">
                    <span class="title__name">住所</span>
                    <span class="asuta">※</span>
                </div>
                <div class="address__div">
                    <input type="text"placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </div>
            </div>
            <div class="address">
                <div class="name__title">
                    <span class="title__name">建物</span>
                </div>
                <div class="address__div">
                    <input class="address__input"type="text"placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
            <div class="kinds">
                <div class="name__title">
                    <span class="title__name">お問合せの種類</span>
                    <span class="asuta">※</span>
                </div>
                <div class="kinds__input">
                    <select name="select">
                    <option value="" hidden>選択してください</option>
                    <option value="zero"></option>
                    <option value="one"></option>
                    <option value="twe"></option>
                    </select>
                </div>
            </div>
            <div class="problem">
                <div class="name__title">
                    <span class="title__name">お問合せ内容</span>
                    <span class="asuta">※</span>
                </div>
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</div>
@endsection