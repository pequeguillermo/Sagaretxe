<?php
namespace App\Controllers;

use App\Core\View;

class MenuController {
    public function carta(): void {
        View::render('menu/carta', [
            'title' => 'Nuestra Carta – Sidrería Sagaretxe Madrid',
            'metaDescription' => 'Carta de restaurante vasco Sagaretxe en Madrid: entrantes tradicionales, ensaladas de la huerta, bacalao al pil-pil, txuleta a la brasa de carbón de encina y postres caseros.',
            'currentPage' => 'carta'
        ]);
    }

    public function pintxos(): void {
        View::render('menu/pintxos', [
            'title' => 'Barra de Pintxos Vascos en Madrid – Sagaretxe',
            'metaDescription' => 'Más de 150 pintxos fríos y calientes en nuestra barra en Chamberí: gildas, txaka, brochetas, tempuras y tablas de 8 y 12 pintxos acompañados de sidra al txotx.',
            'currentPage' => 'pintxos'
        ]);
    }

    public function grupos(): void {
        View::render('menu/grupos', [
            'title' => 'Menús para Grupos y Empresas – Sagaretxe Madrid',
            'metaDescription' => 'Descubre nuestros 6 menús especiales para grupos y cenas de empresa en Sagaretxe. Entrantes al centro, plato principal a elegir, postre, vinos y sidra incluidos.',
            'currentPage' => 'menus'
        ]);
    }
}
