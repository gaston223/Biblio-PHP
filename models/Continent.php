<?php
namespace Models;

class Continent{

    /**
     * @var int
     */
    private $num;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }


    /**
     * Lire le libellé
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }


    /**
     * @param string $libelle
     * @return $this
     */
    public function setLibelle(string $libelle) : self
    {
        $this->libelle = $libelle;
        return $this;
    }


    /**
     * Récupèrel'ensemble des continents sous forme de tableau
     * @return array
     */
    public static function findAll():array
    {
        $req=\MonPdo::getInstance()->prepare("Select * from continent");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Continent');
        $req->exexute();
        return $req->fetchAll();
    }


    /**
     * Récupère un continent
     * @param int $id
     * @return Continent
     */
    public static function findById(int $id):Continent
    {
        $req=\MonPdo::getInstance()->prepare("Select * from continent where num= :id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Continent');
        $req->bindParam(':id', $id);
        $req->exexute();
        return $req->fetch();
    }

    /**
     * Ajout d'un continent
     * @param Continent $continent
     * @return int
     */
    public static function add(Continent $continent):int
    {
        $req=\MonPdo::getInstance()->prepare("insert into continent(libelle) values(:libelle)");
        $req->bindParam(':libelle', $continent->getLibelle());
        return $req->exexute();// 1 si ok O sinon

    }

    /**
     * Modifier un continent
     * @param Continent $continent
     * @return int
     */
    public static function update(Continent $continent): int
    {
        $req=\MonPdo::getInstance()->prepare("update continent set libelle= :libelle where num= :id values(:libelle)");
        $req->bindParam(':libelle', $continent->getLibelle());
        $req->bindParam(':id', $continent->getNum());
        return $req->exexute();// 1 si ok O sinon
    }

    /**
     * Permet de supprimer un continent
     * @param Continent $continent
     * @return int
     */
    public static function delete(Continent $continent): int
    {
        $req=\MonPdo::getInstance()->prepare("delete from continent where num = :id");
        $req->bindParam(':id', $continent->getNum());
        return $req->exexute();// 1 si ok O sinon
    }


}

