<?php

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
  * Sign up
  */
  public function insert_user(User $user)
  {
    $request = $this->db_connection()->prepare('SELECT nom, prenom FROM user');
    $request->execute(array(
      'nom' => getNom(),
      'prenom' => getPrenom()
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
  * Add formateurs
  */
  public function add_formateurs(User $formateurs)
  {
    $request = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, prenom, mail, mdp, role_user)');
    $request->execute($this->getmethod($formateurs));
  }

  /**
  * Add Administrateurs
  */
  public function add_administrateurs(User $administrateurs)
  {
    $request = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, prenom, mail, mdp, role_user)');
    $request->execute($this->getmethod($administrateurs));
  }
}
 ?>
