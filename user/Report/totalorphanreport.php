<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT orphans.*, social_worker.*,handler.*,next_of_kin.*,school.*,hospital.*
						FROM orphans, social_worker,handler,next_of_kin,school,hospital
						WHERE orphans.social_worker_id = social_worker.social_worker_id
						AND orphans.handler_id = handler.handler_id
						AND orphans.next_of_kin_id = next_of_kin.next_of_kin_id
						AND orphans.school_id = school.school_id
						AND orphans.hospital_id = hospital.hospital_id
						
						" ) 
or die("SELECT Error: ".mysql_error());

	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>SafeHaven | Orphan Report</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

<style type="text/css">
.style1 {
	font-size: 45px;
}
.style2 {
	text-align: right;
}
</style>

</head>

<body>

<div style="position: absolute; width: 910px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:898px;">
        <div id="middle" style="height: 890px; width:891px;">
            <div id="center-column" style="height: 856px; width: 928px;">
                <div class="top-bar" style="width: 87px">
                    <div class="breadcrumbs">
              	<div style="position: absolute; width: 130px; height: 18px; z-index: 1; left: 767px; top: 154px" id="layer11">
					 <script type="text/javascript">
					 </script><a style=" color:#6D9F00; text-decoration:none;" class="printfriendly" onclick="window.print(); return false;" title="Printer Friendly and PDF">
						<img style="border:none;" src="../../icons/pf-button-both.gif" alt="Print Friendly and PDF"/></a> 
</div>
													<img src="../../images/logosun1.png" alt="sunlogo" width="171" height="154" class="style9" /></div>
                </div>

<p>
													&nbsp;</p>

													<div style="position: absolute; width: 689px; height: 38px; z-index: 2; left: 223px; top: 20px" id="layer5" class="style1">
					<strong>The Village SafeHaven</strong></div>
													<div style="position: absolute; width: 188px; height: 100px; z-index: 3; left: 226px; top: 81px" id="layer6">
														12 Downing Street, 
														Buccluech,<br />
														Johannesburg, Gauteng<br />
														South Africa<br />
														2066</div>
<div style="position: absolute; width: 390px; height: 100px; z-index: 4; left: 519px; top: 76px" id="layer7" class="style2">
	<span class="Normal-C15">Tel: 011 &nbsp;802 &nbsp;1461 </span>
	<span class="Normal-C14"><br />
	Mobile: 084 519 3159</span><strong><br />
	</strong>E-mail:<strong> </strong> <a href="mailto:village@polka.co.za">
	village@polka.co.za</a></div>
				<div style="position: absolute; width: 833px; height: 104px; z-index: 5; left: 18px; top: 234px" id="layer9">
				 <div style="float: left; position: relative; width: 516px; left: -1px; top: 3px; height: 107px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 890px;">
                     
                        <tr>
                            <th>Orphan Name</th>
                            <th>Age</th>
                            <th>Social Worker Name</th>
                            <th>School</th>
                            <th>Type</th>
                            <th>Location</th>
                          
                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td ><?php echo $res['orphan_fname']; ?>&nbsp;&nbsp;<?php echo $res['orphan_lname']; ?>
                            &nbsp;</td>
                            <td><?php echo $res['age']; ?>
							&nbsp;</td>
                            <td><?php echo $res['social_worker_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['school_name']; ?>
							&nbsp;</td>
							<td><?php echo $res['type']; ?>
							&nbsp;</td>
                            <td><?php echo $res['location']; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>

				</div>
              </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 895px">
                Total Orphan
                Report</div>
            </div>
        </div>
    </div>
</div>

<div style="position: absolute; width: 142px; height: 21px; z-index: 6; left: 774px; top: 208px" id="layer10">
				<?php date_default_timezone_set('UTC');
				echo date('j F Y'); ?>
				</div>
				
</body>

</html>
