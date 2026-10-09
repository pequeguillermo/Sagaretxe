<?php
namespace App\Controllers;

use App\Core\View;

class EventController {
    public function store(): void {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        if (!is_array($data)) {
            $data = $_POST;
        }

        $name = isset($data['name']) ? trim((string)$data['name']) : '';
        $phone = isset($data['phone']) ? trim((string)$data['phone']) : '';
        $email = isset($data['email']) ? trim((string)$data['email']) : '';
        $guests = isset($data['guests']) ? trim((string)$data['guests']) : '';
        $eventType = isset($data['event_type']) ? trim((string)$data['event_type']) : '';

        if ($name === '' || $phone === '' || $email === '' || $guests === '') {
            View::json(['status' => 'error', 'message' => 'Por favor, completa todos los campos requeridos.'], 422);
            return;
        }

        $to = RESTAURANT_EMAIL;
        $subject = "Nueva Solicitud de Evento - " . $name;
        $message = "Detalles de la solicitud de evento:\n\n"
                 . "Nombre: $name\n"
                 . "Teléfono: $phone\n"
                 . "Email: $email\n"
                 . "Nº de Invitados: $guests\n"
                 . "Tipo de evento / Observaciones:\n$eventType\n\n"
                 . "Fecha de recepción: " . date('d/m/Y H:i');

        $headers = "From: " . RESTAURANT_EMAIL . "\r\n"
                 . "Reply-To: $email\r\n"
                 . "X-Mailer: PHP/" . phpversion();

        // Intento de envío vía función mail() estándar (compatible con Plesk)
        @mail($to, $subject, $message, $headers);

        View::json([
            'status' => 'success',
            'message' => '¡Gracias por contactar! Hemos recibido tu solicitud de evento y nuestro equipo se pondrá en contacto contigo en breve para asesorarte.'
        ]);
    }
}
