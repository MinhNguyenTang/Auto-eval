<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/formateur.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/spe.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');

class manager
{
  public function getmethod($class)
 {
     $tab = array();
     foreach (get_class_methods($class) as $key => $value)
     {
         if (strstr($value,'get')) {
             $nom = strtolower(substr($value,3));
             if (!is_null($class->$value())) {
                 $tab[$nom] = $class->$value();
             }
         }
     }
     return $tab;
 }

  /**
  * Database connection
  */
  public function db_connection()
  {
    try
    {
      $db = new PDO('mysql:host=localhost;dbname=auto_eval;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
      die('Error :' .$e->getMessage());
    }
    return $db;
  }

  /**
  * @param User $signin
  * Sign in
  */
  public function connexion($signin)
  {
    $request = $this->db_connection()->prepare('SELECT * FROM user WHERE mail:=mail AND mdp:=mdp');
    $request->execute($this->getmethod($signin));
    $result = $request->fetch();
    if($result)
    {
      $user = new user($result);
      return $user;
    }
    else {
      return null;
    }
  }
  /**
  * @param User $user
  * If forgotten password
  */
  public function new_mdp(User $user)
  {
    $request = $this->db_connection()->prepare('UPDATE user SET mdp:=mdp WHERE mail:=mail');
    $request->execute($this->getmethod($user));
  }
  /**
  * @param User $user
  * Sign up
  */
  public function insert_user(User $user)
  {
    $request = $this->db_connection()->prepare('SELECT nom, prenom FROM user');
    $request->execute(array(
      'nom'=>$user->getNom(),
      'prenom'=>$user->getPrenom()
    ));
    $result = $request->fetch();
    if(!$result)
    {
      $request = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, :prenom, :mail, :mdp, :role_user)');
      $request->execute($this->getmethod($user));
      return 1;
    }
    else {
      return 0;
    }
  }
  /**
  *
  */
  public function recovery_data($id)
  {
    $request = $this->db_connection()->prepare('SELECT * FROM user WHERE id:=id');
    $request->execute(array(
      'id' => $id
    ));
    $result = $request->fetch();
    return $result;
  }

  /**
  * @param User $user
  * Update user's account
  */
  public function modify(User $user)
  {
    $request = $this->db_connection()->prepare('UPDATE user SET nom:=nom, prenom:=prenom, mail=:mail, mdp:=mdp WHERE id:=id');
    $request->execute(array(
      'id'=>$user->getId(),
      'nom'=>$user->getNom(),
      'prenom'=>$user->getPrenom(),
      'mail'=>$user->getMail(),
      'mdp'=>$user->getMdp()
    ));
  }
  /**
  * Updated account visibility
  */
  public function get_modification($user)
  {
    $request = $this->db_connection()->prepare('SELECT * FROM user WHERE mail:=mail AND mdp:=mdp');
    $request->execute(array(
      'mail'=>getMail(),
      'mdp'=>getMdp()
    ));
    $result = $request->fetch();
    if($result)
    {
      $user = new user($result);
      return $user;
    }
    else {
      return null;
    }
  }

  /**
  * @param User $formateurs
  * Add formateurs
  */
  public function add_formateurs(User $formateurs)
  {
    $request = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, prenom, mail, mdp, role_user)');
    $request->execute($this->getmethod($formateurs));
  }

  /**
  * @param User $administrateurs
  * Add Administrateurs
  */
  public function add_administrateurs(User $administrateurs)
  {
    $request = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, prenom, mail, mdp, role_user)');
    $request->execute($this->getmethod($administrateurs));
  }

  /**
  * Display formateurs
  */
  public function afficher_formateurs()
  {
    $request = $this->db_connection()->prepare(
    'SELECT formateurs.id, user.nom, id_spe, specialites.nom_spe FROM formateurs INNER JOIN specialites ON specialites.id = formateurs.id_spe
    INNER JOIN user ON user.id = formateurs.id_user');
    $request->execute();
    $i = 0;
    $result = $request->fetchAll();
    foreach($result as $key => $values)
    {
      $array = array();
      foreach($values as $keys => $value) {
        if(!is_int($keys)) {
          $array[$keys] = array();
        }
      }
      $formateurs[$i] = $array;
      $i++;
    }
    return $formateurs;
  }

}
 ?>
