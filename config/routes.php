<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return array(
  //'words/([0-9]+)' => 'news/view/$1',
  //'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
  //'news/archive' => 'news/archiveList',
    'add/([a-z]+)/([a-z]+)' => 'words/add/$1/$2', // actionAdd в WordsController
	'add' => 'words/add',
	'list' => 'words/list', // actionList in ProductController
	'cart' => 'words/cart', // actionCart in WordsController
  //'products' => 'product/list', // actionList в ProductController
    'index' => 'words/index', // actionIndex in WordsController
    '' => 'words/index', // actionIndex in WordsController
);