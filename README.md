# [WordPress Plugin - Gutenberg Block Effect](https://futurewordpress.com/wordpress/) 🎨
[![Project Status: Active.](https://www.repostatus.org/badges/latest/active.svg)](https://www.repostatus.org/#active) [![code style: prettier](https://img.shields.io/badge/code_style-prettier-ff69b4.svg?style=flat-square)](https://github.com/prettier/prettier)

* A WordPress Plugin Project for Appling animations on Gutenberg and those Blocks whos uses Gutenberg system.
This Plugin uses WordPress default functionality with JAVASCRIPT, and SCSS to build an Gutenberg Block Effect from scratch.


## Features

- Apply animtion on Gutenberg blocks.
- Height Customizable from Dashboard.

## Maintainer

| Name                                                   | Github Username | Fiverr Username |
|--------------------------------------------------------|-----------------|-----------------|
| [Remal Mahmud](mailto:info@futurewordpress.com)        |  @mahmudremal   |  [@mahmud_remal](https://www.fiverr.com/mahmud_remal)|

## Usage

1. Clone the WordPress Plugin [AJO](https://github.com/mahmudremal/gutenburg-block-effects) in your WordPress
Plugin directory and activate it.

## Dashboard Setup.

1. Setup plugin from Settings > Block Effect and setup what you actually need.

## Development ( To be added )

**Install**

Clone the repo and run

```bash
cd gutenburg-block-effects/assets
npm install
```

**During development**

```bash
npm run dev
```

Run precommit from assets directory before pushing the code for development/contribution.

```
cd assets && npm run precommit
```

**Production**

```bash
npm run prod
```

**Linting & Formatting**

The following command will fix most errors and show and remaining ones which cannot be fixed automatically.

```bash
npm run lint:fix
```

We follow the stylelint configuration used in WordPress Gutenberg, run the following command to lint and fix styles.

```bash
npm run stylelint:fix
```

Format code with prettier ( TO BE ADDED )

```bash
npm run format-js
```

Directory Structure

```php
GBE:
│   .gitignore
│   block-effects.php
│   README.md
│   
├───assets
│   │   .babelrc
│   │   .eslintignore
│   │   .eslintrc.json
│   │   .nvmrc
│   │   .stylelintrc.json
│   │   hash.js
│   │   package-lock.json
│   │   package.json
│   │   postcss.config.js
│   │   tailwind.config.js
│   │   webpack.config.js
│   │   
│   ├───build
│   │   │   assets.php
│   │   │   
│   │   ├───css
│   │   │       frontend.css
│   │   │       
│   │   ├───js
│   │   │       frontend.js
│   │   │       
│   │   └───library
│   │       ├───css
│   │       │   │   ace-responsive-menu.css
│   │       │   │   admin.css
│   │       │   │   animate.css
│   │       │   │   bootstrap-grid.css
│   │       │   │   bootstrap-grid.min.css
│   │       │   │   bootstrap-select.min.css
│   │       │   │   bootstrap.min.css
│   │       │   │   fancyBox.css
│   │       │   │   flaticon.css
│   │       │   │   frontend-base.css
│   │       │   │   invoice.css
│   │       │   │   jquery-ui.min.css
│   │       │   │   menu.css
│   │       │   │   owl.css
│   │       │   │   progressbar.css
│   │       │   │   simplebar.min.css
│   │       │   │   slick-theme.css
│   │       │   │   slick.css
│   │       │   │   slider.css
│   │       │   │   timecounter.css
│   │       │   │   
│   │       │   └───map-css
│   │       │           info-box.css
│   │       │           maps.css
│   │       │           searcher.css
│   │       │           
│   │       └───js
│   │               bootstrap-select.min.js
│   │               bootstrap.min.js
│   │               jquery.counterup.js
│   │               progressbar.js
│   │               simplebar.js
│   │               timepicker.js
│   │               
│   └───src
│       ├───icons
│       ├───img
│       ├───js
│       │   │   backend.js
│       │   │   frontend.js
│       │   │   
│       │   ├───backend
│       │   │       index.js
│       │   │       
│       │   └───frontend
│       │           index.js
│       │           
│       ├───library
│       │   ├───css
│       │   │   │   ace-responsive-menu.css
│       │   │   │   admin.css
│       │   │   │   animate.css
│       │   │   │   bootstrap-grid.css
│       │   │   │   bootstrap-grid.min.css
│       │   │   │   bootstrap-select.min.css
│       │   │   │   bootstrap.min.css
│       │   │   │   fancyBox.css
│       │   │   │   flaticon.css
│       │   │   │   frontend-base.css
│       │   │   │   invoice.css
│       │   │   │   jquery-ui.min.css
│       │   │   │   menu.css
│       │   │   │   owl.css
│       │   │   │   progressbar.css
│       │   │   │   simplebar.min.css
│       │   │   │   slick-theme.css
│       │   │   │   slick.css
│       │   │   │   slider.css
│       │   │   │   timecounter.css
│       │   │   │   
│       │   │   └───map-css
│       │   │           info-box.css
│       │   │           maps.css
│       │   │           searcher.css
│       │   │           
│       │   ├───fonts
│       │   └───js
│       │           bootstrap-select.min.js
│       │           bootstrap.min.js
│       │           jquery.counterup.js
│       │           progressbar.js
│       │           simplebar.js
│       │           timepicker.js
│       │           
│       └───sass
│           │   backend.scss
│           │   frontend.scss
│           │   
│           ├───backend
│           │       _settings.scss
│           │       
│           └───frontend
│                   _settings.scss
│                   
├───inc
│   ├───classes
│   │       class-assets.php
│   │       class-dashboard.php
│   │       class-hooks.php
│   │       class-menus.php
│   │       class-option.php
│   │       class-project.php
│   │       class-translate.php
│   │       class-update.php
│   │       
│   ├───helpers
│   │       autoloader.php
│   │       template-tags.php
│   │       
│   ├───loader
│   │       class-metabox.php
│   │       class-option.php
│   │       
│   └───traits
│           trait-singleton.php
│           
├───languages
│       fwp-gbe-it_IT.mo
│       fwp-gbe-it_IT.po
│       fwp-gbe.pot
│       README.md
│       
└───template-parts

```

### Fixing Errors

1. Error: Node Sass does not yet support your current environment
Solution : 
```shell
cd assets
npm rebuild node-sass
```
