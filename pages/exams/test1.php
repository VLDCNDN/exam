<!-- TEST 1:  Chess Board -->
<style>

  * {
    margin: 0;
    padding: 0;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
  }

  #chessboard {
    padding: 0px;
    margin: 0 auto;
    border: 2px solid #181818;
  }

  #chessboard tr td {
    width: 100px;
    height: 100px;
  }

  #chessboard tr:nth-child(2n) td:nth-child(2n+1) {
    background: #9f9f9f;
  }

  #chessboard tr:nth-child(2n+1) td:nth-child(2n) {
    background: #9f9f9f;
  }

</style>


<?php echo "Fix this"; ?>
<table id='chessboard'>
  <?php
        
        for ($r = 1; $r <= 8; $r++) {
            $col = "";
			$cols = 1;
            for ($c = 1; $c <= 8; $c++) {
                $col .= "<td></td>";
                $cols++;

            }

            echo "<tr>".$col."</tr>";

        }
      ?>

</table>
