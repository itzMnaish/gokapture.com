<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5KZC2ZL');</script>
<!-- End Google Tag Manager --> 

	<title>Explore</title>

	<!-- Core Stylesheet-->

    <link rel="stylesheet" href="style.css">

	 <!--Bootstrap CSS -->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

    

	<style>

		.active {

			color: white;

			background-color: #e30083;

		}

		button{

		    background: white;

            border: 1px solid #e30083 !important;

            color: #e30083;

            border-radius: 0px;

            margin:10px;

            font-size: 0.8rem !important;

            text-transform: capitalize;

		}

		.tags{

		    background: black;

            padding: 10px;

            margin-top: -7px;

            width: 100.3%;

		}

		.single-tag{

		    background: #e72796;

            color: white;

            padding: 5px;   

            margin:5px;

            font-size: 0.7rem;

		}

		#tag-buttons{

		    text-align:center;

		}

		#searchInput{

		    width: 50%;

            border: 2px solid #e30083;

            padding: 5px;

            border-radius: 5px;

		}

		.all-img{

		    margin:10px;

		}

		

		.figure-caption{

		    margin-top:-10px;

		    padding:10px;

		    background:black;

		}

		

		.figure-caption h3{

		    color:white;

		}

		.figure{

		    cursor: pointer;

		}

	</style>

</head>

<body onload="trigger_click('All')">

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KZC2ZL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?php include("tempnavbar.php");?>

	<div class="container mt-120 pt-3" style="margin-top:150px;">

		<!--<h1 class="mt-5">Explore</h1>-->

		<div style="display:flex;justify-content:center;align-items:center;">

		    <input type="text" id="searchInput" placeholder="Search">

		</div>

		<div class="my-3" id="tag-buttons">

			<!-- Buttons will be added here dynamically -->

		</div>

		<div id="content">

			<!-- Dynamic content will be added here -->

		</div>

		<script>

			// Define the tags and their content

			var tagContent = {

			    'All':{

			        tags:'',

					images: [

					    

					],

					videos: [

						

					]

			    },

				'360 Spin Booth': {

				    tags:'#360photobooth #360videobooth #360booth #360degreespinbooth #360spinner',

					images: [

					    './img/explore_img/360 spin booth 1.jpeg',

					    './img/explore_img/360 spin booth 2.jpeg',

					    './img/explore_img/360 spin booth 3.jpeg'

					],

					videos: [

						'https://www.youtube.com/embed/2GrXthlDok0',

						'https://www.youtube.com/embed/s1o8C8MKJEY',

						'https://www.youtube.com/embed/2GrXthlDok0'

					]

				},

				'Selfie Booth': {

				    tags:'#selfiebooth #photobooth',

					images: [

					    './img/explore_img/Selfie Booth img 1.jpg',

					    './img/explore_img/Selfie Booth img 2.jpg',

					    './img/explore_img/Selfie Booth img 3.jpg'

					    ],

					videos: [

						'https://www.youtube.com/embed/rWLFH4r7eIM',

						'https://www.youtube.com/embed/rWLFH4r7eIM',

						'https://www.youtube.com/embed/HlQ8AeqJZVo'

					]

				},

				'Hashtag Printer': {

				    tags:'#hashtagprinter #polaroidbooth #photobooth',

					images: [

					    './img/explore_img/Hashtag Printer 1.jpg',

					    './img/explore_img/Hashtag Printer 2.jpg',

					    './img/explore_img/Hashtag Printer 3.jpg'

					    ],

					videos: [

						'https://www.youtube.com/embed/Q4yUn0OuU94',

						'https://www.youtube.com/embed/dHA8DcpKtdQ',

						'https://www.youtube.com/embed/u88P0NyRCiM'

					]

				},

				'Magic Mirror': {

				    tags:'#magicmirror #magicmirrorphotobooth #selfiebooth',

					images: [

					    './img/explore_img/Magic Mirror 1.jpg',

					    './img/explore_img/Magic Mirror 2.jpg',

					    './img/explore_img/Magic Mirror 3.jpg'

					    ],

					videos: [

						'https://www.youtube.com/embed/92cWtCE3pLo',

						'https://youtube.com/embed/2rnwD34QR1Q',

						'https://youtube.com/embed/SIkS7lTMNQw'

					]

				},

				'AR Stash': {

				    tags:'#augmentedreality #snagnstash #catchtheobject',

					images: [

					    ],

					videos: [

						'https://www.youtube.com/embed/fXI55DI87JQ',

						'https://www.youtube.com/embed/fXI55DI87JQ',

						'https://youtube.com/embed/zy9sAdclQXU'

					]

				},

				'AR Mind Reader': {

				    tags:'#augmentedreality #ARmindreader',

					images: [

					    ],

					videos: [

						'https://www.youtube.com/embed/1DP0ertyyI8',

						'https://www.youtube.com/embed/pSZbjZwBDMk',

						'https://youtube.com/embed/_cHzIEJAIXc'

					]

				},

				'Anti Gravity': {

				    tags:'#antigravitybooth #photobooth',

					images: [

					    './img/explore_img/anti gravity 1.jpg',

					    './img/explore_img/anti gravity 2.jpg',

					    './img/explore_img/anti gravity 3.jpg'

					    ],

					videos: [

					    

					]

				},

				'GIF Booth':  {

				    tags:'#giffybooth #GIFbooth #photobooth #videobooth #boomerangbooth',

					images: [

					    './img/explore_img/gif booth 1.gif',

					    './img/explore_img/gif booth 2.gif',

					    './img/explore_img/gif booth 3.gif'

					    ],

					videos: [

						'https://www.youtube.com/embed/EPjFBIk44fg',

						'https://www.youtube.com/embed/Y53RLbXZLdw'

					]

				},

                'Boomerang Booth':  {

				    tags:'#giffybooth #GIFbooth #photobooth #videobooth #boomerangbooth',

					images: [

					    './img/explore_img/boomreng booth.gif'

					    ],

					videos: [

						'https://www.youtube.com/embed/JzpKSwCdOHo'

					]

				},

				'Croma video booth': {

				    tags:'#chromabooth #cromabooth #greenscreenvideobooth #videobooth',

					images: [

					    './img/explore_img/croma video booth.jpeg',

					    ],

					videos: [

						'https://www.youtube.com/embed/ICr_UJuZivk',

						'https://youtube.com/embed/l2CyMbbGf1w',

						'https://youtube.com/embed/fkDMF8x-Lao'

					]

				},

				'Digital Caricature': {

				    tags:'#digitalcaricature #digitalcaricaturebooth #photobooth',

					images: [

					    './img/explore_img/Digital Caricature 1.jpeg',

					    './img/explore_img/Digital Caricature 2.jpeg',

					    './img/explore_img/Digital Caricature 3.jpeg'

					    ],

					videos: [

						'https://youtube.com/embed/BnFtQWeSr7A',

						'https://www.youtube.com/embed/zH-x0cWi49Y',

						'https://youtube.com/embed/frIJFRhp4KM'

					]

				},

				'Strip Photo booth': {

				    tags:'#photostripbooth #selfiebooth #photoscrapbook #stripphotobooth #photobooth',

					images: [

					    './img/explore_img/Strip Photo booth 1.jpeg',

					    './img/explore_img/Strip Photo booth 2.jpeg',

					    './img/explore_img/Strip Photo booth 3.jpeg'

					    ],

					videos: [

						'https://www.youtube.com/embed/2nb5ZT2YHiY',

						'https://www.youtube.com/embed/xW-8gKi_r0I',

						'https://youtube.com/embed/HK_XtHnYpkc'

					]

				},

				'Flipbook': {

				    tags:'#flipbook #kineograph #photoboth',

					images: [

					    ],

					videos: [

						'https://www.youtube.com/embed/MiMeYi3C1bY'

					]

				},

				'Physical Mosaic': {

				    tags:'#mosaicwall #photomosaicwall #physicalmosaic',

					images: [

					    './img/explore_img/Physical Mosaic 1.jpeg',

					    './img/explore_img/Physical Mosaic 2.jpeg',

					    './img/explore_img/Physical Mosaic 3.jpeg'

					    ],

					videos: [

						'https://www.youtube.com/embed/Sg5kKm0EgRc',

						'https://youtube.com/embed/ggGka86bn_g'

					]

				},

				'Virtual Reality Games': {

				    tags:'',

					images: [

					    ],

					videos: [

						'https://www.youtube.com/embed/GQcnD-merzw',

					]

				},

				'Freeze Cam': {

				    tags:'#360photobooth #360videobooth #360booth #360degreefreezebooth #180degreefreezebooth #GIFbooth #videobooth #bullettimebooth #freezecam',

					images: [

					    

					    ],

					videos: [

						'https://www.youtube.com/embed/jg9d0HEUpqk',

						'https://www.youtube.com/embed/Yjza5mbNlUs'

					]

				},

				'Magazine Booth': {

				    tags:'#magazinebooth #photobooth #greenscreenbooth',

					images: [

					    './img/explore_img/Magazine Booth 1.jpg',

					    './img/explore_img/Magazine Booth 2.jpg',

					    './img/explore_img/Magazine Booth 3.jpg',

					    ],

					videos: [

						'https://youtube.com/embed/MERgrpp5gGQ'

					]

				},

				'Bobble Head Booth': {

				    tags:'#bobblehead #wobbler #dancinghead #nodder #wackywobbler #photobooth',

					images: [

					    './img/explore_img/Bobble Head Booth 1.jpeg',

					    './img/explore_img/Bobble Head Booth 2.jpeg',

					    './img/explore_img/Bobble Head Booth 3.jpeg'

					    ],

					videos: [

						'https://youtube.com/embed/Y8e56ZxfPRs',

						'https://youtube.com/embed/ZNefNiKZ03g'

					]

				},

				'Virtual Paparazzi': {

				    tags:'#virtualpaparazzi',

					images: [

					    ],

					videos: [

					]

				}, 

				'Cycling Activity': {

				    tags:'#cyclingactivity #embeddedsystem #interactivedisplay',

					images: [

					    ],

					videos: [

						'https://youtube.com/embed/6qPIU4LdpTA'

					]

				}, 

				'Sling Shot': {

				    tags:'#slingshot 3digitalslingshot #embeddedsystem #interactivedisplay',

					images: [

					    './img/explore_img/sling shot.jpeg',

					    ],

					videos: [

						

					]

				},

				'AR Football':  {

				    tags:'#augmentedreality #ARfootball #games #ARgame',

					images: [

					    

					    ],

					videos: [

						'https://www.youtube.com/embed/GJH6jPo8dQs',

						

					]

				},

				'Word Cloud Booth':  {

				    tags:'#wordcloud #wordcloudphotobooth #photobooth',

					images: [

					    './img/explore_img/Word Cloud Booth 1.jpeg',

					    './img/explore_img/Word Cloud Booth 2.jpeg',

					    './img/explore_img/Word Cloud Booth 3.jpeg'

					    ],

					videos: [

						'https://youtube.com/embed/Ik8KKSdK98U'

					]

				},

				'Cash Cube':  {

				    tags:'#cashcube #games',

					images: [

					    ],

					videos: [

						'https://youtube.com/embed/klgh4l2_6O8'

					]

				},

				'Virtual Photobooth': {

				    tags:'#virtualphotobooth #photobooth',

					images: [

					    './img/explore_img/Virtual Photobooth 1.png',

					    './img/explore_img/Virtual Photobooth 2.jpg',

					    './img/explore_img/Virtual Photobooth 3.png'

					    ],

					videos: [

						'https://www.youtube.com/embed/j-ZKlSgZ6Mc',

						'https://www.youtube.com/embed/g2YgKQ3QNZI'

					]

				},

				'Light Painting Booth': {

				    tags:'#lightpaintingbooth #photobooth',

					images: [

					    './img/explore_img/light painting 1.jpg',

					    './img/explore_img/light painting 2.jpg',

					    './img/explore_img/light painting 3.jpg',

					    ],

					videos: [

						'https://www.youtube.com/embed/ZhB3y9vQOQs',

						'https://www.youtube.com/embed/Kbqg5wCR0GA'

					]

				},

				'Augmented Reality Booth': {

				    tags:'#augmentedreality #ARpohotobooth #photobooth',

					images: [

					    './img/explore_img/Augmented Reality Booth.jpg'

					    ],

					videos: [

						'https://www.youtube.com/embed/wMJjZozYz2Y'

					]

				},

				'Social Wall': {

				    tags:'#socialwall #interactivedisplay #photowall',

					images: [

					    './img/explore_img/Social Wall 1.jpg',

					    './img/explore_img/Social Wall 2.jpg',

					    './img/explore_img/Social Wall 3.jpg',

					    ],

					videos: [

						'https://www.youtube.com/embed/DEB2O4HMdto',

						'https://www.youtube.com/embed/fVl08RGJcNQ',

						'https://youtube.com/embed/_kQp0YYoQhk'

					]

				},

				'Excitometer': {

				    tags:'#excitometer #webapplication #soundometer',

					images: [

					    

					    ],

					videos: [

						'https://www.youtube.com/embed/i9JxOkOjQms',

					]

				},

				'Social Media Post Booth': {

				    tags:'#socialmediapostbooth #videobooth',

					images: [

					    

					    ],

					videos: [

						

					]

				},

				'Treadmill Booth': {

				    tags:'#treadmillbooth #videobooth #virtualcatwalk',

					images: [

					    

					    ],

					videos: [

						'https://www.youtube.com/embed/qEs4DGPHluI'

					]

				},

				'Croma Photo Booth':  {

				    tags:'#chromabooth #cromabooth #greenscreenbooth #photobooth',

					images: [

					    './img/explore_img/croma photo booth 1.jpg',

					    './img/explore_img/croma photo booth 2.jpg',

					    './img/explore_img/croma photo booth 3.jpg',

					    ],

					videos: [

						'https://www.youtube.com/embed/XQaaMPAl5zE',

						''

					]

				},

				'Trampoline Booth':  {

				    tags:'#trampolinebooth #photobooth',

					images: [

					    './img/explore_img/Trampoline Booth.jpg',

					    ],

					videos: [

					]

				},

				'Golf Simulator': {

				    tags:'#virtualreality #golfsimulator #games #VRgame',

					images: [

					    './img/explore_img/golf simulator.jpeg',

					    ],

					videos: [

					    'https://www.youtube.com/embed/ZK9f-lJiuWM',

					]

				},

				'digital hoopla': {

				    tags:'#digitalhoopla #games',

					images: [

					    './img/explore_img/golf simulator.jpeg',

					    ],

					videos: [

					    'https://www.youtube.com/embed/ZK9f-lJiuWM',

					]

				},

				'hashtag campaign': {

				    tags:'#hashtagcampaign #brandpromotions ',

					images: [

					    './img/explore_img/hashtag campaign.png',

					    ],

					videos: [

					]

				},

				'registration software': {

				    tags:'#reistrationsoftware #eventregistration #QRcodescanner',

					images: [

					    './img/explore_img/registration software 1.jpg',

					    './img/explore_img/registration software 2.jpg',

					    ],

					videos: [

					]

				},

				'digital jigsaw puzzle': {

				    tags:'#digitaljigsawpuzzle #games',

					images: [

					    ],

					videos: [

					]

				},

				'interactive quizzes': {

				    tags:'#interactivequiz #games',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/QI2qdCsCnkY'

					]

				},

				'batak pro': {

				    tags:'#batakpro #embeddedsystem',

					images: [

					    ],

					videos: [

					    'https://youtube.com/embed/OdbLCEVpqLc'

					]

				},

				'stepper': {

				    tags:'#stepperactivity #embeddedsystem #interactivedisplay',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/HvCMSOUCY6M'

					]

				},

				'AR virtual weight balancing': {

				    tags:'#augmentedreality #ARvirtualweightbalancing #games #ARgame',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/QSBgD4eHN1c'

					]

				},

				'AR filters': {

				    tags:'#augmentedreality #ARfilters #games #ARgame',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/QSBgD4eHN1c'

					]

				},

				'virtual try ons': {

				    tags:'#augmentedreality #virtualtryon #virtualcatwalk #games #ARgame',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/8wyRRAGwmdo'

					]

				},

				'globe booth': {

				    tags:'#globebooth #photobooth',

					images: [

					    ],

					videos: [

					]

				},

				'duplicate photo booth': {

				    tags:'#duplicatephotobooth #photobooth',

					images: [

					    ],

					videos: [

					]

				},

				'slow motion booth': {

				    tags:'#slowmotionbooth #slowmovideobooth #videobooth',

					images: [

					    ],

					videos: [

					]

				},

				'AR selfie with celebs/ leadership booth': {

				    tags:'#augmentedreality #ARbooth #photobooth #leadershipbooth',

					images: [

					    './img/explore_img/AR selfie with celebs 1.jpg',

					    './img/explore_img/AR selfie with celebs 2.jpg',

					    ],

					videos: [

					    'https://youtube.com/embed/jlmZrh1EUg8'

					]

				},

				'AR zoo': {

				    tags:'#augmentedreality #ARzoo #games #ARgame',

					images: [

					    

					    ],

					videos: [

					    

					]

				},

				'Beat Saber': {

				    tags:'#virtualreality #beatsaber #games #VRgame',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/GQcnD-merzw'

					]

				},

				'walk on plank': {

				    tags:'#virtualreality #walkonplank #games #VRgame',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/hcwd-TPT560'

					]

				},

				'roller coaster': {

				    tags:'#virtualreality #rollercoaster #games #VRgame',

					images: [

					    ],

					videos: [

					    'https://www.youtube.com/embed/2ucXdAC9DXY'

					]

				},

				'VR football': {

				    tags:'#virtualreality #VRfootball #games #VRgame',

					images: [

					    ],

					videos: [

					]

				},

				'VR cricket': {

				    tags:'#virtualreality #VRcricket #games #VRgame',

					images: [

					    ],

					videos: [

					]

				},

				'VR shooting game': {

				    tags:'#virtualreality #VRshooting #games #VRgame',

					images: [

					    ],

					videos: [

					]

				},

                'LED countdown timer': {

				    tags:'#LEDcoutdowntimer',

					images: [

					    ],

					videos: [

					]

				},

				'display wall': {

				    tags:'#displaywall #photowall #webapplication',

					images: [

					    ],

					videos: [

					]

				},

				'event registration': {

				    tags:'',

					images: [

					    ],

					videos: [

					]

				},

				'match the cards memory game': {

				    tags:'#matchthecards #memorygame #games',

					images: [

					    ],

					videos: [

					]

				},

				'sorting game': {

				    tags:'#sortinggame #games',

					images: [

					    ],

					videos: [

					]

				},

				'sudoku': {

				    tags:'#sudoku #games',

					images: [

					    ],

					videos: [

					]

				},

				'running game': {

				    tags:'#runninggame #games',

					images: [

					    ],

					videos: [

					]

				},

				'gesture games': {

				    tags:'#gesturegames #games',

					images: [

					    ],

					videos: [

					]

				},

				'bottons based interactive wall': {

				    tags:'#buttonsbasedinteractivewall #interactivedisplay #digitaldisplay',

					images: [

					    ],

					videos: [

					]

				},

				'interactive display- content development': {

				    tags:'#interactivedisplay #digitaldisplay',

					images: [

					    './img/explore_img/interactive display- content development.jpeg',

					    ],

					videos: [

					    'https://www.youtube.com/embed/whRlM8dBReA'

					]

				},

			};



			// Get the tag names

			var tags = Object.keys(tagContent);

			

            

            

            

			// Create buttons for each tag

			tags.forEach(function(tag) {

				var button = document.createElement('button');

				button.classList.add('btn','tag-btn');

				button.dataset.tag = tag;

				button.innerText = tag;

				document.getElementById('tag-buttons').appendChild(button);

			});

			

			



			// Add click event listeners to all buttons

			var buttons = document.querySelectorAll('#tag-buttons button');

			buttons.forEach(function(button,index) {

			    if(index==0){

			        button.addEventListener('click', function() {

					// Remove active class from all buttons

					buttons.forEach(function(button) {

						button.classList.remove('active');

					});

                    scrollToElement();

					// Add active class to clicked button

					this.classList.add('active');

					var contentHTML = '<div class="row" >';

					tags.forEach(function(tag){

					    var tag_content = tagContent[tag];

					    if(tag_content.images[0] != undefined){

					        

					        // Replace content with content for clicked tag

    					   //contentHTML += '<div class="col-4"><img class="all-img" src="' + tag_content.images[0] + '" class="img-fluid"> </div>';  

    					   

    					   contentHTML += '<div class="col-4"><figure onclick="trigger_click(this.id);" id="'+tag+'" class="all-img figure"><img class="figure-img" src="'+tag_content.images[0]+'" alt="'+tag+'"><figcaption class="figure-caption"><h3>'+tag+'</h3>'+tag_content.tags.split(" ").map(function(tag) {

                                return ('<span class="single-tag">'+tag+'</span>');

                        }).join("")+'</figcaption></figure></div>'

					    }

					});

					contentHTML += '</div>';

					document.getElementById('content').innerHTML = contentHTML;

					});

			    }

			    else{

			        button.addEventListener('click', function() {

					// Remove active class from all buttons

					buttons.forEach(function(button) {

						button.classList.remove('active');

					});

                    scrollToElement();

					// Add active class to clicked button

					this.classList.add('active');



					// Get content for clicked tag

					var tagContentObj = tagContent[this.dataset.tag];

                    

					// Replace content with content for clicked tag

					var contentHTML = '<div class="row" >' +

					'<div class="col-12"><div class="row">'; 

					tagContentObj.images.forEach(function(img){

					   contentHTML += '<div class="col-4"><img src="' + img + '" class="img-fluid"> </div>';

					});

					contentHTML+='</div></div>' +

                        '<div class="col-12 mt-3">' +

                        '<div class="row">';

                        // tagContentObj.videos.forEach(function(video) {

                        // contentHTML += '<div class="col-4"><iframe width="100%" height="200" src="' + video + '"></iframe><p class="tags">'+ tagContentObj.tags+'</p></div>';

                        // });

                        

                        tagContentObj.videos.forEach(function(video) {

                        contentHTML += '<div class="col-4"><iframe width="100%" height="200" src="' + video + '"></iframe><p class="tags">'+ tagContentObj.tags.split(" ").map(function(tag) {

                                return ('<span class="single-tag">'+tag+'</span>');

                        }).join("")+'</p></div>';

                        });

                        

                        contentHTML += '</div></div></div>';

                        document.getElementById('content').innerHTML = contentHTML;

                        });    

			    }

				

                        });

                        

                        

                        function trigger_click(tag){

                            var buttons = $('button');

                            

                            buttons.each(function(button){

                                if($(this).html() == tag){

                                    $(this).trigger('click');

                                }

                            })

                        }

                        

                        function scrollToElement() {

                            console.log('ran');

                          var element = document.getElementById('content');

                          var offsetTop = element.offsetTop - 150;

                          window.scrollTo({

                            top: (offsetTop),

                            behavior: 'smooth'

                          });

                        }

                        

                        const searchInput = document.getElementById('searchInput');

                        // const buttons = document.getElementsByClassName('tag-btn');

                        

                        searchInput.addEventListener('input', function() {

                          const searchText = searchInput.value.toLowerCase();

                        

                          for (let i = 0; i < buttons.length; i++) {

                            const button = buttons[i];

                            const buttonText = button.textContent.toLowerCase();

                        

                            if (buttonText.includes(searchText)) {

                              button.style.display = 'inline-block';

                            } else {

                              button.style.display = 'none';

                            }

                          }

                        });



            </script>

	</div>

	<!-- Bootstrap JS -->

	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

	<!-- Footer Area-->

   <?php include("footer.php");?>

    <!-- All JavaScript Files-->

    <script src="js/jquery.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/default/classy-nav.min.js"></script>

    <script src="js/waypoints.min.js"></script>

    <script src="js/jquery.easing.min.js"></script>

    <script src="js/default/jquery.scrollup.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>

    <script src="js/default/isotope.pkgd.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/jquery.animatedheadline.min.js"></script>

    <script src="js/jquery.counterup.min.js"></script>

    <script src="js/wow.min.js"></script>

    <script src="js/jarallax.min.js"></script>

    <script src="js/jarallax-video.min.js"></script>

    <script src="js/default/cookiealert.js"></script>

    <script src="js/default/jquery.passwordstrength.js"></script>

    <script src="js/default/mail.js"></script>

    <script src="js/default/active.js"></script>

</body>

</html>

