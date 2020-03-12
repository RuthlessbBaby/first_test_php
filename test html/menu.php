<!DOCTYPE html>
<html>
<head>	
	<title> menu </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script type="text/javascript">
	
		function togglemenu(){
		
			document.getElementById('sidebar').classList.toggle('active');
		}
	</script>
</head>
<body>
	<div id="sidebar">           														 <!-- creating unique id -->
		<div class="menu-button" onclick="togglemenu()"> 								 <!--creating class for togglemenu bar -->
			<span></span>		  
			<span></span>
			<span></span>
		</div>
		<ul>
			
			<li><a class="darkhome" href="menu.html"> Home </a></li>
			<li><a class="darkconnection" href="connection.html">Connection </a></li>
			<li><a class="darkclients" href="clients.html"> Clients </a></li>
			<li><a class="darkbilling" href="billing.html"> Billing </a></li>
			<li><a class="darklog" href="log.html"> Log </a></li>
			
		</ul>
	</div>	
</body>
</html>