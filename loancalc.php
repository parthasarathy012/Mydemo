<!DOCTYPE html>
<html>
<head>
<style>
#input input[type=text],select{
color:white;
padding:10px;
background:#2C3E50;
outline:none;
border:none;
width:210px;
margin:4px;
border-bottom: 3px solid #00FFFF
}

#input label{
color:white;
border-bottom: 3px solid #00FFFF;
padding:10px;
background:#2C3E50;
outline:none;
border:none;
width:210px;
margin:10px;
}

#input input[type=button] {
padding:10px;
background:#2C3E50;
border:2px solid #00FFFF;
outline:none;
color:white;
border-bottom: 3px solid #00FFFF  ;
width:150px;
margin:5px;
}

#ref input[type=button] {
padding:10px;
background:#2C3E50;
border:2px solid #00FFFF;
outline:none;
color:white;
border-bottom: 3px solid #00FFFF  ;
width:150px;
margin:5px;
}

#input{
width:300px;
height:300px;
text-align:center;
background:#2C3E50 ;
overflow:auto;
box-shadow:10px 10px 20px #00FFFF;
position:fixed;
left:350px;
top:180px;
}

#output{
width:300px;
height:400px;
text-align:center;
background:#2C3E50 ;
overflow:auto;
box-shadow:10px 10px  10px #00FFFF;
position:fixed;
left:680px;
top:135px;
padding-top:40px
}

#ref{
width:auto;
height:auto;
text-align:center;
background:#2C3E50 ;
overflow:auto;
position:fixed;
left:1100px;
top:400px;
padding-top:5px;
padding-bottom:0px;
}


#output label{
text-align:center;
color:white;
border-bottom: 2px solid #00FFFF;
padding:10px;
background:#2C3E50;
outline:none;
width:210px;

}


</style>
<meta charset="ISO-8859-1">
<title>LOAN CALCULATION</title>
</head>
<body bgcolor="black">
<p style="text-align:center; background-color:turquoise; font-family:Impact; font-size:40px; color:white;" > CANARA BANK - LOAN CALCULATION</p>
<div id="input">
<form   style="text-align:center;" >
<input id="loanamount" type="text"  placeholder="LOAN_AMOUNT">
<select id="loantype" onchange="ratefinder()">
<option>LOAN_TYPE</option>
<option>HOME LOAN</option>
<option>EDUCATION LOAN</option>
<option>VEHICLE LOAN</option>
<option>PERSONAL LOAN</option>
</select>
<input type="text" id="years" placeholder="NO,OF YEARS"><br><br>
<label>RATE OF INTEREST : <b id="rateofintrest">0.00</b> <b>%</b></label><br><br>
<input type="button" onclick="emicalc()" value="SUBMIT">
<input type="button" onclick="location.reload();" value="RESET">
</form>
</div>
<div id="output">
<form style="text-align:center;">
<label>LOAN_AMOUNT     : <b id="la" >0.00</b></label><br><br><br>
<label>LOAN_TYPE       : <b id="lt" >0.00</b></label><br><br><br>
<label>NO,OF YEARS     : <b id="ny">0.00</b></label><br><br><br>
<label>RATE OF INTEREST : <b id="ri">0.00</b></label><br><br><br>
<label>TOTAL INTEREST   : <b id="ti">0.00</b></label><br><br><br>
<label>TOTAL+INTEREST   : <b id="t+i">0.00</b></label><br><br><br>
<label>MONTHLY EMI     : <b id="emi">0.00</b></label><br>
<script type="text/javascript">
var amount=document.getElementById("loanamount");
var type=document.getElementById("loantype");
var year=document.getElementById("years");
var roi=document.getElementById("rateofintrest");

function ratefinder(){
	var n
	if (type.value =="HOME LOAN")
		{
		n=1;
		}
	else if (type.value =="EDUCATION LOAN")
	{
	n=2;
	}
	else if (type.value =="VEHICLE LOAN")
	{
	n=3;
	}
	else if (type.value =="PERSONAL LOAN")
	{
	n=4;
	}
	var rate
	switch (n) {
	  case 1:
		  rate=0.065
		  document.getElementById("rateofintrest").innerHTML = rate*100;
		  return rate*100;
	    	break;
	  case 2:
		  rate=0.03
		  document.getElementById("rateofintrest").innerHTML = rate*100;
		  return rate*100;
		  break;
	  case 3:
		  rate=0.08
		  document.getElementById("rateofintrest").innerHTML = rate*100;
		  return rate*100;
		  break;
	  case 4:
		  rate=0.10
		  document.getElementById("rateofintrest").innerHTML = rate*100;
		  return rate*100;
}
}

function emicalc(){
var p=amount.value;
var t=(year.value)*12;
var rate=ratefinder();
var r=(rate/12)/100;
p1=(p*r*((1+r)**t))/((1+r)**t-1);
p2=p1.toFixed(2);
ti=(p2*t)-p;
totalintrest=ti.toFixed(2);
total=(p2*t).toFixed(2);
document.getElementById("emi").innerHTML =p2 +"Rs";
document.getElementById("la").innerHTML =p +"Rs";
document.getElementById("lt").innerHTML =type.value;
document.getElementById("ny").innerHTML =t + "Months";
document.getElementById("ri").innerHTML=rate+"%" ;
document.getElementById("ti").innerHTML=totalintrest +"Rs";
document.getElementById("t+i").innerHTML =total +"Rs";

}
</script>
</form>
</div>
<div id="ref">
<form   style="text-align:center;" >
<input type="button" onclick="location.href='reverse.html'" value="REVERSE NUMBER"><br>
<input type="button" onclick="location.href='Findingvowels.html'" value="FINDING VOWELS">
<h2 style="color:white;">&#169;</h2>
<h6 style="color:white;">PARTHASARATHY</h6>
</form>
</div>

</body>
</html>