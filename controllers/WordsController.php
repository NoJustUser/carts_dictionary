<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ROOT.'/models/Words.php';

class WordsController {

    public function actionIndex() {
        $wordsList = array();
        $wordsList = Words::getWordsList(); 
        require_once (ROOT.'/views/words/index.php');
        //echo "actionIndex";
		//echo '<pre>';
        //print_r($newsList);
        //echo '<pre>';

        return true;

    }

    public function actionAdd($en = '', $rus = '') {
		
		$en = $_POST['add_en'];
		$rus = $_POST['add_ru'];
		
		if ($en) {
		    $bool = Words::insert_word($en, $rus);
			require_once (ROOT.'/views/words/index.php');
		}
		unset($_POST);
		
        return true;

    }



public function actionList() {
        $wordsList = array();
        $wordsList = Words::getWordsList(); 
        require_once (ROOT.'/views/words/listing.php');
        //echo "actionIndex";
		//echo '<pre>';
        //print_r($newsList);
        //echo '<pre>';

        return true;

    }
	
	
public function actionCart() {
	
	    $count = count(Words::getWordsList()); // Подсчет кол-ва всех строк в базе данных (кол-во слов)
		$id = rand(1, $count);
		$wordsItem = Words::getWordsItemById($id);
        require_once (ROOT.'/views/words/cart.php');


        return true;

    }
}



