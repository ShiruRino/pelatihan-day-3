<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CRUD Sederhana</h1>
    {{-- @dd($cruds) --}}
    <a href="{{route('crud.create')}}">Create</a>
    <table border="1" cellpadding='5' cellspacing ='0'>
        <thead>
            <tr>
                <th>No</th>
                <th>Text Field</th>
                <th>Radio Field</th>
                <th>Checkbox Field</th>
                <th>Select Field</th>
                <th>Date Field</th>
                <th>File Field</th>
                <th>Textarea</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($cruds as $crud)
        <tbody>
            <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->text_field}}</td>
                <td>{{$crud->radio_field}}</td>
                @if (is_array($crud->checkbox))
                <td>{{implode(',', $crud->checkbox)}}</td>
                @else
                <td></td>
                @endif
                <td>{{$crud->select_field}}</td>
                <td>{{$crud->date_field}}</td>
                @if ($crud->file_field)
                <td><img src="{{asset('storage/' . $crud->file_field)}}" alt="file" width="150px" height="auto"></td>
                @else
                <td></td>
                @endif
                <td>{{$crud->textarea}}</td>
                <td><a href="{{route('crud.edit', $crud->id)}}">Edit</a><form action="{{route('crud.destroy', $crud->id)}}" method="post">@csrf @method('DELETE')<button type="submit" onclick="return confirm('aryusur?')">Delete</button></form></td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <script>
        function onClick(id){

        }
    </script>
</body>
</html>
