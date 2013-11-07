<?php       
// To
$toClient = $_POST['Email'];
$toSales = 'xandersavenberg@gmail.com';

// Subject
$subjectClient = 'XChanging maturity pentagon';
$subjectSales = 'XChanging maturity pentagon - '. $_POST['Company'];

// message
$message = '
	<p>Dear Mr./Mrs. '. $_POST['Name'] . '</p>
	<p>Thank you for using the XChanging maturity pentagon. To help you properly use the 
	information provided, we took the liberty of summarizing the information given on the 
	website.</p>
	
	<h2>Evaluation Analysis </h2>
	<p style="border-bottom: 1px dotted #000000;">The overall performance of the company is ' . $overall .'.</p>
	<p>'.$overallString.' </p> 
	<p style="text-align: center;">
		<img src="http://maartenvdbeek.nl/charlie/create_chart.php?target='.$target_string.'&current='.$current_string.'" />
	</p>
	<p> It appears that the biggest gap is situated in '.$worstString.'.
		Your actual score is '. $worst .'% below target, which represents a 
		workload of '. $worstWorkload .' mandays.
	</p>
	<ul>
		<li>
			<h3>Data Integrity </h3>
			<p> Your average target is '.$TDA .'% and your actual score is '.$DA.'%.</p>
			<p> On data integrity, your overall score is ';
				if(($TDA - $DA) < 3){
					$message .= "good";
				} elseif (($TDA - $DA) < 25) {
					$message .= "reasonable";
				} else {
					$message .= "bad";
				}
				$message .= ' compared to the target. The weakest point seems to be '.$worstDIString.'. 
				We expect an additional workload of '.$dataIntegrity.' mandays to reach the overall target on data integrity.
			</p>
		</li>
		<li>
			<h3>Compliance</h3>
			<p> Your average target is '.$TCOMP.'% and your actual score is '.$COMP.'%.</p>
			<p> On compliance, your overall score is '; 
				if(($TCOMP - $COMP) < 3){
					$message .= "good";
				} elseif (($TCOMP - $COMP) < 25) {
					$message .= "reasonable";
				} else {
					$message .= "bad";
				}
				$message .= 'compared to the target. The weakest point seems to be '.$worstCompString.'. 
				We expect an additional workload of '.$compliance.' mandays to reach the overall target on compliance.
			</p>
		</li>
		<li>
			<h3>Supplier relationship management</h3>
			<p> Your average target is '.$TSRM.'% and your actual score is '.$SRM.'%.<br/>
				In this analysis we only take into account the suppliers representing 80% of the total spend. </p>
			<p> On supplier relationship management, your overall score is ';
				if(($TSRM - $SRM) < 3){
					$message .= "good";
				} elseif (($TSRM - $SRM) < 25) {
					$message .= "reasonable";
				} else {
					$message .= "bad";
				}
				$message .= ' compared to the target. Your weakest point seems to be '.$worstSRMString.'.
				We expect an additional workload of '.$supplierRelationship.' mandays to reach the overall target 
				on supplier relationship management.
			</p>
		</li>
		<li>
			<h3>Cost Containment</h3>
			<p> Your average target is '.$TCC.'% and your actual score is '.$CC.'%. '.$ccString2.'.
			</p>
			<p> On cost containment, your overall score is '; 
				if(($TCC - $CC) < 3){
					$message .= "good";
				} elseif (($TCC - $CC) < 25) {
					$message .= "reasonable";
				} else {
					$message .= "bad";
				}
				$message .= 'compared to the target.
				We expect an additional workload of '.$costcontainment.' mandays to reach the overall target on cost containment.
			</p>
		</li>
		<li>
			<h3>Risk mitigation</h3>
			<p> Your average target is '.$TRM.'% and your actual score is '.$RM.'%.</p>
			<p> On risk mitigation, your overall score is ';
				if(($TRM - $RM) < 3){
					$message .= "good";
				} elseif (($TRM - $RM) < 25) {
					$message .= "reasonable";
				} else {
					$message .= "bad";
				}
				$message .= 'compared to the target. 
				We expect an additional workload of '.$riskmiti.' mandays to reach the overall target on risk mitigation.
			</p>
		</li>
	</ul>
';

$messageForSales = '
<html>
<head>
	<title>XChanging maturity pentagon</title>
</head>
<body>
	<p>Dear sales team, <br> <br>'. 
	$_POST['Name'] .' has used the maturity pentagon to evaluate '.
	$_POST['Company'] .'. The information is now available in the database. '.
	$_POST['Name'] .' got the following mail to summarize his/her evaluation: <br></p>
	<p> </p>
	<blockquote>
		'. $message .'
		<p>
			<small> 
				These comments are a high level estimate based on market standards 
				and XChanging experiences and your company can vary based on your typical situation.
				We recommend you to have further discussions with one of our consultants to increase the
				accuracy of this analysis.
			</small>
		</p>
	</blockquote>
</body>
</html>';

$messageForClient = '
<html>
<head>
	<title>XChanging maturity pentagon</title>
</head>
<body>
'. $message .'
	<p>
		<small> 
			These comments are a high level estimate based on market standards 
			and XChanging experiences and your company can vary based on your typical situation.
			We recommend you to have further discussions with one of our consultants to increase the
			accuracy of this analysis.
		</small>
	</p>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
$headers .= 'From: XChanging Evaluation <charlie@jstfy.com>';

// Send the emails
mail($toClient, $subjectClient, $messageForClient, $headers);
mail($toSales, $subjectSales, $messageForSales, $headers);		
?>