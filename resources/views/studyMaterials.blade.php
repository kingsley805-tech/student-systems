@include('includes.headerCss');
<style>
@media (min-width: 768px) {
    .logout-mode{
      margin-left: 40rem;
    }
    .attendance{
      height: 50.3rem;
      margin-top: 3rem;
    }
}
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #60A5FA;
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb {
    background: #F9FAFB;
}
</style>
<body>
  @extends('includes.menu')

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="dash-content mt-2 py-5   bg-white shadow-md  ">
        <div class="title space-y-3">
          @include('includes.error')
            <span class="inner-name text bg-slate-50 font-extrabold text-textHover m-3   p-3 rounded-md">Study Materials</span>
        </div>
      
        <!--study materials-->
        @foreach( $materialResult as $study)
        <div class="studymats  p-4 bg-white shadow-md rounded-b-md border border-gray-300 rounded-lg max-w-lg mx-auto my-4">
            <h2 class="text-2xl font-semibold text-textHover">Title:{{$study->title}}</h2>
            <div class="mt-4">
              <p class="font-semibold">Description: <span class="font-black text-2xl text-gray-950">{{$study->description}}</span></p>
              <p></p> <!-- Add your description here -->
            </div>
            <div class="mt-4">
              <p class="font-semibold">Url:<a href="{{$study->url}}"target='blank'class='text-white bg-blue-300 hover:bg-gray-400 p-2.5 rounded-md font-bold'>View</a></p>
              <p></p> <!-- Add your URL here -->
            </div>
            <div class="mt-4">
           
            <div class="mt-4">
              
            
           
            </div>
            @endforeach
          </div></div>
          <!--Homme work-->
          </div>
            
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="./index.js"></script>
</body>

</html>