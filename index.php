
<?php
include_once 'includes/users.php';
include_once 'includes/user_session.php';

$userSession = new User_Session();
$user = new Users();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setuser($userSession->getCurrentUser());
    include_once 'view/caja.php';
}elseif(isset($_POST['username']) && isset($_POST['pass'])){
    //echo 'validacion de login';
    $userFrom = $_POST['username'];
    $passFrom =$_POST['pass'];
    
    if($user->userExit($userFrom, $passFrom)){
        //echo"usuario validado";
        $userSession->setCurrentUser($userFrom);
        $user->setuser($userFrom);
        
        include_once 'view/caja.php';
    }else{
        //echo 'datos incorrectos';
        $errorLogin = "Datos Incorrectos";
        include_once 'view/login.php';
    }
    
}else{
    //echo "login";
    include_once 'view/login.php';
}

?>
