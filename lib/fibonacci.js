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

