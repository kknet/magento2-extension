<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Amazon\Listing\AutoAction;

class GetCategoryGroupGrid extends \Ess\M2ePro\Controller\Adminhtml\Amazon\Listing\AutoAction
{
    //########################################

    public function execute()
    {
        $grid = $this->createBlock('Amazon\Listing\AutoAction\Mode\Category\Group\Grid');
        $this->setAjaxContent($grid);
        return $this->getResult();
    }

    //########################################
}