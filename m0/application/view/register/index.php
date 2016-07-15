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

    <h3>Test for DB (data from user table)</h3>
    <table>
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
</div>
