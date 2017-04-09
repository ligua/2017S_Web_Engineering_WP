( function( $ ) {
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( "#cover_titleh1" ).html( newval );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( "#cover_title h2" ).html( newval );
		} );
	} );
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$( ".back-grey" ).css( 'background-color', newval );
			$( ".back-grey1" ).css( 'background-color', newval );
		} );
	} );
	wp.customize( 'header_image', function( value ) {
		value.bind( function( newval ) {
			document.getElementById( "header_image" ).src = newval;
		} );
	} );
	wp.customize( 'MONDAY', function( value ) {
		value.bind( function( newval ) {
			$( "#monday" ).html(" <b>MONDAY : </b>  "+newval);
		} );
	} );
	wp.customize( 'TUEFRI', function( value ) {
		value.bind( function( newval ) {
			$( "#tuefri" ).html(" <b>TUE-FRI : </b>  "+newval);
		} );
	} );
	wp.customize( 'SATSUN', function( value ) {
		value.bind( function( newval ) {
			$( "#satsun" ).html(" <b>SAT-SUN : </b>  "+newval);
		} );
	} );
	wp.customize( 'HOLIDAYS', function( value ) {
		value.bind( function( newval ) {
			$( "#holidays" ).html(" <b>HOLIDAYS : </b>  "+newval);
		} );
	} );
	wp.customize( 'City', function( value ) {
		value.bind( function( newval ) {
			$( "#city" ).html(" <b>ADDRESS : </b>"+newval);
		} );
	} );
	wp.customize( 'Street', function( value ) {
		value.bind( function( newval ) {
			$( "#street" ).html(" "+newval);
		} );
	} );
	wp.customize( 'PHONE', function( value ) {
		value.bind( function( newval ) {
			$( "#phone" ).html(" <b>PHONE : </b>"+newval);
		} );
	} );
	wp.customize( 'EMAIL', function( value ) {
		value.bind( function( newval ) {
			$( "#email" ).html(" <b>EMAIL : </b>"+newval);
		} );
	} );
} )( jQuery );