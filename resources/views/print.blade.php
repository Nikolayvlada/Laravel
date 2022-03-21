<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<head><title>
	Bill Online Print
</title>
    <script type="text/javascript" src="{{ asset('/js/jquery-1.2.6.min.js') }}"></script>
    <style>
        body {
            font-family: 'Times New Roman';
            font-size: 9pt;
            background: #fff;
        }

        .qrcode {
            display: none;
        }

        .fomr-row {
            clear: both;
        }

        .fomr-1 {
            float: left;
            width: 505px;
            position: relative;
            margin-top: 45px;
            margin-left: 25px;
        }

        .fomr-1-right {
            float: left;
            width: 505px;
            position: relative;
            margin-top: 45px;
            margin-left: 25px;
        }

        .b-header {
            position: relative;
        }

            .b-header img {
                width: 280px;
            }

        .view {
            display: inherit;
			padding: 5px;
			width: 250px!important;
			height: 50px!important;
        }

        .print {
            display: none;
        }

        .h-right {
            position: absolute;
            width: 150px;
            top: 10px;
            left: 300px;
            font-size: 26px;
            font-weight: normal;
            text-align: center;
        }

        .h-right-2 {
            position: absolute;
            width: 50px;
            top: 10px;
            right: 1px;
            font-size: 20px;
            font-weight: normal;
            text-align: center;
            border: 1px solid #000;
        }

        .hidden {
            display: none;
        }

        .h-right-2 span {
            font-size: 12px;
        }

        .barcode {
            font-family: 'Free 3 of 9';
            font-size: 25px;
        }

        .tbl-bill-1 {
            border: 2px solid #000000;
        }

            .tbl-bill-1 td {
                padding: 2px 10px;
            }

        .b-title-2 {
            background: #92D050;
            border-top: 1px solid #000;
            font-weight: bold;
            text-align: center;
            font-size: 15pt;
            border-right: 1px solid #000;
            width: 50%;
            font-style: italic;
        }

        .b-ct-2 {
            border-top: 1px solid #000;
            font-weight: bold;
            text-align: center;
            font-size: 46pt;
            border-right: 1px solid #000;
            padding: 9px !important;
        }

        .b-title {
            background: #e96e11;
            border-top: 1px solid #000;
            font-weight: bold;
        }

        .b-ct {
            border-bottom: 1px dotted #000;
            font-weight: bold;
        }

        .noneB {
            border-bottom: none !important;
        }

        .solidB {
            border-bottom: 1px solid #000;
            padding: 7px 10px !important;
        }

        .b-des {
            text-align: right;
        }

        .tbl-child {
            border-top: 1px solid #000;
            border-right: 1px solid #000;
        }

            .tbl-child td {
                border-bottom: 1px solid #000;
                border-left: 1px solid #000;
                text-align: center;
                font-weight: bold;
            }

        .des2 {
            font-size: 20pt;
            height: 47px;
            line-height: 45pt;
        }

        .dot-B {
            border-bottom: 1px dotted #000;
            display: block;
            height: 2px;
            padding: 8px;
            line-height: 0pt;
        }

        .pcs_dim {
            height: 74px;
            width: 280px;
            overflow: hidden;
            text-align: left;
        }

        .dot-C {
            border-bottom: 1px dotted #000;
            padding: 0px;
            width: calc(50% - 7px);
            display: inline-block;
            line-height: 8pt;
            font-size: 8pt;
            font-weight: normal;
            padding-left: 5px;
            min-height: 12.6px;
        }

        .sign {
            text-align: left !important;
            font-weight: normal !important;
        }

        .b-date {
            margin-top: 40px;
            font-size: 8pt !important;
        }


        .bottom-bar {
            text-align: left;
            padding: 15px;
            font-size: 15px;
            position: relative;
            min-height: 60px;
        }

            .bottom-bar .lien {
                font-size: 11px;
            }

        .bb-right {
            position: absolute;
            right: 10px;
            width: 160px;
            top: 10px;
            text-align: center;
        }

        .bottom-bar .barcode {
            font-size: 40px;
        }

        .note {
            font-size: 11px;
        }

        .btnPrint {
            display: block;
            padding: 10px 15px;
            background: #feb300;
            border-radius: 5px;
            border: none;
            color: #fff;
            position: fixed;
            right: 30px;
            top: 260px;
            text-decoration: none;
            text-transform: uppercase;
            z-index: 9000;
        }

        .fix-img {
            max-height: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        @media print {
            @page {
                size: A4 landscape; /* DIN A4 standard, Europe */
                margin: 0;
            }

            html, body {
                /* width: 210mm;
                
                height: 282mm;*/
                font-size: 11px;
                background: #FFF;
                overflow: visible;
                margin: 0;
                padding: 0;
                padding-left: 2mm;
                -webkit-print-color-adjust: exact;
            }

            .notebk, .fomr-row {
                page-break-after: always;
            }

            .view {
                display: none;
            }

            .print {
                display: inherit;
            }

            .b-title {
            }
        }
    </style>
</head>
<body>
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTczNzk4Nzg2OQ9kFgQCAw9kFgQCAQ8WAh4LXyFJdGVtQ291bnQCARYCZg9kFgJmDxUgBzUxOTYwMDMHNTE5NjAwMwc1MTk2MDAzAAAGaGlkZGVuD1dJTkdPIExPR0lTVElDU042MS8zMSBCw6xuaCBHacOjLCBQaMaw4budbmcgMTMsIFF14bqtbiBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgIVmlldCBOYW0ACkRvIFZhbiBUaHUKMDk2NDY1OTcwMAATTGUgSG9haSBNaW5oCQkJCQkJCRxMR0lQTSwgVW5pdmVyc2l0eSBvZiBMb3JhaW5lBTMgUnVlAA9BdWd1c3RpbiBGcmVuZWwABkZyYW5jZQATTGUgSG9haSBNaW5oCQkJCQkJCRUwNiAzNCAzNiA5MiAyMQkJCQkJCQkADGRvY3VtZW50LCBjZAUxNi4wMAExAzEuMAMwLjUKMTEvMTIvMjAyMQc1MTk2MDAzBzUxOTYwMDNkAgMPFgIfAAIBFgJmD2QWAmYPFRQaMjAyMV8xMF8yN18xNV8xNl8xMV83NS5wbmcaMjAyMV8xMF8yN18xNV8xNl8xMV83NS5wbmcHNTE5NjAwMwc1MTk2MDAzBzUxOTYwMDMCRlIBMQ9XSU5HTyBMT0dJU1RJQ1MKRG8gVmFuIFRodRNMZSBIb2FpIE1pbmgJCQkJCQkJHExHSVBNLCBVbml2ZXJzaXR5IG9mIExvcmFpbmUFMyBSdWUAD0F1Z3VzdGluIEZyZW5lbAAGRnJhbmNlABNMZSBIb2FpIE1pbmgJCQkJCQkJBzUxOTYwMDMHNTE5NjAwM2QCBQ8WAh8AAgEWAmYPZBYCZg8VBwRzaG93ATECNDABNQE1AzAuNQRoaWRlZGS8OZlEdgTQKtOhEX8BA7c9gjzZRPPabb7WOUTAL0/QMg==">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="05A6DF8E">
</div>
        <a id="btn_sent" class="btnPrint view" href="" onclick="window.print(); return false;">Print</a>
        <div class="fomr-row">
            
                    <div class="fomr-1" id="form1">
                        <table class="tbl-bill-1" width="100%" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td colspan="4" class="b-header">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Dhl-logo.svg/2560px-Dhl-logo.svg.png" class="view" alt="logo">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Dhl-logo.svg/2560px-Dhl-logo.svg.png" class="print" alt="logo">

                                    <div class="qrcode" rel="5196003"></div>

                                    <div class="h-right">
										<div class="barcode">Image barcode</div>
                                        <div style="font-size: 17pt;">5196003</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="b-title"><i>1. (Sender's information)</i>:
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Company)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
								
							<tr>
                                <td class="b-des"> <i>(Contact name)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
							<tr>
                                <td class="b-des"><i>(Phone number)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>	
                            <tr>
                                <td class="b-des"><i>(Address 1)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
								<tr>
                                <td class="b-des"><i>(Address 2)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px"><i>(Country)</i>:</td>
                                <td class="b-ct" width="120px"></td>
                                <td class="b-des" width="80px">Postal code:</td>
                                <td class="b-ct"></td>
                            </tr>
							<tr>
                                <td class="b-des" width="150px"><i>(City)</i>:</td>
                                <td class="b-ct" width="120px"></td>
                                <td class="b-des" width="80px">(State):</td>
								<td class="b-ct"></td>
                            </tr>	
                            <tr>
                                <td colspan="4" class="b-title">2. (Consignee's information):
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Company)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Address 1)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Address 2)</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px">(City):</td>
                                <td class="b-ct" width="120px">&nbsp;</td>
                                <td class="b-des" width="80px">(State):</td>
                                <td class="b-ct"></td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px"><b><i>(Country)</i>:</b></td>
                                <td class="b-ct" width="120px">&nbsp;</td>
                                <td class="b-des" width="80px">Postal code:</td>
                                <td class="b-ct"></td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Contact name)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="b-des">(Tel):</td>
                                <td class="b-ct" colspan="3">&nbsp; </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="b-title">3. <i> (Shipment information)</i>:
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des solidB"> (Content):</td>
                                <td class="b-ct solidB" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="b-des solidB"> (value invoice):</td>
                                <td class="b-ct solidB" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="solidB" colspan="4"></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="padding: 0px !important">
                                    <table width="100%" cellpadding="0" cellspacing="0" class="tbl-child">
                                        <tbody><tr>
                                            <td>PKG<br>
                                                <i>(PCS)</i>
                                                <div class="des2 No_of_pkgs">
                                                    1
                                                </div>
                                            </td>
                                            <td>TT W.W<br>
                                                <i>(G.W)</i>
                                                <div class="des2">
                                                    1.0
                                                </div>
                                            </td>
                                            <td>TT C.W<br>
                                                <i>(C.W)</i>
                                                <div class="des2">
                                                    0.5
                                                </div>
                                            </td>
                                            <td style="padding: 0;">
                                                <div class="dot-B"> (Dimensions)</div>
                                                <div class="pcs_dim">
            
                    <div class="dot-C">
                        <span class="show">
                            1*(40*5*5)=<b>0.5</b>
                        </span>
                        
                    </div>
                
        <div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="sign">
                                                <div class="sign1"><i>(Sender's Signature)</i>
                                                </div>
                                                <div class="b-date"><i>(Date /time)</i>: <span class="create_date"></span>	</div>

                                            </td>
                                            <td class="sign">
                                                <div class="sign2">
                                                    <i>(Picked up by)</i>
                                                </div>
                                                <div class="b-date"><i>(Date /time)</i>:	</div>

                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                        <div class="bottom-bar">
                            <span class="lien">
                                <div>
                                 <i>(Slip 1: Saved By Shipper)</i>
                                </div>
                            </span>
                        </div>
                        <div class="note"></div>
                    </div>
                
            <div class="fomr-1-right" id="form-dieukhoan">
			<div class="card card-bordered">
                                            <div class="card-inner card-inner-xl">
                                                <div class="entry">
                                                    <h3>Terms and Conditions</h3>
                                                    <p>We’ve decided to make these Terms available under a <strong>Creative Commons</strong> license. You can grab a copy of these Terms and other legal documents on Github. You’re more than welcome to copy them, adapt them, and repurpose them for your own use.</p>
                                                    <h4>Introduction</h4>
                                                    <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com.</p>
                                                    <p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
                                                    <p>Minors or people below 18 years old are not allowed to use this Website.</p>
                                                    <h4>Intellectual Property Rights</h4>
                                                    <p>Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>
                                                    <p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>
                                                    <h4>Restrictions</h4>
                                                    <p>You are specifically restricted from all of the following:</p>
                                                    <ul class="list list-sm list-checked">
                                                        <li>Publishing any Website material in any other media;</li>
                                                        <li>Selling, sublicensing and/or otherwise commercializing any Website material;</li>
                                                        <li>Publicly performing and/or showing any Website material;</li>
                                                        <li>Using this Website in any way that is or may be damaging to this Website;</li>
                                                        <li>Using this Website in any way that impacts user access to this Website;</li>
                                                        <li>Using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
                                                        <li>Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
                                                        <li>Using this Website to engage in any advertising or marketing.</li>
                                                        <li>Certain areas of this Website are restricted from being access by you and Company Name may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</li>
                                            </div><!-- .card-inner -->
                                        </div>	
            </div>
            <div class="notebk"></div>
        </div>
        <div class="notebk"></div>

        <div class="fomr-row">
            <div class="fomr-1" id="form1">
                        <table class="tbl-bill-1" width="100%" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td colspan="4" class="b-header">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Dhl-logo.svg/2560px-Dhl-logo.svg.png" class="view" alt="logo">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Dhl-logo.svg/2560px-Dhl-logo.svg.png" class="print" alt="logo">

                                    <div class="qrcode" rel="5196003"></div>

                                    <div class="h-right">
										<div class="barcode">Image barcode</div>
                                        <div style="font-size: 17pt;">5196003</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="b-title"><i>1. (Sender's information)</i>:
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Company)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
								
							<tr>
                                <td class="b-des"> <i>(Contact name)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
							<tr>
                                <td class="b-des"><i>(Phone number)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>	
                            <tr>
                                <td class="b-des"><i>(Address 1)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
								<tr>
                                <td class="b-des"><i>(Address 2)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px"><i>(Country)</i>:</td>
                                <td class="b-ct" width="120px"></td>
                                <td class="b-des" width="80px">Postal code:</td>
                                <td class="b-ct"></td>
                            </tr>
							<tr>
                                <td class="b-des" width="150px"><i>(City)</i>:</td>
                                <td class="b-ct" width="120px"></td>
                                <td class="b-des" width="80px">(State):</td>
								<td class="b-ct"></td>
                            </tr>	
                            <tr>
                                <td colspan="4" class="b-title">2. (Consignee's information):
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Company)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Address 1)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Address 2)</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px">(City):</td>
                                <td class="b-ct" width="120px">&nbsp;</td>
                                <td class="b-des" width="80px">(State):</td>
                                <td class="b-ct"></td>
                            </tr>

                            <tr>
                                <td class="b-des" width="150px"><b><i>(Country)</i>:</b></td>
                                <td class="b-ct" width="120px">&nbsp;</td>
                                <td class="b-des" width="80px">Postal code:</td>
                                <td class="b-ct"></td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Contact name)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="b-des">(Tel):</td>
                                <td class="b-ct" colspan="3">&nbsp; </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="b-title">3. <i> (Shipment information)</i>:
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des solidB"> (Content):</td>
                                <td class="b-ct solidB" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="b-des solidB"> (value invoice):</td>
                                <td class="b-ct solidB" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="solidB" colspan="4"></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="padding: 0px !important">
                                    <table width="100%" cellpadding="0" cellspacing="0" class="tbl-child">
                                        <tbody><tr>
                                            <td>PKG<br>
                                                <i>(PCS)</i>
                                                <div class="des2 No_of_pkgs">
                                                    1
                                                </div>
                                            </td>
                                            <td>TT W.W<br>
                                                <i>(G.W)</i>
                                                <div class="des2">
                                                    1.0
                                                </div>
                                            </td>
                                            <td>TT C.W<br>
                                                <i>(C.W)</i>
                                                <div class="des2">
                                                    0.5
                                                </div>
                                            </td>
                                            <td style="padding: 0;">
                                                <div class="dot-B"> (Dimensions)</div>
                                                <div class="pcs_dim">
            
                    <div class="dot-C">
                        <span class="show">
                            1*(40*5*5)=<b>0.5</b>
                        </span>
                        
                    </div>
                
        <div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="sign">
                                                <div class="sign1"><i>(Sender's Signature)</i>
                                                </div>
                                                <div class="b-date"><i>(Date /time)</i>: <span class="create_date"></span>	</div>

                                            </td>
                                            <td class="sign">
                                                <div class="sign2">
                                                    <i>(Picked up by)</i>
                                                </div>
                                                <div class="b-date"><i>(Date /time)</i>:	</div>

                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                        <div class="bottom-bar">
                            <span class="lien">
                                <div>
                                 <i>(Slip 1: Saved By Shipper)</i>
                                </div>
                            </span>
                        </div>
                        <div class="note"></div>
                    </div>
            <div class="fomr-1" id="form1">
                        <table class="tbl-bill-1" width="100%" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td colspan="4" class="b-header">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Dhl-logo.svg/2560px-Dhl-logo.svg.png" class="view" alt="logo">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Dhl-logo.svg/2560px-Dhl-logo.svg.png" class="print" alt="logo">

                                    <div class="qrcode" rel="5196003"></div>

                                    <div class="h-right">
										<div class="barcode">Image barcode</div>
                                        <div style="font-size: 17pt;">5196003</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="b-title"><i>1. (Sender's information)</i>:
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Company)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
								
							<tr>
                                <td class="b-des"> <i>(Contact name)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
							<tr>
                                <td class="b-des"><i>(Phone number)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>	
                            <tr>
                                <td class="b-des"><i>(Address 1)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
								<tr>
                                <td class="b-des"><i>(Address 2)</i>:</td>
                                <td class="b-ct" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px"><i>(Country)</i>:</td>
                                <td class="b-ct" width="120px"></td>
                                <td class="b-des" width="80px">Postal code:</td>
                                <td class="b-ct"></td>
                            </tr>
							<tr>
                                <td class="b-des" width="150px"><i>(City)</i>:</td>
                                <td class="b-ct" width="120px"></td>
                                <td class="b-des" width="80px">(State):</td>
								<td class="b-ct"></td>
                            </tr>	
                            <tr>
                                <td colspan="4" class="b-title">2. (Consignee's information):
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Company)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Address 1)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Address 2)</td>
                                <td class="b-ct" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="b-des" width="150px">(City):</td>
                                <td class="b-ct" width="120px">&nbsp;</td>
                                <td class="b-des" width="80px">(State):</td>
                                <td class="b-ct"></td>
                            </tr>

                            <tr>
                                <td class="b-des" width="150px"><b><i>(Country)</i>:</b></td>
                                <td class="b-ct" width="120px">&nbsp;</td>
                                <td class="b-des" width="80px">Postal code:</td>
                                <td class="b-ct"></td>
                            </tr>
                            <tr>
                                <td class="b-des"><i>(Contact name)</i>:</td>
                                <td class="b-ct" colspan="3">&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="b-des">(Tel):</td>
                                <td class="b-ct" colspan="3">&nbsp; </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="b-title">3. <i> (Shipment information)</i>:
                                </td>
                            </tr>
                            <tr>
                                <td class="b-des solidB"> (Content):</td>
                                <td class="b-ct solidB" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="b-des solidB"> (value invoice):</td>
                                <td class="b-ct solidB" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="solidB" colspan="4"></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="padding: 0px !important">
                                    <table width="100%" cellpadding="0" cellspacing="0" class="tbl-child">
                                        <tbody><tr>
                                            <td>PKG<br>
                                                <i>(PCS)</i>
                                                <div class="des2 No_of_pkgs">
                                                    1
                                                </div>
                                            </td>
                                            <td>TT W.W<br>
                                                <i>(G.W)</i>
                                                <div class="des2">
                                                    1.0
                                                </div>
                                            </td>
                                            <td>TT C.W<br>
                                                <i>(C.W)</i>
                                                <div class="des2">
                                                    0.5
                                                </div>
                                            </td>
                                            <td style="padding: 0;">
                                                <div class="dot-B"> (Dimensions)</div>
                                                <div class="pcs_dim">
            
                    <div class="dot-C">
                        <span class="show">
                            1*(40*5*5)=<b>0.5</b>
                        </span>
                        
                    </div>
                
        <div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div><div class="dot-C">&nbsp;</div></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="sign">
                                                <div class="sign1"><i>(Sender's Signature)</i>
                                                </div>
                                                <div class="b-date"><i>(Date /time)</i>: <span class="create_date"></span>	</div>

                                            </td>
                                            <td class="sign">
                                                <div class="sign2">
                                                    <i>(Picked up by)</i>
                                                </div>
                                                <div class="b-date"><i>(Date /time)</i>:	</div>

                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                        <div class="bottom-bar">
                            <span class="lien">
                                <div>
                                 <i>(Slip 1: Saved By Shipper)</i>
                                </div>
                            </span>
                        </div>
                        <div class="note"></div>
                    </div>
            <div class="notebk"></div>
        </div>
</body>
</html>
