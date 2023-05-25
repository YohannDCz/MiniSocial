<?php

require_once 'src\controller\groupController.php';

// déclaration variable globale
global $split_url;

// router dans la catégorie user
switch ($split_url[2]) {
    case 'Create':
      //require la page profil
      require_once 'template\group\group_create.php';
      break;
    case 'List':
      //require la page signup
      require_once 'template\group\group_list.php';
      break;
    case 'Page':
      //require la page login
      require_once 'template\group\group_page.php';
      break;
    default :
      echo 'DEFAULT GROUP PAGE';
      break;
}