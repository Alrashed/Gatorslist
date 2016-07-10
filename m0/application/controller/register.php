<?php

/**
 * Class register
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Register extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // getting all songs and amount of songs
//        $songs = $this->model->getAllSongs();
//        $amount_of_songs = $this->model->getAmountOfSongs();

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/register/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function signUp()
    {
        // if we have POST data to create a new song entry
//        echo "in sign up";
        if (isset($_POST["submit"])) {
            // do createUser() in model/model.php
            $this->model->createUser($_POST["email"], $_POST["username"],  $_POST["password"]);
        }

        // where to go after song has been added
//        header('location: ' . URL . 'register/index');
    }

    

}
