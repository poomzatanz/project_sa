
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ระบบวิเคราะห์ข้อมูลความคิดเห็นที่มีต่อมหาวิทยาลัยเทคโนโลยีพระจอมเกล้า
		พระนครเหนือจากเว็บไซต์สำหรับวัยรุ่นโดยเฉพาะ
		</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
   
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

<!-- boxed bg -->
<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	

	
</head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
.select-style {
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
</style>

<body>
	
<div id="wrapper">
	<!-- start header -->
	<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class=""></i>ระบบวิเคราะห์ข้อมูลความคิดเห็นที่มีต่อมหาวิทยาลัยเทคโนโลยีพระจอมเกล้า
									พระนครเหนือจากเว็บไซต์สำหรับวัยรุ่นโดยเฉพาะ
									</li>
							</ul>
						</div>
						<div class="col-md-6">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Click to start searching"></span>
							</form>
						</div>


						</div>
					</div>
				</div>
			</div>	
			
					
			<div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="index.php"><img src="img/logo.png" alt="" width="100" height="100" /></a>
                </div>
				<div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">หน้าหลัก</a></li>
						<li><a href="index.php#content">ที่มาของระบบ</a></li>
						<li><a href="index.php#r1">ความสามารถของระบบ</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">แสดงข้อมูล <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								 <li><a href="table.php">แสดงข้อมูลทั้งหมด</a></li>
								 <li><a href="dashbord/html/topic.php">แสดงข้อมูลกราฟ</a></li>
								 <li><a href="top10p.php">แสดง Top 10 ความคิดเห็นทางด้านบวก</a></li>
                                  <li><a href="top10n.php">แสดง Top 10 ความคิดเห็นทางด้านลบ</a></li>
								
                            </ul>
						</li>
					   <li><a href="get_data.php">เก็บข้อมูล</a></li>
						<li><a href="user.php">จัดการสมาชิก</a></li>
                        <li><a href="team.php">ทีมงาน</a></li>
                       
                        <li><a href="processout.php">ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>

	

	
	
	<footer>
	<div class="container">
		<div class="row">
	  
  <canvas id="chartOneContainer" width="600" height="400"></canvas>
	</div>
	</footer>
</div>

<?php
	  
 $conn = new mysqli("db4free.net","poomzaadekd2023","poomzaadekd2023","dekdanalatic2023");
      mysqli_set_charset($conn ,"UTF8");  
      $result_array = array();
	$sql = "SELECT web.pk_web, topic, count(*) FROM web INNER JOIN coment1 ON web.pk_web = coment1.pk_web  where coment1.text_a = 'negative' GROUP BY web.pk_web ORDER BY count(*) DESC LIMIT 10";
	//	echo $sql;

    $result = $conn->query($sql);
    
    /* If there are results from database push to result array */
    $datesave = array();
	$totol = array();
    if ($result->num_rows > 0) {
    
        while($rs = $result->fetch_assoc()) {
                
			$datesave[] = "\"".$rs['topic']."\""; 
			$totol[] = "\"".$rs['count(*)']."\"";
			
        }
    
    }
	$datesave = implode(",", $datesave); 
	
$totol = implode(",", $totol); 

    /* send a JSON encded array to client */

    $conn->close();
    
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
 
 <script>
	 var optionsOne = {
type: 'horizontalBar',
data: {
 labels: [<?php echo $datesave;?>],
 datasets: [ 
		 {
			 label: '10 อันดับแรกความคิดเห็นเชิงลบ',
			 data: [<?php echo $totol?>],
			 backgroundColor: "#FA6103",
			 borderWidth: 2
		 }
	 ]
},
options: {
    scales: {
        xAxes: [{
            ticks: {
				reverse: false,
          stepSize: 10
            }
        }]
    },
onClick:function(e){
    var activePoints = mychart.getElementsAtEvent(e);
	var selectedIndex = activePoints[0]._index;
	window.location="table2.php?id="+this.data.labels[selectedIndex];
   


}
}
}

var optionsTwo = {
type: 'line',
data: {
 labels: ["Green", "Purple", "Orange"],
 datasets: [ 
		 {
			 label: 'Colors Two',
			 data: [8, 3, 7],
			 borderWidth: 1
		 }
	 ]
},
options: {
 scales: {
	 xAxes: [{
	 ticks: {
				 display: true
	 }
   }]
 }
}
}

var ctxOne = document.getElementById('chartOneContainer');
var mychart = new Chart(ctxOne, optionsOne);

var ctxTwo = document.getElementById('chartTwoContainer');
new Chart(ctxTwo, optionsTwo);
	 </script>    
    


        
  
    <script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

