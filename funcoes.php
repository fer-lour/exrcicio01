<?php

function extractSubmit(array $get) : array
{
  return $dados_recibos = array_filter($get,function($k){
        return $k != 'submit';}
        ,ARRAY_FILTER_USE_KEY
    );
}

function validateAllInput(array $arr) : bool
{
  foreach ($arr as $value) {
    if (empty($value) || !isset($value)) {
      return false;
    }
  }
  return true;
}
function negativos(array $get) :int
{
  // $count = 0;
  // foreach ($get as $value) {
  //   if ($value < 0) {
  //     $count++;
  //   }
  // }
  // return $count;
  $new_array = array_filter($get,function($value){
    return $value < 0;
  });
  return sizeof($new_array);
}

function intervalo(array $get): int
{
  $subarray = array_filter($get, function($var){
    return ($var>=10 && $var <= 20 );});
    
    return sizeof($subarray);
}

function media(array $get):float
{
  // $sum = array_reduce($get, function($carry, $item){
  //   $carry += $item;
  //   return $carry;
  // });
  $sum = array_sum($get);
  return $sum / sizeof($get);
}

?>