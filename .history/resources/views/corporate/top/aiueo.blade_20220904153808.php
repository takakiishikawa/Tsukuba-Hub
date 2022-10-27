<head>
    <body>
        @foreach ($nice as $nice)
        <p>{{$nice->user_id}}</p>
        <p>{{$nice->engineer_name}}</p>
        <p>{{$nice->name}}</p>
        @endforeach
    </body>
</head>
