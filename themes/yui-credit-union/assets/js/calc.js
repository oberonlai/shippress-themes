( function () {
	var root = document.querySelector( '[data-ycu-calc]' );
	if ( ! root ) {
		return;
	}
	var amt = root.querySelector( '#ycu-amt' );
	var out = root.querySelector( '#ycu-amt-out' );
	var prod = root.querySelector( '#ycu-prod' );
	var pay = root.querySelector( '#ycu-pay' );
	var fmt = new Intl.NumberFormat( 'en-US', { maximumFractionDigits: 0 } );
	function update() {
		var p = parseFloat( amt.value );
		var term = parseInt( ( root.querySelector( 'input[name="ycu-term"]:checked' ) || { value: 60 } ).value, 10 );
		var r = parseFloat( prod.value ) / 1200;
		var m = ( p * r ) / ( 1 - Math.pow( 1 + r, -term ) );
		out.textContent = '$' + fmt.format( p );
		pay.textContent = '$' + fmt.format( Math.round( m ) );
		amt.style.setProperty( '--p', ( ( p - amt.min ) / ( amt.max - amt.min ) ) * 100 + '%' );
	}
	root.addEventListener( 'input', update );
	root.addEventListener( 'change', update );
	update();
}() );
