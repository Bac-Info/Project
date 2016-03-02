function doit(){
var alpha= "abcdefghijklmnopqrstuvwxyz";
var i=0;
var b=true;
var ch=document.f1.T1.value;
var ch1=" ";

do{
	if (!(alpha.indexOf(ch[i])>=0)) {
		b=false;
	}
	i++;
}while ((b==true) && (i<ch.length));


if (b==true){
	alert("good");
}else{
	alert("bad");
}
}