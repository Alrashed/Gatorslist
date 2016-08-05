
<div class="container">
    <div class="box">
        <div class="col-lg-8 col-lg-offset-2" style="margin-top:1%;" >
            <div class="panel-heading" style="text-align:center;color:#ffdf80;"><h2>Account overview</h2></div>
            <ul class="nav nav-justified nav-pills" id="account-tab">
                <li class="active" style="border-radius:0px; background:#EEEEEE;"><a data-toggle="tab" href="#home" >Account profile</a></li>
                <li id="" style="background: #EEEEEE;"><a data-toggle="tab" href="#menu1">Selling items</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active well" style="width:100%">
                	<div class="panel-body">
                    	<h5 class="col-lg-3 col-lg-offset-1"><i>First name   </i></h5><h5 class="float-left">: <?php if (isset($user[0]->Firstname)) echo htmlspecialchars($user[0]->Firstname, ENT_QUOTES, 'UTF-8'); ?></h5></br></br></br>
                    	<h5 class="col-lg-3 col-lg-offset-1  float-left"><i>Last name     </i></h5><h5 class="float-left">: <?php if (isset($user[0]->Lastname)) echo htmlspecialchars($user[0]->Lastname, ENT_QUOTES, 'UTF-8'); ?></h5></br></br></br>
                    	<h5 class="col-lg-3 col-lg-offset-1 float-left"><i>Email </i></h5><h5>: <?php if (isset($user[0]->Email)) echo htmlspecialchars($user[0]->Email, ENT_QUOTES, 'UTF-8'); ?></h5></br>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <table>
                        <div class="well" ><h3>Selling Items</h3></div>
                        <thead style="background-color: #ddd; font-weight: bold;">
                        <tr>
                            <td>Image</td>
                            <td>Title</td>
                            <td>ItemCondition</td>
                            <td>Description</td>
                            <td>Price</td>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($userproducts as $userproduct) { ?>
                            <tr>
                                <td><?php if (isset($userproduct->Image_blob1)) echo htmlspecialchars($userproduct->Image_blob1, ENT_QUOTES, 'UTF-8'); ?></td>

                                <td><?php if (isset($userproduct->Title)) echo htmlspecialchars($userproduct->Title, ENT_QUOTES, 'UTF-8'); ?></td>

                                <td><?php if (isset($userproduct->ItemCondition)) echo htmlspecialchars($userproduct->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></td>

                                <td><?php if (isset($userproduct->Description)) echo htmlspecialchars($userproduct->Description, ENT_QUOTES, 'UTF-8'); ?></td>

                                <td><?php if (isset($userproduct->Price)) echo htmlspecialchars($userproduct->Price, ENT_QUOTES, 'UTF-8'); ?></td>
                                
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!--              <h3>Menu 1</h3>-->
                    <!--              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                </div>

            </div>
        </div>
    </div>
</div>