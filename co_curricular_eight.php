<?php

require_once('includes/configpdo.php');

//set query
$result = $mysqli->query("SELECT * from hmsg order by time desc");

//get the results as row
$row = $result->fetch_assoc();

?>




<!DOCTYPE Html>
<html>
<head>
<title>
Eight_text-book
</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="Author" content="Mohammad Mahbub Talukder">

<link rel="stylesheet" type="text/css" href="html.css">

</head>
<body>

<table class="table" align="center" border="0" cellspacing="5" cellpadding="10px" width="100%">


        
            
            <td colspan="8" height="150px" width="100%" class="banner"> <img src="logo.png" width="150px" height="150px" align="left"> <h1>
                <font  size="36" style="padding-left: 200px;"> M.A. GONY BHUYAIN HIGH SCHOOL </font> </h1> 
                <h2>
                <font color="black" size="5"  style="padding-left: 200px;">ATPASHA,MITHAMAIN,KISHOREGANJ || EIIN: 110514 </font> </h2>
            </td>
        



        <tr >

            
                
        <td width="100px" class="box"  > <a href="student_home.php"> Home</a></td>
        <td width="100px" class="box" ><a href="co_curricular.php"> Co-curricular</a></td>


        <td width="100px" class="box"  > <a href="attendance.php">Attendance</a></td>
        <td width="100px" class="box" ><a href="routin.php"> Class Routin </a></td>
        <td width="100px" class="box" ><a href="find-result.php">Results</a></td>
        <td width="100px" class="box" ><a href="TeachersInfo.php" >Teacher's Info </a> </td>
        <td width="100px" class="box" ><a href="gellery.php">Gallery</a></td>

        <td width="100px" class="box" ><a href="contact.php"> Contact </a></td>


   

       </tr>



    <tr>
        <td colspan="2" valign="top" width="25%" >

            <table border="0" class="adm" cellspacing="10" cellpadding="5">
                <tr>
                    <td height="25px" width="285px" class="adminbar" style="color:Green; text-transform: uppercase;"><b>Letest News</b></td>

                </tr>
                <tr>  
                <td height="150px" width="285px" valign="top" class="admin" >
                <br> 
             <marquee direction="left" Scrolldelay="150" ><strong>
                    ****The "Inter-School Game Competition-2018" will be held on 26 March 2018,If you interested to join the game; Please contact with your physical teacher ****
                    </strong>
               </marquee>
                <br>
                <br>
                <br>
                <marquee direction="left" Scrolldelay="150" ><strong>
                <?php
        echo htmlentities($row['msg']);
        ?>
                </strong>
               </marquee>
                <br>

             
                  

                         </td>  
                      </tr>

                 </table>
                 <br>

            <table class="left_sidebar" width="100%" height="500px" text-align="top" >
             <td valign="top">  
            <li class="lli" type="none" style="text-align:center;font-size:20px;"><b><i>Important Links</i></b></li>
            <br>
            <li class="lli" type="none"><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">Dhaka Education Board</a></li>
            <li class="lli" type="none"><a href="http://www.eboardresults.com" target="_blank" >E-board Results</a></li>
            <li class="lli" type="none"><a href="http://www.educationboard.gov.bd" target="_blank" >Directory of Secondery &amp; Higher Education Board </a></li>
            <li class="lli" type="none"><a href="http://www.xiclassadmission.gov.bd" target="_blank" >College Admission</a></li>
            <li class="lli" type="none" fa fa-book><a href="http://www.nctb.gov.bd" target="_blank" >NCTB</a></li>
           
            <li class="lli" type="none"><a href="http://www.bpsc" target="_blank" >Directory of Primary Education board</a></li>
            
            <li class="lli" type="none"><a href="http://www.bpsc.gov.bd" target="_blank" >Bangladesh Job Portal</a></li>
            <li class="lli" type="none"><a href="http://www.bangladesh.gov.bd" target="_blank" >Bangladesh National Website</a></li>
            <li class="lli" type="none"><a href="http://www.bteb.gov.bd" target="_blank" >Bangladesh Technical Education board</a></li>
            
            </td> 
            </table>
            <br>

            


        </td>
    




    <td colspan="4" height="1000px" width="50%" valign="top" class="main_content">
        
            <!-- content area-->

             <style type="text/css">

                .co_curricular
                {
                    border-collapse: collapse;
                    font-family: sans-serif;
                    font-size: 20px;
                    text-align: center;
                    width: 100%;
                    box-shadow: 0px 2px 6px 4px #CCC;


                }
                .co_curricular a
                {
                    text-decoration: none;

                }

                .co_curricular caption
                {
                    text-shadow: 0px 3px 6px #CCC;
                    
                    font-size: 25px;
                }


            </style>
            <br>

        <table border="1" class="co_curricular" cellspacing="5" cellpadding="5" >
            <caption> Class Eight Text-books </caption>
    <tbody>
        <thead>
            <th><strong>SI NO.</strong></th>
            <th><strong>Name of Text-book</strong></th>
            <th><strong>Download </strong></th>
            </thead> 
        
                


<tr>
            <td>১।</td>
            <td>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</td>
            <td><a href="https://drive.google.com/open?id=1V0SIQg2nFOCk0uDfMPF0dxsxdNn51OVB" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>২।</td>
            <td>বাংলা ব্যকরণ ও নির্মিতি</td>
            <td><a href="https://drive.google.com/open?id=1OfbpKNEIww609cB5OXeuRs03HlXHm89K" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>৩।</td>
            <td>কৃষি শিক্ষা&nbsp;</td>
            <td><a href="https://drive.google.com/open?id=10N0QCM52NyOZhXR8t_qrRcjufgvsPhQw" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>৪।</td>
            <td>গার্হস্থ্য বিজ্ঞান&nbsp;</td>
            <td><a href="https://drive.google.com/open?id=1Ud4jhd8iwskJ3DfmWpBedngFDyVBMKz6" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
           
        </tr>
        <tr>
            <td>৫।</td>
            <td>শারীরিক শিক্ষা ও স্বাস্থ্য&nbsp;</td>
            <td><a href="https://drive.google.com/open?id=1BqA9lSm4vNnW6V3DZ0S5bVCjB5jEcr9H" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>৬।</td>
            <td>তথ্য ও যোগাযোগ প্রযুক্তি&nbsp;</td>
            <td><a href="https://drive.google.com/open?id=1JHOy05cRGg3dYAa1ygB1g2mEHUqFqCYS" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>৭।</td>
            <td>কর্ম ও জীবনমুকী শিক্ষা &nbsp;</td>
            <td><a href="https://drive.google.com/open?id=1cwMCSlb-bdhBUhmEKausu-NEWIhpFop2" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>৮।</td>
            <td>চারু ও কারুকলা &nbsp;</td>
            <td><a href="https://drive.google.com/open?id=1z-ld8tDD9e1bguacoTnOIwV2IjItmVFg" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>৯।</td>
            <td>English for Today</td>
            <td><a href="https://drive.google.com/open?id=1US4ZF6tcF4agIcth114_79XQETP6Hsbz" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১০।</td>
            <td>English Grammer and Composition</td>
            <td><a href="https://drive.google.com/open?id=1DYpk411h34K6GKPjvq59-fRTpvw32VhA" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১১।</td>
            <td>সাহিত্য কনিকা</td>
            <td><a href="https://drive.google.com/open?id=1LYCHgF0csROBwwP1z0pv0fOTmMtGLKQE" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১২।</td>
            <td>বাংলাদেশ ও বিশ্বপরিচয়</td>
            <td><a href="https://drive.google.com/open?id=1htkoe4mAWv5_NedcPUNIWK6NtvGCKm7P" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১৩।</td>
            <td>বিজ্ঞান</td>
            <td><a href="https://drive.google.com/open?id=1Yk6-YxcVIQV_UuZLOnTwLyTUQZWOiZPV" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১৪।</td>
            <td>ইসলাম ও নৈতিক শিক্ষা</td>
            <td><a href="https://drive.google.com/open?id=1YQlaa6rsPxO3EVHZReghh9BQt1lW63-t" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১৫।</td>
            <td>হিন্দুধর্ম ও নৈতিক শিক্ষা</td>
            <td><a href="https://drive.google.com/open?id=1sMk4Rr5pH3dvVOpq1261EfYccx95ZKgo" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১৬।</td>
            <td>খ্রিষ্টান ধর্ম ও নৈতিক শিক্ষা</td>
            <td><a href="https://drive.google.com/open?id=1PP-5sdCAFEgObScFK41cGr5bpNWmd1J_" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১৭।</td>
            <td>বৌদ্ধ ধর্ম ও নৈতিক শিক্ষা</td>
            <td><a href="https://drive.google.com/open?id=1cGKOJCsSZRvlopCCTl5hPmUL-PC7UqG5" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
        <tr>
            <td>১৮</td>
            <td>গণিত</td>
            <td><a href="https://drive.google.com/open?id=15oO-ygDQeXIyskE8-DlFSqEhu2r6Vmyp" title=""><img alt="pdf" src="pdf.png" style="height:32px; width:32px"></a></td>
            
        </tr>
    </tbody>
</table>

            <!-- content area end-->


                          
                       

            </td>



<!-- Right side bar start-->

    <td colspan="2" valign="top" width="25%" class="rightbar" >


            <table border="0" class="adm" cellspacing="3" cellpadding="5">
                <tr>
                    <td height="25px" width="285px" class="adminbar"><b>User Panel</b></td>

                </tr>
                <tr>  
                <td height="150px" width="285px" valign="top" class="admin" >
                <br> 
                <li ><a href="admin.php"><strong>Admin LogIn</strong></a> </li>
                <br>

             
                    <dfn>[Plz collect your user_name &amp; password from Authorised group before Admin login]</dfn>

            </td>  
                </tr>

            </table>
                        <br>    
                        <br>    
            <table border="0" class="adm" cellspacing="3" cellpadding="5">
                <tr>
                    <td height="25px" width="285px" class="adminbar" style="color:Green"><b>Head-Master Messages</b></td>

                </tr>
                <tr>  
                <td height="460px" width="285px" valign="top" class="admin" >
              
                    <h1 align="center"><img src="images/head_teacher.png"></h1>
                <marquee direction="up" Scrolldelay="200"> 
                    <p style="text-align: justify;" ><strong> 
                We are provide to learn everything by teching carefully,so that the students learn properly;We not only tech from the curriculam text-book,also we tech more important things out of text-books. Our the school website,there we provide a lot of information in digital way.such as you can see your result from at home when result publish also you can download &amp; print your results.Student gairdeant can see their student's daily,weekly,monthly attendance on it.</strong></p>
               </marquee>
                <br>
             
                  

                         </td>  
                      </tr>

                 </table>

             </td> <!-- right side bar end -->



        </tr> 
          
        

 <tr><!-- footer tr start -->

                 <td colspan="8" height="100px" class="footer"  >
				 
				   <table style="width: 100%; color: #222222;">
                     <tr>
                        <td style="text-align: left;padding-left: 15px;">Copyright 2018 @ <a style="text-decoration: none" href="http://dhakaeducationboard.gov.bd/" target="_blank">PHP "Student Management System" Project Group &trade;</a>. All Rights Reserved.</td>
                        <td style="text-align: right;padding-right:15px;"><a href=" https://www.facebook.com/mohammadmahbub.talukder" style="   text-decoration: none; a:hover:red;" > <dfn> Developed by S.Kabir</a></dfn></td>
                    </tr>
                 </table>
				 
                 </td>
 </tr><!-- footer tr end -->

        


</table><!--main table end -->
</body>




</html>
 