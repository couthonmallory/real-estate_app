


<template>
    
 <!--Link pour les cards-->

 <!--debut de la page-->

 <!--carousel-->

    <div id="carouselExampleCaptions" class="carousel slide absolute md:relative  mt-5 invisible md:visible" data-bs-ride="carousel" >
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
          <div class="carousel-item active relative float-left w-full">
            <img
              :src=props.home
              class="block w-full"
              alt="..."
            />
            <div class="carousel-caption hidden md:block absolute text-center">
              <h5 class="text-xl">Location/Achat de Popriétés</h5>
              <p>De très belle demeures disponibles aux quatres coins du globe.</p>
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
            :src=props.car
              class="block w-full"
              alt="..."
            />
            <div class="carousel-caption hidden md:block absolute text-center">
              <h5 class="text-xl">Location/Achat de Voitures</h5>
              <p>De splendides voitures disponibles pour combler vos désirs</p>
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
            :src=props.hotel
              class="block w-full"
              alt="..."
            />
            <div class="carousel-caption hidden md:block absolute text-center">
              <h5 class="text-xl">Réservations d'Hôtels</h5>
              <p>une couverture quasi-mondiale pour assurer votre détente </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>

      <p class="text-center m-10 text-orange-500 font-bold">Nos Services</p>
      <!-- des cards pour présenter les services-->

      <!-- component -->
<!-- This is an example component for the card-->

<div class="grid gap-4 grid-cols-3 grid-rows-1 ">
  <div class=" max-w-2xl mx-auto self-stretch">
    
    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://st.depositphotos.com/2288675/2455/i/450/depositphotos_24553989-stock-photo-hotel.jpg" alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">Choose from the best hotels in the world </h5>
            </a>
            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">For all your outings, holidays and relaxation, find your happiness among our rich catalogue.</p>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                see more
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
   
  </div>

  <div class="max-w-2xl mx-auto  ">
    
    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
        <img class="rounded-t-lg" src="https://construireonline.com/img/plans/477/plan-maison-contemporaine-toit-plat-NAVI-1.jpg" alt="">
    </a>
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white"> Find the best housing offers here</h5>
            </a>
            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Waist no more time and discover the best housing offers near you and around the world.</p>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                see more
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
   
  </div>

  <div class="max-w-2xl mx-auto self-stretch ">
    
    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://cdn-s-www.lalsace.fr/images/e33976d5-8ba9-439e-b4aa-9ec66fb8d403/NW_raw/cette-supercar-la-c-two-vient-de-croatie-photo-dr-1608828241.jpg" alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">The best car rental offers with us</h5>
            </a>
            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">For all your trips and outings, get the best luxury or used vehicles.</p>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                see more
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
   
  </div>
</div>


<br><br><br>    
</template>


<script setup>
    const props = defineProps({
        contenu: String,
        logo: String,
        home: String,
        car: String,
        hotel: String,
        maisonvit: String,
    })

    const greet= () => {
      console.log('Bonjour')
    }
   
    
</script>
