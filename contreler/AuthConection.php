<?php
class AuthConection
{

  public function register()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role = $_POST['role'];
      $user = new Users();
      $user->create($name, $email, $password, $role);
      
        header("location: /login");
    }
    require_once "views/register.php";
  }

  public function login()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $user = new Users();
      $result = $user->findByEmail($email, $password);
      if ($result) {
        session_start();
        $_SESSION['id'] = $result->getId();
        $_SESSION['name'] = $result->getName();
        $_SESSION['email'] = $result->getEmail();
        $_SESSION['role'] = $result->getRole();

        if ($result->getRole() == 1) {
          header("location: /client");
          exit;
        } else if ($result->getRole() == 2) {
          header("location: /admin");
          exit;
        }
      }
    }
    require_once "views/login.php";
  }
}
