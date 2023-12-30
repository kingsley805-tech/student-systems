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
        <div class="title my-10 space-y-3">
          @include('includes.error')
            <span class="inner-name text bg-slate-50 font-extrabold text-textHover m-3   p-3 rounded-md">Fee Structure</span>
        </div>
        <!--structure content-->
        <div  class=" structure-cont mt-2">
            <!-- Invoice Content -->
            @foreach($outcome as $value)
            <div class="bg-white shadow-md rounded-b-md border border-gray-300 overflow-x-auto p-1">
                <table class="table w-full">
                    <tbody>
                        <tr class="taj">
                            <td class="p-2 border-2  text-htext font-bold">ID	</td>
                            <td class="p-2 text-textC font-normal border-2 ">{{$value->id}}</td>
                        </tr>
                        <tr class="taj">
                            <td class="p-2 border-2  text-htext font-bold">FEE TYPE	</td>
                            <td class="p-2 text-textC font-normal border-2 ">{{$value->feeType}}</td>
                        </tr>
                        <tr class="taj">
                            <td class="p-2  border-2 text-htext font-bold">AMOUNT	</td>
                            <td class="p-2 text-textC font-normal border-2 ">{{$value->amount}}</td>
                        </tr>
                        <tr class="taj">
                            <td class="p-2  border-2 text-htext font-bold">Classroom</td>
                            <td class="p-2 text-textC font-normal border-2 ">{{$value->classroom}}</td>
                        </tr>
                        <tr class="taj">
                            <td class="p-2  border-2  text-htext font-bold">PERIOD</td>
                            <td class="p-2 text-textC font-normal border-2">FEE TYPE TOTAL:{{$value->period}}</td>
                        </tr>
                        <tr class="taj">
                            <td class="p-2  border-2  text-htext font-bold">Class-Room ID</td>
                            <td class="p-2 text-textC font-normal border-2">{{$value->classroom_id	}}</td>
                        </tr>
                       
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        @endforeach
        </div>
            
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="./index.js"></script>
</body>

</html>