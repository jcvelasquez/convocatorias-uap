
<!-- fila 1 final -->

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>DATOS PRINCIPALES </h4>
	</div>
</div>

<!-- fila 3 inicio -->
<div class="row">

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-globe-americas"></i></span></div>
			<select data-autosave="true" id="docNacionalidad" data-dbtable="docentes" data-dbpk="docenteId" name="docNacionalidad" class="form-control kt-selectpicker" data-dbtable="docentes" title="Ingrese el pais de nacimiento" data-style="btn-primary">
				<option value="">Seleccione su país</option>

				<?php $docNacionalidad = $docente['docNacionalidad']; ?>

				<option value="AF" <?= ($docNacionalidad=="AF")? "selected" : ""; ?>>Afghanistan</option>
				<option value="AX" <?= ($docNacionalidad=="AX")? "selected" : ""; ?>>Åland Islands</option>
				<option value="AL" <?= ($docNacionalidad=="AL")? "selected" : ""; ?>>Albania</option>
				<option value="DZ" <?= ($docNacionalidad=="DZ")? "selected" : ""; ?>>Algeria</option>
				<option value="AS" <?= ($docNacionalidad=="AS")? "selected" : ""; ?>>American Samoa</option>
				<option value="AD" <?= ($docNacionalidad=="AD")? "selected" : ""; ?>>Andorra</option>
				<option value="AD" <?= ($docNacionalidad=="AD")? "selected" : ""; ?>>Angola</option>
				<option value="AI" <?= ($docNacionalidad=="AI")? "selected" : ""; ?>>Anguilla</option>
				<option value="AQ" <?= ($docNacionalidad=="AQ")? "selected" : ""; ?>>Antarctica</option>
				<option value="AG" <?= ($docNacionalidad=="AG")? "selected" : ""; ?>>Antigua and Barbuda</option>
				<option value="AR" <?= ($docNacionalidad=="AR")? "selected" : ""; ?>>Argentina</option>
				<option value="AM" <?= ($docNacionalidad=="AM")? "selected" : ""; ?>>Armenia</option>
				<option value="AW" <?= ($docNacionalidad=="AW")? "selected" : ""; ?>>Aruba</option>
				<option value="AU" <?= ($docNacionalidad=="AU")? "selected" : ""; ?>>Australia</option>
				<option value="AT" <?= ($docNacionalidad=="AT")? "selected" : ""; ?>>Austria</option>
				<option value="AZ" <?= ($docNacionalidad=="AZ")? "selected" : ""; ?>>Azerbaijan</option>
				<option value="BS" <?= ($docNacionalidad=="BS")? "selected" : ""; ?>>Bahamas</option>
				<option value="BH" <?= ($docNacionalidad=="BH")? "selected" : ""; ?>>Bahrain</option>
				<option value="BD" <?= ($docNacionalidad=="BD")? "selected" : ""; ?>>Bangladesh</option>
				<option value="BB" <?= ($docNacionalidad=="BB")? "selected" : ""; ?>>Barbados</option>
				<option value="BY" <?= ($docNacionalidad=="BY")? "selected" : ""; ?>>Belarus</option>
				<option value="BE" <?= ($docNacionalidad=="BE")? "selected" : ""; ?>>Belgium</option>
				<option value="BZ" <?= ($docNacionalidad=="BZ")? "selected" : ""; ?>>Belize</option>
				<option value="BJ" <?= ($docNacionalidad=="BJ")? "selected" : ""; ?>>Benin</option>
				<option value="BM" <?= ($docNacionalidad=="BM")? "selected" : ""; ?>>Bermuda</option>
				<option value="BT" <?= ($docNacionalidad=="BT")? "selected" : ""; ?>>Bhutan</option>
				<option value="BO" <?= ($docNacionalidad=="BO")? "selected" : ""; ?>>Bolivia</option>
				<option value="BA" <?= ($docNacionalidad=="BA")? "selected" : ""; ?>>Bosnia y Herzegovina</option>
				<option value="BW" <?= ($docNacionalidad=="BW")? "selected" : ""; ?>>Botswana</option>
				<option value="BV" <?= ($docNacionalidad=="BV")? "selected" : ""; ?>>Bouvet Island</option>
				<option value="BR" <?= ($docNacionalidad=="BR")? "selected" : ""; ?>>Brazil</option>
				<option value="BN" <?= ($docNacionalidad=="BN")? "selected" : ""; ?>>Brunei Darussalam</option>
				<option value="BG" <?= ($docNacionalidad=="BG")? "selected" : ""; ?>>Bulgaria</option>
				<option value="BF" <?= ($docNacionalidad=="BF")? "selected" : ""; ?>>Burkina Faso</option>
				<option value="BI" <?= ($docNacionalidad=="BI")? "selected" : ""; ?>>Burundi</option>
				<option value="KH" <?= ($docNacionalidad=="KH")? "selected" : ""; ?>>Cambodia</option>
				<option value="CM" <?= ($docNacionalidad=="CM")? "selected" : ""; ?>>Cameroon</option>
				<option value="CA" <?= ($docNacionalidad=="CA")? "selected" : ""; ?>>Canada</option>
				<option value="CV" <?= ($docNacionalidad=="CV")? "selected" : ""; ?>>Cape Verde</option>
				<option value="KY" <?= ($docNacionalidad=="KY")? "selected" : ""; ?>>Cayman Islands</option>
				<option value="CF" <?= ($docNacionalidad=="CF")? "selected" : ""; ?>>Republica Central Africana</option>
				<option value="TD" <?= ($docNacionalidad=="TD")? "selected" : ""; ?>>Chad</option>
				<option value="CL" <?= ($docNacionalidad=="CL")? "selected" : ""; ?>>Chile</option>
				<option value="CN" <?= ($docNacionalidad=="CN")? "selected" : ""; ?>>China</option>
				<option value="CO" <?= ($docNacionalidad=="CO")? "selected" : ""; ?>>Colombia</option>
				<option value="KM" <?= ($docNacionalidad=="KM")? "selected" : ""; ?>>Comoros</option>
				<option value="CG" <?= ($docNacionalidad=="CG")? "selected" : ""; ?>>Congo</option>
				<option value="CK" <?= ($docNacionalidad=="CK")? "selected" : ""; ?>>Cook Islands</option>
				<option value="CR" <?= ($docNacionalidad=="CR")? "selected" : ""; ?>>Costa Rica</option>
				<option value="HR" <?= ($docNacionalidad=="HR")? "selected" : ""; ?>>Croatia</option>
				<option value="CU" <?= ($docNacionalidad=="CU")? "selected" : ""; ?>>Cuba</option>
				<option value="CW" <?= ($docNacionalidad=="CW")? "selected" : ""; ?>>Curaçao</option>
				<option value="CY" <?= ($docNacionalidad=="CY")? "selected" : ""; ?>>Cyprus</option>
				<option value="CZ" <?= ($docNacionalidad=="CZ")? "selected" : ""; ?>>Czech Republic</option>
				<option value="DK" <?= ($docNacionalidad=="DK")? "selected" : ""; ?>>Denmark</option>
				<option value="DJ" <?= ($docNacionalidad=="DJ")? "selected" : ""; ?>>Djibouti</option>
				<option value="DM" <?= ($docNacionalidad=="DM")? "selected" : ""; ?>>Dominica</option>
				<option value="DO" <?= ($docNacionalidad=="DO")? "selected" : ""; ?>>Republica Dominicana </option>
				<option value="EC" <?= ($docNacionalidad=="EC")? "selected" : ""; ?>>Ecuador</option>
				<option value="EG" <?= ($docNacionalidad=="EG")? "selected" : ""; ?>>Egypt</option>
				<option value="SV" <?= ($docNacionalidad=="SV")? "selected" : ""; ?>>El Salvador</option>
				<option value="GQ" <?= ($docNacionalidad=="GQ")? "selected" : ""; ?>>Equatorial Guinea</option>
				<option value="ER" <?= ($docNacionalidad=="ER")? "selected" : ""; ?>>Eritrea</option>
				<option value="EE" <?= ($docNacionalidad=="EE")? "selected" : ""; ?>>Estonia</option>
				<option value="ET" <?= ($docNacionalidad=="ET")? "selected" : ""; ?>>Ethiopia</option>
				<option value="FK" <?= ($docNacionalidad=="FK")? "selected" : ""; ?>>Falkland Islands (Malvinas)</option>
				<option value="FO" <?= ($docNacionalidad=="FO")? "selected" : ""; ?>>Faroe Islands</option>
				<option value="FJ" <?= ($docNacionalidad=="FJ")? "selected" : ""; ?>>Fiji</option>
				<option value="FI" <?= ($docNacionalidad=="FI")? "selected" : ""; ?>>Finland</option>
				<option value="FR" <?= ($docNacionalidad=="FR")? "selected" : ""; ?>>France</option>
				<option value="GF" <?= ($docNacionalidad=="GF")? "selected" : ""; ?>>French Guiana</option>
				<option value="PF" <?= ($docNacionalidad=="PF")? "selected" : ""; ?>>French Polynesia</option>
				<option value="TF" <?= ($docNacionalidad=="TF")? "selected" : ""; ?>>French Southern Territories</option>
				<option value="GA" <?= ($docNacionalidad=="GA")? "selected" : ""; ?>>Gabon</option>
				<option value="GM" <?= ($docNacionalidad=="GM")? "selected" : ""; ?>>Gambia</option>
				<option value="GE" <?= ($docNacionalidad=="GE")? "selected" : ""; ?>>Georgia</option>
				<option value="DE" <?= ($docNacionalidad=="DE")? "selected" : ""; ?>>Germany</option>
				<option value="GH" <?= ($docNacionalidad=="GH")? "selected" : ""; ?>>Ghana</option>
				<option value="GI" <?= ($docNacionalidad=="GI")? "selected" : ""; ?>>Gibraltar</option>
				<option value="GR" <?= ($docNacionalidad=="GR")? "selected" : ""; ?>>Greece</option>
				<option value="GL" <?= ($docNacionalidad=="GL")? "selected" : ""; ?>>Greenland</option>
				<option value="GD" <?= ($docNacionalidad=="GD")? "selected" : ""; ?>>Grenada</option>
				<option value="GP" <?= ($docNacionalidad=="GP")? "selected" : ""; ?>>Guadeloupe</option>
				<option value="GU" <?= ($docNacionalidad=="GU")? "selected" : ""; ?>>Guam</option>
				<option value="GT" <?= ($docNacionalidad=="GT")? "selected" : ""; ?>>Guatemala</option>
				<option value="GG" <?= ($docNacionalidad=="GG")? "selected" : ""; ?>>Guernsey</option>
				<option value="GN" <?= ($docNacionalidad=="GN")? "selected" : ""; ?>>Guinea</option>
				<option value="GW" <?= ($docNacionalidad=="GW")? "selected" : ""; ?>>Guinea-Bissau</option>
				<option value="GY" <?= ($docNacionalidad=="GY")? "selected" : ""; ?>>Guyana</option>
				<option value="HT" <?= ($docNacionalidad=="HT")? "selected" : ""; ?>>Haiti</option>
				<option value="VA" <?= ($docNacionalidad=="VA")? "selected" : ""; ?>>Holy See (Vatican City State)</option>
				<option value="HN" <?= ($docNacionalidad=="HN")? "selected" : ""; ?>>Honduras</option>
				<option value="HK" <?= ($docNacionalidad=="HK")? "selected" : ""; ?>>Hong Kong</option>
				<option value="HU" <?= ($docNacionalidad=="HU")? "selected" : ""; ?>>Hungary</option>
				<option value="IS" <?= ($docNacionalidad=="IS")? "selected" : ""; ?>>Iceland</option>
				<option value="IN" <?= ($docNacionalidad=="IN")? "selected" : ""; ?>>India</option>
				<option value="ID" <?= ($docNacionalidad=="ID")? "selected" : ""; ?>>Indonesia</option>
				<option value="IR" <?= ($docNacionalidad=="IR")? "selected" : ""; ?>>Iran, Islamic Republic of</option>
				<option value="IQ" <?= ($docNacionalidad=="IQ")? "selected" : ""; ?>>Iraq</option>
				<option value="IE" <?= ($docNacionalidad=="IE")? "selected" : ""; ?>>Ireland</option>
				<option value="IM" <?= ($docNacionalidad=="IM")? "selected" : ""; ?>>Isle of Man</option>
				<option value="IL" <?= ($docNacionalidad=="IL")? "selected" : ""; ?>>Israel</option>
				<option value="IT" <?= ($docNacionalidad=="IT")? "selected" : ""; ?>>Italy</option>
				<option value="JM" <?= ($docNacionalidad=="JM")? "selected" : ""; ?>>Jamaica</option>
				<option value="JP" <?= ($docNacionalidad=="JP")? "selected" : ""; ?>>Japan</option>
				<option value="JE" <?= ($docNacionalidad=="JE")? "selected" : ""; ?>>Jersey</option>
				<option value="JO" <?= ($docNacionalidad=="JO")? "selected" : ""; ?>>Jordan</option>
				<option value="KZ" <?= ($docNacionalidad=="KZ")? "selected" : ""; ?>>Kazakhstan</option>
				<option value="KE" <?= ($docNacionalidad=="KE")? "selected" : ""; ?>>Kenya</option>
				<option value="KI" <?= ($docNacionalidad=="KI")? "selected" : ""; ?>>Kiribati</option>
				<option value="KR" <?= ($docNacionalidad=="KR")? "selected" : ""; ?>>Korea</option>
				<option value="KW" <?= ($docNacionalidad=="KW")? "selected" : ""; ?>>Kuwait</option>
				<option value="KG" <?= ($docNacionalidad=="KG")? "selected" : ""; ?>>Kyrgyzstan</option>
				<option value="LV" <?= ($docNacionalidad=="LV")? "selected" : ""; ?>>Latvia</option>
				<option value="LB" <?= ($docNacionalidad=="LB")? "selected" : ""; ?>>Lebanon</option>
				<option value="LS" <?= ($docNacionalidad=="LS")? "selected" : ""; ?>>Lesotho</option>
				<option value="LR" <?= ($docNacionalidad=="LR")? "selected" : ""; ?>>Liberia</option>
				<option value="LY" <?= ($docNacionalidad=="LY")? "selected" : ""; ?>>Libya</option>
				<option value="LI" <?= ($docNacionalidad=="LI")? "selected" : ""; ?>>Liechtenstein</option>
				<option value="LT" <?= ($docNacionalidad=="LT")? "selected" : ""; ?>>Lithuania</option>
				<option value="LU" <?= ($docNacionalidad=="LU")? "selected" : ""; ?>>Luxembourg</option>
				<option value="MO" <?= ($docNacionalidad=="MO")? "selected" : ""; ?>>Macao</option>
				<option value="MG" <?= ($docNacionalidad=="MG")? "selected" : ""; ?>>Madagascar</option>
				<option value="MW" <?= ($docNacionalidad=="MW")? "selected" : ""; ?>>Malawi</option>
				<option value="MY" <?= ($docNacionalidad=="MY")? "selected" : ""; ?>>Malaysia</option>
				<option value="MV" <?= ($docNacionalidad=="MV")? "selected" : ""; ?>>Maldives</option>
				<option value="ML" <?= ($docNacionalidad=="ML")? "selected" : ""; ?>>Mali</option>
				<option value="MT" <?= ($docNacionalidad=="MT")? "selected" : ""; ?>>Malta</option>
				<option value="MH" <?= ($docNacionalidad=="MH")? "selected" : ""; ?>>Marshall Islands</option>
				<option value="MQ" <?= ($docNacionalidad=="MQ")? "selected" : ""; ?>>Martinique</option>
				<option value="MR" <?= ($docNacionalidad=="MR")? "selected" : ""; ?>>Mauritania</option>
				<option value="MU" <?= ($docNacionalidad=="MU")? "selected" : ""; ?>>Mauritius</option>
				<option value="YT" <?= ($docNacionalidad=="YT")? "selected" : ""; ?>>Mayotte</option>
				<option value="MX" <?= ($docNacionalidad=="MX")? "selected" : ""; ?>>Mexico</option>
				<option value="MD" <?= ($docNacionalidad=="MD")? "selected" : ""; ?>>Moldova</option>
				<option value="MC" <?= ($docNacionalidad=="MC")? "selected" : ""; ?>>Monaco</option>
				<option value="MN" <?= ($docNacionalidad=="MN")? "selected" : ""; ?>>Mongolia</option>
				<option value="ME" <?= ($docNacionalidad=="ME")? "selected" : ""; ?>>Montenegro</option>
				<option value="MS" <?= ($docNacionalidad=="MS")? "selected" : ""; ?>>Montserrat</option>
				<option value="MA" <?= ($docNacionalidad=="MA")? "selected" : ""; ?>>Morocco</option>
				<option value="MZ" <?= ($docNacionalidad=="MZ")? "selected" : ""; ?>>Mozambique</option>
				<option value="MM" <?= ($docNacionalidad=="MM")? "selected" : ""; ?>>Myanmar</option>
				<option value="NA" <?= ($docNacionalidad=="NA")? "selected" : ""; ?>>Namibia</option>
				<option value="NR" <?= ($docNacionalidad=="NR")? "selected" : ""; ?>>Nauru</option>
				<option value="NP" <?= ($docNacionalidad=="NP")? "selected" : ""; ?>>Nepal</option>
				<option value="NL" <?= ($docNacionalidad=="NL")? "selected" : ""; ?>>Netherlands</option>
				<option value="NC" <?= ($docNacionalidad=="NC")? "selected" : ""; ?>>New Caledonia</option>
				<option value="NZ" <?= ($docNacionalidad=="NZ")? "selected" : ""; ?>>New Zealand</option>
				<option value="NI" <?= ($docNacionalidad=="NI")? "selected" : ""; ?>>Nicaragua</option>
				<option value="NG" <?= ($docNacionalidad=="NG")? "selected" : ""; ?>>Nigeria</option>
				<option value="NU" <?= ($docNacionalidad=="NU")? "selected" : ""; ?>>Niue</option>
				<option value="NF" <?= ($docNacionalidad=="NF")? "selected" : ""; ?>>Norfolk Island</option>
				<option value="NO" <?= ($docNacionalidad=="NO")? "selected" : ""; ?>>Noruega</option>
				<option value="OM" <?= ($docNacionalidad=="OM")? "selected" : ""; ?>>Oman</option>
				<option value="PK" <?= ($docNacionalidad=="PK")? "selected" : ""; ?>>Pakistan</option>
				<option value="PW" <?= ($docNacionalidad=="PW")? "selected" : ""; ?>>Palau</option>
				<option value="PA" <?= ($docNacionalidad=="PA")? "selected" : ""; ?>>Panama</option>
				<option value="PG" <?= ($docNacionalidad=="PG")? "selected" : ""; ?>>Papua New Guinea</option>
				<option value="PY" <?= ($docNacionalidad=="PY")? "selected" : ""; ?>>Paraguay</option>			
				<option value="PE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Peru</option>
				<option value="PH" <?= ($docNacionalidad=="PH")? "selected" : ""; ?>>Philippines</option>
				<option value="PN" <?= ($docNacionalidad=="PN")? "selected" : ""; ?>>Pitcairn</option>
				<option value="PL" <?= ($docNacionalidad=="PL")? "selected" : ""; ?>>Poland</option>
				<option value="PT" <?= ($docNacionalidad=="PT")? "selected" : ""; ?>>Portugal</option>
				<option value="PR" <?= ($docNacionalidad=="PR")? "selected" : ""; ?>>Puerto Rico</option>
				<option value="QA" <?= ($docNacionalidad=="QA")? "selected" : ""; ?>>Qatar</option>
				<option value="RE" <?= ($docNacionalidad=="RE")? "selected" : ""; ?>>Réunion</option>
				<option value="RO" <?= ($docNacionalidad=="RO")? "selected" : ""; ?>>Romania</option>
				<option value="RU" <?= ($docNacionalidad=="RU")? "selected" : ""; ?>>Russian Federation</option>
				<option value="RW" <?= ($docNacionalidad=="RW")? "selected" : ""; ?>>Rwanda</option>
				<option value="BL" <?= ($docNacionalidad=="BL")? "selected" : ""; ?>>Saint Barthélemy</option>
				<option value="KN" <?= ($docNacionalidad=="KN")? "selected" : ""; ?>>Saint Kitts and Nevis</option>
				<option value="LC" <?= ($docNacionalidad=="LC")? "selected" : ""; ?>>Saint Lucia</option>
				<option value="MF" <?= ($docNacionalidad=="MF")? "selected" : ""; ?>>Saint Martin (French part)</option>
				<option value="PM" <?= ($docNacionalidad=="PM")? "selected" : ""; ?>>Saint Pierre and Miquelon</option>
				<option value="VC" <?= ($docNacionalidad=="VC")? "selected" : ""; ?>>Saint Vincent and the Grenadines</option>
				<option value="WS" <?= ($docNacionalidad=="WS")? "selected" : ""; ?>>Samoa</option>
				<option value="SM" <?= ($docNacionalidad=="SM")? "selected" : ""; ?>>San Marino</option>
				<option value="ST" <?= ($docNacionalidad=="ST")? "selected" : ""; ?>>Sao Tome and Principe</option>
				<option value="SA" <?= ($docNacionalidad=="SA")? "selected" : ""; ?>>Saudi Arabia</option>
				<option value="SN" <?= ($docNacionalidad=="SN")? "selected" : ""; ?>>Senegal</option>
				<option value="RS" <?= ($docNacionalidad=="RS")? "selected" : ""; ?>>Serbia</option>
				<option value="SC" <?= ($docNacionalidad=="SC")? "selected" : ""; ?>>Seychelles</option>
				<option value="SL" <?= ($docNacionalidad=="SL")? "selected" : ""; ?>>Sierra Leon</option>
				<option value="SG" <?= ($docNacionalidad=="SG")? "selected" : ""; ?>>Singapore</option>
				<option value="SX" <?= ($docNacionalidad=="SX")? "selected" : ""; ?>>Sint Maarten (Dutch part)</option>
				<option value="SK" <?= ($docNacionalidad=="SK")? "selected" : ""; ?>>Slovakia</option>
				<option value="SI" <?= ($docNacionalidad=="SI")? "selected" : ""; ?>>Slovenia</option>
				<option value="SB" <?= ($docNacionalidad=="SB")? "selected" : ""; ?>>Solomon Islands</option>
				<option value="SO" <?= ($docNacionalidad=="SO")? "selected" : ""; ?>>Somalia</option>
				<option value="ZA" <?= ($docNacionalidad=="ZA")? "selected" : ""; ?>>South Africa</option>
				<option value="SS" <?= ($docNacionalidad=="SS")? "selected" : ""; ?>>South Sudan</option>
				<option value="ES" <?= ($docNacionalidad=="ES")? "selected" : ""; ?>>Spain</option>
				<option value="LK" <?= ($docNacionalidad=="LK")? "selected" : ""; ?>>Sri Lanka</option>
				<option value="SD" <?= ($docNacionalidad=="SD")? "selected" : ""; ?>>Sudan</option>
				<option value="SR" <?= ($docNacionalidad=="SR")? "selected" : ""; ?>>Suriname</option>
				<option value="SJ" <?= ($docNacionalidad=="SJ")? "selected" : ""; ?>>Svalbard and Jan Mayen</option>
				<option value="SZ" <?= ($docNacionalidad=="SZ")? "selected" : ""; ?>>Swaziland</option>
				<option value="SE" <?= ($docNacionalidad=="SE")? "selected" : ""; ?>>Sweden</option>
				<option value="CH" <?= ($docNacionalidad=="CH")? "selected" : ""; ?>>Switzerland</option>
				<option value="SY" <?= ($docNacionalidad=="SY")? "selected" : ""; ?>>Syrian Arab Republic</option>
				<option value="TW" <?= ($docNacionalidad=="TW")? "selected" : ""; ?>>Taiwan, Province of China</option>
				<option value="TJ" <?= ($docNacionalidad=="TJ")? "selected" : ""; ?>>Tajikistan</option>
				<option value="TZ" <?= ($docNacionalidad=="TZ")? "selected" : ""; ?>>Tanzania, United Republic of</option>
				<option value="TH" <?= ($docNacionalidad=="TH")? "selected" : ""; ?>>Thailand</option>
				<option value="TL" <?= ($docNacionalidad=="TL")? "selected" : ""; ?>>Timor-Leste</option>
				<option value="TG" <?= ($docNacionalidad=="TG")? "selected" : ""; ?>>Togo</option>
				<option value="TK" <?= ($docNacionalidad=="TK")? "selected" : ""; ?>>Tokelau</option>
				<option value="TO" <?= ($docNacionalidad=="TO")? "selected" : ""; ?>>Tonga</option>
				<option value="TT" <?= ($docNacionalidad=="TT")? "selected" : ""; ?>>Trinidad and Tobago</option>
				<option value="TN" <?= ($docNacionalidad=="TN")? "selected" : ""; ?>>Tunisia</option>
				<option value="TR" <?= ($docNacionalidad=="TR")? "selected" : ""; ?>>Turkey</option>
				<option value="TM" <?= ($docNacionalidad=="TM")? "selected" : ""; ?>>Turkmenistan</option>
				<option value="TC" <?= ($docNacionalidad=="TC")? "selected" : ""; ?>>Turks and Caicos Islands</option>
				<option value="TV" <?= ($docNacionalidad=="TV")? "selected" : ""; ?>>Tuvalu</option>
				<option value="UG" <?= ($docNacionalidad=="UG")? "selected" : ""; ?>>Uganda</option>
				<option value="UA" <?= ($docNacionalidad=="UA")? "selected" : ""; ?>>Ukraine</option>
				<option value="AE" <?= ($docNacionalidad=="AE")? "selected" : ""; ?>>United Arab Emirates</option>
				<option value="GB" <?= ($docNacionalidad=="GB")? "selected" : ""; ?>>Reino Unido (UK)</option>
				<option value="US" <?= ($docNacionalidad=="US")? "selected" : ""; ?>>Estados Unidos (USA)</option>
				<option value="UY" <?= ($docNacionalidad=="UY")? "selected" : ""; ?>>Uruguay</option>
				<option value="UZ" <?= ($docNacionalidad=="UZ")? "selected" : ""; ?>>Uzbekistan</option>
				<option value="VU" <?= ($docNacionalidad=="VU")? "selected" : ""; ?>>Vanuatu</option>
				<option value="VE" <?= ($docNacionalidad=="VE")? "selected" : ""; ?>>Venezuela</option>
				<option value="VN" <?= ($docNacionalidad=="VN")? "selected" : ""; ?>>Viet Nam</option>
				<option value="VG" <?= ($docNacionalidad=="VG")? "selected" : ""; ?>>Virgin Islands, British</option>
				<option value="VI" <?= ($docNacionalidad=="VI")? "selected" : ""; ?>>Virgin Islands, U.S.</option>
				<option value="WF" <?= ($docNacionalidad=="WF")? "selected" : ""; ?>>Wallis and Futuna</option>
				<option value="EH" <?= ($docNacionalidad=="EH")? "selected" : ""; ?>>Western Sahara</option>
				<option value="YE" <?= ($docNacionalidad=="YE")? "selected" : ""; ?>>Yemen</option>
				<option value="ZM" <?= ($docNacionalidad=="ZM")? "selected" : ""; ?>>Zambia</option>
				<option value="ZW" <?= ($docNacionalidad=="ZW")? "selected" : ""; ?>>Zimbabwe</option> 
			</select>

		</div>
	</div>
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-address-card"></i></span></div>


			<select id="docTipoDocumento" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" name="docTipoDocumento" class="form-control kt-selectpicker" title="Ingrese tipo de documento" data-style="btn-primary">

				<?php $tipoDoc = $docente['docTipoDocumento']; ?>

				<option value="">Seleccione tipo documento</option>
				<option value="DNI" <?= ($tipoDoc=="DNI")? "selected" : "";  ?>>Documento Nacional de Identidad (D.N.I.)</option>
				<option value="PASAPORTE" <?= ($tipoDoc=="PASAPORTE")? "selected" : "";  ?>>Pasaporte</option>
				<option value="CE" <?= ($tipoDoc=="CE")? "selected" : "";  ?>>Carnet de Extranjeria (C.E.)</option>
				<option value="RUC" <?= ($tipoDoc=="RUC")? "selected" : "";  ?>>Registro Único de Contribuyente (R.U.C.)</option>
			</select>

		</div>
	</div>
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-address-card"></i></span></div>
			<input id="docNroDocumento" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" name="docNroDocumento" type="text" class="form-control" placeholder="Número de documento" value="<?php echo $docente['docNroDocumento']; ?>">
		</div>
	</div>


</div>
<!-- fila 3 final -->


<!-- fila 4 -->
<div class="row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
			<input id="docApPaterno" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" name="docApPaterno" type="text" class="form-control" placeholder="Apellido Paterno" title="Ingrese su apellido paterno" value="<?php echo $docente['docApPaterno']; ?>">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
			<input id="docApMaterno" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" title="Ingrese su apellido materno" name="docApMaterno" type="text" class="form-control" placeholder="Apellido Materno" value="<?php echo $docente['docApMaterno']; ?>">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
			<input id="docNombres" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" title="Ingrese su nombre completo" name="docNombres" type="text" class="form-control" placeholder="Nombre completo" value="<?php echo $docente['docNombres']; ?>">
		</div>
	</div>

</div>
<!-- fila 4 final -->


<!-- fila 5 inicio -->
<div class="row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-venus-mars"></i></span></div>
			<select id="docGenero" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" name="docGenero" class="form-control kt-selectpicker" title="Seleccione su género" data-style="btn-primary">

				<?php $docGenero = $docente['docGenero']; ?>

				<option value="">Seleccione</option>
				<option value="M" <?= ($docGenero=="M")? "selected" : ""; ?>>Masculino</option>
				<option value="F" <?= ($docGenero=="F")? "selected" : ""; ?>>Masculino</option>
			</select>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
			<input type="text" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" id="docFecNacimiento" name="docFecNacimiento" class="form-date form-control" placeholder="Fecha de nacimiento" value="<?php echo $docente['docFecNacimiento']; ?>">
		</div>
	</div>

	<div class="col-lg-4">

	</div>

</div>
<!-- fila 5 final -->


<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>DATOS DE CONTACTO</h4>
	</div>
</div>

<!-- fila 7 inicio -->
<div class="row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span></div>
			<select name="ubdepartamento_idDepa" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" id="ubdepartamento_idDepa" class="form-control kt-selectpicker" title="Ingrese el departamento donde reside" data-style="btn-primary">
				<option value="">Seleccione departamento</option>

				<?php $idDepa = $docente['ubdepartamento_idDepa']; ?>
				
				<?php  foreach ($departamentos as $depar) { ?>
					<option value="<?php echo $depar['idDepa'] ?>" <?= ($idDepa==$depar['idDepa'])? "selected" : ""; ?>><?php echo $depar['departamento'] ?></option>
         		<?php } ?>


			</select>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span></div>
			<select class="form-control kt-selectpicker" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" id="ubprovincia_idProv" name="ubprovincia_idProv" title="Ciudad" data-style="btn-primary">
				<option value="">Seleccione provincia</option>

				<?php $idProv = $docente['ubprovincia_idProv']; ?>

				<?php  foreach ($provincias as $prov) { ?>
					<option value="<?php echo $prov['idDepa'] ?>" <?= ($idProv==$prov['idProv'])? "selected" : ""; ?>><?php echo $prov['provincia'] ?></option>
         		<?php } ?>

			</select>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span></div>
			<select class="form-control kt-selectpicker" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" id="ubdistrito_idDist" name="ubdistrito_idDist" title="Ciudad" data-style="btn-primary">
				<option value="">Seleccione distrito</option>

				<?php $idDist = $docente['ubdistrito_idDist']; ?>

				<?php  foreach ($distritos as $dist) { ?>
					<option value="<?php echo $dist['idDist'] ?>" <?= ($idDist==$dist['idDist'])? "selected" : ""; ?>><?php echo $dist['distrito'] ?></option>
         		<?php } ?>

			</select>
		</div>

	</div>

</div>
<div class="row">

	<div class="col-lg-12">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-home"></i></span></div>
			<input id="docDireccion" name="docDireccion" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" type="text" class="form-control" title="Ingrese una dirección de contacto" placeholder="Dirección" value="<?php echo $docente['docDireccion']; ?>" >
		</div>
	</div>
</div>
<div class="form-group row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone"></i></span></div>
			<input type="text" id="docCelular" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" name="docCelular" class="form-control" title="Ingrese un teléfono móvil de contacto" placeholder="Teléfono celular" value="<?php echo $docente['docCelular']; ?>">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone"></i></span></div>
			<input type="text" id="docTelFijo" data-autosave="true" data-dbtable="docentes" data-dbpk="docenteId" name="docTelFijo" class="form-control" title="Ingrese un teléfono fijo de contacto" placeholder="Teléfono fijo" value="<?php echo $docente['docTelFijo']; ?>">
		</div>
	</div>

</div>
<!-- fila 7 final -->