<?php
   error_reporting(0);
   
   if (isset($_POST['submit'])) {
       $genGrp = $_POST['genGrp'];
       $mathsGrp = $_POST['mathsGrp'];
       $physicsGrp = $_POST['physicsGrp'];
   
   } else {
       header("location: timetableDetails");
       exit();
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Software Engineering 2nd Semester Timetable">
      <meta name="author" content="Soji Jr">
      <meta name="keywords" content="Timetable">
      <title>S.E 2nd SEMESTER TIMETABLE</title>
      <link href="public/favicon.jpg" rel="icon">
      <link href="public/css/style.css" rel="stylesheet" media="all">
      <link href="public/css/style2.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
         <div class="wrapper wrapper--w790">
            <div class="card card-5">
               <div class="card-bodyy">
                  <div class="timetable-container" style="overflow-x:auto;">
                     <table id="timetable">
                        <thead>
                           <tr>
                              <th colspan="12">
                                 <div class="card-heading headd">
                                    <h2 class="title">SOFTWARE ENGINEERING 2ND SEMESTER TIMETABLE</h2>
                                    <h3>
                                    For S.E GROUP
                                    <?php echo $genGrp ?>,
                                    Maths Group
                                    <?php echo $mathsGrp ?>
                                    and Physics Group
                                    <?php echo $physicsGrp ?>
                                    </h4>
                                 </div>
                              </th>
                           </tr>
                           <tr>
                              <td colspan="12"
                                 style="border:none;text-align:right;font-size: 14px;color: #666;margin: 10px;">
                                 Made by Soji Jr
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <th>7-7:50</th>
                              <th>8-8:50</th>
                              <th>9-9:50</th>
                              <th>10-10:50</th>
                              <th>11-11:50</th>
                              <th>12-12:50</th>
                              <th>1-1:50</th>
                              <th>2-2:50</th>
                              <th>3-3:50</th>
                              <th>4-4:50</th>
                              <th>5-5:50</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th>Monday</th>
                              <td></td>
                              <td></td>
                              <td><?php if($mathsGrp == B) {
                                 echo "MATH 102<br>B006";
                                 } else {
                                 echo"";
                                 } ?>
                              </td>
                              <td><?php if($genGrp == B) {
                                 echo "COSC 112<br>NH ROOM 1";
                                 } else {
                                 echo"";
                                 } ?>
                              </td>
                              <?php if($physicsGrp == D) {
                                 echo "<td colspan=2>PHY 102<br></td>";
                                 } elseif ($genGrp == A) {
                                 echo"<td colspan=2>COSC 112<br>NH ROOM 1</td>";
                                 } else {
                                 echo "<td></td><td></td>";
                                 } ?>
                              <td>BREAK</td>
                              <?php
                                 if($genGrp == A) {
                                     echo "<td>COSC 112<br>NH ROOM 1</td>";
                                     echo"<td></td>";
                                     echo"<td></td>";
                                     echo"<td></td>";
                                 } elseif($genGrp == B) {
                                     echo"<td></td>";
                                     echo "<td colspan=2>COSC 112<br>NH ROOM 1</td>";
                                     echo"<td></td>";
                                 } elseif($genGrp == D) {
                                     echo"<td></td>";
                                     echo"<td></td>";
                                     echo "<td colspan=2>COSC 112<br>NH ROOM 1</td>";
                                 } else {
                                     echo"<td></td>";
                                     echo"<td></td>";
                                     echo"<td></td>";
                                     echo"<td></td>";
                                 }
                                 ?>
                           </tr>
                           <tr>
                              <th>Tuesday</th>
                              <?php if($genGrp == A) {
                                 echo "<td colspan=2>COSC 108<br>STUDIO 4</td>";
                                 } else {
                                 echo"<td></td><td></td>";
                                 } ?>
                              <td>CHAPEL SEMINAR</td>
                              <?php
                                 if($genGrp == B) {
                                     echo"<td>SENG 102<br>LAB 2</td>";
                                 } elseif($genGrp == A) {
                                     echo"<td>SENG 102<br>NH ROOM 2</td>";
                                 } else {
                                     echo"<td></td>";
                                 }
                                 ?>
                              <?php
                                 if($genGrp == D) {
                                     echo "<td colspan=2>COSC 108<br>(STUDIO 4)<br>& GEDS 112</td>";
                                 } elseif($physicsGrp == B) {
                                     echo "<td colspan=2>PHY 102<br>(A008)<br>& GEDS 112</td>";
                                 } else {
                                     echo"<td colspan=2>GEDS 112</td>";
                                 }
                                 ?>
                              <td><?php if($physicsGrp == C) {
                                 echo "PHY 102<br>";
                                 } else {
                                 echo"BREAK";
                                 } ?>
                              </td>
                              <?php
                                 if($genGrp == A) {
                                     echo "<td colspan=2>SENG 102<br>NH ROOM 2</td>";
                                 } elseif($genGrp == E) {
                                     echo "<td colspan=2>SENG 102<br>F104</td>";
                                 } elseif($genGrp == C) {
                                     echo "<td colspan=2>COSC 108<br>STUDIO 4</td>";
                                 } else {
                                     echo"<td></td><td></td>";
                                 }
                                 
                                 if($genGrp == B) {
                                     echo "<td colspan=2>SENG 102<BR>NH ROOM 1</td>";
                                 } elseif($genGrp == D) {
                                     echo "<td>SENG 102<br>F104</td><td>COSC 112<br>F204</td>";
                                 } else {
                                     echo"<td></td><td></td>";
                                 }
                                 ?>
                           </tr>
                           <tr>
                              <th>Wednesday</th>
                              <?php
                                 if($mathsGrp == C) {
                                     echo "<td colspan=2>MATH 102<br>LAB 1</td>";
                                 } elseif($mathsGrp == A) {
                                     echo "<td colspan=2>MATHS 102<br>B006</td>";
                                 } else {
                                     echo"<td></td><td></td>";
                                 }
                                                     
                                 if($genGrp == B) {
                                     echo "<td colspan=2>COSC 108<br>STUDIO 4</td>";
                                 } elseif($genGrp == C or $genGrp == E) {
                                     echo "<td colspan=2>COSC 112<br>LAB 2</td>";
                                 } else {
                                     echo"<td></td><td></td>";
                                 }
                                 ?>
                              <td colspan="2">GEDS 134</td>
                              <?php
                                 if($genGrp == D) {
                                     echo "<td colspan=2>SENG 102<br>F104</td>";
                                 } elseif($genGrp == C or $genGrp == E) {
                                     echo "<td>BREAK</td><td>COSC 112<br>BUC ROOM 1</td>";
                                 } else {
                                     echo"<td>BREAK</td><td></td>";
                                 }
                                                     
                                 if($physicsGrp == B or $physicsGrp == D) {
                                     echo "<td>PHY 102<br></td>";
                                 } else {
                                     echo "<td></td>";
                                 }
                                                     
                                 if($genGrp == E) {
                                     echo "<td colspan=2>COSC 108<br>STUDIO 4</td>";
                                 } elseif($genGrp == C) {
                                     echo "<td></td><td>SENG 102<br>E102</td>";
                                 } else {
                                     echo"<td></td><td></td>";
                                 }
                                 ?>
                           </tr>
                           <tr>
                              <th>Thursday</th>
                              <td colspan="2">GEDS 126</td>
                              <?php
                                 if($mathsGrp == A) {
                                     echo "<td>MATH 102<br>A008</td>";
                                 } else {
                                     echo"<td></td>";
                                 }
                                                     
                                 if($mathsGrp == C) {
                                     echo "<td>MATH 102<br>A008</td>";
                                 } elseif($physicsGrp == A) {
                                     echo "<td>PHY 102<br>CIT</td>";
                                 } else {
                                     echo"<td></td>";
                                 }
                                 ?>
                              <td colspan="2">GEDS 132</td>
                              <td><?php if($genGrp == E) {
                                 echo "SENG 102<br>E102";
                                 } else {
                                 echo"BREAK";
                                 } ?>
                              </td>
                              <?php
                                 if($mathsGrp == B) {
                                     echo "<td colspan=2>MATH 102<br>B007</td><td></td>";
                                 } elseif($genGrp == C) {
                                     echo "<td></td><td colspan=2>SENG 102<br>E202</td>";
                                 } else {
                                     echo"<td></td><td></td><td></td>";
                                 }
                                 ?>
                              <td></td>
                           </tr>
                           <tr>
                              <th>Friday</th>
                              <td>GEDS 126</td>
                              <td></td>
                              <?php
                                 if($physicsGrp == A or $physicsGrp == C) {
                                     echo "<td colspan=2>PHY 102<br>BUC ROOM 1</td>";
                                 } else {
                                     echo"<td></td><td></td>";
                                 }
                                 ?>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                     <br>
                     <button id="download-btn" class="btndown btn--pill" onclick="downloadImage()">Download
                     Timetable</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
      <script src="public/js/download.js"></script>
   </body>
</html>