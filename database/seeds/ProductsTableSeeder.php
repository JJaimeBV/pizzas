<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
   

   $datosataProduct = array(
   ['price'=>250, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Pizza suprema', 'stract'=>'Pizza suprema', 'description'=>'Prueba nuestra deliciosa pizza con los mejores ingredientes *Carne molida *Especies *Champillones', 'image'=>'A1.png', 'slug'=>'Juego 1', 'category_id'=>1, 'visible'=>true, 'code'=>600],
['price'=>51, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Pizza 3 Quesos', 'stract'=>'Pizza 3 quesos', 'description'=>'Juego 2', 'image'=>'A2.png', 'slug'=>'Juego 2', 'category_id'=>3, 'visible'=>true, 'code'=>601],
['price'=>52, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Pizza Superpodora', 'stract'=>'Pizza superpodora', 'description'=>'Juego 3', 'image'=>'A3.png', 'slug'=>'Juego 3', 'category_id'=>3, 'visible'=>true, 'code'=>602],
['price'=>53, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Pizza Hawaiana', 'stract'=>'Pizza hawaiana', 'description'=>'Juego 4', 'image'=>'A4.png', 'slug'=>'Juego 4', 'category_id'=>2, 'visible'=>true, 'code'=>603],
['price'=>54, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 5', 'stract'=>'Juego 5', 'description'=>'Juego 5', 'image'=>'A5.png', 'slug'=>'Juego 5', 'category_id'=>1, 'visible'=>true, 'code'=>604],
['price'=>234, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 6', 'stract'=>'Juego 6', 'description'=>'Juego 6', 'image'=>'A6.png', 'slug'=>'Juego 6', 'category_id'=>4, 'visible'=>true, 'code'=>605],
['price'=>56, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 7', 'stract'=>'Juego 7', 'description'=>'Juego 7', 'image'=>'A7.png', 'slug'=>'Juego 7', 'category_id'=>4, 'visible'=>true, 'code'=>606],
['price'=>57, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 8', 'stract'=>'Juego 8', 'description'=>'Juego 8', 'image'=>'A8.png', 'slug'=>'Juego 8', 'category_id'=>1, 'visible'=>true, 'code'=>607],
['price'=>55, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 9', 'stract'=>'Juego 9', 'description'=>'Juego 9', 'image'=>'A9.png', 'slug'=>'Juego 9', 'category_id'=>3, 'visible'=>true, 'code'=>608],
['price'=>59, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 10', 'stract'=>'Juego 10', 'description'=>'Juego 10', 'image'=>'A10.png', 'slug'=>'Juego 10', 'category_id'=>5, 'visible'=>true, 'code'=>609],
['price'=>60, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 11', 'stract'=>'Juego 11', 'description'=>'Juego 11', 'image'=>'A11.png', 'slug'=>'Juego 11', 'category_id'=>2, 'visible'=>true, 'code'=>610],
['price'=>61, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 12', 'stract'=>'Juego 12', 'description'=>'Juego 12', 'image'=>'A12.png', 'slug'=>'Juego 12', 'category_id'=>6, 'visible'=>true, 'code'=>611],
['price'=>34, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 13', 'stract'=>'Juego 13', 'description'=>'Juego 13', 'image'=>'A13.png', 'slug'=>'Juego 13', 'category_id'=>4, 'visible'=>true, 'code'=>612],
['price'=>63, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 14', 'stract'=>'Juego 14', 'description'=>'Juego 14', 'image'=>'A14.png', 'slug'=>'Juego 14', 'category_id'=>6, 'visible'=>true, 'code'=>613],
['price'=>68, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 15', 'stract'=>'Juego 15', 'description'=>'Juego 15', 'image'=>'A15.png', 'slug'=>'Juego 15', 'category_id'=>5, 'visible'=>true, 'code'=>614],
['price'=>65, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 16', 'stract'=>'Juego 16', 'description'=>'Juego 16', 'image'=>'A16.png', 'slug'=>'Juego 16', 'category_id'=>3, 'visible'=>true, 'code'=>615],
['price'=>66, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 17', 'stract'=>'Juego 17', 'description'=>'Juego 17', 'image'=>'A17.png', 'slug'=>'Juego 17', 'category_id'=>9, 'visible'=>true, 'code'=>616],
['price'=>67, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 18', 'stract'=>'Juego 18', 'description'=>'Juego 18', 'image'=>'A18.png', 'slug'=>'Juego 18', 'category_id'=>10, 'visible'=>true, 'code'=>617],
['price'=>55, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 19', 'stract'=>'Juego 19', 'description'=>'Juego 19', 'image'=>'A19.png', 'slug'=>'Juego 19', 'category_id'=>2, 'visible'=>true, 'code'=>618],
['price'=>69, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 20', 'stract'=>'Juego 20', 'description'=>'Juego 20', 'image'=>'A20.png', 'slug'=>'Juego 20', 'category_id'=>9, 'visible'=>true, 'code'=>619],
['price'=>70, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 21', 'stract'=>'Juego 21', 'description'=>'Juego 21', 'image'=>'A21.png', 'slug'=>'Juego 21', 'category_id'=>8, 'visible'=>true, 'code'=>620],
['price'=>71, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 22', 'stract'=>'Juego 22', 'description'=>'Juego 22', 'image'=>'A22.png', 'slug'=>'Juego 22', 'category_id'=>10, 'visible'=>true, 'code'=>621],
['price'=>76, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 23', 'stract'=>'Juego 23', 'description'=>'Juego 23', 'image'=>'A23.png', 'slug'=>'Juego 23', 'category_id'=>3, 'visible'=>true, 'code'=>622],
['price'=>73, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 24', 'stract'=>'Juego 24', 'description'=>'Juego 24', 'image'=>'A24.png', 'slug'=>'Juego 24', 'category_id'=>10, 'visible'=>true, 'code'=>623],
['price'=>74, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 25', 'stract'=>'Juego 25', 'description'=>'Juego 25', 'image'=>'A25.png', 'slug'=>'Juego 25', 'category_id'=>5, 'visible'=>true, 'code'=>624],
['price'=>75, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 26', 'stract'=>'Juego 26', 'description'=>'Juego 26', 'image'=>'A26.png', 'slug'=>'Juego 26', 'category_id'=>4, 'visible'=>true, 'code'=>625],
['price'=>44, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 27', 'stract'=>'Juego 27', 'description'=>'Juego 27', 'image'=>'A27.png', 'slug'=>'Juego 27', 'category_id'=>8, 'visible'=>true, 'code'=>626],
['price'=>77, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 28', 'stract'=>'Juego 28', 'description'=>'Juego 28', 'image'=>'A28.png', 'slug'=>'Juego 28', 'category_id'=>5, 'visible'=>true, 'code'=>627],
['price'=>78, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 29', 'stract'=>'Juego 29', 'description'=>'Juego 29', 'image'=>'A29.png', 'slug'=>'Juego 29', 'category_id'=>9, 'visible'=>true, 'code'=>628],
['price'=>79, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 30', 'stract'=>'Juego 30', 'description'=>'Juego 30', 'image'=>'A30.png', 'slug'=>'Juego 30', 'category_id'=>6, 'visible'=>true, 'code'=>629],
['price'=>22, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 31', 'stract'=>'Juego 31', 'description'=>'Juego 31', 'image'=>'A31.png', 'slug'=>'Juego 31', 'category_id'=>7, 'visible'=>true, 'code'=>630],
['price'=>81, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 32', 'stract'=>'Juego 32', 'description'=>'Juego 32', 'image'=>'A32.png', 'slug'=>'Juego 32', 'category_id'=>6, 'visible'=>true, 'code'=>631],
['price'=>10, 'quantity'=>10, 'MIN_QUANTITY'=>2, 'NAME'=>'Juego 33', 'stract'=>'Juego 33', 'description'=>'Juego 33', 'image'=>'A33.png', 'slug'=>'Juego 33', 'category_id'=>7, 'visible'=>true, 'code'=>632]);
   Product::insert($datosataProduct);
   }
  }
