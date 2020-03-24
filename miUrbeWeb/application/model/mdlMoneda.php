
<?php

class mdlMoneda
{

  private $IdMoneda;
  private $SiglasMoneda;
  private $NombreMoneda;
  private $db;

  public function __SET($attr, $valor)
  {
    $this->$attr = $valor;
  }

  public function __GET($attr)
  {
    return $this->$attr;
  }

  public function __construct($db)
  {
    try {
      $this->db = $db;
    } catch (PDOException $e) {
      exit('Cannot connected DB');
    }
  }


  public function consultarMonedas()
  {
    $sql = "CAll SP_consultarMonedas()";
    try {
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  }
 ?>
