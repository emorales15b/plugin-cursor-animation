<?php
wp_enqueue_script( 'functions_dashboard', plugin_dir_url( __FILE__ ) . 'js/functions.js', array ( 'jquery' ), 1.1, true);
?>
<div>MyPlugin</div>
<div>Erick Giovanny Morales Bustamante<div>
<div>Efectos</div>
    <select id="efectos">
    <option value="estrellas">Estrellas</option>
    <option value="burbujas">Burbujas</option>
    <option value="explosion">Explosion</option>
    </select>
    <button id="btn_myplugin" class="button button-primary">Guardar</button>
