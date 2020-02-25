(function ($, root, undefined) {
	
  $(document).ready(function() {
    dothings();


  });
  // START :  Do Things
  function dothings() {

 $("img").addClass("wp-image-link);




 
// END: Google Places .js file

} ;
// END :  Do Things

// START :  Smoothstate


function addBlacklistClass() {
        $( 'a' ).each( function() {
          if ( this.href.indexOf('/wp-admin/') !== -1 || 
           this.href.indexOf('/wp-login.php') !== -1 ) {
            $( this ).addClass( 'wp-link' );
        }
      });

};

$( function() {

  addBlacklistClass();

  var settings = { 
    anchors: 'a',
    blacklist: '.wp-link', '.wp-image-link',
    onStart: {
      duration: 280,
      render: function ( $container ) {
        $container.addClass( 'slide-out' );
      }
    },
    onAfter: function( $container ) {

      addBlacklistClass();
      dothings();

      var $hash = $( window.location.hash );

      if ( $hash.length !== 0 ) {

        var offsetTop = $hash.offset().top;

        $( 'body, html' ).animate( {
          scrollTop: ( offsetTop - 60 ),
        }, {
          duration: 280
        } );
      }

      $container.removeClass( 'slide-out' );
    }
  };

  $( '#page' ).smoothState( settings );
} );


// end of script
})(jQuery, this);
