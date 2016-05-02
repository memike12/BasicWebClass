<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style>
body {
	background-color:rgba(200,188,181,0.14);
}
div.nav {
	height:55px;
	position:fixed;
	top:0;
	left:0;
	right:0;
	background-color:white;
	z-index:100;
}
.line{
	position:absolute;
	top:0;
	left:3px;
	right:3px;
	height:53px;
	border-bottom:2px solid gray;
}
.menu-1 {
	position:absolute;
	height:20px;
	width:20px;
	top:10.5px;
	left:25px;
	border:5px solid black;
	cursor:pointer;	
}

.menu-1-red {
	position:absolute;
	top:-5px;
	right:-5px;
	height:5px;
	width:5px;
	background-color:#cc3539;
	z-index:10;
}
.menu-1-white {
	position:absolute;
	top:-5px;
	right:-5px;
	height:9px;
	width:9px;
	background-color:white;
	z-index:9;
}

.divider {
	position:absolute;
	left:75px;
	top:3px;
	bottom:5px;
	width:2px;
	background-color:lightgray;
}

div.menu-2 {
	position:absolute;
	top:10.5px;
	left:97px;
	height:30px;
	width:30px;
	cursor:pointer;
	/*border:5px solid #cc3539;*/
}

div.dot {
	position:absolute;
	height:5px;
	width:5px;
	background-color:#cc3539;
}

div.search {
	position:absolute;
	left:169px;
	top:0;
	height:53px;
	line-height:52px;
}
input.search {
	height:18px;
	padding:2.5px;
	padding-left:30px;
	border:1px solid lightgray;
	
}

div.title {
	font-family: 'Open Sans', sans-serif;
	position:absolute;
	height:53px;
	line-height:53px;
	left:50%;
	font-size:23px;
	transform: translate(-50%);
	color:gray;
	
}

div.account {
	position:absolute;
	height:53px;
	line-height:53px;
	right:15px;
	color:gray;
	font-family: 'Open Sans', sans-serif;
	font-size:15px;
}

div.main {
	position:absolute;
	top:190px;
	left:0;
	right:0;
	
}

div.posts {
	width:70%;
	max-width:900px;
	margin:0 auto;
}
span.post-border{
	margin:20px;
	display:inline-block;
	width:252px;
	height:302px;
	border:1px solid rgba(0,0,0,0.10);
	
}
span.post {
	overflow:hidden;
	display:inline-block;
	width:240px;
	height:290px;
	background-color:white;
	border:1px solid rgba(0,0,0,0.26);
	padding:5px;
	cursor:pointer;
}
div.post-img {
	
	
	height:240px;
	width:240px;
}
div.post-title {
	height:30px;
	line-height:30px;
	color:gray;
	text-align:left;
}
div.post-title-left {
	
	display:inline-block;
	width:180px;
	padding-left:10px;
	font-size:15px;
}
div.post-title-cost {
	
	display:inline-block;
	width:40px;
	text-align:right;
	font-weight:bold;
	/*font-size:20px;*/
}

div.links {
	position:fixed;
	top:55px;
	left:0;
	right:0;
	height:55px;
	line-height:55px;
	display:none;
	background-color:white;
	padding-left:25px;
	font-family: 'Open Sans', sans-serif;
	color:gray;
}

div.notification {
	position:absolute;
	background-color:#cc3539;
	height:20px;
	width:20px;
	border-radius:10px;
	font-size:15px;
	color:white;
	text-align:center;
	line-height:20px;
}

a.link {
	position:absolute;
	display:inline-block;
	height:40px;
	line-height:40px;
	color:inherit;
	text-decoration:none;
	padding-right:5px;
	padding-left:5px;
	transition:all 0.3s;
	top:7.5px;
}
a.link:hover {
	background-color:lightgray;
	color:#cc3539;
}

div.bg-dark {
	position:fixed;
	top:0;
	bottom:0;
	right:0;
	left:0;
	background-color:rgba(0,0,0,0.5);
	z-index:100;
	display:none;
}
div.pop-up-post {
	position:fixed;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	-webkit-transform: translate(-50%,-50%);
	width:400px;
	height:500px;
	background-color:white;
	display:none;
	border:1px solid gray;
	z-index:110;
	padding:20px;
	text-align:center;
	font-size:20px;
}
</style>
<script>
$(document).ready(function() {
	$(".menu-1").click(function() {
		$("#nav-links").fadeToggle();
		$("#categories").fadeOut();
	});
	
	$(".menu-2").click(function() {
		$("#categories").fadeToggle();
		$("#nav-links").fadeOut();
	});
	
	$(".post").click(function() {
		var id = this.id;
		$(".bg-dark").fadeIn();
		$(".pop-up-post").fadeIn();
		$(".pop-up-post").html("The id of this post is: "+id);
	});
	$(".bg-dark").click(function() {
		$(".bg-dark").fadeOut();
		$(".pop-up-post").fadeOut();
		$(".pop-up-post").html("");
	});
});
</script>
</head>
<body>
<div class='nav'>
	<div class='line'></div>
	
	<div class='menu-1'>
		<div class='notification' style='top:-10px;left:-10px'>1</div>
		<div class='menu-1-red'></div>
		<div class='menu-1-white'></div>
	</div>
	
	<div class='divider'></div>
	
	<div class='menu-2'>
		<div class='dot' style='top:0;left:0'></div>
		<div class='dot' style='top:0;left:12.5px;'></div>
		<div class='dot' style='top:0;right:0'></div>
		<div class='dot' style='top:12.5px;left:0;'></div>
		<div class='dot' style='bottom:0;left:0;'></div>
		<div class='dot' style='top:12.5px;left:12.5px;'></div>
		<div class='dot' style='top:12.5px;right:0;'></div>
		<div class='dot' style='bottom:0;left:12.5px;'></div>
		<div class='dot' style='bottom:0;right:0;'></div>
	</div>
	
	<div class='divider' style='left:147px'></div>
	
	<div class='search'>
		<input type='text' class='search' id='search' placeholder="search MidTrade">
	</div>
	
	<div class='title'>
		TRADING POST
	</div>
	
	<div class='account'>
		LOGIN / SIGN UP &dtrif;
	</div>
	
	
	<div class='links' id='nav-links'>
		<a href="/" class="link"><div class='notification' style='top:-4px;left:-12px'>1</div>Trading Post</a>
		<div class='divider' style='left:150px'></div>
		<a href="/" class="link" style='left:167px'>Wanted</a>
		<div class='divider' style='left:254px'></div>
		<a href="/" class="link" style='left:271px'>BookTrade</a>
		<div class='divider' style='left:382px'></div>
		<a href="/" class="link" style='left:399px'>Carpools</a>

		
	</div>
	<div class='links' id='categories'>
		Category | Category | Category | Category | Category | Category | Category | Category | Category
	</div>
	
</div>
<div class='bg-dark'></div>
<div class="pop-up-post"></div>
<div class='main'>
	<div class='posts'>
		<center>
			<span class='post-border'>
				<span class='post' id='some-sick-headphones'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407213946);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Some sick headphones</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post' id='ink_refill'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407194941);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Ink Refill</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407180352);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>$100 dollar gift card</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407213946);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Some sick headphones</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407213946);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Some sick headphones</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407213946);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Some sick headphones</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407213946);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Some sick headphones</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
			<span class='post-border'>
				<span class='post'>
					<div class='post-img' style='background: url(/bin/uploads/MidTradeMembers/150407213946);background-size: auto 100%;background-repeat:no-repeat;background-position:center;'>	
					</div>
					<hr style='width:90%;border:1px solid lightgray;'>
					<div class='post-title'>
						<div class='post-title-left'>Some sick headphones</div><div class='post-title-cost'>$5</div>
					</div>
				</span>
			</span>
			
		</center>
	</div>
</div>
</body>
</html>