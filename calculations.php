<?php
$CD = $_POST["InDA1a"] * 0.4 + $_POST["InDA2a"] * 0.4 + $_POST["InDA3a"] * 0.2;
$PO = $_POST["InDA4a"] * 0.4 + $_POST["InDA5a"] * 0.4 + $_POST["InDA6a"] * 0.2;
$GLA = $_POST["InDA7a"];
$SPF = $_POST["InDA8a"] * 0.4 + $_POST["InDA9a"] * 0.6;
$AM = $_POST["InDA10a"] * 0.4 + $_POST["InDA11a"] * 0.4 + $_POST["InDA12a"] * 0.2;
$DA = round($CD * 0.35 + $PO * 0.25 + $GLA * 0.1 + $SPF * 0.1 + $AM * 0.2);

$LRC = $_POST["InComp1a"] * 0.3 + $_POST["InComp2a"] * 0.7;
$CLO = $_POST["InComp3a"] * 0.4 + $_POST["InComp4a"] * 0.2 + $_POST["InComp5a"] * 0.2 + $_POST["InComp6a"] * 0.2;
$CIP = ($_POST["InComp7a"] * 0.5 + $_POST["InComp8a"] * 0.3 + $_POST["InComp9a"] * 0.5) / (0.5 + 0.3 + 0.5);
$COMP = round($LRC * 0.35 + $CLO * 0.35 + $CIP * 0.3);

$CGT = $_POST["InSRM1a"] * 0.4 + $_POST["InSRM2a"] * 0.4 + $_POST["InSRM3a"] * 0.2;
$PSL = $_POST["InSRM4a"] * 0.4 + $_POST["InSRM5a"] * 0.4 + $_POST["InSRM6a"] * 0.2;
$SRM = round($CGT * 0.55 + $PSL * 0.45);

$CC = round($_POST["InCC1a"] * 0.3 + $_POST["InCC2a"] * 0.2 + $_POST["InCC3a"] * 0.15 + $_POST["InCC4a"] * 0.1 + $_POST["InCC5a"] * 0.1 + $_POST["InCC6a"] * 0.15);

$RM = round(($_POST["InRM1a"] + $_POST["InRM2a"] + $_POST["InRM3a"] + $_POST["InRM4a"] + $_POST["InRM5a"] + $_POST["InRM6a"] + $_POST["InRM7a"]) / 7);

$TCD = $_POST["InDA1b"] * 0.4 + $_POST["InDA2b"] * 0.4 + $_POST["InDA3b"] * 0.2;
$TPO = $_POST["InDA4b"] * 0.4 + $_POST["InDA5b"] * 0.4 + $_POST["InDA6b"] * 0.2;
$TGLA = $_POST["InDA7b"];
$TSPF = $_POST["InDA8b"] * 0.4 + $_POST["InDA9b"] * 0.6;
$TAM = $_POST["InDA10b"] * 0.4 + $_POST["InDA11b"] * 0.4 + $_POST["InDA12b"] * 0.2;
$TDA = round($TCD * 0.35 + $TPO * 0.25 + $TGLA * 0.1 + $TSPF * 0.1 + $TAM * 0.2);

$TLRC = $_POST["InComp1b"] * 0.3 + $_POST["InComp2b"] * 0.7;
$TCLO = $_POST["InComp3b"] * 0.4 + $_POST["InComp4b"] * 0.2 + $_POST["InComp5b"] * 0.2 + $_POST["InComp6b"] * 0.2;
$TCIP = ($_POST["InComp7b"] * 0.5 + $_POST["InComp8b"] * 0.3 + $_POST["InComp9b"] * 0.5) / (0.5 + 0.3 + 0.5);
$TCOMP = round($TLRC * 0.35 + $TCLO * 0.35 + $TCIP * 0.3);

$TCGT = $_POST["InSRM1b"] * 0.4 + $_POST["InSRM2b"] * 0.4 + $_POST["InSRM3b"] * 0.2;
$TPSL = $_POST["InSRM4b"] * 0.4 + $_POST["InSRM5b"] * 0.4 + $_POST["InSRM6b"] * 0.2;
$TSRM = round($TCGT * 0.65 + $TPSL * 0.35);

$TCC = round($_POST["InCC1b"] * 0.3 + $_POST["InCC2b"] * 0.2 + $_POST["InCC3b"] * 0.15 + $_POST["InCC4b"] * 0.1 + $_POST["InCC5b"] * 0.1 + $_POST["InCC6b"] * 0.15);

$TRM = round(($_POST["InRM1b"] + $_POST["InRM2b"] + $_POST["InRM3b"] + $_POST["InRM4b"] + $_POST["InRM5b"] + $_POST["InRM6b"] + $_POST["InRM7b"]) / 7);

//Workload calculations
// Data Integrity
// Contract database
$dataIntegrity = 0;
if ($_POST['InDA1a'] < $_POST['InDA1b']) {
	if ($_POST['InDA1a'] == 100) {
		$dataIntegrity = $dataIntegrity + ($_POST['PI4'] * 1.5 * ($_POST['InDA1b'] - $_POST['InDA1a']) / 100) * 6;
	} else {
		$dataIntegrity = $dataIntegrity + ($_POST['PI4'] * 1.3 * ($_POST['InDA1b'] - $_POST['InDA1a']) / 100) * 6;
	}
}
if ($_POST['InDA2a'] < $_POST['InDA2b']) {
	$dataIntegrity = $dataIntegrity + ($_POST['PI4'] * 1.5 * ($_POST['InDA2b'] - $_POST['InDA2a']) / 100) * 30 / 60;
}
// Purchase order accuracy
if ($_POST['InDA4a'] < $_POST['InDA4b']) {
	$dataIntegrity = $dataIntegrity + ($_POST['PI9'] * 0.8 * ($_POST['InDA4b'] - $_POST['InDA4a']) / 100) * 60 / 60;
}
//Sourcing process folow-up
if ($_POST['InDA8a'] < $_POST['InDA8b']) {
	$dataIntegrity = $dataIntegrity + ($_POST['PI9'] * ($_POST['InDA8b'] - $_POST['InDA8a']) / 100) * 15 / 60;
}
if ($_POST['InDA9a'] < $_POST['InDA9b']) {
	$dataIntegrity = $dataIntegrity + ($_POST['PI10'] * ($_POST['InDA9b'] - $_POST['InDA9a']) / 100) * 15 / 60;
}
// Asset management
if ($_POST['InDA10a'] < $_POST['InDA10b']) {
	$dataIntegrity = $dataIntegrity + ($_POST['PI10'] * ($_POST['InDA10b'] - $_POST['InDA10a']) / 100) * 8;
}
$dataIntegrity = round($dataIntegrity / 8);

// Compliance
// Compliance with legal obligations
$compliance = 0;
if ($_POST['InComp3a'] < $_POST['InComp3b']) {
	$compliance = $compliance + (($_POST['InComp3b'] - $_POST['InComp3a']) / 100 * $_POST['PI4'] * 50 / 100) * 2 * 8;
}
if ($_POST['InComp7a'] < $_POST['InComp7b']) {
	$compliance = $compliance + ($_POST['InComp7b'] - $_POST['InComp7a']) / 100 * 160;
}
// Compliance with internal policy
if ($_POST['InComp8a'] < $_POST['InComp8b']) {
	$compliance = $compliance + 0.25 * $_POST['PI9'] + 2 * ($_POST['PI9'] + 0.7 * $_POST['PI4']);
}
$compliance = round($compliance / 8);

// Supplier relationship management
$supplierRelationship = 0;
if ($_POST['InSRM1a'] < $_POST['InSRM1b']) {
	$supplierRelationship = $supplierRelationship + (($_POST['InSRM1b'] - $_POST['InSRM1a']) / 100 * $_POST['PI3'] * 1.5) * 4;
}
if ($_POST['InSRM2a'] < $_POST['InSRM2b']) {
	$supplierRelationship = $supplierRelationship + (($_POST['InSRM2b'] - $_POST['InSRM2a']) / 100 * $_POST['PI3'] * 1.5) * 4;
}
if ($_POST['InSRM3a'] < $_POST['InSRM3b']) {
	$supplierRelationship = $supplierRelationship + (($_POST['InSRM3b'] - $_POST['InSRM3a']) / 100 * $_POST['PI3'] * 1.5) * 4;
}

// Cost containment
$costContainment = 0;
if ($_POST['InCC1a'] < $_POST['InCC1b']) {
	$costContainment = round(min(($_POST['InCC1b'] - $_POST['InCC1a']) * 0.7 * 0.7 / 8, 40));
}

// Risk mitigation
$riskmiti = 0;
if ($_POST['InRM1a'] < $_POST['InRM1b']) {
	$riskmiti = $riskmiti + (($_POST['InRM1b'] - $_POST['InRM1a']) / 100 * $_POST['PI3']) * 2;
}
if ($_POST['InRM2a'] < $_POST['InRM2b']) {
	$riskmiti = $riskmiti + (($_POST['InRM2b'] - $_POST['InRM2a']) / 100 * $_POST['PI3']) * 2;
}
if ($_POST['InRM3a'] < $_POST['InRM3b']) {
	$riskmiti = $riskmiti + (($_POST['InRM3b'] - $_POST['InRM3a']) / 100 * $_POST['PI3']) * 2;
}
if ($_POST['InRM4a'] < $_POST['InRM4b']) {
	$riskmiti = $riskmiti + (($_POST['InRM4b'] - $_POST['InRM4a']) / 100 * $_POST['PI3']) * 2;
}
if ($_POST['InRM5a'] < $_POST['InRM5b']) {
	$riskmiti = $riskmiti + (($_POST['InRM5b'] - $_POST['InRM5a']) / 100 * $_POST['PI3']) * 2;
}
if ($_POST['InRM6a'] < $_POST['InRM6b']) {
	$riskmiti = $riskmiti + (($_POST['InRM6b'] - $_POST['InRM6a']) / 100 * $_POST['PI4']);
}
if ($_POST['InRM7a'] < $_POST['InRM7b']) {
	$riskmiti = $riskmiti + (($_POST['InRM7b'] - $_POST['InRM7a']) / 100 * $_POST['PI4']);
}

// manhours to mandays conversion
$workload = $dataIntegrity + $compliance + $supplierRelationship + $costContainment + $riskmiti;

// Worst keypoint calculation
// Data integrity
$worstDI = 0;
$worstDIString = "undefined";
if ($TCD - $CD > $worstDI) {
	$worstDI = $TCD - $CD;
	$worstDIString = "the contract database";
}
if ($TPO - $PO > $worstDI) {
	$worstDI = $TPO - $PO;
	$worstDIString = "purchase order accuracy";
}
if ($TGLA - $GLA > $worstDI) {
	$worstDI = $TGLA - $GLA;
	$worstDIString = "general ledger accuracy";
}
if ($TSPF - $SPF > $worstDI) {
	$worstDI = $TSPF - $SPF;
	$worstDIString = "sourcing process follow up";
}
if ($TAM - $AM > $worstDI) {
	$worstDI = $TAM - $AM;
	$worstDIString = "asset management";
}

// Compliance
$worstComp = 0;
$worstCompString = "undefined";
if ($TLRC - $LRC > $worstComp) {
	$worstComp = $TLRC - $LRC;
	$worstCompString = "licence rights compliance";
}
if ($TCLO - $CLO > $worstComp) {
	$worstComp = $TCLO - $CLO;
	$worstCompString = "compliance with legal obligations";
}
if ($TCIP - $CIP > $worstComp) {
	$worstComp = $TCIP - $CIP;
	$worstCompString = "compliance with internal policy";
}

// Supplier relationship manager
$worstSRM = 0;
$worstSRMString = "undefined";
if ($TCGT - $CGT > $worstSRM) {
	$worstSRM = $TCGT - $CGT;
	$worstSRMString = "contract governance terms";
}
if ($TPSL - $PSL > $worstSRM) {
	$worstSRM = $TPSL - $PSL;
	$worstSRMString = "the preferred suppliers list";
}

// Cost Containment
// Only one block, so no worst part.

// Risk mitigation
// Only one block, so no worst part.

// Worst block
$worst = 0;
$worstString = "test";
$worstWorkload = "undefined";
if ($TDA - $DA > $worst) {
	$worst = $TDA - $DA;
	$worstString = "data integrity";
	$worstWorkload = $dataIntegrity;
}
if ($TCOMP - $COMP > $worst) {
	$worst = $TCOMP - $COMP;
	$worstString = "compliance";
	$worstWorkload = $compliance;
}
if ($TSRM - $SRM > $worst) {
	$worst = $TSRM - $SRM;
	$worstString = "supplier relationship management";
	$worstWorkload = $supplierRelationship;
}
if ($TCC - $CC > $worst) {
	$worst = $TCC - $CC;
	$worstString = "Cost Containment";
	$worstWorkload = $costContainment;
}
if ($TRM - $RM > $worst) {
	$worst = $TRM - $RM;
	$worstString = "risk mitigation";
	$worstWorkload = $riskmiti;
}

if ((abs($TCC - $CC)) < 3) {
	$amount = round($_POST["PI1"] * 0.03);
	$ccString1 = "very good";
	$ccString2 = "with a potential savings of " . $amount . " k&euro;.";
} elseif ((abs($TCC - $CC)) < 10) {
	$amount = round($_POST["PI1"] * 0.05);
	$ccString1 = "good";
	$ccString2 = "We anticipate that improvement of the financials of the deals is possible to
			an extent of 4-5%. This would represent " . $amount . " k&euro;.";
} elseif ((abs($TCC - $CC)) < 20) {
	$amount = round($_POST["PI1"] * 0.07);
	$ccString1 = "reasonable";
	$ccString2 = "with a potential savings of " . $amount . " k&euro;.";
} else {
	$amount = round($_POST["PI1"] * 0.09);
	$ccString1 = "bad";
	$ccString2 = "with a potential savings of " . $amount . " k&euro;.";
}

$current = ($CC + $COMP + $SRM + $RM + $DA) / 5;
$target = ($TCC + $TCOMP + $TSRM + $TRM + $TDA) / 5;
if ((abs($current - $target)) < 3) {
	$overall = "very good";
	$overallString = "The current situation of your company matches the expected objectives. In order to 
		optimise further to be 100% compliant with the target we anticipate you require " . $workload . " mandays
		of work " . $ccString2;
} elseif ((abs($current - $target)) < 25) {
	$overall = "good";
	$overallString = "The current situation of your company is close to your expectations. Some improvement
		can still be made and we estimate that this would require " . $workload . " mandays of work. " . $ccString2;
} else {
	$overall = "bad";
	$overallString = "A lot of work needs to be done. " . $ccString2;
}

//implode values for charting
$target_array = array($TCC,$TDA,$TCOMP,$TSRM,$TRM);
$target_string = implode(",",$target_array);

$current_array = array($CC,$DA,$COMP,$SRM,$RM);
$current_string = implode(",",$current_array);
?>