<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
  <form action="form4a.php" method="post">
   <table>
    <tr>
     <td>Name</td>
     <td><input type="text" name="name" /></td>
    </tr><tr>
     <td>Item Type</td>
     <td>
      <input type="radio" name="type" value="movie" checked="checked" /> Movie<br/>
      <input type="radio" name="type" value="actor" /> Actor<br/>
      <input type="radio" name="type" value="director"/> Director<br/>
     </td>
    </tr><tr>
     <td>Movie Type<br/><small>(if applicable)</small></td>
     <td>
      <select name="movie_type">
       <option value="">Select a movie type...</option>
       <option value="Action">Action</option>
       <option value="Drama">Drama</option>
       <option value="Comedy">Comedy</option>
       <option value="Sci-Fi">Sci-Fi</option>
       <option value="War">War</option>
       <option value="Other">Other...</option>
      </select>
     </td>
    </tr><tr>
     <td> </td>
     <td><input type="checkbox" name="debug" checked="checked" />
      Display Debug info
     </td>
    </tr><tr>
     <td colspan="2" style="text-align: center;">
      <input type="submit" name="submit" value="Search" /> 
      <input type="submit" name="submit" value="Add" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>