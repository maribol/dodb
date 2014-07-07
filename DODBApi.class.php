<?php

/**
 * Copyright (c) 2013 Samuel Todosiciuc.
 * All rights reserved.
 *
 * @package     Device Open DataBase
 * @author      Samuel Todosiciuc <samuel.todosiciuc@gmail.com>
 * @copyright   2014 Samuel Todosiciuc.
 * @link        https://github.com/maribol/
 */
class DODBApi
{

  private $_api_url;

  function __construct()
  {
    $this->_api_url = 'http://api.codebuzz.ro/dodb/';
  }

  /**
   * Get informations about a device model
   *
   * <b>Example:</b>
   * <code>
   *  print_r($dodb->getBrandModelInfo('Apple', 'iPhone 5s'));
   * </code>
   *
   * @param  string   $brand  brand name
   * @param  string   $model  model name
   * @param  boolean  $exact_model_name Define if the model name has to be exactly like this
   * or it only has to contain the requested model
   *
   * @return stdClass Object 
   */
  public function getBrandModelInfo($brand, $model, $exact_model_name = true)
  {
    $post_fields = array(
        'get' => 'model_info',
        'brand' => $brand,
        'model' => $model,
        'exact_model_name' => $exact_model_name
    );
    $json = json_decode($this->fetch($post_fields));
    return $json;
  }

  public function fetch($post_fields = array())
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->_api_url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($ch);
    curl_close($ch);
    return $json;
  }

}
