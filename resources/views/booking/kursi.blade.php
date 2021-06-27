<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <title>Booking seat - Pesona Sumut</title>
     <style>
          input:checked+svg {
               display: block;
          }

     </style>
</head>

<body class="bg-gradient-to-r from-gray-800 via-blue-900 to-gray-800 ">
     <div>
          <p class="text-center text-2xl text-bold text-white my-8">
               BOOK YOUR SEAT NOW!<br>
               OR NEVER
          </p>
     </div>

     <div class="grid justify-items-center">
          <table class="table-auto text-center items-center text-xs bg-gray-200 rounded-lg p-8" cellpadding="7">
               <thead>
                    <th class="bg-blue-500 rounded-tl-lg"></th>
                    <th class="bg-blue-500 rounded-tr-lg" colspan="11"><span class="text-2xl text-white">STAGE</span>
                    </th>
               </thead>
               <tbody>
                    <tr>
                         <td class="bg-yellow-600">
                              VIP
                         </td>
                         <td>
                              A
                         </td>
                         <td>
                              B
                         </td>
                         <td>
                              C
                         </td>
                         <td>
                              D
                         </td>
                         <td>
                              E
                         </td>
                         <td class="bg-blue-200" rowspan="5">
                              W <br>
                              A <br>
                              L <br>
                              K <br> <br>

                              P <br>
                              A <br>
                              T <br>
                              H <br>
                         </td>
                         <td>
                              F
                         </td>
                         <td>
                              G
                         </td>
                         <td>
                              H
                         </td>
                         <td>
                              I
                         </td>
                         <td>
                              J
                         </td>
                    </tr>
                    <form id="myForm" method="POST" action="/kursis/store" enctype="multipart/form-data" name="myForm">
                         @csrf
                         {{ $value = '' }}
                         <tr>
                              <td class="bg-yellow-200">
                                   1
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check1" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '1' : $value . ',' . '1' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '2' : $value . ',' . '2' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '3' : $value . ',' . '3' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '4' : $value . ',' . '4' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '5' : $value . ',' . '5' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>

                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '6' : $value . ',' . '6' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '7' : $value . ',' . '7' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '8' : $value . ',' . '8' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '9' : $value . ',' . '9' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '10' : $value . ',' . '10' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                         </tr>
                         <tr>
                              <td class="bg-yellow-200">
                                   2
                              </td>
                              <td>
                                   <!-- <input type="text" name="nomor_kursi" id=""> -->
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check1" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '11' : $value . ',' . '11' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '12' : $value . ',' . '12' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '13' : $value . ',' . '13' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '14' : $value . ',' . '14' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '15' : $value . ',' . '15' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>

                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '16' : $value . ',' . '16' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '17' : $value . ',' . '17' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '18' : $value . ',' . '18' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '19' : $value . ',' . '19' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '20' : $value . ',' . '20' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                         </tr>
                         <tr>
                              <td class="bg-yellow-200">
                                   3
                              </td>
                              <td>
                                   <!-- <input type="text" name="nomor_kursi" id=""> -->
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check1" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '21' : $value . ',' . '21' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '22' : $value . ',' . '22' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '23' : $value . ',' . '23' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '24' : $value . ',' . '24' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '25' : $value . ',' . '25' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>

                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '26' : $value . ',' . '26' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '27' : $value . ',' . '27' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '28' : $value . ',' . '28' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '29' : $value . ',' . '29' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '30' : $value . ',' . '30' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                         </tr>
                         <tr>
                              <td class="bg-yellow-200">
                                   4
                              </td>
                              <td>
                                   <!-- <input type="text" name="nomor_kursi" id=""> -->
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check1" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '31' : $value . ',' . '31' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '32' : $value . ',' . '32' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '33' : $value . ',' . '33' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '34' : $value . ',' . '34' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '35' : $value . ',' . '35' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>

                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '36' : $value . ',' . '36' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '37' : $value . ',' . '37' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '38' : $value . ',' . '38' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '39' : $value . ',' . '9' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                              <td>
                                   <label class="flex justify-start items-start">
                                        <div
                                             class="form-group bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                             <input type="checkbox" id="check2" onclick="setChecks(this)"
                                                  name="nomor_kursi"
                                                  value={{ $value = !empty($value) ? '40' : $value . ',' . '40' }}
                                                  class="opacity-0 absolute">
                                             <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                  viewBox="0 0 20 20">
                                                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                             </svg>
                                        </div>
                                   </label>
                              </td>
                         </tr>
                         <tr>
                              <td class="bg-blue-200 rounded-bl-lg"></td>
                              <td class="bg-blue-200 rounded-br-lg" colspan="11">
                                   W A L K &nbsp; P A T H
                              </td>
                         </tr>
               </tbody>
          </table>
          <div class="grid justify-items-end">
               <button
                    class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700"
                    value="Submit" type="submit">
                    Book
               </button>
          </div>
     </div>
     </form>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script type="text/javascript">
          var checkCount = 0
          var maxChecks = 1

          function setChecks(obj) {

               if (obj.checked) {
                    checkCount += 1
               } else {
                    checkCount -= 1
               }

               if (checkCount > maxChecks) {
                    obj.checked = false
                    checkCount = checkCount - 1
                    // alert('you may only choose up to ' + maxChecks + ' options')
                    Swal.fire({
                         title: 'Error!',
                         text: 'You may only choose up to ' + maxChecks + ' seat!',
                         icon: 'error',
                         confirmButtonText: 'Ok'
                    }).then(() => {
                         location.reload();
                    });

                    return false;
               }
          }
     </script>
</body>

</html>
