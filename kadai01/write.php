<header>
  <style>
  .myChart{
    margin-top: 50px;
    width:500px;
    height: 600px;
  }
  img{
    width: 500px;
    height: 600px;
  }
  </style>
</header>
<head>
    <meta charset="utf-8">
    <title>結果</title>
</head>

<body>
<audio src="strong.mp3" id="strong"></audio>
<p>読書部屋</p>

<?php
    // input.phpからデータを受け取る
    $book = $_POST['book'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $time = $_POST['time'];

    $interesting = $_POST['interesting'];
    $recommend = $_POST['recommend'];
    $concentration = $_POST['concentration'];
    $strength = $_POST['strength'];
    $reread = $_POST['reread'];

    $num_interesting = intval($interesting);
    $num_recommend = intval($recommend);
    $num_concentration = intval($concentration);
    $num_strength = intval($strength);
    $num_reread = intval($reread);

 
    // JSにデータを渡せるようにしたい
    $json_interesting = json_encode($interesting);
    $json_recommend = json_encode($recommend);
    $json_concentration = json_encode($concentration);
    $json_strength = json_encode($strength);
    $json_reread = json_encode($reread);

   $total = $num_interesting + $num_recommend + $num_concentration + $num_reread + $num_reread;
   $json_total = json_encode($total); 
   //データを整形する
    $data = "\n" . $date . 'は' . $genre . 'の[' . $book . ']を' . $time . '分かけて読んだよ！' . "\n";
    $rate = 
    '面白さは' . $interesting . '点' . "\n" .
    'おすすめ度は' . $recommend . '点' . "\n" .
    '没頭度は' . $concentration . '点' . "\n" .
    '強さは' . $strength . '点' . "\n" .
    '再読したさは' . $reread . '点' .  "\n" . 
    '合計は' . $total . '/50点だよ' . "\n";
 
    
    //ブラウザで確認したい！
    echo $data;
    if( $total >= 48 ){
      echo '<p>強い。</p>';
    }
    // dataへの書き込み
    file_put_contents('data/data.txt', $data, FILE_APPEND);
    file_put_contents('data/data.txt', $rate, FILE_APPEND);
?>

<!-- 画像読み込み挑戦！！ -->
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
	$file='upload/'.basename($_FILES['file']['name']);
	if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
		echo '<p><img alt="image" src="', $file, '"></p>';
    echo  'アップロードに成功したよ!!!';
	} else {
		echo $file, 'のアップロードに失敗したよ…。';
	}
} else {
	echo 'ファイルを選択してくれよ！';
}
?>


    <div class="myChart">
    <canvas id="myChart"></canvas>
    </div>

    <p><a href="read.php">確認する</a></p>

</body>

</html>

<!-- chart.jsを組み込む -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        // PHPでの変数をJSに受け渡したい
        const interesting = JSON.parse('<?php echo $json_interesting; ?>'); 
        const recommend = JSON.parse('<?php echo $recommend; ?>');
        const concentration = JSON.parse('<?php echo $concentration; ?>');
        const strength = JSON.parse('<?php echo $strength; ?>');
        const reread = JSON.parse('<?php echo $json_reread; ?>');
        const total = JSON.parse('<?php echo $json_total; ?>');

      var ctx = document.getElementById('myChart');
    const data = {
      labels: [
      '面白さ',
      'おすすめ度',
      '没頭度',
      '強さ',
      '再読したさ'
    ],
    datasets: [{
      label: 'Book Rate',
      data: [interesting, recommend, concentration, strength, reread],
      fill: true,
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgb(255, 99, 132)',
      pointBackgroundColor: 'rgb(255, 99, 132)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgb(255, 99, 132)'
    }
  ]
  };

  const config = {
  type: 'radar',
  data: data,
  options: {
    scales: {
      r: {
          max: 10,        //グラフの最大値
          min: 0,        //グラフの最小値
          ticks: {
            stepSize: 1  //目盛間隔
          }
        }
    },
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
};
  
  new Chart(ctx,config);


  if( total >= 48 ){
    ctx.addEventListener('click', function(){
    strong.play();
  });
    }
  
  
    </script>

 