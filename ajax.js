var x=false;
if(window.XMLHttpRequest)
{	
	//code for IE7+,FireFox,Chrome,Opera,Safari
	x=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{ 
	//code for IE6,IE5
	x=new ActiveXObject("Microsoft.XMLHTTP");
}

function xmlHttpRequest()
{
	if (window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
	else
	{
		alert("XMLHTTP not supported.");
		return null;
	}
}

function getquestion(id)
{	
	if(x)
	{	
		var fn = "data.php?id="+id;
		x.open("GET",fn);
		x.onreadystatechange=function()
		{
			if(x.readyState==4 && x.status==200)
			{
				document.getElementById("quiz").innerHTML=x.responseText;
			}
		}
		x.send(null);
	}	
}

function saveans_old(opt,cans,qid)
{
	if(opt==cans)
	{
		document.getElementById("s"+qid).innerHTML = " ";
		document.getElementById("s"+qid).style.color = "white";
	}
	else
	{
		document.getElementById("s"+qid).innerHTML = "  ";
		document.getElementById("s"+qid).style.color = "white";
	}
	$.ajax
	(	   
		  {
			url: "userans.php",
			type: "POST",
            data: { 'opt': opt, 'cans': cans, 'qid': qid },
	      }
	);		
}

function saveans(opt,cans,qid)
{
	$.ajax
	(	   
		  {
			url: "useranswer.php",
			type: "POST",
            data: { 'opt': opt, 'cans': cans, 'qid': qid },
	      }
	);		
}
//Get Data for skills in mast_questionskill.php on change of  Combobox 
function getmarks(t)
{
    var yqid=document.getElementById("xqid").value;
	if (x)
    {
        var fn = "getdata.php?skid=" + document.getElementById("cmbskills").value+"&qid="+yqid;
        x.open("GET", fn);
        x.onreadystatechange = function()
        {
            if (x.readyState == 4 && x.status == 200)
            {
                document.getElementById("spanmarks").innerHTML = x.responseText;
            }
        }
        x.send(null);
    }
}
//Search Option
function searchelement(ytableId,searchFld)
{
	if(x)
	{	
		var xt1 = document.getElementById("t1").value;
    	var fn = "ajaxdisplay.php?name="+xt1+"&tableId="+ytableId;
		x.open("GET",fn);
		x.onreadystatechange=function()
		{
			if(x.readyState==4 && x.status==200)
			{
				document.getElementById("mydiv").innerHTML=x.responseText;
			}
		}
		x.send();
	}
}