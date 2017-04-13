# ETPhoneHome - Magento Module

## Overview

This Magento module adds a configuration for the no-route page to issue a redirect (301 or 302) to the homepage instead of the standard 404 page.

You can find the setting under System -> Configuration -> Web -> Default Pages -> CMS No Route E.T. Phone Home. It can be configured on a store view level.

It's tested on Magento CE>=1.9 and EE>=1.14 but should be compatible with the majority of Magento 1 versions.

## Installation

### Composer

In your `composer.json`, in the section `repositories`, add this repository:

    {
        "type": "vcs",
        "url": "git@github.com:eatalynet/etphonehome.git"
    }

Then open a terminal in the folder containing the `composer.json` and run:

    composer require eataly/etphonehome:1.0.0

### Modman

Go in your project root folder and run

    git submodule add git@github.com:eatalynet/etphonehome.git .modman/Eataly_ETPhoneHome
    modman deploy Eataly_ETPhoneHome

Clean the cache

### Manually

* Download latest version [here](https://github.com/eatalynet/etphonehome/archive/1.0.0.zip)
* Unzip in Magento root folder
* Clean the cache