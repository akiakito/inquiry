@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__whole">
    <div class="contact__inner">
        <h2 class="contact__font">
            Admin
        </h2>
    </div>
    <div class="admin__box">
        <div class="admin__b">
            <form class="admin__form">
                <div class="admin__textbox">
                    <input class="textbox__input"type="text"placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="admin__select">
                    <select class="select">
                        <option value="" selected hidden>性別</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="admin__select2">
                    <select class="select__kind">
                        <option value="" selected hidden>お問い合せの種類</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="admin__day">
                    <input class="day__input"type="date">
                </div>
                <div class="button__sumit">
                    <button class="admin__button" type="submit">検索</button>
                </div>
            </form>
        </div>
        <div class="reset__form">
            <form class="reset">
                <button class="reset__button" type="submit">リセット</button>
            </form>
        </div>
    </div>
    <div class="export">
        <form class="export">
            <button class="export__button" type="submit">エクスポート</button>
        </form>
    </div>
    <div class="table__div">
        <table class="table">
            <tr class="tablet__tr">
                <th class="name__th">お名前</th>
                <th class="sex__th">性別</th>
                <th class="mail__th">メールアドレス</th>
                <th class="kind__th">お問合せ種類</th>
                <th class="zero"></th>
            </tr>
            <tr class="table__tr">
                <form class="table__form">
                    <div class="name__form">
                        <td class="name__td">
                            山田 太郎
                        </td>
                    </div>
                    <div class="sex__form">
                        <td class="sex__td">
                            男性
                        </td>
                    </div>
                    <div class="mail__form">
                        <td class="mail__td">
                            test@example.com
                        </td>
                    </div>
                    <div class="kind__form">
                        <td class="kind__td">
                            商品の交換について
                        </td>
                    </div>
                    <div class="detail__form">
                        <td class="detail__td">
                            <button class="detail__button">
                                詳細
                            </button>
                        </td>
                    </div>
                </form>
            </tr>
        </table>
    </div>
</div>
@endsection