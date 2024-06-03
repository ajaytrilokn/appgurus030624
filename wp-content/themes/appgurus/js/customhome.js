$( document ).ready(function() {


  	var typed = new Typed("#typed", {
	    stringsElement: '#typed-strings',
	    typeSpeed: 40,
      loop: true,
      backDelay: 3000,
      backSpeed: 5,
  	});

  	// ========================================================
	// 							LOGO CHANGING ANIMATION START
	// ========================================================
  var getHomeURL = $("#getHomeURL").val();

	const images = [		

 '<img src="'+getHomeURL+'/images/tech-logo/paypal.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/gitlab.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/fire-base.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/html-css-js.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/jira-software.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/mysql.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/sendgrid.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/bitbucket.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/react-native.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/node-js.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/flutter.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/mailchimp.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/google-analytics.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/aws.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/ios.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/bluetooth.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/facebook.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/zepto.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/stripe.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/google_maps.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/github.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/codeigniter.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/activecampaign.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/xero.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/instagram.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/greenID.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/cPanel.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/bbpos.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/square.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/figma.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/invision.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/dialogueflow.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/Servicem8.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/laravel.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/twilio.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/javascript.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/react_js.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/app-store.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/google_play.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/html5.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/css3.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/php.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/bootstrap.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/jquery.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/wordpress.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/woo-commerce.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/shopity.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/slack.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/basecamp.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/jira.png" alt="logo">',
 '<img src="'+getHomeURL+'/images/tech-logo/android.png" alt="logo">',		
		
	];

	let index = 0;
  let isOdd = true;		//odd even will ensure count of animation per row
	function animateLogos(rowClassName, afterFinishAnimation) {
		
		
		//setInterval(() => {

			let $tworks = $('.' + rowClassName).find('.twork-with-logo');
			let tworksLenght = $tworks.length;
			let rowOne, rowTwo, rowThree;

			if(isOdd) {
				rowOne = $($tworks[getRandomNumber(tworksLenght)]).find('img').addClass('animationName');
			} else {
				rowTwo = $($tworks[getRandomNumber(tworksLenght)]).find('img').addClass('animationName');
				rowThree = $($tworks[getRandomNumber(tworksLenght)]).find('img').addClass('animationName');
			}

			setTimeout(() => {		//for smooth Logo transition

				function getImage() {
					if(index == images.length) {
						index = 0;
					}
					return images[index++];
				}
				
				if(rowOne) {
					let $pr1 = rowOne.parent();
					//$pr1.children().fadeOut(100, function(){ 
						$pr1.children().remove();
						$pr1.append($(getImage()).addClass('flip-in-hor-top'));
					//});
					
				} else {
					let $pr2 = rowTwo.parent();
					//$pr2.children().fadeOut(100, function(){ 
						$pr2.children().remove();
						$pr2.append($(getImage()).addClass('flip-in-hor-top'));
					//});

					let $pr3 = rowThree.parent();
					//$pr3.children().fadeOut(100, function(){ 
						$pr3.children().remove();
						$pr3.append($(getImage()).addClass('flip-in-hor-top'));
					//});
				}

				isOdd = !isOdd;
				afterFinishAnimation();							// call this function after this animation is finished

			}, 1500);
			
		//},timing);

	}


	animateLogos('logo-first-row', () => {					//to animate first time without time delay if setInterval
			animateLogos('logo-second-row', () => {
				animateLogos('logo-third-row', () => {});
			});
	});

	setInterval(() => {														//infinite animation

		animateLogos('logo-first-row', () => {			// callbacks to wait untile this animation finishes
			animateLogos('logo-second-row', () => {
				animateLogos('logo-third-row', () => {});
			});
		});

	}, 6000);																		// 2000 gap for every animation

	function getRandomNumber(limit) {					// to get the random position of Logo from this row
		return Math.floor(Math.random()*limit);
	}

	// ========================================================
	// 							 LOGO CHANGING ANIMATION END
	// ========================================================
});