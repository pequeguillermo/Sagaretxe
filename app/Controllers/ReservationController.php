<?php
namespace App\Controllers;

use App\Core\View;

class ReservationController {
    public function index(): void {
        View::render('reservations/index', [
            'title' => 'Reservar Mesa – Sidrería Sagaretxe Madrid',
            'metaDescription' => 'Reserva tu mesa online en Sagaretxe en tiempo real. Disfruta de la mejor sidrería vasca en Chamberí, Madrid.',
            'currentPage' => 'reservas',
            'extraScript' => 'reservations.js'
        ]);
    }

    public function availability(): void {
        $date = $_GET['date'] ?? date('Y-m-d');
        $apiUrl = API_BASE_URL . '/schedules/availability?date=' . urlencode($date);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 6);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 300 && $response) {
            header('Content-Type: application/json; charset=utf-8');
            echo $response;
            exit;
        }

        // Fallback si la API no responde de inmediato: devolver horarios habituales
        View::json([
            'available' => true,
            'open_time' => '13:30:00',
            'close_time' => '16:00:00',
            'open_time_2' => '19:30:00',
            'close_time_2' => '23:00:00',
            'fallback' => true
        ]);
    }

    public function store(): void {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        if (!$data) {
            $data = $_POST;
        }

        $apiUrl = API_BASE_URL . '/reservations';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: application/json'
        ]);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($response) {
            http_response_code($httpCode ?: 200);
            header('Content-Type: application/json; charset=utf-8');
            echo $response;
            exit;
        }

        View::json(['message' => 'No se pudo contactar con el servidor central de reservas.'], 500);
    }
}
