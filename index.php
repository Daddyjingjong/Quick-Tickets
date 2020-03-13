<?php
require "header.php";
require "config.php";
?>
<br>
<hr>
<h3 id="head">TRENDING</h3>
<hr>

<div class="row">
<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
    <div class="card" style="">
        <!--          specify the details of the styles you want on you picture here-->

        <div class="card-body">
            <h4 class="card-title"></h4>
            <a href="details.php"><img src="static/images/t1.jpeg" alt="web icon" style="height: 550px;width:100%"></a>
            <p class="card-text"></p>
            <p class="card-text"></p>
            <a href="" class="btn bg-success">BUY TICKET</a>
            <!--            remember to add the url at the href-->
        </div>
    </div>
</div><br><br><br>
<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
    <div class="card" style="">
        <!--          specify the details of the styles you want on you picture here-->

        <div class="card-body">
            <h4 class="card-title"></h4>
            <img src="static/images/t2.jpeg" alt="web icon" style="height: 550px;width:100%">
            <p class="card-text"></p>
            <p class="card-text"></p>
            <a href="" class="btn bg-success">BUY TICKET</a>
            <!--            remember to add the url at the href-->
        </div>
    </div>
</div>
<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
    <div class="card" style="">
        <!--          specify the details of the styles you want on you picture here-->
        <div class="card-body">
            <h4 class="card-title"></h4>
            <img src="static/images/t3.jpeg" alt="web icon" style="height: 550px;width:100%">
            <p class="card-text"></p>
            <p class="card-text"></p>
            <a href="" class="btn bg-success">BUY TICKET</a>
            <!--            remember to add the url at the href-->
        </div>
    </div>
</div>
</div><br><br>
<div class="row">
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->

            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t4.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->

            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t5.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->
            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t6.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
</div><br><br>
<div class="container">
    <div class="row">
        <?php
        $sql="SELECT * FROM `add_event`";
        $event = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($event)){
            $id = $row['id'];
            $name = $row['ename'];
            $venue = $row['evenue'];
            $price = $row['eprice'];
            $description = $row['edescription'];
            $image = $row['image'];
            echo "<div class='col-md-4 col-lg-4 col-xl-4'>";
            echo "<div class='card' style='500px;width=100%'>";
            echo "<img src=images/$image class='card-img' style='width: 100%;height: 250px;border-bottom: 1px solid blue'>";

            echo "<div class='card-body'>";
            echo "<p>$name <br> $price <br></p>";
            echo "</div>";
            echo "<div></div>";
            echo "</div>";
            echo "</div>";


        }
        ?>
    </div>
</div>
<hr>
<h3 id="head">UPCOMING</h3>
<hr>
<div class="row">
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->

            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t12.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div><br><br><br>
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->

            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t7.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->
            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t8.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
</div><br><br>
<div class="row">
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->

            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t9.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->

            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t10.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" id="eez">
        <div class="card" style="">
            <!--          specify the details of the styles you want on you picture here-->
            <div class="card-body">
                <h4 class="card-title"></h4>
                <img src="static/images/t11.jpeg" alt="web icon" style="height: 550px;width:100%">
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="" class="btn bg-success">BUY TICKET</a>
                <!--            remember to add the url at the href-->
            </div>
        </div>
    </div>
</div><br><br>
<?php
require "footer.php";
?>
