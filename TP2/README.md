# TP2 : controllers
> created by prof ***Ibn Batouta***

1. Créer un controller 'home'
2. Définir la méthode 'salam':<br>
    Returne une vue **salam** contient:
    ```
        salam {{$nom}}
    ```
    lorsque l'url est "(nom de domaine)/". `$nom` doit être déclaré dans la méthode 'salam'.<br>
3. Définir la méthode 'hello':<br>
    Returne une vue **hello** contient:
    ```
        hello {{$nom}}
    ```
    lorsque l'url est "(nom de domaine)/hello/(nom)". `$nom` dans la vue hello doit être le même nom dans l'url.
    le 2eme : returne la vue **page2** lorsque l'url est "(nom de domaine)/page2"