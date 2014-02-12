<?php
/**
* Standard controller layout.
* 
* @package OrpheliaCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $lia;
      $lia->data['title'] = "The Index Controller";
      $lia->data['main'] = "<h1>The Index Controller</h1>";
   }

}