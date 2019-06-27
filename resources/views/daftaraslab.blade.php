<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
@include('head')
@dd(Session::get('login'))
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
 </head>
<body>
	@include('navbar')
     <div class="main">
      <div class="shop_top">
	     <div class="container">
	     				@if(Session::get('login'))
	     					<h3>{{Session::get('login')->ipk}}</h3>
	     					@if(Session::get('login')->ipk)
	     						<h3>Data anda telah masuk tunggu kabar selanjutnya ya</h3>
	     					@endif
	     				@else
						<form action="/daftaraslab" method="post" enctype="multipart/form-data">
							@csrf
								<div class="register-top-grid">
										<h2>Daftar Menjadi Asisten Lab Pemrograman Fasilkom UNEJ</h2>
										<h4>Berikut adalah Syarat dan Ketentuan Untuk menjadi bagian dari Lab Pemrograman</h4>
										<br>
										<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum vel voluptate aliquam, deserunt minima animi esse officiis sit possimus, numquam consequatur repellat nulla adipisci, laboriosam distinctio quis temporibus saepe, neque!</h6>
										<br>
										<h5>Dokumen yang harus dipenuhi</h5>
										<br>
										<h3><strong>Data IPK</strong></h3>
										<div>
											<span>IPK<label>* penulisan decimal dengan titik</label></span>
											<ul class="prosuct-qty">
												<input type="text" name="ipk">
												<br>
													<i style="font-size: 10px">upload screenshot ipk dari sister</i>
													<input type="file" style="height: 1.3%;margin-top: 5px" accept="image/*" name="ipkimg"></input>
											</ul>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3><strong>Nilai Mata Kuliah</strong></h3>
										<div>
											<span>Nilai Algoritma 2<label>*</label></span>
											<ul class="prosuct-qty">
												<select name="algo2">
													@foreach($nilai as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai algoritma 2 dari sister</i>
												<input type="file" style="margin-top: 5px" accept="image/*" name="algo2img"></input>
											</ul>
										</div>

										<div>
											<span>Nilai Algoritma 1<label>*</label></span>
											<ul class="prosuct-qty">
												<select name="algo1">
													@foreach($nilai as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai algoritma 1 dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px" accept="image/*" name="algo1img"></input>
											</ul>
										</div>
										
										<div>
											<span>Nilai PBO 1<label>*</label></span>
											<ul class="prosuct-qty">
												<select name="pbo1">
													@foreach($nilai as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai pbo 1 dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px" accept="image/*" name="pbo1img"></input>
											</ul>
										</div>

										<div>
											<span>Nilai PBO 2<label>*</label></span>
											<ul class="prosuct-qty">
												<select name="pbo2">
													@foreach($nilai as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai pbo 2 dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px" v accept="image/*" name="pbo2img"></input>
											</ul>
										</div>

										<div>
											<span>Nilai Perancangan Web <label>*</label></span>
											<ul class="prosuct-qty">
												<select name="web1">
													@foreach($nilai as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai perancangan web dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px" accept="image/*" name="web1img"></input>
											</ul>
										</div>

										<div>
											<span>Nilai Pemrograman Web<label>*</label></span>
											<ul class="prosuct-qty">
												<select name="web2">
													@foreach($nilai as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai Pemrograman Web dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px" accept="image/*" name="web2img"></input>
											</ul>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
									<h3><strong>Motivasi dan Alasan</strong></h3>
									<div>
											<span>Motivasi dan alasan<label>*</label></span>
											<ul class="prosuct-qty">
												<select name="motivasi" style="width: 95%">
													@foreach($alasan as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select>
											</ul>
										</div>
									<div>
											<span>Motto<label>*</label></span>
											<ul class="prosuct-qty">
												<input type="text" name="motto">
											</ul>
										</div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit">
						</form>
						@endif
					</div>
		   </div>
	  </div>
	  <div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Products</h4>
							<li><a href="#">Mens</a></li>
							<li><a href="#">Womens</a></li>
							<li><a href="#">Youth</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="#">Careers and internships</a></li>
							<li><a href="#">Sponserships</a></li>
							<li><a href="#">team</a></li>
							<li><a href="#">Catalog Request/Download</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Shipping and Order Tracking</a></li>
							<li><a href="#">Easy Returns</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="#">Replacement Binding Parts</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
		   				</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>
</body>	
</html>