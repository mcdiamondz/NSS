<?php

    $sql = "SELECT GROUP_CONCAT(Category ORDER BY CategoryNumber ASC) AS cat, GROUP_CONCAT(CategoryColor ORDER BY CategoryNumber ASC) AS color
            FROM categories";
    $data = $afrigrad->select($sql);
    if($data){
      foreach($data as $value){ $cat = $value['cat'];
        $categories = explode(",",$value['cat']);
        $catcolor = explode(",",$value['color']);

    // CATEGORY DEFINATIONS
    define('CAT_POST_DOC', $categories[0]);
    define('CAT_BACHELORS', $categories[1]);
    define('CAT_MASTERS', $categories[2]);
    define('CAT_PHD', $categories[3]);
    define('CAT_INTERNSHIP', $categories[4]);
    define('CAT_AWARDS', $categories[5]);
    define('CAT_STARTUP', $categories[6]);
    define('CAT_ESSAY', $categories[7]);
    define('CAT_MBA', $categories[8]);
    define('CAT_LOAN', $categories[9]);

    define('COLOR_POST_DOC', $catcolor[0]);
    define('COLOR_BACHELORS', $catcolor[1]);
    define('COLOR_MASTERS', $catcolor[2]);
    define('COLOR_PHD', $catcolor[3]);
    define('COLOR_INTERNSHIP', $catcolor[4]);
    define('COLOR_AWARDS', $catcolor[5]);
    define('COLOR_STARTUP', $catcolor[6]);
    define('COLOR_ESSAY', $catcolor[7]);
    define('COLOR_MBA', $catcolor[8]);
    define('COLOR_LOAN', $catcolor[9]);

  }

}
?>
