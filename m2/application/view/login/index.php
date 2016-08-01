<div class="container" >
    <!-- register form -->
    <div class="box">
        <div class="col-lg-4 col-lg-offset-4" style="margin-top:1%" >
        	<!-- Panel container -->
            <div class="panel panel-default ">
            	<!-- panel head-->
            	<div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Member Login</div>
				<!-- panel body -->                
                <form class="panel-body col-lg-offset-0" style="font-size: 16px;background-color: #87CEFA"  role="form" action="<?php echo URL; ?>login/loginuser" method="GET">                    
                      <div class="form-group">
                        <label class="" for="email">SFSU Email:</label>
                        <div>
                          <input type="text" name="email" value="" required class="form-control input-lg" id="username_field" style="font-size:16px" placeholder="Enter SFSU email" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="" for="password">Password:</label>
                        <div> 
                          <input type="password" name="password" value="" required class="form-control input-lg" id="password_field" style="font-size:16px" placeholder="Enter password" />
                        </div>
                      </div>                      
                      <div class="form-group" > 
                        <div class="col-lg-4 col-lg-offset-4">		                     
                          <button type="submit" name="loginuser" class="btn btn-success" id="login">Login</button>
                        </div>
                      </div>
              </form>
            </div>
         </div>
    </div>
    
</div>
<div class="container" style="margin-left:0%;margin-right:0%;">
    <div class="box">
    	<div class="col-lg-8 col-lg-offset-2" style="margin-top:1%;border: 1px solid blue" >
          <div class="" style="text-align:center"><h2>Account overview</h2></div>
          <ul class="nav nav-pills nav-justified" style="border-radius:0px">
            <li class="active" style="border-radius:0px; background:#EEEEEE;"><a data-toggle="tab" href="#home" >Account profile</a></li>
            <li class="" style="background: #EEEEEE;"><a data-toggle="tab" href="#menu1">Selling items</a></li>
          </ul>
    
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <p>+ First name   : {db}</p></br>
              <p>+ Last name    : {db}</p></br>
              <p>+ Account email: {db}</p></br>
            </div>
            <div id="menu1" class="tab-pane fade">
              <h3>Menu 1</h3>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
         
          </div>
      </div>
  </div>
</div>




