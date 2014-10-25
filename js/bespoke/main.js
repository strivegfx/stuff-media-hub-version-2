/*jshint devel: true*/

var $bespoke = (function(){

	// var _xxx; hidden variables

	return {};

})();

$(document).ready(function(){

	'use strict';

	(function($M){

		$M.init = function(){

			$M.scrollSpy.init();
			$M.navigation.init();

		}; // end of init

		return $M;

	})($bespoke);

	(function($M){

		$M.settings = {

			nav: $('nav')

		}; // end of settings

		return $M;

	})($bespoke);

	(function($M){

		var $CM; // current module

		$M.scrollSpy = {

			init: function(){

				$CM = $M.scrollSpy;

				var $AM = window.$animationModules,
					$len = $AM.length,
					$i = 0,
					$body = $('body'),
					$this;

				for($i; $i < $len; $i++){

					$this = $body.find('> #' + $AM[$i]);

					console.log('set up trigger for ' + $AM[$i]);
					$CM.removeClass($this);

				} // end of loop

			}, // end of init

			removeClass: function($this){

				$this.on('scrollSpy:enter', function(){

					console.log('remove class from ' + $this);

					$this.removeClass('off-stage');

				});

				$this.scrollSpy();

			} // end of removeClass

		}; // end of scroll spy

		return $M;

	})($bespoke); // end of scrollSpyActions

	(function($M){

		var $CM, $nav;

		$M.navigation = {

			init: function(){

				$CM = $M.navigation;
				$nav = $M.settings.nav;

				$CM.listeners();

			}, // end of init

			listeners: function(){

				var $cta = $nav.find('> #navigation-cta');

				$cta.on('click', function(){

					console.log('init navigation...');

					$CM.toggleNav();

				});

			}, // end of listeners

			toggleNav: function(){

				console.log('toggle navigation');

				var $currentState = $nav.attr('data-state'),
					$newState = $currentState === 'dorment' ? 'active' : 'dorment';

				$nav.attr({'data-state': $newState});

			} // end of toggleNav

		}; // end of navigation

		return $M;

	})($bespoke);

	$bespoke.init();

}); // end of document.ready