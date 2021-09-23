<?php

namespace Hiberus\Gil\Controller\index;

use Hiberus\Gil\Api\CursoRepositoryInterface;
use Hiberus\Gil\Api\Data\InterfaceFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Hiberus\Gil\Model\ResourceModelCurso\Curso;

class Index implements HttpGetActionInterface
{


    public function execute()
    {
        echo "Hola wilson";
    }
}
