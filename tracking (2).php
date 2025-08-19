<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel = "stylesheet" href="trackingCustoms.css" >
</head>


<body>


<div class="navbar">
<div class="navleft">
<div id="circleicon"></div>

<ul>
<li> HOME </li>
<li> ABOUT US </li>
<li> WHY SAS </li>
<li> CONTACT </li>
</ul>

</div>

<div id="rectanglead"></div>

 </div>
 
<header class = "website-header">
    <h1 id = "headerText">
       Save a <span class = "sparkColor">spark</span> today! 
    </h1>
    <p>Let's get you started!</p>

    <div class = "searchContainer">
         <input type="text" placeholder="Search..."class="searchInput">
  <button class="searchBtn">Search</button>
    </div>
</header>

<div class = "trackingTabs">
    <a href = "#electricity" class = " tab elecTab">Electricity</a>
    <a href = "#battery" class = "tab battTab">Battery</a>
    <a href = "#billing" class = "tab billTab">Billing</a>
</div>


<section id = "electricity">
    <h2 class = "elecHeader">Track your Electricity</h2>
    <div class = "applianceContainer">
    <p id = "applianceNameplaceholder">Living Room Fan</p>
    <p id = "applianceTimeplaceholder">03:36:09</p>

        <button class="applianceBtnON">ON</button>
    </div>


    <div class = "applianceContainer">
    <p id = "applianceNameplaceholder">Mama TV</p>
    <p id = "applianceTimeplaceholder">03:36:09</p>

    <button class="applianceBtnON">ON</button>
    </div>


    <div class = "applianceContainer">
    <input type = "text"placeholder = "Enter appliance name..." class = "applianceInput">
    <p id = "applianceTimeplaceholder">00:00:00</p>



    <button class="applianceBtnOFF">OFF</button>
    </div>

    <div class = "addAppliancePosition">
    <p id = "addAppTab">Add another tab</p>
    <button class = "addAppliance"> + </button>
    </div>

    <div class = "applianceIconContainer">
    <img class = "applianceIcon" src = "images/appliances.svg">
    <p id = "applianceTip">Add more appliances to your tracking list!</p>
    <p id = "applianceTipSubtext">Easily keep track of your household appliances in one place, <br>making for a happy, organized home.</p>
    </div>
    </section>

    <hr>


<section id = "battery">
        <h2 class = "elecHeader">Track your Battery</h2>
    <div class = "applianceContainer">
    <p id = "applianceNameplaceholder">Living Room Fan</p>
    <p id = "applianceTimeplaceholder">03:36:09</p>

        <button class="applianceBtnON">ON</button>
    </div>


    <div class = "applianceContainer">
    <p id = "applianceNameplaceholder">Mama TV</p>
    <p id = "applianceTimeplaceholder">03:36:09</p>

    <button class="applianceBtnON">ON</button>
    </div>


    <div class = "applianceContainer">
    <input type = "text"placeholder = "Enter appliance name..." class = "applianceInput">
    <p id = "applianceTimeplaceholder">00:00:00</p>


    <button class="applianceBtnOFF">OFF</button>
    </div>

    <div class = "addAppliancePosition">
    <p id = "addAppTab">Add another tab</p>
    <button class = "addAppliance"> + </button>
    </div>

    <div class = "applianceIconContainer">
    <img class = "batteryIcon" src = "images/battery.svg">
    <p id = "batteryTip">Keep all your batteries in check!<p>
    <p id = "batteryTipSubtext">Easily monitor battery levels across all your devices, <br>ensuring a fully powered and worry-free home.</p>
    </div>

    </section>  
    
    
    <hr>



<section id = "billing">
        <h2 class = "billingHeader">Check your Bills</h2>
        <div class = "billcontainerPosition">

<!--PREVIOUSBILLCONTAINER-->
<!--PREVIOUSBILLCONTAINER-->
<!--PREVIOUSBILLCONTAINER-->
        <div class = "billingContainer">
            <div class = "blueHeaderSAS">
                <h2 id = "SaveASparkHeader">Save-A-Spark</h2>
                <p id = "prevBill">Estimate Bill</p>
            </div><!--end of blue Header contents-->

            <div class = "wattbattPosition">
                <div class = "wattsConsumed">
                    <p id = "totalConsumed">Total Watts Consumed</p>
                    <p id = "totalValue"><span id = "value">150</span> kwh</p>
                </div>
                <div class = "batteryConsumed">
                    <p id = "totalConsumed">Total Battery Consumed</p>
                    <p id = "totalValue"><span id = "value">85</span> wh</p>
                </div>
            </div><!--wattbattPosition-->


            <div class = "usagehoursPosition">
            <div class = "dailyUsage">
                    <p id = "totalConsumed">Estimated Daily Usage</p>
                    <p id = "totalValue"><span id = "value">15</span> kwh</p>
            </div>
            <div class = "consumptionHours">
                    <p id = "totalConsumed">Total Consumption Hours</p>
                    <p id = "totalValue"><span id = "value">465</span> hrs</p>
            </div>
            </div><!--usagehoursPosition-->

            <div class = "totalbillPosition">
            <div class = "TotalBillContainer">
                <p id = "TotalBill">Total Bill: </p>
            </div>
              <div class = "TotalBillValue">
                    <p id = "BillValue">₱ <span class = "billCost">5,171.00</span></p>
                </div>

            </div><!--totalbillPosition-->

        </div><!--end of billingContainer contents-->


<!--CURRENTBILLCONTAINER-->
<!--CURRENTBILLCONTAINER-->
<!--CURRENTBILLCONTAINER-->
        <div class = "billingContainer">
                        <div class = "blueHeaderSAS">
                <h2 id = "SaveASparkHeader">Save-A-Spark</h2>
                <p id = "prevBill">Estimate Bill</p>
            </div><!--end of blue Header contents-->

            <div class = "wattbattPosition">
                <div class = "wattsConsumed">
                    <p id = "totalConsumed">Total Watts Consumed</p>
                    <p id = "totalValue"><span id = "NAvalue">—</span> kwh</p>
                </div>
                <div class = "batteryConsumed">
                    <p id = "totalConsumed">Total Battery Consumed</p>
                    <p id = "totalValue"><span id = "NAvalue">—</span> wh</p>
                </div>
            </div><!--wattbattPosition-->


            <div class = "usagehoursPosition">
            <div class = "dailyUsage">
                    <p id = "totalConsumed">Estimated Daily Usage</p>
                    <p id = "totalValue"><span id = "NAvalue">—</span> kwh</p>
            </div>
            <div class = "consumptionHours">
                    <p id = "totalConsumed">Total Consumption Hours</p>
                    <p id = "totalValue"><span id = "NAvalue">—</span> hrs</p>
            </div>
            </div><!--usagehoursPosition-->

            <div class = "totalbillPosition">
            <div class = "TotalBillContainer">
                <p id = "TotalBill">Total Bill: </p>
            </div>
              <div class = "TotalBillValue">
                    <p id = "BillValue">₱ <span class = "billCost">—</span></p>
                </div>
            </div><!--totalbillPosition-->
        </div><!--endofbillcontainer-->

    </div><!--billContainerPosition-->

            <div class = "billLabelPosition">
            <p class = "billLabels">Previous Bill</p>
            <p class = "billLabels">Current Bill</p>
            </div>
            <div class = "generatePosition">
            <p class = "generate">Generated: 7/12</p>
            <p class = "generate">Generated: N/A</p>
            </div>

            <div class = "billButtonsPosition">
                <button class = "generateBill"><p class = "billbutton">Generate Bill</p></button>
                <button class = "printBill"><p class = "billbutton">Print Bill</p></button>
                </div>
    </section>

</body>

</html>