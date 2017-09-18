<?php
if($_POST){
    if(isset($_POST['insert'])){
        insert();
    }elseif(isset($_POST['select'])){
        select();
    }
}
 
    function select()
    {
       echo "The select function is called.";
    }
    function insert()
    {
       echo "The insert function is called.";
    }
 
?>
 <html>
 <body>
 <form method=post>

<input type="submit" name="insert" value="insert" />
<input type="submit"  name="select" value="select" />
 </form>

 

 
