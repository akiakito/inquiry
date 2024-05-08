@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__whole">
    <div class="contact__inner">
        <h2 class="contact__font">
            Contact
        </h2>
    </div>
    <form class="form">
        <div class="form__div">
            <table class="table" border="1" style="border-collapse: collapse">
                <tr class="table__tr">
                    <th class="table__th">
                        お名前
                    </th>
                    <td class="table__td">
                        <input type="text" name="name" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        性別
                    </th>
                    <td class="table__td">
                        <input type="text" name="name" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        メールアドレス
                    </th>
                    <td class="table__td">
                        <input type="email" name="email" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        電話番号
                    </th>
                    <td class="table__td">
                        <input type="tel" name="tel" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        住所
                    </th>
                    <td class="table__td">
                        <input type="text" name="text" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        建物
                    </th>
                    <td class="table__td">
                        <input type="text" name="building" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        建物名
                    </th>
                    <td class="table__td">
                        <input type="text" name="building" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        お問い合わせの種類
                    </th>
                    <td class="table__td">
                        <input type="text" name="kinds" value="サンプルテキスト" />
                    </td>
                </tr>
                <tr class="table__tr">
                    <th class="table__th">
                        お問い合わせ内容
                    </th>
                    <td class="table__td">
                        <input type="text" name="content" value="サンプルテキスト" />
                    </td>
                </tr>
            </table>
            <div class="button">
                <div class="send">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
                <div class="Fixed">
                    <button class="form__button-submit" type="submit">修正</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection