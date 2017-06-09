
function setTimePeriod(e){
	d = new Date();
	switch(e){
		case "15":
			d.setMilliseconds(900000);
			break;
		case "30":
			d.setMilliseconds(900000*2);
			break;
		case "45":
			d.setMilliseconds(900000*3);
			break;
		case "60":
			d.setMilliseconds(900000*4);
			break;
		case "120":
			d.setMilliseconds(900000*5);
			break;
		case "180":
			d.setMilliseconds(900000*6);
			break;
		}
	}
	

	
function setAreaPerTime(e){
	switch(e){
		case "semua":
			document.getElementById("progress1").style.width="0%";
			document.getElementById("progress2").style.width="0%";
			document.getElementById("progress3").style.width="0%";
			document.getElementById("progress4").style.width="0%";
			document.getElementById("progress5").style.width="0%";
			break;
		case "1":
			document.getElementById("progress1").style.width="0%";
			break;
		case "2":
			document.getElementById("progress2").style.width="0%";
			break;
		case "3":
			document.getElementById("progress3").style.width="0%";
			break;
		case "4":
			document.getElementById("progress4").style.width="0%";
			break;
		case "5":
			document.getElementById("progress5").style.width="0%";
			break;
	}
}

function setTimePerlevel(){
	switch(e){
		case "semua":
			alert("Problem at All Section");
			break;
		case "1":
			alert("Problem at Section 1");
			break;
		case "2":
			alert("Problem at Section 2");
			break;
		case "3":
			alert("Problem at Section 3");
			break;
		case "4":
			alert("Problem at Section 4");
			break;
		case "5":
			alert("Problem at Section 5");
			break;
	}
}

function setWaterLevel(e){
	switch(e){
		case "20":
			if(getPersen('progress1') > = 20){
				setTimePerlevel();
			}
		break;
		case "40":
			if(water > 40){
				setTimePerlevel();
			}
		break;
		case "50":
			if(water > 50){
				setTimePerlevel();
			}
		break;
		case "60":
			if(water > 60){
				setTimePerlevel();
			}
		break;
		case "80":
			if(water > 80){
				setTimePerlevel();
			}
		break;
		case "100":
			if(water > 100){
				alert("lol");
			}
		break;
	}