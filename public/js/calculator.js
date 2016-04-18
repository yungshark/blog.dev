var inputLeft = document.getElementById('left')
		var operator = document.getElementById('center')
		var inputRight = document.getElementById('right')




		var button1 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button1').addEventListener('click', button1, false);

		var button2 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button2').addEventListener('click', button2, false);

		var button3 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button3').addEventListener('click', button3, false);

		var button4 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button4').addEventListener('click', button4, false);

		var button5 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button5').addEventListener('click', button5, false);

		var button6 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button6').addEventListener('click', button6, false);

		var button7 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button7').addEventListener('click', button7, false);

		var button8 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button8').addEventListener('click', button8, false);

		var button9 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
		}
		document.getElementById('button9').addEventListener('click', button9, false);

		var button0 = function(event) {
			if (operator.value == '' && right.value == ''){
			inputLeft.value += this.innerHTML;
			} else {
				inputRight.value += this.innerHTML;
			}
			
		}
		document.getElementById('button0').addEventListener('click', button0, false);

		var plus = document.getElementById('plus');
		plus.addEventListener('click', function(event) {
			operator.value = this.innerHTML;
		})
		var subtract = document.getElementById('minus')
		subtract.addEventListener('click', function(event){
			operator.value = this.innerHTML;
		})
		var divide = document.getElementById('divide')
		divide.addEventListener('click', function(event){
			operator.value = this.innerHTML;
		})
		var multiply = document.getElementById('multiply')
		multiply.addEventListener('click', function(event){
			operator.value = this.innerHTML;
		})

		var equals = document.getElementById('equals')
		
		

		var activeScreen = inputLeft;
		equals.addEventListener('click', function(event){
			var result = 0;

			if(operator.value == '+') {
				result = parseFloat(inputLeft.value) + parseFloat(inputRight.value)
				inputLeft.value = result
				
			}
			if(operator.value == '-'){
				result = parseFloat(inputLeft.value) - parseFloat(inputRight.value) 
				inputLeft.value = result
			}
			if(operator.value == '*'){
				result = parseFloat(inputLeft.value) * parseFloat(inputRight.value)
				inputLeft.value = result
			}
			if(operator.value == '/'){
				result = parseFloat(inputLeft.value) / parseFloat(inputRight.value)
				inputLeft.value = result
				
			}
			operator.value = ''
			inputRight.value = ''
				console.log(result)
			
		})
		var clear = document.getElementById('clear')
		clear.addEventListener('click', function(event){
			inputRight.value = ''
			operator.value = ''
			inputLeft.value = ''
		})
