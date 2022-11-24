<div class="container py-3">
    <h1 class="text-center display-5">Összes Pizzánk</h1>
    <h1 class="fs-5 pt-5"> <span class="fw-bold">Rendezés: </span><a href="">Név szerint növekvő</a> <a href="">Név szerint csökkenő</a> <a href="">Ár szerint növekvő</a> <a href="">Név szerint Csökkenő</a> </h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            
            <table class="table table-striped">
                <thead>
                    <tr class="fw-bold">
                        <td class="col-2">Név</td>
                        <td>Feltétek</td>
                        <td class="col-1">24 cm</td>
                        <td class="col-1">32 cm</td>
                        <td class="col-1">45 cm</td>
                        <td class="col-1"></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = Pizzak();
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>
                            <td><a href='./?p=adatlap&id=$row[ID]'> $row[nev]</td>";
                            if ($row['akcios'] == 1)
                            {
                                echo "<td> $row[feltet]</td>
                                <td class='fw-bold text-danger'>" . $row['ar'] * 0.9 ." Ft</td>
                                <td class='fw-bold text-danger'>" . $row['ar'] * 1.25 * 0.9 . " Ft</td>
                                <td class='fw-bold text-danger'>" . $row['ar'] * 1.50 * 0.9 . " Ft</td>
                                <td class='fw-bold text-danger'>Akciós</td>";
                            }
                            else
                            {
                                echo "<td> $row[feltet]</td>
                                <td>$row[ar] Ft </td>
                                <td>" . $row['ar'] * 1.25 . " Ft</td>
                                <td>" . $row['ar'] * 1.50  . " Ft</td>
                                <td></td>";
                               
                            }
                            echo "</tr>";
                        }
                    ?>

                   
                </tbody>
            </table>
                
        </div>
       
    </div>