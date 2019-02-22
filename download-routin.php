<?php
namespace Dompdf;
require_once 'dompdf/autoload.inc.php';
session_start();
ob_start();
require_once('includes/configpdo.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <title>download routin</title>
</head>



<body>

              <style type="text/css">

                .co_curricular
                {
                    border-collapse: collapse;
                    font-size: 20px;
                    text-align: center;
                    box-shadow: 0px 2px 6px 2px #CCC;

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

        <table border="1" class="co_curricular" cellspacing="5" cellpadding="10" >
            <caption> Secondary Curriculam Text books </caption>

        <thead>
            <th>SI NO.</th>
            <th>Class Name</th>
            <th>Details</th>
            
           </thead>
            <tr>
                <td>01</td>
                <td>Class Six (vi)</td>
                <td><a href="co_curricular_six.html">View</td>
                
            </tr>
            <tr>
                <td>02</td>
                <td>Class Seven (vii)</td>
                <td><a href="co_curricular_seven.html">View</td>
                
            </tr>
            <tr>
                <td>03</td>
                <td>Class Eight (viii)</td>
                <td><a href="co_curricular_eight.html">View</td>
                
            </tr>
            <tr>
                <td>04</td>
                <td>Class Nine-ten (ix-x)</td>
                <td><a href="co_curricular_Nine.html">View</td>
                
            </tr>
            <tr>
                <td>04</td>
                <td>Class Nine-ten (ix-x)</td>
                <td><a href="download-routin.php">View</td>
                
            </tr>
            
        
        </table>  
    </body>
    </html>

<?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->setPaper('A4', 'landscape');
$dompdf->load_html($html);
$dompdf->render();
//dompdf->stream("",array("Attachment" => false));
$dompdf->stream("result.pdf");
?>