<?php
/**
 * Created by PhpStorm.
 * User: MARTIN
 * Date: 03/02/2019
 * Time: 16:19
 */
?>
<html>
<head>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" >-->
<!--    </script>-->


</head>
<body>
<?php $test="name2"; ?>
<a href="" onclick="eliminate('<?php echo $test; ?>')">delete</a>


<script>
    function eliminate(test) {
        var b = test;
        alert(b);
    }
</script>
</body>
</html>
