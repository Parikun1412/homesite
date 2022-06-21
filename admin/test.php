<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<button onclick="WriteFile()">click</button>
</body>
<script>
    function WriteFile() {
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var fh = fso.CreateTextFile("c:\\Test.bmp", true);
        fh.WriteLine("Some text goes here...");
        fh.Close();
    }
</script>

</html>