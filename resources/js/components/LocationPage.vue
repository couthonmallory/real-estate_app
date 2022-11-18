<template>
  
    <!-- Pour les hôtels -->
<div>
    <div class=" flex justify-between items-end mx-24 mt-12 border-b-4 border-red-400 pr-4">
        <h6 class="text-red-500 text-5xl ">Hôtels</h6>
        <p  class="text-red-500">
            <a href="#" class="hover:underline">See all offers</a>
        </p>
    </div>
    
    <!-- composant pour le système de fenêtre -->
    <div class=" grid grid-cols-8 mt-6 mx-24 gap-4 justify-items-center" >
            
        <div class=" grid grid-cols-4 col-span-4">
         <div class="col-span-2 ">
             <img :src=props.room  alt="" >
         </div>
         
         <div class="col-span-2  bg-orange-200 px-2">
            <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
             <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Details</button>
             </div>
         </div>  
        </div>

        <div class=" grid grid-cols-4 col-span-4">
         <div class="col-span-2 ">
             <img :src=props.room  alt="" >
         </div>
         
         <div class="col-span-2  bg-orange-200 px-2">
            <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
             <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Details</button>
             </div>
         </div>  
        </div>

        <div class=" grid grid-cols-4 col-span-4">
         <div class="col-span-2 ">
             <img :src=props.room  alt="" >
         </div>
         
         <div class="col-span-2  bg-orange-200 px-2">
            <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
             <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Details</button>
             </div>
         </div>  
        </div>

        <div class=" grid grid-cols-4 col-span-4">
         <div class="col-span-2 ">
             <img :src=props.room  alt="" >
         </div>
         
         <div class="col-span-2  bg-orange-200 px-2">
            <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
             <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-orange-500 py-1 px-2 m-1">Details</button>
             </div>
         </div>  
        </div>

        
 </div>
</div>

    <!-- Pour les maisons -->

    <div>
        <div class=" flex justify-between items-end mx-24 mt-12 border-b-4 border-red-400 pr-4">
            <h6 class="text-red-500 text-5xl ">Houses</h6>
            <p  class="text-red-500">
                <a :href=props.house class="hover:underline">See all offers</a>
            </p>
        </div>
        
        <!-- composant pour le système de fenêtre -->
        <div class=" grid grid-cols-8 mt-6 mx-24 gap-4 justify-items-center" >
                
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://media.gettyimages.com/photos/large-perfect-maintenance-free-home-with-covered-porch-picture-id479767334?k=20&m=479767334&s=612x612&w=0&h=q75SsM3D2tuinz29A8AeIFwRse6k9_6rwqzjY4AGMqs="  alt="" >
             </div>
             
             <div class="col-span-2  bg-green-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. Lorem ipsum dolor sit amet
                
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://media.gettyimages.com/photos/large-perfect-maintenance-free-home-with-covered-porch-picture-id479767334?k=20&m=479767334&s=612x612&w=0&h=q75SsM3D2tuinz29A8AeIFwRse6k9_6rwqzjY4AGMqs="  alt="" >
             </div>
             
             <div class="col-span-2  bg-green-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. Lorem ipsum dolor sit amet
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://media.gettyimages.com/photos/large-perfect-maintenance-free-home-with-covered-porch-picture-id479767334?k=20&m=479767334&s=612x612&w=0&h=q75SsM3D2tuinz29A8AeIFwRse6k9_6rwqzjY4AGMqs="  alt="" >
             </div>
             
             <div class="col-span-2  bg-green-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. Lorem ipsum dolor sit amet
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://media.gettyimages.com/photos/large-perfect-maintenance-free-home-with-covered-porch-picture-id479767334?k=20&m=479767334&s=612x612&w=0&h=q75SsM3D2tuinz29A8AeIFwRse6k9_6rwqzjY4AGMqs="  alt="" >
             </div>
             
             <div class="col-span-2  bg-green-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                Lorem ipsum dolor sit amet 
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-green-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            
     </div>
    </div>

    <!-- Pour les voitures -->

    <div>
        <div class=" flex justify-between items-end mx-24 mt-12 border-b-4 border-red-400 pr-4">
            <h6 class="text-red-500 text-5xl ">Cars</h6>
            <p  class="text-red-500">
                <a :href=props.house class="hover:underline">See all offers</a>
            </p>
        </div>
        
        <!-- composant pour le système de fenêtre -->
        <div class=" grid grid-cols-8 mt-6 mx-24 gap-4 justify-items-center" >
                
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4BCo_EkpPAv57fVJ5c820Nit7MMtkTknW6w&usqp=CAU"  alt="" >
             </div>
             
             <div class="col-span-2  bg-gray-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4BCo_EkpPAv57fVJ5c820Nit7MMtkTknW6w&usqp=CAU"  alt="" >
             </div>
             
             <div class="col-span-2  bg-gray-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4BCo_EkpPAv57fVJ5c820Nit7MMtkTknW6w&usqp=CAU"  alt="" >
             </div>
             
             <div class="col-span-2  bg-gray-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita. 
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            <div class=" grid grid-cols-4 col-span-4">
             <div class="col-span-2 ">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4BCo_EkpPAv57fVJ5c820Nit7MMtkTknW6w&usqp=CAU"  alt="" >
             </div>
             
             <div class="col-span-2  bg-gray-200 px-2">
                <span class="block font-bold "> Description </span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, molestias 
                 modi, vel mollitia sunt expedita.
                 <div class="flex justify-around mt-3">
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Book</button>
                <button class="text-black rounded-lg border-2 border-slate-500 py-1 px-2 m-1">Details</button>
             </div>
             </div>  
            </div>
    
            
     </div>
    </div>
        
<br><br><br><br>

</template>


<script setup>
     const props = defineProps({
        content: String,
        room: String,
        house: String
    })
    
</script>