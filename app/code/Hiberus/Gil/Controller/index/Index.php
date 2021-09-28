<?php

namespace Hiberus\Gil\Controller\Index;

use Hiberus\Gil\Api\ExamRepositoryInterface;
use Hiberus\Gil\Api\Data\ExamInterfaceFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Hiberus\Gil\Model\ResourceModel\Exam;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected ExamRepositoryInterface $examRepository;
    protected ExamInterfaceFactory $examInterfaceFactory;
    protected Exam $examResource;

    public function __construct(Context $context,
                                PageFactory $pageFactory,
                                ExamRepositoryInterface
                                $examRepository,
                                ExamInterfaceFactory
                                $examInterfaceFactory,
                                Exam $examResource
    ) {
        $this->pageFactory = $pageFactory;
        $this->examRepository = $examRepository;
        $this->examInterfaceFactory = $examInterfaceFactory;
        $this->examResource = $examResource;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
