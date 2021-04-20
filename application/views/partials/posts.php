<?php   if($posts == "No Result"){ ?>
                <div class="post">
                    <p>No Posts Available</p>
                </div>
<?php   }
        else{
            foreach($posts as $post){ ?>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post["description"] ?></h5>
                            <p class="card-text text-right"><?= DATE("F j, Y", STRTOTIME($post["created_at"])) ?></p>
                        </div>
                    </div>
                </div>
<?php       } 
        }?>