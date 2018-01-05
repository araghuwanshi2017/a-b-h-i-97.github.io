<?php
  include 'header.php'
?>



		<div class="header">
				<div id="login">
					<img src="https://cdn0.iconfinder.com/data/icons/metro-style-people-svg-icons/48/User_login-512.png" width="50px" height="50px" />
					<div style="text-align: center;margin-top: -10px;">Login</div>
				</div>
				<div class="header_top">
						<div class="search_bar">
							<input id="search" type="text" name="search" placeholder="Search"/>
							<div id="search_icon"><img style="width: 32px;margin-left: 3px;height: 32px;" src="search.png" /></div>
						</div>
						<div class="main_logo"></div>
						<div class="banner"></div>
				</div>
				<nav class="navbar">
						<ul>
								<a href="index.php"><li>Home</li></a>
								<a href="about.php"><li class="active">About Us</li></a>
								<a href="people.php"><li>Members</li></a>
								<a href="activities.php"><li>Activities</li></a>
								<a href="projects.php"><li>Projects</li></a>
								<a href="resources.php"><li>Resources</li></a>
								<a href="http://assoc.cse.nitc.ac.in/wiki/Main_Page"><li>Wiki</li></a>
								<a href="news.php"><li>News</li></a>
								<a href="gallery.php"><li>Gallery</li></a>
								<a href="contact.php"><li>Contact Us</li></a>
						</ul>
				</nav>
		</div>

		<div class="main_unified">
				<div class="main_content">
						<div class="main_bg_container">
						</div>
					<div class="main_left_container">
						<ul>
							<li><a data-val="about" onclick="changeTab(this)" class="selected_link">About CSEA</a></li>
							<li><a data-val="vision" onclick="changeTab(this)">Vision and Mission</a></li>
							<li><a data-val="work" onclick="changeTab(this)">How we work</a></li>
							<li><a data-val="join" onclick="changeTab(this)">Join Us</a></li>
						</ul>
					</div>

					<div class="main_right_container">
							<div class="news_holder">
									<div class="left_right_header">CSEA Recruitment</div>
									<div class="imagebox_small" style="background-image: url(https://scontent-sin6-1.xx.fbcdn.net/t31.0-8/13119768_992549047490276_6585170853966642339_o.jpg);"></div>
									<div class="imagebox_big_content" style="padding-top: 10px;">Computer Science and Engineering Association has opened up its recruitment for executives for the year 2016-17. The interested students can apply for this position in the following link</div>
									<center><a href="https://goo.gl/forms/WFZy8ALXhz0RxHlD2"><button style="margin-bottom: 5px;
									margin-top: 15px;">Apply Here</button></a></center>
							</div>
					</div>
						<div class="main_middle_container">

								<div id="about" class="holder selected">
	                  <div class="middle_header">About CSEA</div>
	                  <div class="content_holder" id="abouthtml">

	                  </div>
	              </div>

	              <div id="vision" class="holder">
	                  <div class="middle_header">Vision and Mission</div>
	                  <div class="content_holder" id="visionhtml">

	                  </div>
	              </div>

	              <div id="work" class="holder">
	                  <div class="middle_header">How we Work</div>
	                  <div class="content_holder" id="workhtml">

	                 </div>
	              </div>

	              <div id="join" class="holder">
	                  <div class="middle_header">Join Us</div>
	                  <div class="content_holder" id="joinhtml">

	                  </div>
	              </div>
						</div>
		</div>
	</div>


	<?php
	  include 'footer.php'
	?>

</body>
<script>
$(window).load(function() {
	});
	var aboutdb=myFireBase.child("about");
	aboutdb.once("value").then(function(snapshot){
		var aboutval=snapshot.val();
		console.log(aboutval);
		for(var iter in aboutval){
			(function(cntr){
				var htmlcode=aboutval[cntr];
				console.log(cntr);
				if(cntr=="about")
					$("#abouthtml").append(htmlcode);
				else if(cntr=="how")
					$("#workhtml").append(htmlcode);
				else if(cntr=="join_us")
					$("#joinhtml").append(htmlcode);
				else if(cntr=="vision")
					$("#visionhtml").append(htmlcode);
			})(iter);
		}
	});


</script>

</html>
