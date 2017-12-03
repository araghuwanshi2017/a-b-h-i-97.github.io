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
     <li class="nav-item ">
       <a class="nav-link" href="about.php">About Us</a>
     </li>
     <li class="nav-item active">
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


<div class="container-fluid " style="padding:10px 20px 10px 20px" >
  <div class="header_members">Our Team</div>
  <div class="side_members">Faculty</div>
  <div class="row" id="faculty">
  </div>
</div>
  <div class="container-fluid" id="execs">
    <div class="side_members">Executives</div>
  </div>
  <div class="container-fluid" style="margin-bottom:20px">
    <a href="roots.php" class="root_link"><button type="button" class="button_members"><div class="roots_members">Our Roots</div></button></a>
  </div>

<?php
  include 'footer.php';
 ?>

 <script>
   $(window).load(function() {
     });
     var facultydb=myFireBase.child("Members").child("Faculty");
     facultydb.once("value").then(function(snapshot){
       var facultyval=snapshot.val();
       console.log(facultyval);
       for(var iter in facultyval){
         (function(cntr){
           var facultyjson=facultyval[cntr];
           var name=facultyjson.facname;
           var imgd=facultyjson.reladdr;
           var facurl=facultyjson.url;
           console.log(cntr);
           storageRef.child(imgd).getDownloadURL().then(function(url) {
             var xhr = new XMLHttpRequest();
             xhr.responseType = 'blob';
             xhr.onload = function(event) {
               var blob = xhr.response;
             };
             xhr.open('GET', url);
             xhr.send();
             var imgurl=url;
             $("#faculty").append('<div class="contact_holder" style="width: 160px;"><center><div class="pic" style="background-image: url('+imgurl+')"></div></center><center><div class="name">'+name+'</div></center><center><a class="link-mod" href="'+facurl+'"><div class="link">Profile</div></center></a></div>');
           }).catch(function(error) {
             console.log("faculty not fetched");
           });
         })(iter);
       }
     });

     var studentsdb=myFireBase.child("Members").child("Students");
     studentsdb.orderByKey().limitToLast(3).on("child_added", function(snapshot) {
       var studentsval=snapshot.val();
       var year=snapshot.key;
       $("#execs").append('<div class="row side_year_members no-margin" id="members_'+year+'">'+year+'</div>');
       console.log(studentsval);
       var targetid="#members_"+year;
       for(var iter in studentsval){
         (function(cntr){
           var streamjson=studentsval[cntr];
           console.log(cntr);
           $(targetid).after('<div class="side_stream_members row no-margin" id="'+year+'_'+cntr+'">'+cntr+'</div>');
           var finaltargetid="#"+year+"_"+cntr;
           $(finaltargetid).after('<div class="row no-margin" id="final'+year+'_'+cntr+'"></div>');
           finaltargetid="#final"+year+"_"+cntr
           for(var iter2 in streamjson){
             (function(cntr2){
               var execjson=streamjson[cntr2];
               var name=execjson.exname;
               var imgd=execjson.imgrel;
               var facurl=execjson.linkedin;
               console.log(cntr2);
               storageRef.child(imgd).getDownloadURL().then(function(url) {
                 var xhr = new XMLHttpRequest();
                 xhr.responseType = 'blob';
                 xhr.onload = function(event) {
                   var blob = xhr.response;
                 };
                 xhr.open('GET', url);
                 xhr.send();
                 var imgurl=url;
                 $(finaltargetid).append('<div class="contact_holder" style="width: 160px;"><center><div class="pic" style="background-image: url('+imgurl+')"></div></center><center><div class="name">'+name+'</div></center><center><a class="link-mod" href="'+facurl+'"><div class="link">Linkedin</div></center></a></div>');
               }).catch(function(error) {
                 console.log("executive not fetched");
               });
             })(iter2);
           }
         })(iter);
       }
     });
 </script>
