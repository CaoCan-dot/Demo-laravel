<!DOCTYPE html>
<html>

<head>
	@include('includes.head')
	
</head>
	
<body class="parallax">
	<div >

  		<header >
  			<div class="row" id="header1">
  				<div class="col-sm-12" >
  					<i class="glyphicon glyphicon-envelope text-white" > vnasia@outlook.com.vn</i>
  				</div>
  								
			</div>
			<div class="row" id="header2">
				<div class="col-sm-6">
  					<h6 id="center"> TRUNG TÂM ĐÀO TẠO  NGOẠI NGỮ </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVIỆT NAM ASIA </h6>
  				</div>
			</div>
			<div class="navbar">
  				<a  href="#">Home</a>
  				<a href="#">Course</a>
  				<a href="#">Document</a>
  				<a href="#">Test</a>
  				<a href="#">Event</a>
  				<a href="#">Teacher</a>
  				<a href="#">Contact</a>
</div>
   		</header>

   <div >
   	
           @yield('content')
   </div>

    <footer class="row">
       @include('includes.footer')
    </footer>
   
</div>
</body>
</html>