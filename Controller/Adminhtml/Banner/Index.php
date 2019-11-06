<?php

/**
 * Xigen
 */

namespace Xigen\Bannermanager\Controller\Adminhtml\Banner;

/**
 * Index class
 */
class Index extends \Xigen\Bannermanager\Controller\Adminhtml\Banner
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $resultForward = $this->_resultForwardFactory->create();
            $resultForward->forward('grid');
            return $resultForward;
        }

        $resultPage = $this->_resultPageFactory->create();

        return $resultPage;
    }
}
