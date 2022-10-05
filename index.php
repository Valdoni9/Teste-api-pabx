<?php

require_once('chartjs.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creating DB The connection | mysql database</title>
  <style type="text/css">
  .chartBox {
    width: 700px;
  }
  </style>
</head>

<body>

  <?php
  try {
     $sql = "SELECT * FROM nipview.n_cdr_ilha_pesquisa_view"; 
    
    $result = $pdo->query($sql);

    if($result->rowCount() > 0){
      $codresp = array();
      $codrespdois = array();
      $nomeilha = array();
       

      while($row = $result->fetch()){
        $codresp[] = $row["codresp"];
        $codrespdois[] = $row["codresp2"];
        $nomeilha[] = $row["nomeilha"];
      }
      unset($result);
    }else {
      echo "No records matching your query were found.";
    }
  } catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }

unset($pdo);
?>

  <div class="chartBox">
    <canvas id="myChart"></canvas>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
  <script>
  // Setup Block

  const codresp = <?php echo json_encode($codresp); ?>;
  const codrespdois = <?php echo json_encode($codrespdois); ?>;
  const nomeilha = <?php echo json_encode($nomeilha); ?>;
  const data = {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: 'Valores de avaliação',
      data: codresp,
      backgroundColor: 'rgba(54, 162, 235, 1)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }, {
      label: '# of Votes',
      data: codrespdois,
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 159, 64, 1)',
      borderWidth: 1
    }]
  };
  // Config Block
  const config = {
    type: 'bar',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // Render Block

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  </script>





</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

</html>