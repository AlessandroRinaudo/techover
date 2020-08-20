<?php

namespace App\Repository;

use App\Entity\Formation;
use App\Entity\FormationSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Formation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formation[]    findAll()
 * @method Formation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formation::class);
    }

    public function findAviableQueryParCategorie(FormationSearch $search,$idCategorie) :Query
    {
        $query=$this->afficheFormationsLesMieuxNotees($search);
        $query=$query->andWhere('p.categorie= '.$idCategorie);
        return $query->getQuery();
    }

    public function findAllAviableQueryLesMieuxNotees(FormationSearch $search) :Query
    {
        $query=$this->afficheFormationsLesMieuxNotees($search);
        return $query->getQuery();
    }

    /**
     * méthode qui renvoie uniquement les 3 premier formations de la catégorie tendance
     * @return Formation[]
     */
    public function findFirstFormations() :array
    {
        $query = $this->findAviableQuery()
            ->andWhere("p.categorie=4")
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
        return $query;
    }

    /**
     * méthode qui renvoie uniquement les 3  premier formations les mieux notées
     * @return Formation[]
     */
    public function findBestNotesFormations() :array
    {
        $query = $this->findAviableQuery()
            ->andWhere("p.note=5")
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
        return $query;
    }




    /**
     * Méthode privée qui permet de trouver une formation disponible et sa catégorie associée
     * cette méthode a été crée afin de ne pas répeter le code dans le autres rêquetes
     * @return QueryBuilder
     */
    private function findAviableQuery() :QueryBuilder
    {
        return $this->createQueryBuilder('p')
            ->leftJoin("p.categorie", "o")->addSelect("o")
            ->where('p.aviable=true');
    }


    /**
     * Méthode qui renvoi toutes les formations disponibles sur les differentes sites
     * en donnant la possibilité de les pouvoir filtrer avec le formulaire de recherche
     * @param FormationSearch $search
     * @return QueryBuilder
     */
    private function afficheFormationsLesMieuxNotees(FormationSearch $search) :QueryBuilder
    {
        $query= $this->findAviableQuery();

        if($search->getMaxNote())
        {
            $query=$query->andWhere('p.note>= :minnote');
            $query=$query->setParameter('minnote',$search->getMaxNote());
        }

        if($search->getMaxLevel())
        {
            $query=$query->andWhere('p.level= :minlevel');
            $query=$query->setParameter('minlevel',$search->getMaxLevel());
        }

//        if($search->getLangueChoisie())
//        {
//            $query=$query->andWhere('p.langue = :languePreferee');
//            $query=$query->setParameter('languePreferee',$search->getLangueChoisie());
//        }

        if($search->getLangueUtilisateur())
        {
            $query=$query->andWhere('p.langue = :languePreferee');
            $query=$query->setParameter('languePreferee',$search->getLangueUtilisateur());
        }
        if($search->getCategoriePrefere())
        {
            $query=$query->andWhere('o.nom = :cat');
            $query=$query->setParameter('cat',$search->getCategoriePrefere());
        }
        $query=$query->ORDERBy('p.note','DESC');
        return $query;
    }






}
