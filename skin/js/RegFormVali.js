function translat(){
	
	location.href="http://localhost/CoIgEx/";
}

function getXMLHttpRequest(){

	var htp=false;
	try{
		htp=new XMLHttpRequest();
	}
	catch(err1){
		try{
			htp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(err2){
			try{
				htp=new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(err3){
				tp=false;
			}
		}
	}
	return htp;
}

var htp1=getXMLHttpRequest();

function userVali(userT,userH,userR){

	var se=document.getElementById(userT).value;
	if((se=="")||(se==null)){
		document.getElementById(userR).innerHTML="";
		document.getElementById(userT).setAttribute('style','background:#A8A8A8');
		document.getElementById(userH).value='0';
	}
	else{
		var haurl='index.php/Frontend/StartCont/userChecker?usern='+se;
		var requrl="http://localhost/CoIgEx/";
		var requrl1=requrl+haurl;
		var respo;
		var inRes;
		htp1.open("GET", requrl1,true);
		htp1.onreadystatechange=function(){
			if (htp1.readyState == 4) {
				if (htp1.status == 200) {
					respo=htp1.responseText;
					document.getElementById(userH).value=respo;
					if(respo=='1'){
						inRes="<b>UserName Available!!<b>";
						document.getElementById(userT).setAttribute('style','background:#00ff00;');
						document.getElementById(userR).setAttribute('class','succResult');
					}
					else if(respo=='2'){
						inRes="<b>UserName Unavailable!!<b>";
						document.getElementById(userT).setAttribute('style','background:#ff0000;');
						document.getElementById(userR).setAttribute('class','failResult');
					}
					document.getElementById(userR).innerHTML=inRes;
				}
			}
		};
		htp1.send();
	}
}

function numerial(eleid,ty='',va=0){

	var elva=document.getElementById(eleid).value;
	var tem="";
	var numli="0123456789";
	var x1=numli.length;var y1=elva.length;
	for(var i=0;i<y1;i++){
		var f=0;
		for(var j=0;j<x1;j++){
			if(numli.charAt(j)!=elva.charAt(i)){
				f +=1;
			}
		}
		if(f<x1){
			tem +=elva.charAt(i);	
		}		
	}
	if(ty=='v'){
		if(parseInt(tem)>va){
			tem=va;
		}
	}
	document.getElementById(eleid).value=tem;
}

function passVali(passT,passH,passR,passL){
	
	var pass1=document.getElementById(passT).value;
	if((pass1=="")||(pass1==null)){
		document.getElementById(passR).innerHTML="";
		document.getElementById(passT).setAttribute('style','background:#A8A8A8');
		document.getElementById(passH).value='0';
	}
	else{
		var inRes;
		if(pass1.length<passL){
			inRes="<b>Atleast "+passL+" Characters!!<b>";
			document.getElementById(passH).value="2";
			document.getElementById(passT).setAttribute('style','background:#ff0000;');
			document.getElementById(passR).setAttribute('class','failResult');
		}
		else{
			document.getElementById(passH).value="1";
			inRes="<b>Proceed!!<b>";
			document.getElementById(passT).setAttribute('style','background:#00ff00;');
			document.getElementById(passR).setAttribute('class','succResult');
		}
		document.getElementById(passR).innerHTML=inRes;
	}
}

function passMVali(passRT,passT,passH,passR){
	
	var pass1=document.getElementById(passRT).value;
	var pass2=document.getElementById(passT).value;
	if((pass1=="")||(pass1==null)){
		document.getElementById(passR).innerHTML="";
		document.getElementById(passRT).setAttribute('style','background:#A8A8A8');
		document.getElementById(passH).value='0';
	}
	else{
		var inRes;
		if(pass1==pass2){
			document.getElementById(passH).value="1";
			inRes="<b>Proceed!!<b>";
			document.getElementById(passRT).setAttribute('style','background:#00ff00;');
			document.getElementById(passR).setAttribute('class','succResult');
		}
		else{
			inRes="<b>Password Mismatch!!<b>";
			document.getElementById(passH).value="2";
			document.getElementById(passRT).setAttribute('style','background:#ff0000;');
			document.getElementById(passR).setAttribute('class','failResult');
			
		}
		document.getElementById(passR).innerHTML=inRes;
	}
}

function totValida(userH,passH,passRH){
	
	var ush1=document.getElementById(userH).value;
	var pah1=document.getElementById(passH).value;
	var pah2=document.getElementById(passRH).value;
	if((ush1=='1')&&(pah1=='1')&&(pah2=='1')){
		return true;
	}
	else{
		return false;
	}
}