// returns an array of Fibonacci values up to max value sent to Fx:

function fibonacci(fMax) {
	var F = 1, Fp=0,Fn, fib=[];
	   while (Fp <= fMax){
			fib.push(Fp);
			Fn = F +Fp; Fp = F; F = Fn;
		}
	return fib;
}
// -- END FIBONACCI Fx--

//grab the code output, and display in the on the page...
var input = document.querySelector('input');
var output = document.querySelector('#output');
output.textContent = fibonacci(input.value).join(", ");

function refresh(){
	output.textContent = fibonacci(input.value).join(", ");
	sumOdds();
}





// priem numbers
(function() {

	var isPrimeNumber = function( number ) {
		if ( number == 1 || number == 2 ) {
			return true;
		}
		for ( var i = 2; i < number; i++ ) {
	
			if ( number % i == 0 ) {
				return false;
			}
		} 
		return true;
	};
	
	var unique = function( arr ) {
		return arr.reduce(function( p, c ) {
			if ( p.indexOf( c ) < 0 ) {
				p.push( c );	
			}
			return p; 
		}, []);
	};

	var nextPrime = function( number ) {
		var n;
		if( number % 2 == 0 ) {
			number++;
		}
		
		for( n = number; !isPrimeNumber( n ); n += 2 ) {
			
		}
		return n;
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var form = document.querySelector( "#prime" ),
			output = document.querySelector( "#output" );
			
		form.addEventListener( "submit", function( e ) {
			e.preventDefault();
			var n = document.querySelector( "#number" ).value;
			var text = [];
			for( var i = 0; i < n; ++i ) {
				text.push( nextPrime( i ) );	
			}
			output.innerHTML = unique( text ).join( " " );
		}, false);
		
	});
	
	
})();
