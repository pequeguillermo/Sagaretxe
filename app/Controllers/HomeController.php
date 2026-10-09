<?php
namespace App\Controllers;

use App\Core\View;

class HomeController {
    public function index(): void {
        View::render('home/index', [
            'title' => 'Sagaretxe – La Sidrería Vasca en Madrid | Pintxos y Carnes a la Brasa',
            'metaDescription' => 'Disfruta de la auténtica gastronomía vasca en Chamberí (Madrid). Especialidad en sidra al txotx, barra con más de 150 pintxos, txuleta de buey a la parrilla y pescados frescos.',
            'currentPage' => 'home'
        ]);
    }
}
