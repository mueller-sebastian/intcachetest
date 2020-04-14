<?php
namespace ElementareTeilchen\Intcachetest\Controller;


/***
 *
 * This file is part of the "intcachetest" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020
 *
 ***/
/**
 * ExampleController
 */
class ExampleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
    }

    /**
     * show list
     *
     * @return void
     */
    public function showAction()
    {
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($this->request->getArguments());
    }

    /**
     * show list
     *
     * @return void
     */
    public function show2Action()
    {
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($this->request->getArguments());
    }
}
