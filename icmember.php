<?php
require __DIR__. '/_connect_db.php';
$pname = 'icmember';


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

.{
  font-family:"微軟正黑體";
}

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
</style>




<section>
  <!--for demo wrap-->
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

