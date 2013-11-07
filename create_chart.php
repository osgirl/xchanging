<?php 
/* Get data */
$target_data = explode(",",$_GET['target']);
$current_data = explode(",",$_GET['current']);

/* pChart library inclusions */
include("scripts/pchart/class/pData.class.php");
include("scripts/pchart/class/pDraw.class.php");
include("scripts/pchart/class/pRadar.class.php");
include("scripts/pchart/class/pImage.class.php");

/* Create and populate the pData object */
$MyData = new pData();   
$MyData->addPoints($target_data,"Target");  
$MyData->addPoints($current_data,"Current");  
$MyData->setSerieDescription("Target","Target");
$MyData->setSerieDescription("Current","Current");
$MyData->setPalette("Target",array("R"=>0,"G"=>72,"B"=>144)); //darkblue
$MyData->setPalette("Current",array("R"=>0,"G"=>154,"B"=>217)); //lightblue

/* Define the absissa serie */
$MyData->addPoints(array("Cost Containment", "Data Integrity", "Compliance", "Supplier Relationship Manager", "Risk Mitigation"),"Labels");
$MyData->setAbscissa("Labels");

/* Create the pChart object */
$myPicture = new pImage(700,400,$MyData);

/* Set the default font properties */ 
$myPicture->setFontProperties(array("FontName"=>"scripts/pchart/fonts/GeosansLight.ttf","FontSize"=>10));

/* Enable shadow computing */ 
$myPicture->setShadow(TRUE,array("X"=>2,"Y"=>2,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10));

/* Create the pRadar object */ 
$SplitChart = new pRadar();

/* Draw a radar chart */ 
$myPicture->setGraphArea(0,10,700,400);
$Options = array("DrawPoly"=>TRUE,"WriteValues"=>TRUE,"ValueFontSize"=>8,"Layout"=>RADAR_LAYOUT_STAR,"LabelPos"=>RADAR_LABELS_HORIZONTAL,"AxisRotation"=>270,"FontName"=>"scripts/pchart/fonts/GeosansLight.ttf","FontSize"=>10);
$SplitChart->drawRadar($myPicture,$MyData,$Options);

/* Write the chart legend */ 
$myPicture->drawLegend(530,250,array("Style"=>LEGEND_BOX,"Mode"=>LEGEND_VERTICAL));

/* Render the picture (choose the best way) */
$myPicture->autoOutput("pictures/fiveaxis.png");
?>