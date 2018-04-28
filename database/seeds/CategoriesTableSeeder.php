<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Categories
        $dataPrincipal = array(
          ["NAME"=>"PROMOCIONES","DESCRIPTION"=>"PROMOCIONES","ID"=>1,"SLUG"=>str_slug("promociones")],
          ["NAME"=>"PIZZAS MAS VENDIDAS","DESCRIPTION"=>"PIZZAS MAS VENDIDAD","ID"=>2,"SLUG"=>str_slug("pizzas mas vendidas")],
          ["NAME"=>"TODAS LAS PIZZAS","DESCRIPTION"=>"TODOS NUESTROAS PIZZAS","ID"=>3,"SLUG"=>str_slug("todas las pizzas")],
          ["NAME"=>"BEBIDAS","DESCRIPTION"=>"TODAS LAS AGUAS Y REFRESCOS","ID"=>4,"SLUG"=>str_slug("bebidas")],
          ["NAME"=>"ORILLA DE QUESO","DESCRIPTION"=>"CALIDAD QUESUNA","ID"=>5,"SLUG"=>str_slug("orilla de queso")],
          ["NAME"=>"RECOMENDACIONES DE LA CASA","DESCRIPTION"=>"LO MEJOR DEL MOMENTO","ID"=>6,"SLUG"=>str_slug("recomendaciones de la casa")],
          ["NAME"=>"PAQUETES FAMILIALES","DESCRIPTION"=>"PAQUETES PARA TODA LA FAMILIA","ID"=>7,"SLUG"=>str_slug("paquetes familiares")],
          ["NAME"=>"PAQUETES DE TEMPORADA","DESCRIPTION"=>"PAQUETES DE HOY","ID"=>8,"SLUG"=>str_slug("paquetes de temporada")],
          ["NAME"=>"SNACKS","DESCRIPTION"=>"COMPLEMENTOS","ID"=>9,"SLUG"=>str_slug("snacks")],
          ["NAME"=>"KITS","DESCRIPTION"=>"PAQUETES KITS","ID"=>10,"SLUG"=>str_slug("kits")]);
        Category::insert($dataPrincipal);
    }
}
