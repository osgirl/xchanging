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
	<form id="axisform" class="form-horizontal" method="post" action="result.php">
		<div class="tabbable tabs-left">
			<ul class="nav nav-tabs" id="leftNav">
				<li class="active">
					<a href="#GeneralInformation" data-toggle="tab">General information</a>
				</li>
				<li class="">
					<a href="#DataIntegrity" data-toggle="tab">Data integrity </a>
				</li>
				<li class="">
					<a href="#Compliance" data-toggle="tab">Compliance</a>
				</li>
				<li class="">
					<a href="#SRM" data-toggle="tab">Supplier relationship management</a>
				</li>
				<li class="">
					<a href="#CostContainment" data-toggle="tab">Cost containment</a>
				</li>
				<li class="">
					<a href="#RiskMitigation" data-toggle="tab">Risk mitigation</a>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="GeneralInformation">
					<h3> Company information </h3>
					<hr>
					<div class="control-group">
						<label class="control-label" for="Company">Company</label>
						<div class="controls">
							<input class="required" type="text" id="Company" name="Company" placeholder="Company">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="Company">Name</label>
						<div class="controls">
							<input class="required" type="text" id="Name" name="Name" placeholder="Name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="Function">Function</label>
						<div class="controls">
							<input type="text" id="Function" name="Function" placeholder="Function">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="Email">Company Email</label>
						<div class="controls">
							<input class="required email" type="email" id="Email" name="Email" placeholder="Company Email">
						</div>
					</div>
					<h3> Purchasing information </h3>
					<hr>
					<div class="control-group">
						<label class="control-label" for="PI1">What is you annual external spend in IT in K€</label>
						<div class="controls">
							<div class="input-append">
								<input class="required" type="number" id="PI1" name="PI1" placeholder="Annual spend">
								<span class="add-on">K€</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI2">How many suppliers cover 20% of the spend</label>
						<div class="controls">
							<input class="required" type="number" id="PI2" name="PI2" placeholder="Suppliers" style="size: 50px;">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI3">How many suppliers cover 80% of the spend</label>
						<div class="controls">
							<input class="required" type="number" id="PI3" name="PI3" placeholder="Suppliers">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI4">How many suppliers cover 100% of the spend</label>
						<div class="controls">
							<input class="required" type="number" id="PI4" name="PI4" placeholder="Suppliers">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI5">How many IT buyers do you have</label>
						<div class="controls">
							<input class="required" type="number" id="PI5" name="PI5" placeholder="Buyers">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI6">Spend Software in K€</label>
						<div class="controls">
							<div class="input-append">
								<input class="required" type="number" id="PI6" name="PI6" placeholder="Software spend">
								<span class="add-on">K€</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI7">Spend Hardware in K€</label>
						<div class="controls">
							<div class="input-append">
								<input class="required" type="number" id="PI7" name="PI7" placeholder="Hardware spend">
								<span class="add-on">K€</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI8">Spend IT Services in K€</label>
						<div class="controls">
							<div class="input-append">
								<input class="required" type="number" id="PI8" name="PI8" placeholder="IT Services spend">
								<span class="add-on">K€</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI9">How many purchase orders do you have on an anual basis</label>
						<div class="controls">
							<input class="required" type="number" id="PI9" name="PI9" placeholder="Purchase orders">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI10">How many softwares do you estimate to have in the company </label>
						<div class="controls">
							<input class="required" type="number" id="PI10" name="PI10" placeholder="Buyers">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="PI11">Internal spend in K€</label>
						<div class="controls">
							<div class="input-append">
								<input class="required" type="number" id="PI11" name="PI11" placeholder="Internal spend">
								<span class="add-on">K€</span>
							</div>
						</div>
					</div>
					<ul class="pager">
						<li class="next">
							<a href="#DataIntegrity" data-toggle="tab" onclick="$('#axisform').validate().form();">Data integrity &rarr;</a> 
						</li>
					</ul>
				</div>
				<div class="tab-pane" id="DataIntegrity">
					<h3> Data Integrity </h3>
					<hr>
					<legend>
						Contract database
					</legend>
					<div class="control-group">
						<label class="control-label" for="InDA1a">Which % of number of contracts is captured in an electronic database</label>
						<div class="controls">
							<div class="input-append">
								<input class="required percentage" type="number" id="InDA1b" name="InDA1b" placeholder="Target">
								<input class="required percentage" type="number" id="InDA1a" name="InDA1a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InDA2a">What % of your contracts do you follow up systematically (end date, notice period) based on database content </label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InDA2b" name="InDA2b" placeholder="Target">
								<input class="required percentage" type="number" id="InDA2a" name="InDA2a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InDA3a">What is the frequency of reporting of the contract database</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<select  id="InDA3b" name="InDA3b">
									<option value="100" >weekly</option>
									<option value="80" >monthly</option>
									<option value="60" >quarterly</option>
									<option value="20" >yearly</option>
									<option value="0" >never</option>
								</select>
								<select  id="InDA3a" name="InDA3a">
									<option value="100" >weekly</option>
									<option value="80" >monthly</option>
									<option value="60" >quarterly</option>
									<option value="20" >yearly</option>
									<option value="0" >never</option>
								</select>

							</div>
						</div>
					</div>
					<legend>
						PO accuracy
					</legend>
					<div class="control-group">
						<label class="control-label" for="InDA4a">What is the % in number of orders of maverick buying </label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InDA4b" name="InDA4b" placeholder="Target">
								<input class="required percentage" type="number" id="InDA4a" name="InDA4a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InDA5a">What is the % of Purchase orders going through an R2P(request to pay) system </label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InDA5b" name="InDA5b" placeholder="Target">
								<input class="required percentage" type="number" id="InDA5a" name="InDA5a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InDA6a">What is the % of PO's without discrepancy between Order and invoice</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InDA6b" name="InDA6b" placeholder="Target">
								<input class="required percentage" type="number" id="InDA6a" name="InDA6a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<legend>
						General ledger accuracy
					</legend>
					<div class="control-group">
						<label class="control-label" for="InDA7a">Is the general ledger detailed enough to make accurate spend
							analysis (costcentre, type of spend , capex, opex …).</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<select  id="InDA7b" name="InDA7b">
									<option value="100" >Yes, 100% covered</option>
									<option value="80" selected="selected">80% covered</option>
									<option value="20" >Limited coverage</option>
									<option value="0" >No coverage</option>
								</select>
								<select  id="InDA7a" name="InDA7a" >
									<option value="100" >Yes, 100% covered</option>
									<option value="80" selected="selected">80% covered</option>
									<option value="20" >Limited coverage</option>
									<option value="0" >No coverage</option>
								</select>

							</div>
						</div>
					</div>
					<legend>
						Sourcing Proces Follow Up
					</legend>
					<div class="control-group">
						<div class="control-group">
							<label class="control-label" for="InDA8a">What % of the PO's are signed and returned by the supplier</label>
							<div class="controls">
								<div class="input-prepend input-append">
									<input class="required percentage" type="number" id="InDA8b" name="InDA8b" placeholder="Target">
									<input class="required percentage" type="number" id="InDA8a" name="InDA8a" placeholder="Current">
									<span class="add-on">%</span>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="InDA9a">What % of orders are having a formal reception process before payment</label>
							<div class="controls">
								<div class="input-prepend input-append">
									<input class="required percentage" type="number" id="InDA9b" name="InDA9b" placeholder="Target">
									<input class="required percentage" type="number" id="InDA9a" name="InDA9a" placeholder="Current">
									<span class="add-on">%</span>
								</div>
							</div>
						</div>
					</div>
					<legend>
						Asset management
					</legend>
					<div class="control-group">
						<div class="control-group">
							<label class="control-label" for="InDA10a">What % of assets is kept in an asset management system</label>
							<div class="controls">
								<div class="input-prepend input-append">
									<input class="required percentage" type="number" id="InDA10b" name="InDA10b" placeholder="Target">
									<input class="required percentage" type="number" id="InDA10a" name="InDA10a" placeholder="Current">
									<span class="add-on">%</span>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="InDA11a">Do you have a centralized asset management process for HW and SW</label>
							<div class="controls">
								<div class="input-prepend input-append">
									<select  id="InDA11b" name="InDA11b">
										<option value="100" >Yes, 100% covered</option>
										<option value="80" selected="selected">80% covered</option>
										<option value="20" >Limited coverage</option>
										<option value="0" >No coverage</option>
									</select>
									<select  id="InDA11a" name="InDA11a">
										<option value="100" >Yes, 100% covered</option>
										<option value="80" selected="selected">80% covered</option>
										<option value="20" >Limited coverage</option>
										<option value="0" >No coverage</option>
									</select>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="InDA12a">What % of the telecom asset data is accurate</label>
							<div class="controls">
								<div class="input-prepend input-append">
									<input class="required percentage" type="number" id="InDA12b" name="InDA12b" placeholder="Target">
									<input class="required percentage" type="number" id="InDA12a" name="InDA12a" placeholder="Current">
									<span class="add-on">%</span>
								</div>
							</div>
						</div>
					</div>
					<ul class="pager">
						<li class="previous">
							<a href="#GeneralInformation" data-toggle="tab" onclick="$('#axisform').validate().form();">&larr; General information</a>
						</li>
						<li class="next">
							<a href="#Compliance" data-toggle="tab" onclick="$('#axisform').validate().form();">Compliance &rarr;</a>
						</li>
					</ul>
				</div>
				<div class="tab-pane" id="Compliance">
					<h3> Compliance </h3>
					<hr>
					<legend>
						Licence Rights Compliance
					</legend>
					<div class="control-group">
						<label class="control-label" for="InComp1a">What % of license rights are audited (internally) on an annual basis</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp1b" name="InComp1b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp1a" name="InComp1a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InComp2a">What % in value of licenses would you estimate to be compliant with the license rights</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp2b" name="InComp2b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp2a" name="InComp2a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<legend>
						Compliance with legal obligations
					</legend>
					<div class="control-group">
						<label class="control-label" for="InComp3a">What % of contracts are reviewed by legal before signature</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp3b" name="InComp3b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp3a" name="InComp3a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InComp4a">What % of your suppliers are audited on their social security or other  obligations</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp4b" name="InComp4b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp4a" name="InComp4a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InComp5a">What % of spend is delivered by audited suppliers</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp5b" name="InComp5b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp5a" name="InComp5a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InComp6a">What % of LOI signed in order to start projects before contracts are signed</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp6b" name="InComp6b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp6a" name="InComp6a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<legend>
						Compliance with internal policy
					</legend>
					<div class="control-group">
						<label class="control-label" for="InComp7a">Do you have a signature authorization policy in place </label>
						<div class="controls">
							<div class="input-prepend input-append">
								<select  id="InComp7b" name="InComp7b">
									<option value="100" >Yes, 100% covered</option>
									<option value="80" selected="selected">80% covered</option>
									<option value="20" >Limited coverage</option>
									<option value="0" >No coverage</option>
								</select>
								<select  id="InComp7a" name="InComp7a">
									<option value="100" >Yes, 100% covered</option>
									<option value="80" selected="selected">80% covered</option>
									<option value="20" >Limited coverage</option>
									<option value="0" >No coverage</option>
								</select>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InComp8a">What % of the contracts are compliant with the internal signature policy</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InComp8b" name="InComp8b" placeholder="Target">
								<input class="required percentage" type="number" id="InComp8a" name="InComp8a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InComp9a">Do you have an electronic workflow for signature of Contracts or orders</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<select  id="InComp9b" name="InComp9b">
									<option value="100" >Yes, 100% covered</option>
									<option value="80" selected="selected">80% covered</option>
									<option value="20" >Limited coverage</option>
									<option value="0" >No coverage</option>
								</select>
								<select  id="InComp9a" name="InComp9a">
									<option value="100" >Yes, 100% covered</option>
									<option value="80" selected="selected">80% covered</option>
									<option value="20" >Limited coverage</option>
									<option value="0" >No coverage</option>
								</select>
							</div>
						</div>
					</div>
					<ul class="pager">
						<li class="previous">
							<a href="#DataIntegrity" data-toggle="tab" onclick="$('#axisform').validate().form();">&larr; Data Integrity</a>
						</li>
						<li class="next">
							<a href="#SRM" data-toggle="tab" onclick="$('#axisform').validate().form();">SRM &rarr;</a>
						</li>
					</ul>
				</div>
				<div class="tab-pane" id="SRM">
					<h3> Supplier Relationship Management </h3>
					<p>
						Only for  suppliers representing 80% of spend
					</p>
					<hr>
					<legend>
						Contract Governance Terms
					</legend>
					<div class="control-group">
						<label class="control-label" for="InSRM1a">What % of contracts have SLA's where appropriate</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InSRM1b" name="InSRM1b" placeholder="Target">
								<input class="required percentage" type="number" id="InSRM1a" name="InSRM1a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InSRM2a">What % of contracts have governance process embedded</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InSRM2b" name="InSRM2b" placeholder="Target">
								<input class="required percentage" type="number" id="InSRM2a" name="InSRM2a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InSRM3a">What % of contracts have penalties/bonus systems where appropriate</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InSRM3b" name="InSRM3b" placeholder="Target">
								<input class="required percentage" type="number" id="InSRM3a" name="InSRM3a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<legend>
						PSL
					</legend>
					<div class="control-group">
						<label class="control-label" for="InSRM4a">What % of spend is covered by a  preferred suppliers list for services</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InSRM4b" name="InSRM4b" placeholder="Target">
								<input class="required percentage" type="number" id="InSRM4a" name="InSRM4a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InSRM5a">What % of suppliers is categorised (strategic/tactical)</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InSRM5b" name="InSRM5b" placeholder="Target">
								<input class="required percentage" type="number" id="InSRM5a" name="InSRM5a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InSRM6a">What % of spend is covered with partnerships (joined ventures) or co development contracts</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InSRM6b" name="InSRM6b" placeholder="Target">
								<input class="required percentage" type="number" id="InSRM6a" name="InSRM6a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<ul class="pager">
						<li class="previous">
							<a href="#Compliance" data-toggle="tab" onclick="$('#axisform').validate().form();">&larr; Compliance</a>
						</li>
						<li class="next">
							<a href="#CostContainment" data-toggle="tab" onclick="$('#axisform').validate().form();">Cost Containment &rarr;</a>
						</li>
					</ul>
				</div>
				<div class="tab-pane" id="CostContainment">
					<h3> Cost Containment </h3>
					<hr>
					<div class="control-group">
						<label class="control-label" for="InCC1a">What % of budgets are at the disposal of the sourcing organisation</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InCC1b" name="InCC1b" placeholder="Target">
								<input class="required percentage" type="number" id="InCC1a" name="InCC1a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InCC2a">What % of contracts is benchmarked</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InCC2b" name="InCC2b" placeholder="Target">
								<input class="required percentage" type="number" id="InCC2a" name="InCC2a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InCC3a">What % of reported savings by the purchasing organization is audited</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InCC3b" name="InCC3b" placeholder="Target">
								<input class="required percentage" type="number" id="InCC3a" name="InCC3a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InCC4a">What % of contracts are negotiated by professionals of negotiations (purchasing, consultants, etc.)</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InCC4b" name="InCC4b" placeholder="Target">
								<input class="required percentage" type="number" id="InCC4a" name="InCC4a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InCC5a">What % of spend is covered with a purchasing plan and/or sourcing strategy</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InCC5b" name="InCC5b" placeholder="Target">
								<input class="required percentage" type="number" id="InCC5a" name="InCC5a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InCC6a">Is the general ledger detailed enough to make accurate spend
							analysis (costcentre, type of spend , capex, opex …).</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<select id="InCC6b" name="InCC6b" >
									<option value="100" >Top deals</option>
									<option value="80" selected="selected">Well negotiated</option>
									<option value="60" >Reasonably well negotiated</option>
									<option value="40" >Not negotiated</option>
								</select>
								<select id="InCC6a" name="InCC6a" >
									<option value="100" >Top deals</option>
									<option value="80" selected="selected">Well negotiated</option>
									<option value="60" >Reasonably well negotiated</option>
									<option value="40" >Not negotiated</option>
								</select>
							</div>
						</div>
					</div>
					<ul class="pager">
						<li class="previous">
							<a href="#SRM" data-toggle="tab" onclick="$('#axisform').validate().form();">&larr; SRM</a>
						</li>
						<li class="next">
							<a href="#RiskMitigation" data-toggle="tab" onclick="$('#axisform').validate().form();">Risk Mitigation &rarr;</a>
						</li>
					</ul>
				</div>
				<div class="tab-pane" id="RiskMitigation">
					<h3> Risk Mitigation </h3>
					<hr>
					<div class="control-group">
						<label class="control-label" for="InRM1a">What % of contracts have a data security clause when required</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM1b" name="InRM1b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM1a" name="InRM1a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InRM2a">What % of IT contracts have a IT security clause when required</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM2b" name="InRM2b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM2a" name="InRM2a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InRM3a">What % of contracts have a business continuity clause when required</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM3b" name="InRM3b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM3a" name="InRM3a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InRM4a">What % of contracts are on your companies paper</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM4b" name="InRM4b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM4a" name="InRM4a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InRM5a">What % of contracts have a reversibility clause</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM5b" name="InRM5b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM5a" name="InRM5a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InRM6a">What % of suppliers have been screened on financial risks (D&amp;B...)</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM6b" name="InRM6b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM6a" name="InRM6a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="InRM7a">What % of suppliers have been screened on reputational risks</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<input class="required percentage" type="number" id="InRM7b" name="InRM7b" placeholder="Target">
								<input class="required percentage" type="number" id="InRM7a" name="InRM7a" placeholder="Current">
								<span class="add-on">%</span>
							</div>
						</div>
					</div>
					<ul class="pager">
						<li class="previous">
							<a href="#CostContainment" data-toggle="tab" onclick="$('#axisform').validate().form();">&larr; Cost Containment</a>
						</li>
						<li class="next">
							<button class="btn btn-primary" style="float: right;" type="submit">See your results &rarr;</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
$("#topnav li").removeClass("active");
$("#evaluate-li").addClass("active");
</script>
<?php include('footer.php'); ?>