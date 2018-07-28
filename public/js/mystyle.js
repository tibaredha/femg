
function myFunction() {
    
	 tabSwitch('tab_2', 'content_2');
	 //document.getElementById("CIM1").autofocus;
     //document.getElementById("CIM1").focus();
	
	
	// alert("Hello! I am an alert box!");
	 //document.getElementById('content_2').style.display = 'active';  
	//var x = document.getElementById("MEDECINHOSPIT");
    //x.value = x.value.toUpperCase();
}
function myFunction1() {
    
	 tabSwitch('tab_3', 'content_3');
	 //document.getElementById("CIM1").autofocus;
     //document.getElementById("CIM1").focus();
	
	
	// alert("Hello! I am an alert box!");
	 //document.getElementById('content_2').style.display = 'active';  
	//var x = document.getElementById("MEDECINHOSPIT");
    //x.value = x.value.toUpperCase();
}



/*disable clic droit
function disableselect(e){ 
return false 
} 
function reEnable(){ 
return true 
} 
document.onselectstart=new Function ("return false") 
document.oncontextmenu=new Function ("return false") 
if (window.sidebar){ 
document.onmousedown=disableselect 
document.onclick=reEnable 
} 
*/
/*disable clic droit fin */

// show_popup : show the popup
function show_popup(id) {
	// show the popup
	$('#'+id).show();
}

// close_popup : close the popup
function close_popup(id) {
	// hide the popup
	$('#'+id).hide();
}
// show_popup : show the popup fin 




$(function() {    
    $('.delete').click(function(e) {
        var c = confirm(" Vous êtes sure de supprimer l'enregistrement ? \n  Si oui, confirmer la suppression ");
        if (c == false) return false;   
    });   
});

$(document).ready(function()
{
		$(".WILAYAD").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                           // Le type de ma requete
				url: "/framework/public/js/ajaxwc.PHP", // L'url vers laquelle la requete sera envoyee
				data: dataString,                       // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)                 // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".COMMUNED").html(html);      // On peut faire ce qu'on veut avec ici
						} 		
			});

		});
});
$(document).ready(function()
{
		$(".WILAYAN").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                           // Le type de ma requete
				url: "/framework/public/js/ajaxwc.PHP", // L'url vers laquelle la requete sera envoyee
				data: dataString,                       // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)                 // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".COMMUNEN").html(html);      // On peut faire ce qu'on veut avec ici
						} 		
			});

		});
});
$(document).ready(function()
{
		$(".WILAYAR").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                           // Le type de ma requete
				url: "/framework/public/js/ajaxwc.PHP", // L'url vers laquelle la requete sera envoyee
				data: dataString,                       // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)                 // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".COMMUNER").html(html);      // On peut faire ce qu'on veut avec ici
						} 		
			});

		});
});
$(document).ready(function()
{
		$(".wilaya").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                           // Le type de ma requete
				url: "/framework/public/js/ajaxws.PHP", // L'url vers laquelle la requete sera envoyee
				data: dataString,                       // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".structure").html(html);   // On peut faire ce qu'on veut avec ici
						} 		
			});

		});
});

$(document).ready(function() {	
});
//jvs pour chapitre categorie de la cim10
$(document).ready(function()
{
		$(".cim1").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                        // Le type de ma requete
				url: "/deces/public/js/ajaxcim.php",                // L'url vers laquelle la requete sera envoyee
				data: dataString,                    // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".cim2").html(html);   // On peut faire ce qu'on veut avec ici
						} 
					
			});

		});
});

/*Activates the Tabs*/
function tabSwitch(new_tab, new_content) {    
    document.getElementById('content_1').style.display = 'none';  
    document.getElementById('content_2').style.display = 'none';  
    document.getElementById('content_3').style.display = 'none';  
	document.getElementById('content_4').style.display = 'none';  
	
	/*document.getElementById('content_3').style.display = 'none';*/ 
	document.getElementById(new_content).style.display = 'block';     
    document.getElementById('tab_1').className = '';  
    document.getElementById('tab_2').className = '';  
    document.getElementById('tab_3').className = '';  
	document.getElementById('tab_4').className = '';  
	
	/*document.getElementById('tab_3').className = ''; */        
    document.getElementById(new_tab).className = 'active';        
}



function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
}
//generation de code 
 function genererCodeP(){
        //var dt_dec= Date('Y');
      
       var DINS= document.getElementById("DINS").value;
	   var DATENS= document.getElementById("DATENS").value;
       var cod_wil= document.getElementById("WILAYAN").value;
       var cod_com= document.getElementById("COMMUNEN").value;
        //var n_acte= document.getElementById("acte").value;
        //var res1 = dt_nais.substring(8, 10);
        //var res2 = dt_dec.substring(13, 15);
        //var codePati= res1+cod_wil+cod_com3+n_acte+res2;
       // if(dt_dec != '' && dt_nais != '' && cod_wil != '' && cod_com3 != '' && n_acte != ''){
           // document.getElementById("show_codeP").style.display="";
          //  document.getElementById("code_patient").value= codePati;           
    //} 
	var val1 = DINS.substring(8, 10);
	var val2 = DATENS.substring(8, 10);
	var val3 = cod_wil.substring(-1);
	var val4 = cod_com.substring(-1);
	
	
	var codePati= val1+val2+val3+val4;
	// document.getElementById("show_codeP").style.display="";
	// document.getElementById("code_patient").value= codePati; 
	}





