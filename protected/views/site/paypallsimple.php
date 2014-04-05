<?php
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url = dirname('http://' . $serverName . ':' . $serverPort . $_SERVER['REQUEST_URI']);
$returnUrl = $url . "/../WebflowReturnPage.php";
$cancelUrl = $url . "/SimplePay.php";
?>


<div id="wrapper">
    <img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
    <div id="header">
        <h3>Pay</h3>
        <div id="apidetails">The Pay API operation is used to transfer
            funds from a sender's PayPal account to one or more receivers'
            PayPal accounts. </div>
    </div>
    <div id="request_form">
        <form action="<?php echo $this->createUrl("/site/payPallSimpleDo"); ?>" method="post">
            <div class="params">
                <div class="param_name">Action type *</div>
                <div class="param_value">
                    <input name="actionType" id="actionType" value="PAY" readonly="readonly"/>
                </div>
            </div>
            <div class="params">
                <div class="param_name">Return Url</div>
                <div class="param_value">
                    <input name="returnUrl" id="returnUrl" value="<?php echo $returnUrl; ?>" />
                </div>
            </div>	
            <div class="params">
                <div class="param_name">Cancel Url *</div>
                <div class="param_value">
                    <input name="cancelUrl" id="cancelUrl" value="<?php echo $cancelUrl; ?>" />
                </div>
            </div>
            <div class="params">
                <div class="param_name">Currency code *</div>
                <div class="param_value">
                    <input name="currencyCode" value="USD" />
                </div>
            </div>

            <div class="section_header">Receiver info</div>
            <table class="params" id="receiverTable">
                <tr>
                    <th>Email *</th>
                    <th>Amount *</th>
                </tr>
                <tr id="receiverTable_0">

                    <td>
                        <input type="text" name="receiverEmail[]" id="receiveremail_0" value="itsgeniusstar_test@gmail.com">
                    </td>
                    <td>
                        <input type="text" name="receiverAmount[]" id="amount_0" value="1.0" class="smallfield">
                    </td>

                </tr>
            </table>


            <div class="submit">
                <input type="submit" name = "submitBtn" value="Submit" />
            </div>
        </form>
    </div>
    <a href="../index.php">Home</a>
</div>

