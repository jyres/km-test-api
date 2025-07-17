<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'reservations')] 
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_bureau = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column]
    private ?\DateTime $date_debut_reservation = null;

    #[ORM\Column]
    private ?\DateTime $date_fin_reservation = null;

    #[ORM\Column]
    private ?\DateTime $crated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBureau(): ?int
    {
        return $this->id_bureau;
    }

    public function setIdBureau(int $id_bureau): static
    {
        $this->id_bureau = $id_bureau;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getDateDebutReservation(): ?\DateTime
    {
        return $this->date_debut_reservation;
    }

    public function setDateDebutReservation(\DateTime $date_debut_reservation): static
    {
        $this->date_debut_reservation = $date_debut_reservation;

        return $this;
    }

    public function getDateFinReservation(): ?\DateTime
    {
        return $this->date_fin_reservation;
    }

    public function setDateFinReservation(\DateTime $date_fin_reservation): static
    {
        $this->date_fin_reservation = $date_fin_reservation;

        return $this;
    }

    public function getCratedAt(): ?\DateTime
    {
        return $this->crated_at;
    }

    public function setCratedAt(\DateTime $crated_at): static
    {
        $this->crated_at = $crated_at;

        return $this;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }
}
