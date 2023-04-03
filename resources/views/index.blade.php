<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

<div class="card">
    <h5 class="card-header">Laravel</h5>
        <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leads as $lead)
                        <tr>
                            <td> {{$lead->userId}} <td>
                            <td> {{$lead->title}} <td>
                            <td> {{$lead->body}} <td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>      
        {{ $leads->links() }}
    </body>
  
</html>
<script src="{{ asset('js/app.js') }}"></script>