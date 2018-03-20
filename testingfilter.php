<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>JS File Upload with Progress</title>
    <style>
    .container {
        width: 500px;
        margin: 0 auto;
    }
    .progress_outer {
        border: 1px solid #000;
    }
    .progress {
        width: 20%;
        background: #DEDEDE;
        height: 20px;
    }
    </style>
</head>
<body>
    <div class='container'>
        <p>
            Select File: <input type='file' id='_file'> <input type='button' onchange="test()" id='_submit' value='Upload!'>
        </p>
        <div class='progress_outer'>
            <div id='_progress' class='progress'></div>
        </div>
    </div>
    <script src='js/uploadimage.js'></script>
</body>
</html>
