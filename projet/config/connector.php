<?php
function connect1($host,$user,$password,$charset,$database) {
	$link = mysqli_connect ( $host, $user, $password ) or die ( '�<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
	mysqli_set_charset ( $link, $charset );
	mysqli_select_db ( $link, $database ) or die ( '<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
	return $link;
}

 
function connect2($config) {
	$link = mysqli_connect ( $config ['host'], $config ['user'], $config ['password'] ) or die ( '<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
	mysqli_set_charset ( $link, $config ['charset'] );
	mysqli_select_db ( $link, $config ['dbName'] ) or die ( '<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
	return $link;
}

function connect3(){
	$link = mysqli_connect ( DB_HOST, DB_USER, DB_PWD ) or die ( '<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
	mysqli_set_charset ( $link, DB_CHARSET );
	mysqli_select_db ( $link, DB_DBNAME ) or die ( '<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
	return $link;
}
function insert($link,$data,$table){
    $keys = join ( ",", array_keys ( $data ) );
    $vals = "'" . join ( "','", array_values ( $data ) ) . "'";
    $query = "INSERT {$table}({$keys}) VALUES({$vals})";
    $res = mysqli_query ( $link, $query );
    if ($res) {
        return mysqli_insert_id ( $link );
    } else {
        return false;
    }
}
function delete($link, $table, $where = null) {
    $where = $where ? ' WHERE ' . $where : '';
    $query = "DELETE FROM {$table} {$where}";
    $res = mysqli_query ( $link, $query );
    if ($res) {
        return mysqli_affected_rows ( $link );
    } else {
        return false;
    } 
}
function update($link, $data, $table, $where = null) {
    foreach ( $data as $key => $val ) {
        $set = "{$key}='{$val}',";
    }
    $set = trim ( $set, ',' );
    $where = $where == null ? '' : ' WHERE ' . $where;
    $query = "UPDATE {$table} SET {$set} {$where}";
    $res = mysqli_query ( $link, $query );
    if ($res) {
        return mysqli_affected_rows ( $link );
    } else {
        return false;
    }
}
function fetchOne($link, $query, $result_type = MYSQLI_ASSOC) {
    $result = mysqli_query ( $link, $query );
    if ($result && mysqli_num_rows ( $result ) > 0) {
        $row = mysqli_fetch_array ( $result, $result_type );
        return $row;
    } else {
        return false;
    }
}


function fetchAll($link, $query, $result_type = MYSQLI_ASSOC) {
    $result = mysqli_query ( $link, $query );
    if ($result && mysqli_num_rows ( $result ) > 0) {
        while ( $row = mysqli_fetch_array ( $result, $result_type ) ) {
            $rows [] = $row;
        }
        return $rows;
    } else {
        return false;
    }
}
function DiffDate($sdate,$edate){
    if(strtotime($edate)>strtotime($sdate)){
        $ymd=$sdate;
        $sdate=$edate;
        $edate=$ymd;
    }
    list($y1,$m1,$d1)=explode('-',$edate);
    list($y2,$m2,$d2)=explode('-',$sdate);
    $y=$m=$d=$_m=0;
    $math=($y2-$y1)*12+$m2-$m1;
    
    $d=$d2-$d1;
    if($d<0){
        $math-=1;
        $d=$math*30+$d;
        return $d;
        
    }
    else{
        $d=$math*30+$d;
        return $d;
    }
}