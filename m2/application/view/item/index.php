<form action="<?php echo URL; ?>item/createitem" method="POST" enctype="multipart/form-data">
    <input type='hidden' name='submitted' id='submitted' value='1'/><br>
    
    <label for='Title' >Product title*:</label><br>
    <input type='text' name='Title' id='Title' maxlength="50" /><br>

    <label for='Description' >description*:</label><br>
    <input type='text' name='Description' id='Description' maxlength="50" /><br>

    <label for='Price' >price*:</label><br>
    <input type='text' name='Price' id='Price' maxlength="50" /><br>

    <label for='Condition' >Condition*:</label><br>
    <input type='text' name='Condition' id='Condition' maxlength="50" /><br>

    <label for='Category_Id' >category_Id*:</label><br>
    <input type='int' name='Category_Id' id='Category_Id' maxlength="50" /><br>


    <br>
    <br>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    
    <br>
    <input type='submit' name='submit' value='submit' /><br>

</form>