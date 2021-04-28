

<!DOCTYPE html>
<html>
  <head>
    <title>Agency</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
  </head>
  
    <body> 
        
     <?php
       $conn = getConnection();
   $datatable = displayAgents($conn);
   
   function getConnection()
   {
		$conn = mysqli_connect("localhost", "root", "", "travelexperts") or die("can't connect<br />");
		return $conn;
   }
    function displayAgents($conn)
   {
      $result = mysqli_query($conn, "SELECT * FROM agencies");
      
      $datatable = "<table border='1'>";
      while($row = mysqli_fetch_row($result))
      {
         $datatable .= "<tr>";
         foreach ($row as $col)
         {
            $datatable .= "<td>$col</td>";
         }
         $datatable .= "</tr>";
      }
      $datatable .= "</table>";
      return $datatable;
   }
     
      
      echo($datatable);
        ?>
  </body>

</html>
