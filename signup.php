<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                  <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-top">
                  SaSu
                </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Mobile.php">Mobile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="TC&AV.php">TV & AV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="HomeAppliances.php">Home Appliances</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            
                  <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                  <li><a class="dropdown-item" href="#">support</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="signup.php">Sign UP/Sign In</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Features</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-info" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: rgb(10, 231, 247);">
                        <center><b>
                         Sign Up
                        </center> 
                     </b>
                     </h1>
                    <tr>
                        <td style="color:  rgba(14, 180, 221, 0.726);"><strong>Name</strong> </td>
                        <td><input type="text" class="form-control" placeholder="Enter Your Name"></td>
                    </tr>
                    <tr>
                        <td style="color:   rgba(14, 180, 221, 0.726);"><strong>D.O.B</strong></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:  rgba(14, 180, 221, 0.726);"><strong>EMAIL ID</strong></td>
                        <td><input type="text" class="form-control" placeholder="abcd@gmail.com"></td>
                    </tr>
                    <tr>
                        <td style="color:  rgba(14, 180, 221, 0.726);"><strong>Password</strong></td>
                        <td><input type="password" class="form-control" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td style="color: rgba(14, 180, 221, 0.726) ;"><strong>Confirm Password</strong></td>
                        <td><input type="password" class="form-control" placeholder=" Confirm Password"></td>
                    </tr>
                </table>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                  <table class="table table-borderless">
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">Sign Up</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: rgb(10, 231, 247);">
                       <center><b>
                        Login
                       </center> 
                    </b>
                    </h1>
                        <tr>
                            <td style="color: rgba(14, 180, 221, 0.726);"> <strong>Username:</strong></td>
                           <td><input type="text" class="form-control" placeholder="username"> </td>
                        </tr>
                        <tr>
                            <td  style="color: rgb(14, 180, 221, 0.726);"><strong>Password:</strong> </td>
                            <td><input type="password" class="form-control" placeholder="password"></td>
                        </tr>
                </table>
                <center><img height="200" src="https://www.troyhunt.com/content/images/2016/02/18591858image2.png" alt=""></center>
                <table class="table table-borderless">
                        <tr>
                            
                            <td></td>
                            <td><button class="btn btn-danger">Login</button></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt=""></center>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>