<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
@include('head')
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
						<form> 
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
											<span>IPK<label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>2.0 - 2.5</option>
													<option>>2.5 - 3.0</option>
													<option>>3.0 - 3.5</option>
													<option>>3.5 - 4.0</option>
												</select><br>
													<i style="font-size: 10px">upload screenshot ipk dari sister</i>
													<input type="file" style="height: 1.3%;margin-top: 5px"></input>
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
												<select>
													<option>A - AB</option>
													<option>B - BC</option>
													<option>C - CD</option>
													<option>D - E</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai algoritma 2 dari sister</i>
												<input type="file" style="margin-top: 5px"></input>
											</ul>
										</div>

										<div>
											<span>Nilai Algoritma 1<label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>A - AB</option>
													<option>B - BC</option>
													<option>C - CD</option>
													<option>D - E</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai algoritma 1 dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px"></input>
											</ul>
										</div>
										
										<div>
											<span>Nilai PBO 1<label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>A - AB</option>
													<option>B - BC</option>
													<option>C - CD</option>
													<option>D - E</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai pbo 1 dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px"></input>
											</ul>
										</div>

										<div>
											<span>Nilai PBO 2<label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>A - AB</option>
													<option>B - BC</option>
													<option>C - CD</option>
													<option>D - E</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai pbo 2 dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px"></input>
											</ul>
										</div>

										<div>
											<span>Nilai Perancangan Web <label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>A - AB</option>
													<option>B - BC</option>
													<option>C - CD</option>
													<option>D - E</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai perancangan web dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px"></input>
											</ul>
										</div>

										<div>
											<span>Nilai Pemrograman Web<label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>A - AB</option>
													<option>B - BC</option>
													<option>C - CD</option>
													<option>D - E</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai Pemrograman Web dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px"></input>
											</ul>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
									<h3><strong>Motivasti dan Alasan</strong></h3>
									<div>
											<span>Nilai Pemrograman Web<label>*</label></span>
											<ul class="prosuct-qty">
												<select>
													<option>Mencari Ilmu</option>
													<option>Ingin Jadi asdos</option>
													<option>mencari tempat belajar</option>
													<option>menambah teman</option>
												</select><br>
												<i style="font-size: 10px">upload screenshot nilai Pemrograman Web dari sister</i>
												<input type="file" style="height: 1.3%;margin-top: 5px"></input>
											</ul>
										</div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit">
						</form>
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