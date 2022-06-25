<!-- TODO Employee view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <link rel="stylesheet" href="<?=MAIN_CSS?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="<?=INDEX_JS?>" defer></script>
</head>
<body>
    
    <div class="d-flex flex-column align-items-center">
    
        <!-- <?php
    
        // if (isset($_GET['status']) && $_GET['status'] == "employeeUpdated") {
        //     echo "
        //     <div id='success' class='alert alert-success' role='alert'>
        //     </div>";
        // }
    
        // $jsonData = file_get_contents('../resources/employees.json');
        // $data = json_decode($jsonData, true);
    
        // $newEmployee = end($data);
        // $currentEmployee = [];
    
        // if (isset($_GET['employee'])) {
        //     foreach ($data as $user) {
        //         if ($user["id"] == $_GET['employee']) {
        //             $currentEmployee = $user;
        //         }
        //     }
        // }
        ?> -->
    
        <form method="POST" action="./library/employeeController.php" class="employee-form" autocomplete="off">
            <div class="form-row">
                <input type="hidden" name="id" id="id" class="d-none" value=<?= isset($data->id) ? $data->id : "" ?>>
                <input type="hidden" name="avatar-field" id="avatar-field" class="d-none">
                <div>
                    <label for="name">Name</label>
                    <input class="form-input" type="text" name="name" id="name" required value=<?= isset($data->name) ? $data->name : "" ?>>
                </div>
                <div>
                    <label for="last-name">Last Name</label>
                    <input class="form-input" type="text" name="lastName" id="lastName" required value=<?= isset($data->lastName) ? $data["lastName"] : "" ?>>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="email-address">Email address</label>
                    <input class="form-input" type="email" name="email" id="email" required value=<?= isset($data->email) ? $data->email : "" ?>>
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select class="form-input" name="gender" id="gender">
                        <option><?= isset($data->employee) ? ucfirst($data->gender) : "" ?></option>
                        <option <?= isset($data->employee) ? "" : "selected" ?>>Man</option>
                        <option>Woman</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="city">City</label>
                    <input class="form-input" type="text" name="city" id="city" required value=<?= isset($data->city) ? $data->city : "" ?>>
                </div>
                <div>
                    <label for="street-address">Street Address</label>
                    <input class="form-input" type="number" name="streetAddress" id="streetAddress" required value=<?= isset($data->streetadress) ? $data->streetadress : "" ?>>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="state">State</label>
                    <input class="form-input" type="text" name="state" id="state" required value=<?= isset($data->state) ? $data->state : "" ?>>
                </div>
                <div>
                    <label for="age">Age</label>
                    <input class="form-input" type="number" name="age" id="age" required value=<?= isset($data->age) ? $data->age : "" ?>>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="postal-code">Postal Code</label>
                    <input class="form-input" type="number" name="postalCode" id="postalCode" required value=<?= isset($data->postalcode) ? $data->postalcode : "" ?>>
                </div>
                <div>
                    <label for="phone-number">Phone Number</label>
                    <input class="form-input" type="number" name="phoneNumber" id="phoneNumber" required value=<?= isset($data->phonenumber) ? $data->phonenumber : "" ?>>
                </div>
            </div>
            <div class="btn-container">
                <button id="editBtn" type="submit" class="btn-submit">
                    <span><?= isset($data->employee) ? "Edit" : "Submit" ?></span><i></i> <!--Need to redefine it other way-->
                </button>
                <a href="<?=BASE_URL . 'dashboard';?>" class="btn-return">
                    <span>Return</span><i></i>
                </a>
            </div>
    </div>
    </form>
    </div>
    
    <div class="quote">
        “There are two ways to write error-free programs; only the third works.”
    </div>
</body>

</html>