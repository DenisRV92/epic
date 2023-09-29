<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
{{--<div>--}}
    <div class="container mt-xxl-5">
        <div class="d-flex justify-content-around">
            @foreach($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" data-type="{{$category->type}}"
                           value="{{$category->slug}}" id="flexCheckDefault"
                           @if($category->slug !== 'besplatnie') checked @endif>
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$category->title}}
                    </label>
                </div>
            @endforeach
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Приложение</th>
                <th scope="col">Категории</th>
            </tr>
            </thead>
            <tbody>
            @foreach($objects as $key=> $object)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$object->title}}</td>
                    <td>
                        {{implode(', ', Arr::pluck($object->categories, 'title'))}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

<script>

    $('input[type="checkbox"]').change(function () {
        let system = [];
        $('input[type="checkbox"]:checked').each(function () {
            const arr = {
                value: $(this).val(),
                type: $(this).attr("data-type"),
            };
            system.push(arr);
        });
        ;

        let newUrl = '';
        let priceUrl = '';
        let systemUrl = '';
        for (i = 0; i < system.length; i++) {
            if (system[i]['type'] == 'price') {
                priceUrl += system[i]['value'] + ' ';
            }
            if (system[i]['type'] == 'system') {
                systemUrl += system[i]['value'] + ' ';
            }
        }
        priceUrl = priceUrl.trim().replace(/\s/g, "-i-") + '/';
        systemUrl = systemUrl.trim().replace(/\s/g, "-i-");

        newUrl = priceUrl + systemUrl;
        history.pushState(null, null, '/');
        history.pushState(null, null, newUrl);

        $.ajax({
            url: window.location.href,
            method: 'GET',
            success: function (data) {
                $('.table').html(data);
            },
            error: function (error) {
                console.error(error);
            }
        });

    });
</script>
</body>
</html>
