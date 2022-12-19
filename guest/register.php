<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>

<div class="register-page">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-body">
                    <h1 itemprop="headline" class="text-center mb-4 heading">Register Your Account Now</h1>
                    <form id="submitForm" action="../index.php" method="POST">
                        <input type="hidden" name="_token" value="5lpTfBgn3alUV7Mc3h63FAEwencgJKzcBNa88McZ">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="firstname">First Name <span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" name="firstname" id="firstname" required="" placeholder="First Name" value="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lastname">Last Name <span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" name="lastname" id="lastname" required="" placeholder="Last Name" value="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="username">Username <span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" name="username" id="username" required="" placeholder="Username" value="">
                            </div>
                            <div class="col-md-6 form-group  country-code">
                                <div class="form-group">
                                    <label for="mobile">Mobile <span class="required">*</span>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <select name="country_code">
                                                    <option value="93" data-country="Afghanistan" data-code="AF">+93</option>
                                                    <option value="358" data-country="Åland Islands" data-code="AX">+358</option>
                                                    <option value="355" data-country="Albania" data-code="AL">+355</option>
                                                    <option value="213" data-country="Algeria" data-code="DZ">+213</option>
                                                    <option value="1684" data-country="American Samoa" data-code="AS">+1684</option>
                                                    <option value="376" data-country="Andorra" data-code="AD">+376</option>
                                                    <option value="244" data-country="Angola" data-code="AO">+244</option>
                                                    <option value="1264" data-country="Anguilla" data-code="AI">+1264</option>
                                                    <option value="672" data-country="Antarctica" data-code="AQ">+672</option>
                                                    <option value="1268" data-country="Antigua and Barbuda" data-code="AG">+1268</option>
                                                    <option value="54" data-country="Argentina" data-code="AR">+54</option>
                                                    <option value="374" data-country="Armenia" data-code="AM">+374</option>
                                                    <option value="297" data-country="Aruba" data-code="AW">+297</option>
                                                    <option value="61" data-country="Australia" data-code="AU">+61</option>
                                                    <option value="43" data-country="Austria" data-code="AT">+43</option>
                                                    <option value="994" data-country="Azerbaijan" data-code="AZ">+994</option>
                                                    <option value="1242" data-country="Bahamas" data-code="BS">+1242</option>
                                                    <option value="973" data-country="Bahrain" data-code="BH">+973</option>
                                                    <option value="880" data-country="Bangladesh" data-code="BD">+880</option>
                                                    <option value="1246" data-country="Barbados" data-code="BB">+1246</option>
                                                    <option value="375" data-country="Belarus" data-code="BY">+375</option>
                                                    <option value="32" data-country="Belgium" data-code="BE">+32</option>
                                                    <option value="501" data-country="Belize" data-code="BZ">+501</option>
                                                    <option value="229" data-country="Benin" data-code="BJ">+229</option>
                                                    <option value="1441" data-country="Bermuda" data-code="BM">+1441</option>
                                                    <option value="975" data-country="Bhutan" data-code="BT">+975</option>
                                                    <option value="591" data-country="Bolivia, Plurinational State of bolivia" data-code="BO">+591</option>
                                                    <option value="387" data-country="Bosnia and Herzegovina" data-code="BA">+387</option>
                                                    <option value="267" data-country="Botswana" data-code="BW">+267</option>
                                                    <option value="47" data-country="Bouvet Island" data-code="BV">+47</option>
                                                    <option value="55" data-country="Brazil" data-code="BR">+55</option>
                                                    <option value="246" data-country="British Indian Ocean Territory" data-code="IO">+246</option>
                                                    <option value="673" data-country="Brunei Darussalam" data-code="BN">+673</option>
                                                    <option value="359" data-country="Bulgaria" data-code="BG">+359</option>
                                                    <option value="226" data-country="Burkina Faso" data-code="BF">+226</option>
                                                    <option value="257" data-country="Burundi" data-code="BI">+257</option>
                                                    <option value="855" data-country="Cambodia" data-code="KH">+855</option>
                                                    <option value="237" data-country="Cameroon" data-code="CM">+237</option>
                                                    <option value="1" data-country="Canada" data-code="CA">+1</option>
                                                    <option value="238" data-country="Cape Verde" data-code="CV">+238</option>
                                                    <option value=" 345" data-country="Cayman Islands" data-code="KY">+ 345</option>
                                                    <option value="236" data-country="Central African Republic" data-code="CF">+236</option>
                                                    <option value="235" data-country="Chad" data-code="TD">+235</option>
                                                    <option value="56" data-country="Chile" data-code="CL">+56</option>
                                                    <option value="86" data-country="China" data-code="CN">+86</option>
                                                    <option value="61" data-country="Christmas Island" data-code="CX">+61</option>
                                                    <option value="61" data-country="Cocos (Keeling) Islands" data-code="CC">+61</option>
                                                    <option value="57" data-country="Colombia" data-code="CO">+57</option>
                                                    <option value="269" data-country="Comoros" data-code="KM">+269</option>
                                                    <option value="242" data-country="Congo" data-code="CG">+242</option>
                                                    <option value="243" data-country="Congo, The Democratic Republic of the Congo" data-code="CD">+243</option>
                                                    <option value="682" data-country="Cook Islands" data-code="CK">+682</option>
                                                    <option value="506" data-country="Costa Rica" data-code="CR">+506</option>
                                                    <option value="225" data-country="Cote d'Ivoire" data-code="CI">+225</option>
                                                    <option value="385" data-country="Croatia" data-code="HR">+385</option>
                                                    <option value="53" data-country="Cuba" data-code="CU">+53</option>
                                                    <option value="357" data-country="Cyprus" data-code="CY">+357</option>
                                                    <option value="420" data-country="Czech Republic" data-code="CZ">+420</option>
                                                    <option value="45" data-country="Denmark" data-code="DK">+45</option>
                                                    <option value="253" data-country="Djibouti" data-code="DJ">+253</option>
                                                    <option value="1767" data-country="Dominica" data-code="DM">+1767</option>
                                                    <option value="1849" data-country="Dominican Republic" data-code="DO">+1849</option>
                                                    <option value="593" data-country="Ecuador" data-code="EC">+593</option>
                                                    <option value="20" data-country="Egypt" data-code="EG">+20</option>
                                                    <option value="503" data-country="El Salvador" data-code="SV">+503</option>
                                                    <option value="240" data-country="Equatorial Guinea" data-code="GQ">+240</option>
                                                    <option value="291" data-country="Eritrea" data-code="ER">+291</option>
                                                    <option value="372" data-country="Estonia" data-code="EE">+372</option>
                                                    <option value="251" data-country="Ethiopia" data-code="ET">+251</option>
                                                    <option value="500" data-country="Falkland Islands (Malvinas)" data-code="FK">+500</option>
                                                    <option value="298" data-country="Faroe Islands" data-code="FO">+298</option>
                                                    <option value="679" data-country="Fiji" data-code="FJ">+679</option>
                                                    <option value="358" data-country="Finland" data-code="FI">+358</option>
                                                    <option value="33" data-country="France" data-code="FR">+33</option>
                                                    <option value="594" data-country="French Guiana" data-code="GF">+594</option>
                                                    <option value="689" data-country="French Polynesia" data-code="PF">+689</option>
                                                    <option value="262" data-country="French Southern Territories" data-code="TF">+262</option>
                                                    <option value="241" data-country="Gabon" data-code="GA">+241</option>
                                                    <option value="220" data-country="Gambia" data-code="GM">+220</option>
                                                    <option value="995" data-country="Georgia" data-code="GE">+995</option>
                                                    <option value="49" data-country="Germany" data-code="DE">+49</option>
                                                    <option value="233" data-country="Ghana" data-code="GH">+233</option>
                                                    <option value="350" data-country="Gibraltar" data-code="GI">+350</option>
                                                    <option value="30" data-country="Greece" data-code="GR">+30</option>
                                                    <option value="299" data-country="Greenland" data-code="GL">+299</option>
                                                    <option value="1473" data-country="Grenada" data-code="GD">+1473</option>
                                                    <option value="590" data-country="Guadeloupe" data-code="GP">+590</option>
                                                    <option value="1671" data-country="Guam" data-code="GU">+1671</option>
                                                    <option value="502" data-country="Guatemala" data-code="GT">+502</option>
                                                    <option value="44" data-country="Guernsey" data-code="GG">+44</option>
                                                    <option value="224" data-country="Guinea" data-code="GN">+224</option>
                                                    <option value="245" data-country="Guinea-Bissau" data-code="GW">+245</option>
                                                    <option value="592" data-country="Guyana" data-code="GY">+592</option>
                                                    <option value="509" data-country="Haiti" data-code="HT">+509</option>
                                                    <option value="0" data-country="Heard Island and Mcdonald Islands" data-code="HM">+0</option>
                                                    <option value="379" data-country="Holy See (Vatican City State)" data-code="VA">+379</option>
                                                    <option value="504" data-country="Honduras" data-code="HN">+504</option>
                                                    <option value="852" data-country="Hong Kong" data-code="HK">+852</option>
                                                    <option value="36" data-country="Hungary" data-code="HU">+36</option>
                                                    <option value="354" data-country="Iceland" data-code="IS">+354</option>
                                                    <option value="91" data-country="India" data-code="IN">+91</option>
                                                    <option value="62" data-country="Indonesia" data-code="ID">+62</option>
                                                    <option value="98" data-country="Iran, Islamic Republic of Persian Gulf" data-code="IR">+98</option>
                                                    <option value="964" data-country="Iraq" data-code="IQ">+964</option>
                                                    <option value="353" data-country="Ireland" data-code="IE">+353</option>
                                                    <option value="44" data-country="Isle of Man" data-code="IM">+44</option>
                                                    <option value="972" data-country="Israel" data-code="IL">+972</option>
                                                    <option value="39" data-country="Italy" data-code="IT">+39</option>
                                                    <option value="1876" data-country="Jamaica" data-code="JM">+1876</option>
                                                    <option value="81" data-country="Japan" data-code="JP">+81</option>
                                                    <option value="44" data-country="Jersey" data-code="JE">+44</option>
                                                    <option value="962" data-country="Jordan" data-code="JO">+962</option>
                                                    <option value="7" data-country="Kazakhstan" data-code="KZ">+7</option>
                                                    <option value="254" data-country="Kenya" data-code="KE">+254</option>
                                                    <option value="686" data-country="Kiribati" data-code="KI">+686</option>
                                                    <option value="850" data-country="Korea, Democratic People's Republic of Korea" data-code="KP">+850</option>
                                                    <option value="82" data-country="Korea, Republic of South Korea" data-code="KR">+82</option>
                                                    <option value="383" data-country="Kosovo" data-code="XK">+383</option>
                                                    <option value="965" data-country="Kuwait" data-code="KW">+965</option>
                                                    <option value="996" data-country="Kyrgyzstan" data-code="KG">+996</option>
                                                    <option value="856" data-country="Laos" data-code="LA">+856</option>
                                                    <option value="371" data-country="Latvia" data-code="LV">+371</option>
                                                    <option value="961" data-country="Lebanon" data-code="LB">+961</option>
                                                    <option value="266" data-country="Lesotho" data-code="LS">+266</option>
                                                    <option value="231" data-country="Liberia" data-code="LR">+231</option>
                                                    <option value="218" data-country="Libyan Arab Jamahiriya" data-code="LY">+218</option>
                                                    <option value="423" data-country="Liechtenstein" data-code="LI">+423</option>
                                                    <option value="370" data-country="Lithuania" data-code="LT">+370</option>
                                                    <option value="352" data-country="Luxembourg" data-code="LU">+352</option>
                                                    <option value="853" data-country="Macao" data-code="MO">+853</option>
                                                    <option value="389" data-country="Macedonia" data-code="MK">+389</option>
                                                    <option value="261" data-country="Madagascar" data-code="MG">+261</option>
                                                    <option value="265" data-country="Malawi" data-code="MW">+265</option>
                                                    <option value="60" data-country="Malaysia" data-code="MY">+60</option>
                                                    <option value="960" data-country="Maldives" data-code="MV">+960</option>
                                                    <option value="223" data-country="Mali" data-code="ML">+223</option>
                                                    <option value="356" data-country="Malta" data-code="MT">+356</option>
                                                    <option value="692" data-country="Marshall Islands" data-code="MH">+692</option>
                                                    <option value="596" data-country="Martinique" data-code="MQ">+596</option>
                                                    <option value="222" data-country="Mauritania" data-code="MR">+222</option>
                                                    <option value="230" data-country="Mauritius" data-code="MU">+230</option>
                                                    <option value="262" data-country="Mayotte" data-code="YT">+262</option>
                                                    <option value="52" data-country="Mexico" data-code="MX">+52</option>
                                                    <option value="691" data-country="Micronesia, Federated States of Micronesia" data-code="FM">+691</option>
                                                    <option value="373" data-country="Moldova" data-code="MD">+373</option>
                                                    <option value="377" data-country="Monaco" data-code="MC">+377</option>
                                                    <option value="976" data-country="Mongolia" data-code="MN">+976</option>
                                                    <option value="382" data-country="Montenegro" data-code="ME">+382</option>
                                                    <option value="1664" data-country="Montserrat" data-code="MS">+1664</option>
                                                    <option value="212" data-country="Morocco" data-code="MA">+212</option>
                                                    <option value="258" data-country="Mozambique" data-code="MZ">+258</option>
                                                    <option value="95" data-country="Myanmar" data-code="MM">+95</option>
                                                    <option value="264" data-country="Namibia" data-code="NA">+264</option>
                                                    <option value="674" data-country="Nauru" data-code="NR">+674</option>
                                                    <option value="977" data-country="Nepal" data-code="NP">+977</option>
                                                    <option value="31" data-country="Netherlands" data-code="NL">+31</option>
                                                    <option value="599" data-country="Netherlands Antilles" data-code="AN">+599</option>
                                                    <option value="687" data-country="New Caledonia" data-code="NC">+687</option>
                                                    <option value="64" data-country="New Zealand" data-code="NZ">+64</option>
                                                    <option value="505" data-country="Nicaragua" data-code="NI">+505</option>
                                                    <option value="227" data-country="Niger" data-code="NE">+227</option>
                                                    <option value="234" data-country="Nigeria" data-code="NG">+234</option>
                                                    <option value="683" data-country="Niue" data-code="NU">+683</option>
                                                    <option value="672" data-country="Norfolk Island" data-code="NF">+672</option>
                                                    <option value="1670" data-country="Northern Mariana Islands" data-code="MP">+1670</option>
                                                    <option value="47" data-country="Norway" data-code="NO">+47</option>
                                                    <option value="968" data-country="Oman" data-code="OM">+968</option>
                                                    <option value="92" data-country="Pakistan" data-code="PK">+92</option>
                                                    <option value="680" data-country="Palau" data-code="PW">+680</option>
                                                    <option value="970" data-country="Palestinian Territory, Occupied" data-code="PS">+970</option>
                                                    <option value="507" data-country="Panama" data-code="PA">+507</option>
                                                    <option value="675" data-country="Papua New Guinea" data-code="PG">+675</option>
                                                    <option value="595" data-country="Paraguay" data-code="PY">+595</option>
                                                    <option value="51" data-country="Peru" data-code="PE">+51</option>
                                                    <option value="63" data-country="Philippines" data-code="PH">+63</option>
                                                    <option value="64" data-country="Pitcairn" data-code="PN">+64</option>
                                                    <option value="48" data-country="Poland" data-code="PL">+48</option>
                                                    <option value="351" data-country="Portugal" data-code="PT">+351</option>
                                                    <option value="1939" data-country="Puerto Rico" data-code="PR">+1939</option>
                                                    <option value="974" data-country="Qatar" data-code="QA">+974</option>
                                                    <option value="40" data-country="Romania" data-code="RO">+40</option>
                                                    <option value="7" data-country="Russia" data-code="RU">+7</option>
                                                    <option value="250" data-country="Rwanda" data-code="RW">+250</option>
                                                    <option value="262" data-country="Reunion" data-code="RE">+262</option>
                                                    <option value="590" data-country="Saint Barthelemy" data-code="BL">+590</option>
                                                    <option value="290" data-country="Saint Helena, Ascension and Tristan Da Cunha" data-code="SH">+290</option>
                                                    <option value="1869" data-country="Saint Kitts and Nevis" data-code="KN">+1869</option>
                                                    <option value="1758" data-country="Saint Lucia" data-code="LC">+1758</option>
                                                    <option value="590" data-country="Saint Martin" data-code="MF">+590</option>
                                                    <option value="508" data-country="Saint Pierre and Miquelon" data-code="PM">+508</option>
                                                    <option value="1784" data-country="Saint Vincent and the Grenadines" data-code="VC">+1784</option>
                                                    <option value="685" data-country="Samoa" data-code="WS">+685</option>
                                                    <option value="378" data-country="San Marino" data-code="SM">+378</option>
                                                    <option value="239" data-country="Sao Tome and Principe" data-code="ST">+239</option>
                                                    <option value="966" data-country="Saudi Arabia" data-code="SA">+966</option>
                                                    <option value="221" data-country="Senegal" data-code="SN">+221</option>
                                                    <option value="381" data-country="Serbia" data-code="RS">+381</option>
                                                    <option value="248" data-country="Seychelles" data-code="SC">+248</option>
                                                    <option value="232" data-country="Sierra Leone" data-code="SL">+232</option>
                                                    <option value="65" data-country="Singapore" data-code="SG">+65</option>
                                                    <option value="421" data-country="Slovakia" data-code="SK">+421</option>
                                                    <option value="386" data-country="Slovenia" data-code="SI">+386</option>
                                                    <option value="677" data-country="Solomon Islands" data-code="SB">+677</option>
                                                    <option value="252" data-country="Somalia" data-code="SO">+252</option>
                                                    <option value="27" data-country="South Africa" data-code="ZA">+27</option>
                                                    <option value="211" data-country="South Sudan" data-code="SS">+211</option>
                                                    <option value="500" data-country="South Georgia and the South Sandwich Islands" data-code="GS">+500</option>
                                                    <option value="34" data-country="Spain" data-code="ES">+34</option>
                                                    <option value="94" data-country="Sri Lanka" data-code="LK">+94</option>
                                                    <option value="249" data-country="Sudan" data-code="SD">+249</option>
                                                    <option value="597" data-country="Suriname" data-code="SR">+597</option>
                                                    <option value="47" data-country="Svalbard and Jan Mayen" data-code="SJ">+47</option>
                                                    <option value="268" data-country="Swaziland" data-code="SZ">+268</option>
                                                    <option value="46" data-country="Sweden" data-code="SE">+46</option>
                                                    <option value="41" data-country="Switzerland" data-code="CH">+41</option>
                                                    <option value="963" data-country="Syrian Arab Republic" data-code="SY">+963</option>
                                                    <option value="886" data-country="Taiwan" data-code="TW">+886</option>
                                                    <option value="992" data-country="Tajikistan" data-code="TJ">+992</option>
                                                    <option value="255" data-country="Tanzania, United Republic of Tanzania" data-code="TZ">+255</option>
                                                    <option value="66" data-country="Thailand" data-code="TH">+66</option>
                                                    <option value="670" data-country="Timor-Leste" data-code="TL">+670</option>
                                                    <option value="228" data-country="Togo" data-code="TG">+228</option>
                                                    <option value="690" data-country="Tokelau" data-code="TK">+690</option>
                                                    <option value="676" data-country="Tonga" data-code="TO">+676</option>
                                                    <option value="1868" data-country="Trinidad and Tobago" data-code="TT">+1868</option>
                                                    <option value="216" data-country="Tunisia" data-code="TN">+216</option>
                                                    <option value="90" data-country="Turkey" data-code="TR">+90</option>
                                                    <option value="993" data-country="Turkmenistan" data-code="TM">+993</option>
                                                    <option value="1649" data-country="Turks and Caicos Islands" data-code="TC">+1649</option>
                                                    <option value="688" data-country="Tuvalu" data-code="TV">+688</option>
                                                    <option value="256" data-country="Uganda" data-code="UG">+256</option>
                                                    <option value="380" data-country="Ukraine" data-code="UA">+380</option>
                                                    <option value="971" data-country="United Arab Emirates" data-code="AE">+971</option>
                                                    <option value="44" data-country="United Kingdom" data-code="GB" selected="selected">+44</option>
                                                    <option value="1" data-country="United States" data-code="US">+1</option>
                                                    <option value="598" data-country="Uruguay" data-code="UY">+598</option>
                                                    <option value="998" data-country="Uzbekistan" data-code="UZ">+998</option>
                                                    <option value="678" data-country="Vanuatu" data-code="VU">+678</option>
                                                    <option value="58" data-country="Venezuela, Bolivarian Republic of Venezuela" data-code="VE">+58</option>
                                                    <option value="84" data-country="Vietnam" data-code="VN">+84</option>
                                                    <option value="1284" data-country="Virgin Islands, British" data-code="VG">+1284</option>
                                                    <option value="1340" data-country="Virgin Islands, U.S." data-code="VI">+1340</option>
                                                    <option value="681" data-country="Wallis and Futuna" data-code="WF">+681</option>
                                                    <option value="967" data-country="Yemen" data-code="YE">+967</option>
                                                    <option value="260" data-country="Zambia" data-code="ZM">+260</option>
                                                    <option value="263" data-country="Zimbabwe" data-code="ZW">+263</option>
                                                </select>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="mobile" id="mobile" required="" placeholder="Mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="country">Country <span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" name="country" id="country" placeholder="Country" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email <span class="required">*</span>
                                </label>
                                <input type="email" class="form-control" name="email" id="email" required="" placeholder="Email" value="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="password">Password <span class="required">*</span>
                                </label>
                                <ul>
                                    <li>Please make a password more than 8 character</li>
                                    <li>The Password should contain a uppercase later</li>
                                    <li>The password should contain special character(@!,./{}\*&%#)</li>
                                    <li>Password should not contain any part of your email!</li>
                                </ul>
                                <input type="password" class="form-control" name="password" id="password" required="" placeholder="Password">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="password-repeat">Confirm Password <span class="required">*</span>
                                </label>
                                <input type="password" class="form-control" name="password_confirmation" id="password-repeat" required="" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="c1" name="terms">
                                    <label for="c1">I have read agreed with the <a href="https://skillstest.me/links/terms-and-condition/77" class="mr-2">Terms and Condition</a>
                                        <a href="https://skillstest.me/links/privacy-policy/78" class="mr-2">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 form-group pt-3">
                                <button class="btn btn-success btn-block" type="submit">Register Now</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center pt-2">
                        <span class="text-muted">Already Have An Account ?</span>
                        <a itemprop="url" href="../index.php" title="Login Now">Login Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>