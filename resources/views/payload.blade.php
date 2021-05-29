<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="  https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src=" https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
   <div class="container">
  <h2>Payload dari node js</h2>
  <hr>
 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
              <div class="container-fluid mb-5" style="margin-bottom: 150px !important">
                <div class="row mr-4">
               Data  :  [<?php 
               function findDuplicates($array1,$array2) {
                  $combined = array_merge($array1,$array2);
                  $counted = array_count_values($combined);
                  $dupes = [];
                  $keys = array_keys($counted);
                  foreach ($keys as $key)
                  {   
                      if ($counted[$key] > 1)
                      {$dupes[] = $key;}
                  }
                  sort($dupes);
                  return $dupes;
                 }
                foreach ($responseBody->DATA  as $response){ 
                        echo $response;
                     } 
                   echo "]<hr>Return : [";
                  foreach ($responseBody->DATA  as $response){
                       $get_data_asli = $response;
                        $konvert_min_ke_positif = abs($get_data_asli);
                        $string_ke_array =  $konvert_min_ke_positif." ";
                        $buat_array_baru =  explode(" ",$string_ke_array);
                        }
                        $data_final = $buat_array_baru;
                       $data_compare = [ 1 , 1 , 3 , 4 , 5 , 2 , 7 , 4 , 2 ];
                       $array1 = $data_compare;
                        $array2 = $data_final;
                        $dupes = findDuplicates($array1,$array2);
                         $numbers = $dupes;
                          sort($numbers);
                          $arrlength = count($numbers);
                          for($x = 0; $x < $arrlength; $x++) {
                           echo $numbers[$x];
                          }
                         ?>]
                    <hr>
    </div>
</div>
</div>
</div>
</div>
</div>
   </body>
</html>

