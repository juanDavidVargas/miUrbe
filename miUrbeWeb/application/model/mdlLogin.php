
<?php

    class mdlLogin
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

      public function insertarNuevoUsuario()
      {
        $sql = "CAll SP_insertarNuevoUsuario(?, ?, ?, ?, ?, ?, ?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->NombreUsuario);
          $stm->bindParam(2, $this->Correo);
          $stm->bindParam(3, $this->Clave);
          $stm->bindParam(4, $this->NumeroCelular);
          $stm->bindParam(5, $this->IdTipoAutenticacion);
          $stm->bindParam(6, $this->Imagen);
          $stm->bindParam(7, $this->FechaModificacion);
          $result = $stm->execute();
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function consultarDatosUsuario()
      {
        $sql = "CAll SP_consultarDatosUsuario(?, ?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->Correo);
          $stm->bindParam(2, $this->Clave);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    }
 ?>
