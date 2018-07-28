<div class="sheader1l"><p id="lacceuil"><?php echo "";echo $this->msg; echo "";?></p></div><div class="sheader1r"><p id="lsetup"><?php html::NAV();?></p></div>
<div class="sheader2l">Reseaux de prise en charge de la femme gestante algerienne </div>
<div class="sheader2r"></div>
<div class="contentl">
<marquee behavior="slide" direction="up" scrollamount="2">
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;Problème majeur de santé publique en Algérie </p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;Dénouement de la grossesse = évènement heureux</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;Parfois évènement dramatique </p>
<p><font color="#FF0000">**</font>&nbsp;&nbsp;&nbsp; Décès maternel et/ou fœtal  </p>
<p><font color="#FF0000">**</font>&nbsp;&nbsp;&nbsp; Complications maternelles Handicap néo natal </p>
<p><font color="#FF0000">**</font>&nbsp;&nbsp;&nbsp; Handicap néo natal </p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;L’accouchement est devenu une étape stressante </p>
<span class="import" onclick="show_popup('popup_upload')">Import CSV to MySQL</span>
</marquee>
 <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onclick="close_popup('popup_upload')">x</span>
            <h2>Upload CSV file</h2>
            <form action="import.php" method="post" enctype="multipart/form-data">
                <input type="file" name="csv_file" id="csv_file" class="file_input">
                <input type="submit" value="Upload file" id="upload_btn">
            </form>
        </div>
    </div>
	
<?php 
// html::mysqliconnect();
// echo "";
// echo dsp; 
// echo "";
?>	
	

	
	
</div>	
<div class="content"><img id="image" src="<?php echo URL;?>public/images/accueil.jpg"></div>
<div class="contentr"><img id="image" src="<?php echo URL;?>public/images/<?php echo logod;?>"></div>	
<div class="scontentl2"><?php echo ""; echo "***************";?></div>		
<div class="scontentl3"><?php html::rsc();?></div>
<div class="scontentr1"><?php echo "";echo dsp; echo "";?></div>		