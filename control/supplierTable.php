<!DOCTYPE html>
<html>
    <body>
        <center>
            <table border='1' width="70%">
                <thead> 
                        <tr>
                            <th>Customer Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Data Of birth</th>
                            <th>Gender</th>
                            <th>Company</th>
                            <th>Supplier</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        $load = file_get_contents("http://localhost/Pharmacy24/view/admin/supplierData.json");
                        $user =  json_decode($load);

                        foreach($user as $key=>$userData){
                            
                            echo 
                            " 
                            <center>
                            <tr>
                                <td><p>$userData->name</p></td>
                                <td><p>$userData->username</p></td>
                                <td><p>$userData->email</p></td>
                                <td><p>$userData->dateofbirth</p></td>
                                <td><p>$userData->gender</p></td>
                                <td><p>$userData->company</p></td>
                                <td><p>$userData->status</p></td>
                            </tr>
                            </center>
                            ";
                    }?>
                </tbody>
            </table>
        </center>
    </body>
</html>