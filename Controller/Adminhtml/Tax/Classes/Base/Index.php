<?php
/**
 * ClassyLlama_AvaTax
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0), a
 * copy of which is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright  Copyright (c) 2016 Avalara, Inc.
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace ClassyLlama\AvaTax\Controller\Adminhtml\Tax\Classes\Base;

use Magento\Backend\App\Action;
use ClassyLlama\AvaTax\Controller\Adminhtml\Tax\Classes;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;

/**
 * Adminhtml controller
 */
abstract class Index extends Classes
{
    /**
     * Tax class type
     *
     * @var null|string
     */
    protected $classType = null;

    /**
     * Log page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var Page $pageResult */
        $pageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $pageResult->setActiveMenu('ClassyLlama_AvaTax::avatax_tax_classes_'  . \strtolower($this->classType));
        $pageResult->getConfig()->getTitle()->prepend(__(\ucfirst(\strtolower($this->classType)) . ' Tax Classes'));
        return $pageResult;
    }
}
