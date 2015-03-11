<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace M2Demo\PluginDemo\Block;

use M2Demo\PluginDemo\Helper\Intercepted;
use M2Demo\PluginDemo\Block\Context;


/**
 * Block class for the page that shows the demo.
 */
class Page extends \Magento\Framework\View\Element\Template
{
    /**
     * Helper method used for generating content for the page. It is intercepted by a 'before' type plugin
     *
     * @var  \M2Demo\PluginDemo\Helper\Intercepted\ChildBefore
     */
    protected $helperBefore;

    /**
     * Helper method used for generating content for the page. It is intercepted by an 'after' type plugin
     *
     * @var  \M2Demo\PluginDemo\Helper\Intercepted\ChildAfter
     */
    protected $helperAfter;

    /**
     * Helper method used for generating content for the page. It is intercepted by an 'around' type plugin
     *
     * @var  \M2Demo\PluginDemo\Helper\Intercepted\ChildAround
     */
    protected $helperAround;

    /**
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, array $data = [])
    {
        $this->helperBefore = $context->getHelperBefore();
        $this->helperAfter = $context->getHelperAfter();
        $this->helperAround = $context->getHelperAround();

        parent::__construct($context, $data);
    }

    /**
     * @return Intercepted\ChildBefore
     */
    public function getHelperBefore()
    {
        return $this->helperBefore;
    }

    /**
     * @return Intercepted\ChildAfter
     */
    public function getHelperAfter()
    {
        return $this->helperAfter;
    }

    /**
     * @return Intercepted\ChildAround
     */
    public function getHelperAround()
    {
        return $this->helperAround;
    }
}
