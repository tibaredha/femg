<div class="sheader1r"><p id="llogin"><?php html::NAV();?></p></div>
<div class="sheader2r">***</div>

<div class="contentsig">
<?php
 
$data = array(
"916"  => html::color(html::equincommune1('17000',916)),//Djelfa
"917"  => html::color(html::equincommune1('17000',917)),//El Idrissia
"918"  => html::color(html::equincommune1('17000',918)),//Oum Cheggag
"919"  => html::color(html::equincommune1('17000',919)),//El Guedid
"920"  => html::color(html::equincommune1('17000',920)),//Charef
"921"  => html::color(html::equincommune1('17000',921)),//El Hammam
"922"  => html::color(html::equincommune1('17000',922)),//Touazi
"923"  => html::color(html::equincommune1('17000',923)),//Beni Yacoub
"924"  => html::color(html::equincommune1('17000',924)),//ainoussera
"925"  => html::color(html::equincommune1('17000',925)),//guernini
"926"  => html::color(html::equincommune1('17000',926)),//sidilaadjel
"927"  => html::color(html::equincommune1('17000',927)),//hassifdoul
"928"  => html::color(html::equincommune1('17000',928)),//elkhamis
"929"  => html::color(html::equincommune1('17000',929)),//birine
"930"  => html::color(html::equincommune1('17000',930)),//Dra Souary
"931"  => html::color(html::equincommune1('17000',931)),//benahar
"932"  => html::color(html::equincommune1('17000',932)),//hadshari
"933"  => html::color(html::equincommune1('17000',933)),//bouiratlahdab
"934"  => html::color(html::equincommune1('17000',934)),//ainfka
"935"  => html::color(html::equincommune1('17000',935)),//hassi bahbah
"936"  => html::color(html::equincommune1('17000',936)),//Mouilah
"937"  => html::color(html::equincommune1('17000',937)),//El Mesrane
"938"  => html::color(html::equincommune1('17000',938)),//Hassi el Mora
"939"  => html::color(html::equincommune1('17000',939)),//zaafrane
"940"  => html::color(html::equincommune1('17000',940)),//hassi el euche
"941"  => html::color(html::equincommune1('17000',941)),//ain maabed
"942"  => html::color(html::equincommune1('17000',942)),//darchioukh
"943"  => html::color(html::equincommune1('17000',943)),//Guendouza
"944"  => html::color(html::equincommune1('17000',944)),//El Oguila
"945"  => html::color(html::equincommune1('17000',945)),//El Merdja
"946"  => html::color(html::equincommune1('17000',946)),//mliliha
"947"  => html::color(html::equincommune1('17000',947)),//sidibayzid
"948"  => html::color(html::equincommune1('17000',948)),//Messad
"949"  => html::color(html::equincommune1('17000',949)),//Abdelmadjid
"950"  => html::color(html::equincommune1('17000',950)),//Haniet Ouled Salem
"951"  => html::color(html::equincommune1('17000',951)),//Guettara
"952"  => html::color(html::equincommune1('17000',952)),//Deldoul
"953"  => html::color(html::equincommune1('17000',953)),//Sed Rahal
"954"  => html::color(html::equincommune1('17000',954)),//Selmana
"955"  => html::color(html::equincommune1('17000',955)),//El Gahra
"956"  => html::color(html::equincommune1('17000',956)),//Oum Laadham
"957"  => html::color(html::equincommune1('17000',957)),//Mouadjebar
"958"  => html::color(html::equincommune1('17000',958)),//Ain el Ibel
"959"  => html::color(html::equincommune1('17000',959)),//Amera
"960"  => html::color(html::equincommune1('17000',960)),//N'thila
"961"  => html::color(html::equincommune1('17000',961)),//Oued Seddeur
"962"  => html::color(html::equincommune1('17000',962)),//Zaccar
"963"  => html::color(html::equincommune1('17000',963)),//Douis
"964"  => html::color(html::equincommune1('17000',964)),//Ain Chouhada
"965"  => html::color(html::equincommune1('17000',965)),//Tadmit
"966"  => html::color(html::equincommune1('17000',966)),//El Hiouhi
"967"  => html::color(html::equincommune1('17000',967)),//Faidh el Botma
"968"  => html::color(html::equincommune1('17000',968)) //Amourah
);

?>
<?xml version='1.0' encoding='utf-8'?> 
<svg xmlns:cc="http://web.resource.org/cc/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
     xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
     xmlns:svg="http://www.w3.org/2000/svg"
     xmlns="http://www.w3.org/2000/svg"	 
	 width=100% height="700"
	 y="250"
     onload="init(evt)"> 
	 
	<rect 
	x="0" xy="20"
	y="0"  ry="20"
	width=100%
	height="620"
	fill = "<?php echo "#FBEFEF";?>"
	/>

<script type="text/ecmascript"> 
<![CDATA[

	function init(evt) {
	    if ( window.svgDocument == null ) {
	      svgDocument = evt.target.ownerDocument;
	    }
   		
  	}
  
	function displayName(name) {
    	svgDocument.getElementById('country_name').firstChild.data = name;
	}
	function notify(n,url){
	location.href="http://"+url+"/femg/dashboard/SIG/"+n
	}
	
	function notifya(url){
	location.href="http://"+url+"/femg/dashboard/SIGA/"
	}
  
]]>
</script>	
<text class="label" id="country_name1" x="20" y="30">Repartition Des deces</text>  	  
<text class="label" id="country_name1" x="20" y="47">Commune de residence </text>  	  
     <g
     inkscape:groupmode="layer"
     id=""
     inkscape:label="Wilayas polygons"
     transform="translate(+180,+50)"
     style="display:inline">
	 
	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Mlaaba')" onclick="notify()"	
	d="M21,81 11,81 7,88 7,96  6,109  10,111 7,119 2,125  2,131 12,147     16,145  21,150  25,146  26,137 26,130  28,118  33,116  34,111 37,105  42,103 39,99 37,91 32,94 24,93 21,81"/> 

	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Sidi- lantri')" onclick="notify()"	
	d="M47,106  52,105 54,101 59,100 66,100 72,102 75,105  78,109 74,109 74,113 77,119  80,126  78,131 76,137 69,138 64,133 53,132  50,126  45,129  39,127  36,122  32,117 34,111   37,105 42,103   47,106"/> 

	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Lardjem')" onclick="notify()"	
	d="M87,127 92,129 97,130 98,125 98,118 95,113 97,110 94,107 99,100 96,96 93,97 92,92 87,92 82,91 82,84 85,78 85,71 88,68 87,63 87,58 84,55 81,51 77,59 72,60 67,59 63,55 57,53 52,51 47,51 42,52 39,55  43,60 40,64 36,68 41,71 47,74 44,79 41,84 37,91 39,99 42,103 47,106 52,105 54,101 59,100 66,100 72,102 75,106 78,109 74,109 74,113 77,119 80,126 87,127"/> 

	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Maalcem')" onclick="notify()"	
	d="M97,135 94,141 91,147 93,154 89,151 87,155 84,151 82,157 75,158 70,155 70,145 68,142 69,138 76,137 78,131 80,125 87,127 92,129 97,129  97,135"/> 

	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Ammari')" onclick="notify()"	
	d="M103,125 109,126 113,130 119,136 124,140 130,143 129,150 129,156 128,162  127,166 122,165 123,173 119,177 112,177 107,175 103,169 97,164 96,158 93,154 91,147 94,141 97,135 97,130 98,125 103,125"/> 

	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Sidi abed')" onclick="notify()"	
	d="M101,97  100,92 104,91 108,93 110,97 115,100 120,99 126,100 134,101 140,105 138,110  139,121 144,124 140,127 139,134 140,140 136,144 130,144 124,141 119,136 113,131 109,126 103,125 98,125 98,118 95,113 97,110 94,107 99,100  101,97"/> 

	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Tamalaht')" onclick="notify()"	
	d="M93,70 97,71 102,73 106,78 110,77 112,83 112,89  104,91 100,92 101,97 99,100 96,95 93,97 92,92 87,92 82,91 82,83 85,78 84,71 88,69  93,70"/> 
	
	<path 
	fill = "<?php echo $data['927'];?>" stroke="black" onmouseover="displayName('Larbaa')" onclick="notify()"	
	d="M38,50  41,45 45,41 41,36 45,36 47,32 49,36 52,32 56,35 60,33 64,30 69,28 71,33 71,39 74,46 76,52 81,56 77,58 72,59 67,58 63,55 57,52 52,51 47,51 42,52 39,54 38,50"/> 
	
	
	</g>
<text class="labelm" id="country_namem" x="600" y="35" onclick="notifya('<?php echo $_SERVER['SERVER_NAME'];?>')"      >Algerie</text>		
<text class="label" id="country_name" x="20" y="65"       >Commune de tissemssilet</text>	
<g id="key" class="label">
<rect x="10" y="250" width="20" height="20" class="key colour0" /><text x="35" y="265">0</text>
<rect x="10" y="275" width="20" height="20" class="key colour1" /><text x="35" y="290">1 to 10</text>
<rect x="10" y="300" width="20" height="20" class="key colour2" /><text x="35" y="315">11 to 100</text>
<rect x="10" y="325" width="20" height="20" class="key colour3" /><text x="35" y="340">101 to 1000</text>
<rect x="10" y="350" width="20" height="20" class="key colour4" /><text x="35" y="365">1001+</text>
</g> 
</svg>
</div>	
<div class="contenth"><img id="image" src="<?php echo URL;?>public/images/sigh.jpg" ></div>	
<div class="content"><img id="image" src="<?php echo URL;?>public/images/sig.png" ></div>
<div class="contentb"><img id="image" src="<?php echo URL;?>public/images/sigh.jpg" ></div>
<div class="contentr"><img id="image" src="<?php echo URL;?>public/images/<?php echo logo;?>"></div>	
<div class="scontentr1"><?php echo "";echo dsp; echo "";?></div>		