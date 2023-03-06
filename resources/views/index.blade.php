<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])
</head>
<body>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1a</td>
                    <td>a</td>
                    <td>b</td>
                </tr>
                <tr>
                    <td scope="row">1b</td>
                    <td>c</td>
                    <td>d</td>
                </tr>
            </tbody>
    </table>
    <button class="btn btn-primary">submit</button>
    <button class="btn btn-danger">Delete</button>
</body>
</html>
