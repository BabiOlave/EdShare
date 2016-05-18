<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
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
            label{
                margin-right: 20px;
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
<form action="<?php echo e(URL::to('upload')); ?>" method="post" enctype="multipart/form-data">
<label>select file to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value"upload" name="submit">
        <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
</form>
</div>
            </div>
        </div>
    </body>
</html>
