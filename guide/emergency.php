<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gardenia</title>
  <link rel="stylesheet" href="./style-guide.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>
<script>
    function save(name) {
        localStorage.setItem("soilName",name);
        }
function save1(name) {
        localStorage.setItem("cityName",name);
        console.log("++++++++++++++++++"+localStorage.getItem("cityName"));
}   
function cityChange() {
  var x = document.getElementById("city").value;
  save1(x);
  window.location = 'emergency.php?city=' + x;
}
function getURL(name) {
        var link = window.location.href;
        let newStr = link.replace('emergency','suggestion');
        window.location = newStr + "&soil="+name ;
        save(name);
    }
</script> 
<body style="  background:rgba(18,18,26,1);
  background-image:url('https://i.pinimg.com/originals/ff/34/3a/ff343aa8819c2573ad3409baf4af5e3e.gif');
  background-blend-mode:overlay;
  background-size:100%;
   background-attachment: fixed;">

<a href="../index.html"><img alt="logo"src="../logo-pro.jpg" width="100px" height="100px" style="float:right; margin-right:10em;"></a>
    <h1 style="color: #87F381; padding: 6rem 0 0 10.4rem; font-size: 28px;font-family : 'Times New Roman', Times, serif; font-weight: bold;"> Choose SOIL that defines your garden</h1>
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-box" style="padding:20px;">
                                <label for="city"><h6>SELECT YOUR CITY -</h6><br>
                                    <p> To analyse temperature and humidity, for better results !</p></label>
                                    <br>

                                    <select id="city" name="city" onchange="cityChange()">
                                    <option value="-">Select City</option>  
                                    <option value="delhi">Delhi</option>
                                      <option value="mumbai">Mumbai</option>
                                      <option value="banglore">Banglore</option>
                                      <option value="kolkata">Kolkata</option>
                                      <option value="pune">Pune</option>
                                      <option value="chandigarh">Chandigarh</option>
                                      <option value="nagpur">Nagpur</option>
                                    </select>
                                    </div>
                                   
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"> 
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://www.utkaltoday.com/wp-content/uploads/2020/06/alluvial.jpg" alt="" />
                                </div>
                                <div class="text-container">
                                <button style="all: unset;" onclick="getURL('alluvial')">
                                    <h6>Alluvial Soil</h6>
                                    <p><ol style="text-align: left; color: black;">
                                        <li> Loose </li>
                                        <li> Unconsolidated soil or sediment that has been eroded by water in some form </li>
                                        <li> Includes fine particles of slit and clay </li>
                                        
                                    </ul></p>
                                </button>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51ztIGI%2B9CL.jpg" alt="" />
                                </div>
                                <div class="text-container">                                    
                                    <button style="all: unset;" onclick="getURL('black')">
                                    <h6>Black Soil</h6>
                                    <p><ol style="text-align: left; color: black;">
                                        <li> Sticky </li>
                                        <li> Thick, dark-coloured soil </li>
                                        <li> Made up of extremely fine clayey materials </li>
                                        <li> Develops deep cracks in summer </li>
                                    </ul></p>
                                </button>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="./red_soil.jpg" alt="" />
                                </div>
                                <div class="text-container">
                                <button style="all: unset;" onclick="getURL('red')">
                                    <h6>Red Soil</h6>
                                   <p><ol style="text-align: left; color: black;">
                                        <li> Develops in warm, temperate and moist climate </li>
                                        <li> Porous, and friable in structure </li>
                                        <li> Ranges from sand to clay, with majority being loamy </li>
                                        <li>Seen mainly in low rainfall area</li>
                                    </ul></p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgxjIxzxTz0wAOMwoYUYh1_cBiLQJI_Vpf8e2ZVURB8CNDpqFw7RewVg4HWRrYuLXhtv4&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                <button style="all: unset;" onclick="getURL('sandy')">
                                    <h6>Sandy soil</h6>
                                  <p><ol style="text-align: left; color: black;">
                                        <li> Light - have high sand and little clay</li>
                                        <li>Warms up in spring </li>
                                        <li> Low in nutrients </li>
                                        <li> Often acidic </li>
                                        <li> They dry out quickly </li>
                                    </ul></p>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://fullhomegardening.com/wp-content/uploads/2020/06/Clay-Soil.jpg" alt="" />
                                </div>
                                <div class="text-container">
                                    <button style="all: unset;" onclick="getURL('clayey')">
                                    <h6>Clayey soil</h6>
                                  <p><ol style="text-align: left; color: black;">
                                        <li> Small particle size</li>
                                        <li> Thicker and heavier </li>
                                        <li> More resistant to erosion</li>
                                        <li> Has slow permeability </li>
                                        <li> Rubbed clay soil, gives shiny appearance </li>
                                    </ul></p>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                       <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://i0.wp.com/theconstructor.org/wp-content/uploads/2018/09/silt-soil.jpg?resize=450%2C253&ssl=1" alt="" />
                                </div>
                                <div class="text-container">
                                <button style="all: unset;" onclick="getURL('silty')">
                                    <h6>Silty soil</h6>
                                  <p><ol style="text-align: left; color: black;">
                                        <li> Intermediate sized particles</li>
                                        <li> Fertile </li>
                                        <li> Fairly well drained </li>
                                        <li> Holds more moisture </li>
                                        <li> Slippery when wet, not grainy or rocky </li>
                                    </ul></p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://contractorquotes.us/wp-content/uploads/2018/08/loam-soil.jpg" alt="" />
                                </div>
                                <div class="text-container">
                                <button style="all: unset;" onclick="getURL('loamy')">
                                    <h6>Loamy soil</h6>
                                  <p><ol style="text-align: left; color: black;">
                                        <li> Fertile </li>
                                        <li> Well-drained and easily worked </li>
                                        <li> When compressed, they hold their shape but break easily </li>
                                        <li> Gives a gritty feel </li>
                                    </ul></p>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://previews.123rf.com/images/golfloiloi/golfloiloi1508/golfloiloi150800840/43670480-laterite-soil-on-hand.jpg" alt="" />
                                </div>
                                <div class="text-container">
                                <button style="all: unset;" onclick="getURL('laterite')">
                                    <h6>Laterite soil</h6>
                                  <p><ol style="text-align: left; color: black;">
                                        <li> Not very fertile </li>
                                        <li> Coarse in texture </li>
                                        <li> Colour - red, yellow and brown </li>
                                        <li> Generally soft, but hardens on exposure </li>
                                        <li>Low humus content</li>
                                    </ul></p>
                                </button>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
  
</body>
</html>