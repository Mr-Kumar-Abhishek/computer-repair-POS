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

                var_dump($request);
            }

        }
    }
}