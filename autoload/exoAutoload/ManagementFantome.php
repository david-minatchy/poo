<?php

class ManagementFantome {
    
    private $_db;

    public function __construct($db) {
        $this->setDb($db);
    }

    public function add($obj) {

        $req = $this->_db->prepare('INSERT INTO fantome (nom, couleur, pv,velocite) VALUES (:nom, :couleur, :pv, :velocite)');
        $req->execute(array(
            'nom' => $obj->getNom(),
            'couleur' => $obj->getCouleur(),
            'pv' => $obj->getPV(),
            'velocite'=>$obj->getVelocite()
        ));
    }

    public function update($obj) {
        $req = $this->_db->prepare('UPDATE fantome SET nom=:nom, couleur=:couleur, pv=:pv,velocite=:velocite WHERE id=:id');
        $req->execute(array(
        'nom' => $obj->getNom(),
        'couleur' => $obj->getCouleur(),
        'pv' => $obj->getPV(),
        'velocite'=>$obj->getVelocite(),
        'id'=>$obj->getId()
        ));
    }


    public function getAll() {
        
        $req = $this->_db->prepare('SELECT * from fantome');
        $req->execute();
        $reponse= $req->fetchAll(PDO::FETCH_ASSOC);

        
        $fantomes=array();
        foreach ($reponse as $value) {
           $fantomes[]=new Fantome($value);
        }
       
        return $fantomes; 

    }

    public function getId($id) {

        $req = $this->_db->prepare('SELECT * from fantome WHERE id=:id');
        $req->execute(array('id'=>$id));
        $reponse= $req->fetch(PDO::FETCH_ASSOC);
        return new Fantome($reponse);
    }

    public function delete($obj) {
        $req = $this->_db->prepare('DELETE FROM fantome WHERE id=:id');
        $req->execute(array(':id' => $obj->getId()));
    }

    public function setDb(PDO $db) {
        $this->_db = $db;
    }
}
?>

<?php

