
( function ( $ ) {
	/**
	 * Class Loadmore.
	 */
	class FUTUREWORDPRESS_PROJECT_GBE_FROTEND {
		/**
		 * Contructor.
		 */
		constructor() {
			this.ajaxUrl = siteConfig?.ajaxUrl ?? '';
			this.ajaxNonce = siteConfig?.ajax_nonce ?? '';
			// this.iScheduled = siteConfig?.iScheduled ?? false;
			// this.defaulTime = siteConfig?.defaulTime ?? '12:00:00 AM';
			// this.hideSubmit = siteConfig?.hideSubmit ?? false;
			// this.onDragConfirm = siteConfig?.onDragConfirm ?? false;
			// this.confirmDelete = siteConfig?.confirmDelete ?? 'Click okay to make sure you want to delete it.';
			// this.confirmSwitch = siteConfig?.confirmSwitch ?? "Are you sure about this change?\nClick on Cancel to dismiss.";
			// this.calendar = null;this.editor = false;
			// this.standardForm = false;
      
			this.init();
		}

		init() {
			const thisClass = this;
			thisClass.revealButton();
			// if( thisClass.iScheduled ) {thisClass.interVal = setInterval( () => {} );
    }
		getClasses() {
			// .wp-block-column,  .wp-block-button
			return '.wp-block-image, .wp-block-cover';
		}
		revealButton() {
			const thisClass = this;var selector, hasit, hasName, div, button, input, node, span, a;
			window.addEventListener( 'scroll', function() {
				var reveals = document.querySelectorAll( thisClass.getClasses() );
			
				for (var i = 0; i < reveals.length; i++) {
					var windowHeight = window.innerHeight;
					var elementTop = reveals[i].getBoundingClientRect().top;
					var elementVisible = 150;
			
					if (elementTop < windowHeight - elementVisible) {
						reveals[i].classList.add("fwp-gbe-animationActive");
					} else {
						reveals[i].classList.remove("fwp-gbe-animationActive");
					}
				}
			} );
		}
		onScrollChangeNav() {
			let section = document.querySelectorAll('section');
			let menu = document.querySelectorAll('header nav a');
			window.onscroll = () => {
				section.forEach(i => {
					let top = window.scrollY;
					let offset = i.offsetTop - 150;
					let height = i.offsetHeight;
					let id = i.getAttribute('id');
					if (top >= offset && top < offset + height) {
						menu.forEach(link => {
							link.classList.remove('active');
							document.querySelector('header nav a[href*=' + id + ']')
								.classList.add('active');
						});
					}
				});
			};

		}
	}

	new FUTUREWORDPRESS_PROJECT_GBE_FROTEND();
} )( jQuery );
