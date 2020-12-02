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
 * @param string $id_user
 */
public function setId_user($id_user)
{
    $this->id_user = $id_user;
}

}
 ?>
