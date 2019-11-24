@extends('layout.master')
@section('content')

<div class="row" id="intro">
	
	<div class="col-sm-12" id="bia">
		
		<img src="http://tienganhlop4.edu.vn/wp-content/uploads/2018/11/hoc-tieng-Anh-lop-4.jpg" class="mx-auto d-block" id="img" alt="Forest" width="170" height="100">
	</div>
	
</div>
	<div  class="row" id="main">
	
<div class="row" >
	<div class="col-sm-12">
		 <h2 id="tutin">Tự Tin Giao Tiếp Tiếng Anh Nhờ Trải Nghiệm Thật</h2>
		 <p id="nd">Chương trình Đào Tạo Anh Ngữ Thiếu Trải Nghiệm Thực Tế là một thiệt thòi của thế hệ trẻ Việt
Chính vì vậy, đa số người Việt không thể nói tiếng Anh dù ngữ pháp rất giỏi.
ASIA thấu hiểu điều đó và xây dựng chương trình dạy Tiếng Anh Giao Tiếp giàu tính trải nghiệm tốt nhất,
giúp học viên tự tin giao tiếp tiếng Anh với người nước ngoài, làm hành trang vững chắc cho công dân thế kỷ XXI</p>
	</div>
<div class="row">

	
	<div class="col-sm-12">
		<h1 onclick="changeText(this)"><p id="radius">Gioi thiêụ về ASIA</p></h1>

<script>
	function changeText(id) {
  	id.innerHTML = "Là trung tấm uy tín số 1 về đào tạo";
}
</script>
		
	</div>
	
</div>
	
</div>
		<div class="col-sm-12">
			<div>
				<h1 id="course">Các khóa học</h1>
			</div>
			<div class="gallery">
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLHkAVhNbwBetaOR3VxEiiOnTNVLMMn_SIcsTJIU-8HQnsS55wrA&s">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLHkAVhNbwBetaOR3VxEiiOnTNVLMMn_SIcsTJIU-8HQnsS55wrA&s"width="600" height="400">
  </a>
  <div class="desc">Tiếng Anh </div>
</div>

<div class="gallery">
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ96TDlHVgwlZKpy6I9MoOIFgmn-IrZlgtQmqZmqgrW92FAcLe&s">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ96TDlHVgwlZKpy6I9MoOIFgmn-IrZlgtQmqZmqgrW92FAcLe&s" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Tiếng anh kid</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc1m49GrDGAUtCGc0Eo0XTb3AE8XsGkzLe2gsKjwvKxNlKlTVUHQ&s">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc1m49GrDGAUtCGc0Eo0XTb3AE8XsGkzLe2gsKjwvKxNlKlTVUHQ&s" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Tiếng hoa</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNzeNvq6t5maAu6J2K6gtAbb0-6G2tj88OVa4q6CU4ke7Odn4tLg&s">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNzeNvq6t5maAu6J2K6gtAbb0-6G2tj88OVa4q6CU4ke7Odn4tLg&s" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Chứng chỉ quốc tế</div>
</div>

</div>
	
<div class="row">
	<div id="sign">
		<h1 id="signup">Đăng kí nhận học bổng</h1>
		</div>
	<div class="col-sm-12">
		
		<div class="polaroid">
  <img src="https://noidung.tienganh123.com/file/luyen-thi-toeic/vocabulary_practice/Unit03/Unit03_lecture/vocab/discussion.jpg" id="imghb" style="width:100%">
  <div class="container">
  <p>Tiếng hoa nghe nói đọc viết </br>
  <span style="color:blue">1.900.000đ</span></br>
  Khóa 3 tháng tuần 3 buổi </p>
  				<div class="container1">
 
    
    <!-- Button đăng nhập để mở form đăng nhập -->
    <button id="myBtn">Đăng kí</button>
 
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Nội dung form đăng nhập -->
        <div class="modal-content">
            <form action="#">
                <span class="close">&times;</span>
                <h2>Form đăng nhập</h2>
                <div class="fomrgroup">
                    <b>UserName:</b>
                    <input type="text" name="username">
                </div>
                <div class="fomrgroup">
                    <b>PassWord:</b>
                    <input type="passWord" name="passWord">
                </div>
                <div class="fomrgroup">
                    <button>Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
  </div>
  <img src="http://tienganhlop4.edu.vn/wp-content/uploads/2018/11/hoc-tieng-Anh-lop-4.jpg" class="mx-auto d-block" id="imghb" style="width:100%">
  <div class="container">
  <p>Tiếng anh giao tiếp </br>
  <span style="color:blue">1.900.000đ</span></br>
  Khóa 3 tháng tuần 3 buổi </p>
  			 				<div class="container1">
 
    
    <!-- Button đăng nhập để mở form đăng nhập -->
    <button id="myBtn">Đăng kí</button>
 
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Nội dung form đăng nhập -->
        <div class="modal-content">
            <form action="#">
                <span class="close">&times;</span>
                <h2>Form đăng nhập</h2>
                <div class="fomrgroup">
                    <b>UserName:</b>
                    <input type="text" name="username">
                </div>
                <div class="fomrgroup">
                    <b>PassWord:</b>
                    <input type="passWord" name="passWord">
                </div>
                <div class="fomrgroup">
                    <button>Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc1m49GrDGAUtCGc0Eo0XTb3AE8XsGkzLe2gsKjwvKxNlKlTVUHQ&s" id="imghb" style="width:100%">
  <div class="container">
  <p>Tin học văn phòng </br>
  <span style="color:blue">1.350.000đ</span></br>
  Khóa 3 tháng tuần 3 buổi </p>
  			 				<div class="container1">
 
    
    <!-- Button đăng nhập để mở form đăng nhập -->
    <button id="myBtn" style="color: black;">Đăng kí</button>
 
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Nội dung form đăng nhập -->
        <div class="modal-content">
            <form action="#">
                <span class="close">&times;</span>
                <h2>Form đăng nhập</h2>
                <div class="fomrgroup">
                    <b>UserName:</b>
                    <input type="text" name="username">
                </div>
                <div class="fomrgroup">
                    <b>PassWord:</b>
                    <input type="passWord" name="passWord">
                </div>
                <div class="fomrgroup">
                    <button>Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
  </div>
  </div>

</div>
</div>	
<div class="row" id="review">
	<div class="col-sm-12">
		<h1 id="re">[REVIEW] Trung Tâm Anh Ngữ ASIA Đà Nẵng ? Có tốt không ?</h1>
		<P  id="asia">ASIA ENGLISH là Trung tâm dẫn đầu về tổ khóa học tiếng Anh giao tiếp tại Đà Nẵng. Nhận được nhiều review tốt của học viên, cũng như các bậc phụ huynh về chất lượng giảng dạy, giảng viên & cam kết. Trung tâm có số lượng cơ sở nhiều nhất ở 4 quận tại thành phố Đà Nẵng & có bề dày kinh nghiệm. Giúp học viên từ mất gốc cho đến thành thạo, mở ra nhiều cơ hội thành công…
Để học tiếng Anh Giao tiếp hiệu quả cần một phương pháp đúng là chưa đủ, mà còn người bạn đồng hành thấu hiểu bạn!</P>
	</div>
	
</div>		

@Endsection