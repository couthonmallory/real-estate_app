
@extends('admin_pages.index')

@section('content')

<div class="mt-10 mx-8">

        <h1 class="block text-center mb-10 text-4xl font-bold">Tableau des transactions</h1>

    <center>
        <table class="table-auto border-collapse border-2 border-slate-500 bg-slate-700 text-white">

            <thead>
            <tr>
                <th class="border border-slate-600 p-4">Username</th>
                <th class="border border-slate-600 p-4">Properties_info</th>
                <th class="border border-slate-600 p-4">Done when</th>
                <th class="border border-slate-600 p-4">Prop_details</th>
                <th class="border border-slate-600 p-4">Delete</th>
            </tr>
        </thead>

        @php
            use App\Models\Transaction;
            $transacs = Transaction::all();
        @endphp
  
        @foreach ( $transacs as $transac )
            
            <tbody>
                <tr>
                <td class="border border-slate-600 p-4 text-center">{{ $transac->user_id }}</td>
                <td class="border border-slate-600 p-4 text-center">{{ $transac->properties_id }}</td>
                <td class="border border-slate-600 p-4 text-center">{{ $transac->created_at }}</td>
                <td class="border border-slate-600 p-4 text-center">
                    <a href="/show/{{ $transac->properties_id }}">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                              </svg> 
                        </button>
                    </a>
                </td>
                
                <td class="border border-slate-600 p-4 text-center">
                    <a href="/deleteTransac/{{ $transac->id }}">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                              </svg>                          
                        </button>
                    </a>
                </td>
                </tr>
            </tbody>

        @endforeach

        
    </table>
    </center>
    </div>
    @endsection
    <script>

       async function  details (id){
            const axios = require("axios");

const options = {
method: 'GET',
url: 'https://bayut.p.rapidapi.com/properties/detail',
params: {externalID: id},
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

     <adm-popup id="data"></adm-popup>

     document.getElementById('overlay').className = "bg-gray-500 fixed top-0 left-0 w-full h-full opacity-90"


 
}
    
const close = () => {
document.getElementById('overlay').className = "hidden"
}


    </script>

