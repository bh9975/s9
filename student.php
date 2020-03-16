<?php
$conn=pg_connect("host=localhost port=5432  dbname=stud user=postgres password=123456");
if(!$conn)
{

echo("An error.....in connection");
}
else
{
echo("connection succesfull");
	  
$cname1=$_POST['txt1'];
$s1=pg_query("select stud1.sname from stud1,comp,sc
                                    where stud1.sno=sc.sno and
                                    comp.cno=sc.cno
                                   and comp.cname='$cname1' and sc.rank=1")or die(pg_error());

  


	    while($r=pg_fetch_assoc($s1))
   		{
    			 
         		 echo $r['sname'];   
         		
        		  
    		}
 	echo("</table>");
 }
?>
