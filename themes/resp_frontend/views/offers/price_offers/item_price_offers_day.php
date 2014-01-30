<p id="price_offer" class="font18 fontArial" style="margin-top: 70px;">
    <input id="price-offer" type="checkbox" style="width:20px; height: 20px;" value="1" name="priceOption">
    I want to offer additional prices per 
    <span id="period" class="font-red">Hour</span>
</p>
<div id="PriceOffer-2" class="col-lg-12 div50percent floatLeft PriceOffer">
    <div>
        <span class="col-lg-3" style="font-size: 15px;">
            <input class="optionType" type="radio" value="abs" name="hour">
            Absolute Rate:
        </span>
        <span class="col-lg-3" style="margin-bottom:80px; font-size: 15px;">
            <input class="optionType" type="radio" value="abs" name="hour">
            Breakdown Rate:
        </span>
        <span class="col-lg-6">
            <button class="k-button row-add" style="float:right">Add new Rate</button>
        </span>

    </div>
    <div class="clear"></div>
    <div class="header-row">
        <div class="col-lg-4">
            Time 
        </div>
        <div class="col-lg-2">
            Period
        </div>
        <div class="col-lg-3">
            Price
        </div>
        <div class="col-lg-3">

        </div>
    </div>
    <div class="clear"></div>
    <div id="price-row" style="display: block;">
        <div class="col-lg-4">
            Time 
        </div>
        <div class="col-lg-2">
            Period
        </div>
        <div class="col-lg-3">
            <input class="floatLeft fontstyleItalic price" type="text" placeholder="0000,00" style=" height: 36px; border-radius: 3px; " size="17" />
        </div>
        <div class="col-lg-3">
            <button class="k-button remove" style="float:right; clear: right; " type="button">Remove</button>
        </div>
    </div>
</div>