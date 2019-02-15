{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: Figoro--}}
{{--* Date: 15.02.2019--}}
{{--* Time: 16:56--}}
{{--*/--}}

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
    @foreach ($tasks as $task)

        <li>
            <a href="tasksdb/{{$task->id}}">
                {{ $task->body }}
            </a>
        </li>

    @endforeach
</ul>

</body>
</html>