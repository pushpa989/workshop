<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bignumber.js"></script>

</head>
<style>
  
    .calculator {
        width: 400px;
    margin: auto;
    text-align: center;

    
}
#equal{
    width: 100px;
    height: 40px;
    margin: 5px;
    font-size: 15px;
    background-color: greenyellow;
}
input[type="text"] {
    width: 100%;
    height: 40px;
    margin-bottom: 10px;
    background-color: black;
    background-color: #ccc;
}

.buttons button {
    width: 53px;
    height: 40px;
    margin: 5px;
    font-size: 15px;
    border-radius:10px
}
button:hover {
            background-color: #ccc;
        }
        #input {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            font-size: 18px;
            border-radius:10px;
        }
</style>
<script>
    function appendToResult(value) {
    document.getElementById('input').value += value;
}

function clearResult() {
    document.getElementById('input').value = '';
}
function deleteLast() {
    var input = document.getElementById('input').value;
    document.getElementById('input').value = input.slice(0, -1);
}

function calculateResult() {
            try {
                let input = document.getElementById('input').value;
                input = input.replace(/sin\(/g, 'Math.sin(');
                  input = input.replace(/cos\(/g, 'Math.cos(');
                  input = input.replace(/tan\(/g, 'Math.tan(');
                   input = input.replace(/arcsin\(/g, 'Math.arcsin(');
                   input = input.replace(/arccos\(/g, 'Math.arccos(');
                  input = input.replace(/arctan\(/g, 'Math.arctan(');
                    input = input.replace(/exp\(/g, 'Math.exp(');
                   input = input.replace(/log\(/g, 'Math.log(');
                  input = input.replace(/pow\(/g, 'Math.pow(');
                    input = input.replace(/sqrt\(/g, 'Math.sqrt(');
        input = input.replace(/e\(/g, 'Math.e(');
        input = input.replace(/abs\(/g, 'Math.abs(');
          input = input.replace(/pi/g, 'Math.PI');
       
                let result = eval(input);
                document.getElementById('input').value = result;
            } catch (error) {
                alert('Error: Invalid expression');
            }
        }

</script>
<body>
    <div class="calculator">
        <input type="text" id="input" disabled>
        <div class="buttons">
            <button onclick="appendToResult('(')">(</button>
            <button onclick="appendToResult(')')">)</button>
            <button onclick="appendToResult('%')">%</button>
            <button onclick="clearResult()">AC</button><br>
            <button onclick="appendToResult('7')">7</button>
            <button onclick="appendToResult('8')">8</button>
            <button onclick="appendToResult('9')">9</button>
             <button onclick="deleteLast()">DEL</button><br>
           
             
            <button onclick="appendToResult('4')">4</button>
            <button onclick="appendToResult('5')">5</button>
            <button onclick="appendToResult('6')">6</button>
            <button onclick="appendToResult('+')">+</button><br>
            
            <button onclick="appendToResult('1')">1</button>
            <button onclick="appendToResult('2')">2</button>
            <button onclick="appendToResult('3')">3</button>
            <button onclick="appendToResult('-')">-</button><br>
           
            <button onclick="appendToResult('.')">.</button>
            <button onclick="appendToResult('0')">0</button>
             <button onclick="appendToResult('*')">*</button>
            <button onclick="appendToResult('/')">/</button><br>
            <button onclick="appendToResult(',')">,</button>
             <button onclick="appendToResult('sin(')">sin</button>
            <button onclick="appendToResult('cos(')">cos</button>
            <button onclick="appendToResult('tan(')">tan</button><br>
                  <button onclick="appendToResult('abs(')">abs</button>
             <button onclick="appendToResult('asin(')">arcsin</button>
             <button onclick="appendToResult('acos(')">arccos</button>
             <button onclick="appendToResult('atan(')">arctan</button><br>
             <button onclick="appendToResult('log(')">log</button>
             <button onclick="appendToResult('exp(')">exp</button>
            <button onclick="appendToResult('sqrt(')">sqrt</button>
            <button onclick="calculateResult('pow(')">pow</button><br>
              <button onclick="appendToResult('e')">e</button>
              <button onclick="appendToResult('pi')">π</button><br>
            <button onclick="calculateResult()" id="equal">=</button>
        </div>
    </div>
    
</body>
</html>