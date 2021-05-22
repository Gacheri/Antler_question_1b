<html>  
<body>  
<form method="post">  
Enter First Number:  
<input type="number" name="a" /><br><br>  
Enter Second Number:  
<input type="number" name="b" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['a'];  
        $number2 = $_POST['b'];  
        $sum =  $number1+$number2;     
    echo "The sum of $number1 and $number2 is: ".$sum;   
}  
?>  
</body>  
</html> 