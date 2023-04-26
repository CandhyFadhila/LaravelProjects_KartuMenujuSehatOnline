@extends('layout.main')

@section('isi_content')
     <section>
          <style>
               /* Text Opening 1 */
               @import url("https://fonts.googleapis.com/css?family=Public+Sans&display=swap");

               .konten {
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
               }

               .konten img {
                    width: 200px;
                    height: 200px;
                    margin-bottom: 2.8rem;
               }

               .konten h1 {
                    font-family: 'Public Sans', sans-serif;
                    font-size: 68px;
                    color: #747474;
               }

               .konten h1 span.text {
                    padding: 0;
                    padding-right: 4px;
                    border-right: 2px solid #747474;
                    animation: blink 0.75s infinite;
               }

               .blue {
                    color: #4480ff;
               }

               .green {
                    color: #4caf50;
               }

               .yellow {
                    color: #f4b400;
               }

               @keyframes blink {
                    from {
                         border: none;
                    }

                    to {
                         border-color: 2px solid #747474;
                    }
               }

               @media screen and (max-width: 670px) {
                    .konten h1 {
                         font-size: 40px;
                    }

                    .konten img {
                         width: 75px;
                         height: 75px;
                    }
               }

               @media screen and (max-width: 400px) {
                    .konten h1 {
                         font-size: 32px;
                    }
               }
          </style>
     </section>

     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12 konten">
                    <img src="{{ asset('img/hug.png') }}" />
                    <h1><span class="text blue">Lindungi</span> anak dari Stunting</h1>
               </div>
          </div>
     </div>
@endsection

@section('script_select2')
     <script>
          $(document).ready(function() {
               @if (Session::has('success'))
                    toastr.info("{{ Session::get('success') }}");
               @endif

               @if (Session::has('sudah_pernah_login'))
                    toastr.warning("{{ Session::get('sudah_pernah_login') }}");
               @endif
          });
     </script>

     <script>
          $(document).ready(function() {
               const words = ["Lindungi", "Jaga", "Pantau"],
                    colors = ["blue", "green", "yellow"],
                    text = document.querySelector(".text");

               // Generator (iterate from 0-3)
               function* generator() {
                    var index = 0;
                    while (true) {
                         yield index++;

                         if (index > 2) {
                              index = 0;
                         }
                    }
               }

               // Printing effect
               function printChar(word) {
                    let i = 0;
                    text.innerHTML = "";
                    text.classList.add(colors[words.indexOf(word)]);
                    let id = setInterval(() => {
                         if (i >= word.length) {
                              deleteChar();
                              clearInterval(id);
                         } else {
                              text.innerHTML += word[i];
                              i++;
                         }
                    }, 500);
               }

               // Deleting effect
               function deleteChar() {
                    let word = text.innerHTML;
                    let i = word.length - 1;
                    let id = setInterval(() => {
                         if (i >= 0) {
                              text.innerHTML = text.innerHTML.substring(0, text.innerHTML.length - 1);
                              i--;
                         } else {
                              text.classList.remove(colors[words.indexOf(word)]);
                              printChar(words[gen.next().value]);
                              clearInterval(id);
                         }
                    }, 260);
               }

               // Initializing generator
               let gen = generator();

               printChar(words[gen.next().value]);
          });
     </script>
@endsection
