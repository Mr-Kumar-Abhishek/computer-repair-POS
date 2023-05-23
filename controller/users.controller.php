<?php 
class ControllerUser{


    public function ctrlUserLogin() {
        if(isset($_POST['username'])) {

           if ( preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) && 
            preg_match('/^[a-zA-Z0-9]+$/', $_POST['password']) ) {

            
                $table = 'users';

                $item = "username";

                $value  = $_POST['username'];

                $request = ModelUsers::ModelShowUsers($table, $item, $value);

                if($request["username"] == $_POST['username'] && $request["password"] == $_POST['password']) {
                    echo "<br> <div class='alert alert-success'>Welcome to the system</div>";
                } else {
                    echo "<br> <div class='alert alert-danger'> Error in login, please try again</div>";  
                }
            }

        }
    }
}