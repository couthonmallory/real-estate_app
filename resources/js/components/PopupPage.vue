<template>
        <div id="popup" class="mx-auto  mt-20 sticky bg-white w-5/12 rounded-lg popup shadow-black p-4">
            <div class="float-left w-1/2">
                <img :src="props.image" alt="une image" class="inline h-40  pb-1">
            </div>
            <h2>
                <span class="underline font-bold"> Détails de la propriété </span>
                <span><button id="btn-close" class="float-right hover:bg-gray-500" @click="close" >&times;</button></span>
            </h2>
             <br>
            <p>
                <span class="underline font-bold">Code de la résidence:  </span> &nbsp; {{ props.name }}
                 <br><br>
                <span class="underline font-bold">Description de la résidence:  </span> &nbsp; {{ props.description }}
                 <br><br>
                <span class="underline font-bold">Prix de la résidence:  </span> &nbsp; {{ props.price }}
                 <br><br>
                <span class="underline font-bold">Nombre de chambres:  </span> &nbsp; {{ props.chamber }}
                 <br><br>
                <span class="underline font-bold">Nombre de douches:  </span> &nbsp; {{ props.bath }}
                 <br><br>
                <span class="underline font-bold">Score de la résidence:   </span>&nbsp;  {{ props.score }}
                 <br><br>
                <span class="underline font-bold">Lieu de la résidence:  </span> &nbsp; {{ props.location }}
                 <br><br>
            </p>
            
        </div>
        
</template>

<script setup>

import { stringLiteral } from '@babel/types';


    const props = defineProps(
        {
            name: String,
            description: String,
            price: Number,
            chamber: Number,
            bath: Number,
            score: Number,
            location: String,
            image:String,
        }
    )


const purchase = () =>{
    
    alert('Purchase done. You\'ll be contacted soon Thank you')
    close()
}
const close = () => {
    document.getElementById('overlay').className = "hidden"
}

</script>
