<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" conten="width=device-width, initial-scale=1.0">
    <title>All Products - RedStore</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
  </head>
<body>

    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/nd.gif" width="125px">
        </div>  
        <nav>
          <ul id="MenuItems">
            <li><a href="">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Account</a></li>
          </ul>
        </nav>
        <img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>  
    </div>

<!------------ single product details -------------->

    <div class="small-container single-product">
        <div class="row">
    <div class="col-2">
        <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

        <div class="small-img-row">
        <div class="small-img-col">
        <img src="images/gallery-1.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
        <img src="images/gallery-2.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
        <img src="images/gallery-3.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
        <img src="images/gallery-4.jpg" width="100%" class="small-img">
        </div>
        </div>
    </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>Red Printd T-Shirt By Fukyo</h1>
                <h4>50.000f Fca</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="panier.php" class="btn">Ajouter au Panier</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3><br>
                <p>Give your summer wardrobe a style upgrade with the Fukyo Men's Active T-shirt. Team it with a pair of shorts for your morning workout or a denims for an evening out with the guys.</p>
            </div>
            </div>
    </div>

<!------------------title------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
<!------------products----------->
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg">
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></I>
          </div>
          <p>4 000 f Cfa</p>
        </div>
        <div class="col-4">
          <img src="images/product2.jpg" width="245" height="245">
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></I>
          </div>
          <p>18 500 f Cfa</p>
        </div>
        <div class="col-4">
          <img src="images/product-11.jpg">
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></I>
          </div>
          <p>12 000 f Cfa</p>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg">
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></I>
          </div>
          <p>15 300 f Cfa</p>
        </div>
      </div>
    </div>
<!--------------- footer--------------------->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download Our App For Android and ios Mobile Phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png">
              <img src="images/app-store.png">
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo-white.png">
            <p>Our Purpose Is To Sustainable Make the Pleasure and Benefits of Sports Accessible to the Many.  </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful LInks</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Easy Hackeuse Made in By FUKYO</p>
      </div>
    </div>
<!-----------js for toggle menu------------>
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";

      function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
          MenuItems.style.maxHeight = "200px";
        }
        else
        {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

    
<!-- ---------js for product gallery---------->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() 
            {
                ProductImg.src = SmallImg[0].src;
            }
        SmallImg[1].onclick = function() 
            {
                ProductImg.src = SmallImg[1].src;
            }
        SmallImg[2].onclick = function() 
            {
                ProductImg.src = SmallImg[2].src;
            }
        SmallImg[3].onclick = function() 
            {
                ProductImg.src = SmallImg[3].src;
            }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>