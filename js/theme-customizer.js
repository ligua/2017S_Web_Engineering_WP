( function( $ ) {
	wp.customize( 'blogname', function( value ) {
	value.bind( function( newval ) {
		//Do stuff (newval variable contains your "new" setting data)
		$( "#cover_title1" ).html( newval );
		console.log(newval);
	} );
} );
} )( jQuery );