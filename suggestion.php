<?php

  $peoples = ["Alex", "Sorin", "Andrei", "Alexandra", "Alina", "Robert", "Marius", "Bianca", "Vali", "Catalin"];

  // Get query string
  $q = $_REQUEST['q'];
  $suggestion = "";

  // Get suggestions
  if ($q !== '') {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($peoples as $people) {
      if (stristr($q, substr($people, 0, $len))) {
        if ($suggestion === '') {
          $suggestion = $people;
        }else{
          $suggestion .= ", $people";
        }
      }
    }
  }

  echo $suggestion === '' ? 'No Suggestion' : $suggestion;

?>
