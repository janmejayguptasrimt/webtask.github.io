<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>create</title>
    <style>
    form{
        background-color:rgb(240, 240, 240);
        margin-left :30%;
        margin-right: 30%;


    }
        body{
            background-color:LIGHTGRAY;   

        }
        h1{
       margin-left :35%;
        margin-right: 30%;
        }
       
    </style>
</head>
<body>
<h1>   Add Record</h1>
<div class="container">


    <form action="<?=base_url()?>user/create" method="POST" enctype="multipart/form-data">
   
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
       <?php echo form_error('name'); ?>
        </div>
        
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
        <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
        <label for="mobile">Phone</label>
        <input type="text" name="mobile" class="form-control">
        <?php echo form_error('mobile'); ?>
        </div>


        
        <div class="form-group">
        <label for="designation">Designation</label>
        <input type="text" name="designation" class="form-control">
        <?php echo form_error('designation'); ?>
        </div>
        
        
        
        
        <div class="form-group">
        <label for="state"  class="form-lebel"> State</label>
                 <select name="state"  class="form-control" id="stateid">
                <option value="">Select:</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
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
              <?php echo form_error('state'); ?>
              </div> 

              <div class="form-group">
        <label for="hobbies"  class="form-lebel">Hobbies</label><br>

        <input type="radio" name="hobbies" value="Reading"  > Reading   
       <input type="radio" name="hobbies" value="Dancing" > Dancing
       <input type="radio" name="hobbies" value="Playing"> Playing
       <input type="radio" name="hobbies" value="Cooking"> Cooking
        <?php echo form_error('hobbies'); ?>
        </div> 

        

        <div class="form-group">
        <label for="dob">DOB</label>
        <input type="date" name="dob" class="form-control">
        <?php echo form_error('dob'); ?>
        </div> 
   
       
        
        <div class="form-group">
        <label for="gender"  class="form-lebel">Gender</label><br>

        <input type="radio" name="gender" value="male" > Male
       <input type="radio" name="gender" value="female" > Female 
       <input type="radio" name="gender" value="female"> Other
        <?php echo form_error('gender'); ?>
        </div> 

        <div class="form-group">
        <label for="image" class="form-lebel">Profile Pic</label>
        <input type="file" name="image" class="form-control">
        <?php echo form_error('image'); ?>
        </div> 

        <div class="form-group">
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="http://localhost/ci3/ciproject/index.php/user/index" class="btn-secondary btn"style="float:center;">cancel</a>
    </div>
    </div> 
    </form>
    </div>
</body>
</html>  
