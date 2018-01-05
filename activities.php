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
								<a href="about.php"><li>About Us</li></a>
								<a href="people.php"><li>Members</li></a>
								<a href="activities.php"><li class="active">Activities</li></a>
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
							<!--<li><a data-val="activities" onclick="changeTab(this)" class="selected_link">Activities</a></li>-->
							<li><a data-val="competitions" onclick="changeTab(this)" class="selected_link">Competitions</a></li>
							<li><a data-val="courses" onclick="changeTab(this)">Courses/Workshops</a></li>
							<li><a data-val="talks" onclick="changeTab(this)">Talks</a></li>
							<li><a data-val="others" onclick="changeTab(this)">Other Activities</a></li>
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
								<div id="activities" class="holder">
										<div class="middle_header">Activities</div>
										<div class="content_holder">
												<p>Some description about Activities to be put up here. It should not be too short, otherwise it doesnt look that good.</p>
										</div>
								</div>

								<div id="competitions" class="holder selected">
										<div class="middle_header">Competitions</div>
										<div class="content_holder">
												<ul>
														<li>
															<div class="imagebox_article" style="background-image: url(custom/15_10.jpg);"></div>
															<p>A coding contest on HackerEarth platform was organised in the month of October 2015.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(custom/15_02.jpg);"></div>
															<p>A coding contest on HackerEarth platform was organised in the month of February 2015.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(custom/15_02_2.jpg);"></div>
															<p>Previously we conducted a coding contest on HackerEarth platform in the month of February 2015. The event so successfull we organised yet another contest on the same platform in the same month.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/medium/public/field/image/codemaestros1410.png);"></div>
															<p>Code Maestros Team, CSEA, NIT calicut is ready to thrill you with a new edition of Code Maestros 14.10, as a Warm-up for upcoming ACM-ICPC online rounds.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/codemaestors1409.jpg);"></div>
															<p>Code Maestros 14.09, the monthly Programming Contest by CSEA NIT Calicut, recieved and appreciated with both hands open from the Students and Problem Solving enthusiasts from the college.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/codeMaestros1409Winners.png);"></div>
															<p>Code Maestros-14.04, held on April 16, 2014, with the motto of Improving Coding culture at NITC, powered by HackerRank(the hosting site), showed the signs of a good start!</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/2_0.jpg);"></div>
															<p>To improve the coding culture of students of CSED NIT Calicut, CSEA is organizing monthly coding competitions, one of which was conducted on 11th January 2013.​</p>
														</li>
												</ul>
										</div>
								</div>

								<div id="courses" class="holder">
										<div class="middle_header">Courses and Workshops</div>
										<div class="content_holder">
												<ul>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12794797_956307444447770_5760796693106424877_o.jpg);"></div>
															<p>A Mock Placement workhsop was conducted for the students which also included Placement Talks.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12592180_782817208516965_2152436562388708440_n.jpg);"></div>
															<p>A hands on workshop on RUST programming language was conducted by Noufal Ibrahim. </p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12801664_956846851060496_771565842758888659_n.jpg);"></div>
															<p>A workshop regarding Applied CS in Android Application Development was conducted.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/988802_770148429783843_653666209513414603_n.jpg);"></div>
															<p>A Git Workshop session was succesfully conducted and follow-up sessions made available for participants.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/Android%20Workshop%20Poster.jpg);"></div>
															<p>A workshop on Android App Development was Succesfully conducted.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/python_0.jpg);"></div>
															<p>A workshop in Python was organised in the month of Feb.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/android.jpg);"></div>
															<p>A basic Android workshop was organised on 22nd and 23rd Nov at SSL.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/1384364_539165392828646_362535947_n.jpg);"></div>
															<p>A Leadership Workshop was organized on 29th October from 2-5pm presided by Mr.Shankar Krishnan.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/uploadlinux.JPG);"></div>
															<p>A Linux workshop was conducted on Sunday, 6th January in Software Systems Lab. The workshop was divided into three sections - an introductory talk on Linux, a hands-on session of basic Linux Terminal commands, and BASH scripting.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/python.jpg);"></div>
															<p>Semester long sessions on Python - an interpreted high-level programming language , was conducted by CSEA in  the Monsoon semester of 2012. Three hour sessions were taken on the weekends in the Software Systems Laboratory. These included both theory and hands- on implementations of a variety of problem statements.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/68462_10200134045941049_287483049_n.jpg);"></div>
															<p>Drupal is a free community supported framework and a content management system for creating, organizing, presenting and managing content on web.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/RSessions.jpg);"></div>
															<p>An introductory session to the open-source scripting language –cum-statistical software R was conducted  on 12th September, 2012 . This was conducted under the aegis of Computer Science and Engineering Association, NITC.</p>
														</li>
												</ul>
										</div>
								</div>

								<div id="talks" class="holder">
										<div class="middle_header">Talks</div>
										<div class="content_holder">
												<ul>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12400627_10153890508515956_814423090984229332_n.jpg);"></div>
															<p>A talk on Extracting Performance from Next generation intel Architecture was delivered by Austin Cherian.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12794797_956307444447770_5760796693106424877_o.jpg);"></div>
															<p>A Mock Placement workhsop was conducted for the students which also included Placement Talks.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12647127_636987393106783_243397903567655714_n.jpg);"></div>
															<p>Talk on Career possibilities in Assurance by Kumaresan N was conducted along with Tata Consultancy Services.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/usuni.jpg);"></div>
															<p>A talk on- higher studies and research options in the US , was conducted on 26th september 2012 by CSEA. The talk was given by Dr. Mathew Pallakal , who is the Associate Dean for Graduate studies and Research and Professor , Informatics in Indiana University- Purdue University Indiana, USA. Dr.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/10505555_873056929439489_7504966433023193898_n.jpg);"></div>
															<p>A talk on building solutions that can scale to up to a billion users was given by Mr. Paul Mathews,  CEO of Nethram LLC. </p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/place.jpg);"></div>
															<p>A placement talk was organised by the 4th years for the 3rd years</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/iitb.jpg);"></div>
															<p>A talk on Research problems in Cloud computing by Dr Umesh Bellur, Prof, IIT Bombay was organised in the month of Sept 2014.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/usuni.jpg);"></div>
															<p>A talk on- higher studies and research options in the US , was conducted on 26th september 2012 by CSEA. The talk was given by Dr. Mathew Pallakal , who is the Associate Dean for Graduate studies and Research and Professor , Informatics in Indiana University</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/1779987_663043520424658_382668016_n.jpg);"></div>
															<p>An MoU was signed between NITC and TCS. Mr.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/1239440_662494560428377_1927498593_n.jpg);"></div>
															<p>Internship talks were conducted by CSEA on 23rd August 2013 to guide the CSED students about the internship oppportunities available to them. Th final-year and pre-final year students who did research based and industrial internships in Indian as well as foreign institutions spoke to the audience about their experiences.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/dias.png);"></div>
															<p>Talk on Diaspora(a free personal web server) by Mr. Praveen, NITC alumnus</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/paralle.jpg);"></div>
															<p>A talk on Parallel Computing and Formal Methods by Professor Ganesh L Gopalakrishnan from the University of Utah.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/tcs.jpg);"></div>
															<p>Talk on Big Data Analytics by Noufal Gosali,head of Big Data,TCS in March 2015.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/nittcs.jpg);"></div>
															<p>As part of the NITC-TCS MOU program, a talk by Mr Sudheer Warrier was organised.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/saplab.jpg);"></div>
															<p>Experts on big data from SAP Labs, Siva and Deepa gave a lecture on 7th of Nov 2014.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/bitcoin.jpg);"></div>
															<p>An expert lecture on "Bitcoins : Story of Cryptocurrency" by Dr. Mansoor Alicherry. The speaker is currently the Vice President of Engineering at Vizury Interactive Solutions Pvt. Ltd. </p>
														</li>
												</ul>
										</div>
								</div>

								<div id="others" class="holder">
										<div class="middle_header">Other Activities</div>
										<div class="content_holder">
												<ul>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12715448_1112328355453965_7067040352275481827_n.jpg);"></div>
															<p>FOSSMeet is the annual event on Free and Open source software. This year it was succesfully conducted at NITC.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/12512538_822337924543691_5979139957841686920_n.jpg);"></div>
															<p>C-SCAN 2016, is first of its kind, is a conference aimed at bringing in student-teacher fraternity of CSE Departments of reputed NITs across the nation under a single umbrella for exchange of ideas to spark innovation. It was succesfully conducted during the month of March 2016</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/cpp.jpg);"></div>
															<p>Hands-on sessions in C++ for first year CSE students.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/gdg-devfest.png);"></div>
															<p>The first ever GDG Devfest at Kozhikode was organised:- Google Developers Group Devfest.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/2_0_0.jpg);"></div>
															<p>As part of the Social initiative of the Dept, an Android workshop was organised by a few App developers of the CSE Dept.</p>
														</li>
														<li>
															<div class="imagebox_article" style="background-image: url(http://assoc.cse.nitc.ac.in/sites/default/files/styles/square_thumbnail/public/field/image/1239394_663039787091698_250004801_n.jpg);"></div>
															<p>TCS - NITC MoU signing took place in the director's chamber on 5th feb '14. It was followed by a talk on IT Industry, Latest trends and Opportunities.</p>
														</li>
												</ul>
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

</script>

</html>
