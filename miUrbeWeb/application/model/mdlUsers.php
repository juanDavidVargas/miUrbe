
<?php

    class mdlUsers
    {

      private $IdUsuario;
      private $NombreUsuario;
      private $Correo;
      private $Clave;
      private $NumeroCelular;
      private $IdTipoAutenticacion;
      private $Imagen;
      private $FechaCreacion;
      private $FechaModificacion;
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
          echo $e->getMessage();
        }
      }

      public function consultarEmailUser()
      {
        $sql = "CAll SP_consultarEmailUser(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->Correo);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    public function actualizarClave()
    {
      $sql = "CAll SP_actualizarClave(?, ?)";
      try {
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Correo);
        $stm->bindParam(2, $this->Clave);
        $result = $stm->execute();
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

  }
 ?>
