<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
	   <link rel="stylesheet" href="main.css"/>
        <title>
            program-12 
        </title>
    </head>
    <body>
        <hr>
        <h1>  program-12 </h1>
        <hr>
        <div>
		<script>
		function showHint(str) {
			if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "gethint.php?q=" + str, true);
				xmlhttp.send();
			}
		}
		</script>
            <h3>Requirement #01</h3>
			<p><b>Start typing a name of a movie in the input field below:</b></p>
			<form>
			Movie name: <input type="text" onkeyup="showHint(this.value)">
			</form>
			<p>Suggestions: <span id="txtHint"></span></p>
        </div>
		<hr>
        <div>
            <h3>Requirement #02</h3>
			<script>
			function showUser(str) {
				if (str == "") {
					document.getElementById("txtHint2").innerHTML = "";
					return;
				} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("txtHint2").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET","getuser.php?q="+str,true);
					xmlhttp.send();
				}
			}
			</script>
			<form>
			<p align="left"><b>Select value:</b><br>
				<select onchange="showUser(this.value);">
				<option value="">Select a team:</option>
				<option value="Eagle">Eagle</option>
				<option value="Falcon">Falcon</option>
				<option value="Tigar">Tigar</option>
				<option value="Python">Python</option>
				<option value="Houston oilers">Houston oilers</option>
				</select>
			</form><br>
				 <div id="txtHint2"><b>Person info will be listed here...</b></div>
        </div>
		<hr>
        <div>
		<div>
            <h3>Requirement #03</h3>
			
			<script>
			function showCar(str) {
				
			  if (str=="") {
				document.getElementById("txtHint3").innerHTML="";
				return;
			  }
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("txtHint3").innerHTML=this.responseText;
				}
			  }
			  xmlhttp.open("GET","getcar.php?q="+str,true);
			  xmlhttp.send();
			}
			</script>
			<form>
			<p align="left"><b>Select a car:</b><br>
				<select onchange="showCar(this.value);">
				<option value="0"></option>
				<option value="ford">ford</option>
				<option value="chevy">chevy</option>
				<option value="Toyota">Toyota</option>
				<option value="Hyundai">Hyundai</option>
				<option value="kia">kia</option>
				<option value="Honda">Honda</option>
				<option value="Subaru">Subaru</option>
				<option value="Nissan">Nissan</option>
				<option value="Suzuki">Suzuki</option>
				<option value="BMW">BMW</option>
				 </select>
			</form>
			<div id="txtHint3"><b>Car info will be listed here...</b></div>
        </div>
        </div>
		<hr>
        <div>
            <h3>Requirement #04</h3>
			<script>
			function showRSS(str) {
			  if (str.length==0) {
				document.getElementById("rssOutput").innerHTML="";
				return;
			  }
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("rssOutput").innerHTML=this.responseText;
				}
			  }
			  xmlhttp.open("GET","getrss.php?q="+str,true);
			  xmlhttp.send();
			}
			</script>
			<div id="rssOutput">
			<p>Ajax (Asynchronous JavaScript And XML) and RSS (Really Simple Syndication) are two technologies that</p>
			<p>have taken the Web by storm. Most commonly, RSS is used to provide news to either people or other </p>
			<p>organizations. This is done by serving an "RSS feed" from a website. An RSS feed is simply a link to </p>
			<p>an XML file that is structured in a certain way. The RSS specification tells us the expected structure </p>
			<p>of the XML file. For example, the title, author, and description tags are required, </p>
			<p>and so all RSS XML files will have at least these three tags. </p>
			<p><a href="https://www.xml.com/pub/a/2006/09/13/rss-and-ajax-a-simple-news-reader.html">Cited from xml.com</a>
			<form>
			<select onchange="showRSS(this.value)">
			<option value="">Select an RSS-feed:</option>
			<option value="Google">Google News</option>
			<option value="NBC">NBC News</option>
			</select>
			</form>
			<br>
			<div id="rssOutput">RSS-feed will be listed here...</div>
			        </div>
        </div>
        <hr>
		<div>
            <h3>Requirement #05</h3>
			<div id="poll">
			<p>AJAX Poll adds the ability for users to vote on polls without reloading the page. It works with the normal </p>
			<p>Poll module included with Drupal core. It affects all polls throughout the site, on teaser, full, and block </p>
			<p>forms of polls.</p>
			<p><a href="https://www.drupal.org/project/ajax_poll">Cited from drupal.com</a>
			<script>
			function getVote(int) {
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("poll").innerHTML=this.responseText;
				}
			  }
			  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
			  xmlhttp.send();
			}
			</script>
			<h3>Do you like PHP and AJAX so far?</h3>	
			<div id="poll">

			
			<form>
			Yes:
			<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
			<br>No:
			<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
			</form>

			</div>
						</div>
        </div>
        <hr>
        </body>
</html>