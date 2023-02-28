<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2d</title>
</head>
<body>

    <table cellspacing="0px" cellpadding="0px" border="1px">
    <?php
      for($i=1;$i<=5;$i++)
	  {
          echo "<tr>";
          for($j=1;$j<=5;$j++)
		  {
          $total=$i+$j;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
    </table>
    
</body>
</html>