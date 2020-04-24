<?php include_once('config.php'); include('paginator.class.php'); ?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<meta name="author" content="http://iweb-studio.com" />
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
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
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
								 <li><a href="top10p.php">แสดง Top 10 ความคิดเห็นทางด้านบวก</a></li>
                                <!--  <li><a href="top10n.php">แสดง Top 10 ความคิดเห็นทางด้านลบ</a></li> -->
								
                            </ul>
						</li>
				

                        <li><a href="team.php">ทีมงาน</a></li>
                       
                        <li><a href="edit_user.php">ผู้ดูแลระบบ</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>

		
		
		<section id="content">
		<div class="container">
	<?php
$get_id = isset($_GET['id']) ? $_GET['id'] : 0;
$get_page = isset($_GET['page']) ? $_GET['page'] : 0;
$get_ipp = isset($_GET['ipp']) ? $_GET['ipp'] : 0;

$sql = "SELECT web.topic
FROM web
INNER JOIN coment1
ON web.pk_web = coment1.pk_web
where web.pk_web =".$get_id;
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<h2>".$row['topic']."</h2>";
	?>
	
		<br>
		<table id="customers" align="center">
			<thead>
				<tr>
					<th>ลำดับ</th>
					<th>ความคิดเห็น</th>
					<th>วิเคราะห์ความคิดเห็น</th>
					<th>เว็บเข้าถึง</th>
				
					
				</tr>
			</thead>
			<tbody>
			<script src='https://kit.fontawesome.com/a076d05399.js'></script>
				<?php 
				
			
			
				$sqli = "SELECT coment1.text,web.time,web.link,coment1.text_a,coment1.text_r FROM web  INNER JOIN coment1 ON web.pk_web = coment1.pk_web   where web.pk_web = ".$get_id."  ORDER BY SUBSTRING(time, 0, 2) DESC" ;
		   //echo $sqli;
			$result	=	$db->query($sqli);
			
					$n  =   1;
					while($val  =   $result->fetch_assoc()){ 
				?>
				<tr>
					<td><?php echo $n++; ?></td>
					<td> 
						<?php 
							if($val['text'] == ""){
								echo '<h4 style="color:red;">ไม่มีความคิดเห็น</h4>'; 
							}else{
								echo $val['text']; 
							}
						
						?>
					</td>
					<td><?php 
							 	 if($val['text_a'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['text_r']."></i>";
							 }else if($val['text_a'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['text_r']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['text_r']."></i>";
							 }
							?>

							
						</td>
					<td><a href ="<?php echo $val['link']; ?>"><?php echo mb_strtoupper($val['link']); ?></a></td>
					
			
				</tr>
				<?php 
					}
				?>
				
				
			</tbody>
		</table>
	

	<br>
	<form id="myForm" action="table.php?page=<?php echo $get_page; ?>&<?php echo $get_ipp;?>">
	<div class="container">
		<div class="row">
		<a href ="table.php?page=<?php echo $get_page; ?>&ipp=<?php echo $get_ipp;?>"" style="font-size: 25px;">กลับ</a>
	</div>
	</div>
</form>	

<script>  
 $(document).ready(function(){  
      $('#customers').DataTable();  
 });  
 </script>  

	<footer>
	<div class="container">

		<div class="row">
		<?php
				$sqli = "SELECT COUNT(coment1.text) FROM web  INNER JOIN coment1 ON web.pk_web = coment1.pk_web where web.pk_web = ".$get_id." ORDER BY SUBSTRING(time, 0, 2) DESC";
				$result	=	$db->query($sqli);
				while($val  =   $result->fetch_assoc()){ 
					echo "<h4> จำนวนทั้งหมด ".$val['COUNT(coment1.text)']."</h4>";
				}
		?>
	
		
	</div>
	</footer>
</div>
        
    </div> <!--/.container-->
	
	<div class="container">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo left sidebar -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-6724419004010752"
			 data-ad-slot="7706376079"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
		</div>
		</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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