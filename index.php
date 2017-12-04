<?php
  include 'header.php'
?>
<div class="container-fluid header no-pad">
    <div class="row header_top text-center no-pad">
        <div class="col-sm-3 banner no-pad">
          <img src="banner.png" id="picture1" class="img-fluid" />
        </div>
        <div class="col-sm-6 main_logo text-center no-pad">
          <img src="header.png" id="picture2" class="img-fluid" />
        </div>
    </div>
</div>

<div class="container-fluid nav-fixed no-pad" >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark no-pad">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse no-pad" id="collapsibleNavbar">
  <ul class="navbar-nav mr-auto no-pad">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="members.php">Members</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="activities.php">Activities</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="projects.php">Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="resources.php">Resources</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="news.php">News</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gallery.php">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactus.php">Contact Us</a>
    </li>
  </ul>
</div>
</nav>
</div>

<div class="container-fluid image_slider no-pad" >
    <div class="flexslider" id="main_flexslider" >
      <ul class="slides" id="fireslides">
        <li>
          <div style="background-image: url(rm.jpg);"></div>
        </li>
      </ul>
    </div>

    <div class="slider_scoop"></div>
</div>

<div class="container-fluid no-pad">
<div class="main_content row no-pad text-center">
    <div class="col-sm-4 left text-center">
        <div class="left_right_header">Events</div>
        <div class="left_slider">
            <div class="flexslider" id="left_flexslider">
              <ul class="slides">
                <li>
                  <div class="event_holder">
                      <div class="date">24 Feb</div>
                      <div class="event_side_header">FOSSMeet 2017 -Hack the Code</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">09 Jan</div>
                      <div class="event_side_header">Alumni Meet is to happen during second week of January 2017</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">02 Jan</div>
                      <div class="event_side_header">Pre FossMeet hackathon along with the FOSSCell during January 2017</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">30 Sep</div>
                      <div class="event_side_header">Talk by Jayalal Sharma, PhD at IIT Mardras</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">30 Sep</div>
                      <div class="event_side_header">Updated CSEA Website launch</div>
                  </div>
                </li>
                <li>
                  <div class="event_holder">
                      <div class="date">30 Sep</div>
                      <div class="event_side_header">Release of 3rd edition of CSEA Newsletter Threads</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">30 Sept</div>
                      <div class="event_side_header">Inaugruation of CSEA for the year 2016 - 2017</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">24 Sep</div>
                      <div class="event_side_header">Pre-Tathva Workshop on Python Game Development</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">21 Aug</div>
                      <div class="event_side_header">Linux Bootcamp and Workshop</div>
                  </div>
                  <div class="event_holder">
                      <div class="date">01 Aug</div>
                      <div class="event_side_header">Talk on Big Data and Cloud Computing by Mr.Suhail Rehman</div>
                  </div>
                </li>
              </ul>
            </div>
        </div>
    </div>

    <div class="col-sm-4 middle text-center">
        <div class="middle_header">CSEA News</div>
        <div class="imagebox_big" style="background-image: url(custom/latest_talk.jpg);"></div>
        <div class="imagebox_big_header">Talk By Prof. Jayalal Sharma</div>
        <div class="imagebox_big_content">CSEA is organizing a talk on 'Solving Big Mazes Using Small Spaces' by Prof. Jayalal Sharma an alumnus of NIT Calicut as part of the M N Neelakantan Memorial Lecture Series</div>

        <div class="middle_slider">
            <div class="flexslider" id="middle_flexslider">
              <ul class="slides">
                <li>
                  <img src="custom/python.jpg" />
                  <p class="flex-caption">Python Game Development Workshop exclusively for B. Tech 1st year and MCA 1st year</p>
                </li>
                <li>
                  <img src="custom/linux.jpg" />
                  <p class="flex-caption">Linux Installation Bootcamp</p>
                </li>
                <li>
                  <img src="custom/alumni.jpg" />
                  <p class="flex-caption">RECall 91, the silver jubilee reunion of the CREC 1991 Batch</p>
                </li>
                <li>
                  <img src="custom/cloud.jpg" />
                  <p class="flex-caption">Talk on Cloud Computing by Suhail Rehman</p>
                </li>
                <li>
                  <img src="custom/tcs.jpg" />
                  <p class="flex-caption">Testimony , the annual software testing flagship contest of TCS</p>
                </li>
                <li>
                  <img src="custom/tech_talk.jpg" />
                  <p class="flex-caption">Mr. Narsimha Karumanchi renowned author on books related to the topics on Data Structures</p>
                </li>
              </ul>
            </div>
        </div>
    </div>

    <div class="col-sm-4 right text-center">
        <div class="left_right_header"><a href="http://cse.nitc.ac.in/newsletter/" style="text-decoration: none;color: inherit;">CSEA Newsletter - THREADS</a></div>
        <div class="imagebox_small" style="background-image: url(custom/threads.jpg);"></div>
        <div class="imagebox_big_content" style="padding-top: 10px;">Threads is a quarterly edition newsletter brought to you by CSEA. The newsletter concetrates on highlighting the recent trends in the rapidly changing Computer Science scenario.</div>
        <div class="right_slider">
            <div class="flexslider" id="right_flexslider">
                <ul class="slides">
                    <li>
                      <div class="left_right_header slider"><a href="http://athena.nitc.ac.in" style="text-decoration: none;color: inherit;">Athena and SSL</a></div>
                      <img src="custom/ssl.jpg" />
                      <p class="flex-caption">Athena is an internal data server for students who are doing their BTech in Computer Science and Engineering at National Institute of Technology Calicut.</p>
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

 <script>

 		$(window).load(function() {

 			$('#main_flexslider').flexslider({
 			  animation: "slide",
 			});

 		  $('#middle_flexslider').flexslider({
 		    animation: "slide",
 		    animationLoop: true,
 		    minItems: 2,
 		    maxItems: 2,
 		    itemWidth: 200,
 		    itemMargin: 10,
 		  });

 		  $('#right_flexslider').flexslider({
 		    animation: "slide",
 		    animationLoop: true,
 		    minItems: 1,
 		    maxItems: 1,
 		    itemMargin: 10,
 		    itemWidth: 300,
 		  });

 		  $('#left_flexslider').flexslider({
 		    animation: "slide",
 		    animationLoop: true,
 		    minItems: 1,
 		    maxItems: 1,
 		  });
 		});


    var slides=myFireBase.child('Home').child("SlideShow");
    slides.once("value").then(function(snapshot){
      var slidesval=snapshot.val();
      console.log(slidesval);
      for(var iter in slidesval){
        (function(cntr){
          var urljson=slidesval[cntr];
          console.log(urljson);
          storageRef.child(urljson).getDownloadURL().then(function(url) {
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function(event) {
              var blob = xhr.response;
            };
            xhr.open('GET', url);
            xhr.send();
            var imgurl=url;
            console.log("imageurl "+ imgurl);
            div = '<li><div style="background-image: url('+imgurl+');"></div></li>';
            $('#main_flexslider').data('flexslider').addSlide($(div));
          }).catch(function(error) {
            console.log("image not loaded");
              div = '<li><div style="background-image: url(failed.png);"></div></li>';
             $('#main_flexslider').data('flexslider').addSlide($(div));
          });
        })(iter);
       }
    });
 </script>
