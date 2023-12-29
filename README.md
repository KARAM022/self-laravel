# laravel

THis is some exercises to learn laravel
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg">


### TP1 : blade

> 9rayti f click channel
> 
> video : <a href="https://youtu.be/9dGmUvg9QQ0?si=RmUvojuobIsqC3R9">YouTube video</a>

1. Créer un controller 'ControllerTP1'. Définir la méthode étudiant suivante :
```
public function etudiant()
{
    $data = [];
    $data['nom'] = 'karam';
    $data['prenom'] = 'ouafik';
    $data['poste'] = 'stagiare';
    $data['modules'] = ['developper en frantend', 'developper en backend', 'Gestion des donnees'];

    return view('affichage', $data);
}
```
2. Definir une route correspandante
3. Créer une vue 'affichage' qui permet d'afficher les information comme suit :

| Nom et prenom | karam ouafik |
| :-----: | :---: |
| poste | stagiaire |
| modules | * developper en frantend <br> * developper en backend <br> * gestion des donnees |






### TP2 : blade 

> 9rayti f click channel
> 
> video : <a href="https://youtu.be/X63WfDdYh84?si=Ac-WBUtGX1HfaL7w">YouTube video</a>

1. Créer une vue qui contient unr liste déroulante remplie par les nombres de 0 à 9
1. Remplir une deuxieme liste par les nombres de 1 à 1000. Proposer deux solutions:<br>
    Solution 1 : avec une boucle<br>
    Solution 2 : avec une boucle et une condition







### TP3 : routing
> created by prof ***Ibn Batouta***

1. Créer 2 vue *page1* et *page2*
1. Definir 2 route correspandante:<br>
    le 1er : returne la vue **page1** lorsque l'url est "(nom de domaine)/page1"<br>
    le 2eme : returne la vue **page2** lorsque l'url est "(nom de domaine)/page2"







### TP4 : controllers
> created by prof ***Ibn Batouta***

1. Créer un controller 'home'
2. Définir la méthode 'salam':<br>
    Returne une vue **salam** contient:
    ```
        salam {{$nom}}
    ```
    lorsque l'url est "(nom de domaine)/". `$nom` doit être déclaré dans la méthode 'salam'.
