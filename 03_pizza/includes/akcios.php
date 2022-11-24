<div class="container py-3">
    <h1 class="text-center display-5">Akciós Pizzák</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php
                    $result = Akcios();
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "
                        <div class='col'>
                            <a class='fs-1' href=''./?p=adatlap&id=$row[ID]>$row[nev] </a>
                            
                            <p class='fs-5'> 
                                $row[feltet]
                            <p>
                            <p class='fs-5 fw-bold'> 
                                Akciós ár (24 cm):
                            <p>
                            <p class='fs-5'>  
                               <s>$row[ar] Ft</s> helyett <span class ='text-danger fw-bold'>" . $row['ar']*0.9 . " Ft </span>
                            <p>
                            <p class='fs-5'>  
                                
                            <p>
                            <a class='fs-5 text-end' href=''./?p=adatlap&id=$row[ID]>További méretek</a>
                            <hr>
                        </div>";
                    }
                ?>
        </div>
       
    </div>