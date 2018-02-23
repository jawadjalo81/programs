<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-11 
        </title>
    </head>
    <body>
        <hr>
		<div id="div20" style="background-color:Yellow">
        <h1> program-11 </h1>
		</div>
        <hr></hr>
      <div id="div1" style="background-color:AntiqueWhite">
	  <p>Another color</p>
	  <div id="div12" style="background-color:Grey">
            <h3>Requirement #01</h3>
			<p>Another color</p>
			<div id="div13" style="background-color:Green">
			<p>Another color</p>
        </div>
		</div>
		</div>
		        <hr></hr>
        <div id="div2" style="background-color:Aqua">
            <h3>Requirement #02</h3>
			<div id="div11" style="background-color:FireBrick">
			<p id="num2url"></p>
			<script>
			document.getElementById("num2url").innerHTML = "Page location is " + window.location.href;
			</script>
			</div>
		<div id="div9" style="background-color:DarkGray">			
		<p>Click the button to find out if cookies are enabled in your browser.</p>
		<button onclick="myFunctiona()">Try it</button>
		<button onclick="myFunctionx()">Back</button>
		<p id="demoa"></p>
		</div>
		<script>
		function myFunctiona() {
			var x = "Cookies enabled: " + navigator.cookieEnabled;
			document.getElementById("demoa").innerHTML = x;
		}
		function myFunctionx() {
			document.getElementById("demoa").innerHTML = "";
		}
      </script>
	  <div id="div10" style="background-color:DodgerBlue">
		<p>Click the button to find out if your browser has Java enabled.</p>
		<button onclick="myFunctionb()">Try it</button>
		<button onclick="myFunctiony()">Back</button>
		<p id="demob"></p>
		</div>
		<script>
		function myFunctionb() {
			var x = "Java Enabled: " + navigator.javaEnabled();
			document.getElementById("demob").innerHTML = x;
		}
		function myFunctiony() {
			document.getElementById("demob").innerHTML = "";
		}
		</script>
        </div>
		        <hr></hr>
         <div id="div3" style="background-color:Bisque">
            <h3>Requirement #03</h3>
			<div id="div19" style="background-color:Teal">
			<form name="divcolorsxml" method="post" action="index.php"> 
			<input type="button"  onclick="req3();" name="divcolorsxml" value="divcolorsxml"/>
			</form>
			<script >
			function req3(){
			  // Create a connection to the file.
			  var Connect = new XMLHttpRequest();
			  // Define which file to open and
			  // send the request.
			  Connect.open("GET", "divcolors.xml", false);
			  Connect.setRequestHeader("Content-Type", "text/xml");
			  Connect.send(null);
			  // Place the response in an XML document.
			  var TheDocument = Connect.responseXML;
			  // Place the root node in an element.
			  var Customers = TheDocument.childNodes[0];
			  // Retrieve each customer in turn.
			  for (var i = 0; i < Customers.children.length; i++)
			  {
			   var Customer = Customers.children[i];
			   // Access each of the data values.
			   var Name = Customer.getElementsByTagName("name");
			   var Color = Customer.getElementsByTagName("color");
			   // Write the data to the page.
			   document.getElementById(Name[0].textContent.toString()).style.backgroundColor = Color[0].textContent.toString()
			   /*document.write("<tr><td>");
			   document.write(Name[0].textContent.toString());
			   document.write("</td><td>");
			   document.write(Color[0].textContent.toString());
			   document.write("</td></tr>");*/
			  }}
			</script>
        </div>
		        <hr></hr>
        <div id="div4" style="background-color:Blue">
            <h3>Requirement #04</h3>
			<center><div id="colorDate"><h2 id="dateDisplay"></h2></div></center>
			<p>Enter number of ms for the time out</p>
			<form name="timeout" method="post" action="index.php"> 
			<input type="text" id="timmer" >  </br>
			<input type="button" onclick="Requirement04();"  id="onoff" name="timeout" value="off"/>
			</form>			
			<p id="req4a"></p>
			<script>
			function Requirement04(){
			var onoff = document.getElementById("onoff").value;
			if(onoff === "off"){
			document.getElementById("onoff").value = "on";}
			else{document.getElementById("onoff").value = "off";}
			var colors = ["AntiqueWhite","Aqua","Bisque","Blue","Brown","Chartreuse","CornflowerBlue","Cyan",
			"DarkGray","DodgerBlue","FireBrick","Grey","Green","Indigo","Navy","Olive","Orange","Red","Teal","Yellow"];
			var timmer = parseInt(document.getElementById("timmer").value);
			setInterval(function(){ 
				var timmer = parseInt(document.getElementById("timmer").value);
				var onoff2 = document.getElementById("onoff").value;
				if(onoff2 === "on"){
					var rnum = Math.floor((Math.random() * 20));
					var randiv = "div"+(rnum+1);
					//document.write(randiv);
					document.getElementById(randiv).style.backgroundColor = "Black";
					document.getElementById("onoff").value="off";
				}
			}, timmer);			
			}
			</script>
        </div>
		        <hr></hr>
        <div id="div5" style="background-color:Brown">
            <h3>Requirement #05</h3>
			<div id="div18" style="background-color:Red">
			<form action="#" method="post">
			<input type="checkbox" name="check_list[]" value=0><label>div1</label><br/>
			<input type="checkbox" name="check_list[]" value=1><label>div2</label><br/>
			<input type="checkbox" name="check_list[]" value=2><label>div3</label><br/>
			<input type="checkbox" name="check_list[]" value=3><label>div4</label><br/>
			<input type="checkbox" name="check_list[]" value=4><label>div5</label><br/>
			<input type="checkbox" name="check_list[]" value=5><label>div6</label><br/>
			<input type="checkbox" name="check_list[]" value=6><label>div7</label><br/>
			<input type="checkbox" name="check_list[]" value=7><label>div8</label><br/>
			<input type="checkbox" name="check_list[]" value=8><label>div9</label><br/>
			<input type="checkbox" name="check_list[]" value=9><label>div10</label><br/>
			<input type="checkbox" name="check_list[]" value=10><label>div11</label><br/>
			<input type="checkbox" name="check_list[]" value=11><label>div12</label><br/>
			<input type="checkbox" name="check_list[]" value=12><label>div13</label><br/>
			<input type="checkbox" name="check_list[]" value=13><label>div14</label><br/>
			<input type="checkbox" name="check_list[]" value=14><label>div15</label><br/>
			<input type="checkbox" name="check_list[]" value=15><label>div16</label><br/>
			<input type="checkbox" name="check_list[]" value=16><label>div17</label><br/>
			<input type="checkbox" name="check_list[]" value=17><label>div18</label><br/>
			<input type="checkbox" name="check_list[]" value=18><label>div19</label><br/>
			<input type="checkbox" name="check_list[]" value=19><label>div20</label><br/>
			<input type="submit" name="submit" value="Submit"/>
			</form>
			<?php
			//echo "test1";
			$num1 = "";
			$dstr = "div";
			$xml=simplexml_load_file("divcolors.xml") or die("Error: Cannot create object");
			if(isset($_POST['submit'])){//to run PHP script on submit
			//echo "test2";
				if(!empty($_POST['check_list'])){
					//echo "test3";
				// Loop to store and display values of individual checked checkbox.
					foreach($_POST['check_list'] as $selected){
						//echo "test4";
						$strnum = strval($selected);
						$num1 = $dstr.$strnum;
						//echo $selected;
						foreach($xml->children() as $colrs) {
							//echo "test5";
							$dnum = $colrs->name;
							$colname = $colrs->color;
							if($dnum == $num1){
								//echo "test6";
								echo "That color is ". $colname."</br>";
								//echo "document.getElementById($dnum).style.background-Color = $colname </br>";
							}
					}
					}
				}
			}
			?>
			</div>
        </div>
		        <hr></hr>
        <div id="div6" style="background-color:Chartreuse">
            <h3>Requirement #06</h3>
			<div id="div17" style="background-color:Orange">
			<p>Click the button to display this window's height and width (NOT including toolbars and scrollbars).</p>
		</div>
		<button onclick="myFunction()">Try it</button>
		<p id="demo6"></p>
		<script>
		function myFunction() {
			var w = window.innerWidth;
			var h = window.innerHeight;
			document.getElementById("demo6").innerHTML = "Width: " + w + "<br>Height: " + h;
		}
		</script>
        </div>
		        <hr></hr>
        <div id="div7" style="background-color:CornflowerBlue">
            <h3>Requirement #07</h3>
			<div id="div16" style="background-color:Olive">
		<h3>The window.location object to load a new document</h3>
			</div>
		<input type="button" value="Load new document" onclick="newDoc()">
		<script>
		function newDoc() {
			window.location.assign("https://www.codeandtheory.com")
		}
		</script>
        </div>
		        <hr></hr>
        <div id="div8" style="background-color:Cyan">
            <h3>Requirement #08</h3>
			<div id="div14" style="background-color:Indigo">
			<p>Create cookie</p>
			</div>
		<button onclick="createCookie()">createCookie</button>
		<button onclick="deleteCookie()">deleteCookie</button>
		<div id="div15" style="background-color:Navy">
		<p id="demo8"></p>
		</div>
			<script>
		function createCookie() {
			document.cookie = "cookie1=First cookie"; 
			document.cookie = "cookie2=Second cookie";
			var x8 = document.cookie; 
			document.getElementById("demo8").innerHTML = x8;
		}
		function deleteCookie() {
			document.cookie = "cookie1=; expires=Thu, 01 Jan 1970 00:00:00 GMT;";
			document.cookie = "cookie2=; expires=Thu, 01 Jan 1970 00:00:00 GMT;";
			var x8 = document.cookie; 
			document.getElementById("demo8").innerHTML = x8;
		}
		</script>
        </div>
        <hr></hr>
    </body>
</html>