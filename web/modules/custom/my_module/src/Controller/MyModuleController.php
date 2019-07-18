<?php
namespace Drupal\my_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyModuleController extends ControllerBase {

/* Método acción content devuelve directamente un contenido en html,
este método será llamado por la ruta "my_module.routign.yml" */
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Módulo Hola mundo'),
    );
  }

}

?>
