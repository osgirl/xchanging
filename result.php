<?php include('calculations.php'); ?>
<?php include('top.php'); ?>
<div class="container">
	<div class="well">
		<div id="Title">
			<h1> Evaluation to five axis </h1>
			<p>
				<span style="line-height: 1.6em;"> If I would be provided with a decent description of the evaluation, this
					would be a great place to elaborate on why a company should do this evaluation.
					Below the 3 headings, we should write three keypoints about why this project
					is awesome. </span>
				<br>
				&nbsp;
			</p>
		</div>
	</div>
	<div class="tabbable tabs-left">
		<ul class="nav nav-tabs" id="leftNav">
			<li class="active">
				<a href="#GeneralInformation">General information</a>
			</li>
			<li class="">
				<a href="#DataIntegrity">Data integrity </a>
			</li>
			<li class="">
				<a href="#Compliance">Compliance</a>
			</li>
			<li class="">
				<a href="#SRM">Supplier relationship management</a>
			</li>
			<li class="">
				<a href="#CostContainment">Cost containment</a>
			</li>
			<li class="">
				<a href="#RiskMitigation">Risk mitigation</a>
			</li>
		</ul>
		<div class="tab-content">
			<h2>Evaluation Analysis</h2>
			<p>The overall performance of the company is <?php echo $overall ?></p>
			<section>
				<a id="GeneralInformation"></a>
				<p style="text-align: center;">
					<img src="create_chart.php?target=<?php echo $target_string; ?>&current=<?php echo $current_string; ?>" />
				</p>
				<p> <?php echo $overallString ?></p>
				<p> It appears that the biggest gap is situated in <?php echo $worstString ?>.
					Your actual score is <?php echo $worst ?>% below target, which represents a 
					workload of <?php echo $worstWorkload ?> mandays.
				</p>
				<hr>
			</section>
			<section>
				<a id="DataIntegrity"></a>
				<h3> Data Integrity </h3>
				<p> Your average target is <?php echo($TDA) ?>% and your actual score is <?php echo($DA) ?>%.</p>
				<p> On data integrity, your overall score is 
					<?php
					if (($TDA - $DA) < 3) {
						echo("good");
					} elseif (($TDA - $DA) < 25) {
						echo("reasonable");
					} else {
						echo("bad");
					}
				?> compared to the target. The weakest point seems to be <?php echo($worstDIString) ?>. 
					We expect an additional workload of <?php echo($dataIntegrity)?> mandays to reach the overall target on data integrity.
				</p>
				<hr>
			</section>
			<section>
				<a id="Compliance"></a>
				<h3> Compliance </h3>
				<p> Your average target is <?php echo($TCOMP) ?>% and your actual score is <?php echo($COMP) ?>%.</p>
				<p> On compliance, your overall score is 
					<?php
					if (($TCOMP - $COMP) < 3) {
						echo("good");
					} elseif (($TCOMP - $COMP) < 25) {
						echo("reasonable");
					} else {
						echo("bad");
					}
				?> compared to the target. The weakest point seems to be <?php echo($worstCompString) ?>. 
					We expect an additional workload of <?php echo($compliance)?> mandays to reach the overall target on compliance.
				</p>
				<hr>
			</section>
			<section>
				<a id="SRM"></a>			
				<h3> Supplier Relationship Management </h3>
				<p> Your average target is <?php echo($TSRM) ?>% and your actual score is <?php echo($SRM) ?>%.<br/>
					In this analysis we only take into account the suppliers representing 80% of the total spend. </p>
				<p> On supplier relationship management, your overall score is 
					<?php
					if (($TSRM - $SRM) < 3) {
						echo("good");
					} elseif (($TSRM - $SRM) < 25) {
						echo("reasonable");
					} else {
						echo("bad");
					}
				?> compared to the target. Your weakest point seems to be <?php echo($worstSRMString) ?>.
					We expect an additional workload of <?php echo($supplierRelationship)?> mandays to reach the overall target on supplier relationship management.
				</p>
				<hr>
			</section>
			<section>
				<a id="CostContainment"></a>			
				<h3> Cost Containment </h3>
				<p> Your average target is <?php echo($TCC) ?>% and your actual score is <?php echo($CC) ?>%. <?php echo($ccString2) ?>.
				</p>
				<p> On cost containment, your overall score is 
					<?php
					if (($TCC - $CC) < 3) {
						echo("good");
					} elseif (($TCC - $CC) < 25) {
						echo("reasonable");
					} else {
						echo("bad");
					}
				?> compared to the target.
					We expect an additional workload of <?php echo($costContainment)?> mandays to reach the overall target on cost containment.
				</p>
				<hr>
			</section>
			<section>
				<a id="RiskMitigation"></a>			
				<h3> Risk Mitigation </h3>
				<p> Your average target is <?php echo($TRM) ?>% and your actual score is <?php echo($RM) ?>%.</p>
				<p> On risk mitigation, your overall score is 
					<?php
					if (($TRM - $RM) < 3) {
						echo("good");
					} elseif (($TRM - $RM) < 25) {
						echo("reasonable");
					} else {
						echo("bad");
					}
				?> compared to the target. 
					We expect an additional workload of <?php echo($riskmiti)?> mandays to reach the overall target on risk mitigation.
				</p>
			</section>
		</div>
	</div>
</div>
<script type="text/javascript">
$("#leftNav a").click(
	function(e){
		$("#leftNav li").removeClass("active");
		$("#leftNav [href=\""+$(this).attr("href")+"\"]").parent().addClass("active");
	}
)

$("#results-li").show();
$("#topnav li").removeClass("active");
$("#results-li").addClass("active");
</script>
<?php include('footer.php'); ?>
<?php include('mail.php'); ?>