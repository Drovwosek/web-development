<?php
  header("Content-Type: text/plain");
  //проверить получение $text = $_GET['text']; а пока так
  $text= 'ew';
  echo preg_replace('/^ +| +$|( ) +/m', '$1', $text);
?>
