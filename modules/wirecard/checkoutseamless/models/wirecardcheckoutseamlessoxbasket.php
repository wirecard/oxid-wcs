<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Wirecard Central Eastern Europe GmbH
 * (abbreviated to Wirecard CEE) and are explicitly not part of the Wirecard CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Wirecard CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Wirecard CEE does not guarantee their full
 * functionality neither does Wirecard CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Wirecard CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

require_once getShopBasePath() . 'modules/wirecard/checkoutseamless/autoloader.php';

/**
 * Wirecard Checkout Seamless oxBasket class
 *
 * @see oxBasket
 */
class wirecardCheckoutSeamlessBasket extends oxBasket
{
    /**
     * Returns array of basket oxarticle objects
     *
     * @return array
     */
    public function getBasketArticles()
    {
        wirecardCheckoutSeamlessUtils::getInstance()->log(__METHOD__ . ':has been called');
        $aBasketArticles = array();


        foreach ($this->_aBasketContents as $sItemKey => $oBasketItem) {
            try {
                $oProduct = $oBasketItem->getArticle();

                if ($this->getConfig()->getConfigParam('bl_perfLoadSelectLists')) {
                    // marking chosen select list
                    $aSelList = $oBasketItem->getSelList();
                    if (is_array($aSelList) && ($aSelectlist = $oProduct->getSelectLists($sItemKey))) {
                        reset($aSelList);
                        while (list($conkey, $iSel) = each($aSelList)) {
                            $aSelectlist[$conkey][$iSel] = $aSelectlist[$conkey][$iSel];
                            $aSelectlist[$conkey][$iSel]->selected = 1;
                        }
                        $oProduct->setSelectlist($aSelectlist);
                    }
                }
            } catch (oxNoArticleException $oEx) {
                oxRegistry::get("oxUtilsView")->addErrorToDisplay($oEx);
                $this->removeItem($sItemKey);
                $this->calculateBasket(true);
                continue;
            } catch (oxArticleInputException $oEx) {
                oxRegistry::get("oxUtilsView")->addErrorToDisplay($oEx);
                $this->removeItem($sItemKey);
                $this->calculateBasket(true);
                continue;
            }

            $aBasketArticles[$sItemKey] = $oProduct;
        }

        return $aBasketArticles;
    }
}