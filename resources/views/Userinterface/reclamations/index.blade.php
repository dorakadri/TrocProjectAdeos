<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Reclamations</h1>
   <!-- <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>-->
        <div>
            <a href="{{route('reclamation.create')}}"> Add Reclamation</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>description</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($reclamations as $reclamation )
                <tr>
                    <td>{{$reclamation->id}}</td>
                    <td>{{$reclamation->title}}</td>
                    <td>{{$reclamation->description}}</td>
                    <td>{{$reclamation->status}}</td>
                 
                    <td>
                        <a href="{{route('reclamation.edit', ['reclamation' => $reclamation])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('reclamation.destroy', ['reclamation' => $reclamation])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>