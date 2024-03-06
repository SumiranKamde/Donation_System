<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
    <link rel="stylesheet" href="Donation.css">
    <script src="https://kit.fontawesome.com/f28a22a28f.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <style>
        .container2{
  width:80%;
  margin:auto;
  overflow:hidden;
  font: 15px/1.5 Arial, Helvetica,sans-serif;
}
   
     ul{
  margin:0;
  padding:0;
}
     
     header{
  background:;
  color:#ffffff;
  padding-top:30px;
  min-height:80px;
  border-bottom:#e8491d 3px solid;
}
     
    header a{
  color:black;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
  font-weight:bold;
} 
     
   header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}  
     
     header #branding{
  float:left;
}
     
   header #branding h1{
  margin:0;
}  

header nav{
  float:right;
  margin-top:4px;
}

header .highlight, header .current a{
  color:black;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}
.position{
    position:fixed;
}
    </style>

      <div class="container2 position">
        <div id="branding">
          <h1><span class="highlight">Animal Adoption</span><img src="logo.png" alt=""></h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="Home.html">Home</a></li>
            <li><a href="animalAdd.html"> Add Animal</a></li>
            <li><a href="">Vet</a></li>
             <li><a href="">Donation</a></li>
              <li><a href="">Login/Sign up</a></li>
              <li><a href="">Profile</a></li>
          </ul>
        </nav>
      </div>
    </header>


    
    <div class="container">
        <div class="form-box">
            <h1 id="Donations">Donations</h1>
            <form id="donationForm" action="Donationconnect.php" method="post">

                
                <div class="Name">
                    <label for="Name">Full Name:</label>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="Name" name="Name" placeholder="Enter Your Name" required>
                </div>
                <div class="Email">
                    <label for="Email">Email:</label>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id="Email" name="Email" placeholder="Enter Your Email" required>
                </div>
                <div class="Number">
                    <label for="Number">Phone no:</label>
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" id="Number" name="Number" placeholder="Enter Your Phone Number" maxlength="10" required>
                </div>
                <div class="Gender">
                    <label for="gender">Gender:</label>
                    <label for="gender">Male:</label>
                    <input type="radio" id="male" name="gender" value="m" required="required">
                    <label for="gender">Female:</label>
                    <input type="radio" id="female" name="gender" value="f" required="required">
                    <label for="gender">Other:</label>
                    <input type="radio" id="other" name="gender" value="o" required="required">
                </div>
                <div>
                    <label for="dob">DOB:</label>
                    <input type="date" id="dob" name="dob" required="required">
                </div>
                <div>
                    <label for="country">Country:</label>
                    <select name="Country" id="country">
                        <option value="country">Select Country</option>
                        <option value="India">India</option>
                    </select>
                </div>
                <div class="select-state">
                    <label for="state">State:</label>
                    <select name="State" id="State" required="required">
                        <option value="Select State">Select State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        
                    </select>
                </div>
                <div class="city">
                    <label for="city">City:</label>
                    <input type="text" name="City" id="city" placeholder="Enter Your City" required>
                </div>
                <div class="pincode">
                    <label for="pincode">Pincode:</label>
                    <input type="text" id="pincode" name="Pincode" placeholder="Enter Your Pincode" maxlength="6" required>
                </div>
                <div class="button">
                    <button type="submit" class="btn" id="submitButton">Submit</button> 
                    
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>

