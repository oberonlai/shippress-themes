( function () {
	var root = document.querySelector( '[data-ycu-full]' );
	if ( ! root ) {
		return;
	}
	var fmt = new Intl.NumberFormat( 'en-US', { maximumFractionDigits: 0 } );
	var $ = function ( id ) { return root.querySelector( '#' + id ); };
	var money = function ( n ) { return '$' + fmt.format( Math.round( n ) ); };
	var checked = function ( name, d ) { return parseInt( ( root.querySelector( 'input[name="' + name + '"]:checked' ) || { value: d } ).value, 10 ); };
	function pct( el ) { el.style.setProperty( '--p', ( ( el.value - el.min ) / ( el.max - el.min ) ) * 100 + '%' ); }
	function loan() {
		var amt = $( 'ycf-amt' ), p = parseFloat( amt.value ), n = checked( 'ycf-term', 60 );
		var r = parseFloat( $( 'ycf-prod' ).value ) / 1200;
		var m = ( p * r ) / ( 1 - Math.pow( 1 + r, -n ) );
		$( 'ycf-amt-out' ).textContent = money( p );
		$( 'ycf-pay' ).textContent = money( m );
		$( 'ycf-int' ).textContent = money( m * n - p );
		pct( amt );
	}
	function save() {
		var dep = $( 'ycf-dep' ), d = parseFloat( dep.value ), n = checked( 'ycf-mo', 24 );
		var r = Math.pow( 1 + parseFloat( $( 'ycf-sprod' ).value ) / 100, 1 / 12 ) - 1;
		var fv = d * ( Math.pow( 1 + r, n ) - 1 ) / r;
		$( 'ycf-dep-out' ).textContent = money( d );
		$( 'ycf-fv' ).textContent = money( fv );
		$( 'ycf-gain' ).textContent = money( fv - d * n );
		pct( dep );
	}
	var panes = root.querySelectorAll( '.ycu-calc' );
	var tabs = root.querySelectorAll( '[data-tab]' );
	function show( name ) {
		panes.forEach( function ( el ) { el.hidden = el.getAttribute( 'data-pane' ) !== name; } );
		tabs.forEach( function ( b ) {
			var on = b.getAttribute( 'data-tab' ) === name;
			b.classList.toggle( 'is-on', on );
			b.setAttribute( 'aria-selected', on ? 'true' : 'false' );
		} );
	}
	tabs.forEach( function ( b ) { b.addEventListener( 'click', function () { show( b.getAttribute( 'data-tab' ) ); } ); } );
	root.addEventListener( 'input', function () { loan(); save(); } );
	root.addEventListener( 'change', function () { loan(); save(); } );
	loan();
	save();
	root.classList.add( 'is-ready' );
	show( 'loan' );
}() );
