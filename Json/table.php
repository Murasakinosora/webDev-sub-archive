<?php
  $conn = mysqli_connect("localhost","root" ,"","dbmain",3306);
  $sql = "SELECT * FROM logins";
  $result = mysqli_query($conn,$sql);
  $json = array();
  while($row=mysqli_fetch_assoc($result)){
    $json[] = $row;
  }
  $cont = json_encode($json);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <table border="1px solid black" >
        <tr>
          <th width="100px">Username</th>
          <th width="100px">Password</th>
        </tr>
        <?php
          $data = $cont;
          $valid = json_decode($data,true);
          if(count($valid)!=0){
            foreach($valid as $val){
              ?>

              <tr>
                <td><?php echo $val['username']?></td>
                <td><?php echo $val['password']?></td>
              </tr>
              <?php
            }
          }
        ?>

      </table>
  </body>
</html>
