<button class="trigger">Zakaži sastanak</button>
<div class="modal">
    <div class="modal-content">
        <span class="close-button">×</span>
        <h3>Zakaži sastanak</h3>
        <div class="container">
        <?php

if(isset($_POST['schedule_appointment']))
{
    $schedule_appointment_name= $_POST['schedule_appointment_name'];
    $schedule_appointment_lastname = $_POST['schedule_appointment_lastname'];
    $schedule_appointment_email = $_POST['schedule_appointment_email'];
    $schedule_appointment_text = $_POST['schedule_appointment_text'];

    
    $query = "INSERT INTO invictius(schedule_appointment_name, schedule_appointment_lastname, schedule_appointment_email , schedule_appointment_text) ";
    $query .= "VALUES ('{$schedule_appointment_name}', '{$schedule_appointment_lastname}' , '{$schedule_appointment_email}', '{$schedule_appointment_text}')";

    $create_schedule_appointment_query = mysqli_query($connection, $query);
    if(!$create_mobile_apps_query)
    {
        die("query failed" . mysqli_error($connection));
    }
}
?>
        <form action="" method="post">
            <label for="fname">Ime</label>
            <input type="text" id="fname" name="schedule_appointment_name" placeholder="Unesite Vaše ime">

            <label for="lname">Prezime</label>
            <input type="text" id="lname" name="schedule_appointment_lastname" placeholder="Unesite Vaše prezime">

            <label for="email">Email</label>
            <input type="text" id="email" name="schedule_appointment_email" placeholder="Unesite Vaš email">

            <label for="subject">Opis</label>
            <textarea id="subject" name="schedule_appointment_text" placeholder="Unesite tekst" style="height:200px"></textarea>

            <input type="submit" value="Zakaži" name="schedule_appointment">
        </form>
        </div>
    </div>
</div>


