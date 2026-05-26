
<!doctype html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="pt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link rel="icon" sizes="196x196" href="https://cdn.getcrowder.com/images/c1ade2d9-b2d1-484a-b163-0e5509e00144-favicon-32x32.png?w=196">
		<meta name="Robots" content="INDEX,FOLLOW"/>
		<meta name="MobileOptimized" content="width">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="true">



		<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js'></script>

		<!-- OneTrust  -->
		<script src=https://cdn.cookielaw.org/scripttemplates/otSDKStub.js  type="text/javascript" charset="UTF-8" data-domain-script="335c8215-96b5-4b4c-91b1-4f1dd9016a7b" ></script>
		<script type="text/javascript">
		function OptanonWrapper() {
			// Get initial OnetrustActiveGroups ids
			if(typeof OptanonWrapperCount == "undefined"){
				otGetInitialGrps();
			}
			//Delete cookies
			otDeleteCookie(otIniGrps);
			// Assign OnetrustActiveGroups to custom variable
			function otGetInitialGrps(){
				OptanonWrapperCount = '';
				otIniGrps =  OnetrustActiveGroups;
				// console.log("otGetInitialGrps", otIniGrps)
			}
			function otDeleteCookie(iniOptGrpId)
			{
				var otDomainGrps = JSON.parse(JSON.stringify(Optanon.GetDomainData().Groups));
				var otDeletedGrpIds = otGetInactiveId(iniOptGrpId, OnetrustActiveGroups);
				if(otDeletedGrpIds.length != 0 && otDomainGrps.length !=0){
					for(var i=0; i < otDomainGrps.length; i++){
						//Check if CustomGroupId matches
					if(otDomainGrps[i]['CustomGroupId'] != '' && otDeletedGrpIds.includes(otDomainGrps[i]['CustomGroupId'])){
							for(var j=0; j < otDomainGrps[i]['Cookies'].length; j++){
								// console.log("otDeleteCookie",otDomainGrps[i]['Cookies'][j]['Name'])
								//Delete cookie
								eraseCookie(otDomainGrps[i]['Cookies'][j]['Name']);
							}
						}
						//Check if Hostid matches
						if(otDomainGrps[i]['Hosts'].length != 0){
							for(var j=0; j < otDomainGrps[i]['Hosts'].length; j++){
								//Check if HostId presents in the deleted list and cookie array is not blank
								if(otDeletedGrpIds.includes(otDomainGrps[i]['Hosts'][j]['HostId']) && otDomainGrps[i]['Hosts'][j]['Cookies'].length !=0){
									for(var k=0; k < otDomainGrps[i]['Hosts'][j]['Cookies'].length; k++){
										//Delete cookie
										eraseCookie(otDomainGrps[i]['Hosts'][j]['Cookies'][k]['Name']);
									}
								}
							}
						}
					}
				}
				otGetInitialGrps(); //Reassign new group ids
			}
			//Get inactive ids
			function otGetInactiveId(customIniId, otActiveGrp){
				//Initial OnetrustActiveGroups
				// console.log("otGetInactiveId",customIniId)
				customIniId = customIniId.split(",");
				customIniId = customIniId.filter(Boolean);
				//After action OnetrustActiveGroups
				otActiveGrp = otActiveGrp.split(",");
				otActiveGrp = otActiveGrp.filter(Boolean);
				var result=[];
				for (var i=0; i < customIniId.length; i++){
					if ( otActiveGrp.indexOf(customIniId[i]) <= -1 ){
						result.push(customIniId[i]);
					}
				}
				return result;
			}
			//Delete cookie
			function eraseCookie(name) {
				//Delete root path cookies
				domainName = window.location.hostname.substring(3);
				document.cookie = name+'=; Max-Age=-99999999; Path=/;Domain='+ domainName;
				document.cookie = name+'=; Max-Age=-99999999; Path=/;';
				//Delete LSO incase LSO being used, cna be commented out.
				localStorage.removeItem(name);
				//Check for the current path of the page
				pathArray = window.location.pathname.split('/');
				//Loop through path hierarchy and delete potential cookies at each path.
				for (var i=0; i < pathArray.length; i++){
					if (pathArray[i]){
						//Build the path string from the Path Array e.g /site/login
						var currentPath = pathArray.slice(0,i+1).join('/');
					document.cookie = name+'=; Max-Age=-99999999; Path=' + currentPath + ';Domain='+ domainName;
						document.cookie = name+'=; Max-Age=-99999999; Path=' + currentPath + ';';
						//Maybe path has a trailing slash!
						document.cookie = name+'=; Max-Age=-99999999; Path=' + currentPath + '/;Domain='+ domainName;
						document.cookie = name+'=; Max-Age=-99999999; Path=' + currentPath + '/;';


					}
				}
			}
		}
		</script>
			<meta name="description" content="Ticketmaster"/>
			<meta name="twitter:card" content="summary_large_image"/>
			<meta name="twitter:title" content="Ticketmaster"/>
			<meta name="twitter:description" content="Ticketmaster"/>
			<meta name="twitter:img:src" content="https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png"/>
			<meta property="og:image" content="https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png"/>
			<meta property="og:title" content="Ticketmaster"/>
			<meta property="og:description" content="Ticketmaster"/>
			<meta property="og:url" content="https://www.ticketmaster.com.br"/>
			<meta property="og:site_name" content="Ticketmaster Brasil"/>
			<meta property="og:type" content="website"/>
			<meta property="fb:app_id" content=""/>
		<title>Ticketmaster Brasil - Ticketmaster</title>
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->


		<!-- Source origin data
				ConfigParams -> WEB
	    -->

		<link href="//cdn.boletius.com/content/css/styles.2bb4d01ecc.css"  rel="stylesheet" type="text/css" />

			<link rel="preload" as="font" crossorigin="anonymous" type="font/woff2" href="https://cdn.boletius.com/fonts/Averta-Regular.woff2">
<link rel="preload" as="font" crossorigin="anonymous" type="font/woff2" href="https://cdn.boletius.com/fonts/Averta-Semibold.woff2">
<link rel="preload" as="font" crossorigin="anonymous" type="font/woff2" href="https://cdn.boletius.com/fonts/Averta-Bold.woff2">

	    <style type="text/css">
		 .skip-link{position:absolute;top:-40px;left:0;background-color:#0057b4;color:#fff;padding:10px;z-index:100;text-decoration:none;transition:top .3s}.skip-link:focus,.skip-link:hover{top:0}
			.footer {
					--footer-bg: #1f262d;
					--footer-link-color: #ffffff;
			}


			body {
					--main-color:#024ddf;
					--main-gradient-color-1: #024ddf;
  					--main-gradient-color-2: #024ddf;
					--header-color: #024ddf;


					font-family: Averta, "Helvetica Neue", Helvetica, Arial, sans-serif;

			}

				nav img.logo-dark {
    display: none;
}

nav img.logo-light {
    display: block;
}

.event-picker .dropdown .btn {
    overflow: hidden;
}

.event-picker .dropdown .dropdown-menu li.agotado div {
    padding: 15px 20px;
    clear: both;
    font-weight: 600;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
    border-bottom: solid 1px #d7d7d773;
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    text-wrap: balance;
    text-decoration: none;
}


#eventList .home-events .col-md-12 { width:100%}
#eventList .home-events .col-md-8  , #eventList .home-events .col-md-4 { width:50%}
@media screen and (max-width: 1024px) {#eventList .home-events .col-md-12 { width:100%}}
.ticket-shop .btn-primary { cursor:pointer !important}

.event_thumb_info .event_venue { display:none}

img.banner-town {
width: 100%;
    border-radius: 5px;
    height: 380px;
    object-fit: cover;
}
.event-thumb .title-container {
    z-index: 1;
}
.va-container:hover img {
    transform: scale(1.05) !important;
}
.event-thumb img {
    transition: 0.4s;
}

.title-container { opacity:0; transition:0.3s ease-in-out}
.title-conttainer .event_thumb_info, .title-container .thumb-title {margin-left: 20px; transition:0.4s ease-in-out}

.va-container:hover .title-container { opacity:1}
.va-container:hover title-conttainer .event_thumb_info, .va-container:hover .title-container .thumb-title {margin-left: 0px; }

@media screen and (max-width: 768px) {
img.banner-town {
    height: 300px;
}
}
@media screen and (max-width: 1024px) {
.home-events .col-md-8, .home-events .col-md-4 {
    width: 100% !important;
}
}

.title-container {
    display: flex;
    padding: 40px;
    position: absolute;
    width: 100%;
    align-items: flex-start;
    justify-content: flex-end;
    background: rgb(0,0,0);
    background: linear-gradient(51deg, rgb(3 95 196) 0%, rgb(0 101 210 / 42%) 100%);
    flex-direction: column;
}

.title-container .thumb-title {
font-size: 1.6em;
font-weight: 600;
}

.va-container:hover {
    transform: scale(1);
}

.event-thumb {
    background-color: var(--main-color);
    box-shadow: none !important;
}

.event_thumb_info {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    color: #fff;
    font-size: 1em;
    font-weight: 500;
gap:2px;
}

.event_thumb_info span.event_venue { opacity:0.6}


@media screen and (max-width: 768px) {
.title-container { text-align:left !important; padding:20px !important;}
.title-container .thumb-title {
    font-size: 1.3em;
    font-weight: 600;
    margin: 0 0 10px 0;
    line-height: 1.4em;
    text-align: initial;
}
}

.container .content ul {padding:0 0 0 20px !important;}
.container .content table {width:100%; border:solid 1px #f1f1f1}
.container .content table td {border:solid 1px #f1f1f1; padding:10px;}

.carousel-inner .item {
    height: 300px !important;
}

.carousel-indicators {
    bottom: 10px !important;
    opacity: 1;
}

.carousel-indicators li , .carousel-indicators li.active  {
    width: 10px ;
    height: 10px;
    margin: 0 1px;
}


.search_box_home h1 {
    text-transform: none;
}

body {
     padding-top: 50px;
     letter-spacing: 0.3px;
}
 .footer-tm ul li a {
     color: #fff;
     margin: 0 !important;
}
 .home-categories , .home-events {
     width:90%;
     max-width: 1260px;
     margin: 0 auto;
}
 .home-events .col-md-8, .home-events .col-md-4 {
     width:50%;
}
 @font-face {
     font-family: "Averta";
     src: url("https://cdn.boletius.com/fonts/Averta-Light.woff2") format("woff2");
     font-weight: 300;
}
 @font-face {
     font-family: "Averta";
     src: url("https://cdn.boletius.com/fonts/Averta-Regular.woff2") format("woff2");
     font-weight: 400;
}
 @font-face {
     font-family: "Averta";
     src: url("https://cdn.boletius.com/fonts/Averta-Semibold.woff2") format("woff2");
     font-weight: 600;
}
 @font-face {
     font-family: "Averta";
     src: url("https://cdn.boletius.com/fonts/Averta-Bold.woff2") format("woff2");
     font-weight: 700;
}
 @font-face {
     font-family: "Averta";
     src: url("https://cdn.boletius.com/fonts/Averta-Black.woff2") format("woff2");
     font-weight: 900;
}
 @font-face {
     font-family: "Averta";
     src: url("https://cdn.boletius.com/fonts/Averta-RegularItalic.woff2") format("woff2");
     font-style: italic;
}
 @media (min-width: 780px) {
     .event-header .ticket-shop #buyButton {
         margin-left: 30px;
    }
}
 .event-header .ticket-shop {
     position: relative;
     background: rgba(251,252,255);
     border: solid 2px #F1F2F5;
}
 .event-header .ticket-shop #show-button, .event-header .ticket-shop #quantity-button {
     border: solid 1px rgba(0, 0, 0, 0.15);
}
 .navbar ul.user-menu {
     padding: 15px 0 0 0;
}
 .navbar-brand {
     line-height: normal;
}
 .event-header .ticket-shop.affix{
     top: 60px;
}
 .main {
     height: 180px;
     background: #024DDF !important;
}
 .main h1 { display: none;}
 .navbar .btn {
     margin-top: 0px;
     background: transparent;
     font-size: 1.1em;
}
 #login_button #ingresar {
     color: #353C42 !important;
}
 .navbar a {
     font-size:1em;
}
 .navbar .logo {
     padding: 20px 0;
}
 .navbar-menu a:hover {
     background-color: rgb(230, 230, 230);
}
 .navbar-menu a:hover::after {
     width:0px;
}
 @media (min-width: 1600px){
     .container {
         width: 1260px;
    }
}
 .footer-tm {
    color:#ffffff;
}
 .footer-tm h5,  .footer-tm h3 {
    font-size:1em;
    font-weight:bold;
    margin-bottom:15px;
}
 .footer-tm ul {
     padding:0;
     margin:0 0 40px 0
}
 .footer-tm ul li {
     list-style:none;
     display:block;
     margin-bottom:10px;
}
 .footer-tm ul li a {
     color:#fff
}
 .footer-tm img.logo {
     margin:0 0 40px 0;
     height:25px
}
 .footer-tm .foo-copy {
     text-align:right;
     font-size:0.8em;
}
 .footer-tm .foo-social a {
     margin-right:20px
}
 .footer {
    border: none
}
 @media (max-width: 768px){
     .footer-tm .foo-social {
         margin-bottom:40px
    }
     .footer-tm .foo-copy {
         text-align:left;
    }
}
 #eventList.container {
     width:100%;
     padding:0;
}
 .tm-main {
     height: 92vh;
     background: #024DDF;
     background-image: url(https://cdn.getcrowder.com/images/1669406310174-null-main-br.jpg);
     background-size: cover;
     animation: bgAnimate 15s ease-in-out infinite alternate;
     overflow:hidden;
     text-align: center;
border-top: solid 30px #0262cf;
}
 @keyframes bgAnimate {
     0% {
         background-position: 2% 0;
    }
     100% {
         background-position: 100% 0;
    }
}
 .tm-main .tm-t {
     margin-bottom: 10vh;
}
 .tm-main .tm-t img {
     height:35vh;
     animation: tAnimate 2s ease-in-out;
}
 @keyframes tAnimate {
     0% {
         transform: scale(2.5);
         opacity:0;
    }
     100% {
         transform: scale(1);
         opacity:1;
    }
}
 .tm-main .tm-overlay {
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
     flex-wrap: nowrap;
     align-content:center ;
     height: 100%;
     background: linear-gradient(0deg, rgba(2,108,223,1) 0%, rgb(0 69 145 / 50%) 49%, rgba(2,108,223,0) 100%);
}
 .tm-main h2 {
     margin: 0;
     font-size: 2em;
     color: #fff;
     font-weight: 400;
     animation: h2Animate 1s ease-in-out;
}
 .tm-main h2 span {
     color: #00FFFF;
}
 @keyframes h2Animate {
     0% {
         transform: scale(0.5);
         opacity:0;
    }
     100% {
         transform: scale(1);
         opacity:1;
    }
}
 .tm-main i {
     display: block;
     width: 14px;
     height: 14px;
     border: solid 2px #ffffff70;
     border-left: none;
     border-top: none;
     transform: rotate(45deg);
     border-radius: 3px;
     bottom: 8vh;
     position: absolute;
}
 .tm-suscribe {
     background: #024DDF;
     padding: 80px 20px 100px;
     text-align: center;
}
 .tm-suscribe h6 {
     margin: 0;
     font-size: 1.8em;
     color: #fff;
     font-weight: 400;
}
 .tm-social {
     display: block;
     position: relative;
     height: 300px;
     color: #fff;
     text-decoration: none;
}
 .tm-social .tm-s {
     width: 100%;
     position: relative;
     float: left;
     height: 300px;
     display: flex;
     flex-direction: column;
     flex-wrap: nowrap;
     justify-content: center;
     align-items: center;
     align-content: center;
     text-align: center;
     background: #000;
}
 .tm-social .tm-s h3 {
     font-size:1.8em;
     color: #fff;
     margin: 0 0 10px 0;
     font-weight: normal;
}
 .tm-social .tm-s {
     color: #fff;
     text-decoration: none;
     opacity: 0.95;
     transition: 0.2s;
}
 .tm-social .tm-s:hover{
     opacity:1;
}
 .tm-social .tm-s span {
     color: #00FFFF;
}
.tm-social .tm-instagram {
background: url(https://cdn.getcrowder.com/images/1683576764155-null-TM_Banner_Instagram.jpeg) no-repeat center center;
background-size: cover;
}
.tm-social .tm-facebook {
background: url(https://cdn.getcrowder.com/images/1683576746022-null-TM_Banner_Facebook.jpg) no-repeat center center;
background-size: cover;
}
.tm-social .tm-linkedin {
background: url(https://cdn.getcrowder.com/images/1683576712789-null-TM_Banner_LinkedIn.jpg) no-repeat center center;
background-size: cover;
}
.tm-social .tm-twitter{
background: url(https://cdn.getcrowder.com/images/1669823412469-null-twitter.jpg) no-repeat center center;
background-size: cover;
}
.tm-social .tm-blog{
background: url(https://cdn.getcrowder.com/images/1683576726535-null-TM_Banner_Blog.jpg) no-repeat center center;
background-size: cover;
}
.tm-social .tm-tiktok {
background: url(https://cdn.getcrowder.com/images/1691588419752-null-tiktok.jpeg) no-repeat center center;
background-size: cover;
}

.tm-social .tm-overlay img {
width:40px;
}

 .tm-business {
     background:#1F262D;
     padding: 100px 20px;
     text-align: center;
     border-bottom: solid 1px #363636;
}
 .tm-business h2 {
     margin: 0;
     font-size: 1.8em;
     color: #fff;
     font-weight: 400;
     margin: 0 0 60px 0;
}
 .tm-business a {
     border: solid 1px #fff;
     text-decoration: none;
     padding: 18px 30px;
     font-size:1.1em;
     color: #fff;
}
 @media (max-width: 768px){
     .tm-main {
         height: 70vh;
         background-image: url(https://cdn.getcrowder.com/images/1669406540752-null-main-m.jpg);
         animation: bgAnimate 25s ease-in infinite alternate;
    }
     .tm-main .tm-overlay {
         padding: 0 30px;
         background: linear-gradient(0deg, #024DDF 0%, #024DDFb0 49%, #024DDF94 100%);
    }
     .tm-main .tm-t img {
         height:150px;
    }
     .tm-social {
         display: block;
         position: relative;
         height: 300px;
    }
}
 .navbar {
     height: 60px;
     background-color:#024DDF;
     box-shadow: none !important;
}

 .navbar-menu a {
     color: #fff;
     font-size: 1.1em !important;
}
 .navbar-menu a:hover {
     background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.176));
     background-color: #0000 !important;
}
 #login_button #ingresar {
     color: #fff !important;
}
 a.btn-togle span {
     background:#fff;
}
 .navbar a {
     font-size: 1em;
}
 .navbar-collapse ul li:first-child a {
     border-top:none !important
}
 .quentro-modal .modal-body {
    padding: 20px !important;
}
 .quentro-modal .modal-header a.quentro-logo img {
    width: 120px;
}
 .quentro-modal .modal-body img {
    width: 80px !important;
}
 .quentro-modal .close-quentro-modal {
    width: 25px;
     float: right !important;
}
 #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn {
     color: white;
     padding: 0;
     border: 0;
     font-size:0.9em;
}
 #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn:hover {
     color: white;
     background: none;
}
 .tm-grid {
}
 .tm-grid .tm-grid-event {
     color: #fff;
     background-size: cover;
     background-position: center ;
     height: 100%;
}
 .tm-grid .tm-grid-event .tm-grid-event-overlay {
    background: linear-gradient(90deg, rgba(6,25,46,0.95) 0%, rgba(8,30,54,0.65) 40%, rgba(13,32,52,0.15) 100%);
     height: 100%;
     display: flex;
     align-items: flex-end
}
 .tm-grid .event-title {
     font-size:2em;
     font-weight: 600;
}
 .tm-grid .event-info {
     font-size:1em;
     margin-bottom: 20px;
     font-weight:600
}
 .tm-grid .event-info span {
     opacity: 0.7;
     display: block;
     font-size:1em;
     font-weight: normal;
}
 .tm-grid a.btn-event {
     font-size:1.1em;
     color: #fff;
     font-weight: 500;
     background: var(--main-color);
     padding: 12px 20px;
     text-decoration: none;
     display: inline-block;
     border-radius:2px
}
 .tm-grid .event-info-content {
     padding: 70px;
}


.grid-1 { grid-area: 1 / 1 / 2 / 3; }
.grid-2 { grid-area: 2 / 1 / 3 / 2; }
.grid-3 { grid-area: 2 / 2 / 3 / 3; }
.grid-4 { grid-area: 3 / 1 / 4 / 2; }
.grid-5 { grid-area: 3 / 2 / 4 / 3; }
.grid-6 { grid-area: 4 / 1 / 5 / 3; }
.grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 60vh; }

.grid-1 { width:50%; position: relative;float: left;}
.grid-2 { width:100% ; position: relative;float: left;}

.grid-1, .grid-2 {
    height: 55vh;
    min-height: 400px;
}
 
 @media (max-width: 1440px){
     .tm-grid .event-title {
         font-size: 1.6em;
    }
     .tm-grid .event-info {
         font-size: 1em;
    }
     .tm-grid .event-info-content {
         padding: 4em;
    }
     .tm-grid a.btn-event {
         font-size: 1em;
        padding: 10px 15px;
    }
}
 @media (max-width: 768px){

     .parent-grid {
        display: flex;
        flex-direction: column;
         height: auto;
    }

    .grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 50vh; }


     .tm-grid .event-info-content {
         padding:30px 20px;
    }
     .tm-grid .event-info span {
         margin: 0;
         display: block;
    }
}
 body {
     --order-top-bg: #0046cb;
     --order-top-color: #fff;
     --header-height: 60px;
     padding-top:60px;
}
 .pg_content .pg_sidebar {
     display:none !important
}
 .pg_content .col-sm-8 {
     margin: 0px auto;
     width:100%;
     padding: 0 200px;
     float: inherit;
}
 @media (max-width: 1280px){
    .pg_content .col-sm-8 {
        padding: 0px 100px;
    }
 }
 
 @media (max-width: 768px){
    .pg_content .col-sm-8 {
        padding: 0px 20px;
    }
    .grid-1, .grid-2 {
        height: 40vh;
        width: 100%;
        min-height: 350px;
    }
}


div.accesibility {
    bottom: 30% !important;
}


.event_blocks .grid-label {
    position: sticky !important;
    color: #fff;
    background: var(--main-color);
    font-weight: normal;
    font-size: 0.8em;
    border-radius: 2px;
    top: 3px;
    right: 20px;
    display: block;
    z-index: 1;
    margin: 0;
    padding: 4px 8px;
}

	    </style>


		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script  type="text/plain"  class="optanon-category-C0002">
			window.dataLayer = window.dataLayer || [];
			function gtagV2(value){dataLayer.push(value);}
			function gtag(){dataLayer.push(arguments);}
		</script>



		<!-- Google Tag Manager -->
		<script  type="text/plain"  class="optanon-category-C0004">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WBGSPNM');</script>
		<!-- End Google Tag Manager -->

			<style>/* CTA */
#ingresar {
    padding: 0px 16px 0px 40px !important;
}

/* General */
.main {
    height: 144px !important;
}

.in-block {
    display: block;
}

.bg-black {
    padding: 1rem;
    background-color: black !important;
    color: white;
}

.bg-main .grid_element .image img {
    height: 304px !important;
}

.bg-main .block_content {
    padding: 16px 5% !important;
}

.--bg-main .grid_link {
    display: none !important;
}

.--bg-main .grid_element:hover::before {
    background: linear-gradient(51deg, rgb(3 95 196) 0%, rgb(0 101 210 / 42%) 100%);
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 1;
    display: block;
    width: 100%;
    height: 100%;
    opacity: 0.4;
    transition: opacity 0.4s cubic-bezier(0.1, 0.85, 0.25, 1) 0s;
    content: "";
}

swiper-pagination {
    display: none !important;
}

.block_title {
    font-size: 1.8em !important;
    text-transform: none !important;
}

.home-section-banners .details {
    max-width: 100% !important;
    padding: 32px 5% !important;
}

.home-section-banners .information {
    padding-bottom: 32px;
}

.home-section-banners .details {
    align-items: flex-start !important;
}

@media (max-width: 768px) {
    .home-section-banners .information {
        padding-bottom: 0px;
    }
}

/* SECTION - Universitario */
.section-universitario {}


/* SECTION - Header */
.sector-pre-header {
    height: 44px;
}

.sector-pre-header a {
    padding: 0rem 1rem;
    color: white;
}

/*
#ingresar::before {
    content: url('');
    display: inline-block;
    height: 0px;
    margin: 0px -28px;
}
*/

/* modal*/
#country-modal {
    padding-top: 16px;
}

.country-modal-dialog {
    width: 560px;
    height: 304px;
}

modal-content {
    padding-top: 0px;
}

.section-universitario .details {}

/* SECTION - Categories */
.bg-categories .grid_link {
    display: none !important;
}

.bg-categories .details {
    margin-bottom: 0px !important;
}

.bg-categories .events_grid {
    grid-template-columns: repeat(5, calc(40% - 280px));
    overflow-x: auto;
}

@media (max-width: 768px) {
    .bg-categories .events_grid {
        grid-template-columns: repeat(5, calc(60%));
    }
}

/* SECTION - Sales */
.bg-sales {
    background: url('https://cdn.getcrowder.com/images/17b0d947-7c76-48a5-b7d1-e5b8c0baf539-event-section-2-1.jpg') !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: cover !important;
    padding: 8rem 4rem;
}

.sales-text {
    margin-bottom: 2rem;
    font-size: 2.75rem;
    font-weight: bold;
    color: #2A55D9;
}

/* SECTION - Venues */

.section-events .grid_element .image img {
    height: 224px !important;
}

/* SECTION - social network */
.bg-social-facebook {
    background: url('https://cdn.getcrowder.com/images/8a052474-474a-4bf5-a9b3-9c9e65ffd3c0-facebook.jpg');
}

.bg-social-youtube {
    background: url('https://cdn.getcrowder.com/images/b663dff5-a7bc-4d4b-b441-621ec0190e38-youtube.jpg');
}

.bg-social-tiktok {
    background: url('https://cdn.getcrowder.com/images/3427b624-6950-4d37-93eb-fe201b4c182f-tiktok.jpg');
}

.bg-social-instagram {
    background: url('https://cdn.getcrowder.com/images/5dbf0a9e-2a21-40cd-8d00-1369a4b44921-instagram.jpg');
}

.bg-social-twitter {
    background: url('https://cdn.getcrowder.com/images/e1698dfd-a6ff-461a-91ab-3287a156a2c4-twitter.jpg');
}

.bg-social-spotify {
    background: url('https://cdn.getcrowder.com/images/030876d6-5089-434f-b913-78026fae13a9-spotify.jpg');
}

.bg-social-facebook,
.bg-social-youtube,
.bg-social-tiktok,
.bg-social-instagram,
.bg-social-twitter,
.bg-social-spotify {
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    text-align: center;
}

.bg-social a {
    color: white;
}

.bg-social .title {
    color: #00FFFF !important;
}

.bg-social img {
    width: 4rem;
    margin: 1rem;
}

.bg-social .tm-row {
    margin-right: 0px;
    margin-left: 0px;
}

/* SECTION - Outstanding */
.home-section-outstanding-events .list_title {
    margin-top: 24px;
}

.home-section-search .block_content {
    padding: 32px 15px !important;
}

/* SECTION - Universitario */
.home-section-banners .slider_link {
    padding: 12px 12px !important;
    text-transform: uppercase;
}

.home-section-banners .block_slider img {
    max-height: 448px !important;
}

@media (max-width: 768px) {
    .home-section-banners .block_slider img {
        min-height: 180px !important;
    }

    .home-section-banners .slider_link {
        display: none;
    }
}

/* SECTION - Fan SUpport */
.bg-fansupport {
    background: url('https://cdn.getcrowder.com/images/6b4b8331-59aa-4eb7-86c3-284ba817707c-bg-fansupport-1.png') !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: cover !important;
    padding: 8rem 4rem;
}

.bg-fansupport .card {
    background-color: #171725;
    padding: 1rem;
    margin-top: 2rem;
}

.bg-fansupport .title {
    color: #026CDF;
    padding-bottom: 1rem;
}

.bg-fansupport .question {
    color: white;
    font-weight: 600;
    padding-bottom: 0.75rem;
}

.bg-fansupport .answer {
    color: white;
    padding-bottom: 0.75rem;
}

.bg-fansupport .number {
    color: white;
    font-size: 5rem;
    font-weight: bold;
}

.fansupport-text {
    margin-bottom: 4rem;
    font-size: 2.75rem;
    font-weight: bold;
    color: white;
}

.fansupport-title {
    color: #00FFFF;
}



/* FOOTER */
/* FOOTER */


.justify-content-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
}

.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
}

.tm-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.text-list-light li {
    color: white;
}

.img-fluid {
    width: 100%;
    max-width: 100%
}

@media screen and (min-width: 1024px) {
    .event-thumb img {
        height: 380px !important;
    }
}


/* footer */

/* button secondary */
.btn-secondary {
    background: #fafafa;
    color: #024ddf;
    border: 2px solid #024ddf;
}

.btn-secondary:hover {
    background: #fafafa;
    color: #024ddf;
}

/* button interbank */
.btn-interbank {
    background: var(--main-color);
    font-weight: 500
}

@media (max-width: 520px) {
    .btn-interbank {
        background: #349345;
    }
}

/* button bbva */
.btn-bbva {
    background: #2A55D9;
    font-weight: 500
}

@media (max-width: 520px) {
    .btn-bbva {
        background: #2A55D9;
    }
}

/* button card */
.card-btn {
    border-radius: 4px;
    padding: 1rem;
    background-color: white;
}

.card-btn-content {
    color: black;
}

.card-btn-title {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.card-btn-subtitle {
    border: solid 1px #D6D6D6;
    border-radius: 2px;
    padding: 0px 4px;
    font-size: 1.2rem;
}

.card-btn-icon {
    padding-right: 8px;
}

@media (max-width: 520px) {
    .card-btn {
        border-radius: 0px;
        padding: 0rem;
        background-color: transparent;
    }

    .card-btn-icon {
        display: none;
    }

    .card-btn-content {
        display: none;
    }

    .card-btn-title {
        font-size: 1.6rem;
    }

    .card-btn-subtitle {
        font-size: 1rem;
    }

}

/* background models */
.bg-mode-1 {
    background-image: url('https://cdn.getcrowder.com/images/0ef51a6b-033f-4b18-acd9-01dcbd29c8f7-frame-458971.png') !important;
    background-position: center top;
    background-repeat: no-repeat;
    background-size: auto 50%;
}

.bg-mode-2 {
    background-color: #f6f6f6 !important;
}

.bg-mode-3 {
    background-color: #000 !important;
    color: white;
    background-image: url('https://cdn.getcrowder.com/images/accaf069-8a91-4106-a57e-79a48ae3093d-frame-458971-1.png') !important;
}

.bg-mode-4 {
    background-color: #121212 !important;
    color: white;
    background-image: url('https://cdn.getcrowder.com/images/1242aa95-4dcb-43cd-961c-57cd027f04e5-video.png') !important;
}






/* fonts */
.h1-kilimanjaro {
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
}

.st-fiji {
    font-size: 18px;
    font-weight: 600;
}

.bb-boising {
    font-size: 16px;
    font-weight: 600;
}

#event_content .block_title {
    font-size: 1.9rem;
    text-decoration: underline #024ddf 4px;
    text-underline-offset: 4px;
}

.next {
    font-size: 2rem;
    text-transform: uppercase;
    font-weight: 700;
}

#buyButton {
    font-size: 2rem;
    text-transform: uppercase;
    font-weight: 700;
}

#event_see_tickets {
    text-transform: uppercase;
    font-weight: 700;
}

.text-center {
    text-align: center;
    font-size: 1.5em;
}

.bold-text {
    font-weight: bold;
}

.block-location iframe {
    width: 100%;
}

/* Escribí tu CSS acá */
.block-location-content {
    margin-bottom: 2rem;
    width: 344px;
}

.block-location-action {
    margin-bottom: 2rem;
}

.block-howtosale-content {
    margin-bottom: 2rem;
    width: 344px;
}

/* Escribí tu CSS acá */
.event-picker .container {
    padding: 16px;
}

/* sections general */
.organizer-information-icon {
    width: 40px;
}

/* secttion table pricing */
.tabla-precios-section {
    background-color: #F6F6F6;
}

.align-middle {
    vertical-align: middle;
}

.table-body {
    background-color: #fff;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #ddd;
    width: 15%;
}

.table-bordered thead th {
    background-color: #000;
    color: #fff;
}

.bold-text {
    font-weight: bold;
}

.table td,
.table th {
    font-size: 2rem;
    vertical-align: middle;
}

@media (max-width: 520px) {
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table td,
    .table th {
        font-size: 1.2rem;
        vertical-align: middle;
    }
}


/* footer 11.03.2024 */

.footer {
    padding: 6rem 3rem;
    --footer-bg: #121212;
    background-color: #121212;
    color: white;
}

@media (max-width: 520px) {
    .footer {
        padding: 4rem 2rem;
    }
}

.footer .footer-logo-ticketmaster {
    padding-bottom: 2rem;
}

.footer .icon {
    margin: 1rem 2rem 1rem 0rem;
    width: 2rem;
}

.footer .footer-logo-ticketmaster img {
    height: 3rem;
}

.footer li {
    list-style-type: none;
    color: white;
    padding: 0.5rem 0rem;
}

.footer ul {
    padding: 0rem;
}

.footer a {
    color: white;
    margin: 0px;
}

.footer .container {
    width: 100%;
}

.footer .continue,
.cookies,
.reserved {
    margin-bottom: 2rem;
}

/*insurance*/
ul.insurance-options li {
    background-color: #F8F9FB !important;
}




.home-section-banners a .information {
    background: linear-gradient(45deg, #0039a2, #014ddf0f);
    opacity: 0;
    transition: 0.3s ease-in-out;
}

.home-section-banners a .information .details {
	padding-left: 20px;
	transition: 0.3s ease-in-out;
}


.home-section-banners a:hover .information {
	opacity:1
}

.home-section-banners a:hover .information .details {
	padding-left:0
}



.bg-venues .information { background:#00000066;}
.bg-venues .information .details , .bg-venues .information h3 { margin: 0;}

/*Blue line*/

.event_blocks label {
    position: sticky !important;
    color: #fff;
    background: var(--main-color);
    font-weight: normal;
    font-size: 0.8em;
    border-radius: 2px;
    top: 3px;
    right: 20px;
    display: block;
    z-index: 1;
    margin: 0;
    padding: 4px 8px;
}


.event_blocks .list_title a.list_link {
    background: #024DDF;
    color: #fff;
}


.tm-banner .information , .tm-banner .block_title {display:none !important}</style>


		<style>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				 #component-a7bb9492-891f-4d01-a218-6a26931b1473 .block_title, #component-a7bb9492-891f-4d01-a218-6a26931b1473 .countdown__title, #component-a7bb9492-891f-4d01-a218-6a26931b1473 .button_item__title { color: #ffff; } 
				
				
				
				
				
		</style>
	</head>
	<!-- <body class="" id="Event"> -->


	<body class="  accesible" id="Event" >
<a href="#container" class="skip-link">Skip to Main Content</a>
<h1 class='hidden'>Ticketmaster Brasil - Ticketmaster</h1>


		<div id="page-loader" class="loader_process" style="display:none">
			<div class="loader-ring"><div></div><div></div><div></div><div></div></div>
		     <div id="loader_title" style="font-weight:600; font-size:1.2em"></div>
		    <p id="loader_message"></p>
		</div>


		<div id="page-captcha" class="loader_process" style="display:none">
		<div style="font-weight:600; font-size:1.2em">Disculpa, detectamos actividad sospechosa</div>
		<div id="request-captcha-container"></div>
		</div>

		<!-- HEADER -->
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<!-- HEADER -->

		<div id="queue-view"></div>

		<div data-view="header/header_view"><!-- HEADER  -->
  <div class='accesibility'>
    <a title='Decrease text size' id='decreaseFontSize' role='button'>A-</a>
    <a title='Increase text size' id='increaseFontSize' role='button'>A+</a>
  </div>
<header>
  <nav class='navbar navbar-fixed-top' role='navigation'>
    <div class='horizontal-container navbar-container'>
      <div class='horizontal-container'>
        <a class='' style='height:100%' href='../../'>
          <img
            class='logo logo-dark'
            style='height:100%'
            src='https://cdn.getcrowder.com/images/1664925447950-null-ticketmaster-logo-azurewithoutr.png?w=300'
            alt='Ticketmaster Brasil logo'
          />

          <img
            class='logo logo-light'
            style='height:100%'
            src='https://cdn.getcrowder.com/images/46b77c52-6acd-425b-985f-c036a9dcbf90-ticketmaster.svg?w=300'
            alt='Ticketmaster Brasil logo'
          />
        </a>


      </div>

      <div id='user_data' class='hidden-xs' style='flex-shrink:0; height:100%;display:flex'>
        <div id='login_button' class='hidden-xs' style='display: flex; align-items:center'></div>
      </div>

      <div class='visible-xs'>
        <a
          class='btn btn-togle visible-xs'
          data-toggle='collapse'
          role='button'
          data-target='#navy-collapse'
          aria-label='show menu'
        >
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </div>

    <div class='collapse navbar-collapse' id='navy-collapse'>
      <div class='visible-xs' id='user_data_mobile'>
      </div>
    </div>
  </nav>
</header></div>
		<div id="userLogin">
		</div>


		<!-- FIN HEADER -->
		<main id="container">
			<div data-view="home/index" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}"><script type='application/ld+json'>
  { "@context" : "http://schema.org", "@type" : "Organization", "name" : "Ticketmaster Brasil",
  "logo": "https://cdn.getcrowder.com/images/1664925447950-null-ticketmaster-logo-azurewithoutr.png", "sameAs" : [ "",
  "", ""] }
</script>

  <div id='event_header' class='event-header header-v2'>
      <div data-view="cms/cms_header/cms_header" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}"></div>
  </div>

  <div class='event_blocks'>
      <section
        class='block
          home-section-search
          centered
          '
        id='component-deb9edf8-aa2f-43b6-9892-c21a656f664c'
        style=" background-image: url(''); background-color:#024DDF; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}"><div class='block_search'>
  <div class='block_content'>
    <div class='search'>
      <div class='search_box'>
        <input
          type='text'
          id='inputSearch'
          placeholder='Pesquisar artista ou evento'
          aria-label='Pesquisar artista ou evento'
        />
        <button id='searchEvent'>
          <span>Pesquisar</span>
          <svg
            xmlns='http://www.w3.org/2000/svg'
            fill='none'
            viewBox='0 0 24 24'
            stroke-width='2'
            stroke='currentColor'
          >
            <path
              stroke-linecap='round'
              stroke-linejoin='round'
              d='m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z'
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div></div>
      </section>
      <section
        class='block
          home-section-banners
          full-width
          '
        id='component-8de0f9b9-5ff6-405d-aebf-f2a878820026'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}"><div class='block_slider'>
  <div class='block_content'>
    

    <swiper-container
      pagination='true'
      pagination-clickable='true'
      navigation='true'
      space-between='0'
      autoplay-delay='3500'
      loop='true'
      speed='1000'
      autoplay-disable-on-interaction='true'
      navigation-size='80'
      slides-per-group='1'
    
    >
          <swiper-slide>

            <a href='../event/louis-tomlinson' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Louis Tomlinson: How Did We Get Here? Latin American Tour</div>
                    <strong>06 e 07 de Abril de 2027</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif" loading='lazy' width='100%'  alt='Banner Louis Tomlinson: How Did We Get Here? Latin American Tour'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/djavan' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Djavan: Djavanear 50 anos - Só Sucessos</div>
                    <strong>Turnê 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/6e7db1d2-8618-4c42-868d-c96804e6c186-djavanhome1920x720.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/6e7db1d2-8618-4c42-868d-c96804e6c186-djavanhome1920x720.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/6e7db1d2-8618-4c42-868d-c96804e6c186-djavanhome1920x720.gif" loading='lazy' width='100%'  alt='Banner Djavan: Djavanear 50 anos - Só Sucessos'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/aespa' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -</div>
                    <strong>04 de Setembro de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif" loading='lazy' width='100%'  alt='Banner aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/rockinrio' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Rock in Rio 2026</div>
                    <strong>4, 5, 6, 7, 11, 12, 13 de Setembro de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/159b1a9c-0823-480f-a458-e7286dd123e3-rir-banner.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/159b1a9c-0823-480f-a458-e7286dd123e3-rir-banner.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/159b1a9c-0823-480f-a458-e7286dd123e3-rir-banner.gif" loading='lazy' width='100%'  alt='Banner Rock in Rio 2026'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/martinho-da-vila-martnalia-pai-e-filha' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Martinho da Vila &amp; Mart´Nália | Pai e Filha</div>
                    <strong>Turnê 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/e7084c8a-0bd9-4bf1-8419-56d2bd03ace7-martinhomartnalia.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/e7084c8a-0bd9-4bf1-8419-56d2bd03ace7-martinhomartnalia.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/e7084c8a-0bd9-4bf1-8419-56d2bd03ace7-martinhomartnalia.gif" loading='lazy' width='100%'  alt='Banner Martinho da Vila &amp; Mart´Nália | Pai e Filha'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/tiago-iorc' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Tiago Iorc - Turnê Troco Likes 10 Anos</div>
                    <strong>Turnê 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif" loading='lazy' width='100%'  alt='Banner Tiago Iorc - Turnê Troco Likes 10 Anos'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/uts-rio-2026-br' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">UTS Rio 2026</div>
                    <strong>16, 17 e 18 de Julho de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/6642cbeb-8b3c-4658-b893-d9fd554513ee-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/6642cbeb-8b3c-4658-b893-d9fd554513ee-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/6642cbeb-8b3c-4658-b893-d9fd554513ee-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif" loading='lazy' width='100%'  alt='Banner UTS Rio 2026'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/revelacao-e-xande-de-pilares' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Xande de Pilares &amp; Revelação: Tava Escrito – O Reencontro Histórico</div>
                    <strong>Turnê 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif" loading='lazy' width='100%'  alt='Banner Xande de Pilares &amp; Revelação: Tava Escrito – O Reencontro Histórico'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/karol-g' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">KAROL G: Viajando Por El Mundo Tropitour</div>
                    <strong>12 de Fevereiro de 2027</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif" loading='lazy' width='100%'  alt='Banner KAROL G: Viajando Por El Mundo Tropitour'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/ce-ta-doido-festival-sao-paulo' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Cê Ta Doido Festival - São Paulo - 17/10/2026 - Venda Geral</div>
                    <strong>17 de Outubro de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/ac9ca75d-8d54-4dd3-a2f6-1c8d65f4c896-867700cf-1f68-446e-a177-e59bb34efad5-tamanhookctdlanding1920x720-1.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/ac9ca75d-8d54-4dd3-a2f6-1c8d65f4c896-867700cf-1f68-446e-a177-e59bb34efad5-tamanhookctdlanding1920x720-1.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/ac9ca75d-8d54-4dd3-a2f6-1c8d65f4c896-867700cf-1f68-446e-a177-e59bb34efad5-tamanhookctdlanding1920x720-1.gif" loading='lazy' width='100%'  alt='Banner Cê Ta Doido Festival - São Paulo - 17/10/2026 - Venda Geral'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/kid-abelha' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Kid Abelha: Eu Tive Um Sonho</div>
                    <strong>Turnê 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif" loading='lazy' width='100%'  alt='Banner Kid Abelha: Eu Tive Um Sonho'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/harry-styles' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Harry Styles: Together, Together</div>
                    <strong>Julho de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif" loading='lazy' width='100%'  alt='Banner Harry Styles: Together, Together'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/lollapaloozabr' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Lollapalooza Brasil 2027</div>
                    <strong>19, 20 e 21 de Março de 2027</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/94d86cbd-f320-46cd-9bf7-5dc2d753be22-tmbannerhomeprevendagerallollaloversjn1004v4.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/94d86cbd-f320-46cd-9bf7-5dc2d753be22-tmbannerhomeprevendagerallollaloversjn1004v4.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/94d86cbd-f320-46cd-9bf7-5dc2d753be22-tmbannerhomeprevendagerallollaloversjn1004v4.gif" loading='lazy' width='100%'  alt='Banner Lollapalooza Brasil 2027'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/suhai-festival-de-interlagos-2026' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">Suhai Festival Interlagos 2026</div>
                    <strong>Agosto de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/f8a817b8-e11c-427a-b879-c9c2dc8b87bd-1920x720-geral-4.png?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/f8a817b8-e11c-427a-b879-c9c2dc8b87bd-1920x720-geral-4.png?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/f8a817b8-e11c-427a-b879-c9c2dc8b87bd-1920x720-geral-4.png" loading='lazy' width='100%'  alt='Banner Suhai Festival Interlagos 2026'>
              </picture>
            </a>
          </swiper-slide>
          <swiper-slide>

            <a href='../event/ca7riel-e-paco-amoroso' >
              <div class='information'>
                
                <div class='details'>

                    <div class="item_title" style="font-weight:600 ;">CA7RIEL &amp; Paco Amoroso: Free Spirits World Tour</div>
                    <strong>Novembro de 2026</strong>

                    <hr />
                    <span class='slider_link'>
                      Comprar
                    </span>
                </div>
              </div>
              <picture>
                <source srcset="https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif?format=webp" type="image/webp"/>
                <source srcset="https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif?format=jpeg" type="image/jpeg"/>
                <img src="https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif" loading='lazy' width='100%'  alt='Banner CA7RIEL &amp; Paco Amoroso: Free Spirits World Tour'>
              </picture>
            </a>
          </swiper-slide>
    </swiper-container>
  </div>
</div></div>
      </section>
      <section
        class='block
          standard_card
          full-width
          '
        id='component-561b5126-b4df-4a6f-ae06-ee7e82983601'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-561b5126-b4df-4a6f-ae06-ee7e82983601-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-561b5126-b4df-4a6f-ae06-ee7e82983601-title'>Experiências</h2>
          <a class="list_link" href="https://www.ticketmaster.com.br/page/familia" >
          Ver mais <span class='hide'>Experiências</span>
          </a>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/toy-story'  > 
      <span class='grid-label'>Shopping Cidade São Paulo <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/1ac7115f-2ecf-4e77-b30e-6157da28df58-tm1920x720toy-storybanner.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/1ac7115f-2ecf-4e77-b30e-6157da28df58-tm1920x720toy-storybanner.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/1ac7115f-2ecf-4e77-b30e-6157da28df58-tm1920x720toy-storybanner.gif?w=384" loading='lazy' width='100%'  alt='Toy Story Ao Infinito e Além: A Exposição'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Toy Story Ao Infinito e Além: A Exposição</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/manti-wine-sessions'  > 
      <span class='grid-label'>Autódromo Velocitta <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/2c1b6a2a-bc21-4fbd-9271-2a0732e22630-d04cea4e-f11b-474b-81eb-36a1b6c70064-banner-festival-lineup-01.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/2c1b6a2a-bc21-4fbd-9271-2a0732e22630-d04cea4e-f11b-474b-81eb-36a1b6c70064-banner-festival-lineup-01.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/2c1b6a2a-bc21-4fbd-9271-2a0732e22630-d04cea4e-f11b-474b-81eb-36a1b6c70064-banner-festival-lineup-01.png?w=384" loading='lazy' width='100%'  alt='Manti Wine Sessions'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Manti Wine Sessions</div>
        

              <strong>Mogi Guaçu | 5 e 6 de Junho</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/coliseu-exposicao-imersiva'  > 
      <span class='grid-label'>Shopping Vila Olímpia <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/1f3b94ac-cf23-42ce-b33b-6827cf0df9b1-d7da5bd7-47ef-433c-89fb-48df06995792-1920x720-35.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/1f3b94ac-cf23-42ce-b33b-6827cf0df9b1-d7da5bd7-47ef-433c-89fb-48df06995792-1920x720-35.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/1f3b94ac-cf23-42ce-b33b-6827cf0df9b1-d7da5bd7-47ef-433c-89fb-48df06995792-1920x720-35.jpg?w=384" loading='lazy' width='100%'  alt='Coliseu: Exposição Imersiva'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Coliseu: Exposição Imersiva</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/hotwheelscityexperience-campinas'  > 
      <span class='grid-label'>Shopping Iguatemi Campinas <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/50d7ab6d-afa0-4f13-baa5-e1a981f45018-8a55eb4f-8102-4b3e-96a6-b87aa0b8afcc-banner-header-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/50d7ab6d-afa0-4f13-baa5-e1a981f45018-8a55eb4f-8102-4b3e-96a6-b87aa0b8afcc-banner-header-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/50d7ab6d-afa0-4f13-baa5-e1a981f45018-8a55eb4f-8102-4b3e-96a6-b87aa0b8afcc-banner-header-1.png?w=384" loading='lazy' width='100%'  alt='Hot Wheels City Experience'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Hot Wheels City Experience</div>
        

              <strong>Campinas | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/casa-warner-brasllia'  > 
      <span class='grid-label'>ParkShopping Brasília <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/c4c8fdf3-7285-4d69-a018-86a0d5567ca4-d6d683c0-b89e-49c4-9bbf-595a5608ee7c-bannerticketmaster1920x720-1-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/c4c8fdf3-7285-4d69-a018-86a0d5567ca4-d6d683c0-b89e-49c4-9bbf-595a5608ee7c-bannerticketmaster1920x720-1-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/c4c8fdf3-7285-4d69-a018-86a0d5567ca4-d6d683c0-b89e-49c4-9bbf-595a5608ee7c-bannerticketmaster1920x720-1-1.png?w=384" loading='lazy' width='100%'  alt='Casa Warner'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Casa Warner</div>
        

              <strong>Brasília | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/roda-rico'  > 
      <span class='grid-label'>Parque Cândido Portinari <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/5b6a690e-d331-4a2f-b01d-b40745b1dcf5-banner-1-passeio.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/5b6a690e-d331-4a2f-b01d-b40745b1dcf5-banner-1-passeio.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/5b6a690e-d331-4a2f-b01d-b40745b1dcf5-banner-1-passeio.jpg?w=384" loading='lazy' width='100%'  alt='Roda Rico'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Roda Rico</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/sao-paulo-oktoberfest'  > 
      <span class='grid-label'>Parque Ibirapuera <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/907c8212-ec27-4c46-9ae8-da188e953846-46da159a-b35e-48c9-a2de-188d5026f079-nova-full-banner---pgina-do-evento.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/907c8212-ec27-4c46-9ae8-da188e953846-46da159a-b35e-48c9-a2de-188d5026f079-nova-full-banner---pgina-do-evento.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/907c8212-ec27-4c46-9ae8-da188e953846-46da159a-b35e-48c9-a2de-188d5026f079-nova-full-banner---pgina-do-evento.png?w=384" loading='lazy' width='100%'  alt='São Paulo Oktoberfest 2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">São Paulo Oktoberfest 2026</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/sampasky'  > 
      <span class='grid-label'>Mirante do Vale <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/012db2c8-a361-40f9-a20f-11cd4972bbfb-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/012db2c8-a361-40f9-a20f-11cd4972bbfb-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/012db2c8-a361-40f9-a20f-11cd4972bbfb-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif?w=384" loading='lazy' width='100%'  alt='Sampa Sky'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Sampa Sky</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/henry-e-klauss'  > 
      <span class='grid-label'>Teatro VillaLobos <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/e176f4e3-954e-4b32-84f9-b8f2f7f15108-ab787e46-7ec8-4ae8-bb7b-5de648821c11-henryclausslanding1920x720.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/e176f4e3-954e-4b32-84f9-b8f2f7f15108-ab787e46-7ec8-4ae8-bb7b-5de648821c11-henryclausslanding1920x720.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/e176f4e3-954e-4b32-84f9-b8f2f7f15108-ab787e46-7ec8-4ae8-bb7b-5de648821c11-henryclausslanding1920x720.gif?w=384" loading='lazy' width='100%'  alt='Henry &amp; Klauss: Master of Magic'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Henry &amp; Klauss: Master of Magic</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/vinhos-de-portugal'  > 
      <span class='grid-label'>Múltiplas cidades <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/39d0d80d-ab98-4d32-b233-dfdef02c2427-2e9c5d8e-3dfe-400f-b638-7aedf5c521d4-banner-genrico-1920x720-landing-page-v4.jpg.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/39d0d80d-ab98-4d32-b233-dfdef02c2427-2e9c5d8e-3dfe-400f-b638-7aedf5c521d4-banner-genrico-1920x720-landing-page-v4.jpg.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/39d0d80d-ab98-4d32-b233-dfdef02c2427-2e9c5d8e-3dfe-400f-b638-7aedf5c521d4-banner-genrico-1920x720-landing-page-v4.jpg.jpg?w=384" loading='lazy' width='100%'  alt='Vinhos de Portugal'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Vinhos de Portugal</div>
        

              <strong>Múltiplas cidades | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5-title'>Esportes</h2>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/tcb' target='_blank' > 
      <span class='grid-label'>Múltiplas cidades <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/f2b7d863-ec99-4abc-a961-0fa85306853a-62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.webp?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/f2b7d863-ec99-4abc-a961-0fa85306853a-62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.webp?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/f2b7d863-ec99-4abc-a961-0fa85306853a-62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.webp?w=384" loading='lazy' width='100%'  alt='TCB'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">TCB</div>
        

              <strong>Múltiplas cidades | De 09 a 31 de Maio</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/volleyball-nations-league-2026' target='_blank' > 
      <span class='grid-label'>Arena Nilson Nelson <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/c7347f5f-b458-41b5-80c7-16e552b4eb04-f51e4f2c-5e60-4458-b602-3bea125be567-banneroptimized.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/c7347f5f-b458-41b5-80c7-16e552b4eb04-f51e4f2c-5e60-4458-b602-3bea125be567-banneroptimized.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/c7347f5f-b458-41b5-80c7-16e552b4eb04-f51e4f2c-5e60-4458-b602-3bea125be567-banneroptimized.jpg?w=384" loading='lazy' width='100%'  alt='VNL – Volleyball Nations League'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">VNL – Volleyball Nations League</div>
        

              <strong>Brasília | 03 a 14 de Junho</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/uts-rio-2026-br' target='_blank' > 
      <span class='grid-label'>Maracanãzinho <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/222f00a2-40b7-49b1-9da3-eda48e9dae5d-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/222f00a2-40b7-49b1-9da3-eda48e9dae5d-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/222f00a2-40b7-49b1-9da3-eda48e9dae5d-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif?w=384" loading='lazy' width='100%'  alt='UTS Rio 2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">UTS Rio 2026</div>
        

              <strong>Rio de Janeiro | 16, 17 e 18 de Julho</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/college-football' target='_blank' > 
      <span class='grid-label'>Estádio Nilton Santos <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/d9e7c8eb-ce71-4aa4-ba29-455f61dacfc1-8a1fdb11-766a-4096-a3ee-50f5cb2f7beb-2118c256-a58c-4f92-b1be-9176bb9d5d16-college-football-01.webp?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/d9e7c8eb-ce71-4aa4-ba29-455f61dacfc1-8a1fdb11-766a-4096-a3ee-50f5cb2f7beb-2118c256-a58c-4f92-b1be-9176bb9d5d16-college-football-01.webp?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/d9e7c8eb-ce71-4aa4-ba29-455f61dacfc1-8a1fdb11-766a-4096-a3ee-50f5cb2f7beb-2118c256-a58c-4f92-b1be-9176bb9d5d16-college-football-01.webp?w=384" loading='lazy' width='100%'  alt='College Football'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">College Football</div>
        

              <strong>Rio de Janeiro | 29 de Agosto</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/nbahouse' target='_blank' > 
      <span class='grid-label'>Shopping Eldorado <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/6cd2a0e4-edc1-4d87-915c-6b7f1769138d-9af580c4-8e9b-4b9f-8662-b4a6958ff448-img3756.webp?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/6cd2a0e4-edc1-4d87-915c-6b7f1769138d-9af580c4-8e9b-4b9f-8662-b4a6958ff448-img3756.webp?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/6cd2a0e4-edc1-4d87-915c-6b7f1769138d-9af580c4-8e9b-4b9f-8662-b4a6958ff448-img3756.webp?w=384" loading='lazy' width='100%'  alt='NBA House 2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">NBA House 2026</div>
        

              <strong>São Paulo | Múltiplas datas</strong>

				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          main_card
          full-width
          '
        id='component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb-title'>Destaques | São Paulo e Região</h2>
          <a class="list_link" href="https://www.ticketmaster.com.br/page/sp" target='_blank'>
          Ver mais <span class='hide'>Destaques | São Paulo e Região</span>
          </a>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='../event/daniel-tokio-marine-hall'  > 
      <span class='grid-label'>Tokio Marine Hall <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/bd845f76-6b61-4aa3-9271-72af00075816-1920x720-40.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/bd845f76-6b61-4aa3-9271-72af00075816-1920x720-40.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/bd845f76-6b61-4aa3-9271-72af00075816-1920x720-40.jpg?w=384" loading='lazy' width='100%'  alt='Daniel - Tokio Marine Hall - 12/06/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Daniel - Tokio Marine Hall - 12/06/2026</div>
        

              <strong>12 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/fabio-jr-suhai-music-hall'  > 
      <span class='grid-label'>Suhai Music Hall <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/e06995a8-5120-40f1-ad9e-b60b5854a6d8-dfd46c0a-6bda-4f69-8331-2f93e1391c8b-fabiojr---full-banner---pgina-do-evento-1920x720.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/e06995a8-5120-40f1-ad9e-b60b5854a6d8-dfd46c0a-6bda-4f69-8331-2f93e1391c8b-fabiojr---full-banner---pgina-do-evento-1920x720.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/e06995a8-5120-40f1-ad9e-b60b5854a6d8-dfd46c0a-6bda-4f69-8331-2f93e1391c8b-fabiojr---full-banner---pgina-do-evento-1920x720.jpg?w=384" loading='lazy' width='100%'  alt='Fábio Jr. - São Paulo - 12/06/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Fábio Jr. - São Paulo - 12/06/2026</div>
        

              <strong>12 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/fiawecsaopaulo'  > 
      <span class='grid-label'>Autódromo de Interlagos <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/aee6ec6f-4910-4c80-b6b7-9ad430bb0a30-b70d4f87-1629-4386-ba74-de47fac821c2-bannernormalhome.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/aee6ec6f-4910-4c80-b6b7-9ad430bb0a30-b70d4f87-1629-4386-ba74-de47fac821c2-bannernormalhome.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/aee6ec6f-4910-4c80-b6b7-9ad430bb0a30-b70d4f87-1629-4386-ba74-de47fac821c2-bannernormalhome.gif?w=384" loading='lazy' width='100%'  alt='Rolex 6 Horas de São Paulo'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Rolex 6 Horas de São Paulo</div>
        

              <strong>10, 11 e 12 de Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/eagle-eye-cherry-tokio-marine-hall'  > 
      <span class='grid-label'>Tokio Marine Hall <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/e2415d08-420c-4232-9759-c9301a04cd4f-1920x720-27.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/e2415d08-420c-4232-9759-c9301a04cd4f-1920x720-27.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/e2415d08-420c-4232-9759-c9301a04cd4f-1920x720-27.jpg?w=384" loading='lazy' width='100%'  alt='Eagle-Eye Cherry - Tokio Marine Hall - 25/07/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Eagle-Eye Cherry - Tokio Marine Hall - 25/07/2026</div>
        

              <strong>25 de Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/di-ferrero-sao-caetano-do-sul'  > 
      <span class='grid-label'>Multiplan Hall Park Shopping São Caetano <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/199e136d-b3d6-4e05-9fbf-b735995b57e5-full-banner---1920x720-3-1.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/199e136d-b3d6-4e05-9fbf-b735995b57e5-full-banner---1920x720-3-1.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/199e136d-b3d6-4e05-9fbf-b735995b57e5-full-banner---1920x720-3-1.jpg?w=384" loading='lazy' width='100%'  alt='Di Ferrero - São Caetano do Sul - 08/08/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Di Ferrero - São Caetano do Sul - 08/08/2026</div>
        

              <strong>8 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/sp2b'  > 
      <span class='grid-label'>Parque Ibirapuera <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/95b64470-0efa-4b6f-8931-175908a74b90-747ae47d-25f7-44e9-984e-c16f1144036f-landing-ticket-master-01.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/95b64470-0efa-4b6f-8931-175908a74b90-747ae47d-25f7-44e9-984e-c16f1144036f-landing-ticket-master-01.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/95b64470-0efa-4b6f-8931-175908a74b90-747ae47d-25f7-44e9-984e-c16f1144036f-landing-ticket-master-01.jpg?w=384" loading='lazy' width='100%'  alt='SP2B - São Paulo Beyond Business'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">SP2B - São Paulo Beyond Business</div>
        

              <strong>09 a 16 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/this-is-michael-suhai-music-hall'  > 
      <span class='grid-label'>Suhai Music Hall <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/7d2c19a8-e584-4b61-b226-7ee388936141-this-is-michael---full-banner---home-site-1920x720-1.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/7d2c19a8-e584-4b61-b226-7ee388936141-this-is-michael---full-banner---home-site-1920x720-1.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/7d2c19a8-e584-4b61-b226-7ee388936141-this-is-michael---full-banner---home-site-1920x720-1.jpg?w=384" loading='lazy' width='100%'  alt='This is Michael - São Paulo - 29/08/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">This is Michael - São Paulo - 29/08/2026</div>
        

              <strong>29 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/angra-tokio-marine'  > 
      <span class='grid-label'>Tokio Marine Hall <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/42044fb3-056c-4cfd-a391-fa85b6e93eb7-794f3d80-476f-4388-aff3-0bd2771a0dd3-1920x720.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/42044fb3-056c-4cfd-a391-fa85b6e93eb7-794f3d80-476f-4388-aff3-0bd2771a0dd3-1920x720.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/42044fb3-056c-4cfd-a391-fa85b6e93eb7-794f3d80-476f-4388-aff3-0bd2771a0dd3-1920x720.jpg?w=384" loading='lazy' width='100%'  alt='Angra - Tokio Marine Hall'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Angra - Tokio Marine Hall</div>
        

              <strong>02 e 03 de Outubro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/the-cat-empire-na-audio-sp'  > 
      <span class='grid-label'>Audio <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/10b2eb96-6ebe-41f8-a7f4-1f8b8834e4b2-d561beeb-1532-46db-8cf5-c91924eab7ff-01fullbanner-2-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/10b2eb96-6ebe-41f8-a7f4-1f8b8834e4b2-d561beeb-1532-46db-8cf5-c91924eab7ff-01fullbanner-2-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/10b2eb96-6ebe-41f8-a7f4-1f8b8834e4b2-d561beeb-1532-46db-8cf5-c91924eab7ff-01fullbanner-2-1.png?w=384" loading='lazy' width='100%'  alt='The Cat Empire - São Paulo - 12/11/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">The Cat Empire - São Paulo - 12/11/2026</div>
        

              <strong>12 de Novembro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/carol-biazin-ribeirao-preto'  > 
      <span class='grid-label'>Multiplan Hall Ribeirão Shopping <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/3c6c4259-1210-47ed-8bbb-37d5a28e00e9-1920x720-5.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/3c6c4259-1210-47ed-8bbb-37d5a28e00e9-1920x720-5.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/3c6c4259-1210-47ed-8bbb-37d5a28e00e9-1920x720-5.png?w=384" loading='lazy' width='100%'  alt='Carol Biazin - Ribeirão Preto - 22/08/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Carol Biazin - Ribeirão Preto - 22/08/2026</div>
        

              <strong>22 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0-title'>Destaques | Rio de Janeiro</h2>
          <a class="list_link" href="https://www.ticketmaster.com.br/page/rj" >
          Ver mais <span class='hide'>Destaques | Rio de Janeiro</span>
          </a>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='../event/nubya-garcia-queremos-no-manouche-rj-1'  > 
      <span class='grid-label'>Manouche <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/69cdf03f-3c80-4fb1-a5b1-6bb08c453c81-7fab0877-a90c-4ea7-a0a5-2f25ee304e77-nubyagarciarj01fullbanner.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/69cdf03f-3c80-4fb1-a5b1-6bb08c453c81-7fab0877-a90c-4ea7-a0a5-2f25ee304e77-nubyagarciarj01fullbanner.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/69cdf03f-3c80-4fb1-a5b1-6bb08c453c81-7fab0877-a90c-4ea7-a0a5-2f25ee304e77-nubyagarciarj01fullbanner.jpg?w=384" loading='lazy' width='100%'  alt='Nubya Garcia | Queremos! - Rio de Janeiro'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Nubya Garcia | Queremos! - Rio de Janeiro</div>
        

              <strong>02 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/anavitoria-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/0766f8be-3784-4564-b9bf-a71f09d8ed02-tkm---1920x720-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/0766f8be-3784-4564-b9bf-a71f09d8ed02-tkm---1920x720-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/0766f8be-3784-4564-b9bf-a71f09d8ed02-tkm---1920x720-1.png?w=384" loading='lazy' width='100%'  alt='Anavitória - Rio de Janeiro - 05/06/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Anavitória - Rio de Janeiro - 05/06/2026</div>
        

              <strong>05 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/chico-chico-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/18b6281b-de5e-4ffc-b985-f53cd94e1afe-1920x720-3-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/18b6281b-de5e-4ffc-b985-f53cd94e1afe-1920x720-3-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/18b6281b-de5e-4ffc-b985-f53cd94e1afe-1920x720-3-1.png?w=384" loading='lazy' width='100%'  alt='Chico Chico no Qualistage - RJ - 12/06/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Chico Chico no Qualistage - RJ - 12/06/2026</div>
        

              <strong>12 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/rodrigo-teaser-no-qualistage-rj-dataextra'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/4f778cce-a524-4070-99eb-96336b62ecbe-1920x720-6-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/4f778cce-a524-4070-99eb-96336b62ecbe-1920x720-6-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/4f778cce-a524-4070-99eb-96336b62ecbe-1920x720-6-1.png?w=384" loading='lazy' width='100%'  alt='Rodrigo Teaser no Qualistage - RJ - Data Extra - 12/07/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Rodrigo Teaser no Qualistage - RJ - Data Extra - 12/07/2026</div>
        

              <strong>14 de Junho e 12 de Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/ludmilla-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/51a79a5e-7bf2-43b9-9bca-e5cac3612745-1920x720-5-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/51a79a5e-7bf2-43b9-9bca-e5cac3612745-1920x720-5-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/51a79a5e-7bf2-43b9-9bca-e5cac3612745-1920x720-5-1.png?w=384" loading='lazy' width='100%'  alt='Ludmilla - Qualistage - RJ - 23/07/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Ludmilla - Qualistage - RJ - 23/07/2026</div>
        

              <strong>23 de Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/joao-bosco-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/392b6f40-44f7-48d5-bed2-fc7cd730f609-full-banner---1920x720-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/392b6f40-44f7-48d5-bed2-fc7cd730f609-full-banner---1920x720-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/392b6f40-44f7-48d5-bed2-fc7cd730f609-full-banner---1920x720-1.png?w=384" loading='lazy' width='100%'  alt='João Bosco no Qualistage - RJ - 08/08/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">João Bosco no Qualistage - RJ - 08/08/2026</div>
        

              <strong>08 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/daniel-boaventura-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/47eb8c9c-571d-4997-b74e-02742064124f-1920x720-2.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/47eb8c9c-571d-4997-b74e-02742064124f-1920x720-2.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/47eb8c9c-571d-4997-b74e-02742064124f-1920x720-2.jpg?w=384" loading='lazy' width='100%'  alt='Daniel Boaventura - Qualistage - RJ - 28/08/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Daniel Boaventura - Qualistage - RJ - 28/08/2026</div>
        

              <strong>28 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/joshua-redman-queremos-no-vivo-rio-rj'  > 
      <span class='grid-label'>Vivo Rio <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/8380f217-6cd4-4108-b4eb-feaa1d011c7f-872c6fcc-46fd-4658-9fe8-7f08f95dc3b1-01fullbannereffect.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/8380f217-6cd4-4108-b4eb-feaa1d011c7f-872c6fcc-46fd-4658-9fe8-7f08f95dc3b1-01fullbannereffect.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/8380f217-6cd4-4108-b4eb-feaa1d011c7f-872c6fcc-46fd-4658-9fe8-7f08f95dc3b1-01fullbannereffect.jpg?w=384" loading='lazy' width='100%'  alt='Joshua Redman | Queremos! - Rio de Janeiro - 30/09/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Joshua Redman | Queremos! - Rio de Janeiro - 30/09/2026</div>
        

              <strong>30 de Setembro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/whinderson-nunes-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png?w=384" loading='lazy' width='100%'  alt='Whinderson Nunes no Qualistage - RJ - 18/10/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Whinderson Nunes no Qualistage - RJ - 18/10/2026</div>
        

              <strong>18 de Outubro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/oswaldo-montenegro-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/d740dc02-8a26-4229-9015-206b6660ec02-1920x720-1-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/d740dc02-8a26-4229-9015-206b6660ec02-1920x720-1-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/d740dc02-8a26-4229-9015-206b6660ec02-1920x720-1-1.png?w=384" loading='lazy' width='100%'  alt='Oswaldo Montenegro no Qualistage - RJ - 24/10/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Oswaldo Montenegro no Qualistage - RJ - 24/10/2026</div>
        

              <strong>24 de Outubro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4-title'>Destaques | Demais cidades</h2>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='../event/tcb'  > 
      <span class='grid-label'>São José <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.png?w=384" loading='lazy' width='100%'  alt='TCB'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">TCB</div>
        

              <strong>30 de 31 de Maio de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/joao-bosco-juiz-de-fora'  > 
      <span class='grid-label'>Juiz de Fora <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/fcfc7e88-ed93-4388-a7ac-4925a788a6e2-60f85ca1-8bbc-4363-bff0-f0697abf519e-whatsapp-image-2026-02-27-at-14.48.14.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/fcfc7e88-ed93-4388-a7ac-4925a788a6e2-60f85ca1-8bbc-4363-bff0-f0697abf519e-whatsapp-image-2026-02-27-at-14.48.14.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/fcfc7e88-ed93-4388-a7ac-4925a788a6e2-60f85ca1-8bbc-4363-bff0-f0697abf519e-whatsapp-image-2026-02-27-at-14.48.14.jpg?w=384" loading='lazy' width='100%'  alt='João Bosco - Juiz de Fora - 26/06/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">João Bosco - Juiz de Fora - 26/06/2026</div>
        

              <strong>26 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/dvl-rock-festival'  > 
      <span class='grid-label'>Cascavel <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/8d92b5b8-ff79-4149-bb48-dec03e23d8f4-4bf3f22d-0ebc-48f2-85b3-f1d36aae1aa1-whatsapp-image-2026-03-10-at-11.29.42-1.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/8d92b5b8-ff79-4149-bb48-dec03e23d8f4-4bf3f22d-0ebc-48f2-85b3-f1d36aae1aa1-whatsapp-image-2026-03-10-at-11.29.42-1.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/8d92b5b8-ff79-4149-bb48-dec03e23d8f4-4bf3f22d-0ebc-48f2-85b3-f1d36aae1aa1-whatsapp-image-2026-03-10-at-11.29.42-1.jpg?w=384" loading='lazy' width='100%'  alt='DVL Rock Festival - Cascavel - 19/07/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">DVL Rock Festival - Cascavel - 19/07/2026</div>
        

              <strong>19 de Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/nazareth-celebrando-55-anos'  > 
      <span class='grid-label'>Belo Horizonte <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/92ddb5a4-83e2-45e1-982f-5083441cd591-cac2a353-1e62-4e5c-a84f-72348192de2c-1920x720-nazareth-min.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/92ddb5a4-83e2-45e1-982f-5083441cd591-cac2a353-1e62-4e5c-a84f-72348192de2c-1920x720-nazareth-min.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/92ddb5a4-83e2-45e1-982f-5083441cd591-cac2a353-1e62-4e5c-a84f-72348192de2c-1920x720-nazareth-min.png?w=384" loading='lazy' width='100%'  alt='Nazareth - Celebrando 55 Anos - Belo Horizonte'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Nazareth - Celebrando 55 Anos - Belo Horizonte</div>
        

              <strong>24 de Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/sticky-fingers-curitiba'  > 
      <span class='grid-label'>Curitiba <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/39b452ca-67b5-4817-9c6f-f896e0ed10f7-d733e449-58e9-4928-94af-ae92b3e15afe-stfilanding1920x720-2-1.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/39b452ca-67b5-4817-9c6f-f896e0ed10f7-d733e449-58e9-4928-94af-ae92b3e15afe-stfilanding1920x720-2-1.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/39b452ca-67b5-4817-9c6f-f896e0ed10f7-d733e449-58e9-4928-94af-ae92b3e15afe-stfilanding1920x720-2-1.gif?w=384" loading='lazy' width='100%'  alt='Sticky Fingers - Curitiba - 08/08/2026 - Venda Geral'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Sticky Fingers - Curitiba - 08/08/2026 - Venda Geral</div>
        

              <strong>08 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6-title'>Espetáculos, Teatro &amp; Comédia 🎭</h2>
          <a class="list_link" href="https://www.ticketmaster.com.br/page/teatro" >
          Ver mais <span class='hide'>Espetáculos, Teatro &amp; Comédia 🎭</span>
          </a>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='../event/murilo-couto-novo-show-teatro-da-ilha'  > 
      <span class='grid-label'>Teatro da Ilha <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/a6faecf0-53ff-4175-bbef-f68587fed41e-whatsapp-image-2026-03-27-at-07.37.38-2.jpeg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/a6faecf0-53ff-4175-bbef-f68587fed41e-whatsapp-image-2026-03-27-at-07.37.38-2.jpeg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/a6faecf0-53ff-4175-bbef-f68587fed41e-whatsapp-image-2026-03-27-at-07.37.38-2.jpeg?w=384" loading='lazy' width='100%'  alt='Murilo Couto: Novo Show - Rio de Janeiro - 28/05/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Murilo Couto: Novo Show - Rio de Janeiro - 28/05/2026</div>
        

              <strong>28 de Maio de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/o-magico-de-oz-teatro-ruth-escobar'  > 
      <span class='grid-label'>Teatro Ruth Escobar <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/23fc8da4-c804-471c-a787-04f09494ffc8-tmgrid1920x720-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/23fc8da4-c804-471c-a787-04f09494ffc8-tmgrid1920x720-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/23fc8da4-c804-471c-a787-04f09494ffc8-tmgrid1920x720-1.png?w=384" loading='lazy' width='100%'  alt='O Mágico de Oz - São Paulo'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">O Mágico de Oz - São Paulo</div>
        

              <strong>8 de Março a 02 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/vindos-de-longe-teatro-ruth-escobar'  > 
      <span class='grid-label'>Teatro Ruth Escobar <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/1884ffb1-8a67-4bbe-9675-af343cc5e063-cfabanner1920x720-3.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/1884ffb1-8a67-4bbe-9675-af343cc5e063-cfabanner1920x720-3.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/1884ffb1-8a67-4bbe-9675-af343cc5e063-cfabanner1920x720-3.jpg?w=384" loading='lazy' width='100%'  alt='Vindos de Longe - São Paulo'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Vindos de Longe - São Paulo</div>
        

              <strong>26 de Junho a 02 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/elton-john-diamonds-teatro-ruth-escobar'  > 
      <span class='grid-label'>Teatro Ruth Escobar <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/86fe488e-0a3c-4b30-9ddf-890cd37f775a-1920-x720-ticketmaster-copy.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/86fe488e-0a3c-4b30-9ddf-890cd37f775a-1920-x720-ticketmaster-copy.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/86fe488e-0a3c-4b30-9ddf-890cd37f775a-1920-x720-ticketmaster-copy.jpg?w=384" loading='lazy' width='100%'  alt='Elton John Diamonds - São Paulo'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Elton John Diamonds - São Paulo</div>
        

              <strong>04, 11, 18 e 25 de Setembro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/whinderson-nunes-no-qualistage-rj'  > 
      <span class='grid-label'>Qualistage <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png?w=384" loading='lazy' width='100%'  alt='Whinderson Nunes no Qualistage - RJ - 18/10/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Whinderson Nunes no Qualistage - RJ - 18/10/2026</div>
        

              <strong>18 de Outubro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa-title'>Última chance</h2>
          <a class="list_link" href="https://www.ticketmaster.com.br/page/ultima-chance" >
          Ver mais <span class='hide'>Última chance</span>
          </a>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='../event/martinho-da-vila-martnalia-pai-e-filha-rio-de-janeiro'  > 
      <span class='grid-label'>Vivo Rio <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/224fc7bf-f63f-4c3e-953b-df956554b9df-5f364237-e809-4991-8a5c-057dc23a3fdb-1920x720-color.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/224fc7bf-f63f-4c3e-953b-df956554b9df-5f364237-e809-4991-8a5c-057dc23a3fdb-1920x720-color.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/224fc7bf-f63f-4c3e-953b-df956554b9df-5f364237-e809-4991-8a5c-057dc23a3fdb-1920x720-color.jpg?w=384" loading='lazy' width='100%'  alt='Martinho da Vila &amp; Mart´Nália | Pai e Filha - Rio de Janeiro - 30/05/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Martinho da Vila &amp; Mart´Nália | Pai e Filha - Rio de Janeiro - 30/05/2026</div>
        

              <strong>30 de Maio de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/lenine-tokio-marine-hall'  > 
      <span class='grid-label'>Tokio Marine Hall <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/38fdd9b6-2187-4c30-b3a0-9859e7cc7385-1920x720-33.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/38fdd9b6-2187-4c30-b3a0-9859e7cc7385-1920x720-33.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/38fdd9b6-2187-4c30-b3a0-9859e7cc7385-1920x720-33.jpg?w=384" loading='lazy' width='100%'  alt='Lenine - Tokio Marine Hall - 30/05/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Lenine - Tokio Marine Hall - 30/05/2026</div>
        

              <strong>30 de Maio de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/school-of-rock-jardins-the-cavern-club'  > 
      <span class='grid-label'>The Cavern Club <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/27999fcf-3346-406a-b044-b268858cd6c4-1920x720-4-1-1.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/27999fcf-3346-406a-b044-b268858cd6c4-1920x720-4-1-1.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/27999fcf-3346-406a-b044-b268858cd6c4-1920x720-4-1-1.png?w=384" loading='lazy' width='100%'  alt='School of Rock Jardins - São Paulo - 31/05/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">School of Rock Jardins - São Paulo - 31/05/2026</div>
        

              <strong>31 de Maio de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/nubya-garcia-queremos-na-casa-natura-sp'  > 
      <span class='grid-label'>Casa Natura Musical <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/be678cc0-0b1a-40dd-a3b8-774fceb11b13-39d2352f-6b3c-45d6-997a-a9617459c367-nubyagarciasp01fullbanner.jpg?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/be678cc0-0b1a-40dd-a3b8-774fceb11b13-39d2352f-6b3c-45d6-997a-a9617459c367-nubyagarciasp01fullbanner.jpg?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/be678cc0-0b1a-40dd-a3b8-774fceb11b13-39d2352f-6b3c-45d6-997a-a9617459c367-nubyagarciasp01fullbanner.jpg?w=384" loading='lazy' width='100%'  alt='Nubya Garcia | Queremos! - São Paulo'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Nubya Garcia | Queremos! - São Paulo</div>
        

              <strong>03 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/manti-wine-sessions'  > 
      <span class='grid-label'>Autodromo Velocitta <span class='hide'></span></span>
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/0774ea2c-ffa8-4d78-ae37-1f9b2fb5da50-fc28420b-5767-4f1c-b64a-70a386e338cb-banner-festival-07.png?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/0774ea2c-ffa8-4d78-ae37-1f9b2fb5da50-fc28420b-5767-4f1c-b64a-70a386e338cb-banner-festival-07.png?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/0774ea2c-ffa8-4d78-ae37-1f9b2fb5da50-fc28420b-5767-4f1c-b64a-70a386e338cb-banner-festival-07.png?w=384" loading='lazy' width='100%'  alt='Manti Wine Sessions - Autódromo Velocitta - 05 e 06/06/2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Manti Wine Sessions - Autódromo Velocitta - 05 e 06/06/2026</div>
        

              <strong>5 e 6 de Junho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          tm-banner
          full-width
          '
        id='component-7c09ae95-6c05-4749-ae88-d80f672878ec'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  class='block_content'>
    <div class="list_title">
</div>

        <div role="list" class="events_grid list-grid-2 standard">
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/experiencias'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/f8289d25-28f8-4cbc-98c2-9eff8e763131-experienciaspremium1920x720v1.png?w=960&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/f8289d25-28f8-4cbc-98c2-9eff8e763131-experienciaspremium1920x720v1.png?w=960&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/f8289d25-28f8-4cbc-98c2-9eff8e763131-experienciaspremium1920x720v1.png?w=960" loading='lazy' width='100%'  alt='Experiências premium'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Experiências premium</div>
        


				</div>

        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/rockinrio'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/5d9b5105-c271-4878-8621-bfdbfd799ae7-rir-banner.gif?w=960&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/5d9b5105-c271-4878-8621-bfdbfd799ae7-rir-banner.gif?w=960&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/5d9b5105-c271-4878-8621-bfdbfd799ae7-rir-banner.gif?w=960" loading='lazy' width='100%'  alt='Rock in Rio'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Rock in Rio</div>
        


				</div>

        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-d54e1b4b-6476-42ea-a1ca-67b8066850e4'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-d54e1b4b-6476-42ea-a1ca-67b8066850e4-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-d54e1b4b-6476-42ea-a1ca-67b8066850e4-title'>Grandes eventos</h2>
</div>

        <div role="list" class="events_grid list-grid-5 standard">
          <div role="listitem" class="grid_element">
      <a  href='../event/enhypen'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/225e53b3-94d4-4af5-a270-e76521098746-enhypen1920x720px.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/225e53b3-94d4-4af5-a270-e76521098746-enhypen1920x720px.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/225e53b3-94d4-4af5-a270-e76521098746-enhypen1920x720px.gif?w=384" loading='lazy' width='100%'  alt='ENHYPEN WORLD TOUR &#x27;BLOOD SAGA&#x27;'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">ENHYPEN WORLD TOUR &#x27;BLOOD SAGA&#x27;</div>
        

              <strong>04 de Julho 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/harry-styles'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif?w=384" loading='lazy' width='100%'  alt='Harry Styles: Together, Together'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Harry Styles: Together, Together</div>
        

              <strong>Julho de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/rosalia'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/cddb5541-b857-4993-ac09-fc0cb0681cc9-tmgrid1920x720home.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/cddb5541-b857-4993-ac09-fc0cb0681cc9-tmgrid1920x720home.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/cddb5541-b857-4993-ac09-fc0cb0681cc9-tmgrid1920x720home.gif?w=384" loading='lazy' width='100%'  alt='Rosalía: Lux Tour 2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Rosalía: Lux Tour 2026</div>
        

              <strong>10 e 11 de Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/sticky-fingers'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/aa70f3dd-82e4-45b0-9e06-d1f861c21ea3-stickyyy.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/aa70f3dd-82e4-45b0-9e06-d1f861c21ea3-stickyyy.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/aa70f3dd-82e4-45b0-9e06-d1f861c21ea3-stickyyy.gif?w=384" loading='lazy' width='100%'  alt='Sticky Fingers: Live in Latin America 2026'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Sticky Fingers: Live in Latin America 2026</div>
        

              <strong>Agosto de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/aespa'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif?w=384" loading='lazy' width='100%'  alt='aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -</div>
        

              <strong>04 de Setembro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/5sos'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/6e1091bc-9b40-4fb1-8dec-c69897d27d7a-5sos1920x720home.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/6e1091bc-9b40-4fb1-8dec-c69897d27d7a-5sos1920x720home.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/6e1091bc-9b40-4fb1-8dec-c69897d27d7a-5sos1920x720home.gif?w=384" loading='lazy' width='100%'  alt='5 Seconds Of Summer: Everyone&#x27;s A Star World Tour'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">5 Seconds Of Summer: Everyone&#x27;s A Star World Tour</div>
        

              <strong>São Paulo e Belo Horizonte</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/zayn'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/e9e30072-c0e5-4b28-8577-0ce19cba6e3b-zayn1920x720home.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/e9e30072-c0e5-4b28-8577-0ce19cba6e3b-zayn1920x720home.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/e9e30072-c0e5-4b28-8577-0ce19cba6e3b-zayn1920x720home.gif?w=384" loading='lazy' width='100%'  alt='ZAYN: The Konnakol Tour'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">ZAYN: The Konnakol Tour</div>
        

              <strong>Outubro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/kid-abelha'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif?w=384" loading='lazy' width='100%'  alt='Kid Abelha: Eu Tive Um Sonho'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Kid Abelha: Eu Tive Um Sonho</div>
        

              <strong>Turnê 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/bts-world-tour-arirang'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/f862039e-2a11-4acc-a59e-be51a2fd10b4-bts1920x720home.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/f862039e-2a11-4acc-a59e-be51a2fd10b4-bts1920x720home.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/f862039e-2a11-4acc-a59e-be51a2fd10b4-bts1920x720home.gif?w=384" loading='lazy' width='100%'  alt='BTS WORLD TOUR ARIRANG'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">BTS WORLD TOUR ARIRANG</div>
        

              <strong>28, 30 e 31 de Outubro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/djavan3'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/99dd624b-8290-4115-8308-9ecf331a4aba-djavanhome1920x720.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/99dd624b-8290-4115-8308-9ecf331a4aba-djavanhome1920x720.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/99dd624b-8290-4115-8308-9ecf331a4aba-djavanhome1920x720.gif?w=384" loading='lazy' width='100%'  alt='Djavan: Djavanear 50 anos - Só Sucessos'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Djavan: Djavanear 50 anos - Só Sucessos</div>
        

              <strong>Turnê 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/ca7riel-e-paco-amoroso'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif?w=384" loading='lazy' width='100%'  alt='CA7RIEL &amp; Paco Amoroso: Free Spirits World Tour'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">CA7RIEL &amp; Paco Amoroso: Free Spirits World Tour</div>
        

              <strong>Novembro de 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/karol-g'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif?w=384" loading='lazy' width='100%'  alt='KAROL G: Viajando Por El Mundo Tropitour'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">KAROL G: Viajando Por El Mundo Tropitour</div>
        

              <strong>12 de Fevereiro de 2027</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/louis-tomlinson'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif?w=384" loading='lazy' width='100%'  alt='Louis Tomlinson: How Did We Get Here? Latin American Tour'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Louis Tomlinson: How Did We Get Here? Latin American Tour</div>
        

              <strong>06 e 07 de Abril de 2027</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/revelacao-e-xande-de-pilares'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif?w=384" loading='lazy' width='100%'  alt='Xande de Pilares &amp; Revelação: Tava Escrito – O Reencontro Histórico'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Xande de Pilares &amp; Revelação: Tava Escrito – O Reencontro Histórico</div>
        

              <strong>Turnê 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='../event/tiago-iorc'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif?w=384&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif?w=384&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif?w=384" loading='lazy' width='100%'  alt='Tiago Iorc - Turnê Troco Likes 10 Anos'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Tiago Iorc - Turnê Troco Likes 10 Anos</div>
        

              <strong>Turnê 2026</strong>

				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-cc33c46c-eccc-486a-b11b-d857cbb2773b'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-cc33c46c-eccc-486a-b11b-d857cbb2773b-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-cc33c46c-eccc-486a-b11b-d857cbb2773b-title'>Locais</h2>
</div>

        <div role="list" class="events_grid list-grid-4 vertical">
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/roda-rico'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/e81f737d-15f6-4ce9-a47a-9e48455bc86e-banner-1-passeio.jpg?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/e81f737d-15f6-4ce9-a47a-9e48455bc86e-banner-1-passeio.jpg?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/e81f737d-15f6-4ce9-a47a-9e48455bc86e-banner-1-passeio.jpg?w=480" loading='lazy' width='100%'  alt='Roda Rico'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Roda Rico</div>
        


				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/sampasky'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/78be3784-bd99-4939-ae86-4ac5c5474e48-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/78be3784-bd99-4939-ae86-4ac5c5474e48-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/78be3784-bd99-4939-ae86-4ac5c5474e48-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif?w=480" loading='lazy' width='100%'  alt='Sampa Sky'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Sampa Sky</div>
        


				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/zoo-sao-paulo'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/fae56cc7-2eed-4b41-8553-902eecfd9f06-zoo1920.png?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/fae56cc7-2eed-4b41-8553-902eecfd9f06-zoo1920.png?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/fae56cc7-2eed-4b41-8553-902eecfd9f06-zoo1920.png?w=480" loading='lazy' width='100%'  alt='Zoo São Paulo'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Zoo São Paulo</div>
        


				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/event/jardim-botanico-sp'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/7f1e0a9d-59ca-4d46-b4fd-89953cbbe0ae-jardimbotanico1920x720.gif?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/7f1e0a9d-59ca-4d46-b4fd-89953cbbe0ae-jardimbotanico1920x720.gif?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/7f1e0a9d-59ca-4d46-b4fd-89953cbbe0ae-jardimbotanico1920x720.gif?w=480" loading='lazy' width='100%'  alt='Jardim Botânico'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Jardim Botânico</div>
        


				</div>

           <span class='grid_link'>
           Comprar
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          full-width
          '
        id='component-1f9fe5af-ff0e-4368-86ca-03921f2eec10'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">
<div class="block_cards" >
  <div role='group'  aria-labelledby='component-1f9fe5af-ff0e-4368-86ca-03921f2eec10-title'  class='block_content'>
    <div class="list_title">
      <h2 class="block_title" id='component-1f9fe5af-ff0e-4368-86ca-03921f2eec10-title'>Casas</h2>
</div>

        <div role="list" class="events_grid list-grid-4 vertical">
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/the-cavern-club'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/6a4b1b3e-b0b2-4d97-9204-038afd35b19e-bannerticketmastercavern1920x720.jpg?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/6a4b1b3e-b0b2-4d97-9204-038afd35b19e-bannerticketmastercavern1920x720.jpg?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/6a4b1b3e-b0b2-4d97-9204-038afd35b19e-bannerticketmastercavern1920x720.jpg?w=480" loading='lazy' width='100%'  alt='The Cavern Club'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">The Cavern Club</div>
        
              <p><p>São Paulo</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/multiplan-hall-saocaetano'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/5190afb5-ce64-464c-94fa-1a737d0d67a0-multiplan-sao-caetano.png?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/5190afb5-ce64-464c-94fa-1a737d0d67a0-multiplan-sao-caetano.png?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/5190afb5-ce64-464c-94fa-1a737d0d67a0-multiplan-sao-caetano.png?w=480" loading='lazy' width='100%'  alt='Multiplan Hall'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Multiplan Hall</div>
        
              <p><p>ParkShopping São Caetano</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/multiplan-hall-ribeirao'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/84240362-9467-48aa-a8e6-0dda63a962df-multiplan-ribeirao.png?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/84240362-9467-48aa-a8e6-0dda63a962df-multiplan-ribeirao.png?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/84240362-9467-48aa-a8e6-0dda63a962df-multiplan-ribeirao.png?w=480" loading='lazy' width='100%'  alt='Multiplan Hall'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Multiplan Hall</div>
        
              <p><p>RibeirãoShopping</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/qualistage'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/d93f9bb8-c0b0-4917-91d2-f7820786f700-quali.png?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/d93f9bb8-c0b0-4917-91d2-f7820786f700-quali.png?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/d93f9bb8-c0b0-4917-91d2-f7820786f700-quali.png?w=480" loading='lazy' width='100%'  alt='Qualistage'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Qualistage</div>
        
              <p><p>Rio de Janeiro</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/suhai-music-hall'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/494e6ac2-9cef-4d2d-bc5a-79f66e87ac5a-50feed0e-7d50-4a49-973b-62ca827e19f4-banneroptimizedv2.webp?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/494e6ac2-9cef-4d2d-bc5a-79f66e87ac5a-50feed0e-7d50-4a49-973b-62ca827e19f4-banneroptimizedv2.webp?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/494e6ac2-9cef-4d2d-bc5a-79f66e87ac5a-50feed0e-7d50-4a49-973b-62ca827e19f4-banneroptimizedv2.webp?w=480" loading='lazy' width='100%'  alt='Suhai Music Hall'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Suhai Music Hall</div>
        
              <p><p>São Paulo</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/teatrodailha'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/310ad4f9-fdac-48f6-a4ef-1d31c862733f-capaticketmasteroptimized.jpg?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/310ad4f9-fdac-48f6-a4ef-1d31c862733f-capaticketmasteroptimized.jpg?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/310ad4f9-fdac-48f6-a4ef-1d31c862733f-capaticketmasteroptimized.jpg?w=480" loading='lazy' width='100%'  alt='Teatro da Ilha'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Teatro da Ilha</div>
        
              <p><p>Rio de Janeiro</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/teatroruthescobar'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/c46c533e-e7ff-4a94-906f-978925f500e8-a5069e88-9e23-4db2-87ad-703562eb98b9-1920x720-teatro-ruth-escobar-2-2.png?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/c46c533e-e7ff-4a94-906f-978925f500e8-a5069e88-9e23-4db2-87ad-703562eb98b9-1920x720-teatro-ruth-escobar-2-2.png?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/c46c533e-e7ff-4a94-906f-978925f500e8-a5069e88-9e23-4db2-87ad-703562eb98b9-1920x720-teatro-ruth-escobar-2-2.png?w=480" loading='lazy' width='100%'  alt='Teatro Ruth Escobar'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Teatro Ruth Escobar</div>
        
              <p><p>São Paulo</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
          <div role="listitem" class="grid_element">
      <a  href='https://www.ticketmaster.com.br/page/tokio-marine-hall'  > 
      
			<div class="image">
        <picture>
          <source srcset="https://cdn.getcrowder.com/images/15f8f90e-b6be-43d8-99e1-32090242da8a-tokio.webp?w=480&format=webp" type="image/webp"/>
          <source srcset="https://cdn.getcrowder.com/images/15f8f90e-b6be-43d8-99e1-32090242da8a-tokio.webp?w=480&format=jpeg" type="image/jpeg"/>
          <img src="https://cdn.getcrowder.com/images/15f8f90e-b6be-43d8-99e1-32090242da8a-tokio.webp?w=480" loading='lazy' width='100%'  alt='Tokio Marine Hall'>
        </picture>
			</div>

     

			<div class="information">
				
				<div class="details">
              <div class="item_title">Tokio Marine Hall</div>
        
              <p><p>São Paulo</p>
</p>


				</div>

           <span class='grid_link'>
           Confira
           </span>
        
			</div>
		</a>
    </div>
      </div>
  </div>  
</div>
</div>
      </section>
      <section
        class='block
          
          centered
          '
        id='component-a7bb9492-891f-4d01-a218-6a26931b1473'
        style=" background-image: url(''); background-color:#024ddf; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}"><div class='block_html'>
  <div class='block_content'>
    
    <div>
      <div class="tm-suscribe">
    <div style="font-size:1.5em; font-weight:600; color:#fff; margin-bottom:10px">Inscreva-se para saber as novidades</div>
    <iframe allow="autoplay" title="Inscreva-se para saber as novidades"
        sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-popups-to-escape-sandbox"
        id="pD2hFh" class="embed_frame" loading="lazy" src="https://m.cmpgn.page/pD2hFh?embed=3"
        style="border:none;min-width:100%;height:168px" allowpaymentrequest="" allowfullscreen=""
        data-hj-allow-iframe=""></iframe>
</div>
    </div>
  </div>
</div></div>
      </section>
      <section
        class='block
          tm-banner
          full-width
          '
        id='component-e63baadf-23ef-4018-8721-2ab8b18684a1'
        style=" background-image: url(''); background-color:; "
      >
        <div data-view="cms/cms_component/cms_component" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;ConfigParams&quot;,&quot;id&quot;:&quot;62&quot;}}">  <div class="block_image">
  <div class="block_content">
   <h2
        class='block_title'
      >Seu evento na ticketmaster- Saiba mais</h2>

  <div class="image">
        <a href="https://business.ticketmaster.com.br/pt/" >

        <picture class="hidden-xs">
          <source srcset="https://cdn.getcrowder.com/images/1a9c53c8-d1ef-48cb-b6be-0e4f496519f6-tmb2bdesktop-2.gif?format=webp" type="image/webp">
          <source srcset="https://cdn.getcrowder.com/images/1a9c53c8-d1ef-48cb-b6be-0e4f496519f6-tmb2bdesktop-2.gif?format=jpeg" type="image/jpeg">
          <img
            data-type="desktop"
            src="https://cdn.getcrowder.com/images/1a9c53c8-d1ef-48cb-b6be-0e4f496519f6-tmb2bdesktop-2.gif"-
            width="100%"
            alt="Seu evento na ticketmaster- Saiba mais desktop version"
            loading="lazy"
            aria-label="banner"
          />
        </picture>
        <picture class="visible-xs">
          <source srcset="https://cdn.getcrowder.com/images/a1d1d213-be80-4fa2-ae0d-092f424cdb52-tmb2bmobile-2.gif?format=webp" type="image/webp">
          <source srcset="https://cdn.getcrowder.com/images/a1d1d213-be80-4fa2-ae0d-092f424cdb52-tmb2bmobile-2.gif?format=jpeg" type="image/jpeg">
          <img
            data-type="mobile"
            src="https://cdn.getcrowder.com/images/a1d1d213-be80-4fa2-ae0d-092f424cdb52-tmb2bmobile-2.gif"
            width="100%"
            alt="Seu evento na ticketmaster- Saiba mais - mobile version"
            loading="lazy"
          />
        </picture>
        </a>
      </div>

  </div>
  </div></div>
      </section>
  </div>
</div>
		</main>


		<div id="process_notification" class="process_alert animated flipInX" style="display:none"></div>

		<footer class="footer" style="display:block;" role="contentinfo">
		  	<div class="container">
		    <div class="row">
                    <style type="text/css">.footer-pt,
.footer-en,
.footer-es {
    display: none;
}


html[lang="pt"] .footer-pt {
    display: block;
}

html[lang="es"] .footer-es {
    display: block;
}

html[lang="en"] .footer-en {
    display: block;
}
</style>
<div class="footer-tm text-left">
<div class="row footer-es">
<div class="col-xs-12 col-sm-4">
<h3>Acesso R&aacute;pido</h3>

<ul>
	<li><a href="../account/purchases">Mis compras</a></li>
	<li><a href="../account/perfil">Perfil</a></li>
	<li><a href="https://help.ticketmaster.com.br/hc/pt-br" target="_blank">Soporte</a></li>
	<li><a href="https://www.ticketmaster.com.br/static/acessibilidade" target="_blank">Acessibilidad</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-4">
<h3>T&eacute;rminos y Pol&iacute;ticas</h3>

<ul>
	<li><a href="../static/termos-de-uso" target="_blank">T&eacute;rminos de uso</a></li>
	<li><a href="../static/politica-de-compra" target="_blank">Pol&iacute;tica de Compra</a></li>
	<li><a href="https://privacy.ticketmaster.com.br/pt/cookie-policy" target="_blank">Pol&iacute;tica de Cookies</a></li>
	<li><a href="https://privacy.ticketmaster.com.br/pt/privacy-policy" target="_blank">Pol&iacute;tica de Privacidad</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-4">
<h3>Sobre a Ticketmaster</h3>

<ul>
	<li><a href="https://business.ticketmaster.com.br/pt/" target="_blank">Ticketmaster Brasil</a></li>
	<li><a href="https://business.ticketmaster.com.br/pt/nossa-historia/" target="_blank">Ticketmaster Internacional</a></li>
	<li><a href="https://www.linkedin.com/company/ticketmasterBR" target="_blank">Trabaje con nosotros</a></li>
</ul>
</div>
</div>

<div class="row footer-pt">
<div class="col-xs-12 col-sm-4">
<h3>Acesso R&aacute;pido</h3>

<ul>
	<li><a href="../account/purchases">Minhas Compras</a></li>
	<li><a href="../account/perfil">Meu Perfil</a></li>
	<li><a aria-label="Suporte ao Fã" href="https://help.ticketmaster.com.br/hc/pt-br" target="_blank">Suporte ao F&atilde;</a></li>
	<li><a aria-label="Acessibilidade" href="https://www.ticketmaster.com.br/static/acessibilidade" target="_blank">Acessibilidade</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-4">
<h3>Termos e Pol&iacute;ticas</h3>

<ul>
	<li><a aria-label="Termos de Uso" href="../static/termos-de-uso" target="_blank">Termos de Uso</a></li>
	<li><a aria-label="Política de Compra" href="../static/politica-de-compra" target="_blank">Pol&iacute;tica de Compra</a></li>
	<li><a aria-label="Política de Cookies" href="https://privacy.ticketmaster.com.br/pt/cookie-policy" target="_blank">Pol&iacute;tica de Cookies</a></li>
	<li><a aria-label="Política de Privacidade" href="https://privacy.ticketmaster.com.br/pt/privacy-policy" target="_blank">Pol&iacute;tica de Privacidade</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-4">
<h3>Sobre a Ticketmaster</h3>

<ul>
	<li><a aria-label="Ticketmaster Brasil" href="https://business.ticketmaster.com.br/pt/" target="_blank">Ticketmaster Brasil</a></li>
	<li><a aria-label="Ticketmaster Internacional" href="https://business.ticketmaster.com.br/pt/nossa-historia/" target="_blank">Ticketmaster Internacional</a></li>
	<li><a aria-label="Trabalhe com a gente" href="https://www.linkedin.com/company/ticketmasterBR" target="_blank">Trabalhe com a gente</a></li>
</ul>
</div>
</div>

<div class="row footer-en">
<div class="col-xs-12 col-sm-4">
<h3>Quick access</h3>

<ul>
	<li><a href="../account/purchases">My purchases</a></li>
	<li><a href="../account/perfil">My profile</a></li>
	<li><a aria-label="Suporte ao Fã" href="https://help.ticketmaster.com.br/hc/pt-br" target="_blank">Support</a></li>
	<li><a aria-label="Acessibilidade" href="https://www.ticketmaster.com.br/static/acessibilidade" target="_blank">Acessibility</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-4">
<h3>Terms and Policies</h3>

<ul>
	<li><a aria-label="Termos de Uso" href="https://www.ticketmaster.com.br/static/terms-of-use" target="_blank">Terms of Use</a></li>
	<li><a aria-label="Política de Compra" href="https://www.ticketmaster.com.br/static/purchase-policy" target="_blank">Purchase Policy</a></li>
	<li><a aria-label="Política de Cookies" href="https://privacy.ticketmaster.com.br/en/cookie-policy" target="_blank">Cookies Policy</a></li>
	<li><a aria-label="Política de Privacidade" href="https://privacy.ticketmaster.com.br/en/privacy-policy" target="_blank">Privacy Policy</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-4">
<h3>About Ticketmaster</h3>

<ul>
	<li><a aria-label="Ticketmaster Brasil" href="https://business.ticketmaster.com.br/pt/" target="_blank">Ticketmaster Brasil</a></li>
	<li><a aria-label="Ticketmaster Internacional" href="https://business.ticketmaster.com.br/pt/nossa-historia/" target="_blank">Ticketmaster Internacional</a></li>
	<li><a aria-label="Trabalhe com a gente" href="https://www.linkedin.com/company/ticketmasterBR" target="_blank">Work with us</a></li>
</ul>
</div>
</div>

<div class="row">
<div class="col-xs-12"><img alt="Ticketmaster logo" class="logo" src="https://cdn.boletius.com/ticketmaster/ticketmaster-logo_white.png" /></div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-6 foo-social"><a aria-label="Instagram" href="https://www.instagram.com/ticketmasterBR/" target="_blank"><img alt="Instagram" src="https://cdn.boletius.com/images/1643379600508-instagram.png" style="height: 16px;" /></a> <a aria-label="Facebook" href="https://www.facebook.com/ticketmasterbr" target="_blank"><img alt="
facebook" src="https://cdn.boletius.com/images/1643379516372-facebook.png" style="height: 16px;" /></a> <a aria-label="LindedIn" href="https://www.linkedin.com/company/ticketmasterBR" target="_blank"><img alt="Linkedin" src="https://cdn.boletius.com/images/1643379625842-linkedin.png" style="height: 16px;" /></a> <a href="https://www.tiktok.com/@ticketmasterbr" target="_blank"><img alt="Tiktok" aria-label="Tiktok" src="https://cdn.getcrowder.com/images/1691588331940-null-l-tiktok.png" style="height: 16px;" /></a> <a href="https://blog.ticketmaster.com.br" target="_blank"><img alt="Blog" aria-label="Blog Ticketmaster" src="https://cdn.getcrowder.com/images/1683574125568-null-blog.png" style="height: 16px;" /></a></div>

<div class="col-xs-12 col-sm-6 foo-copy"><a class="ot-sdk-show-settings cookie-settings-btn" id="ot-sdk-btn">Cookie preferences&nbsp;&nbsp;</a>&copy; 2025&nbsp;Ticketmaster.</div>

<div class="col-xs-12 col-sm-6 foo-copy">
<ul>
	<li>TICKETMASTER BRASIL LTDA - CNPJ 42.789.521/0001-10</li>
	<li>R. Bacaetava, n&ordm; 401, 7&ordm; andar, Vila Gertrudes, S&atilde;o Paulo/SP, CEP 04705-010</li>
</ul>
</div>
</div>
</div>
          </div>
			</div>
		</footer>
		<div class="footer-crowder">
			<div class="crowder-logo">
			</div>

			<div class="lang-select">
				<span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.531 14.531">
			<path id="Trazado_4" data-name="Trazado 4" d="M16.531,9.766a6.766,6.766,0,0,1-6.766,6.766m6.766-6.766A6.766,6.766,0,0,0,9.766,3m6.766,6.766H3m6.766,6.766A6.766,6.766,0,0,1,3,9.766m6.766,6.766c1.246,0,2.255-3.029,2.255-6.766S11.011,3,9.766,3m0,13.531C8.52,16.531,7.51,13.5,7.51,9.766S8.52,3,9.766,3M3,9.766A6.766,6.766,0,0,1,9.766,3" transform="translate(-2.5 -2.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
					</svg>
				</span>
				<a  role="button" id="es" class="lang ">Español</a>
				<a  role="button" id="en" class="lang " >English</a>
				<a  role="button" id="pt" class="lang lang-active   ">Português</a>
			</div>
		</div>

			<script>
				// Configuración de dominios para WAF
				window.awsWafCookieDomainList = [".public.getcrowder.com"];
			</script>
			<script type="text/javascript" src="https://34189e193af8.us-east-1.captcha-sdk.awswaf.com/34189e193af8/jsapi.js" ></script>
			<script type="text/javascript" src="https://34189e193af8.us-east-1.sdk.awswaf.com/34189e193af8/9a3d9d72875b/challenge.js" ></script>

		<script src="//cdn.boletius.com/content/js/mergedAssets.6b3833ad80.js"></script>
		<script src="//cdn.boletius.com/content/js/jquery.card.a9c4efaf33.js"></script>
		<script src="//cdn.boletius.com/content/js/md5.983f472ede.js"></script>
		<script src="//cdn.boletius.com/content/js/bootstrap-dialog.min.d31cd3b133.js"></script>
		<script src="//cdn.boletius.com/content/js/libphonenumber-js.min.js"></script>
      <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=captchaLoadedCallback" async defer></script>
		<script src="//cdn.boletius.com/content/js/jquery.maskedinput.min.240c61253d.js"></script>


		<script>
			(function() {
				 var App = window.App = new (require('app/app'))({"apiPath":"/api","loading":false,"templateAdapter":"rendr-handlebars","hostname":"www.ticketmaster.com.br","sources":[{"model":"ConfigParams","source":"WEB"}],"configParams":{"url":"www.ticketmaster.com.br","configurationUrl":"https://web-layout.s3.amazonaws.com/home/production/85329914-c94b-4104-b7ec-b16a04f77565","country":"BRASIL","cashlessURL":null,"featureEventReports":true,"logoClear":"https://cdn.getcrowder.com/images/46b77c52-6acd-425b-985f-c036a9dcbf90-ticketmaster.svg","analytics":{"facebook":{"pixelId":null},"mixpanel":{"id":null},"google":{"analyticsId":null,"gtmId":"GTM-WBGSPNM"}},"enableAccessibility":true,"countryData":{"streetTypes":[],"country":"BRASIL","defaultCurrency":"BRL"},"logo":"https://cdn.getcrowder.com/images/1664925447950-null-ticketmaster-logo-azurewithoutr.png","id":62,"showCaptchaOnRegister":true,"oneTrustId":"335c8215-96b5-4b4c-91b1-4f1dd9016a7b","homepageImage":"https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png","useHomeCMS":true,"refundServiceEnabled":true,"FeatQPI":true,"sitefEnabled":true,"featurePartner":true,"comboName":"Pacote","featureQueueitV2":true,"featurePaymentVerification":true,"timeZone":"America/Argentina/Buenos_Aires","usePagesCMS":true,"homeLogo":"","shopUrl":"www.ticketmaster.com.br","useLandingComponents":true,"showCaptchaOnLogin":true,"userSessionsEnabled":true,"featureDeferred":true,"subtitle":"Ticketmaster","featureStreaming":false,"name":"Ticketmaster Brasil","posInfo":null,"styles":{"colors":{"main":"#024ddf","header":"#024ddf","headerLinks":"#024ddf","footer":"#1f262d","footerLinks":"#ffffff"},"font":{"source":"<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Regular.woff2\">\n<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Semibold.woff2\">\n<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Bold.woff2\">","fontFamily":"Averta, \"Helvetica Neue\", Helvetica, Arial, sans-serif"},"custom":"nav img.logo-dark {\n    display: none;\n}\n\nnav img.logo-light {\n    display: block;\n}\n\n.event-picker .dropdown .btn {\n    overflow: hidden;\n}\n\n.event-picker .dropdown .dropdown-menu li.agotado div {\n    padding: 15px 20px;\n    clear: both;\n    font-weight: 600;\n    line-height: 1.42857143;\n    color: #333;\n    white-space: nowrap;\n    border-bottom: solid 1px #d7d7d773;\n    display: flex !important;\n    align-items: center;\n    justify-content: space-between;\n    gap: 10px;\n    text-wrap: balance;\n    text-decoration: none;\n}\n\n\n#eventList .home-events .col-md-12 { width:100%}\n#eventList .home-events .col-md-8  , #eventList .home-events .col-md-4 { width:50%}\n@media screen and (max-width: 1024px) {#eventList .home-events .col-md-12 { width:100%}}\n.ticket-shop .btn-primary { cursor:pointer !important}\n\n.event_thumb_info .event_venue { display:none}\n\nimg.banner-town {\nwidth: 100%;\n    border-radius: 5px;\n    height: 380px;\n    object-fit: cover;\n}\n.event-thumb .title-container {\n    z-index: 1;\n}\n.va-container:hover img {\n    transform: scale(1.05) !important;\n}\n.event-thumb img {\n    transition: 0.4s;\n}\n\n.title-container { opacity:0; transition:0.3s ease-in-out}\n.title-conttainer .event_thumb_info, .title-container .thumb-title {margin-left: 20px; transition:0.4s ease-in-out}\n\n.va-container:hover .title-container { opacity:1}\n.va-container:hover title-conttainer .event_thumb_info, .va-container:hover .title-container .thumb-title {margin-left: 0px; }\n\n@media screen and (max-width: 768px) {\nimg.banner-town {\n    height: 300px;\n}\n}\n@media screen and (max-width: 1024px) {\n.home-events .col-md-8, .home-events .col-md-4 {\n    width: 100% !important;\n}\n}\n\n.title-container {\n    display: flex;\n    padding: 40px;\n    position: absolute;\n    width: 100%;\n    align-items: flex-start;\n    justify-content: flex-end;\n    background: rgb(0,0,0);\n    background: linear-gradient(51deg, rgb(3 95 196) 0%, rgb(0 101 210 / 42%) 100%);\n    flex-direction: column;\n}\n\n.title-container .thumb-title {\nfont-size: 1.6em;\nfont-weight: 600;\n}\n\n.va-container:hover {\n    transform: scale(1);\n}\n\n.event-thumb {\n    background-color: var(--main-color);\n    box-shadow: none !important;\n}\n\n.event_thumb_info {\n    display: flex;\n    flex-direction: column;\n    align-items: flex-start;\n    color: #fff;\n    font-size: 1em;\n    font-weight: 500;\ngap:2px;\n}\n\n.event_thumb_info span.event_venue { opacity:0.6}\n\n\n@media screen and (max-width: 768px) {\n.title-container { text-align:left !important; padding:20px !important;}\n.title-container .thumb-title {\n    font-size: 1.3em;\n    font-weight: 600;\n    margin: 0 0 10px 0;\n    line-height: 1.4em;\n    text-align: initial;\n}\n}\n\n.container .content ul {padding:0 0 0 20px !important;}\n.container .content table {width:100%; border:solid 1px #f1f1f1}\n.container .content table td {border:solid 1px #f1f1f1; padding:10px;}\n\n.carousel-inner .item {\n    height: 300px !important;\n}\n\n.carousel-indicators {\n    bottom: 10px !important;\n    opacity: 1;\n}\n\n.carousel-indicators li , .carousel-indicators li.active  {\n    width: 10px ;\n    height: 10px;\n    margin: 0 1px;\n}\n\n\n.search_box_home h1 {\n    text-transform: none;\n}\n\nbody {\n     padding-top: 50px;\n     letter-spacing: 0.3px;\n}\n .footer-tm ul li a {\n     color: #fff;\n     margin: 0 !important;\n}\n .home-categories , .home-events {\n     width:90%;\n     max-width: 1260px;\n     margin: 0 auto;\n}\n .home-events .col-md-8, .home-events .col-md-4 {\n     width:50%;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Light.woff2\") format(\"woff2\");\n     font-weight: 300;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Regular.woff2\") format(\"woff2\");\n     font-weight: 400;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Semibold.woff2\") format(\"woff2\");\n     font-weight: 600;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Bold.woff2\") format(\"woff2\");\n     font-weight: 700;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Black.woff2\") format(\"woff2\");\n     font-weight: 900;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-RegularItalic.woff2\") format(\"woff2\");\n     font-style: italic;\n}\n @media (min-width: 780px) {\n     .event-header .ticket-shop #buyButton {\n         margin-left: 30px;\n    }\n}\n .event-header .ticket-shop {\n     position: relative;\n     background: rgba(251,252,255);\n     border: solid 2px #F1F2F5;\n}\n .event-header .ticket-shop #show-button, .event-header .ticket-shop #quantity-button {\n     border: solid 1px rgba(0, 0, 0, 0.15);\n}\n .navbar ul.user-menu {\n     padding: 15px 0 0 0;\n}\n .navbar-brand {\n     line-height: normal;\n}\n .event-header .ticket-shop.affix{\n     top: 60px;\n}\n .main {\n     height: 180px;\n     background: #024DDF !important;\n}\n .main h1 { display: none;}\n .navbar .btn {\n     margin-top: 0px;\n     background: transparent;\n     font-size: 1.1em;\n}\n #login_button #ingresar {\n     color: #353C42 !important;\n}\n .navbar a {\n     font-size:1em;\n}\n .navbar .logo {\n     padding: 20px 0;\n}\n .navbar-menu a:hover {\n     background-color: rgb(230, 230, 230);\n}\n .navbar-menu a:hover::after {\n     width:0px;\n}\n @media (min-width: 1600px){\n     .container {\n         width: 1260px;\n    }\n}\n .footer-tm {\n    color:#ffffff;\n}\n .footer-tm h5,  .footer-tm h3 {\n    font-size:1em;\n    font-weight:bold;\n    margin-bottom:15px;\n}\n .footer-tm ul {\n     padding:0;\n     margin:0 0 40px 0\n}\n .footer-tm ul li {\n     list-style:none;\n     display:block;\n     margin-bottom:10px;\n}\n .footer-tm ul li a {\n     color:#fff\n}\n .footer-tm img.logo {\n     margin:0 0 40px 0;\n     height:25px\n}\n .footer-tm .foo-copy {\n     text-align:right;\n     font-size:0.8em;\n}\n .footer-tm .foo-social a {\n     margin-right:20px\n}\n .footer {\n    border: none\n}\n @media (max-width: 768px){\n     .footer-tm .foo-social {\n         margin-bottom:40px\n    }\n     .footer-tm .foo-copy {\n         text-align:left;\n    }\n}\n #eventList.container {\n     width:100%;\n     padding:0;\n}\n .tm-main {\n     height: 92vh;\n     background: #024DDF;\n     background-image: url(https://cdn.getcrowder.com/images/1669406310174-null-main-br.jpg);\n     background-size: cover;\n     animation: bgAnimate 15s ease-in-out infinite alternate;\n     overflow:hidden;\n     text-align: center;\nborder-top: solid 30px #0262cf;\n}\n @keyframes bgAnimate {\n     0% {\n         background-position: 2% 0;\n    }\n     100% {\n         background-position: 100% 0;\n    }\n}\n .tm-main .tm-t {\n     margin-bottom: 10vh;\n}\n .tm-main .tm-t img {\n     height:35vh;\n     animation: tAnimate 2s ease-in-out;\n}\n @keyframes tAnimate {\n     0% {\n         transform: scale(2.5);\n         opacity:0;\n    }\n     100% {\n         transform: scale(1);\n         opacity:1;\n    }\n}\n .tm-main .tm-overlay {\n     display: flex;\n     flex-direction: column;\n     justify-content: center;\n     align-items: center;\n     flex-wrap: nowrap;\n     align-content:center ;\n     height: 100%;\n     background: linear-gradient(0deg, rgba(2,108,223,1) 0%, rgb(0 69 145 / 50%) 49%, rgba(2,108,223,0) 100%);\n}\n .tm-main h2 {\n     margin: 0;\n     font-size: 2em;\n     color: #fff;\n     font-weight: 400;\n     animation: h2Animate 1s ease-in-out;\n}\n .tm-main h2 span {\n     color: #00FFFF;\n}\n @keyframes h2Animate {\n     0% {\n         transform: scale(0.5);\n         opacity:0;\n    }\n     100% {\n         transform: scale(1);\n         opacity:1;\n    }\n}\n .tm-main i {\n     display: block;\n     width: 14px;\n     height: 14px;\n     border: solid 2px #ffffff70;\n     border-left: none;\n     border-top: none;\n     transform: rotate(45deg);\n     border-radius: 3px;\n     bottom: 8vh;\n     position: absolute;\n}\n .tm-suscribe {\n     background: #024DDF;\n     padding: 80px 20px 100px;\n     text-align: center;\n}\n .tm-suscribe h6 {\n     margin: 0;\n     font-size: 1.8em;\n     color: #fff;\n     font-weight: 400;\n}\n .tm-social {\n     display: block;\n     position: relative;\n     height: 300px;\n     color: #fff;\n     text-decoration: none;\n}\n .tm-social .tm-s {\n     width: 100%;\n     position: relative;\n     float: left;\n     height: 300px;\n     display: flex;\n     flex-direction: column;\n     flex-wrap: nowrap;\n     justify-content: center;\n     align-items: center;\n     align-content: center;\n     text-align: center;\n     background: #000;\n}\n .tm-social .tm-s h3 {\n     font-size:1.8em;\n     color: #fff;\n     margin: 0 0 10px 0;\n     font-weight: normal;\n}\n .tm-social .tm-s {\n     color: #fff;\n     text-decoration: none;\n     opacity: 0.95;\n     transition: 0.2s;\n}\n .tm-social .tm-s:hover{\n     opacity:1;\n}\n .tm-social .tm-s span {\n     color: #00FFFF;\n}\n.tm-social .tm-instagram {\nbackground: url(https://cdn.getcrowder.com/images/1683576764155-null-TM_Banner_Instagram.jpeg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-facebook {\nbackground: url(https://cdn.getcrowder.com/images/1683576746022-null-TM_Banner_Facebook.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-linkedin {\nbackground: url(https://cdn.getcrowder.com/images/1683576712789-null-TM_Banner_LinkedIn.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-twitter{\nbackground: url(https://cdn.getcrowder.com/images/1669823412469-null-twitter.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-blog{\nbackground: url(https://cdn.getcrowder.com/images/1683576726535-null-TM_Banner_Blog.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-tiktok {\nbackground: url(https://cdn.getcrowder.com/images/1691588419752-null-tiktok.jpeg) no-repeat center center;\nbackground-size: cover;\n}\n\n.tm-social .tm-overlay img {\nwidth:40px;\n}\n\n .tm-business {\n     background:#1F262D;\n     padding: 100px 20px;\n     text-align: center;\n     border-bottom: solid 1px #363636;\n}\n .tm-business h2 {\n     margin: 0;\n     font-size: 1.8em;\n     color: #fff;\n     font-weight: 400;\n     margin: 0 0 60px 0;\n}\n .tm-business a {\n     border: solid 1px #fff;\n     text-decoration: none;\n     padding: 18px 30px;\n     font-size:1.1em;\n     color: #fff;\n}\n @media (max-width: 768px){\n     .tm-main {\n         height: 70vh;\n         background-image: url(https://cdn.getcrowder.com/images/1669406540752-null-main-m.jpg);\n         animation: bgAnimate 25s ease-in infinite alternate;\n    }\n     .tm-main .tm-overlay {\n         padding: 0 30px;\n         background: linear-gradient(0deg, #024DDF 0%, #024DDFb0 49%, #024DDF94 100%);\n    }\n     .tm-main .tm-t img {\n         height:150px;\n    }\n     .tm-social {\n         display: block;\n         position: relative;\n         height: 300px;\n    }\n}\n .navbar {\n     height: 60px;\n     background-color:#024DDF;\n     box-shadow: none !important;\n}\n\n .navbar-menu a {\n     color: #fff;\n     font-size: 1.1em !important;\n}\n .navbar-menu a:hover {\n     background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.176));\n     background-color: #0000 !important;\n}\n #login_button #ingresar {\n     color: #fff !important;\n}\n a.btn-togle span {\n     background:#fff;\n}\n .navbar a {\n     font-size: 1em;\n}\n .navbar-collapse ul li:first-child a {\n     border-top:none !important\n}\n .quentro-modal .modal-body {\n    padding: 20px !important;\n}\n .quentro-modal .modal-header a.quentro-logo img {\n    width: 120px;\n}\n .quentro-modal .modal-body img {\n    width: 80px !important;\n}\n .quentro-modal .close-quentro-modal {\n    width: 25px;\n     float: right !important;\n}\n #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn {\n     color: white;\n     padding: 0;\n     border: 0;\n     font-size:0.9em;\n}\n #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn:hover {\n     color: white;\n     background: none;\n}\n .tm-grid {\n}\n .tm-grid .tm-grid-event {\n     color: #fff;\n     background-size: cover;\n     background-position: center ;\n     height: 100%;\n}\n .tm-grid .tm-grid-event .tm-grid-event-overlay {\n    background: linear-gradient(90deg, rgba(6,25,46,0.95) 0%, rgba(8,30,54,0.65) 40%, rgba(13,32,52,0.15) 100%);\n     height: 100%;\n     display: flex;\n     align-items: flex-end\n}\n .tm-grid .event-title {\n     font-size:2em;\n     font-weight: 600;\n}\n .tm-grid .event-info {\n     font-size:1em;\n     margin-bottom: 20px;\n     font-weight:600\n}\n .tm-grid .event-info span {\n     opacity: 0.7;\n     display: block;\n     font-size:1em;\n     font-weight: normal;\n}\n .tm-grid a.btn-event {\n     font-size:1.1em;\n     color: #fff;\n     font-weight: 500;\n     background: var(--main-color);\n     padding: 12px 20px;\n     text-decoration: none;\n     display: inline-block;\n     border-radius:2px\n}\n .tm-grid .event-info-content {\n     padding: 70px;\n}\n\n\n.grid-1 { grid-area: 1 / 1 / 2 / 3; }\n.grid-2 { grid-area: 2 / 1 / 3 / 2; }\n.grid-3 { grid-area: 2 / 2 / 3 / 3; }\n.grid-4 { grid-area: 3 / 1 / 4 / 2; }\n.grid-5 { grid-area: 3 / 2 / 4 / 3; }\n.grid-6 { grid-area: 4 / 1 / 5 / 3; }\n.grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 60vh; }\n\n.grid-1 { width:50%; position: relative;float: left;}\n.grid-2 { width:100% ; position: relative;float: left;}\n\n.grid-1, .grid-2 {\n    height: 55vh;\n    min-height: 400px;\n}\n \n @media (max-width: 1440px){\n     .tm-grid .event-title {\n         font-size: 1.6em;\n    }\n     .tm-grid .event-info {\n         font-size: 1em;\n    }\n     .tm-grid .event-info-content {\n         padding: 4em;\n    }\n     .tm-grid a.btn-event {\n         font-size: 1em;\n        padding: 10px 15px;\n    }\n}\n @media (max-width: 768px){\n\n     .parent-grid {\n        display: flex;\n        flex-direction: column;\n         height: auto;\n    }\n\n    .grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 50vh; }\n\n\n     .tm-grid .event-info-content {\n         padding:30px 20px;\n    }\n     .tm-grid .event-info span {\n         margin: 0;\n         display: block;\n    }\n}\n body {\n     --order-top-bg: #0046cb;\n     --order-top-color: #fff;\n     --header-height: 60px;\n     padding-top:60px;\n}\n .pg_content .pg_sidebar {\n     display:none !important\n}\n .pg_content .col-sm-8 {\n     margin: 0px auto;\n     width:100%;\n     padding: 0 200px;\n     float: inherit;\n}\n @media (max-width: 1280px){\n    .pg_content .col-sm-8 {\n        padding: 0px 100px;\n    }\n }\n \n @media (max-width: 768px){\n    .pg_content .col-sm-8 {\n        padding: 0px 20px;\n    }\n    .grid-1, .grid-2 {\n        height: 40vh;\n        width: 100%;\n        min-height: 350px;\n    }\n}\n\n\ndiv.accesibility {\n    bottom: 30% !important;\n}\n\n\n.event_blocks .grid-label {\n    position: sticky !important;\n    color: #fff;\n    background: var(--main-color);\n    font-weight: normal;\n    font-size: 0.8em;\n    border-radius: 2px;\n    top: 3px;\n    right: 20px;\n    display: block;\n    z-index: 1;\n    margin: 0;\n    padding: 4px 8px;\n}"},"useFacilityFee":true,"userConfiguration":{"requireDocument":true,"requireGender":true,"legalTerms":null,"enabledCountries":[],"passwordStrength":true,"blockDocumentChange":true,"blockEmailChange":true,"minimumAge":18,"enforceMFA":true},"support":{"email":"info@ticketmaster.com.br","link":"https://help.ticketmaster.com.br/hc/pt-br","linkOrMail":"https://help.ticketmaster.com.br/hc/pt-br","linkOrMailLink":"https://help.ticketmaster.com.br/hc/pt-br"},"wafApiKey":"UMg4cv2VBL/+DPsCwQrT9MzSEiF+y90AL50eG+jwc1I8+Q6XiysXXNtNVYrQ0jWTxz3OpPDcCcWzyYkmMpI5oNViyfBw/bM6UuCIL0hEOBiKxOtmFtB+KHOviEveAqVr9U1cjj+iD97VY2j7RJnscQAd200LDpJLq6sI5UWV6KbWgV8vodHlXlc8csSnFMtJYMRYdk5NPEkSulrD1JDDOwMY4zVkV+KNnfofYq7PLa0Xfh1/I/r6OEtDzmc8aPHk7FNphynIOL4ljPL6AR5wQje8va/I99oe3Ygmy1CMQq2HOLT0JO46qImy4L2o5LrDK1DUbNouPfOdvHcAh9gUa79F8b36j4DikZxxs2GOBjFhcSdmUiOfsu9r2neOUwELIKcd74eeENR4q+IkbzFuxub6aCYikJTEmwYEmAxOJYf9VOrFYmJ3D0ljKh6T+fqmCBZWTNjSvpZMJnazNWjbdf9LqA8UbMt3c8qsl/1rEOp1IW6qU9VWAzl9pP3jo/0bXwXjHTcAnPMWuKf8SlAxpOgEecCd2Netf5E7YCO+F6+CpKQBKqS3bxq44H63n3z4IgTKm3UoCk70wJGTG0fm13WKJyoCXHKZE/woWZPk0VGXxlRkB3lb+/3SfyelL9AVn3kl6mQw01OOsB4W/qV3SLSjfw1Z3ON6kfPRhY/LK1c=_0_1","featurePIR":true,"customFooter":"<style type=\"text/css\">.footer-pt,\n.footer-en,\n.footer-es {\n    display: none;\n}\n\n\nhtml[lang=\"pt\"] .footer-pt {\n    display: block;\n}\n\nhtml[lang=\"es\"] .footer-es {\n    display: block;\n}\n\nhtml[lang=\"en\"] .footer-en {\n    display: block;\n}\n</style>\n<div class=\"footer-tm text-left\">\n<div class=\"row footer-es\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Acesso R&aacute;pido</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">Mis compras</a></li>\n\t<li><a href=\"../account/perfil\">Perfil</a></li>\n\t<li><a href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Soporte</a></li>\n\t<li><a href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibilidad</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>T&eacute;rminos y Pol&iacute;ticas</h3>\n\n<ul>\n\t<li><a href=\"../static/termos-de-uso\" target=\"_blank\">T&eacute;rminos de uso</a></li>\n\t<li><a href=\"../static/politica-de-compra\" target=\"_blank\">Pol&iacute;tica de Compra</a></li>\n\t<li><a href=\"https://privacy.ticketmaster.com.br/pt/cookie-policy\" target=\"_blank\">Pol&iacute;tica de Cookies</a></li>\n\t<li><a href=\"https://privacy.ticketmaster.com.br/pt/privacy-policy\" target=\"_blank\">Pol&iacute;tica de Privacidad</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Sobre a Ticketmaster</h3>\n\n<ul>\n\t<li><a href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Trabaje con nosotros</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row footer-pt\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Acesso R&aacute;pido</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">Minhas Compras</a></li>\n\t<li><a href=\"../account/perfil\">Meu Perfil</a></li>\n\t<li><a aria-label=\"Suporte ao Fã\" href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Suporte ao F&atilde;</a></li>\n\t<li><a aria-label=\"Acessibilidade\" href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibilidade</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Termos e Pol&iacute;ticas</h3>\n\n<ul>\n\t<li><a aria-label=\"Termos de Uso\" href=\"../static/termos-de-uso\" target=\"_blank\">Termos de Uso</a></li>\n\t<li><a aria-label=\"Política de Compra\" href=\"../static/politica-de-compra\" target=\"_blank\">Pol&iacute;tica de Compra</a></li>\n\t<li><a aria-label=\"Política de Cookies\" href=\"https://privacy.ticketmaster.com.br/pt/cookie-policy\" target=\"_blank\">Pol&iacute;tica de Cookies</a></li>\n\t<li><a aria-label=\"Política de Privacidade\" href=\"https://privacy.ticketmaster.com.br/pt/privacy-policy\" target=\"_blank\">Pol&iacute;tica de Privacidade</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Sobre a Ticketmaster</h3>\n\n<ul>\n\t<li><a aria-label=\"Ticketmaster Brasil\" href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a aria-label=\"Ticketmaster Internacional\" href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a aria-label=\"Trabalhe com a gente\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Trabalhe com a gente</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row footer-en\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Quick access</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">My purchases</a></li>\n\t<li><a href=\"../account/perfil\">My profile</a></li>\n\t<li><a aria-label=\"Suporte ao Fã\" href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Support</a></li>\n\t<li><a aria-label=\"Acessibilidade\" href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibility</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Terms and Policies</h3>\n\n<ul>\n\t<li><a aria-label=\"Termos de Uso\" href=\"https://www.ticketmaster.com.br/static/terms-of-use\" target=\"_blank\">Terms of Use</a></li>\n\t<li><a aria-label=\"Política de Compra\" href=\"https://www.ticketmaster.com.br/static/purchase-policy\" target=\"_blank\">Purchase Policy</a></li>\n\t<li><a aria-label=\"Política de Cookies\" href=\"https://privacy.ticketmaster.com.br/en/cookie-policy\" target=\"_blank\">Cookies Policy</a></li>\n\t<li><a aria-label=\"Política de Privacidade\" href=\"https://privacy.ticketmaster.com.br/en/privacy-policy\" target=\"_blank\">Privacy Policy</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>About Ticketmaster</h3>\n\n<ul>\n\t<li><a aria-label=\"Ticketmaster Brasil\" href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a aria-label=\"Ticketmaster Internacional\" href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a aria-label=\"Trabalhe com a gente\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Work with us</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\"><img alt=\"Ticketmaster logo\" class=\"logo\" src=\"https://cdn.boletius.com/ticketmaster/ticketmaster-logo_white.png\" /></div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 col-sm-6 foo-social\"><a aria-label=\"Instagram\" href=\"https://www.instagram.com/ticketmasterBR/\" target=\"_blank\"><img alt=\"Instagram\" src=\"https://cdn.boletius.com/images/1643379600508-instagram.png\" style=\"height: 16px;\" /></a> <a aria-label=\"Facebook\" href=\"https://www.facebook.com/ticketmasterbr\" target=\"_blank\"><img alt=\"\nfacebook\" src=\"https://cdn.boletius.com/images/1643379516372-facebook.png\" style=\"height: 16px;\" /></a> <a aria-label=\"LindedIn\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\"><img alt=\"Linkedin\" src=\"https://cdn.boletius.com/images/1643379625842-linkedin.png\" style=\"height: 16px;\" /></a> <a href=\"https://www.tiktok.com/@ticketmasterbr\" target=\"_blank\"><img alt=\"Tiktok\" aria-label=\"Tiktok\" src=\"https://cdn.getcrowder.com/images/1691588331940-null-l-tiktok.png\" style=\"height: 16px;\" /></a> <a href=\"https://blog.ticketmaster.com.br\" target=\"_blank\"><img alt=\"Blog\" aria-label=\"Blog Ticketmaster\" src=\"https://cdn.getcrowder.com/images/1683574125568-null-blog.png\" style=\"height: 16px;\" /></a></div>\n\n<div class=\"col-xs-12 col-sm-6 foo-copy\"><a class=\"ot-sdk-show-settings cookie-settings-btn\" id=\"ot-sdk-btn\">Cookie preferences&nbsp;&nbsp;</a>&copy; 2025&nbsp;Ticketmaster.</div>\n\n<div class=\"col-xs-12 col-sm-6 foo-copy\">\n<ul>\n\t<li>TICKETMASTER BRASIL LTDA - CNPJ 42.789.521/0001-10</li>\n\t<li>R. Bacaetava, n&ordm; 401, 7&ordm; andar, Vila Gertrudes, S&atilde;o Paulo/SP, CEP 04705-010</li>\n</ul>\n</div>\n</div>\n</div>","newEmailsEnabled":true,"showFooter":false,"featureTicketing":true,"customContactUsForRefund":"<div>Caso a sua compra esteja fora do prazo para cancelamento, não será possível prosseguir com a sua solicitação. Confira as regras de cancelamento acessando este link  <a href=\"https://help.ticketmaster.com.br/hc/pt-br/categories/10492807217809-Como-Cancelar-E-Informações-Sobre-Trocas\">https://help.ticketmaster.com.br/hc/pt-br/categories/10492807217809-Como-Cancelar-E-Informações-Sobre-Trocas </a> </div> </br>  <div> Porém, caso o seu pedido estiver dentro do prazo para reembolso e você precisar de auxilio, entre em contato com o suporte ao fã <a href=\"https://help.ticketmaster.com.br/hc/pt-br/requests/new?ticket_form_id=10146863301905\"> https://help.ticketmaster.com.br/hc/pt-br/requests/new?ticket_form_id=10146863301905 </a> </div>","menuCategories":[],"optInText":"Deixe-nos mantê-lo informado sobre o que está por vir – incluindo pré-vendas e ofertas exclusivas – por meios eletrônicos (por exemplo, e-mail, ferramentas de mensageria, redes sociais, etc.). Você sempre pode alterar a forma como entramos em contato com você por meio de sua conta Ticketmaster.","allowSendQuentroToCurrentUserEmail":true,"landingTemplateId":null,"cashlessRedirectUrl":"https://www.ticketmaster.com.br","lang":"pt","headline":"Ticketmaster","useCashless360":true,"favicon":"https://cdn.getcrowder.com/images/c1ade2d9-b2d1-484a-b163-0e5509e00144-favicon-32x32.png","showAssociatePurchaseButton":false,"showCategoriesOnMenu":false,"featureAutomaticRefund":true,"useFaceRecognition":true,"homeRedirect":null,"gatewaysByCountry":true,"featureSeasonPass":true,"alwaysShowDeliveryMethod":false,"requireBillingAddress":true,"featurePaymentVerificationMP":true,"reCaptchaProvider":"CLOUDFLARE_TURNSTILE","skipCalendarReport":"12063","reCaptchaPublicKey":"0x4AAAAAAAhbw3CJuC34pXu4","featureCashless":true,"isReCaptcha":false,"isCloudflareTurnstile":true,"homeComponents":[],"widgetComponents":[{"id":"component-deb9edf8-aa2f-43b6-9892-c21a656f664c","widgetType":"SearchBar","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"home-section-search","containerAppearance":"centered","backgroundColor":"#024DDF","titleColor":"","paragraphColor":"","linkColor":""}},"version":1},{"id":"component-8de0f9b9-5ff6-405d-aebf-f2a878820026","widgetType":"Slider","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"home-section-banners","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"sliderType":"with-content","sliderItems":[{"title":"Louis Tomlinson: How Did We Get Here? Latin American Tour","line1":"06 e 07 de Abril de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/louis-tomlinson","imgUrl":"https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif"},{"title":"Djavan: Djavanear 50 anos - Só Sucessos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/djavan","imgUrl":"https://cdn.getcrowder.com/images/6e7db1d2-8618-4c42-868d-c96804e6c186-djavanhome1920x720.gif"},{"title":"aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -","line1":"04 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/aespa","imgUrl":"https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif"},{"title":"Rock in Rio 2026","line1":"4, 5, 6, 7, 11, 12, 13 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/rockinrio","imgUrl":"https://cdn.getcrowder.com/images/159b1a9c-0823-480f-a458-e7286dd123e3-rir-banner.gif"},{"title":"Martinho da Vila & Mart´Nália | Pai e Filha","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/martinho-da-vila-martnalia-pai-e-filha","imgUrl":"https://cdn.getcrowder.com/images/e7084c8a-0bd9-4bf1-8419-56d2bd03ace7-martinhomartnalia.gif"},{"title":"Tiago Iorc - Turnê Troco Likes 10 Anos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/tiago-iorc","imgUrl":"https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif"},{"title":"UTS Rio 2026","line1":"16, 17 e 18 de Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/uts-rio-2026-br","imgUrl":"https://cdn.getcrowder.com/images/6642cbeb-8b3c-4658-b893-d9fd554513ee-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif"},{"title":"Xande de Pilares & Revelação: Tava Escrito – O Reencontro Histórico","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/revelacao-e-xande-de-pilares","imgUrl":"https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif"},{"title":"KAROL G: Viajando Por El Mundo Tropitour","line1":"12 de Fevereiro de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/karol-g","imgUrl":"https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif"},{"title":"Cê Ta Doido Festival - São Paulo - 17/10/2026 - Venda Geral","line1":"17 de Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ce-ta-doido-festival-sao-paulo","imgUrl":"https://cdn.getcrowder.com/images/ac9ca75d-8d54-4dd3-a2f6-1c8d65f4c896-867700cf-1f68-446e-a177-e59bb34efad5-tamanhookctdlanding1920x720-1.gif"},{"title":"Kid Abelha: Eu Tive Um Sonho","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/kid-abelha","imgUrl":"https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif"},{"title":"Harry Styles: Together, Together","line1":"Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/harry-styles","imgUrl":"https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif"},{"title":"Lollapalooza Brasil 2027","line1":"19, 20 e 21 de Março de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/lollapaloozabr","imgUrl":"https://cdn.getcrowder.com/images/94d86cbd-f320-46cd-9bf7-5dc2d753be22-tmbannerhomeprevendagerallollaloversjn1004v4.gif"},{"title":"Suhai Festival Interlagos 2026","line1":"Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/suhai-festival-de-interlagos-2026","imgUrl":"https://cdn.getcrowder.com/images/f8a817b8-e11c-427a-b879-c9c2dc8b87bd-1920x720-geral-4.png"},{"title":"CA7RIEL & Paco Amoroso: Free Spirits World Tour","line1":"Novembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ca7riel-e-paco-amoroso","imgUrl":"https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif"}],"dynamicContent":{"entityType":"event","listName":"sliderItems","data":{"config":{"max":15,"offset":0,"sort":"groupPriority","order":"asc"},"idGroup":"49"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"CUSTOM","value":""},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}}},"version":1},{"id":"component-561b5126-b4df-4a6f-ae06-ee7e82983601","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Experiências"},"config":{"customClass":"standard_card","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{},"cards":[{"title":"Toy Story Ao Infinito e Além: A Exposição","content":"","line1":"São Paulo | Múltiplas datas","label":"Shopping Cidade São Paulo","buttonText":"Confira","link":"https://www.ticketmaster.com.br/event/toy-story","imgUrl":"https://cdn.getcrowder.com/images/1ac7115f-2ecf-4e77-b30e-6157da28df58-tm1920x720toy-storybanner.gif","moveTimestamp":1776892736918},{"title":"Manti Wine Sessions","content":"","imgUrl":"https://cdn.getcrowder.com/images/2c1b6a2a-bc21-4fbd-9271-2a0732e22630-d04cea4e-f11b-474b-81eb-36a1b6c70064-banner-festival-lineup-01.png","link":"https://www.ticketmaster.com.br/event/manti-wine-sessions","buttonText":"Confira","line1":"Mogi Guaçu | 5 e 6 de Junho","moveTimestamp":1776892738628,"label":"Autódromo Velocitta"},{"title":"Coliseu: Exposição Imersiva","content":"","line1":"São Paulo | Múltiplas datas","imgUrl":"https://cdn.getcrowder.com/images/1f3b94ac-cf23-42ce-b33b-6827cf0df9b1-d7da5bd7-47ef-433c-89fb-48df06995792-1920x720-35.jpg","label":"Shopping Vila Olímpia","link":"https://www.ticketmaster.com.br/event/coliseu-exposicao-imersiva","buttonText":"Confira","moveTimestamp":1777498876163},{"title":"Hot Wheels City Experience","content":"","imgUrl":"https://cdn.getcrowder.com/images/50d7ab6d-afa0-4f13-baa5-e1a981f45018-8a55eb4f-8102-4b3e-96a6-b87aa0b8afcc-banner-header-1.png","line1":"Campinas | Múltiplas datas","label":"Shopping Iguatemi Campinas","link":"https://www.ticketmaster.com.br/event/hotwheelscityexperience-campinas","buttonText":"Confira","moveTimestamp":1777498876163},{"title":"Casa Warner","content":"","imgUrl":"https://cdn.getcrowder.com/images/c4c8fdf3-7285-4d69-a018-86a0d5567ca4-d6d683c0-b89e-49c4-9bbf-595a5608ee7c-bannerticketmaster1920x720-1-1.png","line1":"Brasília | Múltiplas datas","line2":"","label":"ParkShopping Brasília","buttonText":"Confira","link":"https://www.ticketmaster.com.br/event/casa-warner-brasllia","moveTimestamp":1777498847969},{"title":"Roda Rico","content":"","imgUrl":"https://cdn.getcrowder.com/images/5b6a690e-d331-4a2f-b01d-b40745b1dcf5-banner-1-passeio.jpg","label":"Parque Cândido Portinari","line1":"São Paulo | Múltiplas datas","link":"https://www.ticketmaster.com.br/event/roda-rico","buttonText":"Confira","moveTimestamp":1777498847969},{"title":"São Paulo Oktoberfest 2026","content":"","imgUrl":"https://cdn.getcrowder.com/images/907c8212-ec27-4c46-9ae8-da188e953846-46da159a-b35e-48c9-a2de-188d5026f079-nova-full-banner---pgina-do-evento.png","line1":"São Paulo | Múltiplas datas","label":"Parque Ibirapuera","link":"https://www.ticketmaster.com.br/event/sao-paulo-oktoberfest","buttonText":"Confira","moveTimestamp":1777498845531},{"title":"Sampa Sky","content":"","imgUrl":"https://cdn.getcrowder.com/images/012db2c8-a361-40f9-a20f-11cd4972bbfb-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif","line1":"São Paulo | Múltiplas datas","label":"Mirante do Vale","buttonText":"Confira","moveTimestamp":1777498843288,"link":"https://www.ticketmaster.com.br/event/sampasky"},{"title":"Henry & Klauss: Master of Magic","content":"","imgUrl":"https://cdn.getcrowder.com/images/e176f4e3-954e-4b32-84f9-b8f2f7f15108-ab787e46-7ec8-4ae8-bb7b-5de648821c11-henryclausslanding1920x720.gif","link":"https://www.ticketmaster.com.br/event/henry-e-klauss","buttonText":"Confira","label":"Teatro VillaLobos","line1":"São Paulo | Múltiplas datas","moveTimestamp":1777989403034},{"title":"Vinhos de Portugal","content":"","moveTimestamp":1777989403034,"imgUrl":"https://cdn.getcrowder.com/images/39d0d80d-ab98-4d32-b233-dfdef02c2427-2e9c5d8e-3dfe-400f-b638-7aedf5c521d4-banner-genrico-1920x720-landing-page-v4.jpg.jpg","line1":"Múltiplas cidades | Múltiplas datas","label":"Múltiplas cidades","link":"https://www.ticketmaster.com.br/event/vinhos-de-portugal","buttonText":"Confira"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/familia","buttonText":"Ver mais"}},"version":1},{"id":"component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Esportes"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{},"cards":[{"title":"TCB","content":"","imgUrl":"https://cdn.getcrowder.com/images/f2b7d863-ec99-4abc-a961-0fa85306853a-62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.webp","link":"https://www.ticketmaster.com.br/event/tcb","label":"Múltiplas cidades","line1":"Múltiplas cidades | De 09 a 31 de Maio","buttonText":"Confira","openInNewTab":true,"moveTimestamp":1778710352415},{"title":"VNL – Volleyball Nations League","content":"","imgUrl":"https://cdn.getcrowder.com/images/c7347f5f-b458-41b5-80c7-16e552b4eb04-f51e4f2c-5e60-4458-b602-3bea125be567-banneroptimized.jpg","label":"Arena Nilson Nelson","line1":"Brasília | 03 a 14 de Junho","link":"https://www.ticketmaster.com.br/event/volleyball-nations-league-2026","buttonText":"Confira","openInNewTab":true,"moveTimestamp":1778710619038},{"title":"UTS Rio 2026","content":"","label":"Maracanãzinho","link":"https://www.ticketmaster.com.br/event/uts-rio-2026-br","imgUrl":"https://cdn.getcrowder.com/images/222f00a2-40b7-49b1-9da3-eda48e9dae5d-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif","line1":"Rio de Janeiro | 16, 17 e 18 de Julho","openInNewTab":true,"buttonText":"Confira","moveTimestamp":1778710619038},{"title":"College Football","content":"","imgUrl":"https://cdn.getcrowder.com/images/d9e7c8eb-ce71-4aa4-ba29-455f61dacfc1-8a1fdb11-766a-4096-a3ee-50f5cb2f7beb-2118c256-a58c-4f92-b1be-9176bb9d5d16-college-football-01.webp","line1":"Rio de Janeiro | 29 de Agosto","link":"https://www.ticketmaster.com.br/event/college-football","buttonText":"Confira","openInNewTab":true,"label":"Estádio Nilton Santos","moveTimestamp":1778710616743},{"title":"NBA House 2026","content":"","imgUrl":"https://cdn.getcrowder.com/images/6cd2a0e4-edc1-4d87-915c-6b7f1769138d-9af580c4-8e9b-4b9f-8662-b4a6958ff448-img3756.webp","line1":"São Paulo | Múltiplas datas","link":"https://www.ticketmaster.com.br/event/nbahouse","buttonText":"Confira","openInNewTab":true,"label":"Shopping Eldorado","moveTimestamp":1778710615228}]},"version":1},{"id":"component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | São Paulo e Região"},"config":{"customClass":"main_card","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":12,"offset":0,"sort":"startDate","order":"asc"},"idGroup":"48"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Daniel - Tokio Marine Hall - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/daniel-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/bd845f76-6b61-4aa3-9271-72af00075816-1920x720-40.jpg"},{"title":"Fábio Jr. - São Paulo - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Suhai Music Hall","buttonText":"Comprar","link":"../event/fabio-jr-suhai-music-hall","imgUrl":"https://cdn.getcrowder.com/images/e06995a8-5120-40f1-ad9e-b60b5854a6d8-dfd46c0a-6bda-4f69-8331-2f93e1391c8b-fabiojr---full-banner---pgina-do-evento-1920x720.jpg"},{"title":"Rolex 6 Horas de São Paulo","line1":"10, 11 e 12 de Julho de 2026","line2":"","label":"Autódromo de Interlagos","buttonText":"Comprar","link":"../event/fiawecsaopaulo","imgUrl":"https://cdn.getcrowder.com/images/aee6ec6f-4910-4c80-b6b7-9ad430bb0a30-b70d4f87-1629-4386-ba74-de47fac821c2-bannernormalhome.gif"},{"title":"Eagle-Eye Cherry - Tokio Marine Hall - 25/07/2026","line1":"25 de Julho de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/eagle-eye-cherry-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/e2415d08-420c-4232-9759-c9301a04cd4f-1920x720-27.jpg"},{"title":"Di Ferrero - São Caetano do Sul - 08/08/2026","line1":"8 de Agosto de 2026","line2":"","label":"Multiplan Hall Park Shopping São Caetano","buttonText":"Comprar","link":"../event/di-ferrero-sao-caetano-do-sul","imgUrl":"https://cdn.getcrowder.com/images/199e136d-b3d6-4e05-9fbf-b735995b57e5-full-banner---1920x720-3-1.jpg"},{"title":"SP2B - São Paulo Beyond Business","line1":"09 a 16 de Agosto de 2026","line2":"","label":"Parque Ibirapuera","buttonText":"Comprar","link":"../event/sp2b","imgUrl":"https://cdn.getcrowder.com/images/95b64470-0efa-4b6f-8931-175908a74b90-747ae47d-25f7-44e9-984e-c16f1144036f-landing-ticket-master-01.jpg"},{"title":"This is Michael - São Paulo - 29/08/2026","line1":"29 de Agosto de 2026","line2":"","label":"Suhai Music Hall","buttonText":"Comprar","link":"../event/this-is-michael-suhai-music-hall","imgUrl":"https://cdn.getcrowder.com/images/7d2c19a8-e584-4b61-b226-7ee388936141-this-is-michael---full-banner---home-site-1920x720-1.jpg"},{"title":"Angra - Tokio Marine Hall","line1":"02 e 03 de Outubro de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/angra-tokio-marine","imgUrl":"https://cdn.getcrowder.com/images/42044fb3-056c-4cfd-a391-fa85b6e93eb7-794f3d80-476f-4388-aff3-0bd2771a0dd3-1920x720.jpg"},{"title":"The Cat Empire - São Paulo - 12/11/2026","line1":"12 de Novembro de 2026","line2":"","label":"Audio","buttonText":"Comprar","link":"../event/the-cat-empire-na-audio-sp","imgUrl":"https://cdn.getcrowder.com/images/10b2eb96-6ebe-41f8-a7f4-1f8b8834e4b2-d561beeb-1532-46db-8cf5-c91924eab7ff-01fullbanner-2-1.png"},{"title":"Carol Biazin - Ribeirão Preto - 22/08/2026","line1":"22 de Agosto de 2026","line2":"","label":"Multiplan Hall Ribeirão Shopping","buttonText":"Comprar","link":"../event/carol-biazin-ribeirao-preto","imgUrl":"https://cdn.getcrowder.com/images/3c6c4259-1210-47ed-8bbb-37d5a28e00e9-1920x720-5.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/sp","openInNewTab":"true","buttonText":"Ver mais"}},"version":1},{"id":"component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | Rio de Janeiro"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":10,"offset":0,"sort":"startDate","order":"asc"},"idGroup":"47"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Nubya Garcia | Queremos! - Rio de Janeiro","line1":"02 de Junho de 2026","line2":"","label":"Manouche","buttonText":"Comprar","link":"../event/nubya-garcia-queremos-no-manouche-rj-1","imgUrl":"https://cdn.getcrowder.com/images/69cdf03f-3c80-4fb1-a5b1-6bb08c453c81-7fab0877-a90c-4ea7-a0a5-2f25ee304e77-nubyagarciarj01fullbanner.jpg"},{"title":"Anavitória - Rio de Janeiro - 05/06/2026","line1":"05 de Junho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/anavitoria-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/0766f8be-3784-4564-b9bf-a71f09d8ed02-tkm---1920x720-1.png"},{"title":"Chico Chico no Qualistage - RJ - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/chico-chico-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/18b6281b-de5e-4ffc-b985-f53cd94e1afe-1920x720-3-1.png"},{"title":"Rodrigo Teaser no Qualistage - RJ - Data Extra - 12/07/2026","line1":"14 de Junho e 12 de Julho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/rodrigo-teaser-no-qualistage-rj-dataextra","imgUrl":"https://cdn.getcrowder.com/images/4f778cce-a524-4070-99eb-96336b62ecbe-1920x720-6-1.png"},{"title":"Ludmilla - Qualistage - RJ - 23/07/2026","line1":"23 de Julho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/ludmilla-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/51a79a5e-7bf2-43b9-9bca-e5cac3612745-1920x720-5-1.png"},{"title":"João Bosco no Qualistage - RJ - 08/08/2026","line1":"08 de Agosto de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/joao-bosco-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/392b6f40-44f7-48d5-bed2-fc7cd730f609-full-banner---1920x720-1.png"},{"title":"Daniel Boaventura - Qualistage - RJ - 28/08/2026","line1":"28 de Agosto de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/daniel-boaventura-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/47eb8c9c-571d-4997-b74e-02742064124f-1920x720-2.jpg"},{"title":"Joshua Redman | Queremos! - Rio de Janeiro - 30/09/2026","line1":"30 de Setembro de 2026","line2":"","label":"Vivo Rio","buttonText":"Comprar","link":"../event/joshua-redman-queremos-no-vivo-rio-rj","imgUrl":"https://cdn.getcrowder.com/images/8380f217-6cd4-4108-b4eb-feaa1d011c7f-872c6fcc-46fd-4658-9fe8-7f08f95dc3b1-01fullbannereffect.jpg"},{"title":"Whinderson Nunes no Qualistage - RJ - 18/10/2026","line1":"18 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/whinderson-nunes-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png"},{"title":"Oswaldo Montenegro no Qualistage - RJ - 24/10/2026","line1":"24 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/oswaldo-montenegro-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/d740dc02-8a26-4229-9015-206b6660ec02-1920x720-1-1.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/rj","buttonText":"Ver mais"}},"version":1},{"id":"component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | Demais cidades"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":239},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.address.city"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"TCB","line1":"30 de 31 de Maio de 2026","line2":"","label":"São José","buttonText":"Comprar","link":"../event/tcb","imgUrl":"https://cdn.getcrowder.com/images/62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.png"},{"title":"João Bosco - Juiz de Fora - 26/06/2026","line1":"26 de Junho de 2026","line2":"","label":"Juiz de Fora","buttonText":"Comprar","link":"../event/joao-bosco-juiz-de-fora","imgUrl":"https://cdn.getcrowder.com/images/fcfc7e88-ed93-4388-a7ac-4925a788a6e2-60f85ca1-8bbc-4363-bff0-f0697abf519e-whatsapp-image-2026-02-27-at-14.48.14.jpg"},{"title":"DVL Rock Festival - Cascavel - 19/07/2026","line1":"19 de Julho de 2026","line2":"","label":"Cascavel","buttonText":"Comprar","link":"../event/dvl-rock-festival","imgUrl":"https://cdn.getcrowder.com/images/8d92b5b8-ff79-4149-bb48-dec03e23d8f4-4bf3f22d-0ebc-48f2-85b3-f1d36aae1aa1-whatsapp-image-2026-03-10-at-11.29.42-1.jpg"},{"title":"Nazareth - Celebrando 55 Anos - Belo Horizonte","line1":"24 de Julho de 2026","line2":"","label":"Belo Horizonte","buttonText":"Comprar","link":"../event/nazareth-celebrando-55-anos","imgUrl":"https://cdn.getcrowder.com/images/92ddb5a4-83e2-45e1-982f-5083441cd591-cac2a353-1e62-4e5c-a84f-72348192de2c-1920x720-nazareth-min.png"},{"title":"Sticky Fingers - Curitiba - 08/08/2026 - Venda Geral","line1":"08 de Agosto de 2026","line2":"","label":"Curitiba","buttonText":"Comprar","link":"../event/sticky-fingers-curitiba","imgUrl":"https://cdn.getcrowder.com/images/39b452ca-67b5-4817-9c6f-f896e0ed10f7-d733e449-58e9-4928-94af-ae92b3e15afe-stfilanding1920x720-2-1.gif"}]},"version":1},{"id":"component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Espetáculos, Teatro & Comédia 🎭"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":214},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Murilo Couto: Novo Show - Rio de Janeiro - 28/05/2026","line1":"28 de Maio de 2026","line2":"","label":"Teatro da Ilha","buttonText":"Comprar","link":"../event/murilo-couto-novo-show-teatro-da-ilha","imgUrl":"https://cdn.getcrowder.com/images/a6faecf0-53ff-4175-bbef-f68587fed41e-whatsapp-image-2026-03-27-at-07.37.38-2.jpeg"},{"title":"O Mágico de Oz - São Paulo","line1":"8 de Março a 02 de Agosto de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/o-magico-de-oz-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/23fc8da4-c804-471c-a787-04f09494ffc8-tmgrid1920x720-1.png"},{"title":"Vindos de Longe - São Paulo","line1":"26 de Junho a 02 de Agosto de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/vindos-de-longe-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/1884ffb1-8a67-4bbe-9675-af343cc5e063-cfabanner1920x720-3.jpg"},{"title":"Elton John Diamonds - São Paulo","line1":"04, 11, 18 e 25 de Setembro de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/elton-john-diamonds-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/86fe488e-0a3c-4b30-9ddf-890cd37f775a-1920-x720-ticketmaster-copy.jpg"},{"title":"Whinderson Nunes no Qualistage - RJ - 18/10/2026","line1":"18 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/whinderson-nunes-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/teatro","buttonText":"Ver mais"}},"version":1},{"id":"component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Última chance"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":180},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Martinho da Vila & Mart´Nália | Pai e Filha - Rio de Janeiro - 30/05/2026","line1":"30 de Maio de 2026","line2":"","label":"Vivo Rio","buttonText":"Comprar","link":"../event/martinho-da-vila-martnalia-pai-e-filha-rio-de-janeiro","imgUrl":"https://cdn.getcrowder.com/images/224fc7bf-f63f-4c3e-953b-df956554b9df-5f364237-e809-4991-8a5c-057dc23a3fdb-1920x720-color.jpg"},{"title":"Lenine - Tokio Marine Hall - 30/05/2026","line1":"30 de Maio de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/lenine-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/38fdd9b6-2187-4c30-b3a0-9859e7cc7385-1920x720-33.jpg"},{"title":"School of Rock Jardins - São Paulo - 31/05/2026","line1":"31 de Maio de 2026","line2":"","label":"The Cavern Club","buttonText":"Comprar","link":"../event/school-of-rock-jardins-the-cavern-club","imgUrl":"https://cdn.getcrowder.com/images/27999fcf-3346-406a-b044-b268858cd6c4-1920x720-4-1-1.png"},{"title":"Nubya Garcia | Queremos! - São Paulo","line1":"03 de Junho de 2026","line2":"","label":"Casa Natura Musical","buttonText":"Comprar","link":"../event/nubya-garcia-queremos-na-casa-natura-sp","imgUrl":"https://cdn.getcrowder.com/images/be678cc0-0b1a-40dd-a3b8-774fceb11b13-39d2352f-6b3c-45d6-997a-a9617459c367-nubyagarciasp01fullbanner.jpg"},{"title":"Manti Wine Sessions - Autódromo Velocitta - 05 e 06/06/2026","line1":"5 e 6 de Junho de 2026","line2":"","label":"Autodromo Velocitta","buttonText":"Comprar","link":"../event/manti-wine-sessions","imgUrl":"https://cdn.getcrowder.com/images/0774ea2c-ffa8-4d78-ae37-1f9b2fb5da50-fc28420b-5767-4f1c-b64a-70a386e338cb-banner-festival-07.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/ultima-chance","buttonText":"Ver mais"}},"version":1},{"id":"component-7c09ae95-6c05-4749-ae88-d80f672878ec","widgetType":"Grid","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"tm-banner","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":2},"cards":[{"title":"Experiências premium","content":"","imgUrl":"https://cdn.getcrowder.com/images/f8289d25-28f8-4cbc-98c2-9eff8e763131-experienciaspremium1920x720v1.png","link":"https://www.ticketmaster.com.br/event/experiencias","buttonText":""},{"title":"Rock in Rio","content":"","link":"https://www.ticketmaster.com.br/event/rockinrio","imgUrl":"https://cdn.getcrowder.com/images/5d9b5105-c271-4878-8621-bfdbfd799ae7-rir-banner.gif"}]},"version":1},{"id":"component-d54e1b4b-6476-42ea-a1ca-67b8066850e4","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Grandes eventos"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":15,"offset":0,"sort":"startDate","order":"asc"},"idGroup":33},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"CUSTOM","value":""},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"ENHYPEN WORLD TOUR 'BLOOD SAGA'","line1":"04 de Julho 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/enhypen","imgUrl":"https://cdn.getcrowder.com/images/225e53b3-94d4-4af5-a270-e76521098746-enhypen1920x720px.gif"},{"title":"Harry Styles: Together, Together","line1":"Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/harry-styles","imgUrl":"https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif"},{"title":"Rosalía: Lux Tour 2026","line1":"10 e 11 de Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/rosalia","imgUrl":"https://cdn.getcrowder.com/images/cddb5541-b857-4993-ac09-fc0cb0681cc9-tmgrid1920x720home.gif"},{"title":"Sticky Fingers: Live in Latin America 2026","line1":"Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/sticky-fingers","imgUrl":"https://cdn.getcrowder.com/images/aa70f3dd-82e4-45b0-9e06-d1f861c21ea3-stickyyy.gif"},{"title":"aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -","line1":"04 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/aespa","imgUrl":"https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif"},{"title":"5 Seconds Of Summer: Everyone's A Star World Tour","line1":"São Paulo e Belo Horizonte","line2":"","label":"","buttonText":"Comprar","link":"../event/5sos","imgUrl":"https://cdn.getcrowder.com/images/6e1091bc-9b40-4fb1-8dec-c69897d27d7a-5sos1920x720home.gif"},{"title":"ZAYN: The Konnakol Tour","line1":"Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/zayn","imgUrl":"https://cdn.getcrowder.com/images/e9e30072-c0e5-4b28-8577-0ce19cba6e3b-zayn1920x720home.gif"},{"title":"Kid Abelha: Eu Tive Um Sonho","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/kid-abelha","imgUrl":"https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif"},{"title":"BTS WORLD TOUR ARIRANG","line1":"28, 30 e 31 de Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/bts-world-tour-arirang","imgUrl":"https://cdn.getcrowder.com/images/f862039e-2a11-4acc-a59e-be51a2fd10b4-bts1920x720home.gif"},{"title":"Djavan: Djavanear 50 anos - Só Sucessos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/djavan3","imgUrl":"https://cdn.getcrowder.com/images/99dd624b-8290-4115-8308-9ecf331a4aba-djavanhome1920x720.gif"},{"title":"CA7RIEL & Paco Amoroso: Free Spirits World Tour","line1":"Novembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ca7riel-e-paco-amoroso","imgUrl":"https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif"},{"title":"KAROL G: Viajando Por El Mundo Tropitour","line1":"12 de Fevereiro de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/karol-g","imgUrl":"https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif"},{"title":"Louis Tomlinson: How Did We Get Here? Latin American Tour","line1":"06 e 07 de Abril de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/louis-tomlinson","imgUrl":"https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif"},{"title":"Xande de Pilares & Revelação: Tava Escrito – O Reencontro Histórico","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/revelacao-e-xande-de-pilares","imgUrl":"https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif"},{"title":"Tiago Iorc - Turnê Troco Likes 10 Anos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/tiago-iorc","imgUrl":"https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif"}]},"version":1},{"id":"component-cc33c46c-eccc-486a-b11b-d857cbb2773b","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Locais"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"vertical","cardsPerRow":4},"cards":[{"title":"Roda Rico","content":"","imgUrl":"https://cdn.getcrowder.com/images/e81f737d-15f6-4ce9-a47a-9e48455bc86e-banner-1-passeio.jpg","link":"https://www.ticketmaster.com.br/event/roda-rico","buttonText":"Comprar"},{"title":"Sampa Sky","content":"","imgUrl":"https://cdn.getcrowder.com/images/78be3784-bd99-4939-ae86-4ac5c5474e48-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif","link":"https://www.ticketmaster.com.br/event/sampasky","buttonText":"Comprar"},{"title":"Zoo São Paulo","content":"","imgUrl":"https://cdn.getcrowder.com/images/fae56cc7-2eed-4b41-8553-902eecfd9f06-zoo1920.png","link":"https://www.ticketmaster.com.br/event/zoo-sao-paulo","buttonText":"Comprar"},{"title":"Jardim Botânico","content":"","imgUrl":"https://cdn.getcrowder.com/images/7f1e0a9d-59ca-4d46-b4fd-89953cbbe0ae-jardimbotanico1920x720.gif","link":"https://www.ticketmaster.com.br/event/jardim-botanico-sp","buttonText":"Comprar"}]},"version":1},{"id":"component-1f9fe5af-ff0e-4368-86ca-03921f2eec10","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Casas"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"vertical","cardsPerRow":4},"cards":[{"title":"The Cavern Club","content":"","imgUrl":"https://cdn.getcrowder.com/images/6a4b1b3e-b0b2-4d97-9204-038afd35b19e-bannerticketmastercavern1920x720.jpg","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"link":"https://www.ticketmaster.com.br/page/the-cavern-club","buttonText":"Confira","moveTimestamp":1760986847851},{"title":"Multiplan Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/5190afb5-ce64-464c-94fa-1a737d0d67a0-multiplan-sao-caetano.png","link":"https://www.ticketmaster.com.br/page/multiplan-hall-saocaetano","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"ParkShopping São Caetano"}]}]},"md":{"result":"ParkShopping São Caetano","warnings":{}}},"moveTimestamp":1760986847851},{"title":"Multiplan Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/84240362-9467-48aa-a8e6-0dda63a962df-multiplan-ribeirao.png","link":"https://www.ticketmaster.com.br/page/multiplan-hall-ribeirao","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"RibeirãoShopping"}]}]},"md":{"result":"RibeirãoShopping","warnings":{}}},"moveTimestamp":1760986846283},{"title":"Qualistage","content":"","imgUrl":"https://cdn.getcrowder.com/images/d93f9bb8-c0b0-4917-91d2-f7820786f700-quali.png","link":"https://www.ticketmaster.com.br/page/qualistage","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Rio de Janeiro"}]}]},"md":{"result":"Rio de Janeiro","warnings":{}}},"moveTimestamp":1760986844621},{"title":"Suhai Music Hall","content":"","link":"https://www.ticketmaster.com.br/page/suhai-music-hall","buttonText":"Confira","imgUrl":"https://cdn.getcrowder.com/images/494e6ac2-9cef-4d2d-bc5a-79f66e87ac5a-50feed0e-7d50-4a49-973b-62ca827e19f4-banneroptimizedv2.webp","moveTimestamp":1774997432897,"description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}}},{"title":"Teatro da Ilha","content":"","moveTimestamp":1774997432897,"imgUrl":"https://cdn.getcrowder.com/images/310ad4f9-fdac-48f6-a4ef-1d31c862733f-capaticketmasteroptimized.jpg","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Rio de Janeiro"}]}]},"md":{"result":"Rio de Janeiro","warnings":{}}},"link":"https://www.ticketmaster.com.br/page/teatrodailha","buttonText":"Confira"},{"title":"Teatro Ruth Escobar","content":"","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"buttonText":"Confira","link":"https://www.ticketmaster.com.br/page/teatroruthescobar","imgUrl":"https://cdn.getcrowder.com/images/c46c533e-e7ff-4a94-906f-978925f500e8-a5069e88-9e23-4db2-87ad-703562eb98b9-1920x720-teatro-ruth-escobar-2-2.png","moveTimestamp":1774997431758},{"title":"Tokio Marine Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/15f8f90e-b6be-43d8-99e1-32090242da8a-tokio.webp","link":"https://www.ticketmaster.com.br/page/tokio-marine-hall","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"moveTimestamp":1774997401682}]},"version":1},{"id":"component-a7bb9492-891f-4d01-a218-6a26931b1473","widgetType":"Html","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"","containerAppearance":"centered","backgroundColor":"#024ddf","titleColor":"#ffff","paragraphColor":"","linkColor":""},"html":"<div class=\"tm-suscribe\">\n    <div style=\"font-size:1.5em; font-weight:600; color:#fff; margin-bottom:10px\">Inscreva-se para saber as novidades</div>\n    <iframe allow=\"autoplay\" title=\"Inscreva-se para saber as novidades\"\n        sandbox=\"allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-popups-to-escape-sandbox\"\n        id=\"pD2hFh\" class=\"embed_frame\" loading=\"lazy\" src=\"https://m.cmpgn.page/pD2hFh?embed=3\"\n        style=\"border:none;min-width:100%;height:168px\" allowpaymentrequest=\"\" allowfullscreen=\"\"\n        data-hj-allow-iframe=\"\"></iframe>\n</div>"},"version":1},{"id":"component-e63baadf-23ef-4018-8721-2ab8b18684a1","widgetType":"Image","state":{"enabled":true,"header":{"title":"Seu evento na ticketmaster- Saiba mais"},"config":{"customClass":"tm-banner","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"htmlUrl":"https://cdn.getcrowder.com/images/1a9c53c8-d1ef-48cb-b6be-0e4f496519f6-tmb2bdesktop-2.gif","mobileUrl":"https://cdn.getcrowder.com/images/a1d1d213-be80-4fa2-ae0d-092f424cdb52-tmb2bmobile-2.gif","linkControl":{"haveLink":true,"haveLinkUrl":"https://business.ticketmaster.com.br/pt/"}},"version":1}],"cmsMenuOptions":[],"cmsPageHeader":{"id":"4320ff4f-d648-4eb3-a1f5-d18534ddc0eb","enabled":false,"html":"<div class=\"sector-pre-header horizontal-container navbar-container bg-black\">\n    <div class=\"\">\n        <img src=\"https://cdn.getcrowder.com/images/e0531a24-a002-4ece-95b7-a4f8a195afcf-logo-br-1.png\" alt=\"\"\n            width=\"20px\">\n        <span>\n            BR\n        </span>\n        <!-- Modal -->\n        <div class=\"modal fade\" id=\"country-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\"\n            data-backdrop=\"static\">\n            <div class=\"country-modal-dialog\">\n                <div class=\"modal-content\" style=\"color: black;\">\n                    <a href=\"javascript:void(0);\"\n                        onclick=\"var element = document.getElementById('country-modal'); element.style.display = 'none'; element.style.opacity = 0;\">X</a>\n                    <div>\n                        Location\n                    </div>\n                    <div> Perú\n                    </div>\n                    <div>\n                        Lima\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"\">\n        <div class=\"menu\">\n            <a href=\"https://business.ticketmaster.pe/trabaja-con-nosotros/\">\n                <img src=\"https://cdn.getcrowder.com/images/9dda0dde-b9d3-4947-8c22-cc081358c0b2-shoppingbag.png\" alt=\"\"\n                    width=\"20px\">\n                <span>\n                    Venda \n                </span>\n                <span class=\"hidden-xs\">\n                    conosco\n                </span>\n            </a>\n            <a href=\"https://help.ticketmaster.com.br/hc/pt-br\">\n                Suporte\n            </a>\n        </div>\n    </div>\n</div>"}},"configParamsModel":{"url":"www.ticketmaster.com.br","configurationUrl":"https://web-layout.s3.amazonaws.com/home/production/85329914-c94b-4104-b7ec-b16a04f77565","country":"BRASIL","cashlessURL":null,"featureEventReports":true,"logoClear":"https://cdn.getcrowder.com/images/46b77c52-6acd-425b-985f-c036a9dcbf90-ticketmaster.svg","analytics":{"facebook":{"pixelId":null},"mixpanel":{"id":null},"google":{"analyticsId":null,"gtmId":"GTM-WBGSPNM"}},"enableAccessibility":true,"countryData":{"streetTypes":[],"country":"BRASIL","defaultCurrency":"BRL"},"logo":"https://cdn.getcrowder.com/images/1664925447950-null-ticketmaster-logo-azurewithoutr.png","id":62,"showCaptchaOnRegister":true,"oneTrustId":"335c8215-96b5-4b4c-91b1-4f1dd9016a7b","homepageImage":"https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png","useHomeCMS":true,"refundServiceEnabled":true,"FeatQPI":true,"sitefEnabled":true,"featurePartner":true,"comboName":"Pacote","featureQueueitV2":true,"featurePaymentVerification":true,"timeZone":"America/Argentina/Buenos_Aires","usePagesCMS":true,"homeLogo":"","shopUrl":"www.ticketmaster.com.br","useLandingComponents":true,"showCaptchaOnLogin":true,"userSessionsEnabled":true,"featureDeferred":true,"subtitle":"Ticketmaster","featureStreaming":false,"name":"Ticketmaster Brasil","posInfo":null,"styles":{"colors":{"main":"#024ddf","header":"#024ddf","headerLinks":"#024ddf","footer":"#1f262d","footerLinks":"#ffffff"},"font":{"source":"<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Regular.woff2\">\n<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Semibold.woff2\">\n<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Bold.woff2\">","fontFamily":"Averta, \"Helvetica Neue\", Helvetica, Arial, sans-serif"},"custom":"nav img.logo-dark {\n    display: none;\n}\n\nnav img.logo-light {\n    display: block;\n}\n\n.event-picker .dropdown .btn {\n    overflow: hidden;\n}\n\n.event-picker .dropdown .dropdown-menu li.agotado div {\n    padding: 15px 20px;\n    clear: both;\n    font-weight: 600;\n    line-height: 1.42857143;\n    color: #333;\n    white-space: nowrap;\n    border-bottom: solid 1px #d7d7d773;\n    display: flex !important;\n    align-items: center;\n    justify-content: space-between;\n    gap: 10px;\n    text-wrap: balance;\n    text-decoration: none;\n}\n\n\n#eventList .home-events .col-md-12 { width:100%}\n#eventList .home-events .col-md-8  , #eventList .home-events .col-md-4 { width:50%}\n@media screen and (max-width: 1024px) {#eventList .home-events .col-md-12 { width:100%}}\n.ticket-shop .btn-primary { cursor:pointer !important}\n\n.event_thumb_info .event_venue { display:none}\n\nimg.banner-town {\nwidth: 100%;\n    border-radius: 5px;\n    height: 380px;\n    object-fit: cover;\n}\n.event-thumb .title-container {\n    z-index: 1;\n}\n.va-container:hover img {\n    transform: scale(1.05) !important;\n}\n.event-thumb img {\n    transition: 0.4s;\n}\n\n.title-container { opacity:0; transition:0.3s ease-in-out}\n.title-conttainer .event_thumb_info, .title-container .thumb-title {margin-left: 20px; transition:0.4s ease-in-out}\n\n.va-container:hover .title-container { opacity:1}\n.va-container:hover title-conttainer .event_thumb_info, .va-container:hover .title-container .thumb-title {margin-left: 0px; }\n\n@media screen and (max-width: 768px) {\nimg.banner-town {\n    height: 300px;\n}\n}\n@media screen and (max-width: 1024px) {\n.home-events .col-md-8, .home-events .col-md-4 {\n    width: 100% !important;\n}\n}\n\n.title-container {\n    display: flex;\n    padding: 40px;\n    position: absolute;\n    width: 100%;\n    align-items: flex-start;\n    justify-content: flex-end;\n    background: rgb(0,0,0);\n    background: linear-gradient(51deg, rgb(3 95 196) 0%, rgb(0 101 210 / 42%) 100%);\n    flex-direction: column;\n}\n\n.title-container .thumb-title {\nfont-size: 1.6em;\nfont-weight: 600;\n}\n\n.va-container:hover {\n    transform: scale(1);\n}\n\n.event-thumb {\n    background-color: var(--main-color);\n    box-shadow: none !important;\n}\n\n.event_thumb_info {\n    display: flex;\n    flex-direction: column;\n    align-items: flex-start;\n    color: #fff;\n    font-size: 1em;\n    font-weight: 500;\ngap:2px;\n}\n\n.event_thumb_info span.event_venue { opacity:0.6}\n\n\n@media screen and (max-width: 768px) {\n.title-container { text-align:left !important; padding:20px !important;}\n.title-container .thumb-title {\n    font-size: 1.3em;\n    font-weight: 600;\n    margin: 0 0 10px 0;\n    line-height: 1.4em;\n    text-align: initial;\n}\n}\n\n.container .content ul {padding:0 0 0 20px !important;}\n.container .content table {width:100%; border:solid 1px #f1f1f1}\n.container .content table td {border:solid 1px #f1f1f1; padding:10px;}\n\n.carousel-inner .item {\n    height: 300px !important;\n}\n\n.carousel-indicators {\n    bottom: 10px !important;\n    opacity: 1;\n}\n\n.carousel-indicators li , .carousel-indicators li.active  {\n    width: 10px ;\n    height: 10px;\n    margin: 0 1px;\n}\n\n\n.search_box_home h1 {\n    text-transform: none;\n}\n\nbody {\n     padding-top: 50px;\n     letter-spacing: 0.3px;\n}\n .footer-tm ul li a {\n     color: #fff;\n     margin: 0 !important;\n}\n .home-categories , .home-events {\n     width:90%;\n     max-width: 1260px;\n     margin: 0 auto;\n}\n .home-events .col-md-8, .home-events .col-md-4 {\n     width:50%;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Light.woff2\") format(\"woff2\");\n     font-weight: 300;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Regular.woff2\") format(\"woff2\");\n     font-weight: 400;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Semibold.woff2\") format(\"woff2\");\n     font-weight: 600;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Bold.woff2\") format(\"woff2\");\n     font-weight: 700;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Black.woff2\") format(\"woff2\");\n     font-weight: 900;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-RegularItalic.woff2\") format(\"woff2\");\n     font-style: italic;\n}\n @media (min-width: 780px) {\n     .event-header .ticket-shop #buyButton {\n         margin-left: 30px;\n    }\n}\n .event-header .ticket-shop {\n     position: relative;\n     background: rgba(251,252,255);\n     border: solid 2px #F1F2F5;\n}\n .event-header .ticket-shop #show-button, .event-header .ticket-shop #quantity-button {\n     border: solid 1px rgba(0, 0, 0, 0.15);\n}\n .navbar ul.user-menu {\n     padding: 15px 0 0 0;\n}\n .navbar-brand {\n     line-height: normal;\n}\n .event-header .ticket-shop.affix{\n     top: 60px;\n}\n .main {\n     height: 180px;\n     background: #024DDF !important;\n}\n .main h1 { display: none;}\n .navbar .btn {\n     margin-top: 0px;\n     background: transparent;\n     font-size: 1.1em;\n}\n #login_button #ingresar {\n     color: #353C42 !important;\n}\n .navbar a {\n     font-size:1em;\n}\n .navbar .logo {\n     padding: 20px 0;\n}\n .navbar-menu a:hover {\n     background-color: rgb(230, 230, 230);\n}\n .navbar-menu a:hover::after {\n     width:0px;\n}\n @media (min-width: 1600px){\n     .container {\n         width: 1260px;\n    }\n}\n .footer-tm {\n    color:#ffffff;\n}\n .footer-tm h5,  .footer-tm h3 {\n    font-size:1em;\n    font-weight:bold;\n    margin-bottom:15px;\n}\n .footer-tm ul {\n     padding:0;\n     margin:0 0 40px 0\n}\n .footer-tm ul li {\n     list-style:none;\n     display:block;\n     margin-bottom:10px;\n}\n .footer-tm ul li a {\n     color:#fff\n}\n .footer-tm img.logo {\n     margin:0 0 40px 0;\n     height:25px\n}\n .footer-tm .foo-copy {\n     text-align:right;\n     font-size:0.8em;\n}\n .footer-tm .foo-social a {\n     margin-right:20px\n}\n .footer {\n    border: none\n}\n @media (max-width: 768px){\n     .footer-tm .foo-social {\n         margin-bottom:40px\n    }\n     .footer-tm .foo-copy {\n         text-align:left;\n    }\n}\n #eventList.container {\n     width:100%;\n     padding:0;\n}\n .tm-main {\n     height: 92vh;\n     background: #024DDF;\n     background-image: url(https://cdn.getcrowder.com/images/1669406310174-null-main-br.jpg);\n     background-size: cover;\n     animation: bgAnimate 15s ease-in-out infinite alternate;\n     overflow:hidden;\n     text-align: center;\nborder-top: solid 30px #0262cf;\n}\n @keyframes bgAnimate {\n     0% {\n         background-position: 2% 0;\n    }\n     100% {\n         background-position: 100% 0;\n    }\n}\n .tm-main .tm-t {\n     margin-bottom: 10vh;\n}\n .tm-main .tm-t img {\n     height:35vh;\n     animation: tAnimate 2s ease-in-out;\n}\n @keyframes tAnimate {\n     0% {\n         transform: scale(2.5);\n         opacity:0;\n    }\n     100% {\n         transform: scale(1);\n         opacity:1;\n    }\n}\n .tm-main .tm-overlay {\n     display: flex;\n     flex-direction: column;\n     justify-content: center;\n     align-items: center;\n     flex-wrap: nowrap;\n     align-content:center ;\n     height: 100%;\n     background: linear-gradient(0deg, rgba(2,108,223,1) 0%, rgb(0 69 145 / 50%) 49%, rgba(2,108,223,0) 100%);\n}\n .tm-main h2 {\n     margin: 0;\n     font-size: 2em;\n     color: #fff;\n     font-weight: 400;\n     animation: h2Animate 1s ease-in-out;\n}\n .tm-main h2 span {\n     color: #00FFFF;\n}\n @keyframes h2Animate {\n     0% {\n         transform: scale(0.5);\n         opacity:0;\n    }\n     100% {\n         transform: scale(1);\n         opacity:1;\n    }\n}\n .tm-main i {\n     display: block;\n     width: 14px;\n     height: 14px;\n     border: solid 2px #ffffff70;\n     border-left: none;\n     border-top: none;\n     transform: rotate(45deg);\n     border-radius: 3px;\n     bottom: 8vh;\n     position: absolute;\n}\n .tm-suscribe {\n     background: #024DDF;\n     padding: 80px 20px 100px;\n     text-align: center;\n}\n .tm-suscribe h6 {\n     margin: 0;\n     font-size: 1.8em;\n     color: #fff;\n     font-weight: 400;\n}\n .tm-social {\n     display: block;\n     position: relative;\n     height: 300px;\n     color: #fff;\n     text-decoration: none;\n}\n .tm-social .tm-s {\n     width: 100%;\n     position: relative;\n     float: left;\n     height: 300px;\n     display: flex;\n     flex-direction: column;\n     flex-wrap: nowrap;\n     justify-content: center;\n     align-items: center;\n     align-content: center;\n     text-align: center;\n     background: #000;\n}\n .tm-social .tm-s h3 {\n     font-size:1.8em;\n     color: #fff;\n     margin: 0 0 10px 0;\n     font-weight: normal;\n}\n .tm-social .tm-s {\n     color: #fff;\n     text-decoration: none;\n     opacity: 0.95;\n     transition: 0.2s;\n}\n .tm-social .tm-s:hover{\n     opacity:1;\n}\n .tm-social .tm-s span {\n     color: #00FFFF;\n}\n.tm-social .tm-instagram {\nbackground: url(https://cdn.getcrowder.com/images/1683576764155-null-TM_Banner_Instagram.jpeg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-facebook {\nbackground: url(https://cdn.getcrowder.com/images/1683576746022-null-TM_Banner_Facebook.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-linkedin {\nbackground: url(https://cdn.getcrowder.com/images/1683576712789-null-TM_Banner_LinkedIn.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-twitter{\nbackground: url(https://cdn.getcrowder.com/images/1669823412469-null-twitter.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-blog{\nbackground: url(https://cdn.getcrowder.com/images/1683576726535-null-TM_Banner_Blog.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-tiktok {\nbackground: url(https://cdn.getcrowder.com/images/1691588419752-null-tiktok.jpeg) no-repeat center center;\nbackground-size: cover;\n}\n\n.tm-social .tm-overlay img {\nwidth:40px;\n}\n\n .tm-business {\n     background:#1F262D;\n     padding: 100px 20px;\n     text-align: center;\n     border-bottom: solid 1px #363636;\n}\n .tm-business h2 {\n     margin: 0;\n     font-size: 1.8em;\n     color: #fff;\n     font-weight: 400;\n     margin: 0 0 60px 0;\n}\n .tm-business a {\n     border: solid 1px #fff;\n     text-decoration: none;\n     padding: 18px 30px;\n     font-size:1.1em;\n     color: #fff;\n}\n @media (max-width: 768px){\n     .tm-main {\n         height: 70vh;\n         background-image: url(https://cdn.getcrowder.com/images/1669406540752-null-main-m.jpg);\n         animation: bgAnimate 25s ease-in infinite alternate;\n    }\n     .tm-main .tm-overlay {\n         padding: 0 30px;\n         background: linear-gradient(0deg, #024DDF 0%, #024DDFb0 49%, #024DDF94 100%);\n    }\n     .tm-main .tm-t img {\n         height:150px;\n    }\n     .tm-social {\n         display: block;\n         position: relative;\n         height: 300px;\n    }\n}\n .navbar {\n     height: 60px;\n     background-color:#024DDF;\n     box-shadow: none !important;\n}\n\n .navbar-menu a {\n     color: #fff;\n     font-size: 1.1em !important;\n}\n .navbar-menu a:hover {\n     background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.176));\n     background-color: #0000 !important;\n}\n #login_button #ingresar {\n     color: #fff !important;\n}\n a.btn-togle span {\n     background:#fff;\n}\n .navbar a {\n     font-size: 1em;\n}\n .navbar-collapse ul li:first-child a {\n     border-top:none !important\n}\n .quentro-modal .modal-body {\n    padding: 20px !important;\n}\n .quentro-modal .modal-header a.quentro-logo img {\n    width: 120px;\n}\n .quentro-modal .modal-body img {\n    width: 80px !important;\n}\n .quentro-modal .close-quentro-modal {\n    width: 25px;\n     float: right !important;\n}\n #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn {\n     color: white;\n     padding: 0;\n     border: 0;\n     font-size:0.9em;\n}\n #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn:hover {\n     color: white;\n     background: none;\n}\n .tm-grid {\n}\n .tm-grid .tm-grid-event {\n     color: #fff;\n     background-size: cover;\n     background-position: center ;\n     height: 100%;\n}\n .tm-grid .tm-grid-event .tm-grid-event-overlay {\n    background: linear-gradient(90deg, rgba(6,25,46,0.95) 0%, rgba(8,30,54,0.65) 40%, rgba(13,32,52,0.15) 100%);\n     height: 100%;\n     display: flex;\n     align-items: flex-end\n}\n .tm-grid .event-title {\n     font-size:2em;\n     font-weight: 600;\n}\n .tm-grid .event-info {\n     font-size:1em;\n     margin-bottom: 20px;\n     font-weight:600\n}\n .tm-grid .event-info span {\n     opacity: 0.7;\n     display: block;\n     font-size:1em;\n     font-weight: normal;\n}\n .tm-grid a.btn-event {\n     font-size:1.1em;\n     color: #fff;\n     font-weight: 500;\n     background: var(--main-color);\n     padding: 12px 20px;\n     text-decoration: none;\n     display: inline-block;\n     border-radius:2px\n}\n .tm-grid .event-info-content {\n     padding: 70px;\n}\n\n\n.grid-1 { grid-area: 1 / 1 / 2 / 3; }\n.grid-2 { grid-area: 2 / 1 / 3 / 2; }\n.grid-3 { grid-area: 2 / 2 / 3 / 3; }\n.grid-4 { grid-area: 3 / 1 / 4 / 2; }\n.grid-5 { grid-area: 3 / 2 / 4 / 3; }\n.grid-6 { grid-area: 4 / 1 / 5 / 3; }\n.grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 60vh; }\n\n.grid-1 { width:50%; position: relative;float: left;}\n.grid-2 { width:100% ; position: relative;float: left;}\n\n.grid-1, .grid-2 {\n    height: 55vh;\n    min-height: 400px;\n}\n \n @media (max-width: 1440px){\n     .tm-grid .event-title {\n         font-size: 1.6em;\n    }\n     .tm-grid .event-info {\n         font-size: 1em;\n    }\n     .tm-grid .event-info-content {\n         padding: 4em;\n    }\n     .tm-grid a.btn-event {\n         font-size: 1em;\n        padding: 10px 15px;\n    }\n}\n @media (max-width: 768px){\n\n     .parent-grid {\n        display: flex;\n        flex-direction: column;\n         height: auto;\n    }\n\n    .grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 50vh; }\n\n\n     .tm-grid .event-info-content {\n         padding:30px 20px;\n    }\n     .tm-grid .event-info span {\n         margin: 0;\n         display: block;\n    }\n}\n body {\n     --order-top-bg: #0046cb;\n     --order-top-color: #fff;\n     --header-height: 60px;\n     padding-top:60px;\n}\n .pg_content .pg_sidebar {\n     display:none !important\n}\n .pg_content .col-sm-8 {\n     margin: 0px auto;\n     width:100%;\n     padding: 0 200px;\n     float: inherit;\n}\n @media (max-width: 1280px){\n    .pg_content .col-sm-8 {\n        padding: 0px 100px;\n    }\n }\n \n @media (max-width: 768px){\n    .pg_content .col-sm-8 {\n        padding: 0px 20px;\n    }\n    .grid-1, .grid-2 {\n        height: 40vh;\n        width: 100%;\n        min-height: 350px;\n    }\n}\n\n\ndiv.accesibility {\n    bottom: 30% !important;\n}\n\n\n.event_blocks .grid-label {\n    position: sticky !important;\n    color: #fff;\n    background: var(--main-color);\n    font-weight: normal;\n    font-size: 0.8em;\n    border-radius: 2px;\n    top: 3px;\n    right: 20px;\n    display: block;\n    z-index: 1;\n    margin: 0;\n    padding: 4px 8px;\n}"},"useFacilityFee":true,"userConfiguration":{"requireDocument":true,"requireGender":true,"legalTerms":null,"enabledCountries":[],"passwordStrength":true,"blockDocumentChange":true,"blockEmailChange":true,"minimumAge":18,"enforceMFA":true},"support":{"email":"info@ticketmaster.com.br","link":"https://help.ticketmaster.com.br/hc/pt-br","linkOrMail":"https://help.ticketmaster.com.br/hc/pt-br","linkOrMailLink":"https://help.ticketmaster.com.br/hc/pt-br"},"wafApiKey":"UMg4cv2VBL/+DPsCwQrT9MzSEiF+y90AL50eG+jwc1I8+Q6XiysXXNtNVYrQ0jWTxz3OpPDcCcWzyYkmMpI5oNViyfBw/bM6UuCIL0hEOBiKxOtmFtB+KHOviEveAqVr9U1cjj+iD97VY2j7RJnscQAd200LDpJLq6sI5UWV6KbWgV8vodHlXlc8csSnFMtJYMRYdk5NPEkSulrD1JDDOwMY4zVkV+KNnfofYq7PLa0Xfh1/I/r6OEtDzmc8aPHk7FNphynIOL4ljPL6AR5wQje8va/I99oe3Ygmy1CMQq2HOLT0JO46qImy4L2o5LrDK1DUbNouPfOdvHcAh9gUa79F8b36j4DikZxxs2GOBjFhcSdmUiOfsu9r2neOUwELIKcd74eeENR4q+IkbzFuxub6aCYikJTEmwYEmAxOJYf9VOrFYmJ3D0ljKh6T+fqmCBZWTNjSvpZMJnazNWjbdf9LqA8UbMt3c8qsl/1rEOp1IW6qU9VWAzl9pP3jo/0bXwXjHTcAnPMWuKf8SlAxpOgEecCd2Netf5E7YCO+F6+CpKQBKqS3bxq44H63n3z4IgTKm3UoCk70wJGTG0fm13WKJyoCXHKZE/woWZPk0VGXxlRkB3lb+/3SfyelL9AVn3kl6mQw01OOsB4W/qV3SLSjfw1Z3ON6kfPRhY/LK1c=_0_1","featurePIR":true,"customFooter":"<style type=\"text/css\">.footer-pt,\n.footer-en,\n.footer-es {\n    display: none;\n}\n\n\nhtml[lang=\"pt\"] .footer-pt {\n    display: block;\n}\n\nhtml[lang=\"es\"] .footer-es {\n    display: block;\n}\n\nhtml[lang=\"en\"] .footer-en {\n    display: block;\n}\n</style>\n<div class=\"footer-tm text-left\">\n<div class=\"row footer-es\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Acesso R&aacute;pido</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">Mis compras</a></li>\n\t<li><a href=\"../account/perfil\">Perfil</a></li>\n\t<li><a href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Soporte</a></li>\n\t<li><a href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibilidad</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>T&eacute;rminos y Pol&iacute;ticas</h3>\n\n<ul>\n\t<li><a href=\"../static/termos-de-uso\" target=\"_blank\">T&eacute;rminos de uso</a></li>\n\t<li><a href=\"../static/politica-de-compra\" target=\"_blank\">Pol&iacute;tica de Compra</a></li>\n\t<li><a href=\"https://privacy.ticketmaster.com.br/pt/cookie-policy\" target=\"_blank\">Pol&iacute;tica de Cookies</a></li>\n\t<li><a href=\"https://privacy.ticketmaster.com.br/pt/privacy-policy\" target=\"_blank\">Pol&iacute;tica de Privacidad</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Sobre a Ticketmaster</h3>\n\n<ul>\n\t<li><a href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Trabaje con nosotros</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row footer-pt\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Acesso R&aacute;pido</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">Minhas Compras</a></li>\n\t<li><a href=\"../account/perfil\">Meu Perfil</a></li>\n\t<li><a aria-label=\"Suporte ao Fã\" href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Suporte ao F&atilde;</a></li>\n\t<li><a aria-label=\"Acessibilidade\" href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibilidade</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Termos e Pol&iacute;ticas</h3>\n\n<ul>\n\t<li><a aria-label=\"Termos de Uso\" href=\"../static/termos-de-uso\" target=\"_blank\">Termos de Uso</a></li>\n\t<li><a aria-label=\"Política de Compra\" href=\"../static/politica-de-compra\" target=\"_blank\">Pol&iacute;tica de Compra</a></li>\n\t<li><a aria-label=\"Política de Cookies\" href=\"https://privacy.ticketmaster.com.br/pt/cookie-policy\" target=\"_blank\">Pol&iacute;tica de Cookies</a></li>\n\t<li><a aria-label=\"Política de Privacidade\" href=\"https://privacy.ticketmaster.com.br/pt/privacy-policy\" target=\"_blank\">Pol&iacute;tica de Privacidade</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Sobre a Ticketmaster</h3>\n\n<ul>\n\t<li><a aria-label=\"Ticketmaster Brasil\" href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a aria-label=\"Ticketmaster Internacional\" href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a aria-label=\"Trabalhe com a gente\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Trabalhe com a gente</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row footer-en\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Quick access</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">My purchases</a></li>\n\t<li><a href=\"../account/perfil\">My profile</a></li>\n\t<li><a aria-label=\"Suporte ao Fã\" href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Support</a></li>\n\t<li><a aria-label=\"Acessibilidade\" href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibility</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Terms and Policies</h3>\n\n<ul>\n\t<li><a aria-label=\"Termos de Uso\" href=\"https://www.ticketmaster.com.br/static/terms-of-use\" target=\"_blank\">Terms of Use</a></li>\n\t<li><a aria-label=\"Política de Compra\" href=\"https://www.ticketmaster.com.br/static/purchase-policy\" target=\"_blank\">Purchase Policy</a></li>\n\t<li><a aria-label=\"Política de Cookies\" href=\"https://privacy.ticketmaster.com.br/en/cookie-policy\" target=\"_blank\">Cookies Policy</a></li>\n\t<li><a aria-label=\"Política de Privacidade\" href=\"https://privacy.ticketmaster.com.br/en/privacy-policy\" target=\"_blank\">Privacy Policy</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>About Ticketmaster</h3>\n\n<ul>\n\t<li><a aria-label=\"Ticketmaster Brasil\" href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a aria-label=\"Ticketmaster Internacional\" href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a aria-label=\"Trabalhe com a gente\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Work with us</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\"><img alt=\"Ticketmaster logo\" class=\"logo\" src=\"https://cdn.boletius.com/ticketmaster/ticketmaster-logo_white.png\" /></div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 col-sm-6 foo-social\"><a aria-label=\"Instagram\" href=\"https://www.instagram.com/ticketmasterBR/\" target=\"_blank\"><img alt=\"Instagram\" src=\"https://cdn.boletius.com/images/1643379600508-instagram.png\" style=\"height: 16px;\" /></a> <a aria-label=\"Facebook\" href=\"https://www.facebook.com/ticketmasterbr\" target=\"_blank\"><img alt=\"\nfacebook\" src=\"https://cdn.boletius.com/images/1643379516372-facebook.png\" style=\"height: 16px;\" /></a> <a aria-label=\"LindedIn\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\"><img alt=\"Linkedin\" src=\"https://cdn.boletius.com/images/1643379625842-linkedin.png\" style=\"height: 16px;\" /></a> <a href=\"https://www.tiktok.com/@ticketmasterbr\" target=\"_blank\"><img alt=\"Tiktok\" aria-label=\"Tiktok\" src=\"https://cdn.getcrowder.com/images/1691588331940-null-l-tiktok.png\" style=\"height: 16px;\" /></a> <a href=\"https://blog.ticketmaster.com.br\" target=\"_blank\"><img alt=\"Blog\" aria-label=\"Blog Ticketmaster\" src=\"https://cdn.getcrowder.com/images/1683574125568-null-blog.png\" style=\"height: 16px;\" /></a></div>\n\n<div class=\"col-xs-12 col-sm-6 foo-copy\"><a class=\"ot-sdk-show-settings cookie-settings-btn\" id=\"ot-sdk-btn\">Cookie preferences&nbsp;&nbsp;</a>&copy; 2025&nbsp;Ticketmaster.</div>\n\n<div class=\"col-xs-12 col-sm-6 foo-copy\">\n<ul>\n\t<li>TICKETMASTER BRASIL LTDA - CNPJ 42.789.521/0001-10</li>\n\t<li>R. Bacaetava, n&ordm; 401, 7&ordm; andar, Vila Gertrudes, S&atilde;o Paulo/SP, CEP 04705-010</li>\n</ul>\n</div>\n</div>\n</div>","newEmailsEnabled":true,"showFooter":false,"featureTicketing":true,"customContactUsForRefund":"<div>Caso a sua compra esteja fora do prazo para cancelamento, não será possível prosseguir com a sua solicitação. Confira as regras de cancelamento acessando este link  <a href=\"https://help.ticketmaster.com.br/hc/pt-br/categories/10492807217809-Como-Cancelar-E-Informações-Sobre-Trocas\">https://help.ticketmaster.com.br/hc/pt-br/categories/10492807217809-Como-Cancelar-E-Informações-Sobre-Trocas </a> </div> </br>  <div> Porém, caso o seu pedido estiver dentro do prazo para reembolso e você precisar de auxilio, entre em contato com o suporte ao fã <a href=\"https://help.ticketmaster.com.br/hc/pt-br/requests/new?ticket_form_id=10146863301905\"> https://help.ticketmaster.com.br/hc/pt-br/requests/new?ticket_form_id=10146863301905 </a> </div>","menuCategories":[],"optInText":"Deixe-nos mantê-lo informado sobre o que está por vir – incluindo pré-vendas e ofertas exclusivas – por meios eletrônicos (por exemplo, e-mail, ferramentas de mensageria, redes sociais, etc.). Você sempre pode alterar a forma como entramos em contato com você por meio de sua conta Ticketmaster.","allowSendQuentroToCurrentUserEmail":true,"landingTemplateId":null,"cashlessRedirectUrl":"https://www.ticketmaster.com.br","lang":"pt","headline":"Ticketmaster","useCashless360":true,"favicon":"https://cdn.getcrowder.com/images/c1ade2d9-b2d1-484a-b163-0e5509e00144-favicon-32x32.png","showAssociatePurchaseButton":false,"showCategoriesOnMenu":false,"featureAutomaticRefund":true,"useFaceRecognition":true,"homeRedirect":null,"gatewaysByCountry":true,"featureSeasonPass":true,"alwaysShowDeliveryMethod":false,"requireBillingAddress":true,"featurePaymentVerificationMP":true,"reCaptchaProvider":"CLOUDFLARE_TURNSTILE","skipCalendarReport":"12063","reCaptchaPublicKey":"0x4AAAAAAAhbw3CJuC34pXu4","featureCashless":true,"isReCaptcha":false,"isCloudflareTurnstile":true,"homeComponents":[],"widgetComponents":[{"id":"component-deb9edf8-aa2f-43b6-9892-c21a656f664c","widgetType":"SearchBar","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"home-section-search","containerAppearance":"centered","backgroundColor":"#024DDF","titleColor":"","paragraphColor":"","linkColor":""}},"version":1},{"id":"component-8de0f9b9-5ff6-405d-aebf-f2a878820026","widgetType":"Slider","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"home-section-banners","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"sliderType":"with-content","sliderItems":[{"title":"Louis Tomlinson: How Did We Get Here? Latin American Tour","line1":"06 e 07 de Abril de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/louis-tomlinson","imgUrl":"https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif"},{"title":"Djavan: Djavanear 50 anos - Só Sucessos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/djavan","imgUrl":"https://cdn.getcrowder.com/images/6e7db1d2-8618-4c42-868d-c96804e6c186-djavanhome1920x720.gif"},{"title":"aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -","line1":"04 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/aespa","imgUrl":"https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif"},{"title":"Rock in Rio 2026","line1":"4, 5, 6, 7, 11, 12, 13 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/rockinrio","imgUrl":"https://cdn.getcrowder.com/images/159b1a9c-0823-480f-a458-e7286dd123e3-rir-banner.gif"},{"title":"Martinho da Vila & Mart´Nália | Pai e Filha","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/martinho-da-vila-martnalia-pai-e-filha","imgUrl":"https://cdn.getcrowder.com/images/e7084c8a-0bd9-4bf1-8419-56d2bd03ace7-martinhomartnalia.gif"},{"title":"Tiago Iorc - Turnê Troco Likes 10 Anos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/tiago-iorc","imgUrl":"https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif"},{"title":"UTS Rio 2026","line1":"16, 17 e 18 de Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/uts-rio-2026-br","imgUrl":"https://cdn.getcrowder.com/images/6642cbeb-8b3c-4658-b893-d9fd554513ee-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif"},{"title":"Xande de Pilares & Revelação: Tava Escrito – O Reencontro Histórico","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/revelacao-e-xande-de-pilares","imgUrl":"https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif"},{"title":"KAROL G: Viajando Por El Mundo Tropitour","line1":"12 de Fevereiro de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/karol-g","imgUrl":"https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif"},{"title":"Cê Ta Doido Festival - São Paulo - 17/10/2026 - Venda Geral","line1":"17 de Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ce-ta-doido-festival-sao-paulo","imgUrl":"https://cdn.getcrowder.com/images/ac9ca75d-8d54-4dd3-a2f6-1c8d65f4c896-867700cf-1f68-446e-a177-e59bb34efad5-tamanhookctdlanding1920x720-1.gif"},{"title":"Kid Abelha: Eu Tive Um Sonho","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/kid-abelha","imgUrl":"https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif"},{"title":"Harry Styles: Together, Together","line1":"Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/harry-styles","imgUrl":"https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif"},{"title":"Lollapalooza Brasil 2027","line1":"19, 20 e 21 de Março de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/lollapaloozabr","imgUrl":"https://cdn.getcrowder.com/images/94d86cbd-f320-46cd-9bf7-5dc2d753be22-tmbannerhomeprevendagerallollaloversjn1004v4.gif"},{"title":"Suhai Festival Interlagos 2026","line1":"Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/suhai-festival-de-interlagos-2026","imgUrl":"https://cdn.getcrowder.com/images/f8a817b8-e11c-427a-b879-c9c2dc8b87bd-1920x720-geral-4.png"},{"title":"CA7RIEL & Paco Amoroso: Free Spirits World Tour","line1":"Novembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ca7riel-e-paco-amoroso","imgUrl":"https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif"}],"dynamicContent":{"entityType":"event","listName":"sliderItems","data":{"config":{"max":15,"offset":0,"sort":"groupPriority","order":"asc"},"idGroup":"49"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"CUSTOM","value":""},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}}},"version":1},{"id":"component-561b5126-b4df-4a6f-ae06-ee7e82983601","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Experiências"},"config":{"customClass":"standard_card","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{},"cards":[{"title":"Toy Story Ao Infinito e Além: A Exposição","content":"","line1":"São Paulo | Múltiplas datas","label":"Shopping Cidade São Paulo","buttonText":"Confira","link":"https://www.ticketmaster.com.br/event/toy-story","imgUrl":"https://cdn.getcrowder.com/images/1ac7115f-2ecf-4e77-b30e-6157da28df58-tm1920x720toy-storybanner.gif","moveTimestamp":1776892736918},{"title":"Manti Wine Sessions","content":"","imgUrl":"https://cdn.getcrowder.com/images/2c1b6a2a-bc21-4fbd-9271-2a0732e22630-d04cea4e-f11b-474b-81eb-36a1b6c70064-banner-festival-lineup-01.png","link":"https://www.ticketmaster.com.br/event/manti-wine-sessions","buttonText":"Confira","line1":"Mogi Guaçu | 5 e 6 de Junho","moveTimestamp":1776892738628,"label":"Autódromo Velocitta"},{"title":"Coliseu: Exposição Imersiva","content":"","line1":"São Paulo | Múltiplas datas","imgUrl":"https://cdn.getcrowder.com/images/1f3b94ac-cf23-42ce-b33b-6827cf0df9b1-d7da5bd7-47ef-433c-89fb-48df06995792-1920x720-35.jpg","label":"Shopping Vila Olímpia","link":"https://www.ticketmaster.com.br/event/coliseu-exposicao-imersiva","buttonText":"Confira","moveTimestamp":1777498876163},{"title":"Hot Wheels City Experience","content":"","imgUrl":"https://cdn.getcrowder.com/images/50d7ab6d-afa0-4f13-baa5-e1a981f45018-8a55eb4f-8102-4b3e-96a6-b87aa0b8afcc-banner-header-1.png","line1":"Campinas | Múltiplas datas","label":"Shopping Iguatemi Campinas","link":"https://www.ticketmaster.com.br/event/hotwheelscityexperience-campinas","buttonText":"Confira","moveTimestamp":1777498876163},{"title":"Casa Warner","content":"","imgUrl":"https://cdn.getcrowder.com/images/c4c8fdf3-7285-4d69-a018-86a0d5567ca4-d6d683c0-b89e-49c4-9bbf-595a5608ee7c-bannerticketmaster1920x720-1-1.png","line1":"Brasília | Múltiplas datas","line2":"","label":"ParkShopping Brasília","buttonText":"Confira","link":"https://www.ticketmaster.com.br/event/casa-warner-brasllia","moveTimestamp":1777498847969},{"title":"Roda Rico","content":"","imgUrl":"https://cdn.getcrowder.com/images/5b6a690e-d331-4a2f-b01d-b40745b1dcf5-banner-1-passeio.jpg","label":"Parque Cândido Portinari","line1":"São Paulo | Múltiplas datas","link":"https://www.ticketmaster.com.br/event/roda-rico","buttonText":"Confira","moveTimestamp":1777498847969},{"title":"São Paulo Oktoberfest 2026","content":"","imgUrl":"https://cdn.getcrowder.com/images/907c8212-ec27-4c46-9ae8-da188e953846-46da159a-b35e-48c9-a2de-188d5026f079-nova-full-banner---pgina-do-evento.png","line1":"São Paulo | Múltiplas datas","label":"Parque Ibirapuera","link":"https://www.ticketmaster.com.br/event/sao-paulo-oktoberfest","buttonText":"Confira","moveTimestamp":1777498845531},{"title":"Sampa Sky","content":"","imgUrl":"https://cdn.getcrowder.com/images/012db2c8-a361-40f9-a20f-11cd4972bbfb-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif","line1":"São Paulo | Múltiplas datas","label":"Mirante do Vale","buttonText":"Confira","moveTimestamp":1777498843288,"link":"https://www.ticketmaster.com.br/event/sampasky"},{"title":"Henry & Klauss: Master of Magic","content":"","imgUrl":"https://cdn.getcrowder.com/images/e176f4e3-954e-4b32-84f9-b8f2f7f15108-ab787e46-7ec8-4ae8-bb7b-5de648821c11-henryclausslanding1920x720.gif","link":"https://www.ticketmaster.com.br/event/henry-e-klauss","buttonText":"Confira","label":"Teatro VillaLobos","line1":"São Paulo | Múltiplas datas","moveTimestamp":1777989403034},{"title":"Vinhos de Portugal","content":"","moveTimestamp":1777989403034,"imgUrl":"https://cdn.getcrowder.com/images/39d0d80d-ab98-4d32-b233-dfdef02c2427-2e9c5d8e-3dfe-400f-b638-7aedf5c521d4-banner-genrico-1920x720-landing-page-v4.jpg.jpg","line1":"Múltiplas cidades | Múltiplas datas","label":"Múltiplas cidades","link":"https://www.ticketmaster.com.br/event/vinhos-de-portugal","buttonText":"Confira"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/familia","buttonText":"Ver mais"}},"version":1},{"id":"component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Esportes"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{},"cards":[{"title":"TCB","content":"","imgUrl":"https://cdn.getcrowder.com/images/f2b7d863-ec99-4abc-a961-0fa85306853a-62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.webp","link":"https://www.ticketmaster.com.br/event/tcb","label":"Múltiplas cidades","line1":"Múltiplas cidades | De 09 a 31 de Maio","buttonText":"Confira","openInNewTab":true,"moveTimestamp":1778710352415},{"title":"VNL – Volleyball Nations League","content":"","imgUrl":"https://cdn.getcrowder.com/images/c7347f5f-b458-41b5-80c7-16e552b4eb04-f51e4f2c-5e60-4458-b602-3bea125be567-banneroptimized.jpg","label":"Arena Nilson Nelson","line1":"Brasília | 03 a 14 de Junho","link":"https://www.ticketmaster.com.br/event/volleyball-nations-league-2026","buttonText":"Confira","openInNewTab":true,"moveTimestamp":1778710619038},{"title":"UTS Rio 2026","content":"","label":"Maracanãzinho","link":"https://www.ticketmaster.com.br/event/uts-rio-2026-br","imgUrl":"https://cdn.getcrowder.com/images/222f00a2-40b7-49b1-9da3-eda48e9dae5d-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif","line1":"Rio de Janeiro | 16, 17 e 18 de Julho","openInNewTab":true,"buttonText":"Confira","moveTimestamp":1778710619038},{"title":"College Football","content":"","imgUrl":"https://cdn.getcrowder.com/images/d9e7c8eb-ce71-4aa4-ba29-455f61dacfc1-8a1fdb11-766a-4096-a3ee-50f5cb2f7beb-2118c256-a58c-4f92-b1be-9176bb9d5d16-college-football-01.webp","line1":"Rio de Janeiro | 29 de Agosto","link":"https://www.ticketmaster.com.br/event/college-football","buttonText":"Confira","openInNewTab":true,"label":"Estádio Nilton Santos","moveTimestamp":1778710616743},{"title":"NBA House 2026","content":"","imgUrl":"https://cdn.getcrowder.com/images/6cd2a0e4-edc1-4d87-915c-6b7f1769138d-9af580c4-8e9b-4b9f-8662-b4a6958ff448-img3756.webp","line1":"São Paulo | Múltiplas datas","link":"https://www.ticketmaster.com.br/event/nbahouse","buttonText":"Confira","openInNewTab":true,"label":"Shopping Eldorado","moveTimestamp":1778710615228}]},"version":1},{"id":"component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | São Paulo e Região"},"config":{"customClass":"main_card","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":12,"offset":0,"sort":"startDate","order":"asc"},"idGroup":"48"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Daniel - Tokio Marine Hall - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/daniel-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/bd845f76-6b61-4aa3-9271-72af00075816-1920x720-40.jpg"},{"title":"Fábio Jr. - São Paulo - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Suhai Music Hall","buttonText":"Comprar","link":"../event/fabio-jr-suhai-music-hall","imgUrl":"https://cdn.getcrowder.com/images/e06995a8-5120-40f1-ad9e-b60b5854a6d8-dfd46c0a-6bda-4f69-8331-2f93e1391c8b-fabiojr---full-banner---pgina-do-evento-1920x720.jpg"},{"title":"Rolex 6 Horas de São Paulo","line1":"10, 11 e 12 de Julho de 2026","line2":"","label":"Autódromo de Interlagos","buttonText":"Comprar","link":"../event/fiawecsaopaulo","imgUrl":"https://cdn.getcrowder.com/images/aee6ec6f-4910-4c80-b6b7-9ad430bb0a30-b70d4f87-1629-4386-ba74-de47fac821c2-bannernormalhome.gif"},{"title":"Eagle-Eye Cherry - Tokio Marine Hall - 25/07/2026","line1":"25 de Julho de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/eagle-eye-cherry-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/e2415d08-420c-4232-9759-c9301a04cd4f-1920x720-27.jpg"},{"title":"Di Ferrero - São Caetano do Sul - 08/08/2026","line1":"8 de Agosto de 2026","line2":"","label":"Multiplan Hall Park Shopping São Caetano","buttonText":"Comprar","link":"../event/di-ferrero-sao-caetano-do-sul","imgUrl":"https://cdn.getcrowder.com/images/199e136d-b3d6-4e05-9fbf-b735995b57e5-full-banner---1920x720-3-1.jpg"},{"title":"SP2B - São Paulo Beyond Business","line1":"09 a 16 de Agosto de 2026","line2":"","label":"Parque Ibirapuera","buttonText":"Comprar","link":"../event/sp2b","imgUrl":"https://cdn.getcrowder.com/images/95b64470-0efa-4b6f-8931-175908a74b90-747ae47d-25f7-44e9-984e-c16f1144036f-landing-ticket-master-01.jpg"},{"title":"This is Michael - São Paulo - 29/08/2026","line1":"29 de Agosto de 2026","line2":"","label":"Suhai Music Hall","buttonText":"Comprar","link":"../event/this-is-michael-suhai-music-hall","imgUrl":"https://cdn.getcrowder.com/images/7d2c19a8-e584-4b61-b226-7ee388936141-this-is-michael---full-banner---home-site-1920x720-1.jpg"},{"title":"Angra - Tokio Marine Hall","line1":"02 e 03 de Outubro de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/angra-tokio-marine","imgUrl":"https://cdn.getcrowder.com/images/42044fb3-056c-4cfd-a391-fa85b6e93eb7-794f3d80-476f-4388-aff3-0bd2771a0dd3-1920x720.jpg"},{"title":"The Cat Empire - São Paulo - 12/11/2026","line1":"12 de Novembro de 2026","line2":"","label":"Audio","buttonText":"Comprar","link":"../event/the-cat-empire-na-audio-sp","imgUrl":"https://cdn.getcrowder.com/images/10b2eb96-6ebe-41f8-a7f4-1f8b8834e4b2-d561beeb-1532-46db-8cf5-c91924eab7ff-01fullbanner-2-1.png"},{"title":"Carol Biazin - Ribeirão Preto - 22/08/2026","line1":"22 de Agosto de 2026","line2":"","label":"Multiplan Hall Ribeirão Shopping","buttonText":"Comprar","link":"../event/carol-biazin-ribeirao-preto","imgUrl":"https://cdn.getcrowder.com/images/3c6c4259-1210-47ed-8bbb-37d5a28e00e9-1920x720-5.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/sp","openInNewTab":"true","buttonText":"Ver mais"}},"version":1},{"id":"component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | Rio de Janeiro"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":10,"offset":0,"sort":"startDate","order":"asc"},"idGroup":"47"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Nubya Garcia | Queremos! - Rio de Janeiro","line1":"02 de Junho de 2026","line2":"","label":"Manouche","buttonText":"Comprar","link":"../event/nubya-garcia-queremos-no-manouche-rj-1","imgUrl":"https://cdn.getcrowder.com/images/69cdf03f-3c80-4fb1-a5b1-6bb08c453c81-7fab0877-a90c-4ea7-a0a5-2f25ee304e77-nubyagarciarj01fullbanner.jpg"},{"title":"Anavitória - Rio de Janeiro - 05/06/2026","line1":"05 de Junho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/anavitoria-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/0766f8be-3784-4564-b9bf-a71f09d8ed02-tkm---1920x720-1.png"},{"title":"Chico Chico no Qualistage - RJ - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/chico-chico-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/18b6281b-de5e-4ffc-b985-f53cd94e1afe-1920x720-3-1.png"},{"title":"Rodrigo Teaser no Qualistage - RJ - Data Extra - 12/07/2026","line1":"14 de Junho e 12 de Julho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/rodrigo-teaser-no-qualistage-rj-dataextra","imgUrl":"https://cdn.getcrowder.com/images/4f778cce-a524-4070-99eb-96336b62ecbe-1920x720-6-1.png"},{"title":"Ludmilla - Qualistage - RJ - 23/07/2026","line1":"23 de Julho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/ludmilla-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/51a79a5e-7bf2-43b9-9bca-e5cac3612745-1920x720-5-1.png"},{"title":"João Bosco no Qualistage - RJ - 08/08/2026","line1":"08 de Agosto de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/joao-bosco-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/392b6f40-44f7-48d5-bed2-fc7cd730f609-full-banner---1920x720-1.png"},{"title":"Daniel Boaventura - Qualistage - RJ - 28/08/2026","line1":"28 de Agosto de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/daniel-boaventura-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/47eb8c9c-571d-4997-b74e-02742064124f-1920x720-2.jpg"},{"title":"Joshua Redman | Queremos! - Rio de Janeiro - 30/09/2026","line1":"30 de Setembro de 2026","line2":"","label":"Vivo Rio","buttonText":"Comprar","link":"../event/joshua-redman-queremos-no-vivo-rio-rj","imgUrl":"https://cdn.getcrowder.com/images/8380f217-6cd4-4108-b4eb-feaa1d011c7f-872c6fcc-46fd-4658-9fe8-7f08f95dc3b1-01fullbannereffect.jpg"},{"title":"Whinderson Nunes no Qualistage - RJ - 18/10/2026","line1":"18 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/whinderson-nunes-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png"},{"title":"Oswaldo Montenegro no Qualistage - RJ - 24/10/2026","line1":"24 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/oswaldo-montenegro-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/d740dc02-8a26-4229-9015-206b6660ec02-1920x720-1-1.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/rj","buttonText":"Ver mais"}},"version":1},{"id":"component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | Demais cidades"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":239},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.address.city"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"TCB","line1":"30 de 31 de Maio de 2026","line2":"","label":"São José","buttonText":"Comprar","link":"../event/tcb","imgUrl":"https://cdn.getcrowder.com/images/62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.png"},{"title":"João Bosco - Juiz de Fora - 26/06/2026","line1":"26 de Junho de 2026","line2":"","label":"Juiz de Fora","buttonText":"Comprar","link":"../event/joao-bosco-juiz-de-fora","imgUrl":"https://cdn.getcrowder.com/images/fcfc7e88-ed93-4388-a7ac-4925a788a6e2-60f85ca1-8bbc-4363-bff0-f0697abf519e-whatsapp-image-2026-02-27-at-14.48.14.jpg"},{"title":"DVL Rock Festival - Cascavel - 19/07/2026","line1":"19 de Julho de 2026","line2":"","label":"Cascavel","buttonText":"Comprar","link":"../event/dvl-rock-festival","imgUrl":"https://cdn.getcrowder.com/images/8d92b5b8-ff79-4149-bb48-dec03e23d8f4-4bf3f22d-0ebc-48f2-85b3-f1d36aae1aa1-whatsapp-image-2026-03-10-at-11.29.42-1.jpg"},{"title":"Nazareth - Celebrando 55 Anos - Belo Horizonte","line1":"24 de Julho de 2026","line2":"","label":"Belo Horizonte","buttonText":"Comprar","link":"../event/nazareth-celebrando-55-anos","imgUrl":"https://cdn.getcrowder.com/images/92ddb5a4-83e2-45e1-982f-5083441cd591-cac2a353-1e62-4e5c-a84f-72348192de2c-1920x720-nazareth-min.png"},{"title":"Sticky Fingers - Curitiba - 08/08/2026 - Venda Geral","line1":"08 de Agosto de 2026","line2":"","label":"Curitiba","buttonText":"Comprar","link":"../event/sticky-fingers-curitiba","imgUrl":"https://cdn.getcrowder.com/images/39b452ca-67b5-4817-9c6f-f896e0ed10f7-d733e449-58e9-4928-94af-ae92b3e15afe-stfilanding1920x720-2-1.gif"}]},"version":1},{"id":"component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Espetáculos, Teatro & Comédia 🎭"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":214},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Murilo Couto: Novo Show - Rio de Janeiro - 28/05/2026","line1":"28 de Maio de 2026","line2":"","label":"Teatro da Ilha","buttonText":"Comprar","link":"../event/murilo-couto-novo-show-teatro-da-ilha","imgUrl":"https://cdn.getcrowder.com/images/a6faecf0-53ff-4175-bbef-f68587fed41e-whatsapp-image-2026-03-27-at-07.37.38-2.jpeg"},{"title":"O Mágico de Oz - São Paulo","line1":"8 de Março a 02 de Agosto de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/o-magico-de-oz-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/23fc8da4-c804-471c-a787-04f09494ffc8-tmgrid1920x720-1.png"},{"title":"Vindos de Longe - São Paulo","line1":"26 de Junho a 02 de Agosto de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/vindos-de-longe-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/1884ffb1-8a67-4bbe-9675-af343cc5e063-cfabanner1920x720-3.jpg"},{"title":"Elton John Diamonds - São Paulo","line1":"04, 11, 18 e 25 de Setembro de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/elton-john-diamonds-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/86fe488e-0a3c-4b30-9ddf-890cd37f775a-1920-x720-ticketmaster-copy.jpg"},{"title":"Whinderson Nunes no Qualistage - RJ - 18/10/2026","line1":"18 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/whinderson-nunes-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/teatro","buttonText":"Ver mais"}},"version":1},{"id":"component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Última chance"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":180},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Martinho da Vila & Mart´Nália | Pai e Filha - Rio de Janeiro - 30/05/2026","line1":"30 de Maio de 2026","line2":"","label":"Vivo Rio","buttonText":"Comprar","link":"../event/martinho-da-vila-martnalia-pai-e-filha-rio-de-janeiro","imgUrl":"https://cdn.getcrowder.com/images/224fc7bf-f63f-4c3e-953b-df956554b9df-5f364237-e809-4991-8a5c-057dc23a3fdb-1920x720-color.jpg"},{"title":"Lenine - Tokio Marine Hall - 30/05/2026","line1":"30 de Maio de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/lenine-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/38fdd9b6-2187-4c30-b3a0-9859e7cc7385-1920x720-33.jpg"},{"title":"School of Rock Jardins - São Paulo - 31/05/2026","line1":"31 de Maio de 2026","line2":"","label":"The Cavern Club","buttonText":"Comprar","link":"../event/school-of-rock-jardins-the-cavern-club","imgUrl":"https://cdn.getcrowder.com/images/27999fcf-3346-406a-b044-b268858cd6c4-1920x720-4-1-1.png"},{"title":"Nubya Garcia | Queremos! - São Paulo","line1":"03 de Junho de 2026","line2":"","label":"Casa Natura Musical","buttonText":"Comprar","link":"../event/nubya-garcia-queremos-na-casa-natura-sp","imgUrl":"https://cdn.getcrowder.com/images/be678cc0-0b1a-40dd-a3b8-774fceb11b13-39d2352f-6b3c-45d6-997a-a9617459c367-nubyagarciasp01fullbanner.jpg"},{"title":"Manti Wine Sessions - Autódromo Velocitta - 05 e 06/06/2026","line1":"5 e 6 de Junho de 2026","line2":"","label":"Autodromo Velocitta","buttonText":"Comprar","link":"../event/manti-wine-sessions","imgUrl":"https://cdn.getcrowder.com/images/0774ea2c-ffa8-4d78-ae37-1f9b2fb5da50-fc28420b-5767-4f1c-b64a-70a386e338cb-banner-festival-07.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/ultima-chance","buttonText":"Ver mais"}},"version":1},{"id":"component-7c09ae95-6c05-4749-ae88-d80f672878ec","widgetType":"Grid","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"tm-banner","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":2},"cards":[{"title":"Experiências premium","content":"","imgUrl":"https://cdn.getcrowder.com/images/f8289d25-28f8-4cbc-98c2-9eff8e763131-experienciaspremium1920x720v1.png","link":"https://www.ticketmaster.com.br/event/experiencias","buttonText":""},{"title":"Rock in Rio","content":"","link":"https://www.ticketmaster.com.br/event/rockinrio","imgUrl":"https://cdn.getcrowder.com/images/5d9b5105-c271-4878-8621-bfdbfd799ae7-rir-banner.gif"}]},"version":1},{"id":"component-d54e1b4b-6476-42ea-a1ca-67b8066850e4","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Grandes eventos"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":15,"offset":0,"sort":"startDate","order":"asc"},"idGroup":33},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"CUSTOM","value":""},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"ENHYPEN WORLD TOUR 'BLOOD SAGA'","line1":"04 de Julho 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/enhypen","imgUrl":"https://cdn.getcrowder.com/images/225e53b3-94d4-4af5-a270-e76521098746-enhypen1920x720px.gif"},{"title":"Harry Styles: Together, Together","line1":"Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/harry-styles","imgUrl":"https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif"},{"title":"Rosalía: Lux Tour 2026","line1":"10 e 11 de Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/rosalia","imgUrl":"https://cdn.getcrowder.com/images/cddb5541-b857-4993-ac09-fc0cb0681cc9-tmgrid1920x720home.gif"},{"title":"Sticky Fingers: Live in Latin America 2026","line1":"Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/sticky-fingers","imgUrl":"https://cdn.getcrowder.com/images/aa70f3dd-82e4-45b0-9e06-d1f861c21ea3-stickyyy.gif"},{"title":"aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -","line1":"04 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/aespa","imgUrl":"https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif"},{"title":"5 Seconds Of Summer: Everyone's A Star World Tour","line1":"São Paulo e Belo Horizonte","line2":"","label":"","buttonText":"Comprar","link":"../event/5sos","imgUrl":"https://cdn.getcrowder.com/images/6e1091bc-9b40-4fb1-8dec-c69897d27d7a-5sos1920x720home.gif"},{"title":"ZAYN: The Konnakol Tour","line1":"Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/zayn","imgUrl":"https://cdn.getcrowder.com/images/e9e30072-c0e5-4b28-8577-0ce19cba6e3b-zayn1920x720home.gif"},{"title":"Kid Abelha: Eu Tive Um Sonho","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/kid-abelha","imgUrl":"https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif"},{"title":"BTS WORLD TOUR ARIRANG","line1":"28, 30 e 31 de Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/bts-world-tour-arirang","imgUrl":"https://cdn.getcrowder.com/images/f862039e-2a11-4acc-a59e-be51a2fd10b4-bts1920x720home.gif"},{"title":"Djavan: Djavanear 50 anos - Só Sucessos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/djavan3","imgUrl":"https://cdn.getcrowder.com/images/99dd624b-8290-4115-8308-9ecf331a4aba-djavanhome1920x720.gif"},{"title":"CA7RIEL & Paco Amoroso: Free Spirits World Tour","line1":"Novembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ca7riel-e-paco-amoroso","imgUrl":"https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif"},{"title":"KAROL G: Viajando Por El Mundo Tropitour","line1":"12 de Fevereiro de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/karol-g","imgUrl":"https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif"},{"title":"Louis Tomlinson: How Did We Get Here? Latin American Tour","line1":"06 e 07 de Abril de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/louis-tomlinson","imgUrl":"https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif"},{"title":"Xande de Pilares & Revelação: Tava Escrito – O Reencontro Histórico","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/revelacao-e-xande-de-pilares","imgUrl":"https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif"},{"title":"Tiago Iorc - Turnê Troco Likes 10 Anos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/tiago-iorc","imgUrl":"https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif"}]},"version":1},{"id":"component-cc33c46c-eccc-486a-b11b-d857cbb2773b","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Locais"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"vertical","cardsPerRow":4},"cards":[{"title":"Roda Rico","content":"","imgUrl":"https://cdn.getcrowder.com/images/e81f737d-15f6-4ce9-a47a-9e48455bc86e-banner-1-passeio.jpg","link":"https://www.ticketmaster.com.br/event/roda-rico","buttonText":"Comprar"},{"title":"Sampa Sky","content":"","imgUrl":"https://cdn.getcrowder.com/images/78be3784-bd99-4939-ae86-4ac5c5474e48-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif","link":"https://www.ticketmaster.com.br/event/sampasky","buttonText":"Comprar"},{"title":"Zoo São Paulo","content":"","imgUrl":"https://cdn.getcrowder.com/images/fae56cc7-2eed-4b41-8553-902eecfd9f06-zoo1920.png","link":"https://www.ticketmaster.com.br/event/zoo-sao-paulo","buttonText":"Comprar"},{"title":"Jardim Botânico","content":"","imgUrl":"https://cdn.getcrowder.com/images/7f1e0a9d-59ca-4d46-b4fd-89953cbbe0ae-jardimbotanico1920x720.gif","link":"https://www.ticketmaster.com.br/event/jardim-botanico-sp","buttonText":"Comprar"}]},"version":1},{"id":"component-1f9fe5af-ff0e-4368-86ca-03921f2eec10","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Casas"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"vertical","cardsPerRow":4},"cards":[{"title":"The Cavern Club","content":"","imgUrl":"https://cdn.getcrowder.com/images/6a4b1b3e-b0b2-4d97-9204-038afd35b19e-bannerticketmastercavern1920x720.jpg","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"link":"https://www.ticketmaster.com.br/page/the-cavern-club","buttonText":"Confira","moveTimestamp":1760986847851},{"title":"Multiplan Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/5190afb5-ce64-464c-94fa-1a737d0d67a0-multiplan-sao-caetano.png","link":"https://www.ticketmaster.com.br/page/multiplan-hall-saocaetano","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"ParkShopping São Caetano"}]}]},"md":{"result":"ParkShopping São Caetano","warnings":{}}},"moveTimestamp":1760986847851},{"title":"Multiplan Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/84240362-9467-48aa-a8e6-0dda63a962df-multiplan-ribeirao.png","link":"https://www.ticketmaster.com.br/page/multiplan-hall-ribeirao","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"RibeirãoShopping"}]}]},"md":{"result":"RibeirãoShopping","warnings":{}}},"moveTimestamp":1760986846283},{"title":"Qualistage","content":"","imgUrl":"https://cdn.getcrowder.com/images/d93f9bb8-c0b0-4917-91d2-f7820786f700-quali.png","link":"https://www.ticketmaster.com.br/page/qualistage","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Rio de Janeiro"}]}]},"md":{"result":"Rio de Janeiro","warnings":{}}},"moveTimestamp":1760986844621},{"title":"Suhai Music Hall","content":"","link":"https://www.ticketmaster.com.br/page/suhai-music-hall","buttonText":"Confira","imgUrl":"https://cdn.getcrowder.com/images/494e6ac2-9cef-4d2d-bc5a-79f66e87ac5a-50feed0e-7d50-4a49-973b-62ca827e19f4-banneroptimizedv2.webp","moveTimestamp":1774997432897,"description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}}},{"title":"Teatro da Ilha","content":"","moveTimestamp":1774997432897,"imgUrl":"https://cdn.getcrowder.com/images/310ad4f9-fdac-48f6-a4ef-1d31c862733f-capaticketmasteroptimized.jpg","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Rio de Janeiro"}]}]},"md":{"result":"Rio de Janeiro","warnings":{}}},"link":"https://www.ticketmaster.com.br/page/teatrodailha","buttonText":"Confira"},{"title":"Teatro Ruth Escobar","content":"","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"buttonText":"Confira","link":"https://www.ticketmaster.com.br/page/teatroruthescobar","imgUrl":"https://cdn.getcrowder.com/images/c46c533e-e7ff-4a94-906f-978925f500e8-a5069e88-9e23-4db2-87ad-703562eb98b9-1920x720-teatro-ruth-escobar-2-2.png","moveTimestamp":1774997431758},{"title":"Tokio Marine Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/15f8f90e-b6be-43d8-99e1-32090242da8a-tokio.webp","link":"https://www.ticketmaster.com.br/page/tokio-marine-hall","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"moveTimestamp":1774997401682}]},"version":1},{"id":"component-a7bb9492-891f-4d01-a218-6a26931b1473","widgetType":"Html","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"","containerAppearance":"centered","backgroundColor":"#024ddf","titleColor":"#ffff","paragraphColor":"","linkColor":""},"html":"<div class=\"tm-suscribe\">\n    <div style=\"font-size:1.5em; font-weight:600; color:#fff; margin-bottom:10px\">Inscreva-se para saber as novidades</div>\n    <iframe allow=\"autoplay\" title=\"Inscreva-se para saber as novidades\"\n        sandbox=\"allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-popups-to-escape-sandbox\"\n        id=\"pD2hFh\" class=\"embed_frame\" loading=\"lazy\" src=\"https://m.cmpgn.page/pD2hFh?embed=3\"\n        style=\"border:none;min-width:100%;height:168px\" allowpaymentrequest=\"\" allowfullscreen=\"\"\n        data-hj-allow-iframe=\"\"></iframe>\n</div>"},"version":1},{"id":"component-e63baadf-23ef-4018-8721-2ab8b18684a1","widgetType":"Image","state":{"enabled":true,"header":{"title":"Seu evento na ticketmaster- Saiba mais"},"config":{"customClass":"tm-banner","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"htmlUrl":"https://cdn.getcrowder.com/images/1a9c53c8-d1ef-48cb-b6be-0e4f496519f6-tmb2bdesktop-2.gif","mobileUrl":"https://cdn.getcrowder.com/images/a1d1d213-be80-4fa2-ae0d-092f424cdb52-tmb2bmobile-2.gif","linkControl":{"haveLink":true,"haveLinkUrl":"https://business.ticketmaster.com.br/pt/"}},"version":1}],"cmsMenuOptions":[],"cmsPageHeader":{"id":"4320ff4f-d648-4eb3-a1f5-d18534ddc0eb","enabled":false,"html":"<div class=\"sector-pre-header horizontal-container navbar-container bg-black\">\n    <div class=\"\">\n        <img src=\"https://cdn.getcrowder.com/images/e0531a24-a002-4ece-95b7-a4f8a195afcf-logo-br-1.png\" alt=\"\"\n            width=\"20px\">\n        <span>\n            BR\n        </span>\n        <!-- Modal -->\n        <div class=\"modal fade\" id=\"country-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\"\n            data-backdrop=\"static\">\n            <div class=\"country-modal-dialog\">\n                <div class=\"modal-content\" style=\"color: black;\">\n                    <a href=\"javascript:void(0);\"\n                        onclick=\"var element = document.getElementById('country-modal'); element.style.display = 'none'; element.style.opacity = 0;\">X</a>\n                    <div>\n                        Location\n                    </div>\n                    <div> Perú\n                    </div>\n                    <div>\n                        Lima\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"\">\n        <div class=\"menu\">\n            <a href=\"https://business.ticketmaster.pe/trabaja-con-nosotros/\">\n                <img src=\"https://cdn.getcrowder.com/images/9dda0dde-b9d3-4947-8c22-cc081358c0b2-shoppingbag.png\" alt=\"\"\n                    width=\"20px\">\n                <span>\n                    Venda \n                </span>\n                <span class=\"hidden-xs\">\n                    conosco\n                </span>\n            </a>\n            <a href=\"https://help.ticketmaster.com.br/hc/pt-br\">\n                Suporte\n            </a>\n        </div>\n    </div>\n</div>"}},"locale":"pt","simpleLocale":"pt","envConfig":{"root":"","environment":"production","staticDomain":"cdn.boletius.com","apiPath":"https://public.getcrowder.com/","dataAdapterConfig":{"host":"public.getcrowder.com","protocol":"https"},"version":"dev"},"title":"Ticketmaster Brasil - Ticketmaster","properties":[{"name":"og:image","value":"https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png"},{"name":"og:title","value":"Ticketmaster"},{"name":"og:description","value":"Ticketmaster"},{"name":"og:url","value":"https://www.ticketmaster.com.br"},{"name":"og:site_name","value":"Ticketmaster Brasil"},{"name":"og:type","value":"website"},{"name":"fb:app_id"}],"additionalMeta":[{"name":"description","value":"Ticketmaster"},{"name":"twitter:card","value":"summary_large_image"},{"name":"twitter:title","value":"Ticketmaster"},{"name":"twitter:description","value":"Ticketmaster"},{"name":"twitter:img:src","value":"https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png"}],"hasSlider":true,"videoComponents":[],"countdownComponents":[],"cmsPageHeader":{"id":"4320ff4f-d648-4eb3-a1f5-d18534ddc0eb","enabled":false,"html":"<div class=\"sector-pre-header horizontal-container navbar-container bg-black\">\n    <div class=\"\">\n        <img src=\"https://cdn.getcrowder.com/images/e0531a24-a002-4ece-95b7-a4f8a195afcf-logo-br-1.png\" alt=\"\"\n            width=\"20px\">\n        <span>\n            BR\n        </span>\n        <!-- Modal -->\n        <div class=\"modal fade\" id=\"country-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\"\n            data-backdrop=\"static\">\n            <div class=\"country-modal-dialog\">\n                <div class=\"modal-content\" style=\"color: black;\">\n                    <a href=\"javascript:void(0);\"\n                        onclick=\"var element = document.getElementById('country-modal'); element.style.display = 'none'; element.style.opacity = 0;\">X</a>\n                    <div>\n                        Location\n                    </div>\n                    <div> Perú\n                    </div>\n                    <div>\n                        Lima\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"\">\n        <div class=\"menu\">\n            <a href=\"https://business.ticketmaster.pe/trabaja-con-nosotros/\">\n                <img src=\"https://cdn.getcrowder.com/images/9dda0dde-b9d3-4947-8c22-cc081358c0b2-shoppingbag.png\" alt=\"\"\n                    width=\"20px\">\n                <span>\n                    Venda \n                </span>\n                <span class=\"hidden-xs\">\n                    conosco\n                </span>\n            </a>\n            <a href=\"https://help.ticketmaster.com.br/hc/pt-br\">\n                Suporte\n            </a>\n        </div>\n    </div>\n</div>"},"componentStyles":[{"id":"component-deb9edf8-aa2f-43b6-9892-c21a656f664c","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-8de0f9b9-5ff6-405d-aebf-f2a878820026","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-561b5126-b4df-4a6f-ae06-ee7e82983601","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-7c09ae95-6c05-4749-ae88-d80f672878ec","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-d54e1b4b-6476-42ea-a1ca-67b8066850e4","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-cc33c46c-eccc-486a-b11b-d857cbb2773b","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-1f9fe5af-ff0e-4368-86ca-03921f2eec10","titleColor":"","linkColor":"","paragraphColor":""},{"id":"component-a7bb9492-891f-4d01-a218-6a26931b1473","titleColor":"#ffff","linkColor":"","paragraphColor":""},{"id":"component-e63baadf-23ef-4018-8721-2ab8b18684a1","titleColor":"","linkColor":"","paragraphColor":""}],"customCSS":"/* CTA */\n#ingresar {\n    padding: 0px 16px 0px 40px !important;\n}\n\n/* General */\n.main {\n    height: 144px !important;\n}\n\n.in-block {\n    display: block;\n}\n\n.bg-black {\n    padding: 1rem;\n    background-color: black !important;\n    color: white;\n}\n\n.bg-main .grid_element .image img {\n    height: 304px !important;\n}\n\n.bg-main .block_content {\n    padding: 16px 5% !important;\n}\n\n.--bg-main .grid_link {\n    display: none !important;\n}\n\n.--bg-main .grid_element:hover::before {\n    background: linear-gradient(51deg, rgb(3 95 196) 0%, rgb(0 101 210 / 42%) 100%);\n    position: absolute;\n    top: 0px;\n    right: 0px;\n    z-index: 1;\n    display: block;\n    width: 100%;\n    height: 100%;\n    opacity: 0.4;\n    transition: opacity 0.4s cubic-bezier(0.1, 0.85, 0.25, 1) 0s;\n    content: \"\";\n}\n\nswiper-pagination {\n    display: none !important;\n}\n\n.block_title {\n    font-size: 1.8em !important;\n    text-transform: none !important;\n}\n\n.home-section-banners .details {\n    max-width: 100% !important;\n    padding: 32px 5% !important;\n}\n\n.home-section-banners .information {\n    padding-bottom: 32px;\n}\n\n.home-section-banners .details {\n    align-items: flex-start !important;\n}\n\n@media (max-width: 768px) {\n    .home-section-banners .information {\n        padding-bottom: 0px;\n    }\n}\n\n/* SECTION - Universitario */\n.section-universitario {}\n\n\n/* SECTION - Header */\n.sector-pre-header {\n    height: 44px;\n}\n\n.sector-pre-header a {\n    padding: 0rem 1rem;\n    color: white;\n}\n\n/*\n#ingresar::before {\n    content: url('');\n    display: inline-block;\n    height: 0px;\n    margin: 0px -28px;\n}\n*/\n\n/* modal*/\n#country-modal {\n    padding-top: 16px;\n}\n\n.country-modal-dialog {\n    width: 560px;\n    height: 304px;\n}\n\nmodal-content {\n    padding-top: 0px;\n}\n\n.section-universitario .details {}\n\n/* SECTION - Categories */\n.bg-categories .grid_link {\n    display: none !important;\n}\n\n.bg-categories .details {\n    margin-bottom: 0px !important;\n}\n\n.bg-categories .events_grid {\n    grid-template-columns: repeat(5, calc(40% - 280px));\n    overflow-x: auto;\n}\n\n@media (max-width: 768px) {\n    .bg-categories .events_grid {\n        grid-template-columns: repeat(5, calc(60%));\n    }\n}\n\n/* SECTION - Sales */\n.bg-sales {\n    background: url('https://cdn.getcrowder.com/images/17b0d947-7c76-48a5-b7d1-e5b8c0baf539-event-section-2-1.jpg') !important;\n    background-repeat: no-repeat !important;\n    background-position: center center !important;\n    background-size: cover !important;\n    padding: 8rem 4rem;\n}\n\n.sales-text {\n    margin-bottom: 2rem;\n    font-size: 2.75rem;\n    font-weight: bold;\n    color: #2A55D9;\n}\n\n/* SECTION - Venues */\n\n.section-events .grid_element .image img {\n    height: 224px !important;\n}\n\n/* SECTION - social network */\n.bg-social-facebook {\n    background: url('https://cdn.getcrowder.com/images/8a052474-474a-4bf5-a9b3-9c9e65ffd3c0-facebook.jpg');\n}\n\n.bg-social-youtube {\n    background: url('https://cdn.getcrowder.com/images/b663dff5-a7bc-4d4b-b441-621ec0190e38-youtube.jpg');\n}\n\n.bg-social-tiktok {\n    background: url('https://cdn.getcrowder.com/images/3427b624-6950-4d37-93eb-fe201b4c182f-tiktok.jpg');\n}\n\n.bg-social-instagram {\n    background: url('https://cdn.getcrowder.com/images/5dbf0a9e-2a21-40cd-8d00-1369a4b44921-instagram.jpg');\n}\n\n.bg-social-twitter {\n    background: url('https://cdn.getcrowder.com/images/e1698dfd-a6ff-461a-91ab-3287a156a2c4-twitter.jpg');\n}\n\n.bg-social-spotify {\n    background: url('https://cdn.getcrowder.com/images/030876d6-5089-434f-b913-78026fae13a9-spotify.jpg');\n}\n\n.bg-social-facebook,\n.bg-social-youtube,\n.bg-social-tiktok,\n.bg-social-instagram,\n.bg-social-twitter,\n.bg-social-spotify {\n    background-repeat: no-repeat;\n    background-position: center center;\n    background-size: cover;\n    text-align: center;\n}\n\n.bg-social a {\n    color: white;\n}\n\n.bg-social .title {\n    color: #00FFFF !important;\n}\n\n.bg-social img {\n    width: 4rem;\n    margin: 1rem;\n}\n\n.bg-social .tm-row {\n    margin-right: 0px;\n    margin-left: 0px;\n}\n\n/* SECTION - Outstanding */\n.home-section-outstanding-events .list_title {\n    margin-top: 24px;\n}\n\n.home-section-search .block_content {\n    padding: 32px 15px !important;\n}\n\n/* SECTION - Universitario */\n.home-section-banners .slider_link {\n    padding: 12px 12px !important;\n    text-transform: uppercase;\n}\n\n.home-section-banners .block_slider img {\n    max-height: 448px !important;\n}\n\n@media (max-width: 768px) {\n    .home-section-banners .block_slider img {\n        min-height: 180px !important;\n    }\n\n    .home-section-banners .slider_link {\n        display: none;\n    }\n}\n\n/* SECTION - Fan SUpport */\n.bg-fansupport {\n    background: url('https://cdn.getcrowder.com/images/6b4b8331-59aa-4eb7-86c3-284ba817707c-bg-fansupport-1.png') !important;\n    background-repeat: no-repeat !important;\n    background-position: center center !important;\n    background-size: cover !important;\n    padding: 8rem 4rem;\n}\n\n.bg-fansupport .card {\n    background-color: #171725;\n    padding: 1rem;\n    margin-top: 2rem;\n}\n\n.bg-fansupport .title {\n    color: #026CDF;\n    padding-bottom: 1rem;\n}\n\n.bg-fansupport .question {\n    color: white;\n    font-weight: 600;\n    padding-bottom: 0.75rem;\n}\n\n.bg-fansupport .answer {\n    color: white;\n    padding-bottom: 0.75rem;\n}\n\n.bg-fansupport .number {\n    color: white;\n    font-size: 5rem;\n    font-weight: bold;\n}\n\n.fansupport-text {\n    margin-bottom: 4rem;\n    font-size: 2.75rem;\n    font-weight: bold;\n    color: white;\n}\n\n.fansupport-title {\n    color: #00FFFF;\n}\n\n\n\n/* FOOTER */\n/* FOOTER */\n\n\n.justify-content-center {\n    -webkit-box-pack: center !important;\n    -ms-flex-pack: center !important;\n    justify-content: center !important\n}\n\n.align-items-center {\n    -webkit-box-align: center !important;\n    -ms-flex-align: center !important;\n    align-items: center !important\n}\n\n.tm-row {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n    -ms-flex-wrap: wrap;\n    flex-wrap: wrap;\n    margin-right: -15px;\n    margin-left: -15px\n}\n\n.text-list-light li {\n    color: white;\n}\n\n.img-fluid {\n    width: 100%;\n    max-width: 100%\n}\n\n@media screen and (min-width: 1024px) {\n    .event-thumb img {\n        height: 380px !important;\n    }\n}\n\n\n/* footer */\n\n/* button secondary */\n.btn-secondary {\n    background: #fafafa;\n    color: #024ddf;\n    border: 2px solid #024ddf;\n}\n\n.btn-secondary:hover {\n    background: #fafafa;\n    color: #024ddf;\n}\n\n/* button interbank */\n.btn-interbank {\n    background: var(--main-color);\n    font-weight: 500\n}\n\n@media (max-width: 520px) {\n    .btn-interbank {\n        background: #349345;\n    }\n}\n\n/* button bbva */\n.btn-bbva {\n    background: #2A55D9;\n    font-weight: 500\n}\n\n@media (max-width: 520px) {\n    .btn-bbva {\n        background: #2A55D9;\n    }\n}\n\n/* button card */\n.card-btn {\n    border-radius: 4px;\n    padding: 1rem;\n    background-color: white;\n}\n\n.card-btn-content {\n    color: black;\n}\n\n.card-btn-title {\n    font-size: 1.8rem;\n    font-weight: 700;\n    margin-bottom: 4px;\n}\n\n.card-btn-subtitle {\n    border: solid 1px #D6D6D6;\n    border-radius: 2px;\n    padding: 0px 4px;\n    font-size: 1.2rem;\n}\n\n.card-btn-icon {\n    padding-right: 8px;\n}\n\n@media (max-width: 520px) {\n    .card-btn {\n        border-radius: 0px;\n        padding: 0rem;\n        background-color: transparent;\n    }\n\n    .card-btn-icon {\n        display: none;\n    }\n\n    .card-btn-content {\n        display: none;\n    }\n\n    .card-btn-title {\n        font-size: 1.6rem;\n    }\n\n    .card-btn-subtitle {\n        font-size: 1rem;\n    }\n\n}\n\n/* background models */\n.bg-mode-1 {\n    background-image: url('https://cdn.getcrowder.com/images/0ef51a6b-033f-4b18-acd9-01dcbd29c8f7-frame-458971.png') !important;\n    background-position: center top;\n    background-repeat: no-repeat;\n    background-size: auto 50%;\n}\n\n.bg-mode-2 {\n    background-color: #f6f6f6 !important;\n}\n\n.bg-mode-3 {\n    background-color: #000 !important;\n    color: white;\n    background-image: url('https://cdn.getcrowder.com/images/accaf069-8a91-4106-a57e-79a48ae3093d-frame-458971-1.png') !important;\n}\n\n.bg-mode-4 {\n    background-color: #121212 !important;\n    color: white;\n    background-image: url('https://cdn.getcrowder.com/images/1242aa95-4dcb-43cd-961c-57cd027f04e5-video.png') !important;\n}\n\n\n\n\n\n\n/* fonts */\n.h1-kilimanjaro {\n    font-size: 32px;\n    font-weight: bold;\n    text-transform: uppercase;\n}\n\n.st-fiji {\n    font-size: 18px;\n    font-weight: 600;\n}\n\n.bb-boising {\n    font-size: 16px;\n    font-weight: 600;\n}\n\n#event_content .block_title {\n    font-size: 1.9rem;\n    text-decoration: underline #024ddf 4px;\n    text-underline-offset: 4px;\n}\n\n.next {\n    font-size: 2rem;\n    text-transform: uppercase;\n    font-weight: 700;\n}\n\n#buyButton {\n    font-size: 2rem;\n    text-transform: uppercase;\n    font-weight: 700;\n}\n\n#event_see_tickets {\n    text-transform: uppercase;\n    font-weight: 700;\n}\n\n.text-center {\n    text-align: center;\n    font-size: 1.5em;\n}\n\n.bold-text {\n    font-weight: bold;\n}\n\n.block-location iframe {\n    width: 100%;\n}\n\n/* Escribí tu CSS acá */\n.block-location-content {\n    margin-bottom: 2rem;\n    width: 344px;\n}\n\n.block-location-action {\n    margin-bottom: 2rem;\n}\n\n.block-howtosale-content {\n    margin-bottom: 2rem;\n    width: 344px;\n}\n\n/* Escribí tu CSS acá */\n.event-picker .container {\n    padding: 16px;\n}\n\n/* sections general */\n.organizer-information-icon {\n    width: 40px;\n}\n\n/* secttion table pricing */\n.tabla-precios-section {\n    background-color: #F6F6F6;\n}\n\n.align-middle {\n    vertical-align: middle;\n}\n\n.table-body {\n    background-color: #fff;\n}\n\n.table-bordered th,\n.table-bordered td {\n    border: 1px solid #ddd;\n    width: 15%;\n}\n\n.table-bordered thead th {\n    background-color: #000;\n    color: #fff;\n}\n\n.bold-text {\n    font-weight: bold;\n}\n\n.table td,\n.table th {\n    font-size: 2rem;\n    vertical-align: middle;\n}\n\n@media (max-width: 520px) {\n    .table-responsive {\n        overflow-x: auto;\n        -webkit-overflow-scrolling: touch;\n    }\n\n    .table td,\n    .table th {\n        font-size: 1.2rem;\n        vertical-align: middle;\n    }\n}\n\n\n/* footer 11.03.2024 */\n\n.footer {\n    padding: 6rem 3rem;\n    --footer-bg: #121212;\n    background-color: #121212;\n    color: white;\n}\n\n@media (max-width: 520px) {\n    .footer {\n        padding: 4rem 2rem;\n    }\n}\n\n.footer .footer-logo-ticketmaster {\n    padding-bottom: 2rem;\n}\n\n.footer .icon {\n    margin: 1rem 2rem 1rem 0rem;\n    width: 2rem;\n}\n\n.footer .footer-logo-ticketmaster img {\n    height: 3rem;\n}\n\n.footer li {\n    list-style-type: none;\n    color: white;\n    padding: 0.5rem 0rem;\n}\n\n.footer ul {\n    padding: 0rem;\n}\n\n.footer a {\n    color: white;\n    margin: 0px;\n}\n\n.footer .container {\n    width: 100%;\n}\n\n.footer .continue,\n.cookies,\n.reserved {\n    margin-bottom: 2rem;\n}\n\n/*insurance*/\nul.insurance-options li {\n    background-color: #F8F9FB !important;\n}\n\n\n\n\n.home-section-banners a .information {\n    background: linear-gradient(45deg, #0039a2, #014ddf0f);\n    opacity: 0;\n    transition: 0.3s ease-in-out;\n}\n\n.home-section-banners a .information .details {\n\tpadding-left: 20px;\n\ttransition: 0.3s ease-in-out;\n}\n\n\n.home-section-banners a:hover .information {\n\topacity:1\n}\n\n.home-section-banners a:hover .information .details {\n\tpadding-left:0\n}\n\n\n\n.bg-venues .information { background:#00000066;}\n.bg-venues .information .details , .bg-venues .information h3 { margin: 0;}\n\n/*Blue line*/\n\n.event_blocks label {\n    position: sticky !important;\n    color: #fff;\n    background: var(--main-color);\n    font-weight: normal;\n    font-size: 0.8em;\n    border-radius: 2px;\n    top: 3px;\n    right: 20px;\n    display: block;\n    z-index: 1;\n    margin: 0;\n    padding: 4px 8px;\n}\n\n\n.event_blocks .list_title a.list_link {\n    background: #024DDF;\n    color: #fff;\n}\n\n\n.tm-banner .information , .tm-banner .block_title {display:none !important}"});
				App.bootstrapData({"model":{"summary":{"model":"config_params","id":62},"data":{"url":"www.ticketmaster.com.br","configurationUrl":"https://web-layout.s3.amazonaws.com/home/production/85329914-c94b-4104-b7ec-b16a04f77565","country":"BRASIL","cashlessURL":null,"featureEventReports":true,"logoClear":"https://cdn.getcrowder.com/images/46b77c52-6acd-425b-985f-c036a9dcbf90-ticketmaster.svg","analytics":{"facebook":{"pixelId":null},"mixpanel":{"id":null},"google":{"analyticsId":null,"gtmId":"GTM-WBGSPNM"}},"enableAccessibility":true,"countryData":{"streetTypes":[],"country":"BRASIL","defaultCurrency":"BRL"},"logo":"https://cdn.getcrowder.com/images/1664925447950-null-ticketmaster-logo-azurewithoutr.png","id":62,"showCaptchaOnRegister":true,"oneTrustId":"335c8215-96b5-4b4c-91b1-4f1dd9016a7b","homepageImage":"https://cdn.getcrowder.com/images/dd6080af-451e-47da-ac7f-dc0ec704b9d1-ticketmasterbr.png","useHomeCMS":true,"refundServiceEnabled":true,"FeatQPI":true,"sitefEnabled":true,"featurePartner":true,"comboName":"Pacote","featureQueueitV2":true,"featurePaymentVerification":true,"timeZone":"America/Argentina/Buenos_Aires","usePagesCMS":true,"homeLogo":"","shopUrl":"www.ticketmaster.com.br","useLandingComponents":true,"showCaptchaOnLogin":true,"userSessionsEnabled":true,"featureDeferred":true,"subtitle":"Ticketmaster","featureStreaming":false,"name":"Ticketmaster Brasil","posInfo":null,"styles":{"colors":{"main":"#024ddf","header":"#024ddf","headerLinks":"#024ddf","footer":"#1f262d","footerLinks":"#ffffff"},"font":{"source":"<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Regular.woff2\">\n<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Semibold.woff2\">\n<link rel=\"preload\" as=\"font\" crossorigin=\"anonymous\" type=\"font/woff2\" href=\"https://cdn.boletius.com/fonts/Averta-Bold.woff2\">","fontFamily":"Averta, \"Helvetica Neue\", Helvetica, Arial, sans-serif"},"custom":"nav img.logo-dark {\n    display: none;\n}\n\nnav img.logo-light {\n    display: block;\n}\n\n.event-picker .dropdown .btn {\n    overflow: hidden;\n}\n\n.event-picker .dropdown .dropdown-menu li.agotado div {\n    padding: 15px 20px;\n    clear: both;\n    font-weight: 600;\n    line-height: 1.42857143;\n    color: #333;\n    white-space: nowrap;\n    border-bottom: solid 1px #d7d7d773;\n    display: flex !important;\n    align-items: center;\n    justify-content: space-between;\n    gap: 10px;\n    text-wrap: balance;\n    text-decoration: none;\n}\n\n\n#eventList .home-events .col-md-12 { width:100%}\n#eventList .home-events .col-md-8  , #eventList .home-events .col-md-4 { width:50%}\n@media screen and (max-width: 1024px) {#eventList .home-events .col-md-12 { width:100%}}\n.ticket-shop .btn-primary { cursor:pointer !important}\n\n.event_thumb_info .event_venue { display:none}\n\nimg.banner-town {\nwidth: 100%;\n    border-radius: 5px;\n    height: 380px;\n    object-fit: cover;\n}\n.event-thumb .title-container {\n    z-index: 1;\n}\n.va-container:hover img {\n    transform: scale(1.05) !important;\n}\n.event-thumb img {\n    transition: 0.4s;\n}\n\n.title-container { opacity:0; transition:0.3s ease-in-out}\n.title-conttainer .event_thumb_info, .title-container .thumb-title {margin-left: 20px; transition:0.4s ease-in-out}\n\n.va-container:hover .title-container { opacity:1}\n.va-container:hover title-conttainer .event_thumb_info, .va-container:hover .title-container .thumb-title {margin-left: 0px; }\n\n@media screen and (max-width: 768px) {\nimg.banner-town {\n    height: 300px;\n}\n}\n@media screen and (max-width: 1024px) {\n.home-events .col-md-8, .home-events .col-md-4 {\n    width: 100% !important;\n}\n}\n\n.title-container {\n    display: flex;\n    padding: 40px;\n    position: absolute;\n    width: 100%;\n    align-items: flex-start;\n    justify-content: flex-end;\n    background: rgb(0,0,0);\n    background: linear-gradient(51deg, rgb(3 95 196) 0%, rgb(0 101 210 / 42%) 100%);\n    flex-direction: column;\n}\n\n.title-container .thumb-title {\nfont-size: 1.6em;\nfont-weight: 600;\n}\n\n.va-container:hover {\n    transform: scale(1);\n}\n\n.event-thumb {\n    background-color: var(--main-color);\n    box-shadow: none !important;\n}\n\n.event_thumb_info {\n    display: flex;\n    flex-direction: column;\n    align-items: flex-start;\n    color: #fff;\n    font-size: 1em;\n    font-weight: 500;\ngap:2px;\n}\n\n.event_thumb_info span.event_venue { opacity:0.6}\n\n\n@media screen and (max-width: 768px) {\n.title-container { text-align:left !important; padding:20px !important;}\n.title-container .thumb-title {\n    font-size: 1.3em;\n    font-weight: 600;\n    margin: 0 0 10px 0;\n    line-height: 1.4em;\n    text-align: initial;\n}\n}\n\n.container .content ul {padding:0 0 0 20px !important;}\n.container .content table {width:100%; border:solid 1px #f1f1f1}\n.container .content table td {border:solid 1px #f1f1f1; padding:10px;}\n\n.carousel-inner .item {\n    height: 300px !important;\n}\n\n.carousel-indicators {\n    bottom: 10px !important;\n    opacity: 1;\n}\n\n.carousel-indicators li , .carousel-indicators li.active  {\n    width: 10px ;\n    height: 10px;\n    margin: 0 1px;\n}\n\n\n.search_box_home h1 {\n    text-transform: none;\n}\n\nbody {\n     padding-top: 50px;\n     letter-spacing: 0.3px;\n}\n .footer-tm ul li a {\n     color: #fff;\n     margin: 0 !important;\n}\n .home-categories , .home-events {\n     width:90%;\n     max-width: 1260px;\n     margin: 0 auto;\n}\n .home-events .col-md-8, .home-events .col-md-4 {\n     width:50%;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Light.woff2\") format(\"woff2\");\n     font-weight: 300;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Regular.woff2\") format(\"woff2\");\n     font-weight: 400;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Semibold.woff2\") format(\"woff2\");\n     font-weight: 600;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Bold.woff2\") format(\"woff2\");\n     font-weight: 700;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-Black.woff2\") format(\"woff2\");\n     font-weight: 900;\n}\n @font-face {\n     font-family: \"Averta\";\n     src: url(\"https://cdn.boletius.com/fonts/Averta-RegularItalic.woff2\") format(\"woff2\");\n     font-style: italic;\n}\n @media (min-width: 780px) {\n     .event-header .ticket-shop #buyButton {\n         margin-left: 30px;\n    }\n}\n .event-header .ticket-shop {\n     position: relative;\n     background: rgba(251,252,255);\n     border: solid 2px #F1F2F5;\n}\n .event-header .ticket-shop #show-button, .event-header .ticket-shop #quantity-button {\n     border: solid 1px rgba(0, 0, 0, 0.15);\n}\n .navbar ul.user-menu {\n     padding: 15px 0 0 0;\n}\n .navbar-brand {\n     line-height: normal;\n}\n .event-header .ticket-shop.affix{\n     top: 60px;\n}\n .main {\n     height: 180px;\n     background: #024DDF !important;\n}\n .main h1 { display: none;}\n .navbar .btn {\n     margin-top: 0px;\n     background: transparent;\n     font-size: 1.1em;\n}\n #login_button #ingresar {\n     color: #353C42 !important;\n}\n .navbar a {\n     font-size:1em;\n}\n .navbar .logo {\n     padding: 20px 0;\n}\n .navbar-menu a:hover {\n     background-color: rgb(230, 230, 230);\n}\n .navbar-menu a:hover::after {\n     width:0px;\n}\n @media (min-width: 1600px){\n     .container {\n         width: 1260px;\n    }\n}\n .footer-tm {\n    color:#ffffff;\n}\n .footer-tm h5,  .footer-tm h3 {\n    font-size:1em;\n    font-weight:bold;\n    margin-bottom:15px;\n}\n .footer-tm ul {\n     padding:0;\n     margin:0 0 40px 0\n}\n .footer-tm ul li {\n     list-style:none;\n     display:block;\n     margin-bottom:10px;\n}\n .footer-tm ul li a {\n     color:#fff\n}\n .footer-tm img.logo {\n     margin:0 0 40px 0;\n     height:25px\n}\n .footer-tm .foo-copy {\n     text-align:right;\n     font-size:0.8em;\n}\n .footer-tm .foo-social a {\n     margin-right:20px\n}\n .footer {\n    border: none\n}\n @media (max-width: 768px){\n     .footer-tm .foo-social {\n         margin-bottom:40px\n    }\n     .footer-tm .foo-copy {\n         text-align:left;\n    }\n}\n #eventList.container {\n     width:100%;\n     padding:0;\n}\n .tm-main {\n     height: 92vh;\n     background: #024DDF;\n     background-image: url(https://cdn.getcrowder.com/images/1669406310174-null-main-br.jpg);\n     background-size: cover;\n     animation: bgAnimate 15s ease-in-out infinite alternate;\n     overflow:hidden;\n     text-align: center;\nborder-top: solid 30px #0262cf;\n}\n @keyframes bgAnimate {\n     0% {\n         background-position: 2% 0;\n    }\n     100% {\n         background-position: 100% 0;\n    }\n}\n .tm-main .tm-t {\n     margin-bottom: 10vh;\n}\n .tm-main .tm-t img {\n     height:35vh;\n     animation: tAnimate 2s ease-in-out;\n}\n @keyframes tAnimate {\n     0% {\n         transform: scale(2.5);\n         opacity:0;\n    }\n     100% {\n         transform: scale(1);\n         opacity:1;\n    }\n}\n .tm-main .tm-overlay {\n     display: flex;\n     flex-direction: column;\n     justify-content: center;\n     align-items: center;\n     flex-wrap: nowrap;\n     align-content:center ;\n     height: 100%;\n     background: linear-gradient(0deg, rgba(2,108,223,1) 0%, rgb(0 69 145 / 50%) 49%, rgba(2,108,223,0) 100%);\n}\n .tm-main h2 {\n     margin: 0;\n     font-size: 2em;\n     color: #fff;\n     font-weight: 400;\n     animation: h2Animate 1s ease-in-out;\n}\n .tm-main h2 span {\n     color: #00FFFF;\n}\n @keyframes h2Animate {\n     0% {\n         transform: scale(0.5);\n         opacity:0;\n    }\n     100% {\n         transform: scale(1);\n         opacity:1;\n    }\n}\n .tm-main i {\n     display: block;\n     width: 14px;\n     height: 14px;\n     border: solid 2px #ffffff70;\n     border-left: none;\n     border-top: none;\n     transform: rotate(45deg);\n     border-radius: 3px;\n     bottom: 8vh;\n     position: absolute;\n}\n .tm-suscribe {\n     background: #024DDF;\n     padding: 80px 20px 100px;\n     text-align: center;\n}\n .tm-suscribe h6 {\n     margin: 0;\n     font-size: 1.8em;\n     color: #fff;\n     font-weight: 400;\n}\n .tm-social {\n     display: block;\n     position: relative;\n     height: 300px;\n     color: #fff;\n     text-decoration: none;\n}\n .tm-social .tm-s {\n     width: 100%;\n     position: relative;\n     float: left;\n     height: 300px;\n     display: flex;\n     flex-direction: column;\n     flex-wrap: nowrap;\n     justify-content: center;\n     align-items: center;\n     align-content: center;\n     text-align: center;\n     background: #000;\n}\n .tm-social .tm-s h3 {\n     font-size:1.8em;\n     color: #fff;\n     margin: 0 0 10px 0;\n     font-weight: normal;\n}\n .tm-social .tm-s {\n     color: #fff;\n     text-decoration: none;\n     opacity: 0.95;\n     transition: 0.2s;\n}\n .tm-social .tm-s:hover{\n     opacity:1;\n}\n .tm-social .tm-s span {\n     color: #00FFFF;\n}\n.tm-social .tm-instagram {\nbackground: url(https://cdn.getcrowder.com/images/1683576764155-null-TM_Banner_Instagram.jpeg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-facebook {\nbackground: url(https://cdn.getcrowder.com/images/1683576746022-null-TM_Banner_Facebook.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-linkedin {\nbackground: url(https://cdn.getcrowder.com/images/1683576712789-null-TM_Banner_LinkedIn.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-twitter{\nbackground: url(https://cdn.getcrowder.com/images/1669823412469-null-twitter.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-blog{\nbackground: url(https://cdn.getcrowder.com/images/1683576726535-null-TM_Banner_Blog.jpg) no-repeat center center;\nbackground-size: cover;\n}\n.tm-social .tm-tiktok {\nbackground: url(https://cdn.getcrowder.com/images/1691588419752-null-tiktok.jpeg) no-repeat center center;\nbackground-size: cover;\n}\n\n.tm-social .tm-overlay img {\nwidth:40px;\n}\n\n .tm-business {\n     background:#1F262D;\n     padding: 100px 20px;\n     text-align: center;\n     border-bottom: solid 1px #363636;\n}\n .tm-business h2 {\n     margin: 0;\n     font-size: 1.8em;\n     color: #fff;\n     font-weight: 400;\n     margin: 0 0 60px 0;\n}\n .tm-business a {\n     border: solid 1px #fff;\n     text-decoration: none;\n     padding: 18px 30px;\n     font-size:1.1em;\n     color: #fff;\n}\n @media (max-width: 768px){\n     .tm-main {\n         height: 70vh;\n         background-image: url(https://cdn.getcrowder.com/images/1669406540752-null-main-m.jpg);\n         animation: bgAnimate 25s ease-in infinite alternate;\n    }\n     .tm-main .tm-overlay {\n         padding: 0 30px;\n         background: linear-gradient(0deg, #024DDF 0%, #024DDFb0 49%, #024DDF94 100%);\n    }\n     .tm-main .tm-t img {\n         height:150px;\n    }\n     .tm-social {\n         display: block;\n         position: relative;\n         height: 300px;\n    }\n}\n .navbar {\n     height: 60px;\n     background-color:#024DDF;\n     box-shadow: none !important;\n}\n\n .navbar-menu a {\n     color: #fff;\n     font-size: 1.1em !important;\n}\n .navbar-menu a:hover {\n     background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.176));\n     background-color: #0000 !important;\n}\n #login_button #ingresar {\n     color: #fff !important;\n}\n a.btn-togle span {\n     background:#fff;\n}\n .navbar a {\n     font-size: 1em;\n}\n .navbar-collapse ul li:first-child a {\n     border-top:none !important\n}\n .quentro-modal .modal-body {\n    padding: 20px !important;\n}\n .quentro-modal .modal-header a.quentro-logo img {\n    width: 120px;\n}\n .quentro-modal .modal-body img {\n    width: 80px !important;\n}\n .quentro-modal .close-quentro-modal {\n    width: 25px;\n     float: right !important;\n}\n #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn {\n     color: white;\n     padding: 0;\n     border: 0;\n     font-size:0.9em;\n}\n #ot-sdk-btn.ot-sdk-show-settings.cookie-settings-btn:hover {\n     color: white;\n     background: none;\n}\n .tm-grid {\n}\n .tm-grid .tm-grid-event {\n     color: #fff;\n     background-size: cover;\n     background-position: center ;\n     height: 100%;\n}\n .tm-grid .tm-grid-event .tm-grid-event-overlay {\n    background: linear-gradient(90deg, rgba(6,25,46,0.95) 0%, rgba(8,30,54,0.65) 40%, rgba(13,32,52,0.15) 100%);\n     height: 100%;\n     display: flex;\n     align-items: flex-end\n}\n .tm-grid .event-title {\n     font-size:2em;\n     font-weight: 600;\n}\n .tm-grid .event-info {\n     font-size:1em;\n     margin-bottom: 20px;\n     font-weight:600\n}\n .tm-grid .event-info span {\n     opacity: 0.7;\n     display: block;\n     font-size:1em;\n     font-weight: normal;\n}\n .tm-grid a.btn-event {\n     font-size:1.1em;\n     color: #fff;\n     font-weight: 500;\n     background: var(--main-color);\n     padding: 12px 20px;\n     text-decoration: none;\n     display: inline-block;\n     border-radius:2px\n}\n .tm-grid .event-info-content {\n     padding: 70px;\n}\n\n\n.grid-1 { grid-area: 1 / 1 / 2 / 3; }\n.grid-2 { grid-area: 2 / 1 / 3 / 2; }\n.grid-3 { grid-area: 2 / 2 / 3 / 3; }\n.grid-4 { grid-area: 3 / 1 / 4 / 2; }\n.grid-5 { grid-area: 3 / 2 / 4 / 3; }\n.grid-6 { grid-area: 4 / 1 / 5 / 3; }\n.grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 60vh; }\n\n.grid-1 { width:50%; position: relative;float: left;}\n.grid-2 { width:100% ; position: relative;float: left;}\n\n.grid-1, .grid-2 {\n    height: 55vh;\n    min-height: 400px;\n}\n \n @media (max-width: 1440px){\n     .tm-grid .event-title {\n         font-size: 1.6em;\n    }\n     .tm-grid .event-info {\n         font-size: 1em;\n    }\n     .tm-grid .event-info-content {\n         padding: 4em;\n    }\n     .tm-grid a.btn-event {\n         font-size: 1em;\n        padding: 10px 15px;\n    }\n}\n @media (max-width: 768px){\n\n     .parent-grid {\n        display: flex;\n        flex-direction: column;\n         height: auto;\n    }\n\n    .grid-1 , .grid-2 , .grid-3, .grid-4 , .grid-5, .grid-6, .grid-7, .grid-8 { height: 50vh; }\n\n\n     .tm-grid .event-info-content {\n         padding:30px 20px;\n    }\n     .tm-grid .event-info span {\n         margin: 0;\n         display: block;\n    }\n}\n body {\n     --order-top-bg: #0046cb;\n     --order-top-color: #fff;\n     --header-height: 60px;\n     padding-top:60px;\n}\n .pg_content .pg_sidebar {\n     display:none !important\n}\n .pg_content .col-sm-8 {\n     margin: 0px auto;\n     width:100%;\n     padding: 0 200px;\n     float: inherit;\n}\n @media (max-width: 1280px){\n    .pg_content .col-sm-8 {\n        padding: 0px 100px;\n    }\n }\n \n @media (max-width: 768px){\n    .pg_content .col-sm-8 {\n        padding: 0px 20px;\n    }\n    .grid-1, .grid-2 {\n        height: 40vh;\n        width: 100%;\n        min-height: 350px;\n    }\n}\n\n\ndiv.accesibility {\n    bottom: 30% !important;\n}\n\n\n.event_blocks .grid-label {\n    position: sticky !important;\n    color: #fff;\n    background: var(--main-color);\n    font-weight: normal;\n    font-size: 0.8em;\n    border-radius: 2px;\n    top: 3px;\n    right: 20px;\n    display: block;\n    z-index: 1;\n    margin: 0;\n    padding: 4px 8px;\n}"},"useFacilityFee":true,"userConfiguration":{"requireDocument":true,"requireGender":true,"legalTerms":null,"enabledCountries":[],"passwordStrength":true,"blockDocumentChange":true,"blockEmailChange":true,"minimumAge":18,"enforceMFA":true},"support":{"email":"info@ticketmaster.com.br","link":"https://help.ticketmaster.com.br/hc/pt-br","linkOrMail":"https://help.ticketmaster.com.br/hc/pt-br","linkOrMailLink":"https://help.ticketmaster.com.br/hc/pt-br"},"wafApiKey":"UMg4cv2VBL/+DPsCwQrT9MzSEiF+y90AL50eG+jwc1I8+Q6XiysXXNtNVYrQ0jWTxz3OpPDcCcWzyYkmMpI5oNViyfBw/bM6UuCIL0hEOBiKxOtmFtB+KHOviEveAqVr9U1cjj+iD97VY2j7RJnscQAd200LDpJLq6sI5UWV6KbWgV8vodHlXlc8csSnFMtJYMRYdk5NPEkSulrD1JDDOwMY4zVkV+KNnfofYq7PLa0Xfh1/I/r6OEtDzmc8aPHk7FNphynIOL4ljPL6AR5wQje8va/I99oe3Ygmy1CMQq2HOLT0JO46qImy4L2o5LrDK1DUbNouPfOdvHcAh9gUa79F8b36j4DikZxxs2GOBjFhcSdmUiOfsu9r2neOUwELIKcd74eeENR4q+IkbzFuxub6aCYikJTEmwYEmAxOJYf9VOrFYmJ3D0ljKh6T+fqmCBZWTNjSvpZMJnazNWjbdf9LqA8UbMt3c8qsl/1rEOp1IW6qU9VWAzl9pP3jo/0bXwXjHTcAnPMWuKf8SlAxpOgEecCd2Netf5E7YCO+F6+CpKQBKqS3bxq44H63n3z4IgTKm3UoCk70wJGTG0fm13WKJyoCXHKZE/woWZPk0VGXxlRkB3lb+/3SfyelL9AVn3kl6mQw01OOsB4W/qV3SLSjfw1Z3ON6kfPRhY/LK1c=_0_1","featurePIR":true,"customFooter":"<style type=\"text/css\">.footer-pt,\n.footer-en,\n.footer-es {\n    display: none;\n}\n\n\nhtml[lang=\"pt\"] .footer-pt {\n    display: block;\n}\n\nhtml[lang=\"es\"] .footer-es {\n    display: block;\n}\n\nhtml[lang=\"en\"] .footer-en {\n    display: block;\n}\n</style>\n<div class=\"footer-tm text-left\">\n<div class=\"row footer-es\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Acesso R&aacute;pido</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">Mis compras</a></li>\n\t<li><a href=\"../account/perfil\">Perfil</a></li>\n\t<li><a href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Soporte</a></li>\n\t<li><a href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibilidad</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>T&eacute;rminos y Pol&iacute;ticas</h3>\n\n<ul>\n\t<li><a href=\"../static/termos-de-uso\" target=\"_blank\">T&eacute;rminos de uso</a></li>\n\t<li><a href=\"../static/politica-de-compra\" target=\"_blank\">Pol&iacute;tica de Compra</a></li>\n\t<li><a href=\"https://privacy.ticketmaster.com.br/pt/cookie-policy\" target=\"_blank\">Pol&iacute;tica de Cookies</a></li>\n\t<li><a href=\"https://privacy.ticketmaster.com.br/pt/privacy-policy\" target=\"_blank\">Pol&iacute;tica de Privacidad</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Sobre a Ticketmaster</h3>\n\n<ul>\n\t<li><a href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Trabaje con nosotros</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row footer-pt\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Acesso R&aacute;pido</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">Minhas Compras</a></li>\n\t<li><a href=\"../account/perfil\">Meu Perfil</a></li>\n\t<li><a aria-label=\"Suporte ao Fã\" href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Suporte ao F&atilde;</a></li>\n\t<li><a aria-label=\"Acessibilidade\" href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibilidade</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Termos e Pol&iacute;ticas</h3>\n\n<ul>\n\t<li><a aria-label=\"Termos de Uso\" href=\"../static/termos-de-uso\" target=\"_blank\">Termos de Uso</a></li>\n\t<li><a aria-label=\"Política de Compra\" href=\"../static/politica-de-compra\" target=\"_blank\">Pol&iacute;tica de Compra</a></li>\n\t<li><a aria-label=\"Política de Cookies\" href=\"https://privacy.ticketmaster.com.br/pt/cookie-policy\" target=\"_blank\">Pol&iacute;tica de Cookies</a></li>\n\t<li><a aria-label=\"Política de Privacidade\" href=\"https://privacy.ticketmaster.com.br/pt/privacy-policy\" target=\"_blank\">Pol&iacute;tica de Privacidade</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Sobre a Ticketmaster</h3>\n\n<ul>\n\t<li><a aria-label=\"Ticketmaster Brasil\" href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a aria-label=\"Ticketmaster Internacional\" href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a aria-label=\"Trabalhe com a gente\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Trabalhe com a gente</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row footer-en\">\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Quick access</h3>\n\n<ul>\n\t<li><a href=\"../account/purchases\">My purchases</a></li>\n\t<li><a href=\"../account/perfil\">My profile</a></li>\n\t<li><a aria-label=\"Suporte ao Fã\" href=\"https://help.ticketmaster.com.br/hc/pt-br\" target=\"_blank\">Support</a></li>\n\t<li><a aria-label=\"Acessibilidade\" href=\"https://www.ticketmaster.com.br/static/acessibilidade\" target=\"_blank\">Acessibility</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>Terms and Policies</h3>\n\n<ul>\n\t<li><a aria-label=\"Termos de Uso\" href=\"https://www.ticketmaster.com.br/static/terms-of-use\" target=\"_blank\">Terms of Use</a></li>\n\t<li><a aria-label=\"Política de Compra\" href=\"https://www.ticketmaster.com.br/static/purchase-policy\" target=\"_blank\">Purchase Policy</a></li>\n\t<li><a aria-label=\"Política de Cookies\" href=\"https://privacy.ticketmaster.com.br/en/cookie-policy\" target=\"_blank\">Cookies Policy</a></li>\n\t<li><a aria-label=\"Política de Privacidade\" href=\"https://privacy.ticketmaster.com.br/en/privacy-policy\" target=\"_blank\">Privacy Policy</a></li>\n</ul>\n</div>\n\n<div class=\"col-xs-12 col-sm-4\">\n<h3>About Ticketmaster</h3>\n\n<ul>\n\t<li><a aria-label=\"Ticketmaster Brasil\" href=\"https://business.ticketmaster.com.br/pt/\" target=\"_blank\">Ticketmaster Brasil</a></li>\n\t<li><a aria-label=\"Ticketmaster Internacional\" href=\"https://business.ticketmaster.com.br/pt/nossa-historia/\" target=\"_blank\">Ticketmaster Internacional</a></li>\n\t<li><a aria-label=\"Trabalhe com a gente\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\">Work with us</a></li>\n</ul>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\"><img alt=\"Ticketmaster logo\" class=\"logo\" src=\"https://cdn.boletius.com/ticketmaster/ticketmaster-logo_white.png\" /></div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 col-sm-6 foo-social\"><a aria-label=\"Instagram\" href=\"https://www.instagram.com/ticketmasterBR/\" target=\"_blank\"><img alt=\"Instagram\" src=\"https://cdn.boletius.com/images/1643379600508-instagram.png\" style=\"height: 16px;\" /></a> <a aria-label=\"Facebook\" href=\"https://www.facebook.com/ticketmasterbr\" target=\"_blank\"><img alt=\"\nfacebook\" src=\"https://cdn.boletius.com/images/1643379516372-facebook.png\" style=\"height: 16px;\" /></a> <a aria-label=\"LindedIn\" href=\"https://www.linkedin.com/company/ticketmasterBR\" target=\"_blank\"><img alt=\"Linkedin\" src=\"https://cdn.boletius.com/images/1643379625842-linkedin.png\" style=\"height: 16px;\" /></a> <a href=\"https://www.tiktok.com/@ticketmasterbr\" target=\"_blank\"><img alt=\"Tiktok\" aria-label=\"Tiktok\" src=\"https://cdn.getcrowder.com/images/1691588331940-null-l-tiktok.png\" style=\"height: 16px;\" /></a> <a href=\"https://blog.ticketmaster.com.br\" target=\"_blank\"><img alt=\"Blog\" aria-label=\"Blog Ticketmaster\" src=\"https://cdn.getcrowder.com/images/1683574125568-null-blog.png\" style=\"height: 16px;\" /></a></div>\n\n<div class=\"col-xs-12 col-sm-6 foo-copy\"><a class=\"ot-sdk-show-settings cookie-settings-btn\" id=\"ot-sdk-btn\">Cookie preferences&nbsp;&nbsp;</a>&copy; 2025&nbsp;Ticketmaster.</div>\n\n<div class=\"col-xs-12 col-sm-6 foo-copy\">\n<ul>\n\t<li>TICKETMASTER BRASIL LTDA - CNPJ 42.789.521/0001-10</li>\n\t<li>R. Bacaetava, n&ordm; 401, 7&ordm; andar, Vila Gertrudes, S&atilde;o Paulo/SP, CEP 04705-010</li>\n</ul>\n</div>\n</div>\n</div>","newEmailsEnabled":true,"showFooter":false,"featureTicketing":true,"customContactUsForRefund":"<div>Caso a sua compra esteja fora do prazo para cancelamento, não será possível prosseguir com a sua solicitação. Confira as regras de cancelamento acessando este link  <a href=\"https://help.ticketmaster.com.br/hc/pt-br/categories/10492807217809-Como-Cancelar-E-Informações-Sobre-Trocas\">https://help.ticketmaster.com.br/hc/pt-br/categories/10492807217809-Como-Cancelar-E-Informações-Sobre-Trocas </a> </div> </br>  <div> Porém, caso o seu pedido estiver dentro do prazo para reembolso e você precisar de auxilio, entre em contato com o suporte ao fã <a href=\"https://help.ticketmaster.com.br/hc/pt-br/requests/new?ticket_form_id=10146863301905\"> https://help.ticketmaster.com.br/hc/pt-br/requests/new?ticket_form_id=10146863301905 </a> </div>","menuCategories":[],"optInText":"Deixe-nos mantê-lo informado sobre o que está por vir – incluindo pré-vendas e ofertas exclusivas – por meios eletrônicos (por exemplo, e-mail, ferramentas de mensageria, redes sociais, etc.). Você sempre pode alterar a forma como entramos em contato com você por meio de sua conta Ticketmaster.","allowSendQuentroToCurrentUserEmail":true,"landingTemplateId":null,"cashlessRedirectUrl":"https://www.ticketmaster.com.br","lang":"pt","headline":"Ticketmaster","useCashless360":true,"favicon":"https://cdn.getcrowder.com/images/c1ade2d9-b2d1-484a-b163-0e5509e00144-favicon-32x32.png","showAssociatePurchaseButton":false,"showCategoriesOnMenu":false,"featureAutomaticRefund":true,"useFaceRecognition":true,"homeRedirect":null,"gatewaysByCountry":true,"featureSeasonPass":true,"alwaysShowDeliveryMethod":false,"requireBillingAddress":true,"featurePaymentVerificationMP":true,"reCaptchaProvider":"CLOUDFLARE_TURNSTILE","skipCalendarReport":"12063","reCaptchaPublicKey":"0x4AAAAAAAhbw3CJuC34pXu4","featureCashless":true,"isReCaptcha":false,"isCloudflareTurnstile":true,"homeComponents":[],"widgetComponents":[{"id":"component-deb9edf8-aa2f-43b6-9892-c21a656f664c","widgetType":"SearchBar","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"home-section-search","containerAppearance":"centered","backgroundColor":"#024DDF","titleColor":"","paragraphColor":"","linkColor":""}},"version":1},{"id":"component-8de0f9b9-5ff6-405d-aebf-f2a878820026","widgetType":"Slider","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"home-section-banners","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"sliderType":"with-content","sliderItems":[{"title":"Louis Tomlinson: How Did We Get Here? Latin American Tour","line1":"06 e 07 de Abril de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/louis-tomlinson","imgUrl":"https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif"},{"title":"Djavan: Djavanear 50 anos - Só Sucessos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/djavan","imgUrl":"https://cdn.getcrowder.com/images/6e7db1d2-8618-4c42-868d-c96804e6c186-djavanhome1920x720.gif"},{"title":"aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -","line1":"04 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/aespa","imgUrl":"https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif"},{"title":"Rock in Rio 2026","line1":"4, 5, 6, 7, 11, 12, 13 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/rockinrio","imgUrl":"https://cdn.getcrowder.com/images/159b1a9c-0823-480f-a458-e7286dd123e3-rir-banner.gif"},{"title":"Martinho da Vila & Mart´Nália | Pai e Filha","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/martinho-da-vila-martnalia-pai-e-filha","imgUrl":"https://cdn.getcrowder.com/images/e7084c8a-0bd9-4bf1-8419-56d2bd03ace7-martinhomartnalia.gif"},{"title":"Tiago Iorc - Turnê Troco Likes 10 Anos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/tiago-iorc","imgUrl":"https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif"},{"title":"UTS Rio 2026","line1":"16, 17 e 18 de Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/uts-rio-2026-br","imgUrl":"https://cdn.getcrowder.com/images/6642cbeb-8b3c-4658-b893-d9fd554513ee-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif"},{"title":"Xande de Pilares & Revelação: Tava Escrito – O Reencontro Histórico","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/revelacao-e-xande-de-pilares","imgUrl":"https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif"},{"title":"KAROL G: Viajando Por El Mundo Tropitour","line1":"12 de Fevereiro de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/karol-g","imgUrl":"https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif"},{"title":"Cê Ta Doido Festival - São Paulo - 17/10/2026 - Venda Geral","line1":"17 de Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ce-ta-doido-festival-sao-paulo","imgUrl":"https://cdn.getcrowder.com/images/ac9ca75d-8d54-4dd3-a2f6-1c8d65f4c896-867700cf-1f68-446e-a177-e59bb34efad5-tamanhookctdlanding1920x720-1.gif"},{"title":"Kid Abelha: Eu Tive Um Sonho","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/kid-abelha","imgUrl":"https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif"},{"title":"Harry Styles: Together, Together","line1":"Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/harry-styles","imgUrl":"https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif"},{"title":"Lollapalooza Brasil 2027","line1":"19, 20 e 21 de Março de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/lollapaloozabr","imgUrl":"https://cdn.getcrowder.com/images/94d86cbd-f320-46cd-9bf7-5dc2d753be22-tmbannerhomeprevendagerallollaloversjn1004v4.gif"},{"title":"Suhai Festival Interlagos 2026","line1":"Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/suhai-festival-de-interlagos-2026","imgUrl":"https://cdn.getcrowder.com/images/f8a817b8-e11c-427a-b879-c9c2dc8b87bd-1920x720-geral-4.png"},{"title":"CA7RIEL & Paco Amoroso: Free Spirits World Tour","line1":"Novembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ca7riel-e-paco-amoroso","imgUrl":"https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif"}],"dynamicContent":{"entityType":"event","listName":"sliderItems","data":{"config":{"max":15,"offset":0,"sort":"groupPriority","order":"asc"},"idGroup":"49"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"CUSTOM","value":""},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}}},"version":1},{"id":"component-561b5126-b4df-4a6f-ae06-ee7e82983601","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Experiências"},"config":{"customClass":"standard_card","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{},"cards":[{"title":"Toy Story Ao Infinito e Além: A Exposição","content":"","line1":"São Paulo | Múltiplas datas","label":"Shopping Cidade São Paulo","buttonText":"Confira","link":"https://www.ticketmaster.com.br/event/toy-story","imgUrl":"https://cdn.getcrowder.com/images/1ac7115f-2ecf-4e77-b30e-6157da28df58-tm1920x720toy-storybanner.gif","moveTimestamp":1776892736918},{"title":"Manti Wine Sessions","content":"","imgUrl":"https://cdn.getcrowder.com/images/2c1b6a2a-bc21-4fbd-9271-2a0732e22630-d04cea4e-f11b-474b-81eb-36a1b6c70064-banner-festival-lineup-01.png","link":"https://www.ticketmaster.com.br/event/manti-wine-sessions","buttonText":"Confira","line1":"Mogi Guaçu | 5 e 6 de Junho","moveTimestamp":1776892738628,"label":"Autódromo Velocitta"},{"title":"Coliseu: Exposição Imersiva","content":"","line1":"São Paulo | Múltiplas datas","imgUrl":"https://cdn.getcrowder.com/images/1f3b94ac-cf23-42ce-b33b-6827cf0df9b1-d7da5bd7-47ef-433c-89fb-48df06995792-1920x720-35.jpg","label":"Shopping Vila Olímpia","link":"https://www.ticketmaster.com.br/event/coliseu-exposicao-imersiva","buttonText":"Confira","moveTimestamp":1777498876163},{"title":"Hot Wheels City Experience","content":"","imgUrl":"https://cdn.getcrowder.com/images/50d7ab6d-afa0-4f13-baa5-e1a981f45018-8a55eb4f-8102-4b3e-96a6-b87aa0b8afcc-banner-header-1.png","line1":"Campinas | Múltiplas datas","label":"Shopping Iguatemi Campinas","link":"https://www.ticketmaster.com.br/event/hotwheelscityexperience-campinas","buttonText":"Confira","moveTimestamp":1777498876163},{"title":"Casa Warner","content":"","imgUrl":"https://cdn.getcrowder.com/images/c4c8fdf3-7285-4d69-a018-86a0d5567ca4-d6d683c0-b89e-49c4-9bbf-595a5608ee7c-bannerticketmaster1920x720-1-1.png","line1":"Brasília | Múltiplas datas","line2":"","label":"ParkShopping Brasília","buttonText":"Confira","link":"https://www.ticketmaster.com.br/event/casa-warner-brasllia","moveTimestamp":1777498847969},{"title":"Roda Rico","content":"","imgUrl":"https://cdn.getcrowder.com/images/5b6a690e-d331-4a2f-b01d-b40745b1dcf5-banner-1-passeio.jpg","label":"Parque Cândido Portinari","line1":"São Paulo | Múltiplas datas","link":"https://www.ticketmaster.com.br/event/roda-rico","buttonText":"Confira","moveTimestamp":1777498847969},{"title":"São Paulo Oktoberfest 2026","content":"","imgUrl":"https://cdn.getcrowder.com/images/907c8212-ec27-4c46-9ae8-da188e953846-46da159a-b35e-48c9-a2de-188d5026f079-nova-full-banner---pgina-do-evento.png","line1":"São Paulo | Múltiplas datas","label":"Parque Ibirapuera","link":"https://www.ticketmaster.com.br/event/sao-paulo-oktoberfest","buttonText":"Confira","moveTimestamp":1777498845531},{"title":"Sampa Sky","content":"","imgUrl":"https://cdn.getcrowder.com/images/012db2c8-a361-40f9-a20f-11cd4972bbfb-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif","line1":"São Paulo | Múltiplas datas","label":"Mirante do Vale","buttonText":"Confira","moveTimestamp":1777498843288,"link":"https://www.ticketmaster.com.br/event/sampasky"},{"title":"Henry & Klauss: Master of Magic","content":"","imgUrl":"https://cdn.getcrowder.com/images/e176f4e3-954e-4b32-84f9-b8f2f7f15108-ab787e46-7ec8-4ae8-bb7b-5de648821c11-henryclausslanding1920x720.gif","link":"https://www.ticketmaster.com.br/event/henry-e-klauss","buttonText":"Confira","label":"Teatro VillaLobos","line1":"São Paulo | Múltiplas datas","moveTimestamp":1777989403034},{"title":"Vinhos de Portugal","content":"","moveTimestamp":1777989403034,"imgUrl":"https://cdn.getcrowder.com/images/39d0d80d-ab98-4d32-b233-dfdef02c2427-2e9c5d8e-3dfe-400f-b638-7aedf5c521d4-banner-genrico-1920x720-landing-page-v4.jpg.jpg","line1":"Múltiplas cidades | Múltiplas datas","label":"Múltiplas cidades","link":"https://www.ticketmaster.com.br/event/vinhos-de-portugal","buttonText":"Confira"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/familia","buttonText":"Ver mais"}},"version":1},{"id":"component-2037b4fd-8fe3-4d8f-a609-6e0962da1fc5","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Esportes"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{},"cards":[{"title":"TCB","content":"","imgUrl":"https://cdn.getcrowder.com/images/f2b7d863-ec99-4abc-a961-0fa85306853a-62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.webp","link":"https://www.ticketmaster.com.br/event/tcb","label":"Múltiplas cidades","line1":"Múltiplas cidades | De 09 a 31 de Maio","buttonText":"Confira","openInNewTab":true,"moveTimestamp":1778710352415},{"title":"VNL – Volleyball Nations League","content":"","imgUrl":"https://cdn.getcrowder.com/images/c7347f5f-b458-41b5-80c7-16e552b4eb04-f51e4f2c-5e60-4458-b602-3bea125be567-banneroptimized.jpg","label":"Arena Nilson Nelson","line1":"Brasília | 03 a 14 de Junho","link":"https://www.ticketmaster.com.br/event/volleyball-nations-league-2026","buttonText":"Confira","openInNewTab":true,"moveTimestamp":1778710619038},{"title":"UTS Rio 2026","content":"","label":"Maracanãzinho","link":"https://www.ticketmaster.com.br/event/uts-rio-2026-br","imgUrl":"https://cdn.getcrowder.com/images/222f00a2-40b7-49b1-9da3-eda48e9dae5d-355af701-cf5a-4b9e-a60c-af6ded064129-tmbannerutsrj1920x720-1.gif","line1":"Rio de Janeiro | 16, 17 e 18 de Julho","openInNewTab":true,"buttonText":"Confira","moveTimestamp":1778710619038},{"title":"College Football","content":"","imgUrl":"https://cdn.getcrowder.com/images/d9e7c8eb-ce71-4aa4-ba29-455f61dacfc1-8a1fdb11-766a-4096-a3ee-50f5cb2f7beb-2118c256-a58c-4f92-b1be-9176bb9d5d16-college-football-01.webp","line1":"Rio de Janeiro | 29 de Agosto","link":"https://www.ticketmaster.com.br/event/college-football","buttonText":"Confira","openInNewTab":true,"label":"Estádio Nilton Santos","moveTimestamp":1778710616743},{"title":"NBA House 2026","content":"","imgUrl":"https://cdn.getcrowder.com/images/6cd2a0e4-edc1-4d87-915c-6b7f1769138d-9af580c4-8e9b-4b9f-8662-b4a6958ff448-img3756.webp","line1":"São Paulo | Múltiplas datas","link":"https://www.ticketmaster.com.br/event/nbahouse","buttonText":"Confira","openInNewTab":true,"label":"Shopping Eldorado","moveTimestamp":1778710615228}]},"version":1},{"id":"component-7edd0ecc-23d2-4578-b7a4-8ea8d6b460fb","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | São Paulo e Região"},"config":{"customClass":"main_card","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":12,"offset":0,"sort":"startDate","order":"asc"},"idGroup":"48"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Daniel - Tokio Marine Hall - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/daniel-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/bd845f76-6b61-4aa3-9271-72af00075816-1920x720-40.jpg"},{"title":"Fábio Jr. - São Paulo - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Suhai Music Hall","buttonText":"Comprar","link":"../event/fabio-jr-suhai-music-hall","imgUrl":"https://cdn.getcrowder.com/images/e06995a8-5120-40f1-ad9e-b60b5854a6d8-dfd46c0a-6bda-4f69-8331-2f93e1391c8b-fabiojr---full-banner---pgina-do-evento-1920x720.jpg"},{"title":"Rolex 6 Horas de São Paulo","line1":"10, 11 e 12 de Julho de 2026","line2":"","label":"Autódromo de Interlagos","buttonText":"Comprar","link":"../event/fiawecsaopaulo","imgUrl":"https://cdn.getcrowder.com/images/aee6ec6f-4910-4c80-b6b7-9ad430bb0a30-b70d4f87-1629-4386-ba74-de47fac821c2-bannernormalhome.gif"},{"title":"Eagle-Eye Cherry - Tokio Marine Hall - 25/07/2026","line1":"25 de Julho de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/eagle-eye-cherry-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/e2415d08-420c-4232-9759-c9301a04cd4f-1920x720-27.jpg"},{"title":"Di Ferrero - São Caetano do Sul - 08/08/2026","line1":"8 de Agosto de 2026","line2":"","label":"Multiplan Hall Park Shopping São Caetano","buttonText":"Comprar","link":"../event/di-ferrero-sao-caetano-do-sul","imgUrl":"https://cdn.getcrowder.com/images/199e136d-b3d6-4e05-9fbf-b735995b57e5-full-banner---1920x720-3-1.jpg"},{"title":"SP2B - São Paulo Beyond Business","line1":"09 a 16 de Agosto de 2026","line2":"","label":"Parque Ibirapuera","buttonText":"Comprar","link":"../event/sp2b","imgUrl":"https://cdn.getcrowder.com/images/95b64470-0efa-4b6f-8931-175908a74b90-747ae47d-25f7-44e9-984e-c16f1144036f-landing-ticket-master-01.jpg"},{"title":"This is Michael - São Paulo - 29/08/2026","line1":"29 de Agosto de 2026","line2":"","label":"Suhai Music Hall","buttonText":"Comprar","link":"../event/this-is-michael-suhai-music-hall","imgUrl":"https://cdn.getcrowder.com/images/7d2c19a8-e584-4b61-b226-7ee388936141-this-is-michael---full-banner---home-site-1920x720-1.jpg"},{"title":"Angra - Tokio Marine Hall","line1":"02 e 03 de Outubro de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/angra-tokio-marine","imgUrl":"https://cdn.getcrowder.com/images/42044fb3-056c-4cfd-a391-fa85b6e93eb7-794f3d80-476f-4388-aff3-0bd2771a0dd3-1920x720.jpg"},{"title":"The Cat Empire - São Paulo - 12/11/2026","line1":"12 de Novembro de 2026","line2":"","label":"Audio","buttonText":"Comprar","link":"../event/the-cat-empire-na-audio-sp","imgUrl":"https://cdn.getcrowder.com/images/10b2eb96-6ebe-41f8-a7f4-1f8b8834e4b2-d561beeb-1532-46db-8cf5-c91924eab7ff-01fullbanner-2-1.png"},{"title":"Carol Biazin - Ribeirão Preto - 22/08/2026","line1":"22 de Agosto de 2026","line2":"","label":"Multiplan Hall Ribeirão Shopping","buttonText":"Comprar","link":"../event/carol-biazin-ribeirao-preto","imgUrl":"https://cdn.getcrowder.com/images/3c6c4259-1210-47ed-8bbb-37d5a28e00e9-1920x720-5.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/sp","openInNewTab":"true","buttonText":"Ver mais"}},"version":1},{"id":"component-3db96dfb-0b71-4e3d-b558-ac01d7d591b0","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | Rio de Janeiro"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":10,"offset":0,"sort":"startDate","order":"asc"},"idGroup":"47"},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Nubya Garcia | Queremos! - Rio de Janeiro","line1":"02 de Junho de 2026","line2":"","label":"Manouche","buttonText":"Comprar","link":"../event/nubya-garcia-queremos-no-manouche-rj-1","imgUrl":"https://cdn.getcrowder.com/images/69cdf03f-3c80-4fb1-a5b1-6bb08c453c81-7fab0877-a90c-4ea7-a0a5-2f25ee304e77-nubyagarciarj01fullbanner.jpg"},{"title":"Anavitória - Rio de Janeiro - 05/06/2026","line1":"05 de Junho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/anavitoria-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/0766f8be-3784-4564-b9bf-a71f09d8ed02-tkm---1920x720-1.png"},{"title":"Chico Chico no Qualistage - RJ - 12/06/2026","line1":"12 de Junho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/chico-chico-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/18b6281b-de5e-4ffc-b985-f53cd94e1afe-1920x720-3-1.png"},{"title":"Rodrigo Teaser no Qualistage - RJ - Data Extra - 12/07/2026","line1":"14 de Junho e 12 de Julho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/rodrigo-teaser-no-qualistage-rj-dataextra","imgUrl":"https://cdn.getcrowder.com/images/4f778cce-a524-4070-99eb-96336b62ecbe-1920x720-6-1.png"},{"title":"Ludmilla - Qualistage - RJ - 23/07/2026","line1":"23 de Julho de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/ludmilla-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/51a79a5e-7bf2-43b9-9bca-e5cac3612745-1920x720-5-1.png"},{"title":"João Bosco no Qualistage - RJ - 08/08/2026","line1":"08 de Agosto de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/joao-bosco-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/392b6f40-44f7-48d5-bed2-fc7cd730f609-full-banner---1920x720-1.png"},{"title":"Daniel Boaventura - Qualistage - RJ - 28/08/2026","line1":"28 de Agosto de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/daniel-boaventura-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/47eb8c9c-571d-4997-b74e-02742064124f-1920x720-2.jpg"},{"title":"Joshua Redman | Queremos! - Rio de Janeiro - 30/09/2026","line1":"30 de Setembro de 2026","line2":"","label":"Vivo Rio","buttonText":"Comprar","link":"../event/joshua-redman-queremos-no-vivo-rio-rj","imgUrl":"https://cdn.getcrowder.com/images/8380f217-6cd4-4108-b4eb-feaa1d011c7f-872c6fcc-46fd-4658-9fe8-7f08f95dc3b1-01fullbannereffect.jpg"},{"title":"Whinderson Nunes no Qualistage - RJ - 18/10/2026","line1":"18 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/whinderson-nunes-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png"},{"title":"Oswaldo Montenegro no Qualistage - RJ - 24/10/2026","line1":"24 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/oswaldo-montenegro-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/d740dc02-8a26-4229-9015-206b6660ec02-1920x720-1-1.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/rj","buttonText":"Ver mais"}},"version":1},{"id":"component-fe9500e5-0062-4ebf-b4d3-5822425e3cc4","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Destaques | Demais cidades"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":239},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.address.city"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"TCB","line1":"30 de 31 de Maio de 2026","line2":"","label":"São José","buttonText":"Comprar","link":"../event/tcb","imgUrl":"https://cdn.getcrowder.com/images/62b448ed-1955-4bf4-8395-484e18257370-0eb2aeb8-dd5d-4abb-a74c-6780e0a42cc1-bannerresized1280.png"},{"title":"João Bosco - Juiz de Fora - 26/06/2026","line1":"26 de Junho de 2026","line2":"","label":"Juiz de Fora","buttonText":"Comprar","link":"../event/joao-bosco-juiz-de-fora","imgUrl":"https://cdn.getcrowder.com/images/fcfc7e88-ed93-4388-a7ac-4925a788a6e2-60f85ca1-8bbc-4363-bff0-f0697abf519e-whatsapp-image-2026-02-27-at-14.48.14.jpg"},{"title":"DVL Rock Festival - Cascavel - 19/07/2026","line1":"19 de Julho de 2026","line2":"","label":"Cascavel","buttonText":"Comprar","link":"../event/dvl-rock-festival","imgUrl":"https://cdn.getcrowder.com/images/8d92b5b8-ff79-4149-bb48-dec03e23d8f4-4bf3f22d-0ebc-48f2-85b3-f1d36aae1aa1-whatsapp-image-2026-03-10-at-11.29.42-1.jpg"},{"title":"Nazareth - Celebrando 55 Anos - Belo Horizonte","line1":"24 de Julho de 2026","line2":"","label":"Belo Horizonte","buttonText":"Comprar","link":"../event/nazareth-celebrando-55-anos","imgUrl":"https://cdn.getcrowder.com/images/92ddb5a4-83e2-45e1-982f-5083441cd591-cac2a353-1e62-4e5c-a84f-72348192de2c-1920x720-nazareth-min.png"},{"title":"Sticky Fingers - Curitiba - 08/08/2026 - Venda Geral","line1":"08 de Agosto de 2026","line2":"","label":"Curitiba","buttonText":"Comprar","link":"../event/sticky-fingers-curitiba","imgUrl":"https://cdn.getcrowder.com/images/39b452ca-67b5-4817-9c6f-f896e0ed10f7-d733e449-58e9-4928-94af-ae92b3e15afe-stfilanding1920x720-2-1.gif"}]},"version":1},{"id":"component-c08e85f9-a4b0-48ae-9ac2-4fb22c58f6f6","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Espetáculos, Teatro & Comédia 🎭"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":214},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Murilo Couto: Novo Show - Rio de Janeiro - 28/05/2026","line1":"28 de Maio de 2026","line2":"","label":"Teatro da Ilha","buttonText":"Comprar","link":"../event/murilo-couto-novo-show-teatro-da-ilha","imgUrl":"https://cdn.getcrowder.com/images/a6faecf0-53ff-4175-bbef-f68587fed41e-whatsapp-image-2026-03-27-at-07.37.38-2.jpeg"},{"title":"O Mágico de Oz - São Paulo","line1":"8 de Março a 02 de Agosto de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/o-magico-de-oz-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/23fc8da4-c804-471c-a787-04f09494ffc8-tmgrid1920x720-1.png"},{"title":"Vindos de Longe - São Paulo","line1":"26 de Junho a 02 de Agosto de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/vindos-de-longe-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/1884ffb1-8a67-4bbe-9675-af343cc5e063-cfabanner1920x720-3.jpg"},{"title":"Elton John Diamonds - São Paulo","line1":"04, 11, 18 e 25 de Setembro de 2026","line2":"","label":"Teatro Ruth Escobar","buttonText":"Comprar","link":"../event/elton-john-diamonds-teatro-ruth-escobar","imgUrl":"https://cdn.getcrowder.com/images/86fe488e-0a3c-4b30-9ddf-890cd37f775a-1920-x720-ticketmaster-copy.jpg"},{"title":"Whinderson Nunes no Qualistage - RJ - 18/10/2026","line1":"18 de Outubro de 2026","line2":"","label":"Qualistage","buttonText":"Comprar","link":"../event/whinderson-nunes-no-qualistage-rj","imgUrl":"https://cdn.getcrowder.com/images/74e482c4-06a2-4c55-a6ff-4d351bec8037-80e3141d-2ab1-4255-99de-814bab01c1ce-1920x720-1.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/teatro","buttonText":"Ver mais"}},"version":1},{"id":"component-ad7cbd52-b02a-4ce5-9447-61bd79cb55aa","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Última chance"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":5,"offset":0,"sort":"startDate","order":"asc"},"idGroup":180},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"MODEL","value":"venue.name"},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"Martinho da Vila & Mart´Nália | Pai e Filha - Rio de Janeiro - 30/05/2026","line1":"30 de Maio de 2026","line2":"","label":"Vivo Rio","buttonText":"Comprar","link":"../event/martinho-da-vila-martnalia-pai-e-filha-rio-de-janeiro","imgUrl":"https://cdn.getcrowder.com/images/224fc7bf-f63f-4c3e-953b-df956554b9df-5f364237-e809-4991-8a5c-057dc23a3fdb-1920x720-color.jpg"},{"title":"Lenine - Tokio Marine Hall - 30/05/2026","line1":"30 de Maio de 2026","line2":"","label":"Tokio Marine Hall","buttonText":"Comprar","link":"../event/lenine-tokio-marine-hall","imgUrl":"https://cdn.getcrowder.com/images/38fdd9b6-2187-4c30-b3a0-9859e7cc7385-1920x720-33.jpg"},{"title":"School of Rock Jardins - São Paulo - 31/05/2026","line1":"31 de Maio de 2026","line2":"","label":"The Cavern Club","buttonText":"Comprar","link":"../event/school-of-rock-jardins-the-cavern-club","imgUrl":"https://cdn.getcrowder.com/images/27999fcf-3346-406a-b044-b268858cd6c4-1920x720-4-1-1.png"},{"title":"Nubya Garcia | Queremos! - São Paulo","line1":"03 de Junho de 2026","line2":"","label":"Casa Natura Musical","buttonText":"Comprar","link":"../event/nubya-garcia-queremos-na-casa-natura-sp","imgUrl":"https://cdn.getcrowder.com/images/be678cc0-0b1a-40dd-a3b8-774fceb11b13-39d2352f-6b3c-45d6-997a-a9617459c367-nubyagarciasp01fullbanner.jpg"},{"title":"Manti Wine Sessions - Autódromo Velocitta - 05 e 06/06/2026","line1":"5 e 6 de Junho de 2026","line2":"","label":"Autodromo Velocitta","buttonText":"Comprar","link":"../event/manti-wine-sessions","imgUrl":"https://cdn.getcrowder.com/images/0774ea2c-ffa8-4d78-ae37-1f9b2fb5da50-fc28420b-5767-4f1c-b64a-70a386e338cb-banner-festival-07.png"}],"viewMore":{"enabled":true,"link":"https://www.ticketmaster.com.br/page/ultima-chance","buttonText":"Ver mais"}},"version":1},{"id":"component-7c09ae95-6c05-4749-ae88-d80f672878ec","widgetType":"Grid","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"tm-banner","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":2},"cards":[{"title":"Experiências premium","content":"","imgUrl":"https://cdn.getcrowder.com/images/f8289d25-28f8-4cbc-98c2-9eff8e763131-experienciaspremium1920x720v1.png","link":"https://www.ticketmaster.com.br/event/experiencias","buttonText":""},{"title":"Rock in Rio","content":"","link":"https://www.ticketmaster.com.br/event/rockinrio","imgUrl":"https://cdn.getcrowder.com/images/5d9b5105-c271-4878-8621-bfdbfd799ae7-rir-banner.gif"}]},"version":1},{"id":"component-d54e1b4b-6476-42ea-a1ca-67b8066850e4","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Grandes eventos"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"standard","cardsPerRow":5},"dynamicContent":{"entityType":"event","listName":"cards","data":{"config":{"max":15,"offset":0,"sort":"startDate","order":"asc"},"idGroup":33},"binding":{"title":{"sourceType":"MODEL","value":"name"},"line1":{"sourceType":"MODEL","value":"description"},"line2":{"sourceType":"CUSTOM","value":""},"label":{"sourceType":"CUSTOM","value":""},"buttonText":{"sourceType":"CTA","value":"generic.buy"},"link":{"sourceType":"MODEL","value":"link"},"imgUrl":{"sourceType":"MODEL","value":"homepageImage"}}},"cards":[{"title":"ENHYPEN WORLD TOUR 'BLOOD SAGA'","line1":"04 de Julho 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/enhypen","imgUrl":"https://cdn.getcrowder.com/images/225e53b3-94d4-4af5-a270-e76521098746-enhypen1920x720px.gif"},{"title":"Harry Styles: Together, Together","line1":"Julho de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/harry-styles","imgUrl":"https://cdn.getcrowder.com/images/62a3b2d5-23f9-435a-8f87-bcc7fd658630-edhome-1.gif"},{"title":"Rosalía: Lux Tour 2026","line1":"10 e 11 de Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/rosalia","imgUrl":"https://cdn.getcrowder.com/images/cddb5541-b857-4993-ac09-fc0cb0681cc9-tmgrid1920x720home.gif"},{"title":"Sticky Fingers: Live in Latin America 2026","line1":"Agosto de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/sticky-fingers","imgUrl":"https://cdn.getcrowder.com/images/aa70f3dd-82e4-45b0-9e06-d1f861c21ea3-stickyyy.gif"},{"title":"aespa: 2026-27 aespa LIVE TOUR - SYNK : COMPLæXITY -","line1":"04 de Setembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/aespa","imgUrl":"https://cdn.getcrowder.com/images/e12ea68c-5dbb-4f12-b1e2-1d0585b263f9-aespa1920x720home.gif"},{"title":"5 Seconds Of Summer: Everyone's A Star World Tour","line1":"São Paulo e Belo Horizonte","line2":"","label":"","buttonText":"Comprar","link":"../event/5sos","imgUrl":"https://cdn.getcrowder.com/images/6e1091bc-9b40-4fb1-8dec-c69897d27d7a-5sos1920x720home.gif"},{"title":"ZAYN: The Konnakol Tour","line1":"Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/zayn","imgUrl":"https://cdn.getcrowder.com/images/e9e30072-c0e5-4b28-8577-0ce19cba6e3b-zayn1920x720home.gif"},{"title":"Kid Abelha: Eu Tive Um Sonho","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/kid-abelha","imgUrl":"https://cdn.getcrowder.com/images/9c78d841-e9a0-434e-ba5f-4a9e7f97a24f-img4832.gif"},{"title":"BTS WORLD TOUR ARIRANG","line1":"28, 30 e 31 de Outubro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/bts-world-tour-arirang","imgUrl":"https://cdn.getcrowder.com/images/f862039e-2a11-4acc-a59e-be51a2fd10b4-bts1920x720home.gif"},{"title":"Djavan: Djavanear 50 anos - Só Sucessos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/djavan3","imgUrl":"https://cdn.getcrowder.com/images/99dd624b-8290-4115-8308-9ecf331a4aba-djavanhome1920x720.gif"},{"title":"CA7RIEL & Paco Amoroso: Free Spirits World Tour","line1":"Novembro de 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/ca7riel-e-paco-amoroso","imgUrl":"https://cdn.getcrowder.com/images/ead8d883-666a-4332-a78b-2f6cb267ce73-ca7rielpacohome1920x720.gif"},{"title":"KAROL G: Viajando Por El Mundo Tropitour","line1":"12 de Fevereiro de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/karol-g","imgUrl":"https://cdn.getcrowder.com/images/3969935e-3d73-4b67-8f04-c93337960761-karolghome1920x720.gif"},{"title":"Louis Tomlinson: How Did We Get Here? Latin American Tour","line1":"06 e 07 de Abril de 2027","line2":"","label":"","buttonText":"Comprar","link":"../event/louis-tomlinson","imgUrl":"https://cdn.getcrowder.com/images/f2ec2c4b-fb6c-4fd3-b19f-86804537fec9-louis1920x720homeextra.gif"},{"title":"Xande de Pilares & Revelação: Tava Escrito – O Reencontro Histórico","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/revelacao-e-xande-de-pilares","imgUrl":"https://cdn.getcrowder.com/images/2f2f1454-132b-4127-8a4b-1abef6ac1cff-revelaohome1920x720-1.gif"},{"title":"Tiago Iorc - Turnê Troco Likes 10 Anos","line1":"Turnê 2026","line2":"","label":"","buttonText":"Comprar","link":"../event/tiago-iorc","imgUrl":"https://cdn.getcrowder.com/images/99b657ba-06be-47ba-90c4-3e9a02819fed-tiagoiorc1920x720home.gif"}]},"version":1},{"id":"component-cc33c46c-eccc-486a-b11b-d857cbb2773b","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Locais"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"vertical","cardsPerRow":4},"cards":[{"title":"Roda Rico","content":"","imgUrl":"https://cdn.getcrowder.com/images/e81f737d-15f6-4ce9-a47a-9e48455bc86e-banner-1-passeio.jpg","link":"https://www.ticketmaster.com.br/event/roda-rico","buttonText":"Comprar"},{"title":"Sampa Sky","content":"","imgUrl":"https://cdn.getcrowder.com/images/78be3784-bd99-4939-ae86-4ac5c5474e48-99ddb008-ecb2-4e8c-876c-280466c84e6d-tmbannerfev261920x720.gif","link":"https://www.ticketmaster.com.br/event/sampasky","buttonText":"Comprar"},{"title":"Zoo São Paulo","content":"","imgUrl":"https://cdn.getcrowder.com/images/fae56cc7-2eed-4b41-8553-902eecfd9f06-zoo1920.png","link":"https://www.ticketmaster.com.br/event/zoo-sao-paulo","buttonText":"Comprar"},{"title":"Jardim Botânico","content":"","imgUrl":"https://cdn.getcrowder.com/images/7f1e0a9d-59ca-4d46-b4fd-89953cbbe0ae-jardimbotanico1920x720.gif","link":"https://www.ticketmaster.com.br/event/jardim-botanico-sp","buttonText":"Comprar"}]},"version":1},{"id":"component-1f9fe5af-ff0e-4368-86ca-03921f2eec10","widgetType":"Grid","state":{"enabled":true,"header":{"title":"Casas"},"config":{"customClass":"","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"cardsConfig":{"cardsOrientation":"vertical","cardsPerRow":4},"cards":[{"title":"The Cavern Club","content":"","imgUrl":"https://cdn.getcrowder.com/images/6a4b1b3e-b0b2-4d97-9204-038afd35b19e-bannerticketmastercavern1920x720.jpg","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"link":"https://www.ticketmaster.com.br/page/the-cavern-club","buttonText":"Confira","moveTimestamp":1760986847851},{"title":"Multiplan Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/5190afb5-ce64-464c-94fa-1a737d0d67a0-multiplan-sao-caetano.png","link":"https://www.ticketmaster.com.br/page/multiplan-hall-saocaetano","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"ParkShopping São Caetano"}]}]},"md":{"result":"ParkShopping São Caetano","warnings":{}}},"moveTimestamp":1760986847851},{"title":"Multiplan Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/84240362-9467-48aa-a8e6-0dda63a962df-multiplan-ribeirao.png","link":"https://www.ticketmaster.com.br/page/multiplan-hall-ribeirao","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"RibeirãoShopping"}]}]},"md":{"result":"RibeirãoShopping","warnings":{}}},"moveTimestamp":1760986846283},{"title":"Qualistage","content":"","imgUrl":"https://cdn.getcrowder.com/images/d93f9bb8-c0b0-4917-91d2-f7820786f700-quali.png","link":"https://www.ticketmaster.com.br/page/qualistage","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Rio de Janeiro"}]}]},"md":{"result":"Rio de Janeiro","warnings":{}}},"moveTimestamp":1760986844621},{"title":"Suhai Music Hall","content":"","link":"https://www.ticketmaster.com.br/page/suhai-music-hall","buttonText":"Confira","imgUrl":"https://cdn.getcrowder.com/images/494e6ac2-9cef-4d2d-bc5a-79f66e87ac5a-50feed0e-7d50-4a49-973b-62ca827e19f4-banneroptimizedv2.webp","moveTimestamp":1774997432897,"description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}}},{"title":"Teatro da Ilha","content":"","moveTimestamp":1774997432897,"imgUrl":"https://cdn.getcrowder.com/images/310ad4f9-fdac-48f6-a4ef-1d31c862733f-capaticketmasteroptimized.jpg","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Rio de Janeiro"}]}]},"md":{"result":"Rio de Janeiro","warnings":{}}},"link":"https://www.ticketmaster.com.br/page/teatrodailha","buttonText":"Confira"},{"title":"Teatro Ruth Escobar","content":"","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"buttonText":"Confira","link":"https://www.ticketmaster.com.br/page/teatroruthescobar","imgUrl":"https://cdn.getcrowder.com/images/c46c533e-e7ff-4a94-906f-978925f500e8-a5069e88-9e23-4db2-87ad-703562eb98b9-1920x720-teatro-ruth-escobar-2-2.png","moveTimestamp":1774997431758},{"title":"Tokio Marine Hall","content":"","imgUrl":"https://cdn.getcrowder.com/images/15f8f90e-b6be-43d8-99e1-32090242da8a-tokio.webp","link":"https://www.ticketmaster.com.br/page/tokio-marine-hall","buttonText":"Confira","description":{"adf":{"version":1,"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"São Paulo"}]}]},"md":{"result":"São Paulo","warnings":{}}},"moveTimestamp":1774997401682}]},"version":1},{"id":"component-a7bb9492-891f-4d01-a218-6a26931b1473","widgetType":"Html","state":{"enabled":true,"header":{"title":""},"config":{"customClass":"","containerAppearance":"centered","backgroundColor":"#024ddf","titleColor":"#ffff","paragraphColor":"","linkColor":""},"html":"<div class=\"tm-suscribe\">\n    <div style=\"font-size:1.5em; font-weight:600; color:#fff; margin-bottom:10px\">Inscreva-se para saber as novidades</div>\n    <iframe allow=\"autoplay\" title=\"Inscreva-se para saber as novidades\"\n        sandbox=\"allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-popups-to-escape-sandbox\"\n        id=\"pD2hFh\" class=\"embed_frame\" loading=\"lazy\" src=\"https://m.cmpgn.page/pD2hFh?embed=3\"\n        style=\"border:none;min-width:100%;height:168px\" allowpaymentrequest=\"\" allowfullscreen=\"\"\n        data-hj-allow-iframe=\"\"></iframe>\n</div>"},"version":1},{"id":"component-e63baadf-23ef-4018-8721-2ab8b18684a1","widgetType":"Image","state":{"enabled":true,"header":{"title":"Seu evento na ticketmaster- Saiba mais"},"config":{"customClass":"tm-banner","containerAppearance":"full-width","backgroundColor":"","titleColor":"","paragraphColor":"","linkColor":""},"htmlUrl":"https://cdn.getcrowder.com/images/1a9c53c8-d1ef-48cb-b6be-0e4f496519f6-tmb2bdesktop-2.gif","mobileUrl":"https://cdn.getcrowder.com/images/a1d1d213-be80-4fa2-ae0d-092f424cdb52-tmb2bmobile-2.gif","linkControl":{"haveLink":true,"haveLinkUrl":"https://business.ticketmaster.com.br/pt/"}},"version":1}],"cmsMenuOptions":[],"cmsPageHeader":{"id":"4320ff4f-d648-4eb3-a1f5-d18534ddc0eb","enabled":false,"html":"<div class=\"sector-pre-header horizontal-container navbar-container bg-black\">\n    <div class=\"\">\n        <img src=\"https://cdn.getcrowder.com/images/e0531a24-a002-4ece-95b7-a4f8a195afcf-logo-br-1.png\" alt=\"\"\n            width=\"20px\">\n        <span>\n            BR\n        </span>\n        <!-- Modal -->\n        <div class=\"modal fade\" id=\"country-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\"\n            data-backdrop=\"static\">\n            <div class=\"country-modal-dialog\">\n                <div class=\"modal-content\" style=\"color: black;\">\n                    <a href=\"javascript:void(0);\"\n                        onclick=\"var element = document.getElementById('country-modal'); element.style.display = 'none'; element.style.opacity = 0;\">X</a>\n                    <div>\n                        Location\n                    </div>\n                    <div> Perú\n                    </div>\n                    <div>\n                        Lima\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"\">\n        <div class=\"menu\">\n            <a href=\"https://business.ticketmaster.pe/trabaja-con-nosotros/\">\n                <img src=\"https://cdn.getcrowder.com/images/9dda0dde-b9d3-4947-8c22-cc081358c0b2-shoppingbag.png\" alt=\"\"\n                    width=\"20px\">\n                <span>\n                    Venda \n                </span>\n                <span class=\"hidden-xs\">\n                    conosco\n                </span>\n            </a>\n            <a href=\"https://help.ticketmaster.com.br/hc/pt-br\">\n                Suporte\n            </a>\n        </div>\n    </div>\n</div>"}}}});
				App.start();
			})();
		</script>



	</body>
</html>



<!DOCTYPE html><html lang="pt-br"><head><meta charSet="utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1"/><meta name="viewport" content="width=device-width, initial-scale=1"/><link rel="preload" as="image" href="https://d1gkntzr8mxq7s.cloudfront.net/67f04b82c8dff.png"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/76dd92d38110a42b.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/f6409ef0593504e9.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/e001879c65408458.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/8fdc4690f23c45d4.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/69906c4c92492d03.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/43b6e689f42ee6fc.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/1cd30df508bb3958.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/9cbf9303a4942085.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/3ee27c142221e531.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/6b0e51c5390c4395.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/80228158aa2f99ff.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/a0588f11fda9688b.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/28d750e821d57502.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/81adf2e23941d5a1.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/ab9beaaf82635d3a.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/1e895ac1e3826ddc.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/8738e7102d63e955.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/9202f108d9c1ba50.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/2610153976963595.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/31cb47880d43bba9.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/0edc96ba0be1af72.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/04be4931570bc4cb.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/b3cdf831462ac163.css" data-precedence="next"/><link rel="stylesheet" href="https://discovery-next.svc.sympla.com.br/_next/static/css/06a28c080195c3eb.css" data-precedence="next"/><link rel="preload" as="script" fetchPriority="low" href="https://discovery-next.svc.sympla.com.br/_next/static/chunks/webpack-56aeaa5e12df554e.js"/><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/fd9d1056-c58bcef77e610e28.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/7115-62c52d5b8bf62201.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/main-app-02f44cd9a03d25cd.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/5567-a8f600f2052fc7f9.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/app/global-error-aec6069bd0becbcf.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/c857e369-1b53ef2b4f30afe9.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/6468630d-6b5d3a2fc12dc0f2.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/aaea2bcf-ad5bc3d62ce7f818.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/7889-7b3d9616249f87b5.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/9067-2ef8c7542ce8b0eb.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/5541-6f95a20f5b995969.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/4623-379eb030278c063a.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/154-cff9021f866a9b7f.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/9485-fed383efd987fd67.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/5918-1066b12b59e47012.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/6512-ba907d743dc866d5.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/1923-ab762a7a95e13661.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/app/home/layout-f9ade6f7068fdeb3.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/8959-a229c58b5f761b45.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/4208-a0f4856db19d9eb4.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/app/layout-0b2bc19b3150f5ac.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/635-c2ce554cc9557685.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/app/not-found-d3919b6a67ba449a.js" async=""></script><link rel="preload" href="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7378062192656997" as="script" crossorigin=""/><link rel="icon" href="https://www.sympla.com.br/favicon.ico" sizes="any"/><link rel="preconnect" href="https://connect.facebook.net"/><link rel="preconnect" href="https://www.sympla.com.br"/><link rel="preconnect" href="https://accounts.google.com"/><link rel="dns-prefetch" href="https://connect.facebook.net"/><link rel="dns-prefetch" href="https://www.sympla.com.br"/><link rel="dns-prefetch" href="https://accounts.google.com"/><title>Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais</title><meta name="description" content="A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!"/><link rel="canonical" href="https://www.sympla.com.br/home"/><meta property="og:title" content="Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais"/><meta property="og:description" content="A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!"/><meta property="og:image" content="https://www.sympla.com.br/images/logo-sympla-for-facebook.png"/><meta property="og:image:width" content="1156"/><meta property="og:image:height" content="607"/><meta property="og:type" content="website"/><meta name="twitter:card" content="summary"/><meta name="twitter:site" content="@Sympla"/><meta name="twitter:title" content="Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais"/><meta name="twitter:description" content="A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!"/><meta name="twitter:image" content="https://www.sympla.com.br/images/logo-sympla-for-facebook.png"/><meta name="twitter:image:width" content="1156"/><meta name="twitter:image:height" content="607"/><meta name="next-size-adjust"/><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/polyfills-42372ed130431b0a.js" noModule=""></script></head><body style="display:flex;flex-direction:column;background-color:var(--color-neutral-0)" class="__className_0d2434 __className_99fa2f __variable_99fa2f"><noscript><iframe title="sympla-gtm" src="https://www.googletagmanager.com/ns.html?id=GTM-MXLMPC"></iframe></noscript><!--$?--><template id="B:0"></template><div class="_7i08rm0" data-testid="loading-container"><img src="data:image/gif;base64,R0lGODlhPgA+APcAAAAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3x8fH19fX5+fn9/f4CAgIGBgYKCgoODg4SEhIWFhX2HjXaJlXCKnWqMpGSNq1iPtk6Rv0WSyD2TzzeU1DGU2S2V3SaV4x+V6BqW7BaW7xOW8hSW8RaW8BmW7h2X7CSZ6yuc6jSe6Dqg6D+i5kWj5Uyk4lKm4Fqn3WSo12mo1G+p0XepzH+px4qqwJaruaWssKysrK2tra6urq+vr7CwsLGxsbKysrOzs7S0tLW1tba2tre3t7i4uLm5ubq6uru7u7y8vL29vb6+vr+/v8DAwMHBwcLCwsPDw8TExMXFxcbGxsfHx8vLy9LS0tvb2+Tk5Ozs7PLy8vf39/v7+/39/f7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJBADwACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AAAiXAOEJHEiwoMGDCBMqXMiwocOHECNKnEiRoLJRoEQpq8ixYSpLIC1lQtWx5MFl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yej+zOr+0Ov+1O3+2e/+4PL+5/X+8Pj++fz+/v7//v7//v7//v//////////////////////////////////////////////////////////////////////////////////////////////////////////////CM0A4QkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2qEt22jx4HcnpUa+ezjRmihNFXSFEqZSYzYSnGqRLNSqGovLUIDVZPmJ5c5KU4L1bPSz6AUuZHqqWlUNKQUn4naVAlTS6gVpY0s5awj1pfcvlrEpqzUKGXZxEbUJrMmKW1qHyrr1NMT0LgMlfXkRKok3ryiPHECxdXr34XSlCmmdrix48eQI0ueTLmy5cuYM2vezLmz58+gQ4seTbq06dOoU6tezbq169ewY8ueLTkgACH5BAkEAPAAIf4fR2VuZXJhdGVkIGJ5IG9ubGluZUdJRnRvb2xzLmNvbQAsAAAAAD4APgCHAAAAAQEBAgICAwMDBAQEBQUFBgYGBwcHCAgICQkJCgoKCwsLDAwMDQ0NDg4ODw8PEBAQEREREhISExMTFBQUFRUVFhYWFxcXGBgYGRkZGhoaGxsbHBwcHR0dHh4eHx8fICAgISEhIiIiIyMjJCQkJSUlJiYmJycnKCgoKSkpKioqKysrLCwsLS0tLi4uLy8vMDAwMTExMjIyMzMzNDQ0NTU1NjY2Nzc3ODg4OTk5Ojo6Ozs7PDw8PT09Pj4+Pz8/QEBAQUFBQkJCQ0NDRERERUVFRkZGR0dHSEhISUlJSkpKS0tLTExMTU1NTk5OT09PUFBQUVFRUlJSU1NTVFRUVVVVVlZWV1dXWFhYWVlZWlpaW1tbXFxcXV1dXl5eX19fYGBgYWFhYmJiY2NjZGRkZWVlZmZmZ2dnaGhoaWlpampqa2trbGxsbW1tbm5ub29vcHBwcXFxcnJyc3NzdHR0dXV1dnZ2d3d3eHh4eXl5enp6e3t7fHx8fX19fn5+f39/gICAgYGBgoKCg4ODhISEhYWFhoaGh4eHiIiIiYmJioqKi4uLjIyMjY2Njo6Oj4+PkJCQkZGRkpKSk5OTlJSUlZWVlpaWl5eXmJiYmZmZmpqam5ubnJycnZ2dnp6en5+foKCgoaGhoqKio6OjpKSkpaWlpqamp6enqKioqampqqqqq6uroaqxl6q3jqm8hanBfajGbqbOYKXVVKPbPqHnL6DvJJ70HZ33GJz5E5z7D5v9C5n+CJn+CZn+Cpr+DZv+EJz+E53+F5/+GqD+HaL+IqT+KKb+Laj+MKr+NKv+Oq3+QbH+SrT+ULf+Vrn+Yr7+bcL+d8b+gsv+jM/+kdH+mNX+odj+qNv+rt3+s+D+ueL+wOX+xOb+yej+0+3+2/D+5PT+9Pr//f7//v7//v7//v7//v7//v7//v7/////////////////////////////////////////////////////////////////////////////////////////////CPIA4QkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4pMyE1bt5EWvVFbdkzZs28oJX6bZgwYL17EnsWMuE3Zr5s3j1nb+VAbMqA3gU0j6rCbMqS8ilFj6tBZMKDAmGmj2nAbs2K+ii2byrWhN2zSpm0ty7at27cZrUl7Bs0bXITSktn0lWzt3YHYniJV9pdgNWFQiQ0tDI/aMKi8ljLO9hhqNMbwtBWD7AyzN8FIdWJ25gsqNMzwaP68WewyZm7SWIqFdhL1t23WrPlFzbu379/AgwsfTry48ePIkytfzry58+fQo0ufTn15QAAh+QQJBADwACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3x8fH19fX5+fn9/f4CAgIGBgYKCgoODg4SEhIWFhYaGhoeHh4iIiImJiYqKiouLi4yMjI2NjY6Ojo+Pj5CQkJGRkZKSkpOTk5SUlJWVlZaWlpeXl5iYmJmZmZqampubm5ycnJeeo46ir36kvm+ly2Km1U2k4jyj6zCh8Sag9Rud+RSc+w+a/Aua/QmZ/geY/gaY/gWX/gSX/gOX/gOX/gKW/gGW/gGW/gGW/gGW/gGW/gOX/gWY/geY/gqa/g2b/hCc/hOd/hae/hmg/hyh/iKk/iWl/iim/iqn/iyo/i+p/jKq/jSr/jmt/kCw/kay/k62/le5/mG9/mnB/nLE/nrI/oLL/ovP/pXT/qPZ/rjh/sfo/tvw/u33/vX7/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////wj+AOEJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqfGitmrWVDq9JU0YsGLRrMBc+C7ZrFixfznImtJZsllGfx6oJPWgN2FGjv6gtNWjt2NNZxJROLdisl1Fcvprh3ErQ2rNewII100q2YDVqLtvKnUu3rlBr1sbWpabsmLBlUulaU6YK1ixWvV7Ojeb1KKygc5uxuhoM21xmV2cl00v2mGHHyuZaI3ZVFeS21Hxd1SVtrjNVV32x3XqN2GejsIpxnsq49Omt2JZl7jVNbjWrV48pJnut6NNe0ehKOzYZFivle5PVBGwX3rW3s7sUix9Pvrz58+jTq1/Pvr379/AxBgQAIfkECQQA8AAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX1+fn5/f3+AgICBgYGCgoKDg4OEhISFhYWGhoaHh4eIiIiJiYmKioqLi4uMjIyNjY2Ojo6Pj4+QkJCRkZGSkpKTk5OUlJSVlZWWlpaXl5eYmJiZmZmampqbm5ucnJydnZ2enp6fn5+goKChoaGioqKjo6OkpKSlpaWmpqanp6eoqKipqamqqqqrq6usrKytra2urq6vr6+wsLCxsbGysrKzs7Out72qusacu9F+t99bsOtCqvMxpvckovobn/wUnf0QnP4Mm/4Kmv4Jmf4Hmf4GmP4Fl/4Dl/4Blv4Blv4Alv4Alv4Blv4Clv4Dl/4HmP4Lmv4Snf4aoP4ho/4qp/42rP5Dsf5St/5dvP5swv59yf6Gzf6R0f6X1P6e1v6k2f6r3P6y3/634f+84/+/5P/J6P/Q6//V7v/d8f/p9v/0+v/3+//5/P/7/f/+/v/+/v/+/v/+/v////////////////////////////////////////////////////////////////8I/gDhCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjyoRIDty2bN1mGsQ2LVo0adjK6RTYbZowZMiKRcs2FB42YEiRCqvWtNqxqEmpNb0GDeuva02/VTs67Nm0nE3BVZs2rdq2pgPLgfMmDq7du3jz6r04Llu1a9rG2b0WbRgwaFqbbiscFRjToWOxHqsmdKa3aFiTSht6bVjmY9Z0gpNWLDO0tzLLWfOVeRg1wTKzQSuN9Rm2mdqi0Y56bBpsmNym7Y56WmY3ar8yIwMWGiY5nr+uYh027Ztzwp6VR9MWk9ts5cuDOcbE1lU5tGvkZOaWjlQp+pniqA1j/+zab5nbpAkT9osat8pDbVMNNddYdxc54wC414IMNujggw0GBAAh+QQJBADjACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXJ7gmt+i1iDoT+JvC2N0B6Q4BKS7AqU9AWV+gKV/ACV/gCV/gCV/gCV/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gGW/gGW/gGW/gGW/gGW/gKX/geZ/gub/hCc/hSe/hef/hmg/hyi/iCj/iWl/iuo/i+p/jWs/jmt/j2v/kKx/kez/kq0/k21/k+2/lG3/VO3/VS3/VS3/Va4/Fi5/Fq5+1y6+1+6+ma8+W2++HPA93nC9YHE84rH8ZLJ75rL7aDN7KLN7KXO66jO6avP6K7P57LR57bT57rU573V5r7W58LZ6cje7szj89Hn9tbq+d3u++Ty/Oz2/fb7/vr8/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////wj+AMcJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqXMmypcuXMGPKnEmzps2bOHMyZFasGLOcvk6NGoWq101moCIpjdSJmE1bS5VqomUTVdRImlbZpHVVkyybzDwtrQQK2M1dqECBOsUrJ7NevX7qnEu3rt2744DNSnWrGU5fojZF4lTKbM1moaJWEmXz1FWszmjK0vRYk9yYtTg9ZirTWSrNlXfF7FWK8uNKrGAye5V0c6VRkVv2kjVKsOtRl00+cwaM1yxToGzfzk2SFypTpUQF36wYN8peokwzv1ppFfGRzl5Jn76Uk65nKZk1leKuGNWwlcxIkY9UqVSv2Cqbqao0nZOsYPBZ7upEf2wpWb34JVMvuNwCVzDM5IfXggwqFBAAIfkECQQA2gAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX12f4Zog5VchqNRibBCjL82jswmkdsbkuYSlO8JlfYElfsClf0Alf4Alf4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Blv4Blv4Cl/4Dl/4FmP4Hmf4Jmf4Lmv4Nm/4PnP4Rnf4Unv4Xn/4cof4ho/4kpf4npv4qp/4uqf4xqv41rP43rf47rv49r/5AsP5Esv5Is/5Ntf5TuP5Zuv5evP5ivv5nwP5pwf5qwf5qwf5qwv5tw/5vw/5xxP5zxf51xv54x/56yP6Ayv6FzP6Izv6Lz/6O0P6S0v6W1P6b1f6g1/6l2v6q3P6u3f6x3/624f654v684/7A5f7F5/7L6f7U7f7g8v7q9v/w+f/z+v/6/f/+/v////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8I/gC1CRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNmzhz6tzJs6fPnxWjQZOWc1qvVaxmFbs5DVenSJo8mSJm81ipSFgjYVJFlOYvUFkjWTrVrOYxTmEvqZpWE1oqTVgtdYp1s9gqUKBGwSp7MxmwXsW6Ah1MuLBhjtIEIzbWq1cyi9J2waJ1jO1GaLNKiQpVChYyyxCRterUKdQqYKAvStMVCtMlS5Q6oaqFzKE0Y7FIaaJECRMnVbUzHkMFNyslTZ9GxQq2jC1ottGM7WIVitOlsJZC9dIILJSlsMY5noUilSrWLFqyaMVqhUqUp0iUwGPdNCt1xWSn4ssP69sTJ06dcIIJJt/th5UmuGxkzCkGNuggVpdw0oozHD1TiymbPKjhfKXsAo1H0hTTSnEb7kcJKLEwI9I0ychySoYliuWJKLAYY5I0ygTzyilgyVcgJzPC0gsz9pUEDTLCEFPLK6WcosoqpbxSSy3FNKNYS9NMI000zUCT5WFgLhQQACH5BAkEAMwAIf4fR2VuZXJhdGVkIGJ5IG9ubGluZUdJRnRvb2xzLmNvbQAsAAAAAD4APgCHAAAAAQEBAgICAwMDBAQEBQUFBgYGBwcHCAgICQkJCgoKCwsLDAwMDQ0NDg4ODw8PEBAQEREREhISExMTFBQUFRUVFhYWFxcXGBgYGRkZGhoaGxsbHBwcHR0dHh4eHx8fICAgISEhIiIiIyMjJCQkJSUlJiYmJycnKCgoKSkpKioqKysrLCwsLS0tLi4uLy8vMDAwMTExMjIyMzMzNDQ0NTU1NjY2Nzc3ODg4OTk5Ojo6Ozs7PDw8PT09Pj4+Pz8/QEBAQUFBQkJCQ0NDRERERUVFRkZGR0dHSEhISUlJSkpKS0tLTExMTU1NTk5OT09PUFBQUVFRUlJSU1NTVFRUVVVVVlZWV1dXWFhYWVlZWlpaW1tbXFxcXV1dXl5eX19fYGBgYWFhYmJiY2NjZGRkZWVlZmZmZ2dnaGhoaWlpampqa2trbGxsbW1tbm5ub29vcHBwcXFxcnJya3V7X3qMVH6bRYOuOYe9LorKI43XF5DlDZLwCJT2BJX6ApX8AZX9AJX+AJX+AJX+AJX+AJX+AJX+AJX+AJX+AJX+AJb+AJb+AJb+AJb+AJb+AZb+AZb+Apb+A5f+BJf+BZj+B5j+CZn+C5r+DZv+EJz+Ep3+FJ7+Fp/+GJ/+G6H+HqL+IKP+IqT+JKX+J6b+Kqf+Laj+MKr+NKv+N6z+Oq7+Pq/+RrP+TbX+ULf+Vbn+Xbz+aMD+dsf+gsv+jdD+ndf+qNv+sd/+t+H+veT+wuX+x+j+0ez+1+7+4PL+6vb+8vn+9/v+/f7+/v7+/v7+/v7+/v7+/v7+/v7//v7//v7//v7//v7//v7/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AmQkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4ocSbKkyZMoU6pcybKly5cwY8qcSbOmzZs4c+rcybOnz59Agwr1uEuXzlqxXL2CRevmLFWfNGkCtaoWyV21aOVqmKuVJkeNGlHS9GrkrFWlSLmitWuhrk+RwoaNVMpWSFqnwDrSdGoWQ1eV5DZyhKmV0Y+vMAm+5IrhrE2CB3+SBdJVXLmUWLVViCtV5EaXTjX16MqSXEeXWjWU5ekz480cZ5G6NLeUX4a5WH2e5MnV4Y27YqUCBcoUrIezRF0W/OmV3Y60ZMm6FREWpc+UNrmiHjOXq0yfI6RtSiULtktbpz6HvRSqFVuYtFbRVp9plKtYo1vOOmVafSNMnJiSylKz0DLLLNJZVZItqvg3VySUYKLJJ56A4kknnbCS30i4wAKKg6c1EhdYlHDyym8j5SKLKv2BGFkkqTxn0iyukOLii6KlpCIspdw4FyobnqQLUqWEothy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wf5twv5vw/5xxP51xf55x/57x/59yf6Byv6Dy/6FzP6GzP6Izf6Kzv6Mz/6P0P6S0f6X0/6c1f6f1/6i2P6m2f6p2/6t3f6y3/614P644f684/6/5P7D5v7S7P7s9/77/f7+/v7+/v7+/v7+/v7+/v7+/v/+/v/+/v/+/v/+/v////////////////////////////////////////////////////////////////////////////////////////////////////8I/gDZCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFitSI+XrlqmOsX8msXRx5DZcoSChTqkRZCZQukSMfagO2aaXNm5A2CdMWU6E2XZdwCrWJCRfPngWV1RzKdOWmYkgFZmvVtOrKSq2OjowWyqpXlaCgjXwWdKgkSpQqqV1bCa0kppyUWXRWFielS6p+TTtIrRcptENJUaNIVyglTb60KswGlBLOS7gmSqu7UlKmXROBvl15qZbEbF1vYs1W0Zoqxyo1DZNY67GtmLhQQ6q0CubDaZhuQkYqjJKkSqecSXQmanPK3VGbwQJ2bSI2WZaMI486UhqsS20txaKONFuyWbGEb3EfT768+fPo06tfz769+/fw48ufT7++/fv48+vfz7+///8ABijggAQWaOCB5FlTiyu42JZfMZmkxIlw+V1DlUqsNIcfM5ysJMpgG3aokmD5WcOKcZC4go1+xnDSViWYLMMfNLPAUsteCOaoo0EBAQAh+QQJBADsACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltb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/ly7/mC9/mW//mnA/m/D/nbG/nzI/oPL/YzO/ZjT/aXY/ana/a/c/LTe/bng/L/j/MDj/MDj/MLk/MXl/cfn/cno/cvp/szq/s7q/s/r/tHs/tLs/tTt/tfu/tjv/tnv/tvw/t7x/uHy/uT0/un2/u74/vP6/vn8/v3+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wj+AMUJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqXMmypcuXMGPKnEmzps2bOHPq3Mmzp8+fJJEJK0YtJ7BarVrZInYzGKxQmRRtosW0Zq5PirIqErXL5ixKWhU1smWz1qawnHjZ/IUKrNRWwWxO47XKlKlXvXIG8wWsmDSggANndEZsmc5lu2rd+tXsZrFZnz6JYsXLWU1hs6KK3cQK2ExqwGZxCqsIFK6iMIXdAtWIdOlbjTcS87ULmGGG1ZD1igXKddZRajcKq2UKVChVu34hc1aNIDVow3zZEuU7ayNQs4xtXHbrU+usmUieoZJ161YuXrpotUpVinX1S6NqKeMYzJXbsJLAY1Uk6X51RaXkcttGv6Ty3X8IakUJKMgNuBEwpxyY4H+blFKLMCAtUwsomUg4oViZgFKKLL3MFxIyvLhSinf5IXhJJpKtUosvDoqkzC+4sHKKKL1lwklrm0QGSiqv1FIbMipV48xeuswiyyyvtCKLLbfo8ssw09CEjDLUOLMMaoJVFBAAIfkECQQA9QAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX1+fn5/f3+AgICBgYGCgoKDg4OEhISFhYWGhoaHh4eIiIiJiYmKioqLi4uMjIyNjY2Ojo6Pj4+QkJCRkZGSkpKTk5OUlJSVlZWWlpaXl5eYmJiZmZmampqbm5ucnJydnZ2enp6fn5+goKChoaGioqKjo6OkpKSlpaWmpqanp6eoqKipqamqqqqrq6usrKytra2urq6vr6+wsLCxsbGysrKnsbeesL2Ur8KLrsZ6rM5dp9pHo+Mvn+0gnPMUmvcMmPoHl/wDlv4Blv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Blv4Dl/4FmP4Imf4Lmv4Nm/4QnP4Rnf4Tnv4Unv4YoP4bof4go/4kpf4npv4vqf45rf5Dsf5Ltf5Xuf5fvf5rwv54x/6DzP6Mz/6R0f+T0v+V0/+Y1P+b1f+q3P++5P/R7P/c8P/q9v/6/f/+/v/+/v/+/v/+/v/+/v/+/v////////////////////////////////////////////8I/gDrCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNmzhzalRHjpy6nOK2WbO2TdxNdNaAFVs67WdNb82WSvVmsxszqUu32YSKtdg3m+mkYbXmtCa5bdmwbUOXU126dGV1yp1Lt67duwTXqYsL9pu2bF9vksMWdWlgmuq0XcUaruY4al2XNp4ZNrLhdTO5KbWsLZ3Mddo2R4b2jS9LddlER6YGTh1ml6hVW94GDt3edbj1ui6ZuLBlrMCqaRueDdq10ry5QfvNfCkw1q9Jgrsmu7lUYJ1PottWzbrlakZRNI7j7h0rtckpx2eDbB1YNranw3HThs2atPvQ7kurlg1c9JbrpGMOOAR+QyA443iG14ITBQQAIfkECQQA5AAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHRmeIVafZVLgqk9hrkvisohjtoXkOUPku4JlPQGlPgDlfsClfwBlf0Alf4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Blv4Blv4Blv4Clv4Cl/4Dl/4El/4FmP4GmP4Hmf8Kmv4Mm/4PnP4Snf4Unv4Xn/4eov4kpP4pp/4uqf4yqv43rP47rv4+r/5BsP5Esf5Gs/5JtP5Ntf5Qt/5UuP5Wuf5Zuv5cu/5evP5gvf5hvv5jvv5lv/5mwP5owP5pwf5rwv5tw/5wxP50xf53xv55x/59yf6By/6FzP6Mz/6R0f6W0/6a1f6f1/6k2f6n2v6q2/6t3P6u3f6x3v624P674v7A5P7F5/7K6P7N6v7R7P7W7v7d8f7i8/7n9f7s9/7x+f73/P7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7///////////////////////////////////////////////////////////////////////////////////////////////////////////////8I/gDJCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjygQJLdiuXsZmFlymyhMnTqSC6RzoKlMkRYouiWo2NNooSUiRYho2dFmoo1E58Wo6ilJURZ+oDgUGSpMlRZluSRsqMJisUqR2RWM7MFozZ3Tz6t3Lt69FacaIHcNLt5msUJ4+tTpGV5YmqJI0uVo7tFOjr5zEznSm6SvSVUOflcIadROxobYweZak6plOZZ5II+30a+irs55DMZ5p7NPlr5REMdN5K5NnRZRQKdssCvfXTKuWzRTmCarnS6hyyszF6ThSTbmkXMN0VtR7pE6riFF22QwVJ+ueG2GK5foltFecZEdt5Ekze1rdeWfJLjJBY8snj3mGCS06EbNKgFF10stQzNgSCieYSBJJKcuxxcwuqHTyiTB7KRNMMn6lqOKKJwUEACH5BAkEAOIAIf4fR2VuZXJhdGVkIGJ5IG9ubGluZUdJRnRvb2xzLmNvbQAsAAAAAD4APgCHAAAAAQEBAgICAwMDBAQEBQUFBgYGBwcHCAgICQkJCgoKCwsLDAwMDQ0NDg4ODw8PEBAQEREREhISExMTFBQUFRUVFhYWFxcXGBgYGRkZGhoaGxsbHBwcHR0dHh4eHx8fICAgISEhIiIiIyMjJCQkJSUlJiYmJycnKCgoKSkpKioqKysrLCwsLS0tLi4uLy8vMDAwMTExMjIyMzMzNDQ0NTU1NjY2Nzc3ODg4OTk5Ojo6Ozs7PDw8PT09Pj4+Pz8/QEBAQUFBQkJCQ0NDRERERUVFRkZGR0dHSEhISUlJSkpKS0tLTExMTU1NTk5OT09PUFBQUVFRUlJSU1NTVFRUVVVVVlZWV1dXWFhYWVlZWlpaW1tbXFxcXV1dXl5eX19fYGBgYWFhYmJiY2NjZGRkZWVlZmZmZ2dnaGhoaWlpampqa2trbGxsbW1tbm5ub29vcHBwcXFxcnJyc3NzdHR0dXV1dnZ2d3d3eHh4eXl5enp6e3t7fHx8fX19dn+GaIOVXIajUIivRou6PY3EMo/QJpHcHZLlFZTtEJXyDJX2CZb5B5b7Bpf8BJf9A5f+Apb+AZb+AZb+Apb+Apb+A5f+BJf+Bpj+B5j+CJn+CZn+CZn+C5r+DZv+D5z+Ep3+FZ7+GJ/+G6H+H6L+JqX+LKj+Mqr+OK3+Pa/+RLH9SbP9TrX9U7f9WLn8Wrn8XLn7X7r6Yrv5Y7v4Zbr2aLrzbrvxcr3xdr7wer/vfsDtgsDrh8HpjcPok8Tmmsbkosnkq83lstHntNTrttfuuNnxuNvzuNz1t9z3t934uN75ud/6uuD7u+H7vuP8weT9xOb+x+f+yun+zur+0uz+2O7+4PL+5/X+7ff+8fn+9fr++vz+/P3+/v7+/v7+/v7+/v7+/v7+/v7+/v7+////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AxQkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4ocSbKkyZMoU6ocyWzXLmMrHd4qNWrUqVzSYio0VooSJEicSMHUiZAVp58/N70ienDaKktIIVGCxfQgrKNIPcWqatCYqU9ITQ3lOnCasVakSqkaS5bgM2PIprWdS7eu3ZLRouW8Ky7WqlS12M6N1akSJk+lBHNVhilqp1Z1cWFFOqoZ3V1Qo4pCRpcXqKiQPPGiuywUaE616EY7BRpSqmh0W/mMGuoY3VyeQHeyRXrU7J+USDGju+r3T0y85+ICG5WSqWVzmZ3KjBRTq71kb+UGPUox0WWlNjuB1oTq8ijdr7BzlcaKOSRLo3DVXTa9UqVQrobX3XWK1ClanN3FDC/IqMfXgQgmqOCCDDbo4IMQRohSQAAh+QQJBADoACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3R9hG2AjWaClVuGo1GJsESNwDmQzDCS1ymU3yOW5h+X6xuY7xeY8xOZ9xGZ+Q+a+wyZ/AuZ/QqZ/QiZ/geY/gWY/gSX/gOX/gOX/gSX/geY/gqa/g6b/hGc/hOd/hWe/hqg/h6i/iCj/iKj/iOk/iWl/ial/iel/imm/iyn/S6o/TGp/TSq/Tar/Tms/Dut/D+u+0Ov+kiw+FCy9liz81218mK18Ge27W236nS4532544e63o6725W92p3A2KDB2aLD2qXF26bH3qbK46bO6aXR7qLS9J/T953U+ZvU+5rU/JvV/ZzV/Z3W/p/X/qHY/qPZ/qba/qjb/qvc/q7d/rDe/rLf/rXg/rbh/rfh/rji/rrj/rzj/r7k/r/l/sHl/sPm/sXn/sjo/s3q/9Lt/tnv/uHz/uv2/vT6/vv9/v7+//7//////////////////////////////////////////////////////////////////////////////////////////////////wj+ANEJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHClwmTFj1khSDBerVCZQroyplCir06SbmVqlnOnQ26qbQEHJ5NmQmimgNy8NJbqwG6tMSEFBY9rQGClMNzW5+kaVIThjqk6pirWta8Nw26hxNcu2rdu3BcPRkkULWji4BsGtuhSJ0ypjd/EOfBUJKKZUOwV3U4V0UqeleKFxapwJMtxmmig3EyzQGFSknZ5xRmcsM9JR0UZ7bswpMd7VSDml5mxsU2NPykYns4m08mhsowobtvzWm6tMwiOhYjaa9CpPnDi1Ig73m8laxrA13869u/fv4MMUix9Pvrz58+jTq1/Pvr379/DdBgQAIfkECQQA5QAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX1+fn5/f3+AgICBgYGCgoKDg4OEhISFhYWGhoaHh4eIiIiJiYmKioqLi4uMjIyNjY2Ojo6Pj4+QkJCRkZGSkpKTk5OUlJSQlpuDmah3m7RsnL5insdZn89Qn9ZEn985n+UtnewjnPEcm/UVmvgPmfoLmfsJmPwHmP0Fl/0El/4El/4Dl/4Dl/4Cl/4Cl/4Clv4Cl/4Dl/4El/4GmP4Imf4Kmv4OnP8Tnf4Wn/4bof4lpf4yqv4+r/5Qt/5evP5pwf5uw/51xv5/yv6Izv6Mz/6Q0f6W1P6a1f+c1v6d1/6e1/6f1/6g2P6j2f6l2v6o2/6s3f6w3v6z4P634f654v684/6+5P7A5f7D5v7F5/7H5/7J6P7L6f7O6/7d8f7t9/74/P7+/v7+/v7+/v7+/v7+/v/+/v////////////////////////////////////////////////////////////////////////////////////////////////////////////8I+QDLCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzaty4sBkxZto4crTGK5ctXLucidToy9aqVq1s8Zq28mI0XKpgtoKFC1lNi8xw6YR5a9jPitN00Rpaa9nRisCEwqzV62lFa7103cq1S5pVi9SiPfvasJo1bmQpPtuFS5cva2kjKqv1UtWtXtXiPuQVSyesW8X0NmwmVaetX4IZ+po1tNUso4kV7uo7FNfYyAi57aKVE6YsXpgTbgOWizOsWLiYhU6IDdiuXG19rV5YjZkzaLNz697Nu7fv38CDCx9OvLjx48iTK1/OvLnz59CjS59Ovbr169izaw8dEAAh+QQJBADoACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3x8fH19fX5+fn9/f4CAgIGBgXqDiXOFkmyHmWaJoWCKqFuMrlCOuUePwj6RyjeS0TGS1yuT3CeU4COU5CCV5x2V6RuV6xmV7BiW7RaW7xSW8ReX8RqY8RyZ8R6a8SOd8iif8y2i8zGj8zSk8zil8jym8EGm7Uin6VKn41yo3WGo2mep126p03aqzn+qyYqrwpesu6etsq6urq+vr7CwsLGxsbKysrOzs7S0tLW1tba2tre3t7i4uLm5ubq6uru7u7y8vL29vb6+vr+/v7/Cw7/EyL/Hzb/J0b/M1b/O2b7Q3L7S4L7T473V5r3W6LzY67vZ7rrb8bjb9L3e9cPi+Mzn+drt++j0/fD4/fb7/vr9/vz+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+//7+//7//////////////////////////////////////////////////////////////////////////////////////////////////wieANEJHEiwoMGDCBMqXMiwocOHECNKnEixokWI0pyRGnXK2cWPCVNxskQylEeQKAU660SyJSloKVE629SS5KeTMS/OrGnpZs6PzkDxJCXt50Vpqj6RvDQKp1GLzlKRQuX0qdWrWLNq3cq1q9evYMOKHUu2rNmzaNOqXcu2rdu3cOPKnUu3rt27ePPq3cu3r9+/gAMLHky4sOHDiBO7DQgAOw==" alt="Carregando" width="40" height="40"/></div><!--/$--><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/webpack-56aeaa5e12df554e.js" async=""></script><div hidden id="S:0"><div data-testid="header-container"><header class=""><nav class="jbttol0 "><div class="jbttolb"><div class="jbttold"></div></div><div class="jbttol1"><a aria-label="Sympla sua plataforma de eventos. Logo." title="Sympla sua plataforma de eventos" class="jbttola" data-testid="header-navbar-logo" href="/"><div class="jbttol5"><svg viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="jbttol8" alt="Sympla sua plataforma de eventos"><path d="M16.16 1.327a2.77 2.77 0 0 1 2.47 3.038 2.763 2.763 0 0 1-3.021 2.483 2.77 2.77 0 0 1-2.47-3.038 2.763 2.763 0 0 1 3.021-2.483ZM12.173 6.72a1.96 1.96 0 0 0-1.747-2.149A1.955 1.955 0 0 0 8.29 6.328a1.96 1.96 0 0 0 1.747 2.149 1.954 1.954 0 0 0 2.137-1.757ZM8.02 21.696l2.657-1.556a.289.289 0 0 1 .404.122c.587 1.18 1.552 1.954 3.225 1.954 1.734 0 2.168-.692 2.168-1.314 0-.992-.913-1.384-3.309-2.052-2.373-.669-4.7-1.822-4.7-4.911 0-3.113 2.6-4.911 5.362-4.911 2.53 0 4.53 1.179 5.713 3.391a.295.295 0 0 1-.11.393l-2.577 1.523a.29.29 0 0 1-.402-.113c-.537-.993-1.282-1.597-2.624-1.597-1.141 0-1.712.576-1.712 1.222 0 .737.388 1.245 2.876 2.005 2.418.738 5.134 1.591 5.134 5.004 0 3.112-2.465 4.956-5.933 4.956-3.24 0-5.352-1.505-6.294-3.748a.295.295 0 0 1 .122-.368Z"></path></svg></div><div class="jbttol6"><div hidden=""><svg viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="jbttol8" alt="Sympla sua plataforma de eventos" hidden=""><path d="M16.16 1.327a2.77 2.77 0 0 1 2.47 3.038 2.763 2.763 0 0 1-3.021 2.483 2.77 2.77 0 0 1-2.47-3.038 2.763 2.763 0 0 1 3.021-2.483ZM12.173 6.72a1.96 1.96 0 0 0-1.747-2.149A1.955 1.955 0 0 0 8.29 6.328a1.96 1.96 0 0 0 1.747 2.149 1.954 1.954 0 0 0 2.137-1.757ZM8.02 21.696l2.657-1.556a.289.289 0 0 1 .404.122c.587 1.18 1.552 1.954 3.225 1.954 1.734 0 2.168-.692 2.168-1.314 0-.992-.913-1.384-3.309-2.052-2.373-.669-4.7-1.822-4.7-4.911 0-3.113 2.6-4.911 5.362-4.911 2.53 0 4.53 1.179 5.713 3.391a.295.295 0 0 1-.11.393l-2.577 1.523a.29.29 0 0 1-.402-.113c-.537-.993-1.282-1.597-2.624-1.597-1.141 0-1.712.576-1.712 1.222 0 .737.388 1.245 2.876 2.005 2.418.738 5.134 1.591 5.134 5.004 0 3.112-2.465 4.956-5.933 4.956-3.24 0-5.352-1.505-6.294-3.748a.295.295 0 0 1 .122-.368Z"></path></svg></div><div><svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 25" width="112" height="48" class="jbttol6 jbttol8" alt="Sympla sua plataforma de eventos"><path d="M58.592 9.913v8.375a.226.226 0 0 1-.227.225H56.15a.226.226 0 0 1-.227-.225v-.605c-.587.67-1.459 1.077-2.652 1.077-2.331 0-4.253-2.03-4.253-4.66 0-2.63 1.922-4.659 4.253-4.659 1.193 0 2.065.406 2.652 1.077v-.605c0-.124.102-.225.227-.225h2.216c.126 0 .227.1.227.225zM1.114 15.645l2.083-1.197a.228.228 0 0 1 .317.093c.46.908 1.216 1.504 2.528 1.504 1.36 0 1.7-.532 1.7-1.011 0-.763-.716-1.065-2.595-1.58-1.86-.514-3.685-1.4-3.685-3.778 0-2.395 2.04-3.779 4.204-3.779 1.984 0 3.552.907 4.48 2.61.058.107.02.24-.086.302L8.04 9.98a.229.229 0 0 1-.316-.087c-.421-.764-1.005-1.23-2.058-1.23-.894 0-1.342.444-1.342.94 0 .569.305.96 2.255 1.545 1.896.567 4.025 1.224 4.025 3.85 0 2.394-1.932 3.813-4.651 3.813-2.54 0-4.196-1.158-4.935-2.884a.225.225 0 0 1 .096-.283zm18.65-5.951c.158 0 .268.154.216.3l-2.953 8.304c-.972 2.736-2.5 3.87-4.876 3.822a.227.227 0 0 1-.223-.226V19.85c0-.121.097-.22.219-.226 1.072-.044 1.615-.427 1.985-1.38a.227.227 0 0 0-.002-.17l-3.394-8.067a.226.226 0 0 1 .21-.313h2.45c.097 0 .182.06.215.149l1.931 5.28 1.633-5.27a.228.228 0 0 1 .217-.16h2.373zm24.573 4.435c0 2.643-1.933 4.683-4.276 4.683-1.2 0-2.076-.408-2.666-1.082v4.132c0 .138-.113.25-.253.25h-2.178a.251.251 0 0 1-.253-.25V9.944c0-.138.113-.25.253-.25h2.178c.14 0 .253.112.253.25v.583c.59-.674 1.467-1.082 2.666-1.082 2.343 0 4.276 2.04 4.276 4.684zM45.57 5.59h2.228c.126 0 .228.1.228.226v12.498a.227.227 0 0 1-.228.226H45.57a.227.227 0 0 1-.228-.226V5.817c0-.125.102-.226.228-.226zM29.972 9.317c2.058 0 3.399 1.455 3.399 3.672v5.22c0 .126-.067.332-.193.332H30.95c-.125 0-.223-.206-.223-.331v-4.99c0-.887-.409-1.455-1.268-1.455-.894 0-1.375.621-1.375 1.668v4.777c0 .125-.147.331-.273.331h-1.996c-.125 0-.273-.206-.273-.331v-4.777c0-1.047-.48-1.668-1.375-1.668-.86 0-1.268.568-1.268 1.455v4.99c0 .125-.097.331-.223.331h-2.228c-.126 0-.193-.206-.193-.331v-5.22c0-2.218 1.34-3.673 3.397-3.673 1.12 0 2.332.099 3.158 1.047.826-.948 2.043-1.047 3.162-1.047zm24.33-2.669a1.524 1.524 0 0 1-1.673 1.356 1.518 1.518 0 0 1-1.367-1.659 1.525 1.525 0 0 1 1.673-1.355c.84.083 1.452.826 1.367 1.658zm5.12-1.78a2.167 2.167 0 0 1-2.377 1.928 2.158 2.158 0 0 1-1.943-2.358 2.167 2.167 0 0 1 2.378-1.927 2.158 2.158 0 0 1 1.943 2.358zm-3.5 9.232c0-1.323-.89-2.153-2.118-2.153-1.228 0-2.118.83-2.118 2.153 0 1.324.89 2.154 2.118 2.154 1.228 0 2.118-.83 2.118-2.154zm-14.269.029c0-1.33-.895-2.164-2.13-2.164-1.234 0-2.128.833-2.128 2.164 0 1.33.894 2.164 2.129 2.164 1.234 0 2.129-.834 2.129-2.164z"></path></svg></div></div></a><div class="jbttol5"><div class="zbzmv32 false" data-testid="header-location-button"><button type="button" class="zbzmv39 false" data-testid="header-location-button-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="zbzmv3e"><path fill-rule="evenodd" d="M4 9.92a8 8 0 1 1 16 0c0 5.48-7 11.58-7.35 11.84a1 1 0 0 1-1.3 0C11.05 21.5 4 15.4 4 9.92m8 9.73c-1.68-1.59-6-6-6-9.73a6 6 0 1 1 12 0c0 3.69-4.32 8.14-6 9.73M8.5 9.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0m2 0a1.5 1.5 0 1 0 3 0 1.5 1.5 0 0 0-3 0" clip-rule="evenodd"></path></svg><div class="zbzmv31"></div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" class="zbzmv3e"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></button><div class="zbzmv3b zbzmv3c" data-testid="header-location-geolocation-container"><div class="zbzmv3d" role="button" tabindex="0" data-testid="header-location-geolocation-button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="20" height="20"><g clip-path="url(#ic-localization-fill_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M2.931 12.13c-1.005 0-1.295-1.405-.376-1.822L20 2.5C21 2 22 3 21.5 4l-7.647 17.442c-.415.93-1.777.628-1.777-.395L10 14z" clip-rule="evenodd"></path></g><defs><clipPath id="ic-localization-fill_svg__a"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg><span>Descubra o que fazer perto de você</span><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div></div></div></div><div class="jbttol4  jbttol6" data-testid="header-navbar-search-desktop"><div class="_1jpkruy0 false"><div class="_1jkrewc5"><div class="_1jkrewc7" aria-hidden="true"><div class="_1jkrewc3 _1jkrewc1"></div><div class="_1jkrewc4 _1jkrewc1"></div></div></div><div class="_1jpkruy2 false"><div class="zbzmv33 zbzmv32 false" data-testid="header-location-button"><button type="button" class="zbzmv39 false" data-testid="header-location-button-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="zbzmv3e"><path fill-rule="evenodd" d="M4 9.92a8 8 0 1 1 16 0c0 5.48-7 11.58-7.35 11.84a1 1 0 0 1-1.3 0C11.05 21.5 4 15.4 4 9.92m8 9.73c-1.68-1.59-6-6-6-9.73a6 6 0 1 1 12 0c0 3.69-4.32 8.14-6 9.73M8.5 9.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0m2 0a1.5 1.5 0 1 0 3 0 1.5 1.5 0 0 0-3 0" clip-rule="evenodd"></path></svg><div class="zbzmv31"></div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" class="zbzmv3e"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></button><div class="zbzmv3b zbzmv3c" data-testid="header-location-geolocation-container"><div class="zbzmv3d" role="button" tabindex="0" data-testid="header-location-geolocation-button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="20" height="20"><g clip-path="url(#ic-localization-fill_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M2.931 12.13c-1.005 0-1.295-1.405-.376-1.822L20 2.5C21 2 22 3 21.5 4l-7.647 17.442c-.415.93-1.777.628-1.777-.395L10 14z" clip-rule="evenodd"></path></g><defs><clipPath id="ic-localization-fill_svg__a"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg><span>Descubra o que fazer perto de você</span><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div></div></div></div></div></div><div style="z-index:1" data-testid="header-navbar-auth"><div class="_1x8lr7t0 animated fadeIn" data-testid="header-auth-container"><div class="_1r4wdfl0"><div class="_1r4wdfl1 false "><a class="_1r4wdfl5 _1r4wdfl4" target="_blank" rel="noopener noreferrer" id="btn-create-event" href="https://organizador.sympla.com.br/criar-evento?presencial=1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="1em" height="1em" class="_1r4wdfl6"><path fill="currentColor" fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0m10 8a8 8 0 1 1 0-16 8 8 0 0 1 0 16m3-9h-2V9a1 1 0 0 0-2 0v2H9a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2" clip-rule="evenodd"></path></svg>Criar evento</a><a class="_1r4wdfl5 _1r4wdfl4" target="_blank" rel="noopener noreferrer" id="btn-my-event" href="https://organizador.sympla.com.br/meus-eventos"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="_1r4wdfl6"><path d="M16.91 13.16a.833.833 0 0 1 1.179 1.18l-3.75 3.75a.833.833 0 0 1-1.178 0l-1.667-1.667a.833.833 0 1 1 1.178-1.179l1.078 1.078 3.16-3.161ZM12.5 5v-.833h-5V5a.833.833 0 0 1-1.667 0v-.83c-.371.002-.663.008-.907.028-.366.03-.553.084-.683.15-.314.16-.569.415-.728.729-.067.13-.121.317-.15.682-.032.375-.032.86-.032 1.574V7.5h13.334v-.167c0-.713 0-1.199-.031-1.574a2.26 2.26 0 0 0-.104-.572l-.047-.11a1.667 1.667 0 0 0-.614-.665l-.114-.064c-.13-.066-.318-.12-.683-.15-.245-.02-.536-.026-.908-.029V5A.833.833 0 1 1 12.5 5Zm5.833 5.417a.833.833 0 0 1-1.666 0v-1.25H3.332v5.167c0 .713 0 1.198.031 1.573.03.366.084.553.15.683l.065.115c.16.261.39.474.664.614l.11.047c.125.044.299.08.573.103.375.03.86.031 1.574.031H10a.833.833 0 1 1 0 1.667H6.5c-.687 0-1.251 0-1.71-.037-.41-.033-.791-.1-1.15-.255l-.154-.071a3.335 3.335 0 0 1-1.328-1.227l-.129-.23c-.206-.404-.288-.835-.326-1.304-.037-.458-.036-1.023-.036-1.71v-7c0-.686-.001-1.25.036-1.71.038-.468.12-.899.326-1.303l.129-.23c.32-.522.78-.947 1.328-1.227l.153-.072c.36-.154.741-.22 1.15-.254.302-.025.648-.032 1.044-.035v-.835a.833.833 0 0 1 1.667 0V2.5h5v-.833a.833.833 0 0 1 1.666 0v.835c.397.003.743.01 1.044.035.468.038.9.12 1.303.326l.23.129c.522.32.948.779 1.227 1.328l.072.153c.154.36.221.74.255 1.15.037.46.036 1.024.036 1.71v3.084Z"></path></svg>Meus eventos</a><button class="_1r4wdfl4" id="btn-my-tickets"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="_1r4wdfl6"><path d="M17.5 6c0-.48 0-.79-.02-1.027a1.256 1.256 0 0 0-.053-.31l-.018-.041a.832.832 0 0 0-.252-.296l-.112-.068c-.04-.021-.125-.052-.351-.071-.236-.02-.547-.02-1.027-.02H12.5v8.73a.834.834 0 0 1-1.666 0v-8.73h-6.5c-.48 0-.791 0-1.027.02-.17.014-.26.034-.311.053l-.04.018a.833.833 0 0 0-.296.252l-.069.112c-.02.04-.052.125-.07.351C2.5 5.21 2.5 5.52 2.5 6v.988a3.126 3.126 0 0 1 0 6.023V14c0 .48 0 .79.02 1.027.018.226.05.31.07.351l.069.112a.833.833 0 0 0 .295.252l.04.018c.052.019.142.04.312.053.236.02.546.02 1.027.02h11.333c.48 0 .79 0 1.027-.02.226-.019.31-.05.351-.07a.833.833 0 0 0 .364-.365l.018-.04c.018-.052.039-.142.053-.311.02-.236.02-.547.02-1.027v-.989a3.125 3.125 0 0 1 0-6.023V6Zm1.667 1.708c0 .46-.373.834-.834.834a1.458 1.458 0 0 0 0 2.916c.46 0 .834.373.834.834V14c0 .453 0 .843-.025 1.163a2.688 2.688 0 0 1-.192.853l-.056.12a2.5 2.5 0 0 1-1.092 1.091c-.315.161-.643.22-.972.248-.32.026-.71.025-1.163.025H4.334c-.453 0-.844 0-1.163-.025a2.686 2.686 0 0 1-.854-.192l-.119-.056a2.5 2.5 0 0 1-.996-.92l-.096-.172c-.16-.315-.22-.643-.247-.972-.026-.32-.025-.71-.025-1.163v-1.708c0-.46.373-.834.833-.834a1.458 1.458 0 1 0 0-2.916.833.833 0 0 1-.834-.834V6c0-.453 0-.843.026-1.163.027-.33.086-.657.247-.972l.096-.172a2.5 2.5 0 0 1 .996-.92l.12-.057c.277-.119.565-.167.853-.19.32-.027.71-.026 1.163-.026h11.333c.453 0 .843 0 1.163.025.329.027.657.087.972.248l.172.096c.391.24.71.584.92.996l.056.119c.12.278.168.565.192.853.026.32.025.71.025 1.163v1.708Z"></path></svg><span class="_1r4wdfl7">Ingressos</span><span class="_1r4wdfl8">Meus ingressos</span></button></div><div class="_1r4wdfle"><button type="button" class="_1r4wdfla" id="radix-:R9icpvkq:" aria-haspopup="menu" aria-expanded="false" data-state="closed" aria-label="Open Dropdown"><svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M2.5 10h15m-15-5h15m-15 10h15" stroke="#717680" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg><div class="_1r4wdfld"><svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path d="M16.667 17.5c0-1.163 0-1.745-.144-2.218a3.333 3.333 0 0 0-2.222-2.222c-.473-.143-1.055-.143-2.218-.143H7.917c-1.163 0-1.745 0-2.218.143a3.333 3.333 0 0 0-2.222 2.222c-.144.473-.144 1.055-.144 2.218M13.75 6.25a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" stroke="#717680" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></button></div></div><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div></div></div><div class="jbttol1 jbttol4 jbttol5" data-testid="header-navbar-search-mobile"><div class="_1jpkruy0 false"><div class="_1jkrewc5"><div class="_1jkrewc7" aria-hidden="true"><div class="_1jkrewc3 _1jkrewc1"></div><div class="_1jkrewc4 _1jkrewc1"></div></div></div><div class="_1jpkruy2 false"><div class="zbzmv32 false" data-testid="header-location-button"><button type="button" class="zbzmv39 false" data-testid="header-location-button-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="zbzmv3e"><path fill-rule="evenodd" d="M4 9.92a8 8 0 1 1 16 0c0 5.48-7 11.58-7.35 11.84a1 1 0 0 1-1.3 0C11.05 21.5 4 15.4 4 9.92m8 9.73c-1.68-1.59-6-6-6-9.73a6 6 0 1 1 12 0c0 3.69-4.32 8.14-6 9.73M8.5 9.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0m2 0a1.5 1.5 0 1 0 3 0 1.5 1.5 0 0 0-3 0" clip-rule="evenodd"></path></svg><div class="zbzmv31"></div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" class="zbzmv3e"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></button><div class="zbzmv3b zbzmv3c" data-testid="header-location-geolocation-container"><div class="zbzmv3d" role="button" tabindex="0" data-testid="header-location-geolocation-button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="20" height="20"><g clip-path="url(#ic-localization-fill_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M2.931 12.13c-1.005 0-1.295-1.405-.376-1.822L20 2.5C21 2 22 3 21.5 4l-7.647 17.442c-.415.93-1.777.628-1.777-.395L10 14z" clip-rule="evenodd"></path></g><defs><clipPath id="ic-localization-fill_svg__a"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg><span>Descubra o que fazer perto de você</span><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div></div></div></div></div></div></nav><div style="padding-top:232px;transition:padding-top 0.1s linear"></div></header></div><main class="_1birs5v6"><template id="P:1"></template></main><div data-testid="footer-container"><footer class="_1y4k0we0"><div class="_1y4k0we1"><div class="_1y4k0we2"><div class="k5k13s0" data-orientation="vertical"><div data-state="open" data-orientation="vertical"><section class="k5k13s2"><div class="_10lo45i0"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 60 25" class="_10lo45i2"><path d="M58.592 9.913v8.375a.226.226 0 0 1-.227.225H56.15a.226.226 0 0 1-.227-.225v-.605c-.587.67-1.459 1.077-2.652 1.077-2.331 0-4.253-2.03-4.253-4.66s1.922-4.659 4.253-4.659c1.193 0 2.065.406 2.652 1.077v-.605c0-.124.102-.225.227-.225h2.216c.126 0 .227.1.227.225zM1.114 15.645l2.083-1.197a.23.23 0 0 1 .317.093c.46.908 1.216 1.504 2.528 1.504 1.36 0 1.7-.532 1.7-1.011 0-.763-.716-1.065-2.595-1.58-1.86-.514-3.685-1.4-3.685-3.778 0-2.395 2.04-3.779 4.204-3.779 1.984 0 3.552.907 4.48 2.61.058.107.02.24-.086.302L8.04 9.98a.23.23 0 0 1-.316-.087c-.421-.764-1.005-1.23-2.058-1.23-.894 0-1.342.444-1.342.94 0 .569.305.96 2.255 1.545 1.896.567 4.025 1.224 4.025 3.85 0 2.394-1.932 3.813-4.651 3.813-2.54 0-4.196-1.158-4.935-2.884a.225.225 0 0 1 .096-.283zm18.65-5.951c.158 0 .268.154.216.3l-2.953 8.304c-.972 2.736-2.5 3.87-4.876 3.822a.227.227 0 0 1-.223-.226V19.85c0-.121.097-.22.219-.226 1.072-.044 1.615-.427 1.985-1.38a.23.23 0 0 0-.002-.17l-3.394-8.067a.226.226 0 0 1 .21-.313h2.45c.097 0 .182.06.215.149l1.931 5.28 1.633-5.27a.23.23 0 0 1 .217-.16zm24.573 4.435c0 2.643-1.933 4.683-4.276 4.683-1.2 0-2.076-.408-2.666-1.082v4.132c0 .138-.113.25-.253.25h-2.178a.25.25 0 0 1-.253-.25V9.944c0-.138.113-.25.253-.25h2.178c.14 0 .253.112.253.25v.583c.59-.674 1.467-1.082 2.666-1.082 2.343 0 4.276 2.04 4.276 4.684M45.57 5.59h2.228c.126 0 .228.1.228.226v12.498a.227.227 0 0 1-.228.226H45.57a.227.227 0 0 1-.228-.226V5.817c0-.125.102-.226.228-.226zM29.972 9.317c2.058 0 3.399 1.455 3.399 3.672v5.22c0 .126-.067.332-.193.332H30.95c-.125 0-.223-.206-.223-.331v-4.99c0-.887-.409-1.455-1.268-1.455-.894 0-1.375.621-1.375 1.668v4.777c0 .125-.147.331-.273.331h-1.996c-.125 0-.273-.206-.273-.331v-4.777c0-1.047-.48-1.668-1.375-1.668-.86 0-1.268.568-1.268 1.455v4.99c0 .125-.097.331-.223.331h-2.228c-.126 0-.193-.206-.193-.331v-5.22c0-2.218 1.34-3.673 3.397-3.673 1.12 0 2.332.099 3.158 1.047.826-.948 2.043-1.047 3.162-1.047m24.33-2.669a1.524 1.524 0 0 1-1.673 1.356 1.52 1.52 0 0 1-1.367-1.659 1.525 1.525 0 0 1 1.673-1.355c.84.083 1.452.826 1.367 1.658m5.12-1.78a2.167 2.167 0 0 1-2.377 1.928 2.16 2.16 0 0 1-1.943-2.358 2.167 2.167 0 0 1 2.378-1.927 2.16 2.16 0 0 1 1.943 2.358zm-3.5 9.232c0-1.323-.89-2.153-2.118-2.153s-2.118.83-2.118 2.153c0 1.324.89 2.154 2.118 2.154s2.118-.83 2.118-2.154m-14.269.029c0-1.33-.895-2.164-2.13-2.164s-2.128.833-2.128 2.164c0 1.33.894 2.164 2.129 2.164s2.129-.834 2.129-2.164"></path></svg><h4 class="_10lo45i1">Compre também pelo App</h4><ul class="_10lo45i3"><li class="_10lo45i4"><a target="_blank" href="https://itunes.apple.com/br/app/sympla-ingressos-para-os-melhores/id1136318924" rel="noopener noreferrer" aria-label="Download na Apple Store"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 84 28" class="_10lo45i5"><rect width="84" height="28" fill="#000" rx="5.091"></rect><path fill="#fff" d="M57.068 13.44v1.604h-1.005v1.052h1.005v3.573c0 1.22.552 1.709 1.94 1.709.244 0 .477-.03.68-.064v-1.04c-.174.017-.285.029-.476.029-.622 0-.895-.29-.895-.953v-3.254h1.371v-1.052h-1.371v-1.603zM63.226 21.465c1.848 0 2.98-1.238 2.98-3.289 0-2.04-1.138-3.283-2.98-3.283-1.848 0-2.987 1.244-2.987 3.283 0 2.051 1.133 3.289 2.987 3.289m0-1.11c-1.087 0-1.697-.796-1.697-2.179 0-1.371.61-2.173 1.697-2.173 1.08 0 1.697.802 1.697 2.173 0 1.377-.616 2.18-1.697 2.18M67.176 21.343h1.25v-3.736c0-.89.668-1.488 1.615-1.488.22 0 .593.041.697.076v-1.232a2.6 2.6 0 0 0-.558-.052c-.825 0-1.528.453-1.708 1.075h-.093v-.97h-1.203zM73.84 15.957c.924 0 1.528.645 1.557 1.638h-3.196c.07-.988.715-1.638 1.639-1.638m1.551 3.678c-.232.494-.75.767-1.505.767-.999 0-1.644-.703-1.685-1.813v-.07h4.469v-.436c0-1.987-1.064-3.19-2.824-3.19-1.784 0-2.917 1.284-2.917 3.307 0 2.021 1.11 3.265 2.923 3.265 1.446 0 2.457-.697 2.742-1.83zM48.875 19.006c.096 1.554 1.391 2.548 3.319 2.548 2.06 0 3.348-1.042 3.348-2.704 0-1.307-.735-2.03-2.517-2.445l-.958-.235c-1.132-.265-1.59-.62-1.59-1.241 0-.783.71-1.295 1.777-1.295 1.012 0 1.71.5 1.837 1.301h1.313c-.079-1.463-1.368-2.493-3.132-2.493-1.897 0-3.162 1.03-3.162 2.577 0 1.277.717 2.036 2.289 2.403l1.12.271c1.15.271 1.656.669 1.656 1.331 0 .771-.795 1.331-1.88 1.331-1.161 0-1.968-.524-2.083-1.349zM35.934 14.91c-.86 0-1.604.43-1.987 1.151h-.093v-1.046H32.65v8.431h1.25v-3.062h.098c.331.668 1.046 1.064 1.947 1.064 1.598 0 2.614-1.261 2.614-3.272 0-2.01-1.016-3.265-2.626-3.265m-.354 5.416c-1.046 0-1.703-.825-1.703-2.144 0-1.325.657-2.15 1.708-2.15 1.058 0 1.691.808 1.691 2.144 0 1.343-.633 2.15-1.696 2.15M42.932 14.91c-.86 0-1.604.43-1.987 1.151h-.093v-1.046h-1.203v8.431h1.25v-3.062h.098c.331.668 1.046 1.064 1.946 1.064 1.598 0 2.615-1.261 2.615-3.272 0-2.01-1.017-3.265-2.626-3.265m-.355 5.416c-1.045 0-1.702-.825-1.702-2.144 0-1.325.657-2.15 1.708-2.15 1.058 0 1.691.808 1.691 2.144 0 1.343-.633 2.15-1.697 2.15M30.41 21.343h1.433l-3.138-8.69h-1.451l-3.138 8.69h1.385l.801-2.307h3.313zm-2.5-7.113h.103l1.258 3.674h-2.625zM17.339 14.21a3.49 3.49 0 0 1 1.65-2.906 3.59 3.59 0 0 0-2.795-1.51c-1.175-.124-2.315.703-2.914.703-.61 0-1.532-.691-2.526-.67a3.75 3.75 0 0 0-3.13 1.909c-1.354 2.344-.345 5.789.952 7.683.649.928 1.407 1.964 2.4 1.927.97-.04 1.333-.619 2.505-.619 1.161 0 1.502.62 2.514.596 1.042-.017 1.698-.932 2.324-1.868a7.7 7.7 0 0 0 1.063-2.165 3.38 3.38 0 0 1-2.043-3.08M15.426 8.548a3.4 3.4 0 0 0 .78-2.444 3.47 3.47 0 0 0-2.245 1.162 3.28 3.28 0 0 0-.8 2.353 2.9 2.9 0 0 0 2.265-1.071M24.563 5.717h1.274q.83 0 1.25.24.423.24.423.83 0 .245-.088.444a.8.8 0 0 1-.25.326.9.9 0 0 1-.403.17v.029q.249.044.442.155.195.11.308.32.114.207.114.539 0 .392-.188.668-.185.275-.53.418a2.1 2.1 0 0 1-.814.144h-1.538zm.703 1.766h.674q.477 0 .662-.155.184-.155.184-.454 0-.305-.22-.44-.216-.135-.691-.134h-.61zm0 .569v1.36h.74q.494 0 .692-.191.2-.191.2-.516a.64.64 0 0 0-.091-.346.56.56 0 0 0-.29-.225 1.5 1.5 0 0 0-.545-.082zm4.453-1.357q.616 0 .928.273.317.272.317.85V10h-.49l-.131-.46h-.024a1.7 1.7 0 0 1-.284.29 1 1 0 0 1-.34.17 1.6 1.6 0 0 1-.465.059q-.29 0-.52-.106a.82.82 0 0 1-.36-.328 1.07 1.07 0 0 1-.131-.557q0-.501.372-.753.375-.252 1.13-.278l.563-.02v-.17q0-.337-.158-.48-.155-.144-.44-.144-.243 0-.471.07t-.445.173l-.223-.487q.237-.125.539-.205a2.5 2.5 0 0 1 .633-.079m.562 1.755-.419.015q-.515.018-.723.176a.52.52 0 0 0-.208.433q0 .24.143.352a.6.6 0 0 0 .378.108.87.87 0 0 0 .592-.202q.237-.206.237-.6zm2.335-1.693V10h-.688V6.757zm-.34-1.242q.159 0 .273.085.117.084.117.293 0 .204-.117.293a.44.44 0 0 1-.273.085.45.45 0 0 1-.278-.085q-.111-.09-.111-.293 0-.21.111-.293a.45.45 0 0 1 .278-.085m2.045 2.827-1.084-1.585h.785l.742 1.14.744-1.14h.782L35.2 8.342 36.346 10h-.788l-.794-1.216L33.967 10h-.782zm3.859-1.647q.615 0 .928.273.317.272.317.85V10h-.49l-.131-.46h-.024a1.7 1.7 0 0 1-.284.29 1 1 0 0 1-.34.17 1.6 1.6 0 0 1-.466.059q-.29 0-.518-.106a.82.82 0 0 1-.36-.328 1.07 1.07 0 0 1-.132-.557q0-.501.372-.753.375-.252 1.13-.278l.563-.02v-.17q0-.337-.158-.48-.156-.144-.44-.144-.243 0-.471.07-.229.07-.446.173l-.222-.487q.237-.125.539-.205.305-.078.633-.079m.562 1.755-.419.015q-.515.018-.723.176a.52.52 0 0 0-.208.433q0 .24.143.352a.6.6 0 0 0 .378.108.87.87 0 0 0 .592-.202q.237-.206.237-.6zm3.29-1.755a2 2 0 0 1 .346.033l-.065.644a1 1 0 0 0-.152-.026 2 2 0 0 0-.158-.01q-.184 0-.352.062-.167.06-.296.182a.8.8 0 0 0-.202.302 1.1 1.1 0 0 0-.073.422V10h-.691V6.757h.539l.094.571h.032q.096-.172.24-.316t.328-.229a.95.95 0 0 1 .41-.088m4.196 0q.548 0 .852.284.308.282.308.906V10h-.689V8.014q0-.377-.155-.566-.156-.19-.48-.19-.472 0-.657.29-.18.29-.181.84V10h-.689V6.757h.536l.097.44h.038a.9.9 0 0 1 .26-.279q.159-.111.352-.167.197-.056.407-.056m3.395 0q.615 0 .929.273.316.272.316.85V10h-.49l-.13-.46h-.024a1.7 1.7 0 0 1-.284.29 1 1 0 0 1-.34.17 1.6 1.6 0 0 1-.466.059q-.29 0-.519-.106a.82.82 0 0 1-.36-.328 1.07 1.07 0 0 1-.132-.557q0-.501.372-.753.375-.252 1.131-.278l.563-.02v-.17q0-.337-.159-.48-.155-.144-.44-.144-.242 0-.47.07-.23.07-.446.173l-.223-.487q.237-.125.54-.205.303-.078.632-.079m.563 1.755-.42.015q-.514.018-.723.176a.52.52 0 0 0-.208.433q0 .24.143.352a.6.6 0 0 0 .378.108.87.87 0 0 0 .592-.202q.237-.206.237-.6z"></path></svg></a></li><li class="_10lo45i4"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.sympla.tickets&amp;hl=pt_BR" rel="noopener noreferrer" aria-label="Download no Google Play"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 94 28" class="_10lo45i6"><rect width="94" height="28" fill="#000" rx="4.455"></rect><path fill="#fff" d="M47.444 15.226c-1.638 0-2.973 1.252-2.973 2.977 0 1.714 1.335 2.977 2.973 2.977s2.973-1.263 2.973-2.977c0-1.725-1.336-2.977-2.973-2.977m0 4.782c-.898 0-1.672-.744-1.672-1.804 0-1.072.775-1.805 1.672-1.805s1.67.733 1.67 1.805c0 1.06-.773 1.804-1.67 1.804m-6.486-4.782c-1.637 0-2.972 1.252-2.972 2.977 0 1.714 1.335 2.977 2.972 2.977 1.639 0 2.974-1.263 2.974-2.977 0-1.725-1.335-2.977-2.974-2.977m0 4.782c-.897 0-1.67-.744-1.67-1.804 0-1.072.773-1.805 1.67-1.805.898 0 1.671.733 1.671 1.805.001 1.06-.773 1.804-1.67 1.804m-7.713-3.868v1.263h3.006c-.09.71-.325 1.229-.684 1.59-.437.44-1.122.924-2.322.924-1.851 0-3.298-1.5-3.298-3.36 0-1.861 1.447-3.361 3.298-3.361.998 0 1.727.395 2.266.902l.886-.891c-.752-.722-1.75-1.274-3.152-1.274-2.535 0-4.667 2.075-4.667 4.624s2.131 4.623 4.667 4.623c1.368 0 2.4-.451 3.208-1.297.83-.834 1.088-2.008 1.088-2.955 0-.292-.022-.563-.068-.789zm31.548.98c-.247-.664-.999-1.894-2.536-1.894-1.525 0-2.793 1.207-2.793 2.977 0 1.669 1.257 2.977 2.939 2.977 1.357 0 2.142-.834 2.468-1.32l-1.01-.676c-.336.496-.796.823-1.458.823s-1.133-.305-1.436-.902l3.96-1.647zm-4.039.993c-.033-1.15.886-1.736 1.549-1.736.516 0 .953.26 1.099.631zM57.535 21h1.3v-8.75h-1.3zm-2.132-5.108h-.045c-.291-.35-.853-.666-1.559-.666-1.48 0-2.838 1.308-2.838 2.989 0 1.669 1.357 2.966 2.838 2.966.707 0 1.268-.316 1.56-.677h.044v.429c0 1.139-.606 1.748-1.581 1.748-.797 0-1.29-.575-1.492-1.06l-1.133.474c.325.789 1.188 1.759 2.625 1.759 1.525 0 2.816-.902 2.816-3.102v-5.345h-1.234zm-1.492 4.116c-.897 0-1.648-.756-1.648-1.793 0-1.05.751-1.816 1.648-1.816.886 0 1.582.767 1.582 1.816 0 1.037-.696 1.793-1.582 1.793m16.977-7.759h-3.113V21h1.298v-3.315h1.814c1.44 0 2.856-1.048 2.856-2.717s-1.415-2.719-2.855-2.719m.033 4.218h-1.848v-3h1.848c.972 0 1.523.809 1.523 1.5 0 .678-.551 1.5-1.523 1.5m8.03-1.257c-.94 0-1.915.417-2.318 1.34l1.153.484c.247-.484.706-.642 1.187-.642.672 0 1.355.405 1.366 1.126v.09a2.87 2.87 0 0 0-1.355-.338c-1.242 0-2.508.687-2.508 1.97 0 1.171 1.019 1.925 2.161 1.925.873 0 1.355-.394 1.657-.856h.045v.676h1.254V17.63c.001-1.553-1.153-2.42-2.642-2.42m-.157 4.796c-.425 0-1.02-.214-1.02-.743 0-.676.74-.935 1.379-.935.57 0 .84.124 1.186.293a1.58 1.58 0 0 1-1.545 1.385m7.368-4.604-1.489 3.794h-.044L83.083 15.4h-1.4l2.318 5.303-1.321 2.95h1.355l3.572-8.252zM74.462 21h1.298v-8.75h-1.298z"></path><g filter="url(#ic-play-store_svg__a)"><path fill="url(#ic-play-store_svg__b)" d="M7.267 5.277c-.203.215-.323.55-.323.983v15.481c0 .434.12.768.323.984l.051.05 8.627-8.672v-.204L7.318 5.226z"></path><path fill="url(#ic-play-store_svg__c)" d="m18.82 16.995-2.876-2.892v-.204l2.876-2.891.065.037 3.407 1.946c.973.556.973 1.465 0 2.021l-3.407 1.946z"></path><g filter="url(#ic-play-store_svg__d)"><path fill="url(#ic-play-store_svg__e)" d="M18.886 16.958 15.945 14l-8.677 8.724c.32.341.85.383 1.446.043z"></path></g><path fill="url(#ic-play-store_svg__f)" d="M18.886 11.044 8.714 5.234c-.596-.341-1.126-.298-1.446.043l8.678 8.724z"></path></g><path fill="#fff" d="M33.04 7.317q0 .724-.27 1.21-.27.484-.782.73-.512.243-1.236.243h-1.19V5.217h1.319q.665 0 1.148.24.485.237.747.706.264.465.264 1.154m-.732.02q0-.526-.167-.866a1.07 1.07 0 0 0-.487-.504q-.319-.168-.788-.167h-.6V8.91h.498q.776 0 1.16-.395.384-.396.384-1.178m2.273-1.08V9.5h-.688V6.257zm-.34-1.242q.159 0 .273.085.117.084.117.293 0 .204-.117.293a.44.44 0 0 1-.273.085.45.45 0 0 1-.278-.085q-.111-.09-.111-.293 0-.21.11-.293a.45.45 0 0 1 .28-.085m3.507 3.56a.9.9 0 0 1-.155.538.95.95 0 0 1-.454.334q-.297.111-.727.112-.34 0-.586-.05a2 2 0 0 1-.46-.147v-.594q.231.108.519.187.29.08.548.08.34 0 .489-.106a.34.34 0 0 0 .088-.475.6.6 0 0 0-.223-.173 4 4 0 0 0-.474-.217 4 4 0 0 1-.52-.246.9.9 0 0 1-.318-.296.84.84 0 0 1-.109-.448q0-.43.34-.653.343-.226.905-.226.3 0 .563.062.266.059.521.173l-.217.518a3 3 0 0 0-.442-.158 1.6 1.6 0 0 0-.448-.064q-.267 0-.407.082a.26.26 0 0 0-.138.234q0 .114.067.193a.7.7 0 0 0 .232.159q.166.079.463.196.29.111.5.234.215.12.329.296a.8.8 0 0 1 .114.454m2.408-2.38q.578 0 .926.422.352.422.352 1.254 0 .55-.164.929-.162.376-.455.568-.29.19-.676.19a1.3 1.3 0 0 1-.428-.064 1.07 1.07 0 0 1-.527-.395h-.041a6 6 0 0 1 .04.518v1.321h-.69V6.257h.562l.096.448h.033q.09-.138.22-.255a1 1 0 0 1 .316-.184q.187-.07.436-.07m-.184.563a.8.8 0 0 0-.457.114.64.64 0 0 0-.25.337q-.076.226-.081.565v.097q0 .36.073.612a.73.73 0 0 0 .249.381q.175.13.474.13a.63.63 0 0 0 .417-.139.8.8 0 0 0 .248-.392q.082-.255.082-.6 0-.525-.187-.815-.184-.29-.568-.29m5.13 1.113q0 .405-.106.718-.105.314-.308.53a1.36 1.36 0 0 1-.486.328q-.284.111-.642.112-.333 0-.612-.112a1.4 1.4 0 0 1-.483-.328 1.5 1.5 0 0 1-.314-.53 2.1 2.1 0 0 1-.111-.718q0-.536.185-.908.187-.375.533-.571.346-.197.823-.197.449 0 .791.197.343.195.536.57.194.375.194.91m-2.353 0q0 .355.085.607a.8.8 0 0 0 .27.386.78.78 0 0 0 .468.132.78.78 0 0 0 .469-.132.77.77 0 0 0 .267-.386q.084-.252.085-.607 0-.354-.085-.6a.74.74 0 0 0-.267-.378.8.8 0 0 0-.472-.132q-.428 0-.624.287t-.196.823m4.834-1.676q.548 0 .852.284.309.282.308.906V9.5h-.688V7.514q0-.378-.156-.566-.154-.19-.48-.19-.471 0-.656.29-.182.29-.182.84V9.5h-.688V6.257h.536l.096.44h.038a.9.9 0 0 1 .261-.279q.159-.111.352-.167.195-.056.407-.056M50.396 9.5h-.689V6.257h.688zm.656-4.597v.059q-.07.085-.19.205-.12.117-.261.249-.141.129-.279.249a5 5 0 0 1-.249.2h-.46v-.077q.097-.111.214-.267a8 8 0 0 0 .43-.618zM52.124 9.5l-1.233-3.243h.73l.667 1.904a4.3 4.3 0 0 1 .19.747h.024q.02-.15.08-.357.057-.21.12-.39l.667-1.904h.727L52.862 9.5zm3.756-3.305q.434 0 .744.179.31.18.478.507.166.328.167.785v.37h-2.166q.012.471.252.726.245.255.68.255.31 0 .557-.059.249-.061.513-.179v.56a2.2 2.2 0 0 1-.496.167q-.252.053-.603.053-.478 0-.841-.185a1.35 1.35 0 0 1-.565-.557q-.203-.368-.203-.917 0-.544.185-.925a1.33 1.33 0 0 1 .519-.58q.333-.2.779-.2m0 .519a.7.7 0 0 0-.528.21q-.198.211-.234.619h1.477a1.1 1.1 0 0 0-.082-.43.63.63 0 0 0-.235-.294.7.7 0 0 0-.398-.105M58.736 9.5h-.691V4.941h.691zm4.234-3.305q.548 0 .852.284.308.282.308.906V9.5h-.689V7.514q0-.378-.155-.566-.155-.19-.48-.19-.472 0-.657.29-.18.29-.181.84V9.5h-.689V6.257h.536l.097.44h.038a.9.9 0 0 1 .26-.279q.16-.111.352-.167.197-.056.408-.056m4.995 1.676q0 .405-.106.718-.105.314-.307.53a1.36 1.36 0 0 1-.487.328q-.284.111-.641.112-.334 0-.613-.112a1.4 1.4 0 0 1-.483-.328 1.5 1.5 0 0 1-.313-.53 2.1 2.1 0 0 1-.112-.718q0-.536.185-.908.188-.375.533-.571.346-.197.823-.197.45 0 .791.197.344.195.537.57t.193.91m-2.353 0q0 .355.085.607a.8.8 0 0 0 .27.386.78.78 0 0 0 .469.132.78.78 0 0 0 .468-.132.77.77 0 0 0 .267-.386 1.9 1.9 0 0 0 .085-.607q0-.354-.085-.6a.74.74 0 0 0-.267-.378.8.8 0 0 0-.471-.132q-.429 0-.624.287-.197.287-.197.823"></path><defs><linearGradient id="ic-play-store_svg__b" x1="15.18" x2="3.433" y1="6.096" y2="17.781" gradientUnits="userSpaceOnUse"><stop stop-color="#00A0FF"></stop><stop offset="0.007" stop-color="#00A1FF"></stop><stop offset="0.26" stop-color="#00BEFF"></stop><stop offset="0.512" stop-color="#00D2FF"></stop><stop offset="0.76" stop-color="#00DFFF"></stop><stop offset="1" stop-color="#00E3FF"></stop></linearGradient><linearGradient id="ic-play-store_svg__c" x1="23.558" x2="6.71" y1="14.001" y2="14.001" gradientUnits="userSpaceOnUse"><stop stop-color="#FFE000"></stop><stop offset="0.409" stop-color="#FFBD00"></stop><stop offset="0.775" stop-color="orange"></stop><stop offset="1" stop-color="#FF9C00"></stop></linearGradient><linearGradient id="ic-play-store_svg__e" x1="17.289" x2="1.358" y1="15.606" y2="31.453" gradientUnits="userSpaceOnUse"><stop stop-color="#FF3A44"></stop><stop offset="1" stop-color="#C31162"></stop></linearGradient><linearGradient id="ic-play-store_svg__f" x1="5.082" x2="12.196" y1="0.124" y2="7.2" gradientUnits="userSpaceOnUse"><stop stop-color="#32A071"></stop><stop offset="0.069" stop-color="#2DA771"></stop><stop offset="0.476" stop-color="#15CF74"></stop><stop offset="0.801" stop-color="#06E775"></stop><stop offset="1" stop-color="#00F076"></stop></linearGradient><filter id="ic-play-store_svg__a" width="16.077" height="18.005" x="6.944" y="4.999" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="-0.095"></feOffset><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow_24211_84697"></feBlend><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="0.095"></feOffset><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"></feColorMatrix><feBlend in2="effect1_innerShadow_24211_84697" result="effect2_innerShadow_24211_84697"></feBlend></filter><filter id="ic-play-store_svg__d" width="11.618" height="9.002" x="7.268" y="14.001" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="-0.095"></feOffset><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow_24211_84697"></feBlend></filter></defs></svg></a></li></ul><div data-state="open" id="radix-:R1bpvkq:" role="region" aria-labelledby="radix-:Rbpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"><img src="https://d1gkntzr8mxq7s.cloudfront.net/67f04b82c8dff.png" alt="Imagem ilustrativa do Sympla App" class="_10lo45i7"/></div></div><div class="k5k13s3"><h4 class="k5k13s5">Cidades</h4><div data-state="open" id="radix-:R1bpvkq:" role="region" aria-labelledby="radix-:Rbpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 k5k13s6" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"><ul class="k5k13s7"><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/belo-horizonte-mg" rel="noopener noreferrer" class="k5k13s8">Belo Horizonte</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/sao-paulo-sp" rel="noopener noreferrer" class="k5k13s8">São Paulo</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/rio-de-janeiro-rj" rel="noopener noreferrer" class="k5k13s8">Rio de Janeiro</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/brasilia-df" rel="noopener noreferrer" class="k5k13s8">Brasília</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/salvador-ba" rel="noopener noreferrer" class="k5k13s8">Salvador</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/porto-alegre-rs" rel="noopener noreferrer" class="k5k13s8">Porto Alegre</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/curitiba-pr" rel="noopener noreferrer" class="k5k13s8">Curitiba</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/fortaleza-ce" rel="noopener noreferrer" class="k5k13s8">Fortaleza</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/recife-pe" rel="noopener noreferrer" class="k5k13s8">Recife</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/goiania-go" rel="noopener noreferrer" class="k5k13s8">Goiânia</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/florianopolis-sc" rel="noopener noreferrer" class="k5k13s8">Florianópolis</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/campinas-sp" rel="noopener noreferrer" class="k5k13s8">Campinas</a></li></ul></div></div><div class="k5k13s3"><h4 class="k5k13s5">Categorias</h4><div data-state="open" id="radix-:R1bpvkq:" role="region" aria-labelledby="radix-:Rbpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 k5k13s6" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"><ul class="k5k13s7"><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/show-musica-festa" rel="noopener noreferrer" class="k5k13s8">Festas e Shows</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/teatro-espetaculo" rel="noopener noreferrer" class="k5k13s8">Teatros e espetáculos</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/experiencias" rel="noopener noreferrer" class="k5k13s8">Passeios e tours</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/sports" rel="noopener noreferrer" class="k5k13s8">Esporte</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/congresso-palestra" rel="noopener noreferrer" class="k5k13s8">Congressos e palestras</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/stand-up-comedy" rel="noopener noreferrer" class="k5k13s8">Stand up comedy</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/gastronomico" rel="noopener noreferrer" class="k5k13s8">Gastronomia</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/curso-workshop" rel="noopener noreferrer" class="k5k13s8">Cursos e workshops</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/religioso-espiritual" rel="noopener noreferrer" class="k5k13s8">Religião e espiritualidade</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/infantil" rel="noopener noreferrer" class="k5k13s8">Infantil</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/saude-e-bem-estar" rel="noopener noreferrer" class="k5k13s8">Saúde e Bem-Estar</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/gratis" rel="noopener noreferrer" class="k5k13s8">Grátis</a></li><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/eventos/sympla-play" rel="noopener noreferrer" class="k5k13s8">Sympla Play</a></li></ul></div></div><div class="k5k13s3"><h4 class="k5k13s5">Seja Produtor</h4><div data-state="open" id="radix-:R1bpvkq:" role="region" aria-labelledby="radix-:Rbpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 k5k13s6" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"><ul class="k5k13s7"><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/como-funciona/?__hstc=181257784.4c8872a436f9b62d2c86b808b91d0200.1743089752561.1743641669755.1743686280316.15&amp;__hssc=181257784.1.1743686280316&amp;__hsfp=3072090281&amp;_gl=1*1xjzuke*_gcl_au*NjY1OTU4OTgxLjE3NDMwODk3NTI.*_ga*MzE4NDkzNTgwLjE3NDMwODk3NTI.*_ga_KXH10SQTZF*MTc0MzY4NjI3OC4xMy4wLjE3NDM2ODYyODAuNTguMC4xMjUxMTY0NzEw" rel="noopener noreferrer" class="k5k13s8">Como funciona</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br" rel="noopener noreferrer" class="k5k13s8">Crie seu evento</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/tipos-de-eventos" rel="noopener noreferrer" class="k5k13s8">Tipos de eventos</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/quanto-custa" rel="noopener noreferrer" class="k5k13s8">Quanto custa</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/demonstracao-de-eventos" rel="noopener noreferrer" class="k5k13s8">Demonstração de eventos</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/mundo-sympla" rel="noopener noreferrer" class="k5k13s8">Mundo Sympla</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/produtor-day" rel="noopener noreferrer" class="k5k13s8">Produtor Day</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/diagnostico-eventos" rel="noopener noreferrer" class="k5k13s8">Peça um diagnóstico</a></li><li class="k5k13s4"><a target="_blank" href="https://blog.sympla.com.br/blog-do-produtor/funcionalidades-sympla/cases-de-sucesso" rel="noopener noreferrer" class="k5k13s8">Cases de sucesso</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/funcionalidades/conecta" rel="noopener noreferrer" class="k5k13s8">Homologados</a></li><li class="k5k13s4"><a target="_blank" href="https://developers.sympla.com.br/api-doc/index.html" rel="noopener noreferrer" class="k5k13s8">API</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/funcionalidades/evento-seguro" rel="noopener noreferrer" class="k5k13s8">Evento Seguro</a></li></ul></div></div><div class="k5k13s3"><h4 class="k5k13s5">A Sympla</h4><div data-state="open" id="radix-:R1bpvkq:" role="region" aria-labelledby="radix-:Rbpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 k5k13s6" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"><ul class="k5k13s7"><li class="k5k13s4"><a target="_blank" href="https://www.sympla.com.br/sobre-sympla" rel="noopener noreferrer" class="k5k13s8">Sobre</a></li><li class="k5k13s4"><a target="_blank" href="https://carreira.inhire.com.br/carreiras/carreiras-sympla" rel="noopener noreferrer" class="k5k13s8">Vem Trabalhar na Sympla</a></li><li class="k5k13s4"><a target="_blank" href="https://blog.sympla.com.br/" rel="noopener noreferrer" class="k5k13s8">Blog</a></li></ul></div></div><div class="k5k13s3"><h4 class="k5k13s5">Ajuda</h4><div data-state="open" id="radix-:R1bpvkq:" role="region" aria-labelledby="radix-:Rbpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 k5k13s6" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"><ul class="k5k13s7"><li class="k5k13s4"><a target="_blank" href="https://ajuda.sympla.com.br/hc/pt-br/" rel="noopener noreferrer" class="k5k13s8">Central de Ajuda</a></li><li class="k5k13s4"><a target="_blank" href="https://ajuda.sympla.com.br/hc/pt-br/?_gl=1*863e6l*_gcl_au*NjY1OTU4OTgxLjE3NDMwODk3NTI.*_ga*MzE4NDkzNTgwLjE3NDMwODk3NTI.*_ga_KXH10SQTZF*MTc0MzY4NjI3OC4xMy4xLjE3NDM2ODY3MzEuMzEuMC4xMjUxMTY0NzEw" rel="noopener noreferrer" class="k5k13s8">Compradores</a></li><li class="k5k13s4"><a target="_blank" href="https://symplaprodutor.zendesk.com/hc/pt-br" rel="noopener noreferrer" class="k5k13s8">Produtores</a></li><li class="k5k13s4"><a target="_blank" href="https://produtores.sympla.com.br/plantao/" rel="noopener noreferrer" class="k5k13s8">Plantão Sympla para Produtores</a></li></ul></div></div></section><div class="k5k13sa"><h3 data-orientation="vertical" data-state="open" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1bpvkq:" aria-expanded="true" data-state="open" data-orientation="vertical" id="radix-:Rbpvkq:" class="_1nxsg0pc _1nxsg0p0" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div><span class="show k5k13s9">Mostrar opções</span><span class="hide k5k13s9">Ocultar opções</span></button></h3></div></div></div><div class="_1qhbco20"><div class="_10lo45i0"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 60 25" class="_10lo45i2"><path d="M58.592 9.913v8.375a.226.226 0 0 1-.227.225H56.15a.226.226 0 0 1-.227-.225v-.605c-.587.67-1.459 1.077-2.652 1.077-2.331 0-4.253-2.03-4.253-4.66s1.922-4.659 4.253-4.659c1.193 0 2.065.406 2.652 1.077v-.605c0-.124.102-.225.227-.225h2.216c.126 0 .227.1.227.225zM1.114 15.645l2.083-1.197a.23.23 0 0 1 .317.093c.46.908 1.216 1.504 2.528 1.504 1.36 0 1.7-.532 1.7-1.011 0-.763-.716-1.065-2.595-1.58-1.86-.514-3.685-1.4-3.685-3.778 0-2.395 2.04-3.779 4.204-3.779 1.984 0 3.552.907 4.48 2.61.058.107.02.24-.086.302L8.04 9.98a.23.23 0 0 1-.316-.087c-.421-.764-1.005-1.23-2.058-1.23-.894 0-1.342.444-1.342.94 0 .569.305.96 2.255 1.545 1.896.567 4.025 1.224 4.025 3.85 0 2.394-1.932 3.813-4.651 3.813-2.54 0-4.196-1.158-4.935-2.884a.225.225 0 0 1 .096-.283zm18.65-5.951c.158 0 .268.154.216.3l-2.953 8.304c-.972 2.736-2.5 3.87-4.876 3.822a.227.227 0 0 1-.223-.226V19.85c0-.121.097-.22.219-.226 1.072-.044 1.615-.427 1.985-1.38a.23.23 0 0 0-.002-.17l-3.394-8.067a.226.226 0 0 1 .21-.313h2.45c.097 0 .182.06.215.149l1.931 5.28 1.633-5.27a.23.23 0 0 1 .217-.16zm24.573 4.435c0 2.643-1.933 4.683-4.276 4.683-1.2 0-2.076-.408-2.666-1.082v4.132c0 .138-.113.25-.253.25h-2.178a.25.25 0 0 1-.253-.25V9.944c0-.138.113-.25.253-.25h2.178c.14 0 .253.112.253.25v.583c.59-.674 1.467-1.082 2.666-1.082 2.343 0 4.276 2.04 4.276 4.684M45.57 5.59h2.228c.126 0 .228.1.228.226v12.498a.227.227 0 0 1-.228.226H45.57a.227.227 0 0 1-.228-.226V5.817c0-.125.102-.226.228-.226zM29.972 9.317c2.058 0 3.399 1.455 3.399 3.672v5.22c0 .126-.067.332-.193.332H30.95c-.125 0-.223-.206-.223-.331v-4.99c0-.887-.409-1.455-1.268-1.455-.894 0-1.375.621-1.375 1.668v4.777c0 .125-.147.331-.273.331h-1.996c-.125 0-.273-.206-.273-.331v-4.777c0-1.047-.48-1.668-1.375-1.668-.86 0-1.268.568-1.268 1.455v4.99c0 .125-.097.331-.223.331h-2.228c-.126 0-.193-.206-.193-.331v-5.22c0-2.218 1.34-3.673 3.397-3.673 1.12 0 2.332.099 3.158 1.047.826-.948 2.043-1.047 3.162-1.047m24.33-2.669a1.524 1.524 0 0 1-1.673 1.356 1.52 1.52 0 0 1-1.367-1.659 1.525 1.525 0 0 1 1.673-1.355c.84.083 1.452.826 1.367 1.658m5.12-1.78a2.167 2.167 0 0 1-2.377 1.928 2.16 2.16 0 0 1-1.943-2.358 2.167 2.167 0 0 1 2.378-1.927 2.16 2.16 0 0 1 1.943 2.358zm-3.5 9.232c0-1.323-.89-2.153-2.118-2.153s-2.118.83-2.118 2.153c0 1.324.89 2.154 2.118 2.154s2.118-.83 2.118-2.154m-14.269.029c0-1.33-.895-2.164-2.13-2.164s-2.128.833-2.128 2.164c0 1.33.894 2.164 2.129 2.164s2.129-.834 2.129-2.164"></path></svg><h4 class="_10lo45i1">Compre também pelo App</h4><ul class="_10lo45i3"><li class="_10lo45i4"><a target="_blank" href="https://itunes.apple.com/br/app/sympla-ingressos-para-os-melhores/id1136318924" rel="noopener noreferrer" aria-label="Download na Apple Store"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 84 28" class="_10lo45i5"><rect width="84" height="28" fill="#000" rx="5.091"></rect><path fill="#fff" d="M57.068 13.44v1.604h-1.005v1.052h1.005v3.573c0 1.22.552 1.709 1.94 1.709.244 0 .477-.03.68-.064v-1.04c-.174.017-.285.029-.476.029-.622 0-.895-.29-.895-.953v-3.254h1.371v-1.052h-1.371v-1.603zM63.226 21.465c1.848 0 2.98-1.238 2.98-3.289 0-2.04-1.138-3.283-2.98-3.283-1.848 0-2.987 1.244-2.987 3.283 0 2.051 1.133 3.289 2.987 3.289m0-1.11c-1.087 0-1.697-.796-1.697-2.179 0-1.371.61-2.173 1.697-2.173 1.08 0 1.697.802 1.697 2.173 0 1.377-.616 2.18-1.697 2.18M67.176 21.343h1.25v-3.736c0-.89.668-1.488 1.615-1.488.22 0 .593.041.697.076v-1.232a2.6 2.6 0 0 0-.558-.052c-.825 0-1.528.453-1.708 1.075h-.093v-.97h-1.203zM73.84 15.957c.924 0 1.528.645 1.557 1.638h-3.196c.07-.988.715-1.638 1.639-1.638m1.551 3.678c-.232.494-.75.767-1.505.767-.999 0-1.644-.703-1.685-1.813v-.07h4.469v-.436c0-1.987-1.064-3.19-2.824-3.19-1.784 0-2.917 1.284-2.917 3.307 0 2.021 1.11 3.265 2.923 3.265 1.446 0 2.457-.697 2.742-1.83zM48.875 19.006c.096 1.554 1.391 2.548 3.319 2.548 2.06 0 3.348-1.042 3.348-2.704 0-1.307-.735-2.03-2.517-2.445l-.958-.235c-1.132-.265-1.59-.62-1.59-1.241 0-.783.71-1.295 1.777-1.295 1.012 0 1.71.5 1.837 1.301h1.313c-.079-1.463-1.368-2.493-3.132-2.493-1.897 0-3.162 1.03-3.162 2.577 0 1.277.717 2.036 2.289 2.403l1.12.271c1.15.271 1.656.669 1.656 1.331 0 .771-.795 1.331-1.88 1.331-1.161 0-1.968-.524-2.083-1.349zM35.934 14.91c-.86 0-1.604.43-1.987 1.151h-.093v-1.046H32.65v8.431h1.25v-3.062h.098c.331.668 1.046 1.064 1.947 1.064 1.598 0 2.614-1.261 2.614-3.272 0-2.01-1.016-3.265-2.626-3.265m-.354 5.416c-1.046 0-1.703-.825-1.703-2.144 0-1.325.657-2.15 1.708-2.15 1.058 0 1.691.808 1.691 2.144 0 1.343-.633 2.15-1.696 2.15M42.932 14.91c-.86 0-1.604.43-1.987 1.151h-.093v-1.046h-1.203v8.431h1.25v-3.062h.098c.331.668 1.046 1.064 1.946 1.064 1.598 0 2.615-1.261 2.615-3.272 0-2.01-1.017-3.265-2.626-3.265m-.355 5.416c-1.045 0-1.702-.825-1.702-2.144 0-1.325.657-2.15 1.708-2.15 1.058 0 1.691.808 1.691 2.144 0 1.343-.633 2.15-1.697 2.15M30.41 21.343h1.433l-3.138-8.69h-1.451l-3.138 8.69h1.385l.801-2.307h3.313zm-2.5-7.113h.103l1.258 3.674h-2.625zM17.339 14.21a3.49 3.49 0 0 1 1.65-2.906 3.59 3.59 0 0 0-2.795-1.51c-1.175-.124-2.315.703-2.914.703-.61 0-1.532-.691-2.526-.67a3.75 3.75 0 0 0-3.13 1.909c-1.354 2.344-.345 5.789.952 7.683.649.928 1.407 1.964 2.4 1.927.97-.04 1.333-.619 2.505-.619 1.161 0 1.502.62 2.514.596 1.042-.017 1.698-.932 2.324-1.868a7.7 7.7 0 0 0 1.063-2.165 3.38 3.38 0 0 1-2.043-3.08M15.426 8.548a3.4 3.4 0 0 0 .78-2.444 3.47 3.47 0 0 0-2.245 1.162 3.28 3.28 0 0 0-.8 2.353 2.9 2.9 0 0 0 2.265-1.071M24.563 5.717h1.274q.83 0 1.25.24.423.24.423.83 0 .245-.088.444a.8.8 0 0 1-.25.326.9.9 0 0 1-.403.17v.029q.249.044.442.155.195.11.308.32.114.207.114.539 0 .392-.188.668-.185.275-.53.418a2.1 2.1 0 0 1-.814.144h-1.538zm.703 1.766h.674q.477 0 .662-.155.184-.155.184-.454 0-.305-.22-.44-.216-.135-.691-.134h-.61zm0 .569v1.36h.74q.494 0 .692-.191.2-.191.2-.516a.64.64 0 0 0-.091-.346.56.56 0 0 0-.29-.225 1.5 1.5 0 0 0-.545-.082zm4.453-1.357q.616 0 .928.273.317.272.317.85V10h-.49l-.131-.46h-.024a1.7 1.7 0 0 1-.284.29 1 1 0 0 1-.34.17 1.6 1.6 0 0 1-.465.059q-.29 0-.52-.106a.82.82 0 0 1-.36-.328 1.07 1.07 0 0 1-.131-.557q0-.501.372-.753.375-.252 1.13-.278l.563-.02v-.17q0-.337-.158-.48-.155-.144-.44-.144-.243 0-.471.07t-.445.173l-.223-.487q.237-.125.539-.205a2.5 2.5 0 0 1 .633-.079m.562 1.755-.419.015q-.515.018-.723.176a.52.52 0 0 0-.208.433q0 .24.143.352a.6.6 0 0 0 .378.108.87.87 0 0 0 .592-.202q.237-.206.237-.6zm2.335-1.693V10h-.688V6.757zm-.34-1.242q.159 0 .273.085.117.084.117.293 0 .204-.117.293a.44.44 0 0 1-.273.085.45.45 0 0 1-.278-.085q-.111-.09-.111-.293 0-.21.111-.293a.45.45 0 0 1 .278-.085m2.045 2.827-1.084-1.585h.785l.742 1.14.744-1.14h.782L35.2 8.342 36.346 10h-.788l-.794-1.216L33.967 10h-.782zm3.859-1.647q.615 0 .928.273.317.272.317.85V10h-.49l-.131-.46h-.024a1.7 1.7 0 0 1-.284.29 1 1 0 0 1-.34.17 1.6 1.6 0 0 1-.466.059q-.29 0-.518-.106a.82.82 0 0 1-.36-.328 1.07 1.07 0 0 1-.132-.557q0-.501.372-.753.375-.252 1.13-.278l.563-.02v-.17q0-.337-.158-.48-.156-.144-.44-.144-.243 0-.471.07-.229.07-.446.173l-.222-.487q.237-.125.539-.205.305-.078.633-.079m.562 1.755-.419.015q-.515.018-.723.176a.52.52 0 0 0-.208.433q0 .24.143.352a.6.6 0 0 0 .378.108.87.87 0 0 0 .592-.202q.237-.206.237-.6zm3.29-1.755a2 2 0 0 1 .346.033l-.065.644a1 1 0 0 0-.152-.026 2 2 0 0 0-.158-.01q-.184 0-.352.062-.167.06-.296.182a.8.8 0 0 0-.202.302 1.1 1.1 0 0 0-.073.422V10h-.691V6.757h.539l.094.571h.032q.096-.172.24-.316t.328-.229a.95.95 0 0 1 .41-.088m4.196 0q.548 0 .852.284.308.282.308.906V10h-.689V8.014q0-.377-.155-.566-.156-.19-.48-.19-.472 0-.657.29-.18.29-.181.84V10h-.689V6.757h.536l.097.44h.038a.9.9 0 0 1 .26-.279q.159-.111.352-.167.197-.056.407-.056m3.395 0q.615 0 .929.273.316.272.316.85V10h-.49l-.13-.46h-.024a1.7 1.7 0 0 1-.284.29 1 1 0 0 1-.34.17 1.6 1.6 0 0 1-.466.059q-.29 0-.519-.106a.82.82 0 0 1-.36-.328 1.07 1.07 0 0 1-.132-.557q0-.501.372-.753.375-.252 1.131-.278l.563-.02v-.17q0-.337-.159-.48-.155-.144-.44-.144-.242 0-.47.07-.23.07-.446.173l-.223-.487q.237-.125.54-.205.303-.078.632-.079m.563 1.755-.42.015q-.514.018-.723.176a.52.52 0 0 0-.208.433q0 .24.143.352a.6.6 0 0 0 .378.108.87.87 0 0 0 .592-.202q.237-.206.237-.6z"></path></svg></a></li><li class="_10lo45i4"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.sympla.tickets&amp;hl=pt_BR" rel="noopener noreferrer" aria-label="Download no Google Play"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 94 28" class="_10lo45i6"><rect width="94" height="28" fill="#000" rx="4.455"></rect><path fill="#fff" d="M47.444 15.226c-1.638 0-2.973 1.252-2.973 2.977 0 1.714 1.335 2.977 2.973 2.977s2.973-1.263 2.973-2.977c0-1.725-1.336-2.977-2.973-2.977m0 4.782c-.898 0-1.672-.744-1.672-1.804 0-1.072.775-1.805 1.672-1.805s1.67.733 1.67 1.805c0 1.06-.773 1.804-1.67 1.804m-6.486-4.782c-1.637 0-2.972 1.252-2.972 2.977 0 1.714 1.335 2.977 2.972 2.977 1.639 0 2.974-1.263 2.974-2.977 0-1.725-1.335-2.977-2.974-2.977m0 4.782c-.897 0-1.67-.744-1.67-1.804 0-1.072.773-1.805 1.67-1.805.898 0 1.671.733 1.671 1.805.001 1.06-.773 1.804-1.67 1.804m-7.713-3.868v1.263h3.006c-.09.71-.325 1.229-.684 1.59-.437.44-1.122.924-2.322.924-1.851 0-3.298-1.5-3.298-3.36 0-1.861 1.447-3.361 3.298-3.361.998 0 1.727.395 2.266.902l.886-.891c-.752-.722-1.75-1.274-3.152-1.274-2.535 0-4.667 2.075-4.667 4.624s2.131 4.623 4.667 4.623c1.368 0 2.4-.451 3.208-1.297.83-.834 1.088-2.008 1.088-2.955 0-.292-.022-.563-.068-.789zm31.548.98c-.247-.664-.999-1.894-2.536-1.894-1.525 0-2.793 1.207-2.793 2.977 0 1.669 1.257 2.977 2.939 2.977 1.357 0 2.142-.834 2.468-1.32l-1.01-.676c-.336.496-.796.823-1.458.823s-1.133-.305-1.436-.902l3.96-1.647zm-4.039.993c-.033-1.15.886-1.736 1.549-1.736.516 0 .953.26 1.099.631zM57.535 21h1.3v-8.75h-1.3zm-2.132-5.108h-.045c-.291-.35-.853-.666-1.559-.666-1.48 0-2.838 1.308-2.838 2.989 0 1.669 1.357 2.966 2.838 2.966.707 0 1.268-.316 1.56-.677h.044v.429c0 1.139-.606 1.748-1.581 1.748-.797 0-1.29-.575-1.492-1.06l-1.133.474c.325.789 1.188 1.759 2.625 1.759 1.525 0 2.816-.902 2.816-3.102v-5.345h-1.234zm-1.492 4.116c-.897 0-1.648-.756-1.648-1.793 0-1.05.751-1.816 1.648-1.816.886 0 1.582.767 1.582 1.816 0 1.037-.696 1.793-1.582 1.793m16.977-7.759h-3.113V21h1.298v-3.315h1.814c1.44 0 2.856-1.048 2.856-2.717s-1.415-2.719-2.855-2.719m.033 4.218h-1.848v-3h1.848c.972 0 1.523.809 1.523 1.5 0 .678-.551 1.5-1.523 1.5m8.03-1.257c-.94 0-1.915.417-2.318 1.34l1.153.484c.247-.484.706-.642 1.187-.642.672 0 1.355.405 1.366 1.126v.09a2.87 2.87 0 0 0-1.355-.338c-1.242 0-2.508.687-2.508 1.97 0 1.171 1.019 1.925 2.161 1.925.873 0 1.355-.394 1.657-.856h.045v.676h1.254V17.63c.001-1.553-1.153-2.42-2.642-2.42m-.157 4.796c-.425 0-1.02-.214-1.02-.743 0-.676.74-.935 1.379-.935.57 0 .84.124 1.186.293a1.58 1.58 0 0 1-1.545 1.385m7.368-4.604-1.489 3.794h-.044L83.083 15.4h-1.4l2.318 5.303-1.321 2.95h1.355l3.572-8.252zM74.462 21h1.298v-8.75h-1.298z"></path><g filter="url(#ic-play-store_svg__a)"><path fill="url(#ic-play-store_svg__b)" d="M7.267 5.277c-.203.215-.323.55-.323.983v15.481c0 .434.12.768.323.984l.051.05 8.627-8.672v-.204L7.318 5.226z"></path><path fill="url(#ic-play-store_svg__c)" d="m18.82 16.995-2.876-2.892v-.204l2.876-2.891.065.037 3.407 1.946c.973.556.973 1.465 0 2.021l-3.407 1.946z"></path><g filter="url(#ic-play-store_svg__d)"><path fill="url(#ic-play-store_svg__e)" d="M18.886 16.958 15.945 14l-8.677 8.724c.32.341.85.383 1.446.043z"></path></g><path fill="url(#ic-play-store_svg__f)" d="M18.886 11.044 8.714 5.234c-.596-.341-1.126-.298-1.446.043l8.678 8.724z"></path></g><path fill="#fff" d="M33.04 7.317q0 .724-.27 1.21-.27.484-.782.73-.512.243-1.236.243h-1.19V5.217h1.319q.665 0 1.148.24.485.237.747.706.264.465.264 1.154m-.732.02q0-.526-.167-.866a1.07 1.07 0 0 0-.487-.504q-.319-.168-.788-.167h-.6V8.91h.498q.776 0 1.16-.395.384-.396.384-1.178m2.273-1.08V9.5h-.688V6.257zm-.34-1.242q.159 0 .273.085.117.084.117.293 0 .204-.117.293a.44.44 0 0 1-.273.085.45.45 0 0 1-.278-.085q-.111-.09-.111-.293 0-.21.11-.293a.45.45 0 0 1 .28-.085m3.507 3.56a.9.9 0 0 1-.155.538.95.95 0 0 1-.454.334q-.297.111-.727.112-.34 0-.586-.05a2 2 0 0 1-.46-.147v-.594q.231.108.519.187.29.08.548.08.34 0 .489-.106a.34.34 0 0 0 .088-.475.6.6 0 0 0-.223-.173 4 4 0 0 0-.474-.217 4 4 0 0 1-.52-.246.9.9 0 0 1-.318-.296.84.84 0 0 1-.109-.448q0-.43.34-.653.343-.226.905-.226.3 0 .563.062.266.059.521.173l-.217.518a3 3 0 0 0-.442-.158 1.6 1.6 0 0 0-.448-.064q-.267 0-.407.082a.26.26 0 0 0-.138.234q0 .114.067.193a.7.7 0 0 0 .232.159q.166.079.463.196.29.111.5.234.215.12.329.296a.8.8 0 0 1 .114.454m2.408-2.38q.578 0 .926.422.352.422.352 1.254 0 .55-.164.929-.162.376-.455.568-.29.19-.676.19a1.3 1.3 0 0 1-.428-.064 1.07 1.07 0 0 1-.527-.395h-.041a6 6 0 0 1 .04.518v1.321h-.69V6.257h.562l.096.448h.033q.09-.138.22-.255a1 1 0 0 1 .316-.184q.187-.07.436-.07m-.184.563a.8.8 0 0 0-.457.114.64.64 0 0 0-.25.337q-.076.226-.081.565v.097q0 .36.073.612a.73.73 0 0 0 .249.381q.175.13.474.13a.63.63 0 0 0 .417-.139.8.8 0 0 0 .248-.392q.082-.255.082-.6 0-.525-.187-.815-.184-.29-.568-.29m5.13 1.113q0 .405-.106.718-.105.314-.308.53a1.36 1.36 0 0 1-.486.328q-.284.111-.642.112-.333 0-.612-.112a1.4 1.4 0 0 1-.483-.328 1.5 1.5 0 0 1-.314-.53 2.1 2.1 0 0 1-.111-.718q0-.536.185-.908.187-.375.533-.571.346-.197.823-.197.449 0 .791.197.343.195.536.57.194.375.194.91m-2.353 0q0 .355.085.607a.8.8 0 0 0 .27.386.78.78 0 0 0 .468.132.78.78 0 0 0 .469-.132.77.77 0 0 0 .267-.386q.084-.252.085-.607 0-.354-.085-.6a.74.74 0 0 0-.267-.378.8.8 0 0 0-.472-.132q-.428 0-.624.287t-.196.823m4.834-1.676q.548 0 .852.284.309.282.308.906V9.5h-.688V7.514q0-.378-.156-.566-.154-.19-.48-.19-.471 0-.656.29-.182.29-.182.84V9.5h-.688V6.257h.536l.096.44h.038a.9.9 0 0 1 .261-.279q.159-.111.352-.167.195-.056.407-.056M50.396 9.5h-.689V6.257h.688zm.656-4.597v.059q-.07.085-.19.205-.12.117-.261.249-.141.129-.279.249a5 5 0 0 1-.249.2h-.46v-.077q.097-.111.214-.267a8 8 0 0 0 .43-.618zM52.124 9.5l-1.233-3.243h.73l.667 1.904a4.3 4.3 0 0 1 .19.747h.024q.02-.15.08-.357.057-.21.12-.39l.667-1.904h.727L52.862 9.5zm3.756-3.305q.434 0 .744.179.31.18.478.507.166.328.167.785v.37h-2.166q.012.471.252.726.245.255.68.255.31 0 .557-.059.249-.061.513-.179v.56a2.2 2.2 0 0 1-.496.167q-.252.053-.603.053-.478 0-.841-.185a1.35 1.35 0 0 1-.565-.557q-.203-.368-.203-.917 0-.544.185-.925a1.33 1.33 0 0 1 .519-.58q.333-.2.779-.2m0 .519a.7.7 0 0 0-.528.21q-.198.211-.234.619h1.477a1.1 1.1 0 0 0-.082-.43.63.63 0 0 0-.235-.294.7.7 0 0 0-.398-.105M58.736 9.5h-.691V4.941h.691zm4.234-3.305q.548 0 .852.284.308.282.308.906V9.5h-.689V7.514q0-.378-.155-.566-.155-.19-.48-.19-.472 0-.657.29-.18.29-.181.84V9.5h-.689V6.257h.536l.097.44h.038a.9.9 0 0 1 .26-.279q.16-.111.352-.167.197-.056.408-.056m4.995 1.676q0 .405-.106.718-.105.314-.307.53a1.36 1.36 0 0 1-.487.328q-.284.111-.641.112-.334 0-.613-.112a1.4 1.4 0 0 1-.483-.328 1.5 1.5 0 0 1-.313-.53 2.1 2.1 0 0 1-.112-.718q0-.536.185-.908.188-.375.533-.571.346-.197.823-.197.45 0 .791.197.344.195.537.57t.193.91m-2.353 0q0 .355.085.607a.8.8 0 0 0 .27.386.78.78 0 0 0 .469.132.78.78 0 0 0 .468-.132.77.77 0 0 0 .267-.386 1.9 1.9 0 0 0 .085-.607q0-.354-.085-.6a.74.74 0 0 0-.267-.378.8.8 0 0 0-.471-.132q-.429 0-.624.287-.197.287-.197.823"></path><defs><linearGradient id="ic-play-store_svg__b" x1="15.18" x2="3.433" y1="6.096" y2="17.781" gradientUnits="userSpaceOnUse"><stop stop-color="#00A0FF"></stop><stop offset="0.007" stop-color="#00A1FF"></stop><stop offset="0.26" stop-color="#00BEFF"></stop><stop offset="0.512" stop-color="#00D2FF"></stop><stop offset="0.76" stop-color="#00DFFF"></stop><stop offset="1" stop-color="#00E3FF"></stop></linearGradient><linearGradient id="ic-play-store_svg__c" x1="23.558" x2="6.71" y1="14.001" y2="14.001" gradientUnits="userSpaceOnUse"><stop stop-color="#FFE000"></stop><stop offset="0.409" stop-color="#FFBD00"></stop><stop offset="0.775" stop-color="orange"></stop><stop offset="1" stop-color="#FF9C00"></stop></linearGradient><linearGradient id="ic-play-store_svg__e" x1="17.289" x2="1.358" y1="15.606" y2="31.453" gradientUnits="userSpaceOnUse"><stop stop-color="#FF3A44"></stop><stop offset="1" stop-color="#C31162"></stop></linearGradient><linearGradient id="ic-play-store_svg__f" x1="5.082" x2="12.196" y1="0.124" y2="7.2" gradientUnits="userSpaceOnUse"><stop stop-color="#32A071"></stop><stop offset="0.069" stop-color="#2DA771"></stop><stop offset="0.476" stop-color="#15CF74"></stop><stop offset="0.801" stop-color="#06E775"></stop><stop offset="1" stop-color="#00F076"></stop></linearGradient><filter id="ic-play-store_svg__a" width="16.077" height="18.005" x="6.944" y="4.999" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="-0.095"></feOffset><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow_24211_84697"></feBlend><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="0.095"></feOffset><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></feComposite><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"></feColorMatrix><feBlend in2="effect1_innerShadow_24211_84697" result="effect2_innerShadow_24211_84697"></feBlend></filter><filter id="ic-play-store_svg__d" width="11.618" height="9.002" x="7.268" y="14.001" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="-0.095"></feOffset><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix><feBlend in2="shape" result="effect1_innerShadow_24211_84697"></feBlend></filter></defs></svg></a></li></ul></div><div data-orientation="vertical"><div data-state="closed" data-orientation="vertical" class="_1qhbco21"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R16jpvkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:R6jpvkq:" class="_1nxsg0p8 _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div>Cidades</button></h3><div data-state="closed" id="radix-:R16jpvkq:" hidden="" role="region" aria-labelledby="radix-:R6jpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1qhbco21"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1ajpvkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rajpvkq:" class="_1nxsg0p8 _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div>Categorias</button></h3><div data-state="closed" id="radix-:R1ajpvkq:" hidden="" role="region" aria-labelledby="radix-:Rajpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1qhbco21"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1ejpvkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rejpvkq:" class="_1nxsg0p8 _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div>Seja Produtor</button></h3><div data-state="closed" id="radix-:R1ejpvkq:" hidden="" role="region" aria-labelledby="radix-:Rejpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1qhbco21"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1ijpvkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rijpvkq:" class="_1nxsg0p8 _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div>A Sympla</button></h3><div data-state="closed" id="radix-:R1ijpvkq:" hidden="" role="region" aria-labelledby="radix-:Rijpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1qhbco21"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1mjpvkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rmjpvkq:" class="_1nxsg0p8 _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div>Ajuda</button></h3><div data-state="closed" id="radix-:R1mjpvkq:" hidden="" role="region" aria-labelledby="radix-:Rmjpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div></div></div></div><section class="_1y4k0we3"><div class="_1y4k0we8 _1y4k0we6"><div class="AccordionRoot" id="component-footer-guidelines" data-orientation="vertical"><div data-state="closed" data-orientation="vertical"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi _1nxsg0p6"><button type="button" aria-controls="radix-:R1dpvkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rdpvkq:" class="_1nxsg0p7 _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="AccordionChevron _1nxsg0p2 _1tpyz4r95" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6.322 9.303a1.066 1.066 0 0 1 1.499 0L12 13.43l4.178-4.129a1.066 1.066 0 0 1 1.5 1.516l-5.616 5.56a.09.09 0 0 1-.125 0l-5.616-5.56a1.066 1.066 0 0 1 0-1.515" clip-rule="evenodd"></path></svg></div>Diretrizes Sympla</button></h3><div data-state="closed" id="radix-:R1dpvkq:" hidden="" role="region" aria-labelledby="radix-:Rdpvkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div></div></div><div class="_1y4k0we4"><div class="_1y4k0we5"><div class="_1y4k0we6"><h4 class="_1y4k0we9"><a target="_blank" href="https://termos-e-politicas.sympla.com.br/hc/pt-br" rel="noopener noreferrer" class="_1y4k0wea">Termos e Políticas</a></h4><h4 class="_1y4k0we9"><a target="_blank" href="https://www.sympla.com.br/codigo-de-etica-e-conduta" rel="noopener noreferrer" class="_1y4k0wea">Ética e conduta</a></h4><h4 class="_1y4k0we9"><a target="_blank" href="https://www.sympla.com.br/sitemap.xml" rel="noopener noreferrer" class="_1y4k0wea">Mapa do Site</a></h4></div></div><div class="_1y4k0wee"><p><b>Sympla Internet Soluções S.A. © Copyright 2026</b></p><p class="_1y4k0wef"> · </p><p>CNPJ: 14.512.528/0001-54</p></div><p class="_1y4k0wee">Avenida Nossa Senhora do Carmo, 931, 6º andar - Sion, Belo Horizonte/MG - 30.320-000</p><p class="_1y4k0wee">Precisa de ajuda?<a target="_blank" href="https://ajuda.sympla.com.br/hc/pt-br/requests/new" rel="noopener noreferrer" aria-label="Entre em contato">Entre em contato conosco</a></p></div><ul class="_1y4k0web"><li class="_1y4k0wec"><a target="_blank" href="https://www.linkedin.com/company/2413674/" rel="noopener noreferrer" class="_1y4k0wed" aria-label="Visite nosso LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path d="M43.2 0H4.8C2.16 0 0 2.16 0 4.8v38.4C0 45.84 2.16 48 4.8 48h38.4c2.64 0 4.8-2.16 4.8-4.8V4.8C48 2.16 45.84 0 43.2 0M14.4 40.8H7.2V19.2h7.2zm-3.6-25.68c-2.4 0-4.32-1.92-4.32-4.32S8.4 6.48 10.8 6.48s4.32 1.92 4.32 4.32-1.92 4.32-4.32 4.32m30 25.68h-7.2V28.08c0-1.92-1.68-3.6-3.6-3.6s-3.6 1.68-3.6 3.6V40.8h-7.2V19.2h7.2v2.88c1.2-1.92 3.84-3.36 6-3.36 4.56 0 8.4 3.84 8.4 8.4z"></path></svg></a></li><li class="_1y4k0wec"><a target="_blank" href="https://www.instagram.com/sympla/" rel="noopener noreferrer" class="_1y4k0wed" aria-label="Visite nosso Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><g fill="#A4A7AE" clip-path="url(#ic-instagram-stroke_svg__a)"><path d="M12 2.16c3.206 0 3.586.015 4.847.071 1.172.052 1.805.249 2.226.413a3.7 3.7 0 0 1 1.379.895c.421.422.68.82.895 1.378.164.422.36 1.06.412 2.227.057 1.265.07 1.645.07 4.847 0 3.206-.013 3.586-.07 4.846-.051 1.172-.248 1.805-.412 2.227a3.7 3.7 0 0 1-.895 1.378 3.7 3.7 0 0 1-1.379.895c-.421.165-1.059.361-2.226.413-1.266.056-1.645.07-4.847.07-3.206 0-3.586-.014-4.847-.07-1.172-.052-1.805-.248-2.226-.413a3.7 3.7 0 0 1-1.379-.895 3.7 3.7 0 0 1-.895-1.378c-.164-.422-.36-1.06-.412-2.227-.057-1.265-.07-1.645-.07-4.846 0-3.207.013-3.586.07-4.847.051-1.172.248-1.805.412-2.227.216-.558.478-.96.895-1.378.422-.422.82-.68 1.379-.895.421-.164 1.059-.361 2.226-.413 1.261-.056 1.64-.07 4.847-.07M12 0C8.742 0 8.334.014 7.055.07 5.78.127 4.903.333 4.144.628a5.86 5.86 0 0 0-2.128 1.388A5.9 5.9 0 0 0 .628 4.139C.333 4.903.127 5.775.07 7.05.014 8.334 0 8.742 0 12s.014 3.666.07 4.945c.057 1.275.263 2.152.558 2.911.31.792.717 1.463 1.388 2.128a5.9 5.9 0 0 0 2.123 1.383c.764.296 1.636.502 2.911.558 1.28.056 1.688.07 4.945.07s3.666-.014 4.946-.07c1.275-.056 2.151-.262 2.91-.558a5.9 5.9 0 0 0 2.124-1.383 5.9 5.9 0 0 0 1.383-2.123c.295-.764.501-1.636.558-2.911.056-1.28.07-1.687.07-4.945s-.014-3.666-.07-4.946c-.057-1.275-.263-2.151-.558-2.91a5.6 5.6 0 0 0-1.374-2.133A5.9 5.9 0 0 0 19.861.633C19.097.338 18.225.13 16.95.075 15.666.015 15.258 0 12 0"></path><path d="M12 5.836A6.166 6.166 0 0 0 5.836 12 6.166 6.166 0 0 0 12 18.164 6.166 6.166 0 0 0 18.164 12 6.166 6.166 0 0 0 12 5.836m0 10.162A3.999 3.999 0 1 1 12.001 8 3.999 3.999 0 0 1 12 15.998M19.847 5.592a1.44 1.44 0 1 1-2.879 0 1.44 1.44 0 0 1 2.879 0"></path></g><defs><clipPath id="ic-instagram-stroke_svg__a"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg></a></li><li class="_1y4k0wec"><a target="_blank" href="https://twitter.com/sympla/" rel="noopener noreferrer" class="_1y4k0wed" aria-label="Visite nosso Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#A4A7AE" fill-rule="evenodd" d="m15.946 23-5.55-7.91L3.449 23H.509l8.583-9.769L.51 1h7.546l5.23 7.455L19.839 1h2.94l-8.185 9.317L23.491 23zm3.272-2.23H17.24L4.718 3.23h1.98l5.014 7.023.867 1.219z" clip-rule="evenodd"></path></svg></a></li><li class="_1y4k0wec"><a target="_blank" href="https://www.facebook.com/sympla" rel="noopener noreferrer" class="_1y4k0wed" aria-label="Visite nosso Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill-rule="evenodd" d="M24 0C10.8 0 0 10.878 0 24.173 0 36.259 8.743 46.273 20.229 48V31.08h-6v-6.907H20.4V18.82c0-6.043 3.6-9.324 9.086-9.324 2.571 0 5.314.518 5.314.518v5.87h-3.086c-2.914 0-3.943 1.9-3.943 3.8v4.489h6.686l-1.028 6.906H27.77V48C39.257 46.273 48 36.259 48 24.173 48 10.878 37.2 0 24 0" clip-rule="evenodd"></path></svg></a></li></ul></section></div></footer></div></div><script>(self.__next_f=self.__next_f||[]).push([0]);self.__next_f.push([2,null])</script><script>self.__next_f.push([1,"1:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/media/630c17af355fa44e-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n2:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/media/e807dee2426166ad-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n3:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/76dd92d38110a42b.css\",\"style\"]\n4:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/f6409ef0593504e9.css\",\"style\"]\n5:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/e001879c65408458.css\",\"style\"]\n6:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/8fdc4690f23c45d4.css\",\"style\"]\n7:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/69906c4c92492d03.css\",\"style\"]\n8:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/43b6e689f42ee6fc.css\",\"style\"]\n9:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/1cd30df508bb3958.css\",\"style\"]\na:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/9cbf9303a4942085.css\",\"style\"]\nb:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/3ee27c142221e531.css\",\"style\"]\nc:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/6b0e51c5390c4395.css\",\"style\"]\nd:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/80228158aa2f99ff.css\",\"style\"]\ne:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/a0588f11fda9688b.css\",\"style\"]\nf:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/28d750e821d57502.css\",\"style\"]\n10:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/81adf2e23941d5a1.css\",\"style\"]\n11:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/ab9beaaf82635d3a.css\",\"style\"]\n12:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/1e895ac1e3826ddc.css\",\"style\"]\n13:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/8738e7102d63e955.css\",\"style\"]\n14:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/9202f108d9c1ba50.css\",\"style\"]\n15:HL[\"https://discovery-next.svc.sympla.com.br/_ne"])</script><script>self.__next_f.push([1,"xt/static/css/2610153976963595.css\",\"style\"]\n16:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/31cb47880d43bba9.css\",\"style\"]\n17:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/0edc96ba0be1af72.css\",\"style\"]\n18:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/04be4931570bc4cb.css\",\"style\"]\n19:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/b3cdf831462ac163.css\",\"style\"]\n1a:HL[\"https://discovery-next.svc.sympla.com.br/_next/static/css/06a28c080195c3eb.css\",\"style\"]\n"])</script><script>self.__next_f.push([1,"1b:I[14360,[],\"\"]\n22:I[94568,[\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"6470\",\"static/chunks/app/global-error-aec6069bd0becbcf.js\"],\"default\"]\n20:T9192,"])</script><script>self.__next_f.push([1,"data:image/gif;base64,R0lGODlhPgA+APcAAAAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3x8fH19fX5+fn9/f4CAgIGBgYKCgoODg4SEhIWFhX2HjXaJlXCKnWqMpGSNq1iPtk6Rv0WSyD2TzzeU1DGU2S2V3SaV4x+V6BqW7BaW7xOW8hSW8RaW8BmW7h2X7CSZ6yuc6jSe6Dqg6D+i5kWj5Uyk4lKm4Fqn3WSo12mo1G+p0XepzH+px4qqwJaruaWssKysrK2tra6urq+vr7CwsLGxsbKysrOzs7S0tLW1tba2tre3t7i4uLm5ubq6uru7u7y8vL29vb6+vr+/v8DAwMHBwcLCwsPDw8TExMXFxcbGxsfHx8vLy9LS0tvb2+Tk5Ozs7PLy8vf39/v7+/39/f7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJBADwACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AAAiXAOEJHEiwoMGDCBMqXMiwocOHECNKnEiRoLJRoEQpq8ixYSpLIC1lQtWx5MFl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yej+zOr+0Ov+1O3+2e/+4PL+5/X+8Pj++fz+/v7//v7//v7//v//////////////////////////////////////////////////////////////////////////////////////////////////////////////CM0A4QkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2qEt22jx4HcnpUa+ezjRmihNFXSFEqZSYzYSnGqRLNSqGovLUIDVZPmJ5c5KU4L1bPSz6AUuZHqqWlUNKQUn4naVAlTS6gVpY0s5awj1pfcvlrEpqzUKGXZxEbUJrMmKW1qHyrr1NMT0LgMlfXkRKok3ryiPHECxdXr34XSlCmmdrix48eQI0ueTLmy5cuYM2vezLmz58+gQ4seTbq06dOoU6tezbq169ewY8ueLTkgACH5BAkEAPAAIf4fR2VuZXJhdGVkIGJ5IG9ubGluZUdJRnRvb2xzLmNvbQAsAAAAAD4APgCHAAAAAQEBAgICAwMDBAQEBQUFBgYGBwcHCAgICQkJCgoKCwsLDAwMDQ0NDg4ODw8PEBAQEREREhISExMTFBQUFRUVFhYWFxcXGBgYGRkZGhoaGxsbHBwcHR0dHh4eHx8fICAgISEhIiIiIyMjJCQkJSUlJiYmJycnKCgoKSkpKioqKysrLCwsLS0tLi4uLy8vMDAwMTExMjIyMzMzNDQ0NTU1NjY2Nzc3ODg4OTk5Ojo6Ozs7PDw8PT09Pj4+Pz8/QEBAQUFBQkJCQ0NDRERERUVFRkZGR0dHSEhISUlJSkpKS0tLTExMTU1NTk5OT09PUFBQUVFRUlJSU1NTVFRUVVVVVlZWV1dXWFhYWVlZWlpaW1tbXFxcXV1dXl5eX19fYGBgYWFhYmJiY2NjZGRkZWVlZmZmZ2dnaGhoaWlpampqa2trbGxsbW1tbm5ub29vcHBwcXFxcnJyc3NzdHR0dXV1dnZ2d3d3eHh4eXl5enp6e3t7fHx8fX19fn5+f39/gICAgYGBgoKCg4ODhISEhYWFhoaGh4eHiIiIiYmJioqKi4uLjIyMjY2Njo6Oj4+PkJCQkZGRkpKSk5OTlJSUlZWVlpaWl5eXmJiYmZmZmpqam5ubnJycnZ2dnp6en5+foKCgoaGhoqKio6OjpKSkpaWlpqamp6enqKioqampqqqqq6uroaqxl6q3jqm8hanBfajGbqbOYKXVVKPbPqHnL6DvJJ70HZ33GJz5E5z7D5v9C5n+CJn+CZn+Cpr+DZv+EJz+E53+F5/+GqD+HaL+IqT+KKb+Laj+MKr+NKv+Oq3+QbH+SrT+ULf+Vrn+Yr7+bcL+d8b+gsv+jM/+kdH+mNX+odj+qNv+rt3+s+D+ueL+wOX+xOb+yej+0+3+2/D+5PT+9Pr//f7//v7//v7//v7//v7//v7//v7/////////////////////////////////////////////////////////////////////////////////////////////CPIA4QkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4pMyE1bt5EWvVFbdkzZs28oJX6bZgwYL17EnsWMuE3Zr5s3j1nb+VAbMqA3gU0j6rCbMqS8ilFj6tBZMKDAmGmj2nAbs2K+ii2byrWhN2zSpm0ty7at27cZrUl7Bs0bXITSktn0lWzt3YHYniJV9pdgNWFQiQ0tDI/aMKi8ljLO9hhqNMbwtBWD7AyzN8FIdWJ25gsqNMzwaP68WewyZm7SWIqFdhL1t23WrPlFzbu379/AgwsfTry48ePIkytfzry58+fQo0ufTn15QAAh+QQJBADwACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3x8fH19fX5+fn9/f4CAgIGBgYKCgoODg4SEhIWFhYaGhoeHh4iIiImJiYqKiouLi4yMjI2NjY6Ojo+Pj5CQkJGRkZKSkpOTk5SUlJWVlZaWlpeXl5iYmJmZmZqampubm5ycnJeeo46ir36kvm+ly2Km1U2k4jyj6zCh8Sag9Rud+RSc+w+a/Aua/QmZ/geY/gaY/gWX/gSX/gOX/gOX/gKW/gGW/gGW/gGW/gGW/gGW/gOX/gWY/geY/gqa/g2b/hCc/hOd/hae/hmg/hyh/iKk/iWl/iim/iqn/iyo/i+p/jKq/jSr/jmt/kCw/kay/k62/le5/mG9/mnB/nLE/nrI/oLL/ovP/pXT/qPZ/rjh/sfo/tvw/u33/vX7/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////wj+AOEJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqfGitmrWVDq9JU0YsGLRrMBc+C7ZrFixfznImtJZsllGfx6oJPWgN2FGjv6gtNWjt2NNZxJROLdisl1Fcvprh3ErQ2rNewII100q2YDVqLtvKnUu3rlBr1sbWpabsmLBlUulaU6YK1ixWvV7Ojeb1KKygc5uxuhoM21xmV2cl00v2mGHHyuZaI3ZVFeS21Hxd1SVtrjNVV32x3XqN2GejsIpxnsq49Omt2JZl7jVNbjWrV48pJnut6NNe0ehKOzYZFivle5PVBGwX3rW3s7sUix9Pvrz58+jTq1/Pvr379/AxBgQAIfkECQQA8AAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX1+fn5/f3+AgICBgYGCgoKDg4OEhISFhYWGhoaHh4eIiIiJiYmKioqLi4uMjIyNjY2Ojo6Pj4+QkJCRkZGSkpKTk5OUlJSVlZWWlpaXl5eYmJiZmZmampqbm5ucnJydnZ2enp6fn5+goKChoaGioqKjo6OkpKSlpaWmpqanp6eoqKipqamqqqqrq6usrKytra2urq6vr6+wsLCxsbGysrKzs7Out72qusacu9F+t99bsOtCqvMxpvckovobn/wUnf0QnP4Mm/4Kmv4Jmf4Hmf4GmP4Fl/4Dl/4Blv4Blv4Alv4Alv4Blv4Clv4Dl/4HmP4Lmv4Snf4aoP4ho/4qp/42rP5Dsf5St/5dvP5swv59yf6Gzf6R0f6X1P6e1v6k2f6r3P6y3/634f+84/+/5P/J6P/Q6//V7v/d8f/p9v/0+v/3+//5/P/7/f/+/v/+/v/+/v/+/v////////////////////////////////////////////////////////////////8I/gDhCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjyoRIDty2bN1mGsQ2LVo0adjK6RTYbZowZMiKRcs2FB42YEiRCqvWtNqxqEmpNb0GDeuva02/VTs67Nm0nE3BVZs2rdq2pgPLgfMmDq7du3jz6r04Llu1a9rG2b0WbRgwaFqbbiscFRjToWOxHqsmdKa3aFiTSht6bVjmY9Z0gpNWLDO0tzLLWfOVeRg1wTKzQSuN9Rm2mdqi0Y56bBpsmNym7Y56WmY3ar8yIwMWGiY5nr+uYh027Ztzwp6VR9MWk9ts5cuDOcbE1lU5tGvkZOaWjlQp+pniqA1j/+zab5nbpAkT9osat8pDbVMNNddYdxc54wC414IMNujggw0GBAAh+QQJBADjACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXJ7gmt+i1iDoT+JvC2N0B6Q4BKS7AqU9AWV+gKV/ACV/gCV/gCV/gCV/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gCW/gGW/gGW/gGW/gGW/gGW/gKX/geZ/gub/hCc/hSe/hef/hmg/hyi/iCj/iWl/iuo/i+p/jWs/jmt/j2v/kKx/kez/kq0/k21/k+2/lG3/VO3/VS3/VS3/Va4/Fi5/Fq5+1y6+1+6+ma8+W2++HPA93nC9YHE84rH8ZLJ75rL7aDN7KLN7KXO66jO6avP6K7P57LR57bT57rU573V5r7W58LZ6cje7szj89Hn9tbq+d3u++Ty/Oz2/fb7/vr8/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////wj+AMcJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqXMmypcuXMGPKnEmzps2bOHMyZFasGLOcvk6NGoWq101moCIpjdSJmE1bS5VqomUTVdRImlbZpHVVkyybzDwtrQQK2M1dqECBOsUrJ7NevX7qnEu3rt2744DNSnWrGU5fojZF4lTKbM1moaJWEmXz1FWszmjK0vRYk9yYtTg9ZirTWSrNlXfF7FWK8uNKrGAye5V0c6VRkVv2kjVKsOtRl00+cwaM1yxToGzfzk2SFypTpUQF36wYN8peokwzv1ppFfGRzl5Jn76Uk65nKZk1leKuGNWwlcxIkY9UqVSv2Cqbqao0nZOsYPBZ7upEf2wpWb34JVMvuNwCVzDM5IfXggwqFBAAIfkECQQA2gAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX12f4Zog5VchqNRibBCjL82jswmkdsbkuYSlO8JlfYElfsClf0Alf4Alf4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Blv4Blv4Cl/4Dl/4FmP4Hmf4Jmf4Lmv4Nm/4PnP4Rnf4Unv4Xn/4cof4ho/4kpf4npv4qp/4uqf4xqv41rP43rf47rv49r/5AsP5Esv5Is/5Ntf5TuP5Zuv5evP5ivv5nwP5pwf5qwf5qwf5qwv5tw/5vw/5xxP5zxf51xv54x/56yP6Ayv6FzP6Izv6Lz/6O0P6S0v6W1P6b1f6g1/6l2v6q3P6u3f6x3/624f654v684/7A5f7F5/7L6f7U7f7g8v7q9v/w+f/z+v/6/f/+/v////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8I/gC1CRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNmzhz6tzJs6fPnxWjQZOWc1qvVaxmFbs5DVenSJo8mSJm81ipSFgjYVJFlOYvUFkjWTrVrOYxTmEvqZpWE1oqTVgtdYp1s9gqUKBGwSp7MxmwXsW6Ah1MuLBhjtIEIzbWq1cyi9J2waJ1jO1GaLNKiQpVChYyyxCRterUKdQqYKAvStMVCtMlS5Q6oaqFzKE0Y7FIaaJECRMnVbUzHkMFNyslTZ9GxQq2jC1ottGM7WIVitOlsJZC9dIILJSlsMY5noUilSrWLFqyaMVqhUqUp0iUwGPdNCt1xWSn4ssP69sTJ06dcIIJJt/th5UmuGxkzCkGNuggVpdw0oozHD1TiymbPKjhfKXsAo1H0hTTSnEb7kcJKLEwI9I0ychySoYliuWJKLAYY5I0ygTzyilgyVcgJzPC0gsz9pUEDTLCEFPLK6WcosoqpbxSSy3FNKNYS9NMI000zUCT5WFgLhQQACH5BAkEAMwAIf4fR2VuZXJhdGVkIGJ5IG9ubGluZUdJRnRvb2xzLmNvbQAsAAAAAD4APgCHAAAAAQEBAgICAwMDBAQEBQUFBgYGBwcHCAgICQkJCgoKCwsLDAwMDQ0NDg4ODw8PEBAQEREREhISExMTFBQUFRUVFhYWFxcXGBgYGRkZGhoaGxsbHBwcHR0dHh4eHx8fICAgISEhIiIiIyMjJCQkJSUlJiYmJycnKCgoKSkpKioqKysrLCwsLS0tLi4uLy8vMDAwMTExMjIyMzMzNDQ0NTU1NjY2Nzc3ODg4OTk5Ojo6Ozs7PDw8PT09Pj4+Pz8/QEBAQUFBQkJCQ0NDRERERUVFRkZGR0dHSEhISUlJSkpKS0tLTExMTU1NTk5OT09PUFBQUVFRUlJSU1NTVFRUVVVVVlZWV1dXWFhYWVlZWlpaW1tbXFxcXV1dXl5eX19fYGBgYWFhYmJiY2NjZGRkZWVlZmZmZ2dnaGhoaWlpampqa2trbGxsbW1tbm5ub29vcHBwcXFxcnJya3V7X3qMVH6bRYOuOYe9LorKI43XF5DlDZLwCJT2BJX6ApX8AZX9AJX+AJX+AJX+AJX+AJX+AJX+AJX+AJX+AJX+AJb+AJb+AJb+AJb+AJb+AZb+AZb+Apb+A5f+BJf+BZj+B5j+CZn+C5r+DZv+EJz+Ep3+FJ7+Fp/+GJ/+G6H+HqL+IKP+IqT+JKX+J6b+Kqf+Laj+MKr+NKv+N6z+Oq7+Pq/+RrP+TbX+ULf+Vbn+Xbz+aMD+dsf+gsv+jdD+ndf+qNv+sd/+t+H+veT+wuX+x+j+0ez+1+7+4PL+6vb+8vn+9/v+/f7+/v7+/v7+/v7+/v7+/v7+/v7//v7//v7//v7//v7//v7/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AmQkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4ocSbKkyZMoU6pcybKly5cwY8qcSbOmzZs4c+rcybOnz59Agwr1uEuXzlqxXL2CRevmLFWfNGkCtaoWyV21aOVqmKuVJkeNGlHS9GrkrFWlSLmitWuhrk+RwoaNVMpWSFqnwDrSdGoWQ1eV5DZyhKmV0Y+vMAm+5IrhrE2CB3+SBdJVXLmUWLVViCtV5EaXTjX16MqSXEeXWjWU5ekz480cZ5G6NLeUX4a5WH2e5MnV4Y27YqUCBcoUrIezRF0W/OmV3Y60ZMm6FREWpc+UNrmiHjOXq0yfI6RtSiULtktbpz6HvRSqFVuYtFbRVp9plKtYo1vOOmVafSNMnJiSylKz0DLLLNJZVZItqvg3VySUYKLJJ56A4kknnbCS30i4wAKKg6c1EhdYlHDyym8j5SKLKv2BGFkkqTxn0iyukOLii6KlpCIspdw4FyobnqQLUqWEothy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wf5twv5vw/5xxP51xf55x/57x/59yf6Byv6Dy/6FzP6GzP6Izf6Kzv6Mz/6P0P6S0f6X0/6c1f6f1/6i2P6m2f6p2/6t3f6y3/614P644f684/6/5P7D5v7S7P7s9/77/f7+/v7+/v7+/v7+/v7+/v7+/v/+/v/+/v/+/v/+/v////////////////////////////////////////////////////////////////////////////////////////////////////8I/gDZCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFitSI+XrlqmOsX8msXRx5DZcoSChTqkRZCZQukSMfagO2aaXNm5A2CdMWU6E2XZdwCrWJCRfPngWV1RzKdOWmYkgFZmvVtOrKSq2OjowWyqpXlaCgjXwWdKgkSpQqqV1bCa0kppyUWXRWFielS6p+TTtIrRcptENJUaNIVyglTb60KswGlBLOS7gmSqu7UlKmXROBvl15qZbEbF1vYs1W0Zoqxyo1DZNY67GtmLhQQ6q0CubDaZhuQkYqjJKkSqecSXQmanPK3VGbwQJ2bSI2WZaMI486UhqsS20txaKONFuyWbGEb3EfT768+fPo06tfz769+/fw48ufT7++/fv48+vfz7+///8ABijggAQWaOCB5FlTiyu42JZfMZmkxIlw+V1DlUqsNIcfM5ysJMpgG3aokmD5WcOKcZC4go1+xnDSViWYLMMfNLPAUsteCOaoo0EBAQAh+QQJBADsACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltb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/ly7/mC9/mW//mnA/m/D/nbG/nzI/oPL/YzO/ZjT/aXY/ana/a/c/LTe/bng/L/j/MDj/MDj/MLk/MXl/cfn/cno/cvp/szq/s7q/s/r/tHs/tLs/tTt/tfu/tjv/tnv/tvw/t7x/uHy/uT0/un2/u74/vP6/vn8/v3+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wj+AMUJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHEmypMmTKFOqXMmypcuXMGPKnEmzps2bOHPq3Mmzp8+fJJEJK0YtJ7BarVrZInYzGKxQmRRtosW0Zq5PirIqErXL5ixKWhU1smWz1qawnHjZ/IUKrNRWwWxO47XKlKlXvXIG8wWsmDSggANndEZsmc5lu2rd+tXsZrFZnz6JYsXLWU1hs6KK3cQK2ExqwGZxCqsIFK6iMIXdAtWIdOlbjTcS87ULmGGG1ZD1igXKddZRajcKq2UKVChVu34hc1aNIDVow3zZEuU7ayNQs4xtXHbrU+usmUieoZJ161YuXrpotUpVinX1S6NqKeMYzJXbsJLAY1Uk6X51RaXkcttGv6Ty3X8IakUJKMgNuBEwpxyY4H+blFKLMCAtUwsomUg4oViZgFKKLL3MFxIyvLhSinf5IXhJJpKtUosvDoqkzC+4sHKKKL1lwklrm0QGSiqv1FIbMipV48xeuswiyyyvtCKLLbfo8ssw09CEjDLUOLMMaoJVFBAAIfkECQQA9QAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX1+fn5/f3+AgICBgYGCgoKDg4OEhISFhYWGhoaHh4eIiIiJiYmKioqLi4uMjIyNjY2Ojo6Pj4+QkJCRkZGSkpKTk5OUlJSVlZWWlpaXl5eYmJiZmZmampqbm5ucnJydnZ2enp6fn5+goKChoaGioqKjo6OkpKSlpaWmpqanp6eoqKipqamqqqqrq6usrKytra2urq6vr6+wsLCxsbGysrKnsbeesL2Ur8KLrsZ6rM5dp9pHo+Mvn+0gnPMUmvcMmPoHl/wDlv4Blv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Blv4Dl/4FmP4Imf4Lmv4Nm/4QnP4Rnf4Tnv4Unv4YoP4bof4go/4kpf4npv4vqf45rf5Dsf5Ltf5Xuf5fvf5rwv54x/6DzP6Mz/6R0f+T0v+V0/+Y1P+b1f+q3P++5P/R7P/c8P/q9v/6/f/+/v/+/v/+/v/+/v/+/v/+/v////////////////////////////////////////////8I/gDrCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNmzhzalRHjpy6nOK2WbO2TdxNdNaAFVs67WdNb82WSvVmsxszqUu32YSKtdg3m+mkYbXmtCa5bdmwbUOXU126dGV1yp1Lt67duwTXqYsL9pu2bF9vksMWdWlgmuq0XcUaruY4al2XNp4ZNrLhdTO5KbWsLZ3Mddo2R4b2jS9LddlER6YGTh1ml6hVW94GDt3edbj1ui6ZuLBlrMCqaRueDdq10ry5QfvNfCkw1q9Jgrsmu7lUYJ1PottWzbrlakZRNI7j7h0rtckpx2eDbB1YNranw3HThs2atPvQ7kurlg1c9JbrpGMOOAR+QyA443iG14ITBQQAIfkECQQA5AAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHRmeIVafZVLgqk9hrkvisohjtoXkOUPku4JlPQGlPgDlfsClfwBlf0Alf4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Alv4Blv4Blv4Blv4Clv4Cl/4Dl/4El/4FmP4GmP4Hmf8Kmv4Mm/4PnP4Snf4Unv4Xn/4eov4kpP4pp/4uqf4yqv43rP47rv4+r/5BsP5Esf5Gs/5JtP5Ntf5Qt/5UuP5Wuf5Zuv5cu/5evP5gvf5hvv5jvv5lv/5mwP5owP5pwf5rwv5tw/5wxP50xf53xv55x/59yf6By/6FzP6Mz/6R0f6W0/6a1f6f1/6k2f6n2v6q2/6t3P6u3f6x3v624P674v7A5P7F5/7K6P7N6v7R7P7W7v7d8f7i8/7n9f7s9/7x+f73/P7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7///////////////////////////////////////////////////////////////////////////////////////////////////////////////8I/gDJCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjygQJLdiuXsZmFlymyhMnTqSC6RzoKlMkRYouiWo2NNooSUiRYho2dFmoo1E58Wo6ilJURZ+oDgUGSpMlRZluSRsqMJisUqR2RWM7MFozZ3Tz6t3Lt69FacaIHcNLt5msUJ4+tTpGV5YmqJI0uVo7tFOjr5zEznSm6SvSVUOflcIadROxobYweZak6plOZZ5II+30a+irs55DMZ5p7NPlr5REMdN5K5NnRZRQKdssCvfXTKuWzRTmCarnS6hyyszF6ThSTbmkXMN0VtR7pE6riFF22QwVJ+ueG2GK5foltFecZEdt5Ekze1rdeWfJLjJBY8snj3mGCS06EbNKgFF10stQzNgSCieYSBJJKcuxxcwuqHTyiTB7KRNMMn6lqOKKJwUEACH5BAkEAOIAIf4fR2VuZXJhdGVkIGJ5IG9ubGluZUdJRnRvb2xzLmNvbQAsAAAAAD4APgCHAAAAAQEBAgICAwMDBAQEBQUFBgYGBwcHCAgICQkJCgoKCwsLDAwMDQ0NDg4ODw8PEBAQEREREhISExMTFBQUFRUVFhYWFxcXGBgYGRkZGhoaGxsbHBwcHR0dHh4eHx8fICAgISEhIiIiIyMjJCQkJSUlJiYmJycnKCgoKSkpKioqKysrLCwsLS0tLi4uLy8vMDAwMTExMjIyMzMzNDQ0NTU1NjY2Nzc3ODg4OTk5Ojo6Ozs7PDw8PT09Pj4+Pz8/QEBAQUFBQkJCQ0NDRERERUVFRkZGR0dHSEhISUlJSkpKS0tLTExMTU1NTk5OT09PUFBQUVFRUlJSU1NTVFRUVVVVVlZWV1dXWFhYWVlZWlpaW1tbXFxcXV1dXl5eX19fYGBgYWFhYmJiY2NjZGRkZWVlZmZmZ2dnaGhoaWlpampqa2trbGxsbW1tbm5ub29vcHBwcXFxcnJyc3NzdHR0dXV1dnZ2d3d3eHh4eXl5enp6e3t7fHx8fX19dn+GaIOVXIajUIivRou6PY3EMo/QJpHcHZLlFZTtEJXyDJX2CZb5B5b7Bpf8BJf9A5f+Apb+AZb+AZb+Apb+Apb+A5f+BJf+Bpj+B5j+CJn+CZn+CZn+C5r+DZv+D5z+Ep3+FZ7+GJ/+G6H+H6L+JqX+LKj+Mqr+OK3+Pa/+RLH9SbP9TrX9U7f9WLn8Wrn8XLn7X7r6Yrv5Y7v4Zbr2aLrzbrvxcr3xdr7wer/vfsDtgsDrh8HpjcPok8Tmmsbkosnkq83lstHntNTrttfuuNnxuNvzuNz1t9z3t934uN75ud/6uuD7u+H7vuP8weT9xOb+x+f+yun+zur+0uz+2O7+4PL+5/X+7ff+8fn+9fr++vz+/P3+/v7+/v7+/v7+/v7+/v7+/v7+/v7+////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AxQkcSLCgwYMIEypcyLChw4cQI0qcSLGixYsYM2rcyLGjx48gQ4ocSbKkyZMoU6ocyWzXLmMrHd4qNWrUqVzSYio0VooSJEicSMHUiZAVp58/N70ienDaKktIIVGCxfQgrKNIPcWqatCYqU9ITQ3lOnCasVakSqkaS5bgM2PIprWdS7eu3ZLRouW8Ky7WqlS12M6N1akSJk+lBHNVhilqp1Z1cWFFOqoZ3V1Qo4pCRpcXqKiQPPGiuywUaE616EY7BRpSqmh0W/mMGuoY3VyeQHeyRXrU7J+USDGju+r3T0y85+ICG5WSqWVzmZ3KjBRTq71kb+UGPUox0WWlNjuB1oTq8ijdr7BzlcaKOSRLo3DVXTa9UqVQrobX3XWK1ClanN3FDC/IqMfXgQgmqOCCDDbo4IMQRohSQAAh+QQJBADoACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3R9hG2AjWaClVuGo1GJsESNwDmQzDCS1ymU3yOW5h+X6xuY7xeY8xOZ9xGZ+Q+a+wyZ/AuZ/QqZ/QiZ/geY/gWY/gSX/gOX/gOX/gSX/geY/gqa/g6b/hGc/hOd/hWe/hqg/h6i/iCj/iKj/iOk/iWl/ial/iel/imm/iyn/S6o/TGp/TSq/Tar/Tms/Dut/D+u+0Ov+kiw+FCy9liz81218mK18Ge27W236nS4532544e63o6725W92p3A2KDB2aLD2qXF26bH3qbK46bO6aXR7qLS9J/T953U+ZvU+5rU/JvV/ZzV/Z3W/p/X/qHY/qPZ/qba/qjb/qvc/q7d/rDe/rLf/rXg/rbh/rfh/rji/rrj/rzj/r7k/r/l/sHl/sPm/sXn/sjo/s3q/9Lt/tnv/uHz/uv2/vT6/vv9/v7+//7//////////////////////////////////////////////////////////////////////////////////////////////////wj+ANEJHEiwoMGDCBMqXMiwocOHECNKnEixosWLGDNq3Mixo8ePIEOKHClwmTFj1khSDBerVCZQroyplCir06SbmVqlnOnQ26qbQEHJ5NmQmimgNy8NJbqwG6tMSEFBY9rQGClMNzW5+kaVIThjqk6pirWta8Nw26hxNcu2rdu3BcPRkkULWji4BsGtuhSJ0ypjd/EOfBUJKKZUOwV3U4V0UqeleKFxapwJMtxmmig3EyzQGFSknZ5xRmcsM9JR0UZ7bswpMd7VSDml5mxsU2NPykYns4m08mhsowobtvzWm6tMwiOhYjaa9CpPnDi1Ig73m8laxrA13869u/fv4MMUix9Pvrz58+jTq1/Pvr379/DdBgQAIfkECQQA5QAh/h9HZW5lcmF0ZWQgYnkgb25saW5lR0lGdG9vbHMuY29tACwAAAAAPgA+AIcAAAABAQECAgIDAwMEBAQFBQUGBgYHBwcICAgJCQkKCgoLCwsMDAwNDQ0ODg4PDw8QEBARERESEhITExMUFBQVFRUWFhYXFxcYGBgZGRkaGhobGxscHBwdHR0eHh4fHx8gICAhISEiIiIjIyMkJCQlJSUmJiYnJycoKCgpKSkqKiorKyssLCwtLS0uLi4vLy8wMDAxMTEyMjIzMzM0NDQ1NTU2NjY3Nzc4ODg5OTk6Ojo7Ozs8PDw9PT0+Pj4/Pz9AQEBBQUFCQkJDQ0NERERFRUVGRkZHR0dISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NUVFRVVVVWVlZXV1dYWFhZWVlaWlpbW1tcXFxdXV1eXl5fX19gYGBhYWFiYmJjY2NkZGRlZWVmZmZnZ2doaGhpaWlqampra2tsbGxtbW1ubm5vb29wcHBxcXFycnJzc3N0dHR1dXV2dnZ3d3d4eHh5eXl6enp7e3t8fHx9fX1+fn5/f3+AgICBgYGCgoKDg4OEhISFhYWGhoaHh4eIiIiJiYmKioqLi4uMjIyNjY2Ojo6Pj4+QkJCRkZGSkpKTk5OUlJSQlpuDmah3m7RsnL5insdZn89Qn9ZEn985n+UtnewjnPEcm/UVmvgPmfoLmfsJmPwHmP0Fl/0El/4El/4Dl/4Dl/4Cl/4Cl/4Clv4Cl/4Dl/4El/4GmP4Imf4Kmv4OnP8Tnf4Wn/4bof4lpf4yqv4+r/5Qt/5evP5pwf5uw/51xv5/yv6Izv6Mz/6Q0f6W1P6a1f+c1v6d1/6e1/6f1/6g2P6j2f6l2v6o2/6s3f6w3v6z4P634f654v684/6+5P7A5f7D5v7F5/7H5/7J6P7L6f7O6/7d8f7t9/74/P7+/v7+/v7+/v7+/v7+/v/+/v////////////////////////////////////////////////////////////////////////////////////////////////////////////8I+QDLCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgzaty4sBkxZto4crTGK5ctXLucidToy9aqVq1s8Zq28mI0XKpgtoKFC1lNi8xw6YR5a9jPitN00Rpaa9nRisCEwqzV62lFa7103cq1S5pVi9SiPfvasJo1bmQpPtuFS5cva2kjKqv1UtWtXtXiPuQVSyesW8X0NmwmVaetX4IZ+po1tNUso4kV7uo7FNfYyAi57aKVE6YsXpgTbgOWizOsWLiYhU6IDdiuXG19rV5YjZkzaLNz697Nu7fv38CDCx9OvLjx48iTK1/OvLnz59CjS59Ovbr169izaw8dEAAh+QQJBADoACH+H0dlbmVyYXRlZCBieSBvbmxpbmVHSUZ0b29scy5jb20ALAAAAAA+AD4AhwAAAAEBAQICAgMDAwQEBAUFBQYGBgcHBwgICAkJCQoKCgsLCwwMDA0NDQ4ODg8PDxAQEBERERISEhMTExQUFBUVFRYWFhcXFxgYGBkZGRoaGhsbGxwcHB0dHR4eHh8fHyAgICEhISIiIiMjIyQkJCUlJSYmJicnJygoKCkpKSoqKisrKywsLC0tLS4uLi8vLzAwMDExMTIyMjMzMzQ0NDU1NTY2Njc3Nzg4ODk5OTo6Ojs7Ozw8PD09PT4+Pj8/P0BAQEFBQUJCQkNDQ0REREVFRUZGRkdHR0hISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVldXV1hYWFlZWVpaWltbW1xcXF1dXV5eXl9fX2BgYGFhYWJiYmNjY2RkZGVlZWZmZmdnZ2hoaGlpaWpqamtra2xsbG1tbW5ubm9vb3BwcHFxcXJycnNzc3R0dHV1dXZ2dnd3d3h4eHl5eXp6ent7e3x8fH19fX5+fn9/f4CAgIGBgXqDiXOFkmyHmWaJoWCKqFuMrlCOuUePwj6RyjeS0TGS1yuT3CeU4COU5CCV5x2V6RuV6xmV7BiW7RaW7xSW8ReX8RqY8RyZ8R6a8SOd8iif8y2i8zGj8zSk8zil8jym8EGm7Uin6VKn41yo3WGo2mep126p03aqzn+qyYqrwpesu6etsq6urq+vr7CwsLGxsbKysrOzs7S0tLW1tba2tre3t7i4uLm5ubq6uru7u7y8vL29vb6+vr+/v7/Cw7/EyL/Hzb/J0b/M1b/O2b7Q3L7S4L7T473V5r3W6LzY67vZ7rrb8bjb9L3e9cPi+Mzn+drt++j0/fD4/fb7/vr9/vz+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+//7+//7//////////////////////////////////////////////////////////////////////////////////////////////////wieANEJHEiwoMGDCBMqXMiwocOHECNKnEixokWI0pyRGnXK2cWPCVNxskQylEeQKAU660SyJSloKVE629SS5KeTMS/OrGnpZs6PzkDxJCXt50Vpqj6RvDQKp1GLzlKRQuX0qdWrWLNq3cq1q9evYMOKHUu2rNmzaNOqXcu2rdu3cOPKnUu3rt27ePPq3cu3r9+/gAMLHky4sOHDiBO7DQgAOw=="])</script><script>self.__next_f.push([1,"23:[]\n"])</script><script>self.__next_f.push([1,"0:[\"$\",\"$L1b\",null,{\"buildId\":\"discovery-next-7105c948ba2fce7b05cdace9959002f67cb818ef\",\"assetPrefix\":\"https://discovery-next.svc.sympla.com.br\",\"urlParts\":[\"\",\"\"],\"initialTree\":[\"\",{\"children\":[\"home\",{\"children\":[\"__PAGE__\",{}]}]},\"$undefined\",\"$undefined\",true],\"initialSeedData\":[\"\",{\"children\":[\"home\",{\"children\":[\"__PAGE__\",{},[[\"$L1c\",\"$L1d\",[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/2610153976963595.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/31cb47880d43bba9.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"2\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/0edc96ba0be1af72.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"3\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/04be4931570bc4cb.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"4\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/b3cdf831462ac163.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"5\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/06a28c080195c3eb.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]]],null],null]},[[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/f6409ef0593504e9.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/e001879c65408458.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"2\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/8fdc4690f23c45d4.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"3\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/69906c4c92492d03.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"4\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/43b6e689f42ee6fc.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"5\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/1cd30df508bb3958.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"6\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/9cbf9303a4942085.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"7\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/3ee27c142221e531.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"8\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/6b0e51c5390c4395.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"9\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/80228158aa2f99ff.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"10\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/a0588f11fda9688b.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"11\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/28d750e821d57502.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"12\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/81adf2e23941d5a1.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"13\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/ab9beaaf82635d3a.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"14\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/1e895ac1e3826ddc.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"15\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/8738e7102d63e955.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"16\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/9202f108d9c1ba50.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]],\"$L1e\"],null],null]},[[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/76dd92d38110a42b.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]],\"$L1f\"],null],[[\"$\",\"div\",null,{\"className\":\"_7i08rm0\",\"data-testid\":\"loading-container\",\"children\":[\"$\",\"img\",null,{\"src\":\"$20\",\"alt\":\"Carregando\",\"width\":40,\"height\":40}]}],[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/f6409ef0593504e9.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/3ee27c142221e531.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]],[]]],\"couldBeIntercepted\":false,\"initialHead\":[null,\"$L21\"],\"globalErrorComponent\":\"$22\",\"missingSlots\":\"$W23\"}]\n"])</script><script>self.__next_f.push([1,"25:I[69257,[],\"\"]\n26:I[14857,[],\"\"]\n27:I[86598,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"8218\",\"static/chunks/aaea2bcf-ad5bc3d62ce7f818.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"9067\",\"static/chunks/9067-2ef8c7542ce8b0eb.js\",\"5541\",\"static/chunks/5541-6f95a20f5b995969.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"154\",\"static/chunks/154-cff9021f866a9b7f.js\",\"9485\",\"static/chunks/9485-fed383efd987fd67.js\",\"5918\",\"static/chunks/5918-1066b12b59e47012.js\",\"6512\",\"static/chunks/6512-ba907d743dc866d5.js\",\"1923\",\"static/chunks/1923-ab762a7a95e13661.js\",\"2378\",\"static/chunks/app/home/layout-f9ade6f7068fdeb3.js\"],\"default\"]\n28:I[87512,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"\"]\n29:I[56858,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"default\"]\n2a:I[42313,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"ServiceWorkerRegister\"]\n2b:I[88051,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\""])</script><script>self.__next_f.push([1,",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"UserAgentProvider\"]\n2c:I[39989,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"default\"]\n2d:I[20437,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"AnalyticsProvider\"]\n2e:I[57912,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3150f5ac.js\"],\"QueryClientProvider\"]\n2f:I[64242,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8959\",\"static/chunks/8959-a229c58b5f761b45.js\",\"5567\",\"static/chunks/5567-a8f600f2052fc7f9.js\",\"4208\",\"static/chunks/4208-a0f4856db19d9eb4.js\",\"3185\",\"static/chunks/app/layout-0b2bc19b3"])</script><script>self.__next_f.push([1,"150f5ac.js\"],\"BrazeProvider\"]\n30:I[39026,[\"635\",\"static/chunks/635-c2ce554cc9557685.js\",\"9160\",\"static/chunks/app/not-found-d3919b6a67ba449a.js\"],\"default\"]\n1e:[\"$L24\",[\"$\",\"main\",null,{\"className\":\"_1birs5v6\",\"children\":[\"$\",\"$L25\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\",\"home\",\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L26\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":\"$undefined\",\"notFoundStyles\":\"$undefined\"}]}],[\"$\",\"$L27\",null,{}]]\n"])</script><script>self.__next_f.push([1,"1f:[\"$\",\"html\",null,{\"className\":\"$undefined\",\"lang\":\"pt-br\",\"children\":[[\"$\",\"head\",null,{\"children\":[[\"$\",\"meta\",null,{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"href\":\"https://www.sympla.com.br/favicon.ico\",\"sizes\":\"any\"}],[[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://connect.facebook.net\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://www.sympla.com.br\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://accounts.google.com\"}],[\"$\",\"link\",null,{\"rel\":\"dns-prefetch\",\"href\":\"https://connect.facebook.net\"}],[\"$\",\"link\",null,{\"rel\":\"dns-prefetch\",\"href\":\"https://www.sympla.com.br\"}],[\"$\",\"link\",null,{\"rel\":\"dns-prefetch\",\"href\":\"https://accounts.google.com\"}],[\"$\",\"$L28\",null,{\"strategy\":\"afterInteractive\",\"id\":\"load_datalayer\",\"dangerouslySetInnerHTML\":{\"__html\":\"window.dataLayer = window.dataLayer || []\"},\"async\":true}],[\"$\",\"$L28\",null,{\"strategy\":\"afterInteractive\",\"id\":\"gtm\",\"async\":true,\"dangerouslySetInnerHTML\":{\"__html\":\"(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':\\n            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],\\n            j=d.createElement(s),dl=l!='dataLayer'?'\u0026l='+l:'';j.async=true;j.src=\\n            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);\\n            })(window,document,'script','dataLayer','GTM-MXLMPC');\"}}],[\"$\",\"$L28\",null,{\"strategy\":\"afterInteractive\",\"id\":\"fb-pixel\",\"async\":true,\"dangerouslySetInnerHTML\":{\"__html\":\"!function(f,b,e,v,n,t,s)\\n            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\\n            n.callMethod.apply(n,arguments):n.queue.push(arguments)};\\n            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\\n            n.queue=[];t=b.createElement(e);t.async=!0;\\n            t.src=v;s=b.getElementsByTagName(e)[0];\\n            s.parentNode.insertBefore(t,s)}(window, document,'script',\\n            'https://connect.facebook.net/en_US/fbevents.js');\\n            \"}}],[\"$\",\"$L28\",null,{\"strategy\":\"afterInteractive\",\"id\":\"gads\",\"src\":\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7378062192656997\",\"async\":true,\"crossOrigin\":\"anonymous\"}],[\"$\",\"$L28\",null,{\"id\":\"topsort-init\",\"children\":\"\\n        window.TS = window.TS || {};\\n        window.TS.token = \\\"TSE_060MJTOhuVyNjEJNcOEOXuQC2HG5rj3cDrYS\\\";\\n      \"}]],[\"$\",\"$L29\",null,{\"token\":\"ec62a4ccc46249c4838d63a4ff48d89b\",\"application\":\"discovery-next-prod\"}]]}],[\"$\",\"body\",null,{\"style\":{\"display\":\"flex\",\"flexDirection\":\"column\",\"backgroundColor\":\"var(--color-neutral-0)\"},\"className\":\"__className_0d2434 __className_99fa2f __variable_99fa2f\",\"children\":[[[\"$\",\"noscript\",null,{\"children\":[\"$\",\"iframe\",null,{\"title\":\"sympla-gtm\",\"src\":\"https://www.googletagmanager.com/ns.html?id=GTM-MXLMPC\"}]}],\"$undefined\"],[\"$\",\"$L2a\",null,{}],[\"$\",\"$L2b\",null,{\"userAgent\":\"Sympla/8407 CFNetwork/1399 Darwin/22.1.0\",\"origin\":\"http://discovery-next.svc.sympla.internal\",\"children\":[\"$\",\"$L2c\",null,{\"children\":[\"$\",\"$L2d\",null,{\"dataUser\":\"$undefined\",\"children\":[\"$\",\"$L2e\",null,{\"children\":[\"$\",\"$L2f\",null,{\"user\":\"$undefined\",\"children\":[\"$\",\"$L25\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L26\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[\"$\",\"$L30\",null,{}],\"notFoundStyles\":[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/69906c4c92492d03.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/28d750e821d57502.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"2\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/f6409ef0593504e9.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"3\",{\"rel\":\"stylesheet\",\"href\":\"https://discovery-next.svc.sympla.com.br/_next/static/css/fdf78471f4dfd8c8.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]]}]}]}]}]}]}]]}]]}]\n"])</script><script>self.__next_f.push([1,"31:I[154,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"8218\",\"static/chunks/aaea2bcf-ad5bc3d62ce7f818.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"9067\",\"static/chunks/9067-2ef8c7542ce8b0eb.js\",\"5541\",\"static/chunks/5541-6f95a20f5b995969.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"154\",\"static/chunks/154-cff9021f866a9b7f.js\",\"9485\",\"static/chunks/9485-fed383efd987fd67.js\",\"5918\",\"static/chunks/5918-1066b12b59e47012.js\",\"6512\",\"static/chunks/6512-ba907d743dc866d5.js\",\"1923\",\"static/chunks/1923-ab762a7a95e13661.js\",\"2378\",\"static/chunks/app/home/layout-f9ade6f7068fdeb3.js\"],\"RootStoreProvider\"]\n32:I[37358,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"8218\",\"static/chunks/aaea2bcf-ad5bc3d62ce7f818.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"9067\",\"static/chunks/9067-2ef8c7542ce8b0eb.js\",\"5541\",\"static/chunks/5541-6f95a20f5b995969.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"154\",\"static/chunks/154-cff9021f866a9b7f.js\",\"9485\",\"static/chunks/9485-fed383efd987fd67.js\",\"5918\",\"static/chunks/5918-1066b12b59e47012.js\",\"6512\",\"static/chunks/6512-ba907d743dc866d5.js\",\"1923\",\"static/chunks/1923-ab762a7a95e13661.js\",\"2378\",\"static/chunks/app/home/layout-f9ade6f7068fdeb3.js\"],\"default\"]\n33:[]\n35:{\"lat\":\"\",\"lon\":\"\"}\n34:{\"city\":\"Qualquer lugar\",\"coordinates\":\"$35\",\"slug\":\"\"}\n24:[\"$\",\"$L31\",null,{\"hydrationData\":{\"locationHydration\":{\"cities\":[],\"selectedLocation\":{\"city\":\"Qualquer lugar\",\"coordinates\":{\"lat\":\"\",\"lon\":\"\"},\"slug\":\"\"}},\"authHydration\":{\"userData\":null}},\"children\":[\"$\",\"div\",null,{\"data-testid\":\"header-container\",\"children\":[null,[\"$\",\"$L32\",null,{\"isMobile\":false,\"hasSession\":false,\"locationHydration\":{\"cities\":\"$33\",\"selectedLocation\":\"$34\"},\"alwaysCollapsed\":false,\"isDark\":false,\"hasMossColor\":false}]]}]}]\n"])</script><script>self.__next_f.push([1,"21:[[\"$\",\"meta\",\"0\",{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"}],[\"$\",\"meta\",\"1\",{\"charSet\":\"utf-8\"}],[\"$\",\"title\",\"2\",{\"children\":\"Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais\"}],[\"$\",\"meta\",\"3\",{\"name\":\"description\",\"content\":\"A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!\"}],[\"$\",\"link\",\"4\",{\"rel\":\"canonical\",\"href\":\"https://www.sympla.com.br/home\"}],[\"$\",\"meta\",\"5\",{\"property\":\"og:title\",\"content\":\"Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais\"}],[\"$\",\"meta\",\"6\",{\"property\":\"og:description\",\"content\":\"A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!\"}],[\"$\",\"meta\",\"7\",{\"property\":\"og:image\",\"content\":\"https://www.sympla.com.br/images/logo-sympla-for-facebook.png\"}],[\"$\",\"meta\",\"8\",{\"property\":\"og:image:width\",\"content\":\"1156\"}],[\"$\",\"meta\",\"9\",{\"property\":\"og:image:height\",\"content\":\"607\"}],[\"$\",\"meta\",\"10\",{\"property\":\"og:type\",\"content\":\"website\"}],[\"$\",\"meta\",\"11\",{\"name\":\"twitter:card\",\"content\":\"summary\"}],[\"$\",\"meta\",\"12\",{\"name\":\"twitter:site\",\"content\":\"@Sympla\"}],[\"$\",\"meta\",\"13\",{\"name\":\"twitter:title\",\"content\":\"Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais\"}],[\"$\",\"meta\",\"14\",{\"name\":\"twitter:description\",\"content\":\"A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!\"}],[\"$\",\"meta\",\"15\",{\"name\":\"twitter:image\",\"content\":\"https://www.sympla.com.br/images/logo-sympla-for-facebook.png\"}],[\"$\",\"meta\",\"16\",{\"name\":\"twitter:image:width\",\"content\":\"1156\"}],[\"$\",\"meta\",\"17\",{\"name\":\"twitter:image:height\",\"content\":\"607\"}],[\"$\",\"meta\",\"18\",{\"name\":\"next-size-adjust\"}]]\n1c:null\n"])</script><script>self.__next_f.push([1,"36:I[51347,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"9067\",\"static/chunks/9067-2ef8c7542ce8b0eb.js\",\"5541\",\"static/chunks/5541-6f95a20f5b995969.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8334\",\"static/chunks/8334-524ced26e8499d0a.js\",\"154\",\"static/chunks/154-cff9021f866a9b7f.js\",\"2267\",\"static/chunks/2267-db77256b9456be75.js\",\"9485\",\"static/chunks/9485-fed383efd987fd67.js\",\"5918\",\"static/chunks/5918-1066b12b59e47012.js\",\"4663\",\"static/chunks/4663-f023484031c97b32.js\",\"6499\",\"static/chunks/6499-d029ad12f832b5b6.js\",\"4956\",\"static/chunks/4956-6d6015a159ac1b32.js\",\"1951\",\"static/chunks/app/home/page-0cbbe304cac20dd4.js\"],\"default\"]\n142:I[48623,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"9067\",\"static/chunks/9067-2ef8c7542ce8b0eb.js\",\"5541\",\"static/chunks/5541-6f95a20f5b995969.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8334\",\"static/chunks/8334-524ced26e8499d0a.js\",\"154\",\"static/chunks/154-cff9021f866a9b7f.js\",\"2267\",\"static/chunks/2267-db77256b9456be75.js\",\"9485\",\"static/chunks/9485-fed383efd987fd67.js\",\"5918\",\"static/chunks/5918-1066b12b59e47012.js\",\"4663\",\"static/chunks/4663-f023484031c97b32.js\",\"6499\",\"static/chunks/6499-d029ad12f832b5b6.js\",\"4956\",\"static/chunks/4956-6d6015a159ac1b32.js\",\"1951\",\"static/chunks/app/home/page-0cbbe304cac20dd4.js\"],\"default\"]\n143:I[83156,[\"1601\",\"static/chunks/c857e369-1b53ef2b4f30afe9.js\",\"5147\",\"static/chunks/6468630d-6b5d3a2fc12dc0f2.js\",\"7889\",\"static/chunks/7889-7b3d9616249f87b5.js\",\"9067\",\"static/chunks/9067-2ef8c7542ce8b0eb.js\",\"5541\",\"static/chunks/5541-6f95a20f5b995969.js\",\"4623\",\"static/chunks/4623-379eb030278c063a.js\",\"8334\",\"static/chunks/8334-524ced26e8499d0a.js\",\"154\",\"static/chunks/154-cff9021f866a9b7f.js\",\"2267\",\"static/chunks/2267-db77256b9456be75.js\",\"9485\",\"static/chunks/9485-fed383efd987fd67.js\",\"5918\",\"static/chunks/5918-106"])</script><script>self.__next_f.push([1,"6b12b59e47012.js\",\"4663\",\"static/chunks/4663-f023484031c97b32.js\",\"6499\",\"static/chunks/6499-d029ad12f832b5b6.js\",\"4956\",\"static/chunks/4956-6d6015a159ac1b32.js\",\"1951\",\"static/chunks/app/home/page-0cbbe304cac20dd4.js\"],\"default\"]\n38:[]\n37:{\"recents\":\"$38\"}\n3a:[]\n39:{\"selectedLocation\":\"$34\",\"cities\":\"$3a\"}\n3f:{\"sort\":\"week-trending-score\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"}\n43:{\"pt\":\"Sab, 13 Jun - 2026 · 17:00\",\"en\":\"Sat, 13 Jun - 2026 · 17:00\",\"es\":\"Sab, 13 Jun - 2026 · 17:00\"}\n44:{\"pt\":\"Qui, 25 Jun - 2026 · 01:00\",\"en\":\"Thu, 25 Jun - 2026 · 01:00\",\"es\":\"Jue, 25 Jun - 2026 · 01:00\"}\n45:{\"city\":\"São Paulo\",\"name\":\"Jockey Club de São Paulo\",\"state\":\"SP\"}\n42:{\"featured_id\":4184,\"event_id\":3330600,\"image_url\":\"https://images.sympla.com.br/69a5eae304b07.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/torcida-n1/3330600\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Torcida N1\",\"title_seo\":\"\",\"end_date\":\"2026-06-25T04:00:00+00:00\",\"start_date_formats\":\"$43\",\"end_date_formats\":\"$44\",\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":\"$45\",\"start_date\":\"2026-06-13T20:00:00+00:00\",\"event_type\":\"NORMAL\"}\n47:{\"pt\":\"Sab, 29 Ago - 2026 · 20:00\",\"en\":\"Sat, 29 Aug - 2026 · 20:00\",\"es\":\"Sab, 29 Ago - 2026 · 20:00\"}\n48:{\"pt\":\"Dom, 30 Ago - 2026 · 02:00\",\"en\":\"Sun, 30 Aug - 2026 · 02:00\",\"es\":\"Dom, 30 Ago - 2026 · 02:00\"}\n49:{\"city\":\"São Paulo\",\"name\":\"Vibra São Paulo\",\"state\":\"SP\"}\n46:{\"featured_id\":4263,\"event_id\":3210696,\"image_url\":\"https://images.sympla.com.br/6911e38a4c3c5.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/the-realness-festival-2026-o-maior-festival-drag-da-america-latina/3210696\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"THE REALNESS FESTIVAL 2026 - O maior festival DRAG da América Latina!\",\"title_seo\":\"\",\"end_date\":\"2026-08-30T05:00:00+00:00\",\"start_date_formats\":\"$47\",\"end_date_formats\":\"$48\",\"duration_type\":\"single\",\"company\":\"sympla\",\"location\":\"$49\",\"start_date\":\"2026-08-29T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n4b:{\"pt\":\"Sex, 09 Out - 2026 "])</script><script>self.__next_f.push([1,"· 20:00\",\"en\":\"Fri, 09 Oct - 2026 · 20:00\",\"es\":\"Vie, 09 Oct - 2026 · 20:00\"}\n4c:{\"pt\":\"Sex, 09 Out - 2026 · 20:00\",\"en\":\"Fri, 09 Oct - 2026 · 20:00\",\"es\":\"Vie, 09 Oct - 2026 · 20:00\"}\n4d:{\"city\":\"Olinda\",\"name\":\"Classic Hall Recife\",\"state\":\"PE\"}\n4a:{\"featured_id\":4264,\"event_id\":50119004,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/1bgnujl8416hidr2vol74ka5iao2srr0r5t773246ksfmj7rfde1oke4q9j8kgau8lk5sobjdb7dj7s3lpc2v1cibt4f4f4a4ah17p5.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119004\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"CABARÉ - O ÚLTIMO ENCONTRO\",\"title_seo\":\"\",\"end_date\":\"2026-10-09T23:00:00+00:00\",\"start_date_formats\":\"$4b\",\"end_date_formats\":\"$4c\",\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":\"$4d\",\"start_date\":\"2026-10-09T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n4f:{\"pt\":\"Sab, 10 Out - 2026 · 22:00\",\"en\":\"Sat, 10 Oct - 2026 · 22:00\",\"es\":\"Sab, 10 Oct - 2026 · 22:00\"}\n50:{\"pt\":\"Sab, 10 Out - 2026 · 22:00\",\"en\":\"Sat, 10 Oct - 2026 · 22:00\",\"es\":\"Sab, 10 Oct - 2026 · 22:00\"}\n51:{\"city\":\"Fortaleza\",\"name\":\"Estacionamento Arena Castelão\",\"state\":\"CE\"}\n4e:{\"featured_id\":4265,\"event_id\":50119159,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3drmvbae17ghaevco6arossu7fpa3fuk65046u7q3gbjobbrql812i6p1hl0bd09e7mmtu4u4k45gq5ejqaov6iq3t2rgv7rg08ent3.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119159\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Cabaré O Último Encontro - Leonardo e Bruno\u0026Marrone\",\"title_seo\":\"\",\"end_date\":\"2026-10-11T01:00:00+00:00\",\"start_date_formats\":\"$4f\",\"end_date_formats\":\"$50\",\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":\"$51\",\"start_date\":\"2026-10-11T01:00:00+00:00\",\"event_type\":\"NORMAL\"}\n53:{\"pt\":\"Qui, 28 Mai - 2026 · 20:00\",\"en\":\"Thu, 28 May - 2026 · 20:00\",\"es\":\"Jue, 28 May - 2026 · 20:00\"}\n54:{\"pt\":\"Dom, 19 Jul - 2026 · 20:00\",\"en\":\"Sun, 19 Jul - 2026 · 20:00\",\"es\":\"Dom, 19 Jul - 2026 · 20:00\"}\n55:{\"city\":\"Rio de Janeiro\",\"name\":\"Teatro Multiplan - VillageMall\",\"state\":\"RJ\""])</script><script>self.__next_f.push([1,"}\n52:{\"featured_id\":4274,\"event_id\":50113483,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/7c06ahhqsv5tm0n3e2kfqref1jlpjpm83qak95tnm5mle27krv3m670bb6teje3sbaa2q9vd6jv5f43l2a3r4pq3fr1jpca8p3bjb8.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/113483\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"MEU FILHO É UM MUSICAL\",\"title_seo\":\"\",\"end_date\":\"2026-07-19T23:00:00+00:00\",\"start_date_formats\":\"$53\",\"end_date_formats\":\"$54\",\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":\"$55\",\"start_date\":\"2026-05-28T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n57:{\"pt\":\"Sab, 08 Ago - 2026 · 13:00\",\"en\":\"Sat, 08 Aug - 2026 · 13:00\",\"es\":\"Sab, 08 Ago - 2026 · 13:00\"}\n58:{\"pt\":\"Dom, 09 Ago - 2026 · 20:00\",\"en\":\"Sun, 09 Aug - 2026 · 20:00\",\"es\":\"Dom, 09 Ago - 2026 · 20:00\"}\n59:{\"city\":\"Belo Horizonte\",\"name\":\"Parque Ecológico Francisco Lins do Rêgo (Parque Ecológico da Pampulha)\",\"state\":\"MG\"}\n56:{\"featured_id\":4279,\"event_id\":3043855,\"image_url\":\"https://images.sympla.com.br/69ddb254f23e4.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/festival-sensacional-2026/3043855\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"FESTIVAL SENSACIONAL! 2026\",\"title_seo\":\"\",\"end_date\":\"2026-08-09T23:00:00+00:00\",\"start_date_formats\":\"$57\",\"end_date_formats\":\"$58\",\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":\"$59\",\"start_date\":\"2026-08-08T16:00:00+00:00\",\"event_type\":\"NORMAL\"}\n5b:{\"pt\":\"Sab, 25 Jul - 2026 · 22:00\",\"en\":\"Sat, 25 Jul - 2026 · 22:00\",\"es\":\"Sab, 25 Jul - 2026 · 22:00\"}\n5c:{\"pt\":\"Sab, 25 Jul - 2026 · 22:00\",\"en\":\"Sat, 25 Jul - 2026 · 22:00\",\"es\":\"Sab, 25 Jul - 2026 · 22:00\"}\n5d:{\"city\":\"Belo Horizonte\",\"name\":\"Befly Hall\",\"state\":\"MG\"}\n5a:{\"featured_id\":4171,\"event_id\":50116908,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/37eb9fs95jae6e7l6t2nclrc38j9uajijkpcn5v2pfjpfaq37k9nabnvkub1m13nqhupnccmn215p903lh7vc40dcjm4kil7hvmnedj.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/116908\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"BACO EXU DO BLUES\",\""])</script><script>self.__next_f.push([1,"title_seo\":\"\",\"end_date\":\"2026-07-26T01:00:00+00:00\",\"start_date_formats\":\"$5b\",\"end_date_formats\":\"$5c\",\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":\"$5d\",\"start_date\":\"2026-07-26T01:00:00+00:00\",\"event_type\":\"NORMAL\"}\n5f:{\"pt\":\"Sab, 26 Dez - 2026 · 18:00\",\"en\":\"Sat, 26 Dec - 2026 · 18:00\",\"es\":\"Sab, 26 Dic - 2026 · 18:00\"}\n60:{\"pt\":\"Sex, 01 Jan - 2027 · 06:00\",\"en\":\"Fri, 01 Jan - 2027 · 06:00\",\"es\":\"Vie, 01 Ene - 2027 · 06:00\"}\n61:{\"city\":\"Ipojuca\",\"name\":\"Maracaipe\",\"state\":\"PE\"}\n5e:{\"featured_id\":4286,\"event_id\":3390641,\"image_url\":\"https://images.sympla.com.br/69e23214c6971.jpg\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/reveillon-amore-2027/3390641\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Réveillon Amoré 2027\",\"title_seo\":\"\",\"end_date\":\"2027-01-01T09:00:00+00:00\",\"start_date_formats\":\"$5f\",\"end_date_formats\":\"$60\",\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":\"$61\",\"start_date\":\"2026-12-26T21:00:00+00:00\",\"event_type\":\"NORMAL\"}\n63:{\"pt\":\"Sab, 30 Mai - 2026 · 11:00\",\"en\":\"Sat, 30 May - 2026 · 11:00\",\"es\":\"Sab, 30 May - 2026 · 11:00\"}\n64:{\"pt\":\"Dom, 07 Jun - 2026 · 16:00\",\"en\":\"Sun, 07 Jun - 2026 · 16:00\",\"es\":\"Dom, 07 Jun - 2026 · 16:00\"}\n65:{\"city\":\"São Paulo\",\"name\":\"BTG Pactual Hall\",\"state\":\"SP\"}\n62:{\"featured_id\":4289,\"event_id\":50115142,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/25ve7fv5khlamvdj1jvmsllfbpfm57jr1rp0ikonhqflc4qbs7ffh62smrgdsl401hq1lejb7lgh91k9tkrt3la0o63t8qp2lo7vhfp.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/115142\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Viva: A vida é uma festa, in concert\",\"title_seo\":\"\",\"end_date\":\"2026-06-07T19:00:00+00:00\",\"start_date_formats\":\"$63\",\"end_date_formats\":\"$64\",\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":\"$65\",\"start_date\":\"2026-05-30T14:00:00+00:00\",\"event_type\":\"NORMAL\"}\n67:{\"pt\":\"Sex, 12 Jun - 2026 · 21:00\",\"en\":\"Fri, 12 Jun - 2026 · 21:00\",\"es\":\"Vie, 12 Jun - 2026 · 21:00\"}\n68:{\"pt\":\"Sex, 12 Jun - 2026 · 21:00\",\"en\":\"Fri, 12 Jun - 2026 · 21:00\","])</script><script>self.__next_f.push([1,"\"es\":\"Vie, 12 Jun - 2026 · 21:00\"}\n69:{\"city\":\"Brasília\",\"name\":\"Centro de Convenções Ulysses Guimarães\",\"state\":\"DF\"}\n66:{\"featured_id\":4294,\"event_id\":50119652,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/1516kh55k7m169ktvsqia8unbmm37srngqshsovsooqjmum5j05sebs98vcsfslp7fk1jf062j27vq4be532grf95ibthkfvhpsfp98.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119652\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Tim Bernardes - Despedida “Mil Coisas Invisíveis”\",\"title_seo\":\"\",\"end_date\":\"2026-06-13T00:00:00+00:00\",\"start_date_formats\":\"$67\",\"end_date_formats\":\"$68\",\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":\"$69\",\"start_date\":\"2026-06-13T00:00:00+00:00\",\"event_type\":\"NORMAL\"}\n6b:{\"pt\":\"Sex, 05 Jun - 2026 · 19:00\",\"en\":\"Fri, 05 Jun - 2026 · 19:00\",\"es\":\"Vie, 05 Jun - 2026 · 19:00\"}\n6c:{\"pt\":\"Sab, 06 Jun - 2026 · 19:00\",\"en\":\"Sat, 06 Jun - 2026 · 19:00\",\"es\":\"Sab, 06 Jun - 2026 · 19:00\"}\n6d:{\"city\":\"Salvador\",\"name\":\"Teatro Faresi \",\"state\":\"BA\"}\n6a:{\"featured_id\":4295,\"event_id\":50118913,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/p4sgfopmq3upromg73o22s2b4du0j00apc0icm5f9ral9phas3nqbo8jlp1t80gmso04c6ae94ap3e9o5lqh93cct1cusanhrv9lha.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/118913\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"FREUD e o VISITANTE\",\"title_seo\":\"\",\"end_date\":\"2026-06-06T22:00:00+00:00\",\"start_date_formats\":\"$6b\",\"end_date_formats\":\"$6c\",\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":\"$6d\",\"start_date\":\"2026-06-05T22:00:00+00:00\",\"event_type\":\"NORMAL\"}\n6f:{\"pt\":\"Qui, 28 Mai - 2026 · 19:00\",\"en\":\"Thu, 28 May - 2026 · 19:00\",\"es\":\"Jue, 28 May - 2026 · 19:00\"}\n70:{\"pt\":\"Sex, 29 Mai - 2026 · 22:00\",\"en\":\"Fri, 29 May - 2026 · 22:00\",\"es\":\"Vie, 29 May - 2026 · 22:00\"}\n71:{\"city\":\"Salvador\",\"name\":\"Teatro Jorge Amado\",\"state\":\"BA\"}\n6e:{\"featured_id\":4296,\"event_id\":50119753,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/39i7v0j5jcqrtu3rm623miv9b9a2edmefqssr3kr4r9vdfvek1tp8i"])</script><script>self.__next_f.push([1,"lu8l0n5ipoi6pkauqptcke0u3shqanpsb7iuuultjpspnftvu.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119753\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"MATHUES BUENTE EM O PROBLEMA EH THEU \",\"title_seo\":\"\",\"end_date\":\"2026-05-30T01:00:00+00:00\",\"start_date_formats\":\"$6f\",\"end_date_formats\":\"$70\",\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":\"$71\",\"start_date\":\"2026-05-28T22:00:00+00:00\",\"event_type\":\"NORMAL\"}\n73:{\"pt\":\"Ter, 09 Jun - 2026 · 08:00\",\"en\":\"Tue, 09 Jun - 2026 · 08:00\",\"es\":\"Mar, 09 Jun - 2026 · 08:00\"}\n74:{\"pt\":\"Qua, 10 Jun - 2026 · 20:00\",\"en\":\"Wed, 10 Jun - 2026 · 20:00\",\"es\":\"Mie, 10 Jun - 2026 · 20:00\"}\n75:{\"city\":\"Belo Horizonte\",\"name\":\"BeFly Minascentro\",\"state\":\"MG\"}\n72:{\"featured_id\":4301,\"event_id\":3271026,\"image_url\":\"https://images.sympla.com.br/69d7cb4ef38bd.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/leader-shift-2026/3271026\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Leader Shift 2026\",\"title_seo\":\"\",\"end_date\":\"2026-06-10T23:00:00+00:00\",\"start_date_formats\":\"$73\",\"end_date_formats\":\"$74\",\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":\"$75\",\"start_date\":\"2026-06-09T11:00:00+00:00\",\"event_type\":\"NORMAL\"}\n77:{\"pt\":\"Qua, 15 Jul - 2026 · 20:00\",\"en\":\"Wed, 15 Jul - 2026 · 20:00\",\"es\":\"Mie, 15 Jul - 2026 · 20:00\"}\n78:{\"pt\":\"Dom, 06 Set - 2026 · 18:30\",\"en\":\"Sun, 06 Sep - 2026 · 18:30\",\"es\":\"Dom, 06 Sep - 2026 · 18:30\"}\n79:{\"city\":\"Rio de Janeiro\",\"name\":\"Cidade das Artes\",\"state\":\"RJ\"}\n76:{\"featured_id\":4070,\"event_id\":50114663,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/1p291u1vj14ffgc3dnjcrsdjdd8c7mujn8gd09ih6g516grqapshg64vm3fo0hedkm9mu84d5p17nd64pr27f3qklf5cpnpqe1rhbaq.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/114663\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"WICKED\",\"title_seo\":\"\",\"end_date\":\"2026-09-06T21:30:00+00:00\",\"start_date_formats\":\"$77\",\"end_date_formats\":\"$78\",\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":\"$79\",\"start_date\":\"2026-07-15T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n7b:{\""])</script><script>self.__next_f.push([1,"pt\":\"Sex, 29 Mai - 2026 · 19:00\",\"en\":\"Fri, 29 May - 2026 · 19:00\",\"es\":\"Vie, 29 May - 2026 · 19:00\"}\n7c:{\"pt\":\"Sex, 29 Mai - 2026 · 19:00\",\"en\":\"Fri, 29 May - 2026 · 19:00\",\"es\":\"Vie, 29 May - 2026 · 19:00\"}\n7d:{\"city\":\"Salvador\",\"name\":\"Teatro Faresi \",\"state\":\"BA\"}\n7a:{\"featured_id\":4304,\"event_id\":50119597,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/2nb4jp8u766i3lifj9ggvecablsd95qkpc2u1ku3cm62sj6emusee13dd0qfrchncsjmguc3j4avvjin92u2fc8fbe9idpu452g73hp.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119597\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"GIOVANA FAGUNDES TESTANDO NOVO SHOW\",\"title_seo\":\"\",\"end_date\":\"2026-05-29T22:00:00+00:00\",\"start_date_formats\":\"$7b\",\"end_date_formats\":\"$7c\",\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":\"$7d\",\"start_date\":\"2026-05-29T22:00:00+00:00\",\"event_type\":\"NORMAL\"}\n7f:{\"pt\":\"Qui, 28 Mai - 2026 · 20:00\",\"en\":\"Thu, 28 May - 2026 · 20:00\",\"es\":\"Jue, 28 May - 2026 · 20:00\"}\n80:{\"pt\":\"Dom, 12 Jul - 2026 · 19:30\",\"en\":\"Sun, 12 Jul - 2026 · 19:30\",\"es\":\"Dom, 12 Jul - 2026 · 19:30\"}\n81:{\"city\":\"São Paulo\",\"name\":\"Teatro Santander\",\"state\":\"SP\"}\n7e:{\"featured_id\":4282,\"event_id\":50113220,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/2948ac5ba0sdm3s3bm6psjrp3b4m2phhoshvdpufh5aa0073aumlsrn8ebf7nlpc0kjgqn6oi127oit47posgq4443dnntnj2f03033.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/113220\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"TINA - TINA TURNER, O MUSICAL\",\"title_seo\":\"\",\"end_date\":\"2026-07-12T22:30:00+00:00\",\"start_date_formats\":\"$7f\",\"end_date_formats\":\"$80\",\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":\"$81\",\"start_date\":\"2026-05-28T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n41:[\"$42\",\"$46\",\"$4a\",\"$4e\",\"$52\",\"$56\",\"$5a\",\"$5e\",\"$62\",\"$66\",\"$6a\",\"$6e\",\"$72\",\"$76\",\"$7a\",\"$7e\"]\n40:{\"data\":\"$41\",\"total\":16}\n3e:{\"service\":\"/v4/featured\",\"template\":\"carousel\",\"is_directory\":false,\"show_more\":false,\"label\":\"Eventos em destaque na Sympla\",\"response_type\":\"sponsored\",\"uuid\":\"home-sponso"])</script><script>self.__next_f.push([1,"red\",\"service_params\":\"$3f\",\"seo_description\":\" \",\"seo_title\":\" \",\"order\":510,\"response\":\"$40\"}\n83:{\"category\":\"collection\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"}\n87:{\"icon\":\"https://images.sympla.com.br/69b9ab3424b91.png\",\"normal\":\"https://images.sympla.com.br/651596056d6be.png\",\"banner\":\"https://images.sympla.com.br/62d81e4169758.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-festa-show-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8df273cc5.png\"}\n86:{\"collection_id\":\"17\",\"description\":\"Vai curtir música boa em um festival ou ver a apresentação do seu artista favorito? Escolha sua festa na Sympla e aproveite!\",\"highlighted\":\"1\",\"images\":\"$87\",\"label\":\"Festas e Shows \",\"seo_description\":\"Descubra shows, festas, baladas e festivais na sua cidade com a Sympla. Encontre eventos incríveis, faça sua escolha e curta música boa com seus amigos!\",\"seo_title\":\"Confira Festas e Shows incríveis perto de você - Sympla\",\"slug\":\"show-musica-festa\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_festas_shows\",\"uuid\":\"collection-festas-e-shows\"}\n89:{\"icon\":\"https://images.sympla.com.br/69b9abf31769b.png\",\"normal\":\"https://images.sympla.com.br/6515956ba5b11.png\",\"banner\":\"https://images.sympla.com.br/69df9c191ee11.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-arte-cultura-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8e2f23cfa.png\"}\n88:{\"collection_id\":\"23\",\"description\":\"Apreciar uma peça de teatro, admirar um espetáculo em um teatro histórico ou conhecer uma cultura diferente da sua. Descubra os melhores eventos culturais da sua cidade e viva novas experiências.\",\"highlighted\":\"3\",\"images\":\"$89\",\"label\":\"Teatros e Espetáculos\",\"seo_description\":\"Teatro, Stand Up Comedy, Espetáculos, Peças Infantis e mais na Sympla. Invista em cultura em 2026. Opções de Peças de Teatro gratuitas, online e pagas.\",\"seo_title\":\"Teatros, Stand Up, Musicais e Espetáculos 2026 - Sympla\",\"slug\":\"teatro-espetacul"])</script><script>self.__next_f.push([1,"o\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_teatros\",\"uuid\":\"collection-teatros-e-espetaculos\"}\n8b:{\"icon\":\"https://images.sympla.com.br/6a022da5d37fc.png\",\"normal\":\"https://images.sympla.com.br/6654867ca425a.png\",\"banner\":\"https://images.sympla.com.br/682f3f2f83c4f.png\",\"icon-active\":\"https://images.sympla.com.br/5e827010ca767.png\",\"dark-normal\":\"https://images.sympla.com.br/665486550bffe.png\"}\n8a:{\"collection_id\":\"24\",\"description\":\"Encontre Festas Juninas, São João e Arraiás com comidas típicas na Sympla. Descubra os melhores eventos de São João 2026 e aproveite com seus amigos. Separa o traje e prepara a fogueira que a melhor época do ano chegou!\",\"highlighted\":\"5\",\"images\":\"$8b\",\"label\":\"Festas Juninas\",\"seo_description\":\"Confira Festas Julinas em 2026 na Sympla. Eventos de São João, Arraiás, Shows e muito mais de Norte a Sul do país. Encontre os melhores Eventos Juninos!\",\"seo_title\":\"Festas Juninas, Eventos de São João e Arraiás 2026 - Sympla\",\"slug\":\"festa-junina\",\"template\":\"collection-matrix\",\"uuid\":\"collection-festa-junina\"}\n8d:{\"icon\":\"https://images.sympla.com.br/6a0cc63a8047a.png\",\"normal\":\"https://images.sympla.com.br/6a0cc602aad37.png\",\"banner\":\"https://images.sympla.com.br/6a0cc9ae6e2d4.png\",\"icon-active\":\"https://images.sympla.com.br/6a0cc63a8047a.png\"}\n8c:{\"collection_id\":\"79\",\"description\":\"Encontre opções para assistir aos jogos e a final da Copa na Sympla. Seja no barzinho com os amigos, em restaurantes com a família ou aproveitando um show nacional pós jogo, divirta-se com os eventos da Copa que separamos para você!\",\"highlighted\":\"4\",\"images\":\"$8d\",\"label\":\"Copa na Sympla\",\"seo_description\":\"Aproveite a Copa na Sympla. Assista aos jogos, encontre os melhores eventos de Copa, Shows, Festas e muito mais. Viva a Copa ao Vivo!\",\"seo_title\":\"Copa na Sympla - Assista aos jogos e encontre Eventos - Sympla\",\"slug\":\"copa\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_copa\",\"uuid\":\"collection-copa\"}\n8f:{\"icon\":\"https://images.sympla.com.br/6a14aada9a69"])</script><script>self.__next_f.push([1,"b.png\",\"normal\":\"https://images.sympla.com.br/6a148f4e6f478.png\",\"banner\":\"https://images.sympla.com.br/6a148cd50899f.png\",\"icon-active\":\"https://images.sympla.com.br/5e827010ca767.png\"}\n8e:{\"collection_id\":\"81\",\"description\":\"Garanta ingressos com desconto para festas, eventos corporativos, peças e muito mais. Confira as promoções disponíveis e aproveite.\",\"images\":\"$8f\",\"label\":\"Promoções\",\"seo_description\":\"Compre ingressos com desconto na Sympla. Festas, teatro, cursos, eventos corporativos e muito mais. Aproveite!\",\"seo_title\":\"Promoções - Eventos com desconto na Sympla\",\"slug\":\"promocoes\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_promocoes\",\"uuid\":\"collection-promocoes\"}\n91:{\"icon\":\"https://images.sympla.com.br/69b9ac7312b25.png\",\"normal\":\"https://images.sympla.com.br/651593e03c77e.png\",\"banner\":\"https://images.sympla.com.br/6740ef055fec6.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-esporte-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8f0a1084e.png\"}\n90:{\"collection_id\":\"2\",\"description\":\"Encontre corridas, competições, desafios e treinos na Sympla. Descubra opções de aulas, cursos e workshops para você descobrir seu novo esporte favorito. Aproveite a experiencia de fazer algo pela primeira vez!\",\"highlighted\":\"2\",\"images\":\"$91\",\"label\":\"Esportes\",\"seo_description\":\"Encontre eventos esportivos de corrida, ciclismo, campeonatos, trilhas, aulas, treinos e mais na Sympla. Confira eventos esportivos perto de você!\",\"seo_title\":\"Eventos Esportivos - Ciclismo, Corrida, Triathlon - Sympla\",\"slug\":\"esportivo\",\"template\":\"collection-matrix\",\"uuid\":\"collection-esporte\"}\n93:{\"icon\":\"https://images.sympla.com.br/69b9abcf7d09e.png\",\"normal\":\"https://images.sympla.com.br/65159534a23f0.png\",\"banner\":\"https://images.sympla.com.br/62f15a2667f14.jpg\",\"icon-active\":\"https://images.sympla.com.br/610949a050ac4.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8fb48cacf.png\"}\n92:{\"collection_id\":\"5\",\"description\":\"Encontre a programação dos melhores s"])</script><script>self.__next_f.push([1,"hows de stand up comedy que estão em cartaz na sua cidade e se divirta com a Sympla. Aproveite com os amigos essa experiência!\",\"images\":\"$93\",\"label\":\"Stand Up Comedy\",\"seo_description\":\"Aproveite os melhores shows de Stand Up ao vivo com comediantes talentosos. Confira a programação de shows de comédia em cartaz e garanta seu ingresso na Sympla!\",\"seo_title\":\"Stand Up Comedy: Shows de humor e comédia ao vivo - Sympla\",\"slug\":\"stand-up-comedy\",\"template\":\"collection-matrix\",\"uuid\":\"collection-stand-up\"}\n95:{\"icon\":\"https://images.sympla.com.br/69b9ab9c2d641.png\",\"normal\":\"https://images.sympla.com.br/651594a38adf5.png\",\"banner\":\"https://images.sympla.com.br/62d81e9fe0816.jpg\",\"icon-active\":\"https://images.sympla.com.br/5e6a2ddb290f2.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8eb765a8a.png\"}\n94:{\"collection_id\":\"26\",\"description\":\"Viva algo novo! Confira as opções de passeios turísticos, atividades ao ar livre, tours, museus, exposições... Experiências culturais para todos os gostos.\",\"images\":\"$95\",\"label\":\"Passeios e Tours\",\"seo_description\":\"Museus, passeios turísticos, exposições, atividades culturais e outras experiências com a Sympla. Passeios repletos de cultura, arte e história e crie memórias inesquecíveis.\",\"seo_title\":\"Explore Museus, Exposições, Passeios Turísticos e mais - Sympla\",\"slug\":\"experiencias\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_passeios\",\"uuid\":\"collection-experiencias\"}\n97:{\"icon\":\"https://images.sympla.com.br/69b961cab4757.png\",\"normal\":\"https://images.sympla.com.br/6515934b35c6e.png\",\"banner\":\"https://images.sympla.com.br/62d81db9c5730.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-negocios-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8e5d29353.png\"}\n96:{\"collection_id\":\"4\",\"description\":\"Ampliar sua rede de contatos é expandir suas possibilidades profissionais. Congressos, palestras e muito mais na Sympla. Escolha um evento corporativo e desenvolva seu networking!\",\"images\":\"$97\",\"label\":\"Co"])</script><script>self.__next_f.push([1,"ngressos e Palestras\",\"seo_description\":\"Congressos e Palestras para sua qualificação - Sympla\",\"seo_title\":\"Congressos e Palestras para sua qualificação - Sympla\",\"slug\":\"congresso-palestra\",\"template\":\"collection-matrix\",\"uuid\":\"collection-congressos-e-palestras\"}\n99:{\"icon\":\"https://images.sympla.com.br/69b9ab6b08022.png\",\"normal\":\"https://images.sympla.com.br/6515948258143.png\",\"banner\":\"https://images.sympla.com.br/63371050e1c36.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-infantil-active.png\",\"web\":\"https://images.sympla.com.br/63371019b2993.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a8ee59c091.png\"}\n98:{\"collection_id\":\"15\",\"description\":\"Divirta-se e encante as crianças com diversas atividades infantis. Confira a programação infantil da Sympla e encontre eventos para crianças, colônia de férias, peças de teatro infantis e musicais, contação de histórias, circos, cursos para pais e muito mais! Momentos inesquecíveis, para explorar novos conhecimentos e soltar a imaginação em ambientes seguros e estimulantes. Há sempre algo novo para descobrir e aproveitar, tornando cada experiência uma aventura única para as crianças e famílias.\",\"images\":\"$99\",\"label\":\"Infantil\",\"seo_description\":\"Encontre eventos para crianças, cursos, workshops, passeios, teatros e shows para crianças em 2026 na Sympla. Eventos e conteúdos gratuitos e pagos.\",\"seo_title\":\"Infantil - Eventos, Atividades e Teatro para Crianças - Sympla\",\"slug\":\"infantil\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_infantil\",\"uuid\":\"collection-infantil\"}\n9b:{\"icon\":\"https://images.sympla.com.br/69b9abdf9c538.png\",\"normal\":\"https://images.sympla.com.br/699c8ba73d21c.png\",\"banner\":\"https://images.sympla.com.br/699c5c40d1e45.png\",\"icon-active\":\"https://images.sympla.com.br/699c5d01488d0.svg\"}\n9a:{\"collection_id\":\"68\",\"description\":\"Tudo para viver ao máximo em eventos com loja! Ingressos, merchandising oficial e experiências especiais em um só lugar.\",\"images\":\"$9b\",\"label\":\"Even"])</script><script>self.__next_f.push([1,"tos com loja\",\"seo_description\":\"Viva eventos com loja que vão além do ingresso! Garanta produtos oficiais, experiências VIP e itens exclusivos no mesmo lugar.\",\"seo_title\":\"Eventos com Loja - Sympla Store\",\"slug\":\"loja\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_store\",\"uuid\":\"collection-loja\"}\n9d:{\"icon\":\"https://images.sympla.com.br/69b9ac18a3869.png\",\"normal\":\"https://images.sympla.com.br/685ea3f827ca2.png\",\"banner\":\"https://images.sympla.com.br/683ef9968f270.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-arte-cultura-active.png\",\"dark-normal\":\"https://images.sympla.com.br/682495e040d07.png\"}\n9c:{\"collection_id\":\"101\",\"description\":\"Bem-vindo à Coleção TIM Mais! Confira aqui os eventos que separamos para você!\",\"images\":\"$9d\",\"label\":\"Descontos exclusivos\",\"seo_description\":\"Aproveite os melhores eventos com descontos exclusivos em parceria da Sympla e Tim Mais. Compre agora!\",\"seo_title\":\"Descontos Exclusivos - Sympla e Tim Mais\",\"slug\":\"tim-mais\",\"template\":\"collection-matrix\",\"uuid\":\"collection-tim-mais\"}\n9f:{\"icon\":\"https://images.sympla.com.br/69b9ac5d1176f.png\",\"normal\":\"https://images.sympla.com.br/651593b284186.png\",\"banner\":\"https://images.sympla.com.br/62d81de28db3a.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-aprender-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8e8c8263d.png\"}\n9e:{\"collection_id\":\"8\",\"description\":\"Transforme seu aprendizado com cursos e workshops em diversas áreas. Escolha entre opções online e presenciais para aprimorar seu currículo, expandir suas habilidades e elevar seu perfil profissional.\",\"images\":\"$9f\",\"label\":\"Cursos e Workshops\",\"seo_description\":\"Encontre workshops e cursos online ou presenciais com certificado. Cursos de direito, fotografia, informática e mais na Sympla. Workshops e cursos gratuitos e pagos.\",\"seo_title\":\"Cursos e Workshops Online - Direito, Marketing e mais - Sympla\",\"slug\":\"curso-workshop\",\"template\":\"collection-matrix\",\"uuid\":\"collection-cursos-e-works"])</script><script>self.__next_f.push([1,"hops\"}\na1:{\"icon\":\"https://images.sympla.com.br/69b9ab58a6235.png\",\"normal\":\"https://images.sympla.com.br/6515942bca2c8.png\",\"banner\":\"https://images.sympla.com.br/62d81e57a55f0.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-comer-beber-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8f6046485.png\"}\na0:{\"collection_id\":\"1\",\"description\":\"Feiras gastronômicas, encontros, capacitações, cursos, festas… tudo isso acompanhado de comidas e bebidas deliciosas! Escolha seu evento gastronômico e viva uma experiência incrível.\",\"images\":\"$a1\",\"label\":\"Gastronomia\",\"seo_description\":\"Encontre feiras e festivais gastronômicos perto de você com a Sympla. Aprenda e se divirta com cursos de gastronômia e mais. Confira os eventos gastronômicos!\",\"seo_title\":\"Eventos Gastronômicos | Festivais e Feiras Gastronômicas - Sympla\",\"slug\":\"gastronomico\",\"template\":\"collection-matrix\",\"uuid\":\"collection-gastronomia\"}\na3:{\"icon\":\"https://images.sympla.com.br/69b9ab7a33d3c.png\",\"normal\":\"https://images.sympla.com.br/651594ca12eee.png\",\"banner\":\"https://images.sympla.com.br/647a44bc34d35.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-pride-active.png\",\"web\":\"https://images.sympla.com.br/5ef36d88561f7.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a9031aa5b5.png\"}\na2:{\"collection_id\":\"14\",\"description\":\"Viva a diversidade e conecte-se aos principais movimentos e eventos LGBTQIAPN+. Encontre festas, debates, congressos e palestras sobre pautas da comunidade LGBTQIAPN+!\",\"images\":\"$a3\",\"label\":\"Pride\",\"seo_description\":\"Encontre eventos, debates, baladas, festas, concursos e muito mais para a comunidade LGBTQIAPN+ na Sympla. Descubra as diversas opções de eventos!\",\"seo_title\":\"Eventos LGBTQIAPN+ | Os melhores eventos - Sympla\",\"slug\":\"pride\",\"template\":\"collection-matrix\",\"uuid\":\"collection-pride\"}\na5:{\"icon\":\"https://images.sympla.com.br/69b9abbe7da09.png\",\"normal\":\"https://images.sympla.com.br/651594f401e62.png\",\"banner\":\"https://images.sympla.com.br/62d8"])</script><script>self.__next_f.push([1,"1ee65ec16.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-religioso-espiritual-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a9014d5f8e.png\"}\na4:{\"collection_id\":\"13\",\"description\":\"Conecte-se ao que você acredita. Para todas as culturas encontre eventos religiosos, cursos, seminários, retiros espirituais, shows gospel ou debates sobre religião e espiritualidade. Confira opções de eventos online e presenciais perto de você.\",\"images\":\"$a5\",\"label\":\"Religião e Espiritualidade\",\"seo_description\":\"Confira eventos religiosos, cursos de espiritualidade, retiro espiritual, missas, cultos, show gospel e mais na Sympla. \",\"seo_title\":\"Missas, Cultos e Eventos Religiosos em 2025 -  Sympla\",\"slug\":\"religioso-espiritual\",\"template\":\"collection-matrix\",\"uuid\":\"collection-religioso-espiritual\"}\na7:{\"icon\":\"https://images.sympla.com.br/69c6d6cf01d67.png\",\"normal\":\"https://images.sympla.com.br/6515940a38c2a.png\",\"banner\":\"https://images.sympla.com.br/62d81e158057d.jpg\",\"icon-active\":\"https://images.sympla.com.br/5e7a4d58e4da7.png\",\"web\":\"https://images.sympla.com.br/61655c7b20c01.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a8f87772bd.png\"}\na6:{\"collection_id\":\"32\",\"description\":\"Simplifique a forma de assistir e participar de eventos online. São diversos cursos, webinars, workshops, seminários e muito mais em diversas áreas. Tudo isso disponível online para você!\",\"images\":\"$a7\",\"label\":\"Eventos Online\",\"seo_description\":\"Encontre eventos, palestras, aulas, lives e cursos online com certificado na Sympla. Aprenda online psicologia, veterinária, marketing, direito e mais.\",\"seo_title\":\"Eventos Online - Lives, Shows, Workshops e Cursos Online - Sympla\",\"slug\":\"online\",\"template\":\"collection-matrix\",\"uuid\":\"collection-online\"}\na9:{\"icon\":\"https://images.sympla.com.br/69b9abad87e23.png\",\"normal\":\"https://images.sympla.com.br/651595520d790.png\",\"banner\":\"https://images.sympla.com.br/62d81eb6d4345.jpg\",\"icon-active\":\"https://images.sympla.com.br/5fab02bfc10d2.png\",\"web\":\"htt"])</script><script>self.__next_f.push([1,"ps://images.sympla.com.br/5fa5b6f46c625.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a90599c326.png\"}\na8:{\"collection_id\":\"61\",\"description\":\"Na Sympla seu conhecimento é levado a sério! Encontre conteúdos online e cursos EAD. Aulas gravadas para você assistir quando e onde quiser. Consulte opções de curso com certificado.\",\"images\":\"$a9\",\"label\":\"Sympla Play\",\"seo_description\":\"Conteúdos e cursos online com certificado na Sympla. Trilhas de conhecimento em direito, marketing, empreendedorismo e mais com os melhores especialistas.\",\"seo_title\":\"Cursos Online EAD e Conteúdos Digitais - Sympla Play\",\"slug\":\"sympla-play\",\"template\":\"collection-matrix\",\"uuid\":\"collection-sympla-play\"}\n85:[\"$86\",\"$88\",\"$8a\",\"$8c\",\"$8e\",\"$90\",\"$92\",\"$94\",\"$96\",\"$98\",\"$9a\",\"$9c\",\"$9e\",\"$a0\",\"$a2\",\"$a4\",\"$a6\",\"$a8\"]\n84:{\"matrices\":\"$85\",\"limit\":20,\"total\":18}\n82:{\"template\":\"slider\",\"is_directory\":true,\"show_more\":true,\"label\":\"Explore nossas coleções\",\"service_params\":\"$83\",\"seo_description\":\" \",\"service\":\"/v4/matrices\",\"seo_title\":\" \",\"response_type\":\"collection-card\",\"uuid\":\"home-collection\",\"order\":520,\"response\":\"$84\"}\nab:{\"only\":\"name,start_date,end_date,images,event_type,duration_type,location,id,global_score,start_date_formats,end_date_formats,url,company,type\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"}\nac:{}\naa:{\"template\":\"slider\",\"is_directory\":false,\"show_more\":false,\"label\":\"Vistos recentemente\",\"service_params\":\"$ab\",\"seo_description\":\" \",\"service\":\"/v4/search/recents\",\"seo_title\":\" \",\"response_type\":\"recent-card\",\"uuid\":\"recentes\",\"order\":530,\"response\":\"$ac\"}\nae:{\"has_banner\":\"1\",\"only\":\"name,start_date,end_date,images,event_type,duration_type,location,id,global_score,start_date_formats,end_date_formats,url,company,type,organizer\",\"filter_sold_out\":\"1\",\"sort\":\"day-trending-score\",\"location_score\":\"day-trending-score\",\"type\":\"normal\",\"excluded_ids\":\"50092676,50092669,50092682,50092680\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"}\nb2:{\"original\":\"https://image"])</script><script>self.__next_f.push([1,"s.sympla.com.br/69d69ca40ea0a.jpg\",\"xs\":\"https://images.sympla.com.br/69d69ca40ea0a-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69d69ca40ea0a-lg.jpg\"}\nb3:{\"pt\":\"Sab, 30 Mai - 2026 · 21:00\",\"en\":\"Sat, 30 May - 2026 · 21:00\",\"es\":\"Sab, 30 May - 2026 · 21:00\"}\nb4:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"We Make\",\"id\":\"3188645\",\"url\":\"\",\"email\":\"contato@wemakeideas.com.br\",\"organizer_range_id\":\"1\"}\nb5:{\"pt\":\"Dom, 31 Mai - 2026 · 05:00\",\"en\":\"Sun, 31 May - 2026 · 05:00\",\"es\":\"Dom, 31 May - 2026 · 05:00\"}\nb6:{\"country\":\"BRASIL\",\"address\":\"\",\"address_alt\":\"\",\"city\":\"Rio de Janeiro\",\"address_num\":\"0\",\"name\":\"Local a definir\",\"lon\":-43.1728965,\"state\":\"RJ\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-22.9068467}\nb1:{\"end_date\":\"2026-05-31T08:00:00+00:00\",\"images\":\"$b2\",\"global_score\":458094,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/junina-we-make-l-open-bar-open-food-junino/3379260\",\"start_date_formats\":\"$b3\",\"organizer\":\"$b4\",\"end_date_formats\":\"$b5\",\"name\":\"JUNINA WE MAKE l Open Bar \u0026 Open Food Junino\",\"company\":\"sympla\",\"location\":\"$b6\",\"id\":3379260,\"start_date\":\"2026-05-31T00:00:00+00:00\",\"event_type\":\"NORMAL\"}\nb8:{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/l9f8l634pmq5gahjfoauod20gjgsr1ra3757c55638hd2hq1otqt9jkphsjihpsm4ha7ercfj9ls9v67m17fcaqradvbg04tkruu6r.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/l9f8l634pmq5gahjfoauod20gjgsr1ra3757c55638hd2hq1otqt9jkphsjihpsm4ha7ercfj9ls9v67m17fcaqradvbg04tkruu6r.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/l9f8l634pmq5gahjfoauod20gjgsr1ra3757c55638hd2hq1otqt9jkphsjihpsm4ha7ercfj9ls9v67m17fcaqradvbg04tkruu6r.jpeg\"}\nb9:{\"pt\":\"Qui, 07 Mai - 2026 · 09:30\",\"en\":\"Thu, 07 May - 2026 · 09:30\",\"es\":\"Jue, 07 May - 2026 · 09:30\"}\nba:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"INSTITUTO INHOTIM\",\"id\":\"295\",\"url\":\"\",\"email\":\"info@inhotim.org.br\",\"organizer_range_id\":\"1\"}\nbb:{\"pt\":\"Qua, 30 Dez - 2026 · 09:30\",\"en\":\"Wed, 30 Dec - 2026 · 09:30\",\"es\":"])</script><script>self.__next_f.push([1,"\"Mie, 30 Dic - 2026 · 09:30\"}\nbc:{\"country\":\"\",\"address\":\"Rua B, 20\",\"address_alt\":\"\",\"city\":\"Brumadinho\",\"address_num\":\"0\",\"name\":\"Instituto Inhotim\",\"lon\":-44.2191423,\"state\":\"MG\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-20.1261083}\nb7:{\"end_date\":\"2026-12-30T12:30:00+00:00\",\"images\":\"$b8\",\"global_score\":627278,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/113098\",\"start_date_formats\":\"$b9\",\"organizer\":\"$ba\",\"end_date_formats\":\"$bb\",\"name\":\"INSTITUTO INHOTIM 2026\",\"company\":\"ttrs\",\"location\":\"$bc\",\"id\":50113098,\"start_date\":\"2026-05-07T12:30:00+00:00\",\"event_type\":\"NORMAL\"}\nbe:{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/10ihv9db73nhj82s7k2kd1fc66tcil687im7lrqcglp1oihgvine5khs2c735hi06i7g60e9sls5314nbdqd613gupc6a6rbq6v59nr.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/10ihv9db73nhj82s7k2kd1fc66tcil687im7lrqcglp1oihgvine5khs2c735hi06i7g60e9sls5314nbdqd613gupc6a6rbq6v59nr.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/10ihv9db73nhj82s7k2kd1fc66tcil687im7lrqcglp1oihgvine5khs2c735hi06i7g60e9sls5314nbdqd613gupc6a6rbq6v59nr.jpeg\"}\nbf:{\"pt\":\"Dom, 07 Jun - 2026 · 11:00\",\"en\":\"Sun, 07 Jun - 2026 · 11:00\",\"es\":\"Dom, 07 Jun - 2026 · 11:00\"}\nc0:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"FUNDAÇÃO CLÓVIS SALGADO - FCS\",\"id\":\"5824\",\"url\":\"\",\"email\":\"ronaldo@orquestraouropreto.com.br\",\"organizer_range_id\":\"1\"}\nc1:{\"pt\":\"Dom, 07 Jun - 2026 · 17:00\",\"en\":\"Sun, 07 Jun - 2026 · 17:00\",\"es\":\"Dom, 07 Jun - 2026 · 17:00\"}\nc2:{\"country\":\"\",\"address\":\"Av. Afonso Pena,1537\",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"0\",\"name\":\"Grande Teatro Cemig Palácio das Artes\",\"lon\":-43.9337146,\"state\":\"MG\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-19.9256264}\nbd:{\"end_date\":\"2026-06-07T20:00:00+00:00\",\"images\":\"$be\",\"global_score\":616190,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/120432\",\"start_date_formats\":\"$bf\",\"organizer\":\"$c0\",\"end_date_formats\":\"$c1\",\"name\""])</script><script>self.__next_f.push([1,":\"Orquestra Ouro Preto e Pé de Sonho\",\"company\":\"ttrs\",\"location\":\"$c2\",\"id\":50120432,\"start_date\":\"2026-06-07T14:00:00+00:00\",\"event_type\":\"NORMAL\"}\nc4:{\"original\":\"https://images.sympla.com.br/69c2a7709f882.jpg\",\"xs\":\"https://images.sympla.com.br/69c2a7709f882-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69c2a7709f882-lg.jpg\"}\nc5:{\"pt\":\"Sab, 30 Mai - 2026 · 21:00\",\"en\":\"Sat, 30 May - 2026 · 21:00\",\"es\":\"Sab, 30 May - 2026 · 21:00\"}\nc6:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\" 4 FLY\",\"id\":\"1477499\",\"url\":\"\",\"email\":\"contato@4fly.art.br\",\"organizer_range_id\":\"1\"}\nc7:{\"pt\":\"Dom, 31 Mai - 2026 · 07:00\",\"en\":\"Sun, 31 May - 2026 · 07:00\",\"es\":\"Dom, 31 May - 2026 · 07:00\"}\nc8:{\"country\":\"BRASIL\",\"address\":\"Avenida Rodrigues Alves\",\"address_alt\":\"\",\"city\":\"Rio de Janeiro\",\"address_num\":\"0\",\"name\":\"Armazém 5\",\"lon\":-43.188194,\"state\":\"RJ\",\"neighborhood\":\"\",\"zip_code\":\"20220-560\",\"lat\":-22.8940361}\nc3:{\"end_date\":\"2026-05-31T10:00:00+00:00\",\"images\":\"$c4\",\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/love-sessions-festival-2026/3321037\",\"start_date_formats\":\"$c5\",\"organizer\":\"$c6\",\"end_date_formats\":\"$c7\",\"name\":\"Love Sessions Festival 2026\",\"company\":\"sympla\",\"location\":\"$c8\",\"id\":3321037,\"start_date\":\"2026-05-31T00:00:00+00:00\",\"event_type\":\"NORMAL\"}\nca:{\"original\":\"https://images.sympla.com.br/69ddb254f23e4.png\",\"xs\":\"https://images.sympla.com.br/69ddb254f23e4-xs.png\",\"lg\":\"https://images.sympla.com.br/69ddb254f23e4-lg.png\"}\ncb:{\"pt\":\"Sab, 08 Ago - 2026 · 13:00\",\"en\":\"Sat, 08 Aug - 2026 · 13:00\",\"es\":\"Sab, 08 Ago - 2026 · 13:00\"}\ncc:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Híbrido Comunicação e Cultura\",\"id\":\"2058\",\"url\":\"\",\"email\":\"festivalsensacional@gmail.com\",\"organizer_range_id\":\"1\"}\ncd:{\"pt\":\"Dom, 09 Ago - 2026 · 20:00\",\"en\":\"Sun, 09 Aug - 2026 · 20:00\",\"es\":\"Dom, 09 Ago - 2026 · 20:00\"}\nce:{\"country\":\"BRASIL\",\"address\":\"Avenida Otacílio Negrão de Lima\",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"6061\",\"na"])</script><script>self.__next_f.push([1,"me\":\"Parque Ecológico Francisco Lins do Rêgo (Parque Ecológico da Pampulha)\",\"lon\":-43.9968814,\"state\":\"MG\",\"neighborhood\":\"\",\"zip_code\":\"31365-450\",\"lat\":-19.852934}\nc9:{\"end_date\":\"2026-08-09T23:00:00+00:00\",\"images\":\"$ca\",\"global_score\":468617,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/festival-sensacional-2026/3043855\",\"start_date_formats\":\"$cb\",\"organizer\":\"$cc\",\"end_date_formats\":\"$cd\",\"name\":\"FESTIVAL SENSACIONAL! 2026\",\"company\":\"sympla\",\"location\":\"$ce\",\"id\":3043855,\"start_date\":\"2026-08-08T16:00:00+00:00\",\"event_type\":\"NORMAL\"}\nd0:{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/ttjim3rsc06urqq8c08fcsl2iq3hg00v337bh95fj92j8iauushqgq5fuge7m7gdkhq2b60h8asfq8k79raiahsvvst22u7t5a5su3.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/ttjim3rsc06urqq8c08fcsl2iq3hg00v337bh95fj92j8iauushqgq5fuge7m7gdkhq2b60h8asfq8k79raiahsvvst22u7t5a5su3.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/ttjim3rsc06urqq8c08fcsl2iq3hg00v337bh95fj92j8iauushqgq5fuge7m7gdkhq2b60h8asfq8k79raiahsvvst22u7t5a5su3.jpeg\"}\nd1:{\"pt\":\"Sex, 21 Ago - 2026 · 20:00\",\"en\":\"Fri, 21 Aug - 2026 · 20:00\",\"es\":\"Vie, 21 Ago - 2026 · 20:00\"}\nd2:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"SALVADOR PRODUCOES \u0026 ENTRETENIMENTOS\",\"id\":\"5290\",\"url\":\"\",\"email\":\"michelle.marchesini@salvadorproducoes.com.br\",\"organizer_range_id\":\"1\"}\nd3:{\"pt\":\"Dom, 23 Ago - 2026 · 17:00\",\"en\":\"Sun, 23 Aug - 2026 · 17:00\",\"es\":\"Dom, 23 Ago - 2026 · 17:00\"}\nd4:{\"country\":\"\",\"address\":\"Av. Siqueira Campos, 1320\",\"address_alt\":\"\",\"city\":\"Vitória da Conquista\",\"address_num\":\"0\",\"name\":\"Parque de Exposições Teopompo de Almeida\",\"lon\":-40.8329142,\"state\":\"BA\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-14.8602501}\ncf:{\"end_date\":\"2026-08-23T20:00:00+00:00\",\"images\":\"$d0\",\"global_score\":653103,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/119972\",\"start_date_formats\":\"$d1\",\"organizer\":\"$d2\",\"end_date_formats\":\"$d3\",\"name\":\"FEST"])</script><script>self.__next_f.push([1,"IVAL DE INVERNO BAHIA 2026\",\"company\":\"ttrs\",\"location\":\"$d4\",\"id\":50119972,\"start_date\":\"2026-08-21T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\nd6:{\"original\":\"https://images.sympla.com.br/69bb3171598b5.jpg\",\"xs\":\"https://images.sympla.com.br/69bb3171598b5-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69bb3171598b5-lg.jpg\"}\nd7:{\"pt\":\"Sab, 06 Jun - 2026 · 16:00\",\"en\":\"Sat, 06 Jun - 2026 · 16:00\",\"es\":\"Sab, 06 Jun - 2026 · 16:00\"}\nd8:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Willyan Ruschel Produções \u0026 Eventos\",\"id\":\"18784756\",\"url\":\"\",\"email\":\"Wil.Ruschel@gmail.com\",\"organizer_range_id\":\"1\"}\nd9:{\"pt\":\"Dom, 07 Jun - 2026 · 03:00\",\"en\":\"Sun, 07 Jun - 2026 · 03:00\",\"es\":\"Dom, 07 Jun - 2026 · 03:00\"}\nda:{\"country\":\"BRASIL\",\"address\":\"Travessia Engenheiro Régis Bitencourt\",\"address_alt\":\"\",\"city\":\"Ilha do Pavão\",\"address_num\":\"1101\",\"name\":\"Marina Navegantes São João\",\"lon\":-51.2173798,\"state\":\"RS\",\"neighborhood\":\"Arquipélago\",\"zip_code\":\"90090-360\",\"lat\":-29.9992361}\nd5:{\"end_date\":\"2026-06-07T06:00:00+00:00\",\"images\":\"$d6\",\"global_score\":443272,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/fabric/3331109\",\"start_date_formats\":\"$d7\",\"organizer\":\"$d8\",\"end_date_formats\":\"$d9\",\"name\":\"FABRIC\",\"company\":\"sympla\",\"location\":\"$da\",\"id\":3331109,\"start_date\":\"2026-06-06T19:00:00+00:00\",\"event_type\":\"NORMAL\"}\ndc:{\"original\":\"https://images.sympla.com.br/68fbca0aaa9a7.png\",\"xs\":\"https://images.sympla.com.br/68fbca0aaa9a7-xs.png\",\"lg\":\"https://images.sympla.com.br/68fbca0aaa9a7-lg.png\"}\ndd:{\"pt\":\"Sab, 11 Jul - 2026 · 10:00\",\"en\":\"Sat, 11 Jul - 2026 · 10:00\",\"es\":\"Sab, 11 Jul - 2026 · 10:00\"}\nde:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"WR São Paulo\",\"id\":\"22164272\",\"url\":\"\",\"email\":\"financeiro@wrsaopaulo.com.br\",\"organizer_range_id\":\"1\"}\ndf:{\"pt\":\"Qua, 15 Jul - 2026 · 18:00\",\"en\":\"Wed, 15 Jul - 2026 · 18:00\",\"es\":\"Mie, 15 Jul - 2026 · 18:00\"}\ne0:{\"country\":\"BRASIL\",\"address\":\"Rodovia dos Imigrantes, 1,5 km \",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"0"])</script><script>self.__next_f.push([1,"\",\"name\":\"São Paulo Expo\",\"lon\":-46.6292673,\"state\":\"SP\",\"neighborhood\":\"Vila Água Funda\",\"zip_code\":\"04329-900\",\"lat\":-23.6465224}\ndb:{\"end_date\":\"2026-07-15T21:00:00+00:00\",\"images\":\"$dc\",\"global_score\":460064,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/mega-artesanal-2026/3187546\",\"start_date_formats\":\"$dd\",\"organizer\":\"$de\",\"end_date_formats\":\"$df\",\"name\":\"MEGA ARTESANAL 2026\",\"company\":\"sympla\",\"location\":\"$e0\",\"id\":3187546,\"start_date\":\"2026-07-11T13:00:00+00:00\",\"event_type\":\"NORMAL\"}\ne2:{\"original\":\"https://images.sympla.com.br/69a98ba31a041.png\",\"xs\":\"https://images.sympla.com.br/69a98ba31a041-xs.png\",\"lg\":\"https://images.sympla.com.br/69a98ba31a041-lg.png\"}\ne3:{\"pt\":\"Sab, 13 Jun - 2026 · 15:00\",\"en\":\"Sat, 13 Jun - 2026 · 15:00\",\"es\":\"Sab, 13 Jun - 2026 · 15:00\"}\ne4:{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"CWB Brasil\",\"id\":\"2225570\",\"url\":\"\",\"email\":\"marina@cwbbrasil.com.br\",\"organizer_range_id\":\"3\"}\ne5:{\"pt\":\"Dom, 19 Jul - 2026 · 22:30\",\"en\":\"Sun, 19 Jul - 2026 · 22:30\",\"es\":\"Dom, 19 Jul - 2026 · 22:30\"}\ne6:{\"country\":\"BRASIL\",\"address\":\"Rua Pedro de Araújo Franco\",\"address_alt\":\"\",\"city\":\"Curitiba\",\"address_num\":\"23\",\"name\":\"COMPLEXO DURIVAL DE BRITTO E SILVA\",\"lon\":-49.2546779,\"state\":\"PR\",\"neighborhood\":\"JARDIM BOTÂNICO\",\"zip_code\":\"82860-140\",\"lat\":-25.439497}\ne1:{\"end_date\":\"2026-07-20T01:30:00+00:00\",\"images\":\"$e2\",\"global_score\":67791,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/ginga-curitiba/3334449\",\"start_date_formats\":\"$e3\",\"organizer\":\"$e4\",\"end_date_formats\":\"$e5\",\"name\":\"GINGA CURITIBA\",\"company\":\"sympla\",\"location\":\"$e6\",\"id\":3334449,\"start_date\":\"2026-06-13T18:00:00+00:00\",\"event_type\":\"NORMAL\"}\ne8:{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3mlmvua42opthcbrrd4q6l4ijr7oako1bramllbvi8utv817k5sendf01bs46f3sil0nvadckadh3k4o750mii9onh3fqfl1j2bgur6.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3mlmvua42opthcbrrd4q6l4ijr7oako1bramllbvi8utv817k5"])</script><script>self.__next_f.push([1,"sendf01bs46f3sil0nvadckadh3k4o750mii9onh3fqfl1j2bgur6.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3mlmvua42opthcbrrd4q6l4ijr7oako1bramllbvi8utv817k5sendf01bs46f3sil0nvadckadh3k4o750mii9onh3fqfl1j2bgur6.jpeg\"}\ne9:{\"pt\":\"Sab, 06 Jun - 2026 · 20:30\",\"en\":\"Sat, 06 Jun - 2026 · 20:30\",\"es\":\"Sab, 06 Jun - 2026 · 20:30\"}\nea:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Casa Natura\",\"id\":\"4006\",\"url\":\"\",\"email\":\"bilheteria@casanaturamusical.com.br\",\"organizer_range_id\":\"1\"}\neb:{\"pt\":\"Sab, 06 Jun - 2026 · 20:30\",\"en\":\"Sat, 06 Jun - 2026 · 20:30\",\"es\":\"Sab, 06 Jun - 2026 · 20:30\"}\nec:{\"country\":\"\",\"address\":\"Rua Artur de Azevedo, 2134\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"0\",\"name\":\"Casa Natura Musical\",\"lon\":-46.6908821,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-23.5677992}\ne7:{\"end_date\":\"2026-06-06T23:30:00+00:00\",\"images\":\"$e8\",\"global_score\":616190,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/121039\",\"start_date_formats\":\"$e9\",\"organizer\":\"$ea\",\"end_date_formats\":\"$eb\",\"name\":\"Venere Vai Venus + HOZE\",\"company\":\"ttrs\",\"location\":\"$ec\",\"id\":50121039,\"start_date\":\"2026-06-06T23:30:00+00:00\",\"event_type\":\"NORMAL\"}\nee:{\"original\":\"https://images.sympla.com.br/69a5eae304b07.png\",\"xs\":\"https://images.sympla.com.br/69a5eae304b07-xs.png\",\"lg\":\"https://images.sympla.com.br/69a5eae304b07-lg.png\"}\nef:{\"pt\":\"Sab, 13 Jun - 2026 · 17:00\",\"en\":\"Sat, 13 Jun - 2026 · 17:00\",\"es\":\"Sab, 13 Jun - 2026 · 17:00\"}\nf0:{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"Pedro Augusto Silva Prestes\",\"id\":\"316992626\",\"url\":\"\",\"email\":\"pedro.prestes@holdingclube.com.br\",\"organizer_range_id\":\"3\"}\nf1:{\"pt\":\"Qui, 25 Jun - 2026 · 01:00\",\"en\":\"Thu, 25 Jun - 2026 · 01:00\",\"es\":\"Jue, 25 Jun - 2026 · 01:00\"}\nf2:{\"country\":\"BRASIL\",\"address\":\"Avenida Lineu de Paula Machado\",\"address_alt\":\"Entrada Principal\",\"city\":\"São Paulo\",\"address_num\":\"1263\",\"name\":\"Jockey Club de São Paulo\",\"lon\":-46.6987254,\"state\":\"SP\",\"neighborhood\":\"Cidade Jardim\",\"zip_co"])</script><script>self.__next_f.push([1,"de\":\"05601-000\",\"lat\":-23.5830857}\ned:{\"end_date\":\"2026-06-25T04:00:00+00:00\",\"images\":\"$ee\",\"global_score\":34630,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/torcida-n1/3330600\",\"start_date_formats\":\"$ef\",\"organizer\":\"$f0\",\"end_date_formats\":\"$f1\",\"name\":\"Torcida N1\",\"company\":\"sympla\",\"location\":\"$f2\",\"id\":3330600,\"start_date\":\"2026-06-13T20:00:00+00:00\",\"event_type\":\"NORMAL\"}\nf4:{\"original\":\"https://images.sympla.com.br/6a04cac9ab69b.png\",\"xs\":\"https://images.sympla.com.br/6a04cac9ab69b-xs.png\",\"lg\":\"https://images.sympla.com.br/6a04cac9ab69b-lg.png\"}\nf5:{\"pt\":\"Sab, 13 Jun - 2026 · 17:00\",\"en\":\"Sat, 13 Jun - 2026 · 17:00\",\"es\":\"Sab, 13 Jun - 2026 · 17:00\"}\nf6:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"naCidade\",\"id\":\"10951576\",\"url\":\"\",\"email\":\"nacidade@nasala.com.br\",\"organizer_range_id\":\"1\"}\nf7:{\"pt\":\"Dom, 14 Jun - 2026 · 02:00\",\"en\":\"Sun, 14 Jun - 2026 · 02:00\",\"es\":\"Dom, 14 Jun - 2026 · 02:00\"}\nf8:{\"country\":\"BRASIL\",\"address\":\"Olhos D'Água, Belo Horizonte \",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"0\",\"name\":\"Mirante Beagá\",\"lon\":-43.9676464,\"state\":\"MG\",\"neighborhood\":\"Olhos d'Água\",\"zip_code\":\"30390-082\",\"lat\":-19.9860847}\nf3:{\"end_date\":\"2026-06-14T05:00:00+00:00\",\"images\":\"$f4\",\"global_score\":462383,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/na-cidade-junina-joao-gomes/3343636\",\"start_date_formats\":\"$f5\",\"organizer\":\"$f6\",\"end_date_formats\":\"$f7\",\"name\":\"na Cidade Junina  João Gomes\",\"company\":\"sympla\",\"location\":\"$f8\",\"id\":3343636,\"start_date\":\"2026-06-13T20:00:00+00:00\",\"event_type\":\"NORMAL\"}\nfa:{\"original\":\"https://images.sympla.com.br/69eae6509adaa.jpg\",\"xs\":\"https://images.sympla.com.br/69eae6509adaa-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69eae6509adaa-lg.jpg\"}\nfb:{\"pt\":\"Seg, 11 Mai - 2026 · 14:26\",\"en\":\"Mon, 11 May - 2026 · 14:26\",\"es\":\"Lun, 11 May - 2026 · 14:26\"}\nfc:{\"image\":\"\",\"organizer_range\":\"MID_TAIL\",\"name\":\"ICCARUS\",\"id\":\"315636570\",\"url\":\"\",\"email\":\"iccarusbar@gmail.com\","])</script><script>self.__next_f.push([1,"\"organizer_range_id\":\"2\"}\nfd:{\"pt\":\"Dom, 31 Mai - 2026 · 00:30\",\"en\":\"Sun, 31 May - 2026 · 00:30\",\"es\":\"Dom, 31 May - 2026 · 00:30\"}\nfe:{\"country\":\"BRASIL\",\"address\":\"Praca Pedro Lessa\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"110\",\"name\":\"Iccarus\",\"lon\":-46.6354859,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"01032-030\",\"lat\":-23.5421386}\nf9:{\"end_date\":\"2026-05-31T03:30:00+00:00\",\"images\":\"$fa\",\"global_score\":465956,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/iccarus-maio-2026/3398318\",\"start_date_formats\":\"$fb\",\"organizer\":\"$fc\",\"end_date_formats\":\"$fd\",\"name\":\"ICCARUS - MAIO 2026\",\"company\":\"sympla\",\"location\":\"$fe\",\"id\":3398318,\"start_date\":\"2026-05-11T17:26:00+00:00\",\"event_type\":\"NORMAL\"}\n100:{\"original\":\"https://images.sympla.com.br/69ecc92286228.jpg\",\"xs\":\"https://images.sympla.com.br/69ecc92286228-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69ecc92286228-lg.jpg\"}\n101:{\"pt\":\"Sex, 19 Jun - 2026 · 17:00\",\"en\":\"Fri, 19 Jun - 2026 · 17:00\",\"es\":\"Vie, 19 Jun - 2026 · 17:00\"}\n102:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Carvalheira Memories\",\"id\":\"317427828\",\"url\":\"\",\"email\":\"sympla.amr27@carvalheira.com.br\",\"organizer_range_id\":\"1\"}\n103:{\"pt\":\"Dom, 21 Jun - 2026 · 06:00\",\"en\":\"Sun, 21 Jun - 2026 · 06:00\",\"es\":\"Dom, 21 Jun - 2026 · 06:00\"}\n104:{\"country\":\"BRASIL\",\"address\":\"Vila Forró\",\"address_alt\":\"\",\"city\":\"Lagoa Seca\",\"address_num\":\"27\",\"name\":\"Vila Forró\",\"lon\":-35.875771,\"state\":\"PB\",\"neighborhood\":\"\",\"zip_code\":\"58402-797\",\"lat\":-7.1807429}\nff:{\"end_date\":\"2026-06-21T09:00:00+00:00\",\"images\":\"$100\",\"global_score\":465724,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/carvalheira-na-fogueira-vila-forro-2026/3399926\",\"start_date_formats\":\"$101\",\"organizer\":\"$102\",\"end_date_formats\":\"$103\",\"name\":\"Carvalheira Na Fogueira Vila Forró 2026\",\"company\":\"sympla\",\"location\":\"$104\",\"id\":3399926,\"start_date\":\"2026-06-19T20:00:00+00:00\",\"event_type\":\"NORMAL\"}\n106:{\"original\":\"https://images.sympla.com.br/69fdfc93"])</script><script>self.__next_f.push([1,"60e30.png\",\"xs\":\"https://images.sympla.com.br/69fdfc9360e30-xs.png\",\"lg\":\"https://images.sympla.com.br/69fdfc9360e30-lg.png\"}\n107:{\"pt\":\"Sab, 01 Ago - 2026 · 20:00\",\"en\":\"Sat, 01 Aug - 2026 · 20:00\",\"es\":\"Sab, 01 Ago - 2026 · 20:00\"}\n108:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"CLUB415\",\"id\":\"274151\",\"url\":\"\",\"email\":\"sac@otmproducoes.com.br\",\"organizer_range_id\":\"1\"}\n109:{\"pt\":\"Dom, 02 Ago - 2026 · 04:00\",\"en\":\"Sun, 02 Aug - 2026 · 04:00\",\"es\":\"Dom, 02 Ago - 2026 · 04:00\"}\n10a:{\"country\":\"BRASIL\",\"address\":\"Rua Star\",\"address_alt\":\"\",\"city\":\"Nova Lima\",\"address_num\":\"415\",\"name\":\"Club 415\",\"lon\":-43.9756209,\"state\":\"MG\",\"neighborhood\":\"Jardim Canada\",\"zip_code\":\"34007-666\",\"lat\":-20.0627639}\n105:{\"end_date\":\"2026-08-02T07:00:00+00:00\",\"images\":\"$106\",\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/dubdogz-apresenta-nostalgia-no-club415/3418143\",\"start_date_formats\":\"$107\",\"organizer\":\"$108\",\"end_date_formats\":\"$109\",\"name\":\"Dubdogz apresenta: Nostalgia no Club415\",\"company\":\"sympla\",\"location\":\"$10a\",\"id\":3418143,\"start_date\":\"2026-08-01T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n10c:{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3eui45027iqk93muo7diu59l3m66ld6aouhb7m4plk12jotb1n1i0mv371lpn7jf7pgues5tm15c5ivvk3aj41npdcpakembidokehg.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3eui45027iqk93muo7diu59l3m66ld6aouhb7m4plk12jotb1n1i0mv371lpn7jf7pgues5tm15c5ivvk3aj41npdcpakembidokehg.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3eui45027iqk93muo7diu59l3m66ld6aouhb7m4plk12jotb1n1i0mv371lpn7jf7pgues5tm15c5ivvk3aj41npdcpakembidokehg.jpeg\"}\n10d:{\"pt\":\"Sex, 22 Mai - 2026 · 19:30\",\"en\":\"Fri, 22 May - 2026 · 19:30\",\"es\":\"Vie, 22 May - 2026 · 19:30\"}\n10e:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Igor Farias atividades circenses\",\"id\":\"497\",\"url\":\"\",\"email\":\"brunobetsos@gmail.com\",\"organizer_range_id\":\"1\"}\n10f:{\"pt\":\"Dom, 14 Jun - 2026 · 17:00\",\"en\":\"Sun, 14 Jun - 202"])</script><script>self.__next_f.push([1,"6 · 17:00\",\"es\":\"Dom, 14 Jun - 2026 · 17:00\"}\n110:{\"country\":\"\",\"address\":\"Av. Deputado Benedito Matarazzo,9403\",\"address_alt\":\"\",\"city\":\"São José dos Campos\",\"address_num\":\"0\",\"name\":\"Estacionamento do CenterVale Shopping\",\"lon\":-45.8852416,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-23.2008868}\n10b:{\"end_date\":\"2026-06-14T20:00:00+00:00\",\"images\":\"$10c\",\"global_score\":607428,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/118947\",\"start_date_formats\":\"$10d\",\"organizer\":\"$10e\",\"end_date_formats\":\"$10f\",\"name\":\"Patati Patatá Circo Show -  São José dos Campos\",\"company\":\"ttrs\",\"location\":\"$110\",\"id\":50118947,\"start_date\":\"2026-05-22T22:30:00+00:00\",\"event_type\":\"NORMAL\"}\n112:{\"original\":\"https://images.sympla.com.br/696a50db1ac77.jpg\",\"xs\":\"https://images.sympla.com.br/696a50db1ac77-xs.jpg\",\"lg\":\"https://images.sympla.com.br/696a50db1ac77-lg.jpg\"}\n113:{\"pt\":\"Sex, 30 Out - 2026 · 16:00\",\"en\":\"Fri, 30 Oct - 2026 · 16:00\",\"es\":\"Vie, 30 Oct - 2026 · 16:00\"}\n114:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Rock the Mountain\",\"id\":\"241748\",\"url\":\"\",\"email\":\"contato@vibramarketing.com.br\",\"organizer_range_id\":\"1\"}\n115:{\"pt\":\"Seg, 02 Nov - 2026 · 02:00\",\"en\":\"Mon, 02 Nov - 2026 · 02:00\",\"es\":\"Lun, 02 Nov - 2026 · 02:00\"}\n116:{\"country\":\"BRASIL\",\"address\":\"Estrada União e Indústria\",\"address_alt\":\"\",\"city\":\"Petrópolis\",\"address_num\":\"10000\",\"name\":\"Parque Municipal Prefeito Paulo Rattes\",\"lon\":-43.1347527,\"state\":\"RJ\",\"neighborhood\":\"Itaipava\",\"zip_code\":\"25730-745\",\"lat\":-22.4026516}\n111:{\"end_date\":\"2026-11-02T05:00:00+00:00\",\"images\":\"$112\",\"global_score\":454240,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/rock-the-mountain-2026-1o-final-de-semana/3091109\",\"start_date_formats\":\"$113\",\"organizer\":\"$114\",\"end_date_formats\":\"$115\",\"name\":\"Rock the Mountain 2026 : 1º Final de Semana\",\"company\":\"sympla\",\"location\":\"$116\",\"id\":3091109,\"start_date\":\"2026-10-30T19:00:00+00:00\",\"event_type\":\"NORMAL\"}\n118:{\"original\":\"https:"])</script><script>self.__next_f.push([1,"//images.sympla.com.br/6a0eebf939903.png\",\"xs\":\"https://images.sympla.com.br/6a0eebf939903-xs.png\",\"lg\":\"https://images.sympla.com.br/6a0eebf939903-lg.png\"}\n119:{\"pt\":\"Dom, 13 Set - 2026 · 06:00\",\"en\":\"Sun, 13 Sep - 2026 · 06:00\",\"es\":\"Dom, 13 Sep - 2026 · 06:00\"}\n11a:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"+B Supermercados\",\"id\":\"315264096\",\"url\":\"\",\"email\":\"marketing02@grupomaisbarato.com.br\",\"organizer_range_id\":\"1\"}\n11b:{\"pt\":\"Dom, 13 Set - 2026 · 11:00\",\"en\":\"Sun, 13 Sep - 2026 · 11:00\",\"es\":\"Dom, 13 Sep - 2026 · 11:00\"}\n11c:{\"country\":\"BRASIL\",\"address\":\"Avenida Centenário\",\"address_alt\":\"\",\"city\":\"Belém\",\"address_num\":\"1052\",\"name\":\"Shopping Bosque Grão-Pará\",\"lon\":-48.4644747,\"state\":\"PA\",\"neighborhood\":\"Val-de-Cans\",\"zip_code\":\"66640-150\",\"lat\":-1.388357}\n117:{\"end_date\":\"2026-09-13T14:00:00+00:00\",\"images\":\"$118\",\"global_score\":380834,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/b-run-3deg-edicao/3380391\",\"start_date_formats\":\"$119\",\"organizer\":\"$11a\",\"end_date_formats\":\"$11b\",\"name\":\"+B RUN - 3° Edição\",\"company\":\"sympla\",\"location\":\"$11c\",\"id\":3380391,\"start_date\":\"2026-09-13T09:00:00+00:00\",\"event_type\":\"NORMAL\"}\n11e:{\"original\":\"https://images.sympla.com.br/69dfd40c7c47a.jpg\",\"xs\":\"https://images.sympla.com.br/69dfd40c7c47a-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69dfd40c7c47a-lg.jpg\"}\n11f:{\"pt\":\"Sab, 01 Ago - 2026 · 14:00\",\"en\":\"Sat, 01 Aug - 2026 · 14:00\",\"es\":\"Sab, 01 Ago - 2026 · 14:00\"}\n120:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Trio Produtora \",\"id\":\"2462035\",\"url\":\"\",\"email\":\"administrativo@trioprodutora.com.br\",\"organizer_range_id\":\"1\"}\n121:{\"pt\":\"Sab, 01 Ago - 2026 · 23:00\",\"en\":\"Sat, 01 Aug - 2026 · 23:00\",\"es\":\"Sab, 01 Ago - 2026 · 23:00\"}\n122:{\"country\":\"BRASIL\",\"address\":\"Olhos D'Água, Belo Horizonte \",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"0\",\"name\":\"Mirante Beagá\",\"lon\":-43.9676464,\"state\":\"MG\",\"neighborhood\":\"Olhos d'Água\",\"zip_code\":\"30390-082\",\"lat\":-19.9860847}\n11d:{\"end_date\":\"2"])</script><script>self.__next_f.push([1,"026-08-02T02:00:00+00:00\",\"images\":\"$11e\",\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/bloco-vumbora-belo-horizonte-2026/3386560\",\"start_date_formats\":\"$11f\",\"organizer\":\"$120\",\"end_date_formats\":\"$121\",\"name\":\"BLOCO VUMBORA BELO HORIZONTE 2026\",\"company\":\"sympla\",\"location\":\"$122\",\"id\":3386560,\"start_date\":\"2026-08-01T17:00:00+00:00\",\"event_type\":\"NORMAL\"}\n124:{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3f8nbh52oevn5elboate5m148j1co1bfmldsfehi5nhvrf8a8cl0hi20t557bp5c276ma5frt2v87a7rqikv2iag15kf92vul6e7f7k.webp\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3f8nbh52oevn5elboate5m148j1co1bfmldsfehi5nhvrf8a8cl0hi20t557bp5c276ma5frt2v87a7rqikv2iag15kf92vul6e7f7k.webp\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3f8nbh52oevn5elboate5m148j1co1bfmldsfehi5nhvrf8a8cl0hi20t557bp5c276ma5frt2v87a7rqikv2iag15kf92vul6e7f7k.webp\"}\n125:{\"pt\":\"Sex, 22 Mai - 2026 · 20:00\",\"en\":\"Fri, 22 May - 2026 · 20:00\",\"es\":\"Vie, 22 May - 2026 · 20:00\"}\n126:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"TEATRO PORTO SEGURO\",\"id\":\"4549\",\"url\":\"\",\"email\":\"halicia@teatroportoseguro.com.br\",\"organizer_range_id\":\"1\"}\n127:{\"pt\":\"Dom, 30 Ago - 2026 · 17:00\",\"en\":\"Sun, 30 Aug - 2026 · 17:00\",\"es\":\"Dom, 30 Ago - 2026 · 17:00\"}\n128:{\"country\":\"\",\"address\":\"Alameda Barão de Piracicaba, 740\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"0\",\"name\":\"Teatro Porto\",\"lon\":-46.6442583,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-23.5322304}\n123:{\"end_date\":\"2026-08-30T20:00:00+00:00\",\"images\":\"$124\",\"global_score\":636324,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/116591\",\"start_date_formats\":\"$125\",\"organizer\":\"$126\",\"end_date_formats\":\"$127\",\"name\":\"RITA LEE, UMA AUTOBIOGRAFIA MUSICAL - 2026\",\"company\":\"ttrs\",\"location\":\"$128\",\"id\":50116591,\"start_date\":\"2026-05-22T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n12a:{\"original\":\"https://images.sympla.com.br/69cbb90206ff0.png\","])</script><script>self.__next_f.push([1,"\"xs\":\"https://images.sympla.com.br/69cbb90206ff0-xs.png\",\"lg\":\"https://images.sympla.com.br/69cbb90206ff0-lg.png\"}\n12b:{\"pt\":\"Sex, 12 Jun - 2026 · 22:00\",\"en\":\"Fri, 12 Jun - 2026 · 22:00\",\"es\":\"Vie, 12 Jun - 2026 · 22:00\"}\n12c:{\"image\":\"\",\"organizer_range\":\"MID_TAIL\",\"name\":\"Opinião Produtora\",\"id\":\"2717842\",\"url\":\"\",\"email\":\"sympla@opiniao.com.br\",\"organizer_range_id\":\"2\"}\n12d:{\"pt\":\"Sab, 13 Jun - 2026 · 05:00\",\"en\":\"Sat, 13 Jun - 2026 · 05:00\",\"es\":\"Sab, 13 Jun - 2026 · 05:00\"}\n12e:{\"country\":\"BRASIL\",\"address\":\"Avenida Severo Dullius\",\"address_alt\":\"\",\"city\":\"Porto Alegre\",\"address_num\":\"1995\",\"name\":\"KTO Arena\",\"lon\":-51.1768024,\"state\":\"RS\",\"neighborhood\":\"\",\"zip_code\":\"90200-310\",\"lat\":-29.9875985}\n129:{\"end_date\":\"2026-06-13T08:00:00+00:00\",\"images\":\"$12a\",\"global_score\":406719,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/livinho-tour-fazer-falta-12-06/3368805\",\"start_date_formats\":\"$12b\",\"organizer\":\"$12c\",\"end_date_formats\":\"$12d\",\"name\":\"Livinho // tour FAZER FALTA // 12.06\",\"company\":\"sympla\",\"location\":\"$12e\",\"id\":3368805,\"start_date\":\"2026-06-13T01:00:00+00:00\",\"event_type\":\"NORMAL\"}\n130:{\"original\":\"https://images.sympla.com.br/69b071b14edb4.jpg\",\"xs\":\"https://images.sympla.com.br/69b071b14edb4-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69b071b14edb4-lg.jpg\"}\n131:{\"pt\":\"Qui, 28 Mai - 2026 · 17:00\",\"en\":\"Thu, 28 May - 2026 · 17:00\",\"es\":\"Jue, 28 May - 2026 · 17:00\"}\n132:{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"ESA/OAB-BA\",\"id\":\"916521\",\"url\":\"\",\"email\":\"faleconoscoesa@oab-ba.org.br\",\"organizer_range_id\":\"3\"}\n133:{\"pt\":\"Sex, 29 Mai - 2026 · 18:00\",\"en\":\"Fri, 29 May - 2026 · 18:00\",\"es\":\"Vie, 29 May - 2026 · 18:00\"}\n134:{\"country\":\"BRASIL\",\"address\":\"Avenida Octávio Mangabeira\",\"address_alt\":\"\",\"city\":\"Salvador\",\"address_num\":\"5.490\",\"name\":\"Centro de Convenções Salvador\",\"lon\":-38.4330346,\"state\":\"BA\",\"neighborhood\":\"\",\"zip_code\":\"41706-690\",\"lat\":-12.9838422}\n12f:{\"end_date\":\"2026-05-29T21:00:00+00:00\",\"images\":\"$130\",\"global_score\":417416,"])</script><script>self.__next_f.push([1,"\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/i-congresso-de-direito-previdenciario/3317836\",\"start_date_formats\":\"$131\",\"organizer\":\"$132\",\"end_date_formats\":\"$133\",\"name\":\"I Congresso de Direito Previdenciário\",\"company\":\"sympla\",\"location\":\"$134\",\"id\":3317836,\"start_date\":\"2026-05-28T20:00:00+00:00\",\"event_type\":\"NORMAL\"}\n136:{\"original\":\"https://images.sympla.com.br/6a0e129322d18.png\",\"xs\":\"https://images.sympla.com.br/6a0e129322d18-xs.png\",\"lg\":\"https://images.sympla.com.br/6a0e129322d18-lg.png\"}\n137:{\"pt\":\"Qui, 11 Jun - 2026 · 20:00\",\"en\":\"Thu, 11 Jun - 2026 · 20:00\",\"es\":\"Jue, 11 Jun - 2026 · 20:00\"}\n138:{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"Panicats Nervosas\",\"id\":\"19958851\",\"url\":\"\",\"email\":\"ferreiranicolas@icloud.com\",\"organizer_range_id\":\"3\"}\n139:{\"pt\":\"Qui, 11 Jun - 2026 · 21:00\",\"en\":\"Thu, 11 Jun - 2026 · 21:00\",\"es\":\"Jue, 11 Jun - 2026 · 21:00\"}\n13a:{\"country\":\"BRASIL\",\"address\":\"Rua Coelho Lisboa\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"430\",\"name\":\"Blanco Rooftop\",\"lon\":-46.572232,\"state\":\"SP\",\"neighborhood\":\"Cidade Mãe do Céu\",\"zip_code\":\"03323-040\",\"lat\":-23.5480935}\n135:{\"end_date\":\"2026-06-12T00:00:00+00:00\",\"images\":\"$136\",\"global_score\":367610,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/bailao-das-panicats-nervosas-aula-noturna/3433079\",\"start_date_formats\":\"$137\",\"organizer\":\"$138\",\"end_date_formats\":\"$139\",\"name\":\"Bailão das Panicats Nervosas (Aula Noturna)\",\"company\":\"sympla\",\"location\":\"$13a\",\"id\":3433079,\"start_date\":\"2026-06-11T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\n13c:{\"original\":\"https://images.sympla.com.br/69fc9c0a44165.png\",\"xs\":\"https://images.sympla.com.br/69fc9c0a44165-xs.png\",\"lg\":\"https://images.sympla.com.br/69fc9c0a44165-lg.png\"}\n13d:{\"pt\":\"Sab, 15 Ago - 2026 · 20:00\",\"en\":\"Sat, 15 Aug - 2026 · 20:00\",\"es\":\"Sab, 15 Ago - 2026 · 20:00\"}\n13e:{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Trio Produtora \",\"id\":\"2462035\",\"url\":\"\",\"email\":\"administrativo@trioprodu"])</script><script>self.__next_f.push([1,"tora.com.br\",\"organizer_range_id\":\"1\"}\n13f:{\"pt\":\"Dom, 16 Ago - 2026 · 02:00\",\"en\":\"Sun, 16 Aug - 2026 · 02:00\",\"es\":\"Dom, 16 Ago - 2026 · 02:00\"}\n140:{\"country\":\"BRASIL\",\"address\":\"Praça Vicentino Rodrigues da Cunha\",\"address_alt\":\"\",\"city\":\"Uberaba\",\"address_num\":\"110\",\"name\":\"Parque Fernando Costa\",\"lon\":-47.9455157,\"state\":\"MG\",\"neighborhood\":\"Jardim São Benedito\",\"zip_code\":\"38022-330\",\"lat\":-19.7697429}\n13b:{\"end_date\":\"2026-08-16T05:00:00+00:00\",\"images\":\"$13c\",\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/cabare-turne-de-despedida/3416601\",\"start_date_formats\":\"$13d\",\"organizer\":\"$13e\",\"end_date_formats\":\"$13f\",\"name\":\"CABARÉ - TURNÊ DE DESPEDIDA\",\"company\":\"sympla\",\"location\":\"$140\",\"id\":3416601,\"start_date\":\"2026-08-15T23:00:00+00:00\",\"event_type\":\"NORMAL\"}\nb0:[\"$b1\",\"$b7\",\"$bd\",\"$c3\",\"$c9\",\"$cf\",\"$d5\",\"$db\",\"$e1\",\"$e7\",\"$ed\",\"$f3\",\"$f9\",\"$ff\",\"$105\",\"$10b\",\"$111\",\"$117\",\"$11d\",\"$123\",\"$129\",\"$12f\",\"$135\",\"$13b\"]\naf:{\"data\":\"$b0\",\"total\":10000,\"suggest\":\"\",\"limit\":24,\"page\":1}\nad:{\"is_directory\":true,\"label\":\"Eventos mais comprados nas últimas 24h \",\"response_type\":\"event-card\",\"service\":\"/v4/search/query\",\"service_params\":\"$ae\",\"show_more\":true,\"template\":\"slider\",\"uuid\":\"mais-vistos\",\"seo_description\":\"Confira os eventos mais vistos na Sympla. Festas, shows, teatros, passeios e mais eventos que estão em alta hoje.\",\"seo_title\":\"Eventos Mais Vistos - Em alta Hoje - Sympla\",\"order\":540,\"response\":\"$af\"}\n3d:[\"$3e\",\"$82\",\"$aa\",\"$ad\"]\n3c:{\"description\":\"Plataforma de eventos\",\"label\":\"Home Sympla\",\"seo_description\":\"A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!\",\"seo_title\":\"Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais\",\"slug\":\"home\",\"template\":\"home-matrix\",\"uuid\":\"home\",\"components\":\"$3d\",\"components_total\":16}\n141:{\"title\":\"Seu Título\",\"description\":\"Sua Descrição\"}\n3b:{\"screen\":\"Home\",\"homeResult\":\"$3c\",\"se"])</script><script>self.__next_f.push([1,"oData\":\"$141\"}\n"])</script><script>self.__next_f.push([1,"1d:[\"$\",\"$L31\",null,{\"hydrationData\":{\"cardPreviousView\":{\"recents\":[]},\"authHydration\":{\"userData\":null},\"locationHydration\":{\"selectedLocation\":\"$34\",\"cities\":[]},\"homeHydration\":{\"screen\":\"Home\",\"homeResult\":{\"description\":\"Plataforma de eventos\",\"label\":\"Home Sympla\",\"seo_description\":\"A Sympla é a maior plataforma de eventos no Brasil. Shows, festas, teatros, stand up, cursos e muito mais. Compre ingressos e organize eventos com a Sympla!\",\"seo_title\":\"Sympla - Ingressos para Eventos, Teatros, Shows, Cursos e mais\",\"slug\":\"home\",\"template\":\"home-matrix\",\"uuid\":\"home\",\"components\":[{\"service\":\"/v4/featured\",\"template\":\"carousel\",\"is_directory\":false,\"show_more\":false,\"label\":\"Eventos em destaque na Sympla\",\"response_type\":\"sponsored\",\"uuid\":\"home-sponsored\",\"service_params\":{\"sort\":\"week-trending-score\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"},\"seo_description\":\" \",\"seo_title\":\" \",\"order\":510,\"response\":{\"data\":[{\"featured_id\":4184,\"event_id\":3330600,\"image_url\":\"https://images.sympla.com.br/69a5eae304b07.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/torcida-n1/3330600\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Torcida N1\",\"title_seo\":\"\",\"end_date\":\"2026-06-25T04:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 13 Jun - 2026 · 17:00\",\"en\":\"Sat, 13 Jun - 2026 · 17:00\",\"es\":\"Sab, 13 Jun - 2026 · 17:00\"},\"end_date_formats\":{\"pt\":\"Qui, 25 Jun - 2026 · 01:00\",\"en\":\"Thu, 25 Jun - 2026 · 01:00\",\"es\":\"Jue, 25 Jun - 2026 · 01:00\"},\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":{\"city\":\"São Paulo\",\"name\":\"Jockey Club de São Paulo\",\"state\":\"SP\"},\"start_date\":\"2026-06-13T20:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4263,\"event_id\":3210696,\"image_url\":\"https://images.sympla.com.br/6911e38a4c3c5.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/the-realness-festival-2026-o-maior-festival-drag-da-america-latina/3210696\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"THE REALNESS FESTIVAL 2026 - O maior festival DRAG da América Latina!\",\"title_seo\":\"\",\"end_date\":\"2026-08-30T05:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 29 Ago - 2026 · 20:00\",\"en\":\"Sat, 29 Aug - 2026 · 20:00\",\"es\":\"Sab, 29 Ago - 2026 · 20:00\"},\"end_date_formats\":{\"pt\":\"Dom, 30 Ago - 2026 · 02:00\",\"en\":\"Sun, 30 Aug - 2026 · 02:00\",\"es\":\"Dom, 30 Ago - 2026 · 02:00\"},\"duration_type\":\"single\",\"company\":\"sympla\",\"location\":{\"city\":\"São Paulo\",\"name\":\"Vibra São Paulo\",\"state\":\"SP\"},\"start_date\":\"2026-08-29T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4264,\"event_id\":50119004,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/1bgnujl8416hidr2vol74ka5iao2srr0r5t773246ksfmj7rfde1oke4q9j8kgau8lk5sobjdb7dj7s3lpc2v1cibt4f4f4a4ah17p5.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119004\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"CABARÉ - O ÚLTIMO ENCONTRO\",\"title_seo\":\"\",\"end_date\":\"2026-10-09T23:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sex, 09 Out - 2026 · 20:00\",\"en\":\"Fri, 09 Oct - 2026 · 20:00\",\"es\":\"Vie, 09 Oct - 2026 · 20:00\"},\"end_date_formats\":{\"pt\":\"Sex, 09 Out - 2026 · 20:00\",\"en\":\"Fri, 09 Oct - 2026 · 20:00\",\"es\":\"Vie, 09 Oct - 2026 · 20:00\"},\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":{\"city\":\"Olinda\",\"name\":\"Classic Hall Recife\",\"state\":\"PE\"},\"start_date\":\"2026-10-09T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4265,\"event_id\":50119159,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3drmvbae17ghaevco6arossu7fpa3fuk65046u7q3gbjobbrql812i6p1hl0bd09e7mmtu4u4k45gq5ejqaov6iq3t2rgv7rg08ent3.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119159\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Cabaré O Último Encontro - Leonardo e Bruno\u0026Marrone\",\"title_seo\":\"\",\"end_date\":\"2026-10-11T01:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 10 Out - 2026 · 22:00\",\"en\":\"Sat, 10 Oct - 2026 · 22:00\",\"es\":\"Sab, 10 Oct - 2026 · 22:00\"},\"end_date_formats\":{\"pt\":\"Sab, 10 Out - 2026 · 22:00\",\"en\":\"Sat, 10 Oct - 2026 · 22:00\",\"es\":\"Sab, 10 Oct - 2026 · 22:00\"},\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":{\"city\":\"Fortaleza\",\"name\":\"Estacionamento Arena Castelão\",\"state\":\"CE\"},\"start_date\":\"2026-10-11T01:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4274,\"event_id\":50113483,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/7c06ahhqsv5tm0n3e2kfqref1jlpjpm83qak95tnm5mle27krv3m670bb6teje3sbaa2q9vd6jv5f43l2a3r4pq3fr1jpca8p3bjb8.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/113483\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"MEU FILHO É UM MUSICAL\",\"title_seo\":\"\",\"end_date\":\"2026-07-19T23:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Qui, 28 Mai - 2026 · 20:00\",\"en\":\"Thu, 28 May - 2026 · 20:00\",\"es\":\"Jue, 28 May - 2026 · 20:00\"},\"end_date_formats\":{\"pt\":\"Dom, 19 Jul - 2026 · 20:00\",\"en\":\"Sun, 19 Jul - 2026 · 20:00\",\"es\":\"Dom, 19 Jul - 2026 · 20:00\"},\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":{\"city\":\"Rio de Janeiro\",\"name\":\"Teatro Multiplan - VillageMall\",\"state\":\"RJ\"},\"start_date\":\"2026-05-28T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4279,\"event_id\":3043855,\"image_url\":\"https://images.sympla.com.br/69ddb254f23e4.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/festival-sensacional-2026/3043855\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"FESTIVAL SENSACIONAL! 2026\",\"title_seo\":\"\",\"end_date\":\"2026-08-09T23:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 08 Ago - 2026 · 13:00\",\"en\":\"Sat, 08 Aug - 2026 · 13:00\",\"es\":\"Sab, 08 Ago - 2026 · 13:00\"},\"end_date_formats\":{\"pt\":\"Dom, 09 Ago - 2026 · 20:00\",\"en\":\"Sun, 09 Aug - 2026 · 20:00\",\"es\":\"Dom, 09 Ago - 2026 · 20:00\"},\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":{\"city\":\"Belo Horizonte\",\"name\":\"Parque Ecológico Francisco Lins do Rêgo (Parque Ecológico da Pampulha)\",\"state\":\"MG\"},\"start_date\":\"2026-08-08T16:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4171,\"event_id\":50116908,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/37eb9fs95jae6e7l6t2nclrc38j9uajijkpcn5v2pfjpfaq37k9nabnvkub1m13nqhupnccmn215p903lh7vc40dcjm4kil7hvmnedj.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/116908\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"BACO EXU DO BLUES\",\"title_seo\":\"\",\"end_date\":\"2026-07-26T01:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 25 Jul - 2026 · 22:00\",\"en\":\"Sat, 25 Jul - 2026 · 22:00\",\"es\":\"Sab, 25 Jul - 2026 · 22:00\"},\"end_date_formats\":{\"pt\":\"Sab, 25 Jul - 2026 · 22:00\",\"en\":\"Sat, 25 Jul - 2026 · 22:00\",\"es\":\"Sab, 25 Jul - 2026 · 22:00\"},\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":{\"city\":\"Belo Horizonte\",\"name\":\"Befly Hall\",\"state\":\"MG\"},\"start_date\":\"2026-07-26T01:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4286,\"event_id\":3390641,\"image_url\":\"https://images.sympla.com.br/69e23214c6971.jpg\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/reveillon-amore-2027/3390641\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Réveillon Amoré 2027\",\"title_seo\":\"\",\"end_date\":\"2027-01-01T09:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 26 Dez - 2026 · 18:00\",\"en\":\"Sat, 26 Dec - 2026 · 18:00\",\"es\":\"Sab, 26 Dic - 2026 · 18:00\"},\"end_date_formats\":{\"pt\":\"Sex, 01 Jan - 2027 · 06:00\",\"en\":\"Fri, 01 Jan - 2027 · 06:00\",\"es\":\"Vie, 01 Ene - 2027 · 06:00\"},\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":{\"city\":\"Ipojuca\",\"name\":\"Maracaipe\",\"state\":\"PE\"},\"start_date\":\"2026-12-26T21:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4289,\"event_id\":50115142,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/25ve7fv5khlamvdj1jvmsllfbpfm57jr1rp0ikonhqflc4qbs7ffh62smrgdsl401hq1lejb7lgh91k9tkrt3la0o63t8qp2lo7vhfp.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/115142\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Viva: A vida é uma festa, in concert\",\"title_seo\":\"\",\"end_date\":\"2026-06-07T19:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sab, 30 Mai - 2026 · 11:00\",\"en\":\"Sat, 30 May - 2026 · 11:00\",\"es\":\"Sab, 30 May - 2026 · 11:00\"},\"end_date_formats\":{\"pt\":\"Dom, 07 Jun - 2026 · 16:00\",\"en\":\"Sun, 07 Jun - 2026 · 16:00\",\"es\":\"Dom, 07 Jun - 2026 · 16:00\"},\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":{\"city\":\"São Paulo\",\"name\":\"BTG Pactual Hall\",\"state\":\"SP\"},\"start_date\":\"2026-05-30T14:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4294,\"event_id\":50119652,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/1516kh55k7m169ktvsqia8unbmm37srngqshsovsooqjmum5j05sebs98vcsfslp7fk1jf062j27vq4be532grf95ibthkfvhpsfp98.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119652\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Tim Bernardes - Despedida “Mil Coisas Invisíveis”\",\"title_seo\":\"\",\"end_date\":\"2026-06-13T00:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sex, 12 Jun - 2026 · 21:00\",\"en\":\"Fri, 12 Jun - 2026 · 21:00\",\"es\":\"Vie, 12 Jun - 2026 · 21:00\"},\"end_date_formats\":{\"pt\":\"Sex, 12 Jun - 2026 · 21:00\",\"en\":\"Fri, 12 Jun - 2026 · 21:00\",\"es\":\"Vie, 12 Jun - 2026 · 21:00\"},\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":{\"city\":\"Brasília\",\"name\":\"Centro de Convenções Ulysses Guimarães\",\"state\":\"DF\"},\"start_date\":\"2026-06-13T00:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4295,\"event_id\":50118913,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/p4sgfopmq3upromg73o22s2b4du0j00apc0icm5f9ral9phas3nqbo8jlp1t80gmso04c6ae94ap3e9o5lqh93cct1cusanhrv9lha.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/118913\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"FREUD e o VISITANTE\",\"title_seo\":\"\",\"end_date\":\"2026-06-06T22:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sex, 05 Jun - 2026 · 19:00\",\"en\":\"Fri, 05 Jun - 2026 · 19:00\",\"es\":\"Vie, 05 Jun - 2026 · 19:00\"},\"end_date_formats\":{\"pt\":\"Sab, 06 Jun - 2026 · 19:00\",\"en\":\"Sat, 06 Jun - 2026 · 19:00\",\"es\":\"Sab, 06 Jun - 2026 · 19:00\"},\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":{\"city\":\"Salvador\",\"name\":\"Teatro Faresi \",\"state\":\"BA\"},\"start_date\":\"2026-06-05T22:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4296,\"event_id\":50119753,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/39i7v0j5jcqrtu3rm623miv9b9a2edmefqssr3kr4r9vdfvek1tp8ilu8l0n5ipoi6pkauqptcke0u3shqanpsb7iuuultjpspnftvu.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119753\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"MATHUES BUENTE EM O PROBLEMA EH THEU \",\"title_seo\":\"\",\"end_date\":\"2026-05-30T01:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Qui, 28 Mai - 2026 · 19:00\",\"en\":\"Thu, 28 May - 2026 · 19:00\",\"es\":\"Jue, 28 May - 2026 · 19:00\"},\"end_date_formats\":{\"pt\":\"Sex, 29 Mai - 2026 · 22:00\",\"en\":\"Fri, 29 May - 2026 · 22:00\",\"es\":\"Vie, 29 May - 2026 · 22:00\"},\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":{\"city\":\"Salvador\",\"name\":\"Teatro Jorge Amado\",\"state\":\"BA\"},\"start_date\":\"2026-05-28T22:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4301,\"event_id\":3271026,\"image_url\":\"https://images.sympla.com.br/69d7cb4ef38bd.png\",\"alt\":\"\",\"link_page\":\"https://www.sympla.com.br/evento/leader-shift-2026/3271026\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"Leader Shift 2026\",\"title_seo\":\"\",\"end_date\":\"2026-06-10T23:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Ter, 09 Jun - 2026 · 08:00\",\"en\":\"Tue, 09 Jun - 2026 · 08:00\",\"es\":\"Mar, 09 Jun - 2026 · 08:00\"},\"end_date_formats\":{\"pt\":\"Qua, 10 Jun - 2026 · 20:00\",\"en\":\"Wed, 10 Jun - 2026 · 20:00\",\"es\":\"Mie, 10 Jun - 2026 · 20:00\"},\"duration_type\":\"multiple\",\"company\":\"sympla\",\"location\":{\"city\":\"Belo Horizonte\",\"name\":\"BeFly Minascentro\",\"state\":\"MG\"},\"start_date\":\"2026-06-09T11:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4070,\"event_id\":50114663,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/1p291u1vj14ffgc3dnjcrsdjdd8c7mujn8gd09ih6g516grqapshg64vm3fo0hedkm9mu84d5p17nd64pr27f3qklf5cpnpqe1rhbaq.webp\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/114663\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"WICKED\",\"title_seo\":\"\",\"end_date\":\"2026-09-06T21:30:00+00:00\",\"start_date_formats\":{\"pt\":\"Qua, 15 Jul - 2026 · 20:00\",\"en\":\"Wed, 15 Jul - 2026 · 20:00\",\"es\":\"Mie, 15 Jul - 2026 · 20:00\"},\"end_date_formats\":{\"pt\":\"Dom, 06 Set - 2026 · 18:30\",\"en\":\"Sun, 06 Sep - 2026 · 18:30\",\"es\":\"Dom, 06 Sep - 2026 · 18:30\"},\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":{\"city\":\"Rio de Janeiro\",\"name\":\"Cidade das Artes\",\"state\":\"RJ\"},\"start_date\":\"2026-07-15T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4304,\"event_id\":50119597,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/2nb4jp8u766i3lifj9ggvecablsd95qkpc2u1ku3cm62sj6emusee13dd0qfrchncsjmguc3j4avvjin92u2fc8fbe9idpu452g73hp.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/119597\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"GIOVANA FAGUNDES TESTANDO NOVO SHOW\",\"title_seo\":\"\",\"end_date\":\"2026-05-29T22:00:00+00:00\",\"start_date_formats\":{\"pt\":\"Sex, 29 Mai - 2026 · 19:00\",\"en\":\"Fri, 29 May - 2026 · 19:00\",\"es\":\"Vie, 29 May - 2026 · 19:00\"},\"end_date_formats\":{\"pt\":\"Sex, 29 Mai - 2026 · 19:00\",\"en\":\"Fri, 29 May - 2026 · 19:00\",\"es\":\"Vie, 29 May - 2026 · 19:00\"},\"duration_type\":\"single\",\"company\":\"ttrs\",\"location\":{\"city\":\"Salvador\",\"name\":\"Teatro Faresi \",\"state\":\"BA\"},\"start_date\":\"2026-05-29T22:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"featured_id\":4282,\"event_id\":50113220,\"image_url\":\"https://assets.bileto.sympla.com.br/eventmanager/production/2948ac5ba0sdm3s3bm6psjrp3b4m2phhoshvdpufh5aa0073aumlsrn8ebf7nlpc0kjgqn6oi127oit47posgq4443dnntnj2f03033.jpeg\",\"alt\":\"\",\"link_page\":\"https://bileto.sympla.com.br/event/113220\",\"place\":\"\",\"type\":\"EVENTO\",\"title\":\"TINA - TINA TURNER, O MUSICAL\",\"title_seo\":\"\",\"end_date\":\"2026-07-12T22:30:00+00:00\",\"start_date_formats\":{\"pt\":\"Qui, 28 Mai - 2026 · 20:00\",\"en\":\"Thu, 28 May - 2026 · 20:00\",\"es\":\"Jue, 28 May - 2026 · 20:00\"},\"end_date_formats\":{\"pt\":\"Dom, 12 Jul - 2026 · 19:30\",\"en\":\"Sun, 12 Jul - 2026 · 19:30\",\"es\":\"Dom, 12 Jul - 2026 · 19:30\"},\"duration_type\":\"multiple\",\"company\":\"ttrs\",\"location\":{\"city\":\"São Paulo\",\"name\":\"Teatro Santander\",\"state\":\"SP\"},\"start_date\":\"2026-05-28T23:00:00+00:00\",\"event_type\":\"NORMAL\"}],\"total\":16}},{\"template\":\"slider\",\"is_directory\":true,\"show_more\":true,\"label\":\"Explore nossas coleções\",\"service_params\":{\"category\":\"collection\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"},\"seo_description\":\" \",\"service\":\"/v4/matrices\",\"seo_title\":\" \",\"response_type\":\"collection-card\",\"uuid\":\"home-collection\",\"order\":520,\"response\":{\"matrices\":[{\"collection_id\":\"17\",\"description\":\"Vai curtir música boa em um festival ou ver a apresentação do seu artista favorito? Escolha sua festa na Sympla e aproveite!\",\"highlighted\":\"1\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ab3424b91.png\",\"normal\":\"https://images.sympla.com.br/651596056d6be.png\",\"banner\":\"https://images.sympla.com.br/62d81e4169758.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-festa-show-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8df273cc5.png\"},\"label\":\"Festas e Shows \",\"seo_description\":\"Descubra shows, festas, baladas e festivais na sua cidade com a Sympla. Encontre eventos incríveis, faça sua escolha e curta música boa com seus amigos!\",\"seo_title\":\"Confira Festas e Shows incríveis perto de você - Sympla\",\"slug\":\"show-musica-festa\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_festas_shows\",\"uuid\":\"collection-festas-e-shows\"},{\"collection_id\":\"23\",\"description\":\"Apreciar uma peça de teatro, admirar um espetáculo em um teatro histórico ou conhecer uma cultura diferente da sua. Descubra os melhores eventos culturais da sua cidade e viva novas experiências.\",\"highlighted\":\"3\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9abf31769b.png\",\"normal\":\"https://images.sympla.com.br/6515956ba5b11.png\",\"banner\":\"https://images.sympla.com.br/69df9c191ee11.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-arte-cultura-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8e2f23cfa.png\"},\"label\":\"Teatros e Espetáculos\",\"seo_description\":\"Teatro, Stand Up Comedy, Espetáculos, Peças Infantis e mais na Sympla. Invista em cultura em 2026. Opções de Peças de Teatro gratuitas, online e pagas.\",\"seo_title\":\"Teatros, Stand Up, Musicais e Espetáculos 2026 - Sympla\",\"slug\":\"teatro-espetaculo\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_teatros\",\"uuid\":\"collection-teatros-e-espetaculos\"},{\"collection_id\":\"24\",\"description\":\"Encontre Festas Juninas, São João e Arraiás com comidas típicas na Sympla. Descubra os melhores eventos de São João 2026 e aproveite com seus amigos. Separa o traje e prepara a fogueira que a melhor época do ano chegou!\",\"highlighted\":\"5\",\"images\":{\"icon\":\"https://images.sympla.com.br/6a022da5d37fc.png\",\"normal\":\"https://images.sympla.com.br/6654867ca425a.png\",\"banner\":\"https://images.sympla.com.br/682f3f2f83c4f.png\",\"icon-active\":\"https://images.sympla.com.br/5e827010ca767.png\",\"dark-normal\":\"https://images.sympla.com.br/665486550bffe.png\"},\"label\":\"Festas Juninas\",\"seo_description\":\"Confira Festas Julinas em 2026 na Sympla. Eventos de São João, Arraiás, Shows e muito mais de Norte a Sul do país. Encontre os melhores Eventos Juninos!\",\"seo_title\":\"Festas Juninas, Eventos de São João e Arraiás 2026 - Sympla\",\"slug\":\"festa-junina\",\"template\":\"collection-matrix\",\"uuid\":\"collection-festa-junina\"},{\"collection_id\":\"79\",\"description\":\"Encontre opções para assistir aos jogos e a final da Copa na Sympla. Seja no barzinho com os amigos, em restaurantes com a família ou aproveitando um show nacional pós jogo, divirta-se com os eventos da Copa que separamos para você!\",\"highlighted\":\"4\",\"images\":{\"icon\":\"https://images.sympla.com.br/6a0cc63a8047a.png\",\"normal\":\"https://images.sympla.com.br/6a0cc602aad37.png\",\"banner\":\"https://images.sympla.com.br/6a0cc9ae6e2d4.png\",\"icon-active\":\"https://images.sympla.com.br/6a0cc63a8047a.png\"},\"label\":\"Copa na Sympla\",\"seo_description\":\"Aproveite a Copa na Sympla. Assista aos jogos, encontre os melhores eventos de Copa, Shows, Festas e muito mais. Viva a Copa ao Vivo!\",\"seo_title\":\"Copa na Sympla - Assista aos jogos e encontre Eventos - Sympla\",\"slug\":\"copa\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_copa\",\"uuid\":\"collection-copa\"},{\"collection_id\":\"81\",\"description\":\"Garanta ingressos com desconto para festas, eventos corporativos, peças e muito mais. Confira as promoções disponíveis e aproveite.\",\"images\":{\"icon\":\"https://images.sympla.com.br/6a14aada9a69b.png\",\"normal\":\"https://images.sympla.com.br/6a148f4e6f478.png\",\"banner\":\"https://images.sympla.com.br/6a148cd50899f.png\",\"icon-active\":\"https://images.sympla.com.br/5e827010ca767.png\"},\"label\":\"Promoções\",\"seo_description\":\"Compre ingressos com desconto na Sympla. Festas, teatro, cursos, eventos corporativos e muito mais. Aproveite!\",\"seo_title\":\"Promoções - Eventos com desconto na Sympla\",\"slug\":\"promocoes\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_promocoes\",\"uuid\":\"collection-promocoes\"},{\"collection_id\":\"2\",\"description\":\"Encontre corridas, competições, desafios e treinos na Sympla. Descubra opções de aulas, cursos e workshops para você descobrir seu novo esporte favorito. Aproveite a experiencia de fazer algo pela primeira vez!\",\"highlighted\":\"2\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ac7312b25.png\",\"normal\":\"https://images.sympla.com.br/651593e03c77e.png\",\"banner\":\"https://images.sympla.com.br/6740ef055fec6.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-esporte-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8f0a1084e.png\"},\"label\":\"Esportes\",\"seo_description\":\"Encontre eventos esportivos de corrida, ciclismo, campeonatos, trilhas, aulas, treinos e mais na Sympla. Confira eventos esportivos perto de você!\",\"seo_title\":\"Eventos Esportivos - Ciclismo, Corrida, Triathlon - Sympla\",\"slug\":\"esportivo\",\"template\":\"collection-matrix\",\"uuid\":\"collection-esporte\"},{\"collection_id\":\"5\",\"description\":\"Encontre a programação dos melhores shows de stand up comedy que estão em cartaz na sua cidade e se divirta com a Sympla. Aproveite com os amigos essa experiência!\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9abcf7d09e.png\",\"normal\":\"https://images.sympla.com.br/65159534a23f0.png\",\"banner\":\"https://images.sympla.com.br/62f15a2667f14.jpg\",\"icon-active\":\"https://images.sympla.com.br/610949a050ac4.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8fb48cacf.png\"},\"label\":\"Stand Up Comedy\",\"seo_description\":\"Aproveite os melhores shows de Stand Up ao vivo com comediantes talentosos. Confira a programação de shows de comédia em cartaz e garanta seu ingresso na Sympla!\",\"seo_title\":\"Stand Up Comedy: Shows de humor e comédia ao vivo - Sympla\",\"slug\":\"stand-up-comedy\",\"template\":\"collection-matrix\",\"uuid\":\"collection-stand-up\"},{\"collection_id\":\"26\",\"description\":\"Viva algo novo! Confira as opções de passeios turísticos, atividades ao ar livre, tours, museus, exposições... Experiências culturais para todos os gostos.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ab9c2d641.png\",\"normal\":\"https://images.sympla.com.br/651594a38adf5.png\",\"banner\":\"https://images.sympla.com.br/62d81e9fe0816.jpg\",\"icon-active\":\"https://images.sympla.com.br/5e6a2ddb290f2.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8eb765a8a.png\"},\"label\":\"Passeios e Tours\",\"seo_description\":\"Museus, passeios turísticos, exposições, atividades culturais e outras experiências com a Sympla. Passeios repletos de cultura, arte e história e crie memórias inesquecíveis.\",\"seo_title\":\"Explore Museus, Exposições, Passeios Turísticos e mais - Sympla\",\"slug\":\"experiencias\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_passeios\",\"uuid\":\"collection-experiencias\"},{\"collection_id\":\"4\",\"description\":\"Ampliar sua rede de contatos é expandir suas possibilidades profissionais. Congressos, palestras e muito mais na Sympla. Escolha um evento corporativo e desenvolva seu networking!\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b961cab4757.png\",\"normal\":\"https://images.sympla.com.br/6515934b35c6e.png\",\"banner\":\"https://images.sympla.com.br/62d81db9c5730.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-negocios-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8e5d29353.png\"},\"label\":\"Congressos e Palestras\",\"seo_description\":\"Congressos e Palestras para sua qualificação - Sympla\",\"seo_title\":\"Congressos e Palestras para sua qualificação - Sympla\",\"slug\":\"congresso-palestra\",\"template\":\"collection-matrix\",\"uuid\":\"collection-congressos-e-palestras\"},{\"collection_id\":\"15\",\"description\":\"Divirta-se e encante as crianças com diversas atividades infantis. Confira a programação infantil da Sympla e encontre eventos para crianças, colônia de férias, peças de teatro infantis e musicais, contação de histórias, circos, cursos para pais e muito mais! Momentos inesquecíveis, para explorar novos conhecimentos e soltar a imaginação em ambientes seguros e estimulantes. Há sempre algo novo para descobrir e aproveitar, tornando cada experiência uma aventura única para as crianças e famílias.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ab6b08022.png\",\"normal\":\"https://images.sympla.com.br/6515948258143.png\",\"banner\":\"https://images.sympla.com.br/63371050e1c36.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-infantil-active.png\",\"web\":\"https://images.sympla.com.br/63371019b2993.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a8ee59c091.png\"},\"label\":\"Infantil\",\"seo_description\":\"Encontre eventos para crianças, cursos, workshops, passeios, teatros e shows para crianças em 2026 na Sympla. Eventos e conteúdos gratuitos e pagos.\",\"seo_title\":\"Infantil - Eventos, Atividades e Teatro para Crianças - Sympla\",\"slug\":\"infantil\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_infantil\",\"uuid\":\"collection-infantil\"},{\"collection_id\":\"68\",\"description\":\"Tudo para viver ao máximo em eventos com loja! Ingressos, merchandising oficial e experiências especiais em um só lugar.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9abdf9c538.png\",\"normal\":\"https://images.sympla.com.br/699c8ba73d21c.png\",\"banner\":\"https://images.sympla.com.br/699c5c40d1e45.png\",\"icon-active\":\"https://images.sympla.com.br/699c5d01488d0.svg\"},\"label\":\"Eventos com loja\",\"seo_description\":\"Viva eventos com loja que vão além do ingresso! Garanta produtos oficiais, experiências VIP e itens exclusivos no mesmo lugar.\",\"seo_title\":\"Eventos com Loja - Sympla Store\",\"slug\":\"loja\",\"template\":\"collection-matrix\",\"topsort_slot_id\":\"colecao_store\",\"uuid\":\"collection-loja\"},{\"collection_id\":\"101\",\"description\":\"Bem-vindo à Coleção TIM Mais! Confira aqui os eventos que separamos para você!\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ac18a3869.png\",\"normal\":\"https://images.sympla.com.br/685ea3f827ca2.png\",\"banner\":\"https://images.sympla.com.br/683ef9968f270.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-arte-cultura-active.png\",\"dark-normal\":\"https://images.sympla.com.br/682495e040d07.png\"},\"label\":\"Descontos exclusivos\",\"seo_description\":\"Aproveite os melhores eventos com descontos exclusivos em parceria da Sympla e Tim Mais. Compre agora!\",\"seo_title\":\"Descontos Exclusivos - Sympla e Tim Mais\",\"slug\":\"tim-mais\",\"template\":\"collection-matrix\",\"uuid\":\"collection-tim-mais\"},{\"collection_id\":\"8\",\"description\":\"Transforme seu aprendizado com cursos e workshops em diversas áreas. Escolha entre opções online e presenciais para aprimorar seu currículo, expandir suas habilidades e elevar seu perfil profissional.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ac5d1176f.png\",\"normal\":\"https://images.sympla.com.br/651593b284186.png\",\"banner\":\"https://images.sympla.com.br/62d81de28db3a.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-aprender-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8e8c8263d.png\"},\"label\":\"Cursos e Workshops\",\"seo_description\":\"Encontre workshops e cursos online ou presenciais com certificado. Cursos de direito, fotografia, informática e mais na Sympla. Workshops e cursos gratuitos e pagos.\",\"seo_title\":\"Cursos e Workshops Online - Direito, Marketing e mais - Sympla\",\"slug\":\"curso-workshop\",\"template\":\"collection-matrix\",\"uuid\":\"collection-cursos-e-workshops\"},{\"collection_id\":\"1\",\"description\":\"Feiras gastronômicas, encontros, capacitações, cursos, festas… tudo isso acompanhado de comidas e bebidas deliciosas! Escolha seu evento gastronômico e viva uma experiência incrível.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ab58a6235.png\",\"normal\":\"https://images.sympla.com.br/6515942bca2c8.png\",\"banner\":\"https://images.sympla.com.br/62d81e57a55f0.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-comer-beber-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a8f6046485.png\"},\"label\":\"Gastronomia\",\"seo_description\":\"Encontre feiras e festivais gastronômicos perto de você com a Sympla. Aprenda e se divirta com cursos de gastronômia e mais. Confira os eventos gastronômicos!\",\"seo_title\":\"Eventos Gastronômicos | Festivais e Feiras Gastronômicas - Sympla\",\"slug\":\"gastronomico\",\"template\":\"collection-matrix\",\"uuid\":\"collection-gastronomia\"},{\"collection_id\":\"14\",\"description\":\"Viva a diversidade e conecte-se aos principais movimentos e eventos LGBTQIAPN+. Encontre festas, debates, congressos e palestras sobre pautas da comunidade LGBTQIAPN+!\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9ab7a33d3c.png\",\"normal\":\"https://images.sympla.com.br/651594ca12eee.png\",\"banner\":\"https://images.sympla.com.br/647a44bc34d35.png\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-pride-active.png\",\"web\":\"https://images.sympla.com.br/5ef36d88561f7.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a9031aa5b5.png\"},\"label\":\"Pride\",\"seo_description\":\"Encontre eventos, debates, baladas, festas, concursos e muito mais para a comunidade LGBTQIAPN+ na Sympla. Descubra as diversas opções de eventos!\",\"seo_title\":\"Eventos LGBTQIAPN+ | Os melhores eventos - Sympla\",\"slug\":\"pride\",\"template\":\"collection-matrix\",\"uuid\":\"collection-pride\"},{\"collection_id\":\"13\",\"description\":\"Conecte-se ao que você acredita. Para todas as culturas encontre eventos religiosos, cursos, seminários, retiros espirituais, shows gospel ou debates sobre religião e espiritualidade. Confira opções de eventos online e presenciais perto de você.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9abbe7da09.png\",\"normal\":\"https://images.sympla.com.br/651594f401e62.png\",\"banner\":\"https://images.sympla.com.br/62d81ee65ec16.jpg\",\"icon-active\":\"https://images.sympla.com.br/cat-icons/collection-ico-religioso-espiritual-active.png\",\"dark-normal\":\"https://images.sympla.com.br/654a9014d5f8e.png\"},\"label\":\"Religião e Espiritualidade\",\"seo_description\":\"Confira eventos religiosos, cursos de espiritualidade, retiro espiritual, missas, cultos, show gospel e mais na Sympla. \",\"seo_title\":\"Missas, Cultos e Eventos Religiosos em 2025 -  Sympla\",\"slug\":\"religioso-espiritual\",\"template\":\"collection-matrix\",\"uuid\":\"collection-religioso-espiritual\"},{\"collection_id\":\"32\",\"description\":\"Simplifique a forma de assistir e participar de eventos online. São diversos cursos, webinars, workshops, seminários e muito mais em diversas áreas. Tudo isso disponível online para você!\",\"images\":{\"icon\":\"https://images.sympla.com.br/69c6d6cf01d67.png\",\"normal\":\"https://images.sympla.com.br/6515940a38c2a.png\",\"banner\":\"https://images.sympla.com.br/62d81e158057d.jpg\",\"icon-active\":\"https://images.sympla.com.br/5e7a4d58e4da7.png\",\"web\":\"https://images.sympla.com.br/61655c7b20c01.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a8f87772bd.png\"},\"label\":\"Eventos Online\",\"seo_description\":\"Encontre eventos, palestras, aulas, lives e cursos online com certificado na Sympla. Aprenda online psicologia, veterinária, marketing, direito e mais.\",\"seo_title\":\"Eventos Online - Lives, Shows, Workshops e Cursos Online - Sympla\",\"slug\":\"online\",\"template\":\"collection-matrix\",\"uuid\":\"collection-online\"},{\"collection_id\":\"61\",\"description\":\"Na Sympla seu conhecimento é levado a sério! Encontre conteúdos online e cursos EAD. Aulas gravadas para você assistir quando e onde quiser. Consulte opções de curso com certificado.\",\"images\":{\"icon\":\"https://images.sympla.com.br/69b9abad87e23.png\",\"normal\":\"https://images.sympla.com.br/651595520d790.png\",\"banner\":\"https://images.sympla.com.br/62d81eb6d4345.jpg\",\"icon-active\":\"https://images.sympla.com.br/5fab02bfc10d2.png\",\"web\":\"https://images.sympla.com.br/5fa5b6f46c625.jpg\",\"dark-normal\":\"https://images.sympla.com.br/654a90599c326.png\"},\"label\":\"Sympla Play\",\"seo_description\":\"Conteúdos e cursos online com certificado na Sympla. Trilhas de conhecimento em direito, marketing, empreendedorismo e mais com os melhores especialistas.\",\"seo_title\":\"Cursos Online EAD e Conteúdos Digitais - Sympla Play\",\"slug\":\"sympla-play\",\"template\":\"collection-matrix\",\"uuid\":\"collection-sympla-play\"}],\"limit\":20,\"total\":18}},{\"template\":\"slider\",\"is_directory\":false,\"show_more\":false,\"label\":\"Vistos recentemente\",\"service_params\":{\"only\":\"name,start_date,end_date,images,event_type,duration_type,location,id,global_score,start_date_formats,end_date_formats,url,company,type\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"},\"seo_description\":\" \",\"service\":\"/v4/search/recents\",\"seo_title\":\" \",\"response_type\":\"recent-card\",\"uuid\":\"recentes\",\"order\":530,\"response\":{}},{\"is_directory\":true,\"label\":\"Eventos mais comprados nas últimas 24h \",\"response_type\":\"event-card\",\"service\":\"/v4/search/query\",\"service_params\":{\"has_banner\":\"1\",\"only\":\"name,start_date,end_date,images,event_type,duration_type,location,id,global_score,start_date_formats,end_date_formats,url,company,type,organizer\",\"filter_sold_out\":\"1\",\"sort\":\"day-trending-score\",\"location_score\":\"day-trending-score\",\"type\":\"normal\",\"excluded_ids\":\"50092676,50092669,50092682,50092680\",\"events_ids\":\"\",\"token\":\"3b40b2b7188685c7cf49d2b676b23bce8fbb750a\"},\"show_more\":true,\"template\":\"slider\",\"uuid\":\"mais-vistos\",\"seo_description\":\"Confira os eventos mais vistos na Sympla. Festas, shows, teatros, passeios e mais eventos que estão em alta hoje.\",\"seo_title\":\"Eventos Mais Vistos - Em alta Hoje - Sympla\",\"order\":540,\"response\":{\"data\":[{\"end_date\":\"2026-05-31T08:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69d69ca40ea0a.jpg\",\"xs\":\"https://images.sympla.com.br/69d69ca40ea0a-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69d69ca40ea0a-lg.jpg\"},\"global_score\":458094,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/junina-we-make-l-open-bar-open-food-junino/3379260\",\"start_date_formats\":{\"pt\":\"Sab, 30 Mai - 2026 · 21:00\",\"en\":\"Sat, 30 May - 2026 · 21:00\",\"es\":\"Sab, 30 May - 2026 · 21:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"We Make\",\"id\":\"3188645\",\"url\":\"\",\"email\":\"contato@wemakeideas.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 31 Mai - 2026 · 05:00\",\"en\":\"Sun, 31 May - 2026 · 05:00\",\"es\":\"Dom, 31 May - 2026 · 05:00\"},\"name\":\"JUNINA WE MAKE l Open Bar \u0026 Open Food Junino\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"\",\"address_alt\":\"\",\"city\":\"Rio de Janeiro\",\"address_num\":\"0\",\"name\":\"Local a definir\",\"lon\":-43.1728965,\"state\":\"RJ\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-22.9068467},\"id\":3379260,\"start_date\":\"2026-05-31T00:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-12-30T12:30:00+00:00\",\"images\":{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/l9f8l634pmq5gahjfoauod20gjgsr1ra3757c55638hd2hq1otqt9jkphsjihpsm4ha7ercfj9ls9v67m17fcaqradvbg04tkruu6r.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/l9f8l634pmq5gahjfoauod20gjgsr1ra3757c55638hd2hq1otqt9jkphsjihpsm4ha7ercfj9ls9v67m17fcaqradvbg04tkruu6r.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/l9f8l634pmq5gahjfoauod20gjgsr1ra3757c55638hd2hq1otqt9jkphsjihpsm4ha7ercfj9ls9v67m17fcaqradvbg04tkruu6r.jpeg\"},\"global_score\":627278,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/113098\",\"start_date_formats\":{\"pt\":\"Qui, 07 Mai - 2026 · 09:30\",\"en\":\"Thu, 07 May - 2026 · 09:30\",\"es\":\"Jue, 07 May - 2026 · 09:30\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"INSTITUTO INHOTIM\",\"id\":\"295\",\"url\":\"\",\"email\":\"info@inhotim.org.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Qua, 30 Dez - 2026 · 09:30\",\"en\":\"Wed, 30 Dec - 2026 · 09:30\",\"es\":\"Mie, 30 Dic - 2026 · 09:30\"},\"name\":\"INSTITUTO INHOTIM 2026\",\"company\":\"ttrs\",\"location\":{\"country\":\"\",\"address\":\"Rua B, 20\",\"address_alt\":\"\",\"city\":\"Brumadinho\",\"address_num\":\"0\",\"name\":\"Instituto Inhotim\",\"lon\":-44.2191423,\"state\":\"MG\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-20.1261083},\"id\":50113098,\"start_date\":\"2026-05-07T12:30:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-07T20:00:00+00:00\",\"images\":{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/10ihv9db73nhj82s7k2kd1fc66tcil687im7lrqcglp1oihgvine5khs2c735hi06i7g60e9sls5314nbdqd613gupc6a6rbq6v59nr.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/10ihv9db73nhj82s7k2kd1fc66tcil687im7lrqcglp1oihgvine5khs2c735hi06i7g60e9sls5314nbdqd613gupc6a6rbq6v59nr.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/10ihv9db73nhj82s7k2kd1fc66tcil687im7lrqcglp1oihgvine5khs2c735hi06i7g60e9sls5314nbdqd613gupc6a6rbq6v59nr.jpeg\"},\"global_score\":616190,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/120432\",\"start_date_formats\":{\"pt\":\"Dom, 07 Jun - 2026 · 11:00\",\"en\":\"Sun, 07 Jun - 2026 · 11:00\",\"es\":\"Dom, 07 Jun - 2026 · 11:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"FUNDAÇÃO CLÓVIS SALGADO - FCS\",\"id\":\"5824\",\"url\":\"\",\"email\":\"ronaldo@orquestraouropreto.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 07 Jun - 2026 · 17:00\",\"en\":\"Sun, 07 Jun - 2026 · 17:00\",\"es\":\"Dom, 07 Jun - 2026 · 17:00\"},\"name\":\"Orquestra Ouro Preto e Pé de Sonho\",\"company\":\"ttrs\",\"location\":{\"country\":\"\",\"address\":\"Av. Afonso Pena,1537\",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"0\",\"name\":\"Grande Teatro Cemig Palácio das Artes\",\"lon\":-43.9337146,\"state\":\"MG\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-19.9256264},\"id\":50120432,\"start_date\":\"2026-06-07T14:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-05-31T10:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69c2a7709f882.jpg\",\"xs\":\"https://images.sympla.com.br/69c2a7709f882-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69c2a7709f882-lg.jpg\"},\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/love-sessions-festival-2026/3321037\",\"start_date_formats\":{\"pt\":\"Sab, 30 Mai - 2026 · 21:00\",\"en\":\"Sat, 30 May - 2026 · 21:00\",\"es\":\"Sab, 30 May - 2026 · 21:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\" 4 FLY\",\"id\":\"1477499\",\"url\":\"\",\"email\":\"contato@4fly.art.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 31 Mai - 2026 · 07:00\",\"en\":\"Sun, 31 May - 2026 · 07:00\",\"es\":\"Dom, 31 May - 2026 · 07:00\"},\"name\":\"Love Sessions Festival 2026\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Avenida Rodrigues Alves\",\"address_alt\":\"\",\"city\":\"Rio de Janeiro\",\"address_num\":\"0\",\"name\":\"Armazém 5\",\"lon\":-43.188194,\"state\":\"RJ\",\"neighborhood\":\"\",\"zip_code\":\"20220-560\",\"lat\":-22.8940361},\"id\":3321037,\"start_date\":\"2026-05-31T00:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-08-09T23:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69ddb254f23e4.png\",\"xs\":\"https://images.sympla.com.br/69ddb254f23e4-xs.png\",\"lg\":\"https://images.sympla.com.br/69ddb254f23e4-lg.png\"},\"global_score\":468617,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/festival-sensacional-2026/3043855\",\"start_date_formats\":{\"pt\":\"Sab, 08 Ago - 2026 · 13:00\",\"en\":\"Sat, 08 Aug - 2026 · 13:00\",\"es\":\"Sab, 08 Ago - 2026 · 13:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Híbrido Comunicação e Cultura\",\"id\":\"2058\",\"url\":\"\",\"email\":\"festivalsensacional@gmail.com\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 09 Ago - 2026 · 20:00\",\"en\":\"Sun, 09 Aug - 2026 · 20:00\",\"es\":\"Dom, 09 Ago - 2026 · 20:00\"},\"name\":\"FESTIVAL SENSACIONAL! 2026\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Avenida Otacílio Negrão de Lima\",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"6061\",\"name\":\"Parque Ecológico Francisco Lins do Rêgo (Parque Ecológico da Pampulha)\",\"lon\":-43.9968814,\"state\":\"MG\",\"neighborhood\":\"\",\"zip_code\":\"31365-450\",\"lat\":-19.852934},\"id\":3043855,\"start_date\":\"2026-08-08T16:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-08-23T20:00:00+00:00\",\"images\":{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/ttjim3rsc06urqq8c08fcsl2iq3hg00v337bh95fj92j8iauushqgq5fuge7m7gdkhq2b60h8asfq8k79raiahsvvst22u7t5a5su3.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/ttjim3rsc06urqq8c08fcsl2iq3hg00v337bh95fj92j8iauushqgq5fuge7m7gdkhq2b60h8asfq8k79raiahsvvst22u7t5a5su3.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/ttjim3rsc06urqq8c08fcsl2iq3hg00v337bh95fj92j8iauushqgq5fuge7m7gdkhq2b60h8asfq8k79raiahsvvst22u7t5a5su3.jpeg\"},\"global_score\":653103,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/119972\",\"start_date_formats\":{\"pt\":\"Sex, 21 Ago - 2026 · 20:00\",\"en\":\"Fri, 21 Aug - 2026 · 20:00\",\"es\":\"Vie, 21 Ago - 2026 · 20:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"SALVADOR PRODUCOES \u0026 ENTRETENIMENTOS\",\"id\":\"5290\",\"url\":\"\",\"email\":\"michelle.marchesini@salvadorproducoes.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 23 Ago - 2026 · 17:00\",\"en\":\"Sun, 23 Aug - 2026 · 17:00\",\"es\":\"Dom, 23 Ago - 2026 · 17:00\"},\"name\":\"FESTIVAL DE INVERNO BAHIA 2026\",\"company\":\"ttrs\",\"location\":{\"country\":\"\",\"address\":\"Av. Siqueira Campos, 1320\",\"address_alt\":\"\",\"city\":\"Vitória da Conquista\",\"address_num\":\"0\",\"name\":\"Parque de Exposições Teopompo de Almeida\",\"lon\":-40.8329142,\"state\":\"BA\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-14.8602501},\"id\":50119972,\"start_date\":\"2026-08-21T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-07T06:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69bb3171598b5.jpg\",\"xs\":\"https://images.sympla.com.br/69bb3171598b5-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69bb3171598b5-lg.jpg\"},\"global_score\":443272,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/fabric/3331109\",\"start_date_formats\":{\"pt\":\"Sab, 06 Jun - 2026 · 16:00\",\"en\":\"Sat, 06 Jun - 2026 · 16:00\",\"es\":\"Sab, 06 Jun - 2026 · 16:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Willyan Ruschel Produções \u0026 Eventos\",\"id\":\"18784756\",\"url\":\"\",\"email\":\"Wil.Ruschel@gmail.com\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 07 Jun - 2026 · 03:00\",\"en\":\"Sun, 07 Jun - 2026 · 03:00\",\"es\":\"Dom, 07 Jun - 2026 · 03:00\"},\"name\":\"FABRIC\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Travessia Engenheiro Régis Bitencourt\",\"address_alt\":\"\",\"city\":\"Ilha do Pavão\",\"address_num\":\"1101\",\"name\":\"Marina Navegantes São João\",\"lon\":-51.2173798,\"state\":\"RS\",\"neighborhood\":\"Arquipélago\",\"zip_code\":\"90090-360\",\"lat\":-29.9992361},\"id\":3331109,\"start_date\":\"2026-06-06T19:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-07-15T21:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/68fbca0aaa9a7.png\",\"xs\":\"https://images.sympla.com.br/68fbca0aaa9a7-xs.png\",\"lg\":\"https://images.sympla.com.br/68fbca0aaa9a7-lg.png\"},\"global_score\":460064,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/mega-artesanal-2026/3187546\",\"start_date_formats\":{\"pt\":\"Sab, 11 Jul - 2026 · 10:00\",\"en\":\"Sat, 11 Jul - 2026 · 10:00\",\"es\":\"Sab, 11 Jul - 2026 · 10:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"WR São Paulo\",\"id\":\"22164272\",\"url\":\"\",\"email\":\"financeiro@wrsaopaulo.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Qua, 15 Jul - 2026 · 18:00\",\"en\":\"Wed, 15 Jul - 2026 · 18:00\",\"es\":\"Mie, 15 Jul - 2026 · 18:00\"},\"name\":\"MEGA ARTESANAL 2026\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Rodovia dos Imigrantes, 1,5 km \",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"0\",\"name\":\"São Paulo Expo\",\"lon\":-46.6292673,\"state\":\"SP\",\"neighborhood\":\"Vila Água Funda\",\"zip_code\":\"04329-900\",\"lat\":-23.6465224},\"id\":3187546,\"start_date\":\"2026-07-11T13:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-07-20T01:30:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69a98ba31a041.png\",\"xs\":\"https://images.sympla.com.br/69a98ba31a041-xs.png\",\"lg\":\"https://images.sympla.com.br/69a98ba31a041-lg.png\"},\"global_score\":67791,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/ginga-curitiba/3334449\",\"start_date_formats\":{\"pt\":\"Sab, 13 Jun - 2026 · 15:00\",\"en\":\"Sat, 13 Jun - 2026 · 15:00\",\"es\":\"Sab, 13 Jun - 2026 · 15:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"CWB Brasil\",\"id\":\"2225570\",\"url\":\"\",\"email\":\"marina@cwbbrasil.com.br\",\"organizer_range_id\":\"3\"},\"end_date_formats\":{\"pt\":\"Dom, 19 Jul - 2026 · 22:30\",\"en\":\"Sun, 19 Jul - 2026 · 22:30\",\"es\":\"Dom, 19 Jul - 2026 · 22:30\"},\"name\":\"GINGA CURITIBA\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Rua Pedro de Araújo Franco\",\"address_alt\":\"\",\"city\":\"Curitiba\",\"address_num\":\"23\",\"name\":\"COMPLEXO DURIVAL DE BRITTO E SILVA\",\"lon\":-49.2546779,\"state\":\"PR\",\"neighborhood\":\"JARDIM BOTÂNICO\",\"zip_code\":\"82860-140\",\"lat\":-25.439497},\"id\":3334449,\"start_date\":\"2026-06-13T18:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-06T23:30:00+00:00\",\"images\":{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3mlmvua42opthcbrrd4q6l4ijr7oako1bramllbvi8utv817k5sendf01bs46f3sil0nvadckadh3k4o750mii9onh3fqfl1j2bgur6.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3mlmvua42opthcbrrd4q6l4ijr7oako1bramllbvi8utv817k5sendf01bs46f3sil0nvadckadh3k4o750mii9onh3fqfl1j2bgur6.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3mlmvua42opthcbrrd4q6l4ijr7oako1bramllbvi8utv817k5sendf01bs46f3sil0nvadckadh3k4o750mii9onh3fqfl1j2bgur6.jpeg\"},\"global_score\":616190,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/121039\",\"start_date_formats\":{\"pt\":\"Sab, 06 Jun - 2026 · 20:30\",\"en\":\"Sat, 06 Jun - 2026 · 20:30\",\"es\":\"Sab, 06 Jun - 2026 · 20:30\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Casa Natura\",\"id\":\"4006\",\"url\":\"\",\"email\":\"bilheteria@casanaturamusical.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Sab, 06 Jun - 2026 · 20:30\",\"en\":\"Sat, 06 Jun - 2026 · 20:30\",\"es\":\"Sab, 06 Jun - 2026 · 20:30\"},\"name\":\"Venere Vai Venus + HOZE\",\"company\":\"ttrs\",\"location\":{\"country\":\"\",\"address\":\"Rua Artur de Azevedo, 2134\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"0\",\"name\":\"Casa Natura Musical\",\"lon\":-46.6908821,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-23.5677992},\"id\":50121039,\"start_date\":\"2026-06-06T23:30:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-25T04:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69a5eae304b07.png\",\"xs\":\"https://images.sympla.com.br/69a5eae304b07-xs.png\",\"lg\":\"https://images.sympla.com.br/69a5eae304b07-lg.png\"},\"global_score\":34630,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/torcida-n1/3330600\",\"start_date_formats\":{\"pt\":\"Sab, 13 Jun - 2026 · 17:00\",\"en\":\"Sat, 13 Jun - 2026 · 17:00\",\"es\":\"Sab, 13 Jun - 2026 · 17:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"Pedro Augusto Silva Prestes\",\"id\":\"316992626\",\"url\":\"\",\"email\":\"pedro.prestes@holdingclube.com.br\",\"organizer_range_id\":\"3\"},\"end_date_formats\":{\"pt\":\"Qui, 25 Jun - 2026 · 01:00\",\"en\":\"Thu, 25 Jun - 2026 · 01:00\",\"es\":\"Jue, 25 Jun - 2026 · 01:00\"},\"name\":\"Torcida N1\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Avenida Lineu de Paula Machado\",\"address_alt\":\"Entrada Principal\",\"city\":\"São Paulo\",\"address_num\":\"1263\",\"name\":\"Jockey Club de São Paulo\",\"lon\":-46.6987254,\"state\":\"SP\",\"neighborhood\":\"Cidade Jardim\",\"zip_code\":\"05601-000\",\"lat\":-23.5830857},\"id\":3330600,\"start_date\":\"2026-06-13T20:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-14T05:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/6a04cac9ab69b.png\",\"xs\":\"https://images.sympla.com.br/6a04cac9ab69b-xs.png\",\"lg\":\"https://images.sympla.com.br/6a04cac9ab69b-lg.png\"},\"global_score\":462383,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/na-cidade-junina-joao-gomes/3343636\",\"start_date_formats\":{\"pt\":\"Sab, 13 Jun - 2026 · 17:00\",\"en\":\"Sat, 13 Jun - 2026 · 17:00\",\"es\":\"Sab, 13 Jun - 2026 · 17:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"naCidade\",\"id\":\"10951576\",\"url\":\"\",\"email\":\"nacidade@nasala.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 14 Jun - 2026 · 02:00\",\"en\":\"Sun, 14 Jun - 2026 · 02:00\",\"es\":\"Dom, 14 Jun - 2026 · 02:00\"},\"name\":\"na Cidade Junina  João Gomes\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Olhos D'Água, Belo Horizonte \",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"0\",\"name\":\"Mirante Beagá\",\"lon\":-43.9676464,\"state\":\"MG\",\"neighborhood\":\"Olhos d'Água\",\"zip_code\":\"30390-082\",\"lat\":-19.9860847},\"id\":3343636,\"start_date\":\"2026-06-13T20:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-05-31T03:30:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69eae6509adaa.jpg\",\"xs\":\"https://images.sympla.com.br/69eae6509adaa-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69eae6509adaa-lg.jpg\"},\"global_score\":465956,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/iccarus-maio-2026/3398318\",\"start_date_formats\":{\"pt\":\"Seg, 11 Mai - 2026 · 14:26\",\"en\":\"Mon, 11 May - 2026 · 14:26\",\"es\":\"Lun, 11 May - 2026 · 14:26\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"MID_TAIL\",\"name\":\"ICCARUS\",\"id\":\"315636570\",\"url\":\"\",\"email\":\"iccarusbar@gmail.com\",\"organizer_range_id\":\"2\"},\"end_date_formats\":{\"pt\":\"Dom, 31 Mai - 2026 · 00:30\",\"en\":\"Sun, 31 May - 2026 · 00:30\",\"es\":\"Dom, 31 May - 2026 · 00:30\"},\"name\":\"ICCARUS - MAIO 2026\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Praca Pedro Lessa\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"110\",\"name\":\"Iccarus\",\"lon\":-46.6354859,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"01032-030\",\"lat\":-23.5421386},\"id\":3398318,\"start_date\":\"2026-05-11T17:26:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-21T09:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69ecc92286228.jpg\",\"xs\":\"https://images.sympla.com.br/69ecc92286228-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69ecc92286228-lg.jpg\"},\"global_score\":465724,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/carvalheira-na-fogueira-vila-forro-2026/3399926\",\"start_date_formats\":{\"pt\":\"Sex, 19 Jun - 2026 · 17:00\",\"en\":\"Fri, 19 Jun - 2026 · 17:00\",\"es\":\"Vie, 19 Jun - 2026 · 17:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Carvalheira Memories\",\"id\":\"317427828\",\"url\":\"\",\"email\":\"sympla.amr27@carvalheira.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 21 Jun - 2026 · 06:00\",\"en\":\"Sun, 21 Jun - 2026 · 06:00\",\"es\":\"Dom, 21 Jun - 2026 · 06:00\"},\"name\":\"Carvalheira Na Fogueira Vila Forró 2026\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Vila Forró\",\"address_alt\":\"\",\"city\":\"Lagoa Seca\",\"address_num\":\"27\",\"name\":\"Vila Forró\",\"lon\":-35.875771,\"state\":\"PB\",\"neighborhood\":\"\",\"zip_code\":\"58402-797\",\"lat\":-7.1807429},\"id\":3399926,\"start_date\":\"2026-06-19T20:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-08-02T07:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69fdfc9360e30.png\",\"xs\":\"https://images.sympla.com.br/69fdfc9360e30-xs.png\",\"lg\":\"https://images.sympla.com.br/69fdfc9360e30-lg.png\"},\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/dubdogz-apresenta-nostalgia-no-club415/3418143\",\"start_date_formats\":{\"pt\":\"Sab, 01 Ago - 2026 · 20:00\",\"en\":\"Sat, 01 Aug - 2026 · 20:00\",\"es\":\"Sab, 01 Ago - 2026 · 20:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"CLUB415\",\"id\":\"274151\",\"url\":\"\",\"email\":\"sac@otmproducoes.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 02 Ago - 2026 · 04:00\",\"en\":\"Sun, 02 Aug - 2026 · 04:00\",\"es\":\"Dom, 02 Ago - 2026 · 04:00\"},\"name\":\"Dubdogz apresenta: Nostalgia no Club415\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Rua Star\",\"address_alt\":\"\",\"city\":\"Nova Lima\",\"address_num\":\"415\",\"name\":\"Club 415\",\"lon\":-43.9756209,\"state\":\"MG\",\"neighborhood\":\"Jardim Canada\",\"zip_code\":\"34007-666\",\"lat\":-20.0627639},\"id\":3418143,\"start_date\":\"2026-08-01T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-14T20:00:00+00:00\",\"images\":{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3eui45027iqk93muo7diu59l3m66ld6aouhb7m4plk12jotb1n1i0mv371lpn7jf7pgues5tm15c5ivvk3aj41npdcpakembidokehg.jpeg\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3eui45027iqk93muo7diu59l3m66ld6aouhb7m4plk12jotb1n1i0mv371lpn7jf7pgues5tm15c5ivvk3aj41npdcpakembidokehg.jpeg\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3eui45027iqk93muo7diu59l3m66ld6aouhb7m4plk12jotb1n1i0mv371lpn7jf7pgues5tm15c5ivvk3aj41npdcpakembidokehg.jpeg\"},\"global_score\":607428,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/118947\",\"start_date_formats\":{\"pt\":\"Sex, 22 Mai - 2026 · 19:30\",\"en\":\"Fri, 22 May - 2026 · 19:30\",\"es\":\"Vie, 22 May - 2026 · 19:30\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Igor Farias atividades circenses\",\"id\":\"497\",\"url\":\"\",\"email\":\"brunobetsos@gmail.com\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 14 Jun - 2026 · 17:00\",\"en\":\"Sun, 14 Jun - 2026 · 17:00\",\"es\":\"Dom, 14 Jun - 2026 · 17:00\"},\"name\":\"Patati Patatá Circo Show -  São José dos Campos\",\"company\":\"ttrs\",\"location\":{\"country\":\"\",\"address\":\"Av. Deputado Benedito Matarazzo,9403\",\"address_alt\":\"\",\"city\":\"São José dos Campos\",\"address_num\":\"0\",\"name\":\"Estacionamento do CenterVale Shopping\",\"lon\":-45.8852416,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-23.2008868},\"id\":50118947,\"start_date\":\"2026-05-22T22:30:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-11-02T05:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/696a50db1ac77.jpg\",\"xs\":\"https://images.sympla.com.br/696a50db1ac77-xs.jpg\",\"lg\":\"https://images.sympla.com.br/696a50db1ac77-lg.jpg\"},\"global_score\":454240,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/rock-the-mountain-2026-1o-final-de-semana/3091109\",\"start_date_formats\":{\"pt\":\"Sex, 30 Out - 2026 · 16:00\",\"en\":\"Fri, 30 Oct - 2026 · 16:00\",\"es\":\"Vie, 30 Oct - 2026 · 16:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Rock the Mountain\",\"id\":\"241748\",\"url\":\"\",\"email\":\"contato@vibramarketing.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Seg, 02 Nov - 2026 · 02:00\",\"en\":\"Mon, 02 Nov - 2026 · 02:00\",\"es\":\"Lun, 02 Nov - 2026 · 02:00\"},\"name\":\"Rock the Mountain 2026 : 1º Final de Semana\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Estrada União e Indústria\",\"address_alt\":\"\",\"city\":\"Petrópolis\",\"address_num\":\"10000\",\"name\":\"Parque Municipal Prefeito Paulo Rattes\",\"lon\":-43.1347527,\"state\":\"RJ\",\"neighborhood\":\"Itaipava\",\"zip_code\":\"25730-745\",\"lat\":-22.4026516},\"id\":3091109,\"start_date\":\"2026-10-30T19:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-09-13T14:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/6a0eebf939903.png\",\"xs\":\"https://images.sympla.com.br/6a0eebf939903-xs.png\",\"lg\":\"https://images.sympla.com.br/6a0eebf939903-lg.png\"},\"global_score\":380834,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/b-run-3deg-edicao/3380391\",\"start_date_formats\":{\"pt\":\"Dom, 13 Set - 2026 · 06:00\",\"en\":\"Sun, 13 Sep - 2026 · 06:00\",\"es\":\"Dom, 13 Sep - 2026 · 06:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"+B Supermercados\",\"id\":\"315264096\",\"url\":\"\",\"email\":\"marketing02@grupomaisbarato.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 13 Set - 2026 · 11:00\",\"en\":\"Sun, 13 Sep - 2026 · 11:00\",\"es\":\"Dom, 13 Sep - 2026 · 11:00\"},\"name\":\"+B RUN - 3° Edição\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Avenida Centenário\",\"address_alt\":\"\",\"city\":\"Belém\",\"address_num\":\"1052\",\"name\":\"Shopping Bosque Grão-Pará\",\"lon\":-48.4644747,\"state\":\"PA\",\"neighborhood\":\"Val-de-Cans\",\"zip_code\":\"66640-150\",\"lat\":-1.388357},\"id\":3380391,\"start_date\":\"2026-09-13T09:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-08-02T02:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69dfd40c7c47a.jpg\",\"xs\":\"https://images.sympla.com.br/69dfd40c7c47a-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69dfd40c7c47a-lg.jpg\"},\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/bloco-vumbora-belo-horizonte-2026/3386560\",\"start_date_formats\":{\"pt\":\"Sab, 01 Ago - 2026 · 14:00\",\"en\":\"Sat, 01 Aug - 2026 · 14:00\",\"es\":\"Sab, 01 Ago - 2026 · 14:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Trio Produtora \",\"id\":\"2462035\",\"url\":\"\",\"email\":\"administrativo@trioprodutora.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Sab, 01 Ago - 2026 · 23:00\",\"en\":\"Sat, 01 Aug - 2026 · 23:00\",\"es\":\"Sab, 01 Ago - 2026 · 23:00\"},\"name\":\"BLOCO VUMBORA BELO HORIZONTE 2026\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Olhos D'Água, Belo Horizonte \",\"address_alt\":\"\",\"city\":\"Belo Horizonte\",\"address_num\":\"0\",\"name\":\"Mirante Beagá\",\"lon\":-43.9676464,\"state\":\"MG\",\"neighborhood\":\"Olhos d'Água\",\"zip_code\":\"30390-082\",\"lat\":-19.9860847},\"id\":3386560,\"start_date\":\"2026-08-01T17:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-08-30T20:00:00+00:00\",\"images\":{\"original\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3f8nbh52oevn5elboate5m148j1co1bfmldsfehi5nhvrf8a8cl0hi20t557bp5c276ma5frt2v87a7rqikv2iag15kf92vul6e7f7k.webp\",\"lg\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3f8nbh52oevn5elboate5m148j1co1bfmldsfehi5nhvrf8a8cl0hi20t557bp5c276ma5frt2v87a7rqikv2iag15kf92vul6e7f7k.webp\",\"xs\":\"https://assets.bileto.sympla.com.br/eventmanager/production/3f8nbh52oevn5elboate5m148j1co1bfmldsfehi5nhvrf8a8cl0hi20t557bp5c276ma5frt2v87a7rqikv2iag15kf92vul6e7f7k.webp\"},\"global_score\":636324,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://bileto.sympla.com.br/event/116591\",\"start_date_formats\":{\"pt\":\"Sex, 22 Mai - 2026 · 20:00\",\"en\":\"Fri, 22 May - 2026 · 20:00\",\"es\":\"Vie, 22 May - 2026 · 20:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"TEATRO PORTO SEGURO\",\"id\":\"4549\",\"url\":\"\",\"email\":\"halicia@teatroportoseguro.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 30 Ago - 2026 · 17:00\",\"en\":\"Sun, 30 Aug - 2026 · 17:00\",\"es\":\"Dom, 30 Ago - 2026 · 17:00\"},\"name\":\"RITA LEE, UMA AUTOBIOGRAFIA MUSICAL - 2026\",\"company\":\"ttrs\",\"location\":{\"country\":\"\",\"address\":\"Alameda Barão de Piracicaba, 740\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"0\",\"name\":\"Teatro Porto\",\"lon\":-46.6442583,\"state\":\"SP\",\"neighborhood\":\"\",\"zip_code\":\"\",\"lat\":-23.5322304},\"id\":50116591,\"start_date\":\"2026-05-22T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-13T08:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69cbb90206ff0.png\",\"xs\":\"https://images.sympla.com.br/69cbb90206ff0-xs.png\",\"lg\":\"https://images.sympla.com.br/69cbb90206ff0-lg.png\"},\"global_score\":406719,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/livinho-tour-fazer-falta-12-06/3368805\",\"start_date_formats\":{\"pt\":\"Sex, 12 Jun - 2026 · 22:00\",\"en\":\"Fri, 12 Jun - 2026 · 22:00\",\"es\":\"Vie, 12 Jun - 2026 · 22:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"MID_TAIL\",\"name\":\"Opinião Produtora\",\"id\":\"2717842\",\"url\":\"\",\"email\":\"sympla@opiniao.com.br\",\"organizer_range_id\":\"2\"},\"end_date_formats\":{\"pt\":\"Sab, 13 Jun - 2026 · 05:00\",\"en\":\"Sat, 13 Jun - 2026 · 05:00\",\"es\":\"Sab, 13 Jun - 2026 · 05:00\"},\"name\":\"Livinho // tour FAZER FALTA // 12.06\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Avenida Severo Dullius\",\"address_alt\":\"\",\"city\":\"Porto Alegre\",\"address_num\":\"1995\",\"name\":\"KTO Arena\",\"lon\":-51.1768024,\"state\":\"RS\",\"neighborhood\":\"\",\"zip_code\":\"90200-310\",\"lat\":-29.9875985},\"id\":3368805,\"start_date\":\"2026-06-13T01:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-05-29T21:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69b071b14edb4.jpg\",\"xs\":\"https://images.sympla.com.br/69b071b14edb4-xs.jpg\",\"lg\":\"https://images.sympla.com.br/69b071b14edb4-lg.jpg\"},\"global_score\":417416,\"duration_type\":\"multiple\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/i-congresso-de-direito-previdenciario/3317836\",\"start_date_formats\":{\"pt\":\"Qui, 28 Mai - 2026 · 17:00\",\"en\":\"Thu, 28 May - 2026 · 17:00\",\"es\":\"Jue, 28 May - 2026 · 17:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"ESA/OAB-BA\",\"id\":\"916521\",\"url\":\"\",\"email\":\"faleconoscoesa@oab-ba.org.br\",\"organizer_range_id\":\"3\"},\"end_date_formats\":{\"pt\":\"Sex, 29 Mai - 2026 · 18:00\",\"en\":\"Fri, 29 May - 2026 · 18:00\",\"es\":\"Vie, 29 May - 2026 · 18:00\"},\"name\":\"I Congresso de Direito Previdenciário\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Avenida Octávio Mangabeira\",\"address_alt\":\"\",\"city\":\"Salvador\",\"address_num\":\"5.490\",\"name\":\"Centro de Convenções Salvador\",\"lon\":-38.4330346,\"state\":\"BA\",\"neighborhood\":\"\",\"zip_code\":\"41706-690\",\"lat\":-12.9838422},\"id\":3317836,\"start_date\":\"2026-05-28T20:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-06-12T00:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/6a0e129322d18.png\",\"xs\":\"https://images.sympla.com.br/6a0e129322d18-xs.png\",\"lg\":\"https://images.sympla.com.br/6a0e129322d18-lg.png\"},\"global_score\":367610,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/bailao-das-panicats-nervosas-aula-noturna/3433079\",\"start_date_formats\":{\"pt\":\"Qui, 11 Jun - 2026 · 20:00\",\"en\":\"Thu, 11 Jun - 2026 · 20:00\",\"es\":\"Jue, 11 Jun - 2026 · 20:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"LONG_TAIL\",\"name\":\"Panicats Nervosas\",\"id\":\"19958851\",\"url\":\"\",\"email\":\"ferreiranicolas@icloud.com\",\"organizer_range_id\":\"3\"},\"end_date_formats\":{\"pt\":\"Qui, 11 Jun - 2026 · 21:00\",\"en\":\"Thu, 11 Jun - 2026 · 21:00\",\"es\":\"Jue, 11 Jun - 2026 · 21:00\"},\"name\":\"Bailão das Panicats Nervosas (Aula Noturna)\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Rua Coelho Lisboa\",\"address_alt\":\"\",\"city\":\"São Paulo\",\"address_num\":\"430\",\"name\":\"Blanco Rooftop\",\"lon\":-46.572232,\"state\":\"SP\",\"neighborhood\":\"Cidade Mãe do Céu\",\"zip_code\":\"03323-040\",\"lat\":-23.5480935},\"id\":3433079,\"start_date\":\"2026-06-11T23:00:00+00:00\",\"event_type\":\"NORMAL\"},{\"end_date\":\"2026-08-16T05:00:00+00:00\",\"images\":{\"original\":\"https://images.sympla.com.br/69fc9c0a44165.png\",\"xs\":\"https://images.sympla.com.br/69fc9c0a44165-xs.png\",\"lg\":\"https://images.sympla.com.br/69fc9c0a44165-lg.png\"},\"global_score\":468617,\"duration_type\":\"single\",\"type\":\"NORMAL\",\"url\":\"https://www.sympla.com.br/evento/cabare-turne-de-despedida/3416601\",\"start_date_formats\":{\"pt\":\"Sab, 15 Ago - 2026 · 20:00\",\"en\":\"Sat, 15 Aug - 2026 · 20:00\",\"es\":\"Sab, 15 Ago - 2026 · 20:00\"},\"organizer\":{\"image\":\"\",\"organizer_range\":\"UPPER_RANGE\",\"name\":\"Trio Produtora \",\"id\":\"2462035\",\"url\":\"\",\"email\":\"administrativo@trioprodutora.com.br\",\"organizer_range_id\":\"1\"},\"end_date_formats\":{\"pt\":\"Dom, 16 Ago - 2026 · 02:00\",\"en\":\"Sun, 16 Aug - 2026 · 02:00\",\"es\":\"Dom, 16 Ago - 2026 · 02:00\"},\"name\":\"CABARÉ - TURNÊ DE DESPEDIDA\",\"company\":\"sympla\",\"location\":{\"country\":\"BRASIL\",\"address\":\"Praça Vicentino Rodrigues da Cunha\",\"address_alt\":\"\",\"city\":\"Uberaba\",\"address_num\":\"110\",\"name\":\"Parque Fernando Costa\",\"lon\":-47.9455157,\"state\":\"MG\",\"neighborhood\":\"Jardim São Benedito\",\"zip_code\":\"38022-330\",\"lat\":-19.7697429},\"id\":3416601,\"start_date\":\"2026-08-15T23:00:00+00:00\",\"event_type\":\"NORMAL\"}],\"total\":10000,\"suggest\":\"\",\"limit\":24,\"page\":1}}],\"components_total\":16},\"seoData\":{\"title\":\"Seu Título\",\"description\":\"Sua Descrição\"}}},\"children\":[[\"$\",\"$L36\",null,{\"isAuthenticated\":false,\"hydrationData\":{\"cardPreviousView\":\"$37\",\"authHydration\":{\"userData\":null},\"locationHydration\":\"$39\",\"homeHydration\":\"$3b\"},\"sessionData\":null,\"isMobile\":false}],[\"$\",\"$L142\",null,{}],[\"$\",\"$L143\",null,{}]]}]\n"])</script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/8334-524ced26e8499d0a.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/2267-db77256b9456be75.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/4663-f023484031c97b32.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/6499-d029ad12f832b5b6.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/4956-6d6015a159ac1b32.js" async=""></script><script src="https://discovery-next.svc.sympla.com.br/_next/static/chunks/app/home/page-0cbbe304cac20dd4.js" async=""></script><div hidden id="S:1"><div class="hj48820" data-testid="home-matrix-wrapper"><div class="kj5z6d0" data-testid="matrix-container"><div><!--$--><!--/$--></div><div><!--$--><div id="section-container-slider-home-collection" data-section-name="section-container-slider" class="_11yjdhr1 animated fadeIn"><div class="_11yjdhr2 _11yjdhr0"><h2 class="_11yjdhr5">Explore nossas coleções</h2><div class="_11yjdhr7"><div class="_11yjdhr8" style="display:flex"><a class="_11yjdhr9" href="/categorias">Ver tudo</a></div></div></div><div class="_11yjdhrs"></div><div class="_11yjdhrb _11yjdhr0
           animated fadeIn"><div class="_11yjdhra"><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div><div class="k02n5g1" style="align-items:flex-start;background-color:transparent"><div class="k02n5g1" style="flex-direction:row;gap:var(--_6vhttq1w);background-color:transparent;padding:0;justify-content:flex-start"><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div><div class="k02n5g1" style="background-color:transparent;gap:var(--_6vhttq1u);align-items:center;width:118px;padding:0"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1u);min-width:118px;max-width:118px;height:106px;border-radius:var(--_6vhttq3)"></div></div></div></div></div><div class="_11yjdhrs"></div></div><!--/$--></div><div><!--$--><!--/$--><div class="kj5z6d1"><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div></div><div><!--$--><div id="section-container-slider-mais-vistos" data-section-name="section-container-slider" class="_11yjdhr1 animated fadeIn"><div class="_11yjdhr2 _11yjdhr0"><h2 class="_11yjdhr5">Eventos mais comprados nas últimas 24h </h2><div class="_11yjdhr7"><div class="_11yjdhr8" style="display:flex"><a class="_11yjdhr9" href="/eventos/mais-vistos">Ver tudo</a></div></div></div><div class="_11yjdhrs"></div><div class="_11yjdhrd _11yjdhr0
           animated fadeIn"><div class="_11yjdhra"><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div><div class="k02n5g1 _11yjdhr0 " style="background-color:transparent;align-items:flex-start;overflow:hidden"><div class="k02n5g1" style="background-color:transparent;padding:0;flex-direction:row;justify-content:flex-start;gap:var(--_6vhttq21)"><div class="k02n5g1" style="background-color:transparent"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:140px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:14px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div></div><div class="k02n5g1" style="background-color:transparent"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:140px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:14px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div></div><div class="k02n5g1" style="background-color:transparent"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:140px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:14px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div></div><div class="k02n5g1" style="background-color:transparent"><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:140px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:14px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:200px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div><div class="k02n5g2" style="margin-bottom:var(--_6vhttq1w);min-width:180px;max-width:260px;height:10px;border-radius:var(--_6vhttq1)"></div></div></div></div></div><div class="_11yjdhrs"></div></div><!--/$--></div></div></div><div class="r129yt0"><div class="r129yt1"><div class="r129ytb"><div class="r129ytc"><svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 25"><path d="M58.592 9.913v8.375a.226.226 0 0 1-.227.225H56.15a.226.226 0 0 1-.227-.225v-.605c-.587.67-1.459 1.077-2.652 1.077-2.331 0-4.253-2.03-4.253-4.66 0-2.63 1.922-4.659 4.253-4.659 1.193 0 2.065.406 2.652 1.077v-.605c0-.124.102-.225.227-.225h2.216c.126 0 .227.1.227.225zM1.114 15.645l2.083-1.197a.228.228 0 0 1 .317.093c.46.908 1.216 1.504 2.528 1.504 1.36 0 1.7-.532 1.7-1.011 0-.763-.716-1.065-2.595-1.58-1.86-.514-3.685-1.4-3.685-3.778 0-2.395 2.04-3.779 4.204-3.779 1.984 0 3.552.907 4.48 2.61.058.107.02.24-.086.302L8.04 9.98a.229.229 0 0 1-.316-.087c-.421-.764-1.005-1.23-2.058-1.23-.894 0-1.342.444-1.342.94 0 .569.305.96 2.255 1.545 1.896.567 4.025 1.224 4.025 3.85 0 2.394-1.932 3.813-4.651 3.813-2.54 0-4.196-1.158-4.935-2.884a.225.225 0 0 1 .096-.283zm18.65-5.951c.158 0 .268.154.216.3l-2.953 8.304c-.972 2.736-2.5 3.87-4.876 3.822a.227.227 0 0 1-.223-.226V19.85c0-.121.097-.22.219-.226 1.072-.044 1.615-.427 1.985-1.38a.227.227 0 0 0-.002-.17l-3.394-8.067a.226.226 0 0 1 .21-.313h2.45c.097 0 .182.06.215.149l1.931 5.28 1.633-5.27a.228.228 0 0 1 .217-.16h2.373zm24.573 4.435c0 2.643-1.933 4.683-4.276 4.683-1.2 0-2.076-.408-2.666-1.082v4.132c0 .138-.113.25-.253.25h-2.178a.251.251 0 0 1-.253-.25V9.944c0-.138.113-.25.253-.25h2.178c.14 0 .253.112.253.25v.583c.59-.674 1.467-1.082 2.666-1.082 2.343 0 4.276 2.04 4.276 4.684zM45.57 5.59h2.228c.126 0 .228.1.228.226v12.498a.227.227 0 0 1-.228.226H45.57a.227.227 0 0 1-.228-.226V5.817c0-.125.102-.226.228-.226zM29.972 9.317c2.058 0 3.399 1.455 3.399 3.672v5.22c0 .126-.067.332-.193.332H30.95c-.125 0-.223-.206-.223-.331v-4.99c0-.887-.409-1.455-1.268-1.455-.894 0-1.375.621-1.375 1.668v4.777c0 .125-.147.331-.273.331h-1.996c-.125 0-.273-.206-.273-.331v-4.777c0-1.047-.48-1.668-1.375-1.668-.86 0-1.268.568-1.268 1.455v4.99c0 .125-.097.331-.223.331h-2.228c-.126 0-.193-.206-.193-.331v-5.22c0-2.218 1.34-3.673 3.397-3.673 1.12 0 2.332.099 3.158 1.047.826-.948 2.043-1.047 3.162-1.047zm24.33-2.669a1.524 1.524 0 0 1-1.673 1.356 1.518 1.518 0 0 1-1.367-1.659 1.525 1.525 0 0 1 1.673-1.355c.84.083 1.452.826 1.367 1.658zm5.12-1.78a2.167 2.167 0 0 1-2.377 1.928 2.158 2.158 0 0 1-1.943-2.358 2.167 2.167 0 0 1 2.378-1.927 2.158 2.158 0 0 1 1.943 2.358zm-3.5 9.232c0-1.323-.89-2.153-2.118-2.153-1.228 0-2.118.83-2.118 2.153 0 1.324.89 2.154 2.118 2.154 1.228 0 2.118-.83 2.118-2.154zm-14.269.029c0-1.33-.895-2.164-2.13-2.164-1.234 0-2.128.833-2.128 2.164 0 1.33.894 2.164 2.129 2.164 1.234 0 2.129-.834 2.129-2.164z"></path></svg><span>para Produtores</span></div></div><div class="r129yt2"><div><h3 class="r129yt3">Crie eventos, divulgue e venda ingressos com facilidade</h3><div class="r129yt4"><div class="r129yt5"><svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16.667 25-5.126 5.19c-.715.723-1.072 1.085-1.38 1.111a.833.833 0 0 1-.701-.288c-.2-.234-.2-.743-.2-1.76v-2.6c0-.913-.748-1.573-1.651-1.706v0a5 5 0 0 1-4.223-4.222c-.053-.36-.053-.79-.053-1.65v-7.741c0-2.8 0-4.2.545-5.27a5 5 0 0 1 2.185-2.186c1.07-.545 2.47-.545 5.27-.545h12.334c2.8 0 4.2 0 5.27.545a5 5 0 0 1 2.185 2.186c.545 1.07.545 2.47.545 5.27v7m0 18.333-3.628-2.522c-.51-.355-.765-.532-1.042-.658a3.336 3.336 0 0 0-.771-.241c-.3-.055-.61-.055-1.231-.055H22c-1.867 0-2.8 0-3.513-.364a3.334 3.334 0 0 1-1.457-1.456c-.363-.713-.363-1.647-.363-3.514v-4.19c0-1.867 0-2.8.363-3.514.32-.627.83-1.137 1.457-1.456.713-.363 1.646-.363 3.513-.363h9.333c1.867 0 2.8 0 3.514.363.627.32 1.137.83 1.456 1.457.364.713.364 1.646.364 3.513v4.524c0 1.553 0 2.33-.254 2.942a3.333 3.333 0 0 1-1.804 1.804c-.613.254-1.39.254-2.942.254v3.476Z" stroke="#7839EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Da publicação à venda: <b>suporte em todas as etapas.</b></span></div><div class="r129yt5"><svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.333 21.667a9.968 9.968 0 0 0 2.902 7.043c.172.174.259.261.31.345.049.08.077.149.099.24.023.096.023.204.023.421v3.95c0 .467 0 .7.09.879.08.157.208.284.365.364.178.091.411.091.878.091h3.166c.467 0 .7 0 .879-.09a.833.833 0 0 0 .364-.365c.09-.178.09-.412.09-.878V33c0-.467 0-.7.092-.878a.833.833 0 0 1 .364-.364c.178-.091.412-.091.878-.091h2.334c.466 0 .7 0 .878.09.157.08.284.208.364.365.09.178.09.411.09.878v.667c0 .466 0 .7.092.878.08.157.207.284.364.364.178.091.412.091.878.091H27c.467 0 .7 0 .878-.09a.833.833 0 0 0 .364-.365c.091-.178.091-.412.091-.878V32.04c0-.337 0-.506.048-.64a.77.77 0 0 1 .202-.317c.103-.1.276-.181.623-.342a10.04 10.04 0 0 0 4.046-3.425c.178-.26.267-.39.362-.466a.772.772 0 0 1 .284-.15c.117-.034.256-.034.533-.034h.902c.467 0 .7 0 .879-.091a.833.833 0 0 0 .364-.364c.09-.179.09-.412.09-.879v-5.69c0-.444 0-.667-.082-.838a.833.833 0 0 0-.39-.39c-.17-.082-.393-.082-.837-.082-.322 0-.482 0-.612-.043a.772.772 0 0 1-.339-.217c-.094-.1-.17-.265-.324-.597a10.021 10.021 0 0 0-1.983-2.853c-.173-.174-.26-.261-.31-.345a.773.773 0 0 1-.1-.24c-.022-.095-.022-.204-.022-.421v-1.85c0-.6 0-.9-.125-1.101a.834.834 0 0 0-.481-.363c-.229-.065-.517.018-1.094.183l-3.954 1.13c-.067.019-.101.028-.135.035a.834.834 0 0 1-.092.013c-.035.003-.07.003-.14.003h-.714m-16.599 10a9.999 9.999 0 0 1 5.34-8.85m-5.34 8.85H6.667A3.333 3.333 0 0 1 5 15.446m20-4.613a5.833 5.833 0 1 1-11.667 0 5.833 5.833 0 0 1 11.667 0Z" stroke="#7839EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Publicação grátis: <b>sem taxa de adesão ou mensalidade.</b></span></div></div></div><div><video class="r129yt6" width="480" height="300" autoPlay="" loop="" muted="" playsInline="" poster="/discovery-assets/organizerPoster.webp"><source src="/discovery-assets/organizerVideo.webm" type="video/webm"/><source src="/discovery-assets/organizerVideo.mp4" type="video/mp4"/></video><div class="r129yt7"><a class="r129yt8" href="https://organizador.sympla.com.br/criar-evento?presencial=1">Crie seu evento</a><a class="r129yta r129yt8" target="_blank" rel="noopener noreferrer" href="https://produtores.sympla.com.br/como-funciona/">Veja como funciona</a></div></div></div></div></div><section class="_1t74vga0"><div class="_1birs5v0"><h3 class="_1t74vga1">Precisa de ajuda?</h3><h3 class="_1t74vga1 _1t74vga2">Tire suas dúvidas aqui</h3><div class="_1nxsg0pa" data-orientation="vertical"><div data-state="closed" data-orientation="vertical" class="_1nxsg0pb"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R17sv9vkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:R7sv9vkq:" class="_1nxsg0pc _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pf" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M19 11a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2z"></path></svg></div><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M11 19v-6H5a1 1 0 1 1 0-2h6V5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0"></path></svg></div><p class="_1nxsg0pd">Como eu cancelo ou peço reembolso de ingressos?</p></button></h3><div data-state="closed" id="radix-:R17sv9vkq:" hidden="" role="region" aria-labelledby="radix-:R7sv9vkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 _1nxsg0ph" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1nxsg0pb"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1bsv9vkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rbsv9vkq:" class="_1nxsg0pc _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pf" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M19 11a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2z"></path></svg></div><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M11 19v-6H5a1 1 0 1 1 0-2h6V5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0"></path></svg></div><p class="_1nxsg0pd">Como localizar meus ingressos?</p></button></h3><div data-state="closed" id="radix-:R1bsv9vkq:" hidden="" role="region" aria-labelledby="radix-:Rbsv9vkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 _1nxsg0ph" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1nxsg0pb"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1fsv9vkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rfsv9vkq:" class="_1nxsg0pc _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pf" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M19 11a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2z"></path></svg></div><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M11 19v-6H5a1 1 0 1 1 0-2h6V5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0"></path></svg></div><p class="_1nxsg0pd">Como trocar a titularidade do ingresso?</p></button></h3><div data-state="closed" id="radix-:R1fsv9vkq:" hidden="" role="region" aria-labelledby="radix-:Rfsv9vkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 _1nxsg0ph" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1nxsg0pb"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1jsv9vkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rjsv9vkq:" class="_1nxsg0pc _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pf" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M19 11a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2z"></path></svg></div><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M11 19v-6H5a1 1 0 1 1 0-2h6V5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0"></path></svg></div><p class="_1nxsg0pd">Como acesso meu certificado?</p></button></h3><div data-state="closed" id="radix-:R1jsv9vkq:" hidden="" role="region" aria-labelledby="radix-:Rjsv9vkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 _1nxsg0ph" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div><div data-state="closed" data-orientation="vertical" class="_1nxsg0pb"><h3 data-orientation="vertical" data-state="closed" class="_1nxsg0pi"><button type="button" aria-controls="radix-:R1nsv9vkq:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:Rnsv9vkq:" class="_1nxsg0pc _1nxsg0p0 _1nxsg0p1" data-radix-collection-item=""><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pf" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M19 11a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2z"></path></svg></div><div class="_1nxsg0pe _1tpyz4r95 _1nxsg0pg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24"><path fill="#0097FF" d="M11 19v-6H5a1 1 0 1 1 0-2h6V5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0"></path></svg></div><p class="_1nxsg0pd">Não consigo acessar minha conta, o que fazer?</p></button></h3><div data-state="closed" id="radix-:R1nsv9vkq:" hidden="" role="region" aria-labelledby="radix-:Rnsv9vkq:" data-orientation="vertical" class="AccordionContent _1nxsg0p5 _1nxsg0ph" style="--radix-accordion-content-height:var(--radix-collapsible-content-height);--radix-accordion-content-width:var(--radix-collapsible-content-width)"></div></div></div></div></section></div><script>$RS=function(a,b){a=document.getElementById(a);b=document.getElementById(b);for(a.parentNode.removeChild(a);a.firstChild;)b.parentNode.insertBefore(a.firstChild,b);b.parentNode.removeChild(b)};$RS("S:1","P:1")</script><script>$RC=function(b,c,e){c=document.getElementById(c);c.parentNode.removeChild(c);var a=document.getElementById(b);if(a){b=a.previousSibling;if(e)b.data="$!",a.setAttribute("data-dgst",e);else{e=b.parentNode;a=b.nextSibling;var f=0;do{if(a&&8===a.nodeType){var d=a.data;if("/$"===d)if(0===f)break;else f--;else"$"!==d&&"$?"!==d&&"$!"!==d||f++}d=a.nextSibling;e.removeChild(a);a=d}while(a);for(;c.firstChild;)e.insertBefore(c.firstChild,a);b.data="$"}b._reactRetry&&b._reactRetry()}};$RC("B:0","S:0")</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"d7be63b7a6854841bc3bb61a8418df86","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body></html>