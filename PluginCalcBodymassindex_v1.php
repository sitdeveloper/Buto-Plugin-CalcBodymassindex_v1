<?php
/**
<p>
 Body Mass Index (BMI) calculator...
</p>
 */
class PluginCalcBodymassindex_v1{
  /**
   * Calc BMI.<br>
   * @param type $weight<br>
   * @param type $height<br>
   * @param type $round<br>
   * @return type<br>
   */
  public static function calcBmi($weight = null, $height = null, $round = null){
    if($weight && $height){
      $value = $weight / ($height/100 * $height/100);
      if(!$round){
        return $value;
      }else{
        return round($value, $round);
      }
    }else{
      return null;
    }
  }
}