<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }
            h1{
                text-align:center;
            }


            body{
    background:url('../images/imagensubir.jpg') repeat-x top center;
    min-height:900px;
    font:14px/1.3 'Segoe UI',Arial, sans-serif;
    
    padding:10px;
    background-size: cover;
}

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .quote{
                font-size: 24px;
            }



            form{
                background:%f5f5f5;
                padding: 20px;
                border-radius: 10px;
            }
            input[type="submit"]{
                background:#0098cb;
                border:0px;
                border-radius: 5px;
                color: #fff;
                padding: 10px;
                margin:20px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            
                <div class="content">
<form action="{{ URL::to('upload')}}" method="post" enctype="multipart/form-data">
<h1>Seleccione el archivo:</h1>
        <input type="file" name="file" id="file">
        <input type="submit" value"upload" name="submit">
        <input type="hidden" value="{{ csrf_token()}}" name="_token">
</form>
</div>
            </div>
        </div>
    </body>
</html>
