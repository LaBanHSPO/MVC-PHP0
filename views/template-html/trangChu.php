<html>
	<head>
		<title>Home Page</title>
		
		<style>
			h1 {
			color: blue;
			}
			a {
				text-decoration: none;
				width: 300px;
				height:50px;
				background-color: orange;
				font-weight:bold;
			}
			body {
				background-color: #FAFAFA;
				margin: 150 auto ;
				margin-left: 300px;
			}
			ul {
			 list-style-type: none;
			 margin:0;
			 padding:0;
			  width: 200px;
			background-color: #f1f1f1;
			}
			li a {
				display:block;
				
			}
			li a:hover {
				color: white;
			}
		</style>
		
	</head>

	
	<body>
	<h1>CHÀO MỪNG</h1>
	<ul>
	  <li><a href="#">Home</a></li>
	  <li><a href="index.php?controller=Student&action=getListStudent">DANH SÁCH SINH VIÊN </a></li>	  
	  <li><a href="index.php?controller=Auth&action=getLogin">ĐĂNG NHẬP</a></li>	 
	  <li><a href="javascript:alert('chuc nang dang xay dung')">Contact</a></li>
	  <li><a href="javascript:alert('chuc nang dang xay dung')">About</a></li>
	</ul>
	
	<p>KTPM K12B Team</p>	
	</body>

</html>