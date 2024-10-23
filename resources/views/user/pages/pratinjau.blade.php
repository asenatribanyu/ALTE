<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $file->name }} | Arsip Lab Teknik Elektro</title>
</head>

<body>
    <embed src="{{ asset('storage/formulir/' . $file->file . '#toolbar=0') }}" type="application/pdf" width="100%"
        height="1000px">
</body>

</html>
