<html>
    <head>
        <title> Form </title>
        <body>
            <form action="action_page.php" method="POST">
                <table border="1" cellpadding = "28" width="60">
                    <tr>
                        <th> Question </th>
                        <th> Answer </th>
                    </tr>
                     <tr>
                         <td> Name: </td>
                        <td> <input type="text" name="name" placeholder="Enter Fullname" value="Rizmark"> </td>
                    </tr>
                    <tr>
                        <td> Gender: </td>
                        <td>
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
                         </td>
                    </tr>
                    <tr>
                        <td> Country: </td>
                        <td>
                            <select name="country">
                                <option value="PH">Philippines</option>
                                <option value="AUS">Australia</option>
                                <option value="US" selected>United States</option>
                            </select>
                        </td>
                     </tr>
                    <tr>
                            <td colspan="2" style="text-align: left ;">
                                <input type="submit" name="submit" value="Save">
                             </td>
                    </tr>
                </table>
            </form>
        </body>
    </head>
</html>