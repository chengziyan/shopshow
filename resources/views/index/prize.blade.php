<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>抽奖</title>
</head>
<body>
<h1>抽奖领红包</h1>
<button id="btn-prize">点我</button>
</body>
</html>
<script src="/static/js/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).on('click','#btn-prize',function () {
        $.ajax({
            url:'/prize/start',
            type:'get',
            dataType:'json',
            success:function (aa) {
                alert(aa.data.prize)
            }
        })
    })
</script>

