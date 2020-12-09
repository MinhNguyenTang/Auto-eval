<?php

class formateur
{
  /**
  * @var int
  */
  protected $id;
  /**
  * @var int
  */
  protected $id_user;
  /**
  * @var int
  */
  protected $id_spe;
  /**
  * @var string
  */
  protected $telephone;

  /**
   * user constructor.
   * @param array $array
   */
  public function __construct($array)
  {
      $this->hydrate($array);
  }
  /**
   * @param array $donnees
   */
  public function hydrate($donnees)
  {
      foreach($donnees as $key => $value){
          $method = 'set'.ucfirst($key);
          if(method_exists($this,$method)){
              $this->$method($value);
          }
      }
  }

  /**
   * @return int
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId($id)
  {
      $this->id = $id;
  }

  /**
 * @return int
 */
public function getId_user()
{
    return $this->id_user;
}

/**
 * @param int $id_user
 */
public function setId_user($id_user)
{
    $this->id_user = $id_user;
}

/**
* @return int
*/
public function getId_spe()
{
  return $this->id_spe;
}

/**
* @param int $id_spe
*/
public function setId_spe($id_spe)
{
  $this->id_spe = $id_spe;
}

/**
* @return string
*/
public function getTelephone()
{
  return $this->telephone;
}

/**
* @param string $telephone
*/
public function setTelephone($telephone)
{
  $this->telephone = $telephone;
}

}
 ?>
