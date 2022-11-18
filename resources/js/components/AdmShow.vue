 <template>


    <div class="hidden" id="overlay">
          <adm-popup :data="data"></adm-popup> 
    </div>
    
 </template>

 <script setup>
/*  import { response } from "express"; */


const props = defineProps({
       id: Number,
   })


   const axios = require("axios");

        const options = {
        method: 'GET',
        url: 'https://bayut.p.rapidapi.com/properties/detail',
        params: {externalID: props.id},
        headers: {
            'X-RapidAPI-Key': 'e5210f0a6bmsh9cd3176b3344994p174048jsn161017ba2ab7',
            'X-RapidAPI-Host': 'bayut.p.rapidapi.com'
        }
        };

        var  data = await axios.request(options)
       .then(function (response) {
            console.log(response.data);
            return response.data
        })
         .catch(function (error) {
            console.error(error);
        });

    const details =async() =>{
            

        document.getElementById('overlay').className = "bg-gray-500 fixed top-0 left-0 w-full h-full opacity-90"

    }

    const close = () => {
    document.getElementById('overlay').className = "hidden"
    }

 </script>