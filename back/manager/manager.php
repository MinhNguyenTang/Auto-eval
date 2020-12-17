<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/formateur.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/spe.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/back/entity/user.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/vendor/phpmailer/phpmailer/src/Exception.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/vendor/phpmailer/phpmailer/src/SMTP.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Auto-eval/vendor/autoload.php');

class manager
{
  /**
  * Database connection
  */
  public function db_connection()
  {
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=auto_eval;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
      die('Error :' .$e->getMessage());
    }
    return $bdd;
  }

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
  * @param User $signin
  * Sign in
  */
  public function connexion($signin)
  {
    $req = $this->db_connection()->prepare('SELECT * FROM user WHERE mail=:mail AND mdp=:mdp');
    $req->execute($this->getmethod($signin));
    $result = $req->fetch();
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
  public function nouveau_mdp(User $user)
  {
    $req = $this->db_connection()->prepare('UPDATE user SET mdp=:mdp WHERE mail=:mail');
    $req->execute($this->getmethod($user));
  }

  /**
  * @param User $user
  * Sign up
  */
  public function inscription(User $user)
  {
    $req = $this->db_connection()->prepare('SELECT nom, prenom FROM user WHERE nom=:nom AND prenom=:prenom');
    $req->execute(array(
      'nom'=>$user->getNom(),
      'prenom'=>$user->getPrenom()
    ));
    $result = $req->fetch();
    if(!$result)
    {
      $req = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, :prenom, :mail, :mdp, :role_user)');
      $req->execute($this->getmethod($user));
      return 1;
    }
    else
    {
      return 0;
    }

    // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($user->getMail(), 'Unknown');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Validation de votre souscription';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Le message a bien été envoyé';
} catch (Exception $e) {
    echo "Le message n'a pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
}
  }

  /**
  *
  */
  public function recuperation_data($id)
  {
    $req = $this->db_connection()->prepare('SELECT * FROM user WHERE id:=id');
    $req->execute(array(
      'id' => $id
    ));
    $result = $req->fetch();
    return $result;
  }

  /**
  * @param User $user
  * Update user's account
  */
  public function modification(User $user)
  {
    $req = $this->db_connection()->prepare('UPDATE user SET nom=:nom, prenom=:prenom, mail=:mail, mdp=:mdp WHERE id=:id');
    $req->execute(array(
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
    $req = $this->db_connection()->prepare('SELECT * FROM user WHERE mail=:mail AND mdp=:mdp');
    $req->execute(array(
      'mail'=>$user->getMail(),
      'mdp'=>$user->getMdp()
    ));
    $result = $req->fetch();
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
  public function ajouter_formateurs(User $user,Formateur $formateurs)
  {
    $req = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, prenom, mail, mdp, role_user)');
    $req->execute($this->getmethod($formateurs));
    $req = $this->db_connection()->prepare('SELECT id FROM user WHERE nom:=nom AND prenom:=prenom');
    $result = $req->fetch();
    $formateurs->setId_user($result['id']);
    $req = $this->db_connection()->prepare('INSERT INTO formateurs (id_user, id_spe, telephone) VALUES (:id_user, :id_spe, :telephone)');
    $req->execute($this->getmethod($formateurs));
  }

  /**
  * @param User $administrateurs
  * Add Administrateurs
  */
  public function add_administrateurs(User $administrateurs)
  {
    $req = $this->db_connection()->prepare('SELECT nom, prenom FROM user WHERE id:=id AND role_user="admin"');
    $req->execute(array(
      'nom'=>$administrateurs->getNom(),
      'prenom'=>$administrateurs->getPrenom()
    ));
    $result = $req->fetch();
    if($result)
    {
      return null;
    }
    else {
    $req = $this->db_connection()->prepare('INSERT INTO user (nom, prenom, mail, mdp, role_user) VALUES (:nom, prenom, mail, mdp, role_user)');
    $req->execute($this->getmethod($administrateurs));
  }
}

/**
* Delete users
*/
public function delete()
{
  $req = $this->db_connection()->prepare('DELETE FROM user WHERE id=:id');
  $req->execute();
}

  /**
  * Display formateurs
  */
  public function afficher_formateurs()
  {
    $req = $this->db_connection()->prepare(
    'SELECT formateurs.id, user.nom, id_spe, specialites.nom_spe FROM formateurs INNER JOIN specialites ON specialites.id = formateurs.id_spe
    INNER JOIN user ON user.id = formateurs.id_user');
    $req->execute();
    $i = 0;
    $result = $req->fetchAll();
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

  /**
  * Display all interns
  */
  public function afficher_stagiaires($stagiaires)
  {
    $req = $this->db_connection()->prepare('SELECT nom, prenom, role_user FROM user WHERE role_user="user"');
    $req->execute(array(
      'nom'=>$stagiaires->getNom(),
      'prenom'=>$stagiaires->getPrenom(),
      'role_user'=>$stagiaires->getRole_user()
    ));
    $result = $req->fetchAll();
    return $stagiaires;
  }

}
 ?>
