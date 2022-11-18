<template>
  
    <button class=" bg-blue-700 rounded-md border-2  border-indigo-900 p-1" @click="details(props.identifiant)"> DETAILS </button>

</template>

<script setup>
 
    const props = defineProps({
       content: String,
       room: String,
       rechercher: String,
       identifiant: Number,
       
   })

   
   const details =()=>{

    /* const axios = require("axios");

const options = {
  method: 'GET',
  url: 'https://bayut.p.rapidapi.com/properties/detail',
  params: {externalID: element},
  headers: {
    'X-RapidAPI-Key': 'e5210f0a6bmsh9cd3176b3344994p174048jsn161017ba2ab7',
    'X-RapidAPI-Host': 'bayut.p.rapidapi.com'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
}); */

/* Affichage de la fenêtre popup */

document.getElementById('overlay').className = "bg-gray-500 fixed top-0 left-0 w-full h-full opacity-90"

   }

   const purchase =()=>{
    alert('purchase done')
   }

</script>