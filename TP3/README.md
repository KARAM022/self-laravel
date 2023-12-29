# TP3 : blade
> created by ***Jamaoui Mouad channel***
> 
> video : <a href="https://youtu.be/w6V8DylTKtU?si=Zw3xsm81s-PDjTfJ">YouTube video</a>

1. Créer un controller 'home'. Définir la méthode blads suivante :
    ```
    public function blads(){
        return view("blads", [
            'nom' => 'Karam',
            'languages' => [
                "php",
                "js",
                "c",
                "python"
            ]
        ]);
    }
    ```
1. Definir une route correspandante
1. Créer une vue 'blads' qui permet d'afficher les information comme suit :<br>
    `
        hello Mr Karam
    `<br>
    `
    this is a list of some programming language :
        * php
        * js
        * c
        * python
    `<br>
    Proposer deux solutions:<br>
        Solution 1 : avec `if`<br>
        Solution 2 : avec `unless`