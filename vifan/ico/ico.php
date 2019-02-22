<?php require 'config.php';?>

<script type='text/javascript'src="http://vifan.cn/header.js"></script>
<meta charset="UTF-8">







    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

   <div id="content">
    <div class="panel">
      <div class="panel-body">
        <div class="col-md-6 col-sm-12">
          <h3 class="animated fadeInLeft">ico制作</h3>
         <a href="http://vifan.cn/index.html"> <p class="animated fadeInDown">网站全局的logo[首页]</p></a>
        </div>
      </div>
    </div>
    <div class="col-md-12" style="padding:20px;">
         <div class="col-md-12 padding-0 form-element">
      <div class="col-md-12">
       <div class="panel form-element-padding">

            <div class="panel-body" style="padding-bottom:30px;">


	<body>
		<!-- Header -->

		<!-- Header -->

		<!-- Main -->
		<main role="main">

				<!-- Slider -->
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div id="form">

<form action="index.php?do=create"  enctype="multipart/form-data" method="post">
<p><strong>目标尺寸:</strong>
<select style="width: 200px;" name="image_dimensions"  type="button">
<option selected="selected" value="16"  type="button">16px &nbsp;x&nbsp; 16px</option>
<option value="32"  type="button">32px &nbsp;x&nbsp; 32px</option>
</select></p>
<p><strong>原始图片（不超过175kb）:</strong>
<input name="image" size="40" type="file" class="btn btn-info" width="200px;" /></p><hr>
<input style="font-weight: bold;" name="submit" type="submit" value="点击制作ICO" class="btn btn-danger"/>
</form>

<?php

if(isset($_GET['do'])){
	if($_GET['do'] == "create"){
		if(isset($_POST['submit'])){
			$generate_favicon = "<p>".generate_favicon()."</p>";
              $generate_favicon .= '
            <p><strong>完成!</strong></p>';
		} else {
			$generate_favicon = "";
		}
	}
}

?>

            <p>
            <?=$generate_favicon;?>
            </p>

</div>
						</div>
					</div>
				</div>

		<!-- Footer -->

		<!-- Go To Top -->
		<a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>

		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>










	</body>
</html>
