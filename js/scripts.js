// Une fonction qui permet de faire apparaître les éléments du formulaire
//Déclaration de variable pour la fonction cidessous

let bouton = document.querySelector('.buttonaction')
let body = document.querySelector('body')
let part1 = document.querySelector('.part1')
let part2 = document.querySelector('form')
let boutonext = document.querySelector('#bouttonsuivant')

bouton.addEventListener('click', function (){
    body.style.flexDirection = "row";
    part2.removeAttribute('hidden');
    bouton.setAttribute('hidden', 'hidden');
    part1.style.width = "50%";
    part2.style.width = "50%"
})

//Déclaration de variable pour la fonction cidessous
let form1 = document.querySelector('.form-1')
let form2 = document.querySelector('.form-2')
let paragraphe1 = document.querySelector('.brand-paragraphe1')
let paragraphe2 = document.querySelector('.brand-paragraphe2')

boutonext.addEventListener('click', function(){
    form1.setAttribute('hidden', 'hidden');
    form2.removeAttribute('hidden');
    paragraphe1.setAttribute('hidden', 'hidden');
    paragraphe2.removeAttribute('hidden', 'hidden');
})

//Une fonction pour afficher le texte area lorsque la profession de l'utilisateur ne figure pas dans la liste des radios créer

//Déclaration de variable pour la fonction cidessous
let textareas = document.querySelector('.textareas')

function afficherzonedetexte(){
    textareas.removeAttribute('hidden');
}