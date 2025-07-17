<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, Connection $connection)
    {
        parent::__construct($registry, Reservation::class);
        $this->connection = $connection;
    }

    public function get_user_reservations($id_user){

        $sql = "SELECT r.crated_at, date_debut_reservation, date_fin_reservation, b.libelle FROM reservations r, bureaux b WHERE r.id_user = :id_user AND r.id_bureau = b.id LIMIT 100";
        
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->executeQuery(['id_user' => $id_user]);

        return $result->fetchAllAssociative();
    }

    public function store_user_reservation($datas){

        $sql = "INSERT INTO reservations(statut, id_bureau, id_user, date_debut_reservation, date_fin_reservation, crated_at) 
        VALUES(1, :id_bureau, :id_user, :date_debut_reservation, :date_fin_reservation, NOW());";
        
        $this->connection->executeStatement($sql, [
            'id_user' => $datas['id_user'],
            'id_bureau' => $datas['id_bureau'],
            'date_debut_reservation' => $datas['date_debut_reservation'],
            'date_fin_reservation' => $datas['date_fin_reservation']
        ]);

        return $this->connection->lastInsertId();
    }
}
