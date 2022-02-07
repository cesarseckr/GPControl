<? 
  if($tipo==99){ 
    $sql="SELECT * FROM usuarios where id_usuario='$id_usuario'";
    $sq = $db->query($sql);
    $rows= $sq->fetchAll(); 
    foreach ($rows as $row) {
      $nombre=$row['nombres']." ".$row['apaterno']." ".$row['amaterno'];
      $nbre=$row['nombres'];
      $ap=$row['apaterno'];
      $am=$row['amaterno'];
    }
  }else {
  	echo'<meta http-equiv="Refresh" content="0; url=../../restriccion.php" />';
  	echo '<style>  body{ visibility:hidden;} </style>';
  }
?>