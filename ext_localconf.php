<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ElementareTeilchen.Intcachetest',
            'Example',
            [
                'Example' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Example' => 'show'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        example {
                            iconIdentifier = intcachetest-plugin-example
                            title = LLL:EXT:intcachetest/Resources/Private/Language/locallang_db.xlf:tx_intcachetest_example.name
                            description = LLL:EXT:intcachetest/Resources/Private/Language/locallang_db.xlf:tx_intcachetest_example.description
                            tt_content_defValues {
                                CType = list
                                list_type = intcachetest_example
                            }
                        }
                    }
                    show = *
                }
           }'
        );
    }
);
