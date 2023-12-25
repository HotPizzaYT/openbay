<?php
    if(isset($_GET["q"])){
        $jsonfilelist = array_diff(scandir("db/"), array("..", "."));
        $results = array();
        foreach($jsonfilelist as $jsoncurr){
            $filecon = file_get_contents("db/".$jsoncurr);
            $jsonf = json_decode($filecon, true);
            if(str_contains(strtolower($jsonf["name"]), strtolower($_GET["q"]))){
                array_push($results, array(
                    "id"=>$jsonf["id"],
                    "category"=>$jsonf["category"],
                    "status"=>$jsonf["status"],
                    "name"=>$jsonf["name"],
                    "num_files"=>$jsonf["num_files"],
                    "size"=>$jsonf["size"],
                    "seeders"=>$jsonf["seeders"],
                    "leechers"=>$jsonf["leechers"],
                    "username"=>$jsonf["username"],
                    "added"=>$jsonf["added"],
                    "descr"=>$jsonf["descr"],
                    "imdb"=>$jsonf["imdb"],
                    "language"=>$jsonf["language"],
                    "textlanguage"=>$jsonf["textlanguage"],
                    "info_hash"=>$jsonf["info_hash"],
                    
                ));
            }
        }
        header('Content-Type: application/json; charset=utf-8');
        if($results === array()){
            $results = array(
                "id"=>"0",
                "name"=>"No results returned, you may not have a database set up!",
                "info_hash"=>"0000000000000000000000000000000000000000",
                "leechers"=>"0",
                "seeders"=>"0",
                "num_files"=>"0",
                "size"=>"0",
                "username"=>"",
                "added"=>"0",
                "status"=>"member",
                "category"=>"0",
                "imdb"=>"",
                "total_found"=>"1"
            );
        }
        echo json_encode($results);
    }