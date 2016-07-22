<div class="container" style="border:none; margin-left:5%; margin-right:5%">
    <h2>You are in the View: application/view/register/index.php (everything in this box comes from that file)</h2>
    <!-- register form -->
    <div class="box">
        <div class=" col-sm-6 col-lg-offset-3" >
        	<!-- Panel container -->
            <div class="panel panel-default ">
            	<!-- panel head-->
            	<div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Create your account</div>
				<!-- panel body -->                
                <form class="panel-body col-lg-offset-0" style="padding-right:15%;padding-left:15%;font-size: 16px;background-color: #A9A9A9"  role="form" action="<?php echo URL; ?>register/signup" method="POST">
                      
                      <div class="form-group">
                        <label class="" for="email">Email:</label>
                        <div class="">
                          <input type="email" class="form-control input-lg" id="email_field" placeholder="Enter your email here" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="" for="first name" >First Name:</label>
                        <div class="">
                          <input type="text" class="form-control input-lg" id="firstname" placeholder="Enter your first name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="" for="last name" >Last Name:</label>
                        <div class="">
                          <input type="text" class="form-control input-lg" id="lastname" placeholder="Enter your last name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="" for="username" >Username:</label>
                        <div class="">
                          <input type="text" class="form-control input-lg" id="username_field" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="" for="pwd">Password:</label>
                        <div class=""> 
                          <input type="password" class="form-control input-lg" id="password_field" placeholder="Enter password">
                        </div>
                      </div>
                      <div class="form-group"> 
                        <div class="">
                          <div class="checkbox">
                            <label><input type="checkbox"> I agree with term and condition</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group"> 
                        <div class="">
                          <button type="submit" class="btn btn-danger " style="height:50px; width:100%; font-size:18px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; border-radius:20px">Sign Up</button>
                        </div>
                      </div>
              </form>
            </div>
         </div>
    </div>
</div>

    <table>
    	<div class="well" ><h3>Test for DB (data from user table)</h3></div>
        <thead style="background-color: #ddd; font-weight: bold;">
        <tr>
            <td>UserID</td>
            <td>Username</td>
            <td>Email</td>
            <td>FirstName</td>
            <td>LastName</td>
            <td>DELETE</td>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php if (isset($user->User_id)) echo htmlspecialchars($user->User_id, ENT_QUOTES, 'UTF-8'); ?></td>
                
                <td><?php if (isset($user->Username)) echo htmlspecialchars($user->Username, ENT_QUOTES, 'UTF-8'); ?></td>
                
                <td><?php if (isset($user->Email)) echo htmlspecialchars($user->Email, ENT_QUOTES, 'UTF-8'); ?></td>
                
                <td><?php if (isset($user->Firstname)) echo htmlspecialchars($user->Firstname, ENT_QUOTES, 'UTF-8'); ?></td>
                
                <td><?php if (isset($user->Lastname)) echo htmlspecialchars($user->Lastname, ENT_QUOTES, 'UTF-8'); ?></td>
                
                <td><a href="<?php echo URL . 'register/deleteUser/' . htmlspecialchars($user->User_id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
</div>
