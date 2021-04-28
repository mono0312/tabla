<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Companies</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME COMPANY</th>
                        <th>NIT COMPANY</th>
                        <th>ADDRESS COMPANY</th>
                        <th>LOGO COMPANY</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $companies)
                        <tr>
                            <td> {{ $companies->id }} </td>
                            <td> {{ $companies->name }} </td>
                            <td> {{ $companies->nit }} </td>
                            <td> {{ $companies->address }} </td>
                            <td> <img src="{{ asset('', $companies->logo) }}"> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>       
        </div>
    </div>
</div>  

</body>
</html>