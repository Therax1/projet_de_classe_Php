// Test Js Pour le Bouton

let bouton = document.querySelector('.buttonaction')
let body = document.querySelector('body')
let part1 = document.querySelector('.part1')
let part2 = document.querySelector('form')

bouton.addEventListener('click', function (){
    body.style.flexDirection = "row";
    part2.removeAttribute('hidden');
    bouton.setAttribute('hidden', 'hidden');
    part1.style.width = "50%";
    part2.style.width = "50%"
})