<?php
require __DIR__. '/_connect_db.php';
$pname = 'icmember';


//------計算加總↓
$d_sql = "SELECT * FROM icmember ";
$today = date("Y-m-d");
$d_sql.='WHERE `IC_create_at` like "'.$today.'%"';
$stmtToday = $pdo->query($d_sql);
$rr = $stmtToday->fetchAll(PDO::FETCH_ASSOC);
$count = count($rr);


// $getDate= date("Y-m-d");
// $d_sql = "SELECT COUNT(1) * FROM ICmember where IC_creat_at like $getDate";
// $d_sql = "SELECT COUNT(1) * FROM ICmember where IC_creat_at like $getDate";


//-------------分頁功能↓

$per_page = 10; //每頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 第幾頁
$t_sql = "SELECT COUNT(1) FROM icmember";
$total_rows = $pdo->query($t_sql)->fetch()[0]; //總筆數
$total_pages = ceil($total_rows/$per_page); //總頁數




// 限定頁碼範圍
if ($page<1) {
    header('Location: icmember.php');
    exit;
}
if ($page>$total_pages) {
    header('Location: icmember.php?page='. $total_pages);
    exit;
}

//-------------分頁功能↑



$sql = sprintf(
  "SELECT * FROM icmember ORDER BY IC_sid DESC LIMIT %s, %s",
  ($page-1)*$per_page,
  $per_page
);
$stmt = $pdo->query($sql);
?>

<?php include __DIR__. '/__header.php'; ?>


<style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
section{
  font-family:"微軟正黑體";
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
   /* height:300px;  */
  /* overflow-x:auto;  */
  /* margin-top: 0px; */
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

section{
  margin: 50px;
}

/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

.table_page{
  background:#444;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

#container {
  /* position:relative; */
  margin-top:50px;
  min-width: 310px;
  max-width: 800px;
  height: 400px;
  margin: 0 auto;
  background:rgb(100,100,100);
}
</style>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>





<section>
<div id="container"></div>
  <!--for demo wrap-->
  今日新增網紅：<?= $count; ?>&nbsp 人<br>
  總計網紅：<?= $total_rows; ?> &nbsp 人
  <!-- &nbsp &nbsp &nbsp &nbsp -->

  <br>
  <br>
  <div class="tbl-header">

    <table cellpadding="0" cellspacing="0" border="0">
    
      <thead>
        <tr>
          <th>id</th>
          <th>帳號</th>
          <th>名稱</th>
          <th>性別</th>
          <th>擅長社群</th>
          <th>最低接案金額</th>
          <th>經手業配數</th>
          <th>註冊時間</th>
        </tr>	
      </thead>
    </table>
  </div>

  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
    <tbody>
  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
  ?>
      <tr>
        <td><?= $row['IC_sid'] ?></td>
        <td><?= $row['IC_email'] ?></td>
        <td><?= $row['IC_name'] ?></td>
        <td><?= $row['IC_gender'] ?></td>
        <td><?= $row['IC_media'] ?></td>
        <td><?= $row['IC_price'] ?></td>
        <td><?= $row['IC_case'] ?></td>
        <td><?= $row['IC_create_at'] ?></td>
     </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    

  </div>
  <nav class="table_page" aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?= $page==1 ? 'disabled' : ''; ?>"><a class="page-link" href="?page=1">&lt;&lt;</a></li>
            <li class="page-item <?= $page==1 ? 'disabled' : ''; ?>"><a class="page-link" href="?page=<?= $page-1 ?>">&lt;</a></li>
            <li class="page-item"><a class="page-link"><?= $page. '/'. $total_pages ?></a></li>
            <li class="page-item <?= $page==$total_pages ? 'disabled' : ''; ?>"><a class="page-link" href="?page=<?= $page+1 ?>">&gt;</a></li>
            <li class="page-item <?= $page==$total_pages ? 'disabled' : ''; ?>"><a class="page-link" href="?page=<?= $total_pages ?>">&gt;&gt;</a></li>
        </ul>
    </nav>
</section>


<script>

Highcharts.chart('container', {

title: {
  text: '每日新增人數'
},

// subtitle: {
//   text: 'Source: thesolarfoundation.com'
// },

yAxis: {
  title: {
    text: '人數'
  }
},
legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },
    pointStart: 2010
  }
},

series: [{
  name: '網紅',
  data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
}],
// }, {
//   name: 'Manufacturing',
//   data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
// }, {
//   name: 'Sales & Distribution',
//   data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
// }, {
//   name: 'Project Development',
//   data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
// }, {
//   name: 'Other',
//   data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
// }],

responsive: {
  rules: [{
    condition: {
      maxWidth: 400
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
</script>
