<?php


	$conn = mysqli_connect("db4free.net","poomzaadekd2020","0811582889zX","dekdanalatic2020");
	mysqli_set_charset($conn, "utf8");
    for($i = 1 ; i<=12 ; $i++){
        $sql = "SELECT SUBSTRING(time, 4, 2),
        count(*) AS total,
        sum(case when topic_acc = 'normal' then 1 else 0 end) AS normal,
        sum(case when topic_acc = 'positive' then 1 else 0 end) AS pos,
            sum(case when topic_acc = 'negative' then 1 else 0 end) AS nave
        FROM pre_web
        GROUP BY SUBSTRING(time, 4, 2)
        ORDER BY SUBSTRING(time, 4, 2) ASC";
        echo $sql;
        $result = mysqli_query($conn, $sql);
 
        if (mysqli_num_rows($result) > 0) {
     
            while($row = mysqli_fetch_assoc($result)) {
              

            }
        }
        mysqli_close($conn);
    }
	
   
    

?>
