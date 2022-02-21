<html>
    <head>
        <title>Hello</title>
    </head>

    <body>
    <?php
      if(isset($_GET['selector']) && isset($_GET['value_1']) && isset($_GET['value_2'])) {
          if ($_GET["selector"] == 'SUM') {

              $a = $_GET["value_1"];
              $b = $_GET["value_2"];
              $sum = $a + $b;

              echo '<h1>Sum of ' . $a . ' and ' . $b . ' is ' . $sum . '</h1>';
          } else if ($_GET["selector"] == 'Subtract') {
              $a = $_GET["value_1"];
              $b = $_GET["value_2"];
              $subtract = $a - $b;
              echo '<h1>Subtraction of ' . $a . ' and ' . $b . ' is ' . $subtract . '</h1>';
          } else if ($_GET["selector"] == 'MULTIPLY') {
              $a = $_GET["value_1"];
              $b = $_GET["value_2"];
              $multiply = $a * $b;
              echo '<h1>Multiplycation of ' . $a . ' and ' . $b . ' is ' . $multiply . '</h1>';
          } else if ($_GET["selector"] == 'DIVIDE') {
              $a = $_GET["value_1"];
              $b = $_GET["value_2"];
              $divide = $a / $b;
              echo '<h1>Division of ' . $a . ' and ' . $b . ' is ' . $divide . '</h1>';
          }}
    ?>
        <form action="/index.php" method="GET">
            <input type="number" placeholder="value one" name="value_1" />
            <input type="number" placeholder="value two" name="value_2" />
            <select name="selector">
            <option>SUM</option>
            <option>Subtract</option>
            <option>MULTIPLY</option>
            <option>DIVIDE</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
