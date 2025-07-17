<?php

namespace App\Repository;

use App\Entity\Bureau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;

class BureauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, Connection $connection)
    {
        parent::__construct($registry, Bureau::class);
        $this->connection = $connection;
    }

    public function get_all_bureaux(){

        $sql = "SELECT * FROM bureaux WHERE statut = :statut";
        
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->executeQuery(['statut' => 1]);

        return $result->fetchAllAssociative();
    }

}
