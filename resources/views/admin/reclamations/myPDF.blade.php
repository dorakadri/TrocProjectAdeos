<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1> Reclamations list  </h1>
  
    <table class="table table-bordered">
        <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Responses</th>
        </tr>
        @foreach($reclamations as $reclamation)
            <tr>
               <td>{{ $reclamation->title }}</td>
                                        <td>{{ $reclamation->description }}</td>
                                        <td>{{ $reclamation->status }}</td>
                                        <td>
                                            @foreach($reclamation->reponses as $reponse)
                                                {{ $reponse->description }}<br>
                                            @endforeach
                                        </td>
            </tr>
        @endforeach
    </table>
</body>
</html>