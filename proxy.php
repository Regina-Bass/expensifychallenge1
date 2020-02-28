<? php
  $url = "https://www.expensify.com/api?command=Authenticate";
  $page = file($url);
  
  foreach($page as $part){
    echo $part;
  }

?>
