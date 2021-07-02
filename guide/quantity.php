<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gardenia</title>
  <link rel="stylesheet" href="./style-guide.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>

<body style="  background:rgba(18,18,26,1);
  background-image:url('https://i.pinimg.com/originals/ff/34/3a/ff343aa8819c2573ad3409baf4af5e3e.gif');
  background-blend-mode:overlay;
  background-size:100%;
   background-attachment: fixed;">
   

<a href="../index.html"><img alt="logo"src="../logo-pro.jpg" width="100px" height="100px" style="float:right; margin-right:10em;"></a>
    <h1 style="color: #87F381; padding: 6rem 0 0 10.4rem; font-size: 28px;font-family : 'Times New Roman', Times, serif; font-weight: bold;">Yippee! We have customized it for you</h1>
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
            <div class="col-md-1 col-lg-1">
            </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://i.gifer.com/653.gif" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>We have mentioned plants with their quantity that can be easily accommodated in your garden</h6>
                                    <div class="table" style="background-color: #E5EEEA;">
                                       <br>
                                       <div class="table-responsive-md">
                                    
                                       <table class="table table-hover table-striped table-condensed table-bordered">
                                        <thead>
                                            <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">Option</th>
                                            <th class="text-center">You can choose any of the below option, to get better growth of plants and efficient usage of your garden area.</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                            include '../connection.php';
                                            
                                            $s= $_GET['soil'];
                                            $c= $_GET['city'];
                                            $l= $_GET['l'];
                                            $w= $_GET['w'];
                                            $area = $l *$w;
                                            $val=1;
                                            //echo $s;
                                            //echo $c;
                                            //echo $area;
                                            $sql ="SELECT DISTINCT(PSR.Plant_ID) AS 'PLANT ID', P.Plant_Name AS 'PLANTS FOR YOU', P.area_req AS 'AREA'
                                            FROM plant_soil_region PSR, region_data R, soil_data S, Plant_data P
                                            WHERE PSR.region_id = ( SELECT R.region_id FROM region_data R WHERE Region = '$c' ) 
                                              AND PSR.soil_id = ( SELECT S.soil_id FROM soil_data S WHERE soil_name = '$s') 
                                              AND P.area_req < $area
                                              AND PSR.Plant_ID = P.Plant_ID
                                            ORDER BY P.Plant_Name";
                                            $query =mysqli_query($conn, $sql);
                                            echo mysqli_num_rows($query);
                                            echo " Results for your search";
                                            while($rows = mysqli_fetch_assoc($query))
                                            {
                                        ?>

                                            <tr>
                                            <td class="py-2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBRXmZx0tQQjvlZcw91ELf7h2wdOIYSTc2NA&usqp=CAU" width="35px" height="35px"alt="logo">
                                            </td>
                                            <td>
                                            <?php
                                            echo $val;
                                            $val=$val+1;
                                            ?>

                                            </td>
                                            <td class="py-2" style="height:50px;"><?php 
                                            $qty = $area/$rows['AREA'];
                                            echo " ";
                                            
                                            echo (int)$qty;
                                            echo " - ";
                                            echo ($rows['PLANTS FOR YOU']);
                                            echo " plant/plants ";
                                            ?></td>
                                        </tr> 
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <hr class="style1" />
                                <a href="../store/store.html">
                                <button class="btn btn-info" style="margin-right:50px;">Want to buy them ?</button> 
                                </a>
                                <a href="../videoTutorials/video.html">
                                <button class="btn btn-info" style="margin-left:50px;" >Want to learn how to grow ?</button> 
                                        </a>
                            </div>
                            </div>
                        </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <script>
                                                    document.getElementById("soil").innerHTML ="You Opted " + localStorage.getItem("soilName")+ " Soil.";
                                                    document.getElementById("city").innerHTML ="You Opted " + localStorage.getItem("cityName")+ " City.";

                                                    function details(){ 
                                                        console.log(localStorage.getItem("soilName"));
                                                        console.log(localStorage.getItem("cityName"));    
                                                    }
                                                    function call()
                                                    {
                                                        details();
                                                    }

                                            var city =localStorage.getItem("cityName");
                                            var soil =localStorage.getItem("soilName");
                                            
                                        </script>
</body>
</html>