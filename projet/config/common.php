<?php
function alertMes($mes,$url){
    echo "<script>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
    die;
}