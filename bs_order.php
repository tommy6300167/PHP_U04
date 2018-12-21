<?php
require __DIR__. '/_connect_db.php';

$pname = 'bs_order';

$per_page = 5;
$page = isset($_GET['page'])?intval($_GET['page']):1;

$t_sql = "SELECT COUNT(1) FROM bs_order";
$total_rows = $pdo->query($t_sql)->fetch()[0]; //stmt->fetch()  拿到索引和關聯
$total_pages = ceil($total_rows/$per_page);

// 限定頁碼範圍
if($page<1){
  header('Location: bs_order.php');
  exit;
}
if($page>$total_pages) {
  header('Location: bs_order.php?page='. $total_pages);
  exit;
}
$sql = sprintf("SELECT * FROM bs_order ORDER BY BO_sid DESC LIMIT %s, %s",($page-1)*$per_page,$per_page);
$stmt = $pdo->query($sql);

// echo $thisMonthPoint;
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
    table-layout: auto;
  }
  .tbl-header{
    background-color: rgba(255,255,255,0.3);
   }
  .tbl-content{
    /* height:300px; */
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
  
  .tableScrolled{
    position: fixed;
    top: 60px;
    z-index: 1;
    box-shadow: 0px 1px 5px #000;
    width: 100%;
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

  .page_bar {
    background: #444;
  }

  </style>

<section>
  <!--for demo wrap-->
  <h3>訂單管理</h3>
<?php 
// echo "今日購買金額:".$todayPoint."\t"."\t";
// echo "本月購買金額:".$thisMonthPoint;
?>
開始:
<input type="date" id="start" name="trip-start"
       value="2018-12-03" min="2018-01-01" max="2018-12-31">
結束:
<input type="date" id="end" name="trip-start"
       value="2018-12-08" min="2018-01-01" max="2018-12-31">
       
<div id="chart"></div>

    <table cellpadding="0" cellspacing="0" border="0">
      <thead class="tbl-header">
        <tr>
          <th>訂單編號</th>
          <th>下單者信箱</th>
          <th>總共消費</th>
          <th>總共點數</th>
          <th>消費日期</th>
          <th>付款方式</th>
          <!-- <th>BO_rename</th> -->
          <!-- <th>BO_receipt</th> -->
        </tr>
      </thead>
      <tbody class="tbl-content">
      <?php while($r = $stmt->fetch(PDO::FETCH_ASSOC)): 
        ?>
        <tr>
            <td><?= $r['BO_sid'] ?></td>
            <td><?= $r['BS_email'] ?></td>
            <td><?= $r['BO_amount'] ?></td>
            <td><?= $r['BO_point'] ?></td>
            <td><?= $r['BO_date'] ?></td>
            <td><?= $r['BO_method'] ?></td>
            <!-- <td><?= $r['BO_rename'] ?></td> -->
            <!-- <td><?= $r['BO_receipt'] ?></td> -->
        </tr>
      <?php  endwhile;         ?>
      </tbody>
    </table>

<nav class="page_bar" aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?= $page==1?'disabled':''; ?>"><a class="page-link" href="?page=1">&lt;&lt;</a></li>
    <li class="page-item <?= $page==1?'disabled':''; ?>"><a class="page-link" href="?page=<?=$page-1?>">&lt;</a></li>
    <li class="page-item"><a class="page-link"><?= $page.'/'.$total_pages ?></a></li>
    <li class="page-item <?= $page==$total_pages?'disabled':''; ?>"><a class="page-link" href="?page=<?=$page+1?>">&gt;</a></li>
    <li class="page-item <?= $page==$total_pages?'disabled':''; ?>"><a class="page-link" href="?page=<?=$total_pages?>">&gt;&gt;</a></li>
  </ul>
</nav>

  <script>
  //一進來就會顯示圖表

    var start = $("#start").val();
    var end = $("#end").val();
    window.addEventListener("load",function(){
      lineChart(start,end)
    })
    

//選擇新的時間點會觸發lineChart()重新畫圖表
    $("input").on("change ",function(){
      console.log($(this).val())
      var start = $("#start").val();
      var end = $("#end").val();
      console.log(start,end)
      lineChart(start,end)
    })

    //eg: Sat Dec 08 2018 01:13:25 GMT+0800 (台北標準時間) ==> 2018-12-8
    function timeFormat(date){
      return date.getFullYear()+"-"+((date.getMonth()+1)<10?"0"+(date.getMonth()+1):(date.getMonth()+1))+"-"+(date.getDate()<10?"0"+date.getDate():date.getDate());
    }
    function lineChart(start,end){
      if(start>end){
        alert("開始時間不能大於結束時間")
        return
      }
      let startDay = new Date(start)
      console.log("startDay:"+startDay)
      //算開始到結束日期一共幾天
      let totalDays = new Date(end) - new Date(start);
      totalDays = totalDays/24/60/60/1000; //毫秒轉天數
      totalDays+=1;
      console.log("共"+totalDays+"天")
      let xArray = [timeFormat(startDay)]

      // console.log(xArray)
      for(let i=1;i<totalDays;i++){
        let nextDay = new Date(start);
        nextDay.setDate(startDay.getDate()+i)
        // console.log(nextDay)
        xArray.push(timeFormat(nextDay))

      }
      // console.log(xArray)
        let xDate = []
        $.get('get_bs_order_data.php', {x:xArray}, function(data){
          console.log(data)
            xDate = data.slice(1,-1);  //data回傳"[0,4400,1950,1750]"=> 只取 "0,4400,1950,1750"部分
            console.log(xDate)
            array = xDate.split(","); // array = ["0","4400","1950","1750"]
            console.log(array)
            for(let i=0;i<array.length;i++)
            array[i]=parseInt(array[i]) //array =[0,4400,1950,1750]
            console.log(array)
          var chart = c3.generate({
          data: {
            x: 'x',
          xFormat: '%Y-%m-%d', // 'xFormat' can be used as custom format of 'x'
            columns: [
              ['x', ...xArray],
              ['xDate',...array],
              // ['x', '2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'],
              // ['x', '20130101', '20130102', '20130103', '20130104', '20130105', '20130106'],
                // ['data1', 30, 200, 100, 400, 150, 250],
                // ['data2', 130, 340, 200, 500, 250, 350]
            ]
        },
        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    format: '%Y-%m-%d'
                }
            }
        }
    });
        })
        
      
      
    } 
  



// chart.hide(['data2', 'data3']);
  </script>


