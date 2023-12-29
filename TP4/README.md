# TP4 : blade

> created by ***9rayti f click channel***
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