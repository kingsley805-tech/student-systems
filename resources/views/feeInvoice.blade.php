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
        <div class="title space-y-3 my-6">
            @include('includes.error')
            <span class="inner-name text bg-slate-50 font-extrabold text-textHover m-3 my-8  p-3 rounded-md">Fee Invoice</span>
        </div>
  
          
          
        
          <div id="invoice-cont" class="voice">
            <!-- Invoice Content -->
            @foreach ($results as $item)
            <div class="bg-white shadow-md rounded-b-md  border-gray-300 overflow-x-auto p-1">
              <table class="table w-full">
                  <tbody>
                      <tr class="taj">
                          <td class="p-2  border-2  text-htext font-bold">INOVICE TITLE</td>
                          <td class="p-2 text-textC font-normal border-2 ">{{$item->Description}}</td>
                      </tr>
                   
                      <tr class="taj">
                          <td class="p-2  borde text-htext font-bold">INVOICE NUMBER</td>
                          <td class="p-2 text-textC font-normal border-2 ">{{$item->InvoiceNumber}}</td>
                     </tr>
                      <tr class="taj">
                          <td class="p-2  border-2  text-htext font-bold">PAYABLE</td>
                          <td class="p-2 text-textC font-normal border-2 ">GHS {{$item->PayableAmount}}</td>
                      </tr>

                      <tr class="taj">
                        <td class="p-2  border-2  text-htext font-bold">PAID</td>
                        <td class="p-2 text-textC font-normal border-2 ">GHS {{$item->AmountPaid}}</td>
                    </tr>

                    <tr class="taj">
                        <td class="p-2  border-2  text-htext font-bold">AMOUNT LEFT</td>
                        <td class="p-2 text-textC font-normal border-2 ">GHS {{$item->AmountLeft}}</td>
                    </tr>


                      <tr class="taj">
                          <td class="p-2 border-2  text-htext font-bold">STATUS</td>
                          <td class="p-2">
                              <button class="unpaid bg-red-200 text-red-600 p-1 px-3 rounded-lg font-bold border-2 ">{{$item->PaymentStatus}}</button>
                          </td>
                      </tr>
                      <tr class="taj">
                          <td class="p-2  border-2  text-htext font-bold">DATE ISSUED</td>
                          <td class="p-2 text-textC font-normal border-2 ">{{$item->DateIssued}}</td>
                      </tr>
                      <tr class="taj">
                          <td class="p-2  border-2  text-htext font-bold">DUE DATE</td>
                          <td class="p-2 text-textC font-normal border-2 ">{{$item->DateDue}}</td>
                          
                      </tr>

                      <tr class="taj">
                        <td class="p-2 border-2  text-htext font-bold">MAKE PAYMENT</td>
                        <td class="p-2">
                            <button class="unpaid bg-blue-800 text-white p-1 px-3 rounded-lg font-bold border-2 "><a href="/student/invoice-details/{{$item->InvoiceID}}/{{$item->InvoiceNumber}}">Make Payment</a></button>
                        </td>
                    </tr>
                  </tbody>
              </table>
          </div>
          <br>
            @endforeach
           
        </div>
        
           
        </div>
    </div>
    <button class="bg-blue-400 text-black w-56 h-10 flex items-center justify-center m-16
    \01 rounded-lg hover:bg-neutral-400 text-xl"> Make payment </button>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="./index.js"></script>
</body>

</html>