<?php

/**
 * Xigen
 */

namespace Xigen\Bannermanager\Controller\Adminhtml\Slider;

/**
 * MassDelete Xigen Bannermanager class
 */
class MassDelete extends \Xigen\Bannermanager\Controller\Adminhtml\AbstractAction
{
    /**
     * execute method
     * @return type
     * @access public
     */
    public function execute()
    {
        $sliderIds = $this->getRequest()->getParam('slider');
        if (!is_array($sliderIds) || empty($sliderIds)) {
            $this->messageManager->addErrorMessage(__('Please select slider(s).'));
        } else {
            try {
                foreach ($sliderIds as $sliderUd) {
                    $slider = $this->_objectManager->create(\Xigen\Bannermanager\Model\Slider::class)
                        ->load($sliderUd);
                    $slider->delete();
                }
                $this->messageManager->addSuccessMessage(
                    __('A total of %1 record(s) have been deleted.', count($sliderIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }
}
