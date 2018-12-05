<style>
/* Global Styling */
body, header, nav, main {
  margin: 0;
  padding: 0;
}

body {
  background: #3e606f;
  font-family: "Helvetica", sans-sarif;
  font-size: 16px;
  color: #fcfff5;
}

header {
  text-align: center;
  height: 100px;
  padding-top: 50px;
}


main {
  position: relative;
  height: 1500px;
  text-align: center;
  margin-top: 150px;
}

/* Navbar Styling */
nav {
  background: #91aa9d;
  position: relative;
  width: 100%;
  height: 50px;
  text-align: center;
  margin-bottom: -20px;
  padding: 5px 0;
  transition: box-shadow 0.5s ease;
}

nav li {
  display: inline-block;
  list-style: none;
  text-transform: uppercase;
}

nav a {
  text-decoration: none;
  color: #fcfff5;
  padding: 22px;
}

nav a:hover {
  background: #193449;
}

/* Sticky Navigation */
.navScrolled {
  position: fixed;
  top: 0;
  z-index: 1;
  box-shadow: 0px 1px 5px #000;
}
</style>

<header>
  <h1>Brand Name</h1>
</header>
<nav id="topNav">
    <ul>
      <li><? $pname=="index"?'active':''?>
      <li><? $pname=="bsmember"?'active':''?><a href="icmember.php">網紅會員</a></li>
      <li><? $pname=="icmember"?'active':''?><a href="bsmember.php">廠商會員</a></li>
      <li><? $pname=="case_control"?'active':''?><a href="case_control.php">專案管理</a></li>
      <li><? $pname=="statistics"?'active':''?><a href="bs_order.php">訂單管理</a></li>
      <li><? $pname=="problem_control"?'active':''?><a href="problem_control.php">問題回報</a></li>
    </ul>
</nav>


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
var navBar = $("#topNav");
var hdrHeight = $("header").height();


$(window).scroll(function() {
  if( $(this).scrollTop() > hdrHeight + 50) {
    navBar.addClass("navScrolled");
  } else {
    navBar.removeClass("navScrolled");
  }
});

</script>
