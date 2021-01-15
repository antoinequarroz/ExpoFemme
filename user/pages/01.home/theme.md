---
title: Home
body_classes: 'title-center title-h1h2'
paragraphes:
    -
        description: "Le 12 avril 1970, les Valaisannes obtiennent le droit de vote et d’éligibilité au niveau cantonal. Moins d’une année plus tard, le 7 février 1971, ce sont les Suissesses qui deviennent citoyennes sur le plan fédéral.\r\nA l’occasion des 50 ans du suffrage féminin en Valais et en Suisse, la Médiathèque Valais – Sion , les Archives de l’Etat du Valais et l’Office cantonal de l’égalité et de la famille se sont associés pour vous proposer une exposition qui retrace cette histoire du point de vue cantonal, des débuts de la lutte pour le suffrage féminin, en 1945, à la Grève des femmes de 2019, en passant par la désormais célèbre votation à Unterbäch, en 1957, les premières élues et le début de l’égalité entre les femmes et les hommes."
cards:
    -
        title: 'Le jour J'
        uri: jourj
        text: '12 avril 1970. Cette date ne vous dit rien ? Pourtant, elle marque un tournant dans la vie des Valaisans et des Valaisannes.'
        image: img_1.jpg
    -
        title: 'De Gabrielle Nanchen à Viola Amherd, elles sont les pionnières'
        uri: pionnieres
        text: 'Obtenir le droit de vote et d’éligibilité n’est qu’une première étape. Désormais, il faut se faire élire.'
    -
        title: 'Iris von Roten, la Simone de Beauvoir suisse'
        uri: irisVonRoten
        text: 'En France, tout le monde, ou presque, connaît Simone de Beauvoir, figure féministe qui a marqué de son empreinte l’histoire du 20e siècle.'
    -
        title: 'Derrière le suffrage féminin, des hommes'
        uri: hommes
        text: 'Sans eux, la cause du suffrage féminin n’aurait probablement jamais été portée dans l’arène politique.'
    -
        title: 'Pas tous·tes acquis·es à la cause'
        uri: cause
        text: '« La femme suisse sait depuis toujours qu’elle peut gouverner l’homme sans droit de vote, c’est pourquoi elle s’en passe avec plaisir. »'
    -
        title: 'Et après ?'
        uri: apres
        text: 'Si la conquête du suffrage féminin est une grande victoire pour les femmes, elle ne signifie pas pour autant l’égalité entre femmes et hommes.'
images:
    -
        image: img_1.jpg
---

# Say Hello to Grav!
## installation successful...

Congratulations! You have installed the **Base Grav Package** that provides a **simple page** and the default **Quark** theme to get you started.

!! If you see a **404 Error** when you click `Typography` in the menu, please refer to the [troubleshooting guide](http://learn.getgrav.org/troubleshooting/page-not-found).

### Find out all about Grav

* Learn about **Grav** by checking out our dedicated [Learn Grav](http://learn.getgrav.org) site.
* Download **plugins**, **themes**, as well as other Grav **skeleton** packages from the [Grav Downloads](http://getgrav.org/downloads) page.
* Check out our [Grav Development Blog](http://getgrav.org/blog) to find out the latest goings on in the Grav-verse.

!!! If you want a more **full-featured** base install, you should check out [**Skeleton** packages available in the downloads](http://getgrav.org/downloads).

### Edit this Page

To edit this page, simply navigate to the folder you installed **Grav** into, and then browse to the `user/pages/01.home` folder and open the `default.md` file in your [editor of choice](http://learn.getgrav.org/basics/requirements).  You will see the content of this page in [Markdown format](http://learn.getgrav.org/content/markdown).

### Create a New Page

Creating a new page is a simple affair in **Grav**.  Simply follow these simple steps:

1. Navigate to your pages folder: `user/pages/` and create a new folder.  In this example, we will use [explicit default ordering](http://learn.getgrav.org/content/content-pages) and call the folder `03.mypage`.
2. Launch your text editor and paste in the following sample code:

        ---
        title: My New Page
        ---
        # My New Page!

        This is the body of **my new page** and I can easily use _Markdown_ syntax here.

3. Save this file in the `user/pages/03.mypage/` folder as `default.md`. This will tell **Grav** to render the page using the **default** template.
4. That is it! Reload your browser to see your new page in the menu.

! NOTE: The page will automatically show up in the Menu after the "Typography" menu item. If you wish to change the name that shows up in the Menu, simple add: `menu: My Page` between the dashes in the page content. This is called the YAML front matter, and it is where you configure page-specific options.