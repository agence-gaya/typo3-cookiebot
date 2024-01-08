# ext:cookiebot

Cookiebot extension for TYPO3 CMS

## Installation

composer require gaya/typo3-cookiebot

## Configuration

- Include Cookiebot TypoScript configuration in your root template

- In TYPO3 constant editor, configure the Cookiebot ID in Cookiebot/General section:

```
plugin.tx_cookiebot.cbid
```

- In your website disclaimer page, insert the "Cookiebot declaration" content element where you want to display the Cookiebot declaration bloc.

## Warnings

Cookiebot script has to be inserted at the begining of the head, so the extension include it in first position in headerData :

```
page.headerData.1
```

Check that this headerData entry is not used by your current configuration.