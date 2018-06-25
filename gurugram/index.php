<header style="background-color:#222; color:#fff; text-align:center; font-size:20px; font-family:tahoma; text-decoration:none; padding:10px 10px 10px 10px;">
<p><a href="prime.php" style="color:#fff; text-decoration:none;">Q-1</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="validate.php" style="color:#fff; text-decoration:none;">Q-2</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="color:#fff; text-decoration:none;">Q-3</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="palin.php" style="color:#fff; text-decoration:none;">Q-4</a></p>
</header>

<br><br><br><br><br>
<h1 style="text-align:center; font-size:30px; color:#222; font-family:tahoma;">Small PHP Applications for fetching all the url links for an external websites</h1><br><br><br><br><br>
  <form method="POST" action="#">
  <input type="text" placeholder="enter the website" name="link" style="width:100%; padding:20px 20px 20px 20px; text-align:center;" required>
    
                        <button type="submit" class="btn btn-primary" name="links" style="background-color:#000; color:#fff; width:100%; padding:20px 20px 20px 20px;text-align:center; cursor:pointer;">
                         Get Links
                        </button>
                    
  </form>
  <?php
if(isset($_POST['links']))
{
$domdoc = new DOMDocument();
$htmllinks = file_get_contents($_POST['link']);
@$domdoc -> loadHTML($htmllinks);
$pathx = new DOMXPath($domdoc);
$links = $pathx->evaluate("/html/body//a");

for ($x = 0; $x < $links->length; $x++) 
{
       $ahref = $links->item($x);
       $urllink = $ahref->getAttribute('href');
       echo '<a href="'.$urllink.'">Link-'.$x.' - '.$urllink.'</a><br />';
}}
?>