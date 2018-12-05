<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo Upload File - Toidicode.com</title>
    <meta name="author" content="ThanhTai">
</head>
<body>

<form action="{{ route('uploadFile') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="filesTest" required>
    <br/>
    <input type="submit" value="upload">
</form>
</body>
</html>
