<div class="container">
    <h2>You are in the View: application/view/register/index.php (everything in this box comes from that file)</h2>
    <!-- register form -->
    <div class="box">
        <h3>Register</h3>
        <form action="<?php echo URL; ?>register/signup" method="POST">
            <input type='hidden' name='submitted' id='submitted' value='1'/><br>

            <label for='email' >Email Address*:</label><br>
            <input type='text' name='email' id='email' maxlength="50" /><br>

            <label for='username' >UserName*:</label><br>
            <input type='text' name='username' id='username' maxlength="50" /><br>
            
            <label for='firstname' >FirstName*:</label><br>
            <input type='text' name='firstname' id='firstname' maxlength="50" /><br>

            <label for='lastname' >LastName*:</label><br>
            <input type='text' name='lastname' id='lastname' maxlength="50" /><br>

            <label for='password' >Password*:</label><br>
            <input type='password' name='password' id='password' maxlength="50" /><br>

            <input type='submit' name='submit' value='submit' /><br>

        </form>
    </div>
</div>
