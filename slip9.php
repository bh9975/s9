<?php
$uname=$_REQUEST['uname'];
$email=$_REQUEST['email'];
$pos=strpos($email,'@');

echo "hello";

  if($pos==false)
      echo"email does not contain @ symbol<br>";
  else
{
   $earr=split('@',$email);
  if(count($earr)>2)
  echo"email contains more than one @ symbol<br>";
 else
  {
  echo"full name:".ucwords($uname)."<br>";
  echo"Email:$email";
}
}
?>
