<?php $this->load->view("header")?>
<div id="UpdateProgress" style="display:none;">
	
                        <div id="overlay">
                <div id="modalprogress">
                    <div id="theprogress">
                        <img id="Image1" src="img/progress.gif" alt="Processing" style="width:230px;border-width:0px;" /><br />
                        Please wait...</div></div></div>
                    
</div>	
                
                    <div id="upd2">
				
  <!-- Data Tables Stripped & Bordered Section START -->
<div class="section-block">
	<div class="container">
		<div class="row">
		
			<div class="col-md-10 col-sm-12 col-12 offset-md-1">
				<div class="small-heading center-holder mb-40">
					<span class="uppercase">Registration Form</span>
				</div>	
				
				<div class="table-responsive">		
				
                    <center>
					
					<table>
					<tr>
					<td colspan="7"><div id="ValidationSummary1" style="color:Red;background-color:#FFAEAE;border-width:1px;border-style:Solid;font-weight:bold;display:none;">

	</div></td>
					</tr>
					<tr>
					<td colspan="7"><span id="lblerror" style="color:Red;font-weight:bold;"></span></td>
					</tr>
					<tr>
					<td bgcolor="#70E075" colspan="3" style="padding: 5px"><b>Sponsor Details</b></td>
					
					
					</tr>
					<tr>
					<td style="padding: 5px">Date</td>
					<td></td>
					<td style="padding: 5px">
                        <span id="lbljndate">16/10/2019</span>
                        </td>
					
					</tr>
					<tr>
					<td style="padding: 5px">Sponsor ID</td>
					<td></td>
					<td style="padding: 5px">
                        <input name="txtspid" type="text" onchange="javascript:setTimeout('__doPostBack(\'txtspid\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtspid" tabindex="1" style="border-width:1px;border-style:solid;" /><span id="RequiredFieldValidator1" style="color:Red;visibility:hidden;">*</span>
                        </td>
					</tr>
					<tr>
					<td style="padding: 5px">UpLine ID</td>
					<td></td>
					<td style="padding: 5px">
                        <input name="txtupid" type="text" onchange="javascript:setTimeout('__doPostBack(\'txtupid\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtupid" tabindex="1" style="border-width:1px;border-style:solid;" /><span id="RequiredFieldValidator5" style="color:Red;visibility:hidden;">*</span>
                        </td>
					</tr>
					
					<tr>
					<td style="padding: 5px">Position</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <select name="txtlr" id="txtlr" tabindex="3" style="width:50px;">
		<option value="L">L</option>
		<option value="R">R</option>

	</select></td>
					
					</tr>
					<tr>
					<td style="padding: 5px">PIN No.</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtpin" type="text" maxlength="10" id="txtpin" tabindex="4" style="border-width:1px;border-style:solid;" />
                        <span id="RequiredFieldValidator6" style="color:Red;visibility:hidden;">*</span>
					
					</tr>
					<tr>
					<td style="padding: 5px">Product</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <select name="txtproduct" id="txtproduct" tabindex="3">
		<option value="32 Inch LED TV">32 Inch LED TV</option>
		<option value="Invertor Battery">Invertor Battery</option>

	</select></td>
					
					</tr>
					<tr>
					<td bgcolor="#70E075" colspan="3"><b style="padding: 5px">Personal Details</b></td>
					
					</tr>
					<tr>
					<td style="padding: 5px">Name</td>
					<td></td>
					<td style="padding: 5px">
                        <input name="txtname" type="text" maxlength="100" id="txtname" tabindex="4" style="border-width:1px;border-style:solid;width:300px;" />
                        <span id="RequiredFieldValidator2" style="color:Red;visibility:hidden;">*</span>
                        </td>
					
				
					</tr>
					<tr>
					<td style="padding: 5px">Father / Husband Name</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtfname" type="text" maxlength="50" id="txtfname" tabindex="5" style="border-width:1px;border-style:solid;width:300px;" />
                        </td>
					
					
					</tr>
					<tr>
					<td style="padding: 5px">Age</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtage" type="text" maxlength="3" id="txtage" tabindex="6" onkeypress="return onlyNumbers();" style="border-width:1px;border-style:solid;width:50px;" /></td>
					
					
					</tr>
					<tr>
					<td style="padding: 5px">Address</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <textarea name="txtaddress" rows="2" cols="20" id="txtaddress" tabindex="7" style="border-width:1px;border-style:solid;width:300px;"></textarea>
                        </td>
					
					
					</tr>
					<tr>
					<td style="padding: 5px">District</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        
                            <select name="txtcity" onchange="javascript:setTimeout('__doPostBack(\'txtcity\',\'\')', 0)" id="txtcity" tabindex="8" style="width:250px;">
		<option selected="selected" value="">-Select-</option>
		<option value="AGRA">AGRA</option>
		<option value="AGRA MALWA">AGRA MALWA</option>
		<option value="AHMEDABAD">AHMEDABAD</option>
		<option value="AIZAWL">AIZAWL</option>
		<option value="AJMER">AJMER</option>
		<option value="ALIGHARH">ALIGHARH</option>
		<option value="ALIPURDUAR">ALIPURDUAR</option>
		<option value="ALIRAJPUR">ALIRAJPUR</option>
		<option value="ALLAHABAD">ALLAHABAD</option>
		<option value="ALMORA">ALMORA</option>
		<option value="ALWER">ALWER</option>
		<option value="AMBEDKAR NAGAR">AMBEDKAR NAGAR</option>
		<option value="AMETHI">AMETHI</option>
		<option value="AMRELI">AMRELI</option>
		<option value="AMROHA">AMROHA</option>
		<option value="ANAND">ANAND</option>
		<option value="ANGUL">ANGUL</option>
		<option value="ANUPPUR">ANUPPUR</option>
		<option value="ARARIA">ARARIA</option>
		<option value="ARAVALLI">ARAVALLI</option>
		<option value="ARWAL">ARWAL</option>
		<option value="ASHOKNAGAR">ASHOKNAGAR</option>
		<option value="AURAIYA">AURAIYA</option>
		<option value="AURANGABAD">AURANGABAD</option>
		<option value="AZAMGARH">AZAMGARH</option>
		<option value="BADAUN">BADAUN</option>
		<option value="BAGESHWAR">BAGESHWAR</option>
		<option value="BAGHPAT">BAGHPAT</option>
		<option value="BAHRAICH">BAHRAICH</option>
		<option value="BAIRAMPUR">BAIRAMPUR</option>
		<option value="BALAGHAT">BALAGHAT</option>
		<option value="BALANGIR">BALANGIR</option>
		<option value="BALASORE(BALESWER)">BALASORE(BALESWER)</option>
		<option value="BALLIA">BALLIA</option>
		<option value="BANASKANTHA">BANASKANTHA</option>
		<option value="BANDA">BANDA</option>
		<option value="BANKA">BANKA</option>
		<option value="BANKURA">BANKURA</option>
		<option value="BANSWARA">BANSWARA</option>
		<option value="BARABANKI">BARABANKI</option>
		<option value="BARAN">BARAN</option>
		<option value="BAREILLY">BAREILLY</option>
		<option value="BARGARH">BARGARH</option>
		<option value="BARMER">BARMER</option>
		<option value="BARWANI">BARWANI</option>
		<option value="BASTI">BASTI</option>
		<option value="BEGUSARAI">BEGUSARAI</option>
		<option value="BETUL">BETUL</option>
		<option value="BHADRAK">BHADRAK</option>
		<option value="BHAGALPUR">BHAGALPUR</option>
		<option value="BHARATPUR">BHARATPUR</option>
		<option value="BHARUCH">BHARUCH</option>
		<option value="BHAVNAGAR">BHAVNAGAR</option>
		<option value="BHILWARA">BHILWARA</option>
		<option value="BHIND">BHIND</option>
		<option value="BHOJPUR">BHOJPUR</option>
		<option value="BHOPAL">BHOPAL</option>
		<option value="BIJNOR">BIJNOR</option>
		<option value="BIKANER">BIKANER</option>
		<option value="BIRBHUM">BIRBHUM</option>
		<option value="BISHNUPUR">BISHNUPUR</option>
		<option value="BOTAD">BOTAD</option>
		<option value="BOUDH (BAUDH)">BOUDH (BAUDH)</option>
		<option value="BULANDSHAHR">BULANDSHAHR</option>
		<option value="BUNDI">BUNDI</option>
		<option value="BURHANPUR">BURHANPUR</option>
		<option value="BUXAR">BUXAR</option>
		<option value="CENTRAL DELHI">CENTRAL DELHI</option>
		<option value="CHAMOLI">CHAMOLI</option>
		<option value="CHAMPAWAT">CHAMPAWAT</option>
		<option value="CHAMPHAI">CHAMPHAI</option>
		<option value="CHANDAULI">CHANDAULI</option>
		<option value="CHANDEL">CHANDEL</option>
		<option value="CHEMBUR">CHEMBUR</option>
		<option value="CHHATARPUR">CHHATARPUR</option>
		<option value="CHHINDWARA">CHHINDWARA</option>
		<option value="CHHOTA UDAIPUR">CHHOTA UDAIPUR</option>
		<option value="CHITRAKOOT">CHITRAKOOT</option>
		<option value="CHITTAURGARH">CHITTAURGARH</option>
		<option value="CHURACHANDPUR">CHURACHANDPUR</option>
		<option value="CHURU">CHURU</option>
		<option value="COOCH BEHAR">COOCH BEHAR</option>
		<option value="CUTTACK">CUTTACK</option>
		<option value="DAHOD">DAHOD</option>
		<option value="DAKSHIN DINAJPUR">DAKSHIN DINAJPUR</option>
		<option value="DAMOH">DAMOH</option>
		<option value="DANG">DANG</option>
		<option value="DARBHANGA">DARBHANGA</option>
		<option value="DARJEELING">DARJEELING</option>
		<option value="DATIA">DATIA</option>
		<option value="DAUSA">DAUSA</option>
		<option value="DEHRADUN">DEHRADUN</option>
		<option value="DEOGARH(DEBAGARH)">DEOGARH(DEBAGARH)</option>
		<option value="DEORIA">DEORIA</option>
		<option value="DEVBHOOMI DWARKA">DEVBHOOMI DWARKA</option>
		<option value="DEWAS">DEWAS</option>
		<option value="DHALAI">DHALAI</option>
		<option value="DHAR">DHAR</option>
		<option value="DHAULPUR">DHAULPUR</option>
		<option value="DHENKANAL">DHENKANAL</option>
		<option value="DIMAPUR">DIMAPUR</option>
		<option value="DINDORI">DINDORI</option>
		<option value="DUNGARPUR">DUNGARPUR</option>
		<option value="EAST CHAMPARAN">EAST CHAMPARAN</option>
		<option value="EAST DELHI">EAST DELHI</option>
		<option value="EAST GARO HILLS">EAST GARO HILLS</option>
		<option value="EAST JAINTIA HILLS">EAST JAINTIA HILLS</option>
		<option value="EAST KHASI HILLS">EAST KHASI HILLS</option>
		<option value="EAST SIKKIM ">EAST SIKKIM </option>
		<option value="ETAH">ETAH</option>
		<option value="ETAWAH">ETAWAH</option>
		<option value="FAIZABAD">FAIZABAD</option>
		<option value="FARRUKHABAD">FARRUKHABAD</option>
		<option value="FATEHPUR">FATEHPUR</option>
		<option value="FIROZABAD">FIROZABAD</option>
		<option value="GAJAPATI">GAJAPATI</option>
		<option value="GANDHINAGAR">GANDHINAGAR</option>
		<option value="GANGANAGAR">GANGANAGAR</option>
		<option value="GANJAM">GANJAM</option>
		<option value="GAUTAM BUDDHA NAGAR">GAUTAM BUDDHA NAGAR</option>
		<option value="GAYA">GAYA</option>
		<option value="GHAZIABAD">GHAZIABAD</option>
		<option value="GHAZIPUR">GHAZIPUR</option>
		<option value="GIR SOMNATH">GIR SOMNATH</option>
		<option value="GOMATI">GOMATI</option>
		<option value="GOMTINAGAR">GOMTINAGAR</option>
		<option value="GONDA">GONDA</option>
		<option value="GOPALGANJ">GOPALGANJ</option>
		<option value="Gorakhpur">Gorakhpur</option>
		<option value="GUNA">GUNA</option>
		<option value="GWALIOR">GWALIOR</option>
		<option value="HAMIRPUR">HAMIRPUR</option>
		<option value="HANUMANGARH">HANUMANGARH</option>
		<option value="HAPUR">HAPUR</option>
		<option value="HARDA">HARDA</option>
		<option value="HARDOR">HARDOR</option>
		<option value="HARIDWAR">HARIDWAR</option>
		<option value="HATHRAS">HATHRAS</option>
		<option value="HOOGHLY">HOOGHLY</option>
		<option value="HOSHANGABAD">HOSHANGABAD</option>
		<option value="HOWRAH">HOWRAH</option>
		<option value="IMPHAL EAST">IMPHAL EAST</option>
		<option value="IMPHAL WEST">IMPHAL WEST</option>
		<option value="INDORE">INDORE</option>
		<option value="JABALPUR">JABALPUR</option>
		<option value="JAGATSINGAPUR">JAGATSINGAPUR</option>
		<option value="JAIPUR">JAIPUR</option>
		<option value="JAISALMER">JAISALMER</option>
		<option value="JAJPUR">JAJPUR</option>
		<option value="JALAUN">JALAUN</option>
		<option value="JALOR">JALOR</option>
		<option value="JALPAI GURI">JALPAI GURI</option>
		<option value="JAMNAGAR">JAMNAGAR</option>
		<option value="JAMSHEDPUR">JAMSHEDPUR</option>
		<option value="JAMUI">JAMUI</option>
		<option value="JAUNPUR">JAUNPUR</option>
		<option value="JEHANABAD">JEHANABAD</option>
		<option value="JHABUA">JHABUA</option>
		<option value="JHALAWAR">JHALAWAR</option>
		<option value="JHANSI">JHANSI</option>
		<option value="JHARGRAM">JHARGRAM</option>
		<option value="JHARSUGUDA">JHARSUGUDA</option>
		<option value="JHUNJHUNUN">JHUNJHUNUN</option>
		<option value="JODHPUR">JODHPUR</option>
		<option value="JUNAGADH">JUNAGADH</option>
		<option value="KACHCHH">KACHCHH</option>
		<option value="KAIMUR">KAIMUR</option>
		<option value="KALAHANDI">KALAHANDI</option>
		<option value="KALIMPONG">KALIMPONG</option>
		<option value="KANDHAMAL">KANDHAMAL</option>
		<option value="KANNAUJ">KANNAUJ</option>
		<option value="KANPUR DEHAT">KANPUR DEHAT</option>
		<option value="KANPUR NAGAR">KANPUR NAGAR</option>
		<option value="KARAULI">KARAULI</option>
		<option value="KARNAL">KARNAL</option>
		<option value="KASGANJ">KASGANJ</option>
		<option value="KATIHAR">KATIHAR</option>
		<option value="KATNI">KATNI</option>
		<option value="KAUSHAMBI">KAUSHAMBI</option>
		<option value="KENDRAPARA">KENDRAPARA</option>
		<option value="KEONJHAR(KENDUJHAR)">KEONJHAR(KENDUJHAR)</option>
		<option value="KHAGARIA">KHAGARIA</option>
		<option value="KHANDWA">KHANDWA</option>
		<option value="KHARGONE">KHARGONE</option>
		<option value="KHEDA">KHEDA</option>
		<option value="KHORDHA">KHORDHA</option>
		<option value="KHOWAI">KHOWAI</option>
		<option value="KIPHIRE">KIPHIRE</option>
		<option value="KISHANGANJ">KISHANGANJ</option>
		<option value="KOHIMA">KOHIMA</option>
		<option value="KOLKATA">KOLKATA</option>
		<option value="KOLOSIB">KOLOSIB</option>
		<option value="KORAPUT">KORAPUT</option>
		<option value="KOTA">KOTA</option>
		<option value="Kushinagar">Kushinagar</option>
		<option value="LAKHIMPUR KHERI">LAKHIMPUR KHERI</option>
		<option value="LAKHISARAI">LAKHISARAI</option>
		<option value="LALITPUR">LALITPUR</option>
		<option value="LAWNGTLAI">LAWNGTLAI</option>
		<option value="LONGLENG">LONGLENG</option>
		<option value="LUCKNOW">LUCKNOW</option>
		<option value="ludhiyana">ludhiyana</option>
		<option value="LUNGLEI">LUNGLEI</option>
		<option value="MADHEPURA">MADHEPURA</option>
		<option value="MADHUBANI">MADHUBANI</option>
		<option value="MAHARAJGANJ">MAHARAJGANJ</option>
		<option value="MAHESANA">MAHESANA</option>
		<option value="MAHISAGAR">MAHISAGAR</option>
		<option value="MAHOBA">MAHOBA</option>
		<option value="MAINPURI">MAINPURI</option>
		<option value="MALDA">MALDA</option>
		<option value="MALKANGIRI">MALKANGIRI</option>
		<option value="MAMIT">MAMIT</option>
		<option value="MANDLA">MANDLA</option>
		<option value="MANDSAUR">MANDSAUR</option>
		<option value="MATHURA">MATHURA</option>
		<option value="MAU">MAU</option>
		<option value="MAYURBHANG">MAYURBHANG</option>
		<option value="MEERUT">MEERUT</option>
		<option value="MEHSANA">MEHSANA</option>
		<option value="MIRZAPUR">MIRZAPUR</option>
		<option value="MOKOKCHUNG">MOKOKCHUNG</option>
		<option value="MON">MON</option>
		<option value="MORADABAD">MORADABAD</option>
		<option value="MORBI">MORBI</option>
		<option value="MORENA">MORENA</option>
		<option value="MUNGER">MUNGER</option>
		<option value="MURSHIDABAD">MURSHIDABAD</option>
		<option value="MUZAFFARNAGAR">MUZAFFARNAGAR</option>
		<option value="MUZAFFARPUR">MUZAFFARPUR</option>
		<option value="NABARANGPUR">NABARANGPUR</option>
		<option value="NADIA">NADIA</option>
		<option value="NAGAUR">NAGAUR</option>
		<option value="NAINITAL">NAINITAL</option>
		<option value="NALANDA">NALANDA</option>
		<option value="NARMADA">NARMADA</option>
		<option value="NARSINGHPUR">NARSINGHPUR</option>
		<option value="NAVSARI">NAVSARI</option>
		<option value="NAWADA">NAWADA</option>
		<option value="NAYAGARH">NAYAGARH</option>
		<option value="NEEMUCH">NEEMUCH</option>
		<option value="NEW DELHI">NEW DELHI</option>
		<option value="NORTH 24 PARGANAS">NORTH 24 PARGANAS</option>
		<option value="NORTH DELHI">NORTH DELHI</option>
		<option value="NORTH EAST DELHI">NORTH EAST DELHI</option>
		<option value="NORTH GARO HILLS">NORTH GARO HILLS</option>
		<option value="NORTH GOA">NORTH GOA</option>
		<option value="NORTH SIKKIM">NORTH SIKKIM</option>
		<option value="NORTH TRIPURA">NORTH TRIPURA</option>
		<option value="NORTH WEST DELHI">NORTH WEST DELHI</option>
		<option value="NUAPADA">NUAPADA</option>
		<option value="PALI">PALI</option>
		<option value="PANCHMAHAL">PANCHMAHAL</option>
		<option value="PANNA">PANNA</option>
		<option value="PASCHIM BARDHAMAN">PASCHIM BARDHAMAN</option>
		<option value="PASHCHIM MEDI NIPUR">PASHCHIM MEDI NIPUR</option>
		<option value="PATAN">PATAN</option>
		<option value="PATNA">PATNA</option>
		<option value="PAUDI">PAUDI</option>
		<option value="PEREN">PEREN</option>
		<option value="PHEK">PHEK</option>
		<option value="PILIBHIT">PILIBHIT</option>
		<option value="PITHORAGARH">PITHORAGARH</option>
		<option value="PORBANDAR">PORBANDAR</option>
		<option value="PRATAP GARH">PRATAP GARH</option>
		<option value="PRATAPGARH">PRATAPGARH</option>
		<option value="PURBA BARDHAMAN">PURBA BARDHAMAN</option>
		<option value="PURBO MEDINIPUR">PURBO MEDINIPUR</option>
		<option value="PURI">PURI</option>
		<option value="PURNIA">PURNIA</option>
		<option value="PURULIA">PURULIA</option>
		<option value="RAEBARELI">RAEBARELI</option>
		<option value="RAISEN">RAISEN</option>
		<option value="RAJGAR">RAJGAR</option>
		<option value="RAJKOT">RAJKOT</option>
		<option value="RAJSAMAND">RAJSAMAND</option>
		<option value="RAMPUR">RAMPUR</option>
		<option value="RATLAM">RATLAM</option>
		<option value="RAYAGADA">RAYAGADA</option>
		<option value="REWA">REWA</option>
		<option value="RI-BHOI">RI-BHOI</option>
		<option value="ROHTAS">ROHTAS</option>
		<option value="RUDRAPRAYAG">RUDRAPRAYAG</option>
		<option value="SABARKANTHA">SABARKANTHA</option>
		<option value="SAGAR">SAGAR</option>
		<option value="SAHARANPUR">SAHARANPUR</option>
		<option value="SAHARSA">SAHARSA</option>
		<option value="SAIHA">SAIHA</option>
		<option value="SAMASTIPUR">SAMASTIPUR</option>
		<option value="SAMBALPUR">SAMBALPUR</option>
		<option value="SAMBHAL">SAMBHAL</option>
		<option value="SANT KABIR NAGAR">SANT KABIR NAGAR</option>
		<option value="SANT RAVIDAS NAGAR">SANT RAVIDAS NAGAR</option>
		<option value="SARAN">SARAN</option>
		<option value="SATNA">SATNA</option>
		<option value="SAWAI MADHOPUR">SAWAI MADHOPUR</option>
		<option value="SEHORE">SEHORE</option>
		<option value="SENAPATI">SENAPATI</option>
		<option value="SEONI">SEONI</option>
		<option value="SERCHHIP">SERCHHIP</option>
		<option value="SHAHDARA">SHAHDARA</option>
		<option value="SHAHDOL">SHAHDOL</option>
		<option value="SHAHJAHANPUR">SHAHJAHANPUR</option>
		<option value="SHAJPUR">SHAJPUR</option>
		<option value="SHAMLI">SHAMLI</option>
		<option value="SHEIKHPURA">SHEIKHPURA</option>
		<option value="SHEOHAR">SHEOHAR</option>
		<option value="SHEOPUR">SHEOPUR</option>
		<option value="SHIVPURI">SHIVPURI</option>
		<option value="SHRAVASTI">SHRAVASTI</option>
		<option value="Siddharth Nagar">Siddharth Nagar</option>
		<option value="SIDHI">SIDHI</option>
		<option value="SIKAR">SIKAR</option>
		<option value="SINGRAULI">SINGRAULI</option>
		<option value="SIPAHIJALA">SIPAHIJALA</option>
		<option value="SIROHI">SIROHI</option>
		<option value="SITAMARHI">SITAMARHI</option>
		<option value="SITAPUR">SITAPUR</option>
		<option value="SIWAN">SIWAN</option>
		<option value="SONBHADRA">SONBHADRA</option>
		<option value="SOUTH 24 PARGANA">SOUTH 24 PARGANA</option>
		<option value="SOUTH DELHI">SOUTH DELHI</option>
		<option value="SOUTH EAST DELHI">SOUTH EAST DELHI</option>
		<option value="SOUTH GARO HILLS">SOUTH GARO HILLS</option>
		<option value="SOUTH GOA">SOUTH GOA</option>
		<option value="SOUTH SIKKIM">SOUTH SIKKIM</option>
		<option value="SOUTH TRIPURA">SOUTH TRIPURA</option>
		<option value="SOUTH WEST DELHI">SOUTH WEST DELHI</option>
		<option value="SOUTH WEST GARO HILLS">SOUTH WEST GARO HILLS</option>
		<option value="SOUTH WEST KHASI HILLS">SOUTH WEST KHASI HILLS</option>
		<option value="SUBARNAPUR">SUBARNAPUR</option>
		<option value="SULTANPUR">SULTANPUR</option>
		<option value="SUNDARGARH">SUNDARGARH</option>
		<option value="SUPAUL">SUPAUL</option>
		<option value="SURAT">SURAT</option>
		<option value="SURENDRANAGAR">SURENDRANAGAR</option>
		<option value="TAMENGLONG">TAMENGLONG</option>
		<option value="TAPI">TAPI</option>
		<option value="TEHRI">TEHRI</option>
		<option value="THOUBAL">THOUBAL</option>
		<option value="TIKAMGARH">TIKAMGARH</option>
		<option value="TONK">TONK</option>
		<option value="TUENSANG">TUENSANG</option>
		<option value="UDAIPUR">UDAIPUR</option>
		<option value="UDHAM SINGH NAGAR">UDHAM SINGH NAGAR</option>
		<option value="UJJAIN">UJJAIN</option>
		<option value="UKHRUL">UKHRUL</option>
		<option value="UMARIA">UMARIA</option>
		<option value="UNAKOTI">UNAKOTI</option>
		<option value="UNNAO">UNNAO</option>
		<option value="UTTAR DINAJPUR">UTTAR DINAJPUR</option>
		<option value="UTTARKASHI">UTTARKASHI</option>
		<option value="VADODARA">VADODARA</option>
		<option value="VAISHALI">VAISHALI</option>
		<option value="VALSAD">VALSAD</option>
		<option value="VARANASI">VARANASI</option>
		<option value="VIDISHA">VIDISHA</option>
		<option value="WEST CHAMPARAN">WEST CHAMPARAN</option>
		<option value="WEST DELHI">WEST DELHI</option>
		<option value="WEST GARO HILLS">WEST GARO HILLS</option>
		<option value="WEST JAINTIA HILLS">WEST JAINTIA HILLS</option>
		<option value="WEST KHASI HILLS">WEST KHASI HILLS</option>
		<option value="WEST SIKKIM">WEST SIKKIM</option>
		<option value="WEST TRIPURA">WEST TRIPURA</option>
		<option value="WOKHA">WOKHA</option>
		<option value="ZUNHEBOTO">ZUNHEBOTO</option>

	</select>
                        
                        </td>
					
					</tr>
					<tr>
					<td style="padding: 5px">State</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        
                            <span id="lblstate">Label</span>
                        
                        </td>
					
					</tr>
					<tr>
					<td style="padding: 5px">PAN Card No.</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtpanno" type="text" maxlength="10" id="txtpanno" tabindex="9" style="border-width:1px;border-style:solid;" /></td>
					
					</tr>
					<tr>
					<td style="padding: 5px">Aadhar No.</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtadhar" type="text" maxlength="12" id="txtadhar" tabindex="10" style="border-width:1px;border-style:solid;" /></td>
					
					</tr>
					<tr>
					<td style="padding: 5px">Mobile</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtmobile" type="text" maxlength="10" id="txtmobile" tabindex="11" onkeypress="return onlyNumbers();" style="border-width:1px;border-style:solid;" /></td>
					
					</tr>
					<tr>
					<td style="padding: 5px">E-mail</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtemail" type="text" maxlength="30" id="txtemail" tabindex="12" style="border-width:1px;border-style:solid;width:300px;" /></td>
					</tr>
					<tr>
					<td>ID</td>
					<td>&nbsp;</td>
					<td>
                        <span id="LBLID" style="display:inline-block;width:100px;"></span>
                        </td>
					</tr>
					<tr>
					<td bgcolor="#70E075" colspan="3" style="padding: 5px">
                        <b>Bank Details</b></td>
					</tr>
					<tr>
					<td style="padding: 5px">
                        Bank Name</td>
					<td>
                        &nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtbankname" type="text" maxlength="50" id="txtbankname" tabindex="13" style="border-width:1px;border-style:solid;width:300px;" /></td>
					</tr>
					<tr>
					<td style="padding: 5px">
                        Branch</td>
					<td>
                        &nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtbankbranch" type="text" maxlength="20" id="txtbankbranch" tabindex="15" style="border-width:1px;border-style:solid;width:300px;" /></td>
					</tr>
					<tr>
					<td style="padding: 5px">
                        Account No.</td>
					<td>
                        &nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtbankacno" type="text" maxlength="20" id="txtbankacno" tabindex="14" style="border-width:1px;border-style:solid;width:300px;" /></td>
					</tr>
					<tr>
					<td style="padding: 5px">
                        IFSC Code</td>
					<td>
                        &nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtbankifsc" type="text" maxlength="20" id="txtbankifsc" tabindex="16" style="border-width:1px;border-style:solid;width:300px;" /></td>
					</tr>
					<tr>
					<td bgcolor="#70E075" colspan="3" style="padding: 5px"><b>Nominee Details</b></td>
					
					</tr>
					<tr>
					<td style="padding: 5px">
                        Nominee Name</td>
					<td>
                        &nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtnom_name" type="text" maxlength="50" id="txtnom_name" tabindex="17" style="border-width:1px;border-style:solid;width:300px;" />
                        </td>
					</tr>
					<tr>
					<td style="padding: 5px">Relation</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <select name="txtnom_relation" id="txtnom_relation" tabindex="18" style="width:216px;">
		<option value="Spouse">Spouse</option>
		<option value="Son">Son</option>
		<option value="Daughter">Daughter</option>
		<option value="Mother">Mother</option>
		<option value="Father">Father</option>
		<option value="Brother">Brother</option>
		<option value="Sister">Sister</option>
		<option value="Other">Other</option>

	</select></td>
					</tr>
					<tr>
					<td style="padding: 5px">Password</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtpwd" type="password" maxlength="20" id="txtpwd" tabindex="19" style="border-width:1px;border-style:solid;width:250px;" />
                        <span id="RequiredFieldValidator3" style="color:Red;visibility:hidden;">*</span>
                        </td>
					</tr>
					<tr>
					<td style="padding: 5px">Confirm Password</td>
					<td>&nbsp;</td>
					<td style="padding: 5px">
                        <input name="txtcpwd" type="password" maxlength="50" id="txtcpwd" tabindex="20" style="border-width:1px;border-style:solid;width:250px;" />
                        <span id="RequiredFieldValidator4" style="color:Red;visibility:hidden;">*</span>
                        </td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td align="center" colspan="7" style="padding: 5px">Terms &amp; Conditions</td>
					</tr>
					<tr>
					<td align="center" colspan="7" style="padding: 5px"><textarea name="TXTRULES" rows="2" cols="20" id="TXTRULES" tabindex="21" class="textbox" style="height:119px;width:300px;">Terms &amp; Conditions of DYD .
                            for New Applicants / Entrants * The Applicants is 
required to read thoroughly and understand the terms and conditions, policies, 
procedures code of ethics and business opportunities of the company as given in 
the application/agreement form and from the website named www.dyd.in.net. 
The application/agreement form is considered as an authentic and legally binding 
document. The contract is between the applicant (herein after referred to as 
distributor) and DYD ; (herein after referred to as 
company). ** If the applicant agrees to adhere to and abide by the conditions 
mentioned hereunder and in the website named www.dyd.in.net, he/she 
shell become a distributor after a purchase of prescribed package from the 
Company by way of a crossed demand draft. 1. The applicant should have completed 
minimum 18 years of age and shall be competent to enter into contract as 
provided in the 'Indian Contract Act' 2. For joining as an independent 
distributor of the company, the applicant will have to make the prescribed 
payment towards distributorship fee by way of a crossed demand draft infavour of 
DYD, payable at Agra. 3. If the applicant is a 
Partnership firm/Private Limited company,then the applicant has to provide all 
necessary documents pertaining to the partnership during the registration of 
Distributorship. 4. While placing orders for any of the products available with 
the company, he/she will have to pay the cost of the product by way of crossed 
demand drafts infavour of DYD, payable at Agra. 5. The 
company under no circumstances will accept any payment in cash. 6. The company 
has not authorised any official, officer or distributor of the company to 
receive any amount in cash on behalf of the company towards the distributorship 
fee, or cost of products, as the case may be. 7. If anybody makes any payment in 
cash, it will be at his/her own risk and under no circumstances, will the 
company be answerable to such unauthorized cash payments. 8. The initial 
payments made by the applicant is towards enrolling as an independent 
distributor and the same is not refundable under any circumstances All the 
packages include the registration fee, the processing fee &amp; the administration 
costs. 9. The distributor will be eligible for incentives or income only as per 
the volume of business done by him that is also subject to the eligibility norms 
formulated by the company. The company does not assure any incentive or income 
to the distributor on merely account of his/her joining the company. 10. The 
independent distributor will not be a consumer, agent or employee of the company 
, His /her position being so, he/she cannot bind the company, in any manner nor 
he/she has any authority to bind the company or to represent or speak on behalf 
of the company. 11. The company will approve the distributorship by issuing an 
official receipt and an online registration, which will carry the password and 
an identification number Known as Permanent ID given by the company . This 
password Permanent ID have to be quoted by the distributor in all his/her 
transactions &amp; correspondence with the company. The Permanent ID once given 
cannot be altered at any later point of time. 12. The Company will, in no case, 
entertain any communication without Permanent ID. 13. The company will not 
entertain any request for any product/package made after six months of the date 
of acknowledgment of payment. 14. Trimming &amp; Admin charges will be deducted as 
company norms. TDS will be deducted as formulated by the Government. 15. In case 
of Partnership distributorship/ Distributorship in name of a firm, the private 
limited company distributor have to submit all relevant PARTNERSHIP DEEDS and 
the relevant MOU. 16. All individual distributors should adhere to Rules &amp; 
Regulations formed by the organization &amp; if any of the distributors is found 
guilty of not observing the same, then he/she will be terminated from the 
company. 17. The company reserves all rights to terminate a distributor. 18. 
Once a distributor is terminated, he/she cannot enter any of the Office Premises 
/meeting locations and his/her incentives/income/benefits will be stopped 
immediately. 19. The distributor shall bear true faith &amp; allegiance to the 
company &amp; shall uphold the integrity &amp; decorum of the company &amp; shall maintain 
good relations with other distributors &amp; other clients. 20. The distributor 
shall always behave &amp; act in a dignified manner befitting the status of a 
distributor of a reputed &amp; leading marketing company of the country. 21. The 
distributor shall not compel or induce or mislead any person with any false 
statement/promise to join the company or to purchase any product. 22. If any 
distributor found spreading rumor about the company &amp; misguiding the othe 
distributor will be terminated immedialely from the company. 23. The company 
will not be answerable for any promise, assurance given by any distributor to 
any person , unless it is in accordance with the approved business plans &amp; terms 
of the company. Hence, the applicant shall go through the website 
www.dyd.in.net and the brochures &amp; notices issued by the company. 
Through these company sources he/she will fully inform himself/herself on all 
these matters. 24. The applicant/distributor shall ensure that all the 
information /furnished to the company is correct &amp; properly entered . Any 
request for correction furnished by the distributor as to his/her sponsor or 
placement details will not be entertained, once payment statements are 
processed. 25. The company reserves the right to reject any distributorship/ 
application at its own discretion. 26. The company reserves the right to modify 
the terms &amp; conditions, products, schemes, business &amp; policies giving prior 
notice through our website &amp; www.dyd.in.net &amp; it will be binding on all 
distributors of the company. 27. The terms &amp; conditions within above mentioned 
shall be governed in accordance with the law in force in the territories of 
India. Disputes, if any arise shall be subject to the exclusive jurisdiction of 
the court of Agra. 28. If any dispute or difference arises between the parties 
here to touching the business or interpretation of any terms &amp; conditions or as 
to incentives, income etc.,relating to the business of the company, the same 
shall be referred to arbitration and the arbitration shall be governed by the 
Arbitration &amp; Cancelation Act, 1996.
                                </textarea></td>
					</tr>
					<tr>
					<td align="center" colspan="7" style="padding: 5px">
                        <input id="CheckBox1" type="checkbox" name="CheckBox1" tabindex="22" /><label for="CheckBox1">I have read and agree to the Terms & Conditions of DYD. </label>
                        </td>
					</tr>
					<tr>
					<td align="center" colspan="7" style="padding: 5px">
					    
                        <input type="submit" name="Button1" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="Button1" tabindex="23" class="btn btn-info" style="width:75px;" /></td>
                            
					</tr>
					</table>
					
					</center>						
					
				</div>			
			</div>
		</div>		
	</div>
</div>
<!-- Data Tables Stripped & Bordered Section END -->

</div>
    <div>    
        


<!-- Action Box START -->
<div class="action-box action-box-md grey-bg center-holder-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-12">
				<h3 class="bold">Business Plan</h3>
				<p>A great business opportunity to fulfil your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
				<a href="<?php echo base_url();?>assets/img/adlplan.pdf"  target="_blank" class="button-md primary-button">Read More</a>
				</div>
		</div>
	</div>
</div>


<?php echo $this->load->view("footer"); ?>