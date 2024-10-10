<?php
session_start();
//error_reporting(0);
include('includes/config.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Student Login</title>
    <link rel="stylesheet" href="css/student.css">
  </head>
  <body>
    <div class="center">
        <h1> <font color="#0d10a3"> Student Login  </font></h1>
        <form action="result.php" method="post">
          <div class="txt_field">
            <input type="text" name="rollid" required>
            <span></span>
            <label>Roll ID</label>
          </div>
         
          <div class="txt_field">
            <select name="class" class="" id="default" required="required">
<option value="">Select Class</option>
<?php 
// $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
// $db = mysql_select_db("srms", $connection); 
$sql = "SELECT * from tblclasses";
$query = $dbh->prepare($sql);
$query->execute();
// $results = mysql_fetch_array($query);
$results=$query->fetchAll(PDO::FETCH_OBJ);
// echo $results;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName	); ?>&nbsp; -<?php echo htmlentities($result->Section); ?></option>
<?php }} ?>
 </select>
          </div>
          <input type="submit" value="Check Result">
      
      
        
        
    
        
      </form>
    </div>

  </body>
</html>

