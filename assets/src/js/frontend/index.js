
( function ( $ ) {
	/**
	 * Class Loadmore.
	 */
	class FUTUREWORDPRESS_PROJECT_GBE_FROTEND {
		/**
		 * Contructor.
		 */
		constructor() {
			// this.ajaxUrl = siteConfig?.ajaxUrl ?? '';
			// this.ajaxNonce = siteConfig?.ajax_nonce ?? '';
			this.intClasses = siteConfig?.intClasses ?? false;
			// this.iScheduled = siteConfig?.iScheduled ?? false;
			// this.defaulTime = siteConfig?.defaulTime ?? '12:00:00 AM';
			// this.hideSubmit = siteConfig?.hideSubmit ?? false;
			// this.onDragConfirm = siteConfig?.onDragConfirm ?? false;
			// this.confirmDelete = siteConfig?.confirmDelete ?? 'Click okay to make sure you want to delete it.';
			// this.confirmSwitch = siteConfig?.confirmSwitch ?? "Are you sure about this change?\nClick on Cancel to dismiss.";
			// this.calendar = null;this.editor = false;

			this.willRepeat = siteConfig?.willRepeat ?? false;
			this.init();
		}

		init() {
			const thisClass = this;
			thisClass.doVisible();
			thisClass.revealButton();
			// if( thisClass.iScheduled ) {thisClass.interVal = setInterval( () => {} );
    }
		getClasses() {
			// .wp-block-column,  .wp-block-button
			return ( this.intClasses && this.intClasses != '' ) ? this.intClasses : '.wp-block-image, .wp-block-cover, .wp-block-stackable-heading, .wp-block-stackable-text, .wp-block-stackable-button, .wp-block-stackable-image, .stk-block-content';
		}
		revealButton() {
			const thisClass = this;
			window.addEventListener( 'scroll', function() {
				thisClass.doVisible();
			} );
		}
		doVisible() {
			const thisClass = this;var i, reveals, activeClass, windowHeight, elementTop, elementVisible;
			reveals = document.querySelectorAll( thisClass.getClasses() );
			activeClass = "fwp-gbe-animationActive";
			for( i = 0; i < reveals.length; i++ ) {
				windowHeight = window.innerHeight;
				elementTop = reveals[i].getBoundingClientRect().top;
				elementVisible = 0;
				// 
				if (elementTop < windowHeight - elementVisible) {
					reveals[i].classList.add( activeClass );
				} else {
					if( thisClass.willRepeat ) {
						reveals[i].classList.remove( activeClass );
					}
				}
			}
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
