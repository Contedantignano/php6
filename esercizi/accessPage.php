
<table>
    <form method="post" action="elabora.php">
    <tr>
        <td><label for="font">Select Font:</label></td>
        <td><select id="font" name="font">
                <option value="Verdana">Verdana</option>
                <option value="Arial">Arial</option>
                <option value="Times New Romans">Times New Romans</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="size">Select Size:</label></td>
        <td><select id="size" name="size">
                <option value="10px">10px</option>
                <option value="12px">12px</option>
                <option value="16px">16px</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="color">Select Color:</label></td>
        <td><select id="color" name="color">
                <option value="black">Black</option>
                <option value="green">Green</option>
                <option value="purple">Purple</option>
            </select>
        </td>
    </tr>
        <br/>
    <input type="submit" name="submit" value="Submit"/>
</form>
