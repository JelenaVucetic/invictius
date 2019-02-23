 <!-- Trigger/Open The Modal -->
 <button class="myBtn" id="myBtn<?=$i++?>">Posalji upit</button>

<!-- The Modal -->
<div id="myModal" class="modal firstBlur">
    
<!-- Modal content -->
<div class="modal-content">
<span class="close">&times;</span>
        <!-- Model query -->

<?php

if(isset($_POST['create_service']))
{
    $mobile_app_name= $_POST['mobile_app_name'];
    $mobile_app_email = $_POST['mobile_app_email'];
    $mobile_app_description = $_POST['mobile_app_description'];
    $mobile_app_finish_time = $_POST['mobile_app_finish_time'];
    $mobile_app_budget = $_POST['mobile_app_budget'];
    
    $query = "INSERT INTO mobile_apps(mobile_app_name, mobile_app_email, mobile_app_description , mobile_app_finish_time, mobile_app_budget ) ";
    $query .= "VALUES ('{$mobile_app_name}', '{$mobile_app_email}' , '{$mobile_app_description}', '{$mobile_app_finish_time}','{$mobile_app_budget}')";

    $create_mobile_apps_query = mysqli_query($connection, $query);
    if(!$create_mobile_apps_query)
    {
        die("query failed" . mysqli_error($connection));
    }
}
?>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <h2>MOBILNE APLIKACIJE</h2>
        </div>
        <div class="personal_info">
            <div class="form-group">
            <label for="title">Ime i prezime</label> <br>
            <input type="text" class="form-control" name="mobile_app_name">
            </div>

            <div class="form-group">
            <label for="title">Email</label> <br>
            <input type="email" class="form-control" name="mobile_app_email">
            </div>
        </div>

       <!--  <div class="app_type">
            <div>
                <input type="radio" id="control_01" name="select" value="1" checked>
                <label for="control_01">
                    <h2>Pfft</h2>
                    <p>Awww, poor baby. Too afraid of the scary game sprites? I laugh at you.</p>
                </label>
            </div>
            <div>
                <input type="radio" id="control_02" name="select" value="2">
                <label for="control_02">
                    <h2>Wannabe</h2>
                    <p>You're not a gaming God by any stretch of the imagination.</p>
                </label>
            </div>
        </div> --> 

        <div class="form-group">
        <label for="content">Opis projekta</label> <br>
        <textarea class="form-control" name="mobile_app_description" id="" cols="45" rows="5"></textarea>
        </div>

        <br>
        
        <div class="time_and_money">
            <div class="form-group">
            <label for="time">Rok izrade</label>
                <div class="styled-select semi-square" name="mobile_app_finish_time">
                    <select>
                        <option></option>
                        <option>Što prije</option>
                        <option>Do 20 radnih dana</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
            <label for="time">Budžet</label>
                <div class="styled-select semi-square" name="mobile_app_budget">
                    <select>
                        <option></option>
                        <option>Do 500e</option>
                        <option>Od 500e do 1000e</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="button">
        <input class="btn btn-primary" id="btnService" type="submit" name="create_service" value="Posalji">
        </div>
    </form>
    
</div>
</div>