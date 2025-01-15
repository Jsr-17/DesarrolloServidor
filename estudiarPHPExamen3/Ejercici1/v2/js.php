<?php
//selecciono un elemento del dom y le añado un evento de js
header("Content-type: aplication/js");

print("const caja=document.querySelector('#element');");
print("caja.addEventListener('click',()=>{console.log('hola mundo')})");
