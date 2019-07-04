<?php

//echo  phpinfo();

?>

<form name="fibo" method="POST" action="recursiveFibo.php">

    Enter a number
    <input type="text" name="number" value="" />
    <input type="submit" value="Send" />
</form>



<form name="fibo" method="POST" action="recursiveString.php">

    Enter a number
    <input type="text" name="string" value="BogdanRules" />
    <input type="submit" value="Send" />
</form>

<br/>

<form name="fibo" method="POST" action="recursiveDirectory.php">

    Enter a path
    <input type="text" name="path" value="<?php echo dirname(__FILE__); ?>" />
    <input type="submit" value="Send" />
</form>


<!--<a href="recursiveDirectory.php">Go to Recursive Directory</a>;-->
