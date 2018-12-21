<?php
require __DIR__. '/_connect_db.php';

$pname = 'bsmember';

// $sql = sprintf("SELECT * FROM `bsmember` WHERE 1");
// $stmt = $pdo->query($sql);



//------計算加總↓
$d_sql = "SELECT * FROM bsmember ";
$today = date("Y-m-d");
$d_sql.='WHERE `BS_create_at` like "'.$today.'%"';
$stmtToday = $pdo->query($d_sql);
$rr = $stmtToday->fetchAll(PDO::FETCH_ASSOC);
$count = count($rr);


//-------------分頁功能↓

$per_page = 8; //每頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 第幾頁
$t_sql = "SELECT COUNT(1) FROM bsmember";
$total_rows = $pdo->query($t_sql)->fetch()[0]; //總筆數
$total_pages = ceil($total_rows/$per_page); //總頁數


// 限定頁碼範圍
if ($page<1) {
    header('Location: bsmember.php');
    exit;
}
if ($page>$total_pages) {
    header('Location: bsmember.php?page='. $total_pages);
    exit;
}

$sql = sprintf(
  "SELECT * FROM bsmember ORDER BY BS_sid DESC LIMIT %s, %s",
  ($page-1)*$per_page,
  $per_page
);
$stmt = $pdo->query($sql);

?>

<?php include __DIR__. '/head.php' ?>
<?php include __DIR__. '/_nav.php'; ?>


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
.tbl-header{
  background-color: rgba(255,255,255,0.3);
}
.tbl-content{
  /* height:368px; */
  /* overflow-x:auto; */
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
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
#endCase{
  color:white;
  text-decoration:none;
  border:1px solid white;
  background-color:#78869a9e;
  padding:10px;
}

i{
  color:#fff;
  font-size:14px;
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
</style>


<section>
  <!--for demo wrap-->
  <h3>廠商會員資料清單</h3>
    <!--for demo wrap-->
  <p>今日新增廠商：<?= $count; ?>&nbsp 人<br>
    總計廠商：<?= $total_rows; ?> &nbsp 人</p>
  <!-- &nbsp &nbsp &nbsp &nbsp -->
  <br>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>會員編號</th>
          <th>廠商名稱</th>
          <th>廠商類型</th>
          <th>廠商電話</th>
          <th>會員email</th>
          <th>會員帳號狀態</th>
          <th>停權</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)):
            //上面將右邊指定給row，執行一次就是把該次結果給row，如果不是0不是空值就是true，就會繼續往下跑
      ?>
        <tr>
          <td><?= $row['BS_sid'] ?></td>
          <td><?= $row['BS_name'] ?></td>
          <td><?= $row['BS_type'] ?></td>
          <td><?= $row['BS_phone'] ?></td>
          <td><?= $row['BS_email'] ?></td>
          <td><?= $row['BS_status'] ?></td>
          <td><a href="javascript:stopRight(<?= $row['BS_sid'] ?>, '<?= $row['BS_status'] ?>')" id='stopRight'>
              <?= ($row['BS_status'] == '啟用中')? '<i class="fas fa-ban"></i>' : '<i class="far fa-check-circle"></i>' ?>
              </a>
          </td>
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

function stopRight(sid, status) {
  fetch('bsmember_stopright_api.php', {
            method: 'PUT',
            body: JSON.stringify({'sid':sid, 'status':status}),
            // 把JSON轉成字串傳送出去
            headers: new Headers({
                'Content-Type': 'application/json'
            })
    })
    .then(res => res.json())
    // 將回傳的字串轉回JSON
    .then(data => {
      alert(data.message);
      location.reload();
    })
}

</script>