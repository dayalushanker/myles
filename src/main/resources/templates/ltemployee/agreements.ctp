<?php
	//echo '<pre>';
	//print_r($userinfo);
	$userinfo = $userinfo['user'];
	
?>
<style type="text/css">
	
ol {
  padding: 0;
}
.iconbox {
	position: absolute;
    right: 12px;
    top: 7px;
    padding: 0;
}
 .inner {
  padding-left: 20px;
  overflow: hidden;
  display: none;
  padding-top: 15px;
}
.inner li {
	margin-left: 30px;
}

ol li {
  margin: 0.5em 0;
}

span.toggle {
    width: 100%;
    display: block;
    background:#f8f8f8;
    color: #333;
    border: 1px solid #ddd;
    padding: 0.75em;
    border-radius: 0.15em;
    transition: background 0.3s ease;
    position: relative;
    cursor: pointer;
}
span.toggle:hover {
	background: #eaeaea;
}

a.span:hover {
  background: rgba(0, 0, 0, 0.9);
}
.minus-remove {
	display: none;
}
.underline {
	text-decoration: underline;
	font-weight: 600;
}
.listAgreenent li {
	display: block;
	margin-bottom: 10px;
	padding-left: 0px;
}

.listAgreenent2 {
	display: block;
	margin:12px 0 12px 15px;
}
.listAgreenent2 li {
	padding-bottom: 10px;
}
.hdnn.toggle b {
	font-weight: 400;
}
.iconbox img {
	width: 10px;
}





.list01 {
	margin-left: 15px;
	margin-top: 20px;
}
.list01-1 {
	margin-left: 25px;
	margin-top: 20px;
}
.list01-1 li {
    line-height: 22px;
    padding-bottom: 10px;
}

.list01-2 {
	margin-left: 25px;
	margin-top: 10px;
}
.list01-2 li {
    line-height: 22px;
    padding-bottom: 5px;
    margin: 0px;
}
.hdn2 {
	font-size: 18px;
	font-weight: 600;
	color: #000;
	text-decoration: underline;
}
.hdn3 {
	font-size: 16px;
	font-weight: 600;
	color: #000;
}



</style>



		
			<div class="alignCenter">
					<h2 class="hdnmain underline">CAR SUBSCRIPTION AGREEMENT</h2>
				</div>
				<br>
				<p>This Car Subscription Agreement <b>(“Agreement”)</b> is made and entered on this <span class="underline"><?php echo date("l"); ?></span> of <span class="underline"><?php echo date('d-M') ?>, <?php echo date('Y');?></span>  <b>(“Effective Date”)</b> at <strong class="SProviderCity"><?php echo $userinfo['LtrSubcity']; ?></strong>.</p>

				

				<br>

				<div class="alignCenter"><h2 class="hdnmain">By and between</h2></div>
				<br>

				<p><?php echo $userinfo['LtrSubName'];?>, a company/proprietorship firm/Partnership firm/individual/HUF incorporated under the laws of India, having its place of business at <?php echo $userinfo['permanantAddress'];?> (Hereinafter referred as “Subscriber”) and which term shall unless excluded by or repugnant to the context shall mean and include its successors, administrators and assignees etc. of the FIRST PART.</p>

				<p><b>AND</b></p>

				<p>Myles Automotive Technologies Private Limited, a company incorporated under the Companies Act, 2013, having its registered office at 9th Floor, Videocon Towers, E1 Block, Jhandewalan Extension, New Delhi – 110055, (hereinafter referred as “Myles”) and which term shall unless excluded by or repugnant to the context shall mean and include its successors, administrators and assignees etc. of the SECOND PART.</p>


				<p><b>AND</b></p>

				<p><?php echo $carProviderName;?>, a company/proprietorship firm/Partnership firm/individual/HUF incorporated under the laws of India, having its place of business at <?php echo $carProviderAddressOne.' '.$carProviderAddressSecond; ?>(hereinafter referred as the “Business Partner” and which term shall unless excluded by or repugnant to the context shall mean and include its successors, administrators and assignees etc. of the THIRD PART.</p>

				<br>
				<br>
				<br>


				<p>The Subscriber Myles and Business Partner may be collectively referred to as the <b>‘Parties’</b> and individually as <b>‘Party’</b></p>

				<p><b>WHEREAS:</b></p>

				<ol class="list01" type="A">
					<li>Myles facilitates vehicle owners and subscribers to engage in the business of providing and subscribing to self drive cars, by operating an e-commerce platform available at <a target="_blank" href="https://www.mylescars.com"> www.mylescars.com</a> and software applications for different mobile operating systems (<strong>“E-Commerce Platforms</strong>”); </li>
					<li>The Business Partner is desirous of providing his private vehicle on subscription basis and has registered it (“<strong>Vehicle</strong>”) on the Myles E-Commerce Platform.</li>
					<li>The Business Partner is in the possession of the Vehicle and the Vehicle is registered as a private vehicle in the name of the Business Partner in accordance with the Motor Vehicles Act, 1988 (the “<strong>Act</strong>” ) and the provisions thereof. </li>
					<li>The Subscriber wishes to rent the Vehicle on a Subscription basis for a agreed term and has therefore approached the Business Partner, through the Myles E-Commerce Platform, for the purposes of availing the services of the Business Partner for subscribing and for plying the Vehicle within India as per details mentioned herein.</li>
					<li>The Business Partner has agreed to make available and the Subscriber has agreed to take the Vehicle on subscription basis, on and subject to the mutually agreed terms and conditions appearing hereinafter.</li>
					<li>The Business Partner has requested Myles and Myles has agreed to allow access to the Business Partner to its proprietary technology platform to deliver the services to the Subscriber as per requirements of the Subscriber.</li>
				</ol>

				
<p><strong>NOW THEREFORE, THIS AGREEMENT WITNESSETH AND IT IS HEREBY AGREED BY AND BETWEEN THE PARTIES AS FOLLOWS:</strong></p>

<ol type="1" class="list01">
<li><span class="hdnn"><b>Subscription to Vehicles</b></span>
	<ol class="list01-1">

	<li>The Subscriber has placed a request before the Business Partner, through the ECommerce
	Portal to take the Vehicle on subscription (“<strong>Subscription Order</strong>”) for a
	period of <span class="LtrSubTenure underline"><?php echo $userinfo['LtrSubTenure']; ?></span> calendar months(“<strong>Subscription Period</strong>”) and the Business Partner has confirmed the availability of the Vehicle for subscription during the Subscription Period.</li>

	<li>Subscription Order received by Myles via PO No. ………………… dated ………………… </li>

	<li>Myles hereby confirms that the Subscriber has paid, in respect of the Subscription Order, an advance booking amount equivalent to the Subscription Price (defined hereinafter) for a period of <span class="LtrSubTenure underline"><?php echo $userinfo['LtrSubTenure']; ?></span> calendar months (“<strong>Advance Subscription Amount</strong>”),
	along with the irrevocable standing instructions issued by the Subscriber in the format
	appended as <strong class="underline">Annexure B</strong> to this Agreement 2 times the amount of the Advance
	Subscription Amount i.e. INR <span class="DoubleLtrSubAmount underline"><?php $userinfo['LtrSubMaxAmountWithoutcomma']; ?></span>/- (Indian Rupees <span class="LtrSubMaxAmountinWords underline"><?php echo $userinfo['LtrSubMaxAmountinWords']; ?></span> only) ("<strong>Standing Instructions</strong>") in favour of Myles and that Myles has received the said payment towards the Advance Subscription Amount and the irrevocable Standing Instructions on behalf of the Business Partner.</li>

	<li>During the Subscription Period, the Subscriber shall be permitted to use the Vehicle for a maximum of <span class="ltrkm underline"><?php echo $userinfo['kmuses']; ?></span> kilometres in each calendar month and <span class="ltrkm underline"><?php echo $userinfo['kmuses']; ?></span> kilometres in each subsequent calendar month (“<strong>Permitted Mileage</strong>”), as detailed in <strong class="underline">Annexure A</strong>
	annexed herewith.</li>

	<li>
	In the event that the Subscriber exceeds the Permitted Mileage during any calendar month in the Subscription Period, the Subscriber shall pay an additional fee of INR <span class="ltrextrakmrate underline"><?php echo $userinfo['extrakmrate']; ?></span>/- (Indian Rupees <span class="ltrextrakmrateinword underline"><?php echo $userinfo['extrakmrateinwords']; ?></span> only) for every kilometre over the Permitted Mileage during such calendar month.
	</li>

	<li>
	The Subscriber hereby authorizes the Business Partner and/or Myles to use the
	debit/credit card of the Subscriber to debit payments due to the Business Partner in
	terms of this Agreement, including but not limited to:
	<ol class="list01" type="a">
		<li>any shortfall or failure to pay inter-state taxes/ duties/ tolls or any other
		government tax and levy during the Subscription Period;</li>

		<li>any challan raised against the Business Partner and/or Myles during the
		subscription period;</li>

		<li>any charges in respect of the extension of the Subscription Period;</li>

		<li>any damage, loss or injury to the Vehicle during the subscription period;</li>

		<li>any expense pertaining to the service availed by the Subscriber from the
		Business Partner and/or Myles;</li>

	</ol>
	<p>through irrevocable Standing Instructions issued by the Subscriber in favour of
	Myles. The Standing Instructions shall remain valid for a period of 15 days from the
	date of handing over of possession of the Vehicle by the Subscriber to the Business
	Partner and shall be used in any event and towards all reimbursements, expenses,
	losses, costsor the payment made by the Subscriber, or under any other provision of
	this Agreement. In the event that any additional information/ execution of further
	documents is required in this regard, the Subscriber undertakes to provide such
	information/ execute documents at the request of the Business Partner or Myles.</p>
</li>
<li>The Business Partner hereby agrees to provide to the Subscriber and the Subscriber
hereby agrees to take on subscription the Vehicle, subject to all the terms and
conditions contained herein.</li>
<li>The Subscriber shall simultaneously with the placement of the Subscription Order,
submit with the Business Partner, through the E-Commerce Portal, a copy of a valid
driving license, passport/ Aadhar Card held by the Subscriber and/or by such other
person designated by the Subscriber to drive the Vehicle and any other document that
may be required by the Business Partner. The Subscriber hereby represents and
warrants that the Subscriber shall submit genuine, correct and accurate documents, set
out in this Clause, to the Business Partner.</li>

<li>The Business Partner upon the receipt of the Subscription Order and upon receipt of
the Advance Subscription Amount shall confirm the booking and the Business Partner
shall send confirmation e-mail to the Subscriber, through the E-Commerce Portal. The
Subscriber shall thereafter reach the designated location, as informed by the Business
Partner and the possession of the Vehicle along with the documents in relation to the
Vehicle as appended in <strong>Annexure C</strong> to this Agreement (“<strong>Vehicle Documents</strong>”) shall be handed over by the Business Partner to the Subscriber, to be held carefully on
behalf of the Business Partner during the Subscription Period.</li>

<li>If the Subscriber does not show up for picking up the Vehicle within 2 hours of
scheduled pick up time, the booking for the said Vehicle shall be considered as no
show and be cancelled and the entire Advance Subscription Amount shall be forfeited
by the Subscriber.</li>
<li>In the event of the driving license being changed, altered, expired or renewed during
the Subscription Period, a copy of the same shall be uploaded by the Subscriber on the
web portal www.mylescars.com [OR] a copy of the same shall be handed over to the
Business Partner within 24 hours of such renewal of the driving license. However, in
the event the driving license of the Subscriber has expired or has become invalid for
any reason whatsoever, during the period where the Vehicle is in possession of the
Subscriber for its use, the Subscriber shall within 24 hours of the driving license of the
Subscriber having expired or having become invalid, shall hand over the possession of
the Vehicle to the Business Partner along with the Vehicle Documents.</li>
</ol>

</li>


					<br>


					<li><span class="hdnn"><b>Subscription Price</b></span>
						<ol type="1" class="list01-1">
							
							<li>The Subscriber shall pay to the Business Partner, a subscription price of INR <span class="LtrSubMonthlyAmount underline"><?php echo $userinfo['LtrSubMonthlyAmount']; ?> (including GST)</span> (Indian Rupees <span class="ltrSubMonthlyAmountInWords underline"><?php echo $userinfo['LtrSubMonthlyAmountInWords']; ?></span> only) for every calendar month or part thereof during the Subscription Period (“<strong>Subscription Price</strong>”). In the event that the number of calendar month in the Subscription Period is not a whole number, the Subscription Price shall be pro-rated accordingly to account for such portion of the calendar month in the Subscription Period.</li>
							<li>The total Subscription Price for the entire Subscription Period shall be due and
					payable to the Business Partner by the Subscriber at the beginning of each calendar
					month of the Subscription Period. The balance amount (if any) is payable upon the
					return of the Vehicle to the Business Partner in a condition satisfactory to the Business
					Partner. Such amount payable at the expiry of the Subscription Period shall be reduced
					by the Advance Subscription Amount paid by the Subscribed at the beginning of the
					Subscription Period.</li>
							<!-- <li>In the event the Subscriber notifies the Business Partner of his intention to return the Vehicle at any time prior to the expiry of the Subscription Period, the Subscriber shall pay the liable to pay Subscription Price as provided under Part <strong>A Annexure D</strong> as per the slab rated detailed under Part <strong>B Annexure D</strong>.</li> -->

							<li>
								In the event the Subscriber notifies the Business Partner of his intention to return the Vehicle at any time prior to the expiry of the Subscription Period, the Subscriber shall be liable to pay Subscription Price as provided under Part <strong>A Annexure C</strong> as per the slab rated detailed under <strong>Part B Annexure C</strong>.
							</li>
						</ol>
					</li>



					<br>


					<li><span class="hdnn"><b>Maintenance and Repair</b></span>
						<ol type="1" class="list01-1">
							
							<li>The Subscriber shall be responsible for the general day to day maintenance, repair and
					upkeep of the Vehicle. The parties understand that it shall be the Business Partner’s
					responsibility to ensure that the Vehicle is taken to the authorised dealerships for its
					scheduled service maintenance on such dates as have been detailed in <strong>Annexure D</strong>
					hereto (“<strong>Maintenance Schedule</strong>”). The entire cost of such routine scheduled
					maintenance shall be borne by the Business Partner. In the event that the Subscriber
					fails to meet the timelines as prescribed under the Maintenance Schedule, the
					Subscriber shall be charged a <span class="ltrpenalty">penalty of INR 5000</span>/- (Indian Rupees <span class="penaltyamountinword underline"><?php echo $userinfo['penaltyamountinword']; ?></span>
					only) in addition to the Subscription Price and the same shall be subject to be debited
					by the Business Partner through Myles by way of the Standing Instructions issued by
					the Subscriber in Clause 1.5 above.</li>


				


							<li>In addition, the Business Partner shall provide the requisite road side assistance to the
					Subscriber and ensure that the Vehicle/(s) are promptly repaired in the event of any
					breakdowns, accidents or any other reasons, all at authorized dealerships or at the
					Partner workshops as approved by the OEM manufacturer of the car/Myles.</li>

							<li>The Subscriber shall be entirely responsible for the running cost of the Vehicle,
					including but not limited to the cost of the fuel required for running the Vehicle during
					the Subscription Period.</li>
						</ol>
					</li>


					<br>


					<li><span class="hdnn"><b>Insurance</b></span>
						<ol type="1" class="list01-1">
							<li>The Business Partner agrees and undertakes to take out and maintain a comprehensive
					insurance including third party liability, covering the occupants of the Vehicle during
					the Subscription Period. The Business Partner agrees that they will, on request,
					provide the Subscriber with evidence, prior to the handing over the Vehicle, of the
					complete validity of its insurance policy. However Myles gives no warranty or
					assurance in this regard and it is the Business Partner’s responsibility to verify that
					their insurance provides adequate cover.</li>
							<!-- <li>The Business Partner and the Subscriber are aware that standard non-commercial
					insurance policies may refuse to cover loss or damage arising in the event that the
					Business Partner had made or was seeking to make a profit.</li>-->
						</ol>
					</li>



					<br>



					<li><span class="hdnn"><b>Representations and Warranties</b></span>
						<ol type="1" class="list01-1">
							<li>The Business Partner hereby represents, agrees, undertakes and covenants that:
								<ol type="a" class="list01-2">
									<li>There is no restriction, impediment on account whereof the Business Partner is in any manner, prevented from sharing the Vehicle on the E-Commerce Platform in the manner herein provided; and</li>
									<li>The Business Partner has full right and absolute authority to execute this Agreement and share the Vehicle with the Subscriber in accordance with the terms of this Agreement.</li>
								</ol>
							</li>
						

							<li>The Subscriber hereby represents, agrees, undertakes and covenants that:
								<ol type="a" class="list01-2">
									<li>He/she has the full right and absolute authority to execute this Agreement and fulfil the obligation and covenants contained herein; and</li>
									<li>on expiry or sooner determination of this Agreement, Subscriber shall handover the Vehicle, to Myles/ Business Partner in reasonable commercial condition save and except reasonable/actual damage as disclosed to the Business Partner and repaired or normal wear and tear caused to the Vehicle during the Subscription Period by the Subscriber;</li>
									<li>all documents and information provided by the Subscriber at the beginning of the Subscription Period, including but not limited to the driver’s license, are true and accurate;</li>
								</ol>
							</li>
							<li>Myles hereby represents, agrees, undertakes and covenants that Myles has full right
					and absolute authority to execute this Agreement and fulfill the obligations and
					covenants contained herein:</li>
						</ol>
					</li>


					<br>
					<br>



					<li><span class="hdnn"><b>Terms of Usage</b></span>
						<ol type="1" class="list01">
							
							<li>The Subscriber represents and warrants to the Business Partner that the Vehicle provided to it by the Business Partner shall be self-driven by the Subscriber only and the Subscriber shall not assign/sub rent/license the rights or obligations in the Vehicle or under this Agreement to any other person whatsoever and shall restrict the use of the Vehicle to the Permitted Mileage. In the event of breach of this Clause, all liabilities in relation to the Vehicle will be passed on to Subscriber in addition to forfeiture of the Advance Subscription Amount and amount up to / equivalent to the amount as per the Standing Instructions.</li>

							<li>In case the Vehicle is supposed to be driven by any other person apart from the Subscriber, the Subscriber shall ensure that such driver is holding & carrying a valid driving license and the Subscriber shall obtain prior written consent of the Business Partner for such person at the time of placing the Subscription Order, such that the additional driver’s name, driving license or any other document as may be demanded by the Business Partner must be submitted along with the Subscription Order and the same is approved by the Business Partner. In the event the Subscriber allows or permits use of the Vehicle by any person other than the Subscriber without obtaining a prior written approval from the Business Partner, the Subscriber shall be liable to pay damages to the tune of INR <span class="penalty_amount underline"><?php echo $userinfo['penalty_amount']; ?></span> to the Business Partner for each such unauthorized use of the Vehicle in addition to the forfeiture of the amount as per the Standing Instructions by the Business Partner.</li>

							<li>The Subscriber agrees that he will return the Vehicle, together with all its standard fitments, Vehicle documents, accessories and equipment with which it was handed over to Subscriber, except the normal wear and tear, to the agreed return location specified on the date specified in the Subscription Order, unless the Subscriber requests and Business Partner agrees to an extension of the agreement in writing or sooner upon demand being made by the Business Partner. In the event where the Subscriber desires to return the Vehicle before expiry of the Subscription Period, the Subscriber shall be liable to pay charges as determined under Clause 2 hereof. The Subscriber shall ensure that the Vehicle, along with accessories and requisite documents, are in proper operating condition, clean and fit for the purpose for which it is required, to the satisfaction of the Business Partner. </li>

							<li>In event of damage caused to any part of the Vehicle or any accessory thereof, other than normal wear and tear thereof, the Subscriber agrees to repair and/or replace the same forthwith at his/her own expense with a part/accessory/tyre of the same dimension/brand and in equivalent state of wear at its own cost. The odometer and accessories of the Vehicle shall not be damaged//tampered and in case it is done, the Subscriber is liable for the replacement of the same at its own cost. No parts of the Vehicle shall be replaced without obtaining a prior written consent of the Business Partner.</li>

							<li>The Subscriber shall return the possession of the Vehicle to the Business Partner in the condition, subject to normal wear and tear in which the delivery of the same was taken. In the event, upon the handing over of the Vehicle by the Subscriber, the Business Partner finds any defect in the Vehicle or any part or accessory of the Vehicle is damaged or defective, the Business Partner shall deduct such amount as required for repairing such defect in Vehicle through Standing Instructions or recover from the Subscriber. In cases of latent or hidden defect which the Business Partner discovers within a period of 15 days from the date of handing over the possession of the Vehicle by the Subscriber, the Business Partner shall deduct/debit such amount equivalent to the cost of repairing such defect in Vehicle through Standing Instructions. The Subscriber shall be refunded with the unadjusted amount as per the Standing Instructions after expiry of aforesaid period of 15 days or Business Partner shall recover from Subscriber.</li>

							<li>The Subscriber shall pay all the toll taxes and other taxes linked with usage of the vehicles as per the applicable laws. The Subscriber shall pay the state entry tax as per the applicable laws irrespective of the period of subscription of the Vehicle.</li>

							<li>The Subscriber shall hand over the possession of the Vehicle to the Business Partner upon the expiry or early termination, as may be the case, of the Subscription Period. The Vehicle Documents shall be handed over to the Business Partner by the Subscriber simultaneously with handing over of the possession of the Vehicle to the Business Partner with any demur or delay. The Subscriber hereby acknowledges and agrees that the amount as per the Standing Instructions shall be returned by the Business Partner only after 15 days of handing over possession of the Vehicles along with Vehicle Documents and it shall not raise any objection to the same in any manner whatsoever. The Subscriber hereby acknowledges and agrees that the said period of 15days is taken by the Business Partner to find any latent or hidden defect in the Vehicles caused by the Subscriber, which is sufficient and shall not be objected by the Subscriber in future in any manner whatsoever. In case of any defect which is revealed subsequently to the handing over of the vehicle to the Business Partner by the Subscriber, then the Business Partner reserves a right to take appropriate legal recourse against the Subscriber and all the dues against the Subscriber shall be charged together with interest at the rate of 24% from the date of booking to the date of its realization to the Business Partner by the Subscriber.</li>

							<li>It shall be the responsibility of the Subscriber to take care of all its belongings in the Vehicle and check the same at the time of handing over the possession of the Vehicle or at the time of repossession of the Vehicles by the Business Partner in terms of this Agreement. The Business Partner shall not be liable for loss or damage to any belongings of the Subscriber and the Subscriber shall not claim from the Business Partner for the loss or damage of any of its belongings.</li>

							<li>The Subscriber shall neither use nor allow the Vehicle to be used for any illegal or unlawful activity or for any other purposes contrary to the provisions of the applicable laws.</li>

							<li>The Subscriber shall neither consume nor allow the consumption of alcohol, tobacco, cigarettes or any contraband or psychotropic substance in the Vehicle.</li>

							<li>The Subscriber shall not carry or allow or cause any person to carry any arms, ammunition or inflammable or explosive substance inside the Vehicle. </li>

							<!-- <li>The Subscriber hereby acknowledges and agrees to the following:


								<ol class="listAgreenent pd" type="a">
									<li>Handing over the Vehicle in the same good order and condition to the
					satisfaction of the Business Partner;</li>
									<li>The Subscriber shall use the Vehicle in a defined and stipulated area.</li>
									<li>The Subscriber shall maintain the Vehicle as a prudent man.</li>
								</ol>
							</li> -->
	<li>That the Subscriber agrees that after being handed over with the possession of the
	Vehicle, the Vehicle shall not be operated:
		<ol class="list01" type="a">
			<li>To transport goods in violation of customs regulations or in any other illegal manner.</li>

			<li>To carry passengers or property for a consideration express or implied;</li>

			<li>To propel or tow any Vehicle or trailer without obtaining a prior written consent of the Business Partner;</li>

			<li>In motor sport events (including racing pace making, reliability trials, driving lessons speed testing and any other events of similar nature):</li>

			<li>By any person driving when unfit through drink or drugs or with blood alcohol concentration above the limit prescribed by the applicable law; </li>

			<li>By any person other than the Subscriber or any person(s) nominated or employed by the Subscriber who is approved by the Business Partner; who holds a current valid full driving license, or in the case of breakdown or accident, a motor Vehicle repairer provided that he is duly qualified and licensed.</li>

			<!-- <li>Outside geographical boundaries of the Republic of India.</li> -->

			<li>Subscriber will not take a Vehicle to high terrain areas, terrorism/naxal affected areas.</li>
		</ol>
	</li>

<li>The Subscriber is personally liable to pay the Business Partner on demand:
	<ol class="list01" type="a">
		<li>A mileage charge computed at the rate specified in enclosed invoice for the mileage covered by the Vehicle until the Vehicle is returned (the number of miles over which the Vehicle is operated shall be determined by reading the odometer installed by the manufacturer, if odometer fails then the mileage charge shall be calculated from the road map distance of the journey traveled).</li>

		<li>personal accident insurance (if any), pick up service, drop service. Fuel and miscellaneous charges at the rates specified in the invoice.</li>

		<li>All fines and court costs for parking, traffic or other legal violations assessed against the Vehicle, the Subscriber, other driver or the Business Partner until the Vehicle is returned, except where caused through fault of the Business Partner.</li>

		<li>The Business Partner's cost, including reasonable legal fees where permitted by law, incurred collecting payments due from the Subscriber hereunder, and</li>

		<li>The Business Partner's cost for repairing collision or upset damages to the Vehicle.</li>

		<li>GST (Goods and Service Tax) and all other applicable taxes shall be payable extra and in addition to the Subscription Price.
</li>


	</ol>
	<p>All the above expenses shall be adjusted from/or recovered from Subscriber or as per the Standing Instructions provided by the Subscriber to debit the said expenses in terms of the Agreement. In the above, if the expenses exceed the amount as per the Standing Instructions, the Subscriber shall pay any applicable extra amount to the Business Partner. Business Partner reserves the right to recover the same from the Subscriber.</p>
</li>



<li>That the Subscriber undertakes to take all necessary steps to protect the interest of the Business Partner and the Business Partner's insurance company and shall ensure that the Vehicle is not used for any purpose not permitted by the terms and conditions of the relevant policy of insurance.</li>




	<li>The Subscriber agrees further to protect the interests of the Business Partner and its insurance company in case of accident or theft by doing the following, as applicable:
		<ol class="list01" type="a">
			<li>By co-operating with the Business Partner to comply with necessary documentation and other formalities required for claiming insurance.</li>

			<li>Obtaining names and addresses of the parties involved, and of witnesses;</li>

			<li>Not admitting liability or guilt or giving money to any persons involved;</li>

			<li>Not abandoning the Vehicle without adequate provision for safeguarding and securing same.</li>

			<li>Calling the Business Partner within 24 hours by telephone and forward a copy of FIR (if applicable) even in case of slight damage; further completing the Business Partner's accident report including diagram as required on return of Vehicle; and</li>

			<li>Notifying the police immediately if another party's guilt has to be ascertained, or if any person is injured.</li>

		</ol>
	</li>




							<li>The Business Partner further declares that it has no responsibility for injury to third parties or damages to the Vehicle, which the Subscriber may cause during the Subscription Period.</li>



							<li>The Business Partner whilst taking all precautions and using its best efforts to prevent such happening shall not be liable for any loss or damage arising from any fault or defect in or from mechanical failure of the Vehicle of any consequential loss or damage.</li>



	<li>
	That Subscriber shall during the continuance of the Subscription Period:
		<ol class="list01" type="a">

			<li>Always lock the Vehicle when not in use and ensure it is adequately protected
			against damage due to adverse weather conditions.</li>

			<li>Not allow any person without the prior authorization of the Business Partner to
			carry any work which otherwise interferes with the Vehicle or any part thereof
			except if the prior authorization cannot be obtained and the repair is minor to
			the tune of INR <span class="underline">500</span>/- (Rupees <span class="underline">Five Hundred</span> Only).</li>

			<li>Not act as or purports to act as the agent of the Business Partner for any
			purpose whatsoever.</li>

			<li>Be fully responsible for any loss or damage caused to the Vehicle howsoever occasioned other than normal wear and tear. The Subscriber shall give immediate notice to the Business Partner and subsequently confirm in writing by sending through speed post/courier within 24 hours of any loss or damage caused to the Vehicle or any breakdown, malfunction or other failure thereof. The Subscriber shall not continue to use the Vehicle in the event of damage to or a breakdown of the Vehicle if to do so would or might cause further damage to the Vehicle. The Subscriber shall take the Vehicle to the nearest authorized service center for repair and pay such cost as estimated by the authorized service center and shall ensure delivery of the Vehicle of the Business Partner. The Subscriber shall be responsible to bear all cost for handover of the Vehicle.</li>

			<li>Without prejudice to provision for Business Partner's right to indemnification
			under this Agreement, the Subscriber agrees to pay to the Business Partner for
			each and every breach of terms and condition of this Agreement as detailed in
			this agreement.</li>

			<li>The Subscriber agrees that subsequent to taking over of the possession of the Vehicle by the Business Partner from the Subscriber after the expiry of the Subscription Period if the Business Partner detects any damage in the Vehicle (not covered under insurance), the Business Partner shall intimate details of such damage and the cost payable for such damage to the Subscriber. If the Subscriber fails to pay such cost even after intimation from the Business Partner for three times, it shall be deemed acceptance by the Subscriber of his/her liability to pay for such damage, and on such happening, the Subscriber authorizes the Business Partner to deduct cost of such damage as mentioned below from the amount as per the Standing Instructions paid to the Business Partner at the beginning of the Subscription Period or in accordance with the Standing Instructions of the Subscriber granted for payments to be made in terms of this Agreement. Business Partner reserves the right to recover the same from the Subscriber.</li>

			<li>Not sell, assign, pledge, let or hire or otherwise dispose of the Vehicle and/or
			its equipment.</li>

			<li>Neither remove nor change any name or other mark identifying the ownership
			of the Vehicle;</li>

			<li>Neither use nor allow anyone to accommodate occupants more than permitted seating capacity of the vehicle.</li>

			<li>Neither drive the Vehicle beyond permissible speed limit nor contravene with
			the provisions, of any statute, statutory, instrument, regulation relating either to
			the Vehicle or its use and procure that driver of the Vehicle shall observe and perform the terms and conditions of insurance policies or contracts of insurance relating to the Vehicle for its use.</li>

			<li>Acknowledge that the Vehicle is and shall be throughout the period of its
			subscription be the sole property of the Business Partner and/or its affiliates
			and all rights thereto shall vest in the Business Partner and/or its affiliates.</li>

			<li>Not acknowledge or compound any claim either partial or in full in respect of any accident involving the Vehicle.</li>

			<li>The Subscriber agrees to comply with the "Car Usage Conditions" appended as
			<strong>Annexure E</strong> to this Agreement.</li>

			<li>The cost/penalty payable by the Subscriber for repair/replacement of any part
			of the Vehicle is listed in detail in <strong>Annexure F</strong> of this Agreement (hereinafter
			referred to as "Damages/Penalty").</li>

			<li>The Subscriber must swiftly report any incident involving loss or damage to the Vehicle, and no later than 1 (one) hour of the occurrence of such loss or damage, while rented under this Agreement or to any property or person to the Business Partner location from where the Vehicle was hired and will deliver to the Business Partner immediately, every summons, complaint or paper in relation to such loss.</li>

			<li>The Subscriber shall render and hold harmless the Business Partner (and its affiliates, directors, officers and employees) from all claims for loss or damage to their personal property, Or that of any other person’s property left in the Vehicle, or which is received, handled or stored by the Business Partner at any time before, during or after this Subscription Period, whether due to the Business Partner's negligence of otherwise.</li>
		</ol>
	</li>
							<li>Notwithstanding anything contained in this Agreement, the Subscriber shall be liable
					to pay for damages not covered under the Business Partner's insurance policy for the
					Vehicles.</li>

							<li>The Subscriber hereby acknowledges and agrees that the Subscriber shall be liable in
					respect of the Vehicle including but not limited to any challans, penalties, third party
					liability, accidents and the Subscriber shall indemnify the Business Partner against
					any losses, damage, costs and liabilities etc., in this regard.</li>
							
							<li>In the event of any breach by the Subscriber of any of the terms and conditions hereof, the Business Partner may with prior notice of 24 hours repossess the Vehicle and for such purpose may enter upon premises where the Vehicle may be and remove the same and the Subscriber shall be responsible for and indemnify the Business Partner against all actions, claims, costs and damage consequent upon or arising from such repossession and removal.</li>

							<li>The Subscriber hereby understands and agrees that any fine arising from parking, traffic or driving violation will be charged along with 100% surcharge on such amount, with all applicable taxes will be charged extra. Any increase in tax or the incidence of new taxes will be charged directly from the Subscriber in additional to the rental charges.</li>
							
							<li>In this Agreement, the word “Vehicle” shall in addition to the meaning ascribed hereto shall also include any replacement thereof and shall include all standard fitments(s), equipment(s), and accessories</li>


							<li>Any reference to any statutes shall be deemed to refer to any statutory modification or re-enactment, or any rules, regulations, notifications, circulars, etc. made or issued thereunder for the time being in force.</li>

							<li>The Subscriber agrees that the data provided in this Agreement and at the time of placing the Subscription Order may be stored, processed and transmitted manually/electronically by the Business Partner and/or Myles. The Subscriber also agrees to provide accurate information in the Subscription Order and shall be liable for any damages and disputes arising due to the inaccuracy of the information. In addition to obligation of the Subscriber to indemnify the Business Partner for losses as a result of providing incorrect data, the Business Partner shall have the right to forfeit the amount as per Standing Instructions or recover any such loss from Subscriber and terminate the Agreement with immediate effect.</li>

							<li>In an event wherein cancellation of the Subscription Order is done by the Business is due to force majeure, fog, earthquake, floods, fire, riots, strike or circumstances beyond Business Partner control will not be covered under this clause. Parties hereby agree that under no circumstances the liability of the Business Partner shall exceed the monthly Subscription Price.</li>

							<li>Notwithstanding anything contained in this Agreement, the Business Partner reserves the right to take back the Vehicle at any time during the continuance of Subscription Period or thereafter, if in the opinion of the Business Partner, the User or any third party may damage the Vehicle or may use the Vehicle for any unauthorized purpose.</li>

							<li>Notwithstanding anything contained in this Agreement, the Business Partner has the right, at its discretion, to change and/or replace the Vehicle during the Subscription Period, even if the Vehicle is in transit, through its nearest platform. And the consent of the Subscriber shall be deemed to have been extended to the Business Partner, if all required.</li>

							<li>Notwithstanding anything contained in this Agreement, the Business Partner shall have a right to inspect the Vehicle at any time during or before the Subscription Period with prior intimation of 24 hours.</li>

							<li>In the event the Subscriber defaults any of the terms and conditions of the Agreement, the Business Partner shall have the right to immediately immobilize the Vehicle or to take the vehicle back in its possession and the consent of the Subscriber shall be deemed to have been given to the Business Partner, if at all required or to terminate this Agreement.</li>
							
						</ol>
					</li>




					<br>
					<br>




					<li><span class="hdnn"><b>Termination</b></span>
						
						<ol type="1" class="list01">
							
							<li>The Subscriber and Business Partner cannot terminate this agreement during the tenure of subscription of this agreement as the case may be, which is agreed to be lock-in period.</li>
						</ol>
					</li>

					<br>
					<br>


					<li><span class="hdnn"><b>Indemnity</b></span>
						
						<ol type="1" class="list01">
							
							<li>The Parties agrees to indemnify each other for any loss suffered by the action or inaction or violation of either Party, including reasonable legal costs and third parties claims arising out of or in relation to the breach of the obligations, representations, warranties and covenants of this Agreement. Such indemnification shall also include the claims, penalties, proceedings, civil or criminal, initiated by the suffering Party against the Party committing violations and/or breach of any of the terms & conditions of this Agreement.</li>
						</ol>
					</li>

					<br>
					<br>




					<li><span class="hdnn"><b>Miscellaneous</b>
						<ol type="1" class="list01">
							
							<li><strong class="underline">Amendment:</strong> Any addition, amendment or alteration to the terms and conditions of this Agreement shall be null and void unless agreed upon in writing by the Parties.</li>

							<li><b>Assignment:</b> The Subscriber shall not transfer or assign any of its rights or obligations under this Agreement without the prior written approval of the Business Partner.</li>

							<li><b>Notice:</b> Unless otherwise stated, all notices, approvals, instructions and other communications for the purposes of this Agreement shall be given in writing and may be given by facsimile, by e-mails, by personal delivery or by sending the same by registered acknowledgement due or courier addressed to the party concerned at the address first stated herein above or any other address subsequently notified to the other party. Such notice shall be deemed to be delivered on receipt thereof.</li>

							<li><b>Dispute Resolution:</b> In the event of any dispute or difference arising out of or in connection with this Agreement, the Parties shall endeavor to resolve the same mutually through amicable discussions. In the event the Parties fail to arrive at an amicable settlement within 30 days from the date of reference thereof for amicable discussions, such dispute/difference shall be settled through arbitration and shall be referred to the an Arbitrator duly appointed by the Parties and if the Parties does not reach to consensus on the appointment of Sole Arbitrator then the dispute/difference shall be referred to a Panel of Arbitrators wherein each Party shall appoint an Arbitrator and the three Arbitrators so appointed by each Party shall elect two more Arbitrators to the Panel.In the event the Parties fall to arrive at an amicable settlement within 30 days from the date of reference thereof for amicable discussions, such dispute/difference shall be settled through arbitration and shall be referred to the sole an arbitrator to beduly appointed by Mylesthe Parties and if the Parties does not reach to consensus on the appointment of Sole Arbitrator then an arbitrator shall be appointed by each Party and the three Arbitrators so appointed shall elect two more arbitrators to the panel. The arbitration proceedings shall be conducted in accordance with the provisions of the Arbitration and Conciliation Act, 1996 and/or any amendments and modifications made thereto. The arbitration proceedings shall be conduct in the English language and the place of arbitration shall be New Delhi. It is hereby further agreed that the award of the Arbitrator or Panel of Arbitrators shall the award of the arbitrator shall be final and binding on the parties. This Clause shall survive expiry or termination of this Agreement.</li>

							<li><b>Governing Law:</b> This Agreement shall be governed by and construed in accordance with the laws of India and subject to dispute resolution mechanism hereby agreed, the Parties have agreed to submit themselves to the jurisdiction of the courts of the place where the Vehicle is delivered by the Business Partner to the Subscriber.</li>

							<li>This Agreement constitutes the entire agreement between the Parties with respect to the subject matter hereof and supersedes all prior communications negotiations and representations either oral or written, between the Parties, in relation hereto. The terms and conditions of the rental of the Vehicles to the Subscriber shall be governed by this Agreement.</li>

						
						</ol>
						
					</li>
					<br>
					<p><b>IN WITNESS WHEREOF</b>, the Parties have executed this Agreement through their duly authorized representatives at the place and on the date, month and year first above written.</p>	
					<br>
										
					</ol>














<span class="hdnn toggle" style="margin-bottom: 10px;"><b>ANNEXURE A</b>
	<strong class="plus-add iconbox"><img src="img/plus.svg" alt=""></strong>
	<strong class="minus-remove iconbox"><img src="img/minus.svg" alt=""></strong>
</span>

<div class="inner">
	<div class="alignCenter">
		<span class="smallhdn hdn2">ANNEXURE A</span><br>
		<span class="smallhdn ">STANDING INSTRUCTIONS</span>
	</div>
	<br>
	<br>
	<P>Dear Sir/Madam, I/We,<span class="ltrSubscribernamer underline"><?php echo $userinfo['subscriber_name']; ?></span>, hereby request
	you to maintain a Standing Instruction on my A/C No.<span class="ltrsubscriber_accno underline"><?php echo $userinfo['subscriber_accno']; ?></span>/ Credit Card No. <span class="ltrcc underline"><?php echo $userinfo['subscriber_cc']; ?></span> / Debit Card No. <span class="ltrdc underline"><?php echo $userinfo['subscriber_dc']; ?></span> for INR <span class="DoubleLtrSubAmount underline"><?php $userinfo['LtrSubMaxAmountWithoutcomma']; ?></span> (Indian Rupees <span class="LtrSubMaxAmountinWords underline"><?php echo $userinfo['LtrSubMaxAmountinWords']; ?></span> Only) as per the details given below:</P>
	<p>Purpose of Standing Instructions: <b>Payment of Subscription Price for renting of Vehicle
	and/or any other Penalty/fee and/or other costs and amounts payable under Myles Car
	Subscription Agreement dated <span class="Ltrcreated underline"><?php echo $userinfo['Ltrcreated']; ?></span></b></p>
	<p>Account No. <span class="ltrsubscriber_accno underline"><?php echo $userinfo['subscriber_accno']; ?></span>/ Debit Card No. <span class="ltrdc underline"><?php echo $userinfo['subscriber_dc']; ?></span>/ Credit Card No.: <span class="ltrcc underline"><?php echo $userinfo['subscriber_cc']; ?></span></p>
	<p>Details of the Beneficiary: Myles Automotive Technologies Private Limited</p>
	<p>Beneficiary Account No.: <span class="beneficiary_accno underline"><?php $userinfo['beneficiary_accno']; ?></span></p>
	<p>Frequency: <b>Monthly</b></p>
	<p><b>Start Date: <span class="LtrSubPickDate underline"><?php echo $userinfo['LtrSubPickDate']; ?></span> &nbsp;  &nbsp;End Date: <span class="LtrSubDropDate underline"><?php echo $userinfo['LtrSubDropDate']; ?></span></b></p>
	<br>
	<span class="smallhdnsub">Terms & conditions:</span>

	<ol class="list01" type="a">
		<li>I/We undertake to honor the standing instructions in favour of the Beneficiary on and from
	the date of execution.</li>
		<li>I/We hereby authorize the Bank to debit my account / card & execute the standing
	instruction as per instruction provided above.</li>
		<li>I/We authorize the bank to debit my account / card for the standing instruction set-up or
	execution charges as per laid down tariff & fees of the bank.</li>
		<li>I/We understand the standing instructions shall automatically expire on the "End Date" as
	given above.</li>
	</ol>
	<p>Yours faithfully,</p>

	<p class="Susername"></p>
</div>

<span class="hdnn toggle" style="margin-bottom: 10px;"><b>ANNEXURE B</b>
	<strong class="plus-add iconbox"><img src="img/plus.svg" alt=""></strong>
	<strong class="minus-remove iconbox"><img src="img/minus.svg" alt=""></strong>
</span>
<div class="inner">
	<div class="alignCenter">
		<span class="smallhdn hdn2">ANNEXURE B</span><br>
		<span class="smallhdn ">VEHICLE DOCUMENTS</span>
	</div>
	<br>
	<ol class="listAgreenent vehicledoc">
		<?php
			if($userinfo['registration_cert'] !=""){
				$vehicledoc .= '<li>Registration Certificate:<span class="registration_cert"><a href="'.$userinfo['registration_cert'].'" target="_blank"> View</a></span></li>';
			}
			if($userinfo['permit_doc'] !=""){
			    $vehicledoc .= '<li>Permit Document:<span class="permit_doc"><a href="'.$userinfo['permit_doc'].'" target="_blank"> View</a></span></li>';
			}
			if($userinfo['fitness_doc'] !=""){
			    $vehicledoc .= '<li>Fitness Document:<span class="fitness_doc"><a href="'.$userinfo['fitness_doc'].'" target="_blank"> View</a></span></li>';
			}
			if($userinfo['insurance_doc'] !=""){
				$vehicledoc .= '<li>Insurance:<span class="fitness_doc"><a href="'.$userinfo['insurance_doc'].'" target="_blank"> View</a></span></li>';
			}
			echo $vehicledoc;
		
		?>
	</ol>
</div>

<span class="hdnn toggle" style="margin-bottom: 10px;"><b>ANNEXURE C</b>
	<strong class="plus-add iconbox"><img src="img/plus.svg" alt=""></strong>
	<strong class="minus-remove iconbox"><img src="img/minus.svg" alt=""></strong>
</span>
<div class="inner">

	<div class="alignCenter">
		<span class="smallhdn hdn2">ANNEXURE C</span><br>
		<span class="smallhdn hdn3">PART A</span><br>
		<span class="smallhdn">RENTALS PAYABLE BY THE SUBSCRIBER IN CASE OF EARLY RETURN OF
THE VEHICLE</span>
	</div>
	<br>
	<br>


<br>
<div class="tableBox">
<div class="table-responsive"> 
	<table class="table table-bordered table-striped"> 
	<colgroup> 
		<col class="col-xs-1"> 
		<col class="col-xs-2"> 
		<col class="col-xs-3"> 
		<col class="col-xs-6"> 
	</colgroup> 
	<thead>
	 <tr> 
		 <th>Sr. No.</th> 
		 <th>Subscription Period</th> 
		 <th>Return Period</th> 
	 	 <th>Subscription Price Payable by the Subscriber in case of Early Return</th> 
	 </tr> 
	 </thead> 
	 <tbody> 
	 <tr> 
	 	<td>1.</td>
	 	<td>1 (one) Month</td>
	 	<td>Prior to the expiry of 1 (one) Month</td>
	 	<td>Subscription Charges / Rentals for 1 (one) Month as per the applicable slab rate detailed under<b> Part B Annexure C</b></td>
	 </tr> 
	 <tr> 
	 	<td>2.</td>
	 	<td>3 (three) Months</td>
	 	<td>Prior to the expiry of 1 (one) Month</td>
	 	<td>Subscription Charges / Rentals for 1 (one) Month as per the applicable slab rate detailed under<b> Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>After Expiry of 1 (one)
month and Prior to the expiry
of 3 (three) Months</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable slab rate detailed under <b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td>3.</td>
	 	<td>6 (six) Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>From the 4th Month and Prior
to the expiry of the 6th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td>4.</td>
	 	<td>9 (nine) Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>From the 7th Month and prior
to the expiry of the 9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (nine) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td>5.</td>
	 	<td>12 (twelve)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under <b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr> 
	 	<td>6.</td>
	 	<td>15 (fifteen)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td>7.</td>
	 	<td>18 (eighteen)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under Part B Annexure C</td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
Part B Annexure C</td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and
prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the
applicable 18 (eighteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td>8.</td>
	 	<td>21 (twenty one)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and
prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the
applicable 18 (eighteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 18th Month and
prior to the expiry of the 21st
Month</td>
	 	<td>Subscription Charges / Rentals for 21 (twenty one) Months as per
the applicable 21 (twenty one) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td>9.</td>
	 	<td>24 (twenty four)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and
prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the
applicable 18 (eighteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 18th Month and
prior to the expiry of the 21st
Month</td>
	 	<td>Subscription Charges / Rentals for 21 (twenty one) Months as per
the applicable 21 (twenty one) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 21st Month and
prior to the expiry of the 24th
Month</td>
	 	<td>Subscription Charges / Rentals for 24 (twenty four) Months as per
the applicable 24 (twenty four) month slab rate detailed under Part
B Annexure C</td>
	 </tr>

	 <tr>
	 	<td>10.</td>
	 	<td>27 (twenty seven)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and
prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the
applicable 18 (eighteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 18th Month and
prior to the expiry of the 21st
Month</td>
	 	<td>Subscription Charges / Rentals for 21 (twenty one) Months as per
the applicable 21 (twenty one) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 21st Month and
prior to the expiry of the 24th
Month</td>
	 	<td>Subscription Charges / Rentals for 24 (twenty four) Months as per
the applicable 24 (twenty four) month slab rate detailed under <b>Part
B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 24th Month and
prior to the expiry of the 27th
Month</td>
	 	<td>Subscription Charges / Rentals for 27 (twenty seven) Months as
per the applicable 27 (twenty seven) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td>11.</td>
	 	<td>30 (thirty)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and
prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the
applicable 18 (eighteen) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 18th Month and
prior to the expiry of the 21st
Month</td>
	 	<td>Subscription Charges / Rentals for 21 (twenty one) Months as per
the applicable 21 (twenty one) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 21st Month and
prior to the expiry of the 24th
Month</td>
	 	<td>Subscription Charges / Rentals for 24 (twenty four) Months as per
the applicable 24 (twenty four) month slab rate detailed under <b>Part
B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 24th Month and
prior to the expiry of the 27th
Month</td>
	 	<td>Subscription Charges / Rentals for 27 (twenty seven) Months as
per the applicable 27 (twenty seven) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 27th Month and
prior to the expiry of the 30th
Month</td>
	 	<td>Subscription Charges / Rentals for 30 (thirty) Months as per the
applicable 30 (thirty) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td>12.</td>
	 	<td>33 (thirty three )
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th
Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the applicable 18 (eighteen) month slab rate detailed under Part B
Annexure C</td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 18th Month and
prior to the expiry of the 21st
Month</td>
	 	<td>Subscription Charges / Rentals for 21 (twenty one) Months as per
the applicable 21 (twenty one) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 21st Month and
prior to the expiry of the 24th
Month</td>
	 	<td>Subscription Charges / Rentals for 24 (twenty four) Months as per
the applicable 24 (twenty four) month slab rate detailed under Part
<b>B Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 24th Month and
prior to the expiry of the 27th
Month</td>
	 	<td>Subscription Charges / Rentals for 27 (twenty seven) Months as
per the applicable 27 (twenty seven) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 27th Month and
prior to the expiry of the 30th
Month</td>
	 	<td>Subscription Charges / Rentals for 30 (thirty) Months as per the
applicable 30 (thirty) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 30th Month and
prior to the expiry of the 33th
Month</td>
	 	<td>Subscription Charges / Rentals for 33 (thirty three) Months as per
the applicable 33 (thirty three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td>13.</td>
	 	<td>36 (thirty six)
Months</td>
	 	<td>Prior to the initiation of the
4th Month</td>
	 	<td>Subscription Charges / Rentals for 3 (three) Months as per the
applicable 3 (three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
7th Month</td>
	 	<td>Subscription Charges / Rentals for 6 (six) Months as per the
applicable 6 (six) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>Prior to the initiation of the
9th Month</td>
	 	<td>Subscription Charges / Rentals for 9 (six) Months as per the
applicable 9 (nine) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 9th Month and prior
to the expiry of the 12th
Month</td>
	 	<td>Subscription Charges / Rentals for 12 (twelve) Months as per the
applicable 12 (twelve) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 12th Month and
prior to the expiry of the 15th Month</td>
	 	<td>Subscription Charges / Rentals for 15 (fifteen) Months as per the
applicable 15 (fifteen) month slab rate detailed under <b>Part B
Annexure C</b> </td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 15th Month and
prior to the expiry of the 18th
Month</td>
	 	<td>Subscription Charges / Rentals for 18 (eighteen) Months as per the
applicable 18 (eighteen) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 18th Month and
prior to the expiry of the 21st
Month</td>
	 	<td>Subscription Charges / Rentals for 21 (twenty one) Months as per
the applicable 21 (twenty one) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 21st Month and
prior to the expiry of the 24th
Month</td>
	 	<td>Subscription Charges / Rentals for 24 (twenty four) Months as per
the applicable 24 (twenty four) month slab rate detailed under <b>Part
B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 24th Month and
prior to the expiry of the 27th
Month</td>
	 	<td>Subscription Charges / Rentals for 27 (twenty seven) Months as
per the applicable 27 (twenty seven) month slab rate detailed under
<b>Part B Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 27th Month and
prior to the expiry of the 30th
Month</td>
	 	<td>Subscription Charges / Rentals for 30 (thirty) Months as per the
applicable 30 (thirty) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 30th Month and
prior to the expiry of the 33th
Month</td>
	 	<td>Subscription Charges / Rentals for 33 (thirty three) Months as per
the applicable 33 (thirty three) month slab rate detailed under<b> Part B
Annexure C</b></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td></td>
	 	<td>From the 33rd Month and
prior to the expiry of the 36th
Month</td>
	 	<td>Subscription Charges / Rentals for 36 (thirty six) Months as per the
applicable 36 (thirty six)) month slab rate detailed under <b>Part B
Annexure C</b></td>
	 </tr>

	 
	   </tbody> 
	   </table> 
   </div>
   </div><!--tableBox-->


   <br>
   <br>
   <div class="alignCenter">
    	<span class="smallhdn hdn2">ANNEXURE C</span><br>
		<span class="smallhdn hdn3">PART B</span><br>
		<span class="smallhdn">SUBSCRIPTION PRICE AS PER SLAB RATE APPLICABLE TO EACH SUBSCRIPTION PERIOD</span>
	</div>
	<br><br>
   <div class="inner">
	<div class="tableBox">
	<div class="table-responsive slabtable "> 
		<?php if($userinfo["slab_rate"] !=''){
				
				$slabtable .='<table class="table table-striped "><colgroup> <col class="col-xs-1"><col class="col-xs-2"></colgroup><thead><tr><th></th><th>Rate Monthly(INR)</th></tr></thead> <tbody> ';
				$slab_rates = $userinfo["slab_rate"];
				foreach($slab_rates as $slab_rate ) {
					
					$slabtable .= '<tr><td>'.$slab_rate["MinTenureMonths"].' months</td><td>'.$slab_rate["PkgRate"].'</td></tr>';
				}
				$slabtable .='</tbody></table>';
				echo $slabtable;
		 } ?>
	</div>
	</div>
	<div class="clear clr"></div>
</div>
</div>



<span class="hdnn toggle" style="margin-bottom: 10px;"><b>ANNEXURE D</b>
	<strong class="plus-add iconbox"><img src="img/plus.svg" alt=""></strong>
	<strong class="minus-remove iconbox"><img src="img/minus.svg" alt=""></strong>
</span>
<div class="inner serviceduration">

	<div class="alignCenter">
		<span class="smallhdn hdn2">ANNEXURE D</span><br>
		<span class="smallhdn">Maintenance Schedule</span>
	</div>
	<br>
	<?php
		   $servicedurations = $userinfo['service_duration'];
			//echo '<pre>';
			//print_r($servicedurations);
			$service_duration = '';
			if(count($servicedurations) >0)
			{
				$service_duration .='<table class="table" style="width:99%;"><thead> <tr><th></th><th></th></tr> </thead> <tbody><tr><td>Service Number</td><td>Km Run</td><td style="border-top:1px solid #808080;border-right:1px solid #808080;">No of Month</td></tr> ';
				$i = 1;
				$service_duration1 = '';
				foreach ($servicedurations as $serviceduration) {
					$ordinal= '';
					if($i== 1)
					{
						$ordinal = 'First';
						$service_duration .= '<tr><td>'.$ordinal.' Service </td><td>'.round($serviceduration['Km']).' kms </td><td>'.$serviceduration['Duration'].' Months</td></tr>';
				
					}
					else if($i == 2)
					{
						$ordinal = 'Second';
						$service_duration .= '<tr><td>'.$ordinal .' Service </td><td>'.  round($serviceduration['Km']).' kms </td><td>'.$serviceduration['Duration'].' Months</td></tr>';
				
					}
					else if($i == 3)
					{
						$ordinal = 'Third';
						$service_duration .= '<tr><td>'.$ordinal .' Service </td><td>'.  round($serviceduration['Km']).' kms </td><td>'.$serviceduration['Duration'].' Months</td></tr>';
				
					}
					else if($i == 4)
					{
						$service_duration1 = '<p>4th service onwards every '.  round($serviceduration['Km']).' kms or every '.$serviceduration['Duration'].' months</p>';
					}
						$i++;
				}
				$service_duration .='</tbody></table>'.$service_duration1;
			}
			echo $service_duration;
	
	?>
</div>


<span class="hdnn toggle" style="margin-bottom: 10px;"><b>ANNEXURE E</b>
	<strong class="plus-add iconbox"><img src="img/plus.svg" alt=""></strong>
	<strong class="minus-remove iconbox"><img src="img/minus.svg" alt=""></strong>
</span>
<div class="inner">
	<div class="alignCenter">
		<span class="smallhdn hdn2">ANNEXURE E</span><br>
		<span class="smallhdn">CAR USAGE CONDITIONS</span>
	</div>
	<br>
	<br>
	
	<p>Following conditions will be considered as Myles car usage. Subscriber will be fined if found
	involved in any of the following:</p>
	<ol class="list01" type="1">
		<li><b>Over speeding:</b> Subscribers are allowed to drive the Vehicle up to a maximum speed
	as may be stipulated by Traffic Police/concerned government authorities/
	municipalities etc., beyond which the Vehicle will be considered as over speeding. A
	penalty of INR 750 will be charged on the first instance, followed by a further penalty
	of INR 1000 and INR 1500 for 2nd instance and 3rd instance respectively making it a
	total of INR 3250/- after third instance, or such penalty as may be in accordance with
	the statutory requirements, whichever may be higher. After the third instance,
	subscription will stand cancelled and the Business Partner shall get the right to take
	back the Vehicle and terminate this Agreement.</li>
		<li><b>Traffic violation:</b>	 Subscribers are liable to pay for any traffic violation tickets
	received plus INR 1000 /- (One Thousand Only) as penalty charges to the Business
	Partner during the Subscription Period. Business Partner can charge traffic violation
	from the Subscriber's credit/debit card on actual plus INR 1000/- as penalty if the
	violations tickets are sent directly to the Business Partner by the traffic department. If
	the same is not recovered, Myles/Business Partner reserves the right to recover the
	amount in the next booking.</li>
		<li><b>Car spare part changed:</b> Subscribers should not change or remove any car spare
	parts without approval of the Business Partner. In case of emergency, the Subscriber
	should inform Business Partner and act as per advice. Subscribers will be charged a
	penalty or INR 5000/- which shall be calculated by forfeiting the complete amount as
	per Standing Instruction amount plus actual cost of the spare part plus installation
	charges.</li>
		<li><b>Running Vehicle in damaged conditions:</b> Subscribers are not permitted to drive the
	Vehicle if it gets damaged in an accident. Subscribers are advised to inform the
	Business Partner immediately. In such case, Subscribers will be charged for the cost of
	spare parts and labor on actual as per this Agreement.</li>
		<li><b>Unauthorized activity in the Vehicle:</b> Subscribers are not permitted to carry out any
	unauthorised activity in the Vehicle including drinking alcohol, carrying arms,
	ammunitions, psychotropic substances, banned drugs. In addition, use of Vehicle for
	commercial activity such as product sell and promotion, and carry goods is strictly
	prohibited. In such cases, Subscribers will be charged a penalty of INR 5000.</li>
		<li><b>External branding:</b> Any form of external branding on the Vehicle is prohibited.
	Subscribers are not allowed to paste or paint any external brand promotion on the
	Vehicle. Subscribers will have to pay a penalty of INR 5000.</li>
		<li><b>Tampering with devices:</b> Subscribers are not allowed to tamper with the odometer,
	GPS device and in car technology devices. Subscribers will have to pay a penalty
	which shall be calculated by forfeiting the complete amount as per Standing
	Instruction or INR 5000/- plus actual cost of the spare part plus installation charges.</li>
		<li><b>Deliberately driving the car in water:</b> Subscribers will be charged for the actual cost
	of repair and spare parts in terms of this Agreement.</li>
		<li><b>Clutch kit burn:</b> If the Clutch of the Car is burned out, then the Subscriber shall be
	charged with a penalty of INR 3000/- plus clutch kit replacement cost on actual.</li>
		<li><b>Brake Pad/ Disc:</b> If the Brake Pad of the Car is worn out, then the Subscriber shall be
	charged with a Penalty of INR 1000/- plus brake pad/ displacement cost on actual.</li>
		<li><b>Hidden Defects:</b> In case of hidden defect which the Business Partner discovers within
	a period of 15days from the date of returning the car by the Subscriber; the Business
	Partner shall recover the equivalent amount of repairing such defect.</li>
		<li><b>Producing fake and tampered personal documents:</b> Subscribers will be charged a
	penalty of INR 1000 if found guilty.</li>
		<li><b>Vehicle Document damaged/missing/ lost:</b> In case vehicle documents (Registration
	Certificate, Fitness, Permit) are damaged/ missed/lost other than accident spot; penalty
	amount of INR 10,000/- (including document reconstruction cost) shall recover from
	Subscriber. If Vehicle Registration Certificate is damaged/ missed/ lost from accident
	spot, Subscriber shall pay penalty of INR 2000/-. If Vehicle documents Fitness/ Permit
	(other than Registration Certificate) is damaged/ missed/ lost from accident spot,
	penalty amount of INR 4,000/- (including document reconstruction cost) shall recover
	from Subscriber.</li>
		<li><b>Diversion:</b> Subscribers are not allowed to drive the car into unauthorized or
	government banned areas. Subscribers are advised to inform the Business Partner in
	case they change the course of their trip. All Vehicles are geo-fenced and Subscribers
	have to pay a penalty INR 10,000 if the Vehicle trespasses into banned areas, areas hit
	by or for the purposes of mass protests/ strikes, naxal hit areas, international border of
	republic of India and extreme end of Ladakh.</li>
		<li><b>Tobacco/Alcohol:</b> Subscribers are not allowed to consume, chew or use any type of
	Alcohol, Tobacco, Cigarettes, Drugs or any type of Narcotics and Psychotropic
	Substances. If any Cigarettes, Drugs, Alcohol or Tobacco or any smell relating to the
	same is found in the Vehicle, Subscriber shall be liable to penalty of INR 1000/- (One
	Thousand Only)plus any applicable damage costs related to its interiors (example seat
	covers, floor mat, roof fabric damaged etc) and further it shall entitle the Business
	Partner to take back the Vehicle and terminate this Agreement.</li>
		<li><b>Interior Cleaning Charges:</b> Vehicles returned reasonably dirty shall attract a penalty
	as mentioned in Annexure G only if Dry-cleaning of the Car is required. Cleaning
	Charges are to be levied to the Subscriber if the Subscriber has spilled some drink or
	some sticky substance on the Car seat or seat of the car have mud stains or the
	upholstery is dirty.</li>
		<li><b>Exterior Cleaning Charges:</b> If the car is excessively dirty from the outside, the
	Subscriber shall pay the charges as mentioned in <b>Annexure G</b>.</li>
		<li><b>Tyre/ Spare Tyre:</b> The Business Partner shall charge the Subscriber for tyre damage.
	The Penalty for the same shall be Rs, 3000/- plus per tyre cost bycar segment as
	mentioned in <b>Annexure G</b>.</li>
		<li><b>Rim damage:</b> If the Subscriber damages the rim, then the penalty for the same shall
	be INR 3000/- plus cost for Rim repair (if possible) elseactual; cost of Rim
	replacement.</li>
		<li><b>Wheel cap damage/ loss:</b> If the wheel cap is damaged or lost, the Penalty for the
	same shall be the actual amount of the Wheel Cap.</li>
		<li><b>Car Body scratches:</b> The Charges for the same shall be labor charges (as per
	<b>Annexure G</b>) plusspare part replacement if any.</li>
		<li><b>Dents:</b> The Charges for the same shall be labor charges plus spare part replacement if
	any.</li>
		
	</ol>
	<br>
</div>


<span class="hdnn toggle"><b>ANNEXURE F</b>
	<strong class="plus-add iconbox"><img src="img/plus.svg" alt=""></strong>
	<strong class="minus-remove iconbox"><img src="img/minus.svg" alt=""></strong>
</span>
<div class="inner">
	<div class="alignCenter">
		<span class="smallhdn hdn2">ANNEXURE F</span><br>
		<span class="smallhdn hdn3">PENALTY PAYABLE</span><br>
		<span class="smallhdn">LIST OF PENALTY/ DAMAGES</span>
	</div>
	<br>
	<br>

	<div class="tableBox">
	<div class="table-responsive"> 
		<table class="table table-bordered table-striped"> 
			<colgroup> 
				<col class="col-xs-2"> 
				<col class="col-xs-10"> 
			</colgroup> 
			<thead>
			 <tr> 
				 <th>SEGMENT</th> 
				 <th>VARIANT Details</th> 
			 </tr> 
			 </thead> 
			 <tbody>
			 	<tr>
			 		<td>A</td>
			 		<td>MARUTI ALTO, MAHINDRA E2O,TATA NANO,FORD FIGO,HYUNDAI
	I10, HYUNDAI I 10 GRAND,MARUTI SWIFT,MARUTI RITZ</td>
			 	</tr>

			 	<tr>
			 		<td>B</td>
			 		<td>VOLKSWAGON VENTO,MARUTI ERTIGA,NISSAN SUNNY,HONDA
	AMAZE,VOLKSWAGON POLO, HYUNDAI I20,TOYOTA
	ETIOS,MARUTI CIAZ,HONDA JAZZ</td>
			 	</tr>

			 	<tr>
			 		<td>C</td>
			 		<td>FORD ECOSPORTS, RENAULT DUSTER, MAHINDRA
	SCORPIO,TOYOTA INNOVA,TATA SAFARI, HONDA
	ACCORD,COROLLA ALTIS,HYUNDAI CRETA,HONDA CITY</td>
			 	</tr>

			 	<tr>
			 		<td>D</td>
			 		<td>MAHINDRA XUV 500, FORD ENDEVOR, TOYOTA
	FORTUNER,TOYOTA CAMRY</td>
			 	</tr>
			 	<tr>
			 		<td>E</td>
			 		<td>MERCEDES BENZ C, E, S CLASS</td>
			 	</tr>



			 </tbody>
		 </table>
	</div>
	</div><!--tableBox-->
	<div class="tableBox">
	<div class="table-responsive"> 
		<table class="table table-bordered table-striped"> 
			<colgroup> 
				<col class="col-xs-1"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-1"> 
			</colgroup> 
			<thead>
			 <tr> 
				 <th colspan="7"><div class="alignCenter size18">Labour charges excluding taxes</div></th> 
			 </tr> 
			 </thead> 
			 <tbody>
			 	<tr>
			 		<td></td>
			 		<td>PANEL NAME</td>
			 		<td>A</td>
			 		<td>B</td>
			 		<td>C</td>
			 		<td>D</td>
			 		<td>E</td>
			 	</tr>

			 	<tr>
			 		<td>1</td>
			 		<td>FRONT BUMPER</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>4500</td>
			 	</tr>

			 	<tr>
			 		<td>2</td>
			 		<td>HOOD</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>3</td>
			 		<td>FENDER</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>4</td>
			 		<td>DOOR</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>5</td>
			 		<td>QUARTER PANEL</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>6</td>
			 		<td>BOOT LID</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>7</td>
			 		<td>REAR BUMPER</td>
			 		<td>2000</td>
			 		<td>2200</td>
			 		<td>2500</td>
			 		<td>3000</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>8</td>
			 		<td>ROOF</td>
			 		<td>2000</td>
			 		<td>3000</td>
			 		<td>3000</td>
			 		<td>3500</td>
			 		<td>5000</td>
			 	</tr>

			 	<tr>
			 		<td>9</td>
			 		<td>REAR VIEW MIRROR</td>
			 		<td>500</td>
			 		<td>600</td>
			 		<td>1000</td>
			 		<td>1000</td>
			 		<td>1500</td>
			 	</tr>

			 	<tr>
			 		<td>10</td>
			 		<td>RUNNING BOARD</td>
			 		<td>1500</td>
			 		<td>1500</td>
			 		<td>1500</td>
			 		<td>1500</td>
			 		<td>2000</td>
			 	</tr>

			 	<tr>
			 		<td>11</td>
			 		<td>A PILLAR</td>
			 		<td>1500</td>
			 		<td>1500</td>
			 		<td>1500</td>
			 		<td>1500</td>
			 		<td>2000</td>
			 	</tr>

			 	<tr>
			 		<td>12</td>
			 		<td>TYRE</td>
			 		<td>3500</td>
			 		<td>4500</td>
			 		<td>5500</td>
			 		<td>10000</td>
			 		<td>15000</td>
			 	</tr>

			 </tbody>
		 </table>
	</div>
	</div><!--tableBox-->

	<div class="tableBox">
	<div class="table-responsive"> 
		<table class="table table-bordered table-striped"> 
			<colgroup> 
				<col class="col-xs-1"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-1"> 
			</colgroup> 
			<thead>
			 <tr> 
				 <th colspan="7"><div class="alignCenter size18">REMOVE AND FIT SCHEDULE</div></th> 
			 </tr> 
			 </thead> 
			 <tbody>
			 	<tr>
			 		<td></td>
			 		<td>REAR VIEW MIRROR</td>
			 		<td>150</td>
			 		<td>200</td>
			 		<td>250</td>
			 		<td>300</td>
			 		<td>400</td>
			 	</tr>

			 	<tr>
			 		<td></td>
			 		<td>FRONT WINDSHIELD</td>
			 		<td>1000</td>
			 		<td>1200</td>
			 		<td>1500</td>
			 		<td>1800</td>
			 		<td>2000</td>
			 	</tr>

			 	<tr>
			 		<td></td>
			 		<td>REAR WINDSHIELD</td>
			 		<td>1000</td>
			 		<td>1200</td>
			 		<td>1500</td>
			 		<td>1800</td>
			 		<td>2000</td>
			 	</tr>


			 </tbody>
		 </table>
	</div>
	</div><!--tableBox-->

	<div class="tableBox">
	<div class="table-responsive"> 
		<table class="table table-bordered table-striped"> 
			<colgroup> 
				<col class="col-xs-1"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-2"> 
				<col class="col-xs-1"> 
			</colgroup> 
			<thead>
			 <tr> 
				 <th colspan="7"><div class="alignCenter size18">FOR DAMAGE/ ACCIDENT: THE RENTER SHALL BE CHARGED FOR SPARE
	PARTS ON ACTUALS.</div></th> 
			 </tr> 
			 <tr> 
				 <th colspan="7"><div class="alignCenter size18">CLEANING CHARGES.</div></th> 
			 </tr> 
			 </thead> 
			 <tbody>
			 	<tr>
			 		<td></td>
			 		<td>INTERIOR CLEANING CHARGES</td>
			 		<td>1000</td>
			 		<td>1000</td>
			 		<td>1000</td>
			 		<td>2000</td>
			 		<td>2000</td>
			 	</tr>

			 	<tr>
			 		<td></td>
			 		<td>EXTERIOR CLEANING CHARGES</td>
			 		<td>500</td>
			 		<td>500</td>
			 		<td>500</td>
			 		<td>500</td>
			 		<td>500</td>
			 	</tr>

			 	<tr>
			 		<td></td>
			 		<td>Smoking in car CHARGES</td>
			 		<td colspan="5">INR 1000 + Applicable damage costs related to interiors
	(example: seat covers, floor mat, roof fabric damaged)
	for all segments of car</td>
			 	
			 	</tr>
			 	<tr>
			 		<td></td>
			 		<td>Penalty for carrying pets</td>
			 		<td colspan="5">INR 1000 + Applicable damage costs related to interiors
	(example: seat covers, floor mat, roof fabric damaged)
	for all segments of car</td>
			 	
			 	</tr>


			 </tbody>
		 </table>
	</div>
	</div><!--tableBox-->
	</div>
</div>
<input type="hidden" class="Susercoric" value="<?php echo $userinfo['LtrSubCoric']; ?>" />
<input type="hidden" class="SumValI"  value="">
<!-- <div class="modal-footer">	
	  <div class="row">
		<div class="col-sm-6">
			<label class="checkb" id="agree">
				<input type="checkbox" form="agree" class="agree"  name="agree" onclick="removeerror();">
				<span>I accept Terms and Conditions.</span>
				<span class="tnc_error_msg" style="color:red"></span>
			</label>
		</div>
		<div class="col-sm-6">
			<button  type="button" onclick="cancelcarlocking();" class="btn btn-default ltBtn">Cancel</button>			
			<button type="button"  onclick="agree_terms();" class="agreeSubsClass btn btn-default ltBtn"> Next</button>
		</div>
	  </div>	
 -->
<script type="text/javascript">

$('.modal-dialog').width(900); 
function agree_terms()
{   
 	
    IsLoginCheck();
	if ($('.agree').is(':checked') == false){
		$(".tnc_error_msg").html("<br/>Please read and agree to the Terms & Conditions.");
		return false;
	} else{
		$(".tnc_error_msg").html("");
		var coric = $('.Susercoric').val();
		subs_pay(coric,'');
	}
}


function removeerror(){
	$(".tnc_error_msg").html("");
}	

function subs_pay(crid,sistatus)
{
	var cid = crid;
	var id = $(".SumValI").val();
	if(sistatus != 'si')
	{	
	
		
		$.ajax({
			url: "<?php echo $this->request->webroot; ?>LTemployee/subs_pay",
			type: "POST",
			data: {cid: cid},
			beforeSend: function () {},
			success: function (response) {
				var data = jQuery.parseJSON(response);
				if(data.status == 1)
				{
					$('#ltrsubscribeBox'+id).hide();
					$('#ltrsagreeBox'+id).hide();
					$('#ltrsSummaryBox'+id).hide(); 
					$('#ltrsSiJustifyBox'+id).show();	
					$.ajax({
						url: "<?php echo $this->request->webroot; ?>LTemployee/pglist",
						type: "POST",
						
						beforeSend: function () {},
						success: function (response) {
							var data = jQuery.parseJSON(response);
							paymentgatewayresult = '';
							if(data.user.paymentgateway !='')
							{
								paymentgateway = data.user.paymentgateway;
								if(paymentgateway.length == 1)
								{
									for (var key in paymentgateway) {
										
										paymentgatewayresult += '<input type="hidden" name="pgname" id="pgname" value="'+ paymentgateway[key].encryname+'" /> &nbsp;';
									}
									paymentgatewayresult += '<input type="hidden" name="totpg" id="totpg" value="1" /> '
								}
								else
								{
									for (var key in paymentgateway) {
										
										paymentgatewayresult += '<input type="radio" name="pgname" id="pgname'+key+'" value="'+ paymentgateway[key].encryname+'" /> '+paymentgateway[key].name+'&nbsp;';
									}
									paymentgatewayresult += '<input type="hidden" name="totpg" id="totpg" value="2" /> '
								}
								
							}
							$("#pgdiv").html(paymentgatewayresult);
						}
					});
					
					
				}
				else
				{
					$("#tnc_error_msg").html(data.message);
				}			
				
				//$(".agreeSubsClass").removeAttr("onclick");
				//var url_val = "<?php echo $this->request->webroot; ?>LTemployee/sisubscription?cid="+cid; 
				//$(".agreeSubsClass").attr("onclick",si_subspayment(url_val));
			},
			   
		});
	}
	else
	{
		
				
	}
}

	$('.toggle').click(function(e) {
  	e.preventDefault();
  
   
   		if ($(this).next('.inner').css('display') == 'block') {
	    	$(".inner").hide();
	    	$('.minus-remove').css('display','none');
	    	$('.plus-add').css('display','block');

	    	
        }
        else
        {
        	$(".inner").hide();
	    	$('.minus-remove').css('display','none');
	    	$('.plus-add').css('display','block');

	    	$(this).next('.inner').show();
	    	$(this).find('strong.plus-add').css('display','none');
	    	$(this).find('strong.minus-remove').css('display','block');
        }
  
    //if ($this.next().hasClass('show')) {
        //$this.next().removeClass('show');
        //$('.plus-add').css('display','block');
        //$('.minus-remove').css('display','none');
        
        //$this.next().slideToggle(1000);
   // } else {
       // $this.parent().parent().find('.inner').removeClass('show');
        //$this.parent().parent().find('li .inner').slideUp(350);
       // $this.next().toggleClass('show');
        //$('.plus-add').css('display','none');
        //$('.minus-remove').css('display','block');
        //$this.next().slideToggle(1000);
   // }
});
</script>	  