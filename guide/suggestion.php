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
<h1 style="color: #87F381; padding: 6rem 0 0 10.4rem; font-size: 28px;font-family : 'Times New Roman', Times, serif; font-weight: bold;"> Happy to Help you, here are best suggestion for you.  </h1>
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="text-container">
                                    <label><p id="soil"></p></label><br>
                                    <label><p id="city"></p></label><br><br>
                                    <a href="./emergency.php"><button>Change your option</button></a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="text-container">
                                <form>
                                <div class="form-group">
                                <label for="length">Enter the length of your Garden</label>
                                <input type="number" class="form-control" id="length" aria-describedby="len" placeholder="Enter length here">
                                <small id="len" class="form-text text-muted">Enter the length value in metre.</small>
                                </div>
                                <div class="form-group">
                                <label for="width">Enter the width of your Garden</label>
                                <input type="number" class="form-control" id="width" aria-describedby="len" placeholder="Enter width here">
                                <small id="len" class="form-text text-muted">Enter the width value in metre.</small>
                                </div>
                                </form> 
                                <button class="btn btn-primary" onclick="redirect()" >View Resut</button> 
                            </div>
                            </div>
                        </div>
                </div>
                            </div>
                
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://i.gifer.com/653.gif" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Suggested Plants</h6>
                                    <div class="table" style="background-color: #E5EEEA;">
                                       <br>
                                       <div class="table-responsive-md">
                                    <table class="table table-hover table-striped table-condensed table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Plant Name</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php
                                include '../connection.php';
                                            
                                            $s= $_GET['soil'];
                                            $c= $_GET['city'];
                                            $sql ="SELECT DISTINCT(PSR.Plant_ID) AS 'PLANT ID', P.Plant_Name AS 'PLANTS FOR YOU' 
                                            FROM plant_soil_region PSR, region_data R, soil_data S, plant_data P WHERE 
                                            PSR.region_id = ( SELECT R.region_id FROM region_data R WHERE Region = '$c' ) 
                                            AND PSR.soil_id = ( SELECT S.soil_id FROM soil_data S WHERE soil_name = '$s') AND PSR.Plant_ID = P.Plant_ID";
                                            $query =mysqli_query($conn, $sql);
                                            echo mysqli_num_rows($query); 
                                            
                                            echo " Results for your search";
                                            while($rows = mysqli_fetch_assoc($query))
                                            {
                                        ?>

                                            <tr>
                                            <td class="py-2"><?php echo $rows['PLANTS FOR YOU']; ?></td>
                                            <td class="py-2"><img src="https://image.similarpng.com/very-thumbnail/2021/05/Checkmark-green-tick-isolated-on-transparent-background-PNG.png" width="35px" height="35px"alt="logo">
                                            </td>
                                            
                                        </tr> 
                                        <?php
                                            }
                                
                                        ?>
                                        </tbody>
                                    </table>
                                    
                                    </div>
                                
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
                function redirect()
                {
                    var len = document.getElementById('length').value;
                    var wid = document.getElementById('width').value;
                    var link = window.location.href;
                    let newStr = link.replace('suggestion','quantity');
                    window.location = newStr + "&l="+len+ "&w="+wid ;
                }
                var city =localStorage.getItem("cityName");
                var soil =localStorage.getItem("soilName");                                       
</script>
</body>
</html>
