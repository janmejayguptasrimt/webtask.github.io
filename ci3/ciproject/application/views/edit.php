<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>update</title>
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
<h1> Edit Record</h1>
<div class="container">


    <form action="<?php echo base_url().'user/edit/'.$user['id'];  ?>" method="POST">

        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"value="<?php echo set_value('name',$user['name'])?>">
       <?php echo form_error('name'); ?>
        </div>
        

        <div class="form-group">
        <label for="mobile">Phone</label>
        <input type="text" name="mobile" class="form-control"value="<?php echo set_value('mobile',$user['mobile'])?>">
        <?php echo form_error('mobile'); ?>
        </div>
   
        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo set_value('email',$user['email'])?>">
        <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
        <label for="designation">Designation</label>
        <input type="text" name="designation" class="form-control" value="<?php echo set_value('designation',$user['designation'])?>">
        <?php echo form_error('designation'); ?>
        </div>
        
        <?php echo form_error('qualification'); ?>
        </div>
        
        
        <div class="form-group">
        <label for="state"> State</label>

                <select name="state"  class="form-control" >
                <option value="<?php echo set_value('state',$user['state'])?>"><?php echo set_value('state',$user['state'])?></option>>
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
        <label for="dob">DOB</label>
        <input type="dob" name="dob" class="form-control" value="<?php echo set_value('dob',$user['dob'])?>">
        <?php echo form_error('dob'); ?>
        </div> 

        <label for="gender">Gender</label>

                    <select name="gender"  class="form-control" >
                    <option value="<?php echo set_value('gender',$user['gender'])?>"><?php echo set_value('gender',$user['gender'])?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    </select>

        <div class="form-group">
        <label for="image">Profile Pic</label>
        <input type="file" name="image" class="form-control" value="<?php echo set_value('$filename',$user['image']) ?>">
        <?php echo form_error('image'); ?>
        </div> 


        <div class="form-group">
        <button class="btn btn-primary">Update</button>
        <a  href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">cancel</a>
    </div>
    </div> 
    </form>
    </div>
</body>
</html>  