<?php include 'nav.php';?>

<style>

  .btns {
    position: relative;
    margin-left: 620px;
    margin-top: 80px;
    padding: 18px;
    background-color: black;
    font-weight: bold;
    font-size: 36px;
    color: black;
    box-shadow: 80%;
    box-sizing: border-box;
    width: 320px;
    height: 120px;
    border-radius: 17px;
    background-image: url('images/back.jpg');
  }


  </style>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Banner2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>―Warren Buffett</h3>
        <p> “Only buy something that you’d be perfectly happy to hold if the market shut down for ten years.” </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Banner3.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>― Ben Franklin</h3>
        <p>“If you would be wealthy, think of saving as well as getting.” </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Banner1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>― Aristotle</h3>
        <p> “Money is a guarantee that we may have what we want in the future. Though we need nothing at the moment it insures the possibility of satisfying a new desire when it arises.”</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<div class="center">
      <ul>
        <li class="operations"><a href="#"><i class="fa-fa-money" aria-hidden="true"></i></a><a href="transfer_money.php"><button class="btns"       id="red">   View All Users    </button></a></li>
        <li class="operations"><a href="transfer_money.php"><button class="btns"      id="blue">   Trasnfer Money    </button></a></li>
        <li class="operations"><a href="transactionhistory.php"><button class="btns" id="green"> Transfer History</button></a></li>
      </ul>
    </div>

<?php include 'footer.php'; ?>
</html>
