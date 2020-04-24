<?php include('config.php'); include('paginator.class.php'); ?>
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
                    <a class="" href="index.html"><img src="img/logo.png" alt="" width="100" height="100" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">หน้าหลัก</a></li>
						<li><a href="index.php#content">ที่มาของระบบ</a></li>
						<li><a href="index.php#r1">ความสามารถของระบบ</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">แสดงข้อมูล <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="index.php"><i class=""></i> วิเคราะห์หัวข้อกระทู้</a> </li>
                            <li> <a href="text.php"><i class=""></i> วิเคราะห์เนื้อหากระทู้</a></li>
                            <li> <a href="comment.php"><i class=""></i> วิเคราะห์ความคิดเห็นของความคิดเห็น</a></li>
                            <li> <a href="text_class.php"><i class=""></i> การจัดกลุ่ม</a></li>
							<li> <a href="cut.php"><i class=""></i> คำที่พูดถึงบ่อย</a></li>	
                            </ul>
						</li>
						<li><a href="get_data.php">เก็บข้อมูล</a></li>
						<li><a href="user.php">จัดการสมาชิก</a></li>
                        <li><a href="#">ทีมงาน</a></li>
                       
                        <li><a href="processout.php">ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>

		
		
		<section id="content">
		<div class="container">
	<?php
$get_id = isset($_GET['id']) ? $_GET['id'] : 0;



	?>

		<br>
		<table id="customers" align="center">
			<thead>
				<tr>
				<th>ลำดับ</th>
					<th>หัวข้อ</th>
					<th>เวลา</th>
					<th>เนื้อหา</th>
					<th>วิเคราะห์หัวข้อ</th>
					<th>วิเคราะห์เนื้อหา</th>
					<th width="100">ความคิดเห็น</th>
				
					
				</tr>
			</thead>
			<tbody>
			<script src='https://kit.fontawesome.com/a076d05399.js'></script>
				<?php 
				
            if($get_id == 'แง่บวก'){
                
                $pages = new Paginator;
                $pages->default_ipp = 10;
                $sql_forms = $db->query("SELECT topic,time,texto,topic_acc,pk_web,text_acc FROM web  WHERE text_acc = 'positive'");
                $pages->items_total = $sql_forms->num_rows;
                $pages->mid_range = 10;
                $pages->paginate();	
             

			
			 $sqli = "SELECT * FROM web  WHERE text_acc = 'positive'".$pages->limit."";
		   //echo $sqli;
		   
			$result	=	$db->query($sqli);
			
					$n  =   1;
					while($val  =   $result->fetch_assoc()){ 
				?>
					<tr>
                    <td><?php echo $n++; ?></td>
							<td><?php echo mb_strtoupper($val['topic']); ?></td>
							<td><?php echo mb_strtoupper($val['time']); ?></td>
		
							<td>
							<details>
							<summary>ดูเนื้อหา</summary>
								<p><?php echo mb_strtoupper($val['texto']); ?></p>
							</details>
								
							</td>
							<td>
							<?php	echo "<p title = ".$val['group_acc']."> ".$val['group']."</p>"; ?>
								
							</td>
					
							<script src='https://kit.fontawesome.com/a076d05399.js'></script>
							<td><?php 
							 if($val['topic_acc'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['topic_re']."></i>";
							 }else if($val['topic_acc'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['topic_re']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['topic_re']."></i>";
							 }
							?>

							
						</td>
						<td><?php 
							 	 if($val['text_acc'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['text_re']."></i>";
							 }else if($val['text_acc'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['text_re']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['text_re']."></i>";
							 }
							?>
							
						</td>
							<td align ="center"><a href ="table_c.php?id=<?php echo mb_strtoupper($val['pk_web']);?>&page=<?php echo $pages->current_page;?>&ipp=10">คลิก</a></td>
						</tr>
				<?php 
                    }
            }else if($get_id == 'แง่ลบ'){
                    
                $pages = new Paginator;
                $pages->default_ipp = 10;
                $sql_forms = $db->query("SELECT topic,time,texto,topic_acc,pk_web,text_acc FROM web  WHERE text_acc = 'negative'");
                $pages->items_total = $sql_forms->num_rows;
                $pages->mid_range = 10;
                $pages->paginate();	
             

			
             $sqli = "SELECT * FROM web  WHERE text_acc = 'negative'".$pages->limit."";
             
            
                //echo $sqli;
                
                 $result	=	$db->query($sqli);
                 
                         $n  =   1;
                         while($val  =   $result->fetch_assoc()){ 
                     ?>
                         <tr>
                         <td><?php echo $n++; ?></td>
							<td><?php echo mb_strtoupper($val['topic']); ?></td>
							<td><?php echo mb_strtoupper($val['time']); ?></td>
		
							<td>
							<details>
							<summary>ดูเนื้อหา</summary>
								<p><?php echo mb_strtoupper($val['texto']); ?></p>
							</details>
								
							</td>
							<td>
							<?php	echo "<p title = ".$val['group_acc']."> ".$val['group']."</p>"; ?>
								
							</td>
					
							<script src='https://kit.fontawesome.com/a076d05399.js'></script>
							<td><?php 
							 if($val['topic_acc'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['topic_re']."></i>";
							 }else if($val['topic_acc'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['topic_re']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['topic_re']."></i>";
							 }
							?>

							
						</td>
						<td><?php 
							 	 if($val['text_acc'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['text_re']."></i>";
							 }else if($val['text_acc'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['text_re']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['text_re']."></i>";
							 }
							?>
                                 
                             </td>
                                 <td align ="center"><a href ="table_c.php?id=<?php echo mb_strtoupper($val['pk_web']);?>&page=<?php echo $pages->current_page;?>&ipp=10">คลิก</a></td>
                             </tr>
                 <?php
                      }
                    }else{
                        $pages = new Paginator;
                        $pages->default_ipp = 10;
                        $sql_forms = $db->query("SELECT topic,time,texto,topic_acc,pk_web,text_acc FROM web  WHERE text_acc = 'normal'");
                        $pages->items_total = $sql_forms->num_rows;
                        $pages->mid_range = 10;
                        $pages->paginate();	
                     
        
                    
                     $sqli = "SELECT * FROM web  WHERE text_acc = 'normal'".$pages->limit."";

                     
                        echo $sql_forms->num_rows;
                        
                         $result	=	$db->query($sqli);
                         
                                 $n  =   1;
                                 while($val  =   $result->fetch_assoc()){ 
                             ?>
                                 <tr>
                                 <td><?php echo $n++; ?></td>
							<td><?php echo mb_strtoupper($val['topic']); ?></td>
							<td><?php echo mb_strtoupper($val['time']); ?></td>
		
							<td>
							<details>
							<summary>ดูเนื้อหา</summary>
								<p><?php echo mb_strtoupper($val['texto']); ?></p>
							</details>
								
							</td>
							<td>
							<?php	echo "<p title = ".$val['group_acc']."> ".$val['group']."</p>"; ?>
								
							</td>
					
							<script src='https://kit.fontawesome.com/a076d05399.js'></script>
							<td><?php 
							 if($val['topic_acc'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['topic_re']."></i>";
							 }else if($val['topic_acc'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['topic_re']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['topic_re']."></i>";
							 }
							?>

							
						</td>
						<td><?php 
							 	 if($val['text_acc'] == 'normal'){
									echo "	<i class='far fa-meh-blank' style='font-size:36px;color:#3e95cd;' title = ".$val['text_re']."></i>";
							 }else if($val['text_acc'] == 'positive'){
								echo "	<i class='far fa-smile-beam' style='font-size:36px;color:#23E31D;' title = ".$val['text_re']."></i>";
							 }else {
								 echo "<i class='far fa-angry' style='font-size:36px;color:#FA6103;' title = ".$val['text_re']."></i>";
							 }
							?>
             
                                         
                                     </td>
                                         <td align ="center"><a href ="table_c.php?id=<?php echo mb_strtoupper($val['pk_web']);?>&page=<?php echo $pages->current_page;?>&ipp=10">คลิก</a></td>
                                     </tr>
                           <?php                             
                                }
                            }
                            ?>
                
				
				
			</tbody>
		</table>
	

	<br>
	<form id="myForm" action="table.php?page=<?php echo $get_page; ?>&<?php echo $get_ipp;?>">
	<div class="container">
		<div class="row">
		<a href ="table.php">กลับ</a>
	</div>
	</div>
</form>	

<script>  
 $(document).ready(function(){  
      $('#customers').DataTable();  
 });  
 </script>  

	

	
	<div class="container">
		<div class="row">
			<div >
			<?php echo $pages->display_pages();?>
			<div >
			<?php echo "Page :"; ?>
		<?php echo $pages->display_jump_menu(); ?>

		
			</div>
			<div >
			<?php echo $pages->display_max_page();?>
			<div >
			</div>
		
		
	</div>

	
	<footer>
	<div class="container">
		<div class="row">
			
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
		<script>
		function search_user(value){
	
				$.ajax({
					type:"POST",
					url:"table.php",
					data:{value:value},
					success:function(data){
						
					}
				});

			return false;
		}
	</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  
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
<?php $db->close(); ?>
