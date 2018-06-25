<header style="background-color:#222; color:#fff; text-align:center; font-size:20px; font-family:tahoma; text-decoration:none; padding:10px 10px 10px 10px;">
<p><a href="prime.php" style="color:#fff; text-decoration:none;">Q-1</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="validate.php" style="color:#fff; text-decoration:none;">Q-2</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#fff; text-decoration:none;">Q-3</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="palin.php" style="color:#fff; text-decoration:none;">Q-4</a></p>
</header>

<br><br><br><br><br>

<br><br><br><br><br>
<h1 style="text-align:center; font-size:30px; color:#222; font-family:tahoma;">Small PHP App for  printing all primes smaller than or equal to the entered number</h1><br><br><br><br><br>
  <form method="POST" action="#">
  <input type="text" placeholder="enter the website" name="num" style="width:100%; padding:20px 20px 20px 20px; text-align:center;" required>
    
                        <button type="submit" class="btn btn-primary" name="prime" style="background-color:#000; color:#fff; width:100%; padding:20px 20px 20px 20px;text-align:center; cursor:pointer;">
                         Get numbers
                        </button>
                    
  </form>


<?php
if(isset($_POST['prime']))
{
$x=$_POST['num'];
for($j=1;$j<=$x;$j++){ 
$count = 0; 
          for($k=1;$k<=$j;$k++){
                if($j % $k==0){ 

                      $count++;
                }
          }
        if($count==2){

               print $j.",  ";
        }
    }
echo "these are prime numbers";
	} 

?>
