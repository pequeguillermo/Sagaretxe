<?php
namespace App\Controllers;

use App\Core\View;

class ClubController {
    public function index(): void {
        View::render('club/index', [
            'title' => 'Club Gourmet Sagaretxe – 12% Descuento Exclusivo en Carta',
            'metaDescription' => 'Hazte socio del Club Gourmet Sagaretxe de forma 100% gratuita y disfruta de un 12% de descuento directo en tus comidas a la carta y promociones especiales.',
            'currentPage' => 'club',
            'extraScript' => 'club.js'
        ]);
    }

    public function store(): void {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        if (!$data) {
            $data = $_POST;
        }

        $apiUrl = API_BASE_URL . '/members';

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

        View::json(['message' => 'No se pudo conectar con el servidor para registrar al socio.'], 500);
    }
}
