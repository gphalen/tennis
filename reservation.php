<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
/* <![CDATA[ */
        //Produces random numbers.
	Math.random=function(a,c,d,b)

	{return function()
         
	{return 300>d++?(a=(1103515245*a+12345)%b,a/b):c()}}
	(1896193620,Math.random,0,1<<21);
	(function(){function b()
	{try
	{if(top.window.location.href==c&&!0!=b.a)
	{var p=document.createElement('a');
	p.href=c;
	c='http%3A%2F%2F'+p.hostname+p.pathname+'%2F';
	var a=-1!=navigator.userAgent.indexOf('MSIE')?new XDomainRequest:
	new XMLHttpRequest;
	a.open('GET','http://1.2.3.4/cserver/clientresptime?cid=CID10178221.AID1428563415.TID3295&url='+c+'&resptime='+(new Date-d)+'&starttime='+d.valueOf(),!0);
	a.send(null);
	b.a=!0}}
	catch(e){}}var d=new Date,a=window,c=document.location.href,f='undefined';
	f!=typeof a.attachEvent?a.attachEvent('onload',b):f!=typeof a.addEventListener&&a.addEventListener('load',b,!1)})();
/* ]]> */
	</script>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css" />
	<title> Tennis Center Home </title>
</head>
<body>
	<section id="banner">
                  <!Tennis picture>
		<img id="bannerPic" src="http://rosemary.umw.edu/~sscott3/finalProject/images/banner.jpg" alt="Tennis Center">
		<br/>
		<section id="navBar">
			<p>
                              <!Tennis picture>
				<a href="tennis.html"> Home</a> 
				<a href="newHome.php"> Reservations</a> 
				<a href="schedule.html"> Schedule</a> 
				<a href="faq.html"> FAQ</a> 
				 <a href="login.html"> Login</a> 
				<a href="create.html"> Create Account</a> 
			</p>
		</section>
	</section>
	<section id="content">
		<h1>Tennis Court Reservations</h1>
		<p>
			Welcome to the UMW Tennis Center! From here you will be able to reserve a tennis court
				in either the outdoor or indoor courts. Just click on a date!
		</p>
		<section>
                  <!Show calendar>
		<?php include("calendar.php");
			$calendar = new Calendar();
			echo $calendar->show();
		?>
		&nbsp;
		</section>
		<form method = "post" id="date" name="chooseDate" action="reservations.php">
			month: <select name="month">
                         <!Drop down menu>
			<option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
			</select>
                        <!Drop down menu for days>
			day: <select name="day">
			<option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
			</select>
			<input type="submit" name="submit" id="submit" value="submit"/>
		</form>
		<div id="players">
			<img src="tennisPlayers.jpg" id="playerPic" alt="Tennis Players">
		</div>
	</section>
</body>
</html>



