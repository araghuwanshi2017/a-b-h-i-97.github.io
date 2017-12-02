<?php
  include 'header.php';
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
     <li class="nav-item">
       <a class="nav-link" href="index.php">Home </a>
     </li>
     <li class="nav-item active">
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

 <div class="main_bg_container container-fluid">
     <div class="main_content main_middle_container ">

             <div class="main_left_container">
               <ul>
                 <li><a data-val="about" onclick="changeTab(this)" class="selected_link">About CSEA</a></li>
                 <li><a data-val="vision" onclick="changeTab(this)">Vision and Mission</a></li>
                 <li><a data-val="work" onclick="changeTab(this)">How we work</a></li>
                 <li><a data-val="join" onclick="changeTab(this)">Join Us</a></li>
               </ul>
             </div>

             <div id="about" class="holder selected">
                 <div class="middle_header">About CSEA</div>
                 <div class="content_holder" id="abouthtml">

                 </div>
                 <div class="nav_section">
                   <a style="float:left; " data-val="vision" onclick="changeTab(this)">Vision and Mission</a>
                </div>
             </div>

             <div id="vision" class="holder">
                 <div class="middle_header">Vision and Mission</div>
                 <div class="content_holder" id="visionhtml">

                 </div>
                 <div class="nav_section">
                   <a style="float:left;" data-val="about" onclick="changeTab(this)">About Us</a>
                   <a style="float:right;"data-val="work" onclick="changeTab(this)">How We Work</a>
                </div>
             </div>

             <div id="work" class="holder">
                 <div class="middle_header">How we Work</div>
                 <div class="content_holder" id="workhtml">

                </div>
                 <div class="nav_section">
                   <a style="float:left;" data-val="vision" onclick="changeTab(this)">Vision and Mission</a>
                   <a style="float:right;" data-val="join" onclick="changeTab(this)">Join Us</a>
                </div>
             </div>

             <div id="join" class="holder">
                 <div class="middle_header">Join Us</div>
                 <div class="content_holder" id="joinhtml">

                 </div>
                 <div class="nav_section">
                   <a style="float:left; " data-val="work" onclick="changeTab(this)">How We Work</a>
                </div>
             </div>
         </div>
 </div>

 <?php
   include 'footer.php';
  ?>

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
