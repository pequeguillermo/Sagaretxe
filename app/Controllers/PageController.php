<?php
namespace App\Controllers;

use App\Core\View;

class PageController {
    public function nosotros(): void {
        View::render('pages/nosotros', [
            'title' => 'Quiénes Somos – Tradición y Pasión Vasca en Sagaretxe',
            'metaDescription' => 'Desde 1999 en el barrio de Chamberí, Sagaretxe acerca a Madrid la tradición de las auténticas sidrerías vascas. Producto excelente, brasa y cercanía.',
            'currentPage' => 'nosotros'
        ]);
    }

    public function eventos(): void {
        View::render('pages/eventos', [
            'title' => 'Organización de Eventos y Celebraciones – Sagaretxe Madrid',
            'metaDescription' => 'Celebra tus comidas familiares, bautizos, comuniones y eventos de empresa en Sagaretxe con menús a medida y el mejor ambiente vasco.',
            'currentPage' => 'eventos'
        ]);
    }

    public function galeria(): void {
        View::render('pages/galeria', [
            'title' => 'Galería de Fotos – Sagaretxe Sidrería Vasca',
            'metaDescription' => 'Imágenes de nuestras instalaciones, barra de pintxos, carnes a la brasa, pescados frescos y ambiente de sidrería en Madrid.',
            'currentPage' => 'galeria'
        ]);
    }

    public function contacto(): void {
        View::render('pages/contacto', [
            'title' => 'Contacto y Dónde Estamos – Sagaretxe Madrid',
            'metaDescription' => 'Encuéntranos en Calle Eloy Gonzalo 26, 28010 Madrid. Horarios, teléfonos de reserva y mapa de ubicación.',
            'currentPage' => 'contacto'
        ]);
    }
}
