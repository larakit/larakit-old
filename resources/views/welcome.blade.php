<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            td {
                text-align: center;
                background: #ececec;
            }
            td:first-child {
                text-align: left;
                background: #ffffff;
            }
            .img-thumbnail{
                max-width: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
                <table class="table table-bordered">
                    <tr>
                        <th>
                            Метод<br>(верт.)
                        </th>
                        <th width="10%">
                            Оригинал<br>(верт.)
                        </th>
                        <th width="10%">
                            Результат<br>(верт.)
                        </th>
                        <th width="10%">
                            Оригинал<br>(гориз.)
                        </th>
                        <th width="10%">
                            Результат<br>(гориз.)
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <h4>HelperImage::resizeByWidth($original, 100);</h4>
                            <br>
                            Вписываем изображение в указанную ширину <br>
                            Высота какая получится такая и будет<br>
                            Пример: фотки на аватарках в контактике
                        </td>
                        <td>
                            <strong>150x300</strong><br>
                            <img class="img-thumbnail" src="/v.jpg">
                        </td>
                        <td>
                            <strong>100x200</strong><br>
                            <img class="img-thumbnail" src="/1_resizeByWidth_v.jpg">
                        </td>
                        <td>
                            <strong>300x150</strong><br>
                            <img class="img-thumbnail" src="/h.jpg">
                        </td>
                        <td>
                            <strong>200x10</strong><br>
                            <img class="img-thumbnail" src="/1_resizeByWidth_h.jpg">

                        </td>
                    </tr>
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<h4>HelperImage::resizeIgnoringAspectRatio($original, 100, 100);</h4>--}}
                            {{--<br>--}}
                            {{--Насильно вписываем изображение без учета пропорций в указанные рамки--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>150x300</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/2_resizeIgnoringAspectRatio_v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>300x150</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/h.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/2_resizeIgnoringAspectRatio_h.jpg">--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<h4>HelperImage::resizeImgInBox($img, $w, $h, $can_upsize);</h4>--}}
                            {{--<br>--}}
                            {{--Исходная картинка сжимается до тех пор пока не начнет целиком входить в указанные рамки c сохранением пропорций--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>150x300</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>50x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/3_resizeImgInBox_v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>300x150</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/h.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x50</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/3_resizeImgInBox_h.jpg">--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<h4>HelperImage::cropImgInBox($img, $w, $h, $can_upsize);</h4>--}}
                            {{--<br>--}}
                            {{--Уменьшаем размер исходного изображения с сохранением пропорций так,--}}
                            {{--чтобы новое получилось вписанным в указанный размер. <br>--}}
                            {{--Там где изображение уже отсутствует - добиваем белым цветом до указанного размера--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>150x300</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/4_cropImgInBox_v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>300x150</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/h.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/4_cropImgInBox_h.jpg">--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<h4>HelperImage::cropBoxInImg($img, $w, $h, $can_upsize);</h4>--}}
                            {{--<br>--}}
                            {{--Уменьшаем размер исходного изображения с сохранением пропорций так,чтобы новое получилось описанным вокруг указанного размера. <br>--}}
                            {{--* Там где изображение будет за границами рамки оно будет просто обрезано с центровкой посредине картинки--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>150x300</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/5_cropBoxInImg_v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>300x150</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/h.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/5_cropBoxInImg_h.jpg">--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<h4>HelperImage::resizeBoxInImg($original, 100, 100);</h4>--}}
                            {{--<br>--}}
                            {{--Указанная рамка должна помещаться внутрь конечного изображения--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>150x300</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>200x100</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/6_resizeBoxInImg_v.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>300x150</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/h.jpg">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<strong>100x200</strong><br>--}}
                            {{--<img class="img-thumbnail" src="/6_resizeBoxInImg_h.jpg">--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                </table>
        </div>
    </body>
</html>
