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
