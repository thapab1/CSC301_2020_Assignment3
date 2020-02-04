<?php 
function jsonToArray(string $file){
	return json_decode(file_get_contents($file),true);
}

function displayList($apartments, $i){
    echo '<li class="list-group-item">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-3">
                        <img src="'.$apartments[$i]['house-img'].'" alt="room-'.$i.'" class="img-thumbnail img-responsive" style="max-height: 200px; max-width: 200px;">
                    </div>
                    <div class="col-7 text-left">
                        <p class="lead">'.$apartments[$i]['description'].'</p>
                    </div>
                    <div class="col-2">
                        <img src="'.$apartments[$i]['household-img'].'"
                            alt="houshold-'.$i.'" class="img-responsive rounded-circle"
                            style="max-height: 50px; max-width: 50px;">
                        <strong>'.$apartments[$i]['household-name'].'</strong>
                        <br>
                        <small>'.$apartments[$i]['lifestyle-occupation'].'</small>
                        <br>
                        <small>'.$apartments[$i]['household-sex'].', '.$apartments[$i]['household-age']. ' years old'.'</small> 
                        <hr class="small-margin-top">
                    </div>
                </div>
                <hr class="my-4">
                <p class="text-center">Price: '.$apartments[$i]['price'].'</p>
                <a class="btn btn-primary btn-lg float-right" href="detail.php?id='.$i.'" role="button">View</a>
            </div>
        </li>';
}

function displayDetail($apartments, $id){
    echo '<div class="row">
                <div class="col-9">
                    <h4>Description:</h4>
                    '. $apartments[$id]['description'] .'
                    <br><br>
                    <div class="row">
                        <div class="col-5">
                            <h4>About household:</h4>
                            <ul>
                                <li>Cleanliness: '. $apartments[$id]['lifestyle-cleanliness'] .'</li>
                                <li>Food: '. $apartments[$id]['lifestyle-food'] .'</li>
                                <li>Bedtime: '. $apartments[$id]['lifestyle-bedtime'] .'</li>
                                <li>Price asking: '. $apartments[$id]['price'] .'</li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <img src="'. $apartments[$id]['house-img'] .'" alt="room-'. $id .'" class="img-responsive" style="max-height: 400px; max-width: 400px;">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="'. $apartments[$id]['household-img'] .'" alt="houshold-'. $id .'" class="img-responsive rounded-circle" style="max-height: 100px; max-width: 100px;">
                    <strong>'. $apartments[$id]['household-name'] .'</strong>
                    <br>
                    <small>'. $apartments[$id]['lifestyle-occupation'] .'</small>
                    <br>
                    <small>'. $apartments[$id]['household-sex'].', '.$apartments[$id]['household-age']. ' years old'.'</small> 
                    <hr class="small-margin-top">
                    <p>Phone number: '. $apartments[$id]['phone-number'] .'</p>    
                </div>
            </div>';
}
?>