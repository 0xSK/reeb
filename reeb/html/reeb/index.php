<!--
@Author: ananayarora
@Date:   2016-08-19T18:29:44+05:30
@Last modified by:   ananayarora
@Last modified time: 2016-08-20T01:10:28+05:30
-->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reeb</title>
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
<style>
.container-hide {
    border:1px solid #d3d3d3;
    width: 300px;
}
.container-hide div {
}
.container-hide .header-hide {
    background-color:rgba(229, 71, 75, 0.06);
    padding: 2px;
    cursor: pointer;
    font-weight: bold;
}
.container-hide .content-hide {
    display: none;
    padding : 5px;
}

.container-hide2 {
    border:1px solid #d3d3d3;
    width: 300px;
}
.container-hide2 div {
}
.container-hide2 .header-hide2 {
    background-color:rgba(229, 71, 75, 0.06);
    padding: 2px;
    cursor: pointer;
    font-weight: bold;
}
.container-hide2 .content-hide2 {
    display: none;
    padding : 5px;
}
</style>
  </head>
  <body>
    <center>
      			<header id="header">
				<div class="inner">
				<center><span class="logo">Reeb</span></center>

				</div>
			</header>
     <!--  <br />
      <button type="button" name="button" class="on1">LED 1 On</button>&nbsp;&nbsp;
      <button type="button" name="button" class="off1">LED 1 Off</button>
      <br /><br />
      <button type="button" name="button" class="on2">LED 2 On</button>&nbsp;&nbsp;
      <button type="button" name="button" class="off2">LED 2 Off</button>
      <br />
      <br /> -->

	<article>
						<div class="content">
							<img src="images/ac.png" class="image-inline" alt="" />&nbsp;&nbsp;&nbsp;<h3>Air Conditioner</h3>
<center>
							<p>Status: <span class="status1"></span><br /> </p>
							<button type="button" name="button" class="on1 button alt">Turn On</button>&nbsp;&nbsp;
				      <button type="button" name="button" class="off1 button alt">Turn Off</button>
<br>	<br>					<div class="container-hide">

    <div class="header-hide button alt"><span style="padding: 0px 87px;">Show/Hide stats</span>

    </div>
    <div class="content-hide">
        <?php
function wolframParser($input) {

      libxml_use_internal_errors(true);
      $appid = "KU585L-HQJWR7X369";
      $input = urlencode($input);
      $url = "https://api.wolframalpha.com/v2/query?input=".$input."&appid=".$appid;
      $data = file_get_contents($url);

      $xml = simplexml_load_string($data);
      $json = json_encode($xml);
      $array = json_decode($json,TRUE);
      return $array['pod'][1]['subpod']['img']['@attributes']['src'];
      // if (isset($array['pod'][1]['subpod']['plaintext'])) {
      //         return $array['pod'][1]['subpod']['plaintext'];
      // }
}

$i1 = rand(400,500);
$i2 = $i1 + rand(-25, 25);
$i3 = $i2 + rand(-25, 25);
$i4 = $i3 + rand(-25, 25);
$i5 = $i4 + rand(-25, 25);
$i6 = $i5 + rand(-25, 25);
$i7 = $i6 + rand(-25, 25);

echo "<img src='".wolframParser("plot {0,0} {1, $i1}, {2, $i2}, {3, $i3}, {4, $i4}, {5, $i5}, {6, $i6}, {7, $i7}")."'></img>";
?>

    </div>

</div>
</center>
<script>
$(".header-hide").click(function () {

    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        // $header.text(function () {
        //     //change text based on condition
        //     return $content.is(":visible") ? "Hide Stats" : "Show Stats";
        // });
    });

});</script>
						</div>
					</article>


<article class="alt">
						<div class="content">
							<img src="images/heater.png" class="image-inline" alt="" />&nbsp;&nbsp;&nbsp;<h3>Water Heater</h3>
<center>
							<p>Status: <span class="status2"></span><br /> </p>
							<button type="button" name="button" class="on2 button alt">Turn On</button>&nbsp;&nbsp;
				      <button type="button" name="button" class="off2 button alt">Turn Off</button>
              <br>	<br>					<div class="container-hide2">

                  <div class="header-hide2 button alt"><span style="padding: 0px 87px;">Show/Hide stats</span>

                  </div>
                  <div class="content-hide2">
                      <?php


              $f1 = rand(700,800);
              $f2 = $f1 + rand(-70, 70);
              $f3 = $f2 + rand(-70, 70);
              $f4 = $f3 + rand(-70, 70);
              $f5 = $f4 + rand(-70, 70);
              $f6 = $f5 + rand(-70, 70);
              $f7 = $f6 + rand(-70, 70);

              echo "<img src='".wolframParser("plot {0,0} {1, $f1}, {2, $f2}, {3, $f3}, {4, $f4}, {5, $f5}, {6, $f6}, {7, $f7}")."'></img>";
              ?>

                  </div>

              </div>
              </center>
              <script>
              $(".header-hide2").click(function () {

                  $header = $(this);
                  //getting the next element
                  $content = $header.next();
                  //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
                  $content.slideToggle(500, function () {
                      //execute this after slideToggle is done
                      //change text of header based on visibility of content div
                      // $header.text(function () {
                      //     //change text based on condition
                      //     return $content.is(":visible") ? "Hide Stats" : "Show Stats";
                      // });
                  });

              });</script>
						</center>
						</div>
					</article>
    </center>
  </body>
</html>
