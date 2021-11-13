<?php
$sql = "SELECT * FROM tbl_country ORDER BY country_name";
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo($ex->getMessage());
}
?>
<label>Country:
    <select name="country" onChange="showState(this);">
        <option value="">Please Select</option>
        <?php foreach ($results as $rs) { ?>
            <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["country_name"]; ?></option>
        <?php } ?>
    </select>
</label>

Create two div container where you want both your state and city drop down to be displayed.
<!-- This will hold state dropdown -->
<div id="output1"></div> 
<!-- This will hold city dropdown -->
<div id="output2"></div>

Write the jquery code inside the function showState(). Add an ajax function that will call fetch_state.php which will return the drop down with the results based on the country.
<script>
function showState(sel) {
    var country_id = sel.options[sel.selectedIndex].value;  
    $("#output1").html( "" );
    $("#output2").html( "" );
    if (country_id.length > 0 ) { 
     $.ajax({
            type: "POST",
            url: "fetch_state.php",
            data: "country_id="+country_id,
            cache: false,
            beforeSend: function () { 
                $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
            },
            success: function(html) {    
                $("#output1").html( html );
            }
        });
    } 
}
</script>

In the page fetch_state.php assign the country_id in a variable and then execute a query based on that country id.
<?php
$country_id = ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
if ($country_id <> "") {
    $sql = "SELECT * FROM tbl_state WHERE country_id = :cid ORDER BY state_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($country_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
        <label>State: 
            <select name="state" onchange="showCity(this);">
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["state_name"]; ?></option>
                <?php } ?>
            </select>
        </label>
        <?php
    }
}
?>

Just repeat the above two step for fetching city, write the javascript/jquery code for fetching the city drop down via ajax, and again the php file that will return the city drop down.
<script>
function showCity(sel) {
    var state_id = sel.options[sel.selectedIndex].value;  
    if (state_id.length > 0 ) { 
     $.ajax({
            type: "POST",
            url: "fetch_city.php",
            data: "state_id="+state_id,
            cache: false,
            beforeSend: function () { 
                $('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
            },
            success: function(html) {    
                $("#output2").html( html );
            }
        });
    }
}
</script>

The file fetch_city.php that will return the city drop down.
<?php
$state_id = ($_REQUEST["state_id"] <> "") ? trim($_REQUEST["state_id"]) : "";
if ($state_id <> "") {
    $sql = "SELECT * FROM tbl_city WHERE state_id = :sid ORDER BY city_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($state_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        
        ?>
        <label>City: 
            <select name="city" name="box">
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["city_name"]; ?></option>
                <?php } ?>
            </select>
        </label>
        <?php
    }
}
?>