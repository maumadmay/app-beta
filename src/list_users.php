<?php require("../config/database.php");
    $sql_users = "SELECT 
	u.firstname||''||u.lastname as fullname,
	u.email,
	u.mobile_phone,
	case 
		when u.status = true then 'Active' else 'Inactive' end as status,
	u.profile_photo
    from users u;";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List users</title>
</head>
<body>
    <table border = "10px" align = "center" 
    style="border-radius: 11px; 
    background-color: blanchedalmond; 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    height: 100px; width: 700px;"> >
        <tr>
            <th>Full Name</th>
            <th>E-mail</th>
            <th>Mobile phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Options</th>
        </tr>
        <tr align = "center">
            <td>Juan Alvarez</td>
            <td>Juan@gmail.com</td>
            <td >31250879098</td>
            <td>Active</td>
            <td><img src="profile_photos\user_def.png" width="25px" alt="User Photo"></td>
            <td><a href="#"><img src="icons\lapiz.png" width ="25px"></a>
                <a href="#"><img src="icons\papelera.png" width ="25px"></a>
            </td>
        </tr>
    </table>
</body>
</html>