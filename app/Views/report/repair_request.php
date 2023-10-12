<!DOCTYPE html>  
<html lang="en">  

<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Equipment Repair Request</title>

    <style type="text/css">
        @page {
          margin-top: 1cm;
          margin-left: 0.4cm;
          margin-right: 0.4cm;
          margin-bottom: 1cm;
        }

        .table-machine-equipment td, .table-machine-equipment th {
          padding: 0.25rem 0.25rem;
          font-size: 7pt;
          vertical-align:middle;
        }

        .header-main { 
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .company-name {
            float: left;
            text-align: left;
            font-size: 12px;
        }

        .title-nota {
            clear:left;
            /* clear:right; */
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }
        
        .serial-iso {
            float:right;
            text-align: right;
            font-size: 12px;
        }

        .hello-table {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 0 !important;
        }
        .hello-table td, .hello-table th {
            border: 1px solid black;
            padding: 2px;
            font-size: 13px;
            text-align: left;
        }
        
	</style>
</head>  

<body>
    <div>
        <div class="header-main">
            <div class="company-name">
                PT. GHIMLI INDONESIA
            </div>
            <div class="serial-iso">
                <div>GLA-XX</div>
                <div>Rev X</div>
            </div>
            <div class="title-nota">
                EQUIPMENT REPAIR REQUEST
                <br>
                <div class="subtitle-nota"></div>
            </div>

        </div>

        <table width="100%">
            <tr>
                <td width="5%">EQUIPMENT NAME</td>
                <td width="1.5%">:</td>
                <td style="text-align: left;">COVERSEAM</td>
            </tr>
            <tr>
                <td width="11%">MODEL</td>
                <td width="1.5%">:</td>
                <td style="text-align: left;"></td>
            </tr>
            <tr>
                <td>MACHINE NO </td>
                <td width="1.5%">:</td>
                <td style="text-align: left;"></td>
            </tr>
        </table>

        <table width="100%" class="hello-table">
            <thead class="">
                
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3" colspan="2">MECHANIC RECORD</td>
                    <td rowspan="3" colspan="1">FREQUENCY</br>DAILY</td>
                    <td rowspan="1" colspan="1">YEARLY</td>
                </tr>
                <tr>
                    <td rowspan="1" colspan="1">MONTHLY</td>
                </tr>
                <tr>
                    <td rowspan="1" colspan="1">WEEKLY</td>
                </tr>
                <tr>
                    <td rowspan="2" colspan="1">CHECKING POINT</td>
                    <td colspan="2">Clean the lint on the feed dog</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td colspan="2">Check if there has enough liquid oil inside the oil pan</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>