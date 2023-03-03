<?php
session_start();
?>
<p onclick="print()"> <img src="print.jpg" alt="print" style="width:100px;height:40px;" align='right'>
		</p>
		
		<a href='profile.php'><u><b>home</b></u></a>

<table border="1" width="1200px">
<tr>
<td width="400px">
    <table>
    <tr width="400px"> 
    <td width="400px"><P align="center">STUDENT COPY<br>
PANJAB NATIONAL BANK<br>
A/C No. 0038000100086701<br>
Govt. Polytechnic college Balaghat Ext.Center</p>
    </td>
    </tr> 
    </table>

     <table width="400px">
      <tr width="400px">
      <td width="250px">S.r.No.:- </td><td width="150px">Date:- <?php echo $_SESSION['Apply'];?></td>
      </tr>
      </table>
	  <table width="400px">
      <tr width="400px">
      <td width="250px">NAME FULL:- <?php echo $_SESSION['Fname'];?>&nbsp;<?php echo $_SESSION['Mname'];?>&nbsp;<?php echo $_SESSION['Lname'];?></td><td width="150px"></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">ROLL No:- <?php echo $_SESSION['Roll'];?></td><td width="150px">BRANCH:- <?php echo $_SESSION['Branch'];?></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">TERM/SEM:- <?php echo $_SESSION['Sem'];?></td><td width="150px"></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">CATEGORY(SC/ST/OBC/GEN):- <?php echo $_SESSION['Cat'];?></td><td width="150px"></td>
      </tr>
      </table>
	  <table width="400px">
      <tr width="400px">
      <td width="250px"><b><u>ADMISSION</u></b></td><td width="150px"><b><u>RS</u></b></td>
	  </tr>
	  <tr width="400px">
      <td width="250px">Tution Fees</td><td width="150px">7500</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Adm</td><td width="150px">05</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">A.F.</td><td width="150px">40</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">LEF</td><td width="150px">20</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">IPM</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Trg. and P/M</td><td width="150px">100</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Stu.Help</td><td width="150px">05</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">cy.st</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">ic</td><td width="150px">25</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Mazin</td><td width="150px">40</td>
      </tr>
	   <tr width="400px">
	  <td width="250px">VCMF</td><td width="150px">12</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">CM</td><td width="150px">100</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">Tc</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Cost of Form</td><td width="150px">10</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Others</td><td width="150px"></td>
      </tr>
      </table>
	  <table width="400px" border=1>
      <tr width="400px">
      <td width="250px">Total Rs.</td><td width="150px">7827</td>
      </tr>
	  <tr width="400px">
      <td width="250px">In Words Rs.</td><td width="150px"></td>
      </tr>
      </table>

     <table width="400px" >
      <tr width="400px">
      <td width="250px"><br><br>Sign.of Student</td><td width="150px"><br><br>Sign. of Clerk</td>
      </tr>
	  </table>

<td>

<td width="400px">
      <table>
    <tr width="400px"> 
    <td width="400px"><P align="center">STUDENT COPY<br>
PANJAB NATIONAL BANK<br>
A/C No. 0038000100086701<br>
Govt. Polytechnic college Balaghat Ext.Center</p>
    </td>
    </tr> 
    </table>

     <table width="400px">
      <tr width="400px">
      <td width="250px">S.r.No.:-</td><td width="150px">Date:-</td><?php echo $_SESSION['Apply'];?>
      </tr>
      </table>
	  <table width="400px">
      <tr width="400px">
      <td width="250px">NAME FULL:-<?php echo $_SESSION['Fname'];?>&nbsp;<?php echo $_SESSION['Mname'];?>&nbsp;<?php echo $_SESSION['Lname'];?></td><td width="150px"></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">ROLL No:-<?php echo $_SESSION['Roll'];?></td><td width="150px">BRANCH:-<?php echo $_SESSION['Branch'];?></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">TERM/SEM:-<?php echo $_SESSION['Sem'];?></td><td width="150px"></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">CATEGORY(SC/ST/OBC/GEN):-<?php echo $_SESSION['Cat'];?></td><td width="150px"></td>
      </tr>
      </table>
	  <table width="400px">
      <tr width="400px">
      <td width="250px"><b><u>ADMISSION</u></b></td><td width="150px"><b><u>RS</u></b></td>
	  </tr>
	  <tr width="400px">
      <td width="250px">Tution Fees</td><td width="150px">7500</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Adm</td><td width="150px">05</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">A.F.</td><td width="150px">40</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">LEF</td><td width="150px">20</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">IPM</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Trg. and P/M</td><td width="150px">100</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Stu.Help</td><td width="150px">05</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">cy.st</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">ic</td><td width="150px">25</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Mazin</td><td width="150px">40</td>
      </tr>
	   <tr width="400px">
	  <td width="250px">VCMF</td><td width="150px">12</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">CM</td><td width="150px">100</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">Tc</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Cost of Form</td><td width="150px">10</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Others</td><td width="150px"></td>
      </tr>
      </table>
	  <table width="400px" border=1>
      <tr width="400px">
      <td width="250px">Total Rs.</td><td width="150px">7827</td>
      </tr>
	  <tr width="400px">
      <td width="250px">In Words Rs.</td><td width="150px"></td>
      </tr>
      </table>

     <table width="400px" >
      <tr width="400px">
      <td width="250px"><br><br>Sign.of Student</td><td width="150px"><br><br>Sign. of Clerk</td>
      </tr>
	  </table>
<td>

<td width="400px">
        <table>
    <tr width="400px"> 
    <td width="400px"><P align="center">STUDENT COPY<br>
PANJAB NATIONAL BANK<br>
A/C No. 0038000100086701<br>
Govt. Polytechnic college Balaghat Ext.Center</p>
    </td>
    </tr> 
    </table>

     <table width="400px">
      <tr width="400px">
      <td width="250px">S.r.No.:-</td><td width="150px">Date:-</td><?php echo $_SESSION['Apply'];?>
      </tr>
      </table>
	  <table width="400px">
      <tr width="400px">
      <td width="250px">NAME FULL:-<?php echo $_SESSION['Fname'];?>&nbsp;<?php echo $_SESSION['Mname'];?>&nbsp;<?php echo $_SESSION['Lname'];?></td><td width="150px"></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">ROLL No:-<?php echo $_SESSION['Roll'];?></td><td width="150px">BRANCH:-<?php echo $_SESSION['Branch'];?></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">TERM/SEM :-<?php echo $_SESSION['Sem'];?></td><td width="150px"></td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">CATEGORY(SC/ST/OBC/GEN):-<?php echo $_SESSION['Cat'];?></td><td width="150px"></td>
      </tr>
      </table>
	  <table width="400px">
      <tr width="400px">
      <td width="250px"><b><u>ADMISSION</u></b></td><td width="150px"><b><u>RS</u></b></td>
	  </tr>
	  <tr width="400px">
      <td width="250px">Tution Fees</td><td width="150px">7500</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Adm</td><td width="150px">05</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">A.F.</td><td width="150px">40</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">LEF</td><td width="150px">20</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">IPM</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Trg. and P/M</td><td width="150px">100</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Stu.Help</td><td width="150px">05</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">cy.st</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">ic</td><td width="150px">25</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Mazin</td><td width="150px">40</td>
      </tr>
	   <tr width="400px">
	  <td width="250px">VCMF</td><td width="150px">12</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">CM</td><td width="150px">100</td>
      </tr>
	  <tr width="400px">
	  <td width="250px">Tc</td><td width="150px">50</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Cost of Form</td><td width="150px">10</td>
	  </tr>
	  <tr width="400px">
	  <td width="250px">Others</td><td width="150px"></td>
      </tr>
      </table>
	  <table width="400px" border=1>
      <tr width="400px">
      <td width="250px">Total Rs.</td><td width="150px">7827</td>
      </tr>
	  <tr width="400px">
      <td width="250px">In Words Rs.</td><td width="150px"></td>
      </tr>
      </table>

     <table width="400px" >
      <tr width="400px">
      <td width="250px"><br><br>Sign.of Student</td><td width="150px"><br><br>Sign. of Clerk</td>
      </tr>
	  </table>
<td>

</tr>
</table>

