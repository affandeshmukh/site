
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
* {
  box-sizing: border-box;
}

.gridwrapper {
  overflow: auto;
  position: relative;
  height: 250px;
}

.gridcontent {
  width: 8.33%;
  margin: 0;
  border-right: 1px solid grey;
  height: 100%;
  float: left;
  background-color: #84c754;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<div style="position:absolute;opacity:0.9;width:auto;left:8px;right:10px;">
  <div>
    <div class="gridwrapper" style="height:90px;">
      <div class="gridcontent" style="width:100%;background:#9933cc;border-right-color:transparent;">
      </div>
    </div>
    <div class="gridwrapper" style="height:230px;">
      <div class="gridcontent" style="background-color:#ffffff;border:none;width:25%;padding-top:15px;">
        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;margin-bottom:10px;"></div>
        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;margin-bottom:10px;"></div>
        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;margin-bottom:10px;"></div>
        <div style="background-color:#33b5e5;border:none;width:100%;height:15%;"></div>
      </div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;"></div>
      <div class="gridcontent" style="background-color:#ffffff;border:none;width:25%;padding-top:15px;">
        <div style="background-color:#33b5e5;border:none;width:100%;height:92%;"></div>
      </div>
    </div>
    <div class="gridwrapper" style="height:50px;">
      <div class="gridcontent" style="width:100%;background:#0099cc;border-right-color:transparent;">
      </div>
    </div>
  </div>
</div>

<div style="opacity:0.1;">
  <div class="gridwrapper" style="height:370px;">
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;border-left:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
    <div class="gridcontent" style="background-color:#ffffff;border-right:1px solid #000000;"></div>
  </div>
</div>

<p>Resize the browser window to see that this grid will respond to the resizing, and always use 100% of the available space.</p>

</body>
</html>

