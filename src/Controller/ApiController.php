<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\ReservationRepository;
use App\Repository\BureauRepository;

final class ApiController extends AbstractController
{
    #[Route('/reservations', name: 'reservations', methods: ['POST'])]
    public function store_new_reservation(Request $request, ReservationRepository $reservation_repository): Response
    {

        $datas = json_decode($request->getContent(), true);

        $new_reservation = $reservation_repository->store_user_reservation($datas);

        return $this->json([
            'message' => 'réservation crée avec succès',
            'reservation_id' => $new_reservation
        ]);
    }

    #[Route('/users/{id_user}/reservations', name: 'user_reservations', methods: ['GET'])]
    public function get_user_reservations(int $id_user, ReservationRepository $reservation_repository, SerializerInterface $serializer): Response
    {
        $reservations = $reservation_repository->get_user_reservations($id_user);
        $jsonReservations = $serializer->serialize($reservations, 'json');

        return $this->json([
            'reservations' => $jsonReservations,
        ]);
    }

    #[Route('/bureaux', name: 'get_all_bureaux', methods: ['GET'])]
    public function get_all_bureaux(BureauRepository $bureau_repository, SerializerInterface $serializer): Response
    {
        $bureaux = $bureau_repository->get_all_bureaux();
        $jsonbureaux = $serializer->serialize($bureaux, 'json');

        return $this->json([
            'bureaux' => $jsonbureaux,
        ]);
    }
}
