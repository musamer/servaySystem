<?php

/**
 * Image manipulation class
 */

namespace Model;

defined('ROOTPATH') or exit('Access Denied!');

class Cities
{

   use Model;

   protected $table = 'cities';
   protected $primarykey = 'city_id';


   // public function show_cities()
   // {

   //    $data = $this->query("SELECT * FROM cities");
   //    show($data);
   // }

   public function add_city($data)
   {

      $this->insert($data);
   }

   public function edit_city()
   {
   }

   public function delete_city()
   {
   }
}
