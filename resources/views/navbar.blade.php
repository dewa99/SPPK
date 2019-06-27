@if ($errors->any())
            @foreach ($errors->all() as $error)
    <div class="alert alert-danger d-flex justify-content-center" style="margin-left: 10%;margin-right: 10%;font-size: 10px" onload="hide()">
                {{ $error }}
    </div>
            @endforeach
            <script>
	$(".alert").fadeTo(3000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});
</script>
@endif
@if (session()->has('daftar'))
      <div class="alert alert-success alert-block">
          <strong>Berhasil Daftar</strong>
      </div>
      <script>
	$(".alert").fadeTo(3000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});
</script>
@endif

<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/pemro.png" alt="" width="50px" height="50px" /></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="/l">Home</a></li>
						    	<li><a href="team.html">About</a></li>								
						    	<li><a href="team.html">Gallery</a></li>								
						    	<li><a href="team.html">Forum</a></li>								
						    	<li><a href="/aslab">Daftar Aslab</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						  @if(Session::get('login'))
						  	<ul class="nav" id="nav">
						    	<li><a href="/register" style="transform: translate(-150px);">{{Session::get('login')->nama_lengkap}}</a></li>
						    	<li><a href="/login">Logout</a></li>														
								<div class="clear"></div>
							</ul>
						  @else
						    <ul class="nav" id="nav">
						    	<li><a href="/register">Daftar</a></li>
						    	<li><a href="/login">Login</a></li>														
								<div class="clear"></div>
							</ul>
						  @endif
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>		
	       </div>
	      </div>
		 </div>
	    </div>
	</div>