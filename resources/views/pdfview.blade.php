<html><head></head><body>
	<style>
		@media print {
			.hidden-print {
				display: none !important;
			}
		}
		</style>
	<div class="text-right">
		<button class="hidden-print" style="float: right; margin: 10px 20px;" onclick="window.print()">Print</button>
	</div>
	<br>
	<br>
	<div style="text-align: center; font-family:Arial, Helvetica, sans-serif; margin-bottom: 4px;;">Tax Invoice</div>
	<table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" style="margin:auto">
	
	<tbody><tr style="height:21.75pt">
	   <td width="513" colspan="7" rowspan="5" valign="top" style="width:384.5pt;border:
		  solid black 1.0pt;padding:0in 0in 0in 0in;height:21.75pt"><img src="{{ asset('owo.png') }}" style="width: 100px; padding: 5px; text-align-right" alt="oso.jpd"> 
		  <p class="TableParagraph" style="margin-top:4.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">OWO<span style="letter-spacing:.7pt"> </span>Technologies<span style="letter-spacing:.7pt"> </span>Pvt.<span style="letter-spacing:.75pt"> </span>Ltd.</span></b>
			</p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:237.95pt;
			 margin-bottom:0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:108%"><span style="font-size:8.0pt;line-height:108%">1106<span style="letter-spacing:
			 .45pt"> </span>B4,<span style="letter-spacing:.5pt"> </span>11<span style="letter-spacing:.45pt"> </span>Floor,<span style="letter-spacing:.5pt">
			 </span>Spaze<span style="letter-spacing:.45pt"> </span>ITech<span style="letter-spacing:.5pt"> </span>Park<span style="letter-spacing:-1.85pt">
			 </span></span><span style="font-size:8.0pt;line-height:108%">Sohna<span style="letter-spacing:-.45pt"> </span>Road,<span style="letter-spacing:-.45pt">
			 </span>Sector-49,</span>
		  </p>
		  <p class="TableParagraph" style="margin-left:2.85pt;line-height:9.15pt"><span style="font-size:8.0pt">Gurugram,<span style="letter-spacing:.9pt"> </span>Haryana</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:263.25pt;
			 margin-bottom:0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:108%"><span style="font-size:8.0pt;line-height:108%">GSTIN 06AADCO1175C1ZV<span style="letter-spacing:.05pt"> </span>FSSAI No--10020064002474<span style="letter-spacing:.05pt"> </span></span><span style="font-size:8.0pt;
			 line-height:108%">GSTIN/UIN:</span><span style="font-size:8.0pt;line-height:
			 108%;letter-spacing:2.5pt"> </span><span style="font-size:8.0pt;line-height:
			 108%">06AADCO1175C1ZV</span></p>
		  <p class="TableParagraph" style="margin-left:2.85pt;line-height:9.1pt"><span style="font-size:8.0pt">State<span style="letter-spacing:-.4pt"> </span>Name<span style="letter-spacing:-.4pt"> </span>:<span style="letter-spacing:1.4pt"> </span>Haryana,<span style="letter-spacing:-.4pt"> </span>Code<span style="letter-spacing:-.4pt"> </span>:<span style="letter-spacing:-.4pt"> </span>06</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">E-Mail<span style="letter-spacing:.85pt"> </span>:<span style="letter-spacing:.85pt"> </span></span><a href="mailto:anil.kumar@owo.in"><span style="font-size:8.0pt;color:windowtext;text-decoration:none">anil.kumar@owo.in</span></a></p>
	   </td>
	   <td width="254" colspan="7" valign="top" style="width:190.5pt;border:solid black 1.0pt;
		  border-left:none;padding:0in 0in 0in 0in;height:21.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Invoice<span style="letter-spacing:-.45pt"> </span>No.</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ $items->invoice }}</span></b></p>
	   </td>
	   <td width="250" colspan="5" valign="top" style="width:187.5pt;border:solid black 1.0pt;
		  border-left:none;padding:0in 0in 0in 0in;height:21.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Dated</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ date("d-M-y", strtotime($items->order_date)) }}</span></b></p>
	   </td>
	   <td style="height:21.75pt;border:none" width="0" height="29"></td>
	</tr>
	<tr style="height:20.75pt">
	   <td width="254" colspan="7" valign="top" style="width:190.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:30.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Delivery<span style="letter-spacing:.6pt"> </span>Note</span></p>
	   </td>
	   <td width="250" colspan="5" valign="top" style="width:187.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Mode/Terms<span style="letter-spacing:.75pt"> </span>of<span style="letter-spacing:.75pt"> </span>Payment</span></p>
	   </td>
	   <td style="height:20.75pt;border:none" width="0" height="28"></td>
	</tr>
	<tr style="height:30.75pt">
	   <td width="254" colspan="7" valign="top" style="width:190.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Reference<span style="letter-spacing:-.45pt"> </span>No.<span style="letter-spacing:-.45pt">
			 </span>&amp;<span style="letter-spacing:-.4pt"> </span>Date.</span>
		  </p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ $items->invoice }}</span></b><b><span style="font-size:8.0pt;font-family:Arial,sans-serif;letter-spacing:3.3pt"> </span></b><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">dt.<span style="letter-spacing:.75pt"> </span>{{ date("d-M-y", strtotime($items->order_date)) }}</span></b></p>
	   </td>
	   <td width="250" colspan="5" valign="top" style="width:187.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Other<span style="letter-spacing:.8pt"> </span>References</span></p>
	   </td>
	   <td style="height:20.75pt;border:none" width="0" height="28"></td>
	</tr>
	<tr style="height:30.75pt">
	   <td width="254" colspan="7" valign="top" style="width:190.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">P.O. No.</span>
		  </p>
	   </td>
	   <td width="250" colspan="5" valign="top" style="width:187.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Dated</span></p>
	   </td>
	   <td style="height:20.75pt;border:none" width="0" height="28"></td>
	</tr>
	<tr style="height:8.75pt">
	   <td width="254" colspan="7" rowspan="2" valign="top" style="width:190.5pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:8.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Dispatch<span style="letter-spacing:-.45pt"> </span>Doc<span style="letter-spacing:-.45pt">
			 </span>No.</span>
		  </p>
	   </td>
	   <td width="250" colspan="5" rowspan="2" valign="top" style="width:187.5pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:8.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Delivery<span style="letter-spacing:.55pt"> </span>Note<span style="letter-spacing:.6pt"> </span>Date</span></p>
	   </td>
	   <td style="height:8.75pt;border:none" width="0" height="12"></td>
	</tr>
	<tr style="height:11.75pt">
	   <td width="513" colspan="7" rowspan="3" valign="top" style="width:384.5pt;border:
		  solid black 1.0pt;border-top:none;padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:2.4pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:9.0pt">Consignee<span style="letter-spacing:.7pt"> </span>(Ship<span style="letter-spacing:.75pt"> </span>to)</span></p>
		  <p class="TableParagraph" style="margin-top:.05in;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ Str::title($items->first_name_shipping) }} {{ Str::title($items->last_name_shipping) }}</b>
		  </p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ Str::title($items->address_1_2_shipping) }}</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">GSTIN/UIN                                      :<span style="letter-spacing:.85pt"> </span>06AACCB4653P1ZD</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:7.4pt"><span style="font-size:8.0pt">State<span style="letter-spacing:-.35pt"> </span>Name:<span style="letter-spacing:1.4pt"> </span>{{ $shipping_state->state }},<span style="letter-spacing:
			 -.3pt"> </span>Code<span style="letter-spacing:-.3pt"> </span>:<span style="letter-spacing:-.3pt"> </span>{{ $shipping_state->state_tin }}</span></p>
	   </td>
	   <td style="height:11.75pt;border:none" width="0" height="16"></td>
	</tr>
	<tr style="height:30.75pt">
	   <td width="254" colspan="7" valign="top" style="width:190.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Dispatched<span style="letter-spacing:.85pt"> </span>through</span></p>
	   </td>
	   <td width="250" colspan="5" valign="top" style="width:187.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:20.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Destination</span></p>
	   </td>
	   <td style="height:20.75pt;border:none" width="0" height="28"></td>
	</tr>
	<tr style="height:21.75pt">
	   {{-- <td width="254" colspan="7" valign="top" style="width:190.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:21.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Vessel/Flight<span style="letter-spacing:.75pt"> </span>No.</span></p>
	   </td> --}}
	   {{-- <td width="250" colspan="5" valign="top" style="width:187.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:21.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Place<span style="letter-spacing:-.45pt"> </span>of<span style="letter-spacing:-.4pt"> </span>receipt<span style="letter-spacing:-.45pt"> </span>by<span style="letter-spacing:-.4pt"> </span>shipper:</span></p>
	   </td> --}}
	   <td style="height:21.75pt;border:none" width="0" height="29"></td>
	</tr>
	<tr style="height:19.35pt">
	   <td width="513" colspan="7" rowspan="2" valign="top" style="width:384.5pt;border:
		  solid black 1.0pt;border-top:none;padding:0in 0in 0in 0in;height:19.35pt">
		  <p class="TableParagraph" style="margin-top:3.4pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:9.0pt">Buyer<span style="letter-spacing:-.4pt"> </span>(Bill<span style="letter-spacing:-.35pt">
			 </span>to)</span>
		  </p>
		  <p class="TableParagraph" style="margin-top:.05in;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ Str::title($items->first_name_billing) }} {{ Str::title($items->last_name_billing) }}</span></b>
		  </p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ Str::title($items->address_1_2_billing) }}</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">GSTIN/UIN :<span style="letter-spacing:.85pt"> </span>06AACCB4653P1ZD</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">State<span style="letter-spacing:-.35pt"> </span>Name:<span style="letter-spacing:1.4pt"> </span>{{ $billing_state->state }},<span style="letter-spacing:
			 -.3pt"> </span>Code<span style="letter-spacing:-.3pt"> </span>:<span style="letter-spacing:-.3pt"> </span>{{ $billing_state->state_tin }}</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Place<span style="letter-spacing:-.35pt"> </span>of<span style="letter-spacing:-.35pt"> </span>Supply</span><span style="font-size:8.0pt">:<span style="letter-spacing:.35pt"> </span>{{ $billing_state->state }}</span></p>
	   </td>
	   {{-- <td width="254" colspan="7" valign="top" style="width:190.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:19.35pt">
		  <p class="TableParagraph" style="margin-left:2.35pt;line-height:8.55pt"><span style="font-size:8.0pt">City/Port<span style="letter-spacing:.6pt"> </span>of<span style="letter-spacing:.6pt"> </span>Loading</span></p>
	   </td> --}}
	   {{-- <td width="250" colspan="5" valign="top" style="width:187.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:19.35pt">
		  <p class="TableParagraph" style="margin-left:1.85pt;line-height:8.55pt"><span style="font-size:8.0pt">City/Port<span style="letter-spacing:.65pt"> </span>of<span style="letter-spacing:.7pt"> </span>Discharge</span></p>
	   </td> --}}
	   <td style="height:19.35pt;border:none" width="0" height="26"></td>
	</tr>
	<tr style="height:.75in">
	   <td width="504" colspan="12" valign="top" style="width:5.25in;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:.75in">
		  <p class="TableParagraph" style="margin-left:2.35pt; margin-top: -50px;"><span style="font-size:
			 8.0pt">Terms<span style="letter-spacing:-.45pt"> </span>of<span style="letter-spacing:-.45pt"> </span>Delivery</span></p>
	   </td>
	   <td style="height:.75in;border:none" width="0" height="72"></td>
	</tr>
	<tr style="height:13.35pt">
	   <td width="17" rowspan="2" valign="top" style="width:13.0pt;border:solid black 1.0pt;
		  border-top:none;padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:1.2pt;margin-right:2.05pt;
			 margin-bottom:0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:11.0pt"><span style="font-size:8.0pt">Sl<span style="letter-spacing:-1.75pt"> </span></span><span style="font-size:8.0pt">No.</span></p>
	   </td>
	   <td width="264" rowspan="2" valign="top" style="width:197.9pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:67.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Description<span style="letter-spacing:.65pt"> </span>of<span style="letter-spacing:.65pt"> </span>Goods</span></p>
	   </td>
	   <td width="75" rowspan="2" valign="top" style="width:56.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:10pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">HSN/SAC</span></p>
	   </td>
	   <td width="71" colspan="1" rowspan="2" valign="top" style="width:53.0pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:9.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Quantity</span></p>
	   </td>
	   <td width="77" rowspan="2" colspan="2" valign="top" style="width:57.4pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" align="center" style="margin-top:3.0pt;margin-right:
			 2.45pt;margin-bottom:0in;margin-left:3.3pt;margin-bottom:.0001pt;text-align:
			 center"><span style="font-size:8.0pt">Rate</span></p>
		  <p class="TableParagraph" align="center" style="margin-top:1.8pt;margin-right:
			 2.45pt;margin-bottom:0in;margin-left:12.75pt;margin-bottom:.0001pt;
			 text-align:center"><span style="font-size:8.0pt">(Incl.<span style="letter-spacing:-.35pt"> </span>of<span style="letter-spacing:-.35pt"> </span>Tax)</span></p>
	   </td>
	   <td width="61" colspan="2" rowspan="2" valign="top" style="width:45.6pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:10.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
	   </td>
	   <td width="32" rowspan="2" valign="top" style="width:24.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:5pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">per</span></p>
	   </td>
	   <td width="71" rowspan="2" valign="top" style="width:62.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:10.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
	   </td>
	   <td width="79" colspan="3" rowspan="2" valign="top" style="width:59.0pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" align="right" style="margin-top:3.0pt;margin-right:
			 30.3pt;margin-bottom:0in;margin-left:0;margin-bottom:.0001pt;text-align:
			 right"><span style="font-size:8.0pt">Taxable Value</span></p>
	  
	   </td>
	   @if($items->state_code_billing == 'HR')
	   <td width="100" colspan="3" valign="top" style="width:75.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:30.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Central Tax</span></p>
	   </td>
	   <td width="92" colspan="2" valign="top" style="width:69.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">State<span style="letter-spacing:-.4pt"> </span>Tax</span></p>
	   </td>
	   @else
	   <td width="100" colspan="5" valign="top" style="width:75.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:3.0pt;margin-right:0in;margin-bottom:
			 0in;margin-left:30.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Integrated Tax</span></p>
	   </td>
	   @endif
	   <td width="79" rowspan="2" valign="top" style="width:59.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:13.35pt">
		  <p class="TableParagraph" style="margin-top:1.2pt;margin-right:16.55pt;
			 margin-bottom:0in;margin-left:16.85pt;margin-bottom:.0001pt;text-indent:4.0pt;
			 line-height:11.0pt"><span style="font-size:8.0pt">Total<span style="letter-spacing:.05pt"> </span>Amount</span></p>
	   </td>
	 
	</tr>
	<tr style="height:10.75pt">
	  @if($items->state_code_billing == 'HR')
	  <td width="40" colspan="2" valign="top" style="width:30.0pt;border-top:none;
	  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
	  padding:0in 0in 0in 0in;height:10.75pt">
	  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
		 0in;margin-left:9.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
   </td>
   <td width="70" valign="top" style="width:45.0pt;border-top:none;border-left:none;
	  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
	  height:10.75pt">
	  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
		 0in;margin-left:9.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
   </td>
   <td width="32" valign="top" style="width:24.0pt;border-top:none;border-left:none;
	  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
	  height:10.75pt">
	  <p class="TableParagraph" align="center" style="margin-top:.35pt;margin-right:
		 .25pt;margin-bottom:0in;margin-left:.1pt;margin-bottom:.0001pt;text-align:
		 center"><span style="font-size:8.0pt">Rate</span></p>
   </td>
   <td width="60" valign="top" style="width:45.0pt;border-top:none;border-left:none;
	  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
	  height:10.75pt">
	  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
		 0in;margin-left:9.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
   </td>
   @else
	<td width="40" colspan="3" valign="top" style="width:30.0pt;border-top:none;
	border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
	padding:0in 0in 0in 0in;height:10.75pt">
	<p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
		0in;margin-left:9.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
	</td>
	<td width="70" colspan="2" valign="top" style="width:45.0pt;border-top:none;border-left:none;
	border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
	height:10.75pt">
	<p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
		0in;margin-left:9.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
	</td>
	@endif  
	</tr>
	<tr style="height:214.75pt">
	   <td width="17" valign="top" style="width:13.0pt;border:solid black 1.0pt;
		  border-top:none;padding:0in 0in 0in 0in;height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">1</span></p>
	   </td>
	   <td width="264" valign="top" style="width:197.9pt;border-top:none;border-left:
		  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ $items->item_name }}</span></p>
		  <p class="TableParagraph" style="margin-top:.2pt"><span style="font-size:11.5pt;
			 font-family:Times New Roman,serif">&nbsp;</span></p>
		 @if ($items->state_code_billing == 'HR')
		 <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
		 0in;margin-left:100.85pt;margin-bottom:.0001pt;line-height:120%"><b><i>
			 <span style="font-size:8.0pt;line-height:120%;font-family:Arial,sans-serif">Output CGST @ {{ $items->gst/2 }}% {{ $items->state_code_billing }}</span></i></b></p>
			 <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
			 0in;margin-left:100.85pt;margin-bottom:.0001pt;line-height:120%"><b><i>
				 <span style="font-size:8.0pt;line-height:120%;font-family:Arial,sans-serif">Output SGST @ {{ $items->gst/2 }}% {{ $items->state_code_billing }}</span></i></b></p>
		  @else
		  <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
		  0in;margin-left:100.85pt;margin-bottom:.0001pt;line-height:120%"><b><i>
			  <span style="font-size:8.0pt;line-height:120%;font-family:Arial,sans-serif">Output IGST @ {{ $items->gst }}% {{ $items->state_code_billing }}</span></i></b></p>
		 @endif
	   </td>
	   <td width="75" valign="top" style="width:56.1pt;border-top:none;border-left:none;
		  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
		  height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt; margin-left: 12px;">{{ $items->hsn }}</span></p>
	   </td>
	   <td width="69" valign="top" style="width:51.9pt;border-top:none;border-left:none;
		  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
		  height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif; margin-left: 12px;">{{ $items->quantity }} Nos</span></b></p>
	   </td>
	   <td width="78" colspan="2" valign="top" style="width:58.5pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt"><span style="font-size:
			 8.0pt; margin-left: 12px;">&nbsp;&nbsp;{{ number_format(round($items->item_cost + ($items->item_cost * $items->gst)/100, 2), 2) }}</span></p>
	   </td>
	   <td width="61" colspan="2" valign="top" style="width:45.6pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:10.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ $items->item_cost }}</span></p>
		  <p class="TableParagraph"><span style="font-size:9.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" style="margin-top:.2pt"><span style="font-size:11.5pt;
			 font-family:Times New Roman,serif">&nbsp;</span></p>
		  @if ($items->state_code_billing == 'HR')
		  <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
			 0in;margin-left:22.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ $items->gst/2 }}</span></p>
		  <p class="TableParagraph" style="margin-top:1.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:22.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ $items->gst/2 }}</span></p>
			@else
			<p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
			 0in;margin-left:22.35pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ $items->gst }}</span></p>
			@endif
	   </td>
	   <td width="32" valign="top" style="width:24.0pt;border-top:none;border-left:none;
		  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
		  height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:7.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Nos</span></p>
		  <p class="TableParagraph"><span style="font-size:9.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" style="margin-top:.2pt"><span style="font-size:11.5pt;
			 font-family:Times New Roman,serif">&nbsp;</span></p>
		 @if($items->state_code_billing == 'HR')
		 <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
		 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">%</span></p>
	  	<p class="TableParagraph" style="margin-top:1.8pt;margin-right:0in;margin-bottom:
		 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">%</span></p>
		 @else
		 <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
		 0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">%</span></p>
		 @endif
	   </td>
	   <td width="79" colspan="1" valign="top" style="width:50.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:14.85pt;margin-bottom:.0001pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></b></p>
		  <p class="TableParagraph"><span style="font-size:9.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" style="margin-top:.2pt"><span style="font-size:11.5pt;
			 font-family:Times New Roman,serif">&nbsp;</span></p>
		  @if($items->state_code_billing == 'HR')
		  <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
			 0in;margin-left:14.85pt;margin-bottom:.0001pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></b></p>
		  <p class="TableParagraph" style="margin-top:1.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:14.85pt;margin-bottom:.0001pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></b></p>
			 @else
			 <p class="TableParagraph" style="margin-top:.05pt;margin-right:0in;margin-bottom:
			 0in;margin-left:14.85pt;margin-bottom:.0001pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></b></p>
			 @endif
	   </td>
	   <td width="79" colspan="3" valign="top" style="width:59.0pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:24.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt; margin-left: -11px;">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></p>
	   </td>
	  	@if($items->state_code_billing == 'HR')
			<td width="32" colspan="2" valign="top" style="width:24.0pt;border-top:none;
			border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
			padding:0in 0in 0in 0in;height:214.75pt">
			<p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
				0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt; margin-left: 12px;">{{ $items->gst/2 }}%</span></p>
		</td>
		<td width="60" valign="top" style="width:45.0pt;border-top:none;border-left:none;
			border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
			height:214.75pt">
			<p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
				0in;margin-left:10.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
		</td>
		<td width="32" valign="top" style="width:24.0pt;border-top:none;border-left:none;
			border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
			height:214.75pt">
			<p class="TableParagraph" align="center" style="margin-top:6.35pt;margin-right:
				.1pt;margin-bottom:0in;margin-left:.1pt;margin-bottom:.0001pt;text-align:
				center"><span style="font-size:8.0pt">{{ $items->gst/2 }}%</span></p>
		</td>
		<td width="60" valign="top" style="width:45.0pt;border-top:none;border-left:none;
			border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
			height:214.75pt">
			<p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
				0in;margin-left:10.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
		</td>
		@else
		<td width="32" colspan="3" valign="top" style="width:24.0pt;border-top:none;
		border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		padding:0in 0in 0in 0in;height:214.75pt">
		<p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			0in;margin-left:1.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt; margin-left: 12px;">{{ $items->gst }}%</span></p>
		</td>
		<td width="60" colspan="2" valign="top" style="width:45.0pt;border-top:none;border-left:none;
		border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
		height:214.75pt">
		<p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			0in;margin-left:10.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></p>
		</td>
		@endif
	   <td width="79" valign="top" style="width:59.5pt;border-top:none;border-left:none;
		  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
		  height:214.75pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:14.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ number_format(round(($items->quantity * $items->item_cost) + (($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></p>
	   </td>
	 
	</tr>
	{{-- Total Part --}}
	@if($items->state_code_billing == 'HR')
	<tr style="height:12.75pt">
    
		<td colspan="2" valign="top" style="width:3.0in;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" align="right" style="margin-top:1.35pt;margin-right:
			  2.2pt;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:
			  right"><span style="font-size:8.0pt">Total</span></p>
		</td>
		<td style="border: #000 1px solid; border-top:0px; border-left:0px ;"></td>
		<td colspan="1" valign="top" style="width:59.0pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="text-align: center;"><span style="font-size:8.0pt">{{ $items->quantity }} Nos</span></p>
		</td>
		<td colspan="3" valign="top" style="width:57.35pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td>
		<td colspan="1" valign="top" style="width:39.25pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td>
		<td valign="top" style="width:24.55pt;border-top:none;border-left:
		   none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td>
		<td colspan="2" valign="top" style="width:59.15pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="text-align: center;"><span style="font-size:9.0pt;font-family:Microsoft Sans Serif,sans-serif">₹<span style="letter-spacing:-.15pt"> </span></span><b><span style="font-size:9.0pt;
			  font-family:Arial,sans-serif">{{ number_format(round(($items->quantity * $items->item_cost) + (($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></b></p>
		</td>
		<td colspan="2" valign="top" style="width:59.15pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="text-align: center;"><span style="font-size:8.0pt">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></p>
		</td>
   
		<td colspan="2" valign="top" style="width:43.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="margin-top:1.35pt;margin-right:-.75pt;
			  margin-bottom:0in;margin-left:20.3pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">&nbsp;</span></p>
		</td>
		<td colspan="1" valign="top" style="width:26.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif; margin-left: 10px;">&nbsp;{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
		</td>
		<td colspan="1" valign="top" style="width:45.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			  0in;margin-left:20.1pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">&nbsp;</span></p>
		</td>
		
		<td colspan="1" valign="top" style="width:45.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			  0in;margin-left:10.1pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
		</td>
		<td colspan="1" valign="top" style="width:45.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			  0in;margin-left:20.1pt;margin-bottom:.0001pt"><span style="font-size:8.0pt"></span></p>
		</td>
  
		<td style="height:12.75pt;border:none" width="0" height="17"></td>
	 </tr>
	@else
	{{-- Else Total Part --}}
	<tr style="height:12.75pt">
    
		<td colspan="2" valign="top" style="width:3.0in;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" align="right" style="margin-top:1.35pt;margin-right:
			  2.2pt;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:
			  right"><span style="font-size:8.0pt">Total</span></p>
		</td>
		<td style="border: #000 1px solid; border-top:0px; border-left:0px ;"></td>
		<td colspan="1" valign="top" style="width:59.0pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="text-align: center;"><span style="font-size:8.0pt">{{ $items->quantity }} Nos</span></p>
		</td>
		<td colspan="1" valign="top" style="width:57.35pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td>
		<td colspan="3" valign="top" style="width:39.25pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td>
		<td valign="top" style="width:24.55pt;border-top:none;border-left:
		   none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td>
		<td colspan="3" valign="top" style="width:59.15pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="text-align: center;"><span style="font-size:9.0pt;font-family:Microsoft Sans Serif,sans-serif">₹<span style="letter-spacing:-.15pt"> </span></span><b><span style="font-size:9.0pt;
			  font-family:Arial,sans-serif">{{ number_format(round(($items->quantity * $items->item_cost) + (($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></b></p>
		</td>
		<td colspan="2" valign="top" style="width:59.15pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="text-align: center;"><span style="font-size:8.0pt">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></p>
		</td>
   
		<td valign="top" style="width:24.55pt;border-top:none;border-left:
		none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		padding:0in 0in 0in 0in;height:12.75pt">
		<p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
	 </td>
		{{-- <td colspan="3" valign="top" style="width:43.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="margin-top:1.35pt;margin-right:-.75pt;
			  margin-bottom:0in;margin-left:20.3pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">&nbsp;</span></p>
		</td> --}}
		
		{{-- <td colspan="2" valign="top" style="width:39.25pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		</td> --}}
		<td colspan="3" valign="top" style="width:45.1pt;border-top:none;
		   border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		   padding:0in 0in 0in 0in;height:12.75pt">
		   <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			  0in;margin-left:20.1pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></p>
		</td>
		
		<td colspan="2" valign="top" style="width:45.1pt;border-top:none;
		border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		padding:0in 0in 0in 0in;height:12.75pt">
		<p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
		   0in;margin-left:20.1pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">&nbsp;</span></p>
	 </td>
		<td style="height:12.75pt;border:none" width="0" height="17"></td>
	 </tr>
	@endif
	{{-- End Total Part --}}
	{{-- Here --}}
	@if($items->state_code_billing == 'HR')
	<tr style="height:15.75pt">
	   <td colspan="18" valign="top" style="width:383.35pt;border-top:none;
		  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
		  none;padding:0in 0in 0in 0in;height:15.75pt">
		  <p class="TableParagraph" style="margin-top:3.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount<span style="letter-spacing:.55pt"> </span>Chargeable<span style="letter-spacing:
			 .55pt"> </span>(in<span style="letter-spacing:.55pt"> </span>words)</span><span style="font-size:8.0pt;letter-spacing:5.6pt"> </span><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">Indian Rupees {{ Str::title(NumConvert::word(round(($items->quantity * $items->item_cost) + (($items->item_cost * $items->quantity) * $items->gst)/100), 2)) }} Only</span></b>
		  </p>
	   </td>
 
 
 
 
	   <td colspan="1" valign="top" style="width:60.05pt;border-top:none;border-left:
		  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:15.75pt">
		  <p class="TableParagraph" style="margin-top:3.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:27.15pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">E.<span style="letter-spacing:-.25pt"> </span>&amp;<span style="letter-spacing:-.25pt">
			 </span>O.E</span>
		  </p>
	   </td>
	
	</tr>
	<tr style="height:11.75pt">
	   <td colspan="9" rowspan="4" valign="bottom" style="width:422.6pt;
		  border:solid black 1.0pt;border-top:none;padding:0in 0in 0in 0in;height:11.75pt">
 
		  <p class="TableParagraph" align="right" style="margin-top:.05pt;margin-right:
			 4.1pt;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:
			 right"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">Total:</span></b></p>
	   </td>
	   <td width="79" colspan="2" rowspan="2" valign="top" style="width:59.6pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="right" style="text-align:center"><span style="font-size:8.0pt">Taxable Value</span></p>
	   </td>
	   <td width="143" colspan="3" valign="top" style="width:107.35pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="text-align: center;"><span style="font-size:8.0pt">Central Tax</span></p>
	   </td>
	   <td width="143" colspan="3" valign="top" style="width:107.25pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="center" style="margin-top:1.35pt;margin-right:
			 36.6pt;margin-bottom:0in;margin-left:36.2pt;margin-bottom:.0001pt;text-align:
			 center"><span style="font-size:8.0pt">State<span style="letter-spacing:-.4pt">
			 </span>Tax</span>
		  </p>
	   </td>
	   <td width="89" colspan="2" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="center" style="margin-top:1.35pt;margin-right:
			 25.55pt;margin-bottom:0in;margin-left:21.5pt;margin-bottom:.0001pt;
			 text-align:center"><span style="font-size:8.0pt">Total</span></p>
	   </td>
	   <td style="height:11.75pt;border:none" width="0" height="16"></td>
	</tr>
	<tr style="height:10.75pt">
	   <td width="59" colspan="1" valign="top" style="width:44.15pt;border:none;
		  border-right:solid black 1.0pt;padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.65pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
	   </td>
	   <td width="84" colspan="2" valign="top" style="width:63.2pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:19.5pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
	   </td>
	   <td width="57" colspan="1" valign="top" style="width:43.1pt;border:none;border-right:
		  solid black 1.0pt;padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:13.3pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
	   </td>
	   <td width="86" colspan="2" valign="top" style="width:64.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:17.2pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
	   </td>
	   <td width="89" colspan="2" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:12.05pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Tax<span style="letter-spacing:-.45pt"> </span>Amount</span></p>
	   </td>
	   <td style="height:10.75pt;border:none" width="0" height="14"></td>
	</tr>
	<tr style="height:9.75pt">
	   <td width="79" colspan="2" valign="top" style="width:59.6pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:-5.05pt;
			 margin-bottom:0in;margin-left:18.25pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></p>
	   </td>
	   <td width="59" colspan="1" valign="top" style="width:44.15pt;border:none;
		  border-right:solid black 1.0pt;padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:20.65pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ $items->gst/2 }}%</span></p>
	   </td>
	   <td width="84" colspan="2" valign="top" style="width:63.2pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:-1.45pt;
			 margin-bottom:0in;margin-left:18.5pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
	   </td>
	   <td width="57" colspan="1" valign="top" style="width:43.1pt;border:none;border-right:
		  solid black 1.0pt;padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:17.3pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ $items->gst/2 }}%</span></p>
	   </td>
	   <td width="86" colspan="2" valign="top" style="width:64.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:25.2pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
	   </td>
	   <td width="89" colspan="2" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:35.05pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round(((($items->item_cost * $items->quantity) * $items->gst/2)/100) * 2, 2), 2) }}</span></p>
	   </td>
	   <td style="height:9.75pt;border:none" width="0" height="13"></td>
	</tr>
	<tr style="height:11.75pt">
	   <td width="79" colspan="2" valign="top" style="width:59.6pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:-5.05pt;
			 margin-bottom:0in;margin-left:18.25pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></b></p>
	   </td>
	   <td width="59" colspan="1" valign="top" style="width:44.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
	   </td>
	   <td width="84" colspan="2" valign="top" style="width:63.2pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:-1.45pt;
			 margin-bottom:0in;margin-left:18.5pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></b></p>
	   </td>
	   <td width="57" colspan="1" valign="top" style="width:43.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
	   </td>
	   <td width="86" colspan="2" valign="top" style="width:64.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:25.2pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></b></p>
	   </td>
	   <td width="89" colspan="2" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:35.05pt;margin-bottom:.0001pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif">{{ number_format(round(((($items->item_cost * $items->quantity) * $items->gst/2)/100) * 2, 2), 2) }}</span></b></p>
	   </td>
	   <td style="height:11.75pt;border:none" width="0" height="16"></td>
	</tr>
	{{-- Here End --}}
	@else
	{{-- Here Else Start --}}
	<tr style="height:15.75pt">
	   <td colspan="18" valign="top" style="width:383.35pt;border-top:none;
		  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
		  none;padding:0in 0in 0in 0in;height:15.75pt">
		  <p class="TableParagraph" style="margin-top:3.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount<span style="letter-spacing:.55pt"> </span>Chargeable<span style="letter-spacing:
			 .55pt"> </span>(in<span style="letter-spacing:.55pt"> </span>words)</span><span style="font-size:8.0pt;letter-spacing:5.6pt"> </span><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">Indian Rupees {{ Str::title(NumConvert::word(round(($items->quantity * $items->item_cost) + (($items->item_cost * $items->quantity) * $items->gst)/100), 2)) }} Only</span></b>
		  </p>
	   </td>
 
	   <td colspan="1" valign="top" style="width:60.05pt;border-top:none;border-left:
		  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:15.75pt">
		  <p class="TableParagraph" style="margin-top:3.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:27.15pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">E.<span style="letter-spacing:-.25pt"> </span>&amp;<span style="letter-spacing:-.25pt">
			 </span>O.E</span>
		  </p>
	   </td>
	</tr>
	<tr style="height:11.75pt">
	   <td colspan="9" rowspan="4" valign="bottom" style="width:422.6pt;
		  border:solid black 1.0pt;border-top:none;padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="right" style="margin-top:.05pt;margin-right:
			 4.1pt;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:
			 right"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">Total:</span></b></p>
	   </td>
	   <td width="79" colspan="2" rowspan="2" valign="top" style="width:59.6pt;border-top:
		  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="right" style="text-align:center"><span style="font-size:8.0pt">Taxable Value</span></p>
	   </td>
	   <td width="143" colspan="6" valign="top" style="width:107.35pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="text-align: center;"><span style="font-size:8.0pt">Integrated Tax</span></p>
	   </td>
	   {{-- <td width="143" colspan="3" valign="top" style="width:107.25pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="center" style="margin-top:1.35pt;margin-right:
			 36.6pt;margin-bottom:0in;margin-left:36.2pt;margin-bottom:.0001pt;text-align:
			 center"><span style="font-size:8.0pt">State<span style="letter-spacing:-.4pt">
			 </span>Tax</span>
		  </p>
	   </td> --}}
	   <td width="89" colspan="2" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" align="center" style="margin-top:1.35pt;margin-right:
			 25.55pt;margin-bottom:0in;margin-left:21.5pt;margin-bottom:.0001pt;
			 text-align:center"><span style="font-size:8.0pt">Total</span></p>
	   </td>
	   <td style="height:11.75pt;border:none" width="0" height="16"></td>
	</tr>
	<tr style="height:10.75pt">
	   <td width="59" colspan="3" valign="top" style="width:44.15pt;border:none;
		  border-right:solid black 1.0pt;padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.65pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
	   </td>
	   <td width="84" colspan="3" valign="top" style="width:63.2pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:19.5pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
	   </td>
	   {{-- <td width="57" colspan="1" valign="top" style="width:43.1pt;border:none;border-right:
		  solid black 1.0pt;padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:13.3pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Rate</span></p>
	   </td>
	   <td width="86" colspan="2" valign="top" style="width:64.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:17.2pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">Amount</span></p>
	   </td> --}}
	   <td width="89" colspan="3" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:12.05pt;margin-bottom:.0001pt"><span style="font-size:8.0pt; margin-left: 18px;">Tax<span style="letter-spacing:-.45pt"> </span>Amount</span></p>
	   </td>
	   <td style="height:10.75pt;border:none" width="0" height="14"></td>
	</tr>
	<tr style="height:9.75pt">
	   <td width="79" colspan="2" valign="top" style="width:59.6pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:-5.05pt;
			 margin-bottom:0in;margin-left:18.25pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></p>
	   </td>
	   <td width="59" colspan="3" valign="top" style="width:44.15pt;border:none;
		  border-right:solid black 1.0pt;padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:20.65pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ $items->gst }}%</span></p>
	   </td>
	   <td width="84" colspan="3" valign="top" style="width:63.2pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:-1.45pt;
			 margin-bottom:0in;margin-left:18.5pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></p>
	   </td>
	   {{-- <td width="57" colspan="1" valign="top" style="width:43.1pt;border:none;border-right:
		  solid black 1.0pt;padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:17.3pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ $items->gst/2 }}%</span></p>
	   </td>
	   <td width="86" colspan="2" valign="top" style="width:64.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:25.2pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></p>
	   </td> --}}
	   <td width="89" colspan="3" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:9.75pt">
		  <p class="TableParagraph" style="margin-top:.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:35.05pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">{{ number_format(round(((($items->item_cost * $items->quantity) * $items->gst/2)/100) * 2, 2), 2) }}</span></p>
	   </td>
	   <td style="height:9.75pt;border:none" width="0" height="13"></td>
	</tr>
	<tr style="height:11.75pt">
	   <td width="79" colspan="2" valign="top" style="width:59.6pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:-5.05pt;
			 margin-bottom:0in;margin-left:18.25pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">{{ number_format(round(($items->item_cost * $items->quantity), 2), 2) }}</span></b></p>
	   </td>
	   <td width="59" colspan="3" valign="top" style="width:44.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
	   </td>
	   <td width="84" colspan="3" valign="top" style="width:63.2pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:-1.45pt;
			 margin-bottom:0in;margin-left:18.5pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst)/100, 2), 2) }}</span></b></p>
	   </td>
	   {{-- <td width="57" colspan="1" valign="top" style="width:43.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph"><span style="font-size:8.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
	   </td> --}}
	   {{-- <td width="86" colspan="2" valign="top" style="width:64.15pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:25.2pt;margin-bottom:.0001pt"><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">{{ number_format(round((($items->item_cost * $items->quantity) * $items->gst/2)/100, 2), 2) }}</span></b></p>
	   </td> --}}
	   <td width="89" colspan="3" valign="top" style="width:67.1pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:11.75pt">
		  <p class="TableParagraph" style="margin-top:1.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:35.05pt;margin-bottom:.0001pt"><b><span style="font-size:
			 8.0pt;font-family:Arial,sans-serif">{{ number_format(round(((($items->item_cost * $items->quantity) * $items->gst/2)/100) * 2, 2), 2) }}</span></b></p>
	   </td>
	   <td style="height:11.75pt;border:none" width="0" height="16"></td>
	</tr>
	@endif
	{{-- Here End Else --}}


	<tr style="height:16.45pt">
	   <td width="511" colspan="7" valign="top" style="width:383.35pt;border:none;
		  border-left:solid black 1.0pt;padding:0in 0in 0in 0in;height:16.45pt">
		  <p class="TableParagraph" style="margin-top:6.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:9.1pt"><span style="font-size:8.0pt">Tax<span style="letter-spacing:.45pt"> </span>Amount<span style="letter-spacing:.45pt"> </span>(in<span style="letter-spacing:.45pt"> </span>words)<span style="letter-spacing:1.0pt"> </span>:</span><span style="font-size:8.0pt;
			 letter-spacing:3.5pt"> </span><b><span style="font-size:8.0pt;font-family:
			 Arial,sans-serif">Indian Rupees {{ Str::title(NumConvert::word(round(((($items->item_cost * $items->quantity) * $items->gst/2)/100) * 2, 2))) }} Only</span></b></p>
	   </td>
	   <td width="132" colspan="4" rowspan="5" valign="top" style="width:98.85pt;border:
		  none;border-bottom:solid black 1.0pt;padding:0in 0in 0in 0in;height:16.45pt">
		  <p class="TableParagraph"><span style="font-size:10.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph"><span style="font-size:9.5pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" style="margin-left:.6pt"><span style="font-size:9.0pt">Company’s<span style="letter-spacing:.85pt"> </span>Bank<span style="letter-spacing:.9pt"> </span>Details</span></p>
		  <p class="TableParagraph" style="margin-top:.6pt;margin-right:20.0pt;
			 margin-bottom:0in;margin-left:.6pt;margin-bottom:.0001pt;line-height:108%"><span style="font-size:8.0pt;line-height:108%">A/c<span style="letter-spacing:.45pt">
			 </span>Holder’s<span style="letter-spacing:.5pt"> </span>Name<span style="letter-spacing:-1.85pt"> </span></span><span style="font-size:8.0pt;
				line-height:108%">Bank<span style="letter-spacing:-.45pt"> </span>Name</span>
		  </p>
		  <p class="TableParagraph" style="margin-left:.6pt;line-height:9.15pt"><span style="font-size:8.0pt">A/c<span style="letter-spacing:-.3pt"> </span>No.</span></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:.6pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">Branch<span style="letter-spacing:-.4pt"> </span>&amp;<span style="letter-spacing:-.4pt"> </span>IFS<span style="letter-spacing:-.35pt"> </span>Code</span></p>
	   </td>
	   
	   
	   <td width="195" colspan="8" rowspan="5" valign="top" style="width:146.4pt;border:
		  none;border-bottom:solid black 1.0pt;padding:0in 0in 0in 0in;height:16.45pt">
		  <p class="TableParagraph"><span style="font-size:9.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph"><span style="font-size:9.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph"><span style="font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" style="margin-left:5.7pt"><span style="font-size:
			 8.0pt">:<span style="letter-spacing:1.15pt"> </span></span><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">OWO<span style="letter-spacing:-.4pt"> </span>Technologies<span style="letter-spacing:
			 -.4pt"> </span>Pvt<span style="letter-spacing:-.4pt"> </span>Ltd</span></b></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:5.7pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">:</span><span style="font-size:8.0pt;letter-spacing:2.7pt"> </span><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">ICICI<span style="letter-spacing:.55pt"> </span>Bank<span style="letter-spacing:.55pt"> </span>Ltd<span style="letter-spacing:.55pt"> </span>(343105000747)</span></b></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:5.7pt;margin-bottom:.0001pt"><span style="font-size:8.0pt">:<span style="letter-spacing:1.1pt"> </span></span><b><span style="font-size:8.0pt;
			 font-family:Arial,sans-serif">343105000747</span></b></p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:5.7pt;margin-bottom:.0001pt;line-height:8.4pt"><span style="font-size:8.0pt">:</span><span style="font-size:8.0pt;letter-spacing:
			 2.8pt"> </span><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">Gurgaon,<span style="letter-spacing:.6pt"> </span>Haryana<span style="letter-spacing:.6pt">
			 </span>&amp;<span style="letter-spacing:.6pt"> </span>ICIC0003431</span></b>
		  </p>
	   </td>
	   
	   
	   
	   
	   
	</tr>
	<tr style="height:10.75pt">
	   <td width="511" colspan="9" valign="top" style="width:383.35pt;border:none;
		  border-left:solid black 1.0pt;padding:0in 0in 0in 0in;height:10.75pt">
		  <p class="TableParagraph" style="margin-top:.65pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:9.15pt"><i><span style="font-size:8.0pt;font-family:Arial,sans-serif">Remarks:</span></i></p>
	   </td>
	   <td style="height:10.75pt;border:none" width="0" height="14"></td>
	</tr>
	<tr style="height:18.8pt">
	   <td width="511" colspan="9" valign="top" style="width:383.35pt;border:none;
		  border-left:solid black 1.0pt;padding:0in 0in 0in 0in;height:18.8pt">
		  <p class="TableParagraph" style="margin-top:.65pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt"><span style="font-size:9.0pt">{{ $items->invoice }}</span></p>
	   </td>
	   <td style="height:18.8pt;border:none" width="0" height="25"></td>
	</tr>
	<tr style="height:17.6pt">
	   <td width="511" colspan="9" valign="top" style="width:383.35pt;border:none;
		  border-left:solid black 1.0pt;padding:0in 0in 0in 0in;height:17.6pt">
		  <p class="TableParagraph" style="margin-top:7.5pt;margin-right:0in;margin-bottom:
			 0in;margin-left:2.85pt;margin-bottom:.0001pt;line-height:9.1pt"><span style="font-size:8.0pt">Declaration</span></p>
	   </td>
	   <td style="height:17.6pt;border:none" width="0" height="23"></td>
	</tr>
	<tr style="height:8.0pt">
	   <td width="511" colspan="6" valign="top" style="width:383.35pt;border:none;
		  border-left:solid black 1.0pt;padding:0in 0in 0in 0in;height:8.0pt">
		  <p class="TableParagraph" style="margin-left:2.85pt;line-height:1.0pt"><span style="font-size:1.0pt;font-family:Times New Roman,serif"><img width="53" height="2" src="3288%20(1)_files/image001.gif"></span></p>
		  <p class="TableParagraph" style="margin-left:2.85pt;line-height:6.0pt"><span style="font-size:8.0pt">1.</span><span style="font-size:8.0pt;letter-spacing:
			 2.25pt"> </span><span style="font-size:8.0pt">Payment<span style="letter-spacing:
			 -.35pt"> </span>should<span style="letter-spacing:-.35pt"> </span>done<span style="letter-spacing:-.35pt"> </span>in<span style="letter-spacing:-.35pt"> </span>Bank<span style="letter-spacing:-.3pt"> </span>or<span style="letter-spacing:-.35pt"> </span>maximum<span style="letter-spacing:-.35pt"> </span>in<span style="letter-spacing:-.35pt"> </span>7<span style="letter-spacing:-.35pt"> </span>days.</span></p>
	   </td>
	   
	</tr>
	<tr style="height:42.75pt">
	   <td width="511" colspan="6" valign="top" style="width:383.35pt;border:solid black 1.0pt;
		  border-top:none;padding:0in 0in 0in 0in;height:42.75pt">
		  <p class="TableParagraph" style="margin-top:2.35pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.5pt;margin-bottom:.0001pt;text-indent:-13.7pt"><span style="font-size:8.0pt">2.<span style="font:7.0pt Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;
			 </span></span><span style="font-size:8.0pt">Goods<span style="letter-spacing:
				-.45pt"> </span>once<span style="letter-spacing:-.4pt"> </span>sold<span style="letter-spacing:-.45pt"> </span>will<span style="letter-spacing:-.4pt">
			 </span>not<span style="letter-spacing:-.45pt"> </span>be<span style="letter-spacing:-.4pt"> </span>taken<span style="letter-spacing:-.45pt">
			 </span>back<span style="letter-spacing:-.4pt"> </span>or<span style="letter-spacing:-.4pt"> </span>exchanged.</span>
		  </p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.5pt;margin-bottom:.0001pt;text-indent:-13.7pt"><span style="font-size:8.0pt">3.<span style="font:7.0pt Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;
			 </span></span><span style="font-size:8.0pt">Interest<span style="letter-spacing:
				-.45pt"> </span>@24%<span style="letter-spacing:-.4pt"> </span>p.a.<span style="letter-spacing:-.4pt"> </span>will<span style="letter-spacing:-.45pt">
			 </span>be<span style="letter-spacing:-.4pt"> </span>charged<span style="letter-spacing:-.4pt"> </span>if<span style="letter-spacing:-.4pt"> </span>the<span style="letter-spacing:-.45pt"> </span>payment<span style="letter-spacing:
				-.4pt"> </span>is<span style="letter-spacing:-.4pt"> </span>not<span style="letter-spacing:-.4pt"> </span>made<span style="letter-spacing:-.45pt">
			 </span>in<span style="letter-spacing:-.4pt"> </span>the<span style="letter-spacing:-.4pt"> </span>stipulated<span style="letter-spacing:
				-.4pt"> </span>time.</span>
		  </p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.5pt;margin-bottom:.0001pt;text-indent:-13.7pt"><span style="font-size:8.0pt">4.<span style="font:7.0pt Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;
			 </span></span><span style="font-size:8.0pt">Subject<span style="letter-spacing:
				.7pt"> </span>to<span style="letter-spacing:.7pt"> </span>Haryana<span style="letter-spacing:.7pt"> </span>Jurisdiction<span style="letter-spacing:
				.7pt"> </span>Only.</span>
		  </p>
		  <p class="TableParagraph" style="margin-top:.8pt;margin-right:0in;margin-bottom:
			 0in;margin-left:16.5pt;margin-bottom:.0001pt;text-indent:-13.7pt"><span style="font-size:8.0pt">5.<span style="font:7.0pt Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;
			 </span></span><span style="font-size:8.0pt">Cheque<span style="letter-spacing:
				.55pt"> </span>bouncing<span style="letter-spacing:.6pt"> </span>/<span style="letter-spacing:.6pt"> </span>return<span style="letter-spacing:.55pt">
			 </span>will<span style="letter-spacing:.6pt"> </span>any<span style="letter-spacing:.6pt"> </span>reason<span style="letter-spacing:.55pt">
			 </span>charges<span style="letter-spacing:.6pt"> </span>Rs.<span style="letter-spacing:.6pt"> </span>500/-.</span>
		  </p>
	   </td>
	   <td width="507" colspan="18" valign="top" style="width:380.55pt;border-top:none;
		  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
		  padding:0in 0in 0in 0in;height:42.75pt">
		  <p class="TableParagraph" align="right" style="margin-top:1.35pt;margin-right:
			 11.85pt;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:
			 right"><b><span style="font-size:8.0pt;font-family:Arial,sans-serif">for<span style="letter-spacing:.4pt"> </span>OWO<span style="letter-spacing:.45pt"> </span>Technologies<span style="letter-spacing:.45pt"> </span>Pvt.<span style="letter-spacing:.45pt"> </span>Ltd.</span></b></p>
		  <p class="TableParagraph"><span style="font-size:9.0pt;font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" style="margin-top:.5pt"><span style="font-size:9.5pt;
			 font-family:Times New Roman,serif">&nbsp;</span></p>
		  <p class="TableParagraph" align="right" style="margin-top:.05pt;margin-right:
			 5.05pt;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:
			 right"><span style="font-size:8.0pt">Authorised<span style="letter-spacing:
			 .3pt"> </span>Signatory</span></p>
	   </td>
	   
	</tr>
  
 </tbody></table></body></html>