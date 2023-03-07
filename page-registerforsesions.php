<?php /* Template Name: Page_Registor */ ?>

<?php 
require('wp-blog-header.php');
get_header(); ?>
<link href="https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1549804213570" rel="stylesheet" media="screen">
	<script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>
<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script> -->
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <!-- <div class="py-5 step1">
					<div class="container">
						<div class="row pb-3">
							<div class="col-md-3">
								<h4 class="text-center"><span class="badge badge-pill badge-dark p-2">#1</span> Step One <span class="badge p-2 text-center"> &gt; </span></h4>
							</div>
							<div class="col-md-3">
								<h4 class="text-center"><span class="badge badge-pill p-2 badge-light">#2</span> Step Two <span class="badge p-2 text-center"> &gt; </span></h4>
							</div>
							<div class="col-md-3">
								<h4 class="text-center"><span class="badge badge-pill p-2 badge-light">#3</span> Step Three <span class="badge p-2 text-center"> &gt; </span></h4>
							</div>
							<div class="col-md-3">
								<h4 class="text-center"><span class="badge badge-pill p-2 badge-light">#4</span> Step Four <span class="badge p-2 text-center"> &gt; </span></h4>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="p-5 col-md-8 border border-dark">
								<h2 style="" class="text-center pb-3">Create your expert account</h2><a class="btn btn-outline-dark mb-3 btn-block" href="#">Sign up with Google</a>
								<div class="form-group pb-2"> <label>Username </label> <input type="text" class="form-control" placeholder="Enter a username"> </div>
								<div class="form-group pb-2"> <label>Password</label> <input type="password" class="form-control" placeholder="Password"> </div> <button type="submit" class="btn text-center btn-lg w-25 btn-dark float-right">Next</button>
							</div>
						</div>
					</div>
				</div> -->
            <div class="py-5 step2">
                <div class="container">
                    <div class="row pb-4">
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill badge-dark p-2">1</span> Step One <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-dark">2</span> Step Two <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"></span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-light">3</span> Step Three <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"></span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-light">4</span> Step Four <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="p-5 col-md-8 border border-dark">
                            <h2 style="" class="text-center pb-3">Fill in User account information</h2>
						
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="fform16">First Name <span class="req">*</span></label> <input type="text" class="form-control" id="fform16" autocomplete="off"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="lform16">Last Name</label> <input type="text" class="form-control" id="lform16" autocomplete="off"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="form17">Phone Number <span class="req">*</span></label> <input type="tel" class="form-control" id="form17" placeholder="placeholder="e.g. +1 702 123 4567" value="+1 "" autocomplete="off" value="+1 " required>
<!-- 									<input class="form-control" type="tel" id="form17" placeholder="e.g. +1 702 123 4567" value="+1 "> -->
									</div>
                                    <div style="display:none;" class="form-group"> <label>Email <span class="req">*</span></label> <input type="email" class="form-control" placeholder="Enter email here" id="formemail" autocomplete="off" > </div>
                                    <div class="form-group pb-2"> <label>Time Zone <span class="req">*</span></label>
                                        <select class="form-control" id="timezoneh" required>
                                            <option value="Select Time Zone">Select Time Zone</option>
                                            <option value="Africa/Abidjan">Africa/Abidjan</option>
                                            <option value="Africa/Accra">Africa/Accra</option>
                                            <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                            <option value="Africa/Algiers">Africa/Algiers</option>
                                            <option value="Africa/Asmara">Africa/Asmara</option>
                                            <option value="Africa/Bamako">Africa/Bamako</option>
                                            <option value="Africa/Bangui">Africa/Bangui</option>
                                            <option value="Africa/Banjul">Africa/Banjul</option>
                                            <option value="Africa/Bissau">Africa/Bissau</option>
                                            <option value="Africa/Blantyre">Africa/Blantyre</option>
                                            <option value="Africa/Brazzaville">Africa/Brazzaville</option>
                                            <option value="Africa/Bujumbura">Africa/Bujumbura</option>
                                            <option value="Africa/Cairo">Africa/Cairo</option>
                                            <option value="Africa/Casablanca">Africa/Casablanca</option>
                                            <option value="Africa/Ceuta">Africa/Ceuta</option>
                                            <option value="Africa/Conakry">Africa/Conakry</option>
                                            <option value="Africa/Dakar">Africa/Dakar</option>
                                            <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                            <option value="Africa/Djibouti">Africa/Djibouti</option>
                                            <option value="Africa/Douala">Africa/Douala</option>
                                            <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                            <option value="Africa/Freetown">Africa/Freetown</option>
                                            <option value="Africa/Gaborone">Africa/Gaborone</option>
                                            <option value="Africa/Harare">Africa/Harare</option>
                                            <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                            <option value="Africa/Juba">Africa/Juba</option>
                                            <option value="Africa/Kampala">Africa/Kampala</option>
                                            <option value="Africa/Khartoum">Africa/Khartoum</option>
                                            <option value="Africa/Kigali">Africa/Kigali</option>
                                            <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                            <option value="Africa/Lagos">Africa/Lagos</option>
                                            <option value="Africa/Libreville">Africa/Libreville</option>
                                            <option value="Africa/Lome">Africa/Lome</option>
                                            <option value="Africa/Luanda">Africa/Luanda</option>
                                            <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                                            <option value="Africa/Lusaka">Africa/Lusaka</option>
                                            <option value="Africa/Malabo">Africa/Malabo</option>
                                            <option value="Africa/Maputo">Africa/Maputo</option>
                                            <option value="Africa/Maseru">Africa/Maseru</option>
                                            <option value="Africa/Mbabane">Africa/Mbabane</option>
                                            <option value="Africa/Mogadishu">Africa/Mogadishu</option>
                                            <option value="Africa/Monrovia">Africa/Monrovia</option>
                                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                                            <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                            <option value="Africa/Niamey">Africa/Niamey</option>
                                            <option value="Africa/Nouakchott">Africa/Nouakchott</option>
                                            <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                                            <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                                            <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                            <option value="Africa/Tripoli">Africa/Tripoli</option>
                                            <option value="Africa/Tunis">Africa/Tunis</option>
                                            <option value="Africa/Windhoek">Africa/Windhoek</option>
                                            <option value="America/Adak">America/Adak</option>
                                            <option value="America/Anchorage">America/Anchorage</option>
                                            <option value="America/Anguilla">America/Anguilla</option>
                                            <option value="America/Antigua">America/Antigua</option>
                                            <option value="America/Araguaina">America/Araguaina</option>
                                            <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                                            <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                                            <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                            <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                            <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                                            <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                            <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                                            <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                                            <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                                            <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                                            <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                            <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                            <option value="America/Aruba">America/Aruba</option>
                                            <option value="America/Asuncion">America/Asuncion</option>
                                            <option value="America/Atikokan">America/Atikokan</option>
                                            <option value="America/Bahia">America/Bahia</option>
                                            <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                                            <option value="America/Barbados">America/Barbados</option>
                                            <option value="America/Belem">America/Belem</option>
                                            <option value="America/Belize">America/Belize</option>
                                            <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                            <option value="America/Boa_Vista">America/Boa_Vista</option>
                                            <option value="America/Bogota">America/Bogota</option>
                                            <option value="America/Boise">America/Boise</option>
                                            <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                            <option value="America/Campo_Grande">America/Campo_Grande</option>
                                            <option value="America/Cancun">America/Cancun</option>
                                            <option value="America/Caracas">America/Caracas</option>
                                            <option value="America/Cayenne">America/Cayenne</option>
                                            <option value="America/Cayman">America/Cayman</option>
                                            <option value="America/Chicago">America/Chicago</option>
                                            <option value="America/Chihuahua">America/Chihuahua</option>
                                            <option value="America/Costa_Rica">America/Costa_Rica</option>
                                            <option value="America/Creston">America/Creston</option>
                                            <option value="America/Cuiaba">America/Cuiaba</option>
                                            <option value="America/Curacao">America/Curacao</option>
                                            <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                            <option value="America/Dawson">America/Dawson</option>
                                            <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                            <option value="America/Denver">America/Denver</option>
                                            <option value="America/Detroit">America/Detroit</option>
                                            <option value="America/Dominica">America/Dominica</option>
                                            <option value="America/Edmonton">America/Edmonton</option>
                                            <option value="America/Eirunepe">America/Eirunepe</option>
                                            <option value="America/El_Salvador">America/El_Salvador</option>
                                            <option value="America/Fort_Nelson">America/Fort_Nelson</option>
                                            <option value="America/Fortaleza">America/Fortaleza</option>
                                            <option value="America/Glace_Bay">America/Glace_Bay</option>
                                            <option value="America/Goose_Bay">America/Goose_Bay</option>
                                            <option value="America/Grand_Turk">America/Grand_Turk</option>
                                            <option value="America/Grenada">America/Grenada</option>
                                            <option value="America/Guadeloupe">America/Guadeloupe</option>
                                            <option value="America/Guatemala">America/Guatemala</option>
                                            <option value="America/Guayaquil">America/Guayaquil</option>
                                            <option value="America/Guyana">America/Guyana</option>
                                            <option value="America/Halifax">America/Halifax</option>
                                            <option value="America/Havana">America/Havana</option>
                                            <option value="America/Hermosillo">America/Hermosillo</option>
                                            <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                            <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                            <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                                            <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                            <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                            <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                            <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                            <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                                            <option value="America/Inuvik">America/Inuvik</option>
                                            <option value="America/Iqaluit">America/Iqaluit</option>
                                            <option value="America/Jamaica">America/Jamaica</option>
                                            <option value="America/Juneau">America/Juneau</option>
                                            <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                            <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                            <option value="America/Kralendijk">America/Kralendijk</option>
                                            <option value="America/La_Paz">America/La_Paz</option>
                                            <option value="America/Lima">America/Lima</option>
                                            <option value="America/Los_Angeles">America/Los_Angeles</option>
                                            <option value="America/Lower_Princes">America/Lower_Princes</option>
                                            <option value="America/Maceio">America/Maceio</option>
                                            <option value="America/Managua">America/Managua</option>
                                            <option value="America/Manaus">America/Manaus</option>
                                            <option value="America/Marigot">America/Marigot</option>
                                            <option value="America/Martinique">America/Martinique</option>
                                            <option value="America/Matamoros">America/Matamoros</option>
                                            <option value="America/Mazatlan">America/Mazatlan</option>
                                            <option value="America/Menominee">America/Menominee</option>
                                            <option value="America/Merida">America/Merida</option>
                                            <option value="America/Metlakatla">America/Metlakatla</option>
                                            <option value="America/Mexico_City">America/Mexico_City</option>
                                            <option value="America/Miquelon">America/Miquelon</option>
                                            <option value="America/Moncton">America/Moncton</option>
                                            <option value="America/Monterrey">America/Monterrey</option>
                                            <option value="America/Montevideo">America/Montevideo</option>
                                            <option value="America/Montserrat">America/Montserrat</option>
                                            <option value="America/Nassau">America/Nassau</option>
                                            <option value="America/New_York">America/New_York</option>
                                            <option value="America/Nipigon">America/Nipigon</option>
                                            <option value="America/Nome">America/Nome</option>
                                            <option value="America/Noronha">America/Noronha</option>
                                            <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                            <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                                            <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                            <option value="America/Nuuk">America/Nuuk</option>
                                            <option value="America/Ojinaga">America/Ojinaga</option>
                                            <option value="America/Panama">America/Panama</option>
                                            <option value="America/Pangnirtung">America/Pangnirtung</option>
                                            <option value="America/Paramaribo">America/Paramaribo</option>
                                            <option value="America/Phoenix">America/Phoenix</option>
                                            <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                                            <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                            <option value="America/Porto_Velho">America/Porto_Velho</option>
                                            <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                            <option value="America/Punta_Arenas">America/Punta_Arenas</option>
                                            <option value="America/Rainy_River">America/Rainy_River</option>
                                            <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                            <option value="America/Regina">America/Regina</option>
                                            <option value="America/Resolute">America/Resolute</option>
                                            <option value="America/Rio_Branco">America/Rio_Branco</option>
                                            <option value="America/Santarem">America/Santarem</option>
                                            <option value="America/Santiago">America/Santiago</option>
                                            <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                            <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                                            <option value="America/Scoresbysund">America/Scoresbysund</option>
                                            <option value="America/Sitka">America/Sitka</option>
                                            <option value="America/St_Barthelemy">America/St_Barthelemy</option>
                                            <option value="America/St_Johns">America/St_Johns</option>
                                            <option value="America/St_Kitts">America/St_Kitts</option>
                                            <option value="America/St_Lucia">America/St_Lucia</option>
                                            <option value="America/St_Thomas">America/St_Thomas</option>
                                            <option value="America/St_Vincent">America/St_Vincent</option>
                                            <option value="America/Swift_Current">America/Swift_Current</option>
                                            <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                            <option value="America/Thule">America/Thule</option>
                                            <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                                            <option value="America/Tijuana">America/Tijuana</option>
                                            <option value="America/Toronto">America/Toronto</option>
                                            <option value="America/Tortola">America/Tortola</option>
                                            <option value="America/Vancouver">America/Vancouver</option>
                                            <option value="America/Whitehorse">America/Whitehorse</option>
                                            <option value="America/Winnipeg">America/Winnipeg</option>
                                            <option value="America/Yakutat">America/Yakutat</option>
                                            <option value="America/Yellowknife">America/Yellowknife</option>
                                            <option value="Antarctica/Casey">Antarctica/Casey</option>
                                            <option value="Antarctica/Davis">Antarctica/Davis</option>
                                            <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                            <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                            <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                            <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                                            <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                            <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                            <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                            <option value="Antarctica/Troll">Antarctica/Troll</option>
                                            <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                                            <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                                            <option value="Asia/Aden">Asia/Aden</option>
                                            <option value="Asia/Almaty">Asia/Almaty</option>
                                            <option value="Asia/Amman">Asia/Amman</option>
                                            <option value="Asia/Anadyr">Asia/Anadyr</option>
                                            <option value="Asia/Aqtau">Asia/Aqtau</option>
                                            <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                            <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                            <option value="Asia/Atyrau">Asia/Atyrau</option>
                                            <option value="Asia/Baghdad">Asia/Baghdad</option>
                                            <option value="Asia/Bahrain">Asia/Bahrain</option>
                                            <option value="Asia/Baku">Asia/Baku</option>
                                            <option value="Asia/Bangkok">Asia/Bangkok</option>
                                            <option value="Asia/Barnaul">Asia/Barnaul</option>
                                            <option value="Asia/Beirut">Asia/Beirut</option>
                                            <option value="Asia/Bishkek">Asia/Bishkek</option>
                                            <option value="Asia/Brunei">Asia/Brunei</option>
                                            <option value="Asia/Chita">Asia/Chita</option>
                                            <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                            <option value="Asia/Colombo">Asia/Colombo</option>
                                            <option value="Asia/Damascus">Asia/Damascus</option>
                                            <option value="Asia/Dhaka">Asia/Dhaka</option>
                                            <option value="Asia/Dili">Asia/Dili</option>
                                            <option value="Asia/Dubai">Asia/Dubai</option>
                                            <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                            <option value="Asia/Famagusta">Asia/Famagusta</option>
                                            <option value="Asia/Gaza">Asia/Gaza</option>
                                            <option value="Asia/Hebron">Asia/Hebron</option>
                                            <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                            <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                            <option value="Asia/Hovd">Asia/Hovd</option>
                                            <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                            <option value="Asia/Jakarta">Asia/Jakarta</option>
                                            <option value="Asia/Jayapura">Asia/Jayapura</option>
                                            <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                            <option value="Asia/Kabul">Asia/Kabul</option>
                                            <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                            <option value="Asia/Karachi">Asia/Karachi</option>
                                            <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                            <option value="Asia/Khandyga">Asia/Khandyga</option>
                                            <option value="Asia/Kolkata">Asia/Kolkata</option>
                                            <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                            <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                            <option value="Asia/Kuching">Asia/Kuching</option>
                                            <option value="Asia/Kuwait">Asia/Kuwait</option>
                                            <option value="Asia/Macau">Asia/Macau</option>
                                            <option value="Asia/Magadan">Asia/Magadan</option>
                                            <option value="Asia/Makassar">Asia/Makassar</option>
                                            <option value="Asia/Manila">Asia/Manila</option>
                                            <option value="Asia/Muscat">Asia/Muscat</option>
                                            <option value="Asia/Nicosia">Asia/Nicosia</option>
                                            <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                            <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                            <option value="Asia/Omsk">Asia/Omsk</option>
                                            <option value="Asia/Oral">Asia/Oral</option>
                                            <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                            <option value="Asia/Pontianak">Asia/Pontianak</option>
                                            <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                            <option value="Asia/Qatar">Asia/Qatar</option>
                                            <option value="Asia/Qostanay">Asia/Qostanay</option>
                                            <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                            <option value="Asia/Riyadh">Asia/Riyadh</option>
                                            <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                            <option value="Asia/Samarkand">Asia/Samarkand</option>
                                            <option value="Asia/Seoul">Asia/Seoul</option>
                                            <option value="Asia/Shanghai">Asia/Shanghai</option>
                                            <option value="Asia/Singapore">Asia/Singapore</option>
                                            <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                                            <option value="Asia/Taipei">Asia/Taipei</option>
                                            <option value="Asia/Tashkent">Asia/Tashkent</option>
                                            <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                            <option value="Asia/Tehran">Asia/Tehran</option>
                                            <option value="Asia/Thimphu">Asia/Thimphu</option>
                                            <option value="Asia/Tokyo">Asia/Tokyo</option>
                                            <option value="Asia/Tomsk">Asia/Tomsk</option>
                                            <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                            <option value="Asia/Urumqi">Asia/Urumqi</option>
                                            <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                                            <option value="Asia/Vientiane">Asia/Vientiane</option>
                                            <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                            <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                            <option value="Asia/Yangon">Asia/Yangon</option>
                                            <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                            <option value="Asia/Yerevan">Asia/Yerevan</option>
                                            <option value="Atlantic/Azores">Atlantic/Azores</option>
                                            <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                            <option value="Atlantic/Canary">Atlantic/Canary</option>
                                            <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                            <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                            <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                            <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                            <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                            <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                                            <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                                            <option value="Australia/Adelaide">Australia/Adelaide</option>
                                            <option value="Australia/Brisbane">Australia/Brisbane</option>
                                            <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                            <option value="Australia/Darwin">Australia/Darwin</option>
                                            <option value="Australia/Eucla">Australia/Eucla</option>
                                            <option value="Australia/Hobart">Australia/Hobart</option>
                                            <option value="Australia/Lindeman">Australia/Lindeman</option>
                                            <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                            <option value="Australia/Melbourne">Australia/Melbourne</option>
                                            <option value="Australia/Perth">Australia/Perth</option>
                                            <option value="Australia/Sydney">Australia/Sydney</option>
                                            <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                            <option value="Europe/Andorra">Europe/Andorra</option>
                                            <option value="Europe/Astrakhan">Europe/Astrakhan</option>
                                            <option value="Europe/Athens">Europe/Athens</option>
                                            <option value="Europe/Belgrade">Europe/Belgrade</option>
                                            <option value="Europe/Berlin">Europe/Berlin</option>
                                            <option value="Europe/Bratislava">Europe/Bratislava</option>
                                            <option value="Europe/Brussels">Europe/Brussels</option>
                                            <option value="Europe/Bucharest">Europe/Bucharest</option>
                                            <option value="Europe/Budapest">Europe/Budapest</option>
                                            <option value="Europe/Busingen">Europe/Busingen</option>
                                            <option value="Europe/Chisinau">Europe/Chisinau</option>
                                            <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                            <option value="Europe/Dublin">Europe/Dublin</option>
                                            <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                            <option value="Europe/Guernsey">Europe/Guernsey</option>
                                            <option value="Europe/Helsinki">Europe/Helsinki</option>
                                            <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                            <option value="Europe/Istanbul">Europe/Istanbul</option>
                                            <option value="Europe/Jersey">Europe/Jersey</option>
                                            <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                            <option value="Europe/Kiev">Europe/Kiev</option>
                                            <option value="Europe/Kirov">Europe/Kirov</option>
                                            <option value="Europe/Lisbon">Europe/Lisbon</option>
                                            <option value="Europe/Ljubljana">Europe/Ljubljana</option>
                                            <option value="Europe/London">Europe/London</option>
                                            <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                            <option value="Europe/Madrid">Europe/Madrid</option>
                                            <option value="Europe/Malta">Europe/Malta</option>
                                            <option value="Europe/Mariehamn">Europe/Mariehamn</option>
                                            <option value="Europe/Minsk">Europe/Minsk</option>
                                            <option value="Europe/Monaco">Europe/Monaco</option>
                                            <option value="Europe/Moscow">Europe/Moscow</option>
                                            <option value="Europe/Oslo">Europe/Oslo</option>
                                            <option value="Europe/Paris">Europe/Paris</option>
                                            <option value="Europe/Podgorica">Europe/Podgorica</option>
                                            <option value="Europe/Prague">Europe/Prague</option>
                                            <option value="Europe/Riga">Europe/Riga</option>
                                            <option value="Europe/Rome">Europe/Rome</option>
                                            <option value="Europe/Samara">Europe/Samara</option>
                                            <option value="Europe/San_Marino">Europe/San_Marino</option>
                                            <option value="Europe/Sarajevo">Europe/Sarajevo</option>
                                            <option value="Europe/Saratov">Europe/Saratov</option>
                                            <option value="Europe/Simferopol">Europe/Simferopol</option>
                                            <option value="Europe/Skopje">Europe/Skopje</option>
                                            <option value="Europe/Sofia">Europe/Sofia</option>
                                            <option value="Europe/Stockholm">Europe/Stockholm</option>
                                            <option value="Europe/Tallinn">Europe/Tallinn</option>
                                            <option value="Europe/Tirane">Europe/Tirane</option>
                                            <option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
                                            <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                                            <option value="Europe/Vaduz">Europe/Vaduz</option>
                                            <option value="Europe/Vatican">Europe/Vatican</option>
                                            <option value="Europe/Vienna">Europe/Vienna</option>
                                            <option value="Europe/Vilnius">Europe/Vilnius</option>
                                            <option value="Europe/Volgograd">Europe/Volgograd</option>
                                            <option value="Europe/Warsaw">Europe/Warsaw</option>
                                            <option value="Europe/Zagreb">Europe/Zagreb</option>
                                            <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                                            <option value="Europe/Zurich">Europe/Zurich</option>
                                            <option value="Indian/Antananarivo">Indian/Antananarivo</option>
                                            <option value="Indian/Chagos">Indian/Chagos</option>
                                            <option value="Indian/Christmas">Indian/Christmas</option>
                                            <option value="Indian/Cocos">Indian/Cocos</option>
                                            <option value="Indian/Comoro">Indian/Comoro</option>
                                            <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                            <option value="Indian/Mahe">Indian/Mahe</option>
                                            <option value="Indian/Maldives">Indian/Maldives</option>
                                            <option value="Indian/Mauritius">Indian/Mauritius</option>
                                            <option value="Indian/Mayotte">Indian/Mayotte</option>
                                            <option value="Indian/Reunion">Indian/Reunion</option>
                                            <option value="Pacific/Apia">Pacific/Apia</option>
                                            <option value="Pacific/Auckland">Pacific/Auckland</option>
                                            <option value="Pacific/Bougainville">Pacific/Bougainville</option>
                                            <option value="Pacific/Chatham">Pacific/Chatham</option>
                                            <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                            <option value="Pacific/Easter">Pacific/Easter</option>
                                            <option value="Pacific/Efate">Pacific/Efate</option>
                                            <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                            <option value="Pacific/Fiji">Pacific/Fiji</option>
                                            <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                            <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                            <option value="Pacific/Gambier">Pacific/Gambier</option>
                                            <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                            <option value="Pacific/Guam">Pacific/Guam</option>
                                            <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                            <option value="Pacific/Kanton">Pacific/Kanton</option>
                                            <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                            <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                            <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                            <option value="Pacific/Majuro">Pacific/Majuro</option>
                                            <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                            <option value="Pacific/Midway">Pacific/Midway</option>
                                            <option value="Pacific/Nauru">Pacific/Nauru</option>
                                            <option value="Pacific/Niue">Pacific/Niue</option>
                                            <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                            <option value="Pacific/Noumea">Pacific/Noumea</option>
                                            <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                            <option value="Pacific/Palau">Pacific/Palau</option>
                                            <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                            <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                            <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                            <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                            <option value="Pacific/Saipan">Pacific/Saipan</option>
                                            <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                            <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                            <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                            <option value="Pacific/Wake">Pacific/Wake</option>
                                            <option value="Pacific/Wallis">Pacific/Wallis</option>
                                            <option value="UTC">UTC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-6"><button type="submit" class="btn text-center btn-lg float-left btn-light border border-dark w-50">Back</button></div> -->
                                <div class="col-md-12 text-center"><button type="submit" class="btn text-center btn-lg btn-dark w-50">Next</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 step3">
                <div class="container">
                    <div class="row pb-4">
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill badge-dark p-2">1</span> Step One <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-dark">2</span> Step Two <span class="badge p-2 text-center"> <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-dark">3</span> Step Three <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-light">4</span> Step Four <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"></span></h4>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="p-5 col-md-8 border border-dark">
                            <h2 style="" class="text-center pb-3">More about you</h2>
                            <div class="row justify-content-center pb-4">
                                <div class="col-md-12 justify-content-center d-flex"><a class="imgupl rounded-circle py-4 px-4 btn-dark" href="#" id="pho"><i class="fa fa-fw fa-1x fa-camera fa-3x py-1"></i></a><img id="blah" src="#" alt="your image" /></div>
                                <input hidden accept="image/*" type='file' id="imgInp" />
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="form16">Short bio <span class="req">*</span><span class="tooltext"><img src="/wp-content/uploads/2022/10/i.png">
                                                <span class="tooltiphovertext">Describe about yourself</span>
                                            </span>
                                        </label> <textarea class="form-control h-25" aria-label="With textarea" placeholder="Add bio here" id="bioh" required></textarea> </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
									<div class="form-group pb-2"> <label> Language <span class="req">*</span><span class="tooltext"><img src="/wp-content/uploads/2022/10/i.png">
                                                <span class="tooltiphovertext">Choose one of the languages</span></span></label>
                                        <select class="form-control" id="languageh" required>
                                            <option value="Select Language">Select Language</option>
                                            <option value="af">Afrikaans</option>
                                            <option value="sq">Albanian - shqip</option>
                                            <option value="am">Amharic - አማርኛ</option>
                                            <option value="ar">Arabic - العربية</option>
                                            <option value="an">Aragonese - aragonés</option>
                                            <option value="hy">Armenian - հայերեն</option>
                                            <option value="ast">Asturian - asturianu</option>
                                            <option value="az">Azerbaijani - azərbaycan dili</option>
                                            <option value="eu">Basque - euskara</option>
                                            <option value="be">Belarusian - беларуская</option>
                                            <option value="bn">Bengali - বাংলা</option>
                                            <option value="bs">Bosnian - bosanski</option>
                                            <option value="br">Breton - brezhoneg</option>
                                            <option value="bg">Bulgarian - български</option>
                                            <option value="ca">Catalan - català</option>
                                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                            <option value="zh">Chinese - 中文</option>
                                            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                            <option value="co">Corsican</option>
                                            <option value="hr">Croatian - hrvatski</option>
                                            <option value="cs">Czech - čeština</option>
                                            <option value="da">Danish - dansk</option>
                                            <option value="nl">Dutch - Nederlands</option>
                                            <option value="en">English</option>
                                            <option value="en-AU">English (Australia)</option>
                                            <option value="en-CA">English (Canada)</option>
                                            <option value="en-IN">English (India)</option>
                                            <option value="en-NZ">English (New Zealand)</option>
                                            <option value="en-ZA">English (South Africa)</option>
                                            <option value="en-GB">English (United Kingdom)</option>
                                            <option value="en-US">English (United States)</option>
                                            <option value="eo">Esperanto - esperanto</option>
                                            <option value="et">Estonian - eesti</option>
                                            <option value="fo">Faroese - føroyskt</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fi">Finnish - suomi</option>
                                            <option value="fr">French - français</option>
                                            <option value="fr-CA">French (Canada) - français (Canada)</option>
                                            <option value="fr-FR">French (France) - français (France)</option>
                                            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                            <option value="gl">Galician - galego</option>
                                            <option value="ka">Georgian - ქართული</option>
                                            <option value="de">German - Deutsch</option>
                                            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                            <option value="el">Greek - Ελληνικά</option>
                                            <option value="gn">Guarani</option>
                                            <option value="gu">Gujarati - ગુજરાતી</option>
                                            <option value="ha">Hausa</option>
                                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                            <option value="he">Hebrew - עברית</option>
                                            <option value="hi">Hindi - हिन्दी</option>
                                            <option value="hu">Hungarian - magyar</option>
                                            <option value="is">Icelandic - íslenska</option>
                                            <option value="id">Indonesian - Indonesia</option>
                                            <option value="ia">Interlingua</option>
                                            <option value="ga">Irish - Gaeilge</option>
                                            <option value="it">Italian - italiano</option>
                                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                            <option value="ja">Japanese - 日本語</option>
                                            <option value="kn">Kannada - ಕನ್ನಡ</option>
                                            <option value="kk">Kazakh - қазақ тілі</option>
                                            <option value="km">Khmer - ខ្មែរ</option>
                                            <option value="ko">Korean - 한국어</option>
                                            <option value="ku">Kurdish - Kurdî</option>
                                            <option value="ky">Kyrgyz - кыргызча</option>
                                            <option value="lo">Lao - ລາວ</option>
                                            <option value="la">Latin</option>
                                            <option value="lv">Latvian - latviešu</option>
                                            <option value="ln">Lingala - lingála</option>
                                            <option value="lt">Lithuanian - lietuvių</option>
                                            <option value="mk">Macedonian - македонски</option>
                                            <option value="ms">Malay - Bahasa Melayu</option>
                                            <option value="ml">Malayalam - മലയാളം</option>
                                            <option value="mt">Maltese - Malti</option>
                                            <option value="mr">Marathi - मराठी</option>
                                            <option value="mn">Mongolian - монгол</option>
                                            <option value="ne">Nepali - नेपाली</option>
                                            <option value="no">Norwegian - norsk</option>
                                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                            <option value="oc">Occitan</option>
                                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                            <option value="om">Oromo - Oromoo</option>
                                            <option value="ps">Pashto - پښتو</option>
                                            <option value="fa">Persian - فارسی</option>
                                            <option value="pl">Polish - polski</option>
                                            <option value="pt">Portuguese - português</option>
                                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                            <option value="qu">Quechua</option>
                                            <option value="ro">Romanian - română</option>
                                            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                            <option value="rm">Romansh - rumantsch</option>
                                            <option value="ru">Russian - русский</option>
                                            <option value="gd">Scottish Gaelic</option>
                                            <option value="sr">Serbian - српски</option>
                                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                            <option value="sn">Shona - chiShona</option>
                                            <option value="sd">Sindhi</option>
                                            <option value="si">Sinhala - සිංහල</option>
                                            <option value="sk">Slovak - slovenčina</option>
                                            <option value="sl">Slovenian - slovenščina</option>
                                            <option value="so">Somali - Soomaali</option>
                                            <option value="st">Southern Sotho</option>
                                            <option value="es">Spanish - español</option>
                                            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                            <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                            <option value="es-ES">Spanish (Spain) - español (España)</option>
                                            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                            <option value="su">Sundanese</option>
                                            <option value="sw">Swahili - Kiswahili</option>
                                            <option value="sv">Swedish - svenska</option>
                                            <option value="tg">Tajik - тоҷикӣ</option>
                                            <option value="ta">Tamil - தமிழ்</option>
                                            <option value="tt">Tatar</option>
                                            <option value="te">Telugu - తెలుగు</option>
                                            <option value="th">Thai - ไทย</option>
                                            <option value="ti">Tigrinya - ትግርኛ</option>
                                            <option value="to">Tongan - lea fakatonga</option>
                                            <option value="tr">Turkish - Türkçe</option>
                                            <option value="tk">Turkmen</option>
                                            <option value="tw">Twi</option>
                                            <option value="uk">Ukrainian - українська</option>
                                            <option value="ur">Urdu - اردو</option>
                                            <option value="ug">Uyghur</option>
                                            <option value="uz">Uzbek - o‘zbek</option>
                                            <option value="vi">Vietnamese - Tiếng Việt</option>
                                            <option value="wa">Walloon - wa</option>
                                            <option value="cy">Welsh - Cymraeg</option>
                                            <option value="fy">Western Frisian</option>
                                            <option value="xh">Xhosa</option>
                                            <option value="yi">Yiddish</option>
                                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                                            <option value="zu">Zulu - isiZulu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-2"> <label>Currency<span class="tooltext"><img src="/wp-content/uploads/2022/10/i.png">
                                                <span class="tooltiphovertext">Choose one of the Currency</span></span></label>
                                        <select class="form-control" id="currencyh">
                                            <option>select currency</option>
                                            <option value="AFN">Afghan Afghani</option>
                                            <option value="ALL">Albanian Lek</option>
                                            <option value="DZD">Algerian Dinar</option>
                                            <option value="AOA">Angolan Kwanza</option>
                                            <option value="ARS">Argentine Peso</option>
                                            <option value="AMD">Armenian Dram</option>
                                            <option value="AWG">Aruban Florin</option>
                                            <option value="AUD">Australian Dollar</option>
                                            <option value="AZN">Azerbaijani Manat</option>
                                            <option value="BSD">Bahamian Dollar</option>
                                            <option value="BHD">Bahraini Dinar</option>
                                            <option value="BDT">Bangladeshi Taka</option>
                                            <option value="BBD">Barbadian Dollar</option>
                                            <option value="BYR">Belarusian Ruble</option>
                                            <option value="BEF">Belgian Franc</option>
                                            <option value="BZD">Belize Dollar</option>
                                            <option value="BMD">Bermudan Dollar</option>
                                            <option value="BTN">Bhutanese Ngultrum</option>
                                            <option value="BTC">Bitcoin</option>
                                            <option value="BOB">Bolivian Boliviano</option>
                                            <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                            <option value="BWP">Botswanan Pula</option>
                                            <option value="BRL">Brazilian Real</option>
                                            <option value="GBP">British Pound Sterling</option>
                                            <option value="BND">Brunei Dollar</option>
                                            <option value="BGN">Bulgarian Lev</option>
                                            <option value="BIF">Burundian Franc</option>
                                            <option value="KHR">Cambodian Riel</option>
                                            <option value="CAD">Canadian Dollar</option>
                                            <option value="CVE">Cape Verdean Escudo</option>
                                            <option value="KYD">Cayman Islands Dollar</option>
                                            <option value="XOF">CFA Franc BCEAO</option>
                                            <option value="XAF">CFA Franc BEAC</option>
                                            <option value="XPF">CFP Franc</option>
                                            <option value="CLP">Chilean Peso</option>
                                            <option value="CNY">Chinese Yuan</option>
                                            <option value="COP">Colombian Peso</option>
                                            <option value="KMF">Comorian Franc</option>
                                            <option value="CDF">Congolese Franc</option>
                                            <option value="CRC">Costa Rican ColÃ³n</option>
                                            <option value="HRK">Croatian Kuna</option>
                                            <option value="CUC">Cuban Convertible Peso</option>
                                            <option value="CZK">Czech Republic Koruna</option>
                                            <option value="DKK">Danish Krone</option>
                                            <option value="DJF">Djiboutian Franc</option>
                                            <option value="DOP">Dominican Peso</option>
                                            <option value="XCD">East Caribbean Dollar</option>
                                            <option value="EGP">Egyptian Pound</option>
                                            <option value="ERN">Eritrean Nakfa</option>
                                            <option value="EEK">Estonian Kroon</option>
                                            <option value="ETB">Ethiopian Birr</option>
                                            <option value="EUR">Euro</option>
                                            <option value="FKP">Falkland Islands Pound</option>
                                            <option value="FJD">Fijian Dollar</option>
                                            <option value="GMD">Gambian Dalasi</option>
                                            <option value="GEL">Georgian Lari</option>
                                            <option value="DEM">German Mark</option>
                                            <option value="GHS">Ghanaian Cedi</option>
                                            <option value="GIP">Gibraltar Pound</option>
                                            <option value="GRD">Greek Drachma</option>
                                            <option value="GTQ">Guatemalan Quetzal</option>
                                            <option value="GNF">Guinean Franc</option>
                                            <option value="GYD">Guyanaese Dollar</option>
                                            <option value="HTG">Haitian Gourde</option>
                                            <option value="HNL">Honduran Lempira</option>
                                            <option value="HKD">Hong Kong Dollar</option>
                                            <option value="HUF">Hungarian Forint</option>
                                            <option value="ISK">Icelandic KrÃ³na</option>
                                            <option value="INR">Indian Rupee</option>
                                            <option value="IDR">Indonesian Rupiah</option>
                                            <option value="IRR">Iranian Rial</option>
                                            <option value="IQD">Iraqi Dinar</option>
                                            <option value="ILS">Israeli New Sheqel</option>
                                            <option value="ITL">Italian Lira</option>
                                            <option value="JMD">Jamaican Dollar</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="JOD">Jordanian Dinar</option>
                                            <option value="KZT">Kazakhstani Tenge</option>
                                            <option value="KES">Kenyan Shilling</option>
                                            <option value="KWD">Kuwaiti Dinar</option>
                                            <option value="KGS">Kyrgystani Som</option>
                                            <option value="LAK">Laotian Kip</option>
                                            <option value="LVL">Latvian Lats</option>
                                            <option value="LBP">Lebanese Pound</option>
                                            <option value="LSL">Lesotho Loti</option>
                                            <option value="LRD">Liberian Dollar</option>
                                            <option value="LYD">Libyan Dinar</option>
                                            <option value="LTL">Lithuanian Litas</option>
                                            <option value="MOP">Macanese Pataca</option>
                                            <option value="MKD">Macedonian Denar</option>
                                            <option value="MGA">Malagasy Ariary</option>
                                            <option value="MWK">Malawian Kwacha</option>
                                            <option value="MYR">Malaysian Ringgit</option>
                                            <option value="MVR">Maldivian Rufiyaa</option>
                                            <option value="MRO">Mauritanian Ouguiya</option>
                                            <option value="MUR">Mauritian Rupee</option>
                                            <option value="MXN">Mexican Peso</option>
                                            <option value="MDL">Moldovan Leu</option>
                                            <option value="MNT">Mongolian Tugrik</option>
                                            <option value="MAD">Moroccan Dirham</option>
                                            <option value="MZM">Mozambican Metical</option>
                                            <option value="MMK">Myanmar Kyat</option>
                                            <option value="NAD">Namibian Dollar</option>
                                            <option value="NPR">Nepalese Rupee</option>
                                            <option value="ANG">Netherlands Antillean Guilder</option>
                                            <option value="TWD">New Taiwan Dollar</option>
                                            <option value="NZD">New Zealand Dollar</option>
                                            <option value="NIO">Nicaraguan CÃ³rdoba</option>
                                            <option value="NGN">Nigerian Naira</option>
                                            <option value="KPW">North Korean Won</option>
                                            <option value="NOK">Norwegian Krone</option>
                                            <option value="OMR">Omani Rial</option>
                                            <option value="PKR">Pakistani Rupee</option>
                                            <option value="PAB">Panamanian Balboa</option>
                                            <option value="PGK">Papua New Guinean Kina</option>
                                            <option value="PYG">Paraguayan Guarani</option>
                                            <option value="PEN">Peruvian Nuevo Sol</option>
                                            <option value="PHP">Philippine Peso</option>
                                            <option value="PLN">Polish Zloty</option>
                                            <option value="QAR">Qatari Rial</option>
                                            <option value="RON">Romanian Leu</option>
                                            <option value="RUB">Russian Ruble</option>
                                            <option value="RWF">Rwandan Franc</option>
                                            <option value="SVC">Salvadoran ColÃ³n</option>
                                            <option value="WST">Samoan Tala</option>
                                            <option value="SAR">Saudi Riyal</option>
                                            <option value="RSD">Serbian Dinar</option>
                                            <option value="SCR">Seychellois Rupee</option>
                                            <option value="SLL">Sierra Leonean Leone</option>
                                            <option value="SGD">Singapore Dollar</option>
                                            <option value="SKK">Slovak Koruna</option>
                                            <option value="SBD">Solomon Islands Dollar</option>
                                            <option value="SOS">Somali Shilling</option>
                                            <option value="ZAR">South African Rand</option>
                                            <option value="KRW">South Korean Won</option>
                                            <option value="XDR">Special Drawing Rights</option>
                                            <option value="LKR">Sri Lankan Rupee</option>
                                            <option value="SHP">St. Helena Pound</option>
                                            <option value="SDG">Sudanese Pound</option>
                                            <option value="SRD">Surinamese Dollar</option>
                                            <option value="SZL">Swazi Lilangeni</option>
                                            <option value="SEK">Swedish Krona</option>
                                            <option value="CHF">Swiss Franc</option>
                                            <option value="SYP">Syrian Pound</option>
                                            <option value="STD">São Tomé and Príncipe Dobra</option>
                                            <option value="TJS">Tajikistani Somoni</option>
                                            <option value="TZS">Tanzanian Shilling</option>
                                            <option value="THB">Thai Baht</option>
                                            <option value="TOP">Tongan paanga</option>
                                            <option value="TTD">Trinidad &amp; Tobago Dollar</option>
                                            <option value="TND">Tunisian Dinar</option>
                                            <option value="TRY">Turkish Lira</option>
                                            <option value="TMT">Turkmenistani Manat</option>
                                            <option value="UGX">Ugandan Shilling</option>
                                            <option value="UAH">Ukrainian Hryvnia</option>
                                            <option value="AED">United Arab Emirates Dirham</option>
                                            <option value="UYU">Uruguayan Peso</option>
                                            <option value="USD">US Dollar</option>
                                            <option value="UZS">Uzbekistan Som</option>
                                            <option value="VUV">Vanuatu Vatu</option>
                                            <option value="VEF">Venezuelan BolÃ­var</option>
                                            <option value="VND">Vietnamese Dong</option>
                                            <option value="YER">Yemeni Rial</option>
                                            <option value="ZMK">Zambian Kwacha</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group pb-3"> <label>Linkedin Account link<span class="tooltext"><img src="/wp-content/uploads/2022/10/i.png">
                                                    <span class="tooltiphovertext">Enter your Linkedin link</span></label> <input type="text" class="form-control" placeholder="Add the link here" id="linkedinprofile"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6"><button type="submit" class="btn text-center btn-lg float-left btn-light border border-dark w-50">Back</button></div>
                                    <div class="col-md-6"><button type="submit" class="btn text-center btn-lg btn-dark float-right w-50">Next</button></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 step4">
                <div class="container">
                    <div class="row pb-4">
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill badge-dark p-2">1</span> Step One <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-dark">2</span> Step Two <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-dark">3</span> Step Three <span class="badge p-2 text-center"> <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"></span></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-center"><span class="badge badge-pill p-2 badge-dark">4</span> Step Four <span class="badge p-2 text-center">  <img class="arrowimg" src="/wp-content/uploads/2022/10/next.png"> </span></h4>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="p-5 col-md-8 border border-dark">
                            <form class="" style="">
                                <h2 style="" class="text-center pb-2">You are almost there</h2>
                                <p class="text-center pb-3">let us review your profile before you create your first session and link your calendar. We will send you an email to finalise your profile very soon....</p>
                                <div class="row justify-content-center pb-4">
                                    <div class="justify-content-center d-flex align-items-center col-md-3" style=""><img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-3.svg"></div>

                                </div>
                                <div class="row pb-4">
                                    <div class="col-md-12">
                                        <div style="display:none;" class="form-group row mb-0"> <label for="inputmailh" class="col-form-label col-4">E-mail</label>
                                            <div class="col-8">
                                                <input readonly type="email" class="form-control border-0 shadow-none text-right" id="inputmailh">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0"> <label for="inputNameh" class="col-form-label col-4">Name</label>
                                            <div class="col-8">
                                                <input readonly type="text" class="form-control text-right border-0 shadow-none" id="inputNameh">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0"> <label for="inputPhoneNumberh" class="col-form-label col-4">Phone Number</label>
                                            <div class="col-8">
                                                <input readonly type="tel" class="form-control text-right border-0 shadow-none" id="inputPhoneNumberh">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0"> <label for="inputTimeZoneh" class="col-form-label col-4">Time Zone</label>
                                            <div class="col-8">
                                                <input readonly type="text" class="form-control text-right border-0 shadow-none" id="inputTimeZoneh">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0"> <label for="inputLanguagesh" class="col-form-label col-4">Languages</label>
                                            <div class="col-8">
                                                <input readonly type="text" class="form-control text-right border-0 shadow-none" id="inputLanguagesh">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0"> <label for="inputCurrencyh" class="col-form-label col-4">Currency</label>
                                            <div class="col-8">
                                                <input readonly type="text" class="form-control text-right border-0 shadow-none" id="inputCurrencyh">
                                            </div>
											
                                        </div>
										<div class="form-group row mb-0"> <label for="inputCurrencyh" class="col-form-label col-4">Linkedin Link</label>
                                            <div class="col-8">
                                                <input readonly type="text" class="form-control text-right border-0 shadow-none" id="linkedinlink">
                                            </div>
											
                                        </div>
                                        <div class="form-group row mb-0"> <label for="inputShortbioh" class="col-form-label col-4">Short bio</label>
                                        </div>
                                        <div class="form-group row mb-0"> <p class="" id="inputShortbioh"> </p>  </div>
                                    </div>
									<div class="col-md-12">
										<p class="nticeinregiter">
											You will now be redirected to our backend system where you can complete your profile and create your sessions
										</p>
									</div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-6"><button type="submit" class="btn text-center btn-lg float-left btn-light border border-dark w-50">Back</button></div>
                                <div class="col-md-6"><button type="submit" class="btn text-center btn-lg btn-dark float-right w-50" id="confirmform">Confirm</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
        <!-- End of container -->
    </main><!-- .site-main -->
	<script>
	jQuery(document).ready(function( $ ){
   var countryData = window.intlTelInputGlobals.getCountryData(),
  input = document.querySelector("#form17"),
  addressDropdown = document.querySelector("#address-country");

// init plugin
var iti = window.intlTelInput(input, {
  hiddenInput: "full_phone",
  utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
});

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
  addressDropdown.value = iti.getSelectedCountryData().iso2;
});
});
	</script>
    <?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>