<!DOCTYPE html>
<html>

<head>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
    </style>
</head>

<body>
    <br />
    <div class="container box" style="width: 970px;">
        <h3 align="center">El usuario con email: {{ $user }}
        solicitó el registro de la categoría:</h3><br>
       <h3 align="center" >{{ $category_name }}</h3> 
    </div>
</body>

</html>
