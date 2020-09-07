<!DOCTYPE html>
<<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Calculator</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<form name="Calc">
<Center>
<div class="container">
<div class="jumbotron">
<h1>
<kbd>
Calculator
</kbd>
</h1>
          <table border="4"  bordercolorlight="#FF9900" bordercolordark="#FF6633">
            <tbody><tr> 
              <td> 
                <div align="center"> <font size="20px"> 
                  <input type="text" name="Input" size="20px">
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td height="111"> 
                <div align="center"> 
                <font size="10px"> 
                  <input type="button" name="one" value="  1  " onclick="Calc.Input.value += '1'">
                  <input type="button" name="two" value="  2  " onclick="Calc.Input.value += '2'">
                  <input type="button" name="three" value="  3  " onclick="Calc.Input.value += '3'">
                  <input type="button" name="plus" value="  +  " onclick="Calc.Input.value += ' + '">
                  <br>
                  <input type="button" name="four" value="  4  " onclick="Calc.Input.value += '4'">
                  <input type="button" name="five" value="  5  " onclick="Calc.Input.value += '5'">
                  <input type="button" name="six" value="  6  " onclick="Calc.Input.value += '6'">
                  <input type="button" name="minus" value="   -  " onclick="Calc.Input.value += ' - '">
                  <br>
                  <input type="button" name="seven" value="  7  " onclick="Calc.Input.value += '7'">
                  <input type="button" name="eight" value="  8  " onclick="Calc.Input.value += '8'">
                  <input type="button" name="nine" value="  9  " onclick="Calc.Input.value += '9'">
                  <input type="button" name="times" value="  x  " onclick="Calc.Input.value += ' * '">
                  <br>
                  <input type="button" name="clear" value="  Clear " onclick="Calc.Input.value = ''">
                  <input type="button" name="zero" value="  0  " onclick="Calc.Input.value += '0'">
                  <input type="button" name="div" value="   /  " onclick="Calc.Input.value += ' / '">
                </font>
                </div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"> 
                <font size="10px"> 
                  <input type="button" name="DoIt" value="             =             " onclick="Calc.Input.value = eval(Calc.Input.value)">
                  </font>
                </div>
              </td>
            </tr>
          </tbody></table>
          
          <div align="right"><br>
		</div>
          <p>&nbsp;</p>
        </form>
        </center>
        </div>
        </div>
</body>
</html>