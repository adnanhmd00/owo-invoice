<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:10px }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		td{padding:1.8px;}
		td b{font-size:11px;}
		table{margin: auto;}
		@media print {
			.hidden-print {
				display: none !important;
			}
		}
	</style>
</head>
<body>
    {{-- <a class="hidden-print" href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a> --}}
	<div class="text-right">
		<button class="hidden-print" style="float: right; margin: 10px 20px;" onclick="window.print()">Print</button>
	</div>
	<table cellspacing="0" border="0">
	<tr>
		<td colspan=8 height="19" align="left" valign="top" ><br></td>
		<td colspan=6 align="center" valign="top"><b>Tax Invoice</b></td>
		<td colspan=7 align="right" valign="top" ><i><br></i></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >
			<b>OWO Technologies Pvt. Ltd.</b></td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; " colspan=4 align="left" valign="top" >Invoice No.</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" >Dated</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >1106 B4, 11 Floor, Spaze ITech Park</td>
		<td style=" border-left: 1px solid #333; " colspan=4 align="left" valign="top" ><b>{{ $items->invoice }}</b></td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b>{{ date("d-M-y", strtotime($items->order_date)) }}</b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >Sohna Road, Sector-49,</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; " colspan=4 align="left" valign="top" >Delivery Note</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" >Mode/Terms of Payment</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >Gurugram, Haryana</td>
		<td style=" border-left: 1px solid #333; " colspan=4 align="left" valign="top" ><b><br></b></td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >GSTIN 06AADCO1175C1ZV</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333;" colspan=4 align="left" valign="top" >Reference No. &amp; Date.</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" >Other References</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >FSSAI No--10020064002474</td>
		<td style=" border-left: 1px solid #333; " colspan=4 align="left" valign="top" ><b>{{ $items->invoice }}  dt. {{ date("d-M-y", strtotime($items->order_date)) }}</b></td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >GSTIN/UIN: 06AADCO1175C1ZV</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" >Buyer's Order No.</td>
		<td style="border-top: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" >Dated</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >State Name :  Haryana, Code : 06</td>
		<td style="border-bottom: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" ><b><br></b></td>
		<td style="border-bottom: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >E-Mail : anil.kumar@owo.in</td>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" >Dispatch Doc No.</td>
		<td style=" border-right: 1px solid #333" colspan=7 align="left" valign="top" >Delivery Note Date</td>
		</tr>
	<tr>
		<td style=" border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >Consignee (Ship to)</td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" ><b>{{ $items->invoice }}</b></td>
		<td style=" border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" ><b>{{ $items->first_name_shipping }} {{ $items->last_name_shipping }}</b></td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" >Dispatched through</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" colspan=7 align="left" valign="top" >Destination</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >{{ Str::title($items->address_1_2_shipping) }}</td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" ><b><br></b></td>
		<td style="border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan=6 height="19" align="left" valign="top" >GSTIN/UIN:</td>
		<td colspan=4 align="right" valign="top" >06HNYPS7426E1Z7</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" >Vessel/Flight No.</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" colspan=7 align="left" valign="top" >Place of receipt by shipper:</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="6" height="19" align="left" valign="top" >State Name :</td>
		<td colspan=4 align="right" valign="top" >Haryana, Code : 06</td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan="4" align="left" valign="top" ><b><br></b></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan=4 height="19" align="left" valign="top" >Contact:</td>
		<td colspan="6" align="right" valign="top" >{{ $items->phone_billing }}</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan="4" align="left" valign="top" >City/Port of Loading</td>
		<td style=" border-right: 1px solid #333" colspan="7" align="left" valign="top" >City/Port of Discharge</td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" >Buyer (Bill to)</td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=4 align="left" valign="top" ><b><br></b></td>
		<td style="border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="10" height="19" align="left" valign="top" ><b>{{ $items->first_name_billing }} {{ $items->last_name_billing }}</b></td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" colspan=11 align="left" valign="top" >Terms of Delivery</td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333; border-bottom: 1px solid #333" colspan="10" height="19" align="left" valign="top" >{{ Str::title($items->address_1_2_billing) }}</td>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333; border-bottom: 1px solid #333" colspan=11 align="left" valign="top" ><b>Dec Month Billing</b></td>
		</tr>
	<tr>
		<td style="border: 1px solid #333; border-top: 0px" colspan="8" height="19" align="left" valign="top" >GSTIN/UIN:</td>
		<td colspan="12" align="left" valign="top" style="border-right: 1px solid #333; border-bottom: 1px solid #333" >06HNYPS7426E1Z7</td>
	</tr>
	<tr>
		<td style="border: 1px solid #333; border-top: 0px" colspan="8" height="19" align="left" valign="top" >State Name :</td>
		<td colspan="12" align="left" valign="top" style="border: 1px solid #333; border-left: 0px; border-top:0px ;">Haryana, Code : 06</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" colspan="8" height="19" align="left" valign="top" >Place of Supply :</td>
		<td colspan="12" align="left" valign="top" style="border-right: 1px solid #333" >Haryana</td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #333; border-left: 1px solid #333" colspan="8" height="19" align="left" valign="top" >Contact:</td>
		<td style="border-right: 1px solid #333" colspan="12" align="left" valign="top" >{{ $items->phone_billing }}</td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" >Sl</td>
		<td style="border-top: 1px solid #333; border-right: 1px solid #333 width: 50px;" colspan=7 align="center" valign="top" >Description of Goods</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >HSN/SAC</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Quantity</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Rate</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Rate</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >per</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Amount</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Taxable</td>
		<td style="border-top: 1px solid #333;   border-right: 1px solid #333" colspan=2 align="center" valign="top" >Central Tax</td>
		<td style="border-top: 1px solid #333;   border-right: 1px solid #333" colspan=2 align="center" valign="top" >State Tax</td>
		<td style="border-top: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Total</td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" >No.</td>
		<td style="border-bottom: 1px solid #333; border-right: 1px solid #333" colspan=7 align="center" valign="top" ><br></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >(Incl. of Tax)</td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-bottom: 1px solid #333;  border-right: 1px solid #333" align="center" valign="top" >Value</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Rate</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Amount</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Rate</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Amount</td>
		<td style="border-bottom: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Amount</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333;" height="19" align="right" valign="top" sdval="1" sdnum="1033;0;&quot;&quot;0">1</td>
		<td style=" border-left: 1px solid #333; border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b>{{ $items->item_name }}</b></td>
		<td style=" border-right: 1px solid #333" align="left" valign="top" >{{ $items->hsn }}</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="26" sdnum="1033;0;&quot;&quot;0&quot; Nos&quot;"><b>{{ $items->quantity }} Nos</b></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="1690" sdnum="1033;0;&quot;&quot;0.00">{{ $items->item_cost + ($items->item_cost * $items->gst)/100 }}</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="1609.52" sdnum="1033;0;&quot;&quot;0.00">{{ $items->item_cost }}</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top">Nos</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="41847.52" sdnum="1033;0;&quot;&quot;0.00"><b>{{ $items->item_cost * $items->quantity }}</b></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="41847.52" sdnum="1033;0;&quot;&quot;0.00">{{ $items->item_cost * $items->quantity }}</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" >{{ $items->gst/2 }}%</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst/2)/100 }}</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" >{{ $items->gst/2 }}%</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst/2)/100 }}</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="43939.9" sdnum="1033;0;&quot;&quot;0.00">{{ $items->order_total_amount }}</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" colspan=7 align="left" valign="top" ><b><br></b></td>
		<td style=" border-right: 1px solid #333" align="left" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><b><br></b></td>
		<td style=" border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
	</tr>
	@if($items->state_code_billing == 'HR')
	<tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="left" valign="top" ><i><br></i></td>
		<td style=" border-right: 1px solid #333" colspan=6 align="right" valign="top" ><b><i>Output CGST @ {{ $items->gst/2 }}% HR</i></b></td>
		<td style=" border-right: 1px solid #333" align="left" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="2.5" sdnum="1033;0;&quot;&quot;0.00">{{ $items->gst/2 }}</td>
		<td style=" border-right: 1px solid #333" align="left" valign="top" >%</td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00"><b>{{ ($items->item_cost * $items->gst/2)/100 }}</b></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style=" border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><i><br></i></td>
		<td style="border-right: 1px solid #333" colspan=6 align="right" valign="top" ><b><i>Output SGST @ {{ $items->gst/2 }}% HR</i></b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdval="2.5" sdnum="1033;0;&quot;&quot;0.00">{{ $items->gst/2 }}</td>
		<td style="border-right: 1px solid #333" align="left" valign="top" >%</td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00"><b>{{ ($items->item_cost * $items->gst/2)/100 }}</b></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
	</tr>
	@else
	<tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><i><br></i></td>
		<td style="border-right: 1px solid #333" colspan=6 align="right" valign="top" ><b><i>Output IGST @ {{ $items->gst }}% HR</i></b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdval="2.5" sdnum="1033;0;&quot;&quot;0.00">{{ $items->gst }}</td>
		<td style="border-right: 1px solid #333" align="left" valign="top" >%</td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00"><b>1046.19</b></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
	</tr>
	@endif
	{{-- <tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><i><br></i></td>
		<td style="border-right: 1px solid #333" colspan=6 align="right" valign="top" ><b><i>Short &amp; Excess</i></b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="left" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdval="0.1" sdnum="1033;0;&quot;&quot;0.00"><b>0.10</b></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
	</tr> --}}
	<tr>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333; border-right: 1px solid #333" height="19" align="left" valign="top" ><br></td>
		<td style="border-top: 1px solid #333;" colspan=7 align="right" valign="top" >Total</td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333" align="right" valign="top" sdval="26" sdnum="1033;0;&quot;&quot;0&quot; Nos&quot;">{{ $items->quantity }} Nos</td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333" align="center" valign="top" ><br></td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="left" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" sdval="43940" sdnum="1033;0;&quot;&#8377; &quot;0.00"><b> &#8377; {{ ($items->item_cost * $items->quantity) + ($items->item_cost * $items->gst)/100 }}</b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333;  border-left: 1px solid #333" align="right" valign="top" sdval="41847.52" sdnum="1033;0;&quot;&quot;0.00">{{ $items->item_cost * $items->quantity }}</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst/2)/100 }}</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><br></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst/2)/100 }}</td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" align="right" valign="top" sdnum="1033;0;&quot;&quot;0"><br></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" colspan=12 height="19" align="left" valign="top" >Amount Chargeable (in words)</td>
		<td colspan=7 align="left" valign="top" ><b>Indian Rupees {{ Str::title(NumConvert::word($items->order_total_amount)) }} Only</b></td>
		<td style="border-right: 1px solid #333" align="right" valign="top" >E. &amp; O.E</td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" colspan="13" height="19" align="center" valign="top" ><br></td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="center" valign="top" >Taxable</td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333" colspan=2 align="center" valign="top" >Central Tax</td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333" colspan=2 align="center" valign="top" >State Tax</td>
		<td style="border-top: 1px solid #333;  border-left: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Total</td>
		<td  style="border-bottom: 1px solid #333; border-right: 1px solid #333; border-top: 1px solid #333"></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="13" height="19" align="center" valign="top" ><br></td>
		<td style=" border-left: 1px solid #333" align="center" valign="top" >Value</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="center" valign="top" >Rate</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="center" valign="top" >Amount</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="center" valign="top" >Rate</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="center" valign="top" >Amount</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" align="center" valign="top" >Tax Amount</td>
		<td  style="border-bottom: 1px solid #333; border-right: 1px solid #333; "></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan=13 height="19" align="left" valign="top" ><br></td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" sdval="41847.52" sdnum="1033;0;&quot;&quot;0.00">{{ $items->item_cost * $items->quantity }}</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" >{{ $items->gst/2 }}%</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst/2)/100 }}</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" >{{ $items->gst/2 }}%</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" sdval="1046.19" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst/2)/100 }}</td>
		<td style="border-top: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" align="right" valign="top" sdval="2092.38" sdnum="1033;0;&quot;&quot;0.00">{{ ($items->item_cost * $items->gst)/100 }}</td>
		<td  style="border-bottom: 1px solid #333; border-right: 1px solid #333; "></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #333; border-left: 1px solid #333" colspan=13 height="19" align="right" valign="top" ><b>Total:</b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><b>{{ $items->item_cost * $items->quantity }}</b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><b><br></b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><b>{{ ($items->item_cost * $items->gst/2)/100 }}</b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><b><br></b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333" align="right" valign="top" ><b>{{ ($items->item_cost * $items->gst/2)/100 }}</b></td>
		<td style="border-top: 1px solid #333; border-bottom: 1px solid #333; border-left: 1px solid #333; border-right: 1px solid #333" align="right" valign="top" ><b>{{ ($items->item_cost * $items->gst)/100 }}</b></td>
		<td  style="border-bottom: 1px solid #333; border-right: 1px solid #333; "></td>
	</tr>
	<tr>
		<td style=" border-left: 1px solid #333" colspan="12" height="19" align="left" valign="top" >Tax Amount (in words)  :</td>
		<td style="border-right: 1px solid #333" colspan=8 align="left" valign="top" ><b>Indian Rupees {{ Str::title(NumConvert::word($items->order_total_tax_amount)) }} Only</b></td>
		</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="12" height="19" align="left" valign="top" ><i>Remarks:</i></td>
		<td align="left" valign="top" colspan="7">Company's Bank Details</td>
		<td style="border-right: 1px solid #333" align="left" valign="top"></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333" colspan="12" height="19" align="left" valign="top" >OWO/21-22/4641</td>
		<td align="left" valign="top" colspan="2">A/c Holder's Name:</td>
		<td align="left" valign="top" colspan="5"><b>OWO Technologies Pvt Ltd</b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top"></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #333; border-left: 1px solid #333" colspan="12" height="19" align="left" valign="top" >Declaration</td>
		<td align="left" valign="top" colspan="2">Bank Name:</td>
		<td align="left" valign="top" colspan="5"><b>ICICI Bank Ltd (343105000747)</b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top"></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #333; border-right: 1px solid #333" colspan="12" height="19" align="left" valign="top" rowspan="4" >
			1. Payment should done in Bank or maximum in 7 days.
			<br>2. Goods once sold will not be taken back or exchanged.
			<br>3. Interest @24% p.a. will be charged if the payment is not made in the stipulated time.
			<br>4. Subject to Haryana Jurisdiction Only.
			<br>5. Cheque bouncing / return will any reason charges Rs. 500/-.</td>
		<td align="left" valign="top" colspan="2">A/c No.:</td>
		<td align="left" valign="top" colspan="5"><b>343105000747</b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top"></td>
	</tr>
	<tr>
		<td align="left" valign="top" colspan="2" >Branch &amp; IFS Code:</td>
		<td align="left" valign="top" colspan="5"><b>Gurgaon, Haryana &amp; ICIC0003431</b></td>
		<td style="border-right: 1px solid #333" align="left" valign="top"></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-right: 1px solid #333" colspan="8" align="left" valign="top" ><b>for OWO Technologies Pvt. Ltd.</b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #333; border-right: 1px solid #333" colspan="12" align="center" valign="top" >Authorised Signatory</td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #333; " colspan="20" height="19" align="center" valign="top" >SUBJECT TO GURGAON, HARYANA JURISDICTION</td>
	</tr>
	<tr>
		<td colspan=19 height="19" align="center" valign="top" >This is a Computer Generated Invoice</td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>
</html>
