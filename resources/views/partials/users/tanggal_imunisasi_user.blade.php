<div class="container" data-aos="fade-up">

     <div class="section-title">
          <h2>Imunisasi Anak</h2>
          <p>Setelah melakukan penimbangan anak anda pada posyandu terdekat, hasil akan ditampilkan dibawah ini beserta
               hasil status gizi anak anda.</p>
     </div>
     <style>
          /* ! Add css div_table_vitamin */
          .tabel_vitamin {
               margin-left: 11px;
               margin-right: 11px;
               width: auto;
               height: auto;
               overflow: auto;
               position: relative;
               border: 1px solid #5e5e5e;
          }

          .tabel_vitamin table {
               border-spacing: 0;
               white-space: nowrap;
               table-layout: relative;
          }

          .tabel_vitamin thead,
          tr>th {
               background: #A6D0DD;
          }

          .tabel_vitamin thead {
               top: 0;
               z-index: 2;
          }

          .tabel_vitamin tr>th {
               left: 0;
               z-index: 1;
          }

          .tabel_vitamin thead tr>th:first-child {
               z-index: 3;
          }

          .tabel_vitamin th,
          td {
               height: 50px;
               border: 1px solid #5e5e5e;
               border-width: 0 0 1px 1px;
               text-align: left;
               padding: 10px;
               font-family: sans-serif;
          }

          .tabel_vitamin td {
               background: #fff;
          }

          .tabel_vitamin th:first-child {
               border-right-width: 1px;
               border-left: 0;
          }

          .tabel_vitamin th+td,
          th:first-child+th {
               border-left: 0;
          }

          .tabel_vitamin tbody tr:last-child>* {
               border-bottom: 0;
          }

          .tabel_vitamin tr>*:last-child {
               border-right: 0;
          }

          /* ! End css div_table_vitamin */

          /* CSS for tabel_vitamin_lanjut */
          .tabel_vitamin_lanjut {
               margin-top: 45px;
               margin-left: 11px;
               margin-right: 11px;
               width: auto;
               height: auto;
               overflow: auto;
               position: relative;
               border: 1px solid #5e5e5e;
          }

          .tabel_vitamin_lanjut table {
               border-spacing: 0;
               white-space: nowrap;
               table-layout: relative;
          }

          .tabel_vitamin_lanjut .umur {
               width: 400px;
          }

          .tabel_vitamin_lanjut thead,
          tr>th {
               background: #A6D0DD;
          }

          .tabel_vitamin_lanjut thead {
               top: 0;
               z-index: 2;
          }

          .tabel_vitamin_lanjut tr>th {
               left: 0;
               z-index: 1;
          }

          .tabel_vitamin_lanjut thead tr>th:first-child {
               z-index: 3;
          }

          .tabel_vitamin_lanjut th,
          td {
               height: 50px;
               border: 1px solid #5e5e5e;
               border-width: 0 0 1px 1px;
               text-align: left;
               padding: 10px;
               font-family: sans-serif;
          }

          .tabel_vitamin_lanjut td {
               background: #fff;
          }

          .tabel_vitamin_lanjut th:first-child {
               border-right-width: 1px;
               border-left: 0;
          }

          .tabel_vitamin_lanjut th+td,
          th:first-child+th {
               border-left: 0;
          }

          .tabel_vitamin_lanjut tbody tr:last-child>* {
               border-bottom: 0;
          }

          .tabel_vitamin_lanjut tr>*:last-child {
               border-right: 0;
          }
     </style>
     <div class="row">
          <div class="pt-4 pt-lg-0 content">
               <div class="container">
                    <div class="tabel_vitamin">
                         <table>
                              <thead>
                                   <tr class="table-success">
                                        <th class="umur">
                                             <div style="width: 210px">Umur (Bulan)
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">0
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">1
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">2
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">3
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">4
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">5
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">6
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">7
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">8
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">9
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">10
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">11
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 100px">12+***
                                        </th>
                                   </tr>
                                   <tr>
                                        <th>Vaksin</th>
                                        <th colspan="13" class="text-center">Tanggal
                                             Pemberian Vaksin</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>Hepatitis B (< 24 Jam)</th>
                                        <td class="text-center" id="tgl_vaksin_1">
                                        </td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>BCG</th>
                                        <td class="text-center" id="tgl_vaksin_2">
                                        </td>
                                        <td class="text-center" id="tgl_vaksin_3">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* Polio Tetes 1</th>
                                        <td class="text-center" id="tgl_vaksin_4">
                                        </td>
                                        <td class="text-center" id="tgl_vaksin_5">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* DPT-HB-Hib 1</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_6">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* Polio Tetes 2</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_7">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>** PCV 1</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_8">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* DPT-HB-Hib 2</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_9">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* Polio Tetes 3</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_10">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>** PCV 2</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_11">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* DPT-HB-Hib 3</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_12">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>* Polio Tetes 4</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_13">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>Polio Suntik (IPV)</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_14">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>Campak-Rubella</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_15">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>** JE</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_16">
                                        </td>
                                        <td class="bg-warning"></td>
                                        <td class="bg-danger text-white"></td>
                                   </tr>
                                   <tr>
                                        <th>** PCV 3</th>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="bg-dark text-white"></td>
                                        <td class="text-center" id="tgl_vaksin_17">
                                        </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>

                    <div class="tabel_vitamin_lanjut">
                         <table>
                              <thead>
                                   <tr class="table-success">
                                        <th class="umur">
                                             <div style="width: 210px">Umur (Bulan)
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 370px">18
                                        </th>
                                        <th class="text-center">
                                             <div style="width: 370px">24
                                        </th>
                                   </tr>
                                   <tr>
                                        <th>Vaksin</th>
                                        <th colspan="3" class="text-center">Tanggal
                                             Pemberian Vaksin</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>**** DPT-HB-Hib (lanjutan)</th>
                                        <td class="text-center" id="tgl_vaksin_18">
                                        </td>
                                        <td class="bg-warning"></td>
                                   </tr>
                                   <tr>
                                        <th>**** Campak-Rubella (lanjutan)</th>
                                        <td class="text-center" id="tgl_vaksin_19">
                                        </td>
                                        <td class="bg-warning"></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>



          </div>
     </div>

</div>
