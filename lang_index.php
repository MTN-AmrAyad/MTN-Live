 <?php
    require_once 'model/db_conn.php';
    require_once 'model/lang.php';
        
      $videos=Lang::get_lang_if_ar('ar');
        
        
        foreach($videos as $vid){
            echo $vid['ar']."<br>";
        }

