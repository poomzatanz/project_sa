<?php include('config.php'); include('paginator.class.php'); ?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ระบบวิเคราะห์ข้อมูลความคิดเห็นที่มีต่อมหาวิทยาลัยเทคโนโลยีพระจอมเกล้า
		พระนครเหนือจากเว็บไซต์สำหรับวัยรุ่นโดยเฉพาะ
		</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

   
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
a {
	
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
<script>
	$(".custom-select").each(function() {
  var classes = $(this).attr("class"),
      id      = $(this).attr("id"),
      name    = $(this).attr("name");
  var template =  '<div class="' + classes + '">';
      template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
      template += '<div class="custom-options">';
      $(this).find("option").each(function() {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
      });
  template += '</div></div>';
  
  $(this).wrap('<div class="custom-select-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
  $(this).parents(".custom-options").addClass("option-hover");
}, function() {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function() {
  $('html').one('click',function() {
    $(".custom-select").removeClass("opened");
  });
  $(this).parents(".custom-select").toggleClass("opened");
  event.stopPropagation();
});
$(".custom-option").on("click", function() {
  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select").removeClass("opened");
  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
});
	</script>
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
                    <a class="" href="index.html"><img src="img/logo.png" alt="" width="100" height="100" /></a>
                </div>
             	
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="../../index.php">หน้าหลัก</a></li>
						<li><a href="../../index.php#content">ที่มาของระบบ</a></li>
						<li><a href="../../index.php#r1">ความสามารถของระบบ</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">แสดงข้อมูล <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                 <li><a href="../../table.php">แสดงข้อมูลทั้งหมด</a></li>
                                 <li><a href="#">แสดงข้อมูลกราฟ</a></li>
                                <li><a href="../../top10p.php">แสดง Top 10 ความคิดเห็นทางด้านบวก</a></li>
                                  <li><a href="../../top10n.php">แสดง Top 10 ความคิดเห็นทางด้านลบ</a></li>
								
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">แสดงข้อมูลกราฟ  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="topic.php"><i class=""></i> วิเคราะห์หัวข้อกระทู้</a> </li>
                            <li> <a href="texto.php"><i class=""></i> วิเคราะห์เนื้อหากระทู้</a></li>
                            <li> <a href="coment.php"><i class=""></i> วิเคราะห์ความคิดเห็นของความคิดเห็น</a></li>
                            <li> <a href="text_class.php"><i class=""></i> การจัดกลุ่ม</a></li>
                            <li> <a href="cut.php"><i class=""></i> คำที่พูดถึงบ่อย</a></li>
								
                            </ul>
						</li>
						<li><a href="../../get_data.php">เก็บข้อมูล</a></li>
						<li><a href="../../user.php">จัดการสมาชิก</a></li>

                        <li><a href="../../team.php">ทีมงาน</a></li>
                       
                        <li><a href="../../processout.php">ออกจากระบบ</a></li>
                    </ul>
                </div>
             
             
            </div>
         
        </div>
      
    </header>
    <?php

      $result_array = array();
	$sql = "SELECT count(*),text FROM cut_text WHERE cut_text.text != 'ข้อ' and cut_text.text != 'พี่' and cut_text.text != 'รอบ' and cut_text.text != 'รุ่น' and cut_text.text != 'แนว' and cut_text.text != 'เครื่อง' and cut_text.text != 'กล'  and cut_text.text != 'แบบ' and cut_text.text != 'ปี' and cut_text.text != 'เรื่อง' and cut_text.text != 'น้อง'   GROUP BY cut_text.text ORDER BY count(*) DESC LIMIT 10";


    $result = $db->query($sql);
    
    /* If there are results from database push to result array */
    $datesave = array();
	$totol = array();
    if ($result->num_rows > 0) {
    
        while($rs = $result->fetch_assoc()) {
                
			
			
        }
    
    }
    
    /* send a JSON encded array to client */

  
    
    ?>
	<!-- end header -->
	<section id="featured" class="bg">
    <!-- start slider -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!--<div class="row" style=" right: 3050px;">
        <div class="c">
            <ul class="nav navbar-nav">
                <li class="text-right"><i class='far fa-smile-beam' style='font-size:40px;color:#23E31D;'></i><span class="counter text-success" style="color:#23E31D ;font-size:40px;"><?php echo $totols[1];?></span></li>
                <li class="text-right"><i class='far fa-angry' style='font-size:40px;color:#FA6103;' ></i> <span class="counter text-purple" style="color:#FA6103;font-size:40px;"><?php echo $totols[2];?></span></li>
                <li class="text-right"><i class='far fa-meh-blank' style='font-size:40px;color:#3e95cd;' ></i> <span class="counter text-info" style="color:#3e95cd ;font-size:40px;"><?php echo $totols[0];?></span></li>
           
            </ul>
        </div>
          
    </div>-->
   
	<!-- start slider -->
	<div class="container">
	  
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <div>
                                <h2></h2>
                                <h1 data-shadow='dang!'>คำที่พูดถึงบ่อย</h1>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline text-center font-12">
                                   
                                </ul>
                               
                            </div>
                           	  
  <canvas id="chartOneContainer" width="600" height="400"></canvas>
                    
                        </div>
                       

                      

                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
						<br><br><br><br><br><br>
						<table id="customers" align="center">
			<thead>
				<tr>
				<th>คำ</th>
					<th>จำนวน</th>
				
					
				</tr>
			</thead>
			<tbody>
				<?php 
				
           
                
                $pages = new Paginator;
                $pages->default_ipp = 10;
                $sql_forms = $db->query("SELECT count(*),text FROM cut_text WHERE cut_text.text != 'ข้อ' and cut_text.text != 'พี่' and cut_text.text != 'รอบ' and cut_text.text != 'รุ่น' and cut_text.text != 'แนว' and cut_text.text != 'เครื่อง' and cut_text.text != 'กล'  and cut_text.text != 'แบบ' and cut_text.text != 'ปี' and cut_text.text != 'เรื่อง' and cut_text.text != 'น้อง'   GROUP BY cut_text.text  HAVING COUNT(*) > 10 ORDER BY count(*) DESC ");
				$pages->items_total = $sql_forms->num_rows;
                $pages->mid_range = 10;
                $pages->paginate();	
	

			
			 $sqli = "SELECT count(*),text FROM cut_text WHERE cut_text.text != 'ข้อ' and cut_text.text != 'พี่' and cut_text.text != 'รอบ' and cut_text.text != 'รุ่น' and cut_text.text != 'แนว' and cut_text.text != 'เครื่อง' and cut_text.text != 'กล'  and cut_text.text != 'แบบ' and cut_text.text != 'ปี' and cut_text.text != 'เรื่อง' and cut_text.text != 'น้อง'   GROUP BY cut_text.text  HAVING COUNT(*) > 10 ORDER BY count(*) DESC ".$pages->limit."";
		   //echo $sqli;
		   
			$result	=	$db->query($sqli);
			
					$n  =   1;
					while($val  =   $result->fetch_assoc()){ 
                        $datesave[] = "\"".$val['text']."\""; 
			            $totol[] = "\"".$val['count(*)']."\"";
				?>
				 <tr>
  					  <td><div align="center"><?php echo $val["text"];?></div></td>
    					<td><div align="center"><?php echo $val["count(*)"];?></div></td>
                        
    
  					</tr>
					 <?php
                    }
                     
					 ?>
                      </tbody>
		</table>
	

	<br>
	
  

	

	
	<div class="container">
		<div class="row">
			<div >
			<?php echo $pages->display_pages();?>
			<div >
			</div>
			</div>
		
		
	</div>
                        <ul class="nav navbar-nav">
                        <br><br>
                       <!-- <li class="text-right" style="color:#fff ;font-size:25px;"><a href="acc_text.php">ดูประสิทธิภาพ</a></li> -->
                            <div class="ml-auto">
                       
                            </div>
                        </div>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
 <?php 
 $datesave = implode(",", $datesave); 
 $totol = implode(",", $totol);

 ?>
<script>  
 $(document).ready(function(){  
      $('#customers').DataTable();  
 });  
 </script>  
 <script>

	 var optionsOne = {
type: 'horizontalBar',
data: {
 labels: [<?php echo $datesave;?>],
 datasets: [ 
		 {
			 label: '10 อันดับคำที่มีการพูดถึงกันมากที่สุด ',
			 data: [<?php echo $totol?>],
			 backgroundColor: "#BA55D3",
			 borderWidth: 1
		 }
	 ]
},
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            }
        }],
        xAxes: [{
            ticks: {
				reverse: false,
          stepSize: 15
            }
        }]
    },
onClick:function(e){
    var activePoints = mychart.getElementsAtEvent(e);
	var selectedIndex = activePoints[0]._index;
	window.location="topic_s.php?name="+this.data.labels[selectedIndex];
   


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
                        

       
		
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<script src="../assets/node_modules/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
<script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="../assets/node_modules/raphael/raphael-min.js"></script>
<script src="../assets/node_modules/morrisjs/morris.min.js"></script>
<!--c3 JavaScript -->
<script src="../assets/node_modules/d3/d3.min.js"></script>
<script src="../assets/node_modules/c3-master/c3.min.js"></script>
<!-- Chart JS -->
<script src="js/dashboard1.js"></script>
<!-- Placed at the end of the document so the pages load faster -->
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

<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="../js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="../js/waves.js"></script>
<!--Counter js -->
<script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../js/custom.min.js"></script>
<script src="../js/dashboard1.js"></script>
<script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>
</html>