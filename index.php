<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
    <style></style>
  </head>
  <body>
    <div class="div">
      <form method="GET">
        <h2>Calculator</h2>
        <br />
        <input
          type="number"
          name="num1"
          placeholder="Enter First Number"
          autocomplete="off"
          class="input"
        /><br /><br />
        <input
          type="number"
          name="num2"
          placeholder="Enter Second Number"
          autocomplete="off"
          class="input"
        /><br /><br />
        <select name="operations" class="select">
          <option class="option" value="add">ADD</option>
          <option class="option" value="sub">SUBSTRACT</option>
          <option class="option" value="div">DIVIDE</option>
          <option class="option" value="mul">MULTIPLY</option>
        </select>
        <input type="submit" name="submit" class="submit" value="CALCULATE" />
        <p>
          <?php
							if (isset($_GET['submit'])) {
								if (empty($_GET['num1'])) {
									echo "first number require";
								}elseif (empty($_GET['num2'])) {
									echo "second number requier";
								}else {
									$num1 = $_GET['num1'];
									$num2 = $_GET['num2'];
									$operation = $_GET['operations'];
									switch ($operation) {
										case 'add':
											echo "yor answer is: ",$num1 + $num2;
											break;
										case 'sub':
											echo "yor answer is: ",$num1 - $num2;
											break;
										case 'div':
											echo "yor answer is: ",$num1 / $num2;
											break;
										case 'mul':
											echo "yor answer is: ",$num1 * $num2;
											break;
										
										default:
											echo "sorry dont understand";
											break;
									}
								}
							}

					?>
        </p>
      </form>
    </div>
  </body>
</html>
