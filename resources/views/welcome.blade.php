<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>
<input type="text" id="input">
<button onclick="display()">Display</button>
<div id="text">
    <?php echo htmlspecialchars_decode("<h1>âsasasasasas</h1>"); ?>
</div>
<script>
    var input = document.getElementById('input')
    var text = document.getElementById('text')
    function display () {
        console.log('asasas')
        text.innerHTML = input.value
    }
</script>
</body>
</html>
