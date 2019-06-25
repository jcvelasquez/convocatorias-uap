
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
			<select id="docNacionalidad" data-dbtable="docentes" data-dbpk="docenteId" name="docNacionalidad" class="form-control kt-selectpicker" data-dbtable="docentes" title="Ingrese el pais de nacimiento" data-style="btn-primary">
				<option value="">Seleccione su país</option>

				<?php $docNacionalidad = $docente['docNacionalidad']; ?>

				<option value="AF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Afghanistan</option>
				<option value="AX" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Åland Islands</option>
				<option value="AL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Albania</option>
				<option value="DZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Algeria</option>
				<option value="AS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>American Samoa</option>
				<option value="AD" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Andorra</option>
				<option value="AO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Angola</option>
				<option value="AI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Anguilla</option>
				<option value="AQ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Antarctica</option>
				<option value="AG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Antigua and Barbuda</option>
				<option value="AR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Argentina</option>
				<option value="AM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Armenia</option>
				<option value="AW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Aruba</option>
				<option value="AU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Australia</option>
				<option value="AT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Austria</option>
				<option value="AZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Azerbaijan</option>
				<option value="BS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bahamas</option>
				<option value="BH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bahrain</option>
				<option value="BD" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bangladesh</option>
				<option value="BB" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Barbados</option>
				<option value="BY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Belarus</option>
				<option value="BE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Belgium</option>
				<option value="BZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Belize</option>
				<option value="BJ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Benin</option>
				<option value="BM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bermuda</option>
				<option value="BT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bhutan</option>
				<option value="BO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bolivia</option>
				<option value="BA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bosnia y Herzegovina</option>
				<option value="BW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Botswana</option>
				<option value="BV" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bouvet Island</option>
				<option value="BR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Brazil</option>
				<option value="BN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Brunei Darussalam</option>
				<option value="BG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Bulgaria</option>
				<option value="BF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Burkina Faso</option>
				<option value="BI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Burundi</option>
				<option value="KH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cambodia</option>
				<option value="CM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cameroon</option>
				<option value="CA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Canada</option>
				<option value="CV" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cape Verde</option>
				<option value="KY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cayman Islands</option>
				<option value="CF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Republica Central Africana</option>
				<option value="TD" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Chad</option>
				<option value="CL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Chile</option>
				<option value="CN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>China</option>
				<option value="CO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Colombia</option>
				<option value="KM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Comoros</option>
				<option value="CG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Congo</option>
				<option value="CK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cook Islands</option>
				<option value="CR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Costa Rica</option>
				<option value="HR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Croatia</option>
				<option value="CU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cuba</option>
				<option value="CW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Curaçao</option>
				<option value="CY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Cyprus</option>
				<option value="CZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Czech Republic</option>
				<option value="DK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Denmark</option>
				<option value="DJ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Djibouti</option>
				<option value="DM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Dominica</option>
				<option value="DO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Republica Dominicana </option>
				<option value="EC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Ecuador</option>
				<option value="EG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Egypt</option>
				<option value="SV" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>El Salvador</option>
				<option value="GQ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Equatorial Guinea</option>
				<option value="ER" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Eritrea</option>
				<option value="EE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Estonia</option>
				<option value="ET" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Ethiopia</option>
				<option value="FK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Falkland Islands (Malvinas)</option>
				<option value="FO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Faroe Islands</option>
				<option value="FJ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Fiji</option>
				<option value="FI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Finland</option>
				<option value="FR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>France</option>
				<option value="GF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>French Guiana</option>
				<option value="PF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>French Polynesia</option>
				<option value="TF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>French Southern Territories</option>
				<option value="GA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Gabon</option>
				<option value="GM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Gambia</option>
				<option value="GE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Georgia</option>
				<option value="DE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Germany</option>
				<option value="GH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Ghana</option>
				<option value="GI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Gibraltar</option>
				<option value="GR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Greece</option>
				<option value="GL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Greenland</option>
				<option value="GD" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Grenada</option>
				<option value="GP" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guadeloupe</option>
				<option value="GU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guam</option>
				<option value="GT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guatemala</option>
				<option value="GG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guernsey</option>
				<option value="GN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guinea</option>
				<option value="GW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guinea-Bissau</option>
				<option value="GY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Guyana</option>
				<option value="HT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Haiti</option>
				<option value="VA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Holy See (Vatican City State)</option>
				<option value="HN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Honduras</option>
				<option value="HK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Hong Kong</option>
				<option value="HU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Hungary</option>
				<option value="IS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Iceland</option>
				<option value="IN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>India</option>
				<option value="ID" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Indonesia</option>
				<option value="IR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Iran, Islamic Republic of</option>
				<option value="IQ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Iraq</option>
				<option value="IE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Ireland</option>
				<option value="IM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Isle of Man</option>
				<option value="IL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Israel</option>
				<option value="IT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Italy</option>
				<option value="JM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Jamaica</option>
				<option value="JP" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Japan</option>
				<option value="JE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Jersey</option>
				<option value="JO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Jordan</option>
				<option value="KZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Kazakhstan</option>
				<option value="KE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Kenya</option>
				<option value="KI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Kiribati</option>
				<option value="KR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Korea</option>
				<option value="KW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Kuwait</option>
				<option value="KG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Kyrgyzstan</option>
				<option value="LV" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Latvia</option>
				<option value="LB" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Lebanon</option>
				<option value="LS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Lesotho</option>
				<option value="LR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Liberia</option>
				<option value="LY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Libya</option>
				<option value="LI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Liechtenstein</option>
				<option value="LT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Lithuania</option>
				<option value="LU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Luxembourg</option>
				<option value="MO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Macao</option>
				<option value="MG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Madagascar</option>
				<option value="MW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Malawi</option>
				<option value="MY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Malaysia</option>
				<option value="MV" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Maldives</option>
				<option value="ML" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mali</option>
				<option value="MT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Malta</option>
				<option value="MH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Marshall Islands</option>
				<option value="MQ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Martinique</option>
				<option value="MR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mauritania</option>
				<option value="MU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mauritius</option>
				<option value="YT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mayotte</option>
				<option value="MX" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mexico</option>
				<option value="MD" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Moldova</option>
				<option value="MC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Monaco</option>
				<option value="MN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mongolia</option>
				<option value="ME" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Montenegro</option>
				<option value="MS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Montserrat</option>
				<option value="MA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Morocco</option>
				<option value="MZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Mozambique</option>
				<option value="MM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Myanmar</option>
				<option value="NA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Namibia</option>
				<option value="NR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Nauru</option>
				<option value="NP" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Nepal</option>
				<option value="NL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Netherlands</option>
				<option value="NC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>New Caledonia</option>
				<option value="NZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>New Zealand</option>
				<option value="NI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Nicaragua</option>
				<option value="NE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Niger</option>
				<option value="NG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Nigeria</option>
				<option value="NU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Niue</option>
				<option value="NF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Norfolk Island</option>
				<option value="NO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Norway</option>
				<option value="OM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Oman</option>
				<option value="PK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Pakistan</option>
				<option value="PW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Palau</option>
				<option value="PA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Panama</option>
				<option value="PG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Papua New Guinea</option>
				<option value="PY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Paraguay</option>			
				<option value="PE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Peru</option>
				<option value="PH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Philippines</option>
				<option value="PN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Pitcairn</option>
				<option value="PL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Poland</option>
				<option value="PT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Portugal</option>
				<option value="PR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Puerto Rico</option>
				<option value="QA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Qatar</option>
				<option value="RE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Réunion</option>
				<option value="RO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Romania</option>
				<option value="RU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Russian Federation</option>
				<option value="RW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Rwanda</option>
				<option value="BL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saint Barthélemy</option>
				<option value="KN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saint Kitts and Nevis</option>
				<option value="LC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saint Lucia</option>
				<option value="MF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saint Martin (French part)</option>
				<option value="PM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saint Pierre and Miquelon</option>
				<option value="VC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saint Vincent and the Grenadines</option>
				<option value="WS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Samoa</option>
				<option value="SM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>San Marino</option>
				<option value="ST" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Sao Tome and Principe</option>
				<option value="SA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Saudi Arabia</option>
				<option value="SN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Senegal</option>
				<option value="RS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Serbia</option>
				<option value="SC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Seychelles</option>
				<option value="SL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Sierra Leone</option>
				<option value="SG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Singapore</option>
				<option value="SX" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Sint Maarten (Dutch part)</option>
				<option value="SK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Slovakia</option>
				<option value="SI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Slovenia</option>
				<option value="SB" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Solomon Islands</option>
				<option value="SO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Somalia</option>
				<option value="ZA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>South Africa</option>
				<option value="SS" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>South Sudan</option>
				<option value="ES" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Spain</option>
				<option value="LK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Sri Lanka</option>
				<option value="SD" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Sudan</option>
				<option value="SR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Suriname</option>
				<option value="SJ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Svalbard and Jan Mayen</option>
				<option value="SZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Swaziland</option>
				<option value="SE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Sweden</option>
				<option value="CH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Switzerland</option>
				<option value="SY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Syrian Arab Republic</option>
				<option value="TW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Taiwan, Province of China</option>
				<option value="TJ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Tajikistan</option>
				<option value="TZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Tanzania, United Republic of</option>
				<option value="TH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Thailand</option>
				<option value="TL" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Timor-Leste</option>
				<option value="TG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Togo</option>
				<option value="TK" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Tokelau</option>
				<option value="TO" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Tonga</option>
				<option value="TT" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Trinidad and Tobago</option>
				<option value="TN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Tunisia</option>
				<option value="TR" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Turkey</option>
				<option value="TM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Turkmenistan</option>
				<option value="TC" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Turks and Caicos Islands</option>
				<option value="TV" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Tuvalu</option>
				<option value="UG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Uganda</option>
				<option value="UA" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Ukraine</option>
				<option value="AE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>United Arab Emirates</option>
				<option value="GB" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Reino Unido (UK)</option>
				<option value="US" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Estados Unidos (USA)</option>
				<option value="UY" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Uruguay</option>
				<option value="UZ" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Uzbekistan</option>
				<option value="VU" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Vanuatu</option>
				<option value="VE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Venezuela</option>
				<option value="VN" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Viet Nam</option>
				<option value="VG" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Virgin Islands, British</option>
				<option value="VI" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Virgin Islands, U.S.</option>
				<option value="WF" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Wallis and Futuna</option>
				<option value="EH" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Western Sahara</option>
				<option value="YE" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Yemen</option>
				<option value="ZM" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Zambia</option>
				<option value="ZW" <?= ($docNacionalidad=="PE")? "selected" : ""; ?>>Zimbabwe</option> 
			</select>

		</div>
	</div>
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-address-card"></i></span></div>


			<select id="docTipoDocumento" data-dbtable="docentes" data-dbpk="docenteId" name="docTipoDocumento" class="form-control kt-selectpicker" title="Ingrese tipo de documento" data-style="btn-primary">

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
			<input id="docNroDocumento" data-dbtable="docentes" data-dbpk="docenteId" name="docNroDocumento" type="text" class="form-control" placeholder="Número de documento" value="<?php echo $docente['docNroDocumento']; ?>">
		</div>
	</div>


</div>
<!-- fila 3 final -->


<!-- fila 4 -->
<div class="row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
			<input id="docApPaterno" data-dbtable="docentes" data-dbpk="docenteId" name="docApPaterno" type="text" class="form-control" placeholder="Apellido Paterno" title="Ingrese su apellido paterno" value="<?php echo $docente['docApPaterno']; ?>">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
			<input id="docApMaterno" data-dbtable="docentes" data-dbpk="docenteId" title="Ingrese su apellido materno" name="docApMaterno" type="text" class="form-control" placeholder="Apellido Materno" value="<?php echo $docente['docApMaterno']; ?>">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
			<input id="docNombres" data-dbtable="docentes" data-dbpk="docenteId" title="Ingrese su nombre completo" name="docNombres" type="text" class="form-control" placeholder="Nombre completo" value="<?php echo $docente['docNombres']; ?>">
		</div>
	</div>

</div>
<!-- fila 4 final -->


<!-- fila 5 inicio -->
<div class="row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-venus-mars"></i></span></div>
			<select id="docGenero" data-dbtable="docentes" data-dbpk="docenteId" name="docGenero" class="form-control kt-selectpicker" title="Seleccione su género" data-style="btn-primary">

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
			<input type="text" data-dbtable="docentes" data-dbpk="docenteId" id="docFecNacimiento" name="docFecNacimiento" class="form-date form-control" placeholder="Fecha de nacimiento" value="<?php echo $docente['docFecNacimiento']; ?>">
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
			<select name="ubdepartamento_idDepa" data-dbtable="docentes" data-dbpk="docenteId" id="ubdepartamento_idDepa" class="form-control kt-selectpicker" title="Ingrese el departamento donde reside" data-style="btn-primary">
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
			<select class="form-control kt-selectpicker" data-dbtable="docentes" data-dbpk="docenteId" id="ubprovincia_idProv" name="ubprovincia_idProv" title="Ciudad" data-style="btn-primary">
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
			<select class="form-control kt-selectpicker" data-dbtable="docentes" data-dbpk="docenteId" id="ubdistrito_idDist" name="ubdistrito_idDist" title="Ciudad" data-style="btn-primary">
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
			<input id="docDireccion" name="docDireccion" data-dbtable="docentes" data-dbpk="docenteId" type="text" class="form-control" title="Ingrese una dirección de contacto" placeholder="Dirección" value="<?php echo $docente['docDireccion']; ?>" >
		</div>
	</div>
</div>
<div class="form-group row">
	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone"></i></span></div>
			<input type="text" id="docCelular" data-dbtable="docentes" data-dbpk="docenteId" name="docCelular" class="form-control" title="Ingrese un teléfono móvil de contacto" placeholder="Teléfono celular" value="<?php echo $docente['docCelular']; ?>">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone"></i></span></div>
			<input type="text" id="docTelFijo" data-dbtable="docentes" data-dbpk="docenteId" name="docTelFijo" class="form-control" title="Ingrese un teléfono fijo de contacto" placeholder="Teléfono fijo" value="<?php echo $docente['docTelFijo']; ?>">
		</div>
	</div>

</div>
<!-- fila 7 final -->