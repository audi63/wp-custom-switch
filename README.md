![Logo](assets/images/repository-open-graph-template-wp-custom-switch.png)

# Custom Switch for WP

**Contributors:** johan63360  
**Tags:** custom, switch, button, price, options  
**Donate link:** [Donate](https://www.jconcept.fr/donate)  
**Requires at least:** 4.6  
**Tested up to:** 6.5.4  
**Requires PHP:** 7.4  
**Stable tag:** 1.0.1  
**Version:** 1.0.1  
**Author:** johan63360  
**Author URI:** [https://www.jconcept.fr](https://www.jconcept.fr)  
**Text Domain:** custom-switch  
**License:** GPLv3 or later  
**License URI:** [http://www.gnu.org/licenses/gpl-3.0.html](http://www.gnu.org/licenses/gpl-3.0.html)

## Quick Start  

---

## Introduction

Custom Switch for WP est un Plugin WordPress pour créer des boutons switch personnalisables et administrables facilement.

---

## Description

Plugin WordPress pour créer des boutons switch personnalisables et administrables facilement. Ils peuvent être placés partout, et même clonés pour avoir le même état d'un bouton sur des pages différentes.

---

## Installation

1. Décompressez le fichier.
2. Téléversez dans `wp-content/plugins`.
3. Allez dans votre tableau de bord WordPress pour l'activer.
4. Amusez-vous !

---

## Frequently Asked Questions

### No more questions ?

Utilisez le bloc Gutenberg  
Peut-être un jour...

Ou utilisez l'ancien shortcode :

1. Créez une page avec le nom que vous souhaitez.
2. Ajoutez le shortcode `[custom_switch id="votre_shortcode_id"]`.
3. Ajoutez des paramètres (label-on, label-off, button-on, button-off, label-position="after" ou label-position="before").

Exemple :  
`[custom_switch id="5" label-on="ON" label-off="OFF" button-on="wp-content/plugins/custom-switch/assets/images/default/button_on.svg" button-off="wp-content/plugins/custom-switch/assets/images/default/button_off.svg" label-position="after"]`

C'est tout !

---

## Screenshots

1. Default custom label and images
2. Shortcode form
3. Shortcode listing
4. Edit and delete shortcode
5. Other screenshots

<div>
  <img src="./screenshots/1.png" alt="Screenshot 1" width="100" height="100" style="margin: 5px;"/>
  <img src="./screenshots/2.png" alt="Screenshot 2" width="100" height="100" style="margin: 5px;"/>
  <img src="./screenshots/3.png" alt="Screenshot 3" width="100" height="100" style="margin: 5px;"/>
  <img src="./screenshots/4.png" alt="Screenshot 4" width="100" height="100" style="margin: 5px;"/>
  <img src="./screenshots/5.png" alt="Screenshot 5" width="100" height="100" style="margin: 5px;"/>
</div>

---

## Changelog

### 1.0.1 - 17 juin 2024
* Bonne fête des pères pour hier ;)
* Ajout de la sécurité pour les modifications uniquement par l'administrateur
* Réorganisation du code

### 1.0.0 - 17 juin 2024
* Version initiale

---

## Upgrade Notice

### 1.0.1
Mise à jour recommandée pour améliorer la sécurité et réorganiser le code.


## Arborescence

 ```plaintext
    custom-switch/
    ├── actifs/
    │   ├── css/
    │   │   └── custom-button-style.css
    │   ├── js/
    │   │   └── custom-button-script.js
    │   └── images/
    │       └── par défaut/
    │           ├── bouton-on.svg
    │           └── bouton-off.svg
    ├── inclut/
    │   ├── class-custom-switch.php
    │   └── admin/
    │       └── classe-custom-switch-admin.php
    └── custom-switch.php
    ```
