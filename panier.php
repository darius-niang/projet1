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
<!------------------cart items details------------>
    <div class="small-container panier-page">
        <table>
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
            <tr>
              <td>
                <div class="cart-info">
                  <img src="images/buy-1.jpg">
                  <div>
                    <p>RED Printed Tshirt</p>
                    <small>Price:16.500 f Cfa</small>
                    <br>
                    <a href="">Remove</a>
                  </div>
                </div>
              </td>
              <td><input type="number" value="1"></td>
              <td>16 500 f Cfa</td>
            </tr>
            <tr>
              <td>
                <div class="cart-info">
                  <img src="images/buy-2.jpg">
                  <div>
                    <p>RED Printed Tshirt</p>
                    <small>Price:10.500 f Cfa</small>
                    <br>
                    <a href="">Remove</a>
                  </div>
                </div>
              </td>
              <td><input type="number" value="1"></td>
              <td>10 500 f Cfa</td>
            </tr>
            <tr>
              <td>
                <div class="cart-info">
                  <img src="images/buy-3.jpg">
                  <div>
                    <p>RED Printed Tshirt</p>
                    <small>Price:8.500 f Cfa</small>
                    <br>
                    <a href="">Remove</a>
                  </div>
                </div>
              </td>
              <td><input type="number" value="1"></td>
              <td>8 500 f Cfa</td>
            </tr>
        </table>

        <div class="total-price">
          <table>
            <tr>
              <td>Subtotal</td>
              <td>35 500 f Cfa</td>
            </tr>
            <tr>
              <td>Taxe</td>
              <td>5000 f Cfa</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>40 500 f Cfa</td>
            </tr>
          </table>
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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>