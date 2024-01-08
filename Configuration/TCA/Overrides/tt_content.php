<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS['TCA']['tt_content']['types']['cookiebot_declaration'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
        '
];
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cookiebot_declaration'] = 'actions-cookie';

// Adds the content element to the "Type" dropdown
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:cookiebot/Resources/Private/Language/backend.xlf:tt_content.cookiebot.title',
        'cookiebot_declaration',
        'actions-cookie',
    ]
);
