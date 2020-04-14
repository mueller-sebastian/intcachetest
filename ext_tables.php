<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ElementareTeilchen.Intcachetest',
            'Example',
            'Example'
        );
    }
);
