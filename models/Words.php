<?php


/*
 
* This is model News

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

 */

class Words {
        /*
         * Returns an array of words items
         */
		 
    public static function getWordsList() {

               $db = Db::getConnection();
               $wordsList = array();

               $result = $db->query('SELECT id, enwd, ruwd FROM enruword ORDER BY id');

               //var_dump($db->errorInfo());

               //var_dump($db);

               $i = 0;

               if ($result !== FALSE) {

                  while ($row = $result->fetch()) {
					  
                         $wordsList[$i] ['id'] = $row['id'];
                         $wordsList[$i] ['enwd'] = $row['enwd'];
                         $wordsList[$i] ['ruwd'] = $row['ruwd'];
                         $i++;

                  }

               }

               return $wordsList;

         }


    
         /*
          * Returns single words item with specified id
          * @ param integer $id
          */


         public static function getWordsItemById($id) {

               $db = Db::getConnection();
               if ($id) {
                  $result = $db->query('SELECT * FROM enruword WHERE id='.$id);
                //$result->setFetchMode(PDO::FETCH_NUM);
                  $result->setFetchMode(PDO::FETCH_ASSOC);
                  $wordsItem = $result->fetch();
        
                  return $wordsItem;
               }

         }


 /**********************************************************************/
 /*
  * ������� insert_word() ��������� 2(���) ��������� �� �������� ���������, ���������� �� �����
  * ������������ � ��������������� ����. ����� ���� ��� ��������� �� ������������ ��������� ������
  * � ���� ��� ��������� (�. �. ������ ���������), ��� ������� �� � ����. ����� �������
  * � ���� ������ ���������� ����� �����.
  ******************************************************************************/
	  public static function insert_word($en, $rus) {
		  
		  // include('connect_dictionary.php');
		  
		  $db = Db::getConnection();
		  $result = $db->query("SELECT enwd FROM enruword WHERE enwd = '$en'");
		  $result->setFetchMode(PDO::FETCH_ASSOC);
		  $row_en = $result->fetch();
		  
		  if (!$row_en['enwd'] && $en != '') {
			  $bool = true;
			  $db->query("INSERT INTO enruword (enwd, ruwd)
                                     VALUES ('$en', '$rus')");
			  
		  } else {
			  $bool = false;
		  }
		  return $bool;
		  
		  //mysqli_close($connection);
	  }
 /*********************************************************************************************/


}
