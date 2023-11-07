<?php
/**
 * @author      Webjump Core Team <dev@webjump.com.br>
 * @copyright   2023 Webjump (https://www.webjump.com.br)
 * @license     https://www.webjump.com.br  Copyright
 * @link        https://www.webjump.com.br
 */
declare(strict_types=1);

namespace Webjump\CustomForm\Controller\Form;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Creates custom form index page
 */
class Index implements HttpGetActionInterface
{
    private PageFactory $pageFactory;

    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Creates custom form page
     *
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
